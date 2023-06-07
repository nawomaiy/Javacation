<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM transaksi WHERE id_trans = $hapus");
header("location:transaksi.php");
?>