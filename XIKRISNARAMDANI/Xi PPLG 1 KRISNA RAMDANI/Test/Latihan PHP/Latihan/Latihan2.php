<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>latihan Type data </h1>
   <?php
    $jumlah=5;
    $harga=20000;
    $barang ="celana";
    $total=$harga*$jumlah;
    $diskon=$harga * 0.5;
    $bayar=$total - $diskon;
    
    echo "Barang :$barang<br>";
    echo "Harga Beli :$jumlah<br>";
    echo "Harga Barang :$harga<br>";
    echo "Total Bayar :$total<br>";
    echo "yang harus di bayar adalah :RP.$bayar";





?>
</body>
</html>