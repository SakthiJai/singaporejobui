;
(self.AMP=self.AMP||[]).push({m:0,v:"2203101844000",n:"amp-recaptcha-input",ev:"0.1",l:!0,f:function(t,n){!function(){function n(t,r){return(n=Object.setPrototypeOf||function(t,n){return t.__proto__=n,t})(t,r)}function r(t){return(r=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function e(t){return(e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function i(t,n){if(n&&("object"===e(n)||"function"==typeof n))return n;if(void 0!==n)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}var f="name";function o(t,n){(null==n||n>t.length)&&(n=t.length);for(var r=0,e=new Array(n);r<n;r++)e[r]=t[r];return e}function u(t,n){var r="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(r)return(r=r.call(t)).next.bind(r);if(Array.isArray(t)||(r=function(t,n){if(t){if("string"==typeof t)return o(t,n);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?o(t,n):void 0}}(t))||n&&t&&"number"==typeof t.length){r&&(t=r);var e=0;return function(){return e>=t.length?{done:!0}:{done:!1,value:t[e++]}}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}Array.isArray;var a,s=Object.prototype;function c(t){var n=Object.create(null);return t&&Object.assign(n,t),n}function h(t){var n=Object.getOwnPropertyDescriptor(t,"message");if(null!=n&&n.writable)return t;var r=t.message,e=t.stack,i=new Error(r);for(var f in t)i[f]=t[f];return i.stack=e,i}function l(t){for(var n,r=null,e="",i=u(arguments,!0);!(n=i()).done;){var f=n.value;f instanceof Error&&!r?r=h(f):(e&&(e+=" "),e+=f)}return r?e&&(r.message=e+": "+r.message):r=new Error(e),r}function p(t){var n,r;null===(n=(r=self).__AMP_REPORT_ERROR)||void 0===n||n.call(r,t)}s.hasOwnProperty,s.toString;var v=["Webkit","webkit","Moz","moz","ms","O","o"];function m(t,n,r,e,i){var f=function(t,n,r){if(n.startsWith("--"))return n;a||(a=c());var e=a[n];if(!e||r){if(e=n,void 0===t[n]){var i=function(t){return t.charAt(0).toUpperCase()+t.slice(1)}(n),f=function(t,n){for(var r=0;r<v.length;r++){var e=v[r]+n;if(void 0!==t[e])return e}return""}(t,i);void 0!==t[f]&&(e=f)}r||(a[n]=e)}return e}(t.style,n,i);if(f){var o,u=e?r+e:r;t.style.setProperty((o=f.replace(/[A-Z]/g,(function(t){return"-"+t.toLowerCase()})),v.some((function(t){return o.startsWith(t+"-")}))?"-".concat(o):o),u)}}var d=self.AMP_CONFIG||{},b=("string"==typeof d.thirdPartyFrameRegex?new RegExp(d.thirdPartyFrameRegex):d.thirdPartyFrameRegex)||/^d-\d+\.ampproject\.net$/,g=("string"==typeof d.cdnProxyRegex?new RegExp(d.cdnProxyRegex):d.cdnProxyRegex)||/^https:\/\/([a-zA-Z0-9_-]+\.)?cdn\.ampproject\.org$/;function w(t){if(!self.document||!self.document.head)return null;if(self.location&&g.test(self.location.origin))return null;var n=self.document.head.querySelector('meta[name="'.concat(t,'"]'));return n&&n.getAttribute("content")||null}var y={thirdParty:d.thirdPartyUrl||"https://3p.ampproject.net",thirdPartyFrameHost:d.thirdPartyFrameHost||"ampproject.net",thirdPartyFrameRegex:b,cdn:d.cdnUrl||w("runtime-host")||"https://cdn.ampproject.org",cdnProxyRegex:g,localhostRegex:/^https?:\/\/localhost(:\d+)?$/,errorReporting:d.errorReportingUrl||"https://us-central1-amp-error-reporting.cloudfunctions.net/r",betaErrorReporting:d.betaErrorReportingUrl||"https://us-central1-amp-error-reporting.cloudfunctions.net/r-beta",localDev:d.localDev||!1,trustedViewerHosts:[/(^|\.)google\.(com?|[a-z]{2}|com?\.[a-z]{2}|cat)$/,/(^|\.)gmail\.(com|dev)$/],geoApi:d.geoApiUrl||w("amp-geo-api")};self.__AMP_LOG=self.__AMP_LOG||{user:null,dev:null,userForEmbed:null};var x=self.__AMP_LOG;function j(t,n){throw new Error("failed to call initLogConstructor")}function E(t){return x.user||(x.user=k()),function(t,n){return n&&n.ownerDocument.defaultView!=t}(x.user.win,t)?x.userForEmbed||(x.userForEmbed=k()):x.user}function k(t){return j()}function R(t,n,r,e,i,f,o,u,a,s,c){return t}function z(t,n,r,e,i,f,o,u,a,s,c){return E().assert(t,n,r,e,i,f,o,u,a,s,c)}var O=function(){var t=this;this.promise=new Promise((function(n,r){t.resolve=n,t.reject=r}))};function S(t,n){try{return function(t){return JSON.parse(t)}(t)}catch(t){return null==n||n(t),null}}function P(t){return t.nodeType?(r=t,n=(r.ownerDocument||r).defaultView,function(t,n){return I(t=function(t){return t.__AMP_TOP||(t.__AMP_TOP=t)}(t),"ampdoc")}(n)).getAmpDoc(t):t;var n,r}function q(t){var n=P(t);return n.isSingleDoc()?n.win:n}function I(t,n){R(U(t,n));var r=A(t)[n];return r.obj||(R(r.ctor),R(r.context),r.obj=new r.ctor(r.context),R(r.obj),r.context=null,r.resolve&&r.resolve(r.obj)),r.obj}function A(t){var n=t.__AMP_SERVICES;return n||(n=t.__AMP_SERVICES={}),n}function U(t,n){var r=t.__AMP_SERVICES&&t.__AMP_SERVICES[n];return!(!r||!r.ctor)}var C;function F(t){return t.data}function $(t,n,r,e){var i=r,f=function(t,n,r,e){var i=t,f=r,o=function(t){try{return f(t)}catch(t){var n,r;throw null===(n=(r=self).__AMP_REPORT_ERROR)||void 0===n||n.call(r,t),t}},u=function(){if(void 0!==C)return C;C=!1;try{var t={get capture(){return C=!0,!1}};self.addEventListener("test-options",null,t),self.removeEventListener("test-options",null,t)}catch(t){}return C}(),a=!(null==e||!e.capture);return i.addEventListener(n,o,u?e:a),function(){null==i||i.removeEventListener(n,o,u?e:a),f=null,i=null,o=null}}(t,n,(function(t){try{i(t)}finally{i=null,f()}}),e);return f}function N(t){return"AUDIO"===t.tagName||"VIDEO"===t.tagName}function T(t){return"string"==typeof t&&t.startsWith("amp-")&&-1!=t.indexOf("{")}var M,D,Z=function(){function t(t){this.Wt=t,this.Kt=0,this.Qt=0,this.Xt=c()}var n=t.prototype;return n.has=function(t){return!!this.Xt[t]},n.get=function(t){var n=this.Xt[t];if(n)return n.access=++this.Qt,n.payload},n.put=function(t,n){this.has(t)||this.Kt++,this.Xt[t]={payload:n,access:this.Qt},this.Yt()},n.Yt=function(){if(!(this.Kt<=this.Wt)){var t,n=this.Xt,r=this.Qt+1;for(var e in n){var i=n[e].access;i<r&&(r=i,t=e)}void 0!==t&&(delete n[t],this.Kt--)}},t}(),H=new Set(["c","v","a","ad"]),J=function(t){return"string"==typeof t?_(t):t};function _(t,n){return M||(M=self.document.createElement("a"),D=self.__AMP_URL_CACHE||(self.__AMP_URL_CACHE=new Z(100))),function(t,n,r){if(r&&r.has(n))return r.get(n);t.href=n,t.protocol||(t.href=t.href);var e,i={href:t.href,protocol:t.protocol,host:t.host,hostname:t.hostname,port:"0"==t.port?"":t.port,pathname:t.pathname,search:t.search,hash:t.hash,origin:null};"/"!==i.pathname[0]&&(i.pathname="/"+i.pathname),("http:"==i.protocol&&80==i.port||"https:"==i.protocol&&443==i.port)&&(i.port="",i.host=i.hostname),e=t.origin&&"null"!=t.origin?t.origin:"data:"!=i.protocol&&i.host?i.protocol+"//"+i.host:i.href,i.origin=e;var f=i;return r&&r.put(n,f),f}(M,t,n?null:D)}var B="unlisten";function L(t,n,r){var e=function(t,n){var r=t.listeningFors;return!r&&n&&(r=t.listeningFors=Object.create(null)),r||null}(t,r);if(!e)return e;var i=e[n];return!i&&r&&(i=e[n]=[]),i||null}function V(t,n){for(var r=n;r&&r!=r.parent;r=r.parent)if(r==t)return!0;return!1}function Y(t){for(var n={"sentinel":B},r=t.length-1;r>=0;r--){var e=t[r];if(!e.frame.contentWindow){t.splice(r,1);var i=e.events;for(var f in i)i[f].splice(0,1/0).forEach((function(t){t(n)}))}}}function G(t,n){return n?t.getAttribute("data-amp-3p-sentinel"):"amp"}var W="ase art bmp blp cd5 cit cpt cr2 cut dds dib djvu egt exif gif gpl grf icns ico iff jng jpeg jpg jfif jp2 jps lbm max miff mng msp nitf ota pbm pc1 pc2 pc3 pcf pcx pdn pgm PI1 PI2 PI3 pict pct pnm pns ppm psb psd pdd psp px pxm pxr qfx raw rle sct sgi rgb int bw tga tiff tif vtf xbm xcf xpm 3dv amf ai awg cgm cdr cmx dxf e2d egt eps fs gbr odg svg stl vrml x3d sxd v2d vnd wmf emf art xar png webp jxr hdp wdp cur ecw iff lbm liff nrrd pam pcx pgf sgi rgb rgba bw int inta sid ras sun tga".split(" "),K="### #gf $on $tf 0b 8m 8u 12u 15u 64c 075 75 085 85 91 091 096 96 abf acfm acs afm afn afs all amfm apf asf aspf atm auf b30 bco bdf bepf bez bfn bmap bmf bx bzr cbtf cct cef cff cfn cga ch4 cha chm chr chx claf collection compositefont dfont dus dzk eft eot etx euf f00 f06 f08 f09 f3f f10 f11 f12 f13 f16 fd fdb ff ffil flf fli fn3 fnb fnn fnt fnta fo1 fo2 fog fon font fonts fot frf frs ftm fxr fyi gdr gf gft glf glif glyphs gsf gxf hbf ice intellifont lepf lft lwfn mcf mcf mfd mfm mft mgf mmm mrf mtf mvec nlq ntf odttf ofm okf otf pcf pcf pfa pfb pfm pft phf pk pkt prs pss qbf qfn r8? scr sfd sff sfi sfl sfn sfo sfp sfs sif snf spd spritefont sui suit svg sxs t1c t2 tb1 tb2 tdf tfm tmf tpf ttc tte ttf type ufm ufo usl usp us? vf vf1 vf3 vfb vfm vfont vlw vmf vnf w30 wfn wnf woff woff2 xfc xfn xfr xft zfi zsu _v".split(" "),Q="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:{};function X(t,n){if(n=n.split(":")[0],!(t=+t))return!1;switch(n){case"http":case"ws":return 80!==t;case"https":case"wss":return 443!==t;case"ftp":return 21!==t;case"gopher":return 70!==t;case"file":return!1}return 0!==t}var tt=Object.prototype.hasOwnProperty,nt=function(t,n){n=n||"";var r=[];for(var e in"string"!=typeof n&&(n="?"),t)tt.call(t,e)&&r.push(encodeURIComponent(e)+"="+encodeURIComponent(t[e]));return r.length?n+r.join("&"):""},rt=function(t){for(var n,r=/([^=?&]+)=?([^&]*)/g,e={};n=r.exec(t);){var i=decodeURIComponent(n[1].replace(/\+/g," "));n=decodeURIComponent(n[2].replace(/\+/g," ")),i in e||(e[i]=n)}return e},et=/^([a-z][a-z0-9.+-]*:)?(\/\/)?([\S\s]*)/i,it=/^[A-Za-z][A-Za-z0-9+-.]*:\/\//,ft=[["#","hash"],["?","query"],function(t){return t.replace("\\","/")},["/","pathname"],["@","auth",1],[NaN,"host",void 0,1,1],[/:(\d+)$/,"port",void 0,1],[NaN,"hostname",void 0,1,1]],ot={hash:1,query:1};function ut(t,n,r){if(!(this instanceof ut))return new ut(t,n,r);var i=ft.slice(),f=e(n),o=0;"object"!==f&&"string"!==f&&(r=n,n=null),r&&"function"!=typeof r&&(r=rt),f=Q&&Q.location||{},n=n||f,f={};var u=e(n);if("blob:"===n.protocol)f=new ut(unescape(n.pathname),{});else if("string"===u)for(a in f=new ut(n,{}),ot)delete f[a];else if("object"===u){for(a in n)a in ot||(f[a]=n[a]);void 0===f.slashes&&(f.slashes=it.test(n.href))}n=f;var a=et.exec(t||"");for(t=a[1]?a[1].toLowerCase():"",f=!!a[2],u=a[3],a=!t&&!f,this.slashes=f||a&&n.slashes,this.protocol=t||n.protocol||"",t=u,f||(i[3]=[/(.*)/,"pathname"]);o<i.length;o++)if("function"==typeof(f=i[o]))t=f(t);else{var s=f[0];u=f[1],s!=s?this[u]=t:"string"==typeof s?~(s=t.indexOf(s))&&("number"==typeof f[2]?(this[u]=t.slice(0,s),t=t.slice(s+f[2])):(this[u]=t.slice(s),t=t.slice(0,s))):(s=s.exec(t))&&(this[u]=s[1],t=t.slice(0,s.index)),this[u]=this[u]||a&&f[3]&&n[u]||"",f[4]&&(this[u]=this[u].toLowerCase())}if(r&&(this.query=r(this.query)),a&&n.slashes&&"/"!==this.pathname.charAt(0)&&(""!==this.pathname||""!==n.pathname)){for(r=this.pathname,o=(r=(n.pathname||"/").split("/").slice(0,-1).concat(r.split("/")))[(i=r.length)-1],n=!1,t=0;i--;)"."===r[i]?r.splice(i,1):".."===r[i]?(r.splice(i,1),t++):t&&(0===i&&(n=!0),r.splice(i,1),t--);n&&r.unshift(""),"."!==o&&".."!==o||r.push(""),this.pathname=r.join("/")}X(this.port,this.protocol)||(this.host=this.hostname,this.port=""),this.username=this.password="",this.auth&&(f=this.auth.split(":"),this.username=f[0]||"",this.password=f[1]||""),this.origin=this.protocol&&this.host&&"file:"!==this.protocol?this.protocol+"//"+this.host:"null",this.href=this.toString()}ut.prototype={set:function(t,n,r){switch(t){case"query":"string"==typeof n&&n.length&&(n=(r||rt)(n)),this[t]=n;break;case"port":this[t]=n,X(n,this.protocol)?n&&(this.host=this.hostname+":"+n):(this.host=this.hostname,this[t]="");break;case"hostname":this[t]=n,this.port&&(n+=":"+this.port),this.host=n;break;case"host":this[t]=n,/:\d+$/.test(n)?(n=n.split(":"),this.port=n.pop(),this.hostname=n.join(":")):(this.hostname=n,this.port="");break;case"protocol":this.protocol=n.toLowerCase(),this.slashes=!r;break;case"pathname":case"hash":n?(r="pathname"===t?"/":"#",this[t]=n.charAt(0)!==r?r+n:n):this[t]=n;break;default:this[t]=n}for(t=0;t<ft.length;t++)(n=ft[t])[4]&&(this[n[1]]=this[n[1]].toLowerCase());return this.origin=this.protocol&&this.host&&"file:"!==this.protocol?this.protocol+"//"+this.host:"null",this.href=this.toString(),this},toString:function(t){t&&"function"==typeof t||(t=nt);var n=this.protocol;return n&&":"!==n.charAt(n.length-1)&&(n+=":"),n+=this.slashes?"//":"",this.username&&(n+=this.username,this.password&&(n+=":"+this.password),n+="@"),n+=this.host+this.pathname,(t="object"===e(this.query)?t(this.query):this.query)&&(n+="?"!==t.charAt(0)?"?"+t:t),this.hash&&(n+=this.hash),n}},ut.extractProtocol=null,ut.location=null,ut.qs=null;var at=/^xn--/,st=/[^\x20-\x7E]/,ct=/[\x2E\u3002\uFF0E\uFF61]/g,ht={overflow:"Overflow: input needs wider integers to process","not-basic":"Illegal input >= 0x80 (not a basic code point)","invalid-input":"Invalid input"},lt=Math.floor,pt=String.fromCharCode;function vt(t){throw new RangeError(ht[t])}function mt(t,n){for(var r=t.length,e=[];r--;)e[r]=n(t[r]);return e}function dt(t,n){var r=t.split("@"),e="";return 1<r.length&&(e=r[0]+"@",t=r[1]),e+mt(t=(t=t.replace(ct,".")).split("."),n).join(".")}function bt(t,n){return t+22+75*(26>t)-((0!=n)<<5)}function gt(t,n,r){var e=0;for(t=r?lt(t/700):t>>1,t+=lt(t/n);455<t;e+=36)t=lt(t/35);return lt(e+36*t/(t+38))}var wt=function(t){return dt(t,(function(t){return at.test(t)?function(t){var n,r,e=[],i=t.length,f=0,o=128,u=72,a=t.lastIndexOf("-");for(0>a&&(a=0),n=0;n<a;++n)128<=t.charCodeAt(n)&&vt("not-basic"),e.push(t.charCodeAt(n));for(a=0<a?a+1:0;a<i;){n=f;var s=1;for(r=36;;r+=36){a>=i&&vt("invalid-input");var c=t.charCodeAt(a++);(36<=(c=10>c-48?c-22:26>c-65?c-65:26>c-97?c-97:36)||c>lt((2147483647-f)/s))&&vt("overflow"),f+=c*s;var h=r<=u?1:r>=u+26?26:r-u;if(c<h)break;s>lt(2147483647/(c=36-h))&&vt("overflow"),s*=c}u=gt(f-n,s=e.length+1,0==n),lt(f/s)>2147483647-o&&vt("overflow"),o+=lt(f/s),f%=s,e.splice(f++,0,o)}return function(t){return mt(t,(function(t){var n="";return 65535<t&&(n+=pt((t-=65536)>>>10&1023|55296),t=56320|1023&t),n+pt(t)})).join("")}(e)}(t.slice(4).toLowerCase()):t}))},yt=/[A-Za-z\u00c0-\u00d6\u00d8-\u00f6\u00f8-\u02b8\u0300-\u0590\u0800-\u1fff\u200e\u2c00-\ufb1c\ufe00-\ufe6f\ufefd-\uffff]/,xt=/[\u0591-\u06ef\u06fa-\u07ff\u200f\ufb1d-\ufdff\ufe70-\ufefc]/;function jt(t){t=new ut(t).hostname;var n=wt(t);return(n=63>=t.length&&!(yt.test(n)&&xt.test(n))&&-1!=t.indexOf("."))?63<(n=function(t){return dt(t,(function(t){return st.test(t)?"xn--"+function(t){var n,r,e,i=[],f=(t=function(t){for(var n,r,e=[],i=0,f=t.length;i<f;)55296<=(n=t.charCodeAt(i++))&&56319>=n&&i<f?56320==(64512&(r=t.charCodeAt(i++)))?e.push(((1023&n)<<10)+(1023&r)+65536):(e.push(n),i--):e.push(n);return e}(t)).length,o=128,u=0,a=72;for(e=0;e<f;++e){var s=t[e];128>s&&i.push(pt(s))}for((n=r=i.length)&&i.push("-");n<f;){var c=2147483647;for(e=0;e<f;++e)(s=t[e])>=o&&s<c&&(c=s);var h=n+1;for(c-o>lt((2147483647-u)/h)&&vt("overflow"),u+=(c-o)*h,o=c,e=0;e<f;++e)if((s=t[e])<o&&2147483647<++u&&vt("overflow"),s==o){var l=u;for(c=36;!(l<(s=c<=a?1:c>=a+26?26:c-a));c+=36){var p=l-s;l=36-s,i.push(pt(bt(s+p%l,0))),l=lt(p/l)}i.push(pt(bt(l,0))),a=gt(u,h,n==r),u=0,++n}++u,++o}return i.join("")}(t):t}))}(n=(n=(n=wt(t)).split("-").join("--")).split(".").join("-")).toLowerCase()).length?Et(t):Promise.resolve(n):Et(t)}function Et(t){return function(t){if("undefined"!=typeof window)return t=new TextEncoder("utf-8").encode(t),crypto.subtle.digest("SHA-256",t).then((function(t){var n=[];t=new DataView(t);for(var r=0;r<t.byteLength;r+=4){var e=("00000000"+t.getUint32(r).toString(16)).slice(-8);n.push(e)}return n.join("")}));var n=Buffer.from(t,"utf-8"),r={};return new Promise((function(t){t(r.createHash("sha256").update(n).digest("hex"))}))}(t).then((function(t){return function(t){var n=[];t.match(/.{1,2}/g).forEach((function(t,r){n[r]=parseInt(t,16)}));var r=n.length%5,e=Math.floor(n.length/5);if(t=[],0!=r){for(var i=0;i<5-r;i++)n+="\0";e+=1}for(i=0;i<e;i++)t.push("abcdefghijklmnopqrstuvwxyz234567".charAt(n[5*i]>>3)),t.push("abcdefghijklmnopqrstuvwxyz234567".charAt((7&n[5*i])<<2|n[5*i+1]>>6)),t.push("abcdefghijklmnopqrstuvwxyz234567".charAt((63&n[5*i+1])>>1)),t.push("abcdefghijklmnopqrstuvwxyz234567".charAt((1&n[5*i+1])<<4|n[5*i+2]>>4)),t.push("abcdefghijklmnopqrstuvwxyz234567".charAt((15&n[5*i+2])<<1|n[5*i+3]>>7)),t.push("abcdefghijklmnopqrstuvwxyz234567".charAt((127&n[5*i+3])>>2)),t.push("abcdefghijklmnopqrstuvwxyz234567".charAt((3&n[5*i+3])<<3|n[5*i+4]>>5)),t.push("abcdefghijklmnopqrstuvwxyz234567".charAt(31&n[5*i+4]));for(e=0,1==r?e=6:2==r?e=4:3==r?e=3:4==r&&(e=1),r=0;r<e;r++)t.pop();for(r=0;r<e;r++)t.push("=");return t.join("")}("ffffffffff"+t+"000000").substr(8,Math.ceil(4*t.length/5))}))}var kt={createCacheUrl:function(t,n){var r=new ut(n),e=function(t){return function(t){return W.some((function(n){return!!t.endsWith(n)}))}(t)?"/i":function(t){return K.some((function(n){return!!t.endsWith(n)}))}(t)?"/r":"/c"}(r.pathname);return e+="https:"===r.protocol?"/s/":"/",jt(r.toString()).then((function(i){var f=new ut(n);return f.protocol="https",i=i+"."+t,f.host=i,f.hostname=i,f.pathname=e+r.hostname+r.pathname,f.toString()}))},createCurlsSubdomain:jt},Rt=function(){function t(t){this.qi=t,this.t=this.qi.win,this.tft=null,this.lb=null,this.nft=null,this.rft=0,this.eft=null,this.ift=new O,this.Qw=[],this.fft={},this.oft}var n=t.prototype;return n.register=function(t){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1];if(this.tft){if(this.tft!==t)return Promise.reject(new Error("You must supply the same sitekey to all amp-recaptcha-input elements."))}else this.tft=t;if(void 0===this.oft)this.oft=n;else if(this.oft!==n)return Promise.reject(new Error("You must supply the data-global attribute to all or none of the amp-recaptcha-input elements."));return this.rft++,this.nft||(this.nft=this.bo()),this.nft},n.unregister=function(){this.rft--,this.rft<=0&&this.mE()},n.execute=function(t,n){var r=this;if(!this.lb)return Promise.reject(new Error("An iframe is not created. You must register before executing"));var e=new O,i=t;return this.fft[i]={resolve:e.resolve,reject:e.reject},this.ift.promise.then((function(){var t={"id":i,"action":"amp_"+n};r.uft(R(r.eft),t)})),e.promise},n.bo=function(){var t=this;return this.aft().then((function(n){return t.lb=n,t.Qw=[t.sft("amp-recaptcha-ready",(function(){return t.ift.resolve()})),t.sft("amp-recaptcha-token",t.cft.bind(t)),t.sft("amp-recaptcha-error",t.hft.bind(t))],t.fft={},t.t.document.body.appendChild(t.lb),function(t){var n,r;if(function(t){return!!(t.complete||"complete"==t.readyState||N(t)&&t.readyState>0||t.document&&"complete"==t.document.readyState)}(t))return Promise.resolve(t);var e=N(t);return e&&t.__AMP_MEDIA_LOAD_FAILURE_SRC===t.currentSrc?Promise.reject(t):new Promise((function(i,f){if(n=e?$(t,"loadedmetadata",i,{capture:!0}):$(t,"load",i),t.tagName){var o=t;if(e&&!t.hasAttribute("src")&&!(o=function(t,n){for(var r=t.lastElementChild;r;r=r.previousElementSibling)if(n(r))return r;return null}(t,(function(t){return"SOURCE"===t.tagName}))))return f(new Error("Media has no source."));r=$(o,"error",f)}})).then((function(){return r&&r(),t}),(function(){n&&n(),function(t){N(t)&&(t.__AMP_MEDIA_LOAD_FAILURE_SRC=t.currentSrc||!0);var n=t;throw n&&n.src&&(n=n.src),E().createError("Failed to load:",n)}(t)}))}(t.lb)}))},n.mE=function(){var t,n;this.lb&&(null===(n=(t=this.lb).parentElement)||void 0===n||n.removeChild(t),this.Qw.forEach((function(t){return t()})),this.lb=null,this.nft=null,this.ift=new O,this.Qw=[],this.fft={})},n.aft=function(){var t=this,n=this.t.document.createElement("iframe");return this.lft().then((function(r){return t.eft=_(function(t){if(!function(t){return y.cdnProxyRegex.test(J(t).origin)}(t=J(t)))return t.href;var n=t.pathname.split("/"),r=n[1];z(H.has(r),"Unknown path prefix in url %s",t.href);var e=n[2],i="s"==e?"https://"+decodeURIComponent(n[3]):"http://"+decodeURIComponent(e);return z(i.indexOf(".")>0,"Expected a . in origin %s",i),n.splice(1,"s"==e?3:2),i+n.join("/")+function(t,n){if(!t||"?"==t)return"";var r=new RegExp("[?&]".concat("(amp_(js[^&=]*|gsa|r|kit)|usqp)","\\b[^&]*"),"g"),e=t.replace(r,"").replace(/^[?&]/,"");return e?"?"+e:""}(t.search)+(t.hash||"")}(r)).origin,n.src=r,n.setAttribute("scrolling","no"),n.setAttribute("data-amp-3p-sentinel","amp-recaptcha"),n.setAttribute("name",JSON.stringify({"sitekey":t.tft,"sentinel":"amp-recaptcha","global":t.oft})),n.classList.add("i-amphtml-recaptcha-iframe"),m(n,"border","none"),n.onload=function(){this.readyState="complete"},n}))},n.lft=function(){var t,n,r,e=this,i=void 0;return(n=this.qi.getHeadNode(),U(r=q(P(n)),"url")?I(r,"url"):null).isProxyOrigin(this.t.location.href)?(t=function(){return e.t.location.hostname.split(".")[0]},i=new Promise((function(n){n(t())}))):i=kt.createCurlsSubdomain(this.t.location.href),i.then((function(t){return"https://"+t+".recaptcha.".concat(y.thirdPartyFrameHost,"/").concat("2203101844000","/")+"recaptcha.html"}))},n.sft=function(t,n){var r=this;return function(t,n,r,e,i,f){R(t.src),R(!t.parentNode),R(r);var o=t.ownerDocument.defaultView;!function(t){t.listeningFors||t.addEventListener("message",(function(n){if(F(n)){var r=function(t){return"string"==typeof t&&(t="{"==t.charAt(0)?S(t,(function(t){(x.dev||(x.dev=j())).warn("IFRAME-HELPER","Postmessage could not be parsed. Is it in a valid JSON format?",t)}))||null:T(t)?function(t){if(!T(t))return null;var n=t.indexOf("{");return S(t.substr(n),(function(n){!function(t){var n=l.apply(null,arguments);setTimeout((function(){throw p(n),n}))}(new Error("MESSAGING: Failed to parse message: ".concat(t,"\n").concat(n.message)))}))}(t):null),t}(F(n));if(r&&r.sentinel){var e=function(t,n,r,e){var i,f=L(t,n);if(!f)return f;for(var o=0;o<f.length;o++){var u=f[o],a=u.frame.contentWindow;if(a){if(e==a||V(a,e)){i=u;break}}else setTimeout(Y,0,f)}return i?i.events:null}(t,r.sentinel,n.origin,n.source);if(e){var i=e[r.type];if(i){i=i.slice();for(var f=0;f<i.length;f++)(0,i[f])(r,n.source,n.origin,n)}}}}}))}(o);var u,a=function(t,n,r){for(var e,i=L(t,G(n,true),!0),f=0;f<i.length;f++){var o=i[f];if(o.frame===n){e=o;break}}return e||(e={frame:n,events:Object.create(null)},i.push(e)),e.events}(o,t),s=_(t.src).origin,c=a[n]||(a[n]=[]),h=function(n,e,i,f){if("amp"==n.sentinel){if(e!=t.contentWindow)return;if(s!=i)return}e==t.contentWindow&&(n.sentinel!=B?r(n,e,i,f):u())};return c.push(h),u=function(){if(h){var t=c.indexOf(h);t>-1&&c.splice(t,1),h=null,c=null,r=null}}}(this.lb,t,(function(t,e,i){r.eft===i&&n(t,e,i)}))},n.uft=function(t,n){var r,e,i;e=n,i=t,function(t,n,r,e,i){if(t.contentWindow){e.type="amp-recaptcha-action",e.sentinel=G(t,true);var f=e;f="amp-"+JSON.stringify(e);for(var o=0;o<n.length;o++){var u=n[o];u.win.postMessage(f,u.origin)}}}(r=this.lb,[{win:r.contentWindow,origin:i}],0,e)},n.cft=function(t){var n=t.id,r=t.token;this.fft[n].resolve(r),delete this.fft[n]},n.hft=function(t){var n=t.id,r=t.error;this.fft[n].reject(new Error(r)),delete this.fft[n]},t}(),zt=function(t){!function(t,r){if("function"!=typeof r&&null!==r)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(r&&r.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),r&&n(t,r)}(a,t);var e,o,u=(e=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,n=r(e);if(o){var f=r(this).constructor;t=Reflect.construct(n,arguments,f)}else t=n.apply(this,arguments);return i(this,t)});function a(t){var n;return(n=u.call(this,t)).tft=null,n.Ho=null,n.pft=null,n.vft=null,n.oft=!1,n}var s=a.prototype;return s.buildCallback=function(){var t,n,r,e=this;return this.tft=z(this.element.getAttribute("data-sitekey"),"The data-sitekey attribute is required for <amp-recaptcha-input> %s",this.element),this.Ho=z(this.element.getAttribute("data-action"),"The data-action attribute is required for <amp-recaptcha-input> %s",this.element),z(this.element.getAttribute(f),"The %s attribute is required for <amp-recaptcha-input> %s",f,this.element),this.oft=this.element.hasAttribute("data-global"),(t=this.element,n=t,r="amp-recaptcha",function(t,n){var r=function(t,n){var r=A(t)[n];return r?r.promise?r.promise:(I(t,n),r.promise=Promise.resolve(r.obj)):null}(t,n);if(r)return r;var e,i,f,o,u=A(t);return u[n]=(i=(e=new O).promise,f=e.reject,o=e.resolve,i.catch((function(){})),{obj:null,promise:i,resolve:o,reject:f,context:null,ctor:null}),u[n].promise}(q(n),r)).then((function(t){return e.pft=t,e.mutateElement((function(){!function(t,n){void 0===n&&(n=t.hasAttribute("hidden")),n?t.removeAttribute("hidden"):t.setAttribute("hidden","")}(e.element),e.element.classList.add("i-amphtml-async-input"),function(t,n){for(var r in n)m(t,r,n[r])}(e.element,{"position":"absolute","width":"1px","height":"1px","overflow":"hidden","visibility":"hidden"})}))}))},s.isLayoutSupported=function(t){return"nodisplay"==t},s.layoutCallback=function(){return!this.vft&&this.tft&&(this.vft=this.pft.register(this.tft,this.oft)),this.vft},s.unlayoutCallback=function(){return this.vft&&(this.pft.unregister(),this.vft=null),!0},s.getValue=function(){return this.tft&&this.Ho?this.pft.execute(this.element.getResourceId(),this.Ho):Promise.reject(new Error("amp-recaptcha-input requires both the data-sitekey, and data-action attribute"))},a}(t.BaseElement);t.registerServiceForDoc("amp-recaptcha",Rt),t.registerElement("amp-recaptcha-input",zt,".i-amphtml-recaptcha-iframe{position:fixed!important;top:0px!important;left:0px!important;height:1px!important;width:1px!important;overflow:hidden!important;visibility:hidden!important}\n/*# sourceURL=/extensions/amp-recaptcha-input/0.1/amp-recaptcha-input.css*/")}();
/*! https://mths.be/cssescape v1.5.1 by @mathias | MIT license */}});
//# sourceMappingURL=amp-recaptcha-input-0.1.js.map