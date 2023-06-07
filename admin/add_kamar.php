<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
    <div class="logo"><a href='kamar.php'>Javacation.</a></div>
    
        <h3>Tambah Data Kamar</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td width ="130">jenis kamar</td>
                <td><input type="text" name="jenis_kamar" required autocomplete="off"></td>
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
            mysqli_query($host,"insert into kamar set
            jenis_kamar = '$_POST[jenis_kamar]'");

            echo "data baru telah tersimpan!!";
            header("location:kamar.php");
        }
        ?>

