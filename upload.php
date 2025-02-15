<?php
$title = "MHProgrammer Upload Page";
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<style>
.container {
  margin: 20px;
}
.upload-form {
  margin-bottom: 20px;
}
</style>
</head>
<body>
<div class="container">
<h1><?php echo $title; ?></h1>
<hr>
<h2>Upload Files</h2>
<div class="upload-section">
  <h3>Upload Video</h3>
  <form class="upload-form" enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" name="video_file" accept="video/*">
    <button type="submit" name="upload_video">Upload Video</button>
  </form>
  
  <h3>Upload Software</h3>
  <form class="upload-form" enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" name="software_file" accept="application/x-msdownload,application/x-exe,application/octet-stream">
    <button type="submit" name="upload_software">Upload Software</button>
  </form>
</div>
<?php
if (isset($_POST['upload_video'])) {
  upload_file($_FILES['video_file'], './uploads/videos/');
} elseif (isset($_POST['upload_software'])) {
  upload_file($_FILES['software_file'], './uploads/software/');
}
function upload_file($file, $upload_dir) {
  $target_file = $upload_dir . basename($file['name']);
  if (move_uploaded_file($file['tmp_name'], $target_file)) {
    echo "File uploaded successfully!";
  } else {
    echo "Error uploading file!";
  }
}
?>
</div>

<h2>Home Page</h2>
<button><a href="index.php">Back</a></button>
</body>
</html>