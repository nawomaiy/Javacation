<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
<div class="logo"><a href='tempat_wisata.php'>Javacation.</a></div>

        <h3>Tambah Data Tempat Wisata</h3>
        <form action=""  method="post ">
        <table>
            <tr>
                <td width ="130">nama tempat wisata</td>
                <td><input type="text" name="nama_tw" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">alamat tempat wisata</td>
                <td><input type="text" name="alamat" required autocomplete="off" ></td>
            </tr>

            <tr>
                <td width ="130">harga masuk</td>
                <td><input type="text" name="harga_masuk" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">jumlah tiket</td>
                <td><input type="text" name="jumlah_tiket" required autocomplete="off"></td>
            </tr>

            <tr>
            <td>kategori
                        <select name="kategori" id="kategori">
                          <option disabled selected> Pilih </option>
                          <?php 
                            include_once("koneksi_database.php");
                            $query_mysql = mysqli_query($host,"SELECT * FROM kategori")or die(mysqli_error());
                            while ($data=mysqli_fetch_array($query_mysql)) {
                         ?>
                          <option value=<?php echo $data['id_kat']; ?>><?php echo $data['nama_kat']; ?> </option>
                         <?php
                          }
                         ?>
                        </select>
                    </td>
            </tr>

            <tr>
                <td width ="130">foto</td>
                <td><input type="file" name="foto" required autocomplete="off" accept='image/*'></td>
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
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama_tw'];
        $alamat = $_POST['alamat'];
        $harga = $_POST['harga_masuk'];
        $jumlah = $_POST['jumlah_tiket'];
        $kategori = $_POST['id_kat'];

        $filename = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        $type1 = explode('.', $filename);
        $type2 = $type1[1];

        $newname = 'foto_tempat_wisata' . time() . '.' . $type2;

        $tipe_izin = array('jpg', 'jpeg', 'png');

        if (!in_array($type2, $tipe_izin)) {

            echo 'Format File Tidak Diizinkan';
        } else {
            move_uploaded_file($tmp_name, './foto_tempat_wisata/' . $newname);
        }

        $insert = mysqli_query($conn, "INSERT INTO tempat_wisata VALUES (
                                not null,
                                '" . $nama . "',
                                '" . $alamat . "',
                                '" . $harga . "',
                                '" . $jumlah . "',
                                '" . $kategori . "',
                                not null

                                )");
        if ($insert) {
            echo 'Simpan data berhasil';
            echo '<script>window.location="data-produk.php"</script>';
        } else {
            echo 'Gagal';
        }
        header("location:tempat_wisata.php");
    }



