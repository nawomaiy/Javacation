<html>
    <head>
        <h1>Create Data Baru</h1>
    </head>
<body>
        <h3>Data Admin</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td width ="130">nama</td>
                <td><input type="text" name="nama_admin" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">alamat</td>
                <td><input type="text" name="alamat_admin" required autocomplete="off" ></td>
            </tr>

            <tr>
                <td width ="130">username</td>
                <td><input type="text" name="username_admin" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">password</td>
                <td><input type="text" name="password_admin" required autocomplete="off"></td>
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
            mysqli_query($host,"insert into admin set
            nama_admin = '$_POST[nama_admin]',
            alamat_admin = '$_POST[alamat_admin]',
            username_admin = '$_POST[username_admin]',
            password_admin = '$_POST[password_admin]'");

            echo "data baru telah tersimpan!!";
        }
        ?>

