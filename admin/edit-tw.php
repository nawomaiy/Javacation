<?php


include 'koneksi_database.php';
$id_tw = $_GET['edit'];
$sql = "select * from `tempat_wisata` where id_tw = $id_tw";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_tw'];
$harga = $row['harga_masuk'];
$foto = $row['foto'];
$alamat = $row['alamat'];
$kategori = $row['id_kat'];


if (isset($_POST['submit'])) {
    $nama = $_POST['nama_tw'];
    $harga = $_POST['harga_masuk'];
    $foto = $_POST['foto'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['id_kat'];


    $sql = "update `tempat_wisata` set id_tw=$id_tw,nama_tw='$nama', harga_masuk='$harga', foto='$foto', alamat='$alamat', id_kat='$kategori' where id_tw=$id_tw ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:tempat_wisata.php");

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
                    <div class="logo"><a href='tempat_wisata.php'>Javacation.</a></div>
    

    <h3>Edit Data Tempat Wisata</h3>

    <form action="" method="post">

        <table width="25%" border="0">

            <tr>

                <td>Nama Tempat Wisata</td>

                <td>:</td>

                <td><input type="text" name="nama_tw" placeholder="masukan nama tempat wisata" value=<?php echo $nama; ?>>
                </td>
            </tr>

            <tr>

                <td>Harga Masuk Tempat Wisata</td>

                <td>:</td>

                <td><input type="text" name="harga_masuk" placeholder="masukan harga masuk tempat wisata" value=<?php echo $harga; ?>>
                </td>
            </tr>

            <tr>

                <td>Foto Tempat Wisata</td>

                <td>:</td>

                <td><input type="text" name="foto" placeholder="masukan foto tempat wisata" value=<?php echo $foto; ?>>
                </td>
            </tr>

            <tr>

                <td>Alamat Tempat Wisata</td>

                <td>:</td>

                <td><input type="text" name="alamat" placeholder="masukan alamat tempat wisata" value=<?php echo $alamat; ?>>
                </td>
            </tr>

            <tr>

                <td>Kategori</td>

                <td>:</td>

                <td><input type="text" name="kategori" placeholder="masukan kategori" value=<?php echo $kategori; ?>>
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