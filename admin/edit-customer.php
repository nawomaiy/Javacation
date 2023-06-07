<?php


include 'koneksi_database.php';
$id = $_GET['edit'];
$sql = "select * from `customer` where id = $id";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_cust'];
$alamat = $row['alamat_cust'];
$username = $row['username'];
$password = $row['password'];
$no_ktp = $row['no_ktp'];
$kategori = $row['kategori'];


if (isset($_POST['submit'])) {
    $nama = $_POST['nama_cust'];
    $alamat = $_POST['alamat_cust'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_ktp = $_POST['no_ktp'];
    $kategori = $_POST['kategori'];


    $sql = "update `customer` set id=$id,nama_cust='$nama',alamat_cust='$alamat',username='$username',password='$password',no_ktp='$no_ktp',kategori='$kategori' where id=$id ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:customer.php");

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
<div class="edit-customer">
                    <div class="logo"><a href='customer.php'>Javacation.</a></div>

    <h3>Edit Data Customer</h3>
    <form action="" method="post">

        <table width="25%" border="0" class="customer">

            <tr>

                <td>Nama</td>

                <td>:</td>

                <td><input type="text" name="nama_cust" placeholder="masukan nama anda" value=<?php echo $nama; ?>>
                </td>
            </tr>

            <tr>

                <td>Alamat</td>

                <td>:</td>

                <td><input type="text" name="alamat_cust" placeholder="masukan alamat anda" value=<?php echo $alamat; ?>></td>
            </tr>

            <tr>

                <td>Username</td>

                <td>:</td>

                <td><input type="text" name="username" placeholder="masukan username anda" value=<?php echo $username; ?>>
                </td>
            </tr>

            <tr>

                <td>Password</td>

                <td>:</td>

                <td><input type="text" name="password" placeholder="masukan password anda" value=<?php echo $password; ?>>
                </td>
            </tr>

            <tr>

                <td>No KTP</td>

                <td>:</td>

                <td><input type="text" name="no_ktp" placeholder="masukan no ktp anda" value=<?php echo $no_ktp; ?>>
                </td>
            </tr>

            <tr>

                <td>Kategori</td>

                <td>:</td>

                <td><input type="text" name="kategori" placeholder="masukan kategori anda" value=<?php echo $kategori; ?>>
                </td>
            </tr>

            <tr>

                <td></td>

                <td></td>

                <td class="kirim"><input type="submit" name="submit" value="Kirim"></td>

            </tr>
            


        </table>

    </form>

</body>

</html>