<?php


include 'koneksi_database.php';
$id_kat = $_GET['edit'];
$sql = "select * from `kategori` where id_kat = $id_kat";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_kat'];


if (isset($_POST['submit'])) {
    $nama = $_POST['nama_kat'];


    $sql = "update `kategori` set id_kat=$id_kat,nama_kat='$nama' where id_kat=$id_kat ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:kategori.php");

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
<div class="edit-kategori">
                    <div class="logo"><a href='kategori.php'>Javacation.</a></div>
    


    <h3>Edit Data Kategori</h3>

    <form action="" method="post">

        <table width="25%" border="0">

            <tr>

                <td>Nama Kategori</td>

                <td>:</td>

                <td><input type="text" name="nama_kat" placeholder="masukan kategori" value=<?php echo $nama; ?>>
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