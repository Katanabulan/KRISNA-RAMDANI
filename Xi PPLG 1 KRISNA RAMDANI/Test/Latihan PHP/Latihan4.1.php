<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OperatorPerbadingan</h1>
    <style>
        h1{
            color :aqua;
        }
        </style>
    <?php
    $bil1="200";
    $bil2="40";
    $teks1="php";
    $teks2="PHP";
    
    
    
    //sama dengan
    $hasil=$bil1 == $bil2;
    echo "$bil1 == $bil2 = $hasil<br>";
    //tidak sama dengan
    $hasil=$bil1 != $bil2;
    echo "$bil1 != $bil2 = $hasil<br>";
    //lebih besar / sama dengan
    $hasil=$bil1>=$bil2;
    echo "$bil1>=$bil2 = $hasil<br>";
    //
    $hasil=$teks1 == $teks2;
    echo "$teks1 == $teks2 =$hasil<br>";
    //
    $hasil=$teks1 != $teks2;
    echo "$teks1 != $teks2 =$hasil<br>";
    ?>
</body>
</html>