<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Website Sederhana</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="header">
    <h1>SELAMAT DATANG</h1>
  </div>

  <div class="nav">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=profile">Profile</a>
    <a href="index.php?page=sosial">Media Sosial</a>
    <a href="hitung.php">Hitung Kubus</a>
  </div>

  <div class="content">
    <?php
    if ($page =="home") {
        echo "<h1>Home</h1>";
        echo "<img src='lol.jpg' alt='lol/1.jpg' style='width:300px; height:200px;'>";
        echo "<p>Ini adalah Website Sederhana yang saya buat .</p>";
    }
      elseif ($page == "profile") {
        echo "<h1>Profile</h1>";
        echo "<img src='krisna.jpg' alt='krisna.jpg' style='width:200px; height:200px; border-radius: 50%;'>";
        echo "<p><h3>Nama:KrisnaRamdani <br>
        Kelas:XI PPLG1<br>
        Hoby:Berolahraga<br>
        Status:MasihPelajar</h3></p>";
      
    }
       

    
    elseif ($page == "sosial") {
        echo "<h1>MEDIA SOSIAL SAYA</h1>";
        echo "<ul>
                <li><a href=https://www.instagram.com/krisnar_m/>IG Saya</a></li>
                <li><a href=https://www.facebook.com/profile.php?id=61561587017407/>FB Saya</a></li>
              </ul>";
    } else {
        echo "<h2>Halaman tidak ditemukan</h2>";
    }
    ?>
  </div>

  <div class="footer">
    &copy;  2025 Krisna Ramdani Copyright
</diV>

</body>
</html>