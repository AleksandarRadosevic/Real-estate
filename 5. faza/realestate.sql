-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2021 at 10:47 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`IdOwner`, `Id`, `Time`, `Price`, `Topic`, `Size`, `Address`, `IdPlace`, `Description`, `Purpose`, `RealEstateType`) VALUES
(81, 34, '2021-06-04 23:08:57.315497', 312213, 'Oglas1', 85, 'Vojvode Stepe 120', 3, 'Ovo je jako lep stan', 'prodaja', 'stan'),
(81, 36, '2021-06-05 09:58:06.778093', 100000, 'Oglas3', 87, 'Aljehinova 2', 1, 'Jako dobar stan', 'prodaja', 'kuca'),
(81, 37, '2021-06-05 10:31:03.116967', 90000, 'Hej vest', 76, 'Savski venac 4', 5, 'Odlican stan sve super', 'izdavanje', 'kuca'),
(81, 38, '2021-06-05 10:31:18.916540', 90000, 'Hej vest', 76, 'Savski venac 4', 5, 'Odlican stan sve super', 'izdavanje', 'kuca'),
(81, 39, '2021-06-05 10:31:24.898557', 90000, 'Hej vest', 76, 'Savski venac 4', 5, 'Odlican stan sve super', 'izdavanje', 'kuca'),
(81, 40, '2021-06-05 10:33:56.864737', 80000, 'Hej vest', 67, 'Savski venac 4', 2, 'Odlican stan', 'prodaja', 'stan');

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
(74, 'Agencija1', '0.00');

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
  PRIMARY KEY (`IdK`,`IdAd`),
  KEY `R_20` (`IdAd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(34, 1),
(34, 2),
(34, 3),
(36, 1),
(36, 7),
(36, 10),
(36, 12),
(36, 13),
(40, 2),
(40, 5),
(40, 7),
(40, 10),
(40, 11),
(40, 13);

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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Id`, `filename`, `IdAd`) VALUES
(45, '1.jpg', 36),
(44, '3.jpg', 36),
(43, '5.jpg', 36),
(46, '195407178_3081811935383211_2133136274960495687_n.jpg', 34),
(47, '3.jpg', 34),
(48, '196003273_805410000110048_5859348894001031118_n.jpg', 40),
(49, '2.jpg', 40),
(50, '5.jpg', 40);

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
(81, 'Privilegovan2', 'Privilegovan2');

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
(88, 'Drugi', 'Drugi');

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
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Email`, `Phone`) VALUES
(88, 'Drugi', 'aca', 'Drugi@gmail.com', ''),
(81, 'Privilegovan2', 'aca', 'Privilegovan2@gmail.com', '063623456'),
(74, 'Agencija1', 'aca', 'agencija1@gmail.com', '063623678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
