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
<div class="tempat_wisata">
                    <div class="logo"><a href='tempat_wisata.php'>Javacation.</a></div>
    

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

        <h3>Data Tempat Wisata</h3>
        <div class="table-tempatwisata">
        <table border="1">
            <tr>
                <th>nomor</th>
                <th>nama_tw</th>
                <th>harga_masuk</th>
                <th>foto</th>
                <th>alamat</th>
                <th>jumlah_tiket</th>
                <th>kategori</th>
                <th>aksi</th>
            </tr>

            <p><a href="add_tempat_wisata.php">Tambah Data</a></p>
            </div>

            <?php
            $host = new mysqli("localhost","root","","pariwisata");
            $halaman = 50; /* page halaman*/
            $page    = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai   = ($page>1) ? ($page * $halaman) - $halaman : 0;
            
            $result = mysqli_query($host,"SELECT * FROM tempat_wisata");
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);
            $query_mysql = mysqli_query($host,"SELECT tempat_wisata.id_tw, tempat_wisata.nama_tw, tempat_wisata.harga_masuk, tempat_wisata.foto, tempat_wisata.alamat, tempat_wisata.jumlah_tiket, kategori.nama_kat FROM tempat_wisata, kategori WHERE kategori.id_kat=tempat_wisata.id_kat LIMIT $mulai, $halaman") or die(mysqli_error($host));
            $nomor=$mulai+1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_tw']; ?></td>
                <td><?php echo $data['harga_masuk']; ?></td>
                <td><img src="/Javacation/foto_tempat_wisata/<?php echo $data['foto']; ?>" alt="" width="50" height="50"></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['jumlah_tiket']; ?></td>
                <td><?php echo $data['nama_kat']; ?></td>
                <td>
                    <a href="edit-tw.php?edit=<?php echo $data['id_tw']; ?>" class="edit">Edit</a>  
                    <a href="delete-tw.php?hapus=<?php echo $data['id_tw']; ?>" class="delete"
                    onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
                </td>
            </tr>   

            <?php } ?>

            <div style="font-weight:bold;">
        <!-- Paging -->
        <?php
            for ($i=1; $i<=$pages ; $i++){
        ?>
            <!-- <a href="tempat_wisata.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a> -->
        <?php
            }
        ?>
    </div>
        </table>
        </div>
        </body>
</html>