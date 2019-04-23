-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2019 at 10:57 PM
-- Server version: 5.7.23
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
-- Database: `db_hc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(32) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`FirstName`, `LastName`, `PhoneNumber`, `Address`, `Username`, `Password`) VALUES
('Tanmay', 'Mukherjee', '11111111', 'bangalore', 'Admin1@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

DROP TABLE IF EXISTS `appoinments`;
CREATE TABLE IF NOT EXISTS `appoinments` (
  `aid` bigint(200) NOT NULL AUTO_INCREMENT,
  `FirstName` longtext NOT NULL,
  `LastName` longtext NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Status` char(10) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`aid`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Status`) VALUES
(21, 'Tanmay', 'Mukherjee', 'tanmay@gmail.com', '1234567890', '');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `pid` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pfname` longtext NOT NULL,
  `pmname` longtext NOT NULL,
  `plname` longtext NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` longtext NOT NULL,
  `age` varchar(3) NOT NULL,
  `poccupation` longtext NOT NULL,
  `din` varchar(20) NOT NULL,
  `dout` varchar(20) DEFAULT NULL,
  `under` longtext,
  `disease` longtext NOT NULL,
  `mdcn1` longtext,
  PRIMARY KEY (`pid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `FirstName` longtext NOT NULL,
  `LastName` longtext NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Username` longtext NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`(50))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `Address`, `PhoneNumber`, `Username`, `Password`) VALUES
('Tanmay', 'Mukherjee', 'Kolkata', '1234567890', 'tanmay@gmail.com', 'tanmay123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
