
<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                document.location.href = 'UserLogin.php'
            </script>";
    }
    date_default_timezone_set("Asia/Makassar");
    $mindate = date("Y-m-d");
    $mintime = date("h:i");
    $min = $mindate." ".$mintime;
    $maxdate = date("Y-m-d", strtotime("+7 Days"));
    $maxtime = date("h:i");
    $max = $maxdate."T".$maxtime;
    $data = $_SESSION['Nama'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Jadwal</title>
    <link rel="stylesheet" href="stylebooking.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
    <div class="form" >
        <h3>BUAT JADWAL PERAWATAN KUCING</h3><br>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="bnama" value=<?php echo $data ?>> <br><br>
            <label for="">Jenis Perawatan</label><br>
            <select name="rawat" class="select">
                <option value="GROOMING">Grooming</option>
                <option value="VACCINATION">Vaksin</option>
                <option value="STERILIZATION">Steril</option>
                <option value="SEMUA PERAWATAN">All.</option>
            </select><br><br>
            <label for="">Nama Kucing</label><br>
            <input type="text" name="knama" id=""> <br><br>
            <label for="">Jenis Kelamin Kucing</label><br>
            <select name="kelamin" class="select">
                <option value="JANTAN">Jantan</option>
                <option value="BETINA">Betina</option>
            </select><br><br>
            <input type="hidden" name="tanggal_booking" value=<?php echo $min ?>>
            <label for="">Tanggal dan Waktu Perawatan : </label><br>
            <input type="date" name="tanggal_rawat" min="<?php echo $mindate?>" max="<?php echo $maxdate?>">
            <input type="time" name = "waktu" min ="08:00" max = "20:00"><br><br>
            <label for="">Gambar Kucing : </label><br>
            <input type="file" name='gambar' accept="image/*"><br><br>
            <button type="submit" name='submit' class="submit">TAMBAH</button>
        </form>
    </div>
</body>
</html>


<?php
    require 'GlobalConfig.php';
    if (isset($_POST['submit'])){
        $bnama = $_SESSION['Nama'];
        $bjenis = $_POST['rawat'];
        $knama = $_POST['knama'];
        $kkelamin = $_POST['kelamin'];
        $bbook = $_POST['tanggal_booking'];
        $btrawat = $_POST['tanggal_rawat'];
        $waktu = $_POST['waktu'];


        $gambar =  $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ektensi = strtolower(end($x));
        $gambar_baru = "$knama.$ektensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp,'gambar/'.$gambar_baru)){
            $query = "INSERT INTO kucing (bnama,bjenis,knama,kkelamin,bbook,btrawat,bwaktu,kfoto) VALUES('$bnama','$bjenis','$knama','$kkelamin','$bbook','$btrawat','$waktu','$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:UserGlobalSchedule.php");
            }else{
                echo "Gagal";
            }

        }
    }
?> 
 