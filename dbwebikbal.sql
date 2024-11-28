-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 03:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebikbal`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `idLayanan` int(11) NOT NULL,
  `judulLayanan` varchar(60) NOT NULL,
  `deskipsi` text NOT NULL,
  `icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`idLayanan`, `judulLayanan`, `deskipsi`, `icon`) VALUES
(1, 'Dosen yang ', 'Memiliki dosen yang profesional', 'bi-person-fill'),
(2, 'Ruang Kuliah Representatif', 'memiliki ruang kuliah yang Ruang Kuliah Representatif Ruang Kuliah Representatif Ruang Kuliah Representatif', 'bi-building-fill'),
(3, 'Lap. Komputer Lengkap', 'Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer Lengkap', 'bi-pc-display'),
(4, 'Sistem Informasi Akademik', 'memiliki Sistem Informasi Akademik Sistem Informasi Akademik Sistem Informasi Akademik Sistem Informasi Akademik Sistem Informasi Akademik', 'bi-database-fill');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `nama`) VALUES
('ikbal@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Muhammad Ikbal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`idLayanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `idLayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
