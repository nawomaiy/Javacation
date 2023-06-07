<?php 
include 'koneksi_database.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM customer WHERE id = $hapus");
header("location:customer.php");
?>