-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 01:22 PM
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
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `akun_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `tipe` int(2) NOT NULL,
  `id_nelayan` int(5) NOT NULL,
  `asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`akun_id`, `username`, `password`, `code`, `tipe`, `id_nelayan`, `asal`) VALUES
(1, 'rizaldi', 'adaw', 'admin/00001', 1, 0, 'CILINCING'),
(3, 'test', 'test', 'adasda', 0, 6, 'ANGKE'),
(4, 'adminkop', 'admin123', 'SUPER08220001', 2, 0, 'Cilincing'),
(16, 'Adaws', 'adaws', 'GUEST08220001', 4, 23, 'CILINCING'),
(17, 'rofiudin', 'rofiudin', 'aa', 0, 7, 'ANGKE'),
(18, 'dito', '12345678', 'GUEST08220002', 3, 6, 'ANGKE'),
(19, 'Asep ', '123', 'GUEST08220003', 4, 25, 'CILINCING'),
(20, 'ujang', 'ujang123', 'GUEST08220004', 4, 26, 'CILINCING'),
(21, 'Koperasi Angke', 'admin123as', 'SUPER08220002', 2, 0, 'Penjaringan'),
(22, 'Usman', 'Usman123', 'aselole', 0, 27, 'ANGKE'),
(23, 'Im Yoona', 'gg', 'GUEST08220001', 4, 29, 'ANGKE'),
(24, 'Tzuyu', 'twice', 'GUEST08220002', 4, 30, 'ANGKE'),
(25, 'master', 'master123', 'master/0001', 3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga_per_unit` int(20) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id_alat`, `nama`, `jenis`, `satuan`, `harga_per_unit`, `created_date`, `created_by`, `modified_date`, `modified_by`, `lokasi`) VALUES
(1, 'kail', 'Alat', 'pcs', 1000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(3, 'Dogol', 'Alat', 'pcs', 50000, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop', 'CILINCING'),
(4, 'Tingker', 'Alat', 'pcs', 20000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(6, 'Pukat Harimau', 'Alat', 'Pcs', 80000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(8, 'Solar', 'Bahan Bakar', 'Liter', 18500, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(9, 'Jaring', 'Alat', 'set', 50000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(10, 'Rampus', 'Alat', 'pcs', 50000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(11, 'Arad', 'Alat', 'pcs', 20000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(12, 'Nilon', 'Alat', 'pcs', 25000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(13, 'Milenium', 'Alat', 'pcs', 30000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(14, 'Uang', 'Bahan', 'Rupiah', 1, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(15, 'Sembako', 'Bahan', 'set', 100000, '0000-00-00', '', '0000-00-00', '', 'CILINCING'),
(16, 'kail', 'Alat', 'pcs', 500, '0000-00-00', '', '0000-00-00', '', 'ANGKE'),
(17, 'Dogol', 'Alat', 'pcs', 40000, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop', 'ANGKE'),
(18, 'Pukat Harimau', 'Alat', 'pcs', 100000, '0000-00-00', '', '0000-00-00', '', 'ANGKE');

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int(10) NOT NULL,
  `nama_ikan` varchar(100) NOT NULL,
  `harga_ikan` int(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `nama_ikan`, `harga_ikan`, `gambar`, `lokasi`) VALUES
(7, 'ALU', 21000, '', 'CILINCING'),
(8, 'RAMBE', 35000, '', 'CILINCING'),
(9, 'JENA\'AH', 45000, '', 'CILINCING'),
(10, 'KAKAP PUTIH', 50000, '', 'CILINCING'),
(11, 'KURO', 35000, '', 'CILINCING'),
(12, 'GABRET B', 25000, '', 'CILINCING'),
(13, 'TALANG', 15000, '', 'CILINCING'),
(14, 'BULAN - BULAN', 9000, '', 'CILINCING'),
(15, 'CAMPUR', 25000, '', 'CILINCING'),
(16, 'TENGGIRI', 65000, '', 'CILINCING'),
(17, 'GEROT', 25000, '', 'CILINCING'),
(18, 'CENDRO', 10000, '', 'CILINCING'),
(19, 'REMANG', 18000, '', 'CILINCING'),
(20, 'PAYUS', 10000, '', 'CILINCING'),
(21, 'MANYUNG', 12000, 'WhatsApp_Image_2022-07-10_at_18_24_10.jpeg', 'CILINCING'),
(30, 'MANYUNG', 13000, 'WhatsApp_Image_2022-07-10_at_18_24_10.jpeg', 'ANGKE'),
(31, 'Tuna Blue Fin', 5000000, '', 'CILINCING'),
(32, 'Tuna Blue Fin', 6000000, 'tuna.jpeg', 'ANGKE');

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

-- --------------------------------------------------------

--
-- Table structure for table `nelayan`
--

CREATE TABLE `nelayan` (
  `id` int(5) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `nama_kapal` varchar(20) NOT NULL,
  `jenis_kapal` varchar(12) NOT NULL,
  `id_alat` int(12) NOT NULL,
  `GT` varchar(5) NOT NULL,
  `daerah_tangkap` varchar(50) NOT NULL,
  `tanda_pas` varchar(20) NOT NULL,
  `pelabuhan_bongkar` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nelayan`
--

INSERT INTO `nelayan` (`id`, `nama`, `nama_kapal`, `jenis_kapal`, `id_alat`, `GT`, `daerah_tangkap`, `tanda_pas`, `pelabuhan_bongkar`, `keterangan`, `status`) VALUES
(6, 'Hendiyanto', 'ALPIN / CARIWAN', 'NELAYAN', 1, '6 GT', 'TELUK JAKARTA dan KARAWANG', '-', 'CILINCING', '-', 1),
(7, 'ROFIUDIN', 'DEWI JAYA 5', 'NELAYAN', 3, '2 GT', 'TELUK JAKARTA dan KARAWANG', 'DK1 NO.31', 'CILINCING', '-', 1),
(8, 'SUEB', 'LANGGENG JAYA 11', 'NELAYAN', 3, '3 GT', 'TELUK JAKARTA dan KARAWANG', 'DKI 3 NO.14', 'CILINCING', '-', 1),
(9, 'CASMADI', 'ADELIA PUTRI ', 'NELAYAN', 4, '3 GT', 'TELUK JAKARTA dan KARAWANG', 'DKI 3 NO.79', 'CILINCING', '-', 1),
(23, 'JUNAEDI', 'HEART OF THE SEA', 'TONGKANG', 1, '3 GT', 'TELUK JAKARTA dan KARAWANG', 'DKI 3 NO.79', 'CILINCING', '', 1),
(27, 'AHMAD', 'TITANIC', 'TONGKANG', 1, '3 GT', 'SELAT SUNDA', 'DKI 4 NO 21', 'ANGKE', '', 1),
(28, 'BOAZ', 'CONQUEROR OF SEAS', 'TONGKANG', 6, '3 GT', 'SELAT SUNDA', 'DKI 4 NO 21', 'ANGKE', '', 1),
(29, 'GUEST08220001', '', '', 1, '', '', '', 'ANGKE', '', 1),
(30, 'GUEST08220002', '', '', 6, '', '', '', 'ANGKE', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_detail`
--

CREATE TABLE `peminjaman_detail` (
  `id_peminjaman_detail` int(5) NOT NULL,
  `id_peminjaman_header` int(5) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `id_alat` int(5) NOT NULL,
  `jumlah_pinjam` int(10) NOT NULL,
  `harga/unit_kembali` int(15) NOT NULL,
  `jumlah_kembali` int(10) NOT NULL,
  `harga/unit_pinjam` int(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman_detail`
--

INSERT INTO `peminjaman_detail` (`id_peminjaman_detail`, `id_peminjaman_header`, `lokasi`, `id_alat`, `jumlah_pinjam`, `harga/unit_kembali`, `jumlah_kembali`, `harga/unit_pinjam`, `status`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 3, 'CILINCING', 1, 1, 0, 1, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(2, 4, 'CILINCING', 1, 1, 0, 1, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(3, 5, 'CILINCING', 1, 1, 0, 1, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(4, 6, 'CILINCING', 1, 2, 1000, 2, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(5, 7, 'CILINCING', 1, 2, 1000, 2, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(6, 8, 'CILINCING', 1, 1000, 0, 0, 1000, 0, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(7, 9, 'CILINCING', 1, 5, 1000, 5, 1000, 1, '2022-07-02', 'rizaldi', '2022-07-02', 'rizaldi'),
(8, 10, 'CILINCING', 1, 8, 0, 0, 1000, 0, '2022-07-02', 'rizaldi', '2022-07-02', 'rizaldi'),
(9, 11, 'CILINCING', 1, 7, 1000, 7, 1000, 1, '2022-07-02', 'rizaldi', '2022-07-02', 'rizaldi'),
(10, 12, 'CILINCING', 1, 50, 1000, 5, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(11, 13, 'CILINCING', 1, 30, 1000, 2, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(12, 14, 'CILINCING', 1, 60, 1000, 3, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(13, 15, 'CILINCING', 1, 10, 1000, 4, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(14, 16, 'CILINCING', 1, 20, 1000, 3, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(15, 17, 'CILINCING', 1, 70, 1000, 20, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(16, 18, 'CILINCING', 1, 40, 1000, 20, 1000, 1, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(17, 19, 'CILINCING', 1, 1, 1000, 1, 1000, 1, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop'),
(18, 20, 'CILINCING', 1, 1, 1000, 1, 1000, 1, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop'),
(19, 21, 'CILINCING', 1, 1, 1000, 0, 1000, 1, '2022-07-03', 'adminkop', '2022-07-04', 'adminkop'),
(20, 22, 'CILINCING', 8, 10, 0, 0, 18500, 0, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop'),
(21, 23, 'CILINCING', 8, 19, 0, 0, 18500, 0, '2022-07-14', 'adminkop', '2022-07-14', 'adminkop'),
(22, 24, 'CILINCING', 1, 10, 1000, 9, 1000, 1, '2022-07-20', 'rizaldi', '2022-07-20', 'rizaldi'),
(23, 24, 'CILINCING', 9, 5, 50000, 5, 50000, 1, '2022-07-20', 'rizaldi', '2022-07-20', 'rizaldi'),
(24, 25, 'CILINCING', 1, 2, 0, 0, 1000, 0, '2022-07-25', 'rizaldi', '2022-07-25', 'rizaldi'),
(25, 26, 'CILINCING', 4, 3, 20000, 0, 20000, 1, '2022-08-08', 'adminkop', '2022-08-22', 'rizaldi'),
(44, 32, 'CILINCING', 1, 9, 1000, 9, 1000, 1, '2022-08-24', 'adminkop', '2022-08-24', 'adminkop'),
(45, 33, 'CILINCING', 3, 2, 50000, 2, 50000, 1, '2022-08-24', 'rizaldi', '2022-08-24', 'rizaldi'),
(46, 34, 'Cilincing', 4, 2, 20000, 1, 20000, 0, '2022-08-31', 'adminkop', '2022-08-31', 'adminkop'),
(47, 34, 'Cilincing', 9, 1, 50000, 1, 50000, 1, '2022-08-31', 'adminkop', '2022-08-31', 'adminkop'),
(48, 35, 'Cilincing', 1, 1, 1000, 1, 1000, 1, '2022-08-31', 'adminkop', '2022-08-31', 'adminkop'),
(49, 35, 'Cilincing', 4, 1, 0, 0, 20000, 0, '2022-08-31', 'adminkop', '2022-08-31', 'adminkop');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_header`
--

CREATE TABLE `peminjaman_header` (
  `id_peminjaman_header` int(5) NOT NULL,
  `id_nelayan` int(5) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `total_pinjam` int(20) NOT NULL,
  `total_kembali` int(20) NOT NULL,
  `status` int(5) NOT NULL,
  `total` int(20) NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman_header`
--

INSERT INTO `peminjaman_header` (`id_peminjaman_header`, `id_nelayan`, `lokasi`, `code`, `total_pinjam`, `total_kembali`, `status`, `total`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 0, 'CILINCING', 'PJ05220001', 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(2, 3, 'CILINCING', 'PJ06220001', 0, 0, 0, 150000, '2022-06-18', 'rizaldi', '2022-06-18', 'rizaldi'),
(3, 6, 'CILINCING', 'PJ07220001', 1000, 0, 1, 0, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(4, 7, 'CILINCING', 'PJ07220002', 1000, 0, 1, 0, '2022-07-02', 'adminkop', '2022-11-01', 'adminkop'),
(5, 8, 'CILINCING', 'PJ07220003', 1000, 0, 1, 0, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(6, 9, 'CILINCING', 'PJ07220004', 2000, 2000, 1, 0, '2022-07-02', 'adminkop', '2022-12-01', 'adminkop'),
(7, 9, 'CILINCING', 'PJ07220005', 2000, 2000, 1, 0, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(9, 7, 'CILINCING', 'PJ07220007', 5000, 5000, 1, 0, '2022-07-02', 'rizaldi', '2022-10-01', 'rizaldi'),
(11, 9, 'CILINCING', 'PJ07220008', 7000, 7000, 1, 0, '2022-07-02', 'rizaldi', '2022-09-01', 'rizaldi'),
(12, 6, 'CILINCING', 'PJ07220009', 50000, 5000, 1, 0, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(13, 6, 'CILINCING', 'PJ07220010', 30000, 2000, 1, 0, '2022-07-02', 'adminkop', '2022-08-01', 'adminkop'),
(14, 7, 'CILINCING', 'PJ07220011', 60000, 3000, 1, 0, '2022-07-02', 'adminkop', '2022-05-01', 'adminkop'),
(15, 6, 'CILINCING', 'PJ07220012', 10000, 4000, 1, 0, '2022-07-02', 'adminkop', '2022-04-01', 'adminkop'),
(16, 6, 'CILINCING', 'PJ07220013', 20000, 3000, 1, 0, '2022-07-02', 'adminkop', '2022-03-01', 'adminkop'),
(17, 6, 'CILINCING', 'PJ07220014', 70000, 20000, 1, 0, '2022-07-02', 'adminkop', '2022-02-01', 'adminkop'),
(18, 7, 'CILINCING', 'PJ07220015', 40000, 20000, 1, 0, '2022-07-02', 'adminkop', '2022-01-01', 'adminkop'),
(19, 7, 'CILINCING', 'PJ07220016', 1000, 1000, 1, 0, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop'),
(20, 7, 'CILINCING', 'PJ07220017', 1000, 1000, 1, 0, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop'),
(21, 7, 'CILINCING', 'PJ07220018', 1000, 0, 1, 0, '2022-07-03', 'adminkop', '2022-07-04', 'adminkop'),
(22, 13, 'CILINCING', 'PJ07220019', 185000, 0, 0, 0, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop'),
(23, 14, 'CILINCING', 'PJ07220020', 351500, 0, 0, 0, '2022-07-14', 'adminkop', '2022-07-14', 'adminkop'),
(24, 8, 'CILINCING', 'PJ07220021', 260000, 259000, 1, 0, '2022-07-20', 'rizaldi', '2022-07-20', 'rizaldi'),
(25, 9, 'CILINCING', 'PJ07220022', 2000, 0, 0, 0, '2022-07-25', 'rizaldi', '2022-07-25', 'rizaldi'),
(26, 8, 'CILINCING', 'PJ08220001', 60000, 0, 1, 0, '2022-08-08', 'adminkop', '2022-08-22', 'rizaldi'),
(32, 6, 'CILINCING', 'PJ08220002', 9000, 9000, 1, 0, '2022-08-24', 'adminkop', '2022-08-24', 'adminkop'),
(33, 6, 'CILINCING', 'PJ08220003', 100000, 100000, 1, 0, '2022-08-24', 'rizaldi', '2022-08-24', 'rizaldi'),
(34, 7, 'Cilincing', 'PJ08220004', 90000, 70000, 1, 0, '2022-08-31', 'adminkop', '2022-08-31', 'adminkop'),
(35, 6, 'Cilincing', 'PJ08220005', 21000, 1000, 0, 0, '2022-08-31', 'adminkop', '2022-08-31', 'adminkop');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `id_penjualan_detail` int(20) NOT NULL,
  `id_penjualan` int(20) NOT NULL,
  `id_ikan` int(20) NOT NULL,
  `berat` int(20) NOT NULL,
  `harga/kg` int(20) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`id_penjualan_detail`, `id_penjualan`, `id_ikan`, `berat`, `harga/kg`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 5, 3, 3, 5000, '2022-05-21', 'rizaldi', '2022-05-21', 'rizaldi'),
(7, 5, 1, 10, 10000, '2022-06-16', 'rizaldi', '2022-06-16', 'rizaldi'),
(8, 5, 2, 10, 15000, '2022-06-16', 'rizaldi', '2022-06-16', 'rizaldi'),
(9, 6, 1, 10, 10000, '2022-05-18', 'rizaldi', '2022-06-18', 'rizaldi'),
(10, 7, 1, 20, 10000, '2022-06-18', 'rizaldi', '2022-06-18', 'rizaldi'),
(11, 8, 2, 20, 15000, '2022-06-18', 'rizaldi', '2022-06-18', 'rizaldi'),
(12, 9, 7, 10, 21000, '2022-06-23', 'adminkop', '2022-06-23', 'adminkop'),
(13, 9, 14, 5, 9000, '2022-06-23', 'adminkop', '2022-06-23', 'adminkop'),
(14, 9, 10, 3, 50000, '2022-06-23', 'adminkop', '2022-06-23', 'adminkop'),
(15, 10, 9, 50, 45000, '2022-06-23', 'adminkop', '2022-06-23', 'adminkop'),
(16, 11, 9, 20, 45000, '2022-06-25', 'adminkop', '2022-06-25', 'adminkop'),
(17, 11, 9, 2, 45000, '2022-06-25', 'adminkop', '2022-06-25', 'adminkop'),
(18, 12, 13, 5, 15000, '2022-06-25', 'adminkop', '2022-06-25', 'adminkop'),
(19, 12, 10, 6, 50000, '2022-06-25', 'adminkop', '2022-06-25', 'adminkop'),
(21, 14, 8, 10, 35000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(22, 15, 9, 10, 45000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(23, 15, 7, 5, 21000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(24, 15, 13, 2, 15000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(25, 15, 15, 5, 25000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(26, 15, 12, 20, 25000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(27, 16, 13, 4, 15000, '2022-07-02', 'rizaldi', '2022-07-02', 'rizaldi'),
(28, 16, 17, 3, 25000, '2022-07-02', 'rizaldi', '2022-07-02', 'rizaldi'),
(29, 17, 9, 30, 45000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(30, 17, 16, 20, 65000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(31, 17, 15, 20, 25000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(32, 18, 8, 30, 35000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(33, 18, 8, 5, 35000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(34, 19, 7, 30, 21000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(35, 20, 13, 50, 15000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(36, 21, 9, 60, 45000, '2022-07-02', 'adminkop', '2022-07-02', 'adminkop'),
(37, 22, 8, 1, 35000, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop'),
(38, 23, 11, 5, 35000, '2022-07-13', 'rizaldi', '2022-07-13', 'rizaldi'),
(39, 24, 12, 10, 25000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop'),
(40, 25, 7, 50, 21000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop'),
(41, 25, 10, 30, 50000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop'),
(42, 25, 20, 70, 10000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop'),
(43, 26, 13, 10, 15000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop'),
(44, 27, 13, 20, 15000, '2022-07-14', 'adminkop', '2022-07-14', 'adminkop'),
(45, 28, 7, 5, 21000, '2022-07-20', 'rizaldi', '2022-07-20', 'rizaldi'),
(46, 28, 17, 7, 25000, '2022-07-20', 'rizaldi', '2022-07-20', 'rizaldi'),
(47, 28, 11, 4, 35000, '2022-07-20', 'rizaldi', '2022-07-20', 'rizaldi'),
(48, 29, 10, 5, 50000, '2022-07-22', 'rizaldi', '2022-07-22', 'rizaldi'),
(49, 30, 8, 2, 35000, '2022-07-23', 'adminkop', '2022-07-23', 'adminkop'),
(50, 30, 16, 7, 65000, '2022-07-23', 'adminkop', '2022-07-23', 'adminkop'),
(51, 31, 10, 6, 50000, '2022-07-24', 'rizaldi', '2022-07-24', 'rizaldi'),
(52, 32, 24, 4, 17000, '2022-07-24', 'rizaldi', '2022-07-24', 'rizaldi'),
(53, 32, 12, 1, 25000, '2022-07-24', 'rizaldi', '2022-07-24', 'rizaldi'),
(54, 33, 10, 3, 50000, '2022-07-24', 'rizaldi', '2022-07-24', 'rizaldi'),
(55, 34, 16, 5, 65000, '2022-08-02', 'rizaldi', '2022-08-02', 'rizaldi'),
(56, 34, 8, 2, 35000, '2022-08-02', 'rizaldi', '2022-08-02', 'rizaldi'),
(58, 36, 10, 10, 50000, '2022-08-22', 'rizaldi', '2022-08-22', 'rizaldi');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_header`
--

CREATE TABLE `penjualan_header` (
  `id_penjualan_header` int(20) NOT NULL,
  `id_nelayan` int(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `total` int(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan_header`
--

INSERT INTO `penjualan_header` (`id_penjualan_header`, `id_nelayan`, `code`, `total`, `created_date`, `created_by`, `modified_date`, `modified_by`, `lokasi`) VALUES
(9, 6, 'JL06220005', 405000, '2022-05-19', 'adminkop', '2022-05-19', 'adminkop', 'CILINCING'),
(10, 8, 'JL06220006', 2250000, '2022-02-01', 'adminkop', '2022-02-01', 'adminkop', 'CILINCING'),
(11, 7, 'JL06220007', 990000, '2015-01-01', 'adminkop', '2015-01-01', 'adminkop', 'CILINCING'),
(12, 8, 'JL06220008', 375000, '2022-06-25', 'adminkop', '2022-06-25', 'adminkop', 'CILINCING'),
(14, 7, 'JL07220001', 350000, '2022-03-01', 'adminkop', '2022-07-02', 'adminkop', 'CILINCING'),
(15, 7, 'JL07220002', 1210000, '2022-04-01', 'adminkop', '2022-07-02', 'adminkop', 'CILINCING'),
(16, 6, 'JL07220003', 135000, '2022-07-02', 'rizaldi', '2022-07-02', 'rizaldi', 'CILINCING'),
(17, 6, 'JL07220004', 3150000, '2022-08-01', 'adminkop', '2022-07-02', 'adminkop', 'CILINCING'),
(18, 8, 'JL07220005', 1225000, '2022-09-01', 'adminkop', '2022-07-02', 'adminkop', 'CILINCING'),
(19, 7, 'JL07220006', 630000, '2022-10-01', 'adminkop', '2022-07-02', 'adminkop', 'CILINCING'),
(20, 8, 'JL07220007', 750000, '2022-11-01', 'adminkop', '2022-07-02', 'adminkop', 'CILINCING'),
(21, 9, 'JL07220008', 2700000, '2022-12-01', 'adminkop', '2022-07-02', 'adminkop', 'CILINCING'),
(22, 6, 'JL07220009', 35000, '2022-07-03', 'adminkop', '2022-07-03', 'adminkop', 'CILINCING'),
(23, 7, 'JL07220010', 175000, '2022-07-13', 'rizaldi', '2022-07-13', 'rizaldi', 'CILINCING'),
(24, 7, 'JL07220011', 250000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop', 'CILINCING'),
(25, 7, 'JL07220012', 3250000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop', 'CILINCING'),
(26, 13, 'JL07220013', 150000, '2022-07-13', 'adminkop', '2022-07-13', 'adminkop', 'CILINCING'),
(27, 14, 'JL07220014', 300000, '2022-07-14', 'adminkop', '2022-07-14', 'adminkop', 'CILINCING'),
(28, 20, 'JL07220015', 420000, '2022-07-20', 'rizaldi', '2022-07-20', 'rizaldi', 'CILINCING'),
(29, 13, 'JL07220016', 250000, '2022-07-22', 'rizaldi', '2022-07-22', 'rizaldi', 'CILINCING'),
(30, 13, 'JL07220017', 525000, '2022-07-23', 'adminkop', '2022-07-23', 'adminkop', 'CILINCING'),
(31, 6, 'JL07220018', 300000, '2022-07-24', 'rizaldi', '2022-07-24', 'rizaldi', 'CILINCING'),
(32, 8, 'JL07220019', 93000, '2022-07-24', 'rizaldi', '2022-07-24', 'rizaldi', 'CILINCING'),
(33, 14, 'JL07220020', 150000, '2022-07-24', 'rizaldi', '2022-07-24', 'rizaldi', 'CILINCING'),
(34, 7, 'JL08220001', 395000, '2022-08-02', 'rizaldi', '2022-08-02', 'rizaldi', 'CILINCING'),
(36, 8, 'JL08220002', 500000, '2022-08-22', 'rizaldi', '2022-08-22', 'rizaldi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`akun_id`),
  ADD KEY `id_nelayan` (`id_nelayan`);

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`kecamatan`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `nelayan`
--
ALTER TABLE `nelayan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_alat` (`id_alat`);

--
-- Indexes for table `peminjaman_detail`
--
ALTER TABLE `peminjaman_detail`
  ADD PRIMARY KEY (`id_peminjaman_detail`),
  ADD KEY `id_peminjaman_header` (`id_peminjaman_header`);

--
-- Indexes for table `peminjaman_header`
--
ALTER TABLE `peminjaman_header`
  ADD PRIMARY KEY (`id_peminjaman_header`),
  ADD KEY `id_peminjaman_header` (`id_peminjaman_header`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`id_penjualan_detail`);

--
-- Indexes for table `penjualan_header`
--
ALTER TABLE `penjualan_header`
  ADD PRIMARY KEY (`id_penjualan_header`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `akun_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `nelayan`
--
ALTER TABLE `nelayan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `peminjaman_detail`
--
ALTER TABLE `peminjaman_detail`
  MODIFY `id_peminjaman_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `peminjaman_header`
--
ALTER TABLE `peminjaman_header`
  MODIFY `id_peminjaman_header` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `id_penjualan_detail` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `penjualan_header`
--
ALTER TABLE `penjualan_header`
  MODIFY `id_penjualan_header` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nelayan`
--
ALTER TABLE `nelayan`
  ADD CONSTRAINT `fk_alat` FOREIGN KEY (`id_alat`) REFERENCES `alat` (`id_alat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
