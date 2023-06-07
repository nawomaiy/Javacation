<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
<div class="logo"><a href='kategori.php'>Javacation.</a></div>

        <h3>Tambah Data Kategori</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td width ="130">nama kategori</td>
                <td><input type="text" name="nama_kat" required autocomplete="off"></td>
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
            mysqli_query($host,"insert into kategori set
            nama_kat = '$_POST[nama_kat]'");

            echo "data baru telah tersimpan!!";
            header("location:kategori.php");
        }
        ?>

