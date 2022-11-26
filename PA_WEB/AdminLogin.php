<?php
    if(isset($_SESSION['login'])){
        session_start();
        echo "<script>
                document.location.href = 'Admindashboard.php'
            </script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- <link rel="stylesheet" href="stylebooking.css"> -->
    <link rel="stylesheet" href="loginAdmin.css">
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
        </div>
    <!-- <div class="form" >
        <h3>LOGIN</h3><br>
        <form action="" method="post">
            <label for = "">Username</label><br>
            <input type="text" name="user"><br><br>
            <label for = "">Password</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit" name='login' class="submit">LOGIN</button>
        </form>
    </div>
</body>
</html> -->


<?php
    session_start();
    require 'GlobalConfig.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `admin`
                WHERE username = '$user'";
        $result = $db->query($sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $Nama = $row['nama_admin'];
            $User = $row['username'];

            if(password_verify($password, $row['psw'])){
                $_SESSION['login'] = true;
                $_SESSION['nama_admin'] = $Nama;
                $_SESSION['username'] = $User;
                echo "<script>
                        alert('Selamat Datang $Nama $User');
                        document.location.href = 'Admindashboard.php';
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