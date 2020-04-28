-- phpMyAdmin SQL Dump
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fakultet`
--

-- --------------------------------------------------------

--
-- Table structure for table `polaganja`
--

CREATE TABLE IF NOT EXISTS `polaganja` (
  `indeks` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ocena` int(11) NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`indeks`,`sifra`,`datum`),
  KEY `sifra` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `polaganja`
--

INSERT INTO `polaganja` (`indeks`, `sifra`, `ocena`, `datum`) VALUES
('mi10005', 'UVIT', 8, '2014-01-06'),
('mi12034', 'G1', 8, '2014-01-15'),
('mi12034', 'UVIT', 10, '2014-01-06'),
('mi12089', 'P1', 9, '2013-01-15'),
('mi12089', 'P2', 9, '2013-07-07'),
('mi12234', 'OOP', 8, '2013-06-12'),
('mi12234', 'UVIT', 10, '2013-01-18'),
('ml11201', 'MM', 7, '2013-02-10'),
('ml11201', 'VS', 7, '2014-02-09'),
('mn10056', 'A2', 8, '2013-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE IF NOT EXISTS `predmeti` (
  `sifra` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bodovi` int(11) NOT NULL,
  `semestar` int(11) NOT NULL COMMENT 'semestar u kojem se predmet slusa',
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`sifra`, `naziv`, `bodovi`, `semestar`) VALUES
('A1', 'Analiza 1', 6, 2),
('A2', 'Analiza 2', 6, 3),
('G1', 'Geometrija 1', 5, 2),
('IIFM', 'Istorija i filozofija matematike', 3, 8),
('MM', 'Metodika nastave matematike', 6, 6),
('OOP', 'Objektno orjentisano programiranje', 6, 4),
('OS', 'Operativni sistemi', 6, 6),
('P1', 'Programiranje 1', 8, 1),
('P2', 'Programiranje 2', 8, 2),
('PPJ', 'Prevodjenje programskih jezika', 6, 5),
('UVIT', 'Uvod u Veb i Internet tehnologije', 6, 4),
('VS', 'Verovatnoca i statistika', 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE IF NOT EXISTS `studenti` (
  `indeks` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `napomena` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`indeks`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`indeks`, `ime`, `prezime`, `napomena`) VALUES
('mi10005', 'Jovan', 'Markovic', ''),
('mi12034', 'Zika', 'Zikic', 'disciplinska kazna'),
('mi12089', 'Marko', 'Petrovic', ''),
('mi12234', 'Pera', 'Peric', 'odlican student'),
('mi13002', 'Ivan', 'Pajic', ''),
('ml11201', 'Kosta', 'Kojic', 'ubrzano studiranje'),
('ml12127', 'Jelena', 'Jaksic', ''),
('mn10056', 'Tijana', 'Jovanovic', ''),
('mn11345', 'Maja', 'Lalic', ''),
('mr11103', 'Vladimir', 'Bojic', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `polaganja`
--
ALTER TABLE `polaganja`
  ADD CONSTRAINT `polaganja_ibfk_3` FOREIGN KEY (`indeks`) REFERENCES `studenti` (`indeks`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `polaganja_ibfk_4` FOREIGN KEY (`sifra`) REFERENCES `predmeti` (`sifra`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
