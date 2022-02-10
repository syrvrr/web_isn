-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2022 at 10:39 PM
-- Server version: 10.2.41-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isow2214_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_all_profile`
--

CREATE TABLE `master_all_profile` (
  `index` int(11) NOT NULL,
  `index_grup` int(100) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_all_profile`
--

INSERT INTO `master_all_profile` (`index`, `index_grup`, `foto`, `alamat`, `keterangan`, `link`, `longitude`, `latitude`) VALUES
(2, 3, 'aihara_enju_satomi.png', 'Jl.Tebing - Siantar Kode Pos 2019876 Kab.Batubara Sumatera Utara', 'Sekolah Dasar  Negeri 1 Batubara', 'http://bpprdbatubara.id', '99.379251', '3.260126'),
(3, 4, '1_lAFMb_MaPfBat7YHS9QlBQ.jpeg', 'Jl.Lintas Sumatera', 'Sekolah Menengah Pertama Swasta Yapim Indrapura', 'http://bpprdbatubara.id', '99.375847', '3.262962'),
(4, 3, 'ddddd.png', 'Jl.Gagak', 'Sekolah Dasar Negeri 3 Indrapura', 'http://bpprdbatubara.id', '99.387335', '3.259937');

-- --------------------------------------------------------

--
-- Table structure for table `mr_loc`
--

CREATE TABLE `mr_loc` (
  `index` int(100) NOT NULL,
  `index_sub` int(100) DEFAULT NULL,
  `nama_loc` varchar(100) DEFAULT NULL,
  `logo_loc` varchar(200) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL,
  `no_urut` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_all_profile`
--
ALTER TABLE `master_all_profile`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `mr_loc`
--
ALTER TABLE `mr_loc`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_all_profile`
--
ALTER TABLE `master_all_profile`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mr_loc`
--
ALTER TABLE `mr_loc`
  MODIFY `index` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
