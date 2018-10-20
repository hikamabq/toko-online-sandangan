-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 09:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapro`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `email`, `komentar`, `waktu`) VALUES
(1, 'hikam@g.com', 'bagus', '2017-04-04 23:54:35'),
(2, 'hikam@gmail.com', 'ini kurang menarik', '2017-04-05 23:36:11'),
(3, 'ahmadsukino@mta.com', 'ini menurut saya websitenya simpel tapi okee...', '2017-04-11 22:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id` int(11) NOT NULL,
  `jarak` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id`, `jarak`, `ongkir`) VALUES
(1, 1, 10000),
(2, 2, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `pembeli` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `nama`, `harga`, `jumlah`, `pembeli`, `alamat`, `telepon`) VALUES
(19, 'jaket chealsea', 80000, 1, 'Pineda', 'solo', 2147483647),
(20, 'jaket prancis', 80000, 1, 'hikam', 'norowangsan', 895241241),
(21, 'kaos wanita putih', 30000, 1, 'hikam', 'norowangsan', 895241241),
(24, 'kaos santai cewek', 25000, 1, 'romlah', 'boyolali Rt 4', 2147483647),
(25, 'kaos 2017', 43000, 1, 'aiman', 'sumber, surakarta', 89765432),
(26, 'kaos indonesia', 35000, 2, 'aiman', 'sumber, surakarta', 89765432),
(27, 'jaket korea', 105000, 1, 'pineda', 'karangasem', 2147483647),
(28, 'kaos 2017', 43000, 1, 'dani', 'pajang, laweyan', 2147483647),
(29, 'kaos indonesia', 35000, 1, 'sholahuddin', 'soloraya', 86987677),
(30, 'jaket cewek cool', 90000, 1, 'Wiwik', 'JLJL', 2147483647),
(31, 'kaos 2017', 43000, 1, 'asdfas', 'asfasf', 345436644);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(13) NOT NULL,
  `tag` varchar(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `isi`, `gambar`, `harga`, `tag`, `waktu`) VALUES
(7, 'kaos polo biru', 'ini baju murah dan uniki', 'img/BeautyPlus_20151123193143_save_scaled.jpg', 55000, 'pria', '2017-04-10 14:58:02'),
(8, 'spanyol', 'ini jersey spanyol', 'img/jersey away spanyol 2016.jpg', 200000, 'pria', '2017-04-03 02:34:34'),
(13, 'jaket chealsea', 'jaket stelan gayeng', 'img/33126e5c.png', 80000, 'pria', '2017-04-03 07:04:19'),
(14, 'jaket prancis', 'jaket sangat murah mudah rusak', 'img/france-n98-jacket-white.jpg', 80000, 'pria', '2017-04-03 07:04:39'),
(15, 'kaos BBM', 'kaos warna putih yang membuat anda tampak oke<br>\r\ndengan bahan katun yang nyaman dipakai', 'img/[UNSET].jpg', 25000, 'pria', '2017-04-10 05:59:10'),
(17, 'kaos love', 'kaos dengan bahan yang halus cocok untuk wanita', 'img/kaos-cewek-love6.jpg', 35000, 'wanita', '2017-04-10 15:05:47'),
(18, 'kaos cewek love', 'cocok untuk anda wanita cantik pujaan hati', 'img/kaos-cewek-love.jpg', 30000, 'wanita', '2017-04-10 15:05:35'),
(19, 'jaket cewek cool', 'jaket menarik buat cewek cool hehe..', 'img/Toko-Jaket-Wanita-Di-Jakarta-Sporty-Diadora-Abu-Kerah-507-64.jpg', 90000, 'wanita', '2017-04-10 12:29:46'),
(21, 'kaos welcome 2017', 'kaos dengan bahan katun, warna gelap', 'img/vpzjqvjj4e-249-0---l.jpg', 40000, 'wanita', '2017-04-10 15:00:07'),
(22, 'jaket kulit wanita', 'jaket kulit warna gelap', 'img/Model Jaket Kulit Wanita Panjang.jpg', 120000, 'wanita', '2017-04-11 13:34:08'),
(23, 'jaket korea', 'jaket wanita korea', 'img/model-jaket-wanita-korea-2016.png', 105000, 'wanita', '2017-04-11 13:35:55'),
(24, 'kaos santai cewek', 'kaos santai nyaman dipakai', 'img/kaos-pink.jpg', 25000, 'wanita', '2017-04-11 13:40:31'),
(25, 'jaket mantel', 'jaket sekaligus mantel', 'img/Jaket-FFA006.jpg', 103000, 'wanita', '2017-04-11 13:41:55'),
(26, 'kaos imlek', 'kaos imlek dengan warna mencolok', 'img/Kaos-Imlek-2017.jpg', 30000, 'pria', '2017-04-11 14:25:20'),
(27, 'kaos indonesia', 'kaos indonesia joss', 'img/7895766_3d7a1598-3898-41fb-906f-6691aa9cd205.jpg', 35000, 'pria', '2017-04-11 20:04:52'),
(28, 'kaos 2017', 'kaos 2017 terbaru', 'img/vp4jen5oe6-143-0---l.jpg', 43000, 'pria', '2017-04-11 20:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'hikam', 'sayaadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
