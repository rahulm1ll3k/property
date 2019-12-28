-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 07:19 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `url` varchar(30000) NOT NULL,
  `location` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `u_id` int(100) NOT NULL,
  `stats` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc`, `url`, `location`, `size`, `u_id`, `stats`) VALUES
(11, 'sasad', ' adssad sad sad sada', 'firmland.jpg', 'baridhara', '1300', 1, '2'),
(12, 'fdsadsa', ' sdads sad sa dsa dads ', 'cs03.jpg', 'Boshundhara', '2444', 1, '1'),
(13, 'fdsaf', ' sadsg  f sdaf dsf dsf dsf sgf dsg ds\r\nrtfsdrgtdgfdg', '2010-04-18__mt01.jpg', 'fdsf', '2333', 1, '1'),
(14, 'adsads', ' dsd fd dsf ds', '8.jpg', 'asdasdsad', '1200', 6, '1'),
(15, 'dssad', ' dsasadsadsadasd', '13558373911720584769.jpg', 'sadsad', '1500', 6, '1'),
(16, 'erwer', ' safddsf fd dsfds f', 'zP42AcA.png', 'dfdsf', '1700', 6, '1'),
(17, 'ferwgter', ' ergergrg', 'women-look-windows-their-house-bandarban-bangladesh-february-unidentified-traditional-marma-hill-tribe-february-48103703.jpg', 'ergerger', '1700', 6, '1'),
(39, 'sdfasdf', ' sadfasdf', 'e60e606ccb03f459920dd8d0d7122a37--wallpaper-rock-and-roll-rock-wallpaper-iphone.jpg', 'sadfsadf', 'sadfasdf', 1, '1'),
(40, 'sdfasdf', ' ', 'Untitled-1.png', 'sadfsadf', '1400', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `u_info`
--

CREATE TABLE `u_info` (
  `id` int(11) NOT NULL,
  `u_first` varchar(100) NOT NULL,
  `u_last` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_gnd` int(100) NOT NULL,
  `u_mob` varchar(100) NOT NULL,
  `u_comp` varchar(100) NOT NULL,
  `u_finance` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_info`
--

INSERT INTO `u_info` (`id`, `u_first`, `u_last`, `u_email`, `u_pass`, `u_gnd`, `u_mob`, `u_comp`, `u_finance`) VALUES
(1, 'rahul', 'mallik', 'admin@gmail.com', 'admin', 1, '01676877390', 'private', 4999500),
(5, 'a', 'b', 'admin@yahoo.com', 'admin', 2, '01676877390', 'none', NULL),
(6, 'rahul', 'mallik', 'mallik.ashraf@ymail.com', 'admin', 2, '0153579241', 'developers', NULL),
(7, 'rahul', 'mallik', 'mallikm1ll3k@gmail.org', 'admin', 1, '01676877390', 'private', 0),
(8, 'rahul', 'mallik', 'rahul@gmail.com', 'admin', 1, '01676877390', 'private', 9500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_info`
--
ALTER TABLE `u_info`
  ADD PRIMARY KEY (`id`,`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `u_info`
--
ALTER TABLE `u_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
