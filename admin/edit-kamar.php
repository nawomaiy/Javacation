<?php


include 'koneksi_database.php';
$id_kamar = $_GET['edit'];
$sql = "select * from `kamar` where id_kamar = $id_kamar";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$jenis = $row['jenis_kamar'];


if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis_kamar'];


    $sql = "update `kamar` set id_kamar=$id_kamar,jenis_kamar='$jenis' where id_kamar=$id_kamar ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:kamar.php");

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
<div class="edit-kamar">
                    <div class="logo"><a href='kamar.php'>Javacation.</a></div>
    


    <h3>Edit Data Kamar</h3>

    <form action="" method="post">

        <table width="25%" border="0">

            <tr>

                <td>Jenis Kamar</td>

                <td>:</td>

                <td><input type="text" name="jenis_kamar" placeholder="masukan jenis kamar" value=<?php echo $jenis; ?>>
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