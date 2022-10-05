-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 12:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land`
--

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `id` int(11) NOT NULL,
  `web_name` varchar(50) DEFAULT NULL COMMENT 'navbar',
  `site_name` varchar(50) DEFAULT NULL COMMENT 'footer',
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `link_twiiter` varchar(100) DEFAULT NULL,
  `link_facebook` varchar(100) DEFAULT NULL,
  `link_youtube` varchar(100) DEFAULT NULL,
  `link_line` varchar(100) DEFAULT NULL,
  `embed_map` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`id`, `web_name`, `site_name`, `email`, `tel`, `address`, `link_twiiter`, `link_facebook`, `link_youtube`, `link_line`, `embed_map`) VALUES
(1, 'HOME&LAND', 'Power By Rayongall.com', 'rayongall@gmail.com', '085-2817096', '25/7 ถ.สนามเป้า อ.เมือง จ.ระยอง', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', ' https://line.me/ti/p/~xxx', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.657541151779!2d101.27117481473707!3d12.670444791053978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102fc17b6c073c9%3A0xf3e3c1759ca285c4!2sRayongall.com!5e0!3m2!1sth!2sth!4v1650175521735!5m2!1sth!2sth');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL COMMENT 'น.ส.3/ น.ส.3 ก./ โฉนดที่ดิน',
  `for` varchar(50) DEFAULT NULL COMMENT 'ขาย / เช่า',
  `land` varchar(100) DEFAULT NULL COMMENT 'ชื่อ',
  `image` varchar(50) DEFAULT NULL COMMENT 'รูป',
  `address` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่',
  `detail` text DEFAULT NULL COMMENT 'รายละเอียด',
  `rai` float DEFAULT 0 COMMENT 'ไร่',
  `ngan` float DEFAULT 0 COMMENT 'งาน',
  `square_wa` float DEFAULT 0 COMMENT 'ตารางวา',
  `price` double DEFAULT NULL COMMENT 'ราคา',
  `created_by` int(11) DEFAULT NULL COMMENT 'สร้างโดย',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง',
  `status` varchar(10) DEFAULT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`id`, `type`, `for`, `land`, `image`, `address`, `detail`, `rai`, `ngan`, `square_wa`, `price`, `created_by`, `created_date`, `status`) VALUES
(18, 'บ้านเดี่ยว', 'ขาย', 'บ้านเดี่ยวพระยาตรัง โฉนด 70ตรว. ต.ท่าช้าง อ.เมือง จ.จันทบุรี', '16500191809470.jpg', 'จันทบุรี', '<h1>บ้านเดี่ยวพระยาตรัง โฉนด 70ตรว. ต.ท่าช้าง อ.เมือง จ.จันทบุรี</h1>\r\n', 0, 0, 50, 2500000, 1, '2022-04-17 15:29:59', 'ว่าง'),
(19, 'ทาวน์โฮม', 'ขาย', 'อาคารพาณิชย์เจ้าหลาว โฉนด 60ตรว. ต.โขมง อ.ท่าใหม่ จ.จันทบุรี', '16500192750944.jpg', 'จันทบุรี', '<h1>อาคารพาณิชย์เจ้าหลาว โฉนด 60ตรว. ต.โขมง อ.ท่าใหม่ จ.จันทบุรี</h1>\r\n', 0, 0, 25, 3000000, 1, '2022-04-17 15:31:33', 'ว่าง'),
(20, 'บ้านเดี่ยว', 'เช่า', 'ขายบ้านลพบุรี 82ตรว.โฉนด ต.มหาโพธิ อ.สระโบสถ์', '16500193770150.jpg', 'ลพบุรี', '<h1>ขายบ้านมหาโพธิ &ndash; ขายบ้านลพบุรี 82ตรว.โฉนด ต.มหาโพธิ อ.สระโบสถ์ จ.ลพบุรี</h1>\r\n', 0, 0, 70, 2500000, 1, '2022-04-17 15:33:15', 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `line` varchar(30) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `checked` varchar(3) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `tel`, `line`, `role`, `image`, `checked`, `last_login`) VALUES
(1, 'admin', '$2y$10$cIF2QvAnraMQYfBV326q0uOGjaGgfRPeluaoEU4cWOpmxLhMgnzFG', 'Administrator', 'admin@admin.com', '0852817096', 'rayongall', 'admin', 'team-1.jpg', 'Yes', '2022-04-17 15:28:48');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_land`
-- (See below for the actual view)
--
CREATE TABLE `view_land` (
`id` int(11)
,`type` varchar(50)
,`for` varchar(50)
,`land` varchar(100)
,`image` varchar(50)
,`address` varchar(255)
,`detail` text
,`rai` float
,`ngan` float
,`square_wa` float
,`price` double
,`created_by` int(11)
,`created_date` datetime
,`status` varchar(10)
,`name` varchar(255)
,`email` varchar(100)
,`tel` varchar(30)
,`line` varchar(30)
,`checked` varchar(3)
,`user_id` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view_land`
--
DROP TABLE IF EXISTS `view_land`;

CREATE VIEW `view_land`  AS SELECT `a`.`id` AS `id`, `a`.`type` AS `type`, `a`.`for` AS `for`, `a`.`land` AS `land`, `a`.`image` AS `image`, `a`.`address` AS `address`, `a`.`detail` AS `detail`, `a`.`rai` AS `rai`, `a`.`ngan` AS `ngan`, `a`.`square_wa` AS `square_wa`, `a`.`price` AS `price`, `a`.`created_by` AS `created_by`, `a`.`created_date` AS `created_date`, `a`.`status` AS `status`, `b`.`name` AS `name`, `b`.`email` AS `email`, `b`.`tel` AS `tel`, `b`.`line` AS `line`, `b`.`checked` AS `checked`, `b`.`id` AS `user_id` FROM (`land` `a` left join `user` `b` on(`b`.`id` = `a`.`created_by`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
