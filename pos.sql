-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 03:18 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nip`, `nama`) VALUES
('12345', 'Udin');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `tanggal_datang` varchar(50) NOT NULL,
  `sasaran` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `isi_paket` varchar(50) NOT NULL,
  `tanggal_ambil` varchar(50) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`tanggal_datang`, `sasaran`, `penerima`, `isi_paket`, `tanggal_ambil`, `noktp`, `status`, `id`) VALUES
('2018-11-01 08:51:52', 'Rizsa', 'Udin', 'Makanan', '2018-11-01 08:58:01', '111', 'Telah Diambil', 3),
('2018-11-01 08:53:49', 'Rizsa', 'Udin', 'Makanan', '2018-11-01 08:58:03', '111', 'Telah Diambil', 4),
('2018-11-01 08:55:09', 'Rizsa', 'Udin', 'Makanan', '2018-11-01 09:02:35', '111', 'Telah Diambil', 5),
('2018-11-01 09:02:31', 'Rizsa', 'Udin', 'Makanan', '', '111', 'Belum Diambil', 6);

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `noktp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`noktp`, `nama`, `unit`) VALUES
('111', 'Rizsa El Akbar', 'Kamar 323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`noktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
