-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 12:13 PM
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
(1001, 'NVL', 'Allegiant', '0', 'Gramedia', 'Bekas', 1, 15000, 'Allegiant.jpg'),
(1002, 'NVL', 'Insurgent', '0', 'Mizan Fantasi', 'Bekas', 1, 15000, 'Insurgent.jpg'),
(1003, 'NVL', 'It\'s Not Summer Without You', '0', 'Gradien Mediatama', 'Bekas', 1, 15000, 'It_s Not Summer Without You.jpg'),
(1004, 'NVL', 'Marmut Merah Jambu', '0', 'Bukune', 'Bekas', 1, 15000, 'Marmut Merah Jambu.jpg'),
(1005, 'NVL', 'The Summer I Turned Pretty', '0', 'Gradien Mediatama', 'Bekas', 1, 15000, 'The Summer I Turned Pretty.png'),
(1006, 'NVL', 'The Weight Of Silence', '0', 'Gramedia', 'Bekas', 1, 15000, 'The Weight Of Silence.jpg'),
(1007, 'NVL', 'We\'ll Always Have Summer', '0', 'Gradien Mediatama', 'Bekas', 1, 15000, 'We_ll Always Have Summer.png'),
(1008, 'NVL', 'Blind Date', '0', 'Gramedia', 'Bekas', 1, 35000, 'Blind Date.jpg'),
(1009, 'NVL', 'Breaking Down Awal Yang Baru', '0', 'Gramedia', 'Bekas', 1, 35000, 'Breaking Down Awal Yang Baru.jpg'),
(1010, 'NVL', 'Cinta Diujung Sejadah', '0', 'Gramedia', 'Bekas', 1, 35000, 'Cinta Diujung Sejadah.jpg'),
(1011, 'NVL', 'Eclipse Gerhana', '0', 'Gramedia', 'Bekas', 1, 35000, 'Eclipse Gerhana.png'),
(1012, 'NVL', 'Fly Him To The Moon', '0', 'Gramedia', 'Bekas', 1, 35000, 'Fly Him To The Moon.jpg'),
(1013, 'NVL', 'New Moon Dua Cinta', '0', 'Gramedia', 'Bekas', 1, 35000, 'New Moon Dua Cinta.png'),
(1014, 'NVL', 'Paper Town', '0', 'Gramedia', 'Bekas', 1, 35000, 'Paper Town.jpg'),
(1015, 'NVL', 'The Walking Dead', '0', 'Mizan Fantasi', 'Bekas', 1, 35000, 'The Walking Dead.jpg'),
(1016, 'NVL', 'To Tokyo To Love', '0', 'Gramedia', 'Bekas', 1, 35000, 'To Tokyo to Love.jpg'),
(1017, 'NVL', 'Twilight', '0', 'Gramedia', 'Bekas', 1, 35000, 'Twilight.jpeg'),
(1018, 'KMK', 'Boold Alone', '1-8', 'Level Comics', 'Bekas', 8, 90000, 'Boold Alone.jpeg'),
(1019, 'KMK', 'Deeger', '1-6', 'Elex Media', 'Bekas', 6, 60000, 'Deeger.jpeg'),
(1020, 'KMK', 'Gurren Lagann', '1-6', 'Hero\'s Magazine', 'Bekas', 6, 90000, 'Gurren Lagann.jpeg'),
(1021, 'KMK', 'Jio', '1-19', 'Level', 'Bekas', 19, 342000, 'Jio.jpeg'),
(1022, 'KMK', 'Mama Calle', '1-4', 'Elex Media', 'Bekas', 4, 40000, 'Mama Calle.jpeg'),
(1023, 'KMK', 'My Favorite Bike', '1-3', 'Level Comics', 'Bekas', 3, 45000, 'My Favorite Bike.jpeg'),
(1024, 'KMK', 'Oh! My Darling', '1-5', 'm&c', 'Bekas', 5, 70000, 'Oh! My Darling.jpeg'),
(1025, 'KMK', 'R G Legenda Suci', '1-10', 'ComicsOne sunting', 'Bekas', 10, 100000, 'R G Legenda Suci.jpeg'),
(1026, 'KMK', 'The Gordian Knot', '1-4', 'Elex Media', 'Bekas', 4, 40000, 'The Gordian Knot.jpeg'),
(1027, 'KMK', 'Tina The Wind Up Toy', '1-3', 'Elex Media', 'Bekas', 3, 30000, 'Tina The Wind Up Toy.jpeg');

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
(3, '1', '1003', 2),
(9, '1', '1019', 2),
(10, '1', '1020', 1),
(11, '1', '1024', 1),
(12, '1', '1003', 1);

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
(3, 1, '2024-02-02', 'Ira Sukmawati', 'ira.21121026@mahasiswa.unikom.ac.id', '+6289603829450', 'Jalan Tubagus Ismail Bawah, RT/05 RW/01, Gang Angklung, No Rumah 50A, Kelurahan Lebak Gede, Kecamatan Coblong', 'KOTA BANDUNG', '40132');

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
(1, '2024-01-31', '2', 276250, 48750, 'selesai');

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
(3, 'najwa', '$2y$10$5EypWNbyuA8Yd0ukDkH0L.byGdIrXlqFuCi5pxyQnb9zaLlx1vb0S', 'Najwa ', 'Alia Putri', '0857200256890', 'najwaalia@gmail.com', 'Jalan Dipatiukur No 112', 4501, 'User', '0857200256678');

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
  MODIFY `kode_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `kode_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `kode_transaksi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kode_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
