<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Beasiswa</title>
</head>
<body>
    <h1>DATA PENERIMA BEASISWA</h1>
    <form method="post" action="">
        NAMA : <input type="text" name="nama"><br>
        NIM : <input type="text" name="nim"><br>
        KELAS : <input type="text" name="kelas"><br>
        JURUSAN:
        <select name="jurusan">
            <option>IT</option>
            <option>IPS</option>
            <option>IPA</option>
        </select><br>
        
        JENIS KELAMIN:<br>
        <input type="radio" name="jk" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jk" value="perempuan"> Perempuan<br>
        
        IPK : <input type="text" name="ipk"><br><br>
        
        <input type="submit" name="proses" value="KIRIM">
        <input type="reset" value="BATAL">     
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $kelas = $_POST["kelas"];
        $jurusan = $_POST["jurusan"];
        $jk = $_POST["jk"];
        $ipk = ($_POST["ipk"]); 

        echo "<h2>Hasil Input:</h2>";
        echo "Nama: $nama <br>";
        echo "NIM: $nim <br>";
        echo "Kelas: $kelas <br>";
        echo "Jurusan: $jurusan <br>";
        echo "Jenis Kelamin: $jk <br>";
        echo "IPK: $ipk <br>";

       
        echo "<h3>Status Beasiswa:</h3>";

        if ($ipk >= 3.5 && $jurusan == "IT") {
            echo "✅ Layak Beasiswa Unggulan";
        } elseif ($ipk >= 3.0 && $jurusan == "IPA") {
            echo "✅ Layak Beasiswa Reguler";
        } elseif ($ipk >= 2.75) {
            echo "⚠️ Dipertimbangkan";
        } else {
            echo "❌ Tidak Layak Menerima Beasiswa";
        }
    }
    ?>
</body>
</html>
