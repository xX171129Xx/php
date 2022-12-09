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
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select file to upload (Files above 500KB may or may not upload):
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
</form>
<div class=footer>
<?php
echo "Date at server location: " . date("l");
echo ", " . date("m/d/Y") . "<br>";
?>
&copy; <?php echo date("Y");?>
<?php echo " | Anything you upload here is public."?>
</div>
</body>
</html>