-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2021 at 08:28 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--
CREATE DATABASE IF NOT EXISTS `realestate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `realestate`;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `Id` int(18) NOT NULL AUTO_INCREMENT,
  `Name` char(18) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Id`, `Name`) VALUES
(1, 'DodavanjeOglasa'),
(2, 'Komentarisanje');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `IdOwner` int(11) DEFAULT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Time` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `Price` int(11) DEFAULT NULL,
  `Topic` varchar(20) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  `Size` int(18) DEFAULT NULL,
  `Address` char(30) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  `IdPlace` int(11) NOT NULL,
  `Description` char(200) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  `Purpose` varchar(20) NOT NULL,
  `RealEstateType` varchar(30) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `R_8` (`IdOwner`),
  KEY `R_12` (`IdPlace`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`IdOwner`, `Id`, `Time`, `Price`, `Topic`, `Size`, `Address`, `IdPlace`, `Description`, `Purpose`, `RealEstateType`) VALUES
(81, 34, '2021-06-04 23:08:57.315497', 312213, 'Oglas1', 85, 'Vojvode Stepe 120', 3, 'Ovo je jako lep stan', 'prodaja', 'stan'),
(105, 41, '2021-06-05 22:46:07.661492', 87000, 'Oglas3', 87, 'Savski venac 4', 1, 'Dobar stan', 'prodaja', 'stan'),
(105, 44, '2021-06-06 11:12:56.704826', 80000, 'Stan na Ceraku', 123, 'Cerski Venac 2', 1, 'Dobar stan', 'izdavanje', 'kuca'),
(104, 43, '2021-06-05 22:56:56.745769', 80741, 'Hej vest', 88, 'Vojvode Stepe 120', 2, 'Dobar stan', 'prodaja', 'stan'),
(102, 47, '2021-06-06 12:55:06.004969', 123123, 'Stan na Ceraku', 123, 'Savski venac 4', 2, '', 'izdavanje', 'stan'),
(107, 48, '2021-06-06 13:00:33.164254', 123123, 'Stan na Ceraku', 100, 'Vojvode Stepe 120', 1, 'Nista nije top', 'izdavanje', 'kuca'),
(81, 40, '2021-06-05 10:33:56.864737', 80000, 'Hej vest', 67, 'Savski venac 4', 2, 'Odlican stan', 'prodaja', 'stan'),
(102, 50, '2021-06-06 14:59:50.544085', 100001, 'Hej vest', 123, 'Aljehinova 6', 1, 'asadadsad', 'izdavanje', 'kuca');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

DROP TABLE IF EXISTS `agency`;
CREATE TABLE IF NOT EXISTS `agency` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  `AverageMark` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`Id`, `Name`, `AverageMark`) VALUES
(74, 'Agencija1', '0.00'),
(104, 'Agencija6', '3.00'),
(107, 'Agencija nova', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `Description` varchar(200) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  `IdK` int(11) NOT NULL,
  `IdAd` int(11) NOT NULL,
  `Time` timestamp NULL DEFAULT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`),
  KEY `R_20` (`IdAd`),
  KEY `IdK` (`IdK`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Description`, `IdK`, `IdAd`, `Time`, `Id`) VALUES
('Ovo je jedna jako lepa kucica', 88, 34, '2021-06-02 16:35:10', 1),
('Ma ovo je super stan aman covece', 0, 102, '2021-06-05 10:44:21', 2),
('Ma super je stan', 102, 34, '2021-06-05 10:49:30', 3),
('Jeste stvarno je super', 103, 40, '2021-06-05 10:52:15', 4),
('Ma fantazija alo', 103, 34, '2021-06-05 10:52:28', 5),
('Super', 88, 34, '2021-06-05 11:01:17', 6),
('Super123', 88, 34, '2021-06-05 11:01:23', 7),
('Super', 102, 40, '2021-06-05 18:14:44', 8),
('fadsfdas', 102, 40, '2021-06-05 18:27:31', 9),
('fasdfadsfasd', 102, 40, '2021-06-05 18:27:36', 10),
('fsadfdsafasdfads', 102, 40, '2021-06-05 18:27:39', 11),
('fdasfasd', 102, 40, '2021-06-05 18:31:59', 12),
('aca', 102, 40, '2021-06-05 18:32:01', 13),
('fasdfasd', 102, 40, '2021-06-05 18:33:35', 14),
('marko', 102, 40, '2021-06-05 18:33:37', 15),
('koem', 102, 40, '2021-06-05 18:42:43', 16),
('fasdfsd', 102, 40, '2021-06-05 18:44:33', 17),
('aca', 102, 40, '2021-06-05 18:44:36', 18),
('das', 102, 34, '2021-06-05 18:45:04', 19),
('Evo ga komentar', 88, 34, '2021-06-05 19:01:41', 20),
('aca', 88, 34, '2021-06-05 19:04:58', 21),
('fasdfds', 88, 34, '2021-06-05 19:05:01', 22),
('fasdafs', 102, 34, '2021-06-05 19:12:59', 23),
('fasdfasd', 102, 40, '2021-06-05 21:39:09', 24),
('Ovo je dobar stan', 88, 43, '2021-06-10 20:18:14', 28),
('caocao', 102, 50, '2021-06-06 15:00:19', 27),
('Ovo je dobar stan', 88, 43, '2021-06-10 20:18:44', 29);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `IdU` int(11) NOT NULL,
  `IdAd` int(11) NOT NULL,
  PRIMARY KEY (`IdU`,`IdAd`),
  KEY `R_24` (`IdAd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`IdU`, `IdAd`) VALUES
(88, 34),
(88, 43),
(88, 44);

-- --------------------------------------------------------

--
-- Table structure for table `hastag`
--

DROP TABLE IF EXISTS `hastag`;
CREATE TABLE IF NOT EXISTS `hastag` (
  `IdAd` int(11) NOT NULL,
  `IdTag` int(11) NOT NULL,
  PRIMARY KEY (`IdAd`,`IdTag`),
  KEY `R_15` (`IdTag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hastag`
--

INSERT INTO `hastag` (`IdAd`, `IdTag`) VALUES
(2, 2),
(2, 10),
(34, 1),
(34, 2),
(34, 3),
(34, 4),
(34, 7),
(34, 8),
(34, 9),
(34, 13),
(34, 14),
(40, 2),
(40, 5),
(40, 7),
(40, 10),
(40, 11),
(40, 13),
(41, 2),
(41, 3),
(41, 5),
(41, 6),
(41, 7),
(41, 10),
(41, 11),
(41, 13),
(43, 2),
(43, 5),
(43, 7),
(43, 11),
(43, 13),
(44, 2),
(44, 5),
(44, 7),
(44, 9),
(44, 10),
(44, 11),
(44, 13),
(47, 1),
(47, 2),
(47, 5),
(47, 7),
(47, 11),
(47, 13),
(48, 2),
(48, 5),
(48, 7),
(48, 11),
(48, 13),
(50, 1),
(50, 2),
(50, 5),
(50, 7),
(50, 11),
(50, 13);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) DEFAULT NULL,
  `IdAd` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `R_17` (`IdAd`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Id`, `filename`, `IdAd`) VALUES
(53, 'zemun-vece.jpg', 41),
(46, '195407178_3081811935383211_2133136274960495687_n.jpg', 34),
(47, '3.jpg', 34),
(48, '196003273_805410000110048_5859348894001031118_n.jpg', 40),
(49, '2.jpg', 40),
(50, '5.jpg', 40),
(51, '3.jpg', 34),
(52, '5.jpg', 34),
(54, '4.jpg', 41),
(55, '179886767_526832651818116_4714885070288597874_n.jpg', 41),
(56, 'zemun-vece.jpg', 43),
(57, '2.jpg', 43),
(58, '3.jpg', 44),
(59, '5.jpg', 44),
(60, '179886767_526832651818116_4714885070288597874_n.jpg', 44),
(65, '5.jpg', 47),
(64, '179886767_526832651818116_4714885070288597874_n.jpg', 44),
(66, '3.jpg', 47),
(67, '3.jpg', 47),
(68, '4.jpg', 48),
(69, '3.jpg', 48),
(70, '2.jpg', 48),
(71, 'hram_2.jpg', 48),
(72, '1.jpg', 48),
(74, '1.jpg', 50),
(75, '4.jpg', 50),
(76, '5.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `IdK` int(11) NOT NULL,
  `IdA` int(11) NOT NULL,
  `Number` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdK`,`IdA`),
  KEY `R_22` (`IdA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`IdK`, `IdA`, `Number`) VALUES
(102, 48, 5),
(102, 34, 3),
(102, 44, 3),
(88, 43, 3);

-- --------------------------------------------------------

--
-- Table structure for table `municipality`
--

DROP TABLE IF EXISTS `municipality`;
CREATE TABLE IF NOT EXISTS `municipality` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`Id`, `Name`, `City`) VALUES
(1, 'Čukarica', 'Beograd'),
(2, 'Novi Beograd', 'Beograd'),
(3, 'Palilula', 'Beograd'),
(4, 'Rakovica', 'Beograd'),
(5, 'Savski venac', 'Beograd'),
(6, 'Stari grad', 'Beograd'),
(7, 'Voždovac', 'Beograd'),
(8, 'Vračar', 'Beograd'),
(9, 'Zemun', 'Beograd'),
(10, 'Zvezdara', 'Beograd'),
(11, 'Barajevo', 'Beograd'),
(12, 'Grocka', 'Beograd'),
(13, 'Lazarevac', 'Beograd'),
(14, 'Mladenovac', 'Beograd'),
(15, 'Obrenovac', 'Beograd'),
(16, 'Sopot', 'Beograd'),
(17, 'Surčin', 'Beograd');

-- --------------------------------------------------------

--
-- Table structure for table `privilegeduser`
--

DROP TABLE IF EXISTS `privilegeduser`;
CREATE TABLE IF NOT EXISTS `privilegeduser` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `Surname` varchar(30) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilegeduser`
--

INSERT INTO `privilegeduser` (`Id`, `Name`, `Surname`) VALUES
(81, 'Privilegovan4', 'Privilegovan4'),
(100, 'Privilegovan2', 'Privilegovan2'),
(102, 'Dragan', 'Radosevic'),
(105, 'Alex', 'Alex'),
(108, 'jovan123', 'jovan123');

-- --------------------------------------------------------

--
-- Table structure for table `prohibition`
--

DROP TABLE IF EXISTS `prohibition`;
CREATE TABLE IF NOT EXISTS `prohibition` (
  `IdA` int(18) NOT NULL,
  `IdU` int(11) NOT NULL,
  PRIMARY KEY (`IdA`,`IdU`),
  KEY `R_29` (`IdU`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `realestatetype`
--

DROP TABLE IF EXISTS `realestatetype`;
CREATE TABLE IF NOT EXISTS `realestatetype` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realestatetype`
--

INSERT INTO `realestatetype` (`Id`, `Name`) VALUES
(1, 'stan'),
(2, 'kuca'),
(3, 'garaza');

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

DROP TABLE IF EXISTS `registereduser`;
CREATE TABLE IF NOT EXISTS `registereduser` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `Surname` varchar(30) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registereduser`
--

INSERT INTO `registereduser` (`Id`, `Name`, `Surname`) VALUES
(88, 'Aleksandar', 'Rakic'),
(103, 'Radosevic', 'Nekretnine'),
(106, 'Obican', 'Obican');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `IdTag` int(11) NOT NULL,
  `Name` varchar(20) CHARACTER SET latin2 COLLATE latin2_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`IdTag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`IdTag`, `Name`) VALUES
(1, 'Potkrovlje'),
(2, 'Uknjizen'),
(3, 'Hitna prodaja'),
(4, 'Garaza'),
(5, 'Lift'),
(6, 'Terasa'),
(7, 'Podrum'),
(8, 'Penthouse'),
(9, 'Nova gradnja'),
(10, 'Stara gradnja'),
(11, 'Izvorno Stanje'),
(12, 'Renovirano'),
(13, 'Lux'),
(14, 'Za renoviranje');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Email`, `Phone`) VALUES
(88, 'Miki', 'aca123', 'Pera22@gmail.com', '063623678'),
(104, 'Agencija2', 'aca', 'Agencija2@gmail.com', '063623678'),
(105, 'Alex', 'aca', 'Alex@gmail.com', '065123456'),
(106, 'Obican', 'aca', 'Obican@gmail.com', ''),
(107, 'AgencijaPrva', 'aca', 'AgencijaNov@gmail.com', '063623678'),
(102, 'Jovan', 'joca', 'Pera@gmail.com', '063623596'),
(103, 'Agencija1', 'aleksandar', 'Agencija1@gmail.com', '062623456'),
(108, 'jovan123', 'aca', 'jovan123@gmail.com', '063212134');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
