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
<header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <h1><a href="beranda.php">Javacation.</a></h1>
                
    <button class="act">Search
        <img src="search.png" alt="" width="49px" height="49px">
    </button>

                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="pantai.php" class="menu-link">Pantai</a></li>
                        <li class="menu-item"><a href="gunung.php" class="menu-link">Gunung</a></li>
                        <li class="menu-item"><a href="goa.php" class="menu-link">Goa</a></li>
                        <li class="menu-item"><a href="candi.php" class="menu-link">Candi</a></li>
                        <li class="menu-item"><a href="kebun_binatang.php" class="menu-link">Kebun Binatang</a></li>
                        <li class="menu-item"><a href="air_terjun.php" class="menu-link">Air Terjun</a></li>
                        <li class="menu-item"><a href="sejarah.php" class="menu-link">Sejarah</a></li>
                        <li class="menu-item"><a href="danau.php" class="menu-link">Danau</a></li>
                        <li class="menu-item"><a href="industri.php" class="menu-link">Industri</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php
        include "koneksi_database.php";
        $sql = "SELECT * FROM tempat_wisata";
        $result = mysqli_query($host, $sql);
    ?>
        <div class="grid-container-act">
            <?php
            while($data = mysqli_fetch_array($result)) {
            ?>
                <div class="grid-item">
                    <a href="transaksi.php?view=<?php echo $data['id_tw']; ?>"><img src="/Javacation/foto_tempat_wisata/<?php echo $data['foto']; ?>" alt="" width="333" height="186"></a>
                    <a href=''><h2><?php echo $data['nama_tw'];?></h2></a>
                </div>
            <?php }?>
        </div> 

</body>
</html>