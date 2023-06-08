-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 02:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `alamat_admin` varchar(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `username_admin`, `password_admin`) VALUES
(1, 'taufiqurrahman', 'sidoarjo', 'taufiqurrahman', 'Tfqh12'),
(2, 'sekar', 'sidoarjo', 'sekar', 'Skrr67*'),
(3, 'devan', 'porong', 'devan', 'Dvanz2'),
(4, 'bryan', 'tanggulangin', 'bryan', 'Brrry4n'),
(5, 'naomi', 'blabla', '', ''),
(6, 'wdwwd', 'rgre', 'rwger', 'wrtrege');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nama_cust` varchar(255) NOT NULL,
  `alamat_cust` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nama_cust`, `alamat_cust`, `username`, `password`, `id`, `no_ktp`, `kategori`) VALUES
('athilla', 'krian', 'arga21', 'ayugamo', 1, '3521120698765432', '-'),
('naomisya shafizhilal', 'sidoarjo', 'n40m1', 'naomi304', 2, '3530040712345678', 'VIP'),
('salwa imtyaz', 'pasuruan', 'salw44', 'sayaz', 3, '3515070623456789', 'VIP'),
('kenzie aryasuta', 'tanggulangin', 'kenzz', 'kenzya', 4, '3506061287654321', 'VIP'),
('hideo', 'tanggulangin', 'suryono', 'deohi', 5, '3509051434567891', '-'),
('elma', 'bluru', '3lm44', 'elmooww', 9, '350178391938', '-');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_htl` int(50) NOT NULL,
  `nama_hotel` varchar(255) NOT NULL,
  `alamat_hotel` varchar(255) NOT NULL,
  `harga_permalam` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_htl`, `nama_hotel`, `alamat_hotel`, `harga_permalam`, `foto`) VALUES
(1, 'El Hotel Royale Banyuwangi', 'Jl. Raya Jember KM.7 Pakistaji, Krajan, Dadapan,', 540000, 'El Hotel Royale Banyuwangi.jpeg'),
(2, 'Hotel Santika Gresik', ' Jl. DR. Wahidin Sudiro Husodo No.788, Kembangan, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61124', 600000, 'Hotel Santika Gresik.jpeg'),
(3, 'The Sun Hotel Sidoarjo', 'Jl. Pahlawan No.1, Rw6, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212', 366000, 'The Sun Hotel Sidoarjo.jpeg'),
(4, 'The Alimar Premier Hotel Surabaya', 'Jl. Dr. Ir. H. Soekarno No.134, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115', 450000, 'The Alimar Premier Hotel Surabaya.jpeg'),
(5, 'Hotel Bwalk Malang', 'Jl. Sidomakmur No.73, Jetak Lor, Mulyoagung, Kec. Dau, Kabupaten Malang, Jawa Timur 65151', 250000, 'Hotel Bwalk Malang.jpeg'),
(6, 'Hotel Yusro Jombang', 'Jl. Soekarno - Hatta No.25, Nglungge, Keplaksari, Kec. Peterongan, Kabupaten Jombang, Jawa Timur 61481', 500000, 'Hotel Yusro Jombang.jpeg'),
(7, 'Midtown Hotel Surabaya', 'Jl. Basuki Rahmat No.76, Tegalsari, Kec. Tegalsari, Kota SBY, Jawa Timur 60262', 400000, 'Midtown Hotel Surabaya.jpeg'),
(8, 'Hersya Front One Inn Surabaya', ' Jl. Ketintang Baru III No.58, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231', 300000, 'Hersya Front One Inn Surabaya.jpeg'),
(9, 'Hotel Sahid Surabaya', 'Jl. Sumatera No.1 -15, Pacar Keling, Kec. Tambaksari, Kota SBY, Jawa Timur 60281', 300000, 'Hotel Sahid Surabaya.jpeg'),
(10, 'Kokoon Hotel Banyuwangi', 'Jl. Raya Jember No.KM 7, Dusun Krajan, Dadapan, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461', 700000, 'Kokoon Hotel Banyuwangi.jpeg'),
(11, 'The Sunan Hotel Solo', 'Jl. A. Yani No.40, Kerten, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57143', 400000, 'The Sunan Hotel Solo.jpeg'),
(12, 'Hotel Santika Pekalongan', ' Jl. Gajah Mada Bar. No.7A, Kramatsari, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51118', 580000, 'Hotel Santika Pekalongan.jpeg'),
(13, 'Hotel Asia Solo', 'Jl. Monginsidi No.1, Tegalharjo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57129', 250000, 'Hotel Asia Solo.jpeg'),
(14, 'Kotta Hotel Semarang', 'Jl. Taman Srigunting No.14, Tj. Mas, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50174', 860000, 'Kotta Hotel Semarang.jpeg'),
(15, 'River Walk Boja', 'Jl. Veteran, Nagadibolo, Desa Ngadibolo, Boja, Kendal Regency, Central Java 51381', 380000, 'River Walk Boja.jpg'),
(16, 'Hotel Louis Kienne Pandanaran', 'Jl. Pandanaran No.18, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50241', 500000, 'Hotel Louis Kienne Pandanaran.jpeg'),
(17, 'Rooms Inc Hotel Pemuda Semarang', 'Jl. Pemuda No.150, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132', 450000, 'Rooms Inc Hotel Pemuda Semarang.jpg'),
(18, 'Hotel Rawa Pening Pratama', 'Karanglu, Jl. P.Diponegoro, RT.01/RW.01, Kenteng, Bandungan, Kabupaten Semarang, Jawa Tengah 50655', 600000, 'Hotel Rawa Pening Pratama.jpg'),
(19, 'Rumi Semarang', 'Jl. Gondang Raya No.11, Bulusan, Kec. Tembalang, Kota Semarang, Jawa Tengah 50277', 300000, 'Rumi Semarang.jpeg'),
(20, 'Grand Mercure Solo Baru', 'CR28+X82, Jl. Ir. Soekarno, Dusun II, Madegondo, Kec. Grogol, Kabupaten Sukoharjo, Jawa Tengah 57552', 850000, 'Grand Mercure Solo Baru.jpeg'),
(21, 'Harris Hotel & conventions Bekasi', 'Jl. Bulevar Ahmad Yani, RT.006/RW.002, Marga Mulya, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17142', 560000, 'Harris Hotel & conventions Bekasi.jpeg'),
(22, 'Hayy hotel', ' Jl. Ahmad Yani No.47, Haurgeulis, Kec. Haurgeulis, Kabupaten Indramayu, Jawa Barat 45264', 220000, 'Hayy hotel.jpeg'),
(23, 'Bali World Hotel', 'Jl. Soekarno Hatta By Pass Timur No.713, Jatisari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286', 300000, 'Bali World Hotel.jpeg'),
(24, 'Verse Hotel Cirebon', 'Jl. Tuparev No.168, Kedawung, Kec. Kedawung, Kabupaten Cirebon, Jawa Barat 45153', 250000, 'Verse Hotel Cirebon.jpeg'),
(25, 'El Cavana Hotel', 'Jl. Pasir Kaliki No.16-18, Kb. Jeruk, Kec. Andir, Kota Bandung, Jawa Barat 40181', 500000, 'El Cavana Hotel.jpeg'),
(26, 'Atlantic City Hotel Bandung', 'Jl. Pasir Kaliki No.126, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40172', 350000, 'Atlantic City Hotel Bandung.jpeg'),
(27, 'Noor Hotel', 'Jl. Madura No.6, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115', 650000, 'Noor Hotel.jpeg'),
(28, 'Hotel De Paviljoen Bandung', 'Jalan Laks LLRE Martadinata St No.68, Citarum, Bandung Wetan, Bandung City, West Java 40115', 820000, 'Hotel De Paviljoen Bandung.jpeg'),
(29, 'Salis Hotel', 'Jl. Dr. Setiabudi No.272, Ledeng, Kec. Cidadap, Kota Bandung, Jawa Barat 40143', 250000, 'Salis Hotel.jpeg'),
(30, 'Hotel Locus Rooms', 'Jl. Batununggal Indah IV No.25-27, Batununggal, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266', 300000, 'Hotel Locus Rooms.jpg'),
(31, 'Grand Whiz Hotel', 'Jl. Raya Bromo, Watulumpang, Sukapura, Kec. Sukapura, Kabupaten Probolinggo, Jawa Timur 67254', 503000, 'Grand Whiz Hotel.jpeg'),
(32, 'Pohon Inn Hotel', 'Temas, Kec. Batu, Kota Batu, Jawa Timur 65315', 400000, 'Pohon Inn Hotel.jpeg'),
(33, 'Hotel Sinom Borobudur', 'Dusun XVII, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah', 478000, 'Hotel Sinom Borobudur.jpeg'),
(34, 'Bueno Colombo Hotel', 'Jl. Raya Solo - Yogyakarta, Glondong, Tirtomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', 350000, 'Bueno Colombo Hotel.jpeg'),
(35, 'Hotel Lembah Safari Cisarua', 'Jl. Taman Safari No.116, Cibeureum, Kampung Baru, Cisarua, Cibeureum, Kec. Cisarua, Kabupaten Bogor, Jawa Barat 16750', 450000, 'Hotel Lembah Safari Cisarua.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(50) NOT NULL,
  `jenis_kamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `jenis_kamar`) VALUES
(1, 'Standart Room'),
(2, 'Superior Room'),
(3, 'Deluxe Room'),
(4, 'Twin Room'),
(5, 'Single Room'),
(6, 'Double Room'),
(7, 'Family Room'),
(8, 'Junior Suite Room'),
(9, 'Suite Room'),
(10, 'Presidental Suite Room'),
(11, 'Connecting Room'),
(12, 'Disabled Room'),
(15, 'dsda'),
(16, 'jaDKDWDM'),
(17, 'edewf'),
(18, 'sdfef');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(50) NOT NULL,
  `nama_kat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Pantai'),
(2, 'Gunung'),
(3, 'Kebun Binatang'),
(4, 'Candi'),
(5, 'Air Terjun'),
(6, 'Goa'),
(7, 'Sejarah'),
(8, 'Danau'),
(9, 'Industri');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_tw` int(50) NOT NULL,
  `nama_tw` varchar(255) NOT NULL,
  `harga_masuk` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `id_kat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_tw`, `nama_tw`, `harga_masuk`, `foto`, `alamat`, `jumlah_tiket`, `id_kat`) VALUES
(1, 'Air Terjun Madakaripura', 22000, 'air_terjun_madakaripura.jpg', 'Lumbang, Probolinggo, 67138, Jawa Timur', 1, 5),
(2, 'Telaga Sarangan', 20000, 'telaga_sarangan.jpeg', 'Plaosan, Magetan, Jawa Timur', 1, 8),
(3, 'Jawa Timur Park 2', 140000, 'jatim_park_2.jpg', 'Jl. Oro Oro Ombo No.9, Batu, Kota Batu, 65315, Jawa Timur', 1, 3),
(4, 'Gunung Bromo', 29000, 'gunung_bromo.jpg', 'Malang, Jawa Timur', 2, 2),
(5, 'Pantai Klayar', 15000, 'pantai_klayar.jpeg', 'Donorejo, Pacitan, Jawa Timur', 1, 1),
(6, 'Kebun Binatang Surabaya', 75000, 'kebun_binatang_surabaya.jpeg', 'Setail No.1, Wonokromo, Kota Madya, 60241, Jawa Timur', 2, 3),
(7, 'Gunung Ijen', 10000, 'gunung_ijen.jpeg', 'Licin, Banyuwangi, Jawa Timur', 3, 2),
(8, 'Air Terjun Tumpak Sewu', 10000, 'air_terjun_tumpak_sewu.jpg', 'Jl. Raya Sidomulyo, Pronojiwo, Lumajang, 67374, Jawa Timur', 2, 5),
(9, 'Candi Penataran', 5000, 'candi_penataran.jpeg', 'Jl. Candi Penataran, Ngaliyan, Semarang, Jawa Timur', 2, 4),
(10, 'Gunung Semeru', 23000, 'gunung_semeru.jpg', 'Jl. Gunung Semeru, Jembrana, Lumajang, 82216, Jawa Timur', 4, 2),
(11, 'Candi Borobudur', 48000, 'candi_borobudur.jpeg', 'Jl. Badrawati, Borobudur, Magelang, 56553, Jawa Tengah', 2, 4),
(12, 'Lawang Sewu', 20000, 'lawang_sewu.jpeg', 'Jl. Pemuda No.160, Semarang Tengah, Semarang, 50132, Jawa Tengah', 1, 7),
(13, 'Kota Lama Semarang', 0, 'kota_lama.jpeg', 'Jl. Letjen Suprapto No.31, Semarang Tengah, Semarang, 50137, Jawa Tengah', 5, 7),
(14, 'Candi Prambanan', 85000, 'candi_prambanan.jpg', 'Jl. Raya Solo - Yogyakarta No.16, Prambanan, Sleman, 55571, Jawa Tengah', 2, 4),
(15, 'Air Terjun Grojogan Sewu', 22000, 'air_terjun_grojogan_sewu.jpg', 'Jl. Raya Tawangmangu, Tawangmangu, Karanganyar, 57792, Jawa Tengah', 6, 5),
(16, 'Keraton Surakarta Hdiningrat', 10000, 'keraton_surakarta.jpeg', 'Jl. Kamandungan, Ps.Kliwon, Surakarta, Jawa Tengah', 3, 7),
(17, 'Goa Jatijajar', 13000, 'goa_jatijajar.jpg', 'Jl. Jatijajar, Ayah, Kebumen, 54473, Jawa Tengah', 4, 6),
(18, 'Gunung Merbabu', 254000, 'gunung_merbabu.jpg', 'Sawangan, Magelang, Jawa Tengah', 6, 2),
(19, 'Dieng Plateau', 15000, 'dieng_plateau.jpg', 'Batur, Banjarnegara, Jawa Tengah', 2, 1),
(20, 'Waduk Sempor', 5000, 'waduk_sempor.jpg', 'Sempor, Kebumen, 54421, Jawa Tengah', 1, 8),
(21, 'Taman Safari Indonesia Bogor', 400000, 'taman_safari_bogor.jpg', 'Jl. Kapten Harun Kabir, 724, Cisarua, Bogor, 16750, Jawa Barat', 4, 3),
(22, 'Curug Cikaso', 65000, 'curug_cikaso.jpg', 'Cibitung, Sukabumi, Jawa Barat', 5, 5),
(23, 'Pantai Pangandaran', 6000, 'pantai_pangandaran.jpeg', 'Pangandaran, Pangandaran, Jawa Barat', 4, 1),
(24, 'Kawah Putih', 28000, 'kawah_putih.jpg', 'Jl. Raya Soreang Ciwidey, Ciwidey, Bandung, 40973, Jawa Barat', 5, 2),
(25, 'Gunung Tangkuban Perahu', 20000, 'gunung_tangkuban_perahu.jpg', 'Jl. Gn. Tangkuban Perahu, Kalaherang, Subang, 41282, Jawa Barat', 2, 2),
(26, 'Pantai Ujung Genteng', 10000, 'pantai_ujung_genteng.jpg', 'Jl. Kelapa Condong, Ciracap, Sukabumi, Jawa Barat', 3, 1),
(27, 'Pantai Pelabuhan Ratu', 3000, 'pantai_pelabuhan_ratu.jpg', 'Jl. Raya Cisolok No.16, Citepus, Sukabumi, Jawa Barat', 5, 1),
(28, 'Curug Cilember', 25000, 'curug_cilember.jpeg', 'Jl. Raya Puncak, Cisarua Megamendung, Bogor, Jawa Barat', 2, 5),
(29, 'Goa Buniayu', 5000, 'goa_buniayu.jpg', 'Purabaya, Sukabumi, 43187, Jawa Barat', 4, 6),
(30, 'Candi Jiwa', 5000, 'candi_jiwa.jpeg', 'Jl. Candi Jiwa, Batujawa, Karawang, 41354, Jawa Barat', 5, 4),
(31, 'Astra', 1234, 'astra_internasional.jpeg', 'Jl', 3, 9),
(32, 'PT.Indofood Sukses Makmur', 0, 'pt_indofood_sukses_makmur.jpg', 'Jl. Raya Klampok, Beji, Pasuruan, 67154, Jawa Timur', 33, 9),
(33, 'PT.Unilever', 0, 'pt_unilever.jpeg', 'Jl. Rungkut Industri IV No.5-11, Tenggilis Mejoyo, Surabaya, 60291, Jawa Timur', 34, 9),
(34, 'PT.Yakult Indonesia', 0, 'pt_yakult_indonesia.jpg', 'Ngoro, Mojokerto, 61385, Jawa Timur', 35, 9),
(35, 'PT.Sinar Sosro', 0, 'pt_sinar_sosro.jpeg', 'Jl. Letjend Sutoyo No.49-51, Waru, Sidoarjo, Jawa Timur', 2, 9),
(36, 'PT.Nestle', 0, 'pt_nestle.jpg', 'Jl. Frontage Ahmad Yani Siwalankerto No.114, Gayungan, Surabaya, 60231, Jawa Timur', 32, 9),
(37, 'Semen Gresik', 0, 'semen_gresik.jpg', 'Jl. PT Semen Indonesia, Kerek, Tuban, 62356, Jawa Timur', 3, 9),
(38, 'PT.ABC Central Food Industries', 0, 'pt_abc_central_food_industries.jpg', 'Jl. Randupitu-Gunung Gangsir, Bangil, Pasuruan, 67154, Jawa Timur', 4, 9),
(39, 'PT.Amerta Indah Otsuka', 0, 'pt_amerta_indah_otsuka.jpg', 'Jl. Raya Pasuruan, Kejayan, Pasuruan, 67172, Jawa Timur', 22, 9),
(40, 'PT.INTI', 0, 'pt_inti.jpeg', '140Jl.', 3, 9),
(42, 'fwef', 2313, '', 'qefef', 4, 9),
(43, 'nojfne', 123456, '', 'nfne', 3, 9),
(44, 'naomi azik', 20000, '', 'tanggulangin', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(50) NOT NULL,
  `nama_tour` varchar(255) NOT NULL,
  `jenis_paket` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `harga_tour` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_tg` int(50) NOT NULL,
  `id_tw` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `id_htl` int(11) NOT NULL,
  `id_kmr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id_tour`, `nama_tour`, `jenis_paket`, `daerah`, `harga_tour`, `foto`, `id_tg`, `id_tw`, `id`, `id_htl`, `id_kmr`) VALUES
(1, 'Historian', 'Cultural', 'Jawa Tengah', 800000, 'Historian.png', 5, 11, 2, 33, 1),
(2, 'Zoo Date', 'Recreation', 'Jawa Barat', 500000, 'Zoo Date.png', 4, 21, 1, 35, 3),
(3, 'Hiking Lovers', 'Adventure', 'Jawa Timur', 1700000, 'Hiking Lovers.png', 3, 4, 3, 31, 2),
(4, 'Historian 2', 'Cultural', 'Jawa Tengah', 800000, 'Historian 2.png', 2, 14, 4, 34, 2),
(5, 'Student Tour', 'Recreation', 'Jawa', 700000, 'Student Tour.png', 1, 3, 5, 32, 2),
(6, 'dffffr', 'wrgrgwr', 'rgegte', 23421, '', 1, 3, 5, 32, 2),
(19, 'abc', 'abcd', 'malang', 50000, '', 1, 3, 5, 32, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `id_tg` int(50) NOT NULL,
  `nama_tg` varchar(255) NOT NULL,
  `alamat_tg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`id_tg`, `nama_tg`, `alamat_tg`) VALUES
(1, 'Tarisa Azzahra', 'Jawa Timur'),
(2, 'Muhammad Nabiel', 'Jawa Tengah'),
(3, 'Sagetha Bayu', 'Jawa Timur'),
(4, 'Justin Axel', 'Jawa Barat'),
(5, 'Azizah Amalia', 'Jawa Tengah'),
(6, 'naomi', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(50) NOT NULL,
  `jenis_payment` varchar(255) NOT NULL,
  `biaya_trans` int(11) NOT NULL,
  `id_tour` int(50) DEFAULT NULL,
  `id_tw` int(50) DEFAULT NULL,
  `tanggal_booking` date NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `jenis_payment`, `biaya_trans`, `id_tour`, `id_tw`, `tanggal_booking`, `id`) VALUES
(1, 'cash', 110000, 0, 4, '2023-04-25', 1),
(2, 'cash', 121000, 4, NULL, '2024-03-20', 4),
(3, 'transfer', 144000, NULL, 14, '2024-01-01', 3),
(4, 'cash', 500000, 5, NULL, '2023-07-21', 5),
(5, 'transfer', 6000, NULL, 21, '2023-12-21', 1),
(6, 'cash', 134324, 1, NULL, '2023-05-04', 3),
(7, 'transfer', 234000, NULL, 3, '2023-06-21', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_htl`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id_tw`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`),
  ADD KEY `fk_htl` (`id_htl`),
  ADD KEY `fk_kmr` (`id_kmr`),
  ADD KEY `fk_tg` (`id_tg`),
  ADD KEY `fk_tw` (`id_tw`),
  ADD KEY `fk_cust2` (`id`);

--
-- Indexes for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD PRIMARY KEY (`id_tg`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `fk_cust3` (`id`),
  ADD KEY `fk_tw2` (`id_tw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_htl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_tw` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tour_guide`
--
ALTER TABLE `tour_guide`
  MODIFY `id_tg` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_cust2` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `fk_htl` FOREIGN KEY (`id_htl`) REFERENCES `hotel` (`id_htl`),
  ADD CONSTRAINT `fk_kmr` FOREIGN KEY (`id_kmr`) REFERENCES `kamar` (`id_kamar`),
  ADD CONSTRAINT `fk_tg` FOREIGN KEY (`id_tg`) REFERENCES `tour_guide` (`id_tg`),
  ADD CONSTRAINT `fk_tw` FOREIGN KEY (`id_tw`) REFERENCES `tempat_wisata` (`id_tw`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_cust3` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `fk_tw2` FOREIGN KEY (`id_tw`) REFERENCES `tempat_wisata` (`id_tw`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
