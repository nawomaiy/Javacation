<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
        <div class="logo"><a href='customer.php'>Javacation.</a></div>

        <h3>Tambah Data Customer</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td width ="130">nama</td>
                <td><input type="text" name="nama_cust" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">alamat</td>
                <td><input type="text" name="alamat_cust" required autocomplete="off" ></td>
            </tr>

            <tr>
                <td width ="130">username</td>
                <td><input type="text" name="username" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">password</td>
                <td><input type="text" name="password" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">no.ktp</td>
                <td><input type="text" name="no_ktp" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">kategori</td>
                <td><input type="text" name="kategori" required autocomplete="off"></td>
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
            mysqli_query($host,"insert into customer set
            nama_cust = '$_POST[nama_cust]',
            alamat_cust = '$_POST[alamat_cust]',
            username = '$_POST[username]',
            password = '$_POST[password]',
            no_ktp = '$_POST[no_ktp]',
            kategori = '$_POST[kategori]'");

            echo "data baru telah tersimpan!!";
            header("location:customer.php");
        }
        ?>

