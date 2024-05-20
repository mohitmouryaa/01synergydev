!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define("wix-perf-measure",[],t):"object"==typeof exports?exports["wix-perf-measure"]=t():e["wix-perf-measure"]=t()}("undefined"!=typeof self?self:this,(function(){return function(){var e={158:function(e){var t,n,r=e.exports={};function o(){throw new Error("setTimeout has not been defined")}function i(){throw new Error("clearTimeout has not been defined")}function c(e){if(t===setTimeout)return setTimeout(e,0);if((t===o||!t)&&setTimeout)return t=setTimeout,setTimeout(e,0);try{return t(e,0)}catch(n){try{return t.call(null,e,0)}catch(n){return t.call(this,e,0)}}}!function(){try{t="function"==typeof setTimeout?setTimeout:o}catch(e){t=o}try{n="function"==typeof clearTimeout?clearTimeout:i}catch(e){n=i}}();var s,a=[],u=!1,l=-1;function f(){u&&s&&(u=!1,s.length?a=s.concat(a):l=-1,a.length&&d())}function d(){if(!u){var e=c(f);u=!0;for(var t=a.length;t;){for(s=a,a=[];++l<t;)s&&s[l].run();l=-1,t=a.length}s=null,u=!1,function(e){if(n===clearTimeout)return clearTimeout(e);if((n===i||!n)&&clearTimeout)return n=clearTimeout,clearTimeout(e);try{n(e)}catch(t){try{return n.call(null,e)}catch(t){return n.call(this,e)}}}(e)}}function p(e,t){this.fun=e,this.array=t}function m(){}r.nextTick=function(e){var t=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)t[n-1]=arguments[n];a.push(new p(e,t)),1!==a.length||u||c(d)},p.prototype.run=function(){this.fun.apply(null,this.array)},r.title="browser",r.browser=!0,r.env={},r.argv=[],r.version="",r.versions={},r.on=m,r.addListener=m,r.once=m,r.off=m,r.removeListener=m,r.removeAllListeners=m,r.emit=m,r.prependListener=m,r.prependOnceListener=m,r.listeners=function(e){return[]},r.binding=function(e){throw new Error("process.binding is not supported")},r.cwd=function(){return"/"},r.chdir=function(e){throw new Error("process.chdir is not supported")},r.umask=function(){return 0}}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var i=t[r]={exports:{}};return e[r](i,i.exports,n),i.exports}n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var r={};return function(){"use strict";n.r(r);const e={capture:!0,passive:!0},t={...e,once:!0};function o(n,r,o,i){void 0===i&&(i=!0),n.addEventListener(r,o,i?t:e)}function i(n,r,o,i){void 0===i&&(i=!0),n.removeEventListener(r,o,i?t:e)}const c=u((e=>"loading"!==e),"DOMContentLoaded"),s=u((e=>"complete"===e),"load"),a=u((()=>!1),"pagehide",!1);function u(e,t,n){let r;return void 0===n&&(n=!0),i=>(r||(r=function(e,t,n,r){return new Promise((i=>{if(t(e.document.readyState))i({startTime:0});else{const t=e=>i({startTime:e.timeStamp});o(e,n,r?e=>setTimeout((()=>t(e)),0):t)}}))}(i,e,t,n)),r)}function l(e,t,n,r){void 0===r&&(r=e),r.dispatchEvent(new e.CustomEvent(t,{detail:n}))}const f="visibilitychange";function d(e){let[t]=e;return new Promise((e=>{if(p(t))return n(f,0);function n(t,n){e({entryType:"visibility",type:t,startTime:n})}o(t,f,(function e(r){let{timeStamp:o}=r;p(t)&&(i(document,f,e,!1),n(f,o))}),!1),a(t).then((e=>{let{startTime:t}=e;return n("pagehide",t)}))}))}function p(e){let{document:t}=e;const{visibilityState:n}=t;return void 0===n?t.hidden:"hidden"===n}function m(){}function v(e){return()=>Promise.reject(e)}function h(e){return t=>typeof t===e}const y=h("undefined"),g=h("number"),T=h("boolean");function w(e){return e&&e.replace(/\?.*$/,"")}function b(e,t){var n;return null==e.getEntriesByType||null==(n=e.getEntriesByType(t))?void 0:n[0]}function S(e,t,n){return()=>{const r=e.indexOf(t);r>-1&&(e.splice(r,1),0===e.length&&n())}}function E(e){return()=>null==e?void 0:e.disconnect()}function P(e,t){var n;return t||(null==(n=I(e,"*[id]"))?void 0:n.id)}function x(e){return I(e,"h1,h2,h3,h4,h5,h6,p,picture,wix-image,wow-image,article,section")||e}function I(e,t){return null==e?void 0:e.closest(t)}function R(e,t,n){y(n)||(e[t]=/^is/.test(t)?!!n:n)}function C(e){return Promise.allSettled(e).then((e=>e.filter((e=>{let{status:t}=e;return"fulfilled"===t})).map((e=>e.value))))}function M(e){for(var t=arguments.length,n=new Array(t>1?t-1:0),r=1;r<t;r++)n[r-1]=arguments[r];return new Promise((t=>{C(n).then((n=>{const r=n.reduce(((e,t)=>Object.assign(e,t)),{});r.entryType=e,t(r)}))}))}function L(e){var t;return e.wixBiSession||(null==(t=e.bi)?void 0:t.wixBiSession)}h("string");const k={__proto__:{load:function(e,t){let{dataset:n,src:r}=t;if(Object.entries(k).map((e=>{let[t,r]=e;return[n[t],t,r]})).filter((e=>{let[t]=e;return!y(t)})).forEach((e=>{let[t,n,r]=e;if(T(r))t=!0;else if(g(r)){const e=Number(t);t=Number.isNaN(e)?r:e}k[n]=t})),r){k.src=r;const e=/\d+\.\d+\.\d+/.exec(r);e&&(k.version=e[0])}!k.clientType&&L(e)&&(k.clientType="ugc")}},newClsMethod:!0,resourceDebounce:2e3,taskDelta:300,longTask:60,eventDelta:500,ttiDurationInc:2e3,ignoreResources:"cdn_detect,-analytics,perf-measure",label:D("Performance"),clientType:"",fcpPolyfill:"wixFirstPaint",fcpPolyfillId:"wix-first-paint",pageEvent:D("Page"),clsEvent:D("Cls"),storagePrefix:"wix-perf-measure",sessionDelta:!1,noMeasure:!1,log:!1};function D(e){return"wix"+e+"Measurements"}var j=k;const N={analytics:!0,entryType:!0,clientType:!0,version:!0,cores:!0,memory:!0,effectiveType:!0,rtt:!0,download:!0,saveData:!0,url:!0,dns:!0,tcp:!0,ssl:!0,ttfb:!0,redirect:!0,fetchStart:!0,response:!0,navigationType:!0,protocol:!0,pageCaching:!0,_brandId:!0,viewerName:!0,v:!0,dc:!0,microPop:!0,cdn:!0,msid:!0,pageId:!0,fp:!0,fcp:!0,tti:!0,tbt:!0,lcp:!0,lcpSize:!0,closestId:!0,lcpTag:!0,lcpResourceType:!0,lcpFontClass:!0,lcpInLightbox:!0,cls:!0,countCls:!0,clsId:!0,clsTag:!0,clsOld:!0,ttlb:!0,dcl:!0,transferSize:!0,decodedBodySize:!0,isSsr:!0,ssrDuration:!0,ssrTimestamp:!0,startTime:!0,duration:!0,delay:!0,action:!0,type:!0,pn:!0,count:!0,simLH6:!0,isMobile:!0,maybeBot:!0,btype:!0,numOfResponsivenessEvents:!0,worstLatency:!0,actions:!0,elementType:!0,worstLatencyByEntry:!0,compId:!0,loadState:!0,countScripts:!0,cssResourcesFonts:!0};function O(e,t){const n=/^https?:\/\/(?:www\.)?(.*)/.exec(e),r=n?n[1]:e;return _(t)?r:w(r)}function _(e){var t,n;let{consentPolicyManager:r}=e;return!(null==r||null==(t=r.getCurrentConsentPolicy())||null==(n=t.policy)||!n.analytics)}const B="navigation-start",A="browser",z="eTag",F="maybe";function q(e){let[,t]=e;return s(window).then((()=>{const{timing:e}=t,{navigationStart:n,domContentLoadedEventEnd:r,loadEventEnd:o}=e;let{responseEnd:i}=e;i>=n||(i=e.domInteractive||e.domContentLoadedEventStart);const c=b(t,"navigation"),s=function(e){if(e){const{requestStart:t,responseStart:n,responseEnd:r,transferSize:o,encodedBodySize:i}=e;if(g(o)){if(0===o)return A;if(o<i)return z}else{if(n-t<13)return A;if(r-n<13)return F+" "+z}if(r-n<333)return F+" CDN"}}(c);return{entryType:"navigation-finish",duration:o-n,ttlb:i-n,dcl:r-n,...c&&{transferSize:c.transferSize,decodedBodySize:c.decodedBodySize},...s&&{pageCaching:s}}}))}function H(e,t,n){t=j.storagePrefix+"-"+t;try{const{localStorage:r}=e;if(n&&_(e))return n(r,t);r.removeItem(t)}catch(e){}}const V="wix-finish",W=["microPop","is_rollout","is_platform_loaded","maybeBot","isjp"],X={is_rollout:"isRollout",is_platform_loaded:"isPlatformLoaded",isjp:"maybeBot"};function U(e,t){const n=e[0];return C([n.fetchDynamicModel||Promise.resolve({}),t,c(n)]).then((e=>{var t,i;let[{visitorId:c}]=e;const s=L(n);if(!s)throw V;const a=!n.clientSideRender,{btype:u}=s,l=n.commonConfig||(null==(t=n.viewerModel)?void 0:t.siteFeaturesConfigs.commonConfig),{bsi:f}=l,d={entryType:V,isSsr:a,isWelcome:!!n.requestCloseWelcomeScreen,url:n.location.href,...c&&{visitorId:c},...u&&{btype:u},...f&&{bsi:f}};if(R(d,"pageId",(null==(i=n.rendererModel)?void 0:i.landingPageId)||n.firstPageId),a){const{ssrInfo:e={}}=n;R(d,"ssrDuration",e.renderBodyTime||e.timeSpentInSSR),R(d,"ssrTimestamp",e.renderTimeStamp)}return W.forEach((e=>R(d,X[e]||e,s[e]))),function(e){if(!j.sessionDelta)return void function(e,t){H(e,"timestamp")}(n);const t=function(e,t){return H(e,"timestamp",((e,t)=>e.getItem(t)))}(n),i=r(),c=i-t;c>0&&c<i&&(e.sessionDelta=c),o(n.document,"consentPolicyChanged",r,!1)}(d),d}));function r(){const e=Date.now();return function(e,t,n){H(e,"timestamp",((e,t)=>e.setItem(t,n)))}(n,0,e),e}}function Z(e,t,n,r,o){if(void 0===n&&(n=m),void 0===r&&(r=!0),!e)return;const{supportedEntryTypes:i}=e;if(!i||!i.includes(t))return;const c=new e(((e,t)=>n(e.getEntries(),t)));try{c.observe({type:t,buffered:r,...o})}catch(e){c.observe({entryTypes:[t]})}return c}const $=e=>{let{initiatorType:t,name:n}=e;return"script"===t||"link"===t&&/\.js$/.test(n)},G=e=>{let{initiatorType:t,name:n}=e;return"img"===t||"image"===t||"css"===t&&/\.(?:jpe?g|png|webp|gif)/i.test(n)},J=e=>{let{initiatorType:t,name:n}=e;return"css"===t&&n.includes("font")||/\.(?:woff2?|ttf|eot)/i.test(n)};let K;const Q=[];function Y(e,t,n){if(1===Q.push(t)){const t=j.ignoreResources.split(",");K=Z(e,"resource",(e=>{(e=e.filter((e=>{let{name:n}=e;return!t.some((e=>n.includes(e)))}))).length&&Q.forEach((t=>t(e)))}),n)}return{observer:K,finish:S(Q,t,E(K))}}const{min:ee,max:te}=Math;function ne(e,t,n){let[,,r,o,i]=e,{filter:c,tag:s=!0,debounce:a=j.resourceDebounce}=void 0===n?{}:n;const u=new Promise(((e,t)=>{const n=[];let s=o(f,a);const{observer:u,finish:l}=Y(r,(e=>{c&&(e=e.filter(c)),e.length&&(n.push(...e),i(s),s=o(f,a))}),!0);function f(){if(!u)return t();const r=null==u.takeRecords?void 0:u.takeRecords();r&&n.push(...r),l(),e(n)}})).then((e=>{const n=e,r=n.length;if(!r)throw t;let o=[];"fonts"===t&&(o=n.filter((e=>{return(t=e.name).includes("fonts.gstatic")||t.includes("fonts.googleapis");var t})).map((e=>e.name)));const{tbd:i,firstResponse:c,lastResponse:s}=n.reduce(((e,t)=>{let{transferSize:n,responseStart:r,responseEnd:o}=t;return{tbd:e.tbd+n,firstResponse:r>0&&r<e.firstResponse?r:e.firstResponse,lastResponse:te(e.lastResponse,o)}}),{tbd:0,firstResponse:1e6,lastResponse:0}),a=n.filter((e=>{let{requestStart:t}=e;return g(t)})).map((e=>{let{requestStart:t,responseStart:n}=e;return n-t})).sort(),{length:u}=a,l=u>>1,f=ee(c,s),d={count:r,startTime:f,duration:s-f,mttfb:u%2?a[l]:(a[l-1]+a[l])/2,attfb:a.reduce(((e,t)=>e+t),0)/u,cssResources:o.join(",")};return Number.isNaN(i)||(d.tbd=i),d})).catch((()=>({count:0})));return s?u.then((function(e){const n=function(e){return e[0].toUpperCase()+e.slice(1)}(t);return Object.entries(e).reduce(((e,t)=>{let[r,o]=t;return e[r+n]=o,e}),{})})):u}function re(e,t,n,r){let o;const i=new Promise(((i,c)=>{o=Z(e,t,(e=>n(e,(e=>{o&&o.disconnect&&o.disconnect(),i(e)}))),r),o||c(t)}));return i.takeRecords=()=>{var e;return null==(e=o)||null==e.takeRecords?void 0:e.takeRecords()},i}const oe="paint",ie={"first-paint":"fp","first-contentful-paint":"fcp"};function ce(e){let[t,,n]=e;const r={entryType:"initial-"+oe};return re(n,oe,((e,t)=>{e.reduce(((e,t)=>{let{name:n,startTime:o}=t;return n=ie[n]||n,r[n]=o,e||"fcp"===n}),!1)&&t(r)})).catch((()=>function(e,t){return new Promise(((n,r)=>{const{fcpPolyfill:i,fcpPolyfillId:s}=j;function a(){const r=e[i];n({entryType:t,fp:r,fcp:r})}i in e?a():(o(e,i,a),c(e).then((()=>{e.document.getElementById(s)||r(t)})))}))}(t,r.entryType)))}const{max:se,min:ae}=Math;function ue(e,t,n){const[r,,o,i,s]=e,{resourceDebounce:a,taskDelta:u,ttiDurationInc:l}=j;return t.then((t=>new Promise((l=>{let f=t,d=!0,p=0;const v=[],h=function(e,t){let[{requestAnimationFrame:n,cancelAnimationFrame:r},o,i]=e;const c=Z(i,"longtask",t,!1);if(c)return E(c);let s=o.now();const{longTask:a}=j;let u=n((function e(r){const o=r-s;o>=a&&t([{startTime:s,duration:o}]),s=r,u=n(e)}));return()=>r(u)}(e,(e=>{v.push(...e),d=!1,s(p),p=i((()=>{d=!0,S()}),u)})),y=c(r);let g=!1,T=i(b,a);const{finish:w}=Y(o,(e=>{(e=e.filter((e=>(e=>{let{initiatorType:t}=e;return"fetch"===t||"xmlhttprequest"===t})(e)||$(e)))).length&&(g=!1,f=e.reduce(((e,t)=>{let{startTime:n,duration:r}=t;return se(e,n+r)}),f),y.then((e=>{let{startTime:t}=e;f=se(t,f),s(T),T=i(b,a)})))}),!1);function b(){g=!0,S()}function S(){d&&g&&P(1e6)}function P(e){h(),w(),l([v,t,f,e])}null==n||n.then((e=>{let{startTime:t,delay:n}=e;return P(t+n)}),m)})))).then((e=>{let[t,n,o,i]=e;const c=function(e,t,n,r){t===n&&(n+=l);let o=e.findIndex((e=>{let{startTime:t,duration:r}=e;if(t>n+u)return!0;n=se(n,t+r)}));-1===o&&(o=e.length);const i=o>0?(c=e[o-1]).startTime+c.duration:0;var c;return se(ae(i,r),t)}(t,n,o,i),{document:s,innerHeight:a}=r,f={tti:c,tbt:function(e,t){let n=0;for(let r=0;r<e.length;++r){const{startTime:o,duration:i}=e[r];if(o>t)break;n+=se(i-50,0)}return n}(t,c),iframes:s.querySelectorAll("iframe").length},d=se(s.body.offsetHeight,a);return d>0&&(f.screens=s.body.scrollHeight/d),f})).catch(v("interactive"))}const le="largest-contentful-paint";function fe(e){return e?Promise.resolve(function(e){var t;const{startTime:n,size:r,url:o,element:i,id:c}=e,s=x(i),a=null==s?void 0:s.tagName,u=function(e){if(e)for(const t of e.classList){const e=/^font_\d$/.exec(t);if(e)return e[0]}}(s),l=P(i,c),f=/\.(jpe?g|png|gif|svg|webp)/i.exec(o),d=(null==f||null==(t=f[1])?void 0:t.toLowerCase().replace("jpeg","jpg"))||"other";return{entryType:le,lcp:n,lcpSize:r,...l&&{closestId:l},...a&&{lcpTag:a},...o&&{lcpResourceType:d},...u&&{lcpFontClass:u},lcpInLightbox:de(i)}}(e)):Promise.reject(le)}function de(e){return null!==I(e,"#POPUPS_ROOT")}const pe={MAX_SIZE:200,MAX_INTERVAL:100},me={MAX_SIZE:1e7,MAX_INTERVAL:1e7};function ve(e,t){let[,,n]=e;const r=function(e,t){const n=Z(e,"layout-shift");if(n){const e=null==n.takeRecords?void 0:n.takeRecords();return n.disconnect(),e}}(n);if(!r)return;const o=j.newClsMethod?pe:me;let i=0;const[c,s,a]=r.filter((e=>{let{hadRecentInput:t}=e;return!t})).map((e=>{let{sources:t=[],value:n,startTime:r}=e;i+=n;const[o]=t.reduce(((e,t)=>{let{node:n,currentRect:{width:r,height:o}}=t;const i=r*o;return i<e[1]?e:[n,i]}),[null,-1]);return[n,o,r]})).reduce(((e,t)=>{const[n]=e.slice(-1);if(n){const[,,r]=t,[i]=n;if(r-i[2]<o.MAX_SIZE){const[i]=n.slice(-1);if(r-i[2]<o.MAX_INTERVAL)return n.push(t),e}}return e.push([t]),e}),[]).reduce(((e,t)=>{const n=t.reduce(((e,t)=>{let[n]=t;return e+n}),0);if(n<=e[0])return e;const r=t.filter((e=>{let[,t]=e;return t})).reduce(((e,t)=>{let[n,r]=t;return e.set(r,n+(e.get(r)||0)),e}),new Map);return[n,t.length,r]}),[0,0]),u={cls:1e4*c,countCls:s,clsOld:1e4*i};if(a){const e=[];for(const t of a.entries())e.push(t);if(e.length){var l;e.sort(((e,t)=>t[1]-e[1]));let n=e[0][0];(null==(l=n)?void 0:l.nodeType)!==Node.ELEMENT_NODE&&(n=n.parentElement),t&&n&&(u.element=x(n));const r=P(n);r&&(u.clsId=r);const{tagName:o}=n;o&&(u.clsTag=o)}}return u}const he=["pointerdown","click","mousedown","keydown","touchstart"];function ye(e,t,n){let[r,c]=e;void 0===n&&(n=he);let s=0;return n.forEach((e=>o(r,e,a,!1))),()=>{n.forEach((e=>i(r,e,a,!1)))};function a(e){let{type:t,timeStamp:n,cancelable:s}=e;if(!s)return;const a=c.now(),l=n>1e12?Date.now():a,f=Math.max(l-n,0),d=a-f;t===he[0]?function(e,t,n){function c(){u(e,t,n),s()}function s(){i(r,"pointerup",c,!1),i(r,"pointercancel",s,!1)}o(r,"pointerup",c,!1),o(r,"pointercancel",s,!1)}(t,d,f):u(t,d,f)}function u(e,n,r){const o=n+r;o-s<j.eventDelta||(s=o,t(e,n,r))}}const ge="first-input";function Te(e,t,n){const r=[],o=[];let i;const c=()=>r.push(new Promise((e=>i=e)));return c(),{report:t=>{t=we(e,t),o.push(t),i({value:t}),c(),n&&l(e,n,t)},result:Promise.resolve({entryType:t,[Symbol.iterator](){let e=0;return{next:()=>({value:o[e++],done:e>o.length})}},[Symbol.asyncIterator](){let e=0;return{next:()=>r[e++]}},...n&&{eventName:n}})}}function we(e,t){return Object.freeze((n=function(e,t){return Symbol.iterator in t?t:(t.analytics=_(e),t.analytics?t:Object.entries(t).filter((e=>{let[t]=e;return N[t]})).reduce(((e,t)=>{let[n,r]=t;return e[n]=r,e}),{}))}(e,{...t,clientType:j.clientType}),Object.entries(n).filter((e=>{let[,t]=e;return"number"==typeof t})).reduce(((e,t)=>{let[n,r]=t;return e[n]=Math.round(r),e}),n)));var n}const be="tti";function Se(e,t,n){if(n.end>n.start)try{e.measure(t,n)}catch(e){}}const Ee="page-transition";let Pe,xe=0;function Ie(e){const[t,n,r]=e;let i=d();const{clientType:c,pageEvent:s}=j,{report:a,result:u}=Te(t,"page-transitions",s);o(t,"popstate",(e=>{let{type:t,timeStamp:n}=e;return f(t,n,0)}),!1),Z(r,"event",(function(e){e.reduceRight(((e,t)=>{const{name:n}=t;return"click"!==n&&"keyup"!==n||f(n,t.startTime,t.duration),e}),void 0)}),!1,{durationThreshold:1})||ye(e,f,["click"]);let l=!1;return u;function f(t,r,o){l||(l=!0,ue(e,Promise.resolve(r+o)).then((e=>{l=!1;const s=d();if(function(e,t){return w(e)!==w(t)}(i,s)){const u=e.tti-r,l={entryType:Ee,clientType:c,origin:i,destination:s,action:t,startTime:r,delay:o,duration:u,pn:++xe,...e};i=s,a(l),j.noMeasure||function(e,t){let{pn:n,startTime:r,tti:o,tbt:i}=t;Se(e,"page #"+n+" tti",{start:r,end:o,detail:i})}(n,l)}})))}function d(){return O(t.location.href,t)}}function Re(){var e;return fe(null==(e=Pe)?void 0:e.lcp())}const Ce="crux-cls";function Me(e,t){return t.then((t=>{let{cls:n}=t,r=0;const i=e[0],{report:c,result:s}=Te(i,"crux-cls-s",j.clsEvent);return o(i,"visibilitychange",(function(){p(i)||d(e).then((t=>{let{startTime:o}=t;const i=ve(e);i&&i.cls!==n&&(n=i.cls,c({...i,entryType:Ce,startTime:o,count:++r}))}))}),!1),s}))}function Le(e){console.log("⏱",e)}var ke,De=function(){return window.performance&&performance.getEntriesByType&&performance.getEntriesByType("navigation")[0]},je=function(e){if("loading"===document.readyState)return"loading";var t=De();if(t){if(e<t.domInteractive)return"loading";if(0===t.domContentLoadedEventStart||e<t.domContentLoadedEventStart)return"dom-interactive";if(0===t.domComplete||e<t.domComplete)return"dom-content-loaded"}return"complete"},Ne=function(e){var t=e.nodeName;return 1===e.nodeType?t.toLowerCase():t.toUpperCase().replace(/^#/,"")},Oe=function(e,t){var n="";try{for(;e&&9!==e.nodeType;){var r=e,o=r.id?"#"+r.id:Ne(r)+(r.className&&r.className.length?"."+r.className.replace(/\s+/g,"."):"");if(n.length+o.length>(t||100)-1)return n||o;if(n=n?o+">"+n:o,r.id)break;e=r.parentNode}}catch(e){}return n},_e=-1,Be=function(e,t){var n=De(),r="navigate";return _e>=0?r="back-forward-cache":n&&(r=document.prerendering||function(){var e=De();return e&&e.activationStart||0}()>0?"prerender":document.wasDiscarded?"restore":n.type.replace(/_/g,"-")),{name:e,value:void 0===t?-1:t,rating:"good",delta:0,entries:[],id:"v3-".concat(Date.now(),"-").concat(Math.floor(8999999999999*Math.random())+1e12),navigationType:r}},Ae=function(e,t,n){try{if(PerformanceObserver.supportedEntryTypes.includes(e)){var r=new PerformanceObserver((function(e){Promise.resolve().then((function(){t(e.getEntries())}))}));return r.observe(Object.assign({type:e,buffered:!0},n||{})),r}}catch(e){}},ze=function(e,t,n,r){var o,i;return function(c){t.value>=0&&(c||r)&&((i=t.value-(o||0))||void 0===o)&&(o=t.value,t.delta=i,t.rating=function(e,t){return e>t[1]?"poor":e>t[0]?"needs-improvement":"good"}(t.value,n),e(t))}},Fe=(new Date,0),qe=1/0,He=0,Ve=function(e){e.forEach((function(e){e.interactionId&&(qe=Math.min(qe,e.interactionId),He=Math.max(He,e.interactionId),Fe=He?(He-qe)/7+1:0)}))},We=function(){return ke?Fe:performance.interactionCount||0},Xe=0,Ue=function(){return We()-Xe},Ze=[],$e={},Ge=function(e){var t=Ze[Ze.length-1],n=$e[e.interactionId];if(n||Ze.length<10||e.duration>t.latency){if(n)n.entries.push(e),n.latency=Math.max(n.latency,e.duration);else{var r={id:e.interactionId,latency:e.duration,entries:[e]};$e[r.id]=r,Ze.push(r)}Ze.sort((function(e,t){return t.latency-e.latency})),Ze.splice(10).forEach((function(e){delete $e[e.id]}))}},Je=function(e,t){!function(e,t){t=t||{},function(e){document.prerendering?addEventListener("prerenderingchange",(function(){return e()}),!0):e()}((function(){var n=[200,500];"interactionCount"in performance||ke||(ke=Ae("event",Ve,{type:"event",buffered:!0,durationThreshold:0}));var r,o=Be("INP"),i=function(e){e.forEach((function(e){e.interactionId&&Ge(e),"first-input"===e.entryType&&!Ze.some((function(t){return t.entries.some((function(t){return e.duration===t.duration&&e.startTime===t.startTime}))}))&&Ge(e)}));var t,n=(t=Math.min(Ze.length-1,Math.floor(Ue()/50)),Ze[t]);n&&n.latency!==o.value&&(o.value=n.latency,o.entries=n.entries,r())},c=Ae("event",i,{durationThreshold:t.durationThreshold||40});r=ze(e,o,n,t.reportAllChanges),c&&(c.observe({type:"first-input",buffered:!0}),function(e){var t=function(t){"pagehide"!==t.type&&"hidden"!==document.visibilityState||e(t)};addEventListener("visibilitychange",t,!0),addEventListener("pagehide",t,!0)}((function(){i(c.takeRecords()),o.value<0&&Ue()>0&&(o.value=0,o.entries=[]),r(!0)})),function(e){addEventListener("pageshow",(function(t){t.persisted&&(_e=t.timeStamp,e(t))}),!0)}((function(){Ze=[],Xe=We(),o=Be("INP"),r=ze(e,o,n,t.reportAllChanges)})))}))}((function(t){!function(e){if(e.entries.length){var t=e.entries.sort((function(e,t){return t.duration-e.duration||t.processingEnd-t.processingStart-(e.processingEnd-e.processingStart)}))[0];e.attribution={eventTarget:Oe(t.target),eventType:t.name,eventTime:t.startTime,eventEntry:t,loadState:je(t.startTime)}}else e.attribution={}}(t),e(t)}),t)};const Ke="responsiveness";let Qe=!1;const{report:Ye,result:et}=Te(window,Ke,Ke);window.addEventListener("info-called",(()=>Qe=!0));const tt=e=>(Je(nt(e)),et),nt=e=>{let t=0;return n=>{const{reportData:r,logData:o}=rt(n),i={entryType:Ke,worstLatency:n.value,numOfResponsivenessEvents:++t,...r};Ye(i);const c="true"===new URLSearchParams(window.location.search).get("debug");(e||Qe||c)&&Le({currentLatency:n.value,...i,...o})}},rt=e=>{const t=e.attribution,n=t.eventEntry.name,r=t.eventEntry.target,o=t.eventEntry.duration,i=t.loadState;return{reportData:{interactionWaterfall:t.eventTarget,actions:n,latencyByEntry:o,startTime:t.eventTime,loadState:i,...ot(r)},logData:{target:r}}},ot=e=>{var t;const n=I(r=e,"*[id]")||r;var r;const o=null!=(t=null==n?void 0:n.id)?t:"";return{elementType:null==e?void 0:e.localName,compId:o}};var it=n(158);const ct="wix-perf-measure-info";let st;!function(){if("function"!=typeof Promise||!Promise.allSettled)return;const{document:e,performance:t}=window,n=e.currentScript||e.getElementById("wix-perf-measure");n&&j.load(window,n);const{noMeasure:r,log:o,label:i}=j,c=[window,t,window.PerformanceObserver,window.setTimeout,window.clearTimeout],s=function(e,t){const n=M("environment",function(e){let[t]=e;const{screen:n}=t,r={screenRes:n.width+"x"+n.height,availScreenRes:n.availWidth+"x"+n.availHeight,windowInner:t.innerWidth+"x"+t.innerHeight,windowOuter:t.outerWidth+"x"+t.outerHeight,devicePixelRatio:10*t.devicePixelRatio,colorDepth:n.colorDepth};j.version&&(r.version=j.version);const{orientation:o}=n;null!=o&&o.type&&(r.orientation=o.type);const{navigator:i}=t,{connection:c,deviceMemory:s,hardwareConcurrency:a}=i;if(a&&(r.cores=a),s&&(r.memory=Math.floor(s)),c){const{type:e,effectiveType:t,rtt:n,downlink:o,saveData:i}=c;e&&(r.networkType=e),t&&(r.effectiveType=t),g(n)&&n&&(r.rtt=n),o&&(r.download=Math.min(o,1e4)),T(i)&&(r.saveData=i)}if(t.matchMedia){const e=t.matchMedia("(prefers-reduced-motion:reduce)");r.reducedMotion=e.matches}return i.getBattery?i.getBattery().then((e=>{let{charging:t,level:n}=e;return r.lowBattery=!1===t&&n<.1,r})).catch((()=>r)):Promise.resolve(r)}(e),function(e){let[t,n]=e;return new Promise(((e,r)=>{let o=0;!function i(){const{navigationStart:c,fetchStart:s,domainLookupStart:a,domainLookupEnd:u,redirectStart:l,redirectEnd:f,connectStart:d,connectEnd:p,secureConnectionStart:m,requestStart:v,responseStart:h}=n.timing,y=h-c;if(!(y>=0))return void(++o>10?r(B):setTimeout(i,100));const{document:{referrer:T},location:{href:w}}=t,S=b(n,"navigation");e({entryType:B,url:O(w,t),referrer:O(T,t),...S&&{navigationType:S.type,protocol:S.nextHopProtocol},dns:u-a,...g(s)&&{fetchStart:s-c},...f&&{redirect:f-l},...m?{tcp:m-d,ssl:p-m}:{tcp:p-d},ttfb:y,response:h-v})}()}))}(e),function(e){let[t]=e;const n=L(t);if(!n)return Promise.reject("wix-start");const r={},{thunderboltVersion:o,viewerModel:i,boltVersion:c,rendererModel:s}=t,{site:a={}}=(null==i?void 0:i.site)||s||{};R(r,"msid",a.metaSiteId||n.msId);const u=t.commonConfig||(null==i?void 0:i.siteFeaturesConfigs.commonConfig);return R(r,"_brandId",null==u?void 0:u.brand),o?l(a.isResponsive?"thunderboltResponsive":"thunderbolt",o):l(n.renderType,c),R(r,"dc",n.dc||a.dc),Promise.resolve(r);function l(e,t){R(r,"viewerName",e),R(r,"v",t)}}(e)),r=d(e),o=ce(e),i=function(e){const[,,t,n]=e;return re(t,ge,((e,t)=>{const{name:r,startTime:o,processingStart:i,duration:c,target:s}=e[0],a={entryType:ge,action:r,startTime:o,delay:i-o,duration:c},u=P(s);u&&(a.closestId=u),n((()=>t(a)),0)})).catch((()=>function(e,t){return new Promise((t=>{const n=ye(e,((e,r,o)=>{n(),t({entryType:"first-input",action:e,startTime:r,delay:o})}))}))}(e)))}(e),c=ue(e,(l="fcp",o.then((e=>{let{[l]:t}=e;return t}))),i),s=function(e,t,n,r){let[,o,i,c,s]=e;return t.then((e=>{let{tti:t}=e;const{resourceDebounce:a}=j;let u;const l=new Promise((e=>{const n=Math.max(a-(o.now()-t),0);u=c(e,n)})),f=re(i,le,((e,t)=>{s(u),u=c((()=>t(e[e.length-1])),a)}));return Promise.race([f,l,n.then(m),r.then(m)]).then((e=>{const t=null==f.takeRecords?void 0:f.takeRecords(),[n]=null==t?void 0:t.slice(-1);return fe(n||e)})).catch(v(le))}))}(e,c,r,i),a=M("loaded",c,s,function(e){return ne(e,"scripts",{filter:$})}(e),function(e){return ne(e,"images",{filter:G})}(e),function(e){return ne(e,"fonts",{filter:J})}(e),q(e),U(e,c)).then((t=>Object.assign(t,ve(e)))),u=function(e,t){const[,,n]=e;let r,o=Promise.resolve({});function i(e){null!=e&&e.length&&([r]=e.slice(-1),o=fe(r))}const c=Z(n,le,i);return Pe={cls:()=>ve(e,!0),lcp:()=>(i(null==c||null==c.takeRecords?void 0:c.takeRecords()),r)},t.then((t=>{let{startTime:n}=t;return o.then((t=>({...ve(e),...t,entryType:"crux",startTime:n,pn:xe})))}))}(e,r);var l;return function(e){const t={};return n("lcp"),n("cls"),Object.defineProperties(e,t);function n(e){t[e]={value:()=>{var t,n;return null==(t=Pe)||null==(n=t[e]())?void 0:n.element}}}}([n,o,a,i,r,Ie(e),u,Me(e,u),tt(t)].map((t=>t.then((t=>we(e[0],t))))))}(c,o);(function(e,t,n,r,o,i){Object.defineProperty(r,"info",{value(){const[c]=e;function s(t){t?t.default(r,o().catch(m),i(e)):a()}function a(){console.info("Failed to load info")}void 0===it&&(c.process={env:{}}),st||(st=new Promise(((e,r)=>{if(!n)return r();const o=t.createElement("script");o.src=n.replace("measure.","measure-info."),o.onload=e,o.onerror=r,t.head.appendChild(o)}))),st.then((()=>{"function"==typeof requirejs?requirejs([ct],s,a):s(c[ct])})).catch(a)}})})(c,e,j.src,s,Re,ve),Object.freeze(s);const a=s.slice(0,3),u=s.slice(3,5);r||function(e,t){function n(e,t){return e.find((e=>{let{entryType:n}=e;return n===t}))||{}}function r(t,n,r){if(n)return e.mark(t,{startTime:n,detail:r})}C(t).then((t=>{const{tti:o,tbt:i,lcp:c}=n(t,"loaded");if(!r(be,o,i))return void e.clearMarks(be);r("lcp",c);const{fcp:s}=n(t,"initial-paint"),a=c<o,u={start:a?c:s,end:o,detail:i};Se(e,"lcp",{start:a?s:o,end:c}),Se(e,be,u)}),m)}(t,a),o&&function(e,t){C(e).then((e=>e.forEach(Le)),m),t.forEach((e=>e.then(Le,m)))}(a,u),window[i]=s,l(window,i,s),function(e,t){const{URLSearchParams:n}=e;if(n){const r=new n(e.location.search);for(const n of r.keys())if("showperfinfo"===n.toLowerCase())return Promise.all(t.slice(0,3)).then((t=>{let[{viewerName:n,ttfb:r},{fcp:o},{lcp:i,cls:c,tti:s,tbt:a}]=t;e.alert("Viewer="+n+"\nTTFB="+r+"\nFCP="+o+"\nLCP="+i+"\nCLS="+c+"\nTTI="+s+"\nTBT="+a)})),!0}}(window,s)}()}(),r}()}));