<?php

    $_SERVER = "localhost";
    $username = "root";
    $password = "";
    $db_name = "schedulekucing";

    $db = new mysqli($_SERVER, $username, $password, $db_name);
    
    if(!$db){
        die("Salah we salah");
    }


?>