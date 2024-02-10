-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 03:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpitimoss`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `kode_buku` int(5) NOT NULL,
  `kode_kategori` varchar(5) NOT NULL,
  `judul_buku` text NOT NULL,
  `volume_buku` varchar(10) NOT NULL,
  `nama_penerbit` text NOT NULL,
  `kondisi_buku` text NOT NULL,
  `stok` int(3) NOT NULL,
  `harga` int(6) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`kode_buku`, `kode_kategori`, `judul_buku`, `volume_buku`, `nama_penerbit`, `kondisi_buku`, `stok`, `harga`, `foto`) VALUES
(1001, 'NVL', 'Allegiant', '0', 'Gramedia', 'Bekas', 7, 15000, 'Allegiant.jpg'),
(1002, 'NVL', 'Insurgent', '0', 'Mizan Fantasi', 'Bekas', 7, 15000, 'Insurgent.jpg'),
(1003, 'NVL', 'It\'s Not Summer Without You', '0', 'Gradien Mediatama', 'Bekas', 7, 15000, 'It_s Not Summer Without You.jpg'),
(1004, 'NVL', 'Marmut Merah Jambu', '0', 'Bukune', 'Bekas', 7, 15000, 'Marmut Merah Jambu.jpg'),
(1005, 'NVL', 'The Summer I Turned Pretty', '0', 'Gradien Mediatama', 'Bekas', 7, 15000, 'The Summer I Turned Pretty.png'),
(1006, 'NVL', 'The Weight Of Silence', '0', 'Gramedia', 'Bekas', 7, 15000, 'The Weight Of Silence.jpg'),
(1007, 'NVL', 'We\'ll Always Have Summer', '0', 'Gradien Mediatama', 'Bekas', 7, 15000, 'We_ll Always Have Summer.png'),
(1008, 'NVL', 'Blind Date', '0', 'Gramedia', 'Bekas', 5, 35000, 'Blind Date.jpg'),
(1009, 'NVL', 'Breaking Down Awal Yang Baru', '0', 'Gramedia', 'Bekas', 5, 35000, 'Breaking Down Awal Yang Baru.jpg'),
(1010, 'NVL', 'Cinta Diujung Sejadah', '0', 'Gramedia', 'Bekas', 5, 35000, 'Cinta Diujung Sejadah.jpg'),
(1011, 'NVL', 'Eclipse Gerhana', '0', 'Gramedia', 'Bekas', 5, 35000, 'Eclipse Gerhana.png'),
(1012, 'NVL', 'Fly Him To The Moon', '0', 'Gramedia', 'Bekas', 5, 35000, 'Fly Him To The Moon.jpg'),
(1013, 'NVL', 'New Moon Dua Cinta', '0', 'Gramedia', 'Bekas', 5, 35000, 'New Moon Dua Cinta.png'),
(1014, 'NVL', 'Paper Town', '0', 'Gramedia', 'Bekas', 5, 35000, 'Paper Town.jpg'),
(1015, 'NVL', 'The Walking Dead', '0', 'Mizan Fantasi', 'Bekas', 5, 35000, 'The Walking Dead.jpg'),
(1016, 'NVL', 'To Tokyo To Love', '0', 'Gramedia', 'Bekas', 5, 35000, 'To Tokyo to Love.jpg'),
(1017, 'NVL', 'Twilight', '0', 'Gramedia', 'Bekas', 5, 35000, 'Twilight.jpeg'),
(1018, 'KMK', 'Boold Alone', '1-8', 'Level Comics', 'Bekas', 8, 90000, 'Boold Alone.jpeg'),
(1019, 'KMK', 'Deeger', '1-6', 'Elex Media', 'Bekas', 6, 60000, 'Deeger.jpeg'),
(1020, 'KMK', 'Gurren Lagann', '1-6', 'Hero\'s Magazine', 'Bekas', 6, 90000, 'Gurren Lagann.jpeg'),
(1021, 'KMK', 'Jio', '1-19', 'Level', 'Bekas', 19, 342000, 'Jio.jpeg'),
(1022, 'KMK', 'Mama Calle', '1-4', 'Elex Media', 'Bekas', 4, 40000, 'Mama Calle.jpeg'),
(1023, 'KMK', 'My Favorite Bike', '1-3', 'Level Comics', 'Bekas', 3, 45000, 'My Favorite Bike.jpeg'),
(1024, 'KMK', 'Oh! My Darling', '1-5', 'm&c', 'Bekas', 5, 70000, 'Oh! My Darling.jpeg'),
(1025, 'KMK', 'R G Legenda Suci', '1-10', 'ComicsOne sunting', 'Bekas', 10, 100000, 'R G Legenda Suci.jpeg'),
(1026, 'KMK', 'The Gordian Knot', '1-4', 'Elex Media', 'Bekas', 4, 40000, 'The Gordian Knot.jpeg'),
(1027, 'KMK', 'Tina The Wind Up Toy', '1-3', 'Elex Media', 'Bekas', 3, 30000, 'Tina The Wind Up Toy.jpeg'),
(1028, 'KMK', 'Toto', '1-5', 'Elex Media', 'Bekas', 5, 50000, 'Toto.jpeg'),
(1029, 'PSC', 'Sejarah Singkat Manusia', '0', 'Gramedia', 'Bekas', 4, 120000, 'Sejarah Singkat Manusia.png'),
(1030, 'PSC', 'Cosmos', '0', 'Mizan Fantasi', 'Bekas', 5, 150000, 'Cosmos.jpg'),
(1031, 'PSC', 'The Selfish Gene', '0', 'Kompas', 'Bekas', 8, 135000, 'The Selfish Gene.jpg'),
(1032, 'PSC', 'A Brief History of Time', '0', 'Bentang', 'Bekas', 9, 160000, 'A Brief History of Time.jpeg'),
(1033, 'PSC', 'The Immortal Life of Henrietta Lacks', '0', 'Noura Books', 'Bekas', 6, 130000, 'The Immortal Life of Henrietta Lacks.jpeg'),
(1034, 'PSC', 'Bad Blood Secrets and Lies in a Silicon Valley Startup', '0', 'Bentang', 'Bekas', 8, 145000, 'Bad Blood Secrets and Lies in a Silicon Valley Startup.jpeg'),
(1035, 'PSC', 'Guns, Germs, and Steel', '0', 'Gramedia', 'Bekas', 5, 125000, 'Guns, Germs, and Steel.jpeg'),
(1036, 'PSC', 'Sapiens Graphic Novel', '0', 'Gramedia', 'Bekas', 7, 200000, 'Sapiens Graphic Novel.jpg'),
(1037, 'PSC', 'The Sixth Extinction An Unnatural History', '0', 'Mizan Fantasi', 'Bekas', 4, 140000, 'The Sixth Extinction An Unnatural History.jpeg'),
(1038, 'PSC', 'The Gene An Intimate History', '0', 'Noura Books', 'Bekas', 9, 155000, 'The Gene An Intimate History.jpg'),
(1039, 'PSC', 'Astrophysics for Young People in a Hurry', '0', 'Gramedia', 'Bekas', 6, 110000, 'Astrophysics for Young People in a Hurry.jpg'),
(1040, 'PSC', 'Thinking, Fast and Slow', '0', 'Gramedia', 'Bekas', 8, 170000, 'Thinking, Fast and Slow.jpg'),
(1041, 'PSC', 'The Hidden Life of Trees', '0', 'Mizan Fantasi', 'Bekas', 9, 125000, 'The Hidden Life of Trees.jpeg'),
(1042, 'PSC', 'Why We Sleep Unlocking the Power of Sleep and Dreams', '0', 'Bentang', 'Bekas', 7, 180000, 'Why We Sleep Unlocking the Power of Sleep and Dreams.jpeg'),
(1043, 'PSC', 'The Emperor of All Maladies A Biography of Cancer', '0', 'Noura Books', 'Bekas', 6, 150000, 'The Emperor of All Maladies A Biography of Cancer.jpg'),
(1044, 'PSC', 'Educated', '0', 'Gramedia', 'Bekas', 9, 160000, 'Educated.jpeg'),
(1045, 'PSC', 'The Brain The Story of You', '0', 'Gramedia', 'Bekas', 7, 140000, 'The Brain The Story of You.jpeg'),
(1046, 'PSC', 'Homo Deus Brevis Historia Futuris', '0', 'Bentang', 'Bekas', 5, 145000, 'Homo Deus Brevis Historia Futuris.jpeg'),
(1047, 'PSC', 'The Code Book The Science of Secrecy from Ancient Egypt ', '0', 'Mizan Fantasi', 'Bekas', 7, 135000, 'The Code Book The Science of Secrecy from Ancient Egypt to Quantum Cryptography.jpeg'),
(1048, 'PSC', 'Eating Animals', '0', 'Noura Books', 'Bekas', 8, 155000, 'Eating Animals.jpeg'),
(1049, 'NFK', 'Sebuah Seni untuk Bersikap Bodo Amat', '0', 'Gramedia', 'Bekas', 6, 75000, 'Sebuah Seni untuk Bersikap Bodo Amat.jpg'),
(1050, 'NFK', 'Filosofi Teras', '0', 'Gramedia', 'Bekas', 7, 85000, 'Filosofi Teras.jpg'),
(1051, 'NFK', 'Atomic Habits', '0', 'Kompas', 'Bekas', 7, 108000, 'Atomic Habits.jpg'),
(1052, 'NFK', 'Duduk Dulu', '0', 'Gradien Mediatama', 'Bekas', 5, 90000, 'Duduk Dulu.jpg'),
(1053, 'NFK', 'Nanti Kita Cerita Tentang Hari Ini', '0', 'Gramedia', 'Bekas', 9, 135000, 'Nanti Kita Cerita Tentang Hari Ini.jpg'),
(1054, 'NFK', 'I Want To Die But I Want to Eat Tteokpokki', '0', 'Haru', 'Bekas', 8, 100000, 'I Want To Die But I Want to Eat Tteokpokki.jpg'),
(1055, 'NFK', 'Soekarno', '0', 'Garasi', 'Bekas', 9, 78000, 'Soekarno.jpg'),
(1056, 'NFK', 'Membaca Soekarno dari Jarak Paling Dekat', '0', 'Mizan Media Utama', 'Bekas', 6, 78000, 'Membaca Sukarno dari Jarak Paling Dekat.jpg'),
(1057, 'NFK', 'B.J. Habibie Si Jenius', '0', 'Diva Press', 'Bekas', 6, 76000, 'B.J Habibie Si Jenius.jpg'),
(1058, 'NFK', 'Hidup Sukses dengan Lima Jari', '0', 'Rakyat Merdeka Books', 'Bekas', 9, 61000, 'Hidup Sukses dengan Lima Jari.jpg'),
(1059, 'NFK', 'Sebuah Seni Untuk Memahami Kekasih', '0', 'Shira Media', 'Bekas', 8, 100000, 'Sebuah Seni Untuk Memahami Kasih.jpg'),
(1060, 'NFK', 'Becoming Michelle Obama', '0', 'Crown', 'Bekas', 9, 135000, 'Becoming Michelle Obama.jpg'),
(1061, 'NFK', 'Think and Grow Rich', '0', 'Gramedia', 'Bekas', 9, 85000, 'Think and Grow Rich.jpg'),
(1062, 'NFK', 'The Power of Habit', '0', 'Gramedia', 'Bekas', 9, 85000, 'The Power of Habit.jpg'),
(1063, 'NFK', 'KAMI BUKAN JONGOS BERDASI', '0', 'Bukune', 'Bekas', 8, 200000, 'Kami (Bukan) Jongos Berdasi.jpg'),
(1064, 'NVL', 'Laskar Pelangi', '0', 'Bekas', 'Bentang', 10, 60000, 'Laskar Pelangi.jpeg'),
(1065, 'NVL', 'Ayat-Ayat Cinta', '0', 'Republika', 'Bekas', 6, 40000, 'Ayat-Ayat Cinta.jpeg'),
(1066, 'NVL', 'Bumi Manusia', '0', 'Hasta Mitra', 'Bekas', 8, 150000, 'Bumi Manusia.jpeg'),
(1067, 'NVL', 'Perahu Kertas', '0', 'Bentang', 'Bekas', 5, 100000, 'Perahu Kertas.jpeg'),
(1068, 'NVL', 'Laut Bercerita', '0', 'Gramedia', 'Bekas', 4, 190000, 'Laut Bercerita.jpeg'),
(1069, 'NVL', 'Negeri 5 Menara', '0', 'Gramedia', 'Bekas', 5, 112000, 'Negeri 5 Menara.jpeg'),
(1070, 'NVL', 'The Hunger Games', '0', 'Scholastic', 'Bekas', 7, 65000, 'The Hunger Games.png'),
(1071, 'NVL', 'Senja di Jakarta', '0', 'Balai Pustaka\r\n', 'Bekas', 4, 65000, 'Senja di Jakarta.jpeg'),
(1072, 'NVL', 'Matahari', '0', 'Gramedia', 'Bekas', 6, 83000, 'Matahari.jpeg'),
(1073, 'NVL', 'Pulang', '0', 'Gramedia', 'Bekas', 5, 71000, 'Pulang.jpeg'),
(1074, 'NVL', 'The Fault in Our Stars', '0', 'Dutton Books', 'Bekas', 3, 115000, 'The Fault in Our Stars.jpeg'),
(1075, 'NVL', '1984', '0', 'Secker & Warburg', 'Bekas', 6, 84000, '1984.jpeg'),
(1076, 'NVL', 'Hujan', '0', 'Gramedia', 'Bekas', 5, 95000, 'Hujan.jpeg'),
(1077, 'NVL', 'To Kill a Mockingbird', '0', 'J.B. Lippincott & Co', 'Bekas', 3, 145000, 'To Kill a Mockingbird.jpeg'),
(1078, 'NVL', 'Bidadari-Bidadari Surga', '0', 'Gramedia', 'Bekas', 6, 50000, 'Bidadari-Bidadari Surga.jpeg'),
(1079, 'NVL', 'A Song of Ice and Fire A Game of Thrones', '0', 'Bantam Spectra', 'Bekas', 4, 65000, 'A Song of Ice and Fire A Game of Thrones.jpeg'),
(1080, 'NVL', 'Sherlock Holmes A Study in Scarlet', '0', 'Ward, Lock, & Co', 'Bekas', 6, 50000, 'Sherlock Holmes A Study in Scarlet.jpeg'),
(1081, 'NVL', 'Tentang Kamu', '0', 'Gramedia', 'Bekas', 5, 75000, 'Tentang Kamu.jpeg'),
(1082, 'KMK', 'Kimi Ni Todoke', '1-30', 'Elex Media', 'Bekas', 30, 15000, 'kimi_ni_todoke_vol1.jpg'),
(1083, 'KMK', 'Full Bloom Cheeckiness', '1-18', 'M&C', 'Bekas', 18, 15000, 'full-bloom-cheekiness-01.jpg'),
(1084, 'KMK', 'City Hunter - Complete Edition', '1-12', 'M&C', 'Bekas', 12, 15000, 'city_hunter.jpg'),
(1085, 'KMK', 'One Week Friends', '1-7', 'Elex Media', 'Bekas', 7, 15000, 'oneweekfriends.jpg'),
(1086, 'KMK', 'Cat Tales', '1-7', 'M&C', 'Bekas', 7, 15000, 'cattales.jpg'),
(1087, 'KMK', 'First Love Decoration!', '1', 'Elex Media', 'Bekas', 1, 15000, 'first_love_decoration.jpg'),
(1088, 'KMK', 'Level Comic: Zom 100', '1-3', 'Elex Media', 'Bekas', 3, 15000, 'zom_100.jpg'),
(1089, 'KMK', 'Restaurant to another world', '1-4', 'Elex Media', 'Bekas', 4, 15000, 'restaurant_to_another_world.jpg'),
(1090, 'KMK', 'Libra of Nil Admirari', '1-3', 'Elex Media', 'Bekas', 3, 15000, 'librari_of_nil_admirari.jpg'),
(1091, 'KMK', 'Orange Marmalade', '1-16', 'M&C', 'Bekas', 16, 15000, '1707272789_1affce6fc923db57d33a.jpg'),
(1092, 'KMK', 'Chion and The Cat Temple', '1-9', 'Elex Media', 'Bekas', 9, 15000, 'chionthecat.jpg'),
(1093, 'KMK', 'Demon Slayer: Kimetsu no Yaiba', '1-16', 'Elex Media', 'Bekas', 16, 15000, 'demon_slayer.jpg'),
(1094, 'KMK', 'Tokyo Ghoul', '1', 'M&C', 'Bekas', 1, 15000, 'tokyo_ghoul_7.jpg'),
(1095, 'KMK', 'jujutsu kaisen 17', '1', 'Elex Media', 'Bekas', 1, 15000, 'jujutsu_kaisen_17.jpg'),
(1096, 'KMK', 'Uzumaki', '1', 'M&C', 'Bekas', 1, 15000, 'Uzumaki.jpg'),
(1097, 'KMK', 'A Song to the Sun', '1', 'Elex Media', 'Bekas', 1, 15000, 'A Song to the Sun.jpg'),
(1098, 'KMK', 'Solo Loveling', '1-4', 'M&C', 'Bekas', 4, 15000, 'Solo Loveling.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carousel`
--

CREATE TABLE `tbl_carousel` (
  `id_carousel` int(11) NOT NULL,
  `desc_carousel` varchar(50) NOT NULL,
  `pic_carousel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_carousel`
--

INSERT INTO `tbl_carousel` (`id_carousel`, `desc_carousel`, `pic_carousel`) VALUES
(1, 'Fun Library', 'pitimoss1.jpg'),
(2, 'Read Book Know More', 'pitimoss3.jpg'),
(3, 'Discount Members Only 15%', 'pitimoss2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `kode_detail` int(5) NOT NULL,
  `kode_transaksi` varchar(7) NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `jumlah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_detail_transaksi`
--

INSERT INTO `tbl_detail_transaksi` (`kode_detail`, `kode_transaksi`, `kode_buku`, `jumlah`) VALUES
(14, '6', '1018', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kode_kategori` varchar(3) NOT NULL,
  `nama_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kode_kategori`, `nama_kategori`) VALUES
('KMK', 'Komik '),
('NFK', 'Non Fiksi'),
('NVL', 'Novel'),
('PSC', 'Pop Science');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `kode_shipping` int(11) NOT NULL,
  `kode_transaksi` int(7) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(15) NOT NULL,
  `kodepos` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`kode_shipping`, `kode_transaksi`, `tgl_pengiriman`, `nama_lengkap`, `email`, `no_hp`, `alamat`, `kota`, `kodepos`) VALUES
(1, 1, '2024-02-02', 'Ira Sukmawati', 'ira.21121026@mahasiswa.unikom.ac.id', '+6289603829450', 'Jalan Tubagus Ismail Bawah, RT/05 RW/01, Gang Angklung, No Rumah 50A, Kelurahan Lebak Gede, Kecamatan Coblong', 'KOTA BANDUNG', '40132'),
(2, 4, '2024-02-02', 'Ira Sukmawati', 'ira.21121026@mahasiswa.unikom.ac.id', '+6289603829450', 'Jalan Tubagus Ismail Bawah, RT/05 RW/01, Gang Angklung, No Rumah 50A, Kelurahan Lebak Gede, Kecamatan Coblong', 'KOTA BANDUNG', '40132'),
(3, 1, '2024-02-02', 'Ira Sukmawati', 'ira.21121026@mahasiswa.unikom.ac.id', '+6289603829450', 'Jalan Tubagus Ismail Bawah, RT/05 RW/01, Gang Angklung, No Rumah 50A, Kelurahan Lebak Gede, Kecamatan Coblong', 'KOTA BANDUNG', '40132'),
(4, 6, '2024-02-10', 'Ira Sukmawati', 'irasukmawati206@gmail.com', '+6289603829450', 'Jalan Tubagus Ismail Bawah, RT/05 RW/01, Gang Angklung, No Rumah 50A, Kelurahan Lebak Gede, Kecamatan Coblong', 'KOTA BANDUNG', '40132');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `kode_transaksi` int(7) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kode_user` varchar(7) NOT NULL,
  `total_bayar` int(6) NOT NULL,
  `diskon` int(3) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`kode_transaksi`, `tgl_transaksi`, `kode_user`, `total_bayar`, `diskon`, `status`) VALUES
(6, '2024-02-10', '2', 688500, 121500, 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kode_user` int(7) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(400) NOT NULL,
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `no_hp` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `hak_akses` enum('Admin','User','','') NOT NULL,
  `no_hp_kerabat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kode_user`, `username`, `password`, `nama_depan`, `nama_belakang`, `no_hp`, `email`, `alamat`, `kode_pos`, `hak_akses`, `no_hp_kerabat`) VALUES
(1, 'irasukmawati', '15a46450f8aed8d710cb11a0a1bef196', 'Ira', 'Sukmawati', '089603829450', 'iraskmwti03@gmail.com', 'jalan tubagus ismal bawah No 50A', 40133, 'Admin', '08576745676'),
(2, 'tiara', '$2y$10$KGB3y.Tk0YOzkjBh8v1SE.s8ZD.QeajypAFod0.27UtbZnMzWhYLW', 'tiara', 'randini', '082129096787', 'tiararandini@gmail.com', 'Jalan Merdeka, Bandung', 40132, 'User', '0878765445'),
(3, 'najwa', '$2y$10$5EypWNbyuA8Yd0ukDkH0L.byGdIrXlqFuCi5pxyQnb9zaLlx1vb0S', 'Najwa ', 'Alia Putri', '0857200256890', 'najwaalia@gmail.com', 'Jalan Dipatiukur No 112', 4501, 'User', '0857200256678'),
(4, 'vanessaputri', '$2y$10$kP39aaKV3lbMhRqpCPLgxeh29mJxoqUkZ8bBh8yXDjV/jiACAg43O', 'Vanessa', 'Putri', '081212345678', 'vanessa@gmail.com', 'Jl. Sekeloa', 40133, 'User', '081234567890'),
(5, 'clarasati', '$2y$10$.pGxeYXLHhdGpUNhwV3Y5uc3lo8X329uKa67sxckk1g7UdXEoAJQO', 'Clara', 'Sati', '081212345678', 'clarasati@gmail.com', 'Jl. Dipatiukur', 40133, 'User', '081234567890'),
(6, 'mirawati', '$2y$10$Fd4ns6Btu.sxg9UYX1e43.96zSyHjQV9KITT2/irksST46/iqdyea', 'Mira', 'Wati', '081212345678', 'mirawati@gmail.com', 'Jl. Dago Atas, Bandung', 40133, 'User', '081234567890'),
(7, 'stevenjuly', '$2y$10$QGeJbQwwWvm1pIMAAVI7.eZZfwjpT/s52XWK/fcjsd8DD4FEK8l2S', 'Steven', 'July', '081212345678', 'stevenjuly@gmail.com', 'Jl. Sukarasa, Jakarta Barat', 12345, 'User', '081234567890'),
(8, 'udincahyono', '$2y$10$zqZdceS47/c6kq8Voy8Q.ObGqZPRwoyfKR0fYobosVlb3eJZ.MdCe', 'Udin', 'Cahyono', '081212345678', 'udincahyono@gmail.com', 'Jl. Merpati, Sumedang', 65789, 'User', '081234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD PRIMARY KEY (`kode_detail`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`kode_shipping`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `kode_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;

--
-- AUTO_INCREMENT for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  MODIFY `kode_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `kode_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `kode_transaksi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kode_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
