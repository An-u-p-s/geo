-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2018 at 03:19 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geocer`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `countryId` varchar(4) NOT NULL,
  `eng_countryName` varchar(100) NOT NULL,
  `phonecode` varchar(8) NOT NULL,
  `timezone` varchar(100) NOT NULL,
  PRIMARY KEY (`countryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `location_Id` varchar(10) NOT NULL,
  `state_Id` varchar(8) NOT NULL,
  `eng_locationName` varchar(100) NOT NULL,
  PRIMARY KEY (`location_Id`),
  KEY `state_Id` (`state_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `minlocation`
--

CREATE TABLE IF NOT EXISTS `minlocation` (
  `minlocation_Id` varchar(12) NOT NULL,
  `location_Id` varchar(10) NOT NULL,
  `eng_minlocationName` varchar(100) NOT NULL,
  PRIMARY KEY (`minlocation_Id`),
  KEY `location_Id` (`location_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postalcodes`
--

CREATE TABLE IF NOT EXISTS `postalcodes` (
  `postal_Id` varchar(10) NOT NULL,
  `minlocation_Id` varchar(12) NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `region` varchar(100) NOT NULL,
  PRIMARY KEY (`postal_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `state_Id` varchar(8) NOT NULL,
  `countryId` varchar(4) NOT NULL,
  `eng_stateName` varchar(100) NOT NULL,
  PRIMARY KEY (`state_Id`),
  KEY `countryId` (`countryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`state_Id`) REFERENCES `states` (`state_Id`);

--
-- Constraints for table `minlocation`
--
ALTER TABLE `minlocation`
  ADD CONSTRAINT `minlocation_ibfk_1` FOREIGN KEY (`location_Id`) REFERENCES `locations` (`location_Id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`countryId`) REFERENCES `countries` (`countryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
