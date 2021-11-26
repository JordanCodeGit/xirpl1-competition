-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 07:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_competition`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `asal_sekolah` varchar(1000) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `lomba` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `first_name`, `last_name`, `asal_sekolah`, `nisn`, `email`, `lomba`) VALUES
(18, 'Axel', 'Davin', 'SMK Telkom Purwokerto', '3103 1 20 043', '3103120043@student.smktelkom-pwt.sch.id', 'Matematika'),
(19, 'Jordan', 'Angkawijaya', 'SMK Telkom Purwokerto', '3103 1 20 117', '3103120117@student.smktelkom-pwt.sch.id', 'Bahasa Inggris'),
(20, 'Rizqi', 'Gunan', 'SMK Telkom Purwokerto', '3103 1 20 151', 'rizqicemet12@gmail.com', 'Fisika'),
(21, 'Zidan', 'Nazih', 'SMK Telkom Purwokerto', '3103 1 20 240', 'alzidan057@gmail.com', 'Kimia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
