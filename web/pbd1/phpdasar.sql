-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 01:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `binatang`
--

CREATE TABLE `binatang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenisbinatang` varchar(100) NOT NULL,
  `namalatin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binatang`
--

INSERT INTO `binatang` (`id`, `nama`, `jenisbinatang`, `namalatin`) VALUES
(1, 'kuda', 'mamalia', 'equus'),
(19, 'Kucing', ' Mamalia', 'Felis catus'),
(20, 'ular', 'melata', 'Serpentes'),
(22, 'kuda laut', ' Actinopterygii', 'Hippocampus'),
(24, 'hiu martil', 'mamalia', 'Sphyrnidae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binatang`
--
ALTER TABLE `binatang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binatang`
--
ALTER TABLE `binatang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
