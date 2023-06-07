<?php


include 'koneksi_database.php';
$id_trans = $_GET['edit'];
$sql = "select * from `transaksi` where id_trans = $id_trans";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$jenis = $row['jenis_payment'];
$biaya = $row['biaya_trans'];
$tour = $row['id_tour'];
$tw = $row['id_tw'];
$tanggal = $row['tanggal_booking'];
$cust = $row['id'];


if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis_payment'];
    $biaya = $_POST['biaya_trans'];
    $tour = $_POST['id_tour'];
    $tw = $_POST['id_tw'];
    $tanggal = $_POST['tanggal_booking'];
    $cust = $_POST['id'];


    $sql = "update `transaksi` set id_trans=$id_trans,jenis_payment='$jenis',biaya_trans='$biaya',id_tour='$tour',id_tw='$tw',tanggal_booking='$tanggal', id='$cust' where id_trans=$id_trans ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:transaksi.php");

    } else {
        die(mysqli_error($host));

    }
}

?>

<html>

<head>

    <link rel="stylesheet" href="style7.css">

</head>


<body>
<div class="edit-transaksi">
                    <div class="logo"><a href='transaksi.php'>Javacation.</a></div>
    


    <h3>Edit Data Customer</h3>

    <form action="" method="post">

        <table width="25%" border="0">

            <tr>

                <td>Jenis Payment</td>

                <td>:</td>

                <td><input type="text" name="jenis_payment" placeholder="masukan jenis payment" value=<?php echo $jenis; ?>>
                </td>
            </tr>

            <tr>

                <td>Biaya</td>

                <td>:</td>

                <td><input type="text" name="biaya_trans" placeholder="masukan biaya" value="<?php echo $biaya;?>"></td>
            </tr>

            <tr>

                <td>Nama Tour</td>

                <td>:</td>

                <td><input type="text" name="id_tour" placeholder="masukan nama tour" value=<?php echo $tour; ?>>
                </td>
            </tr>

            <tr>

                <td>Nama Tempat Wisata</td>

                <td>:</td>

                <td><input type="text" name="id_tw" placeholder="masukan nama tempat wisata" value=<?php echo $tw; ?>>
                </td>
            </tr>

            <tr>

                <td>Tanggal Booking</td>

                <td>:</td>

                <td><input type="date" name="tanggal_booking" placeholder="masukan tanggal booking" value=<?php echo $tanggal; ?>>
                </td>
            </tr>

            <tr>

                <td>Nama Pembeli</td>

                <td>:</td>

                <td><input type="text" name="id" placeholder="masukan nama anda" value=<?php echo $cust; ?>>
                </td>
            </tr>

            <tr>

                <td></td>

                <td></td>

                <td><input type="submit" name="submit" value="Kirim"></td>

            </tr>


        </table>

    </form>

</body>

</html>