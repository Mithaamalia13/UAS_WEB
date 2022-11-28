<?php
    date_default_timezone_set("Asia/Makassar");
    $mindate = date("Y-m-d");
    $mintime = date("h:i");
    $min = $mindate." ".$mintime;
    $maxdate = date("Y-m-d", strtotime("+7 Days"));
    $maxtime = date("h:i");
    $max = $maxdate."T".$maxtime;

    require 'GlobalConfig.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $result = mysqli_query($db, "SELECT * FROM kucing WHERE id = '$id'");
    $row = mysqli_fetch_array($result);

    

?> 
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal</title>
    <link rel="stylesheet" href="styleedit1.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
    <div class="form">  
        <h3>EDIT JADWAL PERAWATAN KUCING</h3><br>
        <form action="" method="post">
            <label for="">Nama</label><br>
            <input type="text" name="bnama" value=<?=$row['bnama']?>> <br><br>
            <label for="">Jenis Perawatan</label><br>
            <select name="rawat" class="select" value=<?=$row['bjenis']?>>
                <option value="GROOMING">Grooming</option>
                <option value="VACCINATION">Vaksin</option>
                <option value="STERILIZATION">Steril</option>
                <option value="SEMUA PERAWATAN">All.</option>
            </select><br><br>
            <label for="">Nama Kucing</label><br>
            <input type="text" name="knama" value=<?=$row['knama']?>> <br><br>
            <label for="">Jenis Kelamin Kucing</label><br>
            <select name="kelamin" class="select" value=<?=$row['kkelamin']?>>
                <option value="JANTAN">Jantan</option>
                <option value="BETINA">Betina</option>
            </select><br><br>
            <input type="hidden" name="tanggal_booking" value=<?php echo $mindate ?>>
            <label for="">Tanggal dan Waktu Perawatan : </label><br>
            <input type="date" name="tanggal_rawat" min="<?php echo $mindate?>" max="<?php echo $maxdate?>">
            <input type="time" name = "waktu" min ="08:00" max = "20:00"><br><br>
            <button type="submit" name='submit' class="submit">EDIT</button>
        </form>
    </div>
</body>
</html>

<?php
    if (isset($_POST['submit'])){
        $bnama = $_POST['bnama'];
        $bjenis = $_POST['rawat'];
        $knama = $_POST['knama'];
        $kkelamin = $_POST['kelamin'];
        $bbook = $_POST['tanggal_booking'];
        $btrawat = $_POST['tanggal_rawat'];
        $waktu = $_POST['waktu'];


        $result = mysqli_query($db, 
        "UPDATE kucing SET bnama='$bnama', bjenis='$bjenis', knama='$knama',kkelamin='$kkelamin',bbook='$bbook',btrawat='$btrawat', bwaktu='$waktu' WHERE id='$id'");
        if ($result) {
            header("Location:UserGlobalSchedule.php");
        }
    }
?>