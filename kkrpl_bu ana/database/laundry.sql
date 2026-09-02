-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2026 at 02:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL COMMENT 'auto_increment',
  `username` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pasword`, `akses`) VALUES
(1, 'admin', '123', 1),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 2),
(3, 'admin2', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `harga_per_kilo`
--

CREATE TABLE `harga_per_kilo` (
  `harga_per_kilo` int(11) NOT NULL COMMENT 'auto_increment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga_per_kilo`
--

INSERT INTO `harga_per_kilo` (`harga_per_kilo`) VALUES
(10);

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `pelanggan_id` int(11) NOT NULL COMMENT 'auto_increment',
  `pelanggan_transaksi` int(11) NOT NULL,
  `pelanggan_jenis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pelanggan_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`pelanggan_id`, `pelanggan_transaksi`, `pelanggan_jenis`, `pelanggan_jumlah`) VALUES
(1, 10, 'baju', 10),
(2, 10, 'baju', 10),
(3, 10, 'baju', 10),
(4, 10, 'baju', 10),
(5, 10, 'bj', 10),
(6, 10, 'bj', 10),
(7, 10, 'bj', 10),
(8, 10, 'bj', 10),
(9, 10, 'bj', 10),
(10, 10, 'bj', 10),
(11, 10, 'bj', 10),
(12, 10, 'bj', 10),
(13, 10, 'bj', 10),
(14, 10, 'bj', 10),
(15, 10, 'bj', 10),
(16, 10, 'bj', 10),
(17, 10, 'bj', 10),
(18, 10, 'bj', 10),
(19, 10, 'bj', 10),
(20, 10, 'bj', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL COMMENT 'auto_increment',
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_hp` varchar(20) NOT NULL,
  `pelanggan_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_hp`, `pelanggan_alamat`) VALUES
(1, 'pelanggan1', '123', 'db9d905c0d8e7f7f608236efda940cd6'),
(2, 'pelanggan3', '123', 'pelanggan4'),
(3, 'azka', '123', 'puguh'),
(4, 'ripel', '123', 'puguh'),
(5, 'radit', '123', 'kampunk'),
(6, 'rio', '123', 'kampank'),
(7, 'ria', '123', 'kampenk'),
(8, 'riu', '123', 'kampink'),
(9, 'roi', '123', 'kamplenk'),
(10, 'rei', '123', 'kumplunk');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL COMMENT 'auto_increment',
  `transaksi_tgl` date NOT NULL,
  `transaksi_pelanggan` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_berat` int(11) NOT NULL,
  `transaksi_tgl_selesai` date NOT NULL,
  `transaksi_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tgl`, `transaksi_pelanggan`, `transaksi_harga`, `transaksi_berat`, `transaksi_tgl_selesai`, `transaksi_status`) VALUES
(1, '2030-03-24', 123, 10, 10, '2032-03-24', 1),
(2, '2012-07-25', 123, 10, 10, '2013-05-25', 2),
(3, '0000-00-00', 123, 10, 10, '0000-00-00', 1),
(4, '2024-03-25', 123, 10, 10, '2023-03-25', 1),
(5, '0000-00-00', 0, 0, 0, '0000-00-00', 0),
(6, '0000-00-00', 0, 0, 0, '0000-00-00', 0),
(7, '0000-00-00', 123, 10, 10, '0000-00-00', 1),
(8, '0000-00-00', 123, 10, 10, '0000-00-00', 1),
(9, '2012-07-25', 123, 10, 10, '0000-00-00', 1),
(10, '0000-00-00', 123, 10, 10, '0000-00-00', 1),
(11, '0000-00-00', 123, 10, 10, '0000-00-00', 1),
(12, '0002-09-26', 123, 10, 10, '0003-09-26', 1),
(13, '0003-09-26', 123, 10, 10, '0004-09-26', 1),
(14, '0000-00-00', 123, 10, 10, '0003-09-26', 1),
(15, '0000-00-00', 123, 10, 10, '0000-00-00', 1),
(16, '0000-00-00', 123, 10, 10, '0000-00-00', 1),
(17, '0000-00-00', 123, 10, 10, '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'auto_increment', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
