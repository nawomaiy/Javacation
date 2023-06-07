<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM tour WHERE id_tour = $hapus");
header("location:tour.php");
?>