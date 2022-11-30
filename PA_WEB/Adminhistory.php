<?php
    require 'GlobalConfig.php';
    session_start();
    $result = mysqli_query($db,
            "SELECT * FROM history");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin History</title>
    <link rel="stylesheet" href="dataTables/datatables.min.css">

    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid" id="navbarNavDropdown">
  <a class="navbar-brand" href="Admindashboard.php">
      <img src="img/Logo.png" alt="Bootstrap" height="24">
    </a>
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['nama_admin'] ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Admindashboard.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="Adminjadwal.php">Jadwal</a></li>
            <li><a class="dropdown-item" href="AdminBooking.php">Tambah</a></li>
            <li><a class="dropdown-item" href="UserLogout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
  </div>
</nav>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <form class="d-flex" role="search" action="Adminhistory.php" method="GET">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>" name="cari">
      <button class="btn btn-outline-success" type="submit" name="search">Search</button>
    </form>
  </div>
</nav>
<div class="table-responsive">
    <table class="table table-dark table-hover" id = "tabel">
    <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA PEMILIK</th>
      <th scope="col">JENIS PERAWATAN</th>
      <th scope="col">NAMA KUCING</th>
      <th scope="col">KELAMIN KUCING</th>
      <th scope="col">TANGGAL BOOKING</th>
      <th scope="col">TANGGAL RAWAT</th>
      <th scope="col">FOTO KUCING</th>
    </tr>
  </thead>
  <tbody>
            <?php
            require 'GlobalConfig.php';

            $jml = 5;
            $query = "SELECT * FROM history";
            $result = mysqli_query($db, $query);
            $total = mysqli_num_rows($result);
            $datahalaman = ceil($total/$jml);
            $aktif =(isset($_GET["page"]) ) ? $_GET["page"] : 1;
            $awal =($jml*$aktif)-$jml;




            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = "SELECT * FROM history WHERE nama_pemilik LIKE '%".$cari."%' or jenis_perawatan LIKE '%".$cari."%' or nama_kucing LIKE '%".$cari."%' or sex LIKE '%".$cari."%' or tgl_pemeriksaan LIKE '%".$cari."%' or tgl_booking LIKE '%".$cari."%'";			
            }else{
                $query = "SELECT * FROM history LIMIT $awal, $jml";		
            }
            $i = 1;
            $tampil = mysqli_query($db, $query);
            while ($row = mysqli_fetch_array($tampil)){    
            ?>
     
        <tr>
           <td><?=$i?></td>
           <td><?=$row['nama_pemilik']?></td>
           <td><?=$row['jenis_perawatan']?></td>
           <td><?=$row['nama_kucing']?></td>
           <td><?=$row['sex']?></td>
           <td><?=$row['tgl_pemeriksaan']?></td>
           <td><?=$row['tgl_booking']?></td>
           <td><img src="gambar/<?=$row['foto_kucing']?>" alt="" width = 100px >
           </tr>
           
    <?php 
                $i++;   
                }
            ?>
  </tbody>
</table>
<br><br>
<?php if ($aktif > 1):?>
  <a href="?page=<?= $aktif - 1;?>">&laquo;</a>
<?php endif;?>

<?php for ($i = 1; $i <=$datahalaman; $i++):?>
  <?php if ($i == $aktif):?>
    <a href="?page=<?= $i;?>" style="font-weight:bold"><?=$i;?></a>
  <?php else :?>
    <a href="?page=<?= $i;?>"><?=$i;?></a>
  <?php endif;?>
<?php endfor;?>

<?php if ($aktif < $datahalaman):?>
  <a href="?page=<?= $aktif + 1;?>">&raquo;</a>
<?php endif;?>
    </div>
    </div>
    <script src="dataTables/datatables.min.js"></script>
    <script>
    $(document).ready(function () {
    $('#tabel').DataTable();
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>



