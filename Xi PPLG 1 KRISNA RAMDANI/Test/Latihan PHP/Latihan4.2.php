<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>operator logika</h1>
    <?php
    $bil1=100;
    $bil2=20;
    $teks1="PHP";
    $teks2="php";
    $hasil=($bil1<>$bil2)or($teks1==$teks2);
    echo "$bil1<>$bil2or$teks1==$teks2 adalah $hasil <br>";
    
    $hasil=!($teks1==$teks2);
    echo"!($teks1==$teks2)adalah $hasil <br>";
    ?>
    </body>
</html>