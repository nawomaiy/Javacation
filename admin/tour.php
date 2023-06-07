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

                    <div class="logo"><a href='tour.php'>Javacation.</a></div>
    

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

        <h3>Data Tour</h3>
        <div class="table-tour">
        <table border="1">
            <tr>
            <th>nomor</th>
                <th>nama_tour</th>
                <th>jenis_paket</th>
                <th>daerah</th>
                <th>harga_tour</th>
                <th>nama_tg</th>
                <th>nama_hotel</th>
                <th>nama_tw</th>
                <th>nama_cust</th>
                <th>jenis_kamar</th>
                <th>aksi</th>
            </tr>

            <p><a href="add_tour.php">Tambah Data</a></p>
            </div>

            <?php
            $host = new mysqli("localhost","root","","pariwisata");
            $query_mysql = mysqli_query($host,"SELECT tour.id_tour , tour.nama_tour, tour.jenis_paket, tour.daerah, tour.harga_tour, tour_guide.nama_tg, tempat_wisata.nama_tw, customer.nama_cust, hotel.nama_hotel, kamar.jenis_kamar FROM tour,tour_guide,tempat_wisata,customer,hotel,kamar WHERE tour_guide.id_tg=tour.id_tg AND tempat_wisata.id_tw=tour.id_tw AND customer.id=tour.id AND hotel.id_htl=tour.id_htl AND kamar.id_kamar=tour.id_kmr;") or die(mysqli_error($host));
            $nomor=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_tour']; ?></td>
                <td><?php echo $data['jenis_paket']; ?></td>
                <td><?php echo $data['daerah']; ?></td>
                <td><?php echo $data['harga_tour']; ?></td>
                <td><?php echo $data['nama_tg']; ?></td>
                <td><?php echo $data['nama_hotel']; ?></td>
                <td><?php echo $data['nama_tw']; ?></td>
                <td><?php echo $data['nama_cust']; ?></td>
                <td><?php echo $data['jenis_kamar']; ?></td>
                <td>
                    <a href="edit-tour.php?edit=<?php echo $data['id_tour']; ?>" class="edit">Edit</a>  
                    <a href="delete-tour.php?hapus=<?php echo $data['id_tour']; ?>" class="delete"
                    onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
                </td>
            </tr>    
            <?php } ?>

        </table>
        </body>
</html>