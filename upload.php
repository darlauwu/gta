<?php
$target_dir = "uploads/leaks/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
}

// Redirect back to leaks page
header("Location: leaks.html");
exit();
?>
