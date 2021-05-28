-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2021 at 10:23 AM
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
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `IdOwner` int(11) DEFAULT NULL,
  `IdAd` int(11) NOT NULL AUTO_INCREMENT,
  `TimePosted` binary(8) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Topic` varchar(20) DEFAULT NULL,
  `Size` char(18) DEFAULT NULL,
  `Address` char(18) DEFAULT NULL,
  `IdPlace` int(11) NOT NULL,
  `Description` char(18) DEFAULT NULL,
  `Purpose` varchar(20) NOT NULL,
  `RealEstateType` varchar(30) NOT NULL,
  PRIMARY KEY (`IdAd`),
  KEY `R_8` (`IdOwner`),
  KEY `R_12` (`IdPlace`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

DROP TABLE IF EXISTS `agency`;
CREATE TABLE IF NOT EXISTS `agency` (
  `IdA` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `AverageMark` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`IdA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`IdA`, `Name`, `AverageMark`) VALUES
(33, 'fsadfsdafa', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `Description` varchar(200) DEFAULT NULL,
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
-- Table structure for table `hasprivilege`
--

DROP TABLE IF EXISTS `hasprivilege`;
CREATE TABLE IF NOT EXISTS `hasprivilege` (
  `IdP` char(18) NOT NULL,
  `IdU` int(11) NOT NULL,
  PRIMARY KEY (`IdP`,`IdU`),
  KEY `R_29` (`IdU`)
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
  `IdMunicipality` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdMunicipality`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`IdMunicipality`, `Name`, `City`) VALUES
(1, 'Cukarica', 'Beograd'),
(2, 'Palilula', 'Beograd');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `IdPicture` int(11) NOT NULL,
  `Url` blob,
  `Width` int(11) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `IdAd` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdPicture`),
  KEY `R_17` (`IdAd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

DROP TABLE IF EXISTS `privilege`;
CREATE TABLE IF NOT EXISTS `privilege` (
  `IdPrivilege` char(18) NOT NULL,
  `Name` char(18) DEFAULT NULL,
  PRIMARY KEY (`IdPrivilege`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privilegeduser`
--

DROP TABLE IF EXISTS `privilegeduser`;
CREATE TABLE IF NOT EXISTS `privilegeduser` (
  `IdP` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  PRIMARY KEY (`IdP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilegeduser`
--

INSERT INTO `privilegeduser` (`IdP`, `Name`, `Surname`) VALUES
(32, 'a1', 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `realestatetype`
--

DROP TABLE IF EXISTS `realestatetype`;
CREATE TABLE IF NOT EXISTS `realestatetype` (
  `IdType` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdType`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

DROP TABLE IF EXISTS `registereduser`;
CREATE TABLE IF NOT EXISTS `registereduser` (
  `IdR` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  PRIMARY KEY (`IdR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registereduser`
--

INSERT INTO `registereduser` (`IdR`, `Name`, `Surname`) VALUES
(16, 'fdasfd', 'fdafdafda'),
(17, 'fdafa', 'fdafda'),
(18, 'agasggas', 'gdaga');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `IdTag` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdTag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`IdTag`, `Name`) VALUES
(1, 'Potkrovlje');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Email`, `Phone`) VALUES
(9, 'fdasfads', '123', 'fdsafdas', 'fdasfasd'),
(8, 'fads', '123', 'fdasfads', 'afsdfads'),
(0, 'Marko', 'aca', 'dsadsa', 'dsasda'),
(10, 'gagdsa', 'aca', 'fdasfdas', 'fdasfdsafdsa'),
(11, 'gfgadga', '123', 'fdsafdsa', 'fsdafads'),
(12, 'fdasfads', 'aca', 'fsdfsdaasd', 'fdsafsda'),
(13, 'fdasfads', 'aca', 'fsdfsdaasd', 'fdsafsda'),
(14, 'aca', 'aca', 'aaaaaa', 'aaaaaaa'),
(15, 'adsa', '1111', 'sdadsa', 'dsadsaasd'),
(16, 'aca1', '123', 'fdsaafdsa', 'fdasfdafdas'),
(17, 'fdasfads', '123', 'fdafasfd', 'asfdas'),
(18, 'gasdg', 'agdasgda', 'gagdsa', 'gasgdagas'),
(19, 'gadgda', 'gdasgdas', 'sgadsgdsagdsa', 'gdasgdasgas'),
(20, 'gadgda', 'gdasgdas', 'sgadsgdsagdsa', 'gdasgdasgas'),
(21, 'aca123', 'aca', 'dsadsa', 'dsadsa'),
(22, 'aca123', 'aca', 'dsadsa', 'dsadsa'),
(23, 'fgagads', 'gadsgdas', 'gadsgdasgdsa', 'gdsagdsagsda'),
(24, 'aggda', 'gadsgadsgda', 'gasgasdgasdg', 'gdsagdsa'),
(25, 'fsdafdsa', 'sfdafads', 'sfdasfdas', 'fdasfdsafdas'),
(26, 'gadgda', 'gdasgads', 'gdsgds', 'agsdagsdgsd'),
(27, 'aca121', '111', 'aaa', 'aaaa'),
(28, 'aca121', '111', 'aaa', 'aaaa'),
(29, 'aca111', 'a1', 'a1', 'a1'),
(30, 'aca111', 'a1', 'a1', 'a1'),
(31, 'priv', 'a1', 'a1', 'a1'),
(32, 'priv', 'a1', 'a1', 'a1'),
(33, 'fdasfdsa', 'fsdafds', 'sfdafsdafsda', 'sfdafdsafsda');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
