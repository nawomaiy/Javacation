<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javacation</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <h1><a href="stay.php">Javacation.</a></h1>

<?php
include 'koneksi_database.php';
$id_htl = $_GET['view'];
$sql = "select * from `hotel` where id_htl = $id_htl";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$foto = $row['foto'];
$nama = $row['nama_hotel'];
$harga = $row['harga_permalam'];

?>

<div class="view">
<form action="" method="">

        <table width="25%" border="0">

            <tr>

                <td></td>
                <td><img src="/Javacation/foto_hotel/<?php echo $foto; ?>" alt="" width="428px" height="281px">
                </td>
            </tr>

            <tr>

                <td></td>
                <td class="nama"><?php echo $nama; ?>
                </td>
            </tr>

            <tr>

            <td></td>
            <td class="nama"><?php echo $harga; ?>
            </td>

            </tr>
        </table>

    </form>
    </div>
    <div class="add">
    <tr>
        <td width ="130">tanggal booking</td>
        <td><input type="date" name="tanggal_booking" required autocomplete="off" ></td>
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
            
        <?php
        include "koneksi_database.php";

        if(isset($_POST['proses'])){
            mysqli_query($host,"insert into transaksi set
            tanggal_booking = '$_POST[tanggal_booking]'");

            echo "data telah tersimpan!!";
            header("location:beranda.php");
        }
        ?>

        </div>

       <a href="beranda.php"> <button>SELESAI</button></a>
</body>
</html>
