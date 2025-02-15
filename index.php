php
<?php
$title = "MHProgrammer Downloads & Videos";
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<style>
.container {
  margin: 20px;
}
.software-list, .video-list {
  list-style: none;
  padding: 0;
  margin: 0;
}
.software-list li, .video-list li {
  margin-bottom: 10px;
}
</style>
</head>
<body>
<div class="container">
<h1><?php echo $title; ?></h1>
<hr>
<h2>Software Downloads</h2>
<ul class="software-list">
<?php
$software_dir = './uploads/software/';
$software_files = scandir($software_dir);
foreach ($software_files as $file) {
  if ($file != '.' && $file != '..') {
    echo '<li><a href="'.$software_dir.$file.'" download>'.$file.'</a></li>';
  }
}
?>
</ul>
<hr>
<h2>Video Playlists</h2>
<ul class="video-list">
<?php
$video_dir = './uploads/videos/';
$video_files = scandir($video_dir);
foreach ($video_files as $file) {
  if ($file != '.' && $file != '..') {
    echo '<li><video width="320" height="240" controls><source src="'.$video_dir.$file.'" type="video/mp4"></video></li>';
  }
}
?>
<h1>Upload Files</h1>
<p>From Here You Can Upload Files On This Site</p>
<button><a href="upload.php">Upload</a></button>
</ul>
</div>
</body>
</html>