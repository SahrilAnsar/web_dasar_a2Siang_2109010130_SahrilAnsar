<?php require "functions.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        .halaman-login{
            display: flex;
            align-items: center;
            height: 100%;
            justify-content: center;
            flex: 1 0 100%;
        }
        h1{
            text-align: center;
        }
        .tengah{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="tengah">Halaman Registrasi</h1>
    <form action="" method="post">
    <table class="halaman-login">
        <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="username" name="username" value="<?= @$_POST ["username"] ?>">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>:</td>
            <td>
                <input type="email" name="email" value="<?= @$_POST ["email"] ?>">
            </td>
        </tr>
        <tr>
            <th>Password</th>
                <td>:</td>
                <td>
                    <input type="password" name="pass" value="<?= @$_POST ["pass"] ?>">
                </td>
        </tr>
        <tr>
            <th>Konfirmasi Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pass2" value="<?= @$_POST ["pass2"] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3"><button name="registrasi" type="submit" style="width:100%">Registrasi</button></td>
        </tr>
    </table>
    </form>
        <p class="tengah">Sudah Punya Akun? Login <a href="login.php">disini</a></p>

<?php

if (isset($_POST["registrasi"])) {
    $username = htmlspecialchars(strtolower($_POST["username"]));
    $email = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["pass"]);
    $pass2 = htmlspecialchars($_POST["pass2"]);

    if ($username == "" || $email == "" || $pass == "" || $pass2 == "") {
        echo "<script>
        alert('Data masih ada yang kosong!');
        </script>";
     }elseif ($pass != $pass2) {
         echo "<script>
         alert('Confirm password tidak sesuai!');
         </script>";
     }else {
        $encrypt_pw = password_hash($pass,PASSWORD_DEFAULT);
        $tgl = date("Y-m-d H:i:s");
        $simpan_registrasi = q("INSERT INTO user VALUES(null,
       '$username',
       '$email',
       '$encrypt_pw',
       'tgl','tgl','')");

       if ($simpan_registrasi) {
        echo "<script>
        alert('Registrasi anda berhasil!')
        </script>";
       }else {
        echo "<script>
        alert('Registrasi yang ada input sudah ada sebelumnya!')
        </script>";
       }
     }

}
    
?>
</body>
</html>