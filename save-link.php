<?php
if(isset($_POST["link"]) && !empty($_POST["link"])){
  $link = trim($_POST["link"]);
  file_put_contents("links.txt", $link.PHP_EOL, FILE_APPEND);
}
header("Location: drive-leaks.php");
exit();
?>
