<?php
    require 'GlobalConfig.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
    <header id="Home">
        <nav>
            <a href="Admindashboard.php"><img class="Logo" src="img/Logo.png" alt="Cat Paw" id="logo"></a>
            <div  class="nav-links" id="navlink">
                <ul id="menuList">
                    <li><h1 class="admin"><?php echo $_SESSION['username']," : " ,$_SESSION['nama_admin'] ?></h1></li>
                    <li><a class="login2" href="UserLogout.php">Logout</a></li>
                    <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                    <li><a class="login" href="UserLogout.php"><button>Logout</button></a></li>
                </ul>
                <img src="img/close.png" id="close">
            </div>
            <img src="img/menu.png" alt="menu" id="menu">
            <img src="img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode">
        </nav>
        <div class="main-content" id="ServiceHome">
            <h1 id="wwcd">DASHBOARD ADMIN</h1>
            <p>We look after your little family, we ensure that we will give the best treatment for your little family.</p>
            <div class="box-content" id="content-wwcd">
                <div class="schedule">
                    <a href="Adminjadwal.php"><img src="img/schedule.png" alt="HTML" id="schedule"></a>
                    <p>SCHEDULE</p>
                </div>
                <div class="history">
                    <a href="Adminhistory.php"><img src="img/history.png" alt="HTML" id="history"></a>
                    <p>HISTORY</p>
                </div>
            </div>
        </div>

    </header>
    <footer>
        <h4>ADMIN</h4>
        <p class="copyright" id="cr">
            Cat United @ 2022
        </p>
    </footer>
</body>
<script src="Admindashboard.js"></script>
</html>