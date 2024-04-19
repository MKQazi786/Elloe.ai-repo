

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

<title>Request a Demo | Forethought</title><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff" crossorigin>
  
<link rel="stylesheet" href="./myStyles.css">

<meta name="description" content="See how Forethought AI can transform your customer service. Request a demo with the Forethought team." />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<link rel="canonical" href="https://forethought.ai/view-demo/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Request a Demo | Forethought" />
<meta property="og:description" content="See how Forethought AI can transform your customer service. Request a demo with the Forethought team." />
<meta property="og:url" content="https://forethought.ai/view-demo/" />
<meta property="og:site_name" content="Forethought" />
<meta property="og:updated_time" content="2024-01-26T09:14:21-08:00" />
<meta property="article:published_time" content="2021-10-11T17:32:27-07:00" />
<meta property="article:modified_time" content="2024-01-26T09:14:21-08:00" />
<meta property="og:video" content="https://www.youtube.com/embed/shsT5TML7iA" />
<meta property="video:duration" content="246" />
<meta property="ya:ovs:upload_date" content="2023-02-23" />
<meta property="ya:ovs:allow_embed" content="true" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Request a Demo | Forethought" />
<meta name="twitter:description" content="See how Forethought AI can transform your customer service. Request a demo with the Forethought team." />
<meta name="twitter:label1" content="Time to read" />
<meta name="twitter:data1" content="Less than a minute" />
<script type="application/ld+json" class="rank-math-schema-pro">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://forethought.ai/#organization","name":"Forethought"},{"@type":"WebSite","@id":"https://forethought.ai/#website","url":"https://forethought.ai","name":"Forethought","publisher":{"@id":"https://forethought.ai/#organization"},"inLanguage":"en-US"},{"@type":"BreadcrumbList","@id":"https://forethought.ai/view-demo/#breadcrumb","itemListElement":[{"@type":"ListItem","position":"1","item":{"@id":"https://forethought.ai","name":"Home"}},{"@type":"ListItem","position":"2","item":{"@id":"https://forethought.ai/view-demo/","name":"View demo"}}]},{"@type":"WebPage","@id":"https://forethought.ai/view-demo/#webpage","url":"https://forethought.ai/view-demo/","name":"Request a Demo | Forethought","datePublished":"2021-10-11T17:32:27-07:00","dateModified":"2024-01-26T09:14:21-08:00","isPartOf":{"@id":"https://forethought.ai/#website"},"inLanguage":"en-US","breadcrumb":{"@id":"https://forethought.ai/view-demo/#breadcrumb"}},{"@type":"Person","@id":"https://forethought.ai/author/it-services/","name":"IT Services","url":"https://forethought.ai/author/it-services/","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","url":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","caption":"IT Services","inLanguage":"en-US"},"worksFor":{"@id":"https://forethought.ai/#organization"}},{"headline":"Request a Demo | Forethought","description":"See how Forethought AI can transform your customer service. Request a demo with the Forethought team.","datePublished":"2021-10-11T17:32:27-07:00","dateModified":"2024-01-26T09:14:21-08:00","author":{"@id":"https://forethought.ai/author/it-services/","name":"IT Services"},"@type":"Article","name":"Request a Demo | Forethought","@id":"https://forethought.ai/view-demo/#schema-45707","isPartOf":{"@id":"https://forethought.ai/view-demo/#webpage"},"publisher":{"@id":"https://forethought.ai/#organization"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://forethought.ai/view-demo/#webpage"}},{"@type":"VideoObject","name":"How Forethought Empowers Leading Organizations with Generative AI for Customer Support Automation","description":"Learn how Upwork, Kajabi, Climate Pledge Arena, and D2L are partnering with Forethought to provide exceptional customer service in every interaction.Launched...","uploadDate":"2023-02-23","thumbnailUrl":"https://forethought.ai/wp-content/uploads/2023/07/how-forethought-empowers-leading.jpg","embedUrl":"https://www.youtube.com/embed/shsT5TML7iA","duration":"PT4M6S","width":"1280","height":"720","isFamilyFriendly":"True","@id":"https://forethought.ai/view-demo/#schema-45708","isPartOf":{"@id":"https://forethought.ai/view-demo/#webpage"},"publisher":{"@id":"https://forethought.ai/#organization"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://forethought.ai/view-demo/#webpage"}}]}</script>

<link rel="dns-prefetch" href="//code.jquery.com" />
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
<link rel="https://api.w.org/" href="https://forethought.ai/wp-json/" /><link rel="alternate" type="application/json" href="https://forethought.ai/wp-json/wp/v2/pages/521" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://forethought.ai/xmlrpc.php?rsd" />
<link rel="shortlink" href="https://forethought.ai/?p=521" />
<link rel="alternate" type="application/json+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fview-demo%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fview-demo%2F&#038;format=xml" />
</head>
<body class="page-template-default page page-id-521 page-parent">
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
<div id="acf-block-demo-form-block_100c97ed96db10b43bb53f18186ff783" class="acf-block-demo-form">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-lg-6 col-xl-5">&#13;
<h1 class="acf-block-demo-form__title font-size-48 line-height-1-3 text-secondary c-mt-3">Cut ticket volume by 60% with customer support AI</h1>&#13;
&#13;
&#13;
<div class="acf-block-demo-form__content text-gray line-height-1-7 c-mt-4"><p>Top brands like Upwork, Acorns, Lime and Asana use <b>Forethought SupportGPT</b> generative AI to turn their support teams into CX heroes.</p>
<ul>
<li>AI resolves <b>60% or more</b> of your customer support issues autonomously</li>
</ul>
<p></p>
<ul>
<li><b>Easily integrate</b> with Zendesk, Salesforce, Freshdesk, Intercom or any other help desk</li>
</ul>
<p></p>
<ul>
<li>Better customer experiences raise your CSAT by <b>27% or more</b> in a matter of days
</li></ul>
<p>
</p><p><img decoding="async" src="https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-2.svg"></p>
</div>&#13;
&#13;
&#13;
</div>&#13;
<div class="col-lg-6 offset-xl-1 position-relative d-flex justify-content-center align-items-start">&#13;
&#13;
&#13;
&#13;
<div class="acf-block-demo-form__form-column position-relative c-mt-10 c-mt-lg-0">&#13;
&#13;
&#13;
<div class="acf-block-demo-form__decor-3 position-absolute z-index-minus-1">&#13;
<svg width="733" height="770" viewbox="0 0 733 770" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<g filter="url(#svg_29b1ebaa-cadf-4945-a797-20a2b0c5c112_filter0_d_1104:1999)">&#13;
<path d="M83.6794 418.777C96.8221 399.999 123.281 396.624 140.717 411.501L441.443 668.089C456.669 681.081 459.531 703.515 448.054 719.913C434.911 738.691 408.452 742.067 391.016 727.19L90.2906 470.601C75.0641 457.61 72.2022 435.175 83.6794 418.777Z" stroke="url(#svg_8ac000c0-9ea0-4f1b-9fa9-8f4e66190b27_paint0_linear_1104:1999)" stroke-width="20"></path>&#13;
</g>&#13;
<g filter="url(#svg_7734a7a9-f0c4-45a5-addc-26114500385f_filter1_d_1104:1999)">&#13;
<rect x="671.146" y="406.168" width="513.819" height="94.57" rx="47.285" transform="rotate(-139.403 671.146 406.168)" fill="url(#svg_57108737-c7b0-462d-bef4-6455c54bde54_paint1_linear_1104:1999)"></rect>&#13;
</g>&#13;
<g filter="url(#svg_2a7ce0d7-9b94-4044-9c1f-60806a4c3f8c_filter2_d_1104:1999)">&#13;
<rect x="62.0781" y="21" width="591.881" height="94.57" rx="47.285" transform="rotate(40.6864 62.0781 21)" fill="url(#svg_6f75ebb2-9129-42e1-a6eb-304cc59aa1d7_paint2_linear_1104:1999)"></rect>&#13;
</g>&#13;
<g filter="url(#svg_012402c5-2fd8-4dd3-b664-be28b44e809d_filter3_d_1104:1999)">&#13;
<circle cx="575.166" cy="488.165" r="47.285" transform="rotate(-143.323 575.166 488.165)" fill="#FF70C6"></circle>&#13;
</g>&#13;
<defs>&#13;
<filter id="svg_29b1ebaa-cadf-4945-a797-20a2b0c5c112_filter0_d_1104:1999" x="62.6572" y="390.203" width="406.419" height="362.285" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">&#13;
<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>&#13;
<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix>&#13;
<feoffset dy="2"></feoffset>&#13;
<fegaussianblur stddeviation="2"></fegaussianblur>&#13;
<fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></fecolormatrix>&#13;
<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1104:1999"></feblend>&#13;
<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1104:1999" result="shape"></feblend>&#13;
</filter>&#13;
<filter id="svg_7734a7a9-f0c4-45a5-addc-26114500385f_filter1_d_1104:1999" x="296.388" y="17.3906" width="420.91" height="375.391" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">&#13;
<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>&#13;
<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix>&#13;
<feoffset dy="2"></feoffset>&#13;
<fegaussianblur stddeviation="2"></fegaussianblur>&#13;
<fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></fecolormatrix>&#13;
<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1104:1999"></feblend>&#13;
<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1104:1999" result="shape"></feblend>&#13;
</filter>&#13;
<filter id="svg_2a7ce0d7-9b94-4044-9c1f-60806a4c3f8c_filter2_d_1104:1999" x="15.8218" y="38.3945" width="479.677" height="426.781" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">&#13;
<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>&#13;
<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix>&#13;
<feoffset dy="2"></feoffset>&#13;
<fegaussianblur stddeviation="2"></fegaussianblur>&#13;
<fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></fecolormatrix>&#13;
<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1104:1999"></feblend>&#13;
<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1104:1999" result="shape"></feblend>&#13;
</filter>&#13;
<filter id="svg_012402c5-2fd8-4dd3-b664-be28b44e809d_filter3_d_1104:1999" x="517.878" y="434.879" width="114.576" height="114.574" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">&#13;
<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>&#13;
<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix>&#13;
<femorphology radius="2" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_1104:1999"></femorphology>&#13;
<feoffset dy="4"></feoffset>&#13;
<fegaussianblur stddeviation="4"></fegaussianblur>&#13;
<fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></fecolormatrix>&#13;
<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1104:1999"></feblend>&#13;
<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1104:1999" result="shape"></feblend>&#13;
</filter>&#13;
<lineargradient id="svg_8ac000c0-9ea0-4f1b-9fa9-8f4e66190b27_paint0_linear_1104:1999" x1="461.284" y1="703.285" x2="66.3111" y2="432.355" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#F6C043"></stop>&#13;
<stop offset="1" stop-color="#FF9634"></stop>&#13;
</lineargradient>&#13;
<lineargradient id="svg_57108737-c7b0-462d-bef4-6455c54bde54_paint1_linear_1104:1999" x1="676.994" y1="434.959" x2="1163.75" y2="542.248" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#3866F5"></stop>&#13;
<stop offset="1" stop-color="#BD00FF"></stop>&#13;
</lineargradient>&#13;
<lineargradient id="svg_6f75ebb2-9129-42e1-a6eb-304cc59aa1d7_paint2_linear_1104:1999" x1="643.481" y1="66.7736" x2="66.4887" y2="76.8505" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-demo-form__form-wrapper bg-white c-p-7 c-p-lg-5 border-radius-1-25 z-index-1 d-flex align-items-center justify-content-center flex-column acf-block-demo-form__form-wrapper--style-1 form-with-title">&#13;
&#13;
&#13;
<h2 class="font-size-18 font-family-base w-100 c-mb-only-3 fw-semibold" id="get-a-demo-and-roi-a-1">Get a Demo and ROI Assessment</h2>&#13;
&#13;
&#13;
<script type="rocketlazyloadscript" data-rocket-type="text/javascript"></script>
<div class="gf_browser_chrome gform_wrapper gravity-theme gform-theme--no-framework" data-form-theme="gravity-theme" data-form-index="0" id="gform_wrapper_2"><div id="gf_2" class="gform_anchor" tabindex="-1"></div><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2" action="/view-demo/#gf_2" data-formid="2" novalidate>
<div class="gform-body gform_body"><div id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below"><div id="field_2_1" class="gfield gfield--type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_1"><label class="gfield_label gform-field-label" for="input_2_1">First name*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_2_1" type="text" value class="large" aria-required="true" aria-invalid="false"> </div></div><div id="field_2_2" class="gfield gfield--type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_2"><label class="gfield_label gform-field-label" for="input_2_2">Last name*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_text"><input name="input_2" id="input_2_2" type="text" value class="large" aria-required="true" aria-invalid="false"> </div></div><div id="field_2_7" class="gfield gfield--type-phone gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_7"><label class="gfield_label gform-field-label" for="input_2_7">Phone number*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_phone"><input name="input_7" id="input_2_7" type="tel" value class="large" aria-required="true" aria-invalid="false"></div></div><div id="field_2_6" class="gfield gfield--type-email gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_6"><label class="gfield_label gform-field-label" for="input_2_6">Work email*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_email">
<input name="input_6" id="input_2_6" type="email" value class="large" aria-required="true" aria-invalid="false" autocomplete="email">
</div></div><div id="field_2_5" class="gfield gfield--type-text field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_5"><label class="gfield_label gform-field-label" for="input_2_5">Job title</label><div class="ginput_container ginput_container_text"><input name="input_5" id="input_2_5" type="text" value class="large" aria-invalid="false"> </div></div><div id="field_2_8" class="gfield gfield--type-text gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_8"><label class="gfield_label gform-field-label" for="input_2_8">Company name*<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class="ginput_container ginput_container_text"><input name="input_8" id="input_2_8" type="text" value class="large" aria-required="true" aria-invalid="false"> </div></div><div id="field_2_9" class="gfield gfield--type-hidden gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_9"><div class="ginput_container ginput_container_text"><input name="input_9" id="input_2_9" type="hidden" class="gform_hidden" aria-invalid="false" value></div></div><div id="field_2_10" class="gfield gfield--type-hidden gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_10"><div class="ginput_container ginput_container_text"><input name="input_10" id="input_2_10" type="hidden" class="gform_hidden" aria-invalid="false" value></div></div><div id="field_2_11" class="gfield gfield--type-hidden gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_11"><div class="ginput_container ginput_container_text"><input name="input_11" id="input_2_11" type="hidden" class="gform_hidden" aria-invalid="false" value></div></div><div id="field_2_12" class="gfield gfield--type-hidden gform_hidden field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_2_12"><div class="ginput_container ginput_container_text"><input name="input_12" id="input_2_12" type="hidden" class="gform_hidden" aria-invalid="false" value></div></div><div id="field_2_13" class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible" data-js-reload="field_2_13"><label class="gfield_label gform-field-label" for="input_2_13">Name</label><div class="ginput_container"><input name="input_13" id="input_2_13" type="text" value autocomplete="new-password"></div><div class="gfield_description" id="gfield_description_2_13">This field is for validation purposes and should be left unchanged.</div></div></div></div>
<div class="gform_footer top_label"> <button type="submit" id="gform_submit_button_2" class="gform_button button crunch-button crunch-button__full-background crunch-button__full-background--medium crunch-button__full-background--purple-gradient border-0" onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;}  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;}  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }">Request a Demo</button> <input type="hidden" name="gform_ajax" value="form_id=2&amp;title=&amp;description=&amp;tabindex=0&amp;theme=gravity-theme">
<input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
<input type="hidden" class="gform_hidden" name="gform_submit" value="2">
<input type="hidden" class="gform_hidden" name="gform_unique_id" value>
<input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsImQxMzE2ZTJiZTk4MTUzOWE3ZjFmMDgyNDkxNWQ2NjEyIl0=">
<input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0">
<input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1">
<input type="hidden" name="gform_field_values" value>
</div>
</form>
</div>
<iframe style="display:none;width:0px;height:0px;" src="about:blank" name="gform_ajax_frame_2" id="gform_ajax_frame_2" title="This iframe contains the logic required to handle Ajax powered Gravity Forms."></iframe>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() {gformInitSpinner( 2, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', true );jQuery('#gform_ajax_frame_2').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_2');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_2').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_2').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_2').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_2').offset().top - mt); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_2').val();gformInitSpinner( 2, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', true );jQuery(document).trigger('gform_page_loaded', [2, current_page]);window['gf_submitting_2'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_2').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_2').offset().top - mt);jQuery(document).trigger('gform_confirmation_loaded', [2]);window['gf_submitting_2'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_2').text());}, 50);}else{jQuery('#gform_2').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger("gform_pre_post_render", [{ formId: "2", currentPage: "current_page", abort: function() { this.preventDefault(); } }]);                if (event.defaultPrevented) {                return;         }        const gformWrapperDiv = document.getElementById( "gform_wrapper_2" );        if ( gformWrapperDiv ) {            const visibilitySpan = document.createElement( "span" );            visibilitySpan.id = "gform_visibility_test_2";            gformWrapperDiv.insertAdjacentElement( "afterend", visibilitySpan );        }        const visibilityTestDiv = document.getElementById( "gform_visibility_test_2" );        let postRenderFired = false;                function triggerPostRender() {            if ( postRenderFired ) {                return;            }            postRenderFired = true;            jQuery( document ).trigger( 'gform_post_render', [2, current_page] );            gform.utils.trigger( { event: 'gform/postRender', native: false, data: { formId: 2, currentPage: current_page } } );            if ( visibilityTestDiv ) {                visibilityTestDiv.parentNode.removeChild( visibilityTestDiv );            }        }        function debounce( func, wait, immediate ) {            var timeout;            return function() {                var context = this, args = arguments;                var later = function() {                    timeout = null;                    if ( !immediate ) func.apply( context, args );                };                var callNow = immediate && !timeout;                clearTimeout( timeout );                timeout = setTimeout( later, wait );                if ( callNow ) func.apply( context, args );            };        }        const debouncedTriggerPostRender = debounce( function() {            triggerPostRender();        }, 200 );        if ( visibilityTestDiv && visibilityTestDiv.offsetParent === null ) {            const observer = new MutationObserver( ( mutations ) => {                mutations.forEach( ( mutation ) => {                    if ( mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null ) {                        debouncedTriggerPostRender();                        observer.disconnect();                    }                });            });            observer.observe( document.body, {                attributes: true,                childList: false,                subtree: true,                attributeFilter: [ 'style', 'class' ],            });        } else {            triggerPostRender();        }    } );} ); 
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
&#13;
</div></div></div></div>&#13;
<section id="acf-block-steps-with-image-block_f6e27782b7506f1ca6dd54255cd16d1f" class="acf-block-steps-with-image c-mt-8 c-mb-8 c-pt-lg-10 c-pb-lg-9 js-acf-block-steps overflow-hidden" data-anim="fade-up">&#13;
<div class="container position-relative">&#13;
<div class="row">&#13;
&#13;
<div class="col-lg-6 acf-block-steps-with-image__right-column-wrapper">&#13;
<div class="acf-block-steps-with-image__images-wrapper position-relative">&#13;
<img decoding="async" src="https://forethought.ai/wp-content/themes/forethought/images/img__decor-circle.svg" alt="Decor Half Circle Orange" class="acf-block-steps-with-image__decor-dotted-circle d-none d-lg-block w-100 h-auto" width="100%" height="100%">&#13;
<div class="acf-block-steps-with-image__image-with-decor d-flex justify-content-center">&#13;
<img decoding="async" src="https://forethought.ai/wp-content/themes/forethought/images/img__empty.png" data-src="https://forethought.ai/wp-content/themes/forethought/images/decor__half-circle--orange.svg" alt="Decor Half Circle Orange" class="acf-block-steps-with-image__decor-half-circle lazyload d-block" width="100%" height="100%">&#13;
<img decoding="async" width="454" height="454" src="https://forethought.ai/wp-content/uploads/2021/10/steps__person-image.jpg" class="acf-block-steps-with-image__image d-block lazyload rounded-circle" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2021/10/steps__person-image.jpg 454w, https://forethought.ai/wp-content/uploads/2021/10/steps__person-image-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2021/10/steps__person-image-400x400.jpg 400w, https://forethought.ai/wp-content/uploads/2021/10/steps__person-image-100x100.jpg 100w, https://forethought.ai/wp-content/uploads/2021/10/steps__person-image-250x250.jpg 250w" sizes="(max-width: 454px) 100vw, 454px"> </div>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-lg-5 c-pr-xxl-8 c-mt-only-7 c-mt-lg-0">&#13;
&#13;
&#13;
<h2 class="h3" id="the-leading-platform-2">The leading platform for AI-first customer experiences.</h2>&#13;
&#13;
&#13;
&#13;
<div class="entry-content font-weight-medium c-mt-only-4 text-gray">&#13;
<p>See why our AI platform is built differently from the ground up.</p>
</div>&#13;
&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="js-steps-row c-pb-md-only-5">&#13;
&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="complete-customer-ex-3">Complete customer experience automation software</h3>&#13;
<p class="c-mt-only-3 mb-0">Transform your entire customer service lifecycle on one platform, from resolving common cases instantly to tagging and routing tickets and assisting agents with relevant knowledge.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="true-ai-4">True AI</h3>&#13;
<p class="c-mt-only-3 mb-0">Leave traditional chatbots behind with cutting-edge Natural Language Understanding models that train themselves on real conversation history and knowledge base articles.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="rapid-time-to-value-5">Rapid time to value</h3>&#13;
<p class="c-mt-only-3 mb-0">Accelerate ROI with expert-led implementation of our AI into your systems faster than any other solution.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h3 class="font-family-base" id="security-and-trust-6">Security and trust</h3>&#13;
<p class="c-mt-only-3 mb-0">Our proprietary technology undergoes regular security design reviews and is compliant with ISO 27001 and certified for SOC 2.</p>&#13;
</section>&#13;
&#13;
&#13;
<div class="d-none d-lg-flex row c-mt-7">&#13;
<div class="col-lg-4">&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Transform your entire customer service lifecycle on one platform, from resolving common cases instantly to tagging and routing tickets and assisting agents with relevant knowledge.">&#13;
<button class="step__button step__button--yellow-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Complete customer experience automation software</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Leave traditional chatbots behind with cutting-edge Natural Language Understanding models that train themselves on real conversation history and knowledge base articles.">&#13;
<button class="step__button step__button--yellow-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">True AI</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Accelerate ROI with expert-led implementation of our AI into your systems faster than any other solution.">&#13;
<button class="step__button step__button--yellow-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Rapid time to value</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Our proprietary technology undergoes regular security design reviews and is compliant with ISO 27001 and certified for SOC 2.">&#13;
<button class="step__button step__button--yellow-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Security and trust</button>&#13;
</span>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
</div>&#13;
</section>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content"></div></div></div></div>
</main>
<?php 
  include 'components/footer.php';
  ?>
<div class="js-main-footer-wrapper">
  <span class="js-cookie-link" data-cookie-policy-link="https://forethought.ai/cookie-declaration/"></span>
</div>
</div>
<nav id="mobile-navigation" class="js-mobile-navigation mobile-navigation">
<input class="mobile-navigation__trigger js-mobile-nav-trigger" id="mobile-nav-trigger" type="checkbox" />
<div class="mobile-navigation__menu">
<div class="container">
<div class="text-end">
<label class="mburger mburger--spin js-mburger-close d-inline-flex align-items-center justify-content-center p-0 c-p-only-3" for="mobile-nav-trigger">
<svg class="d-block" width="16" height="16" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.36048 8.04549L0.176121 1.86113C-0.0435348 1.64148 -0.0599545 1.30171 0.13945 1.10231L1.10232 0.139442C1.30172 -0.0599622 1.64149 -0.0435425 1.86114 0.176114L8.0455 6.36047L14.2299 0.176114C14.4495 -0.0435415 14.7893 -0.0599615 14.9887 0.139443L15.9516 1.10231C16.151 1.30172 16.1345 1.64148 15.9149 1.86113L9.73052 8.04549L15.9149 14.2299C16.1345 14.4495 16.151 14.7893 15.9516 14.9887L14.9887 15.9516C14.7893 16.151 14.4495 16.1345 14.2299 15.9149L8.0455 9.73051L1.86113 15.9149C1.64148 16.1345 1.30171 16.151 1.10231 15.9516L0.139442 14.9887C-0.0599622 14.7893 -0.0435425 14.4495 0.176114 14.2299L6.36048 8.04549Z" fill="#737373" />
</svg>
</label>
</div>
<div class="text-center">
<a href="https://forethought.ai/view-demo/" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-1 w-100">View Demo</a>
</div>
<div class="menu-main-navigation-container"><ul id="menu-main-navigation-1" class="list-unstyled d-flex d-lg-none flex-column align-items-center position-relative"><li class="dropdown--large menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-526 nav-item dropdown"><div class="dropdown-wrapper"><div class="dropdown-item-wrapper"><a href="https://forethought.ai/platform/" class="nav-link dropdown-toggle"><span class="dropdown-item-link">Platform</span><span class="dropdown-item-description"></span></a></div>
<div class="dropdown-menu">
<div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/supportgpt/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2023/03/supportgpt-1.svg" class="dropdown-item-icon d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">SupportGPT™</span><span class="dropdown-item-description">Generative AI powering the entire Forethought Platform</span></a></div><div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/platform/solve/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/solve-purple.svg" class="dropdown-item-icon d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">Solve</span><span class="dropdown-item-description">AI that answers a high volume of support tickets instantly</span></a></div><div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/platform/triage/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/triage-purple.svg" class="dropdown-item-icon d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">Triage</span><span class="dropdown-item-description">Predict, prioritize, and route</span></a></div><div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/platform/discover/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/analyze-purple.svg" class="dropdown-item-icon d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">Discover</span><span class="dropdown-item-description">Unlock proactive insights</span></a></div><div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/platform/assist/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/assist-purple.svg" class="dropdown-item-icon d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">Assist</span><span class="dropdown-item-description">Access all knowledge instantly</span></a></div></div>
</div></li>
<li class="dropdown--large menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-527 nav-item dropdown"><div class="dropdown-wrapper"><div class="dropdown-item-wrapper"><a href="https://forethought.ai/industries/" class="nav-link dropdown-toggle"><span class="dropdown-item-link">Industries</span><span class="dropdown-item-description"></span></a></div>
<div class="dropdown-menu">
<div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/industries/retail-and-e-commerce/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/retail.svg" class="dropdown-item-icon dropdown-item-icon--top-0 d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">E-commerce</span><span class="dropdown-item-description"></span></a></div><div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/industries/saas/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/saas.svg" class="dropdown-item-icon dropdown-item-icon--top-0 d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">SaaS</span><span class="dropdown-item-description"></span></a></div><div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/industries/financial-services/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/financial-services.svg" class="dropdown-item-icon dropdown-item-icon--top-0 d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">FinTech</span><span class="dropdown-item-description"></span></a></div><div class="dropdown-item-wrapper dropdown-item-wrapper--with-icon"><a href="https://forethought.ai/industries/travel/" class=" dropdown-item"><img width="1" height="1" src="https://forethought.ai/wp-content/uploads/2021/10/travel.svg" class="dropdown-item-icon dropdown-item-icon--top-0 d-block adjustable-element" alt decoding="async" loading="lazy" /><span class="dropdown-item-link">Travel</span><span class="dropdown-item-description"></span></a></div></div>
</div></li>
<li class="dropdown--large menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-535 nav-item dropdown"><div class="dropdown-wrapper"><div class="dropdown-item-wrapper"><a href="https://forethought.ai/resources/" class="nav-link dropdown-toggle"><span class="dropdown-item-link">Resources</span><span class="dropdown-item-description"></span></a></div>
<div class="dropdown-menu">
<div class="dropdown-item-wrapper"><a href="https://forethought.ai/resources/" class=" dropdown-item"><span class="dropdown-item-link">Resource Hub</span><span class="dropdown-item-description">Grow your knowledge</span></a></div><div class="dropdown-item-wrapper"><a href="https://forethought.ai/integrations/" class=" dropdown-item"><span class="dropdown-item-link">Integrations</span><span class="dropdown-item-description">Connect your support platforms</span></a></div><div class="dropdown-item-wrapper"><a href="https://forethought.ai/platform/security/" class=" dropdown-item"><span class="dropdown-item-link">Security</span><span class="dropdown-item-description">Protect customer data</span></a></div><div class="dropdown-item-wrapper"><a href="https://forethought.ai/customers/" class=" dropdown-item"><span class="dropdown-item-link">Customers</span><span class="dropdown-item-description">Read our success stories</span></a></div><div class="dropdown-item-wrapper"><a href="https://forethought.ai/press/" class=" dropdown-item"><span class="dropdown-item-link">Press</span><span class="dropdown-item-description">See what’s new</span></a></div><div class="dropdown-item-wrapper"><a href="https://forethought.ai/conversational-ai/" class=" dropdown-item"><span class="dropdown-item-link">Conversational AI</span><span class="dropdown-item-description">Learn the basics</span></a></div></div>
</div></li>
<li class="dropdown--small menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-536 nav-item dropdown"><div class="dropdown-wrapper"><div class="dropdown-item-wrapper"><a href="https://forethought.ai/about/" class="nav-link dropdown-toggle"><span class="dropdown-item-link">Company</span><span class="dropdown-item-description"></span></a></div>
<div class="dropdown-menu">
<div class="dropdown-item-wrapper"><a href="https://forethought.ai/about/" class="w-100 dropdown-item"><span class="dropdown-item-link">About Us</span><span class="dropdown-item-description"></span></a></div><div class="dropdown-item-wrapper"><a href="https://forethought.ai/careers/" class=" dropdown-item"><span class="dropdown-item-link">Careers</span><span class="dropdown-item-description">Join our team</span></a></div><div class="dropdown-item-wrapper"><a href="https://forethought.ai/partners/" class=" dropdown-item"><span class="dropdown-item-link">Partners</span><span class="dropdown-item-description">Build better experiences</span></a></div></div>
</div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-537 nav-item dropdown"><div class="dropdown-wrapper"><div class="dropdown-item-wrapper"><a href="https://forethought.ai/contact/" class="nav-link dropdown-toggle"><span class="dropdown-item-link">Contact</span><span class="dropdown-item-description"></span></a></div>
<div class="dropdown-menu">
<div class="dropdown-item-wrapper"><a href="https://support.forethought.ai/hc/en-us" class=" dropdown-item"><span class="dropdown-item-link">Support</span><span class="dropdown-item-description"></span></a></div></div>
</div></li>
<li class="navbar-button d-lg-none menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-521 current_page_item menu-item-538 nav-item active"><div class="dropdown-item-wrapper"><a href="https://forethought.ai/view-demo/" class="nav-link active"><span class="dropdown-item-link">View demo</span><span class="dropdown-item-description"></span></a></div></li>
</ul></div> </div>
</div>
</nav>
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
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/utils.min.js?ver=50c7bea9c2320e16728e44ae9fde5f26" id="gform_gravityforms_utils-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min.js?ver=54e7080aa7a02c83aa61fae430b9d869" id="gform_gravityforms_theme_vendors-js"></script>
<script id="gform_gravityforms_theme-js-extra">
/* <![CDATA[ */
var gform_theme_config = {"common":{"form":{"honeypot":{"version_hash":"7a9eb5878c0493f0529b309fb43ad57a"}}},"hmr_dev":"","public_path":"https:\/\/forethought.ai\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer="defer" data-rocket-src="https://forethought.ai/wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min.js?ver=bab19fd84843dabc070e73326d787910" id="gform_gravityforms_theme-js"></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_steps_with_image.bundle.js?ver=1713198706" id="steps-with-image-block-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() { jQuery(document).on('gform_post_render', function(event, formId, currentPage){if(formId == 2) {} } );jQuery(document).on('gform_post_conditional_logic', function(event, formId, fields, isInit){} ) } ); 
/* ]]> */
});</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
 gform.initializeOnLoaded( function() {jQuery(document).trigger("gform_pre_post_render", [{ formId: "2", currentPage: "1", abort: function() { this.preventDefault(); } }]);                if (event.defaultPrevented) {                return;         }        const gformWrapperDiv = document.getElementById( "gform_wrapper_2" );        if ( gformWrapperDiv ) {            const visibilitySpan = document.createElement( "span" );            visibilitySpan.id = "gform_visibility_test_2";            gformWrapperDiv.insertAdjacentElement( "afterend", visibilitySpan );        }        const visibilityTestDiv = document.getElementById( "gform_visibility_test_2" );        let postRenderFired = false;                function triggerPostRender() {            if ( postRenderFired ) {                return;            }            postRenderFired = true;            jQuery( document ).trigger( 'gform_post_render', [2, 1] );            gform.utils.trigger( { event: 'gform/postRender', native: false, data: { formId: 2, currentPage: 1 } } );            if ( visibilityTestDiv ) {                visibilityTestDiv.parentNode.removeChild( visibilityTestDiv );            }        }        function debounce( func, wait, immediate ) {            var timeout;            return function() {                var context = this, args = arguments;                var later = function() {                    timeout = null;                    if ( !immediate ) func.apply( context, args );                };                var callNow = immediate && !timeout;                clearTimeout( timeout );                timeout = setTimeout( later, wait );                if ( callNow ) func.apply( context, args );            };        }        const debouncedTriggerPostRender = debounce( function() {            triggerPostRender();        }, 200 );        if ( visibilityTestDiv && visibilityTestDiv.offsetParent === null ) {            const observer = new MutationObserver( ( mutations ) => {                mutations.forEach( ( mutation ) => {                    if ( mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null ) {                        debouncedTriggerPostRender();                        observer.disconnect();                    }                });            });            observer.observe( document.body, {                attributes: true,                childList: false,                subtree: true,                attributeFilter: [ 'style', 'class' ],            });        } else {            triggerPostRender();        }    } ); 
/* ]]> */
});</script>
</body>
</html>
