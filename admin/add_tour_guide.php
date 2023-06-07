<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
<div class="logo"><a href='tour_guide.php'>Javacation.</a></div>

        <h3>Tambah Data Tour Guide</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td width ="130">nama</td>
                <td><input type="text" name="nama_tg" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">alamat</td>
                <td><input type="text" name="alamat_tg" required autocomplete="off" ></td>
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
            mysqli_query($host,"insert into tour_guide set
            nama_tg = '$_POST[nama_tg]',
            alamat_tg = '$_POST[alamat_tg]'");

            echo "data baru telah tersimpan!!";
            header("location:tour_guide.php");
        }
        ?>

