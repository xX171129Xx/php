<link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">

<link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="https://www.w3schools.com/lib/w3.js"></script>
<div class="wrapper">
<button onclick="window.location.href='https://tehost.ml';" class="button" class="w3-bar-item w3-button">Home</button>
<button onclick="window.location.href='/index.php';" class="button" class="w3-bar-item w3-button">File Upload</button>
<button onclick="history.back()" class="button" class="w3-bar-item w3-button">Go Back</button>
</div>
<div class="wrapper">
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo " Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file has been uploaded at https://file.tehost.ml/uploads/". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
</div>