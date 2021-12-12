-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2017 at 08:12 PM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monggonabung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` varchar(32) NOT NULL,
  `username` varchar(64) NOT NULL,
  `pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_admin` (`id_admin`, `username`, `pin`) VALUES
('U0003010001', 'admin', '$2y$10$.hkW2H.A2suydPdEWM6BQO6bUS4fdi1jG4izsrDplp2OIF3.dvZTy');
-- --------------------------------------------------------

--
-- Table structure for table `tbl_debit`
--

CREATE TABLE `tbl_debit` (
  `id_debit` int(10) NOT NULL,
  `deskripsi` text,
  `total_pemasukan` text,
  `total_pengeluaran` text,
  `total_bersih` text,
  `tanggal` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orang`
--

CREATE TABLE `tbl_orang` (
  `id_orang` int(23) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `no_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orang`
--

INSERT INTO `tbl_orang` (`id_orang`, `nama`, `deskripsi`, `no_hp`) VALUES
(7, 'Doddy', 'Bayar Hutang', '082118741324'),
(8, 'Mayang', 'Jasa Joki', '082158761345'),
(9, 'Popo', 'Jasa Bantu', '081246871364');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
 `id_pemasukan` int(23) NOT NULL,
 `id_keterangan` int(23) NOT NULL,
  `pemasukan` text,
  `total` int(30) NOT NULL,
  `tanggal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `id_pengeluaran` int(23) NOT NULL,
  `pengeluaran` text,
  `total` int(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan`
--

CREATE TABLE `tbl_keterangan` (
  `id_keterangan` int(23) NOT NULL,
  `id_orang` varchar(23) NOT NULL,
  `deskripsi` text,
  `jenis` varchar(23) NOT NULL,
  `harga` int(23) NOT NULL,
  `dp` varchar(23) NOT NULL,
  `selesai_dp` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_debit`
--
ALTER TABLE `tbl_debit`
  ADD PRIMARY KEY (`id_debit`);

--
--
-- Indexes for table `tbl_orang`
--
ALTER TABLE `tbl_orang`
  ADD PRIMARY KEY (`id_orang`);
--
-- Indexes for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tbl_keterangant`
--
ALTER TABLE `tbl_keterangan`
  ADD KEY `id_keterangan` (`id_keterangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(23) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_debit`
--
ALTER TABLE `tbl_debit`
  MODIFY `id_debit` int(10) NOT NULL AUTO_INCREMENT;
--
--
-- AUTO_INCREMENT for table `tbl_orang`
--
ALTER TABLE `tbl_orang`
  MODIFY `id_orang` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
--
-- AUTO_INCREMENT for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  MODIFY `id_pemasukan` int(23) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  MODIFY `id_pengeluaran` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_keterangan`
--
ALTER TABLE `tbl_keterangan`
  MODIFY `id_keterangan` int(23) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
