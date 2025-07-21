<?php
$videos = glob("videos/*.mp4"); // gets all .mp4 files from the videos/ folder
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Video Player</title>
  <style>
    body { font-family: serif; text-align: center; }
    video { width: 80%; margin: 10px 0; }
  </style>
</head>
<body>
  <h1>Video Library</h1>

  <?php foreach ($videos as $video): ?>
    <div>
      <video controls>
        <source src="<?php echo $video; ?>" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p><?php echo basename($video); ?></p>
    </div>
  <?php endforeach; ?>
</body>
</html>
