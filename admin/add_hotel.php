<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
    <div class="logo"><a href='hotel.php'>Javacation.</a></div>

        <h3>Tambah Data Hotel</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td width ="130">nama hotel</td>
                <td><input type="text" name="nama_hotel" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">alamat hotel</td>
                <td><input type="text" name="alamat_hotel" required autocomplete="off" ></td>
            </tr>

            <tr>
                <td width ="130">harga per malam</td>
                <td><input type="text" name="harga_permalam" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">foto hotel</td>
                <td><input type="text" name="foto" required autocomplete="off"></td>
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
            mysqli_query($host,"insert into hotel set
            nama_hotel = '$_POST[nama_hotel]',
            alamat_hotel = '$_POST[alamat_hotel]',
            harga_permalam = '$_POST[harga_permalam]',
            foto = '$_POST[foto]'");

            echo "data baru telah tersimpan!!";
            header("location:hotel.php");
        }
        ?>

