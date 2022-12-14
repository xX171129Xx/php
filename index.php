<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>File Upload</title>
  
  <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
<link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
<script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<body>
<div class="wrapper">
<button onclick="window.location.href='https://tehost.ml';" class="button" class="w3-bar-item w3-button">Home</button>
<button onclick="window.location.href='/upload.php';" class="button" class="w3-bar-item w3-button">File Upload</button>
<button onclick="history.back()" class="button" class="w3-bar-item w3-button">Go Back</button>
</div>
<div class="wrapper">
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select file to upload (Files above 500KB may or may not upload):
  <input type="file" name="fileToUpload" id="fileToUpload" class="button">
  <input type="submit" value="Upload File" name="submit" class="button">
</form>
</div>
<div class="wrapper">
<?php echo "Anything you upload here is public."?>
<button onclick="window.location.href='https://legal.tehost.ml';" class="button">See terms</button>
</div>
</body>
</html>