<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>DATA PENERIMA BEASISWA</h1>
<form method="post">
            NAMA        :<input type="text" name="nama"><br>
            NIM.        :<input type="text" name="nim"><br>
            KELAS       :<input type="text" name="kelas"><br>
            JURUSAN:
<select name="jurusan">
                <option>IT</option>
                <option>IPS</option>
                <option>IPA</option>
</select><br>
            JENIS KELAMIN<br>
            <input type="radio"name="jk"value="laki-laki"/>laki-laki<br>
            <input type="radio"name="jk"value="perempuan"/>perempuan <br>
            IPK : <input type="text" name="ipk"><br><br>
            <input type="submit" name="proses" value="KIRIM">
            <input type="Reset"value="BATAL">     
        </form>
        <?php
if (isset($_POST['proses'])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $jk= $_POST["jk"];
    
 

    echo "<h1>Hasil input:</h1>";
    echo "nama: $nama <br>";
    echo "nim: $nim <br>";
    echo "kelas: $kelas <br>";
    echo "jurusan: $jurusan <br>";
    echo "jk: $jk <br>";
}
?>

</body>
</html>