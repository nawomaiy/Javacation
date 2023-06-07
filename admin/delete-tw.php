<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM tempat_wisata WHERE id_tw = $hapus");
header("location:tempat_wisata.php");
?>