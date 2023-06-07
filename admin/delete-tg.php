<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM tour_guide WHERE id_tg = $hapus");
header("location:tour_guide.php");
?>