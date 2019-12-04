-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2019 at 06:16 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.7

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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `username` text NOT NULL,
  `train` text NOT NULL,
  `sourse` text NOT NULL,
  `destination` text NOT NULL,
  `date` text NOT NULL,
  `sit` text NOT NULL,
  `cost` text NOT NULL,
  `bank` text NOT NULL,
  `ac` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `train` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `place1` text NOT NULL,
  `place2` text NOT NULL,
  `route` text NOT NULL,
  `time` text NOT NULL,
  `vip` int(11) NOT NULL,
  `normal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `user_info` (
  `fullname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `bankname` text NOT NULL,
  `acn` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`fullname`, `username`, `address`, `mobile`, `bankname`, `acn`, `password`, `email`) VALUES
('Amimul Ehshan', 'amims71', 'dhaka', '01752804620', 'DBBL', '123123', '123', 'amims71@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
