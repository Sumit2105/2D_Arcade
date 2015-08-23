-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2015 at 03:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sumit', 'sumitsarkar');

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE IF NOT EXISTS `comments_table` (
  `sr_no` int(4) NOT NULL AUTO_INCREMENT,
  `comment` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `comments_table`
--

INSERT INTO `comments_table` (`sr_no`, `comment`, `name`, `image_path`) VALUES
(11, 'PL Engineering Ltd. Civil Ankit Singh Bhanu Pratap Singh Congratulations!', 'sumit sarkar', 'upload/user/12-1-5-035.jpg'),
(13, 'hello', 'Nikhita Begani', 'upload/user/12-1-5-036.jpg'),
(16, 'hello', 'Rahul Yadav', 'upload/user/12-1-5-038.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `s_no` int(100) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  UNIQUE KEY `s_no` (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`s_no`, `company_name`) VALUES
(18, 'Mu-Sigma'),
(20, 'Goldman Sachs'),
(21, 'IBM'),
(22, 'TCS');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `sr_no` int(2) NOT NULL,
  `welcome_message` longtext NOT NULL,
  `about_us` mediumtext NOT NULL,
  `director_message` mediumtext NOT NULL,
  `lates_updates` varchar(250) NOT NULL,
  `quick_links` varchar(250) NOT NULL,
  ` placement_statistics` varchar(250) NOT NULL,
  `placement brochure` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`sr_no`, `welcome_message`, `about_us`, `director_message`, `lates_updates`, `quick_links`, ` placement_statistics`, `placement brochure`) VALUES
(1, 'Welcome to the Training and Placement of the National Institute of Technology delhi', 'sumit', 'Since the advent of this great institution, NIT Silchar has vision to provide quality technical education and act as a rostrum for scientific research, and a mission to develop human potential to its greatest degree. In accordance with this vision NIT Silchar has maintained an exemplary record of academic contribution for achieving excellence in teaching, research and governance. A sincere effort has now begun to restore the vantage position of NIT Silchar as the top technological Institute in India, The students of NIT Silchar are a cherry picked group. They have been chosen through a process that makes NIT Silchar one of the toughest institutes to get an admission.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `latest_updates`
--

CREATE TABLE IF NOT EXISTS `latest_updates` (
  `sr_no` int(2) NOT NULL AUTO_INCREMENT,
  `info` varchar(250) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `latest_updates`
--

INSERT INTO `latest_updates` (`sr_no`, `info`, `file_path`) VALUES
(18, 'mu-sigma on 23rd', 'upload/Latest_updates/mu-sigma on 23rd.pdf'),
(19, 'TCS Selcts 50', 'upload/Latest_updates/TCS Selcts 50.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `news_content`
--

CREATE TABLE IF NOT EXISTS `news_content` (
  `sr_no` int(2) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `news_content`
--

INSERT INTO `news_content` (`sr_no`, `content`) VALUES
(8, 'PHILIPS'),
(9, 'HCL'),
(10, 'WIPRO'),
(11, 'Capgimini'),
(18, ' Results of B.Tech., M.Tech., M.Sc. & M.B.A. (April-May, 2015) declared');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE IF NOT EXISTS `our_team` (
  `sch_no` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `facebook_link` varchar(200) DEFAULT NULL,
  `linkedin_link` varchar(200) DEFAULT NULL,
  UNIQUE KEY `sch_no` (`sch_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`sch_no`, `name`, `branch`, `email`, `mobile`, `facebook_link`, `linkedin_link`) VALUES
('12-1-5-035', 'sumit sarkar', 'fdsv', 'dvdv', 'dvdvd', 'vdv', 'dvd'),
('ads', 'sdsfsf', 'fsfsf', 'fsfss', 'sfsf', 'fsfsf', 'sfsfs'),
('afsfs', 'fsfsf', 'fdfdff', 'dfdfd', 'fdfvdfc', 'sscfs', 'sdscfs'),
('dsfadfas', 'sfsfsfss', 'fsfsf', 'sfs', 'fsfs', 'sfsfs', 'sfsfs'),
('sdfdd', 'dfdd', 'dfdvdv', 'dvdv', 'dvdvfv', 'sdvdvdv', 'csdvdv'),
('xvdvddvdf', 'vdsvsdv', 'vsdv', 'dsvsvsd', 'xdvsd', 'vsdvsvc', 'svfvsvcf');

-- --------------------------------------------------------

--
-- Table structure for table `placed_news`
--

CREATE TABLE IF NOT EXISTS `placed_news` (
  `sr_no` int(4) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `placed_news`
--

INSERT INTO `placed_news` (`sr_no`, `content`) VALUES
(10, 'IRAGE CAPITAL(Data Scientist )(OFF CAMPUS)\r\nPrinkesh Sharma (CSE)(20 LPA)\r\nCongratulations!!'),
(11, 'PL Engineering\r\nAmit Kumar Mishra (Electrical)'),
(12, 'Bharat Petroleum Corp. Ltd (BPCL)\r\nMechanical-\r\n1. Vivek Jain\r\n2. Mandeep Deka\r\n3. Anupam Choubey\r\n4. Pritam Sagar Buragohain\r\n5. Aman Agarwala\r\n6. Debadutta Deb\r\n7. Saranjit Das\r\nElectrical\r\n1. Nikita Singh\r\n2. Prantika Sarma\r\n3. Ajay Chanyal\r\n4. Siddhant Gupta\r\n5. Ram Meena\r\nCongrats to all...'),
(13, 'STERLITE TECHNOLOGIES\r\nElectrical::\r\nSanjib Bora\r\nCongratulations...'),
(14, 'CapitalVia:\r\nCTC- 4.07\r\nProfile- Research Trainee\r\nSumit Kumar Roy- MBA Finance\r\nProfile- Business Analyst\r\nMisbah-ul-Haque- MBA Marketing\r\nHirak Charkaborty- MBA Marketing\r\nKalpesh Mathur- MBA Marketing\r\nSaurish Dutta- MBA Marketing\r\nSumit Prasad- MBA Finance'),
(15, 'PL Engineering Ltd.\r\nCivil\r\nAnkit Singh\r\nBhanu Pratap Singh\r\nCongratulations!'),
(16, 'Reliance Jio Infocomm\r\n2 more selections\r\nECE\r\n1. Nipjyoti Malakar\r\n2. Himanshu Saikia'),
(17, 'Ways2Capital \r\nProfile : Business Analyst\r\n1. AJAY NAITHANI\r\n2. BIBEK SUTRADHAR\r\n3. DEBARSHISH GOGOI\r\n4. DEBASISH DAS\r\n5. JUWEL LASKAR\r\n6. KH. RAHUL SINGH\r\n7. MANISH PAUL\r\n8. MUKUNDA M. KHANIKAR\r\n9. NILANJAN DUTTA\r\n10. NILUTPOL CHETIA\r\n11. RAJESH PAUL\r\n12. SIBOTUSH BARMAN'),
(18, 'Dalmia Cement selects 2.\r\nSummer internship @20000 pm +food +accommodation\r\nElectronics & Instrumentation\r\n1. Bedanga Kashyap Das\r\n2. Malobika Bora');

-- --------------------------------------------------------

--
-- Table structure for table `placement_statistics`
--

CREATE TABLE IF NOT EXISTS `placement_statistics` (
  `sr_no` int(2) NOT NULL AUTO_INCREMENT,
  `year` varchar(250) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `placement_statistics`
--

INSERT INTO `placement_statistics` (`sr_no`, `year`, `file_path`) VALUES
(33, '2015 - 16 ', 'upload/placement_statistics/2015 - 16 .pdf');

-- --------------------------------------------------------

--
-- Table structure for table `quick_link_table`
--

CREATE TABLE IF NOT EXISTS `quick_link_table` (
  `sr_no` int(2) NOT NULL AUTO_INCREMENT,
  `text_display` varchar(250) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_table`
--

CREATE TABLE IF NOT EXISTS `sign_up_table` (
  `scholar_no` varchar(12) NOT NULL,
  `name` text NOT NULL,
  `hashpass` varchar(40) NOT NULL,
  `programme` text NOT NULL,
  `semester` int(5) NOT NULL,
  `branch` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `cpi` float NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`scholar_no`),
  UNIQUE KEY `scholar_no` (`scholar_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up_table`
--

INSERT INTO `sign_up_table` (`scholar_no`, `name`, `hashpass`, `programme`, `semester`, `branch`, `email`, `cpi`, `image`) VALUES
('12-1-5-001', 'ayush nenawati', '31b69a7494a0eec4ac544fd648c9d604', 'B.Tech', 1, 'Civil Engineering', 'ayushnenawati@gmail.com', 7.8, ''),
('12-1-5-021', 'Farhat Abbas', '53436df94f56ec620decb09c6b94b965', 'B.Tech', 1, 'Civil Engineering', 'farhatabbas@gmail.com', 9.2, ''),
('12-1-5-035', 'sumit sarkar', 'fd75906e40662d56c2f6e2a04368a0f5', 'B.Tech', 7, 'cse', 'kumarsumitsarkar@outlook.com', 6.17, 'upload/user/12-1-5-035.jpg'),
('12-1-5-036', 'Nikhita Begani', '4efe8f9025aa6626e1e1a5c8ec49fadf', 'B.Tech', 1, 'Civil Engineering', 'kumarsumitsarkar@outlook.com', 9.4, 'upload/user/12-1-5-036.jpg'),
('12-1-5-038', 'Rahul Yadav', 'ed342bfeb2222186116fe93b969bedd7', 'B.Tech', 7, 'cse', 'kumarsumitsarkar@outlook.com', 8.2, 'upload/user/12-1-5-038.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_post_updates`
--

CREATE TABLE IF NOT EXISTS `student_post_updates` (
  `sr_no` int(3) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student_post_updates`
--

INSERT INTO `student_post_updates` (`sr_no`, `post`) VALUES
(8, 'What else do u need in a monsoon afternoon when u hav a car, the lifetime valid friends and some awesome food!!? grin emoticon'),
(9, 'aayush placed');

-- --------------------------------------------------------

--
-- Table structure for table `upload_brochure`
--

CREATE TABLE IF NOT EXISTS `upload_brochure` (
  `sr_no` int(2) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `upload_brochure`
--

INSERT INTO `upload_brochure` (`sr_no`, `file_name`) VALUES
(4, 'upload/broucher/Brochure.pdf'),
(5, 'upload/broucher/Brochure.pdf'),
(6, 'upload/broucher/Brochure.pdf'),
(7, 'upload/broucher/Brochure.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
