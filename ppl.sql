-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 08:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(255) NOT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `owner` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `rating` bigint(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `date`, `owner`, `doctor`, `status`, `rating`) VALUES
(40, 'This doctor is Superman!!', '2018-05-28 19:17:50', 'Soc Trang Hospital', '1', 'Deactive', 5),
(41, 'Thanks God, we still have this man!', '2018-05-28 19:38:53', 'Soc Trang Hospital', '1', 'Active', 4),
(42, 'Not bad, Strangest!!', '2018-05-28 19:40:03', 'Soc Trang Hospital', '2', 'Active', 3),
(43, 'He saves lots of lifes!', '2018-05-28 19:40:43', 'Soc Trang Hospital', '1', 'Active', 5),
(44, 'Well done!!', '2018-05-29 01:50:20', 'Soc Trang Hospital', '2', 'Active', 4),
(45, 'Well played!', '2018-05-29 01:51:49', 'Soc Trang Hospital', '2', 'Active', 3),
(46, 'She took good care of me!', '2018-05-29 01:53:16', 'Soc Trang Hospital', '3', 'Active', 4),
(47, 'Test', '2018-05-29 01:54:23', 'Soc Trang Hospital', '1', 'Active', 1),
(48, 'Testing', '2018-05-29 01:56:29', 'Soc Trang Hospital', '1', 'Active', 4),
(49, 'Test', '2018-05-29 01:59:16', 'Soc Trang Hospital', '2', 'Active', 2),
(50, '124', '2018-05-29 02:04:00', 'Soc Trang Hospital', '1', 'Active', 3),
(51, '1234', '2018-05-29 02:05:13', 'Soc Trang Hospital', '1', 'Active', 5),
(52, 'Help', '2018-05-29 02:08:43', 'Soc Trang Hospital', '1', 'Active', 4),
(53, 'Help', '2018-05-29 02:11:43', 'Soc Trang Hospital', '3', 'Active', 3),
(54, 'Help', '2018-05-29 02:12:04', 'Soc Trang Hospital', '1', 'Active', 4),
(55, 'Testtsts', '2018-05-29 02:12:28', 'Soc Trang Hospital', '2', 'Active', 3),
(56, 'Good!', '2018-05-29 02:20:11', 'Soc Trang Hospital', '3', 'Active', 3),
(57, 'OK', '2018-05-29 02:26:34', 'Soc Trang Hospital', '3', 'Active', 1),
(58, 'Greate', '2018-05-29 02:27:01', 'Soc Trang Hospital', '3', 'Active', 1),
(59, 'OKK', '2018-05-29 02:30:55', 'Soc Trang Hospital', '1', 'Active', 4),
(60, 'Testing!!', '2018-05-29 04:48:23', 'Soc Trang Hospital', '1', 'Active', 4),
(67, 'admin test!', '2018-05-29 06:15:45', 'Binh Thanh Hospital', '2', 'Active', 4),
(68, 'admin tesssst', '2018-05-29 06:17:47', 'Soc Trang Hospital', '3', 'Active', 4),
(75, 'Good doc!', '2018-05-29 06:28:34', 'Soc Trang Hospital', '4', 'Active', 4);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `accepted_ins` varchar(255) NOT NULL,
  `specific_specialty` varchar(255) NOT NULL,
  `office_hours` varchar(255) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `hosname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `fname`, `lname`, `gender`, `degree`, `accepted_ins`, `specific_specialty`, `office_hours`, `lang`, `hosname`) VALUES
('1', 'Stranger', 'Doctor', 'Male', 'Master in Kung Fu', 'All', 'Abdominal Surgery', '6:00AM - 1:00PM', 'Vietnamese', 'Gia Dinh Hospital'),
('2', 'Strangest', 'Doctor', 'Male', 'PhD in Being Strange', 'All', 'Aesthetic Treatment', '6:00AM - 8:00PM', 'English', 'Cho Ray Hospital'),
('3', 'Lucky', 'Luke', 'Female', 'PhD in Riding Horses', 'All', 'Alpine and high altitude medicine', '6:00AM - 7:00AM', 'English', 'Soc Trang Hospital'),
('4', 'Tu', 'Dang', 'Male', 'PhD in Something', 'All', 'Ung thu nao', '6:00Am - 7:00PM', 'English', 'Binh Thanh Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `gen_specialty`
--

CREATE TABLE `gen_specialty` (
  `id` int(11) NOT NULL,
  `gen_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_specialty`
--

INSERT INTO `gen_specialty` (`id`, `gen_name`) VALUES
(1, 'Accident Surgery'),
(2, 'Anatomy'),
(3, 'Cardiac surgery'),
(4, 'Histology and embryology'),
(5, 'General Practitioner'),
(6, 'Than kinh');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hospital_admin_name` varchar(50) NOT NULL,
  `hospital_admin_email` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `doctorid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `password`, `name`, `address`, `hospital_admin_name`, `hospital_admin_email`, `status`, `doctorid`) VALUES
('binhthanh123', '$2y$10$DLyr8xRQmdvAu.UaVL/hsu9mHh35SHJxQh6QDr1eDC2PLz/rM73Py', 'Binh Thanh Hospital', '200 Dinh Tien Hoang, P.15, Q.BT', 'binhthanhcoolngauheeh', 'binhthanhchat@gmail.', 'Deactive', ''),
('choray123', '$2y$10$V0DmPJF5nXL4JD72/QLLwuSuPKvicm4rhPHINwHnQb90XEpXzvAy.', 'Cho Ray Hospital', '1 Cho Ray P.14 Q.10', 'Trum Cho ray', 'trumchoray@gmail.com', 'Deactive', ''),
('gdsaigon', '$2y$10$mhGTAmMxXeBOCpkLyAlZpuKYcfUzHRIWNqK.8Cl9Uq5', 'Gia Dinh Hospital', '1 No Trang Long P.12 Q.BT', 'Duke Nguyen', 'dukenguyen@gmail.com', 'Active', ''),
('testhospital', '$2y$10$NwW8L07YsmPayd.Pz20brueM0P/5s9P/VE9MmltmdrX8mtCmuH1za', 'Soc Trang Hospital', '22 Le Van Tam P.12 Q.1', 'lelepon123', 'lele@gmail.com', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `lname`, `gender`, `email`, `password`, `address`, `lang`, `status`) VALUES
('admin', 'admin', 'admin', 'Male', 'admin@gmail.com', 'admin', 'admin', 'English', 'Active'),
('dangtu1234', 'Dang', 'Tu', 'Male', 'dangtu1234@gmail.com', '$2y$10$4MFONZaQ6zBFs8VYwrz5PuEA3ALjyugqLoTCRdsx0Xr0NCS8YxEbK', '18/20 NDK Ne', 'vietnamese', 'Deactive'),
('lele123', 'LeLe', 'Pon', 'Female', 'lele123@gmail.com', '$2y$10$ltm2WEhtvKPr5l3FZ8EXoOUhgZJOMf6H6udTCVl66VBVCr971BEYK', 'LeLe P.12 Q.BT', 'english', 'Active'),
('leoalex123', 'Alexander', 'Leo', 'Male', 'leoalex123@gmail.com', '$2y$10$d4KXSEWERVM1ijFKgZ2FZOaLvs6qciBR1YIk9n.o.S7IG/4JJQyaS', '22 Bui Dinh Tuy P.12 Q.BT', 'vietnamese', 'Active'),
('quangphamm1902', 'Quang', 'Pham', 'Male', 'quangphamm1902@gmail.com', '$2y$10$hxXbslmd2Ce9c9TH.vfCYedoCA.DGdCuv1zm2a33v.DoqFEW0FqhC', '20 Phan Dang Luu', 'vietnamese', 'Active'),
('quangtu1902', 'Quang', 'Tu', 'Male', 'minh@gmail.com', '$2y$10$Sn5YIpaaIySlqyy49fWXxunbMpsvEptFAM3TGriZmfQgdRiuRRyGq', '83 Provincial Road No. 8', 'vietnamese', 'Active'),
('tuanvu1142', 'Tuan', 'Vu', 'Male', 'tuanvu1422', '$2y$10$v3Ikz.Rd9AGOrAd3CZlloeCtRRK0wKdhpp2QaSaPTg5WiqNjUVvYG', '21 Hoang Hoa Tham', 'english', 'Active'),
('username123', 'Dang', 'Tu', 'Male', 'dangtu123@gmail.com', '$2y$10$eIHS/wlYF82ROnO4F0ul9.q18lF4e6ZMspiKy5e7NOb1wjvMi0jAG', '18 Pasteur', 'vietnamese', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(255) NOT NULL,
  `mark` int(5) NOT NULL DEFAULT '1',
  `who` varchar(255) NOT NULL,
  `doctorid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Enabled',
  `cmtid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE `specialty` (
  `id` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gen_specialty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`id`, `name`, `gen_specialty`) VALUES
(1, 'Abdominal Surgery', 'Accident Surgery'),
(4, 'Aesthetic Treatment', 'Anatomy'),
(9, 'Alpine and high altitude medicine', 'Cardiac surgery'),
(24, 'Anankasm', 'Histology and embryology'),
(23, 'Angiography (vascular examination)', 'General Practitioner'),
(13, 'Angst', 'Histology and embryology'),
(21, 'Anti-funcgal therapy', 'Anatomy'),
(25, 'Ung thu nao', 'Than kinh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`),
  ADD KEY `doctor` (`doctor`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosid` (`hosname`),
  ADD KEY `speci` (`specific_specialty`);

--
-- Indexes for table `gen_specialty`
--
ALTER TABLE `gen_specialty`
  ADD PRIMARY KEY (`gen_name`),
  ADD KEY `index` (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`name`),
  ADD KEY `doctorid` (`doctorid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doc` (`doctorid`),
  ADD UNIQUE KEY `wh` (`who`),
  ADD UNIQUE KEY `cmt` (`cmtid`);

--
-- Indexes for table `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`name`),
  ADD KEY `id` (`id`),
  ADD KEY `gen` (`gen_specialty`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `gen_specialty`
--
ALTER TABLE `gen_specialty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialty`
--
ALTER TABLE `specialty`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `hospital` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`doctor`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`specific_specialty`) REFERENCES `specialty` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specialty`
--
ALTER TABLE `specialty`
  ADD CONSTRAINT `specialty_ibfk_1` FOREIGN KEY (`gen_specialty`) REFERENCES `gen_specialty` (`gen_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
