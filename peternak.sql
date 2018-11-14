-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 11:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peternak`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventori_pakan`
--

CREATE TABLE `inventori_pakan` (
  `Bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `Id_Peternak` tinyint(4) NOT NULL,
  `Nama_Peternak` varchar(32) NOT NULL,
  `Jumlah_Stok` smallint(255) NOT NULL,
  `Pemakaian_Pakan` smallint(255) NOT NULL,
  `Tanggal_Pemakaian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventori_pakan`
--

INSERT INTO `inventori_pakan` (`Bulan`, `Id_Peternak`, `Nama_Peternak`, `Jumlah_Stok`, `Pemakaian_Pakan`, `Tanggal_Pemakaian`) VALUES
('Januari', 122, 'retete', 12, 11, '0000-00-00'),
('September', 127, 'wda', 1, 2, '2018-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventori_pakan`
--
ALTER TABLE `inventori_pakan`
  ADD PRIMARY KEY (`Id_Peternak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
