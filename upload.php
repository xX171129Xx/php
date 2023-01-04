<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1RFCGKMZY1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1RFCGKMZY1');
</script>
<link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="https://www.w3schools.com/lib/w3.js"></script>
<div class="w3-container w3-display-container w3-card w3-panel" style="width:200px;">
<button onclick="window.location.href='https://tehost.ml';" class="bi bi-house w3-bar-item w3-btn">Home</button>
<button onclick="window.location.href='/index.php';" class="bi bi-cloud w3-bar-item w3-btn">File Upload</button>
<button onclick="history.back()" class="bi bi-arrow-left w3-bar-item w3-btn">Go Back</button>
</div>
<div class="w3-container w3-display-container w3-card w3-panel">
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