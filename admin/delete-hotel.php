<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM hotel WHERE id_htl = $hapus");
header("location:hotel.php");
?>