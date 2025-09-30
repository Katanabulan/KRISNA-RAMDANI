<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formproses</title>
</head>
<body>
      <table border="1" cellpadding="5" cellspacing="5">
     <tr>
        <th colspan="2">TABEL</th>
    </tr>
    <tr>
      <th>NAMA</th>
      <td><?php echo $_POST["nama"];?></td>
    </tr>
      <tr>
      <th>Alamat</th>
      <td><?php echo $_POST["alamat"];?></td>
    </tr>
    <tr>
      <th>Jenis kelamin</th>
      <td><?php echo $_POST["jk"];?></td>
    </tr>
    <tr>
      <th>Pekerjaan</th>
      <td><?php echo $_POST["pk"];?></td>
    </tr>
    <tr>
      <th>Hoby</th>
      <td><?php echo $_POST["Hoby"];?></td>
    </tr>
</table>
</body>
</html>