<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Javacation</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<div class="customer">
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

        <h3>Data Customer</h3>
        <div class="table">
        <table border="1">
            <tr>
                <th>nomor</th>
                <th>nama_cust</th>
                <th>alamat_cust</th>
                <th>username</th>
                <th>password</th>
                <th>no_ktp</th>
                <th>kategori</th>
                <th>aksi</th>
            </tr>

            <p><a href="add_customer.php">Tambah Data</a></p>
            </div>

            <?php
            $host = new mysqli("localhost","root","","pariwisata");
            $query_mysql = mysqli_query($host,"SELECT * FROM customer");
            $nomor=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_cust']; ?></td>
                <td><?php echo $data['alamat_cust']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['no_ktp']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td>
                    <a href="edit-customer.php?edit=<?php echo $data['id']; ?>" class="edit">Edit</a>  
                    <a href="delete-customer.php?hapus=<?php echo $data['id']; ?>" class="delete"
                    onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
                </td>
            </tr>    
            <?php } ?>


        </table>
        </div>
        </body>
</html>