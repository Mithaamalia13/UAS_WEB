<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="userRegis.css">
    <!-- <link rel="stylesheet" href="stylebooking.css"> -->
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="img/kuc.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            <img src="img/Logo.png" alt="">
        </div>
        <form action="" method="post" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nama" id="NamaLengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="password" name="konfirmasi" id="pwd2" placeholder="Konfirmasi Password">
            </div>
            <button class="btn mt-3" name='regis' type="submit">Sign Up</button>
        </form>
        <div class="text-center fs-6">
            Sudah punya akun? <a href="UserLogin.php"> Login</a>
        </div>
    </div>
    <!-- <div  class="form">
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
    </div> -->

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