-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_easytour`
--

-- --------------------------------------------------------

--
-- Table structure for table `imageupload`
--

CREATE TABLE `imageupload` (
  `uid` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imageupload`
--

INSERT INTO `imageupload` (`uid`, `image_path`, `image_name`) VALUES
(30, '10.0.254.27/easytour/assets/uploads/gonzales.jpg', 'gonzales'),
(43, '10.0.254.27/easytour/assets/uploads/ed93285e468081fcd954b5d472477bfe.jpg', 'ed93285e468081fcd954b5d472477bfe'),
(44, '10.0.254.27/easytour/assets/uploads/b70309e8acc7d504cf47d4b965e5196f.jpg', 'b70309e8acc7d504cf47d4b965e5196f');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `pic_title` varchar(200) NOT NULL,
  `pic_desc` varchar(200) NOT NULL,
  `pic_file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation`
--

CREATE TABLE `tbl_accommodation` (
  `estab_id` int(11) NOT NULL,
  `rating_id` int(11) NOT NULL,
  `no_of_rooms` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accommodation`
--

INSERT INTO `tbl_accommodation` (`estab_id`, `rating_id`, `no_of_rooms`) VALUES
(88, 5, 1000),
(150, 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enterprise`
--

CREATE TABLE `tbl_enterprise` (
  `enterprise_id` int(10) NOT NULL,
  `enterprise_type` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enterprise`
--

INSERT INTO `tbl_enterprise` (`enterprise_id`, `enterprise_type`) VALUES
(1, 'TE-Primary Establishment'),
(2, 'TRE-Secondary Establishment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishment`
--

CREATE TABLE `tbl_establishment` (
  `estab_id` int(10) NOT NULL,
  `estab_name` varchar(75) NOT NULL,
  `province_id` int(11) DEFAULT 1,
  `estab_address` varchar(75) NOT NULL,
  `estab_contact` varchar(45) NOT NULL,
  `estab_email` varchar(75) NOT NULL,
  `estab_latitude` double NOT NULL,
  `estab_longitude` double NOT NULL,
  `estab_owner` varchar(75) NOT NULL,
  `estab_expiration` date NOT NULL,
  `estab_datecreated` date NOT NULL,
  `estab_sub_id` int(10) NOT NULL,
  `estab_geom` geometry NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_establishment`
--

INSERT INTO `tbl_establishment` (`estab_id`, `estab_name`, `province_id`, `estab_address`, `estab_contact`, `estab_email`, `estab_latitude`, `estab_longitude`, `estab_owner`, `estab_expiration`, `estab_datecreated`, `estab_sub_id`, `estab_geom`) VALUES
(86, 'national book store', 5, 'ketkai sulod', '0976431564', 'rotorasian@gmail.com', 8.4827971, 124.6545173, 'hxjxj', '2024-03-15', '2020-03-10', 23, 0x000000000101000000a38a879ce3295f401135762e31f72040),
(88, 'office escape', 5, '8th 21st streen nazareth cdo', '09789684519', 'officeescape@gmail.com', 8.4715527, 124.6472627, 'escape', '2020-03-31', '2020-03-11', 1, 0x000000000101000000ec1a88c06c295f4056ae015b6ff12040),
(150, 'USTP', 5, 'lapasan cdo', '123', 'a@g.com', 8.4880681, 124.6556242, 'mama', '2020-03-11', '2020-03-11', 1, 0x000000000101000000d65d34bff5295f401471df0fe4f92040);

--
-- Triggers `tbl_establishment`
--
DELIMITER $$
CREATE TRIGGER `trigger1` BEFORE INSERT ON `tbl_establishment` FOR EACH ROW BEGIN
  SET NEW.estab_geom = POINT(NEW.estab_longitude, NEW.estab_latitude);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estab_cat`
--

CREATE TABLE `tbl_estab_cat` (
  `estab_cat_id` int(10) NOT NULL,
  `estab_cat_name` varchar(75) NOT NULL,
  `enterprise_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_estab_cat`
--

INSERT INTO `tbl_estab_cat` (`estab_cat_id`, `estab_cat_name`, `enterprise_id`) VALUES
(1, 'Accommodation', 1),
(2, 'Travel and Tours', 1),
(3, 'Tourism Transport Operator', 1),
(4, 'Tourism Frontliners', 1),
(5, 'Tourism Related Establishments', 2),
(6, 'Sports and Recreational Facilities', 2),
(7, 'Health and Wellness Facility', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estab_subcategory`
--

CREATE TABLE `tbl_estab_subcategory` (
  `estab_sub_id` int(10) NOT NULL,
  `estab_sub_name` varchar(75) NOT NULL,
  `estab_cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_estab_subcategory`
--

INSERT INTO `tbl_estab_subcategory` (`estab_sub_id`, `estab_sub_name`, `estab_cat_id`) VALUES
(1, 'Hotel', 1),
(2, 'Resorts', 1),
(3, 'Apartment Hotel', 1),
(4, 'Mabuhay Tourist Inn', 1),
(5, 'Mabuhay Pension House', 1),
(6, 'Mabuhay Tourist Inn', 1),
(7, 'Homestay', 1),
(8, 'Mabuhay Tourist Inn', 1),
(9, 'Travel Agency', 2),
(10, 'Tour Agency', 2),
(11, 'Travel and Tour Agency', 2),
(12, 'Eco-Tour Operator', 2),
(13, 'Mice Facility', 2),
(14, 'Mice Organizer', 2),
(15, 'Land Transport Operator', 3),
(16, 'Water Transport Operator', 3),
(17, 'Air Transport Operator', 3),
(18, 'Community Guide', 4),
(19, 'Regional Master Guide', 4),
(20, 'Regional Senior Guide', 4),
(21, 'Regional Junior Guide', 4),
(22, 'Agri-Tourism Farm/Site', 5),
(23, 'Department Store/ Shopping Mall', 5),
(24, 'Rest Area', 5),
(25, 'Restaurant', 5),
(26, 'Specialty Shop', 5),
(27, 'Tourism Entertainment Complex', 5),
(28, 'Tourism Recreational Center', 5),
(29, 'Tourism Training Center', 5),
(30, 'Adventure and Eco-Tourism Facility', 6),
(31, 'Gallery', 6),
(32, 'Museum', 6),
(33, 'Shooting Range', 6),
(34, 'Zoo', 6),
(35, 'Ambulatory Clinic', 7),
(36, 'Medical Concierge', 7),
(37, 'Spa', 7),
(38, 'Tertiary Hospital', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_image` varchar(200) NOT NULL,
  `estab_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_province`
--

CREATE TABLE `tbl_province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_province`
--

INSERT INTO `tbl_province` (`province_id`, `province_name`) VALUES
(1, 'Bukidnon'),
(2, 'Camiguin'),
(3, 'Lanao del Norte'),
(4, 'Misamis Occidental'),
(5, 'Misamis Oriental');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_id` int(10) NOT NULL,
  `rating` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rating_id`, `rating`) VALUES
(1, '5 STAR'),
(2, '4 STAR'),
(3, '3 STAR'),
(4, '2 STAR'),
(5, '1 STAR'),
(6, 'NO STAR RATING'),
(7, 'NOT APPLICABLE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route`
--

CREATE TABLE `tbl_route` (
  `route_id` int(11) NOT NULL,
  `origin_latitude` double DEFAULT NULL,
  `origin_longitude` double DEFAULT NULL,
  `destination_latitude` double DEFAULT NULL,
  `destination_longitude` double DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_route`
--

INSERT INTO `tbl_route` (`route_id`, `origin_latitude`, `origin_longitude`, `destination_latitude`, `destination_longitude`, `user_id`) VALUES
(9, 1, 1, 1, 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `email` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`email`, `password`) VALUES
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('hhsbs@', 'bbd234f932a6edb83f908ff5062d2c6a'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('bjssj@', '85f2d99f9376dcb9e7a2740d23f71226'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('gevdgd@', 'a2a98a1136b9d46b2e90e2f8f864e02b'),
('yvgygy@', 'fd5cf8428193ba2bf8d5bb34880e1dfc'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', 'cb7e80ef6fe07b27c11c789a0cb3dd83'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', 'b2b76da2354ab38a4fe7e5ab56554aab'),
('brex@gmail.comqwe', 'b2b76da2354ab38a4fe7e5ab56554aab'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.comqwe', 'b2b76da2354ab38a4fe7e5ab56554aab'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '8acad146edc59fef8f716b3aaa23865b'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('brex@gmail.com', '9c5e2ef6c7bfe2208d78e0d892352f88'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7'),
('brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `datecreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`user_id`, `username`, `firstname`, `lastname`, `mobileno`, `email`, `password`, `is_admin`, `datecreated`) VALUES
(26, 'brex@gmail.com', 'brex', 'yuer', '09123456789', 'brex@gmail.com', '0767fdc351aa53f8c4eafd68a90417b7', 0, '2020-02-28 02:29:53'),
(28, 'jj123', 'AJ', 'JJ', '09212345678', 'jj@gmail.com', '399be8a05bb0cbe79ff0314eef16ae43', 0, '2020-03-03 06:21:48'),
(29, 'law', 'law', 'Trafalgar', '09123456789', 'law@gmail.com', '6dad679aed72615e761e0770decac18e', 0, '2020-03-03 06:21:56'),
(30, 'Johndoe', 'John', 'Doe', '089765451364', 'jd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2020-03-03 06:24:52'),
(31, 'zoro@gmail.com', 'zoro', 'roronoa', '09369258147', 'zoro@gmail.com', 'dad364fe806ceb1b14324d0313d9105a', 0, '2020-03-03 06:25:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imageupload`
--
ALTER TABLE `imageupload`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accommodation`
--
ALTER TABLE `tbl_accommodation`
  ADD PRIMARY KEY (`estab_id`),
  ADD KEY `rating_id` (`rating_id`);

--
-- Indexes for table `tbl_enterprise`
--
ALTER TABLE `tbl_enterprise`
  ADD PRIMARY KEY (`enterprise_id`);

--
-- Indexes for table `tbl_establishment`
--
ALTER TABLE `tbl_establishment`
  ADD PRIMARY KEY (`estab_id`),
  ADD KEY `estab_sub_id` (`estab_sub_id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `tbl_estab_cat`
--
ALTER TABLE `tbl_estab_cat`
  ADD PRIMARY KEY (`estab_cat_id`),
  ADD KEY `FK` (`enterprise_id`);

--
-- Indexes for table `tbl_estab_subcategory`
--
ALTER TABLE `tbl_estab_subcategory`
  ADD PRIMARY KEY (`estab_sub_id`),
  ADD KEY `estab_cat_id` (`estab_cat_id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `estab_id` (`estab_id`);

--
-- Indexes for table `tbl_province`
--
ALTER TABLE `tbl_province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tbl_route`
--
ALTER TABLE `tbl_route`
  ADD PRIMARY KEY (`route_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imageupload`
--
ALTER TABLE `imageupload`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_enterprise`
--
ALTER TABLE `tbl_enterprise`
  MODIFY `enterprise_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_establishment`
--
ALTER TABLE `tbl_establishment`
  MODIFY `estab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `tbl_estab_cat`
--
ALTER TABLE `tbl_estab_cat`
  MODIFY `estab_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_estab_subcategory`
--
ALTER TABLE `tbl_estab_subcategory`
  MODIFY `estab_sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_province`
--
ALTER TABLE `tbl_province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_route`
--
ALTER TABLE `tbl_route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_accommodation`
--
ALTER TABLE `tbl_accommodation`
  ADD CONSTRAINT `tbl_accommodation_ibfk_1` FOREIGN KEY (`estab_id`) REFERENCES `tbl_establishment` (`estab_id`),
  ADD CONSTRAINT `tbl_accommodation_ibfk_2` FOREIGN KEY (`rating_id`) REFERENCES `tbl_rating` (`rating_id`);

--
-- Constraints for table `tbl_establishment`
--
ALTER TABLE `tbl_establishment`
  ADD CONSTRAINT `estab_sub_id` FOREIGN KEY (`estab_sub_id`) REFERENCES `tbl_estab_subcategory` (`estab_sub_id`),
  ADD CONSTRAINT `province_id` FOREIGN KEY (`province_id`) REFERENCES `tbl_province` (`province_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_estab_subcategory`
--
ALTER TABLE `tbl_estab_subcategory`
  ADD CONSTRAINT `estab_cat_id` FOREIGN KEY (`estab_cat_id`) REFERENCES `tbl_estab_cat` (`estab_cat_id`);

--
-- Constraints for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD CONSTRAINT `tbl_photo_ibfk_1` FOREIGN KEY (`estab_id`) REFERENCES `tbl_establishment` (`estab_id`);

--
-- Constraints for table `tbl_route`
--
ALTER TABLE `tbl_route`
  ADD CONSTRAINT `tbl_route_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useraccounts` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
