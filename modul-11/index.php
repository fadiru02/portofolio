<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="judul">
    <h1>Membuat Koneksi Database Dengan PHP dan MySQL</h1>
</div>

<br><br>

<h3>Data Mahasiswa</h3>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kelas</th>
    </tr>

    <?php
    include "Koneksi.php";

    $query = mysqli_query($koneksi, "SELECT * FROM Mahasiswa");

    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?= $data['npm']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['kelas']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
