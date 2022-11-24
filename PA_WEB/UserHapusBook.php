<?php
    require 'GlobalConfig.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $result = mysqli_query($db, "DELETE FROM kucing WHERE id ='$id'");

        if($result) {
            header("Location:UserGlobalSchedule.php");
        }else{
            echo "Error";
        }


    }

?>