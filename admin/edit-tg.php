<?php


include 'koneksi_database.php';
$id_tg = $_GET['edit'];
$sql = "select * from `tour_guide` where id_tg = $id_tg";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_tg'];
$alamat = $row['alamat_tg'];


if (isset($_POST['submit'])) {
    $nama = $_POST['nama_tg'];
    $alamat = $_POST['alamat_tg'];


    $sql = "update `tour_guide` set id_tg=$id_tg,nama_tg='$nama',alamat_tg='$alamat' where id_tg=$id_tg ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:tour_guide.php");

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
<div class="edit-tg">
                    <div class="logo"><a href='tour_guide.php'>Javacation.</a></div>
    

    <h3>Edit Data Tour Guide</h3>

    <form action="" method="post">

        <table width="25%" border="0">

            <tr>

                <td>Nama Tour Guide</td>

                <td>:</td>

                <td><input type="text" name="nama_tg" placeholder="masukan nama tour guide" value=<?php echo $nama; ?>>
                </td>
            </tr>

            <tr>

                <td>Alamat Tour Guide</td>

                <td>:</td>

                <td><input type="text" name="alamat_tg" placeholder="masukan alamat tour guide" value=<?php echo $alamat; ?>></td>
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