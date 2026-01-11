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

<h3>Data perpus Kota</h3>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
    </tr>

    <?php
    include "Koneksi.php";

    $query = mysqli_query($koneksi, "SELECT * FROM PERPUSTAKAAN");

    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['pekerjaan']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
