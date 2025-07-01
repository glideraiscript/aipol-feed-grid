<?php
require_once("asset/aipolfeed.php");
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>AiPol Pollinations Feed Grid</title>
<link rel="stylesheet" href="css/feed.css">
<link rel="icon" type="image/png" sizes="32x32" href="ico.png">
<meta name="theme-color" content="#000000"/>
<meta name="description" content="🦄 AiPol Pollinations Feed"/>
<meta property="og:title" content="AiPol Pollinations Feed"/>
<meta property="og:description" content="🦄 AiPol Pollinations Feed"/>
<meta property="og:image" content="https://www.clivio.biz/banner.webp"/>
<meta property="og:image:width" content="1280"/>
<meta property="og:image:height" content="720"/>
<meta property="og:url" content="https://www.clivio.biz/aipol-feed-pollinations"/>
<meta property="og:type" content="website"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="AiPol Pollinations Feed"/>
<meta name="twitter:description" content="🦄 AiPol Pollinations Feed"/>
<meta name="twitter:image" content="https://www.clivio.biz/AiPolFeed/banner.webp"/>
<meta property="twitter:creator" content="clivio.biz"/>
	<link rel="manifest" href="manifestfeed.json">
	<script src="js/cb.js"></script>
<script src="indexfeed.js"></script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Organization","name":"Clivio.biz","url":"https://clivio.biz","logo":"https://clivio.biz/logo.png","sameAs":["https://www.cliviobotticelli.it"],"description":"Clivio.biz offre strumenti AI gratuiti e open source per la generazione di immagini, testi, PDF e altro. Accessibile a tutti senza costi.","contactPoint":{"@type":"ContactPoint","contactType":"supporto clienti","email":"info@clivio.biz","url":"https://clivio.biz/contatti","availableLanguage":["Italian","English"]},"hasOfferCatalog":{"@type":"OfferCatalog","name":"Catalogo Servizi AI Gratuiti","itemListElement":[{"@type":"OfferCatalog","name":"Generazione Contenuti AI","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"SoftwareApplication","name":"AiPol - Generatore di immagini AI","applicationCategory":"ImageGeneratorApplication","operatingSystem":"All","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}},{"@type":"Offer","itemOffered":{"@type":"SoftwareApplication","name":"Chat AI Gratuita","applicationCategory":"ChatApplication","operatingSystem":"All","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}},{"@type":"Offer","itemOffered":{"@type":"CreativeWork","name":"AiBook - Mini eBook","genre":"AI generated content","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}}]},{"@type":"OfferCatalog","name":"Documenti e PDF","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"SoftwareApplication","name":"Converti File TXT in PDF – TXT to PDF Converter","applicationCategory":"Utility","operatingSystem":"All","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}},{"@type":"Offer","itemOffered":{"@type":"SoftwareApplication","name":"Script Python per Conversione da PDF a DOCX","applicationCategory":"Utility","programmingLanguage":"Python","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}},{"@type":"Offer","itemOffered":{"@type":"CreativeWork","name":"PDF + Audio per Ottimizzare il sonno","genre":"Health & Wellness","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}}]},{"@type":"OfferCatalog","name":"Strumenti Python e Script","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"SoftwareSourceCode","name":"Script Python per Automazione e Aggiornamento Pacchetti","programmingLanguage":"Python","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}}]},{"@type":"OfferCatalog","name":"Video e Multimedia AI","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"SoftwareApplication","name":"VideoClipAi - Generatore Video AI","applicationCategory":"VideoEditingApplication","operatingSystem":"All","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}}]},{"@type":"OfferCatalog","name":"Prodotti Vari","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"CreativeWork","name":"100 Prompt AI per Creatività e Produttività","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}},{"@type":"Offer","itemOffered":{"@type":"CreativeWork","name":"Decluttering Digitale - Guida e Strumenti","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}},{"@type":"Offer","itemOffered":{"@type":"CreativeWork","name":"Focus e Dopamina - Tecniche e Risorse","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR","availability":"https://schema.org/InStock"}}}]}]}}
</script>
</head>
<body>
  <h1>AiPol Live Pollinations Feed</h1>
  <div id="grid"></div>

 <div style="position:fixed;width:98%;bottom:0px;margin: 0 auto;text-align:center;font-size: 0.9rem;">

<div class="form-container" style="font-size: 0.8rem;bottom:30px;">
  <button type="button" id="my-custom-paypal-button"> 
     &nbsp; &nbsp; &copy; <?php echo date("Y"); ?> Clivio Botticelli | <font style='color:yellow'>Make a free donation &nbsp; &nbsp;</font>
  <br><font style="font-size:0.8em">This is an open source project not affiliated with any of the brands used.
    </font>
	<br><font style="font-size:0.6em">⚠️ The images generated automatically in real time are not verified in any way.</font>
  </button>

</div>
  <div id="paypal-donate-original-container">
    <div id="donate-button"></div>
    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
    <script>
function _0x2bb5(){var _0x5d86c9=['4671tLPwtN','Button','2473812DftHJO','52029aRQXol','PayPal\x20-\x20The\x20safer,\x20easier\x20way\x20to\x20pay\x20online!','3JdWONg','305252GWbteQ','18ZmwRZp','1400FRARls','6625560rFLVaC','https://www.paypalobjects.com/en_US/IT/i/btn/btn_donateCC_LG.gif','30ZtcfEj','B5HAXHVE48E24','#donate-button','Donate\x20with\x20PayPal\x20button','render','66HutbAf','2263195ebAlLB','1487283RGvewC'];_0x2bb5=function(){return _0x5d86c9;};return _0x2bb5();}function _0x405a(_0xbe54a8,_0x19f82b){var _0x2bb56c=_0x2bb5();return _0x405a=function(_0x405ad0,_0x1d2175){_0x405ad0=_0x405ad0-0x16a;var _0x14ba7d=_0x2bb56c[_0x405ad0];return _0x14ba7d;},_0x405a(_0xbe54a8,_0x19f82b);}var _0x457aa7=_0x405a;(function(_0x5b575f,_0x31f671){var _0x46e12a=_0x405a,_0x5dbe77=_0x5b575f();while(!![]){try{var _0x4a2efd=-parseInt(_0x46e12a(0x170))/0x1*(parseInt(_0x46e12a(0x17b))/0x2)+-parseInt(_0x46e12a(0x175))/0x3*(parseInt(_0x46e12a(0x176))/0x4)+-parseInt(_0x46e12a(0x16e))/0x5+-parseInt(_0x46e12a(0x177))/0x6*(-parseInt(_0x46e12a(0x16f))/0x7)+parseInt(_0x46e12a(0x179))/0x8+-parseInt(_0x46e12a(0x173))/0x9*(-parseInt(_0x46e12a(0x178))/0xa)+-parseInt(_0x46e12a(0x16d))/0xb*(parseInt(_0x46e12a(0x172))/0xc);if(_0x4a2efd===_0x31f671)break;else _0x5dbe77['push'](_0x5dbe77['shift']());}catch(_0x24b374){_0x5dbe77['push'](_0x5dbe77['shift']());}}}(_0x2bb5,0x6b2eb),PayPal['Donation'][_0x457aa7(0x171)]({'env':'production','hosted_button_id':_0x457aa7(0x17c),'image':{'src':_0x457aa7(0x17a),'alt':_0x457aa7(0x16b),'title':_0x457aa7(0x174)}})[_0x457aa7(0x16c)](_0x457aa7(0x16a)));
    </script>
  </div>
</div>

<script>
const _0x48fb0c=_0x4069;function _0x4069(_0x4b7118,_0x32d953){const _0x52c2af=_0x52c2();return _0x4069=function(_0x4069db,_0x4b5d17){_0x4069db=_0x4069db-0x67;let _0xa1e5d0=_0x52c2af[_0x4069db];return _0xa1e5d0;},_0x4069(_0x4b7118,_0x32d953);}(function(_0x4b94b7,_0x1f4253){const _0xbbb003=_0x4069,_0x420f91=_0x4b94b7();while(!![]){try{const _0x4bc2c1=-parseInt(_0xbbb003(0x79))/0x1+parseInt(_0xbbb003(0x71))/0x2+-parseInt(_0xbbb003(0x7a))/0x3+-parseInt(_0xbbb003(0x76))/0x4*(parseInt(_0xbbb003(0x7b))/0x5)+-parseInt(_0xbbb003(0x6d))/0x6+-parseInt(_0xbbb003(0x68))/0x7*(-parseInt(_0xbbb003(0x67))/0x8)+parseInt(_0xbbb003(0x77))/0x9;if(_0x4bc2c1===_0x1f4253)break;else _0x420f91['push'](_0x420f91['shift']());}catch(_0x31db9a){_0x420f91['push'](_0x420f91['shift']());}}}(_0x52c2,0x3bdae),document[_0x48fb0c(0x78)](_0x48fb0c(0x73),function(){const _0x5888a4=_0x48fb0c,_0x4f3b20=document['getElementById']('my-custom-paypal-button'),_0x1fc5ac=document[_0x5888a4(0x74)](_0x5888a4(0x6c));if(_0x4f3b20&&_0x1fc5ac){const _0x5e2dd5=_0x4f3b20[_0x5888a4(0x75)]();_0x1fc5ac[_0x5888a4(0x6b)][_0x5888a4(0x72)]=_0x5e2dd5[_0x5888a4(0x72)]+'px',_0x1fc5ac['style'][_0x5888a4(0x6f)]=_0x5e2dd5[_0x5888a4(0x6f)]+'px',_0x1fc5ac[_0x5888a4(0x6b)]['left']=_0x5e2dd5['left']+'px',_0x1fc5ac[_0x5888a4(0x6b)]['top']=_0x5e2dd5['top']+'px',_0x4f3b20[_0x5888a4(0x78)](_0x5888a4(0x70),function(){const _0x429784=_0x5888a4,_0x3b46ba=document['getElementById']('donate-button')[_0x429784(0x6a)]('a')||document['getElementById'](_0x429784(0x6e))[_0x429784(0x6a)](_0x429784(0x69));_0x3b46ba&&_0x3b46ba[_0x429784(0x70)]();});}}));function _0x52c2(){const _0xba80ac=['233808jWsyOC','width','DOMContentLoaded','getElementById','getBoundingClientRect','1766948YsBPWX','8916876ZEOSrL','addEventListener','168609nudOdX','479826uSaDMt','5ZzBYwK','954344lCbrCm','7pjjgcY','img','querySelector','style','paypal-donate-original-container','1269042gvVXjB','donate-button','height','click'];_0x52c2=function(){return _0xba80ac;};return _0x52c2();}
</script>

  </div>



  <div id="popup">
    <div id="popup-text">
      <span id="prompt-content"></span>
      <button id="copy-btn" title="Copia prompt">Copy Prompt 📋</button>
    </div><center>
    <img src="" alt="Full view" />
	</center>
 </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/app.min.js"></script>
<div id="cookie-banner" class="cookie-banner hidden">
  <div class="cookie-box" style="color:black">
    <p>
This site uses only essential technical cookies for the operation and security of the session.
No user data is tracked or shared. For more information, see the
      <a href="https://www.clivio.biz/privacy-policy.php" target="_blank">Regulation UE 2016/679 (GDPR)</a>.
    </p>
    <div class="cookie-buttons">
      <button id="cookie-accept">Accept</button>
      <button id="cookie-decline">Deny</button>
    </div>
  </div>
</div>

<script>
function setCookie(name, value, days) {
  const expires = new Date(Date.now() + days * 864e5).toUTCString();
  document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/';
}

function getCookie(name) {
  return document.cookie.split('; ').find(row => row.startsWith(name + '='))?.split('=')[1];
}
</script>
</body>
</html>
