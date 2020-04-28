-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2019 at 08:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

DROP TABLE IF EXISTS `autori`;
CREATE TABLE IF NOT EXISTS `autori` (
  `Šifra` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Datum_rođenja` date NOT NULL,
  PRIMARY KEY (`Šifra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`Šifra`, `Ime`, `Prezime`, `Datum_rođenja`) VALUES
('BĆ511', 'Branko', 'Ćopić', '1915-01-01'),
('BN408', 'Branislav', 'Nušić', '1864-10-08'),
('IA200', 'Ivo', 'Andrić', '1892-10-10'),
('IS726', 'Isidora', 'Sekulić', '1877-02-16'),
('MS046', 'Meša', 'Selimović', '1910-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `iznajmljivanje`
--

DROP TABLE IF EXISTS `iznajmljivanje`;
CREATE TABLE IF NOT EXISTS `iznajmljivanje` (
  `ČlanId` int(11) NOT NULL,
  `KnjigaId` int(11) NOT NULL,
  `Iznajmljeno` date NOT NULL,
  `Vraćeno` tinyint(1) NOT NULL DEFAULT '0',
  KEY `Član_FK` (`ČlanId`),
  KEY `Knjiga_FK` (`KnjigaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `iznajmljivanje`
--

INSERT INTO `iznajmljivanje` (`ČlanId`, `KnjigaId`, `Iznajmljeno`, `Vraćeno`) VALUES
(1, 2, '2019-04-22', 1),
(1, 7, '2019-04-24', 1),
(2, 2, '2019-05-05', 1),
(2, 3, '2019-02-13', 1),
(3, 7, '2019-05-05', 0),
(3, 8, '2019-03-25', 0),
(3, 11, '2019-05-07', 0),
(4, 2, '2019-05-07', 0),
(4, 12, '2019-04-30', 0),
(5, 1, '2019-04-25', 0),
(5, 5, '2019-05-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

DROP TABLE IF EXISTS `knjige`;
CREATE TABLE IF NOT EXISTS `knjige` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Autor` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Broj_strana` int(11) NOT NULL DEFAULT '200',
  `Godina_izdanja` year(4) NOT NULL DEFAULT '2019',
  PRIMARY KEY (`Id`),
  KEY `Autor_FK` (`Autor`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`Id`, `Naziv`, `Autor`, `Broj_strana`, `Godina_izdanja`) VALUES
(1, 'Pisma iz Norveške', 'IS726', 224, 1914),
(2, 'Orlovi rano lete', 'BĆ511', 240, 1957),
(3, 'Magareće godine', 'BĆ511', 442, 1960),
(4, 'Tvrđava', 'MS046', 336, 1970),
(5, 'Derviš i smrt', 'MS046', 374, 1966),
(6, 'Gospođa ministarka', 'BN408', 141, 1929),
(7, 'Sumnjivo lice', 'BN408', 92, 1924),
(8, 'Narodni poslanik', 'BN408', 137, 1924),
(9, 'Hajduci', 'BN408', 208, 1933),
(10, 'Na Drini ćuprija', 'IA200', 333, 1945),
(11, 'Gospođica', 'IA200', 191, 1945),
(12, 'Prokleta avlija', 'IA200', 168, 1954);

-- --------------------------------------------------------

--
-- Table structure for table `članovi`
--

DROP TABLE IF EXISTS `članovi`;
CREATE TABLE IF NOT EXISTS `članovi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Datum_rođenja` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `članovi`
--

INSERT INTO `članovi` (`Id`, `Ime`, `Prezime`, `Datum_rođenja`) VALUES
(1, 'Petar', 'Jović', '1992-05-15'),
(2, 'Mirjana', 'Vasiljević', '1975-10-26'),
(3, 'Biljana', 'Avramović', '1964-01-08'),
(4, 'Mladen', 'Kojić', '1995-08-13'),
(5, 'Mila', 'Gojković', '1980-07-07'),
(7, 'Milan ', 'Petkovic', '1991-05-12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iznajmljivanje`
--
ALTER TABLE `iznajmljivanje`
  ADD CONSTRAINT `Knjiga_FK` FOREIGN KEY (`KnjigaId`) REFERENCES `knjige` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Član_FK` FOREIGN KEY (`ČlanId`) REFERENCES `članovi` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `knjige`
--
ALTER TABLE `knjige`
  ADD CONSTRAINT `Autor_FK` FOREIGN KEY (`Autor`) REFERENCES `autori` (`Šifra`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
