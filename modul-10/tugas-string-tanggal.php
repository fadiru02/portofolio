<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        Masukkan Nama, Email dan Password <br>
        Default Nama = belajar, Email = test@email.com dan password = madiun
        <br>
        Isian data : <br>
        Nama :<INPUT TYPE=TEXT NAME=namamu><br>
        Email :<INPUT TYPE=TEXT NAME=email><br>
        Password :<INPUT TYPE=TEXT NAME=password><br>
        <INPUT TYPE=SUBMIT value="Cek"><br>
    </form>
    <?php 
    if (isset($email))
        if (empty($email))
            print("harap isi email<br>\n");
        else
        {
            if (mb_ereg("test@gmail.com",$email))
                print("Alamat email $email valid<br>\n");
            else
                print("Alamat email $email Tidak Valid <br>\n");
        }
        
    if (isset($password))
    {
        $nama = "belajar";
        $pass_valid = crypt("madiun",$nama);
        $enkripsi = crypt($password, $nama);

        if ($pass_valid == $enkripsi)
            print("password Valid");
        else
            print("password salah");
    }
   ?>
</body>
</html>