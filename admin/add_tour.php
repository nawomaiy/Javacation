<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
<div class="logo"><a href='tour.php'>Javacation.</a></div>
 <div class="tour">
        <h3>Tambah Data Tour</h3>
        <form action="" method="post" class="tour">
        <table>
            <tr>
                <td width ="130">nama tour</td>
                <td><input type="text" name="nama_tour" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">jenis paket</td>
                <td><input type="text" name="jenis_paket" required autocomplete="off" ></td>
            </tr>

            <tr>
                <td width ="130">daerah</td>
                <td><input type="text" name="daerah" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">harga_tour</td>
                <td><input type="text" name="harga_tour" required autocomplete="off"></td>
            </tr>
            <tr>
            <td>Tour Guide
                        <select name="tour_guide" id="tour_guide">
                          <option disabled selected> Pilih </option>
                          <?php 
                            include_once("koneksi_database.php");
                            $query_mysql = mysqli_query($host,"SELECT * FROM tour_guide")or die(mysqli_error());
                            while ($data=mysqli_fetch_array($query_mysql)) {
                         ?>
                          <option value=<?php echo $data['id_tg']; ?>><?php echo $data['nama_tg']; ?> </option>
                         <?php
                          }
                         ?>
                        </select>
                    </td>
            </tr>
            <tr>
            <td>Tempat Wisata
                        <select name="tempat_wisata" id="tempat_wisata">
                          <option disabled selected> Pilih </option>
                          <?php 
                            include_once("koneksi_database.php");
                            $query_mysql = mysqli_query($host,"SELECT * FROM tempat_wisata")or die(mysqli_error());
                            while ($data=mysqli_fetch_array($query_mysql)) {
                         ?>
                          <option value=<?php echo $data['id_tw']; ?>><?php echo $data['nama_tw']; ?> </option>
                         <?php
                          }
                         ?>
                        </select>
                    </td>
            </tr>
            <tr>
            <td>Customer
                        <select name="customer" id="customer">
                          <option disabled selected> Pilih </option>
                          <?php 
                            include_once("koneksi_database.php");
                            $query_mysql = mysqli_query($host,"SELECT * FROM customer")or die(mysqli_error());
                            while ($data=mysqli_fetch_array($query_mysql)) {
                         ?>
                          <option value=<?php echo $data['id']; ?>><?php echo $data['nama_cust']; ?> </option>
                         <?php
                          }
                         ?>
                        </select>
                    </td>
            </tr>
            <tr>
            <td>Hotel
                        <select name="hotel" id="hotel">
                          <option disabled selected> Pilih </option>
                          <?php 
                            include_once("koneksi_database.php");
                            $query_mysql = mysqli_query($host,"SELECT * FROM hotel")or die(mysqli_error());
                            while ($data=mysqli_fetch_array($query_mysql)) {
                         ?>
                          <option value=<?php echo $data['id_htl']; ?>><?php echo $data['nama_hotel']; ?> </option>
                         <?php
                          }
                         ?>
                        </select>
                    </td>
            </tr>
            <tr>
            <td>Kamar
                        <select name="kamar" id="kamar">
                          <option disabled selected> Pilih </option>
                          <?php 
                            include_once("koneksi_database.php");
                            $query_mysql = mysqli_query($host,"SELECT * FROM kamar")or die(mysqli_error());
                            while ($data=mysqli_fetch_array($query_mysql)) {
                         ?>
                          <option value=<?php echo $data['id_kamar']; ?>><?php echo $data['jenis_kamar']; ?> </option>
                         <?php
                          }
                         ?>
                        </select>
                    </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="simpan" name="proses"></td>
            </tr>
        </table>
        </form>
        </div>
        </body>
</html>

        <?php
        include "koneksi_database.php";
        $tour = "tour";
        if(isset($_POST['proses'])){
            mysqli_query($host,"insert into tour set
            nama_tour = '$_POST[nama_tour]',
            jenis_paket = '$_POST[jenis_paket]',
            daerah = '$_POST[daerah]',
            harga_tour = '$_POST[harga_tour]',
            id_tg = '$_POST[tour_guide]',
            id_tw = '$_POST[tempat_wisata]',
            id = '$_POST[customer]',
            id_htl = '$_POST[hotel]',
            id_kamar = '$_POST[kamar]'
            ");
            header("Location:$tour.php");
            echo "data baru telah tersimpan!!";


        }
        ?>

