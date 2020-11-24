-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2020 at 12:09 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `mid` int(6) NOT NULL,
  `adname` varchar(100) NOT NULL,
  `aduser` varchar(100) NOT NULL,
  `adpass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mid`, `adname`, `aduser`, `adpass`) VALUES
(1, 'Sirilak karob', 'admin', '123456789'),
(2, 'lalittra Napangson', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(10) NOT NULL,
  `csubject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cmessage` text COLLATE utf8_unicode_ci NOT NULL,
  `ctime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `csubject`, `cname`, `cEmail`, `cmessage`, `ctime`) VALUES
(1, 'Sukino', 'Tom', 'Kittipol.w@acc.msu.ac.th', 'Hello MSU', '2017-11-14 01:06:27'),
(3, 'fcbc', 'dfvd', 'lalittra1998@gmail.com', 'fbf', '2020-11-01 15:24:12'),
(4, 'sssss', 'gggggggggggggg', 'lalittra1998@gmail.com', 'sssss', '2020-11-01 15:24:30'),
(5, 'fvdsv', 'vdvv', 'l.o.v.e.jane@thaimail.com', 'vzdv', '2020-11-01 18:04:24'),
(6, 'fern', 'regreg', 'gsege', '0611590710', '2020-11-01 18:15:03'),
(7, 'fvdsv', 'vdvv', 'Sirilakkarob@gmail.com', 'rgesfg', '2020-11-03 18:51:13'),
(8, 'fvdsv', 'fern', '62010974017@msu.ac.th', 'fvfdxb', '2020-11-03 18:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(10) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `muser` varchar(50) NOT NULL,
  `mpass` varchar(50) NOT NULL,
  `maddr` varchar(100) NOT NULL,
  `mphone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `muser`, `mpass`, `maddr`, `mphone`) VALUES
(1, 'Lalittra Napangson', 'fern', '1234', 'เลขที่ 163 หมู่ 10 ตำบลท่าลี่ อำเภอกุมภวาปี จังหวัดอุดรธานี 41110', '0611590710'),
(5, 'Sirilak Karob', 'pum', '1234', 'เลขที่ 148 หมู่ 4 ตำบลบ้านธาตุ อำเภอเพ็ญ จังหวัดอุดรธานี 41150', '0610585596'),
(9, 'chitrada singthong', 'form', '1234', 'เลขที่ 113 หมู่ 14 ตำบลศรีฐาน อำเภอภูกระดึง จังหวัดเลย 42180', '0621712552'),
(10, 'Juthawadee Kokaun', 'Aui', '1234', 'เลขที่ 51 หมู่4 ตำบลแดงใหญ่ อำเภอเมือง จังหวัดขอนแก่น 40000', '0994742810');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL,
  `member_id` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `ototal`, `odate`, `member_id`) VALUES
(0000068, 13950, '2020-11-03 17:30:43', '10'),
(0000069, 12250, '2020-11-03 18:39:09', '1'),
(0000066, 6350, '2020-11-03 17:29:09', '1'),
(0000067, 7050, '2020-11-03 17:29:29', '5');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(6) NOT NULL,
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(23, 0000010, 1060, 1),
(22, 0000009, 1010, 1),
(21, 0000009, 1042, 1),
(20, 0000009, 1060, 1),
(19, 0000009, 1002, 2),
(24, 0000010, 1006, 1),
(26, 0000010, 1038, 1),
(25, 0000010, 1008, 1),
(27, 0000011, 1006, 1),
(28, 0000011, 1031, 1),
(29, 0000012, 1003, 2),
(30, 0000013, 1001, 1),
(31, 0000013, 1006, 1),
(32, 0000014, 1003, 1),
(33, 0000015, 1004, 1),
(34, 0000015, 1061, 1),
(35, 0000016, 1006, 1),
(36, 0000017, 1018, 1),
(37, 0000017, 1042, 1),
(38, 0000018, 1003, 1),
(39, 0000019, 1002, 1),
(40, 0000020, 1003, 1),
(41, 0000020, 1006, 1),
(42, 0000021, 1002, 1),
(43, 0000021, 1007, 1),
(44, 0000022, 1002, 1),
(45, 0000022, 1007, 1),
(46, 0000023, 1002, 1),
(47, 0000024, 1003, 1),
(48, 0000024, 1006, 1),
(49, 0000024, 1008, 1),
(50, 0000025, 1019, 1),
(51, 0000026, 1002, 1),
(52, 0000027, 1006, 1),
(53, 0000028, 1023, 1),
(54, 0000029, 1002, 1),
(55, 0000030, 1004, 1),
(56, 0000031, 1007, 1),
(57, 0000032, 1030, 1),
(58, 0000033, 1006, 1),
(59, 0000034, 1010, 1),
(60, 0000035, 1010, 1),
(61, 0000036, 1002, 1),
(62, 0000037, 1073, 1),
(63, 0000038, 1002, 1),
(64, 0000039, 1002, 5),
(65, 0000040, 1001, 1),
(66, 0000041, 1019, 1),
(67, 0000042, 1005, 1),
(68, 0000043, 1002, 1),
(69, 0000044, 1001, 1),
(70, 0000045, 1061, 1),
(71, 0000046, 1006, 1),
(72, 0000047, 1002, 1),
(73, 0000047, 1060, 1),
(74, 0000047, 1037, 1),
(75, 0000047, 1007, 1),
(76, 0000048, 1002, 1),
(77, 0000049, 1006, 2),
(78, 0000049, 1060, 1),
(79, 0000049, 1037, 1),
(80, 0000049, 1003, 1),
(81, 0000049, 1002, 1),
(82, 0000050, 1006, 1),
(83, 0000051, 1006, 1),
(84, 0000052, 1002, 1),
(85, 0000053, 1002, 1),
(86, 0000054, 1060, 1),
(87, 0000055, 1009, 1),
(88, 0000055, 1003, 1),
(89, 0000056, 1007, 1),
(90, 0000057, 1002, 1),
(91, 0000058, 1002, 1),
(92, 0000059, 1062, 1),
(93, 0000060, 1011, 1),
(94, 0000060, 1006, 1),
(95, 0000061, 1003, 1),
(96, 0000062, 1010, 1),
(97, 0000063, 1002, 2),
(98, 0000064, 1002, 1),
(99, 0000065, 1006, 1),
(100, 0000066, 1006, 1),
(101, 0000067, 1002, 1),
(102, 0000068, 1006, 1),
(103, 0000068, 1060, 1),
(104, 0000069, 1061, 1),
(105, 0000069, 1014, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(4) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` int(6) NOT NULL,
  `p_picture` varchar(200) NOT NULL,
  `p_type` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `color`, `p_detail`, `p_price`, `p_picture`, `p_type`) VALUES
(1001, 'Iconic Link Unitone', 'Rose Gold', 'Iconic Link Unitone นาฬิกาที่มีสีแบบโมโนโทนชิ้นแรกของเรา ที่มีสายนาฬิกาสแตนเลสสุดหรูที่มาพร้อมกับหน้าปัดสีเดียวกันคงตวามเรียบหรูไร้ที่ติ มีให้เลือกทั้งแบบาแตนเลสสตีลสีเงินเงางาม สีโรสโกลด์หรูหรา หรือสีทองสุดโมเดิร์น ผลงานชิ้นใหม่ที่เข้ามาเพิ่มสีสันให้กับคอลเลคชั่น Iconic Link ที่ไม่เหมือนใครชิ้นนี้ทำให้ Unitone เป็นนาฬิกาที่โดดเด่นสะดุดตา และสามารถมิกซ์แอนแมชให้เข้ากับทุกโอกาส', 7050, '1001.jpg', 4),
(1002, 'Iconic Link Unitone', 'Silver', 'Iconic Link Unitone นาฬิกาที่มีสีแบบโมโนโทนชิ้นแรกของเรา ที่มีสายนาฬิกาสแตนเลสสุดหรูที่มาพร้อมกับหน้าปัดสีเดียวกันคงตวามเรียบหรูไร้ที่ติ มีให้เลือกทั้งแบบาแตนเลสสตีลสีเงินเงางาม สีโรสโกลด์หรูหรา หรือสีทองสุดโมเดิร์น ผลงานชิ้นใหม่ที่เข้ามาเพิ่มสีสันให้กับคอลเลคชั่น Iconic Link ที่ไม่เหมือนใครชิ้นนี้ทำให้ Unitone เป็นนาฬิกาที่โดดเด่นสะดุดตา และสามารถมิกซ์แอนแมชให้เข้ากับทุกโอกาส ', 7050, '1002.jpg', 4),
(1003, 'Iconic Link Unitone', 'Gold', 'Iconic Link Unitone นาฬิกาที่มีสีแบบโมโนโทนชิ้นแรกของเรา ที่มีสายนาฬิกาสแตนเลสสุดหรูที่มาพร้อมกับหน้าปัดสีเดียวกันคงตวามเรียบหรูไร้ที่ติ มีให้เลือกทั้งแบบาแตนเลสสตีลสีเงินเงางาม สีโรสโกลด์หรูหรา หรือสีทองสุดโมเดิร์น ผลงานชิ้นใหม่ที่เข้ามาเพิ่มสีสันให้กับคอลเลคชั่น Iconic Link ที่ไม่เหมือนใครชิ้นนี้ทำให้ Unitone เป็นนาฬิกาที่โดดเด่นสะดุดตา และสามารถมิกซ์แอนแมชให้เข้ากับทุกโอกาส ', 7050, '1003.jpg', 4),
(1004, 'ICONIC LINK LUMINE', 'Egg shell', 'Lumine นาฬิกาหน้าปัดสีขาวไข่ไก่ที่ประดับด้วยคริสตัลระยิบระยับจาก Swarovski® ดีไซน์สุดพิเศษที่เพิ่มความเปล่งประกายและแปลกใหม่ให้กับหน้าปัดแบบขีดที่เป็นเอกลักษณ์ของเรา เพื่อให้ได้ลุคของสีทูโทนที่จะเติมเต็มลุคของคุณให้หรูหราอย่างมีระดับ นาฬิการุ่น Lumine จะมีความพิเศษอยู่ที่สายนาฬิกาซึ่งเป็นสายแบบสแตนเลสสีเงินที่ตัดกับสายและตัวเรือนสีโรสโกลด์ การผสมผสานที่ไม่เหมือนใครนี้จะทำให้นาฬิกามีเอกลักษณ์และเต็มไปด้วยหรูหรา', 9150, '1004.jpg', 4),
(1005, 'ICONIC LINK', 'Egg shell', 'ความโมเดินที่แฝงไปด้วยความคลาสสิคที่สมกับการรอคอยกับ ICONIC LINK ความพิถีพิถันและประณีตหลังจากที่รอมาอย่างยาวนาน Iconic Link เสนอนาฬิกาสายสแตนเลสแบบสามข้อต่อสุดหรู แต่ละชิ้นประกอบด้วยข้อต่อแสตนเลสรูปแบบเพรียวบางหรูหราที่สรรสร้างขึ้นมาอย่างเป็นเอกลักษณ์ ทำให้ตัวเรือนและข้อต่อสามารถเชื่อมต่อเป็นหนึ่งเดียวอย่างไร้รอยต่อ\r\nสายนาฬิกาข้อกลางที่ยกสูงขึ้นสร้างความโดดเด่นและสะท้อนถึงโครงสร้างผสานเข้ากับตัวเรือนอย่างกลมกลืน ในขณะที่หน้าปัดของนาฬิกามาพร้อมกับเส้นขีดแสดงชั่วโมงอันเป็นเอกลักษณ์ของเราก็ได้รับการออกแบบให้มีโครงร่างใหม่ทันสมัยยิ่งขึ้น\r\nIconic Link มีให้เลือกในรูปแบบของสแตนเลสสตีล (316L) ในสีที่มาในสีเงินเงางามหรือและสีโรสโกลสุดหรู\r\nปรับขนาดของนาฬิกาให้เหมาะพอดีกับขนาดของข้อมือได้ที่ร้านนาฬิกาใกล้บ้านของคุณ', 6350, '1005.jpg', 4),
(1006, 'ICONIC LINK', '6350', 'ความโมเดินที่แฝงไปด้วยความคลาสสิคที่สมกับการรอคอยกับ ICONIC LINK ความพิถีพิถันและประณีตหลังจากที่รอมาอย่างยาวนาน Iconic Link เสนอนาฬิกาสายสแตนเลสแบบสามข้อต่อสุดหรู แต่ละชิ้นประกอบด้วยข้อต่อแสตนเลสรูปแบบเพรียวบางหรูหราที่สรรสร้างขึ้นมาอย่างเป็นเอกลักษณ์ ทำให้ตัวเรือนและข้อต่อสามารถเชื่อมต่อเป็นหนึ่งเดียวอย่างไร้รอยต่อ\r\nสายนาฬิกาข้อกลางที่ยกสูงขึ้นสร้างความโดดเด่นและสะท้อนถึงโครงสร้างผสานเข้ากับตัวเรือนอย่างกลมกลืน ในขณะที่หน้าปัดของนาฬิกามาพร้อมกับเส้นขีดแสดงชั่วโมงอันเป็นเอกลักษณ์ของเราก็ได้รับการออกแบบให้มีโครงร่างใหม่ทันสมัยยิ่งขึ้น\r\nIconic Link มีให้เลือกในรูปแบบของสแตนเลสสตีล (316L) ในสีที่มาในสีเงินเงางามหรือและสีโรสโกลสุดหรู\r\nปรับขนาดของนาฬิกาให้เหมาะพอดีกับขนาดของข้อมือได้ที่ร้านนาฬิกาใกล้บ้านของคุณ', 6350, '1006.jpg', 4),
(1007, 'ICONIC LINK', 'Egg shell', 'ความโมเดินที่แฝงไปด้วยความคลาสสิคที่สมกับการรอคอยกับ ICONIC LINK ความพิถีพิถันและประณีตหลังจากที่รอมาอย่างยาวนาน Iconic Link เสนอนาฬิกาสายสแตนเลสแบบสามข้อต่อสุดหรู แต่ละชิ้นประกอบด้วยข้อต่อแสตนเลสรูปแบบเพรียวบางหรูหราที่สรรสร้างขึ้นมาอย่างเป็นเอกลักษณ์ ทำให้ตัวเรือนและข้อต่อสามารถเชื่อมต่อเป็นหนึ่งเดียวอย่างไร้รอยต่อ\r\nสายนาฬิกาข้อกลางที่ยกสูงขึ้นสร้างความโดดเด่นและสะท้อนถึงโครงสร้างผสานเข้ากับตัวเรือนอย่างกลมกลืน ในขณะที่หน้าปัดของนาฬิกามาพร้อมกับเส้นขีดแสดงชั่วโมงอันเป็นเอกลักษณ์ของเราก็ได้รับการออกแบบให้มีโครงร่างใหม่ทันสมัยยิ่งขึ้น\r\nIconic Link มีให้เลือกในรูปแบบของสแตนเลสสตีล (316L) ในสีที่มาในสีเงินเงางามหรือและสีโรสโกลสุดหรู\r\nปรับขนาดของนาฬิกาให้เหมาะพอดีกับขนาดของข้อมือได้ที่ร้านนาฬิกาใกล้บ้านของคุณ', 6350, '1007.jpg', 4),
(1008, 'ICONIC LINK', 'Black', 'ความโมเดินที่แฝงไปด้วยความคลาสสิคที่สมกับการรอคอยกับ ICONIC LINK ความพิถีพิถันและประณีตหลังจากที่รอมาอย่างยาวนาน Iconic Link เสนอนาฬิกาสายสแตนเลสแบบสามข้อต่อสุดหรู แต่ละชิ้นประกอบด้วยข้อต่อแสตนเลสรูปแบบเพรียวบางหรูหราที่สรรสร้างขึ้นมาอย่างเป็นเอกลักษณ์ ทำให้ตัวเรือนและข้อต่อสามารถเชื่อมต่อเป็นหนึ่งเดียวอย่างไร้รอยต่อ\r\nสายนาฬิกาข้อกลางที่ยกสูงขึ้นสร้างความโดดเด่นและสะท้อนถึงโครงสร้างผสานเข้ากับตัวเรือนอย่างกลมกลืน ในขณะที่หน้าปัดของนาฬิกามาพร้อมกับเส้นขีดแสดงชั่วโมงอันเป็นเอกลักษณ์ของเราก็ได้รับการออกแบบให้มีโครงร่างใหม่ทันสมัยยิ่งขึ้น\r\nIconic Link มีให้เลือกในรูปแบบของสแตนเลสสตีล (316L) ในสีที่มาในสีเงินเงางามหรือและสีโรสโกลสุดหรู\r\nปรับขนาดของนาฬิกาให้เหมาะพอดีกับขนาดของข้อมือได้ที่ร้านนาฬิกาใกล้บ้านของคุณ', 6350, '1008.jpg', 4),
(1009, 'PETITE MELROSE', 'Egg shell', 'Petite Melrose มาในหน้าปัดสีขาวไข่ไก่และสายสแตนเลสแบบถักสีโรสโกลด์อันสวยสง่า จึงเพิ่มความงามให้กับเสื้อผ้าทุกชิ้นของคุณ และสร้างอารมณ์และจิตใจให้เบิกบาน', 5150, '1009.jpg', 2),
(1010, 'PETITE MELROSE', 'black', 'Petite Melrose มาในหน้าปัดสีดำที่เน้นความสง่าอย่างคลาสสิค แต่เสริมรายละเอียดด้วยไอแห่งความสดชื่น นาฬิกานี้พร้อมเปลี่ยนโฉมคุณจากนักธุรกิจผู้เก่งกล้าให้เป็นสาวสังคมในงานปาร์ตี้สุดหรูได้ในพริบตา', 5050, '1010.jpg', 2),
(1011, 'PETITE EVERGOLD', 'Egg shell', 'Petite Evergold 28 เป็นผลงานชิ้นใหม่ล่าสุดของเราจากคอลเลคชั่น Petite ที่มาพร้อมกับหน้าปัดสีขาวนวลและสายสแตนเลสแบบถักสุดคลาสสิคในเฉดสีทองอ่อน ยกระดับลุคของคุณให้มีออร่าด้วยเครื่องประดับสีทองที่สามารถใส่ให้เข้ากับเสื้อผ้าทุกชิ้นได้อย่างไร้ที่ติ', 5150, '1011.jpg', 2),
(1012, 'PETITE EVERGOLD', 'Black', 'Petite Evergold 28 เป็นผลงานชิ้นใหม่ล่าสุดของเราจากคอลเลคชั่น Petite ที่มาพร้อมกับหน้าปัดสีดำและสายสแตนเลสแบบถักสุดคลาสสิคในเฉดสีทองอ่อน สายสแตนเลสแบบถักเพิ่มลุคให้ดูทันสมัยด้วยสายนาฬิกาสีทองในขณะที่หน้าปัดสีดำช่วยสร้างความสวยคมดูสง่า', 5150, '1012.jpg', 2),
(1103, 'PETITE STERLING', 'Egg shell', 'Petite Sterling ที่กลายเป็นนาฬิกาสุดคลาสสิคอย่างแท้จริงไปแล้ว เผยโฉมด้วยหน้าปัดสีขาว ลูกเล่นร่วมสมัย และลุคที่สะอาดสดชื่น นาฬิกาที่เก๋ไก๋ ทันสมัย และท้ากาลเวลาในเรือนเดียว', 5150, '1013.jpg', 2),
(1014, 'PETITE STERLING', 'Black', 'นาฬิกา Petite Sterling กับหน้าปัดสีดำเป็นการผสมผสานที่โดดเด่นระหว่างสไตล์และเอกลักษณ์ เป็นคำประกาศแก่นแท้ของดีไซน์เนอร์และเป็นนาฬิกาที่เหมาะสมกับทุกโอกาส', 5150, '1014.jpg', 2),
(1015, 'PETITE ASHFIELD', 'Black', 'ก้าวสู่ฤดูกาลใหม่ด้วยแฟชั่นสวยหรูท้ากาลเวลากับ Petite Ashfield นาฬิกาที่บางเฉียบทอดตัวลงบนข้อมืออย่างบางเบา ด้วยสายถักสแตนเลสสีดำแบบด้านและหน้าปัดสีดำสุดลึกลับซับซ้อน พร้อมรายละเอียดพิเศษให้เลือกในสีโรสโกลด์หรือสีเงิน', 5150, '1015.jpg', 2),
(1016, 'PETITE ROSEWATER', 'Egg shell', 'Petite Rosewater หน้าปัดสีขาวนวลและสายนาฬิกา NATO สีชมพูสุดสวย มอบลุคที่เรียบง่ายแต่สะดุดตาด้วยสีที่สดใส เหมาะสำหรับฤดูใบไม้ผลิ สายสีชมพูอ่อนพร้อมกรอบหน้าปัดนาฬิกาสีโรสโกลด์สุดทันสมัยทำให้นาฬิกา Rosewater เป็นเครื่องประดับที่เข้ามาช่วยเติมเต็ม หากคุณต้องการเพิ่มความสดใสให้กับลุคของคุณ', 4150, '1016.jpg', 2),
(1017, 'PETITE DOVER', 'Egg shell', 'หน้าผาขาวของ Dover เป็นแรงบันดาลใจให้กับนาฬิกา Petite Dover ของเรา หน้าปัดสีขาวไข่ไก่ รายละเอียดในสีโรสโกลด์ และสายสีขาวล้วนคือสัญลักษณ์แห่งความงามของฤดูร้อน ร่วมสร้างลุคสไตล์ Classic ที่จะทำให้ทุกคนต้องเหลียวมอง', 4150, '1017.jpg', 2),
(1018, 'PETITE DOVER\r\n', ' 	Black', 'Petite Dover ที่มากับสายสีขาวล้วนคือสัญลักษณ์แห่งความงามของฤดูร้อน นาฬิกาสวมข้อมือสไตล์มินิมอลลิสต์นี้มีหน้าปัดสีดำและรายละเอียดในสีโรสโกลด์ ให้ความทรงจำแห่งฤดูร้อนนี้ตราตรึงบนข้อมือของคุณอย่างบางเบา สำหรับทุกๆ ฤดูกาลที่ตามมา', 4650, '1018.jpg', 2),
(1019, 'PETITE CORNWALL', 'Egg shell', 'หน้าปัดสีขาวไข่ไก่และสาย NATO สีดำล้วนทำให้ Petite Cornwall เป็นที่ต้องตาต้องใจอย่างแท้จริง ด้วยดีไซน์ที่บางเฉียบเรียบสง่าและรายละเอียดที่ตรึงตรา นาฬิกา Classic สุดทันสมัยเรือนนี้จึงตอบรับกับทุกโอกาส', 4150, '1019.jpg', 2),
(1020, 'PETITE CORNWALL', 'Egg shell', 'Petite Cornwall สะท้อนแก่นแท้แห่งความเรียบง่ายและสไตล์ที่เก๋ไก๋ ด้วยสาย NATO สีดำล้วนและหน้าปัดสีดำ นาฬิกาที่เรียบหรูเรือนนี้จึงกลายเป็นเพื่อนคู่ใจอย่างมีสไตล์ของคุณได้ทุกเวลา', 4150, '1020.jpg', 2),
(1021, 'PETITE SHEFFIELD', 'Egg shell', 'Petite กับหน้าปัดสีขาวไข่ไก่และสายหนังสีดำสุดคลาสสิคของ Sheffield จะเพิ่มความสง่าให้กับคุณในทุกโอกาส สัญลักษณ์แห่งดีไซน์ที่แท้จริง', 5350, '1021.jpg', 2),
(1022, 'PETITE SHEFFIELD', ' 	Black', 'Petite ในสีโรสโกลด์หรือสีเงินกับหน้าปัดสีดำเป็นคู่ที่ลงตัวสำหรับสายหนังที่มีเสน่ห์น่าหลงใหลสไตล์ Sheffield รับรองได้ว่าจะทุกสายตาจะหยุดที่ข้อมือคุณ', 5350, '1022.jpg', 2),
(1023, 'PETITE READING', 'Egg shell', 'ความลงตัวอย่างเลิศหรูระหว่างสีขาวกับสีดำในการผสมผสานสไตล์ที่เรียบขาวสะอาดตากับสายหนังจระเข้อัดลายสีดำ ไม่ว่าจะใส่กับสูทหรูหรือกับกางเกงยีนส์และเสื้อยืดเก๋ๆ สำหรับลุคที่เป็นกันเอง ทุกอย่างดูลงตัวไปหมด', 5350, '1023.jpg', 2),
(1024, 'PETITE READING', 'Black', 'ความลงตัวอย่างเลิศหรูระหว่างสีขาวกับสีดำในการผสมผสานสไตล์ที่เรียบขาวสะอาดตากับสายหนังจระเข้อัดลายสีดำ ไม่ว่าจะใส่กับสูทหรูหรือกับกางเกงยีนส์และเสื้อยืดเก๋ๆ สำหรับลุคที่เป็นกันเอง ทุกอย่างดูลงตัวไปหมด', 5350, '1024.jpg', 2),
(1025, 'PETITE BONDI', 'Egg shell', 'Petite Bondi กับสายหนังสีขาวสดชื่นสะอาดตาและหน้าปัดสีขาวไข่ไก่สะท้อนถึงความเรียบง่ายและความสง่างาม นาฬิกาที่บางเฉียบรุ่นนี้ทอดตัวลงบนข้อมืออย่างบางเบา และมอบไอแห่งความสดชื่นให้กับสไตล์ของคุณ มีให้เลือกในสีโรสโกลด์หรือสีเงิน  ', 4650, '1025.jpg', 2),
(1026, 'PETITE BONDI', ' 	Black', 'ดีไซน์สุดคลาสสิคผสานความเรียบหรูทันสมัยสไตล์มินิมอลลิสต์\r\nPetite Bondi เป็นเครื่องประดับอันดับหนึ่งที่จะขาดไม่ได้สำหรับฤดูกาลนี้ นาฬิกาที่บางเฉียบรุ่นนี้โอบรับข้อมืออย่างบางเบา ด้วยสายหนังสีขาวสดชื่น หน้าปัดสีดำ และรายละเอียดในสีโรสโกลด์', 5350, '1026.jpg', 2),
(1027, 'PETITE DURHAM', 'Egg shell', 'สายนาฬิกา Durham กับลุควินเท็จที่เป็นที่หลงใหลจะสร้างลวดลายที่โดดเด่นเป็นเอกลักษณ์ตามกาลเวลา สีของสายจะเข้มขึ้นในขณะที่สีที่บริเวณที่มีการยืดและโค้งงอจะจางลง ดีไซน์แบบมินิมอลลิสต์ของ Petite กับหน้าปัดสีขาวและสายของ Durham สะท้อนการผสมผสานที่น่าตื่นตาและมีสไตล์อย่างแท้จริง', 4650, '1027.jpg', 2),
(1028, 'PETITE BRISTOL', 'Egg shell', 'ความงามอย่างคลาสสิค นาฬิกา Petite กับหน้าปัดสีขาวและสายนาฬิกา Bristol จะดึงความสง่างามตามธรรมชาติของคุณให้โดดเด่น การผสมผสานที่ไม่ซ้ำใครเช่นนี้เป็นตัวแทนของความงามที่ไม่เคยล้าหลัง', 5350, '1028.jpg', 2),
(1029, 'PETITE BRISTOL', ' 	Black', 'นาฬิกา Petite กับหน้าปัดสีดำและสายนาฬิกา Bristol จะดึงความสง่างามตามธรรมชาติของคุณให้โดดเด่น การผสมผสานที่ไม่ซ้ำใครเช่นนี้เป็นตัวแทนของความงามที่ไม่เคยล้าหลัง มีให้เลือกในสีโรสโกลด์หรือสีเงิน', 5350, '1029.jpg', 2),
(1030, 'PETITE ST MAWES', 'Egg shell', 'หน้าปัดสีขาวของ Petite จะเฉิดฉายไปพร้อมกับความงามแบบมินิมอลลิสต์และความเรืองรองของสาย St Mawes สุดคลาสสิค สายของ St Mawes เป็นหนึ่งในสายนาฬิกาของเราที่ได้รับความนิยมสูงสุดเพราะผลิตจากหนังอิตาเลียนแท้', 4650, '1030.jpg', 2),
(1031, 'PETITE ST MAWES', ' 	Black', 'Petite กับหน้าปัดสีดำและสายของ St Mawes คือการผสมผสานที่ประณีตลงตัวและมีเสน่ห์อย่างแท้จริง สายของ St Mawes เป็นหนึ่งในสายนาฬิกาของเราที่ได้รับความนิยมสูงสุดเพราะผลิตจากหนังอิตาเลียนแท้', 5350, '1031.jpg', 2),
(1032, 'PETITE BRISTOL', 'Egg shell', 'ความงามอย่างคลาสสิค นาฬิกา Petite กับหน้าปัดสีขาวและสายนาฬิกา Bristol จะดึงความสง่างามตามธรรมชาติของคุณให้โดดเด่น การผสมผสานที่ไม่ซ้ำใครเช่นนี้เป็นตัวแทนของความงามที่ไม่เคยล้าหลัง', 5350, '1032.jpg', 2),
(1033, 'PETITE BRISTOL', ' 	Black', 'นาฬิกา Petite กับหน้าปัดสีดำและสายนาฬิกา Bristol จะดึงความสง่างามตามธรรมชาติของคุณให้โดดเด่น การผสมผสานที่ไม่ซ้ำใครเช่นนี้เป็นตัวแทนของความงามที่ไม่เคยล้าหลัง มีให้เลือกในสีโรสโกลด์หรือสีเงิน', 5350, '1033.jpg', 2),
(1034, 'PETITE ST MAWES', 'Egg shell', 'หน้าปัดสีขาวของ Petite จะเฉิดฉายไปพร้อมกับความงามแบบมินิมอลลิสต์และความเรืองรองของสาย St Mawes สุดคลาสสิค สายของ St Mawes เป็นหนึ่งในสายนาฬิกาของเราที่ได้รับความนิยมสูงสุดเพราะผลิตจากหนังอิตาเลียนแท้', 4650, '1034.jpg', 2),
(1035, 'PETITE ST MAWES\r\n', ' 	Black', 'Petite กับหน้าปัดสีดำและสายของ St Mawes คือการผสมผสานที่ประณีตลงตัวและมีเสน่ห์อย่างแท้จริง สายของ St Mawes เป็นหนึ่งในสายนาฬิกาของเราที่ได้รับความนิยมสูงสุดเพราะผลิตจากหนังอิตาเลียนแท้', 5350, '1035.jpg', 2),
(1036, 'PETITE YORK', 'Egg shell', 'รายละเอียดสุดคลาสสิค เช่น สายหนังจระเข้จากอิตาลีอัดลายสีน้ำตาลเข้มของ York และหน้าปัดสีขาวไข่ไก่อันประณีตทำให้ นาฬิกานี้สวยสง่าท้าทุกกาลเวลา ', 5350, '1036.jpg', 2),
(1037, 'CLASSIC DOVER', 'Egg shell', 'นาฬิกา Classic Dover อันสวยสง่าที่มากับหน้าปัดสีขาวไข่ไก่และรายละเอียดในสีโรสโกลด์จะกลายเป็นคู่ขาที่เก๋ไก๋สำหรับคุณได้ทุกวัน ด้วยสาย NATO สีขาวล้วน นาฬิการุ่น Classic สมัยใหม่เรือนนี้จะเหมาะสำหรับทุกโอกาส', 5650, '1037.jpg', 3),
(1038, 'CLASSIC DOVER', ' 	Black', 'สร้างความตะลึงไปกับตัวเลือกในสไตล์ของคุณ นาฬิกา Classic Dover เป็นการผสมผสานอย่างลงตัวระหว่างดีไซน์ที่เก๋ไก๋และฝีมือที่ประณีต ด้วยหน้าปัดสีดำและรายละเอียดในสีโรสโกลด์ นาฬิกานี้จะกลายเป็นเครื่องประดับหมายเลขหนึ่งที่คุณจะขาดไม่ได้', 5650, '1038.jpg', 3),
(1039, 'CLASSIC DOVER', ' 	Black', 'สร้างความตะลึงไปกับตัวเลือกในสไตล์ของคุณ นาฬิกา Classic Dover เป็นการผสมผสานอย่างลงตัวระหว่างดีไซน์ที่เก๋ไก๋และฝีมือที่ประณีต ด้วยหน้าปัดสีดำและรายละเอียดในสีโรสโกลด์ นาฬิกานี้จะกลายเป็นเครื่องประดับหมายเลขหนึ่งที่คุณจะขาดไม่ได้', 5650, '1039.jpg', 3),
(1040, 'CLASSIC BAYSWATER', ' 	Black', 'ด้วยคุณสมบัติสุดคลาสสิคอย่างเช่นตัวเรือนที่บางเฉียบ รายละเอียดในสีโรสโกลด์หรือสีเงิน และสาย NATO อันเลื่องชื่อของเราในสีน้ำเงินเข้มหม่นดำ Classic Bayswater จึงเป็นนาฬิกาที่จะเคียงคู่กายคุณได้อย่างลงตัวตั้งแต่เช้าจรดเย็น', 6350, '1040.jpg', 3),
(1041, 'CLASSIC ST MAWES\r\n', 'Egg shell', 'Classic St. Mawes ถือเป็นส่วนที่สำคัญของคอลเลคชั่นที่โดดเด่น เป็นนาฬิกาที่ตัวเรือนบางที่สวมใส่อยู่บนข้อมือของคุณได้อย่างสมบูรณ์แบบ ด้วยหน้าปัดที่กลมและเรียบง่ายแบบไร้ที่ติ สายหนังที่ดูหรูหราและตัวเรือนที่สง่างาม คุณได้มีนาฬิกาที่พิสูจน์ได้ว่าการออกแบบที่สมบูรณ์แบบนั้นไม่ใช่เพียงแต่ความเป็นไปได้ แต่เป็นเรื่องจริง', 6350, '1041.jpg', 3),
(1042, 'CLASSIC ST MAWES', ' 	Black', 'สายหนังสีน้ำตาลสุดคลาสสิคและกรอบดำหรูหรา นาฬิกา Classic St. Mawes บ่งบอกถึงความสมบูรณ์แบบเชิงวิศวกรรมที่ไม่ใช่แค่เพียงเป็นไปได้ แต่เป็นไปแล้วจริงๆ', 7450, '1042.jpg', 3),
(1043, 'CLASSIC SHEFFIELD', 'Egg shell', 'ด้วยหนังแท้สีเข้มที่เข้มยิ่งกว่าส่วนที่ลึกที่สุดของมหาสมุทร Classic Sheffield มีการออกแบบเพื่อให้สามารถใช้งานได้ไม่ว่าเวลาจะผ่านไปนานเพียงไหน ก็ยังคงความงามไว้ได้ตลอดกาล นาฬิกาเรือนนี้ได้พิสูจน์แล้วว่าความเรียบง่ายไม่ได้หมายความว่าจะน่าเบื่อเสมอไป', 6350, '1043.jpg', 3),
(1044, 'CLASSIC SHEFFIELD', ' 	Black', 'สายสีดำทำจากหนังอิตาเลียนแท้พร้อมหน้าปัดแบบใหม่ นาฬิกา Classic Sheffield ชิ้นหรูเสริมบุคลิกและเพิ่มความมั่นใจในสไตล์ที่เป็นคุณ', 6350, '1044.jpg', 3),
(1045, 'CLASSIC BRISTOL', 'Egg shell', 'สำหรับรุ่นคลาสสิค ได้รับการยอมรับในเรื่องสายที่ดูสะอาดและออกแบบอย่างเรียบง่าย ที่คิดค้นขึ้นมากับความทันสมัยของสุภาพบุรุษและสุภาพสตรี ด้วยหน้าปัดที่ดูเรียบง่ายและเป็นวงสีน้ำตาลเข้ม ก็ทำให้นาฬิกาเรือนนี้ดูหรูหราได้ไม่ยาก นาฬิกาเรือนสวยนี้ ก็สามารถโดดเด่นได้ในทุกสถานการณ์', 7350, '1045.jpg', 3),
(1046, 'CLASSIC BRISTOL', ' 	Black', 'หน้าปัดสีดำสุดหรูและสายหนังสีน้ำตาลเข้มของนาฬิกา Classic Bristol เผยให้เห็นความสง่าได้อย่างชัดเจน ไม่ว่าจะอยู่ในสถานการณ์แบบใด เครื่องบอกเวลาชิ้นงามนี้ก็โดดเด่นเป็นที่จับตาของผู้คนรอบข้าง', 7450, '1046.jpg', 3),
(1047, 'CLASSIC DURHAM', 'Egg shell', 'ด้วยหน้าปัดสีขาวนวล ตัวเรือนที่เรียบง่าย และสายหนังสีน้ำตาลอ่อนสุดหรูซึ่งทำจากหนังอเมริกัน นาฬิกา Classic Durham จึงเป็นอีกหนึ่งผลิตภัณฑ์ที่น่าประทับใจในคอลเล็กชัน Classic อันหรูหราของเรา ตัวเรือนบางเฉียบ (6 มม.) เหมาะกับทุกโอกาส โดยมีสีโรสโกลด์และสีเงินให้เลือก สายนาฬิกา Daniel Wellington ทุกชิ้นถอดเปลี่ยนและใส่ใหม่ได้อย่างง่ายดาย ไม่ว่าจะเป็นสาย NATO แบบสบายๆ หรือสายหนังหรูหรา ก็มีสายอย่างดีให้เลือกสรร เหมือนเปลี่ยนนาฬิกาใหม่ใส่ได้ทุกวัน', 7450, '1047.jpg', 3),
(1048, 'CLASSIC DURHAM', ' 	Black', 'หน้าปัดสีดำสุดประณีตและสายหนังแท้สีน้ำตาลอ่อนจากอเมริกา ทำให้นาฬิกา Classic Durham เป็นแค่ตัวเลือกเดียวสำหรับผู้นิยมนาฬิกาตัวจริง เมื่อดูแลรักษาสายโดยใช้น้ำมันพืช นาฬิกา Durham จะยิ่งขับความงามสง่าของสายนาฬิกาที่มีเอกลักษณ์เฉพาะตัวไม่ซ้ำใคร', 7450, '1048.jpg', 3),
(1049, 'CLASSIC READING', 'Egg shell', 'Classic Reading จากคอลเลคชั่น Flagship Classic ได้รับการออกแบบขึ้นมาเพื่อความเรียบง่ายและความสง่างาม และมีลักษณะของสายหนังลายจระเข้สีดำ หน้าปัดสีขาวเปลือกไข่ พร้อมกับตัวเรือนบางเฉียบเพียง 6 มม. เหมาะสำหรับการใช้งานในทุกโอกาส ไม่ว่าจะเป็นการไปร่วมงานที่เป็นทางการ เล่นกีฬาเทนนิส หรือออกไปสนุกกับกิจกรรมภายนอก Daniel Wellington ทำให้เป็นของใจแสนสวย นอกจากนี้ สายที่สามารถเปลี่ยนได้ ทำให้คุณสามารถเปลี่ยนสไตล์ของนาฬิกาของคุณได้สำหรับการใช้งานในแต่ละวัน', 7450, '1049.jpg', 3),
(1050, 'CLASSIC READING', ' 	Black', 'นาฬิกา Classic Reading มาพร้อมกับสายหนังสีดำลายจระเข้ หน้าปัดสีดำ และตัวเรือนบางเฉียบเพียง 6 มม. ไม่ว่าจะเป็นงานทางการ ไปตีเทนนิส หรือพักผ่อนหย่อนใจในคันทรีคลับ นาฬิกาเรือนนี้เป็นเครื่องประดับที่เหมาะกับทุกสถานการณ์', 7450, '1050.jpg', 3),
(1051, 'CLASSIC YORK', 'Egg shell', 'ด้วยแถบหนังจระเข้สีน้ำตาลเข้มสวยงาม หน้าปัดสีขาวเปลือกไข่และตัวเรือนที่บางเพียงแค่ 6 มม. เป็นเรื่องยากที่จะไม่ตกหลุมรักนาฬิกาที่ถูกออกแบบมาได้อย่างสมบูรณ์แบบเช่นนี้ ซึ่งมีแรงบันดาลใจมาจากความเรียบง่าย สมถะ นาฬิกาเรือนนี้ถูกสร้างขึ้นให้สามารถใช้งานได้ตราบนานเท่านาน', 7450, '1051.jpg', 3),
(1052, 'CLASSIC YORK', ' 	Black', 'สายหนังลายจระเข้สีน้ำตาลเข้มแสนสวย เข้าคู่กับหน้าปัดสีดำและตัวเรือนบางเพียง 6 มม. ได้เป็นอย่างดี ใครเล่าจะอดใจไหว นาฬิกา Classic York ได้รับแรงบันดาลใจจากช่วงเวลาที่เรียบง่าย ด้วยสไตล์ที่ท้าทายกาลเวลา', 7450, '1052.jpg', 3),
(1053, 'CLASSIC OXFORD\r\n', 'Egg shell', 'นาฬิกาแห่งความคลาสสิคและความงามนี้ ถูกออกแบบขึ้นโดยใส่ใจในทุกรายละเอียด ลูกเล่นสีสันของสาย NATO ที่ผสมผสานกันอย่างเป็นธรรมชาติกับหน้าปัดอันเรียบหรู ทำให้เป็นเครื่องประดับที่สมบูรณ์แบบได้อย่างง่ายดาย', 6350, '1053.jpg', 3),
(1054, 'CLASSIC CAMBRIDGE', 'Egg shell', 'ได้รับแรงบันดาลใจจากสีสันอันสวยงามของธงคลาสสิค สีแดง สีขาว และสีฟ้าของสาย NATO ฉลองแฟชั่นอันเป็นอมตะของชาวอเมริกัน สายลูกเล่นนี้เมื่อจับคู่กับหน้าปัดที่เรียบง่าย บาง หรูหราแล้ว ให้คุณสามารถสวมใส่ได้ทั้งในเวลางานและโอกาสอื่น ๆ', 6350, '1054.jpg', 3),
(1055, 'CLASSIC GLASGOW', 'Egg shell', 'นี่คือนาฬิกาเรือนสวยที่ฉลองกับความเป็นอมตะและสวยงามของจิตวิญญาณทางทะเล ที่ทำให้เห็นถึงความหมายของฤดูร้อนโดยทะเล นาฬิกานี้เหมาะเป็นอย่างยิ่งสำหรับผู้ที่ทราบดีว่าการใส่เครื่องประดับที่เหมาะสมสามารถสร้างความแตกต่างได้', 6350, '1055.jpg', 3),
(1056, 'CLASSIC CANTERBURY', 'Egg shell', 'นาวิกโยธินอังกฤษอาจเป็นผู้บุกเบิกสาย NATO มาตั้งแต่ทศวรรษที่ 70 แต่สาย NATO ก็ยังคงมีเสน่ห์มาจนถึงทุกวันนี้ ด้วยสีสันอันเป็นอมตะให้เลือกมากมาย สายแต่ละแบบสามารถเปลี่ยนได้และบอกเล่าเรื่องราวที่ไม่ซ้ำใครสไตล์คุณ', 5650, '1056.jpg', 3),
(1057, 'CLASSIC SOUTHAMPTON', 'Egg shell', 'ตัวเรือนที่บางเฉียบ หน้าปัดสีขาวเปลือกไข่และออกแบบรูปวงกลมมาอย่างสมบูรณ์แบบ เมื่อเพิ่มเติมสีชมพู สีขาว และสีฟ้าของสาย NATO เข้าไป คุณจะได้นาฬิกาที่ให้ความรู้สึกสนุกสนาน เรียบง่าย หรูหราและสง่างามในเวลาเดียวกัน', 5650, '1057.jpg', 3),
(1058, 'CLASSIC WINCHESTER', 'Egg shell', 'ได้รับการออกแบบเพื่อวัตถุประสงค์ให้ดูโดดเด่นทั้งในด้านของความน่าทะนุถนอมและความขี้เล่น Classic Winchester จึงเป็นที่ชื่นชอบของทุกคน ด้วยสายสีฟ้าคลาสสิคที่มีการแบ่งเส้นสีชมพูสดใส ซึ่งเป็นการผสมผสานกันอย่างลงตัวของความสง่างามและความมั่งคั่ง หน้าปัดสีโรสโกลด์ทำให้นาฬิกาของคุณมีพื้นผิวที่เงางาม', 5650, '1058.jpg', 3),
(1059, 'CLASSIC WARWICK', 'Egg shell', 'สีฟ้า สีแห่งท้องฟ้าและท้องทะเล ผสมผสานอย่างเป็นธรรมชาติไปกับสีเขียว แสดงความสวยงามของธรรมชาติ การผสมผสานสีของสายแบบ NATO เมื่อจับคู่กับหน้าปัดชั้นเยี่ยม จะทำให้นาฬิกาของคุณดูหรูหราสง่างามที่สามารถสวมใส่ได้ทั้งกับชีวิตประจำวัน และการออกงานโอกาสพิเศษต่างๆ', 6350, '1059.jpg', 3),
(1060, 'PETITE MELROSE 32MM + CLASSIC BRACELET SMALL', 'Rose Gold', 'Petite Melrose 32mm (สีขาว) + Classic Bracelet สีโรสโกลด์\r\nเราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 7600, '1060.jpg', 1),
(1061, 'PETITE STERLING 28MM + CLASSIC BRACELET SMALL', 'Silver', 'Petite Sterling 28mm (สีดำ) + Classic Bracelet สีเงิน เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 7100, '1061.jpg', 1),
(1062, 'PETITE MELROSE 32MM + BRISTOL STRAP', 'Egg shell', 'Bundle Petite Melrose 32 RG (White) + Strap Petite Bristol 14 RG. เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 7200, '1062.jpg', 1),
(1063, 'PETITE STERLING 28MM + CORNWALL STRAP', 'Black', 'Petite Sterling S 28mm (Black) + Petite Cornwall S 12mm. เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 6049, '1063.jpg', 1),
(1064, 'PETITE MELROSE 28MM + BRISTOL STRAP', ' 	Black', 'Petite Melrose 28mm (Black) + Petite Bristol RG 12mm. เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 6700, '1064.jpg', 1),
(1065, 'PETITE MELROSE 28MM + ST MAWES STRAP', ' 	Black', 'Petite Melrose ที่ละเอียดซับซ้อน มาในรูปแบบของนาฬิกาหน้าปัดสีดำและสายสแตนเลสแบบถักสีโรสโกลด์อันสวยงาม จับคู่ในรูปกับสาย St Mawes สีน้ำตาลที่ทำจากหนังแท้ นาฬิกาและสายอะไหล่สำหรับเปลี่ยนของคุณจะมาในกล่องสุดหรูออกแบบเป็นพิเศษ โดยมีโลโก้สีทองของ Daniel Wellington สลักอยู่', 6700, '1065.jpg', 1),
(1066, 'PETITE READING 28MM + CORNWALL STRAP', 'Egg shell', 'Petite Reading RG 28mm (White) + Petite Cornwall RG 12. เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย\r\n\r\n', 5549, '1066.jpg', 1),
(1067, 'CLASSIC ST MAWES 40MM + GLASGOW STRAP', 'Egg shell', 'Classic St Mawes 40mm สีโรสโกลด์ + Glasgow สายนาฬิกา 20mm สีโรสโกลด์\r\nเราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 8349, '1067.jpg', 1),
(1068, 'CLASSIC SHEFFIELD 36MM + DURHAM STRAP', 'Egg shell', 'Classic Sheffield 36 RG + Strap Classic Durham 18 RG. เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 7900, '1068.jpg', 1),
(1069, 'CLASSIC SHEFFIELD 40MM + CORNWALL STRAP', 'Egg shell', 'Classic Sheffield 40 RG + Strap Cornwall 20 RG. เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 8349, '1069.jpg', 1),
(1070, 'CLASSIC SHEFFIELD 40MM + CORNWALL STRAP', ' 	Black', 'Classic Sheffield 40 S + Strap Classic Cornwall 20 S. เราจะจัดส่งเซ็ทของขวัญของคุณในกล่องของขวัญสุดสวย', 8349, '1070.jpg', 1),
(1071, 'CLASSIC ROSELYN 36MM + BAYSWATER STRAP', ' 	Black', 'ด้วยคุณสมบัติสุดคลาสสิคอย่างเช่นตัวเรือนที่บางเฉียบ รายละเอียดในสีโรสโกลด์หรือสีเงิน และสาย NATO อันเลื่องชื่อของเราในสีทับทิมแดง Classic Roselyn จึงเป็นนาฬิกาที่จะเคียงคู่กายคุณได้อย่างลงตัวตั้งแต่เช้าจรดเย็น จับคู่กับสาย NATO อันเลื่องชื่อของเราในสีน้ำเงินเข้มหม่นดำเลย', 6549, '1071.jpg', 1),
(1072, 'CLASSIC BAYSWATER 40MM + ROSELYN STRAP', ' 	Black', 'ด้วยคุณสมบัติสุดคลาสสิคอย่างเช่นตัวเรือนที่บางเฉียบ รายละเอียดในสีโรสโกลด์หรือสีเงิน และสาย NATO อันเลื่องชื่อของเราในสีน้ำเงินเข้มหม่นดำ Classic Bayswater จึงเป็นนาฬิกาที่จะเคียงคู่กายคุณได้อย่างลงตัวตั้งแต่เช้าจรดเย็น\r\nจับคู่กับสาย NATO อันเลื่องชื่อของเราในสีทับทิมแดงเลย', 7249, '1072.jpg', 1),
(1073, 'CLASSIC ROSELYN 36MM + ST MAWES STRAP', 'Egg shell', 'ด้วยคุณสมบัติสุดคลาสสิคอย่างเช่นตัวเรือนที่บางเฉียบ รายละเอียดในสีโรสโกลด์หรือสีเงิน และสาย NATO อันเลื่องชื่อของเราในสีทับทิมแดง Classic Roselyn จึงเป็นนาฬิกาที่จะเคียงคู่กายคุณได้อย่างลงตัวตั้งแต่เช้าจรดเย็น ผสมผสานกับสาย Classic St Mawes สุดหรูจากหนังอิตาเลียนแท้', 7200, '1073.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id` int(4) NOT NULL,
  `pt_name` char(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `pt_name`) VALUES
(1, 'GIFT SETS FOR HER'),
(4, 'ICONIC'),
(2, 'PETITE'),
(3, 'CLASSIC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`mid`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `mid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
