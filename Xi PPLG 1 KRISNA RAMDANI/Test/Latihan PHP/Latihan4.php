<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><marquee>Operatoraritmatika<marquee></h1> <br>
    <style>
        h1{
            color:violet;
        }
        
        body{
            background-color:aqua;
        }
        </style>
<h1>Di Tambah</h1>
    <?php
    $bil1=200;
    $bil2=40;
    //Di Tambah
    $hasil=$bil1+$bil2;
    echo "$bil1 + $bil2 = $hasil<br>";
    ?>
   <h1>Di Kurang</h1>
   <?php
    //Di Kurang
    $hasil=$bil1 - $bil2;
    echo "$bil1 - $bil2 = $hasil<br>";
    ?>
    <h1>Di Bagi</h1>
    <?php
    //Di Bagi
    $hasil=$bil1 / $bil2;
    echo "$bil1 / $bil2 = $hasil<br>";
    ?>
    <h1>Di Kali</h1>
    <?php
   //Di Kali
    $hasil=$bil1 * $bil2;
    echo "$bil1 * $bil2 = $hasil<br>";
   ?>
</body>
</html>