-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 06:15 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(10) NOT NULL,
  `csubject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ccompany` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cmessage` text COLLATE utf8_unicode_ci NOT NULL,
  `ctime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `csubject`, `cname`, `cEmail`, `ccompany`, `cmessage`, `ctime`) VALUES
(1, 'sdfdf', 'su', 'surasak.jaro@msu.ac.th', 'sdfsdf', 'asdfasdfasdf', '2017-11-14 01:06:27'),
(2, '1', '1', '1@ss', '1', '1', '2017-11-20 17:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(10) NOT NULL,
  `muser` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mpassword` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `muser`, `mpassword`) VALUES
(1, 'men', '123456'),
(2, 'aaa', '1234'),
(3, 'Tanapat', '123456'),
(4, '57010912600', '123456'),
(5, 'kolkol', '123456'),
(6, 'gotohome', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `id` int(11) NOT NULL,
  `ordersid` varchar(255) NOT NULL,
  `procode` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `ordersid`, `procode`, `unit`, `price`) VALUES
(13, '2017111310002', 'bleach004', 6, 2700),
(14, '2017111310003', 'bleach004', 6, 2700),
(15, '2017111310004', 'bleach005', 3, 1350),
(16, '2017111310004', 'bleach006', 3, 2700),
(17, '2017111310005', 'bleach005', 3, 1080),
(18, '2017111310005', 'bleach006', 3, 2430),
(19, '2017111310006', 'bleach004', 10, 2250),
(20, '2017111310007', 'bleach004', 5, 1125);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordersid` varchar(255) NOT NULL,
  `pricetotal` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `muser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordersid`, `pricetotal`, `tel`, `address`, `name`, `muser`) VALUES
('', 0, '', 'ที่อยู่*', ' ', '57010912600'),
('2017111310001', 0, '', '', '', '0'),
('2017111310002', 2889, 'dsfsdf', 'ที่อยู่*sdfsadfasdf', 'sdfsdf vvvc', '57010912600'),
('2017111310003', 2889, '', 'ที่อยู่*', ' ', '57010912600'),
('2017111310004', 2889, '', 'ที่อยู่*', ' ', '57010912600'),
('2017111310005', 2600, '', 'ที่อยู่*', ' ', '57010912600'),
('2017111310006', 2408, '0639541996', 'ที่อยู่*', 'surasak surasak', ''),
('2017111310007', 1204, 's', 'ที่อยู่*s', 's s', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(255,2) NOT NULL,
  `tproid` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `tproid`, `unit`, `sale`) VALUES
(16, 'dfgdfgdfg', '555555555555', 'product-images/TitanFall003.jpg', 500.00, 23, 0, 90),
(17, '005', 'bleach005', 'product-images/dragonball001.jpg', 450.00, 23, 500, 20),
(18, '006', 'bleach006', 'product-images\\bleach006.jpg', 450.00, 23, 5, 5),
(19, '007', 'bleach007', 'product-images\\bleach007.jpg', 450.00, 23, 6, 4),
(20, '008', 'bleach008', 'product-images\\bleach008.jpg', 450.00, 23, 6, 0),
(21, '009', 'bleach009', 'product-images\\bleach009.jpg', 450.00, 23, 6, 0),
(22, '010', 'bleach010', 'product-images\\bleach010.jpg', 450.00, 23, 6, 0),
(24, 'naruto', 'naruto001', 'product-images/naruto001.jpg', 450.00, 24, 7, 0),
(25, 'onepiece001', 'onepiece001', 'product-images/onepiece001.jpg', 400.00, 25, 10, 0),
(26, 'onepiece002', 'onepiece002', 'product-images/onepiece002.jpg', 500.00, 25, 10, 0),
(27, 'onepiece003', 'onepiece003', 'product-images/onepiece003.jpg', 600.00, 25, 10, 0),
(28, 'attackontitan001', 'attackontitan001', 'product-images/attackontitan001.jpg', 400.00, 33, 10, 0),
(29, 'attackontitan002', 'attackontitan002', 'product-images/attackontitan002.jpg', 500.00, 33, 10, 0),
(30, 'attackontitan003', 'attackontitan003', 'product-images/attackontitan003.jpg', 600.00, 33, 10, 0),
(31, 'TheAvengers001', 'TheAvengers001', 'product-images/TheAvengers001.jpg', 800.00, 39, 20, 0),
(32, 'TheAvengers002', 'TheAvengers002', 'product-images/TheAvengers002.jpg', 1000.00, 39, 10, 0),
(33, 'TheAvengers003', 'TheAvengers003', 'product-images/TheAvengers003.jpg', 900.00, 39, 1200, 0),
(34, 'TitanFall001', 'TitanFall001', 'product-images/TitanFall001.jpg', 3000.00, 46, 10, 0),
(35, 'TitanFall002', 'TitanFall002', 'product-images/TitanFall002.jpg', 7000.00, 46, 20, 0),
(36, 'TitanFall003', 'TitanFall003', 'product-images/TitanFall003.jpg', 5000.00, 46, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `typeproduct`
--

CREATE TABLE `typeproduct` (
  `tproid` int(11) NOT NULL,
  `tproname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeproduct`
--

INSERT INTO `typeproduct` (`tproid`, `tproname`) VALUES
(23, 'cartoon_Bleach'),
(24, 'cartoon_Naruto'),
(25, 'cartoon_One-Piece'),
(26, 'cartoon_Dragon-Ball'),
(33, 'cartoon_Attack-on-Titan'),
(34, 'cartoon_Hunter-X-Hunter'),
(35, 'cartoon_Death-Note'),
(36, 'cartoon_Fullmetal-Alchemist-Brotherhood'),
(37, 'cartoon_Avatar-Last-Airbender'),
(38, 'cartoon_One-Punch-Man'),
(39, 'movie_The-Avengers'),
(40, 'movie_Thor'),
(41, 'movie_Iron-Man'),
(42, 'movie_Captain-Amarica'),
(43, 'movie_The-Hulk'),
(44, 'movie_Spiderman'),
(45, 'movie_Superman'),
(46, 'game_Titan-Fall'),
(47, 'game_Assasin-Creed'),
(48, 'game_Residen-Evil'),
(49, 'vehicle_motercycle'),
(50, 'vehicle_car');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordersid`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typeproduct`
--
ALTER TABLE `typeproduct`
  ADD PRIMARY KEY (`tproid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `typeproduct`
--
ALTER TABLE `typeproduct`
  MODIFY `tproid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
