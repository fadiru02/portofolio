<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kalimat = "Universitas PGRI Madiun";

    printf("hasil strlen: % <br>\n", strlen($kalimat));
    printf("hasil strtoupper: % <br>\n", strtoupper($kalimat));
    printf("hasil strtolower: % <br>\n", strtolower($kalimat));
    printf("hasil ucfirst: % <br>\n", ucfirst($kalimat));
    printf("hasil ucwords: % <br>\n", ucwords($kalimat));
    print("Aslinya : $kalimat<br>\n");

    printf("Tanggal Sekarang : %s",Date("d F Y")); echo "<br>";
    ?>
</body>
</html>