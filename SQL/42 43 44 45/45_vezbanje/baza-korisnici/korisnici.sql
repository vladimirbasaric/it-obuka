-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 05:06 AM
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
-- Database: `blok45-korisnici`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `timestamp`, `username`, `password`, `email`) VALUES
(1, '2019-05-26 04:59:26', 'pera', 'ae0a456b0a5b5a05196cf4e6392e597b5a4e99545c6a5254f5ddca6ae6d016a1', 'pera@gmail.com'),
(2, '2019-05-26 05:00:51', 'laza', 'edd023a83a9221dffba73d006c8c4aa2dcba31900271cb9338dc50657bd18d40', 'laza@gmail.com'),
(3, '2019-05-26 05:00:51', 'stefan', '52518386cc33022de894fa0af047bd62666a63c2a6a6e86650e26955058c5acf', 'stefan@gmail.com'),
(4, '2019-05-26 05:01:36', 'zika', '4235ace8b7ae73e63080f971eaf90276369db8a2bb94c1c652ac7eb96ce26880', 'zika@gmail.com'),
(5, '2019-05-26 05:01:36', 'mika', '1567e79a15758616ee6c7bccbbd6f2bafcf3de6c49e7dd31fe6cd8a63d944359', 'mika@outlook.com'),
(6, '2019-05-26 05:03:14', 'nikola', 'a108d6d354a18ab7b395f000a7f08d1dd26cd64666b396281d7b4df08ac5bdb6', 'nikola@gmail.com'),
(7, '2019-05-26 05:03:14', 'milos', '794b9fecf082d4273ca54046f7b8377bf523240b88566bddbcfbf52194195123', 'milos.88@gmail.com'),
(8, '2019-05-26 05:04:22', 'nikola2', 'f8aa2ef360736102d13ffdfa7e13eab52b387d587f995736e634c6b1101c0c3f', 'nnikola@gmail.com'),
(9, '2019-05-26 05:04:22', 'stefke', '94d453c910a226628d88b0e2866e00dfa07808d6cb569434747cc5b97912cba6', 'stefke@yahoo.com'),
(10, '2019-05-26 05:05:23', 'milica', 'f50ccb98908dd89ef400372d10750d4c506bebdc34c8141e11d2fb962ebb1b5d', 'milica@gmail.com'),
(11, '2019-05-26 05:05:23', 'olivera', 'de34c39ea9bfc27703a1b01b504c9b860a71ea3c831918c3383ed27e652b3279', 'olja@outlook.com'),
(12, '2019-05-26 05:06:09', 'stevan', 'dcbd07ea0c46ea5fbcb552cdd76da3bf1a65a8603fa5a23fe61dfc37aaec5f25', 'steva@hotmail.com'),
(13, '2019-05-26 05:06:09', 'filip', 'ba6cdaa53ded44285963014c83dccacfe9e06e9b438763bc4ba1a23833edd477', 'filipz@gmaillcom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
