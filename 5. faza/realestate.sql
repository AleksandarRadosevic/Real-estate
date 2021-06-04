-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2021 at 06:48 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`IdOwner`, `Id`, `Time`, `Price`, `Topic`, `Size`, `Address`, `IdPlace`, `Description`, `Purpose`, `RealEstateType`) VALUES
(81, 16, '2021-06-02 16:35:10.203169', 90000, 'Oglas5', 100, 'Aljehinova 6', 2, 'Ovo je mnogo dobar stan mnogo dobro grejanje djakuzi', 'izdavanje', 'Kuća'),
(81, 15, '2021-06-02 15:37:08.411238', 80000, 'Oglas3', 111, 'Aljehinova 6', 2, '', 'prodaja', 'Stan'),
(81, 14, '2021-06-02 15:26:12.194562', 100000, 'Oglas2', 121, 'Aljehinova 6', 1, '', 'prodaja', 'Kuća'),
(81, 18, '2021-06-03 14:43:42.032540', 231312, 'fasdsfad', 321, 'Cerski Venac', 1, '', 'izdavanje', 'Kuća'),
(81, 17, '2021-06-03 14:36:04.601572', 100000, 'NoviOglas', 200, 'Vracarska 120', 8, 'To je jako lepo stan', 'izdavanje', 'Stan'),
(81, 9, '2021-06-02 15:11:24.641661', 94000, 'Oglas1', 56, 'Vojvode Stepe 120', 7, 'Stan dobro pozicio', 'izdavanje', 'Kuća'),
(81, 10, '2021-06-02 15:11:53.198138', 94000, 'Oglas1', 56, 'Vojvode Stepe 120', 7, 'Stan dobro pozicio', 'izdavanje', 'Stan'),
(81, 11, '2021-06-02 15:12:08.091619', 94000, 'Oglas1', 56, 'Vojvode Stepe 120', 7, 'Stan dobro pozicio', 'izdavanje', 'Stan'),
(81, 12, '2021-06-02 15:12:24.105735', 94000, 'Oglas1', 56, 'Vojvode Stepe 120', 7, 'Stan dobro pozicio', 'izdavanje', 'Stan'),
(81, 13, '2021-06-02 15:13:27.895733', 94000, 'Oglas1', 20, 'Vojvode Stepe 120', 7, 'Stan dobro pozicio', 'izdavanje', 'Garaža'),
(92, 19, '2021-06-03 17:24:45.461869', 70000, 'Stan na brdu', 80, 'Savski venac 4', 5, 'Dobar stan lep uknjizen', 'prodaja', 'Stan'),
(81, 20, '2021-06-04 10:29:32.498922', 800000, 'Lux stan Beograd', 88, 'Savski venac 4', 1, 'dobar stan', 'prodaja', 'Stan'),
(81, 21, '2021-06-04 10:36:26.623577', 999999, 'Oglas33', 321, 'Aljehinova 6', 1, 'fsafdasfdasfads', 'izdavanje', 'Kuća'),
(81, 22, '2021-06-04 10:38:49.687625', 999999, 'Oglas33', 321, 'Aljehinova 6', 1, 'fsafdasfdasfads', 'izdavanje', 'Kuća'),
(81, 23, '2021-06-04 18:37:40.172302', 55000, 'Stan na Ceraku', 55, 'Vinogradski Venac', 1, '', 'prodaja', 'stan');

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
  `IdOglas` int(11) NOT NULL,
  `Time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdK`,`IdOglas`),
  KEY `R_20` (`IdOglas`)
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
(7, 2),
(7, 5),
(7, 7),
(7, 11),
(7, 13),
(8, 2),
(8, 5),
(8, 7),
(8, 11),
(8, 13),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(14, 5),
(14, 7),
(14, 11),
(14, 13),
(15, 2),
(15, 5),
(15, 7),
(15, 11),
(15, 13),
(16, 2),
(16, 5),
(16, 7),
(16, 11),
(16, 13),
(17, 2),
(17, 5),
(17, 7),
(17, 11),
(17, 13),
(18, 2),
(18, 5),
(18, 7),
(18, 11),
(18, 13),
(19, 2),
(19, 5),
(19, 7),
(19, 11),
(19, 13),
(20, 2),
(20, 5),
(20, 7),
(20, 11),
(20, 13),
(21, 2),
(21, 5),
(21, 7),
(21, 11),
(21, 13),
(22, 2),
(22, 5),
(22, 7),
(22, 11),
(22, 13),
(23, 1),
(23, 2),
(23, 3),
(23, 5),
(23, 7),
(23, 11),
(23, 13);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(20) DEFAULT NULL,
  `IdAd` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `R_17` (`IdAd`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Id`, `filename`, `IdAd`) VALUES
(30, '2.jpg', 23),
(29, '4.jpg', 23),
(28, '3.jpg', 23),
(27, '4.jpg', 22),
(26, '4.jpg', 20),
(25, '1.jpg', 20),
(31, '5.jpg', 23),
(32, '1.jpg', 23);

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
(81, 'Privilegovan2', 'Privilegovan2'),
(92, 'Privilegovan3', 'Privilegovan3');

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

--
-- Dumping data for table `prohibition`
--

INSERT INTO `prohibition` (`IdA`, `IdU`) VALUES
(1, 74),
(2, 74),
(2, 88);

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
(1, 'Stan'),
(2, 'Kuća'),
(3, 'Garaža');

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
(2, 'Uknjižen'),
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
(92, 'Privilegovan3', 'aca', 'aradosevic40@gmail.com', '061123456'),
(81, 'Privilegovan2', 'aca', 'Privilegovan2@gmail.com', '063623456'),
(74, 'Agencija1', 'aca', 'agencija1@gmail.com', '063623678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
