;
(self.AMP=self.AMP||[]).push({m:0,v:"2203101844000",n:"amp-social-share",ev:"0.1",l:!0,f:function(t,e){!function(){function e(t,e,a){return e in t?Object.defineProperty(t,e,{value:a,enumerable:!0,configurable:!0,writable:!0}):t[e]=a,t}function a(t,e){var a=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),a.push.apply(a,r)}return a}var r;function n(t,e){return(n=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function i(t){return(i=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function o(t){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function s(t,e){if(e&&("object"===o(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}var l=Array.isArray,c=Object.prototype;function u(t,e){void 0===e&&(e=t.hasAttribute("hidden")),e?t.removeAttribute("hidden"):t.setAttribute("hidden","")}c.hasOwnProperty,c.toString;var h=/(?:^[#?]?|&)([^=&]+)(?:=([^&]*))?/g;function f(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";try{return decodeURIComponent(t)}catch(t){return e}}var v=self.AMP_CONFIG||{},m=("string"==typeof v.thirdPartyFrameRegex?new RegExp(v.thirdPartyFrameRegex):v.thirdPartyFrameRegex,("string"==typeof v.cdnProxyRegex?new RegExp(v.cdnProxyRegex):v.cdnProxyRegex)||/^https:\/\/([a-zA-Z0-9_-]+\.)?cdn\.ampproject\.org$/);function p(t){if(!self.document||!self.document.head)return null;if(self.location&&m.test(self.location.origin))return null;var e=self.document.head.querySelector('meta[name="'.concat(t,'"]'));return e&&e.getAttribute("content")||null}v.thirdPartyUrl,v.thirdPartyFrameHost,v.cdnUrl||p("runtime-host"),v.errorReportingUrl,v.betaErrorReportingUrl,v.localDev,v.geoApiUrl||p("amp-geo-api"),self.__AMP_LOG=self.__AMP_LOG||{user:null,dev:null,userForEmbed:null};var d=self.__AMP_LOG;function g(t,e){throw new Error("failed to call initLogConstructor")}function b(t){return d.user||(d.user=w()),function(t,e){return e&&e.ownerDocument.defaultView!=t}(d.user.win,t)?d.userForEmbed||(d.userForEmbed=w()):d.user}function w(t){return g()}function y(t,e,a,r,n,i,o,s,l,c,u){return t}function x(t,e,a,r,n,i,o,s,l,c,u){return b().assert(t,e,a,r,n,i,o,s,l,c,u)}function k(t,e){return E(t=function(t){return t.__AMP_TOP||(t.__AMP_TOP=t)}(t),e)}function L(t,e){var a,r,n=(a=O(t),(r=O(a)).isSingleDoc()?r.win:r);return z(n,e)?E(n,e):null}function O(t){return t.nodeType?(a=t,e=(a.ownerDocument||a).defaultView,k(e,"ampdoc")).getAmpDoc(t):t;var e,a}function E(t,e){y(z(t,e));var a=function(t){var e=t.__AMP_SERVICES;return e||(e=t.__AMP_SERVICES={}),e}(t)[e];return a.obj||(y(a.ctor),y(a.context),a.obj=new a.ctor(a.context),y(a.obj),a.context=null,a.resolve&&a.resolve(a.obj)),a.obj}function z(t,e){var a=t.__AMP_SERVICES&&t.__AMP_SERVICES[e];return!(!a||!a.ctor)}var A={"twitter":{"shareEndpoint":"https://twitter.com/intent/tweet","defaultParams":{"text":"TITLE","url":"CANONICAL_URL"}},"facebook":{"shareEndpoint":"https://www.facebook.com/dialog/share","defaultParams":{"href":"CANONICAL_URL"}},"pinterest":{"shareEndpoint":"https://www.pinterest.com/pin/create/button/","defaultParams":{"url":"CANONICAL_URL","description":"TITLE"}},"linkedin":{"shareEndpoint":"https://www.linkedin.com/shareArticle","defaultParams":{"url":"CANONICAL_URL","mini":"true"}},"gplus":{"obsolete":!0},"email":{"bindings":["recipient"],"shareEndpoint":"mailto:RECIPIENT","defaultParams":{"subject":"TITLE","body":"CANONICAL_URL","recipient":""}},"tumblr":{"shareEndpoint":"https://www.tumblr.com/share/link","defaultParams":{"name":"TITLE","url":"CANONICAL_URL"}},"whatsapp":{"shareEndpoint":"https://api.whatsapp.com/send","defaultParams":{"text":"TITLE - CANONICAL_URL"}},"line":{"shareEndpoint":"https://social-plugins.line.me/lineit/share","defaultParams":{"text":"TITLE","url":"CANONICAL_URL"}},"sms":{"shareEndpoint":"sms:","defaultParams":{"body":"TITLE - CANONICAL_URL"}},"system":{"shareEndpoint":"navigator-share:","defaultParams":{"text":"TITLE","url":"CANONICAL_URL"}}};new Set(["c","v","a","ad"]);var C="amp-social-share",j=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&n(t,e)}(m,t);var o,c,v=(o=m,c=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=i(o);if(c){var a=i(this).constructor;t=Reflect.construct(e,arguments,a)}else t=e.apply(this,arguments);return s(this,t)});function m(t){var e;return(e=v.call(this,t)).e1=null,e.oi={},e.Ih=null,e.a1=null,e.h=null,e.o1=null,e}m.prerenderAllowed=function(){return!0};var p=m.prototype;return p.isLayoutSupported=function(){return!0},p.buildCallback=function(){var t=this,e=this.element,a=x(e.getAttribute("type"),"The type attribute is required. %s",e);x(!/\s/.test(a),"Space characters are not allowed in type attribute value. %s",e),this.Ih=k(this.win,"platform");var r="share"in this.win.navigator;if("system"===a){if(!r)return void u(e,!1)}else if(r&&this.win.document.querySelectorAll("amp-social-share[type=system][data-mode=replace]").length)return void u(e,!1);var n=A[a]||{};if(n.obsolete)return u(e,!1),void b().warn(C,"Skipping obsolete share button ".concat(a));this.e1=x(e.getAttribute("data-share-endpoint")||n.shareEndpoint,"The data-share-endpoint attribute is required. %s",e),Object.assign(this.oi,n.defaultParams,function(t,e,a){var r=t.dataset,n={},i=/^param(.+)/;for(var o in r){var s=o.match(i);s&&(n[s[1][0].toLowerCase()+s[1].substr(1)]=r[o])}return n}(e)),this.o1=n.bindings,e.setAttribute("role","button"),e.hasAttribute("tabindex")||e.setAttribute("tabindex","0"),e.getAttribute("aria-label")||e.setAttribute("aria-label","Share by ".concat(a)),e.addEventListener("click",(function(){return t.Vh()})),e.addEventListener("keydown",this.s1.bind(this)),e.classList.add("amp-social-share-".concat(a))},p.layoutCallback=function(){var t=this;if(!this.e1)return r||(r=Promise.resolve(void 0));var e=function(t,e,a){if(!e)return t;var r=t.split("#",2),n=r[0].split("?",2);return n[0]+(n[1]?"?".concat(n[1],"&").concat(e):"?".concat(e))+(r[1]?"#".concat(r[1]):"")}(this.e1,function(t){var e,a,r,n=[];for(var i in t){var o=t[i];if(null!=o){o=l(r=o)?r:[r];for(var s=0;s<o.length;s++)n.push((e=i,a=o[s],"".concat(encodeURIComponent(e),"=").concat(encodeURIComponent(a))))}}return n.join("&")}(this.oi)),a=L(this.element,"url-replace"),n={};return this.o1&&this.o1.forEach((function(e){var a=e.toUpperCase();n[a]=t.oi[e]})),a.expandUrlAsync(e,n).then((function(e){t.a1=e;var a,r=(a=t.element,L(a,"url")).parse(e).protocol,n="mailto:"===r,i="sms:"===r;t.h=t.Ih.isIos()&&(n||i)?"_top":t.element.hasAttribute("data-target")?t.element.getAttribute("data-target"):"_blank",i&&(t.a1=t.a1.replace("?","?&"))}))},p.s1=function(t){var e=t.key;" "!=e&&"Enter"!=e||(t.preventDefault(),this.l1())},p.Vh=function(){this.l1()},p.l1=function(){x(this.a1&&this.h,"Clicked before href is set.");var t=this.a1,r=this.h;if("navigator-share:"===this.e1){var n=this.win.navigator;y(n.share);var i=t.substr(t.indexOf("?")),o=function(t){var e,a=Object.create(null);if(!t)return a;for(;e=h.exec(t);){var r=f(e[1],e[1]),n=e[2]?f(e[2].replace(/\+/g," "),e[2]):"";a[r]=n}return a}(i);n.share(function(t){for(var r=1;r<arguments.length;r++){var n=null!=arguments[r]?arguments[r]:{};r%2?a(Object(n),!0).forEach((function(a){e(t,a,n[a])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):a(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}({},o)).catch((function(t){b().warn(C,t.message,i)}))}else!function(t,e,a,r){var n,i,o;try{n=t.open(e,a,r)}catch(t){(d.dev||(d.dev=g())).error("DOM","Failed to open url on target: ",a,t)}!n&&"_top"!=a&&("number"!=typeof o&&(o=0),o+"noopener".length>(i=r).length||-1===i.indexOf("noopener",o))&&(n=t.open(e,"_top"))}(this.win,t,r,"resizable,scrollbars,width=640,height=480")},m}(t.BaseElement);t.registerElement("amp-social-share",j,'.amp-social-share-facebook{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23fff" d="M212 197h-37v60h37v176h70V257h50l5-60h-55v-33c0-14 3-20 17-20h38V83h-49c-52 0-76 23-76 67v47z"/></svg>\')}.amp-social-share-pinterest{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23fff" d="M267 77c-101 0-151 71-151 131 0 36 14 69 43 81 5 2 9 0 11-6l4-16c1-6 1-8-3-12-8-10-14-23-14-42 0-53 40-101 104-101 57 0 88 35 88 81 0 61-27 112-67 112-22 0-39-18-33-40 6-27 18-56 18-75 0-17-9-32-28-32-23 0-41 24-41 55 0 20 7 33 7 33l-27 115c-9 34-2 76-1 80 0 3 4 3 5 1 2-2 29-35 38-69l15-58c7 14 29 27 51 27 68 0 114-62 114-145 0-62-53-120-133-120z"/></svg>\')}.amp-social-share-linkedin{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23fff" d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5-18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5 18.9 0 34.2 15.5 34.2 34.5zm-5 58.9h-57.8v186.8h57.8V201.3zm92.4 0h-55.4v186.8h55.4v-98c0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9v98H398V269.8c0-50-28.3-74.2-68-74.2-39.6 0-56.3 30.9-56.3 30.9v-25.2h.1z"/></svg>\')}.amp-social-share-email{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23fff" d="M101 142v229h310V142H101zm275 26-120 91-120-91h240zm-248 26 64 49-64 64V194zm0 150 85-85 43 33 43-33 85 85H128zm256-36-64-65 64-49v114z"/></svg>\')}.amp-social-share-twitter{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="400" height="400"><g fill="none" fill-rule="evenodd"><path d="M0 0h400v400H0z"/><path fill="%23FFF" fill-rule="nonzero" d="M153.6 301.6c94.4 0 146-78.2 146-146 0-2.2 0-4.4-.2-6.6a104.4 104.4 0 0 0 25.6-26.5 102.4 102.4 0 0 1-29.5 8 51.5 51.5 0 0 0 22.6-28.3 102.8 102.8 0 0 1-32.6 12.4 51.3 51.3 0 0 0-87.4 46.8 145.6 145.6 0 0 1-105.7-53.6 51.3 51.3 0 0 0 15.9 68.5 51 51 0 0 1-23.3-6.4v.6a51.3 51.3 0 0 0 41.1 50.3 51.2 51.2 0 0 1-23.1.9 51.4 51.4 0 0 0 48 35.6 103 103 0 0 1-63.8 22 104.4 104.4 0 0 1-12.2-.7 145.2 145.2 0 0 0 78.6 23"/></g></svg>\')}.amp-social-share-tumblr{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23fff" d="M211 80c-2 19-7 34-13 46a96 96 0 0 1-59 50v50h39v125c0 16 1 28 5 37 3 8 9 16 18 24s20 13 32 17c13 5 27 7 43 7a174 174 0 0 0 81-20v-56a97 97 0 0 1-54 18c-10 0-19-3-27-7-6-4-10-8-12-14s-3-19-3-40v-91h85v-56h-85V80h-50z"/></svg>\')}.amp-social-share-whatsapp{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"><path fill="%23FFF" d="M35.4 10.4a18.27 18.27 0 0 0-31.2 13c0 3.2.9 6.3 2.4 9.1L4 42l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2a18.4 18.4 0 0 0 13-31.3zM22.5 38.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L9.9 32l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9 7.2-4.4 16.5-2.3 20.9 4.9 4.4 7.2 2.3 16.5-4.9 20.9-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2l-1.5 1.7c-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6a5.1 5.1 0 0 0-.6 5.4l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5.2-.2.4-.4.5-.6.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"/></svg>\')}.amp-social-share-line{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23fff" d="M443 233c0-84-84-152-188-152S67 149 67 233c0 76 67 139 157 151 7 1 15 4 17 9s1 12 1 17l-3 16c-1 5-4 19 16 10s108-63 148-109c27-30 40-60 40-94zm-254 45a4 4 0 0 1-4 4h-53a4 4 0 0 1-2-1 4 4 0 0 1-1-3v-82a4 4 0 0 1 4-3h13a4 4 0 0 1 3 3v65h36a4 4 0 0 1 4 4zm32 0a4 4 0 0 1-4 4h-13a4 4 0 0 1-4-4v-82a4 4 0 0 1 4-3h13a4 4 0 0 1 4 3zm90 0a4 4 0 0 1-3 4h-13a4 4 0 0 1-1 0h-1v-1a3 3 0 0 1-1-1l-38-50v48a4 4 0 0 1-4 4h-13a4 4 0 0 1-4-4v-82a4 4 0 0 1 4-3h16v1l38 51v-49a4 4 0 0 1 4-3h13a4 4 0 0 1 3 3zm73-69a4 4 0 0 1-3 4h-36v14h36a4 4 0 0 1 3 4v13a4 4 0 0 1-3 4h-36v13h36a4 4 0 0 1 3 4v13a4 4 0 0 1-3 4h-53a4 4 0 0 1-3-1 4 4 0 0 1-1-3v-82a4 4 0 0 1 1-2 4 4 0 0 1 3-1h53a4 4 0 0 1 3 3z" data-name="レイヤー 1"/></svg>\')}.amp-social-share-sms{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="30" height="29"><path fill="none" stroke="%23FFF" stroke-width="3" d="M8.7 26v-5.7H2V2h26v18.4H15.9z"/></svg>\')}.amp-social-share-system{background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="%23fff"><path fill="none" d="M0 0h24v24H0z"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11A2.99 2.99 0 0 0 21 5a3 3 0 1 0-5.91.7L8.04 9.81A2.99 2.99 0 0 0 3 12a3 3 0 0 0 5.04 2.19l7.12 4.16A2.92 2.92 0 1 0 18 16.08z"/></svg>\')}amp-social-share{background-repeat:no-repeat;background-position:50%;background-size:contain;text-decoration:none;cursor:pointer;position:relative}amp-social-share:focus{outline:2px solid #0389ff;outline-offset:2px}.amp-social-share-twitter{background-color:#1da1f2}.amp-social-share-facebook{background-color:#32529f}.amp-social-share-pinterest{background-color:#e60023}.amp-social-share-linkedin{background-color:#0077b5}.amp-social-share-tumblr{background-color:#3c5a77}.amp-social-share-email{background-color:#000}.amp-social-share-whatsapp{background-color:#25d366}.amp-social-share-line{background-color:#52b448}.amp-social-share-sms{background-color:#ca2b63}.amp-social-share-system{background-color:#000}\n/*# sourceURL=/extensions/amp-social-share/0.1/amp-social-share.css*/')}();
/*! https://mths.be/cssescape v1.5.1 by @mathias | MIT license */}});
//# sourceMappingURL=amp-social-share-0.1.js.map