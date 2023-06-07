<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM kamar WHERE id_kamar = $hapus");
header("location:kamar.php");
?>