<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>GTA 6 Drive Leaks</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&display=swap');

    *{box-sizing:border-box;margin:0;padding:0}
    html,body{height:100%}

    body{
      cursor: url('lucia-cursor.png') 16 16, auto;
      font-family: 'Orbitron', sans-serif;
      position: relative;
      background: url('lucia-bg.jpg') center/cover no-repeat fixed;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:flex-start;
      padding-top:80px;
    }

    body::after{
      content:"";
      position:absolute;
      top:0;left:0;right:0;bottom:0;
      background:rgba(0,0,0,0.6);
      pointer-events:none;
      z-index:0;
    }

    header{
      position:fixed;
      top:20px;
      left:50%;
      transform:translateX(-50%);
      display:flex;
      gap:12px;
      z-index:50;
      backdrop-filter: blur(6px) saturate(0.9);
      padding:8px 16px;
      border-radius:999px;
      box-shadow:0 6px 18px rgba(0,0,0,0.3);
    }

    .nav-btn{
      display:inline-flex;
      align-items:center;
      padding:8px 14px;
      border-radius:999px;
      text-decoration:none;
      color:#fff;
      font-weight:700;
      background:rgba(0,0,0,0.4);
      border:1px solid rgba(255,255,255,0.1);
      transition:0.3s;
    }
    .nav-btn:hover{background:rgba(255,255,255,0.1)}

    .page{
      position:relative;
      z-index:1;
      width:90%;
      max-width:1200px;
      text-align:center;
      margin-top:60px;
    }

    .page h1{
      font-size:48px;
      font-weight:900;
      margin-bottom:30px;
      color:#fff;
      text-shadow:0 2px 8px rgba(0,0,0,0.7);
    }

    .upload-box{
      margin-bottom:30px;
      background:rgba(0,0,0,0.5);
      padding:20px;
      border-radius:16px;
      box-shadow:0 8px 24px rgba(0,0,0,0.7);
      color:#fff;
    }
    .upload-box input, .upload-box button{
      margin-top:10px;
      padding:8px;
    }

    .grid{
      display:grid;
      grid-template-columns:repeat(auto-fill,minmax(320px,1fr));
      gap:20px;
      padding-bottom:60px;
    }

    .item{
      background:rgba(0,0,0,0.5);
      padding:12px;
      border-radius:16px;
      box-shadow:0 8px 24px rgba(0,0,0,0.7);
    }

    .item iframe{
      width:100%;
      height:200px;
      border:none;
      border-radius:12px;
    }

    .item h2{
      font-size:18px;
      margin-top:8px;
      color:#fff;
    }
  </style>
</head>
<body>
  <header>
    <a href="index.html" class="nav-btn">Home</a>
    <a href="countdown.html" class="nav-btn">Countdown</a>
    <a href="map.html" class="nav-btn">Map</a>
    <a href="trailers.html" class="nav-btn">Trailers</a>
    <a href="characters.html" class="nav-btn">Characters</a>
    <a href="drive-leaks.php" class="nav-btn">Leaks</a>
  </header>

  <div class="page">
    <h1>GTA 6 Leaks (Google Drive)</h1>

    <!-- Upload Form -->
    <div class="upload-box">
      <form action="save-link.php" method="post">
        <label for="link">Paste Google Drive Video Link:</label><br><br>
        <input type="url" name="link" id="link" placeholder="https://drive.google.com/file/d/..." required size="60"><br><br>
        <button type="submit">Add Leak</button>
      </form>
    </div>

    <!-- Display Leaks -->
    <div class="grid">
      <?php
        $links = file("links.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $i = 1;
        foreach(array_reverse($links) as $link){
          // Convert normal Drive link to embeddable
          if(preg_match("/\/d\/(.*?)\//", $link, $match)){
            $id = $match[1];
            $embed = "https://drive.google.com/file/d/$id/preview";
            echo "<div class='item'>";
            echo "<iframe src='$embed' allow='autoplay'></iframe>";
            echo "<h2>Leak #$i</h2>";
            echo "</div>";
            $i++;
          }
        }
      ?>
    </div>
  </div>
</body>
</html>

