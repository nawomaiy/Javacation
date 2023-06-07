<?php


include 'koneksi_database.php';
$id_htl = $_GET['edit'];
$sql = "select * from `hotel` where id_htl = $id_htl";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_hotel'];
$alamat = $row['alamat_hotel'];
$harga = $row['harga_permalam'];
$foto = $row['foto'];


if (isset($_POST['submit'])) {
    $nama = $_POST['nama_hotel'];
    $alamat = $_POST['alamat_hotel'];
    $harga = $_POST['harga_permalam'];
    $foto = $_POST['foto'];


    $sql = "update `hotel` set id_htl=$id_htl,nama_hotel='$nama',alamat_hotel='$alamat',harga_permalam='$harga',foto='$foto' where id_htl=$id_htl ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:hotel.php");

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
<div class="edit-hotel">
                    <div class="logo"><a href='hotel.php'>Javacation.</a></div>
    

    <h3>Edit Data Hotel</h3>

    <form action="" method="post">

        <table width="25%" border="0">

            <tr>

                <td>Nama Hotel</td>

                <td>:</td>

                <td><input type="text" name="nama_hotel" placeholder="masukan nama hotel" value=<?php echo $nama; ?>>
                </td>
            </tr>

            <tr>

                <td>Alamat Hotel</td>

                <td>:</td>

                <td><input type="text" name="alamat_hotel" placeholder="masukan alamat hotel" value=<?php echo $alamat; ?>></td>
            </tr>

            <tr>

                <td>Harga Per Malam</td>

                <td>:</td>

                <td><input type="text" name="harga_permalam" placeholder="masukan harga per malam" value=<?php echo $harga; ?>>
                </td>
            </tr>

            <tr>

                <td>Foto Hotel</td>

                <td>:</td>

                <td><input type="text" name="foto" placeholder="masukan foto hotel" value=<?php echo $foto; ?>>
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