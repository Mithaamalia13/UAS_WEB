<?php
    if(isset($_SESSION['login'])){
        session_start();
        echo "<script>
                document.location.href = 'UserAboutLogin.php'
            </script>";
    }
    
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
                    <li id="teksaboutus"><a href="GlobalAboutUs.php">About</a></li>
                    <li><a class="login2" href="UserLogout.php">Logout</a></li>
                    <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                    <li><a class="login" href="UserLogout.php"><button>Login</button></a></li>
                </ul>
                <img src="img/close.png" id="close">
            </div>
            <img src="img/menu.png" alt="menu" id="menu">
            <img src="img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode">
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
            <li><a href="GlobalAboutUs.php">About Me</a></li>
        </ul>
        <p class="copyright" id="cr">
            Cat United @ 2022
        </p>
    </footer>
</body>
<script src="jQuery.js"></script>
</html>