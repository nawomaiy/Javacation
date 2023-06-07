<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Javacation</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
<div class="transaksi">
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

        <h3>Data Transaksi</h3>
        <div class="table-transaksi">
        <table border="1">
            <tr>
                <th>nomor</th>
                <th>jenis_payment</th>
                <th>biaya_trans</th>
                <th>nama_tour</th>
                <th>nama_tw</th>
                <th>tanggal_booking</th>
                <th>nama_cust</th>
                <th>aksi</th>
            </tr>

            <p><a href="add_transaksi.php">Tambah Data</a></p>
            </div>

            <?php
            $host = new mysqli("localhost","root","","pariwisata");
            $query_mysql = mysqli_query($host,"SELECT transaksi.id_trans, transaksi.jenis_payment, transaksi.biaya_trans, tour.nama_tour, tempat_wisata.nama_tw, transaksi.tanggal_booking, customer.nama_cust FROM transaksi LEFT JOIN tour ON tour.id_tour=transaksi.id_tour LEFT JOIN tempat_wisata ON tempat_wisata.id_tw=transaksi.id_tw LEFT JOIN customer ON customer.id=transaksi.id;") or die(mysqli_error($host));
            $nomor=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['jenis_payment']; ?></td>
                <td><?php echo $data['biaya_trans']; ?></td>
                <td><?php echo $data['nama_tour']; ?></td>
                <td><?php echo $data['nama_tw']; ?></td>
                <td><?php echo $data['tanggal_booking']; ?></td>
                <td><?php echo $data['nama_cust']; ?></td>
                <td>
                    <a href="edit-transaksi.php?edit=<?php echo $data['id_trans']; ?>" class="edit">Edit</a>  
                    <a href="delete-transaksi.php?hapus=<?php echo $data['id_trans']; ?>" class="delete"
                    onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
                </td>
            </tr>    
            <?php } ?>

        </table>
        </div>
        </body>
</html>