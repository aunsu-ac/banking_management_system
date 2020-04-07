-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 06:28 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbi`
--
CREATE DATABASE IF NOT EXISTS `bbi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bbi`;

-- --------------------------------------------------------

--
-- Table structure for table `active_log_a`
--

CREATE TABLE `active_log_a` (
  `ses_id` int(11) NOT NULL,
  `log_a_name` varchar(255) NOT NULL,
  `log_a_un` varchar(255) NOT NULL,
  `log_a_strt_tim` time DEFAULT NULL,
  `log_a_strt_date` date DEFAULT NULL,
  `log_a_stp_tim` time DEFAULT NULL,
  `log_a_stp_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_log_a`
--

INSERT INTO `active_log_a` (`ses_id`, `log_a_name`, `log_a_un`, `log_a_strt_tim`, `log_a_strt_date`, `log_a_stp_tim`, `log_a_stp_date`) VALUES
(4, 'Aunsu Chandra', 'aunsu28678', '11:17:31', '2018-05-14', '15:46:36', '2018-05-14'),
(5, 'Sanjay Chandra', 'sanjay56838', '15:49:32', '2018-05-14', '15:49:44', '2018-05-14'),
(6, 'Sanjay Chandra', 'sanjay56838', '15:50:06', '2018-05-14', '16:09:40', '2018-05-14'),
(7, 'Sanjay Chandra', 'sanjay56838', '16:09:56', '2018-05-14', '16:11:21', '2018-05-14'),
(8, 'Aunsu Chandra', 'aunsu28678', '16:25:47', '2018-05-14', '16:29:48', '2018-05-14'),
(9, 'Aunsu Chandra', 'aunsu28678', '10:18:35', '2018-05-15', '10:22:23', '2018-05-15'),
(10, 'Aunsu Chandra', 'aunsu28678', '10:22:31', '2018-05-15', '10:22:50', '2018-05-15'),
(11, 'Aunsu Chandra', 'aunsu28678', '10:23:04', '2018-05-15', '10:23:47', '2018-05-15'),
(13, 'Aunsu Chandra', 'aunsu28678', '10:28:49', '2018-05-15', '10:30:26', '2018-05-15'),
(14, 'Aunsu Chandra', 'aunsu28678', '10:48:39', '2018-05-15', '10:51:42', '2018-05-15'),
(15, 'Aunsu Chandra', 'aunsu28678', '21:50:02', '2018-05-15', '22:15:55', '2018-05-15'),
(17, 'Aunsu Chandra', 'aunsu28678', '22:27:29', '2018-05-15', '14:18:36', '2018-05-16'),
(18, 'Aunsu Chandra', 'aunsu28678', '14:18:41', '2018-05-16', '15:33:19', '2018-05-16'),
(19, 'Sanjay Chandra', 'sanjay56838', '15:34:42', '2018-05-16', '15:35:34', '2018-05-16'),
(21, 'Aunsu Chandra', 'aunsu28678', '15:39:20', '2018-05-16', '15:40:23', '2018-05-16'),
(22, 'Aunsu Chandra', 'aunsu28678', '15:40:52', '2018-05-16', '15:43:01', '2018-05-16'),
(23, 'Sanjay Chandra', 'sanjay56838', '15:43:18', '2018-05-16', '15:50:21', '2018-05-16'),
(24, 'Aunsu Chandra', 'aunsu28678', '17:01:58', '2018-05-16', '17:02:09', '2018-05-16'),
(25, 'Sanjay Chandra', 'sanjay56838', '17:02:18', '2018-05-16', '17:02:34', '2018-05-16'),
(26, 'Aunsu Chandra', 'aunsu28678', '09:35:11', '2018-05-17', '09:43:11', '2018-05-17'),
(27, 'Sanjay Chandra', 'sanjay56838', '09:43:20', '2018-05-17', '09:49:33', '2018-05-17'),
(28, 'Aunsu Chandra', 'aunsu28678', '09:55:02', '2018-05-17', '09:55:08', '2018-05-17'),
(29, 'Aunsu Chandra', 'aunsu28678', '10:04:15', '2018-05-17', '10:04:25', '2018-05-17'),
(30, 'Sanjay Chandra', 'sanjay56838', '10:49:40', '2018-05-17', '10:56:52', '2018-05-17'),
(31, 'Aunsu Chandra', 'aunsu28678', '10:56:56', '2018-05-17', '11:04:05', '2018-05-17'),
(32, 'Aunsu Chandra', 'aunsu28678', '17:04:22', '2018-05-17', '17:14:44', '2018-05-17'),
(33, 'Aunsu Chandra', 'aunsu28678', '17:19:54', '2018-05-17', '17:20:10', '2018-05-17'),
(34, 'Aunsu Chandra', 'aunsu28678', '11:07:19', '2018-05-26', '11:18:11', '2018-05-26'),
(35, 'Aunsu Chandra', 'aunsu28678', '14:30:49', '2018-05-26', '14:49:40', '2018-05-26'),
(36, 'Aunsu Chandra', 'aunsu28678', '09:24:02', '2018-05-27', '10:08:21', '2018-05-27'),
(37, 'Aunsu Chandra', 'aunsu28678', '23:29:08', '2018-05-27', '23:31:09', '2018-05-27'),
(38, 'Aunsu Chandra', 'aunsu28678', '23:33:22', '2018-05-27', '23:43:51', '2018-05-27'),
(39, 'Aunsu Chandra', 'aunsu28678', '16:33:03', '2018-05-28', '16:33:25', '2018-05-28'),
(40, 'Aunsu Chandra', 'aunsu28678', '16:33:54', '2018-05-28', '16:34:54', '2018-05-28'),
(41, 'Aunsu Chandra', 'aunsu28678', '11:16:39', '2018-05-29', '11:52:51', '2018-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `active_log_u`
--

CREATE TABLE `active_log_u` (
  `ses_id` int(11) NOT NULL,
  `log_u_name` varchar(255) NOT NULL,
  `log_u_un` varchar(255) NOT NULL,
  `log_u_strt_tim` time DEFAULT NULL,
  `log_u_strt_date` date DEFAULT NULL,
  `log_u_stp_tim` time DEFAULT NULL,
  `log_u_stp_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_log_u`
--

INSERT INTO `active_log_u` (`ses_id`, `log_u_name`, `log_u_un`, `log_u_strt_tim`, `log_u_strt_date`, `log_u_stp_tim`, `log_u_stp_date`) VALUES
(3, 'Sanjay Chandra', 'sanjay56838', '16:15:19', '2018-05-14', '16:21:35', '2018-05-14'),
(4, 'Sanjay Chandra', 'sanjay56838', '16:21:45', '2018-05-14', '16:22:32', '2018-05-14'),
(5, 'Aunsu chandra', 'aunsu28678', '10:23:53', '2018-05-15', '10:28:37', '2018-05-15'),
(6, 'Aunsu chandra', 'aunsu28678', '21:49:39', '2018-05-15', '21:52:33', '2018-05-15'),
(7, 'Aunsu chandra', 'aunsu28678', '22:12:34', '2018-05-15', '22:12:50', '2018-05-15'),
(8, 'Aunsu chandra', 'aunsu28678', '14:21:40', '2018-05-16', '15:33:22', '2018-05-16'),
(9, 'Aunsu chandra', 'aunsu28678', '15:39:46', '2018-05-16', '15:39:48', '2018-05-16'),
(10, 'Sanjay Chandra', 'sanjay56838', '15:50:33', '2018-05-16', '15:56:58', '2018-05-16'),
(11, 'Aunsu chandra', 'aunsu28678', '00:49:18', '2018-05-17', '01:03:20', '2018-05-17'),
(12, 'Aunsu chandra', 'aunsu28678', '09:22:07', '2018-05-17', '09:33:17', '2018-05-17'),
(13, 'Aunsu chandra', 'aunsu28678', '10:04:32', '2018-05-17', '10:07:48', '2018-05-17'),
(14, 'Sanjay Chandra', 'sanjay56838', '10:54:33', '2018-05-17', '10:58:00', '2018-05-17'),
(15, 'Sanjay Chandra', 'sanjay56838', '11:02:33', '2018-05-17', '11:03:15', '2018-05-17'),
(16, 'Aunsu chandra', 'aunsu28678', '16:29:50', '2018-05-17', '17:04:16', '2018-05-17'),
(17, 'Aunsu chandra', 'aunsu28678', '17:14:49', '2018-05-17', '17:15:20', '2018-05-17'),
(18, 'Sanjay Chandra', 'sanjay56838', '17:20:19', '2018-05-17', '17:20:38', '2018-05-17'),
(19, 'Aunsu chandra', 'aunsu28678', '17:20:42', '2018-05-17', '17:21:02', '2018-05-17'),
(20, 'Aunsu chandra', 'aunsu28678', '11:07:49', '2018-05-24', '11:02:36', '2018-05-26'),
(21, 'Aunsu chandra', 'aunsu28678', '11:18:17', '2018-05-26', '11:22:29', '2018-05-26'),
(22, 'Aunsu chandra', 'aunsu28678', '11:34:22', '2018-05-26', '11:34:50', '2018-05-26'),
(23, 'Aunsu chandra', 'aunsu28678', '14:15:36', '2018-05-26', '14:30:30', '2018-05-26'),
(24, 'Aunsu chandra', 'aunsu28678', '14:49:46', '2018-05-26', '08:17:26', '2018-05-27'),
(25, 'Aunsu chandra', 'aunsu28678', '08:17:34', '2018-05-27', '08:36:38', '2018-05-27'),
(26, 'Aunsu chandra', 'aunsu28678', '23:43:56', '2018-05-27', '23:49:18', '2018-05-27'),
(27, 'Aunsu chandra', 'aunsu28678', '11:52:55', '2018-05-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `con_tab`
--

CREATE TABLE `con_tab` (
  `con_id` int(3) NOT NULL,
  `log_a_name` varchar(255) NOT NULL,
  `log_a_con` varchar(255) NOT NULL,
  `log_a_eml` varchar(255) NOT NULL,
  `log_a_un` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_tab`
--

INSERT INTO `con_tab` (`con_id`, `log_a_name`, `log_a_con`, `log_a_eml`, `log_a_un`) VALUES
(1, 'Aunsu Chandra', '8370922703', 'aunsu.ac@gmail.com', 'aunsu28678');

-- --------------------------------------------------------

--
-- Table structure for table `log_a_info`
--

CREATE TABLE `log_a_info` (
  `log_a_id` int(11) NOT NULL,
  `log_a_name` varchar(255) NOT NULL,
  `log_a_con` varchar(255) NOT NULL,
  `log_a_eml` varchar(255) NOT NULL,
  `log_a_un` varchar(255) NOT NULL,
  `log_a_pass` varchar(255) NOT NULL,
  `log_a_stus` varchar(255) NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_a_info`
--

INSERT INTO `log_a_info` (`log_a_id`, `log_a_name`, `log_a_con`, `log_a_eml`, `log_a_un`, `log_a_pass`, `log_a_stus`) VALUES
(10001, 'Aunsu Chandra', '8370922703', 'aunsu.ac@gmail.com', 'aunsu28678', 'aunsu28678', 'open'),
(10002, 'Sanjay Chandra', '8759089890', 'sanjay@gmail.com', 'sanjay56838', 'sanjay56838', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `log_blog`
--

CREATE TABLE `log_blog` (
  `blog_id` int(11) NOT NULL,
  `log_a_name` varchar(255) NOT NULL,
  `log_a_un` varchar(255) NOT NULL,
  `log_blog_sub` varchar(255) NOT NULL,
  `log_blog_data` varchar(270) NOT NULL,
  `log_blog_img` varchar(255) NOT NULL,
  `log_blog_time` time NOT NULL,
  `log_blog_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_blog`
--

INSERT INTO `log_blog` (`blog_id`, `log_a_name`, `log_a_un`, `log_blog_sub`, `log_blog_data`, `log_blog_img`, `log_blog_time`, `log_blog_date`) VALUES
(104, 'Aunsu Chandra', 'aunsu28678', 'test admin image', 'test blog including image', 'uploads/IMG_20180320_170747733.jpg', '11:39:03', '2018-05-16'),
(105, 'Aunsu Chandra', 'aunsu28678', 'A small GIFT for my customer', 'If you want to open this GIFT PACK, you have to open an account on our bank, give your feedback on our page, if your feedback is UNIQUE than the others.\r\nThe gift pack is yours, the gift will be sent to your address.\r\nTHANK YOU.', 'uploads/unnamed.jpg', '13:24:09', '2018-05-16'),
(106, 'Aunsu Chandra', 'aunsu28678', 'Hear is the head quarter of Business Bank of India', 'if you have a Sirus problem contact to webpage showed contacts or your branch, in some Sirus issue you can complain on head quarter. We will find out the problem & solve it as soon as possible.', 'uploads/map1.png', '14:39:17', '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `log_u_info`
--

CREATE TABLE `log_u_info` (
  `log_u_id` int(5) NOT NULL,
  `log_u_name` varchar(255) NOT NULL,
  `log_u_fname` varchar(255) NOT NULL,
  `log_u_add` varchar(255) NOT NULL,
  `log_u_dob` date NOT NULL,
  `log_u_gen` varchar(7) NOT NULL,
  `log_u_con` varchar(10) NOT NULL,
  `log_u_eml` varchar(255) NOT NULL,
  `log_u_un` varchar(255) NOT NULL,
  `log_u_pass` varchar(255) NOT NULL,
  `log_u_bal` varchar(11) NOT NULL DEFAULT '1000',
  `log_u_stus` varchar(10) NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_u_info`
--

INSERT INTO `log_u_info` (`log_u_id`, `log_u_name`, `log_u_fname`, `log_u_add`, `log_u_dob`, `log_u_gen`, `log_u_con`, `log_u_eml`, `log_u_un`, `log_u_pass`, `log_u_bal`, `log_u_stus`) VALUES
(10007, 'Aunsu chandra', 'Buddha dev Chandra', 'Nutanganj,Burdwan-713102', '1996-02-25', 'male', '8370922703', 'aunsu.ac@gmail.com', 'aunsu28678', 'aunsu28678', '10985', 'open'),
(10008, 'Sanjay Chandra', 'sanat chandra', 'telmarui para, burdwan-713101', '1996-12-19', 'male', '8759089890', 'sanjay19121996.sc@gmail.com', 'sanjay56838', 'sanjay56838', '0', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `log_u_tranc`
--

CREATE TABLE `log_u_tranc` (
  `trans_id` int(11) NOT NULL,
  `log_u_name` varchar(255) NOT NULL,
  `log_u_un` varchar(255) NOT NULL,
  `log_u_dep` varchar(11) NOT NULL DEFAULT '0',
  `log_u_wit` varchar(11) NOT NULL DEFAULT '0',
  `log_u_time` time NOT NULL,
  `log_u_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_u_tranc`
--

INSERT INTO `log_u_tranc` (`trans_id`, `log_u_name`, `log_u_un`, `log_u_dep`, `log_u_wit`, `log_u_time`, `log_u_date`) VALUES
(2, 'Aunsu chandra', 'aunsu28678', '1000', '0', '10:47:44', '2018-05-11'),
(3, 'Sanjay Chandra', 'sanjay56838', '1000', '0', '10:48:39', '2018-05-11'),
(4, 'Sanjay Chandra', 'sanjay56838', '0', '1000', '10:28:03', '2018-05-14'),
(5, 'Aunsu Chandra', 'aunsu28678', '1000', '0', '14:48:23', '2018-05-14'),
(6, 'Aunsu Chandra', 'aunsu28678', '0', '1000', '15:14:40', '2018-05-14'),
(7, 'Aunsu Chandra', 'aunsu28678', '10', '0', '15:15:37', '2018-05-14'),
(8, 'Aunsu Chandra', 'aunsu28678', '990', '0', '15:15:49', '2018-05-14'),
(9, 'Aunsu Chandra', 'aunsu28678', '10000', '0', '15:18:37', '2018-05-14'),
(10, 'Aunsu Chandra', 'aunsu28678', '0', '1000', '15:19:18', '2018-05-14'),
(11, 'Aunsu Chandra', 'aunsu28678', '1975', '0', '15:20:51', '2018-05-14'),
(12, 'Aunsu Chandra', 'aunsu28678', '10', '0', '15:21:46', '2018-05-14'),
(13, 'Sanjay Chandra', 'sanjay56838', '20000', '0', '16:16:57', '2018-05-14'),
(14, 'Sanjay Chandra', 'sanjay56838', '0', '20000', '10:19:53', '2018-05-15'),
(15, 'Aunsu chandra', 'aunsu28678', '100', '0', '10:24:40', '2018-05-15'),
(16, 'Aunsu chandra', 'aunsu28678', '0', '100', '10:25:19', '2018-05-15'),
(17, 'Sanjay Chandra', 'sanjay56838', '0', '1000', '10:51:58', '2018-05-17'),
(18, 'Sanjay Chandra', 'sanjay56838', '876', '0', '10:54:48', '2018-05-17'),
(19, 'Sanjay Chandra', 'sanjay56838', '0', '10', '10:54:58', '2018-05-17'),
(20, 'Sanjay Chandra', 'sanjay56838', '0', '1866', '11:11:04', '2018-05-26'),
(21, 'Aunsu chandra', 'aunsu28678', '200', '0', '11:19:09', '2018-05-26'),
(22, 'Aunsu chandra', 'aunsu28678', '0', '200', '11:19:46', '2018-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `v_feedback`
--

CREATE TABLE `v_feedback` (
  `v_f_id` int(11) NOT NULL,
  `v_f_name` varchar(255) NOT NULL,
  `v_f_eml` varchar(255) NOT NULL,
  `v_f_typ` varchar(10) NOT NULL,
  `v_f_rng` varchar(255) NOT NULL,
  `v_f_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v_feedback`
--

INSERT INTO `v_feedback` (`v_f_id`, `v_f_name`, `v_f_eml`, `v_f_typ`, `v_f_rng`, `v_f_msg`) VALUES
(501, 'Aunsu Chandra', 'aunsu.ac@gmail.com', 'good', '9', 'you have to improve your website\'s graphical structure'),
(502, 'Sanjay Chandra', 'sanjay@gmail.com', 'good', '5', 'this website is aswm but the graphical  structure of this website is too poor you guess have to improve it'),
(503, 'Ashani Patra', 'ashani.patra1991@gmail.com', 'excellent', '9', 'Great job. Hope you will get a great job.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_log_a`
--
ALTER TABLE `active_log_a`
  ADD PRIMARY KEY (`ses_id`);

--
-- Indexes for table `active_log_u`
--
ALTER TABLE `active_log_u`
  ADD PRIMARY KEY (`ses_id`);

--
-- Indexes for table `con_tab`
--
ALTER TABLE `con_tab`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `log_a_info`
--
ALTER TABLE `log_a_info`
  ADD PRIMARY KEY (`log_a_id`),
  ADD UNIQUE KEY `UNIQUE` (`log_a_un`);

--
-- Indexes for table `log_blog`
--
ALTER TABLE `log_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `log_u_info`
--
ALTER TABLE `log_u_info`
  ADD PRIMARY KEY (`log_u_id`),
  ADD UNIQUE KEY `UNIQUE` (`log_u_un`);

--
-- Indexes for table `log_u_tranc`
--
ALTER TABLE `log_u_tranc`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `v_feedback`
--
ALTER TABLE `v_feedback`
  ADD PRIMARY KEY (`v_f_id`),
  ADD UNIQUE KEY `v_f_eml` (`v_f_eml`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_log_a`
--
ALTER TABLE `active_log_a`
  MODIFY `ses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `active_log_u`
--
ALTER TABLE `active_log_u`
  MODIFY `ses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `con_tab`
--
ALTER TABLE `con_tab`
  MODIFY `con_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log_a_info`
--
ALTER TABLE `log_a_info`
  MODIFY `log_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;
--
-- AUTO_INCREMENT for table `log_blog`
--
ALTER TABLE `log_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `log_u_info`
--
ALTER TABLE `log_u_info`
  MODIFY `log_u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;
--
-- AUTO_INCREMENT for table `log_u_tranc`
--
ALTER TABLE `log_u_tranc`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `v_feedback`
--
ALTER TABLE `v_feedback`
  MODIFY `v_f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
