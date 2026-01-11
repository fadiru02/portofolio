<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $namahari =
        array ("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
    $namabulan =
        array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus",
        "September","Oktober","November","Desember");
    echo $namahari[date("w")].", ".date("j")."".$namabulan[date("n")]."".date("Y");
    echo date("Y/m/d") . "<br/>";
    echo date("1,d-m-Y"). "<br/>";
    echo date("d F Y"). "<br/>";
    echo date("h:i:s"). "<br/>";
    echo date("1, d-m-Y h:i:s"). "<br/>";
    ?>
</body>
</html>