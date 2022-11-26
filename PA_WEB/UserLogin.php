<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="stylebooking.css"> -->
    <link rel="stylesheet" href="userLogin.css">
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
                <input type="text" name="user" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" name='login' type="submit">Login</button>
        </form>
        <div class="text-center fs-6">
            Belum punya akun? <a href="UserRegister.php"> Register</a>
        </div>
    </div>
    <!-- <div class="form" >
        <h3>LOGIN</h3><br>
        <form action="" method="post">
            <label for = "">Username / Email</label><br>
            <input type="text" name="user"><br><br>
            <label for = "">Password</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit" name='login' class="submit">LOGIN</button>
        </form>

        <p>Belum Punya Akun?
            <a href = "UserRegister.php"> Registrasi</a>
        </p>
    </div> -->
</body>
</html>


<?php
    session_start();
    require 'GlobalConfig.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user
                WHERE Username = '$user' OR Email = '$user'";
        $result = $db->query($sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $Nama = $row['Nama'];

            if(password_verify($password, $row['Sandi'])){
                $_SESSION['login'] = true;
                $_SESSION['Nama'] = $Nama;
                echo "<script>
                        alert('Selamat Datang $Nama');
                        document.location.href = 'index.php';
                    </script>";
            }
    
            else{
                echo "<script>
                        alert('Username dan Password Salah');
                        </script>";
            }

        }else{
            echo "<script>
                    alert('Username tidak ada');
                    </script>";
        }
    }

?> 