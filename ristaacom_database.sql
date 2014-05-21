-- phpMyAdmin SQL Dump
-- version 2.11.10
-- http://www.phpmyadmin.net
--
-- Host: mysql5.namesco.net
-- Generation Time: Sep 14, 2011 at 01:35 PM
-- Server version: 5.0.77
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ristaacom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `last_login`) VALUES
('admin', 'admin', 'Monday September 12, 2011, 01:03 PM');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `from` varchar(255) NOT NULL default '',
  `to` varchar(255) NOT NULL default '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL default '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 'ruchika', 'ruchika', 'hi', '2011-06-16 09:21:20', 1),
(2, 'ruchika', 'radhika', 'hi', '2011-06-16 09:22:02', 1),
(3, 'radhika', 'ruchika', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2011-06-16 09:22:43', 1),
(4, 'ruchika', 'ruchika', 'hi', '2011-06-16 14:00:32', 1),
(5, 'ruchika', 'ruchika', 'ghjk', '2011-06-16 14:37:45', 1),
(6, 'ruchika', 'radhika', 'hi', '2011-06-28 11:08:15', 1),
(7, 'radhika', 'ruchika', 'yes hello', '2011-06-28 11:08:58', 1),
(8, 'ruchika', 'radhika', 'i am bhawani.....', '2011-06-28 11:09:14', 1),
(9, 'g9bhawani', 'g9bhawani', 'hi', '2011-08-18 07:27:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delete_account`
--

CREATE TABLE IF NOT EXISTS `delete_account` (
  `s_no` int(5) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `request_time` varchar(40) NOT NULL,
  PRIMARY KEY  (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `delete_account`
--

INSERT INTO `delete_account` (`s_no`, `username`, `reason`, `request_time`) VALUES
(1, 'testing', 'testing', 'Wednesday May 18, 2011, 12:23 AM'),
(2, 'aaditya', 'testingh\r\n', 'Wednesday May 18, 2011, 12:24 AM'),
(3, 'by admin', 'by admin', 'Thursday May 19, 2011, 04:04 AM'),
(4, 'by admin', 'by admin', 'Thursday May 19, 2011, 04:09 AM'),
(5, 'by admin', 'by admin', 'Thursday May 19, 2011, 04:33 AM'),
(6, 'by admin', 'by admin', 'Thursday May 19, 2011, 05:03 AM'),
(7, 'by admin', 'by admin', 'Friday May 27, 2011, 04:07 AM'),
(8, 'kapil1', 'gfjgjfgj', 'Monday June 13, 2011, 12:27 AM'),
(9, 'kapil1', 'rtetreter', 'Monday June 13, 2011, 12:27 AM'),
(10, 'naveen', 'sdfsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'Monday June 13, 2011, 12:40 AM'),
(11, 'aaditya', 'dsgsdgsdgdsgsdgsdgs', 'Monday June 13, 2011, 01:26 AM'),
(12, '', 'dsgsdgsdgdsgsdgsdgs', 'Monday June 13, 2011, 01:28 AM'),
(13, 'anuska', 'dsafafs', 'Monday June 13, 2011, 01:28 AM'),
(14, 'by admin', 'by admin', 'Thursday August 18, 2011, 08:01 AM'),
(15, 'by admin', 'by admin', 'Tuesday September 06, 2011, 12:19 PM'),
(16, 'by admin', 'by admin', 'Tuesday September 06, 2011, 12:19 PM'),
(17, 'by admin', 'by admin', 'Tuesday September 06, 2011, 12:20 PM'),
(18, 'by admin', 'by admin', 'Tuesday September 06, 2011, 12:20 PM');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `s_no` int(15) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `post_time` varchar(35) NOT NULL,
  PRIMARY KEY  (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`s_no`, `username`, `email`, `user_email`, `message`, `post_time`) VALUES
(1, 'navneet', 'rekha.gahlot@softwarehouse.co', 'rmbhati11@gmail.com', 'hello', 'Thursday June 02, 2011, 01:08 AM'),
(2, 'navneet', 'rekha.gahlot@softwarehouse.co', 'rmbhati11@gmail.com', 'hi', 'Thursday June 02, 2011, 01:10 AM'),
(10, 'ruchika', 'g8bhawani@gmail.com', 'g8bhawani@gmail.com', 'Hello Ruchika I am Interested in you......', 'Saturday June 18, 2011, 07:08 AM'),
(11, 'ruchika', 'g8bhawani@gmail.com', 'rmbhati10@gmail.com', 'lj', 'Saturday June 18, 2011, 07:10 AM'),
(12, 'ruchika', 'g8bhawani@gmail.com', 'g8bhawani@gmail.com', 'GFHGFHGFHGFH', 'Monday June 27, 2011, 02:41 PM'),
(37, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'bhawani.shankar@softwarehouse.co', 'I am bhawani and I am intrested in your profile', 'Friday July 01, 2011, 01:23 PM'),
(36, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in your profile', 'Friday July 01, 2011, 01:21 PM'),
(35, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in your profile', 'Friday July 01, 2011, 01:20 PM'),
(34, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in your profile', 'Friday July 01, 2011, 01:20 PM'),
(33, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in you', 'Friday July 01, 2011, 01:16 PM'),
(32, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in you', 'Friday July 01, 2011, 01:16 PM'),
(31, 'rohini', 'radha_krishna1432000@yahoo.co.in', 'g8bhawani@gmail.com', 'Hello Radhika I am rohini and i am intrested in you', 'Friday July 01, 2011, 06:19 AM'),
(30, 'rohini', 'radha_krishna1432000@yahoo.co.in', 'g8bhawani@gmail.com', 'Hello Ruchika I am rohini and i am intrested in you', 'Friday July 01, 2011, 06:18 AM'),
(38, 'ruchika', 'g8bhawani@gmail.com', 'g8bhawani@gmail.com', 'Hello Radhika I am Interested in you......', 'Friday July 01, 2011, 01:27 PM'),
(39, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in you......', 'Friday July 01, 2011, 01:30 PM'),
(40, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in you......', 'Friday July 01, 2011, 01:32 PM'),
(41, 'ruchika', 'g8bhawani@gmail.com', 'g8bhawani@gmail.com', 'Hello aradhana sinha I am Interested in you......', 'Friday July 01, 2011, 01:33 PM'),
(42, 'ruchika', 'RS.1058', 'bhawani', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 01:47 PM'),
(43, 'ruchika', 'RS.1058', 'bhawani', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 01:48 PM'),
(44, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 01:57 PM'),
(45, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 02:47 PM'),
(46, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 02:48 PM'),
(47, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 02:48 PM'),
(48, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 02:48 PM'),
(49, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 02:48 PM'),
(50, 'ruchika', 'g8bhawani@gmail.com', 'bhawani.shankar@softwarehouse.co', 'Hello bhawani I am Interested in your profile......', 'Friday July 01, 2011, 02:49 PM'),
(51, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in your profile', 'Friday July 01, 2011, 02:49 PM'),
(52, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in your profile', 'Friday July 01, 2011, 02:52 PM'),
(53, 'g8bhawani', 'bhawani.shankar@softwarehouse.co', 'g8bhawani@gmail.com', 'I am bhawani and I am intrested in your profile and my profile id is RS.1092', 'Friday July 01, 2011, 02:52 PM'),
(54, '', '', 'g8bhawani@gmail.com', 'I am  and I am intrested in your profile and to view my profile id is RS.1058', 'Thursday August 18, 2011, 07:09 AM'),
(55, '', '', 'g8bhawani@gmail.com', 'I am  and I am intrested in your profile and to view my profile id is RS.1058', 'Thursday August 18, 2011, 07:09 AM'),
(56, '', '', 'radha_krishna1432000@yahoo.co.in', 'I am  and I am intrested in your profile and to view my profile id is RS.1058', 'Thursday August 18, 2011, 07:09 AM'),
(57, '', '', 'g8bhawani@gmail.com', 'I am  and I am intrested in your profile and to view my profile id is RS.1058', 'Thursday August 18, 2011, 07:10 AM'),
(58, 'g9bhawani', 'rahulgarg@gmail.com', 'g8bhawani@gmail.com', 'I am rahul and I am intrested in your profile and to view my profile id is RS.1100', 'Thursday August 18, 2011, 07:12 AM'),
(59, 'g9bhawani', 'rahulgarg@gmail.com', 'rahulgarg@gmail.com', 'I am rahul and I am intrested in your profile and to view my profile id is RS.1100', 'Thursday August 18, 2011, 07:14 AM');

-- --------------------------------------------------------

--
-- Table structure for table `msg_to_all`
--

CREATE TABLE IF NOT EXISTS `msg_to_all` (
  `email` varchar(300) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(500) NOT NULL,
  `post_time` varchar(50) NOT NULL,
  `posted_by` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg_to_all`
--

INSERT INTO `msg_to_all` (`email`, `subject`, `message`, `post_time`, `posted_by`) VALUES
('rmbhati5@gmail.com, rmbhati@gmail.com, rekhabhati@yahoo.com, radheshyam686@gmail.com, radheybikaner@gmail.com, ', 'ty', 'ert', 'Friday May 27, 2011, 03:42 AM', 'admin'),
('rmbhati5@gmail.com, rmbhati@gmail.com, rekhabhati@yahoo.com, radheshyam686@gmail.com, radheybikaner@gmail.com, ', 'tgb', 'yhnujmikolp', 'Friday May 27, 2011, 01:50 AM', 'admin'),
('rmbhati5@gmail.com, rmbhati@gmail.com, rekhabhati@yahoo.com, radheshyam686@gmail.com, radheybikaner@gmail.com, ', 'gfdfg', 'werwr', 'Friday May 27, 2011, 03:43 AM', 'admin'),
('radha_krishna1432000@yahoo.co.in, v333@megape.in, bhawani.shankar@softwarehouse.co, mathur.rajeev@gmail.com, abnodubbotame@mail.ru, ', 'test', 'test', 'Monday June 27, 2011, 11:24 AM', 'admin'),
('radha_krishna1432000@yahoo.co.in, v333@megape.in, bhawani.shankar@softwarehouse.co, abnodubbotame@mail.ru, g8bhawani@gmail.com, ', 'hi ', 'wellcome', 'Friday July 01, 2011, 06:41 AM', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `send_message`
--

CREATE TABLE IF NOT EXISTS `send_message` (
  `s_no` int(5) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `post_time` varchar(40) NOT NULL,
  PRIMARY KEY  (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `send_message`
--

INSERT INTO `send_message` (`s_no`, `username`, `email`, `message`, `post_time`) VALUES
(4, 'avinash', 'rmbhati@gmail.com', 'bnmkjhgf', 'Friday May 27, 2011, 12:21 AM'),
(6, 'radhika', 'g8bhawani@gmail.com', 'hi radhika', 'Friday July 01, 2011, 06:40 AM');

-- --------------------------------------------------------

--
-- Table structure for table `sms_info`
--

CREATE TABLE IF NOT EXISTS `sms_info` (
  `s_no` int(1) NOT NULL auto_increment,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY  (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sms_info`
--

INSERT INTO `sms_info` (`s_no`, `username`, `password`) VALUES
(1, 'rnminfo', 'bknrnm4P');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `registeration_no` int(15) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `date_birth` int(3) NOT NULL,
  `month_birth` int(3) NOT NULL,
  `year_birth` int(5) NOT NULL,
  `hour_birth` int(3) NOT NULL,
  `minutes_birth` int(3) NOT NULL,
  `am_birth` varchar(3) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `marital_status` varchar(22) NOT NULL,
  `country` varchar(35) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `religion` varchar(7) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `height` varchar(20) NOT NULL,
  `body_type` varchar(20) NOT NULL,
  `complexion` varchar(20) NOT NULL,
  `physical_status` varchar(30) NOT NULL,
  `education` varchar(25) NOT NULL,
  `occupation` varchar(70) NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `food` varchar(20) NOT NULL,
  `smoking` varchar(20) NOT NULL,
  `drinking` varchar(20) NOT NULL,
  `manglik` varchar(20) NOT NULL,
  `rashi` varchar(30) NOT NULL,
  `family_status` varchar(22) NOT NULL,
  `family_type` varchar(20) NOT NULL,
  `family_values` varchar(20) NOT NULL,
  `last_login` varchar(40) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `child` varchar(40) NOT NULL,
  `sent_code` int(10) NOT NULL,
  `received_code` int(10) NOT NULL,
  `status` char(2) NOT NULL default 'VN',
  `upgrade_status` varchar(10) NOT NULL,
  `deposit_type` varchar(100) NOT NULL,
  `pickup_address` text NOT NULL,
  `pickup_mob` varchar(20) NOT NULL,
  `dd_no` varchar(50) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `dd_date` varchar(100) NOT NULL,
  `upgrade_date` int(20) NOT NULL,
  `upgrade_month` int(20) NOT NULL,
  `upgrade_year` int(20) NOT NULL,
  `upgrade_type` varchar(20) NOT NULL,
  `count_mob_no` int(20) NOT NULL,
  `count_messages` int(255) NOT NULL,
  `expression_mess` int(255) NOT NULL,
  `about_me` text NOT NULL,
  `about_family` text NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  PRIMARY KEY  (`registeration_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`registeration_no`, `username`, `password`, `name`, `email`, `gender`, `date_birth`, `month_birth`, `year_birth`, `hour_birth`, `minutes_birth`, `am_birth`, `cast`, `mobile_no`, `marital_status`, `country`, `state`, `city`, `religion`, `image_url`, `height`, `body_type`, `complexion`, `physical_status`, `education`, `occupation`, `annual_income`, `food`, `smoking`, `drinking`, `manglik`, `rashi`, `family_status`, `family_type`, `family_values`, `last_login`, `birth_date`, `age`, `child`, `sent_code`, `received_code`, `status`, `upgrade_status`, `deposit_type`, `pickup_address`, `pickup_mob`, `dd_no`, `bank_name`, `dd_date`, `upgrade_date`, `upgrade_month`, `upgrade_year`, `upgrade_type`, `count_mob_no`, `count_messages`, `expression_mess`, `about_me`, `about_family`, `birth_place`) VALUES
(2, 'rashmi', '123456', 'Rashmi', 'radheybikaner@gmail.com', 'Female', 29, 10, 1984, 2, 20, 'PM', 'Agarwal', '1234567890', 'Unmarried', 'India', 'Rajasthan', 'Jaipur', 'Hindu', 'user_images/rashmi_securedownload1.jpg', 'None', 'None', 'None', 'None', 'None', 'None', '', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'Friday June 17, 2011, 07:23 AM', '1984-10-29', 26, 'No', 0, 0, 'N', '', '', '', '', '', '', '', 0, 0, 0, '', 3, 0, 2, '', '', ''),
(4, 'akshay', '123456', 'Akshay', 'rekhabhati@yahoo.com', 'Male', 23, 5, 1988, 1, 10, 'PM', 'Mathur', '1234567890', 'Unmarried', 'India', 'Rajasthan', 'Kota', 'Hindu', 'user_images/akshay_10-SM65717.jpg', 'None', 'None', 'None', 'Normal', 'None', 'None', '', 'None', 'None', 'None', 'No', 'None', 'Rich', 'Joint', 'Traditional', '', '1988-5-23', 23, 'No', 0, 0, 'N', '', '', '', '', '', '', '', 0, 0, 0, '', 3, 0, 2, '', '', ''),
(5, 'avinash', '123456', 'avinash', 'rmbhati@gmail.com', 'Male', 29, 5, 1987, 2, 10, 'PM', 'Baniya', '2147483647', 'Unmarried', 'India', 'Rajasthan', 'Alwar', 'Hindu', 'user_images/avinash_securedownload4.jpg', 'None', 'None', 'None', 'Normal', 'None', 'None', '', 'None', 'None', 'None', 'No', 'None', 'Upper Middle Class', 'Nuclear', 'Moderate', 'Thursday May 26, 2011, 02:29 AM', '1987-5-29', 24, 'No', 0, 0, 'N', '', '', '', '', '', '', '', 0, 0, 0, '', 3, 0, 2, '', '', ''),
(8, 'rajveer', '123456', 'Rajveer', 'rekha@softwarehouse.co', 'Male', 29, 10, 1985, 2, 10, 'PM', 'Mali', '1234567891', 'Unmarried', 'India', 'Rajasthan', 'Jaipur', 'Hindu', 'user_images/rajveer_rashmi.jpg', 'None', 'None', 'None', 'Normal', 'None', 'None', '', 'None', 'None', 'None', 'No', 'None', 'Rich', 'Nuclear', 'Traditional', 'Saturday May 28, 2011, 06:02 AM', '1985-10-29', 25, 'No', 629930702, 0, 'N', '', '', '', '', '', '', '', 0, 0, 0, '', 3, 0, 2, '', '', ''),
(9, 'ranvijay', '123456', 'Ranvijay', 'gahlot@softwarehouse.co', 'Male', 29, 10, 1985, 2, 10, 'PM', 'Baniya', '2147483647', 'Unmarried', 'India', 'Rajasthan', 'Jaipur', 'Hindu', 'user_images/ranvijay_1-6130035-5327-t.jpg', 'None', 'None', 'None', 'Normal', 'None', 'None', '', 'None', 'None', 'None', 'No', 'None', 'Upper Middle Class', 'Nuclear', 'Traditional', '', '1985-10-29', 25, 'No', 629930702, 0, 'N', '', '', '', '', '', '', '', 0, 0, 0, '', 3, 0, 2, '', '', ''),
(10, 'ranveer', '123456', 'Ranveer', '5gahlot@softwarehouse.co', 'Male', 29, 10, 1985, 2, 10, 'PM', 'Chaudary', '2147483647', 'Unmarried', 'India', 'Rajasthan', 'Udaipur', 'Hindu', 'user_images/ranveer_2.jpg', 'None', 'None', 'None', 'Normal', 'None', 'None', '', 'None', 'None', 'None', 'No', 'None', 'Upper Middle Class', 'Joint', 'Traditional', 'Wednesday June 01, 2011, 06:57 AM', '1985-10-29', 25, 'No', 10866, 0, 'N', '', '', '', '', '', '', '', 0, 0, 0, '', 3, 0, 2, '', '', ''),
(12, 'sonika', '123456', 'Sonika', 'rmbhati8@gmail.com', 'Female', 29, 10, 1985, 2, 20, 'PM', 'Chaudary', '9950518893', 'Unmarried', 'India', 'Rajasthan', 'Udaipur', 'Hindu', 'user_images/sonika_ln.jpg', 'None', 'None', 'None', 'Normal', 'None', 'None', '', 'None', 'None', 'None', 'No', 'None', 'Upper Middle Class', 'Nuclear', 'Moderate', 'Sunday May 29, 2011, 11:22 PM', '1985-10-29', 25, 'No', 41136, 0, 'N', '', '', '', '', '', '', '', 0, 0, 0, '', 3, 0, 2, '', '', ''),
(20, 'doorgeSwera', 'ITEDRtY398', 'doorgeSwera', 'khgdvvhvgfuighvb@gmail.com', '1', 0, 0, 0, 0, 0, 'AM', '', '00971503139084', 'Unmarried', 'Australia', 'Andaman and Nicobar', 'Ga District', 'Hindu', 'user_images/doorgeSwera_', 'None', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Advertising / PR Professional', '', 'Vegetarian', 'No', 'No', 'No', '', 'Afflunet', 'Joint', 'Orthodox', 'Wednesday June 15, 2011, 08:45 PM', '--', 2011, 'No', 19010, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', ''),
(21, 'educheEnemamn', 'dBsw03B638', 'educheEnemamn', 'gus1003@gmail.com', '1', 0, 0, 0, 0, 0, 'AM', '', '09186765992', 'Unmarried', 'Australia', 'Andaman and Nicobar', 'Markirus', 'Hindu', 'user_images/educheEnemamn_', 'None', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Advertising / PR Professional', '', 'Vegetarian', 'No', 'No', 'No', '', 'Afflunet', 'Joint', 'Orthodox', 'Friday June 17, 2011, 09:19 AM', '--', 2011, 'No', 23036, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', ''),
(23, 'GoksarroroLed', 'john123', 'GoksarroroLed', 'abnodubbotame@mail.ru', '1', 0, 0, 1995, 0, 0, 'AM', '', '..', 'Unmarried', 'Australia', 'Andaman and Nicobar', 'Moskow', 'Hindu', 'user_images/GoksarroroLed_', 'None', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Advertising / PR Professional', '', 'Vegetarian', 'No', 'No', 'No', '', 'Afflunet', 'Joint', 'Orthodox', 'Tuesday June 28, 2011, 05:44 PM', '1995--', 16, 'No', 78530, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', ''),
(35, 'sdffsdfsdf', '111111', 'po[p[o[p', 'dfgdf@dfghd.com', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '756745645645', 'Unmarried', 'Australia ', 'Andaman and Nicobar', 'dfgsdfsdfsd', 'Hindu', 'user_images/sdffsdfsdf_a.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'No', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 4328, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '\r\n', 'sdfsdfsdfsd'),
(25, 'kapil123', '123456', 'kapil', 'bhawani.sh@softwarehouse.co', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '9024205654', 'Unmarried', 'Australia ', 'Andaman and Nicobar', 'bikaner', 'Hindu', 'user_images/kapil123_Penguins.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'No', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 61460, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', ''),
(28, 'rohini', '10593rakta', 'rohini', 'radha_krishna1432000@yahoo.co.in', 'Female', 14, 12, 1975, 8, 10, 'AM', 'Rajput', '9649052714', 'Unmarried', 'India', 'Rajasthan', 'bikaner', 'Hindu', 'user_images/Image0001.JPG', '5ft', 'Slim', 'Fair', 'Physically Challanged', 'BE/B Tech', 'Software Professional', '', 'Vegetarian', 'No', 'No', 'No', 'Tula (Libra)', 'Upper', 'Nuclear', 'Moderate', 'Saturday July 16, 2011, 09:30 AM', '1975-12-14', 35, 'No', 47227, 47227, 'VY', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 'i m fun loving girl.', 'i belong to an upper middle', ''),
(27, 'Gegowrare', '92ujG4ppfJ', 'Gegowrare', 'v333@megape.in', '1', 0, 0, 0, 0, 0, 'AM', '', '', 'Unmarried', 'Australia', 'Andaman and Nicobar', 'Comilla', 'Hindu', 'user_images/Gegowrare_', 'None', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Advertising / PR Professional', '', 'Vegetarian', 'No', 'No', 'No', '', 'Afflunet', 'Joint', 'Orthodox', 'Wednesday June 22, 2011, 02:34 PM', '--', 2011, 'No', 36603, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', ''),
(36, 'iououiou', '000000', 'oioopiop', 'iop@jkhjk.hj', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '23234234234', 'Unmarried', 'Australia ', 'Andaman and Nicobar', 'dsfsdfsfs', 'Hindu', 'user_images/iououiou_a.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'No', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 47701, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', 'fdsfsdf'),
(37, 'ertertert', '909090', 'jkjkhjkhjkh', 'jkjkhjk@jkhkj.cjkhk', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '3452342342434', 'Unmarried', 'Australia ', 'Andaman and Nicobar', 'sdfsdf', 'Hindu', 'user_images/ertertert_a.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'No', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 93634, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', 'dfdgdfg'),
(38, 'khjkhjkhjk', '000000', 'hjghjghj', 'hjghj@hjghj.asdad', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '234234234234', 'Unmarried', 'Australia ', 'Select', 'rwerwerwer', 'Hindu', 'user_images/khjkhjkhjk_a.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'No', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 24774, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', 'ewewewe'),
(39, 'jkhkhkj', '000000', 'jlkjkl', 'jkljklj@JKHJK.ASDASD', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '2423352343', 'Unmarried', 'Australia ', 'Andaman and Nicobar', 'DSFSDF', 'Hindu', 'user_images/jkhkhkj_a.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'Yes', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 94051, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', 'REWREWR'),
(40, 'jkhjkhjk', '898989', 'kjhkhjk', 'hjkhjk@kjhk.hjgj', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '53345345345', 'Unmarried', 'Australia ', 'Andaman and Nicobar', 'hdgdfgdfgdfg', 'Hindu', 'user_images/jkhjkhjk_fbiks.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'No', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 81375, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', 'ghjghjghj'),
(41, 'gfghgfh11111', '111111', 'khjkhjk', 'jkhjk@jkhjk.sad', 'Female', 1, 1, 1960, 1, 0, 'PM', 'Agarwal', '34534534534', 'Unmarried', 'Australia ', 'Andaman and Nicobar', 'dsfsdfsdf', 'Hindu', 'user_images/gfghgfh11111_a.jpg', '4ft 6in', 'Average', 'Very Fair', 'Normal', 'BE/B Tech', 'Manager', '', 'Vegetarian', 'No', 'No', 'No', 'Dhanu (Sagittarius)', 'Afflunet', 'Joint', 'Orthodox', '', '1960-1-1', 51, 'Yes, Living Together', 88882, 0, 'VN', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, '', '', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE IF NOT EXISTS `user_online` (
  `session` char(100) NOT NULL default '',
  `time` int(11) NOT NULL default '0',
  `username` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`, `username`) VALUES
('a71a9defd5068e0ff2721b44677e15ab', 1313648801, 'g9bhawani');

-- --------------------------------------------------------

--
-- Table structure for table `user_upgrade`
--

CREATE TABLE IF NOT EXISTS `user_upgrade` (
  `username` varchar(255) NOT NULL,
  `upgrade_status` varchar(20) NOT NULL,
  `deposit_type` varchar(20) NOT NULL,
  `pickup_address` text NOT NULL,
  `pickup_mob` varchar(15) NOT NULL,
  `dd_no` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `dd_date` varchar(100) NOT NULL,
  `upgrade_type` varchar(20) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_upgrade`
--


-- --------------------------------------------------------

--
-- Table structure for table `view_mobile_no`
--

CREATE TABLE IF NOT EXISTS `view_mobile_no` (
  `username` varchar(255) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `search_username` varchar(255) NOT NULL,
  `upgrade_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view_mobile_no`
--

