-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2018 at 03:47 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `idNumber` int(10) NOT NULL,
  `mobileNumber` int(10) NOT NULL,
  `hospitaID` int(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `bloodType` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `appointmentType` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`idNumber`, `mobileNumber`, `hospitaID`, `location`, `bloodType`, `date`, `time`, `appointmentType`) VALUES
(0, 0, 101, 'nairobi', '', '2018-09-10', '00:00:00', 'recipient'),
(233133, 7123456, 101, 'nairobi', '', '2018-09-12', '00:00:00', 'recipient'),
(23102356, 705895190, 101, 'NAIROBI', 'A', '2020-09-08', '00:00:00', 'recipient'),
(29160543, 712940267, 101, 'nairobi', 'A+', '2018-09-10', '00:00:00', 'recipient'),
(123456, 701236547, 123, 'location', 'blood', '2018-09-09', '00:00:00', 'recipient'),
(29160543, 712365489, 101, 'Nairobi', 'A+', '2018-09-22', '00:00:00', 'DONOR'),
(23313323, 712940267, 101, 'nairobi', 'B+', '2018-09-20', '00:00:00', 'RECIPIENT'),
(29160543, 712940267, 101, 'Nairobi', 'A+', '2018-09-14', '00:00:00', 'RECIPIENT'),
(29160543, 712940267, 103, 'Nairobi', 'B+', '2018-09-29', '00:00:00', 'RECIPIENT'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-08', '10:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-08', '10:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-08', '10:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-08', '10:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-29', '11:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-29', '11:59:00', 'DONOR'),
(123654, 712940267, 101, 'Nairobi', 'A+', '2018-09-29', '00:56:00', 'RECIPIENT'),
(233133, 705895190, 101, 'Nairobi', 'A+', '2018-09-29', '11:00:00', 'RECIPIENT'),
(233133, 705895190, 101, 'Nairobi', 'A+', '2018-09-29', '11:00:00', 'RECIPIENT'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-15', '12:00:00', 'RECIPIENT'),
(29160543, 712940267, 101, 'Nairobi', 'A+', '2018-09-11', '01:00:00', 'RECIPIENT'),
(29160543, 712940267, 101, 'Nairobi', 'A+', '2018-09-11', '01:00:00', 'RECIPIENT'),
(29160543, 712940267, 101, 'Nairobi', 'A+', '2018-09-10', '01:00:00', 'RECIPIENT'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-29', '12:59:00', 'DONOR'),
(23022555, 705895190, 101, 'Nairobi', 'A+', '2018-09-21', '00:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '13:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-04', '13:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-03', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '13:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-10', '01:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:00:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-11', '01:59:00', 'DONOR'),
(123654, 705895190, 101, 'Nairobi', 'A+', '2018-09-22', '12:59:00', 'RECIPIENT'),
(1234567, 712940267, 101, 'Nairobi', 'A+', '2018-09-22', '00:59:00', 'RECIPIENT'),
(29160543, 705895190, 101, 'Nairobi', 'A+', '2018-09-22', '13:11:00', 'RECIPIENT');

-- --------------------------------------------------------

--
-- Table structure for table `donatedblood`
--

DROP TABLE IF EXISTS `donatedblood`;
CREATE TABLE IF NOT EXISTS `donatedblood` (
  `ID` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `serial` int(100) NOT NULL,
  `hospital` int(100) NOT NULL,
  `ddate` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatedblood`
--

INSERT INTO `donatedblood` (`ID`, `gender`, `serial`, `hospital`, `ddate`) VALUES
(5432147, 'male', 654321, 101, '2018-09-28'),
(123654, 'male', 666645, 101, '2018-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `hospitalID` int(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobileNo` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`hospitalID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospitalID`, `location`, `name`, `mobileNo`, `email`) VALUES
(101, 'nairobi', 'Mbagathi hospital', 714562312, 'mbagathi@gmail.com'),
(103, 'nairobi', 'The nairobi hospital', 714562312, 'test1@tracom.co.ke'),
(108, 'nairobi', 'prikl ltd', 714562312, 'billy@gmail.com'),
(102, 'Kisumu', 'prikl', 714562312, 'billy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `processedblood`
--

DROP TABLE IF EXISTS `processedblood`;
CREATE TABLE IF NOT EXISTS `processedblood` (
  `ID` int(50) NOT NULL,
  `serial` int(50) NOT NULL,
  `hospital` int(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `edate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processedblood`
--

INSERT INTO `processedblood` (`ID`, `serial`, `hospital`, `type`, `status`, `edate`) VALUES
(123456, 482017, 101, 'A+', 'negative', '2018-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `transfusedblood`
--

DROP TABLE IF EXISTS `transfusedblood`;
CREATE TABLE IF NOT EXISTS `transfusedblood` (
  `ID` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `serial` int(100) NOT NULL,
  `hospital` int(100) NOT NULL,
  `tdate` date NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfusedblood`
--

INSERT INTO `transfusedblood` (`ID`, `gender`, `serial`, `hospital`, `tdate`, `type`) VALUES
(23022555, 'male', 492019, 101, '2018-09-29', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `idNumber` int(10) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `idNumber`, `mobile`, `email`, `userType`, `password`) VALUES
('lilian', 'lin', 233133, '0705895190', 'lilian@gmail.com', 'user', 'lilian94'),
('billy', 'liam', 23313323, '+254705895190', 'billy@gmail.com', 'admin', 'admin'),
('linda', 'lin', 123654, '0712365489', 'liliankirito94@gmail.com', 'user', '1234567'),
('ann', 'thiauru', 29160543, '+254724435035', 'ken@gmail.com', 'user', '@lilian94'),
('ann23', 'mwangi', 29160567, '0705895191889', 'TEST@gmail.com', 'user', '@lilian94'),
('ann2345', 'thiauru', 29160549, '+254724435030', 'liliankiri@gmail.com', 'user', '@lilian94'),
('ann12345', 'junga', 29160563, '070589519345', 'liliankir@gmail.com', 'user', '@lilian94'),
('linda', 'mwangi', 12365434, '+254724435045', 'liliankirit4@gmail.com', 'user', 'lilian23'),
('ann', 'junga', 123654356, '+2547244350367', 'lilinkirito94@gmail.com', 'user', 'lilian');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
