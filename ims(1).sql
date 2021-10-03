-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 05:27 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `join_job`
--

CREATE TABLE `join_job` (
  `j_id` int(11) NOT NULL,
  `j_user` varchar(64) NOT NULL,
  `j_company` varchar(64) NOT NULL,
  `j_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `j_status` int(11) NOT NULL DEFAULT '0',
  `j_post` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `join_job`
--

INSERT INTO `join_job` (`j_id`, `j_user`, `j_company`, `j_time`, `j_status`, `j_post`) VALUES
(51, '34', '29', '2018-08-01 20:50:40', 1, '12671559d0aa85098cafa19f548df731c4ca4238a0b923820dcc509a6f75849b'),
(52, '35', '29', '2018-08-01 20:53:47', 1, '6eb5d892c45ece24068f73411678d3d7cfcd208495d565ef66e7dff9f98764da'),
(53, '38', '29', '2018-08-13 13:39:56', 1, '6eb5d892c45ece24068f73411678d3d7cfcd208495d565ef66e7dff9f98764da'),
(54, '38', '29', '2018-08-13 13:40:34', 0, '12671559d0aa85098cafa19f548df731c4ca4238a0b923820dcc509a6f75849b'),
(55, '39', '29', '2018-08-13 13:45:38', 0, '12671559d0aa85098cafa19f548df731c4ca4238a0b923820dcc509a6f75849b'),
(56, '36', '29', '2018-08-13 16:43:48', 1, '6eb5d892c45ece24068f73411678d3d7cfcd208495d565ef66e7dff9f98764da'),
(57, '34', '29', '2018-08-13 17:40:46', 0, '6eb5d892c45ece24068f73411678d3d7cfcd208495d565ef66e7dff9f98764da'),
(58, '34', '27', '2018-09-03 23:57:08', 0, 'fa3f27dd87cc2cc1cdc1b7fcbbb107c7c9f0f895fb98ab9159f51fd0297e236d'),
(59, '40', '29', '2018-09-12 22:34:55', 1, '6eb5d892c45ece24068f73411678d3d7cfcd208495d565ef66e7dff9f98764da');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_code` varchar(64) NOT NULL,
  `m_status` int(1) NOT NULL DEFAULT '1',
  `m_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `m_name`, `m_code`, `m_status`, `m_count`) VALUES
(17, 'Civil', '67ec0b59227d3f9d4e3230182eff8e9546ba9f2a6976570b0353203ec4474217', 1, 1),
(18, 'Archi', 'c275ff04fcf99156252671f301b0788207a96b1f61097ccb54be14d6a47439b0', 1, 2),
(19, 'IT', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', 1, 18),
(20, 'EP', '078401532866081dddda6744220b4c7599c5e07b4d5de9d18c350cdf64c5aa3d', 1, 2),
(21, 'EC', '3fd6b696867d70225deda7868308679b0f96613235062963ccde717b18f97592', 1, 1),
(22, 'MP', 'c90a918b859bd1e56cf99af6246b128e647bba344396e7c8170902bcf2e15551', 1, 2),
(23, 'MC', '92a54b358b4cf53cca4095e4697e100467e103b0761e60683e83c559be18d40c', 1, 2),
(24, 'PHP', '2fec392304a5c23ac138da22847f9b7c8e6b42f1644ecb1327dc03ab345e618b', 0, 0),
(25, 'Java', 'd52387880e1ea22817a72d3759213819df7f28ac89ca37bf1abd2f6c184fe1cf', 0, 0),
(26, 'DBMS', 'bf2fa4d434adc570b724cc873a6546361a5b1e4daae265b790965a275b53ae50', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_menu` varchar(64) NOT NULL,
  `p_body` text NOT NULL,
  `p_interview` date NOT NULL,
  `p_user` varchar(255) NOT NULL,
  `p_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_count` int(11) NOT NULL,
  `p_code` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_title`, `p_menu`, `p_body`, `p_interview`, `p_user`, `p_time`, `p_count`, `p_code`) VALUES
(34, 'Project Engineer', '67ec0b59227d3f9d4e3230182eff8e9546ba9f2a6976570b0353203ec4474217', '&lt;p&gt;&lt;b&gt;Project Engineer&amp;nbsp;&lt;span style=&quot;font-family: &amp;quot;Arial Black&amp;quot;;&quot;&gt;ï»¿&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;Comic Sans MS&amp;quot;;&quot;&gt;ï»¿&lt;/span&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt;ï»¿&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Pro Paragon Construction Co.,Ltd&lt;/p&gt;&lt;p&gt;Thanlyin,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp; 21 June 2018&lt;/p&gt;&lt;p&gt;Job Reference: MJ1485227642806&lt;/p&gt;', '2018-08-01', '27', '2018-08-02 03:14:06', 3, 'fa3f27dd87cc2cc1cdc1b7fcbbb107c7c9f0f895fb98ab9159f51fd0297e236d'),
(35, 'Sr. Site Engineer (Civil)', '67ec0b59227d3f9d4e3230182eff8e9546ba9f2a6976570b0353203ec4474217', '&lt;p&gt;&lt;b&gt;Sr. Site Engineer (Civil)&amp;nbsp;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Pro Paragon Construction Co.,Ltd&lt;/p&gt;&lt;p&gt;Thanlyin,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1485227642806&lt;/p&gt;', '2018-08-01', '27', '2018-08-02 03:16:08', 0, '19105609fe7ea2131e1acc0b897ed94d8f14e45fceea167a5a36dedd4bea2543'),
(36, 'Site Maintenance (M&amp;E) Supervisor', '67ec0b59227d3f9d4e3230182eff8e9546ba9f2a6976570b0353203ec4474217', '&lt;p&gt;&lt;b&gt;Site Maintenance (M&amp;amp;E) Supervisor&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Pro Paragon Construction Co.,Ltd&lt;/p&gt;&lt;p&gt;Thanlyin,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1485227642806&lt;/p&gt;', '2018-08-01', '27', '2018-08-02 03:17:33', 0, 'e42dfe587f72fc00edbfa547b08f4fe3a87ff679a2f3e71d9181a67b7542122c'),
(37, 'Structural Designer', 'c275ff04fcf99156252671f301b0788207a96b1f61097ccb54be14d6a47439b0', '&lt;p&gt;&lt;b&gt;Structural Designer&amp;nbsp;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Min Dhama Company Ltd.&lt;/p&gt;&lt;p&gt;Insein,&amp;nbsp; Yangon&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1531821695572&lt;/p&gt;', '2018-08-01', '28', '2018-08-02 03:20:33', 0, '5d4bebd8ced790f92aed4bad79546873a87ff679a2f3e71d9181a67b7542122c'),
(38, 'Network Engineer', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', '&lt;p&gt;Network Engineer&lt;/p&gt;&lt;p&gt;CB BANK&lt;/p&gt;&lt;p&gt;Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1482296240574&lt;/p&gt;&lt;p&gt;Our company is calling the internship from technological universities. Our need the students who are interested in network for networking works from our company.&lt;br&gt;&lt;/p&gt;', '2018-08-01', '29', '2018-08-02 03:26:58', 9, '6eb5d892c45ece24068f73411678d3d7cfcd208495d565ef66e7dff9f98764da'),
(39, 'Information Security Officer', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', '&lt;p&gt;&lt;b&gt;Information Security Officer&lt;/b&gt;&lt;/p&gt;&lt;p&gt;CB BANK&lt;/p&gt;&lt;p&gt;Yangon&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1482296240574&lt;/p&gt;', '2018-08-01', '29', '2018-08-02 03:27:48', 4, '12671559d0aa85098cafa19f548df731c4ca4238a0b923820dcc509a6f75849b'),
(40, 'ATM Technician', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', '&lt;p&gt;&lt;b&gt;ATM Technician&lt;/b&gt;&lt;/p&gt;&lt;p&gt;CB Bank&lt;/p&gt;&lt;p&gt;Yangon&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1482296240574&lt;/p&gt;', '2018-08-01', '29', '2018-08-02 03:28:34', 2, '278abc1ac76dcc45d47a365921b81028a87ff679a2f3e71d9181a67b7542122c'),
(41, 'Electrician', '078401532866081dddda6744220b4c7599c5e07b4d5de9d18c350cdf64c5aa3d', '&lt;p&gt;&lt;b&gt;Electrician&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Coca Cola Pinya Beverages Myanmar Ltd&lt;/p&gt;&lt;p&gt;Yangon&amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ39546&lt;/p&gt;', '2018-08-01', '30', '2018-08-02 03:31:20', 0, 'bc965524927486f6e96ac1c422594324eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(42, 'PLC Engineer', '078401532866081dddda6744220b4c7599c5e07b4d5de9d18c350cdf64c5aa3d', '&lt;p&gt;&lt;b&gt;PLC Engineer&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Coca Cola Pinya Beverages Myanmar Ltd&lt;/p&gt;&lt;p&gt;Yangon&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ39546&lt;/p&gt;', '2018-08-01', '30', '2018-08-02 03:32:26', 0, '97b6a019f47b38e868f92bd3334a6b0bc4ca4238a0b923820dcc509a6f75849b'),
(43, 'Electrical Engineer', '078401532866081dddda6744220b4c7599c5e07b4d5de9d18c350cdf64c5aa3d', '&lt;p&gt;&lt;b&gt;Electrical Engineer&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Coca Cola Pinya Beverages Myanmar Ltd&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ39546&lt;/p&gt;', '2018-08-01', '30', '2018-08-02 03:35:04', 0, '334bf42531ec0ce4bc346d8814cf17e1a87ff679a2f3e71d9181a67b7542122c'),
(44, 'Graphic Designer', '3fd6b696867d70225deda7868308679b0f96613235062963ccde717b18f97592', '&lt;p&gt;&lt;b&gt;Graphic Designer&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Nibban Electric and Electronics&lt;/p&gt;&lt;p&gt;East Dagon,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1461232729806&lt;/p&gt;', '2018-08-01', '31', '2018-08-02 03:37:35', 0, 'd6c84896c41235b2e724a34956291ee0d3d9446802a44259755d38e6d163e820'),
(45, 'Service Repair Person', '3fd6b696867d70225deda7868308679b0f96613235062963ccde717b18f97592', '&lt;p&gt;&lt;b&gt;Service Repair Person&lt;/b&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Nibban Electric and Electronics&lt;/p&gt;&lt;p&gt;East Dagon,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1461232729806&lt;/p&gt;', '2018-08-01', '31', '2018-08-02 03:38:36', 0, '6bfcd5b12cf7ae47aa2ddcd322c08d1ea87ff679a2f3e71d9181a67b7542122c'),
(46, 'Service Technician (Aircon /Refrigerator/ Freezer)', '3fd6b696867d70225deda7868308679b0f96613235062963ccde717b18f97592', '&lt;p&gt;&lt;b&gt;Service Technician (Aircon /Refrigerator/ Freezer)&lt;/b&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Nibban Electric and Electronics&lt;/p&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;p&gt;&amp;nbsp;East Dagon,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp; 31 July 2018&lt;/p&gt;&lt;p&gt;Job Reference: MJ1461232729806&lt;/p&gt;', '2018-08-01', '31', '2018-08-02 03:39:35', 0, 'b15cdfbafdda03494adf06fcb030adb3a87ff679a2f3e71d9181a67b7542122c'),
(47, 'Maintenance Technician (M&amp;E) _ FORD Assembly Factory_ East Dagon', 'c90a918b859bd1e56cf99af6246b128e647bba344396e7c8170902bcf2e15551', '&lt;p&gt;&lt;b&gt;Maintenance Technician (M&amp;amp;E) _ FORD Assembly Factory_ East Dagon&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Capital Automotive Limited&lt;/p&gt;&lt;p&gt;East Dagon,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp; 30 July 2018&lt;/p&gt;&lt;p&gt;Job Reference: MJ1527129857956&lt;/p&gt;', '2018-08-01', '32', '2018-08-02 03:43:07', 0, '36a9a1dba6d58a5adc4fe6ab481df30beccbc87e4b5ce2fe28308fd9f2a7baf3'),
(48, 'Quality Inspector _ FORD (Service Department)', 'c90a918b859bd1e56cf99af6246b128e647bba344396e7c8170902bcf2e15551', '&lt;p&gt;&lt;b&gt;Quality Inspector _ FORD (Service Department)&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Capital Automotive Limited&lt;/p&gt;&lt;p&gt;East Dagon,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1527129857956&lt;/p&gt;', '2018-08-01', '32', '2018-08-02 03:44:03', 0, 'fcfcc56b7df57579f8c7877c16f22111cfcd208495d565ef66e7dff9f98764da'),
(49, 'Automotive Technician _ FORD', 'c90a918b859bd1e56cf99af6246b128e647bba344396e7c8170902bcf2e15551', '&lt;p&gt;&lt;b&gt;Automotive Technician _ FORD&amp;nbsp;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Capital Automotive Limited&lt;/p&gt;&lt;p&gt;East Dagon,&amp;nbsp; Yangon&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ1527129857956&lt;/p&gt;', '2018-08-01', '32', '2018-08-02 03:45:03', 0, 'f92505ab7b378ea31fdbab83a0f517df45c48cce2e2d7fbdea1afc51c7c6ad26'),
(50, 'Mechatronic Engineer', '92a54b358b4cf53cca4095e4697e100467e103b0761e60683e83c559be18d40c', '&lt;p&gt;&lt;b&gt;Mechatronic Engineer&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Coca Cola Pinya Beverages Myanmar Ltd&lt;/p&gt;&lt;p&gt;&amp;nbsp;Yangon&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Job Reference: MJ39546&lt;/p&gt;', '2018-08-01', '33', '2018-08-02 03:48:30', 0, 'f850c50f5dc430874a84b4d4d33e643fc9f0f895fb98ab9159f51fd0297e236d');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_uname` varchar(60) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_role` int(2) NOT NULL,
  `u_status` int(1) NOT NULL DEFAULT '1',
  `u_email` varchar(100) NOT NULL,
  `u_menu` varchar(64) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_roll` varchar(12) NOT NULL,
  `u_company` varchar(255) NOT NULL,
  `u_phone` varchar(15) NOT NULL,
  `u_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_uname`, `u_password`, `u_time`, `u_role`, `u_status`, `u_email`, `u_menu`, `u_gender`, `u_roll`, `u_company`, `u_phone`, `u_address`) VALUES
(1, 'Thu Zar Aung', 'admin', '$2y$10$mu0VhmFjN.2o6kXpX8z1oO.ZNtbG6G8DoZE6kOPw7pUOw.B4WpCA6', '2018-07-07 07:22:12', 1, 1, 'admin@gmail.com', '', '', '', '', '', ''),
(27, 'U Thiha', 'thiha', '$2y$10$U49qraGmuy.zBk.oEhMVhu23dVQcRgRI8VdCZOOGnW0P0YCQcO62O', '2018-08-02 03:11:07', 3, 1, 'thiha@gmail.com', '', '', '', 'Pro Paragon Construction Co.,Ltd', '09770008954', 'Thanlyin,  Yangon'),
(28, 'Daw Moht Moht', 'moht', '$2y$10$99jXHxc2eY8bo9cjLNWdt.vmmkDYo/0XtCRhN7qzGZMpG35JI8g26', '2018-08-02 03:19:28', 3, 1, 'moht@gmail.com', '', '', '', 'Min Dhama Company Ltd.', '09770008954', 'Insein,  Yangon'),
(29, 'Daw Theint Theint Wai', 'theint', '$2y$10$sJnbfeJ2xx3uMOel.VYI9ehf1EpMp0ZJGkx7tLxgaS1cDzYp3EeR2', '2018-08-02 03:25:41', 3, 1, 'theinttheintwai96@gmail.com', '', '', '', 'CB BANK', '09770008954', 'Yangon'),
(30, 'Daw Kay Thi', 'kaythi', '$2y$10$RM83p52qawuG68AFOhVIpeEbzLmZEbR/prz4efc908bfrJ7PkHGam', '2018-08-02 03:30:20', 3, 1, 'kaythi@gmail.com', '', '', '', 'Coca Cola Pinya Beverages Myanmar Ltd', '09770008954', 'Yangon'),
(31, 'U Wai Lin', 'wailin', '$2y$10$bWNK5trgZxZhIWMPcjhrdOO6b.jvRleXUG8gvyzLV2SQJohwUzS1.', '2018-08-02 03:36:35', 3, 1, 'wailin@gmail.com', '', '', '', 'Nibban Electric and Electronics', '09770008954', 'East Dagon,  Yangon'),
(32, 'U Yarzar', 'yarzar', '$2y$10$8kQ1BrTJeP99nevMSjYwU.mFAHMu9NDJvr3vkOTG9KNQiyw0TFMkm', '2018-08-02 03:41:28', 3, 1, 'yarzar@gmail.com', '', '', '', 'Capital Automotive Limited', '09770008954', 'East Dagon,  Yangon'),
(33, 'U Myo', 'myo', '$2y$10$Bs7YGF7glXDcZLek6/R1UObjnkdmLiyf9TJnKrhItHlC4BPDh1mbC', '2018-08-02 03:47:12', 3, 1, 'myo@gmail.com', '', '', '', 'Coca Cola Pinya Beverages Myanmar Ltd', '09770008954', 'Yangon'),
(34, 'Hnin Yu Khaing', 'hnin', '$2y$10$aoJB3V.wwMQ.6fLcKY4u4.Z.BfI79xnCROPOZkAVROTEFrHFeh1qe', '2018-08-02 03:50:18', 2, 1, 'hnin@gmail.com', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', 'female', 'VI_IT_14', '', '09786607401', 'Yangon'),
(35, 'Thae Ei Phyu', 'thaeei', '$2y$10$m5GhlNpA5mDgm1N8dN3WvOLKaGY.t9QY0.OvHsO3IQ9PuqNAOiDPq', '2018-08-02 03:53:26', 2, 1, 'thaeei@gmail.com', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', 'female', 'VI_IT_20', '', '09455725254', 'Hmawbi,Yangon'),
(36, 'pann ei', 'pannei', '$2y$10$r4vbrJHo09nxHRWk28kibO8HigVQIFqYe5hjs6OCHM73D4w6PsDaW', '2018-08-05 20:56:03', 2, 1, 'pannei@gmail.com', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', 'female', 'VI_IT_27', '', '09770008954', 'Hmawbi'),
(38, 'Mya Kay Hlaing', 'mya', '$2y$10$XF04J8M7k6a/kxv3jnFQKuXd9IN4h5.snyHPdmt8p20IbPlUesOpK', '2018-08-13 20:26:51', 2, 1, 'mya@gmail.com', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', 'female', 'VI_IT_67', '', '09263957680', 'Insein, Yangon'),
(39, 'Kyi Pyar Nyein Htut', 'kyipyar', '$2y$10$tTU70..uH.8jMiYhiPiRdOChqgsArXYHEBkWLE9SBPMr5Oil80tBu', '2018-08-13 20:44:34', 2, 1, 'kyipyar@gmail.com', 'cd32106bcb6de321930cf34574ea388cb7bb35b9c6ca2aee2df08cf09d7016c2', 'female', 'VI_IT_16', '', '09250130198', 'No.41, Taw Win Housing, North Dagon, Yangon'),
(40, 'Hla Hla', 'Hla', '$2y$10$b7tabGsY6ACGkOCAEeuW7Oxxqhn1XvvS4O5kc9BTFdgOb8kMP3bmG', '2018-08-14 05:20:22', 2, 1, 'hla@gmail.com', '67ec0b59227d3f9d4e3230182eff8e9546ba9f2a6976570b0353203ec4474217', 'female', 'VI_EP_1', '', '09770008954', 'yangon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `join_job`
--
ALTER TABLE `join_job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `join_job`
--
ALTER TABLE `join_job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
