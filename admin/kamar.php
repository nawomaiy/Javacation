<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Javacation</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<div class="kamar">
                    <div class="logo"><a href='customer.php'>Javacation.</a></div>
    

    <ul>
    <li><a href="customer.php">Customer</a></li>
    <li><a href="hotel.php">Hotel</a></li>
    <li><a href="kamar.php">Kamar</a></li>
    <li><a href="kategori.php">Kategori</a></li>
    <li><a href="tempat_wisata.php">Tempat Wisata</a></li>
    <li><a href="tour.php">Tour</a></li>
    <li><a href="tour_guide.php">Tour Guide</a></li>
    <li><a href="transaksi.php">Transakasi</a></li>
    </ul>

        <h3>Data Kamar</h3>
        <div class="table-kamar">
        <table border="1">
            <tr>
                <th>nomor</th>
                <th>jenis_kamar</th>
                <th>aksi</th>
            </tr>

            <p><a href="add_kamar.php">Tambah Data</a></p>
            </div>

            <?php
            $host = new mysqli("localhost","root","","pariwisata");
            $query_mysql = mysqli_query($host,"SELECT * FROM kamar") or die(mysqli_error());
            $nomor=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['jenis_kamar']; ?></td>
                <td>
                    <a href="edit-kamar.php?edit=<?php echo $data['id_kamar']; ?>" class="edit">Edit</a>  
                    <a href="delete-kamar.php?hapus=<?php echo $data['id_kamar']; ?>" class="delete"
                    onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
                </td>
            </tr>    
            <?php } ?>

        </table>
        </div>
        </body>
</html>

