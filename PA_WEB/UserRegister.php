<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="stylebooking.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
    <div  class="form">
    <h3>Registrasi Akun</h3>
    <form action="" method="post">
        <label for="">Nama Lengkap</label><br>
        <input type="text" name="nama"><br><br>

        <label for="">Email</label><br>
        <input type="email" name="email"><br><br>

        <label for="">Username</label><br>
        <input type="text" name="username"><br><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <label for="">Konfirmasi Password</label><br>
        <input type="password" name="konfirmasi"><br><br>

        <button type="submit" name='regis' class="submit">REGISTRASI</button>
    </form>

    <p>Sudah Punya Akun?
        <a href = "UserLogin.php">Login</a>
    </p>
    </div>

</body>
</html>

<?php
    require 'GlobalConfig.php';

    if(isset($_POST['regis'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        $sql = "SELECT * FROM user WHERE Username='$username'";

        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('Username Telah Dipakai');
                  </script>";
        }else{
            // konfirmasi password
            if ($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO user (Nama,Email, Username, Sandi)
                            VALUES ('$nama', '$email', '$username', '$password')";

                $result = $db->query($query);

                if($result){
                    echo "<script>
                        alert('Registrasi Berhasil');
                        document.location.href = 'UserLogin.php';
                        </script>";
                }

                else{
                    echo "<script>
                        alert('Registrasi Gagal');
                        </script>";
                }
            }
            else{
                echo "<script>
                    alert('Password berbeda !!, Mohon masukan password yang sama');
                    </script>";
            }
        }



    }

?>