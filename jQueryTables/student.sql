-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2020 at 03:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `code`, `name`, `province`, `tel`, `email`) VALUES
(1, '57010912669', 'นางสาวอภิญญา  อันละคร', 'มหาสารคาม', '111111', 'abc@gmail.com'),
(2, '61010974007', 'นายทวิวัฒน์ วิเศษศักดิ์', 'กาฬสินธุ์', '111111', 'abc@gmail.com'),
(3, '61010974011', 'นางสาวปิยากร อัตโน', 'ร้อยเอ็ด', '111111', 'abc@gmail.com'),
(4, '61010974015', 'นางสาวพรทิวา สุทธิจักษ์', 'หนองคาย', '111111', 'abc@gmail.com'),
(5, '61010974016', 'นางสาวพัชราภรณ์ พลศิริ', 'มหาสารคาม', '111111', 'abc@gmail.com'),
(6, '61010974025', 'นางสาวอโยธกาล พินิจสอน', 'หนองคาย', '111111', 'abc@gmail.com'),
(7, '62010974001', 'นางสาวกัณฐมณี ชิณปัทม์', 'มหาสารคาม', '111111', 'abc@gmail.com'),
(8, '62010974002', 'นางสาวจิตรลดา สิงห์ทอง', 'เลย', '111111', 'abc@gmail.com'),
(9, '62010974003', 'นางสาวจุฑาวดี โกกอุ่น', 'ขอนแก่น', '111111', 'abc@gmail.com'),
(10, '62010974005', 'นายธนานนท์ พรมบาง', 'มหาสารคาม', '111111', 'abc@gmail.com'),
(11, '62010974007', 'นายนันทวัฒน์ เปลื้องกระโทก', 'นครราชสีมา', '111111', 'abc@gmail.com'),
(12, '62010974008', 'นางสาวปริมอักษร บุญแสง', 'ร้อยเอ็ด', '111111', 'abc@gmail.com'),
(13, '62010974011', 'นางสาวพรพิมล จันทร', 'อุดรธานี', '111111', 'abc@gmail.com'),
(14, '62010974012', 'นายพลชนก ทิพยามาตย์', 'ขอนแก่น', '111111', 'abc@gmail.com'),
(15, '62010974013', 'นางสาวมุกดา แก้วเชียงหวาง', 'อุดรธานี', '111111', 'abc@gmail.com'),
(16, '62010974014', 'นางสาวละลิตตรา นาแพงสอน', 'อุดรธานี', '111111', 'abc@gmail.com'),
(17, '62010974017', 'นางสาวศิริลักษณ์ ขารบ', 'อุดรธานี', '111111', 'abc@gmail.com'),
(18, '62010974018', 'นางสาวสายพิณ มโหฬาร', 'อุดรธานี', '111111', 'abc@gmail.com'),
(19, '62010974019', 'นางสาวสุธัญญา สมธรรม', 'ขอนแก่น', '111111', 'abc@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
