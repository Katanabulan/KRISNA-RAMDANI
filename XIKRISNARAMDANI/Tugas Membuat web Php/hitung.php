<?php
$hasil = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sisi = $_POST['sisi'];
    $hasil = $sisi * $sisi * $sisi;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hitung Kubus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class=header><marquee><h1>Selamat Datang Ini Adalah Halaman Hitung Kubus Sederhana</h1></marquee></div>
<div class="nav">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=profile">Profile</a>
    <a href="index.php?page=sosial">Media Sosial</a>
    <a href="hitung.php">Hitung Kubus</a>
  </div>

  <div class="content">
    <h1>Hitung Volume Kubus</h1>
    <form method="post">
      <label>Masukkan sisi (cm):</label><br>
      <input type="number" name="sisi" required>
      <button type="submit">Hitung</button>
    </form>

    <?php if ($hasil !== null): ?>
      <p>Volume kubus = <b><?= $hasil ?></b> cm<sup>3</sup></p>
    <?php endif; ?>
  </div>

  <div class="footer">
    &copy; 2025 Krisna Ramdani Copyright
  </div>

</body>
</html>