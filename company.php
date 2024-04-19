

<!doctype html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" style="scroll-behavior: smooth;">
<head><meta charset="UTF-8" /><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="1.2.5.1",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this.t.bind(this),this.touchStartHandler=this.i.bind(this),this.touchMoveHandler=this.o.bind(this),this.touchEndHandler=this.h.bind(this),this.clickHandler=this.u.bind(this),this.interceptedClicks=[],this.interceptedClickListeners=[],this.l(this),window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.everythingLoaded&&this.m()})),document.addEventListener("DOMContentLoaded",(()=>{this.p()})),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}k(t){document.hidden?t.t():(this.triggerEvents.forEach((e=>window.addEventListener(e,t.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler))}_(){this.triggerEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}i(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this.L(t.target,!0),this.M(t.target,"onclick","rocket-onclick"),this.C())}o(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.O()}h(){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}u(t){t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this.O()}D(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))}))}l(t){EventTarget.prototype.addEventListenerBase=EventTarget.prototype.addEventListener,EventTarget.prototype.addEventListener=function(e,i,o){"click"!==e||t.windowLoaded||i===t.clickHandler||t.interceptedClickListeners.push({target:this,func:i,options:o}),(this||window).addEventListenerBase(e,i,o)}}L(t,e){this.interceptedClickListeners.forEach((i=>{i.target===t&&(e?t.removeEventListener("click",i.func,i.options):t.addEventListener("click",i.func,i.options))})),t.parentNode!==document.documentElement&&this.L(t.parentNode,e)}S(){return new Promise((t=>{this.T?this.O=t:t()}))}C(){this.T=!0}O(){this.T=!1}M(t,e,i){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(i,event.target.getAttribute(e)),event.target.removeAttribute(e))}t(){this._(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this.R.bind(this)):this.R()}p(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&0!==i.indexOf("data:")){0===i.indexOf("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.j(t,"preconnect")}async R(){this.lastBreath=Date.now(),this.P(this),this.F(this),this.q(),this.A(),this.I(),await this.U(this.delayedScripts.normal),await this.U(this.delayedScripts.defer),await this.U(this.delayedScripts.async);try{await this.W(),await this.H(this),await this.J()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.S().then((()=>{this.D()})),this.N()}A(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async B(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),i.hasAttribute("src")?(i.addEventListener("load",o),i.addEventListener("error",(function(){i.setAttribute("data-rocket-status","failed"),e()})),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o),t.addEventListener("error",(function(){t.setAttribute("data-rocket-status","failed"),e()})),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed"),e()}}));t.setAttribute("data-rocket-status","skipped")}async U(t){const e=t.shift();return e&&e.isConnected?(await this.B(e),this.U(t)):Promise.resolve()}I(){this.j([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}j(t,e){var i=document.createDocumentFragment();t.forEach((t=>{const o=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(o){const n=document.createElement("link");n.href=o,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),i.appendChild(n),this.trash.push(n)}})),document.head.appendChild(i)}P(t){let e={};function i(i,o){return e[o].eventsToRewrite.indexOf(i)>=0&&!t.everythingLoaded?"rocket-"+i:i}function o(t,o){!function(t){e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(o)}function n(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o||function(){},set(n){t.everythingLoaded?o=n:e["rocket"+i]=o=n}})}o(document,"DOMContentLoaded"),o(window,"DOMContentLoaded"),o(window,"load"),o(window,"pageshow"),o(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}F(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){if(o&&o.fn&&!t.allJQueries.includes(o)){o.fn.ready=o.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(o):document.addEventListener("rocket-DOMContentLoaded",(()=>e.bind(document)(o))),o([])};const e=o.fn.on;o.fn.on=o.fn.init.prototype.on=function(){return this[0]===window&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),e.apply(this,arguments),this},t.allJQueries.push(o)}e=o}o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}async H(t){const e=document.querySelector("script[data-webpack]");e&&(await async function(){return new Promise((t=>{e.addEventListener("load",t),e.addEventListener("error",t)}))}(),await t.K(),await t.H(t))}async W(){this.domReadyFired=!0,await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}async J(){await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted}),this.windowLoaded=!0}m(){document.onreadystatechange&&document.onreadystatechange(),window.onload&&window.onload(),window.onpageshow&&window.onpageshow({persisted:this.persisted})}q(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript;i||console.error("WPRocket unable to document.write this: "+e);const o=document.createRange(),n=i.parentElement;let s=t.get(i);void 0===s&&(s=i.nextSibling,t.set(i,s));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),n.insertBefore(c,s)}}async G(){Date.now()-this.lastBreath>45&&(await this.K(),this.lastBreath=Date.now())}async K(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}N(){this.trash.forEach((t=>t.remove()))}static run(){const t=new RocketLazyLoadScripts;t.k(t)}}RocketLazyLoadScripts.run()})();</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript">
/* <![CDATA[ */
 var gform;gform||(document.addEventListener("gform_main_scripts_loaded",function(){gform.scriptsLoaded=!0}),window.addEventListener("DOMContentLoaded",function(){gform.domLoaded=!0}),gform={domLoaded:!1,scriptsLoaded:!1,initializeOnLoaded:function(o){gform.domLoaded&&gform.scriptsLoaded?o():!gform.domLoaded&&gform.scriptsLoaded?window.addEventListener("DOMContentLoaded",o):document.addEventListener("gform_main_scripts_loaded",o)},hooks:{action:{},filter:{}},addAction:function(o,n,r,t){gform.addHook("action",o,n,r,t)},addFilter:function(o,n,r,t){gform.addHook("filter",o,n,r,t)},doAction:function(o){gform.doHook("action",o,arguments)},applyFilters:function(o){return gform.doHook("filter",o,arguments)},removeAction:function(o,n){gform.removeHook("action",o,n)},removeFilter:function(o,n,r){gform.removeHook("filter",o,n,r)},addHook:function(o,n,r,t,i){null==gform.hooks[o][n]&&(gform.hooks[o][n]=[]);var e=gform.hooks[o][n];null==i&&(i=n+"_"+e.length),gform.hooks[o][n].push({tag:i,callable:r,priority:t=null==t?10:t})},doHook:function(n,o,r){var t;if(r=Array.prototype.slice.call(r,1),null!=gform.hooks[n][o]&&((o=gform.hooks[n][o]).sort(function(o,n){return o.priority-n.priority}),o.forEach(function(o){"function"!=typeof(t=o.callable)&&(t=window[t]),"action"==n?t.apply(null,r):r[0]=t.apply(null,r)})),"filter"==n)return r[0]},removeHook:function(o,n,t,i){var r;null!=gform.hooks[o][n]&&(r=(r=gform.hooks[o][n]).filter(function(o,n,r){return!!(null!=i&&i!=o.tag||null!=t&&t!=o.priority)}),gform.hooks[o][n]=r)}}); 
/* ]]> */
</script>
<link rel="icon" type="image/png" sizes="16x16" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="228x228" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/coast-228x228.png">
<link rel="manifest" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/manifest.json">
<link rel="shortcut icon" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/favicon.ico">
<link rel="yandex-tableau-widget" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/yandex-browser-manifest.json">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="Forethought">
<meta name="application-name" content="Forethought">
<meta name="mobile-web-app-capable" content="yes">
<meta name="msapplication-TileColor" content="%23ffffff">
<meta name="msapplication-TileImage" content="https://forethought.ai/wp-content/themes/forethought/images/favicon/mstile-144x144.png">
<meta name="msapplication-config" content="https://forethought.ai/wp-content/themes/forethought/images/favicon/browserconfig.xml">
<meta name="theme-color" content="%23ffffff">
<link rel="stylesheet" href="https://forethought.ai/wp-content/themes/forethought/style.css">
<link rel="pingback" href="https://forethought.ai/xmlrpc.php">
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff" as="font" type="font/woff" crossorigin>
<link rel="stylesheet" href="./myStyles.css">
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

<title>Partners | Forethought</title>
<meta name="description" content="Help us build the future of customer support. Apply to be a Forethought Partner today." />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<link rel="canonical" href="https://forethought.ai/partners/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Partners | Forethought" />
<meta property="og:description" content="Help us build the future of customer support. Apply to be a Forethought Partner today." />
<meta property="og:url" content="https://forethought.ai/partners/" />
<meta property="og:site_name" content="Forethought" />
<meta property="og:updated_time" content="2024-04-02T13:52:23-07:00" />
<meta property="article:published_time" content="2021-10-07T14:39:33-07:00" />
<meta property="article:modified_time" content="2024-04-02T13:52:23-07:00" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Partners | Forethought" />
<meta name="twitter:description" content="Help us build the future of customer support. Apply to be a Forethought Partner today." />
<meta name="twitter:label1" content="Time to read" />
<meta name="twitter:data1" content="Less than a minute" />
<script type="application/ld+json" class="rank-math-schema-pro">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://forethought.ai/#organization","name":"Forethought"},{"@type":"WebSite","@id":"https://forethought.ai/#website","url":"https://forethought.ai","name":"Forethought","publisher":{"@id":"https://forethought.ai/#organization"},"inLanguage":"en-US"},{"@type":"BreadcrumbList","@id":"https://forethought.ai/partners/#breadcrumb","itemListElement":[{"@type":"ListItem","position":"1","item":{"@id":"https://forethought.ai","name":"Home"}},{"@type":"ListItem","position":"2","item":{"@id":"https://forethought.ai/partners/","name":"Partners"}}]},{"@type":"WebPage","@id":"https://forethought.ai/partners/#webpage","url":"https://forethought.ai/partners/","name":"Partners | Forethought","datePublished":"2021-10-07T14:39:33-07:00","dateModified":"2024-04-02T13:52:23-07:00","isPartOf":{"@id":"https://forethought.ai/#website"},"inLanguage":"en-US","breadcrumb":{"@id":"https://forethought.ai/partners/#breadcrumb"}},{"@type":"Person","@id":"https://forethought.ai/author/it-services/","name":"IT Services","url":"https://forethought.ai/author/it-services/","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","url":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","caption":"IT Services","inLanguage":"en-US"},"worksFor":{"@id":"https://forethought.ai/#organization"}},{"@type":"Article","headline":"Partners | Forethought","datePublished":"2021-10-07T14:39:33-07:00","dateModified":"2024-04-02T13:52:23-07:00","author":{"@id":"https://forethought.ai/author/it-services/","name":"IT Services"},"publisher":{"@id":"https://forethought.ai/#organization"},"description":"Help us build the future of customer support. Apply to be a Forethought Partner today.","name":"Partners | Forethought","@id":"https://forethought.ai/partners/#richSnippet","isPartOf":{"@id":"https://forethought.ai/partners/#webpage"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://forethought.ai/partners/#webpage"}}]}</script>

<link rel="dns-prefetch" href="//code.jquery.com" />
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
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
<link rel="stylesheet" id="wp-block-library-css" href="https://forethought.ai/wp-includes/css/dist/block-library/style.min.css" media="all" />
<style id="wp-block-library-theme-inline-css">
.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:#ffffffa6}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:#ffffffa6}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:#ffffffa6}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:#ffffffa6}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-bottom:4px solid;border-top:4px solid;color:currentColor;margin-bottom:1.75em}.wp-block-pullquote cite,.wp-block-pullquote footer,.wp-block-pullquote__citation{color:currentColor;font-size:.8125em;font-style:normal;text-transform:uppercase}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;font-style:normal;position:relative}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:0 0 1em}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:#ffffffa6}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:#ffffffa6}.wp-block-video{margin:0 0 1em}.wp-block-template-part.has-background{margin-bottom:0;margin-top:0;padding:1.25em 2.375em}
</style>
<style id="rank-math-toc-block-style-inline-css">
.wp-block-rank-math-toc-block nav ol{counter-reset:item}.wp-block-rank-math-toc-block nav ol li{display:block}.wp-block-rank-math-toc-block nav ol li:before{content:counters(item, ".") ". ";counter-increment:item}

</style>
<style id="classic-theme-styles-inline-css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="default-page-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/default_page.css?ver=240415-160732" media="all" />
<link rel="stylesheet" id="vendor-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/vendor.css?ver=240415-160734" media="all" />
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/default_page.bundle.js?ver=1713198697" id="default-page-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/vendor.bundle.js?ver=1713198698" id="vendor-scripts-js" defer></script>
<link rel="https://api.w.org/" href="https://forethought.ai/wp-json/" /><link rel="alternate" type="application/json" href="https://forethought.ai/wp-json/wp/v2/pages/226" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://forethought.ai/xmlrpc.php?rsd" />
<link rel="shortlink" href="https://forethought.ai/?p=226" />
<link rel="alternate" type="application/json+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fpartners%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fpartners%2F&#038;format=xml" />
</head>
<body class="page-template-default page page-id-226 page-parent">
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
  include 'components/header.php';
  ?>
<main id="main" class="overflow-hidden">
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-demo-form-block_6c36c829966db31fbc8fb5e052b3a8b6" class="acf-block-demo-form">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-lg-6 col-xl-5">&#13;
<h1 class="acf-block-demo-form__title font-size-48 line-height-1-3 text-secondary c-mt-3">Let&#x2019;s build the future of customer support.</h1>&#13;
&#13;
&#13;
<div class="acf-block-demo-form__content text-gray line-height-1-7 c-mt-4"><p>Make Forethought the foundation of your AI-powered customer support experience.</p>
</div>&#13;
&#13;
&#13;
</div>&#13;
<div class="col-lg-6 offset-xl-1 position-relative d-flex justify-content-center align-items-start">&#13;
&#13;
&#13;
<svg class="acf-block-demo-form__circle position-absolute d-none d-lg-block" width="1516" height="1516" viewbox="0 0 1516 1516" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<circle cx="758" cy="758" r="757.5" stroke="#C4C4C4" stroke-dasharray="8 8"></circle>&#13;
</svg>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-demo-form__form-column position-relative acf-block-demo-form__form-column--style-2">&#13;
&#13;
&#13;
&#13;
<svg class="acf-block-demo-form__decor-1 position-absolute z-index-minus-1" viewbox="0 0 203 204" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<path d="M203 204C203 92.0673 111.384 -4.02313e-06 1.52588e-05 -8.91434e-06C1.23012e-05 67.9734 9.34017e-06 136.027 6.3826e-06 204C67.6402 204 135.36 204 203 204Z" fill="#F6C043"></path>&#13;
</svg>&#13;
&#13;
<svg class="acf-block-demo-form__decor-2 position-absolute z-index-minus-1" viewbox="0 0 469 406" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<path d="M45 361L155.807 360.999H176.956C210.093 360.999 236.956 334.136 236.956 300.999L236.956 254.845C236.956 221.708 263.819 194.845 296.956 194.845L364 194.845C397.137 194.845 424 167.982 424 134.845V45" stroke="url(#paint0_linear_903:5868)" stroke-width="90" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="paint0_linear_903:5868" x1="417.291" y1="208.05" x2="47.7157" y2="206.814" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
&#13;
&#13;
<div class="acf-block-demo-form__form-wrapper bg-white c-p-7 c-p-lg-5 border-radius-1-25 z-index-1 d-flex align-items-center justify-content-center flex-column form-with-title">&#13;
&#13;
&#13;
<h2 class="font-size-18 font-family-base w-100 c-mb-only-3 fw-semibold" id="apply-to-be-a-foreth-1">Apply to be a Forethought partner.</h2>&#13;
&#13;
&#13;
<script type="rocketlazyloadscript" data-rocket-type="text/javascript"></script>
<div class="gf_browser_gecko gform_wrapper gravity-theme gform-theme--no-framework" data-form-theme="gravity-theme" data-form-index="0" id="gform_wrapper_3"><div id="gf_3" class="gform_anchor" tabindex="-1"></div><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_3" id="gform_3" action="/partners/#gf_3" data-formid="3" novalidate>
<div class="gform-body gform_body"><div id="gform_fields_3" class="gform_fields top_label form_sublabel_below description_below"><div id="field_3_1" class="gfield gfield--type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_3_1"><label class="gfield_label gform-field-label" for="input_3_1">First name*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_3_1" type="text" value class="large" aria-required="true" aria-invalid="false"> </div></div><div id="field_3_2" class="gfield gfield--type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_3_2"><label class="gfield_label gform-field-label" for="input_3_2">Last name*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_text"><input name="input_2" id="input_3_2" type="text" value class="large" aria-required="true" aria-invalid="false"> </div></div><div id="field_3_6" class="gfield gfield--type-email gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_3_6"><label class="gfield_label gform-field-label" for="input_3_6">Partner email address*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_email">
<input name="input_6" id="input_3_6" type="email" value class="large" aria-required="true" aria-invalid="false">
</div></div><div id="field_3_7" class="gfield gfield--type-phone gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_3_7"><label class="gfield_label gform-field-label" for="input_3_7">Partner phone number*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_phone"><input name="input_7" id="input_3_7" type="tel" value class="large" aria-required="true" aria-invalid="false"></div></div><div id="field_3_5" class="gfield gfield--type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_3_5"><label class="gfield_label gform-field-label" for="input_3_5">Company name*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_text"><input name="input_5" id="input_3_5" type="text" value class="large" aria-required="true" aria-invalid="false"> </div></div><div id="field_3_10" class="gfield gfield--type-select hide-label gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_3_10"><label class="gfield_label gform-field-label" for="input_3_10">Partnership type*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_select"><select name="input_10" id="input_3_10" class="large gfield_select" aria-required="true" aria-invalid="false"><option value>Partnership type*</option><option value="Customer support solution partner">Customer support solution partner</option><option value="System integrator partner">System integrator partner</option><option value="Referral partner">Referral partner</option><option value="Strategic partner">Strategic partner</option></select></div></div><div id="field_3_11" class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible" data-js-reload="field_3_11"><label class="gfield_label gform-field-label" for="input_3_11">Email</label><div class="ginput_container"><input name="input_11" id="input_3_11" type="text" value autocomplete="new-password"></div><div class="gfield_description" id="gfield_description_3_11">This field is for validation purposes and should be left unchanged.</div></div></div></div>
<div class="gform_footer top_label"> <button type="submit" id="gform_submit_button_3" class="gform_button button crunch-button crunch-button__full-background crunch-button__full-background--medium crunch-button__full-background--purple-gradient border-0" onclick="if(window[&quot;gf_submitting_3&quot;]){return false;}  if( !jQuery(&quot;#gform_3&quot;)[0].checkValidity || jQuery(&quot;#gform_3&quot;)[0].checkValidity()){window[&quot;gf_submitting_3&quot;]=true;}  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_3&quot;]){return false;} if( !jQuery(&quot;#gform_3&quot;)[0].checkValidity || jQuery(&quot;#gform_3&quot;)[0].checkValidity()){window[&quot;gf_submitting_3&quot;]=true;}  jQuery(&quot;#gform_3&quot;).trigger(&quot;submit&quot;,[true]); }">Apply Now</button> <input type="hidden" name="gform_ajax" value="form_id=3&amp;title=&amp;description=&amp;tabindex=0&amp;theme=gravity-theme">
<input type="hidden" class="gform_hidden" name="is_submit_3" value="1">
<input type="hidden" class="gform_hidden" name="gform_submit" value="3">
<input type="hidden" class="gform_hidden" name="gform_unique_id" value>
<input type="hidden" class="gform_hidden" name="state_3" value="WyJbXSIsImQxMzE2ZTJiZTk4MTUzOWE3ZjFmMDgyNDkxNWQ2NjEyIl0=">
<input type="hidden" class="gform_hidden" name="gform_target_page_number_3" id="gform_target_page_number_3" value="0">
<input type="hidden" class="gform_hidden" name="gform_source_page_number_3" id="gform_source_page_number_3" value="1">
<input type="hidden" name="gform_field_values" value>
</div>
</form>
</div>
<iframe style="display:none;width:0px;height:0px;" src="about:blank" name="gform_ajax_frame_3" id="gform_ajax_frame_3" title="This iframe contains the logic required to handle Ajax powered Gravity Forms."></iframe>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() {gformInitSpinner( 3, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', true );jQuery('#gform_ajax_frame_3').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_3');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_3').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_3').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_3').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_3').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_3').offset().top - mt); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_3').val();gformInitSpinner( 3, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', true );jQuery(document).trigger('gform_page_loaded', [3, current_page]);window['gf_submitting_3'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_3').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_3').offset().top - mt);jQuery(document).trigger('gform_confirmation_loaded', [3]);window['gf_submitting_3'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_3').text());}, 50);}else{jQuery('#gform_3').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger("gform_pre_post_render", [{ formId: "3", currentPage: "current_page", abort: function() { this.preventDefault(); } }]);                if (event.defaultPrevented) {                return;         }        const gformWrapperDiv = document.getElementById( "gform_wrapper_3" );        if ( gformWrapperDiv ) {            const visibilitySpan = document.createElement( "span" );            visibilitySpan.id = "gform_visibility_test_3";            gformWrapperDiv.insertAdjacentElement( "afterend", visibilitySpan );        }        const visibilityTestDiv = document.getElementById( "gform_visibility_test_3" );        let postRenderFired = false;                function triggerPostRender() {            if ( postRenderFired ) {                return;            }            postRenderFired = true;            jQuery( document ).trigger( 'gform_post_render', [3, current_page] );            gform.utils.trigger( { event: 'gform/postRender', native: false, data: { formId: 3, currentPage: current_page } } );            if ( visibilityTestDiv ) {                visibilityTestDiv.parentNode.removeChild( visibilityTestDiv );            }        }        function debounce( func, wait, immediate ) {            var timeout;            return function() {                var context = this, args = arguments;                var later = function() {                    timeout = null;                    if ( !immediate ) func.apply( context, args );                };                var callNow = immediate && !timeout;                clearTimeout( timeout );                timeout = setTimeout( later, wait );                if ( callNow ) func.apply( context, args );            };        }        const debouncedTriggerPostRender = debounce( function() {            triggerPostRender();        }, 200 );        if ( visibilityTestDiv && visibilityTestDiv.offsetParent === null ) {            const observer = new MutationObserver( ( mutations ) => {                mutations.forEach( ( mutation ) => {                    if ( mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null ) {                        debouncedTriggerPostRender();                        observer.disconnect();                    }                });            });            observer.observe( document.body, {                attributes: true,                childList: false,                subtree: true,                attributeFilter: [ 'style', 'class' ],            });        } else {            triggerPostRender();        }    } );} ); 
/* ]]> */
});</script>
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
</div></div></div></div>&#13;
&#13;
&#13;
<div id="acf-block-logos-block_dc29c4b75baf126c2b7efbcb30f9b285" class="acf-block-logos c-mt-9" data-anim="fade-in">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-12">&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="d-flex flex-wrap acf-block-logos__row justify-content-between">&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<hr class="w-100 bg-white m-0">&#13;
&#13;
&#13;
<div class="acf-block-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-logos__logo-wrapper--with-styles" style="--image-width: 10.75rem; --image-mobile-width: 8.6rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" width="344" height="120" src="https://forethought.ai/wp-content/uploads/2021/10/enate.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-logos__logo-wrapper--with-styles" style="--image-width: 9.875rem; --image-mobile-width: 7.9rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" width="316" height="68" src="https://forethought.ai/wp-content/uploads/2021/10/dialpad.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-logos__logo-wrapper--with-styles" style="--image-width: 8.375rem; --image-mobile-width: 6.7rem;">&#13;
&#13;
&#13;
&#13;
<img decoding="async" src="https://forethought.ai/wp-content/uploads/2021/10/talkdesk.svg" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-logos__logo-wrapper--with-styles" style="--image-width: 5.125rem; --image-mobile-width: 4.1rem;">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="166" height="118" src="https://forethought.ai/wp-content/uploads/2021/10/zendesk.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-logos__logo-wrapper d-flex align-items-center justify-content-center c-mt-7 acf-block-logos__logo-wrapper--with-styles" style="--image-width: 7.75rem; --image-mobile-width: 6.2rem;">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="250" height="90" src="https://forethought.ai/wp-content/uploads/2021/10/arena.png" class="lazyload adjustable-element d-inline-block" alt data-lazy="true">&#13;
&#13;
&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
&#13;
</div></div></div></div>&#13;
<section id="acf-block-steps-block_d6a7f27a44c3f8ce53986a3a1799d7a5" class="acf-block-steps c-pt-lg-10 c-pb-lg-9 js-acf-block-steps position-relative overflow-hidden" data-anim="fade-up">&#13;
&#13;
&#13;
<svg class="acf-block-steps__left-decor d-block position-absolute" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 380.72 554.12">&#13;
<title>Pink Green Decor</title>&#13;
<defs>&#13;
<lineargradient id="pink" x1="560.47" y1="13.2" x2="106.46" y2="7.97" gradienttransform="matrix(0, -1, -1, 0, 200.97, 507.11)" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#ff70c6"></stop>&#13;
<stop offset="1" stop-color="#ec4a77"></stop>&#13;
</lineargradient>&#13;
<lineargradient id="green" x1="307.21" y1="-200.43" x2="78.39" y2="-201.76" gradienttransform="matrix(0, -1, -1, 0, 50.58, 652.09)" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6bdab6"></stop>&#13;
<stop offset="1" stop-color="#66e0f6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
<rect fill="url(#pink)" x="133.95" y="-61.61" width="112.83" height="465.64" rx="56.41" transform="translate(-63.51 204.34) rotate(-49.4)"></rect>&#13;
<rect fill="url(#green)" x="195.26" y="340.72" width="112.83" height="234.67" rx="56.41" transform="translate(-259.91 351.08) rotate(-49.4)"></rect>&#13;
</svg>&#13;
&#13;
<svg class="acf-block-steps__right-decor d-block position-absolute" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 477.05 659.71">&#13;
<title>Yellow Purple Decor</title>&#13;
<defs>&#13;
<lineargradient id="yellow" x1="449.82" y1="-416.42" x2="763.05" y2="-135.47" gradienttransform="matrix(0, -1, -1, 0, -31.1, 1060.71)" gradientunits="userSpaceOnUse"><stop offset="0" stop-color="#3866f5"></stop><stop offset="1" stop-color="#bd00ff"></stop></lineargradient>&#13;
<lineargradient id="purple" x1="525.93" y1="61.65" x2="237.23" y2="59.54" gradienttransform="matrix(0, -1, -1, 0, 329.55, 596.57)" gradientunits="userSpaceOnUse"><stop offset="0" stop-color="#f6c043"></stop><stop offset="1" stop-color="#ff9634"></stop></lineargradient>&#13;
</defs>&#13;
<rect fill="url(#yellow)" x="182.11" y="150.97" width="112.83" height="592.5" rx="56.41" transform="translate(-256.27 337.31) rotate(-49.4)"></rect>&#13;
<rect fill="url(#purple)" x="212.52" y="65.41" width="112.83" height="296.07" rx="56.41" transform="translate(-68.14 278.75) rotate(-49.4)"></rect>&#13;
<circle fill="#f6c043" cx="93.04" cy="55.78" r="55.78"></circle>&#13;
</svg>&#13;
&#13;
&#13;
<div class="container position-relative">&#13;
<div class="row justify-content-center">&#13;
<div class="col-lg-10 col-xl-7 text-center">&#13;
&#13;
&#13;
&#13;
<h2 class="h3" id="different-partners-n-2">Different partners need different partnerships.</h2>&#13;
&#13;
&#13;
&#13;
<div class="entry-content font-weight-medium c-mt-only-4 text-gray">&#13;
<p>We offer four unique tracks for our partners, outlined below.</p>
</div>&#13;
&#13;
&#13;
&#13;
<div class="js-steps-row c-py-lg-only-5">&#13;
&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="customer-support-sol-3">Customer Support Solution Partner</h3>&#13;
<p class="c-mt-only-3 mb-0">The Customer Support Solution Partner is ideal for companies looking to bring customers a best-in-class AI-powered deflection/chatbot (Solve), prediction/routing (Triage) or agent support (Assist) solution.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="system-integrator-pa-4">System Integrator Partner</h3>&#13;
<p class="c-mt-only-3 mb-0">The System Integrator Partner program is ideal for companies looking to introduce an automation-first platform to their clients. We have integrations built with Zendesk, Salesforce, ServiceNow, and others.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="referral-partner-5">Referral Partner</h3>&#13;
<p class="c-mt-only-3 mb-0">The Referral Partner Program is ideal for agencies with eCommerce, FinTech, SaaS clients, agents and BPO/contact centers who are looking to bring new customer service solutions to existing and future clients.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="strategic-partner-6">Strategic Partner</h3>&#13;
<p class="c-mt-only-3 mb-0">The Strategic Partner Program is ideal for companies who want to leverage the power of a true AI, and use Forethought for intelligent input, categorization and content matching of data. This program is perfect for organizations where augmenting their strategies with other data elements is key to differentiating their business offering.</p>&#13;
</section>&#13;
&#13;
&#13;
<div class="d-none d-lg-flex row c-mt-7">&#13;
<div class="col-lg-5 offset-lg-1 col-xl-7 offset-xl-0">&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="The Customer Support Solution Partner is ideal for companies looking to bring customers a best-in-class AI-powered deflection/chatbot (Solve), prediction/routing (Triage) or agent support (Assist) solution.">&#13;
<button class="step__button step__button--green-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Customer Support Solution Partner</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="The System Integrator Partner program is ideal for companies looking to introduce an automation-first platform to their clients. We have integrations built with Zendesk, Salesforce, ServiceNow, and others.">&#13;
<button class="step__button step__button--green-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">System Integrator Partner</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="The Referral Partner Program is ideal for agencies with eCommerce, FinTech, SaaS clients, agents and BPO/contact centers who are looking to bring new customer service solutions to existing and future clients.">&#13;
<button class="step__button step__button--green-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Referral Partner</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="The Strategic Partner Program is ideal for companies who want to leverage the power of a true AI, and use Forethought for intelligent input, categorization and content matching of data. This program is perfect for organizations where augmenting their strategies with other data elements is key to differentiating their business offering.">&#13;
<button class="step__button step__button--green-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Strategic Partner</button>&#13;
</span>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div><div id="acf-block-cta-with-triangles-block_ae26915aed2deab38d717fbfced25361" class="acf-block-cta-with-triangles c-pt-6 position-relative overflow-hidden" data-anim="fade-up">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="acf-block-cta-with-triangles__content-wrapper col-12 text-center position-relative c-pb-6">&#13;
&#13;
&#13;
<h2 class="acf-block-cta-with-triangles__title h3 mx-auto" id="we-spend-a-lot-of-ti-7">We spend a lot of time thinking about customer success.</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-cta-with-triangles__content entry-content mx-auto font-weight-medium c-mt-3 text-gray"><p>Forethought puts out frequent articles, webinars, e-books, and other resources on the topic of customer-centered AI and industry news and trends.</p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/resources/" target="_self" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-8 c-mt-lg-4 c-mb-2">Our resources</a>&#13;
&#13;
&#13;
<div class="acf-block-cta-with-triangles__decor-1 position-absolute z-index-minus-1">&#13;
<svg width="367" height="397" viewbox="0 0 367 397" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<path d="M42 143V143C109.931 143 165 198.069 165 266V266H42V143Z" fill="#7B33FB"></path>&#13;
<path d="M174 143V143C241.931 143 297 198.069 297 266V266H174V143Z" fill="#BD00FF"></path>&#13;
<path d="M0.5 0.500334C1.33842 0.501453 2.17618 0.505388 3.01327 0.512129L3.0173 0.0121449C5.02691 0.0283279 7.03268 0.0606629 9.03448 0.109027L9.0224 0.608881C11.0215 0.65718 13.0167 0.721485 15.0077 0.801675L15.0278 0.30208C17.0291 0.382682 19.0263 0.47931 21.0192 0.591839L20.991 1.09104C22.9949 1.2042 24.9946 1.33345 26.9898 1.47867L27.0261 0.979989C29.024 1.12541 31.0174 1.28682 33.0063 1.4641L32.9619 1.96213C34.9527 2.13957 36.9389 2.33294 38.9204 2.54209L38.9729 2.04486C40.9714 2.25581 42.9652 2.48281 44.954 2.72571L44.8934 3.22203C46.8796 3.4646 48.8608 3.72306 50.837 3.99729L50.9057 3.50203C52.8873 3.77699 54.8637 4.06778 56.835 4.37425L56.7582 4.86832C58.7409 5.17656 60.7183 5.50069 62.6903 5.84058L62.7752 5.34784C64.7499 5.6882 66.7192 6.04433 68.683 6.41611L68.59 6.90738C70.5525 7.27893 72.5096 7.66613 74.4609 8.06884L74.562 7.57916C76.5291 7.98513 78.4905 8.40685 80.446 8.84417L80.3369 9.33212C82.2897 9.76884 84.2367 10.2211 86.1776 10.6889L86.2947 10.2028C88.2392 10.6714 90.1776 11.1555 92.1098 11.6549L91.9847 12.139C93.926 12.6408 95.8611 13.1581 97.7899 13.6907L97.923 13.2088C99.8544 13.7422 101.779 14.291 103.698 14.855L103.557 15.3347C105.473 15.8981 107.383 16.4768 109.286 17.0705L109.435 16.5932C111.351 17.191 113.261 17.8041 115.163 18.4323L115.006 18.9071C116.906 19.5344 118.799 20.1769 120.685 20.8343L120.85 20.3622C122.739 21.0207 124.621 21.6942 126.495 22.3826L126.323 22.8519C128.204 23.5425 130.077 24.2481 131.944 24.9685L132.124 24.5021C133.993 25.2235 135.854 25.9597 137.708 26.7107L137.52 27.1741C139.372 27.9243 141.217 28.6891 143.053 29.4686L143.249 29.0083C145.095 29.7918 146.933 30.5899 148.764 31.4027L148.561 31.8596C150.389 32.6712 152.21 33.4974 154.022 34.3379L154.232 33.8843C156.048 34.7262 157.855 35.5826 159.654 36.4531L159.436 36.9032C161.239 37.7753 163.033 38.6618 164.819 39.5624L165.044 39.116C166.832 40.0179 168.612 40.9339 170.383 41.864L170.15 42.3067C171.92 43.2359 173.681 44.1792 175.433 45.1363L175.673 44.6975C177.432 45.6583 179.182 46.6331 180.924 47.6217L180.677 48.0566C182.416 49.0438 184.146 50.0449 185.867 51.0597L186.121 50.629C187.846 51.6455 189.561 52.6758 191.267 53.7196L191.006 54.1461C192.713 55.1905 194.411 56.2484 196.099 57.3198L196.367 56.8976C198.057 57.9704 199.739 59.0567 201.411 60.1562L201.136 60.574C202.806 61.6725 204.467 62.7843 206.118 63.9093L206.399 63.4961C208.055 64.6241 209.701 65.7653 211.336 66.9196L211.048 67.3281C212.682 68.4808 214.306 69.6465 215.92 70.8251L216.215 70.4213C217.831 71.602 219.438 72.7955 221.034 74.0018L220.733 74.4007C222.329 75.6065 223.915 76.825 225.49 78.0561L225.798 77.6621C227.375 78.8949 228.942 80.1403 230.499 81.3982L230.185 81.7871C231.74 83.0437 233.284 84.3127 234.818 85.594L235.139 85.2103C236.675 86.494 238.202 87.7901 239.717 89.0984L239.39 89.4769C240.903 90.7834 242.406 92.1021 243.897 93.4327L244.23 93.0596C245.724 94.3924 247.207 95.7372 248.679 97.0938L248.34 97.4615C249.81 98.8166 251.269 100.184 252.716 101.562L253.061 101.2C254.511 102.581 255.949 103.973 257.376 105.377L257.026 105.734C258.451 107.136 259.864 108.549 261.266 109.974L261.623 109.624C263.027 111.051 264.419 112.489 265.8 113.939L265.438 114.283C266.816 115.731 268.183 117.19 269.539 118.66L269.906 118.321C271.263 119.793 272.608 121.276 273.94 122.77L273.567 123.103C274.898 124.594 276.217 126.097 277.523 127.61L277.902 127.283C279.21 128.798 280.506 130.325 281.79 131.861L281.406 132.182C282.687 133.716 283.956 135.26 285.213 136.815L285.602 136.501C286.86 138.058 288.105 139.625 289.338 141.202L288.944 141.51C290.175 143.085 291.393 144.671 292.599 146.267L292.998 145.965C294.204 147.562 295.398 149.169 296.579 150.785L296.175 151.08C297.353 152.694 298.519 154.318 299.672 155.952L300.08 155.663C301.235 157.299 302.376 158.945 303.504 160.601L303.091 160.882C304.216 162.533 305.327 164.194 306.426 165.864L306.844 165.589C307.943 167.261 309.029 168.942 310.102 170.633L309.68 170.901C310.751 172.589 311.809 174.287 312.854 175.994L313.28 175.733C314.324 177.439 315.354 179.154 316.371 180.878L315.94 181.132C316.955 182.854 317.956 184.584 318.943 186.323L319.378 186.076C320.367 187.817 321.342 189.568 322.302 191.327L321.864 191.566C322.821 193.319 323.764 195.08 324.693 196.849L325.136 196.617C326.066 198.388 326.982 200.168 327.884 201.956L327.437 202.181C328.338 203.967 329.225 205.761 330.097 207.563L330.547 207.345C331.417 209.145 332.274 210.952 333.116 212.767L332.662 212.978C333.503 214.79 334.329 216.61 335.14 218.438L335.597 218.236C336.41 220.066 337.208 221.905 337.992 223.751L337.531 223.946C338.311 225.783 339.076 227.628 339.826 229.479L340.289 229.292C341.04 231.146 341.776 233.007 342.498 234.876L342.031 235.056C342.752 236.922 343.457 238.796 344.148 240.677L344.617 240.504C345.306 242.379 345.979 244.261 346.638 246.15L346.166 246.315C346.823 248.201 347.465 250.094 348.093 251.993L348.568 251.837C349.196 253.739 349.809 255.648 350.407 257.564L349.929 257.713C350.523 259.617 351.102 261.526 351.665 263.443L352.145 263.302C352.709 265.22 353.258 267.145 353.791 269.077L353.309 269.21C353.842 271.138 354.359 273.074 354.861 275.015L355.345 274.89C355.844 276.822 356.328 278.76 356.797 280.705L356.311 280.822C356.779 282.763 357.231 284.71 357.668 286.663L358.156 286.553C358.593 288.509 359.015 290.47 359.421 292.438L358.931 292.539C359.334 294.49 359.721 296.447 360.093 298.41L360.584 298.317C360.956 300.28 361.312 302.25 361.652 304.224L361.159 304.309C361.499 306.281 361.823 308.259 362.132 310.241L362.626 310.164C362.932 312.136 363.223 314.112 363.498 316.094L363.003 316.163C363.277 318.139 363.535 320.12 363.778 322.106L364.274 322.045C364.517 324.034 364.744 326.028 364.955 328.027L364.458 328.079C364.667 330.061 364.86 332.047 365.038 334.038L365.536 333.993C365.713 335.982 365.875 337.975 366.02 339.973L365.521 340.01C365.667 342.005 365.796 344.004 365.909 346.008L366.408 345.98C366.521 347.973 366.617 349.97 366.698 351.972L366.198 351.992C366.279 353.983 366.343 355.978 366.391 357.977L366.891 357.965C366.939 359.967 366.972 361.973 366.988 363.982L366.488 363.986C366.495 364.823 366.499 365.661 366.5 366.5H364.04V367H358.121V366.5H352.202V367H346.282V366.5H340.363V367H334.444V366.5H328.524V367H322.605V366.5H316.685V367H310.766V366.5H304.847V367H298.927V366.5H293.008V367H287.089V366.5H281.169V367H275.25V366.5H269.331V367H263.411V366.5H257.492V367H251.573V366.5H245.653V367H239.734V366.5H233.814V367H227.895V366.5H221.976V367H216.056V366.5H210.137V367H204.218V366.5H198.298V367H192.379V366.5H186.46V367H180.54V366.5H174.621V367H168.702V366.5H162.782V367H156.863V366.5H150.943V367H145.024V366.5H139.105V367H133.185V366.5H127.266V367H121.347V366.5H115.427V367H109.508V366.5H103.589V367H97.6693V366.5H91.75V367H85.8306V366.5H79.9113V367H73.992V366.5H68.0726V367H62.1533V366.5H56.2339V367H50.3146V366.5H44.3952V367H38.4759V366.5H32.5566V367H26.6372V366.5H20.7179V367H14.7985V366.5H8.87918V367H2.95985V366.5H0.5V364.04H0V358.121H0.5V352.202H0V346.282H0.5V340.363H0V334.444H0.5V328.524H0V322.605H0.5V316.685H0V310.766H0.5V304.847H0V298.927H0.5V293.008H0V287.089H0.5V281.169H0V275.25H0.5V269.331H0V263.411H0.5V257.492H0V251.573H0.5V245.653H0V239.734H0.5V233.814H0V227.895H0.5V221.976H0V216.056H0.5V210.137H0V204.218H0.5V198.298H0V192.379H0.5V186.46H0V180.54H0.5V174.621H0V168.702H0.5V162.782H0V156.863H0.5V150.943H0V145.024H0.5V139.105H0V133.185H0.5V127.266H0V121.347H0.5V115.427H0V109.508H0.5V103.589H0V97.6693H0.5V91.75H0V85.8306H0.5V79.9113H0V73.992H0.5V68.0726H0V62.1533H0.5V56.2339H0V50.3146H0.5V44.3952H0V38.4759H0.5V32.5566H0V26.6372H0.5V20.7179H0V14.7985H0.5V8.87918H0V2.95985H0.5V0.500334Z" stroke="#C4C4C4" stroke-dasharray="6 6"></path>&#13;
<path d="M42 274V274C109.931 274 165 329.069 165 397V397H42V274Z" fill="#3866F5"></path>&#13;
</svg>&#13;
</div>&#13;
&#13;
<div class="acf-block-cta-with-triangles__decor-2 position-absolute z-index-minus-1">&#13;
<svg width="259" height="259" viewbox="0 0 259 259" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<path d="M0.500473 258.5C0.502052 257.666 0.507581 256.833 0.517041 256.001L0.0170735 255.995C0.0398178 253.994 0.0852453 251.999 0.153111 250.01L0.65282 250.027C0.720754 248.035 0.811212 246.05 0.92395 244.07L0.424758 244.041C0.53859 242.042 0.675091 240.049 0.83401 238.063L1.33242 238.103C1.49113 236.119 1.67225 234.141 1.87552 232.17L1.37815 232.118C1.58363 230.126 1.81169 228.14 2.06209 226.161L2.55813 226.224C2.80804 224.249 3.08024 222.281 3.37446 220.32L2.87999 220.245C3.17699 218.266 3.4964 216.294 3.83793 214.329L4.33054 214.415C4.67175 212.452 5.0351 210.497 5.42031 208.55L4.92982 208.453C5.31785 206.492 5.72803 204.538 6.16009 202.593L6.64819 202.701C7.08031 200.756 7.53436 198.818 8.01006 196.89L7.5246 196.77C8.003 194.83 8.50325 192.899 9.02508 190.977L9.50762 191.108C10.0299 189.184 10.5738 187.269 11.1392 185.363L10.6598 185.221C11.2276 183.307 11.817 181.402 12.4275 179.507L12.9035 179.66C13.5148 177.762 14.1475 175.874 14.8013 173.996L14.329 173.831C14.9851 171.947 15.6622 170.072 16.3603 168.207L16.8286 168.382C17.5276 166.515 18.2476 164.658 18.9884 162.811L18.5243 162.625C19.2671 160.774 20.0306 158.932 20.8146 157.102L21.2742 157.299C22.0593 155.466 22.865 153.645 23.6909 151.834L23.236 151.626C24.0638 149.812 24.912 148.008 25.7802 146.216L26.2302 146.434C27.0994 144.64 27.9888 142.857 28.898 141.087L28.4532 140.858C29.3642 139.084 30.2951 137.322 31.2455 135.572L31.6849 135.81C32.6362 134.059 33.6072 132.319 34.5975 130.592L34.1638 130.343C35.1561 128.613 36.1677 126.895 37.1985 125.19L37.6264 125.449C38.6573 123.744 39.7074 122.052 40.7763 120.372L40.3545 120.104C41.4257 118.421 42.5159 116.752 43.6246 115.096L44.04 115.374C45.1482 113.718 46.275 112.077 47.4202 110.449L47.0112 110.161C48.1589 108.529 49.325 106.912 50.5091 105.308L50.9113 105.605C52.0943 104.003 53.2953 102.415 54.5141 100.841L54.1188 100.535C55.3404 98.9581 56.5798 97.3955 57.8367 95.8477L58.2248 96.1629C59.48 94.6172 60.7527 93.0862 62.0425 91.5704L61.6617 91.2464C62.9545 89.7271 64.2644 88.223 65.5913 86.7344L65.9645 87.067C67.2892 85.5809 68.6308 84.1101 69.9889 82.655L69.6234 82.3138C70.9844 80.8556 72.3621 79.4132 73.7561 77.9868L74.1137 78.3363C75.505 76.9127 76.9127 75.505 78.3363 74.1137L77.9869 73.7561C79.4132 72.3621 80.8556 70.9844 82.3138 69.6234L82.655 69.9889C84.1101 68.6308 85.5809 67.2892 87.067 65.9645L86.7344 65.5913C88.223 64.2644 89.7271 62.9544 91.2464 61.6617L91.5704 62.0425C93.0862 60.7527 94.6172 59.48 96.1629 58.2248L95.8477 57.8367C97.3955 56.5798 98.9581 55.3404 100.535 54.1188L100.841 54.5141C102.415 53.2953 104.003 52.0943 105.605 50.9113L105.308 50.5091C106.912 49.3249 108.529 48.1589 110.161 47.0112L110.449 47.4201C112.077 46.275 113.718 45.1482 115.374 44.04L115.096 43.6246C116.752 42.5158 118.421 41.4257 120.104 40.3545L120.372 40.7763C122.052 39.7074 123.744 38.6573 125.449 37.6264L125.19 37.1985C126.895 36.1677 128.613 35.156 130.343 34.1638L130.592 34.5975C132.319 33.6072 134.059 32.6362 135.81 31.6849L135.572 31.2455C137.322 30.2951 139.084 29.3642 140.858 28.4532L141.087 28.898C142.857 27.9888 144.64 27.0994 146.434 26.2301L146.216 25.7802C148.008 24.912 149.812 24.0638 151.626 23.236L151.834 23.6909C153.645 22.865 155.466 22.0593 157.299 21.2742L157.102 20.8146C158.932 20.0306 160.774 19.2671 162.625 18.5243L162.811 18.9884C164.658 18.2476 166.515 17.5276 168.382 16.8286L168.207 16.3603C170.072 15.6622 171.947 14.9851 173.831 14.329L173.996 14.8012C175.874 14.1475 177.762 13.5148 179.66 12.9034L179.507 12.4275C181.402 11.8169 183.307 11.2276 185.221 10.6598L185.363 11.1391C187.269 10.5738 189.184 10.0299 191.108 9.50761L190.977 9.02508C192.899 8.50324 194.83 8.003 196.77 7.5246L196.89 8.01005C198.818 7.53434 200.756 7.0803 202.701 6.64818L202.593 6.16007C204.538 5.72802 206.492 5.31785 208.453 4.92982L208.55 5.42029C210.497 5.03509 212.452 4.67174 214.415 4.33053L214.329 3.83793C216.294 3.49639 218.266 3.17699 220.245 2.88L220.32 3.37444C222.281 3.08022 224.249 2.80803 226.224 2.55813L226.161 2.06209C228.14 1.8117 230.126 1.58361 232.118 1.37813L232.17 1.87551C234.141 1.67223 236.119 1.49111 238.103 1.33239L238.063 0.834004C240.049 0.675099 242.042 0.538594 244.041 0.424764L244.07 0.92394C246.05 0.811208 248.035 0.720723 250.027 0.652791L250.01 0.153096C251.999 0.0852246 253.994 0.0397838 255.995 0.0170481L256.001 0.517018C256.833 0.507557 257.666 0.502033 258.5 0.500446L258.5 2.94316L259 2.94316L259 8.82953L258.5 8.82953L258.5 14.7159L259 14.7159L259 20.6023L258.5 20.6023L258.5 26.4886L259 26.4886L259 32.375L258.5 32.375L258.5 38.2613L259 38.2613L259 44.1477L258.5 44.1477L258.5 50.0341L259 50.0341L259 55.9204L258.5 55.9204L258.5 61.8068L259 61.8068L259 67.6932L258.5 67.6932L258.5 73.5795L259 73.5795L259 79.4659L258.5 79.4659L258.5 85.3522L259 85.3522L259 91.2386L258.5 91.2386L258.5 97.125L259 97.125L259 103.011L258.5 103.011L258.5 108.898L259 108.898L259 114.784L258.5 114.784L258.5 120.67L259 120.67L259 126.557L258.5 126.557L258.5 132.443L259 132.443L259 138.329L258.5 138.329L258.5 144.216L259 144.216L259 150.102L258.5 150.102L258.5 155.989L259 155.989L259 161.875L258.5 161.875L258.5 167.761L259 167.761L259 173.648L258.5 173.648L258.5 179.534L259 179.534L259 185.42L258.5 185.42L258.5 191.307L259 191.307L259 197.193L258.5 197.193L258.5 203.08L259 203.08L259 208.966L258.5 208.966L258.5 214.852L259 214.852L259 220.739L258.5 220.739L258.5 226.625L259 226.625L259 232.511L258.5 232.511L258.5 238.398L259 238.398L259 244.284L258.5 244.284L258.5 250.17L259 250.17L259 256.057L258.5 256.057L258.5 258.5L256.057 258.5L256.057 259L250.17 259L250.17 258.5L244.284 258.5L244.284 259L238.398 259L238.398 258.5L232.511 258.5L232.511 259L226.625 259L226.625 258.5L220.739 258.5L220.739 259L214.852 259L214.852 258.5L208.966 258.5L208.966 259L203.08 259L203.08 258.5L197.193 258.5L197.193 259L191.307 259L191.307 258.5L185.42 258.5L185.42 259L179.534 259L179.534 258.5L173.648 258.5L173.648 259L167.761 259L167.761 258.5L161.875 258.5L161.875 259L155.989 259L155.989 258.5L150.102 258.5L150.102 259L144.216 259L144.216 258.5L138.33 258.5L138.33 259L132.443 259L132.443 258.5L126.557 258.5L126.557 259L120.67 259L120.67 258.5L114.784 258.5L114.784 259L108.898 259L108.898 258.5L103.011 258.5L103.011 259L97.125 259L97.125 258.5L91.2386 258.5L91.2386 259L85.3523 259L85.3523 258.5L79.4659 258.5L79.4659 259L73.5795 259L73.5795 258.5L67.6932 258.5L67.6932 259L61.8068 259L61.8068 258.5L55.9204 258.5L55.9204 259L50.0341 259L50.0341 258.5L44.1477 258.5L44.1477 259L38.2613 259L38.2613 258.5L32.375 258.5L32.375 259L26.4886 259L26.4886 258.5L20.6022 258.5L20.6022 259L14.7159 259L14.7159 258.5L8.82949 258.5L8.82949 259L2.94315 259L2.94315 258.5L0.500473 258.5Z" stroke="#C4C4C4" stroke-dasharray="6 6"></path>&#13;
</svg>&#13;
<img loading="lazy" decoding="async" width="273" height="272" src="https://forethought.ai/wp-content/uploads/2021/10/resources-1.jpg" class="acf-block-cta-with-triangles__image position-absolute d-block lazyload rounded-circle" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2021/10/resources-1.jpg 273w, https://forethought.ai/wp-content/uploads/2021/10/resources-1-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2021/10/resources-1-100x100.jpg 100w, https://forethought.ai/wp-content/uploads/2021/10/resources-1-200x199.jpg 200w, https://forethought.ai/wp-content/uploads/2021/10/resources-1-250x250.jpg 250w" sizes="(max-width: 273px) 100vw, 273px"> </div>&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-resources-small-list-block_b3b85046d8743e6b6e22590fee5f9806" class="acf-block-resources-small-list c-mt-9 c-mb-9">&#13;
<div class="container">&#13;
<div class="acf-block-resources-list__list js-resources-list">&#13;
&#13;
&#13;
<div class="row">&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6">&#13;
<div class="acf-block-resources-small-list__item d-flex w-100">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-resources-small-list-block_b3b85046d8743e6b6e22590fee5f9806 press">&#13;
<a href="https://forethought.ai/case-studies/lime-case-study/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="lime-provides-fast-8">Lime Provides Fast, Scalable Service with a 77% Reduction in Response Time</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 7, 2021</span>&#13;
&#13;
&#13;
&#13;
<span class="resource-preview__type d-block font-size-14 line-height-1  c-mt-1">Case Study</span>&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6">&#13;
<div class="acf-block-resources-small-list__item d-flex w-100">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-resources-small-list-block_b3b85046d8743e6b6e22590fee5f9806 press">&#13;
<a href="https://forethought.ai/ebooks/piloting-a-i-for-customer-support/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="piloting-a-i-for-cu-9">Piloting A.I. for Customer Support</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 7, 2021</span>&#13;
&#13;
&#13;
&#13;
<span class="resource-preview__type d-block font-size-14 line-height-1  c-mt-1">eBook</span>&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6">&#13;
<div class="acf-block-resources-small-list__item d-flex w-100">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-resources-small-list-block_b3b85046d8743e6b6e22590fee5f9806 press">&#13;
<a href="https://forethought.ai/webinars/to-bot-or-not/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="make-ai-part-of-your-10">Make AI Part of Your Life That You Like</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 7, 2021</span>&#13;
&#13;
&#13;
&#13;
<span class="resource-preview__type d-block font-size-14 line-height-1  c-mt-1">Webinar</span>&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6">&#13;
<div class="acf-block-resources-small-list__item d-flex w-100">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-resources-small-list-block_b3b85046d8743e6b6e22590fee5f9806 press">&#13;
<a href="https://forethought.ai/blog/solve-3-common-customer-service-problems-with-ai/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="solve-3-common-custo-11">Solve 3 Common Customer Service Problems with AI</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 7, 2021</span>&#13;
&#13;
&#13;
&#13;
<span class="resource-preview__type d-block font-size-14 line-height-1  c-mt-1">Blog</span>&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
&#13;
<section id="acf-block-cta-block_088128f50d27438ba9f64413de04e9cd" class="acf-block-cta position-relative bg-secondary c-pt-lg-8 overflow-hidden">&#13;
<div class="container position-relative z-index-1" data-anim="fade-up">&#13;
<div class="row">&#13;
<div class="col-lg-5">&#13;
&#13;
&#13;
<h2 class="font-size-45 text-white" id="think-outside-the-bo-12">Think outside the bot.&#x2122;</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-cta__content entry-content c-mt-5 text-gray-3">&#13;
<p>Everyone hates traditional chatbots.</p>
<p>See a demo of Forethought today and learn how our Generative AI Platform is driving efficiency and ROI for top support teams.</p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/view-demo/" target="_self" class="crunch-button crunch-button__outline crunch-button__outline--white-color c-mt-6">Request a demo</a>&#13;
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
<path d="M45 351L45.0001 316.123C45.0002 282.986 71.863 256.123 105 256.123L194 256.123C227.137 256.122 254 229.26 254 196.123L254 105C254 71.8629 280.863 45 314 45L1050 45" stroke="url(#acf-block-cta-block_088128f50d27438ba9f64413de04e9cd-1)" stroke-width="90" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_088128f50d27438ba9f64413de04e9cd-1" x1="531.438" y1="50.417" x2="531.691" y2="348.811" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
&#13;
<svg width="23.1875rem" height="16rem" class="acf-block-cta__decor-svg acf-block-cta__decor-svg--mobile d-lg-none" viewbox="0 0 375 258" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<title>Call to action decor</title>&#13;
<path d="M-64.4478 228L-64.4477 205.411C-64.4476 183.95 -47.0497 166.552 -25.5884 166.552L32.0533 166.552C53.5147 166.552 70.9126 149.154 70.9126 127.693L70.9126 68.6764C70.9126 47.2149 88.3106 29.8169 109.772 29.8169L586.448 29.8169" stroke="url(#acf-block-cta-block_088128f50d27438ba9f64413de04e9cd-2)" stroke-width="58.2891" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_088128f50d27438ba9f64413de04e9cd-2" x1="250.597" y1="33.3253" x2="250.761" y2="226.582" gradientunits="userSpaceOnUse">&#13;
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
  include 'components/footer.php';
  ?>
<a href="#main" aria-label="Return to top" class="return-to-top js-scroll-to js-return-to-top d-none d-md-flex align-items-center justify-content-center position-fixed text-center text-light-black border-0 rounded-circle">
<svg aria-hidden="true" data-prefix="far" data-icon="chevron-up" class="return-to-top__chevron d-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
<title>Icon chevron up</title>
<path fill="currentColor" d="M6.101 359.293L25.9 379.092c4.686 4.686 12.284 4.686 16.971 0L224 198.393l181.13 180.698c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 132.908c-4.686-4.686-12.284-4.686-16.971 0L6.101 342.322c-4.687 4.687-4.687 12.285 0 16.971z"></path>
</svg>
</a>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="rocketlazyloadscript" data-rocket-src="https://solve-widget.forethought.ai/embed.js" data-rocket-type="application/javascript" id="forethought-widget-embed-script" data-api-key="b85ea646-ae19-423f-bb92-523ba589cbdd" data-ft-PIN-TEST data-ft-EMAIL-TEST async></script>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
(function(d,s,i,r) {
if (d.getElementById(i)){return;}
var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/4131007.js';
e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);
</script>

<link rel="stylesheet" id="demo-form-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_demo_form.css?ver=240415-160722" media="all" />
<link rel="stylesheet" id="gform_basic-css" href="https://forethought.ai/wp-content/plugins/gravityforms/assets/css/dist/basic.min.css?ver=2.8.7" media="all" />
<link rel="stylesheet" id="gform_theme_components-css" href="https://forethought.ai/wp-content/plugins/gravityforms/assets/css/dist/theme-components.min.css?ver=2.8.7" media="all" />
<link rel="stylesheet" id="gform_theme_ie11-css" href="https://forethought.ai/wp-content/plugins/gravityforms/assets/css/dist/theme-ie11.min.css?ver=2.8.7" media="all" />
<link rel="stylesheet" id="gform_theme-css" href="https://forethought.ai/wp-content/plugins/gravityforms/assets/css/dist/theme.min.css?ver=2.8.7" media="all" />
<link rel="stylesheet" id="logos-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_logos.css?ver=240415-160725" media="all" />
<link rel="stylesheet" id="steps-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_steps.css?ver=240415-160729" media="all" />
<link rel="stylesheet" id="call-to-action-with-triangles-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_call_to_action_with_triangles.css?ver=240415-160720" media="all" />
<link rel="stylesheet" id="resources-small-list-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_resources_small_list.css?ver=240415-160727" media="all" />
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
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://code.jquery.com/jquery-3.5.0.min.js?ver=3.5.0" id="jquery-core-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://code.jquery.com/jquery-migrate-3.2.0.min.js?ver=3.2.0" id="jquery-migrate-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_demo_form.bundle.js?ver=1713198703" id="demo-form-block-scripts-js" defer></script>
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
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/js/chosen.jquery.min.js?ver=2.8.7" id="gform_chosen-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/utils.min.js?ver=50c7bea9c2320e16728e44ae9fde5f26" id="gform_gravityforms_utils-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min.js?ver=54e7080aa7a02c83aa61fae430b9d869" id="gform_gravityforms_theme_vendors-js"></script>
<script id="gform_gravityforms_theme-js-extra">
/* <![CDATA[ */
var gform_theme_config = {"common":{"form":{"honeypot":{"version_hash":"7a9eb5878c0493f0529b309fb43ad57a"}}},"hmr_dev":"","public_path":"https:\/\/forethought.ai\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min.js?ver=bab19fd84843dabc070e73326d787910" id="gform_gravityforms_theme-js"></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_steps.bundle.js?ver=1713198945" id="steps-block-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_call_to_action_with_triangles.bundle.js?ver=1713199341" id="call-to-action-with-triangles-block-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() { jQuery(document).on('gform_post_render', function(event, formId, currentPage){if(formId == 3) {gformInitChosenFields('#input_3_10','No results matched');} } );jQuery(document).on('gform_post_conditional_logic', function(event, formId, fields, isInit){gformInitChosenFields('#input_3_10','No results matched');} ) } ); 
/* ]]> */
});</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() {jQuery(document).trigger("gform_pre_post_render", [{ formId: "3", currentPage: "1", abort: function() { this.preventDefault(); } }]);                if (event.defaultPrevented) {                return;         }        const gformWrapperDiv = document.getElementById( "gform_wrapper_3" );        if ( gformWrapperDiv ) {            const visibilitySpan = document.createElement( "span" );            visibilitySpan.id = "gform_visibility_test_3";            gformWrapperDiv.insertAdjacentElement( "afterend", visibilitySpan );        }        const visibilityTestDiv = document.getElementById( "gform_visibility_test_3" );        let postRenderFired = false;                function triggerPostRender() {            if ( postRenderFired ) {                return;            }            postRenderFired = true;            jQuery( document ).trigger( 'gform_post_render', [3, 1] );            gform.utils.trigger( { event: 'gform/postRender', native: false, data: { formId: 3, currentPage: 1 } } );            if ( visibilityTestDiv ) {                visibilityTestDiv.parentNode.removeChild( visibilityTestDiv );            }        }        function debounce( func, wait, immediate ) {            var timeout;            return function() {                var context = this, args = arguments;                var later = function() {                    timeout = null;                    if ( !immediate ) func.apply( context, args );                };                var callNow = immediate && !timeout;                clearTimeout( timeout );                timeout = setTimeout( later, wait );                if ( callNow ) func.apply( context, args );            };        }        const debouncedTriggerPostRender = debounce( function() {            triggerPostRender();        }, 200 );        if ( visibilityTestDiv && visibilityTestDiv.offsetParent === null ) {            const observer = new MutationObserver( ( mutations ) => {                mutations.forEach( ( mutation ) => {                    if ( mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null ) {                        debouncedTriggerPostRender();                        observer.disconnect();                    }                });            });            observer.observe( document.body, {                attributes: true,                childList: false,                subtree: true,                attributeFilter: [ 'style', 'class' ],            });        } else {            triggerPostRender();        }    } ); 
/* ]]> */
});</script>
</body>
</html>
