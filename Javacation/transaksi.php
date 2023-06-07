<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javacation</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <h1><a href="activities.php">Javacation.</a></h1>

<?php
include 'koneksi_database.php';
$id_tw = $_GET['view'];
$sql = "select * from `tempat_wisata` where id_tw = $id_tw";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$foto = $row['foto'];
$nama = $row['nama_tw'];
$harga = $row['harga_masuk'];
?>

<div class="view">
<form action="" method="">

        <table width="25%" border="0">

            <tr>

                <td></td>
                <td><img src="/Javacation/foto_tempat_wisata/<?php echo $foto; ?>" alt="" width="428px" height="281px">
                </td>
            </tr>

            <tr>

                <td></td>
                <td class="nama"><?php echo $nama; ?>
                </td>
            </tr>

            <tr>

                <td></td>
                <td><?php echo $harga; ?>
                </td>
            </tr>
        </table>

    </form>
    </div>
    <div class="add">
        <h2>Jumlah Tiket:<br></h2>
        <select id="no">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
        </select>
        <br><input type="button" onclick="myFunction()" value="Total:"> 
        <input type="text" id="result" size="20">
        </form>

        <script>
        function myFunction() {
        //   var harga = 50000;
        var harga_tiket= "<?php echo"$harga"?>"
        var no = document.getElementById("no");
        var option = no.options[no.selectedIndex].text;
        var total = document.getElementById("result").value;
        total = total + option * harga_tiket;
        document.getElementById("result").value = total;
        }
        </script>
        </div>

       <a href="beranda.php"> <button>SELESAI</button></a>
</body>
</html>
