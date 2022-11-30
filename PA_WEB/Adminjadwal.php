<?php
    require 'GlobalConfig.php';
    session_start();
    $result = mysqli_query($db,
            "SELECT * FROM kucing");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url(img/background.png);
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Jadwal</title>
    <link rel="stylesheet" href="styleJadwal.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
</head>
<body >
<nav>
        <a href="Admindashboard.php"><img class="Logo" src="img/Logo.png" alt="Cat Paw" id="logo"></a>
        <div  class="nav-links" id="navlink">
            <ul id="menuList">
                <li><a href="Admindashboard.php"><h1>DASHBOARD ADMIN</h1></a></li>
                <li><a class="login2" href="UserLogout.php">Logout</a></li>
                <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                <!-- <li><a class="login" href="#Home"><button>Login</button></a></li> -->
            </ul>
            <img src="img/close.png" id="close">
        </div>
        <img src="img/menu.png" alt="menu" id="menu">
        <img src="img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode">
    </nav>
    <div class="table_head">
        <h3>JADWAL PERAWATAN KUCING</h3>
        <form action="Adminjadwal.php" method="GET" >
            <input type='text' name="cari" id="cari" placeholder="Type..." value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
            <button type="submit" name="search">CARI</button>
        </form>
        <div>
            <button class = "add"><a href="AdminBooking.php"><img src="img/addw.png" alt="Tambah Data"></a></button>
        </div>
    </div>

    <div class="table">
<table border='1'>
        <tr>
            <th style="width:5%">NO</th>
            <th>NAMA PEMILIK</th>
            <th style="width:15%">JENIS PERAWATAN</th>
            <th>NAMA KUCING</th>
            <th style="width:8%">KELAMIN KUCING</th>
            <th>TANGGAL BOOKING</th>
            <th>TANGGAL RAWAT</th>
            <th>FOTO KUCING</th>
            <th style="width:6%">STATUS</th>
            <th colspan='2' style="width:10%">Actions</th>
            
        </tr>
            <?php
            include 'GlobalConfig.php';
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $query = "SELECT * FROM kucing WHERE knama LIKE '%".$cari."%' or bnama LIKE '%".$cari."%' or bjenis LIKE '%".$cari."%' or kkelamin LIKE '%".$cari."%' or bbook LIKE '%".$cari."%' or btrawat LIKE '%".$cari."%'";			
                }else{
                    $query = "SELECT * FROM kucing";		
                }
                $i = 1;
                $tampil = mysqli_query($db, $query);
                while ($row = mysqli_fetch_array($tampil)){    
            ?>
        <tr>
           <td><?=$i?></td>
           <td><?=$row['bnama']?></td>
           <td><?=$row['bjenis']?></td>
           <td><?=$row['knama']?></td>
           <td><?=$row['kkelamin']?></td>
           <td><?=$row['bbook']?></td>
           <td><?php echo $row['btrawat']," : ",$row['bwaktu']?></td>
           <td><img src="gambar/<?=$row['kfoto']?>" alt="" width = 100px >
           <td class = "accept"><a href="AdminEditBook.php?id=<?=$row['id']?>">
                    <label>
                    <input type="checkbox">
                    <span class="check"></span>
                    </label>
            </a></td>
           <td class = "edit"><a href="AdminEditBook.php?id=<?=$row['id']?>"><img src="img/edit.png" alt="edit"></a></td>
           <td class = "hapus" ><a href="AdminHapusBook.php?id=<?=$row['id']?>"><img src="img/delete.png" alt="hapus"></a></td>
        </tr>
            <?php 
                $i++;   
                }
            ?>
    </table>

    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
<script src="jQuery.js"></script>
</html>



