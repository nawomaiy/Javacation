<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javacation</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="logo"><h1><a href="beranda.php">Javacation.</a></h1></div>
    <button>Search
        <img src="search.png" alt="" width="49px" height="49px">
    </button>
    <?php
        include "koneksi_database.php";
        $sql = "SELECT * FROM hotel";
        $result = mysqli_query($host, $sql);
    ?>
        <div class="grid-container stay">
            <?php
            while($data = mysqli_fetch_array($result)) {
            ?>
                <div class="grid-item stay">
                    <a href="transaksi-stay.php?view=<?php echo $data['id_htl']; ?>"><img src="/Javacation/foto_hotel/<?php echo $data['foto']; ?>" alt="" width="333" height="186"></a>
                    <a href=''><h2><?php echo $data['nama_hotel'];?></h2></a>
                    <a href=''><h4><?php echo $data['harga_permalam'];?></h4></a>
                </div>
            <?php }?>
        </div> 
</body>
</html>