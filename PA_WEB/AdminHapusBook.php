<?php
    require 'GlobalConfig.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $data = $db->query("SELECT * FROM kucing WHERE id='$id'");
        $tampil = $data->fetch_array();
        $bnama = $tampil['bnama'];
        $bjenis = $tampil['bjenis'];
        $knama = $tampil['knama'];
        $kkelamin = $tampil['kkelamin'];
        $bbook = $tampil['bbook'];
        $btrawat = $tampil['btrawat'];
        $foto = $tampil['kfoto'];

        $query = "INSERT INTO history (nama_pemilik,jenis_perawatan,nama_kucing,sex,tgl_pemeriksaan,tgl_booking,foto_kucing) VALUES ('$bnama','$bjenis','$knama','$kkelamin','$btrawat','$bbook','$foto')";
        $result = $db->query($query);
        $result = mysqli_query($db, "DELETE FROM kucing WHERE id ='$id'");

        if($result) {
            header("Location:Adminjadwal.php");
        }else{
            echo "Error";
        }


    }

?>