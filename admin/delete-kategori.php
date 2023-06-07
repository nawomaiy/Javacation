<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM kategori WHERE id_kat = $hapus");
header("location:kategori.php");
?>