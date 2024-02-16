from flask import Flask, request
from urllib.parse import urljoin
import requests
import re

# Code Updated By (Mr Spider)

app = Flask(__name__)

headers = {
    'Referer': 'https://pipcast.cc/'
}

def get_base_url(url):
    return urljoin(url, ".")

@app.route("/")
def index():
    channel_id = request.args.get("id")

    source_code = requests.get(f"https://pipcast.cc/embed.php?v={channel_id}&vw=100%&vh=100%").text
    pattern = r"source:\s*['\"](.*?)['\"]"
    match = re.search(pattern, source_code)
    token_url = match.group(1)
    response = requests.get(token_url, headers=headers)
    lines = response.text.splitlines()
    for index, line in enumerate(lines):
        if ".ts" in line:
            lines[index] = "/ts?id=" + line + "&base=" + get_base_url(get_base_url(token_url))      

    return "\n".join(lines)

@app.route("/ts")
def handle_ts():
    ts_id = request.args.get("id")
    base = request.args.get("base")
    response = requests.get(base + ts_id, headers=headers)
    return response.content

app.run(debug=True)
