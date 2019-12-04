-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2016 at 02:24 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rtms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '4042');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

DROP TABLE IF EXISTS `dashboard`;
CREATE TABLE IF NOT EXISTS `dashboard` (
  `username` text NOT NULL,
  `train` text NOT NULL,
  `sourse` text NOT NULL,
  `destination` text NOT NULL,
  `date` text NOT NULL,
  `sit` text NOT NULL,
  `cost` text NOT NULL,
  `bank` text NOT NULL,
  `ac` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`username`, `train`, `sourse`, `destination`, `date`, `sit`, `cost`, `bank`, `ac`, `id`) VALUES
('salehin6', 'Dhumketu Express', 'Dhaka', 'Rajshahi', '1234', 'VIP 2', '1600', 'DBBL', 'acn', 2),
('Dider', 'Dhumketu Express', 'Dhaka', 'Rajshahi', '1.09.14-9am Dhaka-Rajshahi and 9pm Rajshahi to Dhaka ', 'Normal 1', '401', 'DBBL', 'acn', 3),
('Dider', 'Dhumketu Express', 'Dhaka', 'Rajshahi', '20.2.2016-9am Dhaka-Rajshahi and 9pm Rajshahi to Dhaka ', 'Normal 1', '401', 'DBBL', '4041', 4),
('Gayle', 'Sundorban Express', 'Dhaka', 'Khulna', '10.08.2016-7.00pm khulna to Dhaka 7.00am Dhaka to khulna', 'VIP 3', '2997', 'PayPal', '3131242423142341', 5),
('salehin6', 'Sundorban Express', 'Dhaka', 'Khulna', '1/2/2016-7.00pm khulna to Dhaka 7.00am Dhaka to khulna', 'VIP 1', '999', 'DBBL', '420420', 6);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `name`, `description`) VALUES
(1, 'Dhaka', 'xoss'),
(2, 'Rajshahi', 'beautiful Station'),
(3, 'Khulna', 'beautiful Station'),
(5, 'Gazipur', 'beautiful Station'),
(9, 'Sylet', 'Awesome');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

DROP TABLE IF EXISTS `train`;
CREATE TABLE IF NOT EXISTS `train` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `place1` text NOT NULL,
  `place2` text NOT NULL,
  `route` text NOT NULL,
  `time` text NOT NULL,
  `vip` int(11) NOT NULL,
  `normal` int(11) NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `name`, `place1`, `place2`, `route`, `time`, `vip`, `normal`) VALUES
(4, 'Sundorban Express', 'Khulna', 'Dhaka', 'Khulna-Kustia-Tangail-Dhaka', '7.00pm khulna to Dhaka 7.00am Dhaka to khulna', 999, 599),
(5, 'Mohanagar Goduli', 'Chittagong', 'Dhaka', 'Chittagong-Dhaka', '12.15pm Chittagong-Dhaka 12.15am Dhaka-Chittagong', 1599, 899),
(6, 'Upukol Express', 'Noakhali', 'Dhaka', 'Noakhali-Dhaka', '7am Noakhali-Dhaka 7pm Noakhali-Dhaka', 799, 499),
(7, 'Agnibina Express', 'Dhaka', 'Tarakandi', 'Dhaka-Tarakandi', '12.00pm Dhaka-Tarakandi 7.00 Tarakandi-Dhaka', 749, 449);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `fullname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `bankname` text NOT NULL,
  `acn` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`fullname`, `username`, `address`, `mobile`, `bankname`, `acn`, `password`, `email`) VALUES
('shoaeb salehin', 'salehin6', 'dhaka', '01680237961', 'DBBL', '420420', '022123', 'shoaeb4042@gmail.com'),
('Dider', 'Dider', 'Dhaka', '01710454545', 'DBBL', '4041', 'ddr.srn@gmail.com', 'ddr.srn@gmail.com'),
('Nayem Miah', 'miah', 'Ghana', ' 024 222 3344', 'SCB', '3131242423142343', 'miah', 'nayem3469@gmail.com'),
('Chis Gayle', 'Gayle', 'WI', '8769272779', 'PayPal', '3131242423142341', '1234', 'gayle@yahoo.com'),
('Sadia Enterprise', 'Sadia', 'Uganda', '25614329847', 'City Bank', '313124242314', '1234', 'nayeem3469@gmail.com'),
('S. salehin', 'salehin', 'Keniya', '78123414543', 'AB', '3131242423142', '1234', 'shoaeb.code71@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
