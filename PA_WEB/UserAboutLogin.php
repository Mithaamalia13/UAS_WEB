<?php
    require 'GlobalConfig.php';
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                document.location.href = 'GlobalAboutUs.php';
            </script>";
    }
    $sql = "SELECT * FROM user";
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($query);
    $data = $_SESSION['Nama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About {Cat United</title>
    <link rel="stylesheet" href="styleAbout.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
<header id="Home">
        <nav>
            <a href="index.php"><img class="Logo" src="img/Logo.png" alt="Cat Paw" id="logo"></a>
            <div  class="nav-links" id="navlink">
                <ul id="menuList">
                    <li><a href="index.php">Home</a></li>
                    <li id="teksaboutus"><a href="UserAboutLogin.php">About</a></li>
                    <li><a class="login2" href="UserLogout.php">Logout</a></li>
                    <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                    <li ><a class="resall" href="UserGlobalSchedule.php">All Schedule</a></li>
                    <li ><a class="resmy" href="UserSchedule.php">My Schedule</a></li>
                    <li class="drop" ><a><?php echo $data;?></a>
                        <ul class="dropdown">
                        <li><a href="UserGlobalSchedule.php">All Schedule</a></li>
                        <li><a href="UserSchedule.php">My Schedule</a></li>
                        <li id="btnmode"><p class="darkmode3" id="darkmode3">Darkmode</p></li>
                        <li><a href="UserLogout.php">Logout</a></li>                        
                        </ul>
                    </li>
                    <!-- <li><a class="login" href="UserLogout.php"><button>Logout</button></a></li> -->
                </ul>
                <img src="img/close.png" id="close">
            </div>
            <img src="img/menu.png" alt="menu" id="menu">
            <!-- <img src="img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode"> -->
        </nav>
        <div class="about-content" id="AboutUsHome">
            <div class="left-about">
                <h1 id="cu">{Cat United</h1>
                <p>We are a company that provides services for all cats around the world</p>
            </div>
            <div class="right-about">
                <img src="img/about.png" alt="Cat" id="aboutimg">
            </div>
        </div>
    </header>
    <footer>
        <ul id="footer">
            <li><a href="index.php">Home</a></li>
            <li><a href="UserAboutLogin">About Me</a></li>
        </ul>
        <p class="copyright" id="cr">
            Cat United @ 2022
        </p>
    </footer>
</body>
<script src="jQuery.js"></script>
</html>