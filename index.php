

<!doctype html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" style="scroll-behavior: smooth;">
<head><meta charset="UTF-8" /><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="1.2.5.1",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this.t.bind(this),this.touchStartHandler=this.i.bind(this),this.touchMoveHandler=this.o.bind(this),this.touchEndHandler=this.h.bind(this),this.clickHandler=this.u.bind(this),this.interceptedClicks=[],this.interceptedClickListeners=[],this.l(this),window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.everythingLoaded&&this.m()})),document.addEventListener("DOMContentLoaded",(()=>{this.p()})),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}k(t){document.hidden?t.t():(this.triggerEvents.forEach((e=>window.addEventListener(e,t.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler))}_(){this.triggerEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}i(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this.L(t.target,!0),this.M(t.target,"onclick","rocket-onclick"),this.C())}o(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.O()}h(){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}u(t){t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this.O()}D(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))}))}l(t){EventTarget.prototype.addEventListenerBase=EventTarget.prototype.addEventListener,EventTarget.prototype.addEventListener=function(e,i,o){"click"!==e||t.windowLoaded||i===t.clickHandler||t.interceptedClickListeners.push({target:this,func:i,options:o}),(this||window).addEventListenerBase(e,i,o)}}L(t,e){this.interceptedClickListeners.forEach((i=>{i.target===t&&(e?t.removeEventListener("click",i.func,i.options):t.addEventListener("click",i.func,i.options))})),t.parentNode!==document.documentElement&&this.L(t.parentNode,e)}S(){return new Promise((t=>{this.T?this.O=t:t()}))}C(){this.T=!0}O(){this.T=!1}M(t,e,i){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(i,event.target.getAttribute(e)),event.target.removeAttribute(e))}t(){this._(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this.R.bind(this)):this.R()}p(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&0!==i.indexOf("data:")){0===i.indexOf("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.j(t,"preconnect")}async R(){this.lastBreath=Date.now(),this.P(this),this.F(this),this.q(),this.A(),this.I(),await this.U(this.delayedScripts.normal),await this.U(this.delayedScripts.defer),await this.U(this.delayedScripts.async);try{await this.W(),await this.H(this),await this.J()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.S().then((()=>{this.D()})),this.N()}A(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async B(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),i.hasAttribute("src")?(i.addEventListener("load",o),i.addEventListener("error",(function(){i.setAttribute("data-rocket-status","failed"),e()})),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o),t.addEventListener("error",(function(){t.setAttribute("data-rocket-status","failed"),e()})),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed"),e()}}));t.setAttribute("data-rocket-status","skipped")}async U(t){const e=t.shift();return e&&e.isConnected?(await this.B(e),this.U(t)):Promise.resolve()}I(){this.j([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}j(t,e){var i=document.createDocumentFragment();t.forEach((t=>{const o=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(o){const n=document.createElement("link");n.href=o,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),i.appendChild(n),this.trash.push(n)}})),document.head.appendChild(i)}P(t){let e={};function i(i,o){return e[o].eventsToRewrite.indexOf(i)>=0&&!t.everythingLoaded?"rocket-"+i:i}function o(t,o){!function(t){e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(o)}function n(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o||function(){},set(n){t.everythingLoaded?o=n:e["rocket"+i]=o=n}})}o(document,"DOMContentLoaded"),o(window,"DOMContentLoaded"),o(window,"load"),o(window,"pageshow"),o(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}F(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){if(o&&o.fn&&!t.allJQueries.includes(o)){o.fn.ready=o.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(o):document.addEventListener("rocket-DOMContentLoaded",(()=>e.bind(document)(o))),o([])};const e=o.fn.on;o.fn.on=o.fn.init.prototype.on=function(){return this[0]===window&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),e.apply(this,arguments),this},t.allJQueries.push(o)}e=o}o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}async H(t){const e=document.querySelector("script[data-webpack]");e&&(await async function(){return new Promise((t=>{e.addEventListener("load",t),e.addEventListener("error",t)}))}(),await t.K(),await t.H(t))}async W(){this.domReadyFired=!0,await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}async J(){await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted}),this.windowLoaded=!0}m(){document.onreadystatechange&&document.onreadystatechange(),window.onload&&window.onload(),window.onpageshow&&window.onpageshow({persisted:this.persisted})}q(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript;i||console.error("WPRocket unable to document.write this: "+e);const o=document.createRange(),n=i.parentElement;let s=t.get(i);void 0===s&&(s=i.nextSibling,t.set(i,s));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),n.insertBefore(c,s)}}async G(){Date.now()-this.lastBreath>45&&(await this.K(),this.lastBreath=Date.now())}async K(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}N(){this.trash.forEach((t=>t.remove()))}static run(){const t=new RocketLazyLoadScripts;t.k(t)}}RocketLazyLoadScripts.run()})();</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript">
/* <![CDATA[ */
 var gform;gform||(document.addEventListener("gform_main_scripts_loaded",function(){gform.scriptsLoaded=!0}),window.addEventListener("DOMContentLoaded",function(){gform.domLoaded=!0}),gform={domLoaded:!1,scriptsLoaded:!1,initializeOnLoaded:function(o){gform.domLoaded&&gform.scriptsLoaded?o():!gform.domLoaded&&gform.scriptsLoaded?window.addEventListener("DOMContentLoaded",o):document.addEventListener("gform_main_scripts_loaded",o)},hooks:{action:{},filter:{}},addAction:function(o,n,r,t){gform.addHook("action",o,n,r,t)},addFilter:function(o,n,r,t){gform.addHook("filter",o,n,r,t)},doAction:function(o){gform.doHook("action",o,arguments)},applyFilters:function(o){return gform.doHook("filter",o,arguments)},removeAction:function(o,n){gform.removeHook("action",o,n)},removeFilter:function(o,n,r){gform.removeHook("filter",o,n,r)},addHook:function(o,n,r,t,i){null==gform.hooks[o][n]&&(gform.hooks[o][n]=[]);var e=gform.hooks[o][n];null==i&&(i=n+"_"+e.length),gform.hooks[o][n].push({tag:i,callable:r,priority:t=null==t?10:t})},doHook:function(n,o,r){var t;if(r=Array.prototype.slice.call(r,1),null!=gform.hooks[n][o]&&((o=gform.hooks[n][o]).sort(function(o,n){return o.priority-n.priority}),o.forEach(function(o){"function"!=typeof(t=o.callable)&&(t=window[t]),"action"==n?t.apply(null,r):r[0]=t.apply(null,r)})),"filter"==n)return r[0]},removeHook:function(o,n,t,i){var r;null!=gform.hooks[o][n]&&(r=(r=gform.hooks[o][n]).filter(function(o,n,r){return!!(null!=i&&i!=o.tag||null!=t&&t!=o.priority)}),gform.hooks[o][n]=r)}}); 

</script>
<link rel="shortcut icon" type="image" href="http://www.elloe.ai/wp-content/uploads/2024/04/full.png">

<link rel="shortcut icon" type="image" href="http://www.elloe.ai/wp-content/uploads/2024/04/full.png">

<meta name="theme-color" content="%23ffffff">
<link rel="pingback" href="https://forethought.ai/xmlrpc.php">
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff" as="font" type="font/woff" crossorigin>
<meta name="ahrefs-site-verification" content="5985101542cc248746a76bb85a9cc2fe4070be296d19457a95ef483477677111">

<script type="rocketlazyloadscript" async data-rocket-src="https://www.googletagmanager.com/gtag/js?id=UA-147302461-1"></script>
<script type="rocketlazyloadscript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147302461-1');
</script>

<script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTRVVPZ');</script>

<meta name="google-site-verification" content="yDFQlk0VBp8LIZwaVc0YB8RnLukpIWFgs600B1BplT8" />

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
_linkedin_partner_id = "2638212";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="rocketlazyloadscript" data-rocket-type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>

<meta name="ahrefs-site-verification" content="1307d40374c00971439669f485756e5704c83c7e7179b2bc1ae7df475237d561">
<script type="rocketlazyloadscript">(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"343062783", enableAutoSpaTracking: true};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://app.termly.io/resource-blocker/1f6592ca-d72a-4c4a-ba3a-42c79c05a336" defer>
			</script>

<title>Customer Support AI | CX Automation Platform | Forethought</title><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff" crossorigin><style id="wpr-usedcss">.termly-styles-module-primary-33c456{color:#4672ff}.termly-styles-module-secondary-5c5b6d{color:#00c999}.termly-styles-module-dangerous-6df7c1{color:#ed7474}.termly-styles-module-root-1df63b{font-size:.875em;font-family:Roboto,"Open Sans",Helvetica,Arial}.termly-styles-module-root-1df63b.termly-styles-module-disabled-52fbba{opacity:.5;cursor:not-allowed}.termly-styles-module-root-1df63b:not(.termly-styles-module-disabled-52fbba){cursor:pointer}.termly-styles-module-outline-67acb4{border-width:1px;border-radius:3px;border-style:solid;background:#fff;padding:.625em 2em}.termly-styles-module-outline-67acb4.termly-styles-module-primary-33c456{border-color:#4672ff}.termly-styles-module-outline-67acb4.termly-styles-module-secondary-5c5b6d{border-color:#00c999}.termly-styles-module-outline-67acb4.termly-styles-module-dangerous-6df7c1{border-color:#ed7474}.termly-styles-module-solid-b8cec0{border-width:1px;border-radius:3px;border-style:solid;color:#fff;padding:.625em 2em}.termly-styles-module-solid-b8cec0.termly-styles-module-primary-33c456{border-color:#4672ff;background:#4672ff}.termly-styles-module-solid-b8cec0.termly-styles-module-secondary-5c5b6d{border-color:#00c999;background:#00c999}.termly-styles-module-solid-b8cec0.termly-styles-module-dangerous-6df7c1{border-color:#ed7474;background:#ed7474}.termly-styles-module-text-0d2428{border:none;background:rgba(0,0,0,0);padding:0}.termly-styles-module-root-652774{display:flex;flex-direction:row;font-size:1rem;font-family:Roboto,"Open Sans",Helvetica,Arial;background:#e6e7e8;height:100%;align-items:center;justify-content:center}.termly-styles-module-shadowBox-c32645{display:inline-flex;flex-direction:column;text-align:center;background:#fff;border:1px solid rgba(255,255,255,.3);box-shadow:0 0 15px rgba(0,0,0,.15);border-radius:5px;padding:2em}.termly-styles-module-title-82a29a{font-size:1.25em;font-weight:500;margin-bottom:.75em;line-height:1}.termly-styles-module-content-a10582{font-size:.75em;line-height:1.75}.termly-styles-module-buttons-9f54ab{display:flex;justify-content:center;margin-top:1.25em}.termly-styles-module-buttons-9f54ab>*{margin:0 .5em}.termly-styles-module-root-e11974{display:flex;font-family:Roboto,"Open Sans",Helvetica,Arial;gap:8px}.termly-styles-module-root-e11974.termly-styles-module-disabled-ce19c7{cursor:not-allowed;opacity:.5}.termly-styles-module-root-e11974:not(.termly-styles-module-disabled-ce19c7){cursor:pointer}.termly-styles-module-checkbox-c45fb9{width:18px;height:18px;border:1px solid #e1e3e6;border-radius:3px;background-image:linear-gradient(to top,#f2f4fb,#feffff);display:flex;flex:0 0 18px}.termly-styles-module-checkbox-c45fb9.termly-styles-module-checked-239a89{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSI5IiB2aWV3Qm94PSIwIDAgMTIgOSI+CiAgICA8ZGVmcz4KICAgICAgICA8bGluZWFyR3JhZGllbnQgaWQ9ImEiIHgxPSIwJSIgeTE9IjUwJSIgeTI9IjUwJSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMwMEE2REEiLz4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjNkY4OUVEIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9InVybCgjYSkiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYgMTl2LTNINHY1aDEwdi0ySDZ6IiB0cmFuc2Zvcm09InJvdGF0ZSgtNDUgLTEwLjYwNyAxNC42MjEpIi8+Cjwvc3ZnPgo=),linear-gradient(to top,#f2f4fb,#feffff);background-repeat:no-repeat;background-position:center}.termly-styles-module-input-a71c43{display:none}.termly-styles-module-label-9bfc8a{display:flex;align-items:center}.termly-styles-module-root-e1e837{border-radius:3px;border:1px solid #ced4da;color:#363840;font-size:inherit;line-height:1.429;padding:.714em 1.0714em}.termly-styles-module-root-5358ff{height:100%}.termly-styles-module-spinner-f9b18a{animation:2s linear infinite termly-styles-module-rotate-2b52fb;z-index:2;position:relative;width:100%;height:100%;display:flex}.termly-styles-module-spinner-f9b18a .termly-styles-module-path-fbf5d6{stroke:var(--loading-circle-color,hsl(210,70%,75%));stroke-linecap:round;animation:1.5s ease-in-out infinite termly-styles-module-dash-3b98ac}@keyframes termly-styles-module-rotate-2b52fb{100%{transform:rotate(360deg)}}@keyframes termly-styles-module-dash-3b98ac{0%{stroke-dasharray:1,150;stroke-dashoffset:0}50%{stroke-dasharray:90,150;stroke-dashoffset:-35}100%{stroke-dasharray:90,150;stroke-dashoffset:-124}}.termly-styles-module-root-3d61c0{display:flex;font-family:Roboto,"Open Sans",Helvetica,Arial}.termly-styles-module-root-3d61c0.termly-styles-module-disabled-96ea1d{cursor:not-allowed}.termly-styles-module-root-3d61c0:not(.termly-styles-module-disabled-96ea1d){cursor:pointer}.termly-styles-module-input-4d9e6c{display:none}.termly-styles-module-radio-32f70d{width:15px;height:15px;border-radius:9px;border:1px solid #ced0da;background-image:linear-gradient(to top,#f2f4fb,#feffff);display:flex;justify-content:center;align-items:center;gap:5px}.termly-styles-module-radio-32f70d.termly-styles-module-checked-a79bd8 .termly-styles-module-radio__inner-7cb14e{width:7px;height:7px;border-radius:4px;background-color:#239eeb}.termly-styles-module-radio-32f70d.termly-styles-module-disabled-96ea1d{opacity:.5}.termly-styles-root-2c05d3{--previewer-background-color:#f5f6fa}.termly-styles-previewBox-ce1352{background:#f5f6fa;border:1px solid #e8e8e8;border-radius:.25rem;box-shadow:0 2px 4px rgba(226,226,226,.5);margin-bottom:1rem}.termly-styles-button-caaa11{text-transform:uppercase;font-weight:500;display:flex;align-items:center;justify-content:center;width:100%;line-height:1.25rem}.termly-styles-previewButton__icon-73cfb5{height:1.25rem;width:1.25rem;margin-right:.25rem}.termly-styles-root-f04f6d{background-color:#fff;border:1px solid #eee;font-size:.375rem;margin:1rem;max-height:11.625rem;overflow:hidden;position:relative}.termly-styles-document-5d62fb{padding:1rem;background:var(--background)}.termly-styles-document-5d62fb::after{content:"";display:block;position:absolute;left:0;right:0;bottom:0;margin:auto;height:10em;background:linear-gradient(to top,var(--previewer-background-color) 10%,transparent);opacity:1;transition:opacity .2s ease}.termly-styles-title-399c7e{color:var(--title-color);font-family:var(--title-font-family);font-weight:700;text-transform:uppercase}.termly-styles-lastUpdated-43cc72{margin-top:1em;font-size:smaller}.termly-styles-body-1b1bcc{color:var(--body-color);font-family:var(--body-font-family);margin-top:3em;line-height:1.5}.termly-styles-root-8ffd4a{width:100%;background:#fff}@keyframes termly-styles-wave-b89649{0%{background-position:-41rem 0}100%{background-position:41rem 0}}.termly-styles-heading-e8b13b,.termly-styles-paragraph-e33353{height:.9375rem;border-radius:.1875rem;background:linear-gradient(to right,rgba(226,226,226,.5) 0,rgba(226,226,226,.2) 35%,rgba(226,226,226,.5) 70%);animation:2s linear infinite forwards termly-styles-wave-b89649}.termly-styles-heading-e8b13b{width:35%;margin:1.875rem 0 .625rem}.termly-styles-paragraph-e33353{width:100%;margin:.3125rem 0}.termly-styles-logo-744624{display:block;margin:0 auto 3.125rem;width:11.125rem;height:2.375rem;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzgiIGhlaWdodD0iMzgiIHZpZXdCb3g9IjAgMCAxNzggMzgiPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8cGF0aCBmaWxsPSIjRDFEMUQxIiBkPSJNNC4yODMgMjQuMTA3Yy0uNzA1IDAtMS4yNTgtLjI1Ni0xLjY2LS43NjhoLS4wODVjLjA1Ny41MDIuMDg2Ljc5Mi4wODYuODd2Mi40MzRILjk4NXYtOC42NDhoMS4zMzJsLjIzMS43NzloLjA3NmMuMzgzLS41OTQuOTUtLjg5MiAxLjcwMi0uODkyLjcxIDAgMS4yNjQuMjc0IDEuNjY1LjgyMi40MDEuNTQ4LjYwMiAxLjMwOS42MDIgMi4yODMgMCAuNjQtLjA5NCAxLjE5OC0uMjgyIDEuNjctLjE4OC40NzMtLjQ1Ni44MzMtLjgwMyAxLjA4LS4zNDcuMjQ3LS43NTYuMzctMS4yMjUuMzd6TTMuOCAxOS4xOTNjLS40MDUgMC0uNy4xMjQtLjg4Ni4zNzMtLjE4Ny4yNDktLjI4My42Ni0uMjkgMS4yMzN2LjE3N2MwIC42NDUuMDk1IDEuMTA3LjI4NyAxLjM4Ni4xOTIuMjguNDk1LjQxOS45MS40MTkuNzM0IDAgMS4xMDEtLjYwNSAxLjEwMS0xLjgxNiAwLS41OS0uMDktMS4wMzQtLjI3LTEuMzI5LS4xODItLjI5NS0uNDY1LS40NDMtLjg1Mi0uNDQzem01LjU3IDEuNzk0YzAgLjU5NC4wOTggMS4wNDQuMjkzIDEuMzQ4LjE5Ni4zMDQuNTEzLjQ1Ny45NTQuNDU3LjQzNyAwIC43NS0uMTUyLjk0Mi0uNDU0LjE5Mi0uMzAzLjI4OC0uNzUzLjI4OC0xLjM1MSAwLS41OTUtLjA5Ny0xLjA0LS4yOS0xLjMzOC0uMTk0LS4yOTctLjUxLS40NDUtLjk1LS40NDUtLjQzOCAwLS43NTMuMTQ3LS45NDYuNDQzLS4xOTQuMjk1LS4yOS43NDItLjI5IDEuMzR6bTQuMTUzIDBjMCAuOTc3LS4yNTggMS43NDItLjc3NCAyLjI5My0uNTE1LjU1Mi0xLjIzMy44MjctMi4xNTQuODI3LS41NzYgMC0xLjA4NS0uMTI2LTEuNTI1LS4zNzhhMi41MiAyLjUyIDAgMCAxLTEuMDE1LTEuMDg4Yy0uMjM3LS40NzMtLjM1NS0xLjAyNC0uMzU1LTEuNjU0IDAtLjk4MS4yNTYtMS43NDQuNzY4LTIuMjg4LjUxMi0uNTQ1IDEuMjMyLS44MTcgMi4xNi0uODE3LjU3NiAwIDEuMDg1LjEyNiAxLjUyNS4zNzYuNDQuMjUxLjc3OS42MSAxLjAxNSAxLjA4LjIzNi40NjkuMzU1IDEuMDE5LjM1NSAxLjY0OXpNMTkuNzEgMjRsLS40NjItMi4xLS42MjMtMi42NTNoLS4wMzdMMTcuNDkzIDI0SDE1LjczbC0xLjcwOC02LjAwNWgxLjYzM2wuNjkzIDIuNjU5Yy4xMS40NzYuMjI0IDEuMTMzLjMzOCAxLjk3MWguMDMyYy4wMTUtLjI3Mi4wNzctLjcwNC4xODgtMS4yOTRsLjA4Ni0uNDU3Ljc0Mi0yLjg3OWgxLjgwNGwuNzA0IDIuODc5Yy4wMTQuMDc5LjAzNy4xOTUuMDY3LjM1YTIwLjk5OCAyMC45OTggMCAwIDEgLjE2NyAxLjAwMmMuMDIzLjE2NS4wMzYuMjk5LjA0LjM5OWguMDMyYy4wMzItLjI1OC4wOS0uNjExLjE3Mi0xLjA2LjA4Mi0uNDUuMTQxLS43NTQuMTc3LS45MTFsLjcyLTIuNjU5aDEuNjA2TDIxLjQ5NCAyNGgtMS43ODN6bTcuMDg2LTQuOTUyYy0uMzQ4IDAtLjYyLjExLS44MTcuMzMtLjE5Ny4yMi0uMzEuNTMzLS4zMzguOTM3aDIuMjk5Yy0uMDA4LS40MDQtLjExMy0uNzE3LS4zMTctLjkzNy0uMjA0LS4yMi0uNDgtLjMzLS44MjctLjMzem0uMjMgNS4wNmMtLjk2NiAwLTEuNzIyLS4yNjctMi4yNjYtLjgtLjU0NC0uNTM0LS44MTYtMS4yOS0uODE2LTIuMjY3IDAtMS4wMDcuMjUxLTEuNzg1Ljc1NC0yLjMzNC41MDMtLjU1IDEuMTk5LS44MjUgMi4wODctLjgyNS44NDggMCAxLjUxLjI0MiAxLjk4Mi43MjUuNDcyLjQ4NC43MDkgMS4xNTIuNzA5IDIuMDA0di43OTVoLTMuODczYy4wMTguNDY1LjE1Ni44MjkuNDE0IDEuMDkuMjU4LjI2MS42Mi4zOTIgMS4wODUuMzkyLjM2MSAwIC43MDMtLjAzNyAxLjAyNi0uMTEzYTUuMTMzIDUuMTMzIDAgMCAwIDEuMDEtLjM2djEuMjY4Yy0uMjg3LjE0My0uNTkzLjI1LS45Mi4zMmE1Ljc5IDUuNzkgMCAwIDEtMS4xOTEuMTA0em03LjI1My02LjIyNmMuMjIyIDAgLjQwNi4wMTYuNTUzLjA0OWwtLjEyNCAxLjUzNmExLjg3NyAxLjg3NyAwIDAgMC0uNDgzLS4wNTRjLS41MjMgMC0uOTMuMTM0LTEuMjIyLjQwMy0uMjkyLjI2OC0uNDM4LjY0NC0uNDM4IDEuMTI4VjI0aC0xLjYzOHYtNi4wMDVoMS4yNGwuMjQyIDEuMDFoLjA4Yy4xODctLjMzNy40MzktLjYwOC43NTYtLjgxNGExLjg2IDEuODYgMCAwIDEgMS4wMzQtLjMwOXptNC4wMjkgMS4xNjZjLS4zNDcgMC0uNjIuMTEtLjgxNy4zMy0uMTk3LjIyLS4zMS41MzMtLjMzOC45MzdoMi4yOTljLS4wMDctLjQwNC0uMTEzLS43MTctLjMxNy0uOTM3LS4yMDQtLjIyLS40OC0uMzMtLjgyNy0uMzN6bS4yMyA1LjA2Yy0uOTY2IDAtMS43MjItLjI2Ny0yLjI2Ni0uOC0uNTQ0LS41MzQtLjgxNi0xLjI5LS44MTYtMi4yNjcgMC0xLjAwNy4yNTEtMS43ODUuNzU0LTIuMzM0LjUwNC0uNTUgMS4yLS44MjUgMi4wODctLjgyNS44NDkgMCAxLjUxLjI0MiAxLjk4Mi43MjUuNDczLjQ4NC43MDkgMS4xNTIuNzA5IDIuMDA0di43OTVoLTMuODczYy4wMTguNDY1LjE1Ni44MjkuNDE0IDEuMDkuMjU4LjI2MS42Mi4zOTIgMS4wODUuMzkyLjM2MiAwIC43MDQtLjAzNyAxLjAyNi0uMTEzYTUuMTMzIDUuMTMzIDAgMCAwIDEuMDEtLjM2djEuMjY4Yy0uMjg3LjE0My0uNTkzLjI1LS45MTkuMzJhNS43OSA1Ljc5IDAgMCAxLTEuMTkyLjEwNHptNS44MDMgMGMtLjcwNiAwLTEuMjYtLjI3NS0xLjY2My0uODIyLS40MDMtLjU0OC0uNjA0LTEuMzA3LS42MDQtMi4yNzggMC0uOTg0LjIwNS0xLjc1Mi42MTUtMi4zMDEuNDEtLjU1Ljk3NS0uODI1IDEuNjk1LS44MjUuNzU1IDAgMS4zMzIuMjk0IDEuNzI5Ljg4MWguMDU0YTYuNjk3IDYuNjk3IDAgMCAxLS4xMjQtMS4xOTh2LTEuOTIyaDEuNjQ0VjI0SDQ2LjQzbC0uMzE3LS43NzloLS4wN2MtLjM3Mi41OTEtLjk0Ljg4Ni0xLjcwMi44ODZ6bS41NzQtMS4zMDZjLjQyIDAgLjcyNi0uMTIxLjkyMS0uMzY1LjE5Ni0uMjQzLjMwMi0uNjU3LjMyLTEuMjR2LS4xNzhjMC0uNjQ0LS4xLTEuMTA2LS4yOTgtMS4zODYtLjE5OS0uMjc5LS41MjItLjQxOS0uOTctLjQxOWEuOTYyLjk2MiAwIDAgMC0uODUuNDY1Yy0uMjAzLjMxLS4zMDQuNzYtLjMwNCAxLjM1IDAgLjU5Mi4xMDIgMS4wMzUuMzA2IDEuMzMuMjA0LjI5Ni40OTYuNDQzLjg3NS40NDN6bTEwLjkyMi00LjkyYy43MDkgMCAxLjI2NC4yNzcgMS42NjUuODMuNC41NTMuNjAxIDEuMzEyLjYwMSAyLjI3NSAwIC45OTItLjIwNiAxLjc2LS42MiAyLjMwNC0uNDE0LjU0NC0uOTc3LjgxNi0xLjY5LjgxNi0uNzA1IDAtMS4yNTgtLjI1Ni0xLjY1OS0uNzY4aC0uMTEzbC0uMjc0LjY2MWgtMS4yNTF2LTguMzU3aDEuNjM4djEuOTQ0YzAgLjI0Ny0uMDIxLjY0My0uMDY0IDEuMTg3aC4wNjRjLjM4My0uNTk0Ljk1LS44OTIgMS43MDMtLjg5MnptLS41MjcgMS4zMWMtLjQwNCAwLS43LjEyNS0uODg2LjM3NC0uMTg2LjI0OS0uMjgzLjY2LS4yOSAxLjIzM3YuMTc3YzAgLjY0NS4wOTYgMS4xMDcuMjg3IDEuMzg2LjE5Mi4yOC40OTUuNDE5LjkxLjQxOS4zMzcgMCAuNjA1LS4xNTUuODA0LS40NjUuMTk5LS4zMS4yOTgtLjc2LjI5OC0xLjM1IDAtLjU5MS0uMS0xLjAzNS0uMy0xLjMzYS45NDMuOTQzIDAgMCAwLS44MjMtLjQ0M3ptMy4xODYtMS4xOTdoMS43OTRsMS4xMzQgMy4zNzljLjA5Ni4yOTMuMTYzLjY0LjE5OCAxLjA0MmguMDMzYy4wMzktLjM3LjExNi0uNzE3LjIzLTEuMDQybDEuMTEyLTMuMzc5aDEuNzU3bC0yLjU0IDYuNzczYy0uMjM0LjYyNy0uNTY2IDEuMDk2LS45OTcgMS40MDctLjQzMi4zMTItLjkzNi40NjgtMS41MTIuNDY4LS4yODMgMC0uNTYtLjAzLS44MzMtLjA5MnYtMS4zYTIuOCAyLjggMCAwIDAgLjY0NS4wN2MuMjkgMCAuNTQzLS4wODguNzYtLjI2Ni4yMTctLjE3Ny4zODYtLjQ0NC41MDgtLjgwM2wuMDk2LS4yOTUtMi4zODUtNS45NjJ6Ii8+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNzMpIj4KICAgICAgICAgICAgPGNpcmNsZSBjeD0iMTkiIGN5PSIxOSIgcj0iMTkiIGZpbGw9IiNFMEUwRTAiLz4KICAgICAgICAgICAgPHBhdGggZmlsbD0iI0ZGRiIgZD0iTTIyLjQ3NCAxNS40NDNoNS4xNjJMMTIuNDM2IDMwLjRWMTAuMzYzaDE1LjJsLTUuMTYyIDUuMDh6Ii8+CiAgICAgICAgPC9nPgogICAgICAgIDxwYXRoIGZpbGw9IiNEMkQyRDIiIGQ9Ik0xMjEuNTQ0IDE0LjU2di0xLjcyOGg4LjI3MnYxLjcyOGgtMy4wMjRWMjRoLTIuMjR2LTkuNDRoLTMuMDA4em0xMy43NDQgOS41NjhjLTEuMjkgMC0yLjM0MS0uNDE5LTMuMTUyLTEuMjU2LS44MS0uODM3LTEuMjE2LTEuOTQ0LTEuMjE2LTMuMzJzLjQwOC0yLjQ3NyAxLjIyNC0zLjMwNGMuODE2LS44MjcgMS44NzItMS4yNCAzLjE2OC0xLjI0czIuMzYuNDAzIDMuMTkyIDEuMjA4Yy44MzIuODA1IDEuMjQ4IDEuODggMS4yNDggMy4yMjQgMCAuMzEtLjAyMS41OTctLjA2NC44NjRoLTYuNDY0Yy4wNTMuNTc2LjI2NyAxLjA0LjY0IDEuMzkyLjM3My4zNTIuODQ4LjUyOCAxLjQyNC41MjguNzc5IDAgMS4zNTUtLjMyIDEuNzI4LS45NmgyLjQzMmEzLjg5MSAzLjg5MSAwIDAgMS0xLjQ4OCAyLjA2NGMtLjczNi41MzMtMS42MjcuOC0yLjY3Mi44em0xLjQ4LTYuNjg4Yy0uNC0uMzUyLS44ODMtLjUyOC0xLjQ0OC0uNTI4cy0xLjAzNy4xNzYtMS40MTYuNTI4Yy0uMzc5LjM1Mi0uNjA1LjgyMS0uNjggMS40MDhoNC4xOTJjLS4wMzItLjU4Ny0uMjQ4LTEuMDU2LS42NDgtMS40MDh6bTcuMDE2LTIuMzA0djEuNTY4Yy41OTctMS4xMyAxLjQ2MS0xLjY5NiAyLjU5Mi0xLjY5NnYyLjMwNGgtLjU2Yy0uNjcyIDAtMS4xNzkuMTY4LTEuNTIuNTA0LS4zNDEuMzM2LS41MTIuOTE1LS41MTIgMS43MzZWMjRoLTIuMjU2di04Ljg2NGgyLjI1NnptNi40NDggMHYxLjMyOGMuNTY1LS45NyAxLjQ4My0xLjQ1NiAyLjc1Mi0xLjQ1Ni42NzIgMCAxLjI3Mi4xNTUgMS44LjQ2NC41MjguMzEuOTM2Ljc1MiAxLjIyNCAxLjMyOC4zMS0uNTU1LjczMy0uOTkyIDEuMjcyLTEuMzEyYTMuNDg4IDMuNDg4IDAgMCAxIDEuODE2LS40OGMxLjA1NiAwIDEuOTA3LjMzIDIuNTUyLjk5Mi42NDUuNjYxLjk2OCAxLjU5Ljk2OCAyLjc4NFYyNGgtMi4yNHYtNC44OTZjMC0uNjkzLS4xNzYtMS4yMjQtLjUyOC0xLjU5Mi0uMzUyLS4zNjgtLjgzMi0uNTUyLTEuNDQtLjU1MnMtMS4wOS4xODQtMS40NDguNTUyYy0uMzU3LjM2OC0uNTM2Ljg5OS0uNTM2IDEuNTkyVjI0aC0yLjI0di00Ljg5NmMwLS42OTMtLjE3Ni0xLjIyNC0uNTI4LTEuNTkyLS4zNTItLjM2OC0uODMyLS41NTItMS40NC0uNTUycy0xLjA5LjE4NC0xLjQ0OC41NTJjLS4zNTcuMzY4LS41MzYuODk5LS41MzYgMS41OTJWMjRoLTIuMjU2di04Ljg2NGgyLjI1NnpNMTY0LjkzNiAyNFYxMi4xNmgyLjI1NlYyNGgtMi4yNTZ6bTcuMDQtLjE2bC0zLjQ3Mi04LjcwNGgyLjUyOGwyLjI1NiA2LjMwNCAyLjM4NC02LjMwNGgyLjM1MmwtNS41MzYgMTMuMDU2aC0yLjM1MmwxLjg0LTQuMzUyeiIvPgogICAgPC9nPgo8L3N2Zz4K) center no-repeat}.termly-styles-root-bd195a{position:fixed;top:0;left:0;height:100%;width:100%;background:rgba(58,67,105,.6);z-index:10000;display:flex;align-items:center;justify-content:center;padding:4rem 0}.termly-styles-modal-6f3b75{width:80%;height:100%;background:#fff;margin:2rem auto;display:flex;flex-direction:column;max-width:75rem}@media only screen and (max-width:48rem){.termly-styles-modal-6f3b75{width:95%}}@media only screen and (max-width:36rem){.termly-styles-root-bd195a{padding:0}.termly-styles-modal-6f3b75{width:100%}}.termly-styles-header-95b0d2{padding:1rem;display:flex;justify-content:flex-end;border-bottom:1px solid #ddd}.termly-styles-body-97cc2f{flex:1}.termly-styles-content-9ce1cd{overflow-y:scroll;padding:1.75rem 4.0625rem 6.25rem}.termly-styles-content-9ce1cd>:last-child{padding-bottom:1.875rem}@media only screen and (max-width:48rem){.termly-styles-content-9ce1cd{padding:2rem}}.termly-styles-text-6d5da6{white-space:nowrap}.termly-styles-button-7be77c{color:#00c999!important;font-size:1rem!important;font-weight:700;text-transform:uppercase;margin-left:1rem}.termly-styles-icon-dc4149{margin-left:.333em}.termly-styles-root-1e411e{border-top:1px solid var(--common-footer-top-border-color,#ced4da);padding-top:.625rem;display:flex;justify-content:var(--common-footer-justify-content,normal)}.termly-styles-links-c9697c{list-style-type:none;margin:0;padding:0;display:flex;flex-direction:row;justify-content:flex-start;flex-wrap:wrap}.termly-styles-links-c9697c .termly-styles-link-94b7af{font-size:.75rem;line-height:1rem;color:#6c7794;white-space:nowrap}.termly-styles-links-c9697c>:not(:last-child){margin-right:1rem}.termly-styles-root-1c73d9{height:100%;display:flex;flex-direction:column;padding:40px;align-items:stretch;background-color:#f5f6fa;font-family:Roboto}.termly-styles-container-678fa0{display:flex;flex-direction:column;align-items:center;margin-top:140px}.termly-styles-logo-105544{height:35px;width:35px}.termly-styles-title-41f08d{color:#013986;font-weight:500;font-size:24px;margin:0}.termly-styles-abstractArt-75267c{height:160px;width:160px;margin-bottom:28px}.termly-styles-bodyText-2870f8{color:#6c7794;max-width:20em;max-width:17em;text-align:center;line-height:1.375}.termly-styles-logo-01be9b{vertical-align:middle;cursor:pointer}.termly-styles-root-92958f{display:flex;height:100%;justify-content:space-between;align-items:center;height:3.75rem;column-gap:1.5625rem}.termly-styles-leftContent-853734{width:15.125rem;display:flex}.termly-styles-logo-26ba1c{height:1.875rem;width:auto;margin-right:1rem}.termly-styles-middleContent-36abed{flex:1;padding-left:2.5625rem}.termly-styles-text-24adde{color:#363840;font-size:.875rem;font-weight:500;line-height:1;margin-bottom:.5rem}.termly-styles-root-582f89{height:100%;display:flex;justify-content:center;align-items:center}.termly-styles-sizer-9ac43c{height:5rem;width:5rem}.termly-styles-error-9bd53e,.termly-styles-light-2edb58,.termly-styles-success-865349{padding:1.25rem .8125rem;text-align:left;font-size:.75rem;margin:0 0 1.875rem;border-radius:.1875rem;line-height:1.4}.termly-styles-error-9bd53e{color:#ff1e1e;background-color:#ffc6c6;border:.0625rem solid #ff9595}.termly-styles-light-2edb58{color:#ff1e1e;padding:.8125rem 1.25rem;background-color:#fff9f9;border:.0625rem solid #ffd0d0;box-shadow:0 .125rem .25rem 0 rgba(255,208,208,.54)}.termly-styles-success-865349{color:#fff;background-color:#5aca8f;border:.0625rem solid #34b973}.termly-styles-root-49e1cb{text-transform:uppercase}.termly-styles-root-e32e60{font-size:1.5rem;font-weight:500;line-height:1.333;margin:0 0 1rem;color:#000}.termly-styles-container-99fbaf,.termly-styles-tooltip-container-89ffe3{--tooltipBackground:#fff;--tooltipBorder:#c0c0c0;--tooltipColor:#000;background-color:var(--tooltipBackground);border-radius:3px;border:1px solid var(--tooltipBorder);box-shadow:0 2px 4px rgba(0,0,0,.18);color:var(--tooltipColor);display:flex;flex-direction:column;padding:.4rem;transition:opacity .3s;z-index:9999}.termly-styles-arrow-d429b6,.termly-styles-tooltip-arrow-9229ca{height:1rem;position:absolute;width:1rem;pointer-events:none}.termly-styles-arrow-d429b6::before,.termly-styles-tooltip-arrow-9229ca::before{border-style:solid;content:"";display:block;height:0;margin:auto;width:0}.termly-styles-arrow-d429b6::after,.termly-styles-tooltip-arrow-9229ca::after{border-style:solid;content:"";display:block;height:0;margin:auto;position:absolute;width:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{left:0;margin-top:-.4rem;top:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:transparent transparent var(--tooltipBorder) transparent;border-width:0 .5rem .4rem;position:absolute;top:-1px}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:transparent transparent var(--tooltipBackground) transparent;border-width:0 .5rem .4rem}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{bottom:0;left:0;margin-bottom:-1rem}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:var(--tooltipBorder) transparent transparent transparent;border-width:.4rem .5rem 0;position:absolute;top:1px}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:var(--tooltipBackground) transparent transparent transparent;border-width:.4rem .5rem 0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{left:0;margin-left:-.7rem}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:transparent var(--tooltipBorder) transparent transparent;border-width:.5rem .4rem .5rem 0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:transparent var(--tooltipBackground) transparent transparent;border-width:.5rem .4rem .5rem 0;left:6px;top:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{margin-right:-.7rem;right:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:transparent transparent transparent var(--tooltipBorder);border-width:.5rem 0 .5rem .4em}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:transparent transparent transparent var(--tooltipBackground);border-width:.5rem 0 .5rem .4em;left:3px;top:0}.termly-styles-root-b5f94b{font-weight:400;display:flex}.termly-styles-container-99fbaf{--tooltipBorder:#ced4da;--tooltipBackground:#fff;--tooltipColor:#868e96;border-radius:0;box-shadow:0 0 8px rgba(0,0,0,.1);display:block;max-width:22.0625rem;padding:1rem}.termly-styles-icon-2f3b32{height:1rem;width:auto;margin-left:.5rem}.termly-styles-loading-9ee2d7{height:5rem}:where(.wp-block-button__link){border-radius:9999px;box-shadow:none;padding:calc(.667em + 2px) calc(1.333em + 2px);text-decoration:none}:where(.wp-block-calendar table:not(.has-background) th){background:#ddd}:where(.wp-block-columns){margin-bottom:1.75em}:where(.wp-block-columns.has-background){padding:1.25em 2.375em}:where(.wp-block-post-comments input[type=submit]){border:none}:where(.wp-block-cover-image:not(.has-text-color)),:where(.wp-block-cover:not(.has-text-color)){color:#fff}:where(.wp-block-cover-image.is-light:not(.has-text-color)),:where(.wp-block-cover.is-light:not(.has-text-color)){color:#000}:where(.wp-block-file){margin-bottom:1.5em}:where(.wp-block-file__button){border-radius:2em;display:inline-block;padding:.5em 1em}:where(.wp-block-file__button):is(a):active,:where(.wp-block-file__button):is(a):focus,:where(.wp-block-file__button):is(a):hover,:where(.wp-block-file__button):is(a):visited{box-shadow:none;color:#fff;opacity:.85;text-decoration:none}:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment)){line-height:1.1}:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment-excerpt p)){line-height:1.8}ol,ul{box-sizing:border-box}:where(.wp-block-navigation.has-background .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation.has-background .wp-block-navigation-submenu a:not(.wp-element-button)){padding:.5em 1em}:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu button.wp-block-navigation-item__content),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-pages-list__item button.wp-block-navigation-item__content){padding:.5em 1em}:where(p.has-text-color:not(.has-link-color)) a{color:inherit}:where(.wp-block-post-excerpt){margin-bottom:var(--wp--style--block-gap);margin-top:var(--wp--style--block-gap)}:where(.wp-block-preformatted.has-background){padding:1.25em 2.375em}:where(.wp-block-pullquote){margin:0 0 1em}:where(.wp-block-search__button){border:1px solid #ccc;padding:6px 10px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper){border:1px solid #949494;box-sizing:border-box;padding:4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input{border:none;border-radius:0;padding:0 4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input:focus{outline:0}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) :where(.wp-block-search__button){padding:4px 8px}:where(.wp-block-term-description){margin-bottom:var(--wp--style--block-gap);margin-top:var(--wp--style--block-gap)}:where(pre.wp-block-verse){font-family:inherit}.entry-content{counter-reset:footnotes}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.screen-reader-text:focus{background-color:#ddd;clip:auto!important;-webkit-clip-path:none;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}:where(.wp-block-group.has-background){padding:1.25em 2.375em}body{--wp--preset--color--black:#000000;--wp--preset--color--cyan-bluish-gray:#abb8c3;--wp--preset--color--white:#ffffff;--wp--preset--color--pale-pink:#f78da7;--wp--preset--color--vivid-red:#cf2e2e;--wp--preset--color--luminous-vivid-orange:#ff6900;--wp--preset--color--luminous-vivid-amber:#fcb900;--wp--preset--color--light-green-cyan:#7bdcb5;--wp--preset--color--vivid-green-cyan:#00d084;--wp--preset--color--pale-cyan-blue:#8ed1fc;--wp--preset--color--vivid-cyan-blue:#0693e3;--wp--preset--color--vivid-purple:#9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple:linear-gradient(135deg,rgba(6, 147, 227, 1) 0%,rgb(155, 81, 224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:linear-gradient(135deg,rgb(122, 220, 180) 0%,rgb(0, 208, 130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:linear-gradient(135deg,rgba(252, 185, 0, 1) 0%,rgba(255, 105, 0, 1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:linear-gradient(135deg,rgba(255, 105, 0, 1) 0%,rgb(207, 46, 46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:linear-gradient(135deg,rgb(238, 238, 238) 0%,rgb(169, 184, 195) 100%);--wp--preset--gradient--cool-to-warm-spectrum:linear-gradient(135deg,rgb(74, 234, 220) 0%,rgb(151, 120, 209) 20%,rgb(207, 42, 186) 40%,rgb(238, 44, 130) 60%,rgb(251, 105, 98) 80%,rgb(254, 248, 76) 100%);--wp--preset--gradient--blush-light-purple:linear-gradient(135deg,rgb(255, 206, 236) 0%,rgb(152, 150, 240) 100%);--wp--preset--gradient--blush-bordeaux:linear-gradient(135deg,rgb(254, 205, 165) 0%,rgb(254, 45, 45) 50%,rgb(107, 0, 62) 100%);--wp--preset--gradient--luminous-dusk:linear-gradient(135deg,rgb(255, 203, 112) 0%,rgb(199, 81, 192) 50%,rgb(65, 88, 208) 100%);--wp--preset--gradient--pale-ocean:linear-gradient(135deg,rgb(255, 245, 203) 0%,rgb(182, 227, 212) 50%,rgb(51, 167, 181) 100%);--wp--preset--gradient--electric-grass:linear-gradient(135deg,rgb(202, 248, 128) 0%,rgb(113, 206, 126) 100%);--wp--preset--gradient--midnight:linear-gradient(135deg,rgb(2, 3, 129) 0%,rgb(40, 116, 252) 100%);--wp--preset--font-size--small:13px;--wp--preset--font-size--medium:20px;--wp--preset--font-size--large:36px;--wp--preset--font-size--x-large:42px;--wp--preset--spacing--20:0.44rem;--wp--preset--spacing--30:0.67rem;--wp--preset--spacing--40:1rem;--wp--preset--spacing--50:1.5rem;--wp--preset--spacing--60:2.25rem;--wp--preset--spacing--70:3.38rem;--wp--preset--spacing--80:5.06rem;--wp--preset--shadow--natural:6px 6px 9px rgba(0, 0, 0, .2);--wp--preset--shadow--deep:12px 12px 50px rgba(0, 0, 0, .4);--wp--preset--shadow--sharp:6px 6px 0px rgba(0, 0, 0, .2);--wp--preset--shadow--outlined:6px 6px 0px -3px rgba(255, 255, 255, 1),6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp:6px 6px 0px rgba(0, 0, 0, 1)}:where(.is-layout-flex){gap:.5em}:where(.is-layout-grid){gap:.5em}:where(.wp-block-post-template.is-layout-flex){gap:1.25em}:where(.wp-block-post-template.is-layout-grid){gap:1.25em}:where(.wp-block-columns.is-layout-flex){gap:2em}:where(.wp-block-columns.is-layout-grid){gap:2em}.spin-animation{-webkit-animation:30s linear infinite spin;animation:30s linear infinite spin}.hide{height:0;margin:0;padding:0;text-indent:-998em}.adjustable-element{flex-shrink:0;width:auto;max-width:100%;height:auto;max-height:100%}.fill-the-whole-space{top:0;right:0;bottom:0;left:0}img{image-rendering:-webkit-optimize-contrast}.font-size-9-14{font-size:.525rem}@media (min-width:576px){.font-size-9-14{font-size:.595rem}}@media (min-width:768px){.font-size-9-14{font-size:.665rem}}@media (min-width:992px){.font-size-9-14{font-size:.735rem}}@media (min-width:1200px){.font-size-9-14{font-size:.805rem}}@media (min-width:1400px){.font-size-9-14{font-size:.875rem}}.font-size-12{font-size:.75rem}.font-size-13{font-size:.8125rem}.font-size-14{font-size:.875rem}.font-size-16{font-size:1rem}.font-size-18{font-size:1.125rem}.font-size-21{font-size:1.1875rem}@media (min-width:576px){.font-size-21{font-size:1.2125rem}}@media (min-width:768px){.font-size-21{font-size:1.2375rem}}@media (min-width:992px){.font-size-21{font-size:1.2625rem}}@media (min-width:1200px){.font-size-21{font-size:1.2875rem}}@media (min-width:1400px){.font-size-21{font-size:1.3125rem}}.font-size-24{font-size:1.25rem}@media (min-width:576px){.font-size-24{font-size:1.3rem}}@media (min-width:768px){.font-size-24{font-size:1.35rem}}@media (min-width:992px){.font-size-24{font-size:1.4rem}}@media (min-width:1200px){.font-size-24{font-size:1.45rem}}@media (min-width:1400px){.font-size-24{font-size:1.5rem}.font-size-36{font-size:2.25rem}}.font-size-36{font-size:2.25rem}@media (min-width:576px){.font-size-36{font-size:2.25rem}}@media (min-width:768px){.font-size-36{font-size:2.25rem}}@media (min-width:992px){.font-size-36{font-size:2.25rem}}@media (min-width:1200px){.font-size-36{font-size:2.25rem}}.font-size-45{font-size:1.875rem}@media (min-width:576px){.font-size-45{font-size:2.0625rem}.container{max-width:540px}}@media (min-width:768px){.font-size-45{font-size:2.25rem}}@media (min-width:992px){.font-size-45{font-size:2.4375rem}}@media (min-width:1200px){.font-size-45{font-size:2.625rem}}@media (min-width:1400px){.font-size-45{font-size:2.8125rem}}.font-size-45-45{font-size:2.8125rem}.letter-spacing-200{letter-spacing:2px}.animated-border-bottom{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.animated-border-bottom:focus,.animated-border-bottom:hover{background-size:100% 100%}.animated-border-bottom--reverse{background-position:100%;background-size:100% 100%}.animated-border-bottom--reverse:focus,.animated-border-bottom--reverse:hover{background-size:0 100%}.lock-position{overflow:hidden}.hover-opacity-0-75:focus,.hover-opacity-0-75:hover{opacity:.75}.green-gradient{background:#6bdab6;background:-webkit-linear-gradient(10deg,#6bdab6,#66e0f6 100%,#6bdab6 200%);background:linear-gradient(80deg,#6bdab6,#66e0f6 100%,#6bdab6 200%)}.yellow-gradient{background:#f6c043;background:-webkit-linear-gradient(10deg,#ff9634,#f6c043 100%,#ff9634 200%);background:linear-gradient(80deg,#ff9634,#f6c043 100%,#ff9634 200%)}.pink-gradient{background:#ff70c6;background:-webkit-linear-gradient(10deg,#ec4a77,#ff70c6 100%,#ec4a77 200%);background:linear-gradient(80deg,#ec4a77,#ff70c6 100%,#ec4a77 200%)}:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-primary:#7b33fb;--bs-secondary:#0f0f0f;--bs-black-2:#1a1a1a;--bs-black-3:#090b0a;--bs-black:#000;--bs-light-black:#2f2f2f;--bs-blue-light:#edf7fc;--bs-gray:#737373;--bs-gray-2:#c4c4c4;--bs-gray-3:#cdcdcd;--bs-gray-4:#e4e4e4;--bs-gray-5:#d3d3d3;--bs-gray-6:#b4b4b4;--bs-gray-7:#828282;--bs-gray-8:#b3b3b3;--bs-gray-9:#e4eaed;--bs-green:#6bdab6;--bs-blue:#66e0f6;--bs-dark-purple:#2d0968;--bs-orange:#ff9634;--bs-yellow:#f6c043;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg,hsla(0,0%,100%,0.15),hsla(0,0%,100%,0))}*,:after,:before{box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:1rem;font-weight:400;line-height:1.5;color:#2f2f2f;background-color:#fff;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}hr{margin:1rem 0;color:inherit;background-color:currentColor;border:0;opacity:.25}hr:not([size]){height:1px}.h1,.h2,.h3,h1,h2,h3,h4{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){.h1,h1{font-size:2.5rem}}.h2,h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){.h2,h2{font-size:2rem}}.h3,h3{font-size:calc(1.3rem + .6vw)}@media (min-width:1200px){.h3,h3{font-size:1.75rem}}h4{font-size:calc(1.275rem + .3vw)}p{margin-top:0;margin-bottom:1rem}address{margin-bottom:1rem;font-style:normal;line-height:inherit}ol,ul{padding-left:2rem}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dd{margin-bottom:.5rem;margin-left:0}b,strong{font-weight:bolder}.small,small{font-size:.875em}sub,sup{position:relative;font-size:.75em;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#0d6efd;text-decoration:underline}a:hover{color:#0a58ca}a:not([href]):not([class]),a:not([href]):not([class]):hover{color:inherit;text-decoration:none}code,pre{font-family:var(--bs-font-monospace);font-size:1em;direction:ltr;unicode-bidi:bidi-override}pre{display:block;margin-top:0;margin-bottom:1rem;overflow:auto;font-size:.875em}pre code{font-size:inherit;color:inherit;word-break:normal}code{font-size:.875em;color:#d63384;word-wrap:break-word}a>code{color:inherit}img,svg{vertical-align:middle}table{caption-side:bottom;border-collapse:collapse}th{text-align:inherit;text-align:-webkit-match-parent}tbody,td,th,tr{border:0 solid;border-color:inherit}label{display:inline-block}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}select:disabled{opacity:1}[list]::-webkit-calendar-picker-indicator{display:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}::-moz-focus-inner{padding:0;border-style:none}textarea{resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{float:left;width:100%;padding:0;margin-bottom:.5rem;font-size:calc(1.275rem + .3vw);line-height:inherit}legend+*{clear:left}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:textfield}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::file-selector-button{font:inherit}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}iframe{border:0}summary{display:list-item;cursor:pointer}progress{vertical-align:baseline}[hidden]{display:none!important}.list-unstyled{padding-left:0;list-style:none}.container{width:100%;padding-right:var(--bs-gutter-x,.9375rem);padding-left:var(--bs-gutter-x,.9375rem);margin-right:auto;margin-left:auto}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){legend{font-size:1.5rem}.container{max-width:1140px}}@media (min-width:1400px){.container{max-width:1320px}}.row{--bs-gutter-x:1.875rem;--bs-gutter-y:0;display:-webkit-box;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y)*-1);margin-right:calc(var(--bs-gutter-x)*-.5);margin-left:calc(var(--bs-gutter-x)*-.5)}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x)*.5);padding-left:calc(var(--bs-gutter-x)*.5);margin-top:var(--bs-gutter-y)}.col{-webkit-box-flex:1;flex:1 0 0%}.col-auto{width:auto}.col-auto{-webkit-box-flex:0;flex:0 0 auto}.col-6{width:50%}.col-6{-webkit-box-flex:0;flex:0 0 auto}.col-10{width:83.33333%}.col-10,.col-11{-webkit-box-flex:0;flex:0 0 auto}.col-11{width:91.66667%}.col-12{-webkit-box-flex:0;flex:0 0 auto;width:100%}@media (min-width:768px){.col-md-4{width:33.33333%}.col-md-4{-webkit-box-flex:0;flex:0 0 auto}.col-md-6{width:50%}.col-md-6{-webkit-box-flex:0;flex:0 0 auto}}@media (min-width:992px){.col-lg-2{width:16.66667%}.col-lg-2,.col-lg-3{-webkit-box-flex:0;flex:0 0 auto}.col-lg-3{width:25%}.col-lg-4{width:33.33333%}.col-lg-4,.col-lg-5{-webkit-box-flex:0;flex:0 0 auto}.col-lg-5{width:41.66667%}.col-lg-6{width:50%}.col-lg-6,.col-lg-7{-webkit-box-flex:0;flex:0 0 auto}.col-lg-7{width:58.33333%}.col-lg-8{width:66.66667%}.col-lg-8,.col-lg-9{-webkit-box-flex:0;flex:0 0 auto}.col-lg-9{width:75%}.col-lg-12{-webkit-box-flex:0;flex:0 0 auto;width:100%}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.33333%}}@media (min-width:1200px){.col-xl-4{width:33.33333%}.col-xl-4{-webkit-box-flex:0;flex:0 0 auto}.col-xl-6{width:50%}.col-xl-6{-webkit-box-flex:0;flex:0 0 auto}.offset-xl-1{margin-left:8.33333%}}.nav{display:-webkit-box;display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem;color:#0d6efd;text-decoration:none;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out}@media (prefers-reduced-motion:reduce){.nav-link{-webkit-transition:none;transition:none}}.nav-link:focus,.nav-link:hover{color:#0a58ca}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.navbar{position:relative;display:-webkit-box;display:flex;flex-wrap:wrap;-webkit-box-align:center;align-items:center;-webkit-box-pack:justify;justify-content:space-between;padding-top:.5rem;padding-bottom:.5rem}.navbar>.container{display:-webkit-box;display:flex;flex-wrap:inherit;-webkit-box-align:center;align-items:center;-webkit-box-pack:justify;justify-content:space-between}.navbar-brand{padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;text-decoration:none;white-space:nowrap}.navbar-nav{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static}.navbar-collapse{flex-basis:100%;-webkit-box-flex:1;flex-grow:1;-webkit-box-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;-webkit-transition:box-shadow .15s ease-in-out;transition:box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.navbar-toggler{-webkit-transition:none;transition:none}}.navbar-toggler:hover{text-decoration:none}.navbar-toggler:focus{text-decoration:none;outline:0;box-shadow:0 0 0 .25rem}.ratio{position:relative;width:100%}.ratio:before{display:block;padding-top:var(--bs-aspect-ratio);content:""}.ratio>*{position:absolute;top:0;left:0;width:100%;height:100%}.fixed-top{top:0}.fixed-top{position:fixed;right:0;left:0;z-index:1030}.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}.visually-hidden{position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border:0!important}.overflow-hidden{overflow:hidden!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-grid{display:grid!important}.d-flex{display:-webkit-box!important;display:flex!important}.d-inline-flex{display:-webkit-inline-box!important;display:inline-flex!important}.d-none{display:none!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.border{border:1px solid #dee2e6!important}.border-0{border:0!important}.w-100{width:100%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.flex-row{-webkit-box-orient:horizontal!important;flex-direction:row!important}.flex-column,.flex-row{-webkit-box-direction:normal!important}.flex-column{-webkit-box-orient:vertical!important;flex-direction:column!important}.flex-wrap{flex-wrap:wrap!important}.justify-content-start{-webkit-box-pack:start!important;justify-content:flex-start!important}.justify-content-center{-webkit-box-pack:center!important;justify-content:center!important}.justify-content-between{-webkit-box-pack:justify!important;justify-content:space-between!important}.align-items-start{-webkit-box-align:start!important;align-items:flex-start!important}.align-items-end{-webkit-box-align:end!important;align-items:flex-end!important}.align-items-center{-webkit-box-align:center!important;align-items:center!important}.m-0{margin:0!important}.mx-auto{margin-right:auto!important;margin-left:auto!important}.my-0{margin-top:0!important;margin-bottom:0!important}.mb-0{margin-bottom:0!important}.p-0{padding:0!important}.px-0{padding-right:0!important;padding-left:0!important}.fw-normal{font-weight:400!important}.fw-bold{font-weight:700!important}.line-height-1-1{line-height:1.1!important}.line-height-1-2{line-height:1.2!important}.line-height-1-3{line-height:1.3!important}.line-height-1-6{line-height:1.6!important}.line-height-1-7{line-height:1.7!important}.text-start{text-align:left!important}.text-end{text-align:right!important}.text-center{text-align:center!important}.text-uppercase{text-transform:uppercase!important}.text-secondary{color:#0f0f0f!important}.text-light-black{color:#2f2f2f!important}.text-gray{color:#737373!important}.text-gray-2{color:#c4c4c4!important}.text-gray-3{color:#cdcdcd!important}.text-white{color:#fff!important}.bg-secondary{background-color:#0f0f0f!important}.bg-blue-light{background-color:#edf7fc!important}.bg-blue{background-color:#66e0f6!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.rounded-circle{border-radius:50%!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}.z-index-minus-1{z-index:-1!important}.z-index-1{z-index:1!important}.z-index-2{z-index:2!important}.z-index-3{z-index:3!important}.border-radius-1-25{border-radius:1.25rem!important}:root{font-size:100%}body{font-size:1.125rem;line-height:1.7}.h1,.h2,.h3,h1,h2,h3,h4{margin-bottom:0!important;font-weight:900;font-family:'Tiempos Headline',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}.h1,h1{font-size:2.5rem}@media (min-width:576px){.d-sm-block{display:block!important}.d-sm-none{display:none!important}.h1,h1{font-size:2.8125rem}}@media (min-width:768px){.d-md-flex{display:-webkit-box!important;display:flex!important}.flex-md-row{-webkit-box-orient:horizontal!important;flex-direction:row!important}.flex-md-row{-webkit-box-direction:normal!important}.order-md-2{-webkit-box-ordinal-group:3!important;order:2!important}.mx-md-auto{margin-right:auto!important;margin-left:auto!important}.h1,h1{font-size:3.125rem}}@media (min-width:992px){.d-lg-block{display:block!important}.d-lg-flex{display:-webkit-box!important;display:flex!important}.d-lg-none{display:none!important}.flex-lg-row{-webkit-box-orient:horizontal!important;flex-direction:row!important}.flex-lg-row{-webkit-box-direction:normal!important}.flex-lg-wrap{flex-wrap:wrap!important}.justify-content-lg-center{-webkit-box-pack:center!important;justify-content:center!important}.order-lg-2{-webkit-box-ordinal-group:3!important;order:2!important}.order-lg-3{-webkit-box-ordinal-group:4!important;order:3!important}.mx-lg-0{margin-right:0!important;margin-left:0!important}.mt-lg-0{margin-top:0!important}.h1,h1{font-size:3.4375rem}}@media (min-width:1200px){.h1,h1{font-size:3.75rem}}.h1-small{font-size:2.375rem}@media (min-width:576px){.h1-small{font-size:2.53125rem}}@media (min-width:768px){.h1-small{font-size:2.6875rem}}@media (min-width:992px){.h1-small{font-size:2.84375rem}}@media (min-width:1200px){.h1-small{font-size:3rem}}.h2,h2{font-size:2.25rem}@media (min-width:576px){.h2,h2{font-size:2.4375rem}}@media (min-width:768px){.h2,h2{font-size:2.625rem}}@media (min-width:992px){.h2,h2{font-size:2.8125rem}}@media (min-width:1200px){.h2,h2{font-size:3rem}}.h3,h3{line-height:1.4;font-size:1.75rem}@media (min-width:576px){.h3,h3{font-size:1.875rem}}@media (min-width:768px){.h3,h3{font-size:2rem}}@media (min-width:992px){.h3,h3{font-size:2.125rem}}@media (min-width:1200px){.h3,h3{font-size:2.25rem}}h4{font-size:1.25rem}b,strong{font-weight:700}em{font-style:italic}a{text-decoration:none;-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}div#wpadminbar{position:fixed;top:auto;bottom:0}html[lang]{margin-top:0!important}@font-face{font-weight:900;font-style:normal;font-family:'Tiempos Headline';src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.eot) format("eot");font-display:swap}@font-face{font-weight:300;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.eot) format("eot");font-display:swap}@font-face{font-weight:400;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.eot) format("eot");font-display:swap}@font-face{font-weight:500;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.eot) format("eot");font-display:swap}@font-face{font-weight:600;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.eot) format("eot");font-display:swap}@font-face{font-weight:700;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.eot) format("eot");font-display:swap}html{--scroll-behavior:unset;scroll-behavior:unset}html [id]{-webkit-scroll-snap-type:block;-ms-scroll-snap-type:block;scroll-snap-type:block;scroll-margin:7rem}.lazyload,.lazyloading{opacity:0}.lazyloaded{opacity:1;-webkit-transition:opacity .2s;transition:opacity .2s}.c-mt-1{margin-top:.25rem}.c-mt-2{margin-top:.25rem}.c-mt-3{margin-top:.5rem}.c-mt-only-3{margin-top:1rem!important}.c-mt-4{margin-top:.75rem}.c-mt-only-4{margin-top:1.5rem!important}.c-mt-5{margin-top:1rem}.c-mt-only-5{margin-top:2rem!important}.c-mt-6{margin-top:1.5rem}.c-mt-only-6{margin-top:3rem!important}.c-mt-7{margin-top:2rem}.c-mt-only-7{margin-top:4rem!important}.c-mt-8{margin-top:2.5rem}.c-mt-9{margin-top:3.125rem}.c-mt-10{margin-top:4rem}.c-mr-only-4{margin-right:1.5rem!important}.c-my-9{margin-top:3.125rem;margin-bottom:3.125rem}.c-p-only-3{padding:1rem!important}.c-pt-1{padding-top:.25rem}.c-pt-3{padding-top:.5rem}.c-pt-only-4{padding-top:1.5rem!important}.c-pt-5{padding-top:1rem}.c-pt-6{padding-top:1.5rem}.c-pt-8{padding-top:2.5rem}.c-pt-9{padding-top:3.125rem}.c-pt-10{padding-top:4rem}.c-pb-1{padding-bottom:.25rem}.c-pb-2{padding-bottom:.25rem}.c-pb-3{padding-bottom:.5rem}.c-pb-6{padding-bottom:1.5rem}.c-pb-only-8{padding-bottom:5rem!important}.c-pb-9{padding-bottom:3.125rem}.c-px-4{padding-left:.75rem;padding-right:.75rem}.c-px-5{padding-left:1rem;padding-right:1rem}.c-py-6{padding-top:1.5rem;padding-bottom:1.5rem}@media (min-width:576px){h4{font-size:1.3125rem}.c-mt-2{margin-top:.3rem}.c-mt-3{margin-top:.6rem}.c-mt-4{margin-top:.9rem}.c-mt-5{margin-top:1.2rem}.c-mt-6{margin-top:1.8rem}.c-mt-7{margin-top:2.4rem}.c-mt-8{margin-top:3rem}.c-mt-9{margin-top:3.75rem}.c-mt-10{margin-top:4.8rem}.c-my-9{margin-top:3.75rem;margin-bottom:3.75rem}.c-pt-3{padding-top:.6rem}.c-pt-5{padding-top:1.2rem}.c-pt-6{padding-top:1.8rem}.c-pt-8{padding-top:3rem}.c-pt-9{padding-top:3.75rem}.c-pt-10{padding-top:4.8rem}.c-pb-2{padding-bottom:.3rem}.c-pb-3{padding-bottom:.6rem}.c-pb-6{padding-bottom:1.8rem}.c-pb-9{padding-bottom:3.75rem}.c-px-4{padding-left:.9rem;padding-right:.9rem}.c-px-5{padding-left:1.2rem;padding-right:1.2rem}.c-py-6{padding-top:1.8rem;padding-bottom:1.8rem}}@media (min-width:768px){h4{font-size:1.375rem}.c-mt-2{margin-top:.35rem}.c-mt-3{margin-top:.7rem}.c-mt-4{margin-top:1.05rem}.c-mt-5{margin-top:1.4rem}.c-mt-6{margin-top:2.1rem}.c-mt-7{margin-top:2.8rem}.c-mt-8{margin-top:3.5rem}.c-mt-9{margin-top:4.375rem}.c-mt-10{margin-top:5.6rem}.c-my-9{margin-top:4.375rem;margin-bottom:4.375rem}.c-pt-3{padding-top:.7rem}.c-pt-5{padding-top:1.4rem}.c-pt-6{padding-top:2.1rem}.c-pt-8{padding-top:3.5rem}.c-pt-9{padding-top:4.375rem}.c-pt-10{padding-top:5.6rem}.c-pb-2{padding-bottom:.35rem}.c-pb-3{padding-bottom:.7rem}.c-pb-6{padding-bottom:2.1rem}.c-pb-9{padding-bottom:4.375rem}.c-px-4{padding-left:1.05rem;padding-right:1.05rem}.c-px-5{padding-left:1.4rem;padding-right:1.4rem}.c-py-6{padding-top:2.1rem;padding-bottom:2.1rem}.c-mt-md-2{margin-top:.35rem}.c-mt-md-5{margin-top:1.4rem}.c-mt-md-7{margin-top:2.8rem}.c-pt-md-5{padding-top:1.4rem}.c-pb-md-5{padding-bottom:1.4rem}.c-pb-md-6{padding-bottom:2.1rem}}@media (min-width:992px){h4{font-size:1.4375rem}.c-mt-2{margin-top:.4rem}.c-mt-3{margin-top:.8rem}.c-mt-4{margin-top:1.2rem}.c-mt-5{margin-top:1.6rem}.c-mt-6{margin-top:2.4rem}.c-mt-7{margin-top:3.2rem}.c-mt-8{margin-top:4rem}.c-mt-9{margin-top:5rem}.c-mt-10{margin-top:6.4rem}.c-my-9{margin-top:5rem;margin-bottom:5rem}.c-pt-3{padding-top:.8rem}.c-pt-5{padding-top:1.6rem}.c-pt-6{padding-top:2.4rem}.c-pt-8{padding-top:4rem}.c-pt-9{padding-top:5rem}.c-pt-10{padding-top:6.4rem}.c-pb-2{padding-bottom:.4rem}.c-pb-3{padding-bottom:.8rem}.c-pb-6{padding-bottom:2.4rem}.c-pb-9{padding-bottom:5rem}.c-px-4{padding-left:1.2rem;padding-right:1.2rem}.c-px-5{padding-left:1.6rem;padding-right:1.6rem}.c-py-6{padding-top:2.4rem;padding-bottom:2.4rem}.c-mt-md-2{margin-top:.4rem}.c-mt-md-5{margin-top:1.6rem}.c-mt-md-7{margin-top:3.2rem}.c-pt-md-5{padding-top:1.6rem}.c-pb-md-5{padding-bottom:1.6rem}.c-pb-md-6{padding-bottom:2.4rem}.c-mt-lg-2{margin-top:.4rem}.c-mt-lg-3{margin-top:.8rem}.c-mt-lg-4{margin-top:1.2rem}.c-mt-lg-8{margin-top:4rem}.c-mt-lg-9{margin-top:5rem}.c-mr-lg-3{margin-right:.8rem}.c-pt-lg-4{padding-top:1.2rem}.c-pt-lg-6{padding-top:2.4rem}.c-pt-lg-7{padding-top:3.2rem}.c-pt-lg-8{padding-top:4rem}.c-pb-lg-3{padding-bottom:.8rem}.c-pb-lg-6{padding-bottom:2.4rem}.c-pb-lg-10{padding-bottom:6.4rem}.c-px-lg-5{padding-left:1.6rem;padding-right:1.6rem}.c-px-lg-7{padding-left:3.2rem;padding-right:3.2rem}}@media (min-width:1200px){h4{font-size:1.5rem}.c-mt-2{margin-top:.45rem}.c-mt-3{margin-top:.9rem}.c-mt-4{margin-top:1.35rem}.c-mt-5{margin-top:1.8rem}.c-mt-6{margin-top:2.7rem}.c-mt-7{margin-top:3.6rem}.c-mt-8{margin-top:4.5rem}.c-mt-9{margin-top:5.625rem}.c-mt-10{margin-top:7.2rem}.c-my-9{margin-top:5.625rem;margin-bottom:5.625rem}.c-pt-3{padding-top:.9rem}.c-pt-5{padding-top:1.8rem}.c-pt-6{padding-top:2.7rem}.c-pt-8{padding-top:4.5rem}.c-pt-9{padding-top:5.625rem}.c-pt-10{padding-top:7.2rem}.c-pb-2{padding-bottom:.45rem}.c-pb-3{padding-bottom:.9rem}.c-pb-6{padding-bottom:2.7rem}.c-pb-9{padding-bottom:5.625rem}.c-px-4{padding-left:1.35rem;padding-right:1.35rem}.c-px-5{padding-left:1.8rem;padding-right:1.8rem}.c-py-6{padding-top:2.7rem;padding-bottom:2.7rem}.c-mt-md-2{margin-top:.45rem}.c-mt-md-5{margin-top:1.8rem}.c-mt-md-7{margin-top:3.6rem}.c-pt-md-5{padding-top:1.8rem}.c-pb-md-5{padding-bottom:1.8rem}.c-pb-md-6{padding-bottom:2.7rem}.c-mt-lg-2{margin-top:.45rem}.c-mt-lg-3{margin-top:.9rem}.c-mt-lg-4{margin-top:1.35rem}.c-mt-lg-8{margin-top:4.5rem}.c-mt-lg-9{margin-top:5.625rem}.c-mr-lg-3{margin-right:.9rem}.c-pt-lg-4{padding-top:1.35rem}.c-pt-lg-6{padding-top:2.7rem}.c-pt-lg-7{padding-top:3.6rem}.c-pt-lg-8{padding-top:4.5rem}.c-pb-lg-3{padding-bottom:.9rem}.c-pb-lg-6{padding-bottom:2.7rem}.c-pb-lg-10{padding-bottom:7.2rem}.c-px-lg-5{padding-left:1.8rem;padding-right:1.8rem}.c-px-lg-7{padding-left:3.6rem;padding-right:3.6rem}}@media (min-width:1400px){.c-mt-2{margin-top:.5rem}.c-mt-3{margin-top:1rem}.c-mt-4{margin-top:1.5rem}.c-mt-5{margin-top:2rem}.c-mt-6{margin-top:3rem}.c-mt-7{margin-top:4rem}.c-mt-8{margin-top:5rem}.c-mt-9{margin-top:6.25rem}.c-mt-10{margin-top:8rem}.c-my-9{margin-top:6.25rem;margin-bottom:6.25rem}.c-pt-3{padding-top:1rem}.c-pt-5{padding-top:2rem}.c-pt-6{padding-top:3rem}.c-pt-8{padding-top:5rem}.c-pt-9{padding-top:6.25rem}.c-pt-10{padding-top:8rem}.c-pb-2{padding-bottom:.5rem}.c-pb-3{padding-bottom:1rem}.c-pb-6{padding-bottom:3rem}.c-pb-9{padding-bottom:6.25rem}.c-px-4{padding-left:1.5rem;padding-right:1.5rem}.c-px-5{padding-left:2rem;padding-right:2rem}.c-py-6{padding-top:3rem;padding-bottom:3rem}.c-mt-md-2{margin-top:.5rem}.c-mt-md-5{margin-top:2rem}.c-mt-md-7{margin-top:4rem}.c-pt-md-5{padding-top:2rem}.c-pb-md-5{padding-bottom:2rem}.c-pb-md-6{padding-bottom:3rem}.c-mt-lg-2{margin-top:.5rem}.c-mt-lg-3{margin-top:1rem}.c-mt-lg-4{margin-top:1.5rem}.c-mt-lg-8{margin-top:5rem}.c-mt-lg-9{margin-top:6.25rem}.c-mr-lg-3{margin-right:1rem}.c-pt-lg-4{padding-top:1.5rem}.c-pt-lg-6{padding-top:3rem}.c-pt-lg-7{padding-top:4rem}.c-pt-lg-8{padding-top:5rem}.c-pb-lg-3{padding-bottom:1rem}.c-pb-lg-6{padding-bottom:3rem}.c-pb-lg-10{padding-bottom:8rem}.c-px-lg-5{padding-left:2rem;padding-right:2rem}.c-px-lg-7{padding-left:4rem;padding-right:4rem}.c-pr-xxl-8{padding-right:5rem}}.c-mt-0{margin-top:0!important}.c-mr-0{margin-right:0!important}.c-mb-0{margin-bottom:0!important}.c-p-0{padding:0!important}.c-pr-0{padding-right:0!important}.c-pb-0{padding-bottom:0!important}.c-px-0{padding-left:0!important}.c-px-0{padding-right:0!important}.font-family-base{font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}.fw-semibold{font-weight:600}body,html{overflow-x:hidden}#termly-code-snippet-support .t-CookiePolicyLink{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}#termly-code-snippet-support .t-CookiePolicyLink:focus,#termly-code-snippet-support .t-CookiePolicyLink:hover{background-size:100% 100%}#termly-code-snippet-support .t-CookiePolicyLink{background-position:100%;background-size:100% 100%}#termly-code-snippet-support .t-CookiePolicyLink:focus,#termly-code-snippet-support .t-CookiePolicyLink:hover{background-size:0 100%}#termly-code-snippet-support *{font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'!important}#termly-code-snippet-support .t-CookiePolicyLink{text-decoration:none!important}#termly-code-snippet-support button{position:relative!important;z-index:1!important;display:-webkit-inline-box;display:inline-flex;-webkit-box-align:center!important;align-items:center!important;-webkit-box-pack:center!important;justify-content:center!important;overflow:hidden!important;width:auto!important;border:1px solid!important;border-radius:3.125rem!important;font-weight:400!important;font-size:.825rem!important;text-align:center!important;-webkit-transition:.3s!important;transition:all .3s ease!important;padding:.5625rem 1.96875rem!important}.screen-reader-shortcut-header{position:fixed;top:-1000em}.screen-reader-shortcut-header:focus{top:.4375rem;left:.375rem;z-index:100000;display:block;width:auto;height:auto;padding:.9375rem 1.4375rem .875rem;background:#f1f1f1;color:#0073aa;box-shadow:0 0 2px 2px rgba(0,0,0,.6);font-weight:600;font-size:.875rem;line-height:normal;text-decoration:none}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.125rem}.mobile-navigation{overflow:auto}.mobile-navigation__trigger{position:fixed;opacity:0}.mobile-navigation__trigger:checked~.mobile-navigation__menu{-webkit-transform:translateY(0);transform:translateY(0)}.mobile-navigation__menu{position:fixed;top:0;left:0;z-index:11;overflow:auto;width:100%;height:100%;max-height:100vh;background:#fff;-webkit-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:opacity .4s ease-in-out,-webkit-transform .4s ease-in-out;transition:opacity .4s ease-in-out,-webkit-transform .4s ease-in-out;transition:transform .4s ease-in-out,opacity .4s ease-in-out;transition:transform .4s ease-in-out,opacity .4s ease-in-out,-webkit-transform .4s ease-in-out}.mobile-navigation__menu .mburger{height:auto;margin-right:-1rem;-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.mobile-navigation__menu .mburger svg path{-webkit-transition:fill .2s ease-in-out;transition:fill .2s ease-in-out}.mobile-navigation__menu .mburger:hover{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.mobile-navigation__menu .mburger:hover svg path{fill:#7b33fb}.mobile-navigation__menu .crunch-button{max-width:23.5rem}.mobile-navigation__menu .dropdown{width:100%}.mobile-navigation__menu .dropdown:after{content:"";display:block;width:calc(100% + 1.875rem);height:1px;margin-top:2rem;margin-left:-.9375rem;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='346' height='2' fill='none'%3E%3Cpath d='M346 1H0' stroke='%23C4C4C4' stroke-width='.989' stroke-dasharray='7.91 7.91'/%3E%3C/svg%3E")}.mobile-navigation__menu .dropdown-toggle{margin-top:2rem;padding:0 .5rem;color:#1a1a1a}.mobile-navigation__menu .dropdown-menu{position:relative;display:-webkit-box;display:flex;flex-wrap:wrap;padding:0;border:none}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{width:50%;margin-top:1.5rem!important}@media (min-width:576px){#termly-code-snippet-support button{padding:.6rem 2.1rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.15rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:1.8rem!important}}@media (min-width:768px){.c-mt-md-0{margin-top:0!important}#termly-code-snippet-support button{padding:.6375rem 2.23125rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.175rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:2.1rem!important}}@media (min-width:992px){.c-mt-lg-0{margin-top:0!important}.c-my-lg-0{margin-top:0!important;margin-bottom:0!important}.c-pt-lg-0{padding-top:0!important}.c-pb-lg-0{padding-bottom:0!important}.c-py-lg-0{padding-top:0!important;padding-bottom:0!important}#termly-code-snippet-support button{padding:.675rem 2.3625rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.2rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:2.4rem!important}}@media (min-width:1200px){#termly-code-snippet-support button{padding:.7125rem 2.49375rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.225rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:2.7rem!important}}@media (min-width:1400px){#termly-code-snippet-support button{padding:.75rem 2.625rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.25rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:3rem!important}}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper .dropdown-item{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;height:100%;padding-right:.5rem;padding-left:.5rem}.mobile-navigation__menu .dropdown-item-icon{width:2.25rem;height:auto;margin-right:1rem}.mobile-navigation__menu .dropdown-item-description{display:none!important}.mobile-navigation__menu .dropdown-item-link{line-height:1.25;white-space:pre-wrap}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{color:#1a1a1a}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link:after{display:none}.mobile-navigation__menu .dropdown-item{-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.mobile-navigation__menu .dropdown-item.active,.mobile-navigation__menu .dropdown-item:active,.mobile-navigation__menu .dropdown-item:focus,.mobile-navigation__menu .dropdown-item:hover{background-color:transparent;color:#7b33fb}.mobile-navigation__menu .nav-item,.mobile-navigation__menu .nav-item.dropdown--small .dropdown-menu .dropdown-item-wrapper{width:100%}.mobile-navigation__menu .nav-item .nav-link{margin-top:2rem;padding-right:.5rem;padding-left:.5rem;color:#1a1a1a;-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.mobile-navigation__menu .nav-item .nav-link.active,.mobile-navigation__menu .nav-item .nav-link:active,.mobile-navigation__menu .nav-item .nav-link:focus,.mobile-navigation__menu .nav-item .nav-link:hover{color:#7b33fb}.mobile-navigation__menu .navbar-button{display:none}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-description{font-size:.875rem}.main-header .navbar .navbar-nav li .nav-link,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item,.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{font-size:1rem}.main-header .navbar .navbar-nav li.active:not(.navbar-button),.main-header .navbar .navbar-nav li:not(.dropdown):not(.navbar-button) .nav-link{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.main-header .navbar .navbar-nav li.active:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.active:hover:not(.navbar-button),.main-header .navbar .navbar-nav li:not(.dropdown):not(.navbar-button) .nav-link:focus,.main-header .navbar .navbar-nav li:not(.dropdown):not(.navbar-button) .nav-link:hover{background-size:100% 100%}.main-header .navbar .navbar-nav li.active:not(.navbar-button){background-position:100%;background-size:100% 100%}.main-header .navbar .navbar-nav li.active:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.active:hover:not(.navbar-button){background-size:0 100%}.main-header .navbar .mburger,.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:focus,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:hover{background:#3866f5;background:-webkit-linear-gradient(10deg,#3866f5,#bd00ff 100%,#3866f5 200%);background:linear-gradient(80deg,#3866f5,#bd00ff 100%,#3866f5 200%)}.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{position:relative;z-index:1;display:-webkit-inline-box;display:inline-flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;overflow:hidden;border:1px solid;border-radius:3.125rem;background-color:transparent;font-weight:400;text-align:center;-webkit-transition:.3s,color .1s!important;transition:all .3s ease,color .1s ease!important;padding:.5625rem 1.96875rem}.main-header .navbar .navbar-nav li.navbar-button.active a:focus,.main-header .navbar .navbar-nav li.navbar-button.active a:hover,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:focus,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:hover{box-shadow:0 0 .325rem 0 rgba(0,0,0,.3)}.main-header .navbar .navbar-nav li.navbar-button.active a{border:none;color:#fff}.main-header .navbar .navbar-nav li.navbar-button.active a:focus,.main-header .navbar .navbar-nav li.navbar-button.active a:hover{color:#fff!important}.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:focus,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:hover{border-color:transparent!important;color:#fff!important}.main-header{z-index:10!important;-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.main-header:hover{z-index:11!important;background-color:#fff}.main-header:after{content:"";position:absolute;top:0;left:0;z-index:-1;display:block;width:100%;height:100%;box-shadow:0 0 1.875rem 0 rgba(0,0,0,.1);opacity:0;visibility:hidden;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header--hide{-webkit-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:translateY .2s ease-in-out;transition:translateY .2s ease-in-out}.main-header .navbar{-webkit-transition:padding-top .2s ease-in-out,padding-bottom .2s ease-in-out;transition:padding-top .2s ease-in-out,padding-bottom .2s ease-in-out;padding-top:1.5rem;padding-bottom:1.5rem}@media (min-width:576px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.6rem 2.1rem}.main-header .navbar{padding-top:1.7rem;padding-bottom:1.7rem}}@media (min-width:768px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.6375rem 2.23125rem}.main-header .navbar{padding-top:1.9rem;padding-bottom:1.9rem}}.main-header .navbar .navbar-brand{width:13.75rem;height:3.25rem;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li{position:static}@media (min-width:992px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.675rem 2.3625rem}.main-header .navbar{padding-top:2.1rem;padding-bottom:2.1rem}.main-header .navbar .navbar-brand{width:14.875rem;height:3.5rem}.main-header .navbar .navbar-nav li{margin-left:.5rem;margin-right:.5rem}.main-header .navbar .navbar-nav li:nth-last-child(2){margin-right:1.25rem}}@media (min-width:1200px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.7125rem 2.49375rem}.main-header .navbar{padding-top:2.3rem;padding-bottom:2.3rem}.main-header .navbar .navbar-nav li{margin-left:.75rem;margin-right:.75rem}.main-header .navbar .navbar-nav li:nth-last-child(2){margin-right:1.875rem}}@media (min-width:1400px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.75rem 2.625rem}.main-header .navbar{padding-top:2.5rem;padding-bottom:2.5rem}.main-header .navbar .navbar-nav li{margin-left:1rem;margin-right:1rem}.main-header .navbar .navbar-nav li:nth-last-child(2){margin-right:2.5rem}}.main-header .navbar .navbar-nav li:last-child{margin:0}.main-header .navbar .navbar-nav li:not(.navbar-button) a{padding-top:0}.main-header .navbar .navbar-nav li:not(.navbar-button).active .nav-link{position:relative;top:1px;background:0 0;font-weight:600}.main-header .navbar .navbar-nav li.dropdown:hover .dropdown-toggle{color:#737373}.main-header .navbar .navbar-nav li.dropdown:hover .dropdown-wrapper{color:#7b33fb}.main-header .navbar .navbar-nav li.dropdown:hover .dropdown-wrapper .dropdown-menu{opacity:1;visibility:visible;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper{position:relative}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-toggle{position:relative;display:-webkit-box;display:flex;-webkit-box-align:end;align-items:flex-end;padding:0 0 .125rem;border:none}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-toggle:after{content:"";position:absolute;top:50%;right:0;bottom:0;display:none;width:.675rem;height:.375rem;margin-left:0;border:none;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMjAuMDUgMTkwLjY1Ij48cGF0aCBmaWxsPSIjN0U3RTdFIiBkPSJNMTUxLjUyIDE4Ny4xMkwzLjUyIDQwLjMzYTEyIDEyIDAgMDEwLTE3bDE5LjgtMTkuODFhMTIgMTIgMCAwMTE3IDBMMTYwIDEyMiAyNzkuNzMgMy41M2ExMiAxMiAwIDAxMTcgMGwxOS43OSAxOS44YTEyIDEyIDAgMDEwIDE3bC0xNDggMTQ2LjhhMTIgMTIgMCAwMS0xNyAweiIvPjwvc3ZnPg==) no-repeat;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu{position:absolute;display:-webkit-box;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-flow:row;flex-wrap:wrap;margin-top:1rem;padding:2rem 1.25rem;border:none;border-radius:1.25rem;box-shadow:0 0 1rem 0 rgba(0,0,0,.11);opacity:0;visibility:hidden;-webkit-transition:visibility 0s .2s,opacity .2s ease-in-out;transition:visibility 0s .2s,opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu:before{content:"";position:absolute;top:-.5rem;right:0;left:0;width:1rem;height:1rem;margin:0 auto;background-color:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu.show{opacity:1;visibility:visible;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper--with-icon .dropdown-item{padding-left:3rem}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper--with-icon .dropdown-item.active{color:#2f2f2f}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper--with-icon .dropdown-item.active .dropdown-item-icon{opacity:1}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item{position:relative;display:block;padding:0;background-color:transparent;color:#2f2f2f}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:not(:first-of-type){border-top:1px solid #e8e8e8}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item.active{background-color:transparent;color:#7b33fb}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover{background-color:transparent}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus .dropdown-item-icon,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover .dropdown-item-icon{opacity:1}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus .dropdown-item-link:after,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover .dropdown-item-link:after{right:-1rem;opacity:1}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus .dropdown-item-description,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover .dropdown-item-description{color:#2f2f2f}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-icon{position:absolute;top:.5rem;left:0;width:2.125rem;height:auto;opacity:.5;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-icon--top-0{top:0}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-link{position:relative;line-height:1.25rem;white-space:break-spaces}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-link:after{content:"";position:absolute;top:50%;right:-.5rem;width:.625rem;height:.625rem;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMS4zOCAxMS4wOSI+PHBhdGggZD0iTTQuODQuNzRMNS40LjE4YS42LjYgMCAwMS44NiAwbDQuOTQgNC45M2EuNi42IDAgMDEwIC44NmwtNC45NCA0Ljk0YS42LjYgMCAwMS0uODYgMGwtLjU2LS41NmEuNjIuNjIgMCAwMTAtLjg4bDMuMDctMi45MUguNjFBLjYxLjYxIDAgMDEwIDZ2LS44NmEuNjEuNjEgMCAwMS42MS0uNjFoNy4zTDQuODUgMS42MWEuNi42IDAgMDEtLjAxLS44N3oiIGZpbGw9IiMyZjJmMmYiLz48L3N2Zz4=) 50% no-repeat;background-size:100% auto;opacity:0;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:opacity .2s ease-in-out .2s,right .2s ease-in-out .2s;transition:opacity .2s ease-in-out .2s,right .2s ease-in-out .2s}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-description{display:block;color:#737373;line-height:1.4;white-space:break-spaces;-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown--small .dropdown-wrapper .dropdown-menu{left:50%;display:block;width:16.875rem;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.main-header .navbar .navbar-nav li.dropdown--small .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper:not(:first-of-type){margin-top:1rem}.main-header .navbar .navbar-nav li.dropdown--large .dropdown-wrapper .dropdown-menu{left:50%;width:37.5rem;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.main-header .navbar .navbar-nav li.dropdown--large .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper{-webkit-box-flex:0;flex:0 0 50%;width:50%;padding:0 .625rem}.main-header .navbar .navbar-nav li.dropdown--large .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper:not(:first-child):not(:nth-child(2)){margin-top:1.75rem}.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding-top:.825rem;padding-bottom:.825rem}.main-header .navbar .navbar-nav li.navbar-button a{border-color:#2f2f2f;color:#2f2f2f;line-height:1.3}.main-header .navbar .navbar-nav li .nav-link{display:block;border-bottom:1px solid transparent;color:#2f2f2f;line-height:1.25}.main-header .navbar .mburger{--mb-button-size:2.75rem;--mb-bar-height:0.125rem;--mb-bar-spacing:0.375rem;margin-right:-1rem;color:hsla(0,0%,100%,.6);-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.main-header .navbar .mburger:hover{color:#fff}.main-header .navbar .mburger b{left:50%;width:1.25rem;border-radius:1px;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.main-header--is-window-scrolled{z-index:11!important;background-color:#fff}.main-header--is-window-scrolled:after{opacity:1;visibility:visible}.main-header--is-window-scrolled .navbar{padding-top:1.5rem;padding-bottom:1.5rem}@media (min-width:576px){.main-header--is-window-scrolled .navbar{padding-top:1.4rem;padding-bottom:1.4rem}}@media (min-width:768px){.main-header--is-window-scrolled .navbar{padding-top:1.3rem;padding-bottom:1.3rem}}.main-header--hide .dropdown-menu{display:none!important}.mm-wrapper_opening .mm-menu_opened~.mm-slideout.main-header{z-index:2;background-color:transparent}.return-to-top{right:3rem;bottom:3rem;z-index:5;width:2.75rem;height:2.75rem;background:#a4ebf7;background:-webkit-linear-gradient(left,#a4ebf7,#bef9e6);background:linear-gradient(90deg,#a4ebf7,#bef9e6);box-shadow:0 0 .25rem 0 rgba(0,0,0,.1);text-decoration:none;opacity:0;visibility:hidden}.return-to-top--is-visible{opacity:1;visibility:visible;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.return-to-top--is-visible:hover{opacity:.75}.return-to-top__chevron{width:1.5rem;height:.8125rem}.return-to-top__chevron path{fill:currentColor}.main-footer__primary-menu a,.main-footer__secondary-menu li a{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.main-footer__primary-menu a:focus,.main-footer__primary-menu a:hover,.main-footer__secondary-menu li a:focus,.main-footer__secondary-menu li a:hover{background-size:100% 100%}.main-footer .entry-content a{color:#0f0f0f!important;font-weight:400!important}.main-footer .entry-content strong{font-weight:600}.main-footer .entry-content strong a{font-weight:600!important}.main-footer__company a,.main-footer__company p{margin-bottom:0}.main-footer__menu-wrapper{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.main-footer__primary-menu a{color:#0f0f0f}@media (min-width:992px){.main-header--is-window-scrolled .navbar{padding-top:1.2rem;padding-bottom:1.2rem}.main-footer__menu-wrapper{-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-direction:row;-webkit-box-pack:justify;justify-content:space-between;width:-webkit-max-content;width:-moz-max-content;width:max-content;padding:0}.main-footer__primary-menu a{margin-right:1.95rem}.main-footer__secondary-menu-wrapper{align-self:center}}.main-footer__list-container{width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}.main-footer__secondary-menu-wrapper{padding-right:1.28rem}.main-footer__secondary-menu{margin-left:-1rem;margin-right:-1rem}.main-footer__secondary-menu{margin-top:-.5rem}.main-footer__secondary-menu li{position:relative;margin-top:.5rem}.main-footer__secondary-menu li{padding-left:1rem;padding-right:1rem}.main-footer__secondary-menu li:last-child:after{display:none}.main-footer__secondary-menu li:after{content:"";position:absolute;top:50%;right:0;display:block;width:1px;height:1rem;background:#737373;-webkit-transform:translateY(-58%);transform:translateY(-58%)}.main-footer__secondary-menu li a{color:#737373}.main-footer__logo{-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-footer__copyrights{width:30vw;min-width:-webkit-fit-content;min-width:-moz-fit-content;min-width:fit-content}#main{padding-top:6.25rem}.entry-author ol li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-content ol li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link){padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.entry-author ol li a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ol li a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-content ol li a:focus:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ol li a:hover:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:focus:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:hover:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:focus:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:hover:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link){background-size:100% 100%}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:.75em}.entry-content--text-page h1,.entry-content--text-page h2,.entry-content--text-page h3,.entry-content--text-page h4{margin-bottom:1rem!important}.entry-content--text-page .h1,.entry-content--text-page .h2,.entry-content--text-page h1,.entry-content--text-page h2{font-weight:900;font-family:'Tiempos Headline',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}.entry-content--text-page .h3,.entry-content--text-page h3,.entry-content--text-page h4{font-weight:600;font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}.entry-content--text-page .h1,.entry-content--text-page h1{font-size:2.5rem}@media (min-width:576px){.main-footer__secondary-menu{margin-left:-1.05rem;margin-right:-1.05rem}.main-footer__secondary-menu{margin-top:-.6rem}.main-footer__secondary-menu li{margin-top:.6rem}.main-footer__secondary-menu li{padding-left:1.05rem;padding-right:1.05rem}#main{padding-top:6.7rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:.9em}.entry-content--text-page .h1,.entry-content--text-page h1{font-size:2.625rem}}@media (min-width:768px){.main-footer__secondary-menu{margin-left:-1.1rem;margin-right:-1.1rem}.main-footer__secondary-menu{margin-top:-.7rem}.main-footer__secondary-menu li{margin-top:.7rem}.main-footer__secondary-menu li{padding-left:1.1rem;padding-right:1.1rem}#main{padding-top:7.15rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.05em}.entry-content--text-page .h1,.entry-content--text-page h1{font-size:2.75rem}}@media (min-width:992px){.main-footer__secondary-menu{margin-left:-1.15rem;margin-right:-1.15rem}.main-footer__secondary-menu{margin-top:-.8rem}.main-footer__secondary-menu li{margin-top:.8rem}.main-footer__secondary-menu li{padding-left:1.15rem;padding-right:1.15rem}.main-footer__social-icons{width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}#main{padding-top:7.6rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.2em}.entry-content--text-page .h1,.entry-content--text-page h1{font-size:2.875rem}}@media (min-width:1200px){.main-header--is-window-scrolled .navbar{padding-top:1.1rem;padding-bottom:1.1rem}.main-footer__primary-menu a{margin-right:3.3rem}.main-footer__secondary-menu{margin-left:-1.2rem;margin-right:-1.2rem}.main-footer__secondary-menu{margin-top:-.9rem}.main-footer__secondary-menu li{margin-top:.9rem}.main-footer__secondary-menu li{padding-left:1.2rem;padding-right:1.2rem}#main{padding-top:8.05rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.35em}.entry-content--text-page .h1,.entry-content--text-page h1{font-size:3rem}}.entry-content--text-page .h2,.entry-content--text-page h2{line-height:1.4;font-size:1.75rem}@media (min-width:576px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:1.875rem}}@media (min-width:768px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:2rem}}@media (min-width:992px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:2.125rem}}@media (min-width:1200px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:2.25rem}}.entry-content--text-page .h3,.entry-content--text-page h3{line-height:1.5;font-size:1.25rem}@media (min-width:576px){.entry-content--text-page .h3,.entry-content--text-page h3{font-size:1.3125rem}}@media (min-width:768px){.entry-content--text-page .h3,.entry-content--text-page h3{font-size:1.375rem}}@media (min-width:992px){.entry-content--text-page .h3,.entry-content--text-page h3{font-size:1.4375rem}}@media (min-width:1200px){.entry-content--text-page .h3,.entry-content--text-page h3{font-size:1.5rem}}.entry-content--text-page h4{font-size:.875rem;text-transform:uppercase;letter-spacing:.4px}@media (min-width:576px){.entry-content--text-page h4{letter-spacing:.72px}}@media (min-width:768px){.entry-content--text-page h4{letter-spacing:1.04px}}@media (min-width:992px){.entry-content--text-page h4{letter-spacing:1.36px}}@media (min-width:1200px){.entry-content--text-page h4{letter-spacing:1.68px}}@media (min-width:1400px){.main-header--is-window-scrolled .navbar{padding-top:1rem;padding-bottom:1rem}.main-footer__primary-menu a{margin-right:3.5rem}.main-footer__secondary-menu{margin-left:-1.25rem;margin-right:-1.25rem}.main-footer__secondary-menu{margin-top:-1rem}.main-footer__secondary-menu li{margin-top:1rem}.main-footer__secondary-menu li{padding-left:1.25rem;padding-right:1.25rem}#main{padding-top:8.5rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.5em}.entry-content--text-page h4{letter-spacing:2px}}.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.375em}@media (min-width:576px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.45em}}@media (min-width:768px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.525em}}@media (min-width:992px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.6em}}@media (min-width:1200px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.675em}}@media (min-width:1400px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.75em}}.entry-content>p{line-height:1.7;margin-top:.625em}.entry-content>p>a[class*=-button]{margin-top:.75em}@media (min-width:576px){.entry-content>p{margin-top:.75em}.entry-content>p>a[class*=-button]{margin-top:.9em}}@media (min-width:768px){.entry-content>p{margin-top:.875em}.entry-content>p>a[class*=-button]{margin-top:1.05em}}@media (min-width:992px){.entry-content>p{margin-top:1em}.entry-content>p>a[class*=-button]{margin-top:1.2em}}@media (min-width:1200px){.entry-content>p{margin-top:1.125em}.entry-content>p>a[class*=-button]{margin-top:1.35em}}@media (min-width:1400px){.entry-content>p{margin-top:1.25em}.entry-content>p>a[class*=-button]{margin-top:1.5em}}.entry-content>p a{color:#7b33fb}.entry-content ol li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link){color:#7b33fb;font-weight:600}.entry-content ol li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link)[href*=http],.entry-content p a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link)[href*=http],.entry-content ul li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link)[href*=http]{word-wrap:break-word;word-break:break-word;overflow-wrap:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto}.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:.75em}.entry-content sup{top:-.75em;font-size:50%}.entry-content sub{bottom:-.25em;font-size:50%}.entry-content>ul:not(.wp-block-gallery){list-style-type:disc}.entry-content>ol:not(.wp-block-gallery){list-style-type:decimal}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-right:0;margin-bottom:0;margin-left:0;list-style-position:outside;margin-top:.5em}@media (min-width:576px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:.9em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.6em}}@media (min-width:768px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.05em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.7em}}@media (min-width:992px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.2em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.8em}}@media (min-width:1200px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.35em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.9em}}@media (min-width:1400px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.5em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:1em}}.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-right:0;list-style-position:outside;margin-top:.5em;margin-left:.5em;margin-bottom:.75em}.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ul{list-style-type:circle}.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ol{list-style-type:lower-latin}.entry-content>ol:not(.wp-block-gallery) li,.entry-content>ul:not(.wp-block-gallery) li{line-height:1.4}.entry-content>ol:not(.wp-block-gallery) li:first-child,.entry-content>ul:not(.wp-block-gallery) li:first-child{margin-top:0}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{display:block;width:auto;max-width:100%;height:auto;margin-right:auto;margin-left:auto;border-radius:1.25rem;margin-top:1.5em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:1.5em}@media (min-width:576px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.6em;margin-left:.6em;margin-bottom:.9em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:1.8em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:1.8em}}@media (min-width:768px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.7em;margin-left:.7em;margin-bottom:1.05em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:2.1em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:2.1em}}@media (min-width:992px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.8em;margin-left:.8em;margin-bottom:1.2em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:2.4em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:2.4em}}@media (min-width:1200px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.9em;margin-left:.9em;margin-bottom:1.35em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:2.7em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:2.7em}}@media (min-width:1400px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:1em;margin-left:1em;margin-bottom:1.5em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:3em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:3em}}.entry-content>.wp-caption{display:inline-block;margin-bottom:0}.entry-content>.wp-caption img{margin:0}.entry-content>iframe{width:100%;margin-top:.75em;height:14rem}@media (min-width:576px){.entry-content>iframe{margin-top:.9em;height:17.6rem}}@media (min-width:768px){.entry-content>iframe{margin-top:1.05em;height:21.2rem}}@media (min-width:992px){.entry-content>iframe{margin-top:1.2em;height:24.8rem}}@media (min-width:1200px){.entry-content>iframe{margin-top:1.35em;height:28.4rem}}@media (min-width:1400px){.entry-content>iframe{margin-top:1.5em;height:32rem}}.entry-content>pre{display:block;border-radius:.5rem;background:#3a3a3a;color:#fff;white-space:pre-wrap;word-wrap:break-word;margin-top:.75em;padding:.5em}@media (min-width:576px){.entry-content>pre{margin-top:.9em;padding:.6em}}@media (min-width:768px){.entry-content>pre{margin-top:1.05em;padding:.7em}}@media (min-width:992px){.entry-content>pre{margin-top:1.2em;padding:.8em}}@media (min-width:1200px){.entry-content>pre{margin-top:1.35em;padding:.9em}}@media (min-width:1400px){.entry-content>pre{margin-top:1.5em;padding:1em}}.entry-content>code{padding-right:.25em;padding-left:.25em;border:1px solid #d3d3e7;background:#f4f4f9;color:#ce375c;font-style:italic}.entry-content>table{margin-top:1.5em}.entry-content>table td,.entry-content>table th{vertical-align:middle;min-width:5rem;padding:1em}.entry-content>table td img,.entry-content>table th img{margin-top:0}.entry-content>table a{color:#7b33fb;font-weight:600}.entry-content>table:not(.wp-block-table){border:1px solid #e5e5e5}.entry-content>table:not(.wp-block-table) tr{border-bottom:1px solid #e5e5e5}.entry-content>table:not(.wp-block-table) tr:last-child:not(:first-child){border:0}.entry-content>table:not(.wp-block-table) td,.entry-content>table:not(.wp-block-table) th{border-right:1px solid #e5e5e5}.entry-content>table:not(.wp-block-table) td:last-child,.entry-content>table:not(.wp-block-table) th:last-child{border:0}.entry-content :last-child{margin-bottom:0}.entry-content :not([class*=c-my-]):not([class*=c-mt-]):first-child{margin-top:0}#singleToc{position:absolute;z-index:0;width:100%;padding-right:calc(var(--bs-gutter-x));-webkit-transform:translateY(-50%);transform:translateY(-50%)}@media (max-width:991.98px){#singleToc{position:fixed!important;top:0;left:0;z-index:2;overflow:hidden;width:100%;max-width:100%!important;height:auto;padding:1.5rem var(--bs-gutter-x,.9375rem);background:#fff;box-shadow:0 0 .5rem #d7d7d7;-webkit-transform:unset!important;transform:unset!important}#singleToc .title{display:none}}#singleToc.hidden{opacity:0}.entry-author img{-webkit-box-flex:0;flex:0 0 5rem;width:5rem;height:5rem}.entry-author ol li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link){color:#7b33fb;font-weight:600}.entry-author ol li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http],.entry-author p a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http],.entry-author span a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http],.entry-author ul li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http]{word-wrap:break-word;word-break:break-word;overflow-wrap:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:.75em}.crunch-button__outline--small{font-size:.875rem}.crunch-button__full-background--medium,.crunch-button__outline--medium{font-size:1rem}.crunch-button__full-background--purple-gradient,.crunch-button__outline--purple-gradient:focus,.crunch-button__outline--purple-gradient:hover{background:#3866f5;background:-webkit-linear-gradient(10deg,#3866f5,#bd00ff 100%,#3866f5 200%);background:linear-gradient(80deg,#3866f5,#bd00ff 100%,#3866f5 200%)}.crunch-button__full-background--green-gradient{background:#6bdab6;background:-webkit-linear-gradient(10deg,#6bdab6,#66e0f6 100%,#6bdab6 200%);background:linear-gradient(80deg,#6bdab6,#66e0f6 100%,#6bdab6 200%)}.crunch-button__full-background--yellow-gradient{background:#f6c043;background:-webkit-linear-gradient(10deg,#ff9634,#f6c043 100%,#ff9634 200%);background:linear-gradient(80deg,#ff9634,#f6c043 100%,#ff9634 200%)}.crunch-button__full-background--pink-gradient{background:#ff70c6;background:-webkit-linear-gradient(10deg,#ec4a77,#ff70c6 100%,#ec4a77 200%);background:linear-gradient(80deg,#ec4a77,#ff70c6 100%,#ec4a77 200%)}.crunch-button{font-weight:400}.crunch-button__full-background,.crunch-button__outline{position:relative;z-index:1;display:-webkit-inline-box;display:inline-flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;overflow:hidden;border:1px solid;border-radius:3.125rem;background-color:transparent;font-weight:400;text-align:center;-webkit-transition:.3s,color .1s!important;transition:all .3s ease,color .1s ease!important;padding:.5625rem 1.96875rem}@media (min-width:576px){.entry-content>table{margin-top:1.8em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:.9em}.crunch-button__full-background,.crunch-button__outline{padding:.6rem 2.1rem}}@media (min-width:768px){.entry-content>table{margin-top:2.1em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.05em}.crunch-button__full-background,.crunch-button__outline{padding:.6375rem 2.23125rem}}@media (min-width:992px){.entry-content>table{margin-top:2.4em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.2em}.crunch-button__full-background,.crunch-button__outline{padding:.675rem 2.3625rem}}@media (min-width:1200px){.entry-content>table{margin-top:2.7em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.35em}.crunch-button__full-background,.crunch-button__outline{padding:.7125rem 2.49375rem}}@media (min-width:1400px){.entry-content>table{margin-top:3em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.5em}.crunch-button__full-background,.crunch-button__outline{padding:.75rem 2.625rem}}.crunch-button__full-background:focus,.crunch-button__full-background:hover,.crunch-button__outline:focus,.crunch-button__outline:hover{box-shadow:0 0 .325rem 0 rgba(0,0,0,.3)}.crunch-button__full-background--purple-gradient{border:none;color:#fff}.crunch-button__full-background--purple-gradient:focus,.crunch-button__full-background--purple-gradient:hover{color:#fff!important}.crunch-button__full-background--green-gradient{border:none;color:#0f0f0f}.crunch-button__full-background--green-gradient:focus,.crunch-button__full-background--green-gradient:hover{color:#0f0f0f!important}.crunch-button__full-background--yellow-gradient{border:none;color:#0f0f0f}.crunch-button__full-background--yellow-gradient:focus,.crunch-button__full-background--yellow-gradient:hover{color:#0f0f0f!important}.crunch-button__full-background--pink-gradient{border:none;color:#fff}.crunch-button__full-background--pink-gradient:focus,.crunch-button__full-background--pink-gradient:hover{color:#fff!important}.crunch-button__outline--white-color{border-color:#fff;color:#fff}.crunch-button__outline--white-color:focus,.crunch-button__outline--white-color:hover{background-color:#fff;color:#0f0f0f!important}.crunch-button__outline--purple-gradient:focus,.crunch-button__outline--purple-gradient:hover{border-color:transparent!important;color:#fff!important}.crunch-button__outline--secondary-color{color:#0f0f0f}.crunch-button__outline--secondary-color:focus,.crunch-button__outline--secondary-color:hover{border-color:#0f0f0f;background-color:#0f0f0f;color:#fff}select.gfield_select{font-size:1rem}select.gfield_select{width:100%;padding:.875rem 1.3125rem;border:1px solid #e4eaed;border-radius:0;background:#fff;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMjAuMDUgMTkwLjY1Ij48cGF0aCBmaWxsPSIjN0U3RTdFIiBkPSJNMTUxLjUyIDE4Ny4xMkwzLjUyIDQwLjMzYTEyIDEyIDAgMDEwLTE3bDE5LjgtMTkuODFhMTIgMTIgMCAwMTE3IDBMMTYwIDEyMiAyNzkuNzMgMy41M2ExMiAxMiAwIDAxMTcgMGwxOS43OSAxOS44YTEyIDEyIDAgMDEwIDE3bC0xNDggMTQ2LjhhMTIgMTIgMCAwMS0xNyAweiIvPjwvc3ZnPg==) no-repeat;background-position:right 1.25rem center;background-size:.75rem .5rem;background-repeat:no-repeat;color:#828282;line-height:1.7;-webkit-appearance:none;-moz-appearance:none;appearance:none}select.gfield_select:focus{outline:0}div.chosen-container{width:100%!important;margin-bottom:0}.acf-block-cta{padding-top:6.25rem;padding-bottom:6.25rem}.acf-block-cta__content{max-width:25.625rem}@media (min-width:992px){.acf-block-cta{padding-bottom:9.175rem}.acf-block-cta__decor-wrapper{margin-bottom:-9.175rem}}@media (min-width:1200px){.acf-block-cta{padding-bottom:10.15rem}.acf-block-cta__decor-wrapper{margin-bottom:-10.15rem}}@media (min-width:1400px){.acf-block-cta{padding-bottom:11.125rem}.acf-block-cta__decor-wrapper{margin-bottom:-11.125rem}}.acf-block-cta__decor{top:4rem;left:0;width:100%;margin-top:1.5rem}.acf-block-cta__decor:after{content:"";position:absolute;top:1px;left:23.1875rem;width:100vw;height:3.625rem;background-color:#6bdab6}@media (min-width:992px){.acf-block-cta__decor{position:absolute;top:auto;bottom:0;left:-25%;width:125%;margin-top:0}.acf-block-cta__decor:after{top:0;right:calc(-100vw + 1px);left:auto;height:5.625rem}.acf-block-cta__decor:before{display:none}}.acf-block-cta__decor:before{content:"";position:absolute;bottom:3.875rem;left:calc(-100vw + 1px);width:100vw;height:3.625rem;background-color:#68dee0}.acf-block-cta__decor-svg--desktop{width:61.125rem;height:21.9375rem}.acf-block-cta__decor-svg--mobile{width:23.1875rem;height:16rem}.acf-block-cta__circle{width:15rem;height:15rem;padding:2.25rem}@media (max-width:575.98px){.acf-block-cta__circle{left:3rem}}@media (min-width:992px){.acf-block-cta__circle{width:20rem;height:20rem;padding:2.75rem}.acf-block-cta__circle{left:4rem;margin-bottom:9.125rem}}@media (min-width:75rem) and (max-width:81.25rem){.acf-block-cta__circle{left:2rem;margin-top:-2rem}}.acf-block-cta__circle svg{width:100%;height:100%}.social-icons__item{margin-right:1rem}@media (min-width:576px){.social-icons__item{margin-right:1.05rem}}@media (min-width:768px){.social-icons__item{margin-right:1.1rem}}@media (min-width:992px){.social-icons__item{margin-right:1.15rem}}@media (min-width:1200px){.acf-block-cta__circle{width:23.125rem;height:23.125rem;padding:3.125rem}.acf-block-cta__circle{margin-bottom:7.5rem}.social-icons__item{margin-right:1.2rem}}@media (min-width:1400px){.social-icons__item{margin-right:1.25rem}}.social-icons__item .social-link__icon{fill:#0f0f0f;-webkit-transition:fill .2s ease-in-out;transition:fill .2s ease-in-out}.social-icons__item .social-link__icon:focus,.social-icons__item .social-link__icon:hover{fill:#7b33fb}@-webkit-keyframes rotate360{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes rotate360{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0)}to{-webkit-transform:rotate(1turn)}}@keyframes spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::-webkit-input-placeholder,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea::-webkit-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::-webkit-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea::-webkit-input-placeholder{font-size:1rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input):-ms-input-placeholder,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea:-ms-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input):-ms-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea:-ms-input-placeholder{font-size:1rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input),.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::placeholder,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea::placeholder,.gform_wrapper form div.gform_body div.gform_fields .gfield label.gfield_label,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input),.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea::placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield label.gfield_label{font-size:1rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container:after,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container:after{background:#3866f5;background:-webkit-linear-gradient(10deg,#3866f5,#bd00ff 100%,#3866f5 200%);background:linear-gradient(80deg,#3866f5,#bd00ff 100%,#3866f5 200%)}.gform_wrapper{overflow:visible!important;margin:0!important}.gform_wrapper.gform_validation_error .gform_footer{margin-top:1rem!important}.gform_wrapper form{display:block;width:100%;max-width:100%;margin-top:0}.gform_wrapper form .add_repeater_item,.gform_wrapper form .gform_button,.gform_wrapper form .remove_repeater_item,.gform_wrapper form input[type=button]{border:none}.gform_wrapper form .gform_ajax_spinner{width:1.25rem;height:1.25rem;margin-left:1rem;border:3px solid #7b33fb;border-left-color:transparent;border-radius:50%;-webkit-animation:1s linear infinite rotate360;animation:1s linear infinite rotate360}.gform_wrapper form div.gform_body{width:100%}.gform_wrapper form div.gform_body div.gform_page div.gform_page_footer{margin-top:1rem!important}.gform_wrapper form div.gform_body div.gform_page div.gform_page_footer .gform_ajax_spinner{margin-left:.25rem}.gform_wrapper form div.gform_body div.gform_fields,.gform_wrapper form div.gform_body ul.gform_fields{display:-webkit-box;display:flex;flex-wrap:wrap;-webkit-box-pack:justify;justify-content:space-between}.gform_wrapper form div.gform_body div.gform_fields .gfield,.gform_wrapper form div.gform_body ul.gform_fields .gfield{position:relative;width:100%;margin-top:.75rem;padding:0}.gform_wrapper form div.gform_body div.gform_fields .gfield div.gfield_description,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.gfield_description{padding:0;border:none;background-color:transparent;color:#828282;font-size:.625rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.gfield_description.validation_message,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.gfield_description.validation_message{color:#ec4a77}.gform_wrapper form div.gform_body div.gform_fields .gfield.gfield_error,.gform_wrapper form div.gform_body ul.gform_fields .gfield.gfield_error{max-width:100%!important;margin-top:0!important;margin-right:0;margin-bottom:0!important;border:none;background-color:transparent}.gform_wrapper form div.gform_body div.gform_fields .gfield.gfield_error label,.gform_wrapper form div.gform_body ul.gform_fields .gfield.gfield_error label{margin-top:0}.gform_wrapper form div.gform_body div.gform_fields .gfield.gfield_error div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input),.gform_wrapper form div.gform_body div.gform_fields .gfield.gfield_error div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield.gfield_error div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input),.gform_wrapper form div.gform_body ul.gform_fields .gfield.gfield_error div.ginput_container textarea{border-color:#ec4a77}.gform_wrapper form div.gform_body div.gform_fields .gfield label.gfield_label,.gform_wrapper form div.gform_body ul.gform_fields .gfield label.gfield_label{position:absolute;top:.875rem;left:1.375rem;z-index:1;color:#828282;font-weight:400;font-size:1rem;line-height:1.7;-webkit-transition:.2s ease-in-out;transition:all .2s ease-in-out}@media (prefers-reduced-motion:reduce){.gform_wrapper form div.gform_body div.gform_fields .gfield label.gfield_label,.gform_wrapper form div.gform_body ul.gform_fields .gfield label.gfield_label{-webkit-transition:none;transition:none}}.gform_wrapper form div.gform_body div.gform_fields .gfield label.gfield_label span.gfield_required,.gform_wrapper form div.gform_body ul.gform_fields .gfield label.gfield_label span.gfield_required{display:none}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container{position:relative;margin-top:0}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container:after,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container:after{content:"";position:absolute;right:0;bottom:0;left:0;width:100%;height:3px;opacity:0;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input),.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input),.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{position:relative;width:100%;height:3.4375rem;margin:0;padding:1.125rem 1.3125rem .625rem;border:1px solid #e4eaed;border-radius:0;background:#fff;color:#2f2f2f;box-shadow:none;outline:0;font-weight:400;line-height:1.7;opacity:.8;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-transition:border-color .2s ease-in-out;transition:border-color .2s ease-in-out}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::-webkit-input-placeholder,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea::-webkit-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::-webkit-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea::-webkit-input-placeholder{color:#000;line-height:normal}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input):-ms-input-placeholder,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea:-ms-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input):-ms-input-placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea:-ms-input-placeholder{color:#000;line-height:normal}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::placeholder,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea::placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input)::placeholder,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea::placeholder{color:#000;line-height:normal}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input):focus,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea:focus,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):not(.chosen-focus-input):not(.chosen-search-input):focus,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea:focus{border-color:#b3b3b3;opacity:1}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:-webkit-autofill,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:-webkit-autofill:active,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:-webkit-autofill:focus,.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container input:-webkit-autofill:hover,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:-webkit-autofill,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:-webkit-autofill:active,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:-webkit-autofill:focus,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container input:-webkit-autofill:hover{-webkit-box-shadow:0 0 0 2rem #fff inset!important}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{display:block;resize:none}@media (min-width:40.0625rem){.gform_wrapper form div.gform_body div.gform_fields .gfield.gfield_error:not(.gf_left_half):not(.gf_right_half):not(.width-50),.gform_wrapper form div.gform_body ul.gform_fields .gfield.gfield_error:not(.gf_left_half):not(.gf_right_half):not(.width-50){width:100%;max-width:100%!important}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{margin-bottom:0}}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{height:6.25rem;min-height:6.25rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload{position:relative;display:-webkit-box;display:flex;flex-wrap:wrap;-webkit-box-align:center;align-items:center;text-align:left}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .gform_fileupload_multifile,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .gform_fileupload_multifile{width:100%}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper{position:relative;display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;border:1px solid #dde3e5;background-color:#fff;-webkit-transition:border-color .2s ease-in-out;transition:border-color .2s ease-in-out}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper--active,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper--active{border-color:#7b33fb}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper input[type=file],.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper input[type=file]{position:absolute;top:0;left:0;width:100%;height:100%;margin:0;border:none;background:0 0;opacity:0;cursor:pointer}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper .file-name-wrapper,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper .file-name-wrapper{padding:.625rem 1rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper .file-name-wrapper__icon,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper .file-name-wrapper__icon{-webkit-box-flex:0;flex:0 0 auto;margin-right:.75rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper__file-name,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper__file-name{color:#2f2f2f;word-wrap:break-word;word-break:break-word;overflow-wrap:break-word}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper__browse,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper__browse{padding:.625rem 1rem;background:#fff;pointer-events:none}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper__browse:before,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper__browse:before{content:"";position:absolute;top:15%;bottom:15%;left:0;width:1px;height:70%;background-color:#dde3e5}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper .ginput_preview,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .upload-btn-wrapper .ginput_preview{margin-top:0}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .ginput_preview,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .ginput_preview{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;margin-top:.5rem}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .ginput_preview .gform_delete,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .ginput_preview .gform_delete{margin-right:.25rem;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container_fileupload .ginput_preview .gform_delete:hover,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container_fileupload .ginput_preview .gform_delete:hover{opacity:.75}.gform_wrapper form div.gform_body div.gform_fields .gfield.input-filled label.gfield_label,.gform_wrapper form div.gform_body div.gform_fields .gfield.input-focus label.gfield_label,.gform_wrapper form div.gform_body ul.gform_fields .gfield.input-filled label.gfield_label,.gform_wrapper form div.gform_body ul.gform_fields .gfield.input-focus label.gfield_label{color:#090b0a;font-size:.5625rem;-webkit-transform:translateY(-.625rem);transform:translateY(-.625rem)}.gform_wrapper form div.gform_body div.gform_fields .gfield.input-filled .ginput_container:after,.gform_wrapper form div.gform_body div.gform_fields .gfield.input-focus .ginput_container:after,.gform_wrapper form div.gform_body ul.gform_fields .gfield.input-filled .ginput_container:after,.gform_wrapper form div.gform_body ul.gform_fields .gfield.input-focus .ginput_container:after{opacity:1}.gform_wrapper form .gform_footer{margin:0;padding:1.75rem 0 0;margin-top:1rem!important}.gform_wrapper form .gform_footer.top_label{margin:0;padding:0!important}.gform_wrapper form button[type=submit]{margin:0}.gform_wrapper .gform_validation_errors{display:none}.lottie{grid-template:"A" 1fr;min-width:100vw;background-position:50%;background-size:cover;background-repeat:no-repeat}@media (min-width:576px){.gform_wrapper.gform_validation_error .gform_footer{margin-top:1.2rem!important}.gform_wrapper form div.gform_body div.gform_page div.gform_page_footer{margin-top:1.2rem!important}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{height:7rem;min-height:7rem}.gform_wrapper form .gform_footer{margin-top:1.2rem!important}.lottie{min-width:0}}.lottie__bg{display:none}.lottie__animation,.lottie__bg{grid-area:A}.lottie__animation{width:23rem;max-width:100vw;height:23rem;max-height:100vw}@media (min-width:768px){.gform_wrapper.gform_validation_error .gform_footer{margin-top:1.4rem!important}.gform_wrapper form div.gform_body div.gform_page div.gform_page_footer{margin-top:1.4rem!important}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{height:7.75rem;min-height:7.75rem}.gform_wrapper form .gform_footer{margin-top:1.4rem!important}.lottie{background-image:none!important}.lottie__bg{display:block}.lottie__animation{width:24.875rem;max-width:unset;height:24.875rem;max-height:unset}}.lottie--blue{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDg2IiBoZWlnaHQ9IjQ3MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIyNTUiIGN5PSIyMzUiIHI9IjIzMC41IiBzdHJva2U9IiNDNEM0QzQiIHN0cm9rZS1kYXNoYXJyYXk9IjggOCIvPjxwYXRoIGQ9Ik0xMzYgMEM2MS4zNzggMCAwIDYyLjI4IDAgMTM4aDEzNlYweiIgZmlsbD0iIzZCREFCNiIvPjxtYXNrIGlkPSJhIiBzdHlsZT0ibWFzay10eXBlOmFscGhhIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIzMzkiIHk9IjMzOSIgd2lkdGg9IjEzMyIgaGVpZ2h0PSIxMzEiPjxwYXRoIGQ9Ik00NzEuNTA2IDQwNC41YzAtMzYuMTc1LTI5LjY2My02NS41LTY2LjI1My02NS41QzM2OC42NjIgMzM5IDMzOSAzNjguMzI1IDMzOSA0MDQuNXMyOS42NjIgNjUuNSA2Ni4yNTMgNjUuNWg2Ni4yNTN2LTY1LjV6IiBmaWxsPSIjNjhFMEY3Ii8+PC9tYXNrPjxnIG1hc2s9InVybCgjYSkiPjxwYXRoIGZpbGw9IiM2NkUwRjYiIGQ9Ik00NzEuNTA1IDQ3NC44MTJIMzM3Ljg3N1YzMTguNzM0aDEzMy42Mjh6Ii8+PC9nPjwvc3ZnPg==)}@media (min-width:992px){.gform_wrapper.gform_validation_error .gform_footer{margin-top:1.6rem!important}.gform_wrapper form div.gform_body div.gform_page div.gform_page_footer{margin-top:1.6rem!important}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{height:8.5rem;min-height:8.5rem}.gform_wrapper form .gform_footer{margin-top:1.6rem!important}.lottie--blue .lottie__animation{-webkit-transform:translate3d(4rem,2.5rem,0);transform:translate3d(4rem,2.5rem,0)}}.lottie--yellow{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTUwIiBoZWlnaHQ9IjU1MiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIzMTkuOTQiIGN5PSI0NDAuOTQiIHI9IjExMC40NDciIHN0cm9rZT0iI0M0QzRDNCIgc3Ryb2tlLXdpZHRoPSIuOTg2IiBzdHJva2UtZGFzaGFycmF5PSI3Ljg5IDcuODkiLz48Y2lyY2xlIGN4PSI3Ni44NzkiIGN5PSIyMzUuODc5IiByPSIxNzIuNjc1IiB0cmFuc2Zvcm09InJvdGF0ZSgtNjAgNzYuODc5IDIzNS44NzkpIiBmaWxsPSIjRkY5NjM0Ii8+PC9zdmc+);background-position:top -3rem left;background-size:132%}@media (min-width:768px) and (max-width:991.98px){.lottie{-webkit-box-align:center;align-items:center;justify-items:center}.lottie--yellow .lottie__bg{-webkit-transform:translate3d(1rem,-5rem,0);transform:translate3d(1rem,-5rem,0)}}@media (min-width:992px){.lottie--yellow .lottie__bg{-webkit-transform:translate3d(3.5rem,-2rem,0);transform:translate3d(3.5rem,-2rem,0)}.lottie--yellow .lottie__animation{-webkit-transform:translate3d(8rem,2.5rem,0);transform:translate3d(8rem,2.5rem,0)}}.lottie--purple{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDk5IiBoZWlnaHQ9IjQ2MSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIxNDUiIGN5PSIzMTYiIHI9IjE0NC41IiBzdHJva2U9IiNDNEM0QzQiIHN0cm9rZS1kYXNoYXJyYXk9IjggOCIvPjxwYXRoIGQ9Ik00OTguODIzIDEyNy43NDhDNDk4LjgyMyA1Ny42NTQgNDQxLjU0NyAwIDM3MS45MTIgMCAzMDIuMjc3IDAgMjQ1IDU3LjY1NCAyNDUgMTI3Ljc0OGgyNTMuODIzeiIgZmlsbD0iIzM4NjZGNSIvPjxwYXRoIGQ9Ik00OTguODIzIDQyMS43NDhjMC03MC4wOTQtNTcuMjc2LTEyNy43NDgtMTI2LjkxMS0xMjcuNzQ4QzMwMi4yNzcgMjk0IDI0NSAzNTEuNjU0IDI0NSA0MjEuNzQ4aDI1My44MjN6IiBmaWxsPSIjQkQwMEZGIi8+PHBhdGggZD0iTTQ5OC44MjMgMjc0Ljc0OGMwLTcwLjA5NC01Ny4yNzYtMTI3Ljc0OC0xMjYuOTExLTEyNy43NDhDMzAyLjI3NyAxNDcgMjQ1IDIwNC42NTQgMjQ1IDI3NC43NDhoMjUzLjgyM3oiIGZpbGw9IiM3QjMzRkIiLz48L3N2Zz4=);background-size:120%}@media (min-width:768px){.lottie--purple .lottie__bg{-webkit-transform:translate3d(2rem,1rem,0);transform:translate3d(2rem,1rem,0)}}@media (min-width:992px){.lottie--purple .lottie__animation{-webkit-transform:translate3d(5rem,2.5rem,0);transform:translate3d(5rem,2.5rem,0)}}.lottie--pink{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTIyIiBoZWlnaHQ9IjU0NSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNNDQ0IDM0MEgwTTIzMCA1NDVWMTAxIiBzdHJva2U9IiNDNEM0QzQiIHN0cm9rZS1kYXNoYXJyYXk9IjggOCIvPjxwYXRoIGQ9Ik01MjIgMGMtODYuMTQ0IDAtMTU3IDcwLjQwNC0xNTcgMTU2aDE1N1YweiIgZmlsbD0iI0VDNEE3NyIvPjxwYXRoIGQ9Ik0zNTAgMGMtODYuMTQ0IDAtMTU3IDcwLjQwNC0xNTcgMTU2aDE1N1YweiIgZmlsbD0iI0ZGNzBDNiIvPjwvc3ZnPg==)}@media (min-width:768px) and (max-width:991.98px){.lottie--pink .lottie__bg{-webkit-transform:translate3d(-12rem,0,0);transform:translate3d(-12rem,0,0)}}@media (min-width:992px){.lottie--pink .lottie__bg{-webkit-transform:translate3d(-5rem,0,0);transform:translate3d(-5rem,0,0)}.lottie--pink .lottie__animation{-webkit-transform:translate3d(10rem,2rem,0);transform:translate3d(10rem,2rem,0)}}.lottie--alt{position:relative;left:-.9375rem}.lottie--hidden-bg{background-image:none!important}.lottie--hidden-bg .lottie__bg{display:none}@media (min-width:992px) and (max-width:1199.98px){.lottie--kick-1{-webkit-transform:translate3d(-8rem,0,0);transform:translate3d(-8rem,0,0)}}@media (min-width:1200px) and (max-width:1399.98px){.lottie--kick-1{-webkit-transform:translate3d(-4rem,0,0);transform:translate3d(-4rem,0,0)}}.fade{-webkit-transition:opacity .15s linear;transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{-webkit-transition:none;transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{height:0;overflow:hidden;-webkit-transition:height .35s;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{-webkit-transition:none;transition:none}}.dropdown,.dropend,.dropstart,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty:after{margin-left:0}.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:.5rem 0;margin:0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropup .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty:after{margin-left:0}.dropend .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropend .dropdown-toggle:empty:after{margin-left:0}.dropend .dropdown-toggle:after{vertical-align:0}.dropstart .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";display:none}.dropstart .dropdown-toggle:before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropstart .dropdown-toggle:empty:after{margin-left:0}.dropstart .dropdown-toggle:before{vertical-align:0}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid rgba(0,0,0,.15)}.dropdown-item{display:block;width:100%;padding:.25rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#1e2125;background-color:#e9ecef}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#0d6efd}.dropdown-item.disabled,.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}:root{--mb-button-size:60px;--mb-bar-width:0.6;--mb-bar-height:4px;--mb-bar-spacing:10px;--mb-animate-timeout:.4s}.mburger{background:0 0;border:none;border-radius:0;color:inherit;display:inline-block;position:relative;box-sizing:border-box;height:var(--mb-button-size);padding:0 0 0 var(--mb-button-size);margin:0;line-height:var(--mb-button-size);vertical-align:middle;-webkit-appearance:none;-moz-appearance:none;appearance:none;outline:0;cursor:pointer}.mburger b{display:block;position:absolute;left:calc(var(--mb-button-size)*(.5 - var(--mb-bar-width)/ 2));width:calc(var(--mb-button-size)*var(--mb-bar-width));height:var(--mb-bar-height);border-radius:calc(var(--mb-bar-height)/2);background:currentColor;color:inherit;opacity:1}.mburger b:first-of-type{bottom:calc(50% + var(--mb-bar-spacing));-webkit-transition:bottom .2s,width .2s,-webkit-transform .2s;transition:bottom .2s ease,width .2s ease,-webkit-transform .2s ease;transition:bottom .2s ease,transform .2s ease,width .2s ease;transition:bottom .2s ease,transform .2s ease,width .2s ease,-webkit-transform .2s ease}.mburger b:nth-of-type(2){top:calc(50% - var(--mb-bar-height)/ 2);-webkit-transition:opacity .2s;transition:opacity .2s ease}.mburger b:nth-of-type(3){top:calc(50% + var(--mb-bar-spacing));-webkit-transition:top .2s,width .2s,-webkit-transform .2s;transition:top .2s ease,width .2s ease,-webkit-transform .2s ease;transition:top .2s ease,transform .2s ease,width .2s ease;transition:top .2s ease,transform .2s ease,width .2s ease,-webkit-transform .2s ease}.mm-wrapper_opened .mburger b:first-of-type{bottom:calc(50% - var(--mb-bar-height)/ 2);-webkit-transform:rotate(45deg);transform:rotate(45deg)}.mm-wrapper_opened .mburger b:nth-of-type(2){opacity:0}.mm-wrapper_opened .mburger b:nth-of-type(3){top:calc(50% - var(--mb-bar-height)/ 2);-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.mburger--spin b:first-of-type{-webkit-transition-delay:.2s,0s;transition-delay:.2s,0s}.mburger--spin b:nth-of-type(2){-webkit-transition-duration:0s;transition-duration:0s;-webkit-transition-delay:.2s;transition-delay:.2s}.mburger--spin b:nth-of-type(3){-webkit-transition-delay:.2s,0s;transition-delay:.2s,0s}.mm-wrapper_opened .mburger--spin b:first-of-type{-webkit-transform:rotate(135deg);transform:rotate(135deg);-webkit-transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s);transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s)}.mm-wrapper_opened .mburger--spin b:nth-of-type(2){-webkit-transition-delay:calc(var(--mb-animate-timeout));transition-delay:calc(var(--mb-animate-timeout))}.mm-wrapper_opened .mburger--spin b:nth-of-type(3){-webkit-transform:rotate(225deg);transform:rotate(225deg);-webkit-transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s);transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s)}:root{--mm-line-height:20px;--mm-listitem-size:44px;--mm-navbar-size:44px;--mm-offset-top:0;--mm-offset-right:0;--mm-offset-bottom:0;--mm-offset-left:0;--mm-color-border:rgba(0, 0, 0, .1);--mm-color-button:rgba(0, 0, 0, .3);--mm-color-text:rgba(0, 0, 0, .75);--mm-color-text-dimmed:rgba(0, 0, 0, .3);--mm-color-background:#f3f3f3;--mm-color-background-highlight:rgba(0, 0, 0, .05);--mm-color-background-emphasis:hsla(0,0%,100%,0.4);--mm-shadow:0 0 10px rgba(0, 0, 0, .3)}.mm-hidden{display:none!important}.mm-wrapper{overflow-x:hidden;position:relative}.mm-menu{top:0;right:0;bottom:0;left:0;background:#f3f3f3;border-color:rgba(0,0,0,.1);color:rgba(0,0,0,.75);line-height:20px;display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;padding:0;margin:0;box-sizing:border-box;position:absolute;top:var(--mm-offset-top);right:var(--mm-offset-right);bottom:var(--mm-offset-bottom);left:var(--mm-offset-left);z-index:0;-ms-scroll-chaining:chained;overscroll-behavior:auto;background:var(--mm-color-background);border-color:var(--mm-color-border);color:var(--mm-color-text);line-height:var(--mm-line-height);-webkit-tap-highlight-color:var(--mm-color-background-emphasis);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.mm-menu a,.mm-menu a:active,.mm-menu a:hover,.mm-menu a:link,.mm-menu a:visited{text-decoration:none;color:inherit}[dir=rtl] .mm-menu{direction:rtl}.mm-panel{background:#f3f3f3;border-color:rgba(0,0,0,.1);color:rgba(0,0,0,.75);z-index:0;box-sizing:border-box;width:100%;-webkit-overflow-scrolling:touch;overflow:hidden;overflow-y:auto;color:var(--mm-color-text);border-color:var(--mm-color-border);background:var(--mm-color-background);-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);-webkit-transition:-webkit-transform .4s;transition:-webkit-transform .4s ease;transition:transform .4s ease;transition:transform .4s ease,-webkit-transform .4s ease}.mm-panel:after{height:44px}.mm-panel:not(.mm-hidden){display:block}.mm-panel:after{content:"";display:block;height:var(--mm-listitem-size)}.mm-panel_opened{z-index:1;-webkit-transform:translateZ(0);transform:translateZ(0)}.mm-panel_opened-parent{-webkit-transform:translate3d(-30%,0,0);transform:translate3d(-30%,0,0)}.mm-panel_highest{z-index:2}.mm-panel_noanimation{-webkit-transition:none!important;transition:none!important}.mm-panel_noanimation.mm-panel_opened-parent{-webkit-transform:translateZ(0);transform:translateZ(0)}.mm-panel__content{padding:20px 20px 0}[dir=rtl] .mm-panel:not(.mm-panel_opened){-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}[dir=rtl] .mm-panel.mm-panel_opened-parent{-webkit-transform:translate3d(30%,0,0);transform:translate3d(30%,0,0)}.mm-listitem_vertical>.mm-panel{display:none;width:100%;padding:10px 0 10px 10px;-webkit-transform:none!important;transform:none!important}.mm-listitem_vertical>.mm-panel:after,.mm-listitem_vertical>.mm-panel:before{content:none;display:none}.mm-listitem_opened>.mm-panel{display:block}.mm-listitem_vertical>.mm-listitem__btn{height:44px;height:var(--mm-listitem-size);bottom:auto}.mm-listitem_vertical .mm-listitem:last-child:after{border-color:transparent}.mm-listitem_opened>.mm-listitem__btn:after{-webkit-transform:rotate(225deg);transform:rotate(225deg);right:19px}.mm-btn{-webkit-box-flex:0;flex-grow:0;flex-shrink:0;position:relative;box-sizing:border-box;width:50px;padding:0}.mm-btn:after,.mm-btn:before{border:2px solid rgba(0,0,0,.3);border:2px solid var(--mm-color-button)}.mm-btn_next:after,.mm-btn_prev:before{content:"";border-bottom:none;border-right:none;box-sizing:content-box;display:block;width:8px;height:8px;margin:auto;position:absolute;top:0;bottom:0}.mm-btn_prev:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);left:23px;right:auto}.mm-btn_next:after{-webkit-transform:rotate(135deg);transform:rotate(135deg);right:23px;left:auto}.mm-btn_close:after,.mm-btn_close:before{content:"";box-sizing:content-box;display:block;width:5px;height:5px;margin:auto;position:absolute;top:0;bottom:0;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.mm-btn_close:before{border-right:none;border-bottom:none;right:18px}.mm-btn_close:after{border-left:none;border-top:none;right:25px}[dir=rtl] .mm-btn_next:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);left:23px;right:auto}[dir=rtl] .mm-btn_prev:before{-webkit-transform:rotate(135deg);transform:rotate(135deg);right:23px;left:auto}[dir=rtl] .mm-btn_close:after,[dir=rtl] .mm-btn_close:before{right:auto}[dir=rtl] .mm-btn_close:before{left:25px}[dir=rtl] .mm-btn_close:after{left:18px}.mm-navbar{min-height:44px;border-bottom:1px solid rgba(0,0,0,.1);background:#f3f3f3;color:rgba(0,0,0,.3);display:-webkit-box;display:flex;min-height:var(--mm-navbar-size);border-bottom:1px solid var(--mm-color-border);background:var(--mm-color-background);color:var(--mm-color-text-dimmed);text-align:center;opacity:1;-webkit-transition:opacity .4s;transition:opacity .4s ease}.mm-navbar>*{min-height:44px}@supports ((position:-webkit-sticky) or (position:sticky)){.mm-navbar_sticky{position:-webkit-sticky;position:sticky;top:0;z-index:1}}.mm-navbar>*{-webkit-box-flex:1;flex-grow:1;display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;box-sizing:border-box}.mm-navbar__title{-webkit-box-flex:1;flex:1 1 50%;display:-webkit-box;display:flex;padding-left:20px;padding-right:20px;overflow:hidden}.mm-navbar__title:not(:last-child){padding-right:0}.mm-navbar__title>span{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}[dir=rtl] .mm-navbar{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;flex-direction:row-reverse}.mm-listview{display:block}.mm-listitem,.mm-listview{list-style:none;padding:0;margin:0}.mm-listitem{color:rgba(0,0,0,.75);border-color:rgba(0,0,0,.1);color:var(--mm-color-text);border-color:var(--mm-color-border);display:block;position:relative;display:-webkit-box;display:flex;flex-wrap:wrap}.mm-listitem:after{content:"";border-color:inherit;border-bottom-width:1px;border-bottom-style:solid;display:block;position:absolute;left:20px;right:0;bottom:0}.mm-listitem a,.mm-listitem a:hover{text-decoration:none}.mm-listitem__btn,.mm-listitem__text{padding:12px;display:block;padding:calc(var(--mm-listitem-size)/ 2 - var(--mm-line-height)/ 2);padding-left:0;padding-right:0;color:inherit}.mm-listitem__text{text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding-left:20px;padding-right:10px;-webkit-box-flex:1;flex-grow:1;flex-basis:10%}.mm-listitem__btn{background:rgba(3,2,1,0);border-color:inherit;width:auto;padding-right:50px;position:relative}.mm-listitem__btn:not(.mm-listitem__text){border-left-width:1px;border-left-style:solid}.mm-listitem_selected>.mm-listitem__text{background:hsla(0,0%,100%,.4);background:var(--mm-color-background-emphasis)}.mm-listitem_opened>.mm-listitem__btn,.mm-listitem_opened>.mm-panel{background:rgba(0,0,0,.05);background:var(--mm-color-background-highlight)}[dir=rtl] .mm-listitem:after{left:0;right:20px}[dir=rtl] .mm-listitem__text{padding-left:10px;padding-right:20px}[dir=rtl] .mm-listitem__btn{padding-left:50px;border-left-width:0;border-left-style:none}[dir=rtl] .mm-listitem__btn:not(.mm-listitem__text){padding-right:0;border-right-width:1px;border-right-style:solid}.mm-page{box-sizing:border-box;position:relative}.mm-slideout{-webkit-transition:-webkit-transform .4s;transition:-webkit-transform .4s ease;transition:transform .4s ease;transition:transform .4s ease,-webkit-transform .4s ease;z-index:1}.mm-wrapper_opened{overflow-x:hidden;position:relative}.mm-wrapper_opened .mm-page{min-height:100vh}.mm-wrapper_background .mm-page{background:inherit}.mm-menu_offcanvas{position:fixed;right:auto;z-index:0}.mm-menu_offcanvas:not(.mm-menu_opened){display:none}.mm-menu_offcanvas{width:80%;min-width:240px;max-width:440px}.mm-wrapper_opening .mm-menu_offcanvas.mm-menu_opened~.mm-slideout{-webkit-transform:translate3d(80vw,0,0);transform:translate3d(80vw,0,0)}@media (max-width:300px){.mm-wrapper_opening .mm-menu_offcanvas.mm-menu_opened~.mm-slideout{-webkit-transform:translate3d(240px,0,0);transform:translate3d(240px,0,0)}}@media (min-width:550px){.mm-wrapper_opening .mm-menu_offcanvas.mm-menu_opened~.mm-slideout{-webkit-transform:translate3d(440px,0,0);transform:translate3d(440px,0,0)}}.mm-wrapper__blocker{background:rgba(3,2,1,0);overflow:hidden;display:none;position:fixed;top:0;right:0;bottom:0;left:0;z-index:2}.mm-wrapper_blocking,.mm-wrapper_blocking body{overflow:hidden}.mm-wrapper_blocking .mm-wrapper__blocker{display:block}.mm-sronly{border:0!important;clip:rect(1px,1px,1px,1px)!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;white-space:nowrap!important;width:1px!important;min-width:1px!important;height:1px!important;min-height:1px!important;padding:0!important;overflow:hidden!important;position:absolute!important}body.modal-open .mm-slideout{z-index:unset}.popover{position:absolute;top:0;left:0;z-index:1070;display:block;max-width:276px;font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .popover-arrow{position:absolute;display:block;width:1rem;height:.5rem}.popover .popover-arrow:after,.popover .popover-arrow:before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.popover-header{padding:.5rem 1rem;margin-bottom:0;font-size:1rem;background-color:#f0f0f0;border-bottom:1px solid rgba(0,0,0,.2);border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:1rem;color:#212529}.modal{position:fixed;top:0;left:0;z-index:1060;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translateY(-50px);transform:translateY(-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{-webkit-transition:none;transition:none}}.modal.show .modal-dialog{-webkit-transform:none;transform:none}.modal.modal-static .modal-dialog{-webkit-transform:scale(1.02);transform:scale(1.02)}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-body{position:relative;-webkit-box-flex:1;flex:1 1 auto;padding:1rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}}.tns-outer{padding:0!important}.tns-outer [hidden]{display:none!important}.tns-outer [aria-controls],.tns-outer [data-action]{cursor:pointer}.tns-slider{transition:all 0s}.tns-slider>.tns-item{box-sizing:border-box}.tns-horizontal.tns-subpixel{white-space:nowrap}.tns-horizontal.tns-subpixel>.tns-item{display:inline-block;vertical-align:top;white-space:normal}.tns-horizontal.tns-no-subpixel:after{content:"";display:table;clear:both}.tns-horizontal.tns-no-subpixel>.tns-item{float:left}.tns-horizontal.tns-carousel.tns-no-subpixel>.tns-item{margin-right:-100%}.tns-no-calc{position:relative;left:0}.tns-autowidth{display:inline-block}.tns-lazy-img{transition:opacity .6s;opacity:.6}.tns-lazy-img.tns-complete{opacity:1}.tns-ah{transition:height 0s}.tns-ovh{overflow:hidden}.tns-visually-hidden{position:absolute;left:-10000em}.tns-transparent{opacity:0;visibility:hidden}.tns-fadeIn{opacity:1;z-index:0}.tns-fadeOut,.tns-normal{opacity:0;z-index:-1}.tns-vpfix{white-space:nowrap}.tns-vpfix>div,.tns-vpfix>li{display:inline-block}.tns-t-subp2{margin:0 auto;width:310px;position:relative;height:10px;overflow:hidden}.tns-t-ct{width:2333.3333333%;width:2333.33333%;position:absolute;right:0}.tns-t-ct:after{content:"";display:table;clear:both}.tns-t-ct>div{width:1.4285714%;width:1.42857%;height:10px;float:left}.homepage-hero-section{padding-top:2rem}@media (min-width:992px) and (max-width:1199.98px){.homepage-hero-section__title{font-size:2.75rem}}.homepage-hero-section__decors-wrapper{padding-bottom:40.625rem}.homepage-hero-section__decor-mobile{bottom:-4.375rem;left:2rem;width:32rem;height:43.25rem}.homepage-hero-section__decor-desktop{bottom:-5rem;width:59.375rem;height:37.25rem}@media (min-width:992px){.homepage-hero-section{padding-top:6.625rem}.homepage-hero-section__title{max-width:33.75rem}.homepage-hero-section__content{max-width:27.75rem}.homepage-hero-section__decors-wrapper{padding-bottom:32.875rem}.homepage-hero-section__decor-desktop{left:-12rem}}@media (min-width:1200px){.gform_wrapper.gform_validation_error .gform_footer{margin-top:1.8rem!important}.gform_wrapper form div.gform_body div.gform_page div.gform_page_footer{margin-top:1.8rem!important}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{height:9.25rem;min-height:9.25rem}.gform_wrapper form .gform_footer{margin-top:1.8rem!important}.homepage-hero-section__decor-desktop{left:-16rem}}.homepage-hero-section__decor-desktop:after{content:"";position:absolute;top:0;right:-90vw;width:100vw;height:5.625rem;background-color:#6bdab6}.homepage-hero-section__animation-wrapper{bottom:3.375rem;left:.9375rem;width:calc(100vw - 1.875rem);height:calc(100vw - 1.875rem);border-radius:1.3125rem;box-shadow:0 .25rem .5rem rgba(0,0,0,.1)}@media (min-width:23.75rem){.homepage-hero-section__animation-wrapper{width:21.875rem;height:21.875rem}}@media (min-width:768px){.homepage-hero-section__animation-wrapper{left:-.5rem}}@media (min-width:992px){.homepage-hero-section__animation-wrapper{bottom:2rem;left:-1rem}}@media (min-width:1200px){.homepage-hero-section__animation-wrapper{top:-3.75rem;bottom:auto;left:-3rem}}@media (min-width:1400px){.gform_wrapper.gform_validation_error .gform_footer{margin-top:2rem!important}.gform_wrapper form div.gform_body div.gform_page div.gform_page_footer{margin-top:2rem!important}.gform_wrapper form div.gform_body div.gform_fields .gfield div.ginput_container textarea,.gform_wrapper form div.gform_body ul.gform_fields .gfield div.ginput_container textarea{height:10rem;min-height:10rem}.gform_wrapper form .gform_footer{margin-top:2rem!important}.homepage-hero-section{padding-top:8rem}.homepage-hero-section__animation-wrapper{top:-3.75rem;left:-5rem}}.homepage-hero-section__animation-wrapper .lottie{position:relative;-webkit-box-align:end;align-items:end;justify-items:end;width:100%!important;min-width:unset;height:100%!important;margin-top:0!important}.homepage-hero-section__animation-wrapper .lottie__animation{width:100%!important;height:100%!important;margin:0!important;-webkit-transform:scale(1.15);transform:scale(1.15)}.homepage-hero-section__image-wrapper{top:-2.75rem;right:-6.25rem;width:26.875rem}@media (min-width:576px){.homepage-hero-section__image-wrapper{width:29.40625rem}}@media (min-width:768px){.homepage-hero-section__image-wrapper{width:31.9375rem}}@media (min-width:992px){.homepage-hero-section__image-wrapper{width:34.46875rem}.homepage-hero-section__image-wrapper{top:-3.75rem;right:-9.375rem}}@media (min-width:1200px){.homepage-hero-section__image-wrapper{width:37rem}.homepage-hero-section__image-wrapper{top:-6rem;right:-10rem}}.homepage-hero-section__circle{width:5rem;height:5rem;right:4.125rem;bottom:-2.5rem}@media (min-width:576px){.homepage-hero-section__circle{width:5.25rem;height:5.25rem;right:3.96875rem;bottom:-2.625rem}}@media (min-width:768px){.homepage-hero-section__circle{width:5.5rem;height:5.5rem;right:3.8125rem;bottom:-2.75rem}}@media (min-width:992px){.homepage-hero-section__circle{width:5.75rem;height:5.75rem;right:3.65625rem;bottom:-2.875rem}}@media (min-width:1200px){.homepage-hero-section__circle{width:6rem;height:6rem;right:3.5rem;bottom:-3rem}}.homepage-hero-section__circle-background-mobile{top:-4rem;left:50%;width:100vw;height:auto;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.homepage-hero-section__circle-background-desktop{top:0;right:0;width:52vw;height:auto}@media (min-width:120.0625rem){.homepage-hero-section__circle-background-desktop{display:none}}.homepage-hero-section__form{max-width:22.5rem;padding-top:1rem}.st0{fill:none;stroke:url(#svg_04fcaf79-94e8-49ec-85d3-499d2cd7e77d_svg_86de7b81-5552-45de-b5e9-08db53ee8a4a_main-chart_1_);stroke-width:60}.st1{fill:none;stroke:url(#svg_5ad63971-ed36-4bb1-ad18-41cf3e16232f_svg_94956815-cd21-4abc-b698-6db16eb7929f_main-chart_2_);stroke-width:60;stroke-linecap:round}.st2{fill:none;stroke:url(#svg_1bcef812-b25e-425e-ac7f-49a0f11a63b0_svg_f0624cb9-f40d-4959-b57a-6655020e88a8_main-chart_3_);stroke-width:60;stroke-linecap:round}.st3{fill:none;stroke:url(#svg_00e898a4-3012-4b26-b4ea-ac532e71b181_svg_db00955b-6138-4738-a3c9-a88ee5087c73_main-chart_4_);stroke-width:60;stroke-linecap:round;stroke-linejoin:round}.st4{fill:none;stroke:url(#svg_ddd04d58-a04c-47fa-8ea6-451afba2b7c6_svg_9d09fd90-d938-445c-bea2-c815ca9448f0_main-chart_5_);stroke-width:60;stroke-linecap:round}.st5{fill:#0F0F0F}.gform_wrapper.gravity-theme fieldset,.gform_wrapper.gravity-theme legend{background:0 0;padding:0}.gform_wrapper.gravity-theme fieldset{border:none;display:block;margin:0}.gform_wrapper.gravity-theme legend{margin-left:0;margin-right:0}.gform_wrapper.gravity-theme .gform_drop_instructions{display:block;margin-bottom:8px}.gform_wrapper.gravity-theme .gform_delete{cursor:pointer;vertical-align:middle}.gform_wrapper.gravity-theme .gfield_fileupload_filesize{padding:0 6px}.gform_wrapper.gravity-theme .gfield_validation_message ul{margin:16px 0;padding-left:24px}.gform_wrapper.gravity-theme .gfield_validation_message ul:empty{display:none}.gform_wrapper.gravity-theme .ginput_preview{margin:16px 0}.gform_wrapper.gravity-theme ::-ms-reveal{display:none}.gform_wrapper.gravity-theme .gform_validation_container,body .gform_wrapper.gravity-theme .gform_body .gform_fields .gfield.gform_validation_container,body .gform_wrapper.gravity-theme .gform_fields .gfield.gform_validation_container,body .gform_wrapper.gravity-theme .gform_validation_container{display:none!important;left:-9000px;position:absolute!important}.gform_wrapper.gravity-theme .chosen-container{display:inline-block;font-size:16px;position:relative;-webkit-user-select:none;-moz-user-select:none;user-select:none;vertical-align:middle}.gform_wrapper.gravity-theme .chosen-container *{box-sizing:border-box}.gform_wrapper.gravity-theme .chosen-container a{cursor:pointer}.gform_wrapper.gravity-theme .chosen-rtl{text-align:right}@media only screen and (max-width:641px){.gform_wrapper.gravity-theme input:not([type=radio]):not([type=checkbox]):not([type=image]):not([type=file]){line-height:2;min-height:32px}.gform_wrapper.gravity-theme textarea{line-height:1.5}.gform_wrapper.gravity-theme .chosen-container span:not(.ginput_price){display:block;margin-bottom:8px}.gform_wrapper.gravity-theme li.field_sublabel_below .ginput_complex{margin-top:12px!important}.gform_wrapper.gravity-theme ul.gfield_checkbox li label,.gform_wrapper.gravity-theme ul.gfield_radio li label{cursor:pointer;width:85%}}.gform_wrapper.gravity-theme .gform_hidden{display:none}.gform_wrapper.gravity-theme .screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.gform_wrapper.gravity-theme button.screen-reader-text:focus{border:0;clip:auto;-webkit-clip-path:none;clip-path:none;height:auto;margin:0;position:static!important;width:auto}.gform_wrapper.gravity-theme .gfield textarea{width:100%}.gform_wrapper.gravity-theme .gfield textarea.small{height:96px}.gform_wrapper.gravity-theme .gfield textarea.medium{height:192px}.gform_wrapper.gravity-theme .gfield textarea.large{height:288px}.gform_wrapper.gravity-theme .gfield input,.gform_wrapper.gravity-theme .gfield select{max-width:100%}.gform_wrapper.gravity-theme .gfield input.small,.gform_wrapper.gravity-theme .gfield select.small{width:calc(25% - 16px * 3 / 4)}.gform_wrapper.gravity-theme .gfield input.medium,.gform_wrapper.gravity-theme .gfield select.medium{width:calc(50% - 16px / 2)}.gform_wrapper.gravity-theme .gfield input.large,.gform_wrapper.gravity-theme .gfield select.large{width:100%}.gform_wrapper.gravity-theme *{box-sizing:border-box}.gform_wrapper.gravity-theme .gform_fields{display:grid;grid-column-gap:2%;-ms-grid-columns:(1fr 2%)[12];grid-row-gap:16px;grid-template-columns:repeat(12,1fr);grid-template-rows:repeat(auto-fill,auto);width:100%}.gform_wrapper.gravity-theme .gfield{grid-column:1/-1;min-width:0}.gform_wrapper.gravity-theme .gfield.gfield--width-full{grid-column:span 12;-ms-grid-column-span:12}.gform_wrapper.gravity-theme .field_sublabel_below .ginput_complex{align-items:flex-start}html[dir=rtl] .gform_wrapper.gravity-theme code,html[dir=rtl] .gform_wrapper.gravity-theme input[type=email],html[dir=rtl] .gform_wrapper.gravity-theme input[type=tel],html[dir=rtl] .gform_wrapper.gravity-theme input[type=url]{direction:rtl}html[dir=rtl] .gform_wrapper.gravity-theme .gfield_label{direction:rtl}html[dir=rtl] .gform_wrapper.gravity-theme .gfield_required{margin-left:0;margin-right:4px}html[dir=rtl] .gform_wrapper.gravity-theme ::-webkit-input-placeholder{text-align:right}html[dir=rtl] .gform_wrapper.gravity-theme ::-moz-placeholder{text-align:right}html[dir=rtl] .gform_wrapper.gravity-theme :-ms-input-placeholder{text-align:right}html[dir=rtl] .gform_wrapper.gravity-theme :-moz-placeholder{text-align:right}html[dir=rtl] .gform_wrapper.gravity-theme .gform_wrapper.gravity-theme fieldset{display:block}html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full){padding-left:0;padding-right:16px}@media (min-width:641px){html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full){padding-left:0;padding-right:16px}}.gform_wrapper.gravity-theme .gform_card_icon_container{display:flex;height:32px;margin:8px 0 6.4px}.gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon{background-image:url(https://forethought.ai/wp-content/plugins/gravityforms/images/gf-creditcards.svg);background-repeat:no-repeat;height:32px;margin-right:4.8px;text-indent:-9000px;width:40px}.gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_selected{position:relative}.gform_wrapper.gravity-theme .gform_card_icon_container div.gform_card_icon.gform_card_icon_selected::after{background:url(https://forethought.ai/wp-content/plugins/gravityforms/images/gf-creditcards-check.svg) center center no-repeat;bottom:4px;content:"";display:block;height:10px;position:absolute;right:0;width:13px}.gform_wrapper.gravity-theme .gfield_list_group{display:flex;flex-direction:row;flex-wrap:nowrap;margin-bottom:8px}.gform_wrapper.gravity-theme .gfield_list_group:last-child{margin-bottom:0}@media (max-width:640px){.gform_wrapper.gravity-theme .gform_fields{grid-column-gap:0}.gform_wrapper.gravity-theme .gfield:not(.gfield--width-full){grid-column:1/-1}html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full){padding-right:0}.gform_wrapper.gravity-theme .gfield_list_group{border:1px solid rgba(0,0,0,.2);display:block;margin-bottom:16px;padding:16px}.gform_wrapper.gravity-theme .gfield_list_group:last-child{margin-bottom:0}}.gform_wrapper.gravity-theme .gfield_label{display:inline-block;font-size:16px;font-weight:700;margin-bottom:8px;padding:0}.gform_wrapper.gravity-theme .ginput_complex label{font-size:15px;padding-top:5px}.gform_wrapper.gravity-theme .gform_validation_errors{background:#fff9f9;border-radius:5px;border:1.5px solid #c02b0a;box-shadow:0 1px 4px rgba(0,0,0,.11),0 0 4px rgba(18,25,97,.0405344);margin-block-end:8px;margin-block-start:8px;padding-block:16px;padding-inline-end:16px;padding-inline-start:48px;position:relative;width:100%}.gform_wrapper.gravity-theme .gform_validation_errors>h2{color:#c02b0a;font-size:13.2px;font-weight:500;line-height:17.6px;margin-block-end:12px;margin-block-start:0;margin-inline:0}.gform_wrapper.gravity-theme .gform_validation_errors>h2::before{display:none}.gform_wrapper.gravity-theme .gform_validation_errors>ol{padding-inline-start:20px}.gform_wrapper.gravity-theme .gform_validation_errors>ol a{color:#c02b0a;font-size:13.2px}.gform_wrapper.gravity-theme .gform_validation_errors>ol li{color:#c02b0a;font-size:13.2px;list-style-type:disc!important;margin-block-end:8px;margin-block-start:0;margin-inline:0}.gform_wrapper.gravity-theme .gform_validation_errors>ol li:last-of-type{margin-block-end:0}.gform_wrapper.gravity-theme .gfield_required{color:#c02b0a;display:inline-block;font-size:13.008px;padding-inline-start:0.125em}.gform_wrapper.gravity-theme .gfield_required .gfield_required_text{font-style:italic;font-weight:400}.gform_wrapper.gravity-theme .gfield_error .gfield_repeater_cell label,.gform_wrapper.gravity-theme .gfield_error label,.gform_wrapper.gravity-theme .gfield_error legend,.gform_wrapper.gravity-theme .gfield_validation_message,.gform_wrapper.gravity-theme .validation_message,.gform_wrapper.gravity-theme [aria-invalid=true]+label,.gform_wrapper.gravity-theme label+[aria-invalid=true]{color:#c02b0a}.gform_wrapper.gravity-theme .gfield_validation_message,.gform_wrapper.gravity-theme .validation_message{background:#fff9f9;border:1px solid #c02b0a;font-size:14.992px;margin-block-start:8px;padding:12.992px 24px}.gform_wrapper.gravity-theme .gfield_error [aria-invalid=true]{border:1px solid #c02b0a}.gform_wrapper.gravity-theme button.button:disabled{opacity:.6}.gform_wrapper.gravity-theme .gform_footer{display:flex}.gform_wrapper.gravity-theme .gform_footer input{align-self:flex-end}.gform_wrapper.gravity-theme .ginput_complex{display:flex;flex-flow:row wrap}.gform_wrapper.gravity-theme .ginput_complex fieldset,.gform_wrapper.gravity-theme .ginput_complex span{flex:1}.gform_wrapper.gravity-theme .ginput_complex label,.gform_wrapper.gravity-theme .ginput_complex legend{display:block}.gform_wrapper.gravity-theme .ginput_complex input,.gform_wrapper.gravity-theme .ginput_complex select{width:100%}@media (min-width:641px){.gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full),.gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full){padding-right:1%}.gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),.gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full){padding-left:1%;padding-right:0}html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full){padding-left:1%;padding-right:0}html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) fieldset:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full),html[dir=rtl] .gform_wrapper.gravity-theme .ginput_complex:not(.ginput_container_address) span:not([style*="display:none"]):not(.ginput_full)~span:not(.ginput_full){padding-left:0;padding-right:1%}}@media (max-width:640px){.gform_wrapper.gravity-theme .ginput_complex span{flex:0 0 100%;margin-bottom:8px;padding-left:0}}.gform_wrapper.gravity-theme .description,.gform_wrapper.gravity-theme .gfield_description{clear:both;font-family:inherit;font-size:15px;letter-spacing:normal;line-height:inherit;padding-top:13px;width:100%}html[dir=rtl] .gform_wrapper.gravity-theme .gform_card_icon{float:right}.gform_wrapper.gravity-theme .gform_footer,.gform_wrapper.gravity-theme .gform_page_footer{margin:6px 0 0;padding:16px 0}.gform_wrapper.gravity-theme .gform_footer button,.gform_wrapper.gravity-theme .gform_footer input,.gform_wrapper.gravity-theme .gform_page_footer button,.gform_wrapper.gravity-theme .gform_page_footer input{margin-bottom:8px}.gform_wrapper.gravity-theme .gform_footer button.button:disabled,.gform_wrapper.gravity-theme .gform_footer input.button:disabled,.gform_wrapper.gravity-theme .gform_page_footer button.button:disabled,.gform_wrapper.gravity-theme .gform_page_footer input.button:disabled{opacity:.6}.gform_wrapper.gravity-theme .gform_footer button+input,.gform_wrapper.gravity-theme .gform_footer input+button,.gform_wrapper.gravity-theme .gform_footer input+input,.gform_wrapper.gravity-theme .gform_page_footer button+input,.gform_wrapper.gravity-theme .gform_page_footer input+button,.gform_wrapper.gravity-theme .gform_page_footer input+input{margin-left:8px}html[dir=rtl] .gform_wrapper.gravity-theme button+input,html[dir=rtl] .gform_wrapper.gravity-theme input+button,html[dir=rtl] .gform_wrapper.gravity-theme input+input{margin-right:8px}.gform_wrapper.gravity-theme .gfield_checkbox label,.gform_wrapper.gravity-theme .gfield_radio label{display:inline-block;font-size:15px}.gform_wrapper.gravity-theme .gfield_checkbox button,.gform_wrapper.gravity-theme .gfield_checkbox input[type=text],.gform_wrapper.gravity-theme .gfield_radio button,.gform_wrapper.gravity-theme .gfield_radio input[type=text]{margin-top:16px}.gform_wrapper.gravity-theme input[type=number]{display:inline-block}.gform_wrapper.gravity-theme input[type=color],.gform_wrapper.gravity-theme input[type=date],.gform_wrapper.gravity-theme input[type=datetime-local],.gform_wrapper.gravity-theme input[type=email],.gform_wrapper.gravity-theme input[type=month],.gform_wrapper.gravity-theme input[type=number],.gform_wrapper.gravity-theme input[type=password],.gform_wrapper.gravity-theme input[type=search],.gform_wrapper.gravity-theme input[type=tel],.gform_wrapper.gravity-theme input[type=text],.gform_wrapper.gravity-theme input[type=time],.gform_wrapper.gravity-theme input[type=url],.gform_wrapper.gravity-theme input[type=week],.gform_wrapper.gravity-theme select,.gform_wrapper.gravity-theme textarea{font-size:15px;margin-bottom:0;margin-top:0;padding:8px}.gform_wrapper.gravity-theme .ginput_total{color:#060}.gform_wrapper.gravity-theme .gfield_repeater_cell{margin-top:8px}.gform_wrapper.gravity-theme .gfield_repeater_cell label{color:#9b9a9a;font-size:12.8px;font-weight:400;padding-top:8px}.gform_wrapper.gravity-theme .gfield_repeater_items .gfield_repeater_cell:not(:first-child){padding-top:8px}.gform_wrapper.gravity-theme .gfield_repeater_wrapper input{border:1px solid #c5c6c5;border-radius:4px}.gform_wrapper.gravity-theme .gfield_repeater_cell>.gfield_repeater_wrapper{background-color:rgba(1,1,1,.02);border-bottom:1px solid #eee;border-left:8px solid #f1f1f1;border-radius:8px;box-shadow:0 1px 1px 0 rgba(0,0,0,.06),0 2px 1px -1px rgba(0,0,0,.06),0 1px 5px 0 rgba(0,0,0,.06);padding:10px 20px}.gform_wrapper.gravity-theme .gfield_repeater_buttons{padding-top:16px}.acf-block-heading-with-logos__row{margin-top:-2rem}@media (min-width:576px){.acf-block-heading-with-logos__row{margin-top:-2.4rem}}.acf-block-heading-with-logos__logo-wrapper{width:50%}@media (min-width:768px){.acf-block-heading-with-logos__row{margin-top:-2.8rem}.acf-block-heading-with-logos__logo-wrapper{width:33%}}.acf-block-heading-with-logos__logo-wrapper--with-styles img{width:var(--image-mobile-width)}.acf-block-heading-with-logos hr{height:0;opacity:0}@media (max-width:991.98px){.acf-block-heading-with-logos hr{display:none}}.acf-block-heading-with-logos a{-webkit-transition:.2s ease-in-out;transition:all .2s ease-in-out}@media (prefers-reduced-motion:reduce){.acf-block-heading-with-logos a{-webkit-transition:none;transition:none}}.acf-block-content-with-statistics__numbers--number{-webkit-background-clip:text;font-size:3.75rem;-webkit-text-fill-color:transparent}@media (min-width:992px) and (max-width:1199.98px){.acf-block-content-with-statistics__numbers--number{font-size:3.125rem}}.acf-block-heading-with-chart-and-icons__chart{position:relative;display:grid;grid-template-columns:20% auto 20%;grid-auto-rows:auto;grid-row-gap:3rem;-webkit-box-align:center;align-items:center}@media (min-width:992px){.acf-block-heading-with-logos__row{margin-top:-3.2rem}.acf-block-heading-with-logos__logo-wrapper{width:auto}.acf-block-heading-with-logos__logo-wrapper--with-styles img{width:var(--image-width)}.acf-block-heading-with-chart-and-icons__chart{grid-template-columns:25% auto 25%;grid-row-gap:2rem}}.acf-block-heading-with-chart-and-icons__chart-img{position:relative}.acf-block-heading-with-chart-and-icons__chart-img svg{display:inline-block;width:100%;max-width:100%;height:auto}@media (max-width:767.98px){.acf-block-heading-with-chart-and-icons__chart-img svg{max-width:calc(100% - 2rem)}}.acf-block-heading-with-chart-and-icons__chart .wrapper{justify-self:center}.acf-block-heading-with-chart-and-icons__chart .wrapper--0{grid-row-start:1;grid-column-start:1;grid-column-end:4}.acf-block-heading-with-chart-and-icons__chart .wrapper--1{grid-row-start:2;grid-column-start:3}.acf-block-heading-with-chart-and-icons__chart .wrapper--big{grid-row-start:2;grid-column-start:2}.acf-block-heading-with-chart-and-icons__chart .wrapper--2{grid-row-start:3;grid-column-start:1;grid-column-end:4}.acf-block-heading-with-chart-and-icons__chart .wrapper--3{grid-row-start:2;grid-column-start:1}.acf-block-heading-with-chart-and-icons__chart-icon{position:static;max-width:100%}.acf-block-heading-with-chart-and-icons__chart-icon>svg{width:2.4rem;height:auto}@media (min-width:768px){.acf-block-heading-with-chart-and-icons__chart-icon>svg{width:3.5rem}}@media (min-width:992px){.acf-block-heading-with-chart-and-icons__chart-icon>svg{width:2.5rem}}@media (min-width:1200px){.acf-block-heading-with-logos__row{margin-top:-3.6rem}.acf-block-heading-with-chart-and-icons__chart{grid-row-gap:3rem;top:-1rem}.acf-block-heading-with-chart-and-icons__chart-icon>svg{width:3.5rem}}@media (min-width:1400px){.acf-block-heading-with-logos__row{margin-top:-4rem}.acf-block-heading-with-chart-and-icons__chart-icon>svg{width:4.25rem}}.acf-block-heading-with-chart-and-icons__chart-label{overflow:hidden;max-width:6.25rem;letter-spacing:2px;text-overflow:ellipsis;white-space:nowrap}.acf-block-timeline .container{position:relative}.acf-block-timeline__circle-with-arrow{position:relative;width:4rem;height:4rem;border-radius:2rem}.acf-block-timeline__circle-with-arrow-line{position:absolute;top:100%;left:calc(50% - 1px)}.acf-block-timeline__circle-with-arrow-line:after{content:"";position:absolute;top:0;left:-.0875rem;width:.35rem;height:var(--timeline-moving-element-height);max-height:100%;background:-webkit-linear-gradient(top,#67e0f7,#6cdbb7);background:linear-gradient(180deg,#67e0f7,#6cdbb7);background-attachment:fixed}.acf-block-timeline__icon>svg{width:3.125rem;height:auto}.acf-block-timeline__text{line-height:1.7}@media (min-width:992px){.acf-block-timeline__icon>svg{width:3.875rem}.acf-block-timeline__text{line-height:1.5}}@media (min-width:768px) and (max-width:991.98px){.acf-block-services-introduction__image{max-width:30rem}}.acf-block-services-introduction .single-service{border-top:1px solid #c4c4c4;-webkit-transition:border-top-color .2s ease-in-out;transition:border-top-color .2s ease-in-out}.acf-block-services-introduction .single-service:focus,.acf-block-services-introduction .single-service:hover{border-top-color:#fff}.acf-block-services-introduction .single-service:focus .single-service__title,.acf-block-services-introduction .single-service:hover .single-service__title{background-size:100% 100%}.acf-block-services-introduction .single-service:focus .single-service__title:after,.acf-block-services-introduction .single-service:hover .single-service__title:after{right:-1.375rem;opacity:1}.acf-block-services-introduction .single-service:focus .single-service__description,.acf-block-services-introduction .single-service:hover .single-service__description{color:#fff}.acf-block-services-introduction .single-service__title:after{content:"";position:absolute;top:50%;right:-.5rem;width:.75rem;height:.75rem;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMS4zOCAxMS4wOSI+PHBhdGggZD0iTTQuODQuNzRMNS40LjE4YS42LjYgMCAwMS44NiAwbDQuOTQgNC45M2EuNi42IDAgMDEwIC44NmwtNC45NCA0Ljk0YS42LjYgMCAwMS0uODYgMGwtLjU2LS41NmEuNjIuNjIgMCAwMTAtLjg4bDMuMDctMi45MUguNjFBLjYxLjYxIDAgMDEwIDZ2LS44NmEuNjEuNjEgMCAwMS42MS0uNjFoNy4zTDQuODUgMS42MWEuNi42IDAgMDEtLjAxLS44N3oiIGZpbGw9IiNmZmYiLz48L3N2Zz4=) 50% no-repeat;background-size:100% auto;opacity:0;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:opacity .2s ease-in-out .2s,right .2s ease-in-out .2s;transition:opacity .2s ease-in-out .2s,right .2s ease-in-out .2s}.acf-block-services-introduction .single-service__description{color:#c4c4c4;-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.acf-block-logos__column-logo-wrapper--with-styles img{width:var(--image-mobile-width)}.acf-block-logos hr{height:0;opacity:0}@media (max-width:991.98px){.acf-block-timeline__circle-with-arrow{display:none!important}.acf-block-services-introduction{padding-top:7.5rem;padding-bottom:7.5rem}.acf-block-logos hr{display:none}}.acf-block-testimonials__row{opacity:0}.acf-block-testimonials__row.tns-slider{opacity:1}.acf-block-testimonials__link{text-decoration:underline}.acf-block-testimonials__slider-item{box-sizing:border-box;min-height:30.75rem}.acf-block-testimonials__link{max-width:21.875rem}.acf-block-testimonials .tns-outer{overflow:hidden;border-radius:2rem;box-shadow:0 .25rem .5rem 2px rgba(0,0,0,.08)}.acf-block-testimonials .tns-nav{position:absolute;bottom:1.6875rem;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.acf-block-testimonials .font-size-36{font-size:1.75rem}@media (min-width:576px){.acf-block-testimonials .font-size-36{font-size:1.875rem}}@media (min-width:768px){.acf-block-testimonials__slider-item{min-height:27.6255rem}.acf-block-testimonials .tns-nav{bottom:2.375rem}.acf-block-testimonials .font-size-36{font-size:2rem}}@media (min-width:992px){.acf-block-logos__column-logo-wrapper--with-styles img{width:var(--image-width)}.acf-block-testimonials .font-size-36{font-size:2.125rem}}.acf-block-testimonials__slider-logo-wrappe--with-styles img{width:var(--image-mobile-width)}.crunch-tiny-slider .tns-outer{position:relative}.crunch-tiny-slider .tns-outer .tns-controls button{position:absolute;top:50%;z-index:1;padding:0;border:0;background-color:transparent;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=prev]{left:-1.125rem}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=next]{right:-1.125rem}.crunch-tiny-slider .tns-outer .tns-controls button:hover:not([disabled]) .tns-controls__icon path{fill:#7b33fb}.crunch-tiny-slider .tns-outer .tns-controls button[disabled]{cursor:no-drop}.crunch-tiny-slider .tns-outer .tns-controls__icon{height:1rem;width:.625rem}.crunch-tiny-slider .tns-outer .tns-controls__icon path{-webkit-transition:fill .2s ease-in-out;transition:fill .2s ease-in-out}.crunch-tiny-slider .tns-nav{text-align:center;margin-top:1rem!important}@media (min-width:576px){.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=prev]{left:-1.2rem}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=next]{right:-1.2rem}.crunch-tiny-slider .tns-outer .tns-controls__icon{height:1.2rem;width:.75rem}.crunch-tiny-slider .tns-nav{margin-top:1.2rem!important}}@media (min-width:768px){.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=prev]{left:-1.275rem}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=next]{right:-1.275rem}.crunch-tiny-slider .tns-outer .tns-controls__icon{height:1.4rem;width:.875rem}.crunch-tiny-slider .tns-nav{margin-top:1.4rem!important}.acf-block-resources__slider-custom-nav{margin-right:-1rem;margin-left:-1rem}}@media (min-width:992px){.acf-block-testimonials__slider-logo-wrappe--with-styles img{width:var(--image-width)}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=prev]{left:-1.35rem}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=next]{right:-1.35rem}.crunch-tiny-slider .tns-outer .tns-controls__icon{height:1.6rem;width:1rem}.crunch-tiny-slider .tns-nav{margin-top:1.6rem!important}}@media (min-width:1200px){.acf-block-testimonials .font-size-36{font-size:2.25rem}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=prev]{left:-1.425rem}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=next]{right:-1.425rem}.crunch-tiny-slider .tns-outer .tns-controls__icon{height:1.8rem;width:1.125rem}.crunch-tiny-slider .tns-nav{margin-top:1.8rem!important}}@media (min-width:1400px){.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=prev]{left:-1.5rem}.crunch-tiny-slider .tns-outer .tns-controls button[data-controls=next]{right:-1.5rem}.crunch-tiny-slider .tns-outer .tns-controls__icon{height:2rem;width:1.25rem}.crunch-tiny-slider .tns-nav{margin-top:2rem!important}}.crunch-tiny-slider .tns-nav button{width:.625rem;height:.625rem;margin:.375rem;padding:0;border:0;border-radius:50%;background-color:#66e0f6;opacity:.5;-webkit-transform:scale(1);transform:scale(1);-webkit-transition:background-color .2s ease-in-out,opacity .2s ease-in-out,-webkit-transform .2s ease-in-out;transition:background-color .2s ease-in-out,opacity .2s ease-in-out,-webkit-transform .2s ease-in-out;transition:background-color .2s ease-in-out,opacity .2s ease-in-out,transform .2s ease-in-out;transition:background-color .2s ease-in-out,opacity .2s ease-in-out,transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.crunch-tiny-slider .tns-nav button.tns-nav-active,.crunch-tiny-slider .tns-nav button:hover{opacity:1;-webkit-transform:scale(1.4);transform:scale(1.4)}.acf-block-resources__slider-custom-nav .single-nav{border:0;border-top:1px solid #737373;color:#737373;-webkit-transition:color .2s ease-in-out,border-color .2s ease-in-out;transition:color .2s ease-in-out,border-color .2s ease-in-out}.acf-block-resources__slider-custom-nav .single-nav.tns-nav-active,.acf-block-resources__slider-custom-nav .single-nav:hover{border-color:#0f0f0f;color:#0f0f0f}.acf-block-resources .tns-outer{position:relative}.acf-block-resources .tns-outer .tns-ovh{-webkit-transition:height .2s ease-in-out;transition:height .2s ease-in-out}.acf-block-resources .tns-outer .tns-controls{position:absolute;bottom:0;left:.9375rem;z-index:2;border-radius:3.125rem;background:#fff;outline:0}@media (min-width:576px){.acf-block-resources .tns-outer .tns-controls{left:calc(50% - 270px + .9375rem)}}@media (min-width:768px){.acf-block-resources__slider-custom-nav .single-nav{flex-basis:100%;margin-right:1rem;margin-left:1rem}.acf-block-resources .tns-outer .tns-controls{left:calc(50% - 360px + .9375rem)}}@media (min-width:992px){.acf-block-resources .tns-outer .tns-ovh{height:auto!important}.acf-block-resources .tns-outer .tns-controls{left:calc(50% - 480px + .9375rem)}}@media (min-width:1200px){.acf-block-resources .tns-outer .tns-controls{left:calc(50% - 570px + .9375rem)}}@media (min-width:1400px){.acf-block-resources .tns-outer .tns-controls{left:calc(50% - 660px + .9375rem)}}.acf-block-resources .tns-outer .tns-controls button{padding:.5rem 1.125rem;border:0;background-color:transparent}.acf-block-resources .tns-outer .tns-controls button:hover:not([disabled]) .tns-controls__icon path{fill:#0f0f0f}.acf-block-resources .tns-outer .tns-controls button[disabled]{cursor:no-drop}.acf-block-resources .tns-outer .tns-controls__icon{width:.75rem;height:1.25rem}.acf-block-resources .tns-outer .tns-controls__icon path{-webkit-transition:.2s ease-in-out;transition:all .2s ease-in-out}.acf-block-resources .tns-outer .tns-item{opacity:0;-webkit-transition:opacity .6s ease-in-out;transition:opacity .6s ease-in-out}.acf-block-resources .tns-outer .tns-item.tns-slide-active{opacity:1}</style>
<meta name="description" content="Lower support costs while providing a top-tier customer experience every time. Unlock efficiency with the only autonomous customer support AI platform." />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<link rel="canonical" href="https://forethought.ai/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Generative AI Platform for CX Automation | Forethought" />
<meta property="og:description" content="Unlock efficiency by automating your customer support with generative AI, lowering support costs while providing top-tier service in every customer interaction." />
<meta property="og:url" content="https://forethought.ai/" />
<meta property="og:site_name" content="Forethought" />
<meta property="og:updated_time" content="2024-03-15T07:56:40-07:00" />
<meta property="og:image" content="https://forethought.ai/wp-content/uploads/2023/01/Forethought.png" />
<meta property="og:image:secure_url" content="https://forethought.ai/wp-content/uploads/2023/01/Forethought.png" />
<meta property="og:image:width" content="1478" />
<meta property="og:image:height" content="774" />
<meta property="og:image:alt" content="customer support ai" />
<meta property="og:image:type" content="image/png" />
<meta property="article:published_time" content="2021-10-04T16:05:00-07:00" />
<meta property="article:modified_time" content="2024-03-15T07:56:40-07:00" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Generative AI Platform for CX Automation | Forethought" />
<meta name="twitter:description" content="Unlock efficiency by automating your customer support with generative AI, lowering support costs while providing top-tier service in every customer interaction." />
<meta name="twitter:image" content="https://forethought.ai/wp-content/uploads/2023/01/Forethought.png" />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="IT Services" />
<meta name="twitter:label2" content="Time to read" />
<meta name="twitter:data2" content="Less than a minute" />
<script type="application/ld+json" class="rank-math-schema-pro">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://forethought.ai/#organization","name":"Forethought"},{"@type":"WebSite","@id":"https://forethought.ai/#website","url":"https://forethought.ai","name":"Forethought","publisher":{"@id":"https://forethought.ai/#organization"},"inLanguage":"en-US","potentialAction":{"@type":"SearchAction","target":"https://forethought.ai/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"ImageObject","@id":"https://forethought.ai/wp-content/uploads/2023/01/Forethought.png","url":"https://forethought.ai/wp-content/uploads/2023/01/Forethought.png","width":"1478","height":"774","inLanguage":"en-US"},{"@type":"WebPage","@id":"https://forethought.ai/#webpage","url":"https://forethought.ai/","name":"Customer Support AI | CX Automation Platform | Forethought","datePublished":"2021-10-04T16:05:00-07:00","dateModified":"2024-03-15T07:56:40-07:00","about":{"@id":"https://forethought.ai/#organization"},"isPartOf":{"@id":"https://forethought.ai/#website"},"primaryImageOfPage":{"@id":"https://forethought.ai/wp-content/uploads/2023/01/Forethought.png"},"inLanguage":"en-US"},{"@type":"Person","@id":"https://forethought.ai/author/it-services/","name":"IT Services","url":"https://forethought.ai/author/it-services/","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","url":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","caption":"IT Services","inLanguage":"en-US"},"worksFor":{"@id":"https://forethought.ai/#organization"}},{"@type":"Article","headline":"Customer Support AI | CX Automation Platform | Forethought","keywords":"customer support ai,customer service ai","datePublished":"2021-10-04T16:05:00-07:00","dateModified":"2024-03-15T07:56:40-07:00","author":{"@id":"https://forethought.ai/author/it-services/","name":"IT Services"},"publisher":{"@id":"https://forethought.ai/#organization"},"description":"Lower support costs while providing a top-tier customer experience every time. Unlock efficiency with the only autonomous customer support AI platform.","name":"Customer Support AI | CX Automation Platform | Forethought","@id":"https://forethought.ai/#richSnippet","isPartOf":{"@id":"https://forethought.ai/#webpage"},"image":{"@id":"https://forethought.ai/wp-content/uploads/2023/01/Forethought.png"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://forethought.ai/#webpage"}}]}</script>

<link rel="dns-prefetch" href="//ajax.googleapis.com" />
<link rel="dns-prefetch" href="//connect.facebook.net" />
<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//www.googletagmanager.com" />
<link rel="dns-prefetch" href="//maps.google.com" />
<link rel="dns-prefetch" href="//app.termly.io" />
<link rel="dns-prefetch" href="//d10lpsik1i8c69.cloudfront.net" />
<link rel="dns-prefetch" href="//cdn.truconversion.com" />
<link rel="dns-prefetch" href="//js.hscollectedforms.net" />
<link rel="dns-prefetch" href="//js.hsleadflows.net" />
<link rel="dns-prefetch" href="//js.hs-analytics.net" />
<link rel="dns-prefetch" href="//www.googleadservices.com" />
<style id="wp-block-library-theme-inline-css"></style>
<style id="rank-math-toc-block-style-inline-css"></style>
<style id="classic-theme-styles-inline-css"></style>
<style id="global-styles-inline-css"></style>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/default_page.bundle.js?ver=1713198697" id="default-page-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/vendor.bundle.js?ver=1713198698" id="vendor-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/homepage_hero_section.bundle.js?ver=1713198698" id="homepage-hero-section-scripts-js" defer></script>
<link rel="https://api.w.org/" href="https://forethought.ai/wp-json/" /><link rel="alternate" type="application/json" href="https://forethought.ai/wp-json/wp/v2/pages/2" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://forethought.ai/xmlrpc.php?rsd" />
<link rel="shortlink" href="https://www.elloe.ai/" />
<link rel="alternate" type="application/json+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2F&#038;format=xml" />
</head>
<body class="home page-template-default page page-id-2">
<img width="99999" height="99999" alt class="hide" style="pointer-events: none; position: absolute; top: 0; left: 0; width: 99vw; height: 99vh; max-width: 99vw; max-height: 99vh;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+">
<!--[if IE]>
            <div class="alert alert-ie" role="alert">
                <string>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
            </div>
        <![endif]-->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTRVVPZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<noscript><img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2638212&fmt=gif" /></noscript>

<a class="screen-reader-shortcut-header" href="#main" tabindex="0">Skip to main content</a>
<div class="main-content">
<?php 
  include 'header.php';
  ?>
  <main id="main">
<section class="homepage-hero-section position-relative overflow-hidden c-pb-lg-6">
<div class="container">
<div class="row">
<div class="col-lg-6">
<h1 class="homepage-hero-section__title h1-small">AI-First Customer Support Automation: Built on Your Data</h1>
<div class="homepage-hero-section__content entry-content text-gray c-mt-5">
<p>The generative customer support AI that will 10X your help desk efficiency over chat and email, cut costs, and ensure a top-tier experience.</p>
<p>The only support AI with <a href="https://www.elloe.ai/solve/">Autoflows</a>, natural language automation without decision trees.</p>
</div>
<div class="homepage-hero-section__form position-relative z-index-3">
<script type="rocketlazyloadscript" data-rocket-type="text/javascript"></script>
<div class="gf_browser_chrome gform_wrapper gravity-theme gform-theme--no-framework" data-form-theme="gravity-theme" data-form-index="0" id="gform_wrapper_22"><div id="gf_22" class="gform_anchor" tabindex="-1"></div>
<div class="gform_heading">
<p class="gform_description"></p>
</div><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_22" id="gform_22" action="/?utm_medium=product-widget&#038;utm_source=zalora&#038;utm_campaign=widget-traffic&#038;utm_content=corporate-website#gf_22" data-formid="22" novalidate>
<div class="gform-body gform_body"><div id="gform_fields_22" class="gform_fields top_label form_sublabel_below description_below"><div id="field_22_1" class="gfield gfield--type-email gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_22_1"><label class="gfield_label gform-field-label" for="input_22_1">Business Email<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_email">
<input name="input_1" id="input_22_1" type="email" value class="large" aria-required="true" aria-invalid="false" />
</div></div><div id="field_22_2" class="gfield gfield--type-hidden gfield--width-full gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_22_2"><div class="ginput_container ginput_container_text"><input name="input_2" id="input_22_2" type="hidden" class="gform_hidden" aria-invalid="false" value="zalora" /></div></div><div id="field_22_3" class="gfield gfield--type-hidden gfield--width-full gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_22_3"><div class="ginput_container ginput_container_text"><input name="input_3" id="input_22_3" type="hidden" class="gform_hidden" aria-invalid="false" value="product-widget" /></div></div><div id="field_22_4" class="gfield gfield--type-hidden gfield--width-full gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_22_4"><div class="ginput_container ginput_container_text"><input name="input_4" id="input_22_4" type="hidden" class="gform_hidden" aria-invalid="false" value="widget-traffic" /></div></div><div id="field_22_5" class="gfield gfield--type-hidden gfield--width-full gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_22_5"><div class="ginput_container ginput_container_text"><input name="input_5" id="input_22_5" type="hidden" class="gform_hidden" aria-invalid="false" value /></div></div><div id="field_22_6" class="gfield gfield--type-hidden gfield--width-full gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_22_6"><div class="ginput_container ginput_container_text"><input name="input_6" id="input_22_6" type="hidden" class="gform_hidden" aria-invalid="false" value="corporate-website" /></div></div><div id="field_22_7" class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible" data-js-reload="field_22_7"><label class="gfield_label gform-field-label" for="input_22_7">Phone</label><div class="ginput_container"><input name="input_7" id="input_22_7" type="text" value autocomplete="new-password" /></div><div class="gfield_description" id="gfield_description_22_7">This field is for validation purposes and should be left unchanged.</div></div></div></div>
<div class="gform_footer top_label"> <button href="https://www.elloe.ai/request-demo/" type="submit" id="gform_submit_button_22" class="gform_button button crunch-button crunch-button__full-background crunch-button__full-background--medium crunch-button__full-background--purple-gradient border-0" onclick="if(window[&quot;gf_submitting_22&quot;]){return false;}  if( !jQuery(&quot;#gform_22&quot;)[0].checkValidity || jQuery(&quot;#gform_22&quot;)[0].checkValidity()){window[&quot;gf_submitting_22&quot;]=true;}  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_22&quot;]){return false;} if( !jQuery(&quot;#gform_22&quot;)[0].checkValidity || jQuery(&quot;#gform_22&quot;)[0].checkValidity()){window[&quot;gf_submitting_22&quot;]=true;}  jQuery(&quot;#gform_22&quot;).trigger(&quot;submit&quot;,[true]); }"><a href="https://www.elloe.ai/request-demo/" style="color:white;" >View Demo</a></button> <input type="hidden" name="gform_ajax" value="form_id=22&amp;title=&amp;description=1&amp;tabindex=0&amp;theme=gravity-theme" />
<input type="hidden" class="gform_hidden" name="is_submit_22" value="1" />
<input type="hidden" class="gform_hidden" name="gform_submit" value="22" />
<input type="hidden" class="gform_hidden" name="gform_unique_id" value />
<input type="hidden" class="gform_hidden" name="state_22" value="WyJbXSIsImQxMzE2ZTJiZTk4MTUzOWE3ZjFmMDgyNDkxNWQ2NjEyIl0=" />
<input type="hidden" class="gform_hidden" name="gform_target_page_number_22" id="gform_target_page_number_22" value="0" />
<input type="hidden" class="gform_hidden" name="gform_source_page_number_22" id="gform_source_page_number_22" value="1" />
<input type="hidden" name="gform_field_values" value />
</div>
</form>
</div>
<iframe style="display:none;width:0px;height:0px;" src="about:blank" name="gform_ajax_frame_22" id="gform_ajax_frame_22" title="This iframe contains the logic required to handle Ajax powered Gravity Forms."></iframe>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() {gformInitSpinner( 22, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', true );jQuery('#gform_ajax_frame_22').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_22');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_22').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_22').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_22').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_22').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_22').offset().top - mt); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_22').val();gformInitSpinner( 22, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', true );jQuery(document).trigger('gform_page_loaded', [22, current_page]);window['gf_submitting_22'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_22').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_22').offset().top - mt);jQuery(document).trigger('gform_confirmation_loaded', [22]);window['gf_submitting_22'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_22').text());}, 50);}else{jQuery('#gform_22').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger("gform_pre_post_render", [{ formId: "22", currentPage: "current_page", abort: function() { this.preventDefault(); } }]);                if (event.defaultPrevented) {                return;         }        const gformWrapperDiv = document.getElementById( "gform_wrapper_22" );        if ( gformWrapperDiv ) {            const visibilitySpan = document.createElement( "span" );            visibilitySpan.id = "gform_visibility_test_22";            gformWrapperDiv.insertAdjacentElement( "afterend", visibilitySpan );        }        const visibilityTestDiv = document.getElementById( "gform_visibility_test_22" );        let postRenderFired = false;                function triggerPostRender() {            if ( postRenderFired ) {                return;            }            postRenderFired = true;            jQuery( document ).trigger( 'gform_post_render', [22, current_page] );            gform.utils.trigger( { event: 'gform/postRender', native: false, data: { formId: 22, currentPage: current_page } } );            if ( visibilityTestDiv ) {                visibilityTestDiv.parentNode.removeChild( visibilityTestDiv );            }        }        function debounce( func, wait, immediate ) {            var timeout;            return function() {                var context = this, args = arguments;                var later = function() {                    timeout = null;                    if ( !immediate ) func.apply( context, args );                };                var callNow = immediate && !timeout;                clearTimeout( timeout );                timeout = setTimeout( later, wait );                if ( callNow ) func.apply( context, args );            };        }        const debouncedTriggerPostRender = debounce( function() {            triggerPostRender();        }, 200 );        if ( visibilityTestDiv && visibilityTestDiv.offsetParent === null ) {            const observer = new MutationObserver( ( mutations ) => {                mutations.forEach( ( mutation ) => {                    if ( mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null ) {                        debouncedTriggerPostRender();                        observer.disconnect();                    }                });            });            observer.observe( document.body, {                attributes: true,                childList: false,                subtree: true,                attributeFilter: [ 'style', 'class' ],            });        } else {            triggerPostRender();        }    } );} ); 
/* ]]> */
});</script>
</div>
</div>
<div class="homepage-hero-section__decors-wrapper col-lg-6 position-relative">
<div class="homepage-hero-section__image-wrapper position-absolute z-index-2">
<img width="600" height="548" src="https://forethought.ai/wp-content/uploads/2021/10/homepage-hero.png" class="d-block w-100 h-auto border-radius-1-25" alt decoding="async" srcset="https://forethought.ai/wp-content/uploads/2021/10/homepage-hero.png 1010w, https://forethought.ai/wp-content/uploads/2021/10/homepage-hero-100x91.png 100w, https://forethought.ai/wp-content/uploads/2021/10/homepage-hero-200x183.png 200w, https://forethought.ai/wp-content/uploads/2021/10/homepage-hero-445x406.png 445w, https://forethought.ai/wp-content/uploads/2021/10/homepage-hero-500x456.png 500w, https://forethought.ai/wp-content/uploads/2021/10/homepage-hero-650x593.png 650w, https://forethought.ai/wp-content/uploads/2021/10/homepage-hero-800x730.png 800w, https://forethought.ai/wp-content/uploads/2021/10/homepage-hero-1000x913.png 1000w" sizes="(max-width: 600px) 100vw, 600px" /> <svg class="homepage-hero-section__circle position-absolute" viewBox="0 0 96 95" fill="none" xmlns="http://www.w3.org/2000/svg">
<ellipse cx="48" cy="47.5" rx="48" ry="47.5" transform="rotate(180 48 47.5)" fill="url(#homepage-hero-section-svg-circle)" />
<defs>
<linearGradient id="homepage-hero-section-svg-circle" x1="94.3005" y1="45.9817" x2="0.687575" y2="46.2457" gradientUnits="userSpaceOnUse">
<stop offset="0" stop-color="#F6C043" />
<stop offset="1" stop-color="#FF9634" />
</linearGradient>
</defs>
</svg>
</div>
<svg class="homepage-hero-section__decor-mobile d-sm-none position-absolute z-index-minus-1" viewBox="0 0 512 692" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33 659.027L33 333.373L33 261.455C33 237.821 52.1597 218.661 75.7944 218.661L147.904 218.661C171.539 218.66 190.699 199.501 190.699 175.866L190.699 75.7946C190.699 52.1598 209.858 33 233.493 33L479.566 33" stroke="url(#paint0_linear_22:7555)" stroke-width="64.1918" stroke-linecap="round" />
<defs>
<linearGradient id="paint0_linear_22:7555" x1="249.146" y1="44.0824" x2="251.534" y2="654.539" gradientUnits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6" />
<stop offset="1" stop-color="#66E0F6" />
</linearGradient>
</defs>
</svg>
<div class="homepage-hero-section__decor-desktop d-none d-sm-block position-absolute z-index-1">
<svg class="w-100 h-100" viewBox="0 0 951 597" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M45 552L45.0001 455.999C45.0001 422.862 71.863 395.999 105 395.999L150.764 395.999L215.032 395.999C248.325 395.999 275.252 368.892 275.031 335.6L274.681 282.97L274.681 150.701L274.681 105C274.681 71.8629 301.544 45 334.681 45L590.34 45L906 45" stroke="url(#paint0_linear_903:2012)" stroke-width="90" stroke-linecap="round" />
<defs>
<linearGradient id="paint0_linear_903:2012" x1="461.739" y1="53.9753" x2="462.552" y2="548.371" gradientUnits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6" />
<stop offset="1" stop-color="#66E0F6" />
</linearGradient>
</defs>
</svg>
</div>
<div class="homepage-hero-section__animation-wrapper position-absolute bg-white d-flex align-items-center justify-content-center z-index-2">
<div class="lottie lottie--sta lottie--hidden-bg d-grid c-mt-8 c-mt-md-0">
<div class="lottie__animation c-my-9 c-my-lg-0 js-lottie" data-animateonscroll="true" data-loop="true" data-path="https://forethought.ai/wp-content/themes/forethought/lottie/animations-themes/animations/sta/animation.json"></div>
</div>
</div>
<svg class="homepage-hero-section__circle-background-mobile d-lg-none position-absolute z-index-minus-1" viewBox="0 0 375 914" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="310" cy="457" r="456.643" stroke="#C4C4C4" stroke-width="0.713242" stroke-dasharray="5.71 5.71" />
</svg>
</div>
</div>
</div>
<svg class="homepage-hero-section__circle-background-desktop d-none d-lg-block position-absolute z-index-minus-1" width="748" height="1095" viewBox="0 0 748 1095" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="547.5" cy="547.5" r="547" stroke="#C4C4C4" stroke-dasharray="8 8" />
</svg>
</section>
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-heading-with-logos-block_6a23b46e5947a45402686e0270a6a33d" class="acf-block-heading-with-logos c-mt-0 c-mb-0 c-pt-6 c-pb-1 c-mt-10 bg-secondary">&#13;
<div class="container" data-anim="fade-up">&#13;
&#13;
&#13;
<div class="d-flex flex-wrap acf-block-heading-with-logos__row justify-content-between">&#13;
&#13;
&#13;
&#13;
<hr class="w-100 bg-white m-0">&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<a  lime-case-study/" target="_self" class="hover-opacity-0-75 d-inline-block">&#13;
&#13;
&#13;
&#13;
<img decoding="async" width="444" height="182" src="https://forethought.ai/wp-content/uploads/2024/02/logo_home_lime-1.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/02/logo_home_lime-1.png 444w, https://forethought.ai/wp-content/uploads/2024/02/logo_home_lime-1-100x41.png 100w, https://forethought.ai/wp-content/uploads/2024/02/logo_home_lime-1-200x82.png 200w" sizes="(max-width: 444px) 100vw, 444px">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<a  achievers/" target="_self" class="hover-opacity-0-75 d-inline-block">&#13;
&#13;
&#13;
&#13;
<img decoding="async" width="2000" height="500" src="https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK.png 2000w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-1536x384.png 1536w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-100x25.png 100w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-200x50.png 200w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-445x111.png 445w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-500x125.png 500w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-600x150.png 600w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-650x163.png 650w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-800x200.png 800w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-1600x400.png 1600w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-1000x250.png 1000w, https://forethought.ai/wp-content/uploads/2024/02/Achievers_Logo_CMYK-1920x480.png 1920w" sizes="(max-width: 2000px) 100vw, 2000px">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 4.375rem; --image-mobile-width: 3.5rem;">&#13;
&#13;
&#13;
&#13;
<a  d2l/" target="_self" class="hover-opacity-0-75 d-inline-block">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="321" height="138" src="https://forethought.ai/wp-content/uploads/2024/02/d2l-color.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/02/d2l-color.png 321w, https://forethought.ai/wp-content/uploads/2024/02/d2l-color-100x43.png 100w, https://forethought.ai/wp-content/uploads/2024/02/d2l-color-200x86.png 200w" sizes="(max-width: 321px) 100vw, 321px">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 6.25rem; --image-mobile-width: 5rem;">&#13;
&#13;
&#13;
&#13;
<a  upwork/" target="_self" class="hover-opacity-0-75 d-inline-block">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="2400" height="717" src="https://forethought.ai/wp-content/uploads/2021/11/Upwork.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2021/11/Upwork.png 2400w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-1536x459.png 1536w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-2048x612.png 2048w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-100x30.png 100w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-200x60.png 200w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-445x133.png 445w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-500x149.png 500w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-600x179.png 600w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-650x194.png 650w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-800x239.png 800w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-1000x299.png 1000w, https://forethought.ai/wp-content/uploads/2021/11/Upwork-1920x574.png 1920w" sizes="(max-width: 2400px) 100vw, 2400px">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="136" height="19" src="https://forethought.ai/wp-content/uploads/2021/10/logo_thumbavk-1.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 4.375rem; --image-mobile-width: 3.5rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" src="https://forethought.ai/wp-content/uploads/2021/10/Asana-Logo-Vertical-White-1.svg" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 6.25rem; --image-mobile-width: 5rem;">&#13;
&#13;
&#13;
&#13;
<a  ifit/" target="_self" class="hover-opacity-0-75 d-inline-block">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="415" height="121" src="https://forethought.ai/wp-content/uploads/2024/02/ifit-logo.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/02/ifit-logo.png 415w, https://forethought.ai/wp-content/uploads/2024/02/ifit-logo-100x29.png 100w, https://forethought.ai/wp-content/uploads/2024/02/ifit-logo-200x58.png 200w" sizes="(max-width: 415px) 100vw, 415px">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 4.438rem; --image-mobile-width: 3.5504rem;">&#13;
&#13;
&#13;
&#13;
<a  q4-inc/" target="_self" class="hover-opacity-0-75 d-inline-block">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="1200" height="699" src="https://forethought.ai/wp-content/uploads/2024/02/q4-logo.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/02/q4-logo.png 1200w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-100x58.png 100w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-200x117.png 200w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-445x259.png 445w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-500x291.png 500w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-600x350.png 600w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-650x379.png 650w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-800x466.png 800w, https://forethought.ai/wp-content/uploads/2024/02/q4-logo-1000x583.png 1000w" sizes="(max-width: 1200px) 100vw, 1200px">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div>&#13;
<div id="acf-block-heading-with-logos-block_a22b9ee8d1608e2921388b22e7906415" class="acf-block-heading-with-logos c-mt-0 c-mb-0 c-pt-6 c-pb-0 c-mt-10 bg-secondary">&#13;
<div class="container" data-anim="fade-up">&#13;
&#13;
&#13;
<div class="d-flex flex-wrap acf-block-heading-with-logos__row justify-content-center">&#13;
&#13;
&#13;
&#13;
<hr class="w-100 bg-white m-0">&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 c-px-4 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" src="https://forethought.ai/wp-content/uploads/2024/02/HelpDesk_HighPerformer_Americas_HighPerformer.svg" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 c-px-4 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" src="https://forethought.ai/wp-content/uploads/2024/02/HelpDesk_Leader_Leader.svg" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 c-px-4 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" src="https://forethought.ai/wp-content/uploads/2024/02/HelpDesk_Leader_Mid-Market_Americas_Leader.svg" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 c-px-4 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" src="https://forethought.ai/wp-content/uploads/2024/02/HelpDesk_Leader_Mid-Market_Leader.svg" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-heading-with-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 c-px-4 acf-block-heading-with-logos__logo-wrapper--with-styles" style="--image-width: 8.125rem; --image-mobile-width: 6.5rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" src="https://forethought.ai/wp-content/uploads/2024/02/CustomerSelf-Service_BestSupport_Enterprise_QualityOfSupport.svg" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
</div></div></div>&#13;
<section id="acf-block-content-with-statistics-block_9b95404e04490464d4acbbc521dab391" class="acf-block-content-with-statistics c-mt-0 c-mb-0 c-pt-lg-6 c-pb-lg-6 bg-secondary">&#13;
<div class="container" data-anim="fade-up">&#13;
<div class="row justify-content-between">&#13;
<div class="col-lg-5">&#13;
&#13;
&#13;
<h2 class="h3 col-10 col-lg-12 text-white c-pr-xxl-8" id="doing-more-with-less-1">Doing more with less is the new business imperative.</h2>&#13;
&#13;
&#13;
&#13;
<div class="entry-content font-weight-medium text-gray-2 font-size-18 c-mt-only-3">&#13;
<p>Elloe&#x2019;s generative customer support AI&#x2014;powered by <a href="https://www.elloe.ai/Omnichannel/" target="_blank" rel="noopener">Omnichannel</a>&#x2014;uses Large Language Models (LLMs) and fine-tunes them on your own data to maximize efficiency and ROI for support teams.</p>
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-lg-7 col-xl-6 d-flex align-items-center">&#13;
<div class="row">&#13;
&#13;
&#13;
&#13;
<div class="acf-block-content-with-statistics__numbers c-mt-8 col-lg-4 d-flex flex-column c-mt-lg-0">&#13;
<span class="acf-block-content-with-statistics__numbers--number h1 pink-gradient">&#13;
91% </span>&#13;
<div class="acf-block-content-with-statistics__numbers--description entry-content font-weight-medium font-size-16 text-gray-2">&#13;
<p>average model accuracy</p>
</div>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-content-with-statistics__numbers c-mt-8 col-lg-4 d-flex flex-column c-mt-lg-0">&#13;
<span class="acf-block-content-with-statistics__numbers--number h1 green-gradient">&#13;
40% </span>&#13;
<div class="acf-block-content-with-statistics__numbers--description entry-content font-weight-medium font-size-16 text-gray-2">&#13;
<p>average reduction in First Response Time</p>
</div>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-content-with-statistics__numbers c-mt-8 col-lg-4 d-flex flex-column c-mt-lg-0">&#13;
<span class="acf-block-content-with-statistics__numbers--number h1 yellow-gradient">&#13;
53% </span>&#13;
<div class="acf-block-content-with-statistics__numbers--description entry-content font-weight-medium font-size-16 text-gray-2">&#13;
<p>average deflection</p>
</div>&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</section>
&#13;
&#13;
&#13;
<div id="acf-block-heading-with-chart-and-icons-block_b165a815320e1799c2b3fb7ac84cf19e" class="acf-block-heading-with-chart-and-icons c-mt-10" data-anim="fade-up">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-12 col-lg-6 col-xl-4 offset-xl-1">&#13;
<h3 class="font-size-45-45 c-mt-8 c-pt-3 line-height-1-3" id="streamline-the-entir-2">Streamline the entire customer support ticket lifecycle on one generative AI platform.</h3>&#13;
<a class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--small crunch-button__outline--purple-gradient c-mt-7 c-mt-md-5" href="https://www.elloe.ai/platform" target="_self">&#13;
&#13;
Our platform&#13;
</a>&#13;
</div>&#13;
<div class="col-12 col-lg-6 col-xl-6 offset-xl-1">&#13;
<div class="acf-block-heading-with-chart-and-icons__chart text-center c-mt-6 c-mt-lg-0">&#13;
&#13;
&#13;
<div class="wrapper wrapper--0">&#13;
<div class="d-flex flex-column align-items-center justify-content-center acf-block-heading-with-chart-and-icons__chart-icon acf-block-heading-with-chart-and-icons__chart-icon--0" data-anim="fade-up">&#13;

<svg width="68" height="68" viewbox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M36.3397 36.0786H23.1897C20.0707 36.0786 17.0795 34.8396 14.8741 32.6342C12.6687 30.4287 11.4297 27.4375 11.4297 24.3186C11.4297 21.1996 12.6687 18.2084 14.8741 16.003C17.0795 13.7976 20.0707 12.5586 23.1897 12.5586H53.6097V16.5586H23.1897C21.1316 16.5586 19.1578 17.3762 17.7025 18.8314C16.2473 20.2867 15.4297 22.2605 15.4297 24.3186C15.4297 26.3767 16.2473 28.3505 17.7025 29.8057C19.1578 31.261 21.1316 32.0786 23.1897 32.0786H36.3397V36.0786Z" fill="#66E0F6"></path>
<path d="M45.8097 55.5892H14.3896V51.5892H45.8097C46.8515 51.6266 47.8902 51.4537 48.8637 51.0809C49.8372 50.708 50.7257 50.1428 51.4759 49.419C52.2262 48.6952 52.823 47.8276 53.2305 46.8681C53.6381 45.9085 53.8482 44.8767 53.8482 43.8342C53.8482 42.7917 53.6381 41.7599 53.2305 40.8004C52.823 39.8408 52.2262 38.9733 51.4759 38.2495C50.7257 37.5257 49.8372 36.9604 48.8637 36.5876C47.8902 36.2147 46.8515 36.0418 45.8097 36.0792H45.6396V32.0792H45.8097C47.3822 32.0333 48.9479 32.3035 50.4142 32.8736C51.8805 33.4437 53.2175 34.3022 54.346 35.3983C55.4745 36.4944 56.3716 37.8057 56.9843 39.2548C57.5969 40.7038 57.9125 42.261 57.9125 43.8342C57.9125 45.4074 57.5969 46.9646 56.9843 48.4137C56.3716 49.8627 55.4745 51.1741 54.346 52.2702C53.2175 53.3662 51.8805 54.2248 50.4142 54.7949C48.9479 55.365 47.3822 55.6351 45.8097 55.5892Z" fill="#66E0F6"></path>
<path d="M22.3499 53.4338C22.3499 49.0348 18.7839 45.4688 14.3849 45.4688C9.98597 45.4688 6.41992 49.0348 6.41992 53.4338C6.41992 57.8327 9.98597 61.3988 14.3849 61.3988C18.7839 61.3988 22.3499 57.8327 22.3499 53.4338Z" fill="url(#svg_9b0fd1fa-6f0f-4864-8281-ced4b5764540_solve-icon-1)"></path>
<path d="M37.36 26.1094H30.57C28.0461 26.1094 26 28.1554 26 30.6794V37.4694C26 39.9933 28.0461 42.0394 30.57 42.0394H37.36C39.8839 42.0394 41.93 39.9933 41.93 37.4694V30.6794C41.93 28.1554 39.8839 26.1094 37.36 26.1094Z" fill="url(#svg_f367e1df-8744-4ee5-8e21-26a07a4d676f_solve-icon-2)"></path>
<path d="M61.5696 14.5666C61.5696 10.1676 58.0036 6.60156 53.6046 6.60156C49.2057 6.60156 45.6396 10.1676 45.6396 14.5666C45.6396 18.9655 49.2057 22.5316 53.6046 22.5316C58.0036 22.5316 61.5696 18.9655 61.5696 14.5666Z" fill="url(#svg_d6856201-6248-41bb-add7-ce567d22bbd5_solve-icon-3)"></path>
<defs>
<lineargradient id="svg_9b0fd1fa-6f0f-4864-8281-ced4b5764540_solve-icon-1" x1="6.41992" y1="53.4388" x2="22.3599" y2="53.4388" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6"></stop>
<stop offset="1" stop-color="#66E0F6"></stop>
</lineargradient>
<lineargradient id="svg_f367e1df-8744-4ee5-8e21-26a07a4d676f_solve-icon-2" x1="440.18" y1="569.004" x2="694.104" y2="569.004" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6"></stop>
<stop offset="1" stop-color="#66E0F6"></stop>
</lineargradient>
<lineargradient id="svg_d6856201-6248-41bb-add7-ce567d22bbd5_solve-icon-3" x1="772.685" y1="238.542" x2="1026.61" y2="238.542" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6"></stop>
<stop offset="1" stop-color="#66E0F6"></stop>
</lineargradient>
</defs>
</svg>
<span class="acf-block-heading-with-chart-and-icons__chart-label c-mt-3 c-mt-md-2 text-uppercase fw-semibold font-size-9-14">AI Co-Pilot</span>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="wrapper wrapper--1">&#13;
<div class="d-flex flex-column align-items-center justify-content-center acf-block-heading-with-chart-and-icons__chart-icon acf-block-heading-with-chart-and-icons__chart-icon--1" data-anim="fade-up">&#13;

<svg width="63" height="60" viewbox="0 0 63 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#svg_a56687ee-8a93-4622-87b5-682165bf7a35_clip0_903:4543)">
<path d="M62.162 7.46L48.9728 0.216752C47.8918 -0.323789 46.7026 0.432968 46.7026 1.62216V7.24378H44.6485C34.0539 7.24378 25.4053 15.8924 25.4053 26.487V60.1086H28.6485V26.3789C28.6485 17.5141 35.7837 10.3789 44.6485 10.3789H46.7026V16.0005C46.7026 17.1897 47.9999 17.9465 48.9728 17.4059L62.162 10.1627C63.2431 9.62216 63.2431 8.00054 62.162 7.46Z" fill="url(#svg_db47f04c-6eb1-470f-a93a-f6a3a20e0738_triage-icon-1)"></path>
<path d="M40.8645 59.9987H31.1347V26.3771C31.1347 19.3501 25.405 13.6204 18.378 13.6204H16.2158V3.89062H18.378C30.8104 3.89062 40.8645 13.9447 40.8645 26.3771V59.9987Z" fill="white"></path>
<path d="M18.4868 7.1344H16.3247V1.51278C16.3247 0.323593 15.0274 -0.433164 14.0544 0.107377L0.7571 7.45873C-0.323981 7.99927 -0.323981 9.62089 0.7571 10.1614L14.0544 17.4047C15.1355 17.9452 16.3247 17.1885 16.3247 15.9993V10.3776H18.4868C27.2436 10.3776 34.4868 17.5128 34.4868 26.3776V59.9993H37.7301V26.3776C37.622 15.7831 29.0814 7.1344 18.4868 7.1344Z" fill="url(#svg_94ff1d3c-9c25-48e1-b326-e9190370c316_triage-icon-2)"></path>
</g>
<defs>
<lineargradient id="svg_db47f04c-6eb1-470f-a93a-f6a3a20e0738_triage-icon-1" x1="25.2829" y1="30.0153" x2="62.9375" y2="30.0153" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#FF9634"></stop>
<stop offset="0.2978" stop-color="#FE9B36"></stop>
<stop offset="0.6287" stop-color="#FBA83A"></stop>
<stop offset="0.9744" stop-color="#F6BE42"></stop>
<stop offset="1" stop-color="#F6C043"></stop>
</lineargradient>
<lineargradient id="svg_94ff1d3c-9c25-48e1-b326-e9190370c316_Intelligent Routing-icon-2" x1="0.000343121" y1="30.0141" x2="37.6546" y2="30.0141" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#FF9634"></stop>
<stop offset="0.2978" stop-color="#FE9B36"></stop>
<stop offset="0.6287" stop-color="#FBA83A"></stop>
<stop offset="0.9744" stop-color="#F6BE42"></stop>
<stop offset="1" stop-color="#F6C043"></stop>
</lineargradient>
<clippath id="svg_a56687ee-8a93-4622-87b5-682165bf7a35_clip0_903:4543">
<rect width="62.9189" height="60" fill="white"></rect>
</clippath>
</defs>
</svg>
<span class="acf-block-heading-with-chart-and-icons__chart-label c-mt-3 c-mt-md-2 text-uppercase fw-semibold font-size-9-14">Intelligent Routing</span>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="wrapper wrapper--big">&#13;
<div class="acf-block-heading-with-chart-and-icons__chart-img" data-anim="fade-up">&#13;
<svg version="1.1" id="main-chart" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewbox="0 0 306.6 306.6" style="enable-background:new 0 0 306.6 306.6" xml:space="preserve"><style></style><lineargradient id="svg_691d161d-28d0-4b3a-826c-40b0bd60e2d9_svg_86de7b81-5552-45de-b5e9-08db53ee8a4a_main-chart_1_" gradientunits="userSpaceOnUse" x1="102.257" y1="199.53" x2="21.641" y2="108.17" gradienttransform="matrix(1 0 0 -1 0 307.097)"><stop offset="0" style="stop-color:#FF70C6"></stop><stop offset="1" style="stop-color:#EC4A77"></stop></lineargradient><path class="st0" d="M82.4 253c-63-45-66-131-19.4-183.3"></path><lineargradient id="svg_200a1b92-3f20-46ab-8315-9ef172ea60e0_svg_94956815-cd21-4abc-b698-6db16eb7929f_main-chart_2_" gradientunits="userSpaceOnUse" x1="250.576" y1="50.758" x2="83.523" y2="60.311" gradienttransform="matrix(1 0 0 -1 0 307.097)"><stop offset="0" style="stop-color:#3866F5"></stop><stop offset="1" style="stop-color:#BD00FF"></stop></lineargradient><path class="st1" d="M248.4 231c-44 52.5-122.2 60-173.1 15.8"></path><lineargradient id="svg_357b728d-1d3f-43ee-aa29-bcd57514414b_svg_f0624cb9-f40d-4959-b57a-6655020e88a8_main-chart_3_" gradientunits="userSpaceOnUse" x1="201.547" y1="115.943" x2="279.26" y2="206.018" gradienttransform="matrix(1 0 0 -1 0 307.097)"><stop offset="0" style="stop-color:#F6C043"></stop><stop offset="1" style="stop-color:#FF9634"></stop></lineargradient><path class="st2" d="M233.9 60.5c50.9 44.2 56.4 121.2 12.2 172.1"></path><lineargradient id="svg_f2c790f0-2171-4a48-b9aa-795a29a65d92_svg_db00955b-6138-4738-a3c9-a88ee5087c73_main-chart_4_" gradientunits="userSpaceOnUse" x1="193.496" y1="200.4" x2="105.43" y2="281.617" gradienttransform="matrix(1 0 0 -1 0 307.097)"><stop offset="0" style="stop-color:#6BDAB6"></stop><stop offset="1" style="stop-color:#66E0F6"></stop></lineargradient><path class="st3" d="M62.9 70c45.8-49.4 124.6-52.8 174-7"></path><lineargradient id="svg_8673491f-eff2-43f1-9d90-1532ee4e997f_svg_9d09fd90-d938-445c-bea2-c815ca9448f0_main-chart_5_" gradientunits="userSpaceOnUse" x1="51.336" y1="233.72" x2="36.581" y2="96.015" gradienttransform="matrix(1 0 0 -1 0 307.097)"><stop offset="0" style="stop-color:#FF70C6"></stop><stop offset="1" style="stop-color:#EC4A77"></stop></lineargradient><path class="st4" d="M64.9 68C34.4 99.4 23.4 145.5 35 183.5"></path><path class="st5" d="M148.4 155.1v-5.2h-5.2V176c-.1.9-.5 1.7-1.1 2.3-.6.6-1.5.9-2.4.9-.9 0-1.7-.3-2.4-.9-.6-.6-1-1.4-1.1-2.3v-12.2c0-.9.4-1.8 1-2.5.7-.7 1.5-1 2.5-1h1.7v-5.2h-1.7c-2.3 0-4.5.9-6.2 2.6-1.6 1.6-2.5 3.8-2.5 6.2V176c0 2.3.9 4.5 2.6 6.2 1.6 1.6 3.8 2.6 6.2 2.6 2.3 0 4.5-.9 6.2-2.6 1.6-1.6 2.6-3.8 2.6-6.2v-20.9zM172.6 118.4h-20.7c-2.3 0-4.5.9-6.2 2.6-1.6 1.6-2.6 3.8-2.6 6.2V141.1h5.2v-13.9c0-.9.4-1.8 1-2.5.7-.7 1.5-1 2.5-1h20.7c.9.1 1.7.5 2.3 1.1.6.6.9 1.5.9 2.4 0 .9-.3 1.7-.9 2.4-.6.6-1.4 1-2.3 1.1h-22.4v5.2h22.4c2.3 0 4.5-.9 6.2-2.6 1.6-1.6 2.6-3.8 2.6-6.2s-.9-4.5-2.6-6.2c-1.5-1.5-3.7-2.5-6.1-2.5z"></path><path class="st5" d="M164.1 142.9h-24.4c-.9 0-1.8-.4-2.5-1-.7-.7-1-1.5-1-2.5s.4-1.8 1-2.5c.7-.7 1.5-1 2.5-1h1.7v-5.2h-1.7c-2.3.1-4.4 1-6 2.7-1.6 1.6-2.4 3.8-2.4 6.1s.9 4.4 2.4 6.1c1.6 1.6 3.7 2.6 6 2.7h24.4c.9.1 1.7.5 2.3 1.1.6.6.9 1.5.9 2.4 0 .9-.3 1.7-.9 2.4-.6.6-1.4 1-2.3 1.1h-13.9v5.2h13.9c2.3-.1 4.4-1 6-2.7 1.6-1.6 2.5-3.8 2.5-6.1s-.9-4.4-2.5-6.1c-1.6-1.7-3.7-2.7-6-2.7z"></path></svg> </div>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="wrapper wrapper--2">&#13;
<div class="d-flex flex-column align-items-center justify-content-center acf-block-heading-with-chart-and-icons__chart-icon acf-block-heading-with-chart-and-icons__chart-icon--2" data-anim="fade-up">&#13;

<svg width="68" height="60" viewbox="0 0 68 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#svg_0fb24f6b-2c26-4149-b9ac-52dd3094b640_assist-icon-2)">
<path d="M39.6 3.49091C38.5091 1.30909 36.3273 0 33.9273 0C31.5273 0 29.3455 1.30909 28.2546 3.49091L0 60H3.70909L31.2 5.01818C31.7455 3.92727 32.7273 3.27273 33.9273 3.27273C35.1273 3.27273 36.2182 3.92727 36.6546 5.01818L64.2546 60H67.9637L39.6 3.49091ZM33.9273 40.8C27.2727 40.8 21.8182 46.2545 21.8182 52.9091V60H46.0364V52.9091C46.0364 46.2545 40.5818 40.8 33.9273 40.8ZM40.5818 30.9818C40.5818 27.3818 37.6364 24.3273 33.9273 24.3273C30.2182 24.3273 27.2727 27.2727 27.2727 30.9818C27.2727 34.5818 30.2182 37.6364 33.9273 37.6364C37.6364 37.6364 40.5818 34.5818 40.5818 30.9818Z" fill="url(#svg_7f9e0281-0147-4cb0-92c2-47d16c8bb393_assist-icon-1)"></path>
</g>
<defs>
<lineargradient id="svg_7f9e0281-0147-4cb0-92c2-47d16c8bb393_assist-icon-1" x1="33.9453" y1="60.0043" x2="33.9453" y2="4.29184e-05" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#7B33FB"></stop>
<stop offset="0.2429" stop-color="#961EFD"></stop>
<stop offset="0.5088" stop-color="#AB0EFE"></stop>
<stop offset="0.7654" stop-color="#B903FF"></stop>
<stop offset="1" stop-color="#BD00FF"></stop>
</lineargradient>
<clippath id="svg_0fb24f6b-2c26-4149-b9ac-52dd3094b640_assist-icon-2">
<rect width="67.8546" height="60" fill="white"></rect>
</clippath>
</defs>
</svg>
<span class="acf-block-heading-with-chart-and-icons__chart-label c-mt-3 c-mt-md-2 text-uppercase fw-semibold font-size-9-14">Live Chat</span>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="wrapper wrapper--3">&#13;
<div class="d-flex flex-column align-items-center justify-content-center acf-block-heading-with-chart-and-icons__chart-icon acf-block-heading-with-chart-and-icons__chart-icon--3" data-anim="fade-up">&#13;

<svg width="63" height="60" viewbox="0 0 63 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#svg_9f384c98-06a8-4941-aa6d-b02ad1afadb3_analyze-icon-2)">
<path d="M32.875 1.08499V58.915C32.875 59.566 33.4175 60 33.96 60C50.1264 59.4575 62.9293 46.2206 62.9293 30.0543C62.9293 13.7794 50.1264 0.542495 34.0685 0C33.4175 0 32.875 0.433996 32.875 1.08499Z" fill="url(#svg_77812925-117f-4bf7-99dd-d5edb85a7c38_analyze-icon-1)"></path>
<path d="M27.4497 24.9538V5.31546C27.4497 4.66447 26.9072 4.23047 26.3647 4.23047C12.5854 4.77296 1.62695 16.1654 1.62695 30.0533C1.62695 35.6952 3.47144 40.9032 6.50941 45.1346C6.94341 45.6771 7.7029 45.7856 8.2454 45.2431L27.2327 25.7133C27.3412 25.4963 27.4497 25.2793 27.4497 24.9538Z" stroke="#EC4A77" stroke-width="3" stroke-miterlimit="10"></path>
<path d="M12.9118 51.43C16.7093 54.034 21.3747 55.6615 26.2572 55.8785C26.9082 55.8785 27.3422 55.4445 27.3422 54.7935V37.4337C27.3422 36.4572 26.1487 35.9147 25.4977 36.6742L12.8033 49.694C12.3693 50.2365 12.3693 50.996 12.9118 51.43Z" stroke="#EC4A77" stroke-width="3" stroke-miterlimit="10"></path>
</g>
<defs>
<lineargradient id="svg_77812925-117f-4bf7-99dd-d5edb85a7c38_analyze-icon-1" x1="32.9284" y1="30.021" x2="62.9694" y2="30.021" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#EC4A77"></stop>
<stop offset="0.5345" stop-color="#F65D9F"></stop>
<stop offset="1" stop-color="#FF70C6"></stop>
</lineargradient>
<clippath id="svg_9f384c98-06a8-4941-aa6d-b02ad1afadb3_analyze-icon-2">
<rect width="62.9295" height="60" fill="white"></rect>
</clippath>
</defs>
</svg>
<span class="acf-block-heading-with-chart-and-icons__chart-label c-mt-3 c-mt-md-2 text-uppercase fw-semibold font-size-9-14">Insights</span>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-timeline-block_a9a849242a0f3080242f1c0e0a8f5cd2" class="acf-block-timeline c-mt-10 c-pb-9 overflow-hidden" data-anim="fade-up">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-11 d-flex justify-content-center">&#13;
<div class="acf-block-timeline__circle-with-arrow bg-blue d-flex align-items-center justify-content-center">&#13;
<svg width="19" height="19" viewbox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<path d="M16.5177 8.25684L17.3415 9.08066C17.6903 9.42949 17.6903 9.99356 17.3415 10.3387L10.1312 17.5527C9.78233 17.9016 9.21826 17.9016 8.87315 17.5527L1.65908 10.3387C1.31025 9.98984 1.31025 9.42578 1.65908 9.08066L2.48291 8.25684C2.83545 7.9043 3.41064 7.91172 3.75576 8.27168L8.01592 12.7434V2.07812C8.01592 1.58457 8.41299 1.1875 8.90654 1.1875H10.094C10.5876 1.1875 10.9847 1.58457 10.9847 2.07812V12.7434L15.2448 8.27168C15.5899 7.90801 16.1651 7.90059 16.5177 8.25684Z" fill="#2F2F2F"></path>&#13;
</svg>&#13;
&#13;
<div class="acf-block-timeline__circle-with-arrow-line" id="timeline-moving-element">&#13;
<svg width="2" height="4000" viewbox="0 0 2 4000" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<path d="M1 0L1.00011 4000" stroke="#C4C4C4" stroke-dasharray="8 8"></path>&#13;
</svg>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="row c-mt-9 c-pt-9 c-pt-lg-7">&#13;
&#13;
&#13;
<div class="col-12 col-lg-4 offset-lg-1 ">&#13;
<div class="d-flex flex-column align-items-start">&#13;
&#13;
&#13;
<div class="acf-block-timeline__icon ">&#13;

<svg width="68" height="68" viewbox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M36.3397 36.0786H23.1897C20.0707 36.0786 17.0795 34.8396 14.8741 32.6342C12.6687 30.4287 11.4297 27.4375 11.4297 24.3186C11.4297 21.1996 12.6687 18.2084 14.8741 16.003C17.0795 13.7976 20.0707 12.5586 23.1897 12.5586H53.6097V16.5586H23.1897C21.1316 16.5586 19.1578 17.3762 17.7025 18.8314C16.2473 20.2867 15.4297 22.2605 15.4297 24.3186C15.4297 26.3767 16.2473 28.3505 17.7025 29.8057C19.1578 31.261 21.1316 32.0786 23.1897 32.0786H36.3397V36.0786Z" fill="#66E0F6"></path>
<path d="M45.8097 55.5892H14.3896V51.5892H45.8097C46.8515 51.6266 47.8902 51.4537 48.8637 51.0809C49.8372 50.708 50.7257 50.1428 51.4759 49.419C52.2262 48.6952 52.823 47.8276 53.2305 46.8681C53.6381 45.9085 53.8482 44.8767 53.8482 43.8342C53.8482 42.7917 53.6381 41.7599 53.2305 40.8004C52.823 39.8408 52.2262 38.9733 51.4759 38.2495C50.7257 37.5257 49.8372 36.9604 48.8637 36.5876C47.8902 36.2147 46.8515 36.0418 45.8097 36.0792H45.6396V32.0792H45.8097C47.3822 32.0333 48.9479 32.3035 50.4142 32.8736C51.8805 33.4437 53.2175 34.3022 54.346 35.3983C55.4745 36.4944 56.3716 37.8057 56.9843 39.2548C57.5969 40.7038 57.9125 42.261 57.9125 43.8342C57.9125 45.4074 57.5969 46.9646 56.9843 48.4137C56.3716 49.8627 55.4745 51.1741 54.346 52.2702C53.2175 53.3662 51.8805 54.2248 50.4142 54.7949C48.9479 55.365 47.3822 55.6351 45.8097 55.5892Z" fill="#66E0F6"></path>
<path d="M22.3499 53.4338C22.3499 49.0348 18.7839 45.4688 14.3849 45.4688C9.98597 45.4688 6.41992 49.0348 6.41992 53.4338C6.41992 57.8327 9.98597 61.3988 14.3849 61.3988C18.7839 61.3988 22.3499 57.8327 22.3499 53.4338Z" fill="url(#svg_b623de07-edfe-4c7c-b6ec-546a443b24d8_solve-icon-1)"></path>
<path d="M37.36 26.1094H30.57C28.0461 26.1094 26 28.1554 26 30.6794V37.4694C26 39.9933 28.0461 42.0394 30.57 42.0394H37.36C39.8839 42.0394 41.93 39.9933 41.93 37.4694V30.6794C41.93 28.1554 39.8839 26.1094 37.36 26.1094Z" fill="url(#svg_82c1ed23-98b6-4604-8579-7f6ebcaeba4e_solve-icon-2)"></path>
<path d="M61.5696 14.5666C61.5696 10.1676 58.0036 6.60156 53.6046 6.60156C49.2057 6.60156 45.6396 10.1676 45.6396 14.5666C45.6396 18.9655 49.2057 22.5316 53.6046 22.5316C58.0036 22.5316 61.5696 18.9655 61.5696 14.5666Z" fill="url(#svg_7f7f719b-e488-429f-a716-9f90bee8357e_solve-icon-3)"></path>
<defs>
<lineargradient id="svg_b623de07-edfe-4c7c-b6ec-546a443b24d8_solve-icon-1" x1="6.41992" y1="53.4388" x2="22.3599" y2="53.4388" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6"></stop>
<stop offset="1" stop-color="#66E0F6"></stop>
</lineargradient>
<lineargradient id="svg_82c1ed23-98b6-4604-8579-7f6ebcaeba4e_solve-icon-2" x1="440.18" y1="569.004" x2="694.104" y2="569.004" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6"></stop>
<stop offset="1" stop-color="#66E0F6"></stop>
</lineargradient>
<lineargradient id="svg_7f7f719b-e488-429f-a716-9f90bee8357e_solve-icon-3" x1="772.685" y1="238.542" x2="1026.61" y2="238.542" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#6BDAB6"></stop>
<stop offset="1" stop-color="#66E0F6"></stop>
</lineargradient>
</defs>
</svg>
</div>&#13;
&#13;
&#13;
<h4 class="font-size-36 c-mt-6 c-mt-lg-3" id="solve-3">AI Co-Pilot</h4>&#13;
<p class="font-size-24 c-mt-6 c-mt-lg-3 acf-block-timeline__text">Autonomous, automatic policy creation and ticket resolution across multiple channels.</p>&#13;
<strong class="font-size-18 fw-normal c-mt-4 c-mt-lg-2">Benefits</strong>&#13;
<ul class="font-size-18">&#13;
<li>Lower cost per ticket</li>&#13;
<li>Faster time to resolution</li>&#13;
<li>Happier customers</li>&#13;
</ul>&#13;
<a class="crunch-button crunch-button__full-background crunch-button__full-background--medium crunch-button__full-background--green-gradient c-mt-2" href="https://www.elloe.ai/ai-co-pilot/">&#13;
AI Co-Pilot </a>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-lg-5 c-mt-9 c-mt-lg-0 offset-lg-1 position-relative acf-block-timeline__animation-wrapper--0">&#13;
<div class>&#13;
&#13;
&#13;
<div class="lottie lottie--blue lottie--alt d-grid c-mt-8 c-mt-md-0">&#13;
<div class="lottie__bg">&#13;
<svg width="486" height="470" viewbox="0 0 486 470" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<circle cx="255" cy="235" r="230.5" stroke="#C4C4C4" stroke-dasharray="8 8"></circle>&#13;
<path d="M136 0C61.3782 0 9.46912e-08 62.2808 2.09814e-07 138C45.3156 138 90.6844 138 136 138C136 92.018 136 45.982 136 0Z" fill="#6BDAB6"></path>&#13;
<mask id="svg_423e2aae-4e0b-4d60-81f1-4afd403fdc6c_mask0_903:2074" style="mask-type:alpha" maskunits="userSpaceOnUse" x="339" y="339" width="133" height="131">&#13;
<path d="M471.506 404.5C471.506 368.325 441.843 339 405.253 339C368.662 339 339 368.325 339 404.5C339 440.675 368.662 470 405.253 470C424.851 470 471.506 470 471.506 470C471.506 470 471.506 421.299 471.506 404.5Z" fill="#68E0F7"></path>&#13;
</mask>&#13;
<g mask="url(#svg_423e2aae-4e0b-4d60-81f1-4afd403fdc6c_mask0_903:2074)">&#13;
<rect x="471.505" y="474.812" width="133.628" height="156.078" transform="rotate(-180 471.505 474.812)" fill="#66E0F6"></rect>&#13;
</g>&#13;
</svg>&#13;
</div>&#13;
<div class="lottie__animation c-my-9 c-my-lg-0 js-lottie" data-animateonscroll="true" data-loop="true" data-path="https://forethought.ai/wp-content/themes/forethought/lottie/animations-themes/animations/blue/animation.json"></div>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
</div>&#13;
<div class="row c-mt-9 c-pt-9 c-pt-lg-7">&#13;
&#13;
&#13;
<div class="col-12 col-lg-4 offset-lg-1 order-lg-2">&#13;
<div class="d-flex flex-column align-items-start">&#13;
&#13;
&#13;
<div class="acf-block-timeline__icon c-mt-9">&#13;

<svg width="63" height="60" viewbox="0 0 63 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#svg_9143817f-73ec-41be-b1cf-cc71cd1defa0_clip0_903:4543)">
<path d="M62.162 7.46L48.9728 0.216752C47.8918 -0.323789 46.7026 0.432968 46.7026 1.62216V7.24378H44.6485C34.0539 7.24378 25.4053 15.8924 25.4053 26.487V60.1086H28.6485V26.3789C28.6485 17.5141 35.7837 10.3789 44.6485 10.3789H46.7026V16.0005C46.7026 17.1897 47.9999 17.9465 48.9728 17.4059L62.162 10.1627C63.2431 9.62216 63.2431 8.00054 62.162 7.46Z" fill="url(#svg_aa4e78c5-91e9-4cbd-885e-bdcb60abb120_triage-icon-1)"></path>
<path d="M40.8645 59.9987H31.1347V26.3771C31.1347 19.3501 25.405 13.6204 18.378 13.6204H16.2158V3.89062H18.378C30.8104 3.89062 40.8645 13.9447 40.8645 26.3771V59.9987Z" fill="white"></path>
<path d="M18.4868 7.1344H16.3247V1.51278C16.3247 0.323593 15.0274 -0.433164 14.0544 0.107377L0.7571 7.45873C-0.323981 7.99927 -0.323981 9.62089 0.7571 10.1614L14.0544 17.4047C15.1355 17.9452 16.3247 17.1885 16.3247 15.9993V10.3776H18.4868C27.2436 10.3776 34.4868 17.5128 34.4868 26.3776V59.9993H37.7301V26.3776C37.622 15.7831 29.0814 7.1344 18.4868 7.1344Z" fill="url(#svg_e9d4e258-c477-4944-a95c-c1b2f5f7215d_triage-icon-2)"></path>
</g>
<defs>
<lineargradient id="svg_aa4e78c5-91e9-4cbd-885e-bdcb60abb120_triage-icon-1" x1="25.2829" y1="30.0153" x2="62.9375" y2="30.0153" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#FF9634"></stop>
<stop offset="0.2978" stop-color="#FE9B36"></stop>
<stop offset="0.6287" stop-color="#FBA83A"></stop>
<stop offset="0.9744" stop-color="#F6BE42"></stop>
<stop offset="1" stop-color="#F6C043"></stop>
</lineargradient>
<lineargradient id="svg_e9d4e258-c477-4944-a95c-c1b2f5f7215d_triage-icon-2" x1="0.000343121" y1="30.0141" x2="37.6546" y2="30.0141" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#FF9634"></stop>
<stop offset="0.2978" stop-color="#FE9B36"></stop>
<stop offset="0.6287" stop-color="#FBA83A"></stop>
<stop offset="0.9744" stop-color="#F6BE42"></stop>
<stop offset="1" stop-color="#F6C043"></stop>
</lineargradient>
<clippath id="svg_9143817f-73ec-41be-b1cf-cc71cd1defa0_clip0_903:4543">
<rect width="62.9189" height="60" fill="white"></rect>
</clippath>
</defs>
</svg>
</div>&#13;
&#13;
&#13;
<h4 class="font-size-36 c-mt-6 c-mt-lg-3" id="triage-4">Intelligent Routing</h4>&#13;
<p class="font-size-24 c-mt-6 c-mt-lg-3 acf-block-timeline__text">Instantly enrich cases with sentiment and intent, then prioritize and route based on urgency.</p>&#13;
<strong class="font-size-18 fw-normal c-mt-4 c-mt-lg-2">Benefits</strong>&#13;
<ul class="font-size-18">&#13;
<li>Faster response time</li>&#13;
<li>Fewer manual tasks</li>&#13;
</ul>&#13;
<a class="crunch-button crunch-button__full-background crunch-button__full-background--medium crunch-button__full-background--yellow-gradient c-mt-2" href="https://www.elloe.ai/intelligent-routing/">&#13;
Intelligent Routing </a>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-lg-5 c-mt-9 c-pt-6 c-pt-lg-0  c-mt-lg-0 offset-lg-0 position-relative acf-block-timeline__animation-wrapper--1">&#13;
<div class="c-mt-lg-9 c-pt-lg-7">&#13;
&#13;
&#13;
<div class="lottie lottie--yellow lottie--alt lottie--kick-1 d-grid c-mt-8 c-mt-md-0">&#13;
<div class="lottie__bg">&#13;
<svg width="495" height="351" viewbox="0 0 495 351" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<circle cx="382.5" cy="146.5" r="112" stroke="#C4C4C4" stroke-dasharray="8 8"></circle>&#13;
<circle cx="175.195" cy="175.198" r="175.103" transform="rotate(-90 175.195 175.198)" fill="#FF9634"></circle>&#13;
</svg>&#13;
</div>&#13;
<div class="lottie__animation c-my-9 c-my-lg-0 js-lottie" data-animateonscroll="true" data-loop="true" data-path="https://forethought.ai/wp-content/themes/forethought/lottie/animations-themes/animations/yellow/animation.json"></div>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
</div>&#13;
<div class="row c-mt-9 c-pt-9 c-pt-lg-7">&#13;
&#13;
&#13;
<div class="col-12 col-lg-4 offset-lg-1 ">&#13;
<div class="d-flex flex-column align-items-start">&#13;
&#13;
&#13;
<div class="acf-block-timeline__icon c-mt-9">&#13;

<svg width="68" height="60" viewbox="0 0 68 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#svg_b77665ca-0d2c-4db6-bbd4-8e7856047685_assist-icon-2)">
<path d="M39.6 3.49091C38.5091 1.30909 36.3273 0 33.9273 0C31.5273 0 29.3455 1.30909 28.2546 3.49091L0 60H3.70909L31.2 5.01818C31.7455 3.92727 32.7273 3.27273 33.9273 3.27273C35.1273 3.27273 36.2182 3.92727 36.6546 5.01818L64.2546 60H67.9637L39.6 3.49091ZM33.9273 40.8C27.2727 40.8 21.8182 46.2545 21.8182 52.9091V60H46.0364V52.9091C46.0364 46.2545 40.5818 40.8 33.9273 40.8ZM40.5818 30.9818C40.5818 27.3818 37.6364 24.3273 33.9273 24.3273C30.2182 24.3273 27.2727 27.2727 27.2727 30.9818C27.2727 34.5818 30.2182 37.6364 33.9273 37.6364C37.6364 37.6364 40.5818 34.5818 40.5818 30.9818Z" fill="url(#svg_f2099b43-9b6e-4472-acd6-37ce30a2ca47_assist-icon-1)"></path>
</g>
<defs>
<lineargradient id="svg_f2099b43-9b6e-4472-acd6-37ce30a2ca47_assist-icon-1" x1="33.9453" y1="60.0043" x2="33.9453" y2="4.29184e-05" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#7B33FB"></stop>
<stop offset="0.2429" stop-color="#961EFD"></stop>
<stop offset="0.5088" stop-color="#AB0EFE"></stop>
<stop offset="0.7654" stop-color="#B903FF"></stop>
<stop offset="1" stop-color="#BD00FF"></stop>
</lineargradient>
<clippath id="svg_b77665ca-0d2c-4db6-bbd4-8e7856047685_assist-icon-2">
<rect width="67.8546" height="60" fill="white"></rect>
</clippath>
</defs>
</svg>
</div>&#13;
&#13;
&#13;
<h4 class="font-size-36 c-mt-6 c-mt-lg-3" id="assist-5">Live Chat</h4>&#13;
<p class="font-size-24 c-mt-6 c-mt-lg-3 acf-block-timeline__text">Harness the power of generative AI&#x2014;powered by Large Language Models (LLMs) trained on your data&#x2014;to ramp agents faster and empower them with relevant knowledge and suggested responses.</p>&#13;
<strong class="font-size-18 fw-normal c-mt-4 c-mt-lg-2">Benefits</strong>&#13;
<ul class="font-size-18">&#13;
<li>Faster response time</li>&#13;
<li>Higher agent productivity</li>&#13;
</ul>&#13;
<a class="crunch-button crunch-button__full-background crunch-button__full-background--medium crunch-button__full-background--purple-gradient c-mt-2" href="https://www.elloe.ai/live-chat/">&#13;
Live Chat </a>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-lg-5 c-mt-9 c-pt-6 c-pt-lg-0  c-mt-lg-0 offset-lg-1 position-relative acf-block-timeline__animation-wrapper--2">&#13;
<div class="c-mt-lg-9 c-pt-lg-7">&#13;
&#13;
&#13;
<div class="lottie lottie--purple lottie--alt d-grid c-mt-8 c-mt-md-0">&#13;
<div class="lottie__bg">&#13;
<svg width="499" height="461" viewbox="0 0 499 461" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<circle cx="145" cy="316" r="144.5" stroke="#C4C4C4" stroke-dasharray="8 8"></circle>&#13;
<path d="M498.823 127.748C498.823 57.6541 441.547 0 371.912 0C302.277 0 245 57.6541 245 127.748C329.624 127.748 414.199 127.748 498.823 127.748Z" fill="#3866F5"></path>&#13;
<path d="M498.823 421.748C498.823 351.654 441.547 294 371.912 294C302.277 294 245 351.654 245 421.748C329.624 421.748 414.199 421.748 498.823 421.748Z" fill="#BD00FF"></path>&#13;
<path d="M498.823 274.748C498.823 204.654 441.547 147 371.912 147C302.277 147 245 204.654 245 274.748C329.624 274.748 414.199 274.748 498.823 274.748Z" fill="#7B33FB"></path>&#13;
</svg>&#13;
</div>&#13;
<div class="lottie__animation c-my-9 c-my-lg-0 js-lottie" data-animateonscroll="true" data-loop="true" data-path="https://forethought.ai/wp-content/themes/forethought/lottie/animations-themes/animations/purple/animation.json"></div>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
</div>&#13;
<div class="row c-mt-9 c-pt-9 c-pt-lg-7">&#13;
&#13;
&#13;
<div class="col-12 col-lg-4 offset-lg-1 order-lg-2">&#13;
<div class="d-flex flex-column align-items-start">&#13;
&#13;
&#13;
<div class="acf-block-timeline__icon c-mt-9">&#13;

<svg width="63" height="60" viewbox="0 0 63 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#svg_6241422c-9df9-4d59-863a-56c943945e1e_analyze-icon-2)">
<path d="M32.875 1.08499V58.915C32.875 59.566 33.4175 60 33.96 60C50.1264 59.4575 62.9293 46.2206 62.9293 30.0543C62.9293 13.7794 50.1264 0.542495 34.0685 0C33.4175 0 32.875 0.433996 32.875 1.08499Z" fill="url(#svg_02ce7724-955a-4a1d-8062-240624db4696_analyze-icon-1)"></path>
<path d="M27.4497 24.9538V5.31546C27.4497 4.66447 26.9072 4.23047 26.3647 4.23047C12.5854 4.77296 1.62695 16.1654 1.62695 30.0533C1.62695 35.6952 3.47144 40.9032 6.50941 45.1346C6.94341 45.6771 7.7029 45.7856 8.2454 45.2431L27.2327 25.7133C27.3412 25.4963 27.4497 25.2793 27.4497 24.9538Z" stroke="#EC4A77" stroke-width="3" stroke-miterlimit="10"></path>
<path d="M12.9118 51.43C16.7093 54.034 21.3747 55.6615 26.2572 55.8785C26.9082 55.8785 27.3422 55.4445 27.3422 54.7935V37.4337C27.3422 36.4572 26.1487 35.9147 25.4977 36.6742L12.8033 49.694C12.3693 50.2365 12.3693 50.996 12.9118 51.43Z" stroke="#EC4A77" stroke-width="3" stroke-miterlimit="10"></path>
</g>
<defs>
<lineargradient id="svg_02ce7724-955a-4a1d-8062-240624db4696_analyze-icon-1" x1="32.9284" y1="30.021" x2="62.9694" y2="30.021" gradientunits="userSpaceOnUse">
<stop offset="0" stop-color="#EC4A77"></stop>
<stop offset="0.5345" stop-color="#F65D9F"></stop>
<stop offset="1" stop-color="#FF70C6"></stop>
</lineargradient>
<clippath id="svg_6241422c-9df9-4d59-863a-56c943945e1e_analyze-icon-2">
<rect width="62.9295" height="60" fill="white"></rect>
</clippath>
</defs>
</svg>
</div>&#13;
&#13;
&#13;
<h4 class="font-size-36 c-mt-6 c-mt-lg-3" id="discover-6">Insights</h4>&#13;
<p class="font-size-24 c-mt-6 c-mt-lg-3 acf-block-timeline__text">Use generative AI to recommend and optimize customer service workflows, track performance and ROI, and instantly improve time to resolution and lower cost.</p>&#13;
<strong class="font-size-18 fw-normal c-mt-4 c-mt-lg-2">Benefits</strong>&#13;
<ul class="font-size-18">&#13;
<li>Measure ROI instantly</li>&#13;
<li>Identify and resolve gaps</li>&#13;
<li>Track performance in real time</li>&#13;
</ul>&#13;
<a class="crunch-button crunch-button__full-background crunch-button__full-background--medium crunch-button__full-background--pink-gradient c-mt-2" href="https://www.elloe.ai/insights">&#13;
Insights </a>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-lg-5 c-mt-9 c-pt-6 c-pt-lg-0  c-mt-lg-0 offset-lg-0 position-relative acf-block-timeline__animation-wrapper--3">&#13;
<div class="c-mt-lg-9 c-pt-lg-7">&#13;
&#13;
&#13;
<div class="lottie lottie--pink lottie--alt lottie--kick-1 d-grid c-mt-8 c-mt-md-0">&#13;
<div class="lottie__bg">&#13;
<svg width="522" height="545" viewbox="0 0 522 545" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<path d="M444 340L-1.64509e-05 340" stroke="#C4C4C4" stroke-dasharray="8 8"></path>&#13;
<path d="M230 545L230 101" stroke="#C4C4C4" stroke-dasharray="8 8"></path>&#13;
<path d="M522 0C435.856 0 365 70.4044 365 156C417.313 156 469.687 156 522 156C522 104.02 522 51.9797 522 0Z" fill="#EC4A77"></path>&#13;
<path d="M350 2.73701e-05C263.856 1.23524e-05 193 70.4044 193 156C245.313 156 297.687 156 350 156C350 104.02 350 51.9797 350 2.73701e-05Z" fill="#FF70C6"></path>&#13;
</svg>&#13;
</div>&#13;
<div class="lottie__animation c-my-9 c-my-lg-0 js-lottie" data-animateonscroll="true" data-loop="true" data-path="https://forethought.ai/wp-content/themes/forethought/lottie/animations-themes/animations/pink/animation.json"></div>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
<section id="acf-block-services-introduction-block_b3cdb268534fd7becd901080e9b2226e" class="acf-block-services-introduction c-mt-0 c-pt-lg-7 c-pb-lg-10 bg-secondary">&#13;
<div class="container" data-anim="fade-up">&#13;
<div class="row">&#13;
<div class="col-lg-6">&#13;
&#13;
&#13;
<h2 class="h3 text-white c-pr-xxl-8 c-mt-lg-8" id="forethoughts-7">Elloe&#x2019;s generative customer support AI streamlines CX for teams in any industry.</h2>&#13;
&#13;
&#13;
&#13;
<div class="entry-content font-weight-medium text-gray-2 c-mt-only-3">&#13;
<p>From E-commerce to SaaS to FinTech and more,Elloe &#x2019;s generative AI platform for customer service helps companies maximize ROI and do more with less.</p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://www.elloe.ai/industries/" target="_self" class="crunch-button crunch-button__outline crunch-button__outline--white-color c-mt-6">Who we serve</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-lg-9 c-mt-only-5 mt-lg-0 order-lg-3">&#13;
<div class="row">&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="col-md-4 c-mt-only-5" data-anim="fade-up-stagger">&#13;
<a href="https://www.elloe.ai/retail-and-e-commerce/" target="_self" class="single-service d-block c-pt-5 c-pt-lg-4">&#13;
<span class="single-service__title d-inline-block position-relative c-mr-only-4 animated-border-bottom text-white">E-commerce</span>&#13;
<div class="single-service__description entry-content c-mt-3">&#13;
<p>Nobody wants to wait on hold just to check shipping status. Instantly resolve common customer service tickets with AI to save support costs and boost CSAT.</p>
</div>&#13;
</a>&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="col-md-4 c-mt-only-5" data-anim="fade-up-stagger">&#13;
<a href="https://www.elloe.ai/saas/" target="_self" class="single-service d-block c-pt-5 c-pt-lg-4">&#13;
<span class="single-service__title d-inline-block position-relative c-mr-only-4 animated-border-bottom text-white">SaaS</span>&#13;
<div class="single-service__description entry-content c-mt-3">&#13;
<p>Resolve simple cases automatically, and instantly route complex or high-priority support inquiries to the right agent.</p>
</div>&#13;
</a>&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="col-md-4 c-mt-only-5" data-anim="fade-up-stagger">&#13;
<a href="https://www.elloe.ai/financial-services/"  target="_self" class="single-service d-block c-pt-5 c-pt-lg-4">&#13;
<span class="single-service__title d-inline-block position-relative c-mr-only-4 animated-border-bottom text-white">FinTech</span>&#13;
<div class="single-service__description entry-content c-mt-3">&#13;
<p>Customers want instant answers and actions. Empower them to self-serve, and enable agents with the context they need to provide fast resolutions.</p>
</div>&#13;
</a>&#13;
</div>&#13;
&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="col-lg-6 c-mt-only-7 c-mt-lg-0">&#13;
<img loading="lazy" decoding="async" width="800" height="668" src="https://forethought.ai/wp-content/uploads/2021/10/img__services-2x-800x668.png" class="acf-block-services-introduction__image d-block h-auto w-100 lazyload mx-md-auto mx-lg-0" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2021/10/img__services-2x-800x668.png 800w, https://forethought.ai/wp-content/uploads/2021/10/img__services-2x.png 1033w" sizes="(max-width: 800px) 100vw, 800px"> </div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
</div></div></div></div>&#13;
&#13;
&#13;
<section id="acf-block-logos-block_a02a1191f6cfaf5bffb91d11947dc6f1" class="acf-block-logos c-mt-10" data-anim="fade-in">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-12">&#13;
&#13;
&#13;
<h2 class="acf-block-featured-logos__title text-center line-height-1-6 font-size-18 fw-semibold font-family-base" id="as-featured-in-8">As featured in</h2>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="row justify-content-center">&#13;
&#13;
&#13;
&#13;
<div class="c-mt-7 col-6 col-md-4 d-flex align-items-center justify-content-center col-lg-3 acf-block-logos__column-logo-wrapper text-center acf-block-logos__column-logo-wrapper--with-styles" style="--image-width: 6.5rem; --image-mobile-width: 5.2rem;">&#13;
&#13;
&#13;
&#13;
<a href="https://www.forbes.com/" target="_self" class="hover-opacity-0-75 d-inline-block" rel="noopener">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="208" height="76" src="https://forethought.ai/wp-content/uploads/2021/10/forbes.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="c-mt-7 col-6 col-md-4 d-flex align-items-center justify-content-center col-lg-3 acf-block-logos__column-logo-wrapper text-center acf-block-logos__column-logo-wrapper--with-styles" style="--image-width: 6.188rem; --image-mobile-width: 4.9504rem;">&#13;
&#13;
&#13;
&#13;
<a href="https://www.inc.com/" target="_self" class="hover-opacity-0-75 d-inline-block" rel="noopener">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="198" height="70" src="https://forethought.ai/wp-content/uploads/2021/10/inc.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="c-mt-7 col-6 col-md-4 d-flex align-items-center justify-content-center col-lg-3 acf-block-logos__column-logo-wrapper text-center acf-block-logos__column-logo-wrapper--with-styles" style="--image-width: 12.375rem; --image-mobile-width: 9.9rem;">&#13;
&#13;
&#13;
&#13;
<a href="https://techcrunch.com/" target="_self" class="hover-opacity-0-75 d-inline-block" rel="noopener">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="446" height="80" src="https://forethought.ai/wp-content/uploads/2021/10/tech-crunch.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="c-mt-7 col-6 col-md-4 d-flex align-items-center justify-content-center col-lg-3 acf-block-logos__column-logo-wrapper text-center acf-block-logos__column-logo-wrapper--with-styles" style="--image-width: 11.125rem; --image-mobile-width: 8.9rem;">&#13;
&#13;
&#13;
&#13;
<a href="https://www.entrepreneur.com/" target="_self" class="hover-opacity-0-75 d-inline-block" rel="noopener">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="356" height="94" src="https://forethought.ai/wp-content/uploads/2021/10/entrepreneur.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</section>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
</div></div></div></div>&#13;
&#13;
<section id="acf-block-testimonials-block_cde0354bc816d29c9ec4d1e39f39d5a6" class="acf-block-testimonials overflow-hidden js-testimonials-slider" data-anim="fade-up">&#13;
<div class="container position-relative c-pt-8">&#13;
&#13;
&#13;
<div class="row position-relative">&#13;
<div class="col-12 col-lg-9 c-px-lg-5 mx-auto text-center">&#13;
&#13;
<div class="acf-block-testimonials__tiny-slider crunch-tiny-slider c-pb-2">&#13;
<div class="acf-block-testimonials__row js-testimonials-slider-row d-flex">&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-item d-inline-flex flex-column align-items-center justify-content-center bg-white c-pt-8 c-pb-9 c-pt-md-5 c-pb-md-6 c-px-5 c-px-lg-7 tiny-slider-item text-center overflow-hidden">&#13;
&#13;
&#13;
&#13;
<h2 class="font-size-36 line-height-1-3" id="what-has-made-9">&#x201C;What has made Elloe resonate with customers is software that plugs into a company&#x2019;s sales and customer service software to learn how past issues were resolved and better predict what an individual ticket might be about.&#x201D;</h2>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-logo-wrapper c-mt-4  acf-block-testimonials__slider-logo-wrappe--with-styles" style="--image-width: 6.5rem; --image-mobile-width: 5.2rem;">&#13;
&#13;
<img loading="lazy" decoding="async" width="208" height="76" src="https://forethought.ai/wp-content/uploads/2021/10/forbes.png" class="lazyload adjustable-element d-block" alt data-lazy="true">&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__link mx-auto c-mt-6 c-mt-lg-4 c-pb-3 c-pb-md-5">&#13;
&#13;
<a href="https://www.forbes.com/sites/alexkonrad/2020/10/28/forethought-raises-17-million-from-investors-like-ashton-kutcher-and-diddy/?sh=4401a2fe46f0" target="_blank" rel="nofollow noopener" class="acf-block-testimonials__link text-light-black font-size-12 line-height-1-6 fw-bold d-inline-block hover-opacity-0-75">This Startup Raised $17 Million From Investors Like Ashton Kutcher And Diddy To Take On Customer Service With AI</a>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-item d-inline-flex flex-column align-items-center justify-content-center bg-white c-pt-8 c-pb-9 c-pt-md-5 c-pb-md-6 c-px-5 c-px-lg-7 tiny-slider-item text-center overflow-hidden">&#13;
&#13;
&#13;
&#13;
<h2 class="font-size-36 line-height-1-3" id="with-forethou-10">&#x201C;WithElloe , time-to-resolution can be drastically reduced, leading to better employee productivity and customer retention &#x2013; resulting in improved revenue.&#x201D;</h2>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-logo-wrapper c-mt-4  acf-block-testimonials__slider-logo-wrappe--with-styles" style="--image-width: 6.25rem; --image-mobile-width: 5rem;">&#13;
&#13;
<img loading="lazy" decoding="async" width="198" height="70" src="https://forethought.ai/wp-content/uploads/2021/10/inc.png" class="lazyload adjustable-element d-block" alt data-lazy="true">&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__link mx-auto c-mt-6 c-mt-lg-4 c-pb-3 c-pb-md-5">&#13;
&#13;
<a href="https://www.inc.com/kenny-kline/how-forethought-is-creating-ai-powered-solutions-for-modern-workflow.html" target="_blank" rel="nofollow noopener" class="acf-block-testimonials__link text-light-black font-size-12 line-height-1-6 fw-bold d-inline-block hover-opacity-0-75">How Elloe is Creating the A.I.-Powered Solutions for the Modern Workflow</a>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-item d-inline-flex flex-column align-items-center justify-content-center bg-white c-pt-8 c-pb-9 c-pt-md-5 c-pb-md-6 c-px-5 c-px-lg-7 tiny-slider-item text-center overflow-hidden">&#13;
&#13;
&#13;
&#13;
<h2 class="font-size-36 line-height-1-3" id="when-a-ticket-11">&#x201C;When a ticket is coming in, it can predict whether it&#x2019;s a high-priority or low-priority ticket and which agent is best qualified to handle this question. And this all happens before the agent even touches the ticket.&#x201D;</h2>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-logo-wrapper c-mt-4  acf-block-testimonials__slider-logo-wrappe--with-styles" style="--image-width: 12.375rem; --image-mobile-width: 9.9rem;">&#13;
&#13;
<img loading="lazy" decoding="async" width="446" height="80" src="https://forethought.ai/wp-content/uploads/2021/10/tech-crunch.png" class="lazyload adjustable-element d-block" alt data-lazy="true">&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__link mx-auto c-mt-6 c-mt-lg-4 c-pb-3 c-pb-md-5">&#13;
&#13;
<a href="https://techcrunch.com/2019/09/05/battlefield-winner-forethought-adds-tool-to-automate-support-ticket-routing/" target="_blank" rel="nofollow noopener" class="acf-block-testimonials__link text-light-black font-size-12 line-height-1-6 fw-bold d-inline-block hover-opacity-0-75">Battlefield winner Elloe adds tool to automate support ticket routing</a>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-item d-inline-flex flex-column align-items-center justify-content-center bg-white c-pt-8 c-pb-9 c-pt-md-5 c-pb-md-6 c-px-5 c-px-lg-7 tiny-slider-item text-center overflow-hidden">&#13;
&#13;
&#13;
&#13;
<h2 class="font-size-36 line-height-1-3" id="designed-as-a-12">&#x201C;Designed as a plug-in enterprise solution that can be installed in two days and improve customer support time-to-resolution by up to 30 percent, [Forethought] gained widespread attention as it propelled Elloe to victory at the 2018 TechCrunch Disrupt Battlefield.&#x201D;</h2>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__slider-logo-wrapper c-mt-4  acf-block-testimonials__slider-logo-wrappe--with-styles" style="--image-width: 11.125rem; --image-mobile-width: 8.9rem;">&#13;
&#13;
<img loading="lazy" decoding="async" width="356" height="94" src="https://forethought.ai/wp-content/uploads/2021/10/entrepreneur.png" class="lazyload adjustable-element d-block" alt data-lazy="true">&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-testimonials__link mx-auto c-mt-6 c-mt-lg-4 c-pb-3 c-pb-md-5">&#13;
&#13;
<a href="https://www.entrepreneur.com/article/332749" target="_blank" rel="nofollow noopener" class="acf-block-testimonials__link text-light-black font-size-12 line-height-1-6 fw-bold d-inline-block hover-opacity-0-75">4 Ways Artificial Intelligence Is Shaping the Future for Businesses Big And Small</a>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
<div id="acf-block-spacer-block_4a2aad4aa6c23faf5e037048dcfd6e04" class="c-pt-10"></div>&#13;
&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-resources-block_be51c132ba7f8e2637fe01f2cfb57b91" class="acf-block-resources c-pt-10 c-pb-9 bg-blue-light" data-anim="fade-in">&#13;
<div class="acf-block-resources__slider js-acf-block-resources-slider">&#13;
&#13;
&#13;
<div class="js-acf-block-resources-slider-row">&#13;
&#13;
&#13;
&#13;
<section class="overflow-hidden">&#13;
<div class="container">&#13;
<div class="row justify-content-between">&#13;
<div class="col-md-6 col-lg-5 order-md-2">&#13;
&#13;
&#13;
<a class="hover-opacity-0-75">&#13;
&#13;
<img loading="lazy" decoding="async" width="600" height="600" src="https://forethought.ai/wp-content/uploads/2024/01/pexels-mart-production-7709179-600x600.jpg" class="border-radius-1-25 d-block h-auto w-100 tns-lazy-img" alt="Customer support agents on the phone" data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/01/pexels-mart-production-7709179-600x600.jpg 600w, https://forethought.ai/wp-content/uploads/2024/01/pexels-mart-production-7709179-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2024/01/pexels-mart-production-7709179-400x400.jpg 400w, https://forethought.ai/wp-content/uploads/2024/01/pexels-mart-production-7709179-445x445.jpg 445w, https://forethought.ai/wp-content/uploads/2024/01/pexels-mart-production-7709179-500x500.jpg 500w, https://forethought.ai/wp-content/uploads/2024/01/pexels-mart-production-7709179-250x250.jpg 250w" sizes="(max-width: 600px) 100vw, 600px">&#13;
</a>&#13;
&#13;
</div>&#13;
<div class="col-md-6 c-pb-only-8">&#13;
<span class="d-block text-uppercase fw-semibold font-size-12 letter-spacing-200 text-secondary c-mt-only-6 c-mt-md-0">RECENTLY POSTED RESOURCES</span>&#13;
<h2 class="c-mt-only-3" id="-13"><a class="animated-border-bottom text-secondary">Are You Truly Customer-Centric? Track These 6 Metrics to Find Out</a></h2>&#13;
&#13;
&#13;
<div class="c-mt-4 text-gray">&#13;
It&#x2019;s a story that&#x2019;s all too familiar. A company invests millions to create a product perfectly tailored to customer needs&#x2014;all the right features, all the right use cases, innovation all day long&#x2026;. </div>&#13;
&#13;
&#13;
&#13;
<a class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-only-4">Learn more</a>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="overflow-hidden">&#13;
<div class="container">&#13;
<div class="row justify-content-between">&#13;
<div class="col-md-6 col-lg-5 order-md-2">&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/putting-the-service-in-self-service-ai-that-solves-problems/" class="hover-opacity-0-75">&#13;
&#13;
<img loading="lazy" decoding="async" width="600" height="600" src="https://forethought.ai/wp-content/uploads/2024/04/pexels-christina-morillo-1181317-600x600.jpg" class="border-radius-1-25 d-block h-auto w-100 tns-lazy-img" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/04/pexels-christina-morillo-1181317-600x600.jpg 600w, https://forethought.ai/wp-content/uploads/2024/04/pexels-christina-morillo-1181317-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2024/04/pexels-christina-morillo-1181317-400x400.jpg 400w, https://forethought.ai/wp-content/uploads/2024/04/pexels-christina-morillo-1181317-445x445.jpg 445w, https://forethought.ai/wp-content/uploads/2024/04/pexels-christina-morillo-1181317-500x500.jpg 500w, https://forethought.ai/wp-content/uploads/2024/04/pexels-christina-morillo-1181317-250x250.jpg 250w" sizes="(max-width: 600px) 100vw, 600px">&#13;
</a>&#13;
&#13;
</div>&#13;
<div class="col-md-6 c-pb-only-8">&#13;
<span class="d-block text-uppercase fw-semibold font-size-12 letter-spacing-200 text-secondary c-mt-only-6 c-mt-md-0">RECENTLY POSTED RESOURCES</span>&#13;
<h2 class="c-mt-only-3" id="-14"><a href="https://forethought.ai/blog/putting-the-service-in-self-service-ai-that-solves-problems/" class="animated-border-bottom text-secondary">Putting the &#x2018;Service&#x2019; in Self-Service: AI that Solves Problems</a></h2>&#13;
&#13;
&#13;
<div class="c-mt-4 text-gray">&#13;
Artificial intelligence (AI) comes with a lot of baggage as the technology du jour. It can sometimes feel like what AI is meant to do and how it can help get lost&#x2026; </div>&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/putting-the-service-in-self-service-ai-that-solves-problems/" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-only-4">Learn more</a>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="overflow-hidden">&#13;
<div class="container">&#13;
<div class="row justify-content-between">&#13;
<div class="col-md-6 col-lg-5 order-md-2">&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/how-ai-transforms-customer-self-service-unraveling-the-power-of-intelligent-knowledge-bases/" class="hover-opacity-0-75">&#13;
&#13;
<img loading="lazy" decoding="async" width="600" height="600" src="https://forethought.ai/wp-content/uploads/2024/04/pexels-thisisengineering-3861969-600x600.jpg" class="border-radius-1-25 d-block h-auto w-100 tns-lazy-img" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/04/pexels-thisisengineering-3861969-600x600.jpg 600w, https://forethought.ai/wp-content/uploads/2024/04/pexels-thisisengineering-3861969-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2024/04/pexels-thisisengineering-3861969-400x400.jpg 400w, https://forethought.ai/wp-content/uploads/2024/04/pexels-thisisengineering-3861969-445x445.jpg 445w, https://forethought.ai/wp-content/uploads/2024/04/pexels-thisisengineering-3861969-500x500.jpg 500w, https://forethought.ai/wp-content/uploads/2024/04/pexels-thisisengineering-3861969-250x250.jpg 250w" sizes="(max-width: 600px) 100vw, 600px">&#13;
</a>&#13;
&#13;
</div>&#13;
<div class="col-md-6 c-pb-only-8">&#13;
<span class="d-block text-uppercase fw-semibold font-size-12 letter-spacing-200 text-secondary c-mt-only-6 c-mt-md-0">RECENTLY POSTED RESOURCES</span>&#13;
<h2 class="c-mt-only-3" id="-15"><a href="https://forethought.ai/blog/how-ai-transforms-customer-self-service-unraveling-the-power-of-intelligent-knowledge-bases/" class="animated-border-bottom text-secondary">How AI Transforms Customer Self-Service: Unraveling the Power of Intelligent Knowledge Bases</a></h2>&#13;
&#13;
&#13;
<div class="c-mt-4 text-gray">&#13;
One of the key ways businesses can improve and maintain their relationship with customers is by having an efficient, robust customer support system. Artificial intelligence (AI) has revolutionized what customer support can&#x2026; </div>&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/how-ai-transforms-customer-self-service-unraveling-the-power-of-intelligent-knowledge-bases/" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-only-4">Learn more</a>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="overflow-hidden">&#13;
<div class="container">&#13;
<div class="row justify-content-between">&#13;
<div class="col-md-6 col-lg-5 order-md-2">&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/types-of-customer-support-automation/" class="hover-opacity-0-75">&#13;
&#13;
<img loading="lazy" decoding="async" width="600" height="600" src="https://forethought.ai/wp-content/uploads/2024/03/ZjWa6GL-600x600.jpeg" class="border-radius-1-25 d-block h-auto w-100 tns-lazy-img" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/03/ZjWa6GL-600x600.jpeg 600w, https://forethought.ai/wp-content/uploads/2024/03/ZjWa6GL-150x150.jpeg 150w, https://forethought.ai/wp-content/uploads/2024/03/ZjWa6GL-400x400.jpeg 400w, https://forethought.ai/wp-content/uploads/2024/03/ZjWa6GL-445x445.jpeg 445w, https://forethought.ai/wp-content/uploads/2024/03/ZjWa6GL-500x500.jpeg 500w, https://forethought.ai/wp-content/uploads/2024/03/ZjWa6GL-250x250.jpeg 250w" sizes="(max-width: 600px) 100vw, 600px">&#13;
</a>&#13;
&#13;
</div>&#13;
<div class="col-md-6 c-pb-only-8">&#13;
<span class="d-block text-uppercase fw-semibold font-size-12 letter-spacing-200 text-secondary c-mt-only-6 c-mt-md-0">RECENTLY POSTED RESOURCES</span>&#13;
<h2 class="c-mt-only-3" id="-16"><a href="https://forethought.ai/blog/types-of-customer-support-automation/" class="animated-border-bottom text-secondary">The Different Types of Customer Service Automation: Serve More Clients With Less Effort</a></h2>&#13;
&#13;
&#13;
<div class="c-mt-4 text-gray">&#13;
The era of automation is upon us, from self-driving cars to AI-driven content recommendations, every industry is getting a touch of automation. In the customer service domain, companies like Elloe are using&#x2026; </div>&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/types-of-customer-support-automation/" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-only-4">Learn more</a>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="overflow-hidden">&#13;
<div class="container">&#13;
<div class="row justify-content-between">&#13;
<div class="col-md-6 col-lg-5 order-md-2">&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/conversational-ai-use-cases-2/" class="hover-opacity-0-75">&#13;
&#13;
<img loading="lazy" decoding="async" width="600" height="600" src="https://forethought.ai/wp-content/uploads/2024/03/pexels-yan-krukau-4458389-600x600.jpg" class="border-radius-1-25 d-block h-auto w-100 tns-lazy-img" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2024/03/pexels-yan-krukau-4458389-600x600.jpg 600w, https://forethought.ai/wp-content/uploads/2024/03/pexels-yan-krukau-4458389-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2024/03/pexels-yan-krukau-4458389-400x400.jpg 400w, https://forethought.ai/wp-content/uploads/2024/03/pexels-yan-krukau-4458389-445x445.jpg 445w, https://forethought.ai/wp-content/uploads/2024/03/pexels-yan-krukau-4458389-500x500.jpg 500w, https://forethought.ai/wp-content/uploads/2024/03/pexels-yan-krukau-4458389-250x250.jpg 250w" sizes="(max-width: 600px) 100vw, 600px">&#13;
</a>&#13;
&#13;
</div>&#13;
<div class="col-md-6 c-pb-only-8">&#13;
<span class="d-block text-uppercase fw-semibold font-size-12 letter-spacing-200 text-secondary c-mt-only-6 c-mt-md-0">RECENTLY POSTED RESOURCES</span>&#13;
<h2 class="c-mt-only-3" id="-17"><a href="https://forethought.ai/blog/conversational-ai-use-cases-2/" class="animated-border-bottom text-secondary">Conversational AI Use Cases: How You Can Use AI to Transform Your Business</a></h2>&#13;
&#13;
&#13;
<div class="c-mt-4 text-gray">&#13;
Artificial intelligence has been instrumental in transforming business operations across multiple sectors. From improving customer service to streamlining day-to-day operations, implementing conversational AI into your business strategy can provide a significant competitive&#x2026; </div>&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/blog/conversational-ai-use-cases-2/" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-only-4">Learn more</a>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
&#13;
</div>&#13;
&#13;
<div class="container">&#13;
<div class="acf-block-resources__slider-custom-nav js-acf-block-resources-slider-nav c-mt-md-7 d-flex flex-column flex-md-row align-items-start">&#13;
&#13;
&#13;
&#13;
<button type="button" data-nav="0" class="single-nav bg-transparent text-start c-pt-only-4 px-0 w-100 c-mt-only-6 c-mt-md-0" aria-label="Carousel Page 0 (Current Slide)">&#13;
<span class="single-nav__title d-inline-block d-block font-size-18 line-height-1-2 line-height-1-7">Are You Truly Customer-Centric? Track These 6 Metrics to Find Out</span>&#13;
&#13;
<span class="d-block font-size-14 line-height-1-3 c-mt-only-3">&#13;
&#13;
&#13;
<span class="d-block">January 22, 2024</span>&#13;
&#13;
&#13;
<span class="d-block">Blog</span>&#13;
</span>&#13;
</button>&#13;
&#13;
&#13;
&#13;
<button type="button" data-nav="1" class="single-nav bg-transparent text-start c-pt-only-4 px-0 w-100 c-mt-only-6 c-mt-md-0" aria-label="Carousel Page 1 (Current Slide)">&#13;
<span class="single-nav__title d-inline-block d-block font-size-18 line-height-1-2 line-height-1-7">Putting the &#x2018;Service&#x2019; in Self-Service: AI that Solves Problems</span>&#13;
&#13;
<span class="d-block font-size-14 line-height-1-3 c-mt-only-3">&#13;
&#13;
&#13;
<span class="d-block">April 4, 2024</span>&#13;
&#13;
&#13;
<span class="d-block">Blog</span>&#13;
</span>&#13;
</button>&#13;
&#13;
&#13;
&#13;
<button type="button" data-nav="2" class="single-nav bg-transparent text-start c-pt-only-4 px-0 w-100 c-mt-only-6 c-mt-md-0" aria-label="Carousel Page 2 (Current Slide)">&#13;
<span class="single-nav__title d-inline-block d-block font-size-18 line-height-1-2 line-height-1-7">How AI Transforms Customer Self-Service: Unraveling the Power of Intelligent Knowledge Bases</span>&#13;
&#13;
<span class="d-block font-size-14 line-height-1-3 c-mt-only-3">&#13;
&#13;
&#13;
<span class="d-block">March 28, 2024</span>&#13;
&#13;
&#13;
<span class="d-block">Blog</span>&#13;
</span>&#13;
</button>&#13;
&#13;
&#13;
&#13;
<button type="button" data-nav="3" class="single-nav bg-transparent text-start c-pt-only-4 px-0 w-100 c-mt-only-6 c-mt-md-0" aria-label="Carousel Page 3 (Current Slide)">&#13;
<span class="single-nav__title d-inline-block d-block font-size-18 line-height-1-2 line-height-1-7">The Different Types of Customer Service Automation: Serve More Clients With Less Effort</span>&#13;
&#13;
<span class="d-block font-size-14 line-height-1-3 c-mt-only-3">&#13;
&#13;
&#13;
<span class="d-block">March 18, 2024</span>&#13;
&#13;
&#13;
<span class="d-block">Blog</span>&#13;
</span>&#13;
</button>&#13;
&#13;
&#13;
&#13;
<button type="button" data-nav="4" class="single-nav bg-transparent text-start c-pt-only-4 px-0 w-100 c-mt-only-6 c-mt-md-0" aria-label="Carousel Page 4 (Current Slide)">&#13;
<span class="single-nav__title d-inline-block d-block font-size-18 line-height-1-2 line-height-1-7">Conversational AI Use Cases: How You Can Use AI to Transform Your Business</span>&#13;
&#13;
<span class="d-block font-size-14 line-height-1-3 c-mt-only-3">&#13;
&#13;
&#13;
<span class="d-block">March 14, 2024</span>&#13;
&#13;
&#13;
<span class="d-block">Blog</span>&#13;
</span>&#13;
</button>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
&#13;
<section id="acf-block-cta-block_af06982ae2569d85cd8e3a80847a1a3d" class="acf-block-cta position-relative bg-secondary c-pt-lg-8 overflow-hidden">&#13;
<div class="container position-relative z-index-1" data-anim="fade-up">&#13;
<div class="row">&#13;
<div class="col-lg-5">&#13;
&#13;
&#13;
<h2 class="font-size-45 text-white" id="think-outside-the-bo-18">Think outside the bot.&#x2122;</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-cta__content entry-content c-mt-5 text-gray-3">&#13;
<p>Everyone hates traditional chatbots.</p>
<p>See a demo of Elloe today and learn how our Generative AI Platform is driving efficiency and ROI for top support teams.</p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://www.elloe.ai/request-demo/" target="_self" class="crunch-button crunch-button__outline crunch-button__outline--white-color c-mt-6">Request a demo</a>&#13;
&#13;
&#13;
</div>&#13;
<div class="acf-block-cta__decor-wrapper col-lg-7 position-relative c-mt-6 c-mt-lg-0 d-lg-flex align-items-end">&#13;
&#13;
&#13;
<div class="acf-block-cta__circle position-relative z-index-2 mx-auto d-flex align-items-center justify-content-center">&#13;
<div class="acf-block-cta__circle-decor position-absolute fill-the-whole-space h-100 w-100 spin-animation d-flex justify-content-center">&#13;
<img decoding="async" src="https://forethought.ai/wp-content/themes/forethought/images/img__decor-circle.svg" alt="Decor Half Circle Orange" width="100%" height="100%">&#13;
</div>&#13;
<img loading="lazy" decoding="async" width="500" height="500" src="https://forethought.ai/wp-content/uploads/2021/10/think-forward-500x500.jpg" class="adjustable-element lazyload rounded-circle" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2021/10/think-forward-500x500.jpg 500w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-400x400.jpg 400w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-445x445.jpg 445w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-250x250.jpg 250w" sizes="(max-width: 500px) 100vw, 500px"> </div>&#13;
&#13;
&#13;
<div class="acf-block-cta__decor position-absolute z-index-1">&#13;
<svg width="61.125rem" height="21.9375rem" class="acf-block-cta__decor-svg acf-block-cta__decor-svg--desktop d-none d-lg-block" viewbox="0 0 978 351" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<title>Call to action decor</title>&#13;
<path d="M45 351L45.0001 316.123C45.0002 282.986 71.863 256.123 105 256.123L194 256.123C227.137 256.122 254 229.26 254 196.123L254 105C254 71.8629 280.863 45 314 45L1050 45" stroke="url(#acf-block-cta-block_af06982ae2569d85cd8e3a80847a1a3d-1)" stroke-width="90" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_af06982ae2569d85cd8e3a80847a1a3d-1" x1="531.438" y1="50.417" x2="531.691" y2="348.811" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
&#13;
<svg width="23.1875rem" height="16rem" class="acf-block-cta__decor-svg acf-block-cta__decor-svg--mobile d-lg-none" viewbox="0 0 375 258" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<title>Call to action decor</title>&#13;
<path d="M-64.4478 228L-64.4477 205.411C-64.4476 183.95 -47.0497 166.552 -25.5884 166.552L32.0533 166.552C53.5147 166.552 70.9126 149.154 70.9126 127.693L70.9126 68.6764C70.9126 47.2149 88.3106 29.8169 109.772 29.8169L586.448 29.8169" stroke="url(#acf-block-cta-block_af06982ae2569d85cd8e3a80847a1a3d-2)" stroke-width="58.2891" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_af06982ae2569d85cd8e3a80847a1a3d-2" x1="250.597" y1="33.3253" x2="250.761" y2="226.582" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
</section>&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content"></div></div></div></div>
</main>
<?php 
  include 'footer.php';
  ?>
<a href="#main" aria-label="Return to top" class="return-to-top js-scroll-to js-return-to-top d-none d-md-flex align-items-center justify-content-center position-fixed text-center text-light-black border-0 rounded-circle">
<svg aria-hidden="true" data-prefix="far" data-icon="chevron-up" class="return-to-top__chevron d-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
<title>Icon chevron up</title>
<path fill="currentColor" d="M6.101 359.293L25.9 379.092c4.686 4.686 12.284 4.686 16.971 0L224 198.393l181.13 180.698c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 132.908c-4.686-4.686-12.284-4.686-16.971 0L6.101 342.322c-4.687 4.687-4.687 12.285 0 16.971z"></path>
</svg>
</a>
<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="rocketlazyloadscript" data-rocket-src="https://solve-widget.forethought.ai/embed.js" data-rocket-type="application/javascript" id="forethought-widget-embed-script" data-api-key="b85ea646-ae19-423f-bb92-523ba589cbdd" data-ft-PIN-TEST data-ft-EMAIL-TEST async></script> -->

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
(function(d,s,i,r) {
if (d.getElementById(i)){return;}
var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/4131007.js';
e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);
</script>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-browser-checker-js-after">
/* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */
</script>
<script id="rocket-preload-links-js-extra">
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/forethought.ai","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-preload-links-js-after">
/* <![CDATA[ */
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/dist/dom-ready.min.js?ver=f77871ff7694fffea381" id="wp-dom-ready-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/dist/a11y.min.js?ver=d90eebea464f6c09bfd5" id="wp-a11y-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/js/jquery.json.min.js?ver=2.8.7" id="gform_json-js"></script>
<script id="gform_gravityforms-js-extra">
/* <![CDATA[ */
var gform_i18n = {"datepicker":{"days":{"monday":"Mo","tuesday":"Tu","wednesday":"We","thursday":"Th","friday":"Fr","saturday":"Sa","sunday":"Su"},"months":{"january":"January","february":"February","march":"March","april":"April","may":"May","june":"June","july":"July","august":"August","september":"September","october":"October","november":"November","december":"December"},"firstDay":1,"iconText":"Select date"}};
var gf_legacy_multi = [];
var gform_gravityforms = {"strings":{"invalid_file_extension":"This type of file is not allowed. Must be one of the following:","delete_file":"Delete this file","in_progress":"in progress","file_exceeds_limit":"File exceeds size limit","illegal_extension":"This type of file is not allowed.","max_reached":"Maximum number of files reached","unknown_error":"There was a problem while saving the file on the server","currently_uploading":"Please wait for the uploading to complete","cancel":"Cancel","cancel_upload":"Cancel this upload","cancelled":"Cancelled"},"vars":{"images_url":"https:\/\/forethought.ai\/wp-content\/plugins\/gravityforms\/images"}};
var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2,"code":"USD"},"base_url":"https:\/\/forethought.ai\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"https:\/\/forethought.ai\/wp-content\/plugins\/gravityforms\/images\/spinner.svg","version_hash":"7a9eb5878c0493f0529b309fb43ad57a","strings":{"newRowAdded":"New row added.","rowRemoved":"Row removed","formSaved":"The form has been saved.  The content contains the link to return and complete the form."}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.8.7" id="gform_gravityforms-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/utils.min.js?ver=50c7bea9c2320e16728e44ae9fde5f26" id="gform_gravityforms_utils-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min.js?ver=54e7080aa7a02c83aa61fae430b9d869" id="gform_gravityforms_theme_vendors-js"></script>
<script id="gform_gravityforms_theme-js-extra">
/* <![CDATA[ */
var gform_theme_config = {"common":{"form":{"honeypot":{"version_hash":"7a9eb5878c0493f0529b309fb43ad57a"}}},"hmr_dev":"","public_path":"https:\/\/forethought.ai\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min.js?ver=bab19fd84843dabc070e73326d787910" id="gform_gravityforms_theme-js"></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_timeline.bundle.js?ver=1713198698" id="timeline-block-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_testimonials.bundle.js?ver=1713198698" id="testimonials-block-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_resources.bundle.js?ver=1713198698" id="resources-block-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() { jQuery(document).on('gform_post_render', function(event, formId, currentPage){if(formId == 22) {} } );jQuery(document).on('gform_post_conditional_logic', function(event, formId, fields, isInit){} ) } ); 
/* ]]> */
});</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() {jQuery(document).trigger("gform_pre_post_render", [{ formId: "22", currentPage: "1", abort: function() { this.preventDefault(); } }]);                if (event.defaultPrevented) {                return;         }        const gformWrapperDiv = document.getElementById( "gform_wrapper_22" );        if ( gformWrapperDiv ) {            const visibilitySpan = document.createElement( "span" );            visibilitySpan.id = "gform_visibility_test_22";            gformWrapperDiv.insertAdjacentElement( "afterend", visibilitySpan );        }        const visibilityTestDiv = document.getElementById( "gform_visibility_test_22" );        let postRenderFired = false;                function triggerPostRender() {            if ( postRenderFired ) {                return;            }            postRenderFired = true;            jQuery( document ).trigger( 'gform_post_render', [22, 1] );            gform.utils.trigger( { event: 'gform/postRender', native: false, data: { formId: 22, currentPage: 1 } } );            if ( visibilityTestDiv ) {                visibilityTestDiv.parentNode.removeChild( visibilityTestDiv );            }        }        function debounce( func, wait, immediate ) {            var timeout;            return function() {                var context = this, args = arguments;                var later = function() {                    timeout = null;                    if ( !immediate ) func.apply( context, args );                };                var callNow = immediate && !timeout;                clearTimeout( timeout );                timeout = setTimeout( later, wait );                if ( callNow ) func.apply( context, args );            };        }        const debouncedTriggerPostRender = debounce( function() {            triggerPostRender();        }, 200 );        if ( visibilityTestDiv && visibilityTestDiv.offsetParent === null ) {            const observer = new MutationObserver( ( mutations ) => {                mutations.forEach( ( mutation ) => {                    if ( mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null ) {                        debouncedTriggerPostRender();                        observer.disconnect();                    }                });            });            observer.observe( document.body, {                attributes: true,                childList: false,                subtree: true,                attributeFilter: [ 'style', 'class' ],            });        } else {            triggerPostRender();        }    } ); 
/* ]]> */
});</script>
</body>
</html>
