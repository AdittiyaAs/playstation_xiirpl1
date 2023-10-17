-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 08:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playstation`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `photo`) VALUES
(34, 'play station 5', '6000', '5ee2bae6901d6.jpg'),
(35, 'play station 4', '5000', 'ps4-stop-cover.jpg'),
(36, 'play station 3', '4000', 'ps3.jpg'),
(37, 'play station 2', '3000', 'ps2.jpg'),
(38, 'play station 1', '2000', 'ps1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_penyewa` varchar(150) NOT NULL,
  `jenis_playstation` varchar(150) NOT NULL,
  `jumlah_biling` int(11) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `nama_penyewa`, `jenis_playstation`, `jumlah_biling`, `harga`) VALUES
(12, '2023-10-03', 'RED', '37', 3, 9000),
(14, '2023-10-06', 'dav', '35', 4, 20000),
(15, '2023-10-11', 'AERTZG', '37', 6, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `photo`) VALUES
(6, 'pirnaa', 'pirnaa@gmail.com', '$2y$10$vwrAsxyLuyA3N6diNQrIW.0uEalLKm5IJ9tzTANh.U9lvZajt28WC', 'user', ''),
(8, 'aku', 'kaya@gmail.com', '$2y$10$r7m/mI9NA.mjt0Iph8PhBufvypkKTk2Ir5Oxw3MHVyo6CIn6ucfJ6', 'admin', ''),
(16, 'adit', 'adit@gmail.com', '$2y$10$lkIOwNXil.mtVW.i3EoysurCO3qoTRCeIUPGy4nWt4.YhzGm/yMYS', 'user', ''),
(17, 'dandi', 'dandi@gmail.com', '$2y$10$OKmaSu/Cx8ahmqof4CVzvOiddndaUbswWA3/4VELOjTwV1m8f1XyW', 'user', ''),
(18, 'dandi', 'dandi@gmail.com', '$2y$10$5VQD8kBK6kGfEgy6f.aD3ugERlq3WJMi.4AeCG/umELYhq4NMWv3G', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
