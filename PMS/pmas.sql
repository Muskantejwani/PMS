-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 12:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` char(5) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `comfirm_password` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `password`, `comfirm_password`, `Company`) VALUES
('019', 'muskan@88', 'muskan@88', 'newone'),
('020', 'asd1234', 'asd1234', 'ABC'),
('100', '12345', '12345', 'ABD'),
('678', '123456', '12345', 'ABE'),
('8989', '1234', '123', 'ABF');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `s_id` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`s_id`, `name`, `email`, `phone`, `password`) VALUES
('555', 'Muskan ', 'muskan@gmail.com', '0312345678', 'muskan@88'),
('666', 'sandy', 'sandy@gmail.com', '12345678911', 'sandy@88');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `s_id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`s_id`, `name`, `email`, `phone`, `password`) VALUES
('12', 'Muskan ', 'muskan@gmil.com', '12345678909', ''),
('1212', 'Muskan ', 'muskan1.21@gmil.com', '12345678909', 'muski@89'),
('123', 'Muskan', 'Muskan@44gmail.com', '12345678999', 'muskan@88'),
('222', 'Adi', 'Adi@gmail.com', '12345678909', 'Adi@88');

-- --------------------------------------------------------

--
-- Table structure for table `cl_msg`
--

CREATE TABLE `cl_msg` (
  `cl_msg_id` int(11) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  `mag` varchar(250) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_msg`
--

INSERT INTO `cl_msg` (`cl_msg_id`, `s_id`, `f_id`, `mag`, `filename`) VALUES
(3, 's113', 'f112', 'hello dear', ''),
(4, 's113', 'f112', 'hello', ''),
(5, '555', '12388', 'kjiutuygg', ''),
(15, '555', '12388', 'hello too ', ''),
(16, '555', '12388', 'Hello 12388', 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `f_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `domain` varchar(200) NOT NULL,
  `research` varchar(200) NOT NULL,
  `others` varchar(500) NOT NULL,
  `e_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`f_id`, `name`, `email`, `phone`, `password`, `qualification`, `domain`, `research`, `others`, `e_pic`) VALUES
('12388', 'Muskan', 'muskan@gmail.com', '03333333333', 'muskan@88', 'Computer science', 'NULL', 'NULL', 'NULL', ''),
('12399', 'sandy', 'sandy4@gmail.com', '12345678990', 'sandy@88', 'BBA', 'NULL', 'NULL', 'NULL', ''),
('f112', 'Sandy', 'sandy@gmail.com', '123', 'sandy@88', 'bba', 'java', 'php', 'asp', '');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `meeting_id` int(5) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `submission_date` date NOT NULL,
  `time` time NOT NULL,
  `desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting_id`, `f_id`, `s_id`, `project_name`, `date`, `submission_date`, `time`, `desc`) VALUES
(6, '12388', '555', 'LMS', '2022-08-09', '0000-00-00', '09:11:00', 'project will be submit on 20 august 2022'),
(8, '12388', '555', 'PMS', '2022-08-08', '0000-00-00', '09:41:00', 'project will subit on 15 september 2022'),
(16, '12399', '666', 'Cell 100 Products', '2022-08-25', '2022-10-05', '14:32:00', 'should done on time');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msg_id` int(5) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msg_id`, `s_id`, `f_id`, `msg`, `filename`) VALUES
(23, '555', '12388', 'Muskan', ''),
(38, '555', '12388', 'hello', 'app-3.jpg'),
(44, '555', '12388', 'hello Mama', 'baloons.docx'),
(46, '555', '12388', 'ooooooooo', 'blog-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `myprojects`
--

CREATE TABLE `myprojects` (
  `id` int(11) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myprojects`
--

INSERT INTO `myprojects` (`id`, `proname`, `status`) VALUES
(1, 'LMS', 'Active'),
(2, 'PMS', 'inActive'),
(3, 'cell 100 products', 'inActive'),
(4, 'cell 100 products', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` int(10) NOT NULL,
  `s_id` varchar(10) DEFAULT NULL,
  `f_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `s_id`, `f_id`) VALUES
(78, '555', '12388'),
(80, '666', '12399'),
(123, '555', '12388'),
(12345, '555', '12388');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(10) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `s_id`, `f_id`) VALUES
(1, 's112', 'f987'),
(4, 's113', 'f908'),
(789, 'we34', 'f112'),
(790, 's113', 'f987'),
(791, 's113', 'f112'),
(792, 's113', 'f112'),
(794, 's113', 'f112');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL COMMENT ' ',
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `password`, `confirm_password`, `Company`) VALUES
(88, 'Muskan', 'Muskan', 'Newone'),
(99, 'hello123', 'hello123', '123'),
(123, 'muskan@88', 'muskan@88', 'Golden');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`id`, `filename`, `created`) VALUES
(1, '1-img-1.png', '2022-08-17 21:37:59'),
(2, '2-img-2.png', '2022-08-17 21:38:51'),
(3, '3-lab4.docx', '2022-08-17 21:40:17'),
(4, '4-about.jpg', '2022-09-08 09:34:04'),
(5, '5-about.jpg', '2022-09-12 14:20:45'),
(6, '6-app-2.jpg', '2022-09-12 15:49:39'),
(7, '7-about-bg.png', '2022-09-12 16:19:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `cl_msg`
--
ALTER TABLE `cl_msg`
  ADD PRIMARY KEY (`cl_msg_id`),
  ADD KEY `s_id` (`s_id`,`f_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `f_id` (`f_id`,`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `s_id` (`s_id`,`f_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `myprojects`
--
ALTER TABLE `myprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cl_msg`
--
ALTER TABLE `cl_msg`
  MODIFY `cl_msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `msg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `myprojects`
--
ALTER TABLE `myprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=795;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ', AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cl_msg`
--
ALTER TABLE `cl_msg`
  ADD CONSTRAINT `m1` FOREIGN KEY (`s_id`) REFERENCES `client` (`s_id`),
  ADD CONSTRAINT `m2` FOREIGN KEY (`f_id`) REFERENCES `employee` (`f_id`);

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `mkey1` FOREIGN KEY (`f_id`) REFERENCES `employee` (`f_id`),
  ADD CONSTRAINT `mkey2` FOREIGN KEY (`s_id`) REFERENCES `client` (`s_id`);

--
-- Constraints for table `msg`
--
ALTER TABLE `msg`
  ADD CONSTRAINT `makey1` FOREIGN KEY (`s_id`) REFERENCES `client` (`s_id`),
  ADD CONSTRAINT `makey2` FOREIGN KEY (`f_id`) REFERENCES `employee` (`f_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `client` (`s_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `employee` (`f_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fkey1` FOREIGN KEY (`s_id`) REFERENCES `client` (`s_id`),
  ADD CONSTRAINT `fkey2` FOREIGN KEY (`f_id`) REFERENCES `employee` (`f_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
