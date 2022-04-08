;
(self.AMP=self.AMP||[]).push({m:0,v:"2203101844000",n:"amp-user-notification",ev:"0.1",l:!0,f:function(t,n){!function(){function n(t,n){(null==n||n>t.length)&&(n=t.length);for(var i=0,r=new Array(n);i<n;i++)r[i]=t[i];return r}function i(t,i){var r="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(r)return(r=r.call(t)).next.bind(r);if(Array.isArray(t)||(r=function(t,i){if(t){if("string"==typeof t)return n(t,i);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?n(t,i):void 0}}(t))||i&&t&&"number"==typeof t.length){r&&(t=r);var e=0;return function(){return e>=t.length?{done:!0}:{done:!1,value:t[e++]}}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var r;function e(){return r||(r=Promise.resolve(void 0))}var o=function(){var t=this;this.promise=new Promise((function(n,i){t.resolve=n,t.reject=i}))};function u(t){return(u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function s(t,n){return(s=Object.setPrototypeOf||function(t,n){return t.__proto__=n,t})(t,n)}function f(t){return(f=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function a(t,n){if(n&&("object"===u(n)||"function"==typeof n))return n;if(void 0!==n)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}var c=Array.isArray,h=Object.prototype;function l(t){var n=Object.getOwnPropertyDescriptor(t,"message");if(null!=n&&n.writable)return t;var i=t.message,r=t.stack,e=new Error(i);for(var o in t)e[o]=t[o];return e.stack=r,e}function v(t){for(var n,r=null,e="",o=i(arguments,!0);!(n=o()).done;){var u=n.value;u instanceof Error&&!r?r=l(u):(e&&(e+=" "),e+=u)}return r?e&&(r.message=e+": "+r.message):r=new Error(e),r}function d(t){var n,i;null===(n=(i=self).__AMP_REPORT_ERROR)||void 0===n||n.call(i,t)}function p(t){var n=v.apply(null,arguments);setTimeout((function(){throw d(n),n}))}h.hasOwnProperty,h.toString;var m=self.AMP_CONFIG||{},b=("string"==typeof m.thirdPartyFrameRegex?new RegExp(m.thirdPartyFrameRegex):m.thirdPartyFrameRegex,("string"==typeof m.cdnProxyRegex?new RegExp(m.cdnProxyRegex):m.cdnProxyRegex)||/^https:\/\/([a-zA-Z0-9_-]+\.)?cdn\.ampproject\.org$/);function y(t){if(!self.document||!self.document.head)return null;if(self.location&&b.test(self.location.origin))return null;var n=self.document.head.querySelector('meta[name="'.concat(t,'"]'));return n&&n.getAttribute("content")||null}m.thirdPartyUrl,m.thirdPartyFrameHost,m.cdnUrl||y("runtime-host"),m.errorReportingUrl,m.betaErrorReportingUrl,m.localDev,m.geoApiUrl||y("amp-geo-api"),self.__AMP_LOG=self.__AMP_LOG||{user:null,dev:null,userForEmbed:null};var w=self.__AMP_LOG;function g(t,n){throw new Error("failed to call initLogConstructor")}function j(t){return w.user||(w.user=O()),function(t,n){return n&&n.ownerDocument.defaultView!=t}(w.user.win,t)?w.userForEmbed||(w.userForEmbed=O()):w.user}function O(t){return g()}function I(){return w.dev||(w.dev=g())}function S(t,n,i,r,e,o,u,s,f,a,c){return t}function E(t,n,i,r,e,o,u,s,f,a,c){return j().assert(t,n,i,r,e,o,u,s,f,a,c)}function R(t,n){return A(t=function(t){return t.__AMP_TOP||(t.__AMP_TOP=t)}(t),n)}function x(t,n){return function(t,n){var i=T(t,n);if(i)return i;var r,e,u,s,f=F(t);return f[n]=(e=(r=new o).promise,u=r.reject,s=r.resolve,e.catch((function(){})),{obj:null,promise:e,resolve:s,reject:u,context:null,ctor:null}),f[n].promise}(U(t),n)}function P(t,n){return T(U(t),n)}function C(t){return t.nodeType?(i=t,n=(i.ownerDocument||i).defaultView,R(n,"ampdoc")).getAmpDoc(t):t;var n,i}function U(t){var n=C(t);return n.isSingleDoc()?n.win:n}function A(t,n){S(N(t,n));var i=F(t)[n];return i.obj||(S(i.ctor),S(i.context),i.obj=new i.ctor(i.context),S(i.obj),i.context=null,i.resolve&&i.resolve(i.obj)),i.obj}function T(t,n){var i=F(t)[n];return i?i.promise?i.promise:(A(t,n),i.promise=Promise.resolve(i.obj)):null}function F(t){var n=t.__AMP_SERVICES;return n||(n=t.__AMP_SERVICES={}),n}function N(t,n){var i=t.__AMP_SERVICES&&t.__AMP_SERVICES[n];return!(!i||!i.ctor)}var k,G,M=function(t){return R(t,"xhr")},z="notificationUIManager",B=function(){function t(){this.Wq=0,this.Jq=e(),this.Qq=function(){},this.tG=function(){}}var n=t.prototype;return n.onQueueEmpty=function(t){this.Qq=t,0==this.Wq&&t()},n.onQueueNotEmpty=function(t){this.tG=t,this.Wq>0&&t()},n.registerUI=function(t){var n=this;0==this.Wq&&this.tG(),this.Wq++;var i=this.Jq.then((function(){return t().then((function(){n.Wq--,0==n.Wq&&n.Qq()}))}));return this.Jq=i,i},t}(),D=function(){function t(t){this.Wt=t,this.Kt=0,this.Qt=0,this.Xt=Object.create(null)}var n=t.prototype;return n.has=function(t){return!!this.Xt[t]},n.get=function(t){var n=this.Xt[t];if(n)return n.access=++this.Qt,n.payload},n.put=function(t,n){this.has(t)||this.Kt++,this.Xt[t]={payload:n,access:this.Qt},this.Yt()},n.Yt=function(){if(!(this.Kt<=this.Wt)){var t,n=this.Xt,i=this.Qt+1;for(var r in n){var e=n[r].access;e<i&&(i=e,t=r)}void 0!==t&&(delete n[t],this.Kt--)}},t}(),L=(new Set(["c","v","a","ad"]),function(t){return"string"==typeof t?function(t,n){return k||(k=self.document.createElement("a"),G=self.__AMP_URL_CACHE||(self.__AMP_URL_CACHE=new D(100))),function(t,n,i){if(i&&i.has(n))return i.get(n);t.href=n,t.protocol||(t.href=t.href);var r,e={href:t.href,protocol:t.protocol,host:t.host,hostname:t.hostname,port:"0"==t.port?"":t.port,pathname:t.pathname,search:t.search,hash:t.hash,origin:null};"/"!==e.pathname[0]&&(e.pathname="/"+e.pathname),("http:"==e.protocol&&80==e.port||"https:"==e.protocol&&443==e.port)&&(e.port="",e.host=e.hostname),r=t.origin&&"null"!=t.origin?t.origin:"data:"!=e.protocol&&e.host?e.protocol+"//"+e.host:e.href,e.origin=r;var o=e;return i&&i.put(n,o),o}(k,t,G)}(t):t});function $(t){return"https:"==(t=L(t)).protocol||"localhost"==t.hostname||"127.0.0.1"==t.hostname||(i=".localhost",(r=(n=t.hostname).length-i.length)>=0&&n.indexOf(i,r)==r);var n,i,r}function q(t,n){var i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"source";return E(null!=t,"%s %s must be available",n,i),E($(t)||/^\/\//.test(t),'%s %s must start with "https://" or "//" or be relative and served from either https or from localhost. Invalid value: %s',n,i,t),t}var Z="amp-user-notification",_="userNotificationManager",H=function(t){!function(t,n){if("function"!=typeof n&&null!==n)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(n&&n.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),n&&s(t,n)}(h,t);var n,i,r=(n=h,i=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,r=f(n);if(i){var e=f(this).constructor;t=Reflect.construct(r,arguments,e)}else t=r.apply(this,arguments);return a(this,t)});function h(t){var n;(n=r.call(this,t)).Nct=null,n.Gct=null;var i=new o;return n.Bct=i.promise,n.qct=i.resolve,n.Zct=null,n.Hct=!1,n.Jct=null,n.Kct=null,n.Qct=null,n.Vct=null,n.lG="",n.hG=null,n.fj=null,n}var l=h.prototype;return l.isAlwaysFixed=function(){return!0},l.buildCallback=function(){var t,n,i,r=this,e=this.getAmpDoc();this.fj=(t=this.element,n="url-replace",N(i=U(C(t)),n)?A(i,n):null),this.hG=x(this.element,"storage"),this.Gct=E(this.element.id,"amp-user-notification should have an id."),this.lG="amp-user-notification:"+this.Gct,this.Jct=this.element.getAttribute("data-show-if-geo"),this.Kct=this.element.getAttribute("data-show-if-not-geo"),this.Vct=this.element.getAttribute("data-show-if-href"),this.Vct&&q(this.Vct,this.element),E(!!this.Vct+!!this.Jct+!!this.Kct<=1,'Only one "data-show-if-*" attribute allowed'),this.Jct&&(this.Qct=this.Wct(this.Jct,!0)),this.Kct&&(this.Qct=this.Wct(this.Kct,!1)),this.Zct=this.element.getAttribute("data-dismiss-href"),this.Zct&&q(this.Zct,this.element),this.element.getAttribute("role")||this.element.setAttribute("role","alert");var o=this.element.getAttribute("data-persist-dismissal");this.Hct="false"!=o&&"no"!=o,this.registerDefaultAction((function(){return r.dismiss(!1)}),"dismiss"),this.registerAction("optoutOfCid",(function(){return r.Xct()})),x(e,_).then((function(t){t.registerUserNotification(r.Gct,r)}))},l.Wct=function(t,n){return(i=this.element,function(t,n,i,r){var e=P(t,n);if(e)return e;var o=C(t);return o.whenExtensionsKnown().then((function(){var t=o.getExtensionVersion(i);return t?R(o.win,"extensions").waitForExtension(i,t):null})).then((function(i){return i?P(t,n):null}))}(i,"geo","amp-geo")).then((function(i){E(i,"requires <amp-geo> to use promptIfUnknownForGeoGroup");var r=t.split(/,\s*/).filter((function(t){return 2==i.isInCountryGroup(t)}));return!!(n?r.length:!r.length)}));var i},l.Yct=function(t){var n=this,i=this.Vct;return this.fj.expandUrlAsync(i).then((function(i){return function(t,n,i){if(!n)return t;var r=t.split("#",2),e=r[0].split("?",2);return e[0]+(e[1]?"?".concat(e[1],"&").concat(n):"?".concat(n))+(r[1]?"#".concat(r[1]):"")}(i,function(t){var n,i,r,e=[];for(var o in t){var u=t[o];if(null!=u){u=c(r=u)?r:[r];for(var s=0;s<u.length;s++)e.push((n=o,i=u[s],"".concat(encodeURIComponent(n),"=").concat(encodeURIComponent(i))))}}return e.join("&")}({"elementId":n.Gct,"ampUserId":t}))}))},l.tlt=function(t){var n=this;return this.Nct=t,this.Yct(t).then((function(t){return M(n.win).fetchJson(t,{credentials:"include"}).then((function(t){return t.json()}))}))},l.nlt=function(){var t=this.element.getAttribute("enctype")||"application/json;charset=utf-8";return M(this.win).fetchJson(this.Zct,this.ilt(t,this.Gct,this.Nct))},l.ilt=function(t,n,i){return{method:"POST",credentials:"include",body:{"elementId":n,"ampUserId":i},headers:{"Content-Type":t}}},l.rlt=function(t){return E("boolean"==typeof t.showNotification,'`showNotification` should be a boolean. Got "%s" which is of type %s.',t.showNotification,u(t.showNotification)),t.showNotification||this.qct(),Promise.resolve(t.showNotification)},l.Xct=function(){var t=this;return this.elt().then((function(t){return t.optOut()})).then((function(){return t.dismiss(!1)}),(function(n){I().error(Z,"Failed to opt out of Cid",n),t.dismiss(!0)}))},l.olt=function(){var t=this;return this.elt().then((function(n){return n.get({scope:Z,createCookieIfNotPresent:!0},e(),t.Bct)}))},l.elt=function(){return x(this.element,"cid")},l.shouldShow=function(){var t=this;return this.isDismissed().then((function(n){return!n&&(t.Vct?t.ult():!t.Qct||t.Qct)}))},l.ult=function(){return this.olt().then(this.tlt.bind(this)).then(this.rlt.bind(this))},l.show=function(){var t,n;return t=this.element,void 0===(n=!0)&&(n=t.hasAttribute("hidden")),n?t.removeAttribute("hidden"):t.setAttribute("hidden",""),this.element.classList.add("amp-active"),this.getViewport().addToFixedLayer(this.element),this.Bct},l.isDismissed=function(){var t=this;return this.Hct?this.hG.then((function(n){return n.get(t.lG)})).then((function(t){return!!t}),(function(t){return I().error(Z,"Failed to read storage",t),!1})):Promise.resolve(!1)},l.dismiss=function(t){var n=this;this.element.classList.remove("amp-active"),this.element.classList.add("amp-hidden"),this.qct(),this.getViewport().removeFromFixedLayer(this.element),this.Hct&&!t&&this.hG.then((function(t){t.set(n.lG,!0)})),this.Zct&&this.nlt()},h}(t.BaseElement),J=function(){function t(t){this.ampdoc=t,this.rn=Object.create(null),this.slt=Object.create(null),this.flt=this.ampdoc.whenReady(),this.clt=Promise.all([this.ampdoc.whenFirstVisible(),this.flt]),this.hlt=x(this.ampdoc,z)}var n=t.prototype;return n.get=function(t){var n=this;return this.clt.then((function(){null==n.ampdoc.getElementById(t)&&j().warn(Z,"Did not find amp-user-notification element ".concat(t,"."))})),this.llt(t).promise},n.getNotification=function(t){var n=this;return this.flt.then((function(){return n.rn[t]}))},n.registerUserNotification=function(t,n){var i=this;this.rn[t]=n;var r=this.llt(t);return this.clt.then((function(){return n.shouldShow()})).then((function(t){if(t)return i.hlt.then((function(t){return t.registerUI(n.show.bind(n))}))})).then(r.resolve.bind(this,n)).catch(p.bind(null,"Notification service failed amp-user-notification",t))},n.llt=function(t){if(this.slt[t])return this.slt[t];var n=new o,i=n.promise,r=n.resolve;return this.slt[t]={promise:i,resolve:r}},t}();t.registerServiceForDoc(_,J),t.registerServiceForDoc(z,B),t.registerElement(Z,H,"amp-user-notification{position:fixed!important;bottom:0;left:0;overflow:hidden!important;visibility:hidden;background:hsla(0,0%,100%,0.7);z-index:1000;width:100%}amp-user-notification.amp-active{visibility:visible}amp-user-notification.amp-hidden{visibility:hidden}\n/*# sourceURL=/extensions/amp-user-notification/0.1/amp-user-notification.css*/")}();
/*! https://mths.be/cssescape v1.5.1 by @mathias | MIT license */}});
//# sourceMappingURL=amp-user-notification-0.1.js.map