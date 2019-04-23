-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2018 at 05:25 PM
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
('Tanmay', 'Mukherjee', '11111111', 'bangalore', 'Admin1@gmail.com', 'admin1'),
('Dhruv', 'Kumar', '2222222222', 'kolkata', 'Admin2@gmail.com', 'admin2'),
('Admin', '3', '3333333333', 'mumbai', 'Admin3@gmail.com', 'Admin3'),
('Admin', '4', '4444444444', 'Hyderabad', 'Admin4@gmail.com', 'admin4');

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
(21, 'Tanmay', 'Mukherjee', 'tanmay@gmail.com', '8016436125', 'Confirmed'),
(20, 'Dhruv', 'Kumar', 'dhruv@gmail.com', '1234567890', 'Confirmed'),
(19, 'Eti', 'Mukherjee', 'eti@gmail.com', '9800086858', 'Confirmed'),
(22, 'Eti', 'Mukherjee', 'eti@gmail.com', '9800086858', 'Confirmed'),
(30, 'Eti', 'Mukherjee', 'eti@gmail.com1', '9800086858', 'Pending'),
(28, 'Eti', 'Mukherjee', 'eti@gmail.com1', '9800086858', 'Pending'),
(29, 'Eti', 'Mukherjee', 'eti@gmail.com1', '9800086858', 'Pending'),
(32, 'amrit', 'shah', 'amrit@gmail.com', '9800086858', 'Pending'),
(33, 'amrit', 'shah', 'amrit@gmail.com', '9800086858', 'Pending'),
(34, 'amritaa', 'shah', 'amrit@gmail.com', '9800086858', 'Pending');

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

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `uid`, `pfname`, `pmname`, `plname`, `dob`, `gender`, `age`, `poccupation`, `din`, `dout`, `under`, `disease`, `mdcn1`) VALUES
(1, 'tanmay@gmail.com', 'lalita', 'kumari', 'DAS', '2014-04-16', 'f', '26', 'yyy', '2018-11-06', '2018-11-07', 'b.s.das', 'feever', 'aa'),
(2, 'tanmay@gmail.com', 'sunam', 'kumar', 'pal', '2014-04-16', 'm', '20', 'stdent', '2018-11-06', '2018-11-07', 'b.s.das', 'feever', 'rd10'),
(3, 'dhruv@gmail.com', 'dhruv', 'kumar', '88', '2016-12-21', 'm', '40', 'farmer', '2018-08-06', '2018-09-06', 'a.ghosh', 'bike Accident', 'elestro 10'),
(4, 'dhruv@gmail.com', 'sushmita', 'p', 'halder', '1984-12-21', 'f', '35', 'house wife', '2018-08-06', '2018-09-06', 'a.ghosh', 'pregnent', 'abcd200'),
(5, 'dhruv@gmail.com', 'sushmita', 'p', 'ghosh', '1984-12-21', 'f', '35', 'house wife', '2018-08-06', '2018-09-06', 'a.ghosh', 'pregnent', 'abcd200'),
(6, 'tanmay@gmail.com', 'sunam', 'kumar', 'pal', '2014-04-16', 'm', '20', 'stdent', '2018-11-06', '2018-11-07', 'b.s.das', 'feever', 'rd10'),
(7, 'dhruv@gmail.com', 'md', 'abdul', 'sekh', '2016-12-21', 'm', '40', 'farmer', '2018-08-06', '2018-09-06', 'a.ghosh', 'bike Accident', 'elestro 10'),
(8, 'dhruv@gmail.com', 'sushmita', 'p', 'halder', '1984-12-21', 'f', '35', 'house wife', '2018-08-06', '2018-09-06', 'a.ghosh', 'pregnent', 'abcd200'),
(9, 'tanmay@gmail.com', 'lalita', 'kumari', 'das', '2014-04-16', 'f', '25', 'stdent', '2018-11-06', '2018-11-07', 'bbbbbb.s.das', 'feever', 'abcd200 trg'),
(10, 'dhruv@gmail.com', 'md', 'abdul', 'sekh', '2016-12-21', 'm', '40', 'farmer', '2018-08-06', '2018-09-06', 'a.ghosh', 'bike Accident', 'elestro 10'),
(11, 'tanmay@gmail.com', 'sunam', 'kumar', 'pal', '2014-04-16', 'm', '20', 'stdent', '2018-11-06', '2018-11-07', 'b.s.das', 'feever', 'rd10'),
(12, 'tanmay@gmail.com', 'lalita', '', 'das', '2014-04-16', 'f', '25', 'stdent', '2018-11-06', '2018-11-07', 'b.s.das', 'feever', NULL),
(13, 'tanmay@gmail.com', 'sunam', 'kumar', 'pal', '2014-04-16', 'm', '20', 'stdent', '2018-11-06', '2018-11-07', 'b.s.das', 'feever', 'rd10'),
(14, 'tanmay@gmail.com', 'lalita', '', 'das', '2014-04-16', 'f', '25', 'stdent', '2018-11-06', '2018-11-07', 'b.s.das', 'feever', NULL),
(17, 'tanmay@gmail.com', 'tanamy', 'tanmay', 'mukherjee', '11-11-14', 'm', '22', 'stdnt', '12-02-14', '12-02-14', 'dr.', 'nothing', 'mmm'),
(18, 'tanmay@gmail.com', 'Dhruv', 'tanmay', 'Kumar', '2018-11-16', 'm', '35', 'student', '2018-11-16', '2018-11-16', 'tttt', 'feever', 'tttt'),
(19, 'tanmay@gmail.com', 'Tanmay', 'tanmay', 'Mukherjee', '2018-11-16', 'm', '40', 'student', '2018-11-16', NULL, NULL, 'feever', NULL),
(20, 'amrit@gmail.com', 'Tanmay', 'tanmay', 'Mukherjee', '2018-11-16', 'm', '40', 'student', '2018-11-16', '2018-11-17', 'rr', 'feever', 'abcd200'),
(21, 'tanmay@gmail.com', 'Eti', 'tanmay', 'Mukherjee', '2018-11-16', 'f', '25', 'student', '2018-11-16', NULL, NULL, 'feever', NULL),
(22, 'tanmay@gmail.com', 'amrit', 'tanmay', 'shah', '2005-05-21', 'm', '25', 'student', '2013-03-14', '2018-11-18', 'bbbbbb.s.das', 'feever', 'elestro 10'),
(23, 'tanmay@gmail.com', 'Tanmay', '', 'Mukherjee', '1980-11-20', 'm', '38', 'Computer Engineer', '2018-11-20', '2018-11-21', 'Dr.Tanmay', 'chichen ghunya', 'TANMAY');

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
('Tanmay', 'Mukherjee', 'Kolkata', '8016436125', 'tanmay@gmail.com', 'tanmay123'),
('Dhruv', 'Kumar', 'Bihar', '8016436126', 'Dhruv@gmail.com', 'dhruv123'),
('Eti', 'Mukherjee', 'Kolkata', '9800085868', 'eti@gmail.com', 'eti@123'),
('Tanmay', 'Mukherjee', 'hingalganj', '4512665456', 'rana@gmail.com', 'abcdefghijklmnopqrstuvwxyz11'),
('Admin', 'HR', 'Localhost', '0000000000', 'A@gmail.com', '123'),
('abcd', 'xyz', '3gh4', '1234567890', 'aa@gmai', '11'),
('gobinda', 'humagain', 'nepal', '45577447', 'gobin@gmail.com', '1111'),
('dd', 'dd', 'ff', '44', 'gobi@gmail.com', '45'),
('tt', 'tt', 'tt', '55', 't@t.t', 't'),
('jj', 'kk', 'll', '55', '55@55.com', '55'),
('tyhjy', 'kjhhjj', 'hjj', '66', '66@66.com', '66'),
('asdfghn', 'sdfvgb', 'asdfgh', '77', '77@77.com', '77'),
('yy', 'tt', 'tttttt', '888', '88@88.com', '88'),
('tarun', 'mondal', 'delhi', '9821546975', 'a1@gmail.com', '456'),
('amrit', 'shah', 'nepal', '555555', 'amrit@gmail.com', 'amrit');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
