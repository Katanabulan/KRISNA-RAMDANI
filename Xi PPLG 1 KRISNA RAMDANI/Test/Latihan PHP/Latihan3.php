<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menghitung Luas Lingkaran</h1>
    <?php
    //konstanta untuk nilai judul
    //konstanta untuk nilai PHI 
    

    $r=7;
    define("judul","Hitung Luas Linkaran");
    define("PHI",3.14);
    echo"<br> jari-jari: $r<br>";
    $luas = PHI*$r*$r;
    echo "Luas Lingkaran =$luas cm";
?>
   <h1>contoh 01Menghitung Luas Segitiga</h1>
   <?php
      //nilai alas dan tinggi
        $alas = 12;
        $tinggi =8;
        
        echo"alas = $alas cm<br>";
        echo"Tinggi =$tinggi cm<br>";
        //rumus luas segitiga
        $luas = 0.5*$alas*$tinggi;
        echo "luas segitiga =$luas cm";
    ?>
    <h1>contoh 02 Menghitung Luas Segitiga</h1>
<?php
      //nilai alas dan tinggi
        $alas = 6;
        $tinggi =8;
        
        echo"alas = $alas cm<br>";
        echo"Tinggi =$tinggi cm<br>";
        //rumus luas segitiga
        $luas = 0.5*$alas*$tinggi;
        echo "luas segitiga =$luas cm";
    ?>
</body>
</html>