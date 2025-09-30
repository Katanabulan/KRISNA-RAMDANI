<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Masukan Indetitas Anda</h1>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>"method="post">
        <pre>
        isikan Nama: <input type="text" name="nama">
        isikan Notelp: <input type="text" name="notelp">
        isikan Alamat: <textarea name="alamat" rows="5" cols="40"></textarea>
        <input type="submit" value="tampil"><input type="reset" value="BATAL">
</pre>

        <?php
        $nama= $_POST['nama'];
        $notelp= $_POST['notelp'];
        $alamat=$_POST['alamat'];
        if(!empty($nama)){    
        echo "nama :$nama<br>";}
        if(!empty($notelp)){    
        echo "notelp :$notelp<br>";}
        if(!empty($alamat)){    
        echo "alamat :$alamat<br>";}
        ?>
</form>
</body>
</html>