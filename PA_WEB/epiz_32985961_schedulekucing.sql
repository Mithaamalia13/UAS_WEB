-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.epizy.com
-- Generation Time: Nov 14, 2022 at 08:23 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32985961_schedulekucing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `psw`) VALUES
(1, 'Alan Nuzulan', 'admin1', '$2y$10$jn2wTqwy4W7dTtOPI7UU6OejUxpUB1Lm0NGXUbJs.iF0XkohETdta'),
(2, 'Mitha Amalia', 'admin2', '$2y$10$8t9RpsUGZtgF/0C7qoiGzO0m.t7Ljz/vZzMRs53mtx9PoBD2BFkCW'),
(3, 'Sulhairah', 'admin3', '$2y$10$R5/rFCY7F07rKtvcw4HONeLLzqpbGth2WjH9tOhPFaB.KYuBBz7AO');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `jenis_perawatan` varchar(255) NOT NULL,
  `nama_kucing` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `tgl_pemeriksaan` varchar(255) NOT NULL,
  `tgl_booking` varchar(255) NOT NULL,
  `foto_kucing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama_pemilik`, `jenis_perawatan`, `nama_kucing`, `sex`, `tgl_pemeriksaan`, `tgl_booking`, `foto_kucing`) VALUES
(9, 'Mitha Amalia', 'VACCINATION', 'Lulu', 'BETINA', '2022-11-16', '2022-11-13', 'Lulu.jpg'),
(10, 'DO', 'GROOMING', 'Moly', 'JANTAN', '2022-11-18T17:45', '2022-11-14T05:45', 'Moly.jpg'),
(11, 'DO', 'GROOMING', 'Moly', 'JANTAN', '2022-11-20T16:00', '2022-11-14T06:27', 'Moly.jpg'),
(12, '', '', '', '', '', '', ''),
(13, 'Cipung', 'GROOMING', 'Polly', 'JANTAN', '2022-11-17', '2022-11-14', 'Polly.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `id` int(11) NOT NULL,
  `bnama` varchar(50) NOT NULL,
  `bjenis` varchar(50) NOT NULL,
  `knama` varchar(50) NOT NULL,
  `kkelamin` varchar(50) NOT NULL,
  `bbook` varchar(100) NOT NULL,
  `btrawat` varchar(100) NOT NULL,
  `bwaktu` varchar(255) NOT NULL,
  `kfoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kucing`
--

INSERT INTO `kucing` (`id`, `bnama`, `bjenis`, `knama`, `kkelamin`, `bbook`, `btrawat`, `bwaktu`, `kfoto`) VALUES
(46, 'Alan Nuzulan', 'SEMUA PERAWATAN', 'Nino', 'JANTAN', '2022-11-13', '2022-11-17', '10:33', 'Nino.jpg'),
(47, 'Sulhairah', 'GROOMING', 'Nona', 'JANTAN', '2022-11-14', '2022-11-17', '09:02', 'Nona.jpg'),
(48, 'Mitha Amalia', 'VACCINATION', 'Syarahh', 'BETINA', '2022-11-13', '2022-11-20', '21:00', 'Syarahh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Sandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Nama`, `Email`, `Username`, `Sandi`) VALUES
(1, 'Alan Nuzulan', 'landduasatu21@gmail.com', 'land21', '$2y$10$nVetv9SZEkHP.4IO3KraqOBijDerHGWe7qTAf2Tn/b0dnBHCAGuT6'),
(5, 'Sulhairah', 'sulhairah@gmail.com', 'hera', '$2y$10$WC70Se12le8BGgfAIcGgQe.dCwngsvzAFSlMcztFFxp9D7ZcO0jYS'),
(6, 'Mitha Amalia', 'mithaas13@gmail.com', 'mith', '$2y$10$yh8bU0uCnfb4GKeurjd6b.rJzhZHxWbQzQGn88.p22WcG4I4f/b5C'),
(7, 'ega', 'egasulfik@gmail.com', 'ega', '$2y$10$V1oxyLKkWUXYQlk7b3O2M.x0ispVFTdAyG0e0oW1VVuwEADl042KK'),
(8, 'Mitha Amalia', 'mithaas13@gmail.com', 'mithaas13', '$2y$10$c0PCHPaN7JbVcL1zgZRgeeNawUr8Ze7vvJgZNAp.lDQLNcI3Yx5t2'),
(9, 'DO Kyungsoo', 'kyungsoo12@gmail.com', 'kyungsoo12', '$2y$10$ItjrMwl4iffvoNKKxaBG2uetJXFlkeS22NbO6Il7bVwnJG1oFEEKW'),
(10, 'hera', 'hera123@gmail.com', 'heraa', '$2y$10$y27XLzaX6.sVRPT3tvZzQOEeAEw8h4t/bq5xPluDU7LRA.1gbQvSG'),
(11, 'sila rahima', 'silarahima130303@gmail.com', 'sila rahima', '$2y$10$6vMI/ZIC5b1JCrds92njUOflX8wBRu/nOtH/Bd1nlYT4ZuJl2ZtTW'),
(12, '', '', '', '$2y$10$c1JoYwdEePiVkz0okjl4AeSY.EqEuqcxhAxfW2MSAACfm984GGKvm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
