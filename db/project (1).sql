-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 02:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` varchar(30) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `question`, `answer`) VALUES
('16621044', 'how a php code can be workeedd', 'nczbcnkjznclkz,'),
('60880276', 'may i know when we have to give first review of our mini project', 'at the end of this month'),
('77126300', 'may i know when we have to give first review of our mini project', 'Enter text he re...'),
('12338348', 'hello', ''),
('68159523', 'hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_table`
--

CREATE TABLE `data_table` (
  `branch` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_table`
--

INSERT INTO `data_table` (`branch`, `semester`, `section`) VALUES
('CSE', '7', 'A'),
('CSE', '7', 'A'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `faculty_id` varchar(20) NOT NULL,
  `faculty_pass` varchar(20) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `faculty_branch` varchar(20) NOT NULL,
  `faculty_section` varchar(50) NOT NULL,
  `faculty_semester` varchar(50) NOT NULL,
  `faculty_email` varchar(100) NOT NULL,
  `specification` varchar(500) NOT NULL,
  `project_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`faculty_id`, `faculty_pass`, `faculty_name`, `faculty_branch`, `faculty_section`, `faculty_semester`, `faculty_email`, `specification`, `project_type`) VALUES
('VCE511', '#UPIS', 'Mr. G. S. Prasada Reddy', 'CSE', 'A', '7', 'gsprasadareddy@vardhaman.org', 'none', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `generate`
--

CREATE TABLE `generate` (
  `branch` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `student1` varchar(20) NOT NULL,
  `student2` varchar(20) NOT NULL,
  `student3` varchar(20) NOT NULL,
  `student4` varchar(20) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `faculty_id` varchar(20) NOT NULL,
  `project_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generate`
--

INSERT INTO `generate` (`branch`, `semester`, `section`, `student1`, `student2`, `student3`, `student4`, `project_id`, `password`, `faculty_id`, `project_type`) VALUES
('CSE', '7', 'A', '16881A0543', '16881A0542', 'NONE', 'NONE', 'VCE2985', '#640K', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0545', '16881A0544', 'NONE', 'NONE', 'VCE0434', '#JBAN', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0552', '16881A0553', '16881A0541', 'NONE', 'VCE2864', '#UTA3', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0502', '16881A0514', '16881A0520', 'NONE', 'VCE5768', '#HAM6', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0530', '16881A0518', '16881A0532', 'NONE', 'VCE0472', '#8PW0', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0507', '16881A0506', '16881A0522', 'NONE', 'VCE2751', '#2T3T', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0537', '16881A0539', '16881A0546', 'NONE', 'VCE9384', '#VB98', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0555', '16881A0557', '17885A0508', 'NONE', 'VCE2586', '#S484', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0528', '16881A0525', '16881A0519', 'NONE', 'VCE0767', '#EKWH', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0547', '16881A0558', 'NONE', 'NONE', 'VCE0015', '#XRTT', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0505', '16881A0501', '16881A0504', 'NONE', 'VCE6825', '#ILD1', 'VCE511', 'others'),
('CSE', '7', 'A', '16881A0503', '16881A0510', '16881A0513', 'NONE', 'VCE2182', '#TJON', 'VCE511', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `groupmessages`
--

CREATE TABLE `groupmessages` (
  `id` varchar(50) NOT NULL,
  `messages` varchar(2000) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `daate` varchar(50) NOT NULL,
  `timee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupmessages`
--

INSERT INTO `groupmessages` (`id`, `messages`, `sender`, `type`, `daate`, `timee`) VALUES
('11111', 'hii', '16881A0501', 'text', '28-08-2019', '02:54 PM'),
('11111', 'hii', '16881A0525', 'text', '28-08-2019', '02:55 PM'),
('11111', 'HI', '16881A0519', 'text', '28-08-2019', '02:57 PM'),
('11111', 'Good morning all', '16881A0525', 'text', '29-08-2019', '07:36 AM'),
('11111', 'Good morning', '16881A0503', 'text', '29-08-2019', '09:41 AM'),
('11111', 'Good Afternoon', '16881A0519', 'text', '29-08-2019', '02:31 PM'),
('11111', 'hi gangi', '16881A0525', 'text', '06-09-2019', '05:09 PM');

-- --------------------------------------------------------

--
-- Table structure for table `hnoti`
--

CREATE TABLE `hnoti` (
  `hnoti` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `project_id` varchar(20) NOT NULL,
  `messages` varchar(2000) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `daate` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`project_id`, `messages`, `sender`, `type`, `daate`, `time`) VALUES
('VCE0434', 'Hii sir', 'VCE511', 'text', '08-07-2019', '02:12 PM'),
('VCE0434', 'Hello', 'VCE511', 'text', '08-07-2019', '02:13 PM'),
('VCE2985', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE0434', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE2864', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE5768', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE0472', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE2751', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE9384', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE2586', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE0767', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE0015', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE6825', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE2182', 'Submit your project file', 'VCE511', 'text', '08-07-2019', '02:14 PM'),
('VCE0434', 'Ok sir', 'VCE0434', 'text', '08-07-2019', '02:15 PM'),
('VCE0434', 'How r u sir?', 'VCE0434', 'text', '13-07-2019', '09:33 PM'),
('VCE0434', ' 82525-screenshot-(3).png', 'VCE0434', 'image', '13-07-2019', '09:33 PM'),
('VCE0434', 'I am Getting this problem sir', 'VCE0434', 'text', '13-07-2019', '09:34 PM'),
('VCE0434', 'I am Getting this problem sir', 'VCE0434', 'text', '13-07-2019', '09:36 PM'),
('VCE0767', 'submit your project abstract', 'VCE511', 'text', '18-07-2019', '07:23 PM'),
('VCE2864', 'MJHKFD', 'VCE511', 'text', '28-07-2019', '05:50 PM'),
('VCE0472', 'Submitted sir', 'VCE0472', 'text', '29-07-2019', '03:10 PM'),
('VCE0472', 'Hi sir', 'VCE0472', 'text', '29-07-2019', '03:10 PM'),
('VCE0472', 'Can we know the last date for submission of our project?', 'VCE0472', 'text', '29-07-2019', '03:11 PM'),
('', 'hello', '', 'text', '28-08-2019', '01:23 PM'),
('VCE2985', 'hello', 'VCE511', 'text', '28-08-2019', '01:39 PM'),
('VCE0434', 'HI', 'VCE0434', 'text', '28-08-2019', '04:43 PM');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `project_id` varchar(50) NOT NULL,
  `notification` varchar(50) NOT NULL,
  `sender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`project_id`, `notification`, `sender`) VALUES
('VCE2864', 'MJHKFD', 'VCE511'),
('VCE0472', 'Submitted sir', 'VCE0472'),
('VCE0472', 'Hi sir', 'VCE0472'),
('VCE0472', 'Can we know the last date for submission of our pr', 'VCE0472'),
('', 'hello', ''),
('VCE2985', 'hello', 'VCE511'),
('VCE0434', 'HI', 'VCE0434');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_marks` int(20) NOT NULL,
  `project_team_lead` varchar(50) NOT NULL,
  `project_status` varchar(50) NOT NULL,
  `project_member1` varchar(50) NOT NULL,
  `project_member2` varchar(50) NOT NULL,
  `project_member3` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL,
  `review1` int(11) NOT NULL,
  `review2` int(11) NOT NULL,
  `review3` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `specification` varchar(100) NOT NULL,
  `project_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_id`, `password`, `project_name`, `project_marks`, `project_team_lead`, `project_status`, `project_member1`, `project_member2`, `project_member3`, `faculty_id`, `file`, `review1`, `review2`, `review3`, `final`, `specification`, `project_type`) VALUES
('VCE2985', '#640K', '--------', 0, '16881A0543', 'Waiting for Guide Approval', '16881A0542', 'NONE', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE0434', '#JBAN', '--------', 0, '16881A0545', 'Waiting for Guide Approval', '16881A0544', 'NONE', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE2864', '#UTA3', '--------', 0, '16881A0552', 'Waiting for Guide Approval', '16881A0553', '16881A0541', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE5768', '#HAM6', '--------', 0, '16881A0502', 'Waiting for Guide Approval', '16881A0514', '16881A0520', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE0472', '#8PW0', '--------', 0, '16881A0530', 'Waiting for Guide Approval', '16881A0518', '16881A0532', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE2751', '#2T3T', '--------', 0, '16881A0507', 'Waiting for Guide Approval', '16881A0506', '16881A0522', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE9384', '#VB98', '--------', 0, '16881A0537', 'Waiting for Guide Approval', '16881A0539', '16881A0546', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE2586', '#S484', '--------', 0, '16881A0555', 'Waiting for Guide Approval', '16881A0557', '17885A0508', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE0767', '#EKWH', '--------', 0, '16881A0528', 'Waiting for Guide Approval', '16881A0525', '16881A0519', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE0015', '#XRTT', '--------', 0, '16881A0547', 'Waiting for Guide Approval', '16881A0558', 'NONE', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE6825', '#ILD1', '--------', 0, '16881A0505', 'Waiting for Guide Approval', '16881A0501', '16881A0504', 'NONE', '', '', 0, 0, 0, 0, 'NULL', 'others'),
('VCE2182', '#TJON', 'hello', 0, '16881A0503', 'Approved with Certain Changes', '16881A0510', '16881A0513', 'NONE', '', '', 0, 0, 0, 0, '', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `sectionid`
--

CREATE TABLE `sectionid` (
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectionid`
--

INSERT INTO `sectionid` (`branch`, `semester`, `section`, `id`) VALUES
('CSE', '7', 'A', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` varchar(50) NOT NULL,
  `student_pass` varchar(50) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_branch` varchar(50) NOT NULL,
  `student_section` varchar(20) NOT NULL,
  `student_semester` varchar(20) NOT NULL,
  `student_cgpa` varchar(20) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `project_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `student_pass`, `student_name`, `student_branch`, `student_section`, `student_semester`, `student_cgpa`, `student_email`, `project_type`) VALUES
('16881A0501', '#READ', 'ABHISHEK SRINIVAS SUNKARA', 'CSE', 'A', '7', '8.33', 'aaaa@gmail.com', 'others'),
('16881A0502', '#READ', 'AKARAPU SAMYUKTHA', 'CSE', 'A', '7', '9.58', 'aaaa@gmail.com', 'others'),
('16881A0503', '#READ', 'AVULA PRUTHVI', 'CSE', 'A', '7', '8.9', 'aaaa@gmail.com', 'others'),
('16881A0504', '#READ', 'BAKKI SANKEERTH', 'CSE', 'A', '7', '7.66', 'aaaa@gmail.com', 'others'),
('16881A0505', '#READ', 'BANDARU SAKETH', 'CSE', 'A', '7', '6.59', 'aaaa@gmail.com', 'others'),
('16881A0506', '#READ', 'BHUKYA SAIBHARGAVI', 'CSE', 'A', '7', '7.3', 'aaaa@gmail.com', 'others'),
('16881A0507', '#READ', 'BOJJI SREEHITHA', 'CSE', 'A', '7', '9.48', 'aaaa@gmail.com', 'others'),
('16881A0508', '#READ', 'BOYIKAR UDAYKIRAN', 'CSE', 'A', '7', '7.04', 'aaaa@gmail.com', 'others'),
('16881A0509', '#READ', 'CHADA SHIVA', 'CSE', 'A', '7', '6.36', 'aaaa@gmail.com', 'others'),
('16881A0510', '#READ', 'CHINTALACHERUVU SRAVANTH KUMAR', 'CSE', 'A', '7', '8.91', 'aaaa@gmail.com', 'others'),
('16881A0511', '#READ', 'DANDALA ANJAN KUMAR REDDY', 'CSE', 'A', '7', '3.79', 'aaaa@gmail.com', 'others'),
('16881A0512', '#READ', 'DANEPALLI VINAY', 'CSE', 'A', '7', '6.98', 'aaaa@gmail.com', 'others'),
('16881A0513', '#READ', 'DEVARASETTY PRANAY', 'CSE', 'A', '7', '8.42', 'aaaa@gmail.com', 'others'),
('16881A0514', '#READ', 'DEVATH INDUMATHI', 'CSE', 'A', '7', '8.95', 'aaaa@gmail.com', 'others'),
('16881A0515', '#READ', 'EEDA AKHILESH', 'CSE', 'A', '7', '6.54', 'aaaa@gmail.com', 'others'),
('16881A0517', '#READ', 'G LAXMI PRASAD', 'CSE', 'A', '7', '6.54', 'aaaa@gmail.com', 'others'),
('16881A0518', '#READ', 'GADDAM NIHARIKA', 'CSE', 'A', '7', '8.33', 'aaaa@gmail.com', 'others'),
('16881A0519', '#READ', 'GANGIDI SAI KIRAN REDDY', 'CSE', 'A', '7', '8.83', 'aaaa@gmail.com', 'others'),
('16881A0520', '#READ', 'GONGALLA HARIKA', 'CSE', 'A', '7', '9.15', 'aaaa@gmail.com', 'others'),
('16881A0521', '#READ', 'GOPIREDDY VINEEL REDDY', 'CSE', 'A', '7', '8.1', 'aaaa@gmail.com', 'others'),
('16881A0522', '#READ', 'GUDIPATI PRAVALLIKA', 'CSE', 'A', '7', '8.33', 'aaaa@gmail.com', 'others'),
('16881A0523', '#READ', 'GUMMADAVELLY SAIDEEP', 'CSE', 'A', '7', '8.59', 'aaaa@gmail.com', 'others'),
('16881A0524', '#READ', 'JETTY RAJIV CHANDRA', 'CSE', 'A', '7', '6.81', 'aaaa@gmail.com', 'others'),
('16881A0525', '#READ', 'KADAVERGU ANUDEEP', 'CSE', 'A', '7', '9.19', 'aaaa@gmail.com', 'others'),
('16881A0526', '#READ', 'KANCHARLA NITHESH', 'CSE', 'A', '7', '5.95', 'aaaa@gmail.com', 'others'),
('16881A0527', '#READ', 'KARRI SRI SATYA LOKESH', 'CSE', 'A', '7', '8.88', 'aaaa@gmail.com', 'others'),
('16881A0528', '#READ', 'KASOJU BHARATH', 'CSE', 'A', '7', '7.03', 'aaaa@gmail.com', 'others'),
('16881A0529', '#READ', 'KATIPALLY VIGHNESHWAR REDDY', 'CSE', 'A', '7', '6.5', 'aaaa@gmail.com', 'others'),
('16881A0530', '#READ', 'KILARU SAI SUSHMITHA', 'CSE', 'A', '7', '9.71', 'aaaa@gmail.com', 'others'),
('16881A0531', '#READ', 'KOMMINENI SAISIDDHARDHA', 'CSE', 'A', '7', '9.11', 'aaaa@gmail.com', 'others'),
('16881A0532', '#READ', 'M PRAGNYA REDDY', 'CSE', 'A', '7', '5.18', 'aaaa@gmail.com', 'others'),
('16881A0533', '#READ', 'MACHARLA LIKITHA', 'CSE', 'A', '7', '5.81', 'aaaa@gmail.com', 'others'),
('16881A0534', '#READ', 'MADIPADIGE ABHISHEK', 'CSE', 'A', '7', '5.63', 'aaaa@gmail.com', 'others'),
('16881A0535', '#READ', 'MALAPATI RAVI TEJA REDDY', 'CSE', 'A', '7', '5.32', 'aaaa@gmail.com', 'others'),
('16881A0536', '#READ', 'MALLOJI RAJ DATTA MANOHAR', 'CSE', 'A', '7', '6.07', 'aaaa@gmail.com', 'others'),
('16881A0537', '#READ', 'MINNAM REDDY NAIMISHA REDDY', 'CSE', 'A', '7', '9.09', 'aaaa@gmail.com', 'others'),
('16881A0538', '#READ', 'MIRGUDE SACHIN', 'CSE', 'A', '7', '8.36', 'aaaa@gmail.com', 'others'),
('16881A0539', '#READ', 'MOHAMMAD AYESHA TASMEEM', 'CSE', 'A', '7', '9.02', 'aaaa@gmail.com', 'others'),
('16881A0540', '#READ', 'MUNUGOTI PAVAN KUMAR', 'CSE', 'A', '7', '7.48', 'aaaa@gmail.com', 'others'),
('16881A0541', '#READ', 'MUTHYAPU SHIVA KUMAR', 'CSE', 'A', '7', '7.88', 'aaaa@gmail.com', 'others'),
('16881A0542', '#READ', 'NIDAMANURU SRAVANI CHOWDARY', 'CSE', 'A', '7', '7.54', 'aaaa@gmail.com', 'others'),
('16881A0543', '#READ', 'NUNE SRI HARSHINI PATEL', 'CSE', 'A', '7', '9.28', 'aaaa@gmail.com', 'others'),
('16881A0544', '#READ', 'P KALYAN BHUSHAN', 'CSE', 'A', '7', '7.83', 'aaaa@gmail.com', 'others'),
('16881A0545', '#READ', 'PALADUGULA WIHAR', 'CSE', 'A', '7', '9.13', 'aaaa@gmail.com', 'others'),
('16881A0546', '#READ', 'PANTHAGANI TEJASWINI', 'CSE', 'A', '7', '9.69', 'aaaa@gmail.com', 'others'),
('16881A0547', '#READ', 'PASPUNOORI VINEETH', 'CSE', 'A', '7', '7.3', 'aaaa@gmail.com', 'others'),
('16881A0548', '#READ', 'PATWARI ROHIT KUMAR', 'CSE', 'A', '7', '5.56', 'aaaa@gmail.com', 'others'),
('16881A0549', '#READ', 'PEDARAGALLA ASHOKA CHAKRAVARTHI', 'CSE', 'A', '7', '7.73', 'aaaa@gmail.com', 'others'),
('16881A0550', '#READ', 'PRODDATURI SHANTHAN', 'CSE', 'A', '7', '6.36', 'aaaa@gmail.com', 'others'),
('16881A0552', '#READ', 'RUDRA SATWIK', 'CSE', 'A', '7', '7.8', 'aaaa@gmail.com', 'others'),
('16881A0553', '#READ', 'RUTHVIK REDDY KAWKUNTLA', 'CSE', 'A', '7', '8.07', 'aaaa@gmail.com', 'others'),
('16881A0554', '#READ', 'SHREYA SRIVASTAVA', 'CSE', 'A', '7', '8.41', 'aaaa@gmail.com', 'others'),
('16881A0555', '#READ', 'SOMA RAKSHITHA', 'CSE', 'A', '7', '9.34', 'aaaa@gmail.com', 'others'),
('16881A0556', '#READ', 'THOTA VIGNESH', 'CSE', 'A', '7', '8.74', 'aaaa@gmail.com', 'others'),
('16881A0557', '#READ', 'THUMUKUNTLA GNANI PRASAD REDDY', 'CSE', 'A', '7', '8.98', 'aaaa@gmail.com', 'others'),
('16881A0558', '#READ', 'TORPUNURI ROHIT SIMHA', 'CSE', 'A', '7', '8.23', 'aaaa@gmail.com', 'others'),
('16881A0560', '#READ', 'VINTHA HEMANTH REDDY', 'CSE', 'A', '7', '5.47', 'aaaa@gmail.com', 'others'),
('17885A0501', '#READ', 'MOHAMMAD AFROZ', 'CSE', 'A', '7', '6.83', 'aaaa@gmail.com', 'others'),
('17885A0502', '#READ', 'KANKANALA CHETAN RAJA', 'CSE', 'A', '7', '5.51', 'aaaa@gmail.com', 'others'),
('17885A0504', '#READ', 'MADDHURI PARTHASARADHI', 'CSE', 'A', '7', '3.76', 'aaaa@gmail.com', 'others'),
('17885A0505', '#READ', 'THANUGULA PAVAN KUMAR', 'CSE', 'A', '7', '8.24', 'aaaa@gmail.com', 'others'),
('17885A0506', '#READ', 'PONNAGANTI SAI BABU', 'CSE', 'A', '7', '7.9', 'aaaa@gmail.com', 'others'),
('17885A0507', '#READ', 'LENKAPOTHULA SANDEEP GOUD', 'CSE', 'A', '7', '5.04', 'aaaa@gmail.com', 'others'),
('17885A0508', '#READ', 'DUDDU VAMSHI', 'CSE', 'A', '7', '8.47', 'aaaa@gmail.com', 'others'),
('NONE', 'NONE', '', '', '', '', '', '', ''),
('1881A0525', '#QHAJ', 'KADAVERGU', 'CSE', 'A', '1', '9.2', 'SSS@GMAIL.COM', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `head` varchar(50) NOT NULL,
  `subhead` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`head`, `subhead`, `date`) VALUES
('Mini Project', 'CSE-2-A', '13416-details.xls');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
