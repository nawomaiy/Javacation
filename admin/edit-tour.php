<?php


include 'koneksi_database.php';
$id_tour = $_GET['edit'];
$sql = "select * from `tour` where id_tour = $id_tour";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_tour'];
$jenis = $row['jenis_paket'];
$daerah = $row['daerah'];
$harga = $row['harga_tour'];
$tg = $row['id_tg'];
$tw = $row['id_tw'];
$cust = $row['id'];
$hotel = $row['id_htl'];
$kamar = $row['id_kmr'];


if (isset($_POST['submit'])) {
$nama = $_POST['nama_tour'];
$jenis = $_POST['jenis_paket'];
$daerah = $_POST['daerah'];
$harga = $_POST['harga_tour'];
$tg = $_POST['id_tg'];
$tw = $_POST['id_tw'];
$cust = $_POST['id'];
$hotel = $_POST['id_htl'];
$kamar = $_POST['id_kmr'];


    $sql = "update `tour` set id_tour=$id_tour,nama_tour='$nama', jenis_paket='$jenis', daerah='$daerah', harga_tour='$harga', id_tg='$tg', id_tw='$tw', id='$cust', id_htl='$hotel', id_kmr='$kamar' where id_tour=$id_tour ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:tour.php");

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
<div class="edit-tour">
                    <div class="logo"><a href='tour.php'>Javacation.</a></div>
    

    <h3>Edit Data Tour</h3>

    <form action="" method="post">

        <table width="25%" border="0">

            <tr>

                <td>Nama Tour</td>

                <td>:</td>

                <td><input type="text" name="nama_tour" placeholder="masukan nama tour" value=<?php echo $nama; ?>>
                </td>
            </tr>

            <tr>

                <td>Jenis Paket</td>

                <td>:</td>

                <td><input type="text" name="jenis_paket" placeholder="masukan jenis paket" value=<?php echo $jenis; ?>>
                </td>
            </tr>

            <tr>

                <td>Daerah</td>

                <td>:</td>

                <td><input type="text" name="daerah" placeholder="masukan daerah" value=<?php echo $daerah; ?>>
                </td>
            </tr>

            <tr>

                <td>Harga Tour</td>

                <td>:</td>

                <td><input type="text" name="harga_tour" placeholder="masukan harga tour" value=<?php echo $harga; ?>>
                </td>
            </tr>

            <tr>

                <td>Tour Guide</td>

                <td>:</td>

                <td><input type="text" name="id_tg" placeholder="masukan nama tour guide" value=<?php echo $tg; ?>>
                </td>
            </tr>

            <tr>

                <td>Tempat Wisata</td>

                <td>:</td>

                <td><input type="text" name="id_tw" placeholder="masukan nama tempat wisata" value=<?php echo $tw; ?>>
                </td>
            </tr>

            <tr>

                <td>Nama Pembeli</td>

                <td>:</td>

                <td><input type="text" name="id" placeholder="masukan nama anda" value=<?php echo $cust; ?>>
                </td>
            </tr>

            <tr>

                <td>Nama Hotel</td>

                <td>:</td>

                <td><input type="text" name="id_htl" placeholder="masukan nama hotel" value=<?php echo $hotel; ?>>
                </td>
            </tr>

            <tr>

                <td>Nama Kamar</td>

                <td>:</td>

                <td><input type="text" name="id_kmr" placeholder="masukan nama kamar" value=<?php echo $kamar; ?>>
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