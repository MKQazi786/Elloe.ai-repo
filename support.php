

<!doctype html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" style="scroll-behavior: smooth;">
<head><meta charset="UTF-8" /><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="1.2.5.1",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this.t.bind(this),this.touchStartHandler=this.i.bind(this),this.touchMoveHandler=this.o.bind(this),this.touchEndHandler=this.h.bind(this),this.clickHandler=this.u.bind(this),this.interceptedClicks=[],this.interceptedClickListeners=[],this.l(this),window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.everythingLoaded&&this.m()})),document.addEventListener("DOMContentLoaded",(()=>{this.p()})),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}k(t){document.hidden?t.t():(this.triggerEvents.forEach((e=>window.addEventListener(e,t.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler))}_(){this.triggerEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}i(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this.L(t.target,!0),this.M(t.target,"onclick","rocket-onclick"),this.C())}o(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.O()}h(){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}u(t){t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this.O()}D(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))}))}l(t){EventTarget.prototype.addEventListenerBase=EventTarget.prototype.addEventListener,EventTarget.prototype.addEventListener=function(e,i,o){"click"!==e||t.windowLoaded||i===t.clickHandler||t.interceptedClickListeners.push({target:this,func:i,options:o}),(this||window).addEventListenerBase(e,i,o)}}L(t,e){this.interceptedClickListeners.forEach((i=>{i.target===t&&(e?t.removeEventListener("click",i.func,i.options):t.addEventListener("click",i.func,i.options))})),t.parentNode!==document.documentElement&&this.L(t.parentNode,e)}S(){return new Promise((t=>{this.T?this.O=t:t()}))}C(){this.T=!0}O(){this.T=!1}M(t,e,i){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(i,event.target.getAttribute(e)),event.target.removeAttribute(e))}t(){this._(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this.R.bind(this)):this.R()}p(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&0!==i.indexOf("data:")){0===i.indexOf("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.j(t,"preconnect")}async R(){this.lastBreath=Date.now(),this.P(this),this.F(this),this.q(),this.A(),this.I(),await this.U(this.delayedScripts.normal),await this.U(this.delayedScripts.defer),await this.U(this.delayedScripts.async);try{await this.W(),await this.H(this),await this.J()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.S().then((()=>{this.D()})),this.N()}A(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async B(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),i.hasAttribute("src")?(i.addEventListener("load",o),i.addEventListener("error",(function(){i.setAttribute("data-rocket-status","failed"),e()})),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o),t.addEventListener("error",(function(){t.setAttribute("data-rocket-status","failed"),e()})),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed"),e()}}));t.setAttribute("data-rocket-status","skipped")}async U(t){const e=t.shift();return e&&e.isConnected?(await this.B(e),this.U(t)):Promise.resolve()}I(){this.j([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}j(t,e){var i=document.createDocumentFragment();t.forEach((t=>{const o=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(o){const n=document.createElement("link");n.href=o,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),i.appendChild(n),this.trash.push(n)}})),document.head.appendChild(i)}P(t){let e={};function i(i,o){return e[o].eventsToRewrite.indexOf(i)>=0&&!t.everythingLoaded?"rocket-"+i:i}function o(t,o){!function(t){e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(o)}function n(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o||function(){},set(n){t.everythingLoaded?o=n:e["rocket"+i]=o=n}})}o(document,"DOMContentLoaded"),o(window,"DOMContentLoaded"),o(window,"load"),o(window,"pageshow"),o(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}F(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){if(o&&o.fn&&!t.allJQueries.includes(o)){o.fn.ready=o.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(o):document.addEventListener("rocket-DOMContentLoaded",(()=>e.bind(document)(o))),o([])};const e=o.fn.on;o.fn.on=o.fn.init.prototype.on=function(){return this[0]===window&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),e.apply(this,arguments),this},t.allJQueries.push(o)}e=o}o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}async H(t){const e=document.querySelector("script[data-webpack]");e&&(await async function(){return new Promise((t=>{e.addEventListener("load",t),e.addEventListener("error",t)}))}(),await t.K(),await t.H(t))}async W(){this.domReadyFired=!0,await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}async J(){await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted}),this.windowLoaded=!0}m(){document.onreadystatechange&&document.onreadystatechange(),window.onload&&window.onload(),window.onpageshow&&window.onpageshow({persisted:this.persisted})}q(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript;i||console.error("WPRocket unable to document.write this: "+e);const o=document.createRange(),n=i.parentElement;let s=t.get(i);void 0===s&&(s=i.nextSibling,t.set(i,s));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),n.insertBefore(c,s)}}async G(){Date.now()-this.lastBreath>45&&(await this.K(),this.lastBreath=Date.now())}async K(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}N(){this.trash.forEach((t=>t.remove()))}static run(){const t=new RocketLazyLoadScripts;t.k(t)}}RocketLazyLoadScripts.run()})();</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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

<title>SupportGPT: AI-First Customer Support Automation | Forethought</title>
<meta name="description" content="SupportGPT is the AI-first customer support automation platform, leveraging OpenAI’s LLMs—the same technology behind ChatGPT—and fine-tuned on your helpdesk data." />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<link rel="canonical" href="https://forethought.ai/supportgpt/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="SupportGPT: AI-First Customer Support Automation" />
<meta property="og:description" content="SupportGPT is the AI-first customer support automation platform, leveraging OpenAI’s LLMs—the same technology behind ChatGPT—and fine-tuned on your helpdesk data." />
<meta property="og:url" content="https://forethought.ai/supportgpt/" />
<meta property="og:site_name" content="Forethought" />
<meta property="og:updated_time" content="2024-01-26T08:46:38-08:00" />
<meta property="og:image" content="https://forethought.ai/wp-content/uploads/2023/03/image.png" />
<meta property="og:image:secure_url" content="https://forethought.ai/wp-content/uploads/2023/03/image.png" />
<meta property="og:image:width" content="800" />
<meta property="og:image:height" content="450" />
<meta property="og:image:alt" content="supportgpt: customer support automation powered by AI" />
<meta property="og:image:type" content="image/png" />
<meta property="article:published_time" content="2023-03-06T22:03:30-08:00" />
<meta property="article:modified_time" content="2024-01-26T08:46:38-08:00" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="SupportGPT: AI-First Customer Support Automation" />
<meta name="twitter:description" content="SupportGPT is the AI-first customer support automation platform, leveraging OpenAI’s LLMs—the same technology behind ChatGPT—and fine-tuned on your helpdesk data." />
<meta name="twitter:image" content="https://forethought.ai/wp-content/uploads/2023/03/image.png" />
<meta name="twitter:label1" content="Time to read" />
<meta name="twitter:data1" content="Less than a minute" />
<script type="application/ld+json" class="rank-math-schema-pro">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://forethought.ai/#organization","name":"Forethought"},{"@type":"WebSite","@id":"https://forethought.ai/#website","url":"https://forethought.ai","name":"Forethought","publisher":{"@id":"https://forethought.ai/#organization"},"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://forethought.ai/wp-content/uploads/2023/03/image.png","url":"https://forethought.ai/wp-content/uploads/2023/03/image.png","width":"800","height":"450","caption":"supportgpt: customer support automation powered by AI","inLanguage":"en-US"},{"@type":"BreadcrumbList","@id":"https://forethought.ai/supportgpt/#breadcrumb","itemListElement":[{"@type":"ListItem","position":"1","item":{"@id":"https://forethought.ai","name":"Home"}},{"@type":"ListItem","position":"2","item":{"@id":"https://forethought.ai/supportgpt/","name":"SupportGPT: AI-First Customer Support Automation Platform"}}]},{"@type":"WebPage","@id":"https://forethought.ai/supportgpt/#webpage","url":"https://forethought.ai/supportgpt/","name":"SupportGPT: AI-First Customer Support Automation | Forethought","datePublished":"2023-03-06T22:03:30-08:00","dateModified":"2024-01-26T08:46:38-08:00","isPartOf":{"@id":"https://forethought.ai/#website"},"primaryImageOfPage":{"@id":"https://forethought.ai/wp-content/uploads/2023/03/image.png"},"inLanguage":"en-US","breadcrumb":{"@id":"https://forethought.ai/supportgpt/#breadcrumb"}},{"@type":"Person","@id":"https://forethought.ai/author/it-services/","name":"IT Services","url":"https://forethought.ai/author/it-services/","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","url":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","caption":"IT Services","inLanguage":"en-US"},"worksFor":{"@id":"https://forethought.ai/#organization"}},{"@type":"Article","headline":"SupportGPT: AI-First Customer Support Automation | Forethought","keywords":"customer support automation","datePublished":"2023-03-06T22:03:30-08:00","dateModified":"2024-01-26T08:46:38-08:00","author":{"@id":"https://forethought.ai/author/it-services/","name":"IT Services"},"publisher":{"@id":"https://forethought.ai/#organization"},"description":"SupportGPT is the AI-first customer support automation platform, leveraging OpenAI\u2019s LLMs\u2014the same technology behind ChatGPT\u2014and fine-tuned on your helpdesk data.","name":"SupportGPT: AI-First Customer Support Automation | Forethought","@id":"https://forethought.ai/supportgpt/#richSnippet","isPartOf":{"@id":"https://forethought.ai/supportgpt/#webpage"},"image":{"@id":"https://forethought.ai/wp-content/uploads/2023/03/image.png"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://forethought.ai/supportgpt/#webpage"}}]}</script>

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
<link rel="stylesheet" id="default-page-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/default_page.css?ver=240418-105449" media="all" />
<link rel="stylesheet" id="vendor-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/vendor.css?ver=240418-105451" media="all" />
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/default_page.bundle.js?ver=1713438668" id="default-page-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/vendor.bundle.js?ver=1713438668" id="vendor-scripts-js" defer></script>
<link rel="https://api.w.org/" href="https://forethought.ai/wp-json/" /><link rel="alternate" type="application/json" href="https://forethought.ai/wp-json/wp/v2/pages/6834" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://forethought.ai/xmlrpc.php?rsd" />
<link rel="shortlink" href="https://forethought.ai/?p=6834" />
<link rel="alternate" type="application/json+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fsupportgpt%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fsupportgpt%2F&#038;format=xml" />
</head>
<body class="page-template-default page page-id-6834">
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
<main id="main">
<section class="hero-section hero-section-11 overflow-hidden position-relative">
<div class="container">
<div class="row">
<div class="hero-section-11__content-wrapper col-12 position-relative z-index-2 text-center">
<h1 class="hero-section-11__title text-center mx-auto">SupportGPT: <p>The AI-First Customer Support Automation Platform</h1>
<div class="hero-section-11__content entry-content text-gray fw-medium mx-auto c-mt-5 line-height-1-6 text-center">
AI-first customer support automation is now a reality.
Make your helpdesk superhuman! </div>
<a href="https://forethought.ai/playground/" target="_blank" rel="nofollow" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--medium crunch-button__outline--purple-gradient c-mt-5">Try it now</a>
<div class="hero-section-11__image-1-wrapper position-absolute">
<img width="400" height="400" src="https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-400x400.jpeg" class="hero-section-11__image-1 d-block rounded-circle position-relative z-index-2" alt decoding="async" srcset="https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-400x400.jpeg 400w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-150x150.jpeg 150w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-445x445.jpeg 445w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-500x500.jpeg 500w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-600x600.jpeg 600w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-100x100.jpeg 100w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-200x200.jpeg 200w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-650x650.jpeg 650w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-800x800.jpeg 800w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-1000x1000.jpeg 1000w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-250x250.jpeg 250w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-300x300.jpeg 300w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-768x768.jpeg 768w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356-1024x1024.jpeg 1024w, https://forethought.ai/wp-content/uploads/2023/03/Adobe-Stock-scaled-e1678147484356.jpeg 1216w" sizes="(max-width: 400px) 100vw, 400px" /> <svg class="h-auto position-absolute z-index-1" viewBox="0 0 177 178" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M177 178C177 80.3332 97.1181 -3.50785e-06 1.52588e-05 -7.7726e-06C1.26782e-05 59.3101 1.00945e-05 118.69 7.51388e-06 178C58.9769 178 118.023 178 177 178Z" fill="#66E0F6" />
</svg>
</div>
<img width="400" height="400" src="https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-400x400.png" class="hero-section-11__image-2 d-block rounded-circle position-absolute" alt data-anim="zoom-in" data-anim-zoom-start="0" decoding="async" srcset="https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-400x400.png 400w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-150x150.png 150w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-445x444.png 445w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-500x499.png 500w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-600x599.png 600w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-100x100.png 100w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-200x200.png 200w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3-250x250.png 250w, https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-3.png 612w" sizes="(max-width: 400px) 100vw, 400px" />
</div>
</div>
</div>
<svg class="hero-section-11__circle position-absolute mx-auto z-index-minus-1" width="1440" height="725" viewBox="0 0 1440 725" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="722" cy="-33" r="757.5" stroke="#C4C4C4" stroke-dasharray="8 8" />
</svg>
</section>
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
</div></div></div></div>&#13;
<section id="acf-block-content-with-media-block_6820e16196b5fd73b5c451c9c7c45a88" class="acf-block-content-with-media c-pt-lg-7" data-anim="fade-up">&#13;
<div class="container position-relative">&#13;
<div class="row align-items-center">&#13;
<div class="col-12 col-md-6 c-mt-md-7 c-mt-lg-9 c-pr-md-8 ">&#13;
&#13;
&#13;
<h2 class="font-size-36 line-height-1-4" id="the-complete-ai-fir-1">The Complete, AI-First Customer Support Automation Platform</h2>&#13;
&#13;
&#13;
&#13;
<div class="entry-content font-size-18 line-height-1-7 text-gray c-mt-6 c-mt-md-4">&#13;
<p>SupportGPT leverages Large Language Models&#x2014;the same technology behind OpenAI&#x2019;s ChatGPT&#x2014;and fine-tunes them on your customers&#x2019; conversation history.</p>
<p><a href="https://forethought.ai/platform/solve/autoflows-for-solve/">Autoflows</a> are first-of-its-kind, advanced customer support automation built into SupportGPT. Support agents can specify their objectives in plain language, triggering an Autoflow to find and build relevant policies, steps and actions focused on that goal.</p>
<p>The AI then communicates with the customer autonomously and on-brand as it resolves issues and recommends next best actions.</p>
<p>&#xA0;</p>
</div>&#13;
&#13;
&#13;
&#13;
</div>&#13;
&#13;
<div class="col-12 col-md-6 c-mt-10 c-mt-md-0 c-px-md-1">&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="1" height="1" src="https://forethought.ai/wp-content/uploads/2023/03/SupportGPT-2.svg" class="ms-lg-auto adjustable-element d-block lazyload" alt data-lazy="true">&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-steps-block_47f2f87b6dba1e7e1a417b1d3806da13" class="acf-block-steps c-mt-0 c-pt-lg-0 c-pb-lg-9 js-acf-block-steps position-relative overflow-hidden" data-anim="fade-up">&#13;
&#13;
&#13;
<div class="container position-relative">&#13;
<div class="row justify-content-center">&#13;
<div class="col-lg-10 col-xl-7 text-center">&#13;
&#13;
&#13;
&#13;
&#13;
&#13;
<div class="js-steps-row c-py-lg-only-5">&#13;
&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="human-like-conversat-2">Human-like conversations</h2>&#13;
<p class="c-mt-only-3 mb-0">Empathetic, dynamic responses&#x2014;powered by the same AI models behind ChatGPT&#x2014;which adapt to conversation and user context. SupportGPT customer support automation AI executes natural conversations between customers and AI models trained on your trusted data and real, historical agent interactions.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="automated-workflow-d-3">Automated workflow discovery</h2>&#13;
<p class="c-mt-only-3 mb-0">Fully integrated customer support automation uses your conversation history to detect intents and uncover new workflows automatically. Discover process gaps, then generate workflows automatically for any scenario based on past agent conversations, brand preferences, and user prompts.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="complete-agent-respo-4">Complete agent responses</h2>&#13;
<p class="c-mt-only-3 mb-0">Agents get fully-formed suggested responses automatically&#x2014;customer support automation is based on ticket context and powered by generative AI.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="gap-analysis-conte-5">Gap analysis &amp; content generation</h2>&#13;
<p class="c-mt-only-3 mb-0">Be notified of support coverage gaps and use AI-powered customer support automation to generate new knowledge articles to fill gaps and lower case volume. </p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="accelerate-time-to-v-6">Accelerate time to value for your team and your customers</h2>&#13;
<p class="c-mt-only-3 mb-0">See immediate results with hassle-free implementation and easily edit an autoflow using natural language, freeing up time for strategic, complex tasks that require a human.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="customer-support-aut-7">Customer support automation powered by trusted and secure AI</h2>&#13;
<p class="c-mt-only-3 mb-0">Rest easy knowing we take data privacy and security seriously and are trusted by top brands. Our proprietary technology undergoes regular security design reviews and is compliant with ISO 27001 and certified for SOC 2.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="trained-on-your-cust-8">Trained on your customer support data</h2>&#13;
<p class="c-mt-only-3 mb-0">Leave traditional bots behind with cutting-edge Natural Language Understanding models that train themselves on Large Language Models as well as real conversation history and knowledge base articles.</p>&#13;
</section>&#13;
&#13;
&#13;
&#13;
<section class="d-lg-none c-mt-only-6">&#13;
<h2 class="font-family-base" id="true-partnership-9">True partnership </h2>&#13;
<p class="c-mt-only-3 mb-0">We don&#x2019;t abandon you when the contract is signed. Forethought&#x2019;s CX team provides white-glove service every step of the way, ensuring your continued ROI.</p>&#13;
</section>&#13;
&#13;
&#13;
<div class="d-none d-lg-flex row c-mt-7">&#13;
<div class="col-lg-5 offset-lg-1 col-xl-7 offset-xl-0">&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Empathetic, dynamic responses&#x2014;powered by the same AI models behind ChatGPT&#x2014;which adapt to conversation and user context. SupportGPT customer support automation AI executes natural conversations between customers and AI models trained on your trusted data and real, historical agent interactions.">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Human-like conversations</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Fully integrated customer support automation uses your conversation history to detect intents and uncover new workflows automatically. Discover process gaps, then generate workflows automatically for any scenario based on past agent conversations, brand preferences, and user prompts.">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Automated workflow discovery</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Agents get fully-formed suggested responses automatically&#x2014;customer support automation is based on ticket context and powered by generative AI.">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Complete agent responses</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Be notified of support coverage gaps and use AI-powered customer support automation to generate new knowledge articles to fill gaps and lower case volume. ">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Gap analysis &amp; content generation</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="See immediate results with hassle-free implementation and easily edit an autoflow using natural language, freeing up time for strategic, complex tasks that require a human.">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Accelerate time to value for your team and your customers</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Rest easy knowing we take data privacy and security seriously and are trusted by top brands. Our proprietary technology undergoes regular security design reviews and is compliant with ISO 27001 and certified for SOC 2.">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Customer support automation powered by trusted and secure AI</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="Leave traditional bots behind with cutting-edge Natural Language Understanding models that train themselves on Large Language Models as well as real conversation history and knowledge base articles.">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">Trained on your customer support data</button>&#13;
</span>&#13;
&#13;
&#13;
&#13;
<span class="step js-step d-block" data-bs-custom-class="step-popover" tabindex="0" data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="right" data-bs-content="We don&#x2019;t abandon you when the contract is signed. Forethought&#x2019;s CX team provides white-glove service every step of the way, ensuring your continued ROI.">&#13;
<button class="step__button step__button--purple-gradient border-0 bg-transparent d-block font-size-24 pe-0 position-relative w-100 text-start" type="button">True partnership </button>&#13;
</span>&#13;
&#13;
</div>&#13;
</div>&#13;
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
<div id="acf-block-text-call-to-action-block_8d2488c26172fb94774188ef713ec2fe" class="acf-block-text-call-to-action c-mt-0 c-mb-0 c-pt-0 c-pb-0 bg-white" data-anim="fade-up">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-12 col-lg-8 mx-auto text-center">&#13;
&#13;
&#13;
<h2 class="acf-block-text-call-to-action__title font-size-36 line-height-1-4" id="see-it-live-in-actio-10">See it live in action.</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-text-call-to-action__text acf-block-text-call-to-action__text--bolded entry-content font-size-18 line-height-1-5 text-gray c-px-lg-6 c-mt-6 c-mt-lg-3">&#13;
<p style="text-align: center;">The bots below have been automatically trained in the <a href="https://forethought.ai/playground" target="_blank" rel="noopener">SupportGPT&#x2122; Playground</a> using the organization&#x2019;s public-facing help center URL.</p>
<p style="text-align: center;">Click into each bot to try it for yourself. Then create your own!</p>
</div>&#13;
&#13;
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
<div id="acf-block-knowledge-base-block_abed08881b12c950229f74f06cb5a24c" class="acf-block-knowledge-base c-pt-9 c-pb-9 overflow-hidden">&#13;
&#13;
<div class="container position-relative">&#13;
&#13;
&#13;
<div class="row position-relative justify-content-center">&#13;
&#13;
&#13;
&#13;
&#13;
<div class="col-lg-4 col-md-6 c-mt-5 text-center">&#13;
<article class="acf-block-knowledge-base__item d-flex flex-column align-items-center justify-content-between bg-white h-100 c-py-5 c-px-4">&#13;
&#13;
<div>&#13;
&#13;
<h2 class="acf-block-knowledge-base__title line-height-1-4" id="macys-11">Macy&#x2019;s</h2>&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-knowledge-base__content font-size-18 mx-auto c-mt-3"><p>Ordered the wrong size? Curious about shipping policies? See how SupportGPT customer support automation could help!</p>
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<a href="https://playground.forethought.ai/#uid=TtQQZ8Dfepp1" target="_blank" rel="nofollow" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-3">Open Playground</a>&#13;
&#13;
&#13;
</article>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="col-lg-4 col-md-6 c-mt-5 text-center">&#13;
<article class="acf-block-knowledge-base__item d-flex flex-column align-items-center justify-content-between bg-white h-100 c-py-5 c-px-4">&#13;
&#13;
<div>&#13;
&#13;
<h2 class="acf-block-knowledge-base__title line-height-1-4" id="irs-12">IRS</h2>&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-knowledge-base__content font-size-18 mx-auto c-mt-3"><p>Nobody loves tax season&#x2026;but what if you had generative AI to help sift through all the IRS help docs?</p>
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<a href="https://playground.forethought.ai/#uid=xYzFG6dgDrnF" target="_blank" rel="nofollow" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-3">Open Playground</a>&#13;
&#13;
&#13;
</article>&#13;
</div>&#13;
&#13;
&#13;
&#13;
<div class="col-lg-4 col-md-6 c-mt-5 text-center">&#13;
<article class="acf-block-knowledge-base__item d-flex flex-column align-items-center justify-content-between bg-white h-100 c-py-5 c-px-4">&#13;
&#13;
<div>&#13;
&#13;
<h2 class="acf-block-knowledge-base__title line-height-1-4" id="lyft-13">Lyft</h2>&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-knowledge-base__content font-size-18 mx-auto c-mt-3"><p>Where&#x2019;s your ride? How do you get a refund? See how SupportGPT AI does customer support automation </p>
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
<a href="https://playground.forethought.ai/#uid=ChwRllBUTqrK" target="_blank" rel="nofollow" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-3">Open Playground</a>&#13;
&#13;
&#13;
</article>&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-text-call-to-action-block_3a5687a9cfc265be5ee754b732c41542" class="acf-block-text-call-to-action c-pt-8 c-pb-8 bg-blue-light" data-anim="fade-up">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-12 col-lg-8 mx-auto text-center">&#13;
&#13;
&#13;
<h2 class="acf-block-text-call-to-action__title font-size-36 line-height-1-4" id="ready-for-your-own-t-14">Ready for your own test drive?</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-text-call-to-action__text acf-block-text-call-to-action__text--bolded entry-content font-size-18 line-height-1-5 text-gray c-px-lg-6 c-mt-6 c-mt-lg-3">&#13;
<p style="text-align: center;">Create a SupportGPT&#x2122; account below to simulate what generative AI can do with your company&#x2019;s help center.</p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/playground" target="_blank" rel="nofollow" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-8 c-mt-lg-5">Build My Bot</a>&#13;
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
<section id="acf-block-call-to-action-with-logos-block_ffe58a71142d70036ca9910c4d1fd97a" class="acf-block-call-to-action-with-logos c-mt-10 c-mb-9 position-relative z-index-2" data-anim="fade-in">&#13;
<div class="container">&#13;
<div class="row align-items-center">&#13;
<div class="col-12 col-md-5">&#13;
&#13;
&#13;
<h2 class="acf-block-call-to-action-with-logos__title h3" id="see-the-only-complet-15">See the only complete customer support automation platform.</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-call-to-action-with-logos__content line-height-1-6 font-size-18 text-gray c-mt-4 fw-normal"><p><span style="font-weight: 400;">Forethought&#x2019;s SupportGPT&#x2122; Platform infuses generative AI throughout the entire customer support lifecycle.</span></p>
<p>Let us show you what it can do for your organization.</p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://forethought.ai/view-demo" target="_blank" rel="nofollow" class=" crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-4">Contact Sales </a>&#13;
&#13;
</div>&#13;
&#13;
<div class="col-12 col-md-7 c-mt-sm-6 position-relative">&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="664" height="576" src="https://forethought.ai/wp-content/uploads/2021/10/Group-1121.png" class="acf-block-call-to-action-with-logos__background d-none d-sm-block lazyload adjustable-element d-block position-absolute c-mt-1 c-mx-5 c-mt-5 c-mt-sm-0" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2021/10/Group-1121.png 664w, https://forethought.ai/wp-content/uploads/2021/10/Group-1121-100x87.png 100w, https://forethought.ai/wp-content/uploads/2021/10/Group-1121-650x564.png 650w" sizes="(max-width: 664px) 100vw, 664px">&#13;
&#13;
<div class="acf-block-call-to-action-with-logos__logo-box bg-white c-my-10 c-px-3 c-py-7 mx-auto">&#13;
<div class="d-flex flex-row flex-wrap align-items-center justify-content-center flex-column flex-sm-row">&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-call-to-action-with-logos__logo-wrapper d-flex align-items-center justify-content-center  acf-block-call-to-action-with-logos__logo-wrapper--with-styles" style="--image-width: 6.25rem; --image-mobile-width: 5rem;">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="140" height="159" src="https://forethought.ai/wp-content/uploads/2023/03/Best-Analytics-and-AI-Products-2023-1-1-e1678242323997.png" class="single-logo lazyload adjustable-element d-block c-mt-1 c-mx-5 c-mt-5 c-mt-sm-0" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2023/03/Best-Analytics-and-AI-Products-2023-1-1-e1678242323997.png 140w, https://forethought.ai/wp-content/uploads/2023/03/Best-Analytics-and-AI-Products-2023-1-1-e1678242323997-100x114.png 100w" sizes="(max-width: 140px) 100vw, 140px">&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<div class="acf-block-call-to-action-with-logos__logo-wrapper d-flex align-items-center justify-content-center  acf-block-call-to-action-with-logos__logo-wrapper--with-styles" style="--image-width: 6.25rem; --image-mobile-width: 5rem;">&#13;
&#13;
&#13;
&#13;
<img loading="lazy" decoding="async" width="140" height="159" src="https://forethought.ai/wp-content/uploads/2023/03/Best-Customer-Service-Products-2023-1-1-e1678242335328.png" class="single-logo lazyload adjustable-element d-block c-mt-1 c-mx-5 c-mt-5 c-mt-sm-0" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2023/03/Best-Customer-Service-Products-2023-1-1-e1678242335328.png 140w, https://forethought.ai/wp-content/uploads/2023/03/Best-Customer-Service-Products-2023-1-1-e1678242335328-100x114.png 100w" sizes="(max-width: 140px) 100vw, 140px">&#13;
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
</section><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
&#13;
</div></div></div>&#13;
&#13;
<section id="acf-block-cta-block_a2b50f26d2fb59f478c6000f011e3f48" class="acf-block-cta position-relative bg-secondary c-pt-lg-8 overflow-hidden">&#13;
<div class="container position-relative z-index-1" data-anim="fade-up">&#13;
<div class="row">&#13;
<div class="col-lg-5">&#13;
&#13;
&#13;
<h2 class="font-size-45 text-white" id="think-outside-the-bo-16">Think outside the bot.&#x2122;</h2>&#13;
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
<path d="M45 351L45.0001 316.123C45.0002 282.986 71.863 256.123 105 256.123L194 256.123C227.137 256.122 254 229.26 254 196.123L254 105C254 71.8629 280.863 45 314 45L1050 45" stroke="url(#acf-block-cta-block_a2b50f26d2fb59f478c6000f011e3f48-1)" stroke-width="90" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_a2b50f26d2fb59f478c6000f011e3f48-1" x1="531.438" y1="50.417" x2="531.691" y2="348.811" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
&#13;
<svg width="23.1875rem" height="16rem" class="acf-block-cta__decor-svg acf-block-cta__decor-svg--mobile d-lg-none" viewbox="0 0 375 258" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<title>Call to action decor</title>&#13;
<path d="M-64.4478 228L-64.4477 205.411C-64.4476 183.95 -47.0497 166.552 -25.5884 166.552L32.0533 166.552C53.5147 166.552 70.9126 149.154 70.9126 127.693L70.9126 68.6764C70.9126 47.2149 88.3106 29.8169 109.772 29.8169L586.448 29.8169" stroke="url(#acf-block-cta-block_a2b50f26d2fb59f478c6000f011e3f48-2)" stroke-width="58.2891" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_a2b50f26d2fb59f478c6000f011e3f48-2" x1="250.597" y1="33.3253" x2="250.761" y2="226.582" gradientunits="userSpaceOnUse">&#13;
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

<link rel="stylesheet" id="content-with-media-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_content_with_media.css?ver=240418-105438" media="all" />
<link rel="stylesheet" id="steps-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_steps.css?ver=240418-105445" media="all" />
<link rel="stylesheet" id="text-call-to-action-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_text_call_to_action.css?ver=240418-105446" media="all" />
<link rel="stylesheet" id="knowledge-base-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_knowledge_base.css?ver=240418-105440" media="all" />
<link rel="stylesheet" id="call-to-action-with-logos-block-styles-css" href="https://forethought.ai/wp-content/themes/forethought/dist/acf_block_call_to_action_with_logos.css?ver=240418-105436" media="all" />
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
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_steps.bundle.js?ver=1713438704" id="steps-block-scripts-js" defer></script>
</body>
</html>
