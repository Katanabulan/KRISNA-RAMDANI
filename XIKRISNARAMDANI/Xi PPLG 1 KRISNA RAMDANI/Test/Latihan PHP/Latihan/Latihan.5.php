<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>menghitung persegi</h1>
    <?php
    $sisi=15;
    $volume=$sisi * $sisi * $sisi;
    echo "Volume dari $volume cm <br>";
    ?>
    <h1>menggabung nilai variable</h1>
    <?php
    $teks1="belajar menghitung";
    $teks2="Volume Kubus";
    $hasil=$teks1 . $teks2;
    echo "$hasil<br>";
    ?>
    <h1>menghitung jajar genjang</h1>
    <?php
    $alas="15cm";
    $sisi="10cm";
    $hasil= 2 * ($alas + $sisi);
    echo  "keliling jajar genjang $hasil <br>";
    ?>
    
</body>
</html>