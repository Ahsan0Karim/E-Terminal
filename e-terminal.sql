-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2022 at 06:08 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-terminal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kondektur`
--

CREATE TABLE `tbl_kondektur` (
  `id_kondektur` int(11) NOT NULL,
  `nama_kondektur` varchar(25) NOT NULL,
  `rute_kondektur` text NOT NULL,
  `no_telp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kondektur`
--

INSERT INTO `tbl_kondektur` (`id_kondektur`, `nama_kondektur`, `rute_kondektur`, `no_telp`) VALUES
(1, 'Aldo', 'Halte Sidoarjo - Halte Surabaya', '08385767312');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(25) DEFAULT NULL,
  `foto_user` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level`, `foto_user`) VALUES
(27, 'admin', 'admin@gmail.com', '$2y$10$ViQfvhFIsYiu2KZu8QPxvO7w8Cu2woK.WuFqppqQ.L0pxnWgLKKVm', '1', NULL),
(28, 'kondektur', 'kondektur@gmail.com', '$2y$10$7R69d5WRKwZPCIvHTcaQTuhG3E9c8N5Q9tMXaWMuM20x/V9rEKNjC', '2', NULL),
(29, 'penumpang', 'penumpang@gmail.com', '$2y$10$LpS4dFXlRHUfIJg4hjRQ2.h0kgab4MGbAaRzF1wJAMefzqIcW1w0O', '3', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kondektur`
--
ALTER TABLE `tbl_kondektur`
  ADD PRIMARY KEY (`id_kondektur`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kondektur`
--
ALTER TABLE `tbl_kondektur`
  MODIFY `id_kondektur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
