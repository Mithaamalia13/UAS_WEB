<?php
    if(isset($_SESSION['login'])){
        session_start();
        echo "<script>
                document.location.href = 'index.php'
            </script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{Cat United</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
    <a href="AdminLogin.php">
        <button class='Float'>
            <img src="img/admin.png" alt="Admin">
            <span>Login Admin</span>
        </button>
    </a>
    <header id="Home">
        <nav>
            <a href="index.php"><img class="Logo" src="img/Logo.png" alt="Cat Paw" id="logo"></a>
            <div  class="nav-links" id="navlink">
                <ul id="menuList">
                    <li><a href="GlobalLandingPage.php">Home</a></li>
                    <li id="teksaboutus"><a href="GlobalAboutUs.php">About Us</a></li>
                    <li><a class="login2" href="UserLogin.php">Login</a></li>
                    <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                    <li><a class="login" href="UserLogin.php"><button>Login</button></a></li>
                </ul>
                <img src="img/close.png" id="close">
            </div>
            <img src="img/menu.png" alt="menu" id="menu">
            <img src="img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode">
        </nav>
        <div class="header-content">
            <div class="left-content">
                <h1 id="ycf">Your Cat is Part of Our Family</h1>
                <p>Let us treat your cat like our own family with best service</p>
                <a class="book" href="UserGlobalSchedule.php"><button>See Schedule</button></a>
            </div>
            <div class="right-content">
                <img src="img/Kucing.png" alt="Cat" id="kucing">
            </div>
        </div>
    </header>
    <main>
        <div class="main-content" id="ServiceHome">
            <h1 id="wwcd">What We Can Do</h1>
            <p>We look after your little family, we ensure that we will give the best treatment for your little family.</p>
            <div class="box-content" id="content-wwcd">
                <div class="vaksin">
                    <img src="img/vaksin.png" alt="HTML" id="vaksin">
                    <p>VACCINATION</p>
                </div>
                <div class="grooming">
                    <img src="img/grooming.png" alt="HTML" id="grooming">
                    <p>GROOMING</p>
                </div>
                <div class="steril">
                    <img src="img/steril.png" alt="HTML" id="steril">
                    <p>STERILIZATION</p>
                </div>
            </div>
        </div>
        <div class="about-content" id="AboutUsHome">
            <div class="left-about">
                <h1 id="cu">{Cat United</h1>
                <p>We are a company that provides services for all cats around the world</p>
            </div>
            <div class="right-about">
                <img src="img/about.png" alt="Cat" id="aboutimg">
            </div>
        </div>
    </main>
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