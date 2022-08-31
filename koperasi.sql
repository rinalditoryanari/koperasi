-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 07:36 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `koperasi`
--

CREATE TABLE `koperasi` (
  `id` int(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `code` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koperasi`
--

INSERT INTO `koperasi` (`id`, `nama`, `code`, `ketua`, `alamat`, `kecamatan`, `kota`, `provinsi`) VALUES
(3, 'adminkop', 'SUPER08220001', 'Raditttt', 'Jl cilincing', 'Cilincing', 'Kota Jakarta Utara', 'Dki Jakarta'),
(26, 'Koperasi Angke', 'SUPER08220002', 'mails', 'jlnsssszsss', 'Penjaringan', 'Kota Jakarta Utara', 'Dki Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`kecamatan`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
