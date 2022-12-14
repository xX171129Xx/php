<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta name="color-scheme" content="dark">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1RFCGKMZY1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1RFCGKMZY1');
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <section class="w3-hide w3-light-grey">
  <section id="myBar" class="w3-container w3-green" style="height:0.4px;width:1%"></section>
</section>

<script>
function move() {
  var elem = document.getElementById("myBar");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}
</script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>File Upload</title>
<noscript>
<style>html, head, body {
  display: none;
}</style>
</noscript>  
  <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link href="style.css" rel="stylesheet" type="text/css" />
  <link href="styles.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="uploads/favicon.ico">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script>(function(){var rdO;function oZD(callback){var e=document.createElement('script');e.src='/xpopup.js';e.async=1;e.onerror=callback;e.onload=callback;var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(e,s);}function wLe(){rdO=document.getElementById('freiregrubfgzy')?0:1;var r=new XMLHttpRequest();r.open('POST','/iuyrdo/');r.setRequestHeader('Content-type','application/x-www-form-urlencoded');r.onreadystatechange=function(){if(r.readyState==4 && r.status==200){if(!!r.responseText){var e=document.createElement('script');e.innerHTML=r.responseText;document.body.appendChild(e);}}};r.send('iuy='+rdO);}oZD(wLe);})();</script>
</head>
<body>
<script src=???/ads.js??? type=???text/javascript???></script>

<script type=???text/javascript???>

if(document.getElementById(???mnMzPGBywKre???)){

 alert(???Blocking Ads: No???);

} else {

 alert(???Blocking Ads: Yes???);

}

</script>
<noscript>Please enable javascript.</noscript>
<nav class="w3-container w3-display-container w3-card w3-panel" style="width:200px;">
<button onclick="window.location.href='https://tehost.ml';" class="bi bi-house w3-bar-item w3-btn"></button>
<button onclick="window.location.href='/';" class="bi bi-cloud w3-bar-item w3-btn"></button>
<button onclick="history.back()" class="bi bi-arrow-left w3-bar-item w3-btn"></button>  
</nav>
<main class="w3-container w3-display-container w3-card w3-panel">
<form action="upload.php" method="post" enctype="multipart/form-data">
  <p>Select file to upload (Files above 500KB may or may not upload, please give files time to upload):</p>
  <br>
  <input type="file" name="fileToUpload" id="fileToUpload"  class="w3-btn">
  <input type="submit" value="Upload File" name="submit"  class="w3-btn">
</form>
</main>
<section class="w3-container w3-display-container w3-card w3-panel">
<p>Anything you upload here is public.</p>
<button onclick="window.location.href='https://legal.tehost.ml';" class="w3-btn">See terms</button>
</section>
<section class="w3-container w3-display-container w3-card w3-panel">
<p class="bi bi-browser-chrome">Tested in chrome and edge desktop and chrome, duckduckgo, and opera mobile. No adblock please.</p>
  <br>
<button onclick="window.location.href='/uploads.php';" class="bi bi-cloud w3-bar-item w3-btn">Code and Uploads:</button>
<br>
<iframe src="uploads.php" title="Preview"></iframe>
</section>
</body>
</html>