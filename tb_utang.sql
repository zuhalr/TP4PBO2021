-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 04:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_utang`
--

CREATE TABLE `tb_utang` (
  `id` int(11) NOT NULL,
  `name_utang` varchar(50) NOT NULL,
  `deadline_utang` date NOT NULL,
  `name_pengutang` varchar(50) NOT NULL,
  `kategori_utang` varchar(50) NOT NULL,
  `jumlah_utang` varchar(10) NOT NULL,
  `priority_utang` varchar(50) NOT NULL,
  `status_utang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_utang`
--

INSERT INTO `tb_utang` (`id`, `name_utang`, `deadline_utang`, `name_pengutang`, `kategori_utang`, `jumlah_utang`, `priority_utang`, `status_utang`) VALUES
(2, 'Beras Bulan Mei', '2021-04-20', 'Bu Ayu', 'Food', '100000', 'High', 'Sudah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_utang`
--
ALTER TABLE `tb_utang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_utang`
--
ALTER TABLE `tb_utang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
