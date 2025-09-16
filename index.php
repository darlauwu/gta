<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GTA 6 Leaks Gallery</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('lucia-bg.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
      color: white;
      text-align: center;
    }
    .overlay {
      background: rgba(0,0,0,0.65);
      position: fixed;
      top:0; left:0; right:0; bottom:0;
      overflow-y: auto;
      padding: 40px;
    }
    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #ff99e6;
      text-shadow: 0 4px 12px rgba(0,0,0,0.8);
    }
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }
    .gallery video, .gallery img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.9);
    }
  </style>
</head>
<body>
  <div class="overlay">
    <h1>🔥 GTA 6 Leaks 🔥</h1>
    <div class="gallery">
      <?php
        $dir = "leaks/";
        $files = scandir($dir);

        foreach ($files as $file) {
          if ($file != "." && $file != "..") {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $path = $dir . $file;

            if (in_array($ext, ["mp4","mov","webm"])) {
              echo "<video src='$path' controls></video>";
            } elseif (in_array($ext, ["jpg","jpeg","png","gif"])) {
              echo "<img src='$path' alt='Leak'>";
            }
          }
        }
      ?>
    </div>
  </div>
</body>
</html>
