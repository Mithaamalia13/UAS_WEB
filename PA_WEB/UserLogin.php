<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylebooking.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
    <div class="form" >
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
    </div>
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