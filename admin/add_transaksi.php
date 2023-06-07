<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
<div class="logo"><a href='transaksi.php'>Javacation.</a></div>

        <h3>Tambah Data Transaksi</h3>
        <form action="" method="post">
        <table>
            <tr>
                    <td width = "150"> jenis payment
                        <select id="jenis_payment" name="jenis_payment">
                            <option value="cash">cash</option>
                            <option value="transfer">transfer</option>
                        </select>
                    </td>
                </form>
            </tr>

            <tr>
                <td width ="130">biaya</td>
                <td><input type="text" name="biaya_trans" required autocomplete="off" ></td>
            </tr>

            <tr>
            <td>Tour
                        <select name="tour" id="tour">
                          <option disabled selected> Pilih </option>
                          <?php 
                            include_once("koneksi_database.php");
                            $query_mysql = mysqli_query($host,"SELECT * FROM tour")or die(mysqli_error());
                            while ($data=mysqli_fetch_array($query_mysql)) {
                         ?>
                          <option value=<?php echo $data['id_tour']; ?>><?php echo $data['nama_tour']; ?> </option>
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
                <td width ="130">tgl booking</td>
                <td><input type="date" name="tanggal_booking" required autocomplete="off" ></td>
            </tr>

            <tr>
            <td>Nama Customer
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
                <td></td>
                <td><input type="submit" value="simpan" name="proses"></td>
            </tr>
        </table>
        </form>
        </body>
</html>

        <?php
        include "koneksi_database.php";

        if(isset($_POST['proses'])){
            mysqli_query($host,"insert into transaksi set
            jenis_payment = '$_POST[jenis_payment]',
            biaya_trans = '$_POST[biaya_trans]',
            id_tour = '$_POST[tour]',
            id_tw = '$_POST[tempat_wisata]',
            tanggal_booking = '$_POST[tanggal_booking]',
            id_cust = '$_POST[customer]'");

            echo "data baru telah tersimpan!!";
            header("location:transaksi.php");
        }
        ?>

