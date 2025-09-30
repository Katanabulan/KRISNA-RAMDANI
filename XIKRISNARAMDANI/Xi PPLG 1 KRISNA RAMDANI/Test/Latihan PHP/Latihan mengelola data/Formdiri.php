<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Formproses.php"method="post">
        Masukan Nama :<input type="text" name="nama" size="25"><br>
        Masukan Alamat:<textarea name="alamat" rows="2" cols="20"></textarea><br>
                Jenis kelamin
                <input type="radio"name="jk"value="laki-laki"/>laki-laki
                <input type="radio"name="jk"value="perempuan"/>perempuan <br>
                  Pekerjaan:
                <select name="pk">
                    <option value="1">Pelajar</option>
                    <option value="2">Bekerja</option>
                </select><br>
                Hoby:
                <input type="checkbox"name="Hoby" value="1">Olahraga
                <input type="checkbox"name="Hoby" value="2">Membaca
                <input type="checkbox"name="Hoby" value="3">Menulis<br>
                <input type="submit" value="KIRIM"><input type="reset" value="BATAL">
              


</form>
</body>
</html>