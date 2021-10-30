-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 10:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iti`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment_monitoring`
--

CREATE TABLE `assessment_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `trade_code` int(11) NOT NULL,
  `registration_number` int(11) NOT NULL,
  `month` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `marks_obtained_TT` int(4) NOT NULL,
  `marks_total_TT` int(4) NOT NULL,
  `marks_obtained_TP` int(4) NOT NULL,
  `marks_total_TP` int(4) NOT NULL,
  `marks_obtained_WCS` int(4) NOT NULL,
  `marks_total_WCS` int(4) NOT NULL,
  `marks_obtained_ED` int(4) NOT NULL,
  `marks_total_ED` int(4) NOT NULL,
  `marks_obtained_ES` int(4) NOT NULL,
  `marks_total_ES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assessment_monitoring`
--

INSERT INTO `assessment_monitoring` (`unique_id`, `NCVT_MIS_code`, `trade_code`, `registration_number`, `month`, `calendar_year`, `marks_obtained_TT`, `marks_total_TT`, `marks_obtained_TP`, `marks_total_TP`, `marks_obtained_WCS`, `marks_total_WCS`, `marks_obtained_ED`, `marks_total_ED`, `marks_obtained_ES`, `marks_total_ES`) VALUES
(3, 'GR19000022', 453, 124, 'July', 2021, 98, 100, 99, 100, 99, 100, 99, 100, 99, 100);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_monitoring`
--

CREATE TABLE `attendance_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `registration_number` int(30) NOT NULL,
  `trade_code` int(11) NOT NULL,
  `admission_year` int(4) NOT NULL,
  `month` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `total_hours_TT` int(4) NOT NULL,
  `attended_hours_TT` int(4) NOT NULL,
  `total_hours_TP` int(4) NOT NULL,
  `attended_hours_TP` int(4) NOT NULL,
  `total_hours_WCS` int(4) NOT NULL,
  `attended_hours_WCS` int(4) NOT NULL,
  `total_hours_ED` int(4) NOT NULL,
  `attended_hours_ED` int(4) NOT NULL,
  `total_hours_ES` int(4) NOT NULL,
  `attended_hours_ES` int(4) NOT NULL,
  `total_hours_delivered` int(4) NOT NULL,
  `total_hours_attended` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendance_monitoring`
--

INSERT INTO `attendance_monitoring` (`unique_id`, `NCVT_MIS_code`, `registration_number`, `trade_code`, `admission_year`, `month`, `calendar_year`, `total_hours_TT`, `attended_hours_TT`, `total_hours_TP`, `attended_hours_TP`, `total_hours_WCS`, `attended_hours_WCS`, `total_hours_ED`, `attended_hours_ED`, `total_hours_ES`, `attended_hours_ES`, `total_hours_delivered`, `total_hours_attended`) VALUES
(4, 'GR19000022', 113, 442, 2018, 'May', 2021, 64, 60, 64, 60, 64, 60, 64, 60, 64, 60, 320, 300),
(5, 'GR19000022', 113, 442, 2018, 'May', 2021, 64, 60, 64, 60, 64, 60, 64, 60, 64, 60, 320, 300),
(6, 'GR19000022', 124, 453, 2020, 'July', 2021, 70, 68, 70, 68, 70, 68, 70, 68, 70, 68, 350, 340);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 2, 'Hi', '2021-07-23 07:49:50', 1),
(2, 0, 3, 'Hi', '2021-07-23 08:01:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Title`, `Description`) VALUES
('Foreign Key Naming Rules', 'Foreign key is named as FK_(short form).\r\nThe short form is all the first letters of tables underscore(\'_\') separated words and the first letters of the keys underscore(\'_\') separated words each in capital or uppercase. \r\nEx. Table name: trade, primary key name: trade_code, then foreign key name is FK_TTC. \r\nIn case of same table short form instead of using just one letter use first 2 letters of underscore(\'_\') separated words with the second letter in lower case. \r\nEx. 1. Table name: attendance_monitoring, primary key name: NCVT_MIS_code, then foreign key name is FK_AtMNMC.  \r\n2. Table name: assessment_monitoring, primary key name: NCVT_MIS_code, then foreign key name is FK_AsMNMC.  ');

-- --------------------------------------------------------

--
-- Table structure for table `course_progress`
--

CREATE TABLE `course_progress` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `trade_code` int(11) NOT NULL,
  `admission_year` int(4) NOT NULL,
  `progress_status_TT` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `progress_status_TP` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `progress_status_WCS` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `progress_status_ED` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `progress_status_ES` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `no_of_week_month` int(2) NOT NULL,
  `month` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_progress`
--

INSERT INTO `course_progress` (`unique_id`, `NCVT_MIS_code`, `trade_code`, `admission_year`, `progress_status_TT`, `progress_status_TP`, `progress_status_WCS`, `progress_status_ED`, `progress_status_ES`, `no_of_week_month`, `month`, `calendar_year`) VALUES
(3, 'GR19000022', 453, 2020, '1,2,3', '1,2,3', '1,2', '1,2', '1,2', 3, 'July', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `iti`
--

CREATE TABLE `iti` (
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `ITI_name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `website_URL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `principal_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `running_status` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ITI_grading` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `iti`
--

INSERT INTO `iti` (`NCVT_MIS_code`, `ITI_name`, `website_URL`, `address`, `district`, `state`, `principal_name`, `contact_number`, `email_id`, `running_status`, `ITI_grading`, `password`) VALUES
('GR19000022', 'GOVT Industrial Training Institute Jhargram', 'http://itijhargramwb.org/', 'Ghoradhara, Jhargram, West Bengal 721507', 'MEDINIPUR WEST', 'WEST BENGAL', 'Samaresh Singh', '03221255015  ', 'itijgm@gmail.com', 'Running', '2', 'password'),
('GR19000026', 'Sevayatan Industrial Training Center(Sponsored)', '', '', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GR19000053', 'Govt Industrial Training Institute Midnapore', '', 'P.O.-RANGAMATI, DIST-PASCHIM MIDNAPORE. PIN - 721', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GR19000193', 'Government ITI Nayagram running under PTP', '', 'MOUZA-NAYAGRAM,PLOT NO.-238,JL NO.-143,BLOCK-NAYAG', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GR19000246', 'Binpur I Government ITI', '', 'Mouza- Shankhakhula, P.O-Bamal, P.S-Lalgarh, Dist- Paschim Medinipur, Pin-721516', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GU19000147', 'Government ITI Salboni running under PTP', '', 'Salboni', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GU19000148', 'Government ITI Keshpur running under PTP', '', 'Keshpur Government ITI P.O.&amp;amp;amp;amp;amp;am', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GU19000197', 'Government ITI Garbeta running under PTP', '', 'Garbeta', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GU19000223', 'Government ITI Debra running under PTP', '', 'Debra Government ITI Block &amp;amp; P.O.- Debra P', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('GU19000227', 'Government ITI Ghatal running under PTP', '', 'Ghatal Government ITI AT- Birsingha P.O.&amp;amp;a', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PR19000139', 'Shining Star Pvt.Iti', '', 'Vill-Padima,P.O-Duan,P.S-Debra', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PR19000183', 'Institute of Science and Technology Private ITI', '', 'Dhurabila, Dhamkuria, Chandrakona Town,Paschim Med', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PR19000215', 'Green Field Agrotech Private ITI', '', 'Dharampur,C.K.Road P.O.-Dukhi, P.S.-Garbetha, D', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PR19000232', 'KHARAGPUR PRIVATE ITI', '', 'WALIPUR(NH-6),P.O-KHARAGPUR', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PR19000237', 'Futuretech Private ITI', '', 'Vill- Sanbaneswarpur, P.O- Keushi, PS- Kharagpur (Local)', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PR19000265', 'Dasagram Anuran Pvt ITI', '', 'Vill Dasagram, PS, Sabang Dist Pasachim Medinipur.', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PR19000269', 'SABANG PRIVATE ITI', '', 'Vill-Uddhabpur, P.O-Mohar, P.S-Sabang', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PU19000064', 'Salboni ITI,', '', 'Paschim Medinipur', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PU19000080', 'Pratap Chandra Private ITI', '', 'AT: DAHAMUNDA, PO- KORTIA, BLOCK: GOPIBALLAVPUR-1,', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password'),
('PU19000113', 'BHATTER COLLEGE PRIVATE INDUSTRIAL TRAINING INSTITUTE', '', 'At/P.O. - Dantan', 'MEDINIPUR WEST', 'WEST BENGAL', '', '', '', 'Running', '', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'GR19000274', '$2y$10$zXib.m2VpuaFy9YFlEStheXdzw2LITI8u7wICKeXdAernghhVleyi'),
(2, 'GR19000200', '$2y$10$POxg0Z01sTBgGHy7k3c1e.xKY.xhQ9gYnfC.UI9NLqBFz2ZmHN0K6'),
(3, 'admin', '$2y$10$/e3BjirI05x77DoPx9Z89ekTi.c.O5sOSGDQ9CSim8r0P5x9WfznS');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 2, '2021-07-23 07:50:23', 'no'),
(2, 3, '2021-07-23 08:01:48', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `placement_monitoring`
--

CREATE TABLE `placement_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `trade_code` int(11) NOT NULL,
  `month` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `average_salary` int(11) NOT NULL,
  `average_placement` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `placement_monitoring`
--

INSERT INTO `placement_monitoring` (`unique_id`, `NCVT_MIS_code`, `trade_code`, `month`, `calendar_year`, `average_salary`, `average_placement`) VALUES
(4, 'GR19000022', 453, 'July', 2021, 265000, 96);

-- --------------------------------------------------------

--
-- Table structure for table `progress_report_status`
--

CREATE TABLE `progress_report_status` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `full_name`, `address`, `email`, `contact`) VALUES
(1, 'admin', 'admin', 'Administrator', 'Directorate of Industrial Training\r\nTechnical Education, Training & Skill Development Department\r\nB/7, 2nd Floor, Karigari Bhawan, Action Area-Ill,\r\nNew Town, Rajarhat, Kolkata-700160', 'strivespiu@gmail.com', '7003021900'),
(2, 'a', 'a', 'a', 'a', 'a', '100'),
(3, 'Shubh Priyadarshi', 'admin', 'Shubh Priyadarshi', 'Plot No. 31-32, Anant Apt., Sujata Layout, Deendayal Nagar, Nagpur, Maharashtra-440022', 'shubhpriyadarshi17@gmail.com ', '100');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_aids_monitoring`
--

CREATE TABLE `teaching_aids_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `available_teaching_aids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teaching_aids_monitoring`
--

INSERT INTO `teaching_aids_monitoring` (`unique_id`, `NCVT_MIS_code`, `month`, `calendar_year`, `available_teaching_aids`, `status`) VALUES
(2, 'GR19000022', 'May', 2021, 'E-Learning', 'Yes'),
(7, 'GR19000022', 'July', 2021, 'Projector', 'Yes'),
(8, 'GR19000022', 'July', 2021, 'Digital Whiteboard', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `trade_code` int(11) NOT NULL,
  `trade_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NSQF_level` int(11) NOT NULL,
  `sector_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`trade_code`, `trade_name`, `NSQF_level`, `sector_name`, `duration`) VALUES
(402, 'Agro Processing (NSQF)', 4, 'Food Processing & Preservation', '1 Year'),
(406, 'Attendant Operator (Chemical Plant) (NSQF)', 5, 'Chemical', '2 Years'),
(407, 'Baker and Confectioner (NSQF)', 4, 'Food Processing & Preservation', '1 Year'),
(408, 'Bamboo Works (NSQF)', 3, 'Handicrafts', '1 Year'),
(409, 'Cosmetology (NSQF)', 4, 'Beauty and Wellness', '1 Year'),
(412, 'Computer Engineering (NSQF)', 5, 'Information Technology', '1 year'),
(413, 'Computer Science (NSQF)', 5, 'Information Technology', '1 year'),
(417, 'Computer Aided Embroidery And Designing (NSQF)', 4, 'Textile & Apparel', '1 Year'),
(418, 'Computer Hardware & Network Maintenance (NSQF)', 4, 'IT & ITES', '1 Year'),
(421, 'Computer Operator and Programming Assistant (NSQF)', 4, 'IT & ITES', '1 Year'),
(439, 'Draughtsman (Mechanical) (NSQF)', 5, 'Production & Manufacturing', '2 Years'),
(440, 'Dress Making (NSQF)', 4, 'Textile & Apparel', '1 Year'),
(442, 'Electrician (NSQF)', 5, 'Electrical', '2 Years'),
(446, 'Electronics Mechanic (NSQF)', 5, 'Electronics & Hardware', '2 Years'),
(449, 'Fashion Design & Technology (NSQF)', 4, 'Textile & Apparel', '1 Year'),
(453, 'Fitter (NSQF)', 5, 'Production & Manufacturing', '2 Years'),
(456, 'Food & Beverages Services Assistant (NSQF)', 4, 'Food Processing & Preservation', '1 Year'),
(457, 'Food Beverage (NSQF)', 4, 'Food Processing & Preservation', '1 Year'),
(458, 'Food Production (General) (NSQF)', 4, 'Food Processing & Preservation', '1 Year'),
(459, 'Footwear maker (NSQF)', 3, 'Leather and Leather goods', '1 Year'),
(460, 'Foundryman (NSQF)', 4, 'Production & Manufacturing', '1 Year'),
(461, 'Front Office Assistant (NSQF)', 4, 'Travel, Tourism and Hospitality', '1 Year'),
(462, 'Fruit and Vegetable Processor (NSQF)', 4, 'Food Processing & Preservation', '1 Year'),
(471, 'House Keeper (NSQF)', 4, 'Travel, Tourism and Hospitality', '1 Year'),
(474, 'Information Communication Technology System Mainte', 5, 'IT & ITES', '2 Years'),
(475, 'Information Technology (NSQF)', 5, 'IT & ITES', '2 Years'),
(477, 'Instrument Mechanic (NSQF)', 5, 'Electronics & Hardware', '2 Years'),
(478, 'Instrument Mechanic (Chemical Plant) (NSQF)', 5, 'Chemical', '2 Years'),
(481, 'Interior Design & Decoration (NSQF)', 4, 'Construction, Construction Material and Real Estat', '1 Year'),
(487, 'Leather Goods Maker (NSQF)', 3, 'Leather and Leather goods', '1 Year'),
(490, 'Lift and Escalator Mechanic (NSQF)', 5, 'Electrical', '2 Years'),
(493, 'Machinist (NSQF)', 5, 'Production & Manufacturing', '2 Years'),
(494, 'Machinist (Grinder) (NSQF)', 5, 'Production & Manufacturing', '2 Years'),
(495, 'Maintenance Mechanic (Chemical Plant) (NSQF)', 5, 'Chemical', '2 Years'),
(499, 'Mason (Building Constructor) (NSQF)', 3, 'Construction, Construction Material and Real Estat', '1 Year'),
(502, 'Mechanic (Motor Vehicle) (NSQF)', 5, 'Automobile', '2 Years'),
(505, 'Mechanic Agriculture Machinery (NSQF)', 5, 'Automobile', '2 Years'),
(507, 'Mechanic Auto Body Painting (NSQF)', 4, 'Automobile', '1 Year'),
(508, 'Mechanic Auto Body Repair (NSQF)', 4, 'Automobile', '1 Year'),
(515, 'Mechanic Diesel (NSQF)', 4, 'Automobile', '1 Year'),
(536, 'Painter General (NSQF)', 5, 'Chemical', '2 Years'),
(541, 'Plastic Processing Operator (NSQF)', 4, 'Chemical', '1 Year'),
(543, 'Plumber (NSQF)', 4, 'Construction, Construction Material and Real Estat', '1 Year'),
(553, 'Secretarial Practice (English) (NSQF)', 4, 'Travel, Tourism and Hospitality', '1 Year'),
(554, 'Sewing Technology (NSQF)', 4, 'Textile & Apparel', '1 Year'),
(555, 'Sheet Metal Worker (NSQF)', 3, 'Fabrication', '1 Year'),
(557, 'Smartphone Technician Cum App Tester (NSQF)', 5, 'Electronics & Hardware', '6 Months'),
(561, 'Solar Technician (Electrical) (NSQF)', 4, 'Renewable energy', '1 year'),
(564, 'Stenographer & Secretarial Assistant (English) (NS', 4, 'Travel, Tourism and Hospitality', '1 Year'),
(569, 'Surveyor (NSQF)', 5, 'Construction, Construction Material and Real Estat', '2 Years'),
(570, 'Technician Mechatronics (NSQF)', 5, 'Production & Manufacturing', '2 Years'),
(571, 'Technician Power Electronics System (NSQF)', 5, 'Electronics & Hardware', '2 Years'),
(575, 'Tool & Die Maker (Press Tools, Jigs & Fixtures) (N', 5, 'Production & Manufacturing', '2 Years'),
(578, 'Turner (NSQF)', 5, 'Production & Manufacturing', '2 Years'),
(588, 'Welder (Pipe) (NSQF)', 3, 'Fabrication', '1 Year'),
(592, 'Wireman (NSQF)', 4, 'Electrical', '2 Years'),
(965, 'IoT Technician (Smart City)(NSQF)', 4, 'IT & ITES', '1 year'),
(966, 'Carpenter (NSQF)', 4, 'Construction, Construction Material and Real Estat', '1 year'),
(969, 'Welder (NSQF)', 4, 'Fabrication', '1 year'),
(970, 'Surveyor (NSQF)', 5, 'Construction, Construction Material and Real Estat', '2 Years'),
(987, 'IoT Technician (Smart Agriculture)(NSQF)', 4, 'IT & ITES', '1 year'),
(990, 'Architectural Draughtsman (NSQF)', 5, 'Construction, Construction Material and Real Estat', '2 Years'),
(991, 'Draughtsman (Civil) (NSQF)', 5, 'Construction, Construction Material and Real Estat', '2 Years');

-- --------------------------------------------------------

--
-- Table structure for table `trade_allocation`
--

CREATE TABLE `trade_allocation` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `trade_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trade_allocation`
--

INSERT INTO `trade_allocation` (`unique_id`, `NCVT_MIS_code`, `trade_code`) VALUES
(16, 'GR19000022', 991),
(17, 'GR19000022', 442),
(18, 'GR19000022', 453),
(19, 'GR19000022', 554);

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `registration_number` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trade_code` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `admission_year` int(4) NOT NULL,
  `contact_number` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`registration_number`, `name`, `trade_code`, `NCVT_MIS_code`, `email`, `admission_year`, `contact_number`, `gender`, `date_of_birth`, `category`, `mother_name`, `father_name`, `guardian_name`) VALUES
(113, 'Aknit V. Gupta', 442, 'GR19000022', 'aknitg@hotmail.com', 2018, '8677589236', 'male', '1999-03-05', 'General', 'Varun', 'Neeta', 'none'),
(124, 'Obama', 453, 'GR19000022', 'obamaprism@gmail.com', 2020, '8677557236', 'male', '1998-06-17', 'General', 'Obama Sr.', 'Mrs. Obama', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_inspection`
--

CREATE TABLE `virtual_inspection` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment_monitoring`
--
ALTER TABLE `assessment_monitoring`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_AsMNMS` (`NCVT_MIS_code`),
  ADD KEY `FK_AtMTC` (`trade_code`),
  ADD KEY `FK_AsMRN` (`registration_number`);

--
-- Indexes for table `attendance_monitoring`
--
ALTER TABLE `attendance_monitoring`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_AtMNMS` (`NCVT_MIS_code`),
  ADD KEY `FK_AsMTC` (`trade_code`),
  ADD KEY `FK_AtMRN` (`registration_number`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `course_progress`
--
ALTER TABLE `course_progress`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_CPNMS` (`NCVT_MIS_code`),
  ADD KEY `FK_CPTC` (`trade_code`);

--
-- Indexes for table `iti`
--
ALTER TABLE `iti`
  ADD PRIMARY KEY (`NCVT_MIS_code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `placement_monitoring`
--
ALTER TABLE `placement_monitoring`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_PMNMS` (`NCVT_MIS_code`),
  ADD KEY `FK_PMTC` (`trade_code`);

--
-- Indexes for table `progress_report_status`
--
ALTER TABLE `progress_report_status`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_PRSNMS` (`NCVT_MIS_code`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_aids_monitoring`
--
ALTER TABLE `teaching_aids_monitoring`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_TAMNMS` (`NCVT_MIS_code`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`trade_code`);

--
-- Indexes for table `trade_allocation`
--
ALTER TABLE `trade_allocation`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_TANMS` (`NCVT_MIS_code`),
  ADD KEY `FK_TATC` (`trade_code`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`registration_number`),
  ADD KEY `FK_TNMS` (`NCVT_MIS_code`),
  ADD KEY `FK_TTC` (`trade_code`);

--
-- Indexes for table `virtual_inspection`
--
ALTER TABLE `virtual_inspection`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `FK_VINMS` (`NCVT_MIS_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment_monitoring`
--
ALTER TABLE `assessment_monitoring`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance_monitoring`
--
ALTER TABLE `attendance_monitoring`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_progress`
--
ALTER TABLE `course_progress`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `placement_monitoring`
--
ALTER TABLE `placement_monitoring`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `progress_report_status`
--
ALTER TABLE `progress_report_status`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teaching_aids_monitoring`
--
ALTER TABLE `teaching_aids_monitoring`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trade_allocation`
--
ALTER TABLE `trade_allocation`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `virtual_inspection`
--
ALTER TABLE `virtual_inspection`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessment_monitoring`
--
ALTER TABLE `assessment_monitoring`
  ADD CONSTRAINT `FK_AsMNMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`),
  ADD CONSTRAINT `FK_AsMRN` FOREIGN KEY (`registration_number`) REFERENCES `trainee` (`registration_number`),
  ADD CONSTRAINT `FK_AsMTC` FOREIGN KEY (`trade_code`) REFERENCES `trade` (`trade_code`);

--
-- Constraints for table `attendance_monitoring`
--
ALTER TABLE `attendance_monitoring`
  ADD CONSTRAINT `FK_AtMNMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`),
  ADD CONSTRAINT `FK_AtMRN` FOREIGN KEY (`registration_number`) REFERENCES `trainee` (`registration_number`),
  ADD CONSTRAINT `FK_AtMTC` FOREIGN KEY (`trade_code`) REFERENCES `trade` (`trade_code`);

--
-- Constraints for table `course_progress`
--
ALTER TABLE `course_progress`
  ADD CONSTRAINT `FK_CPNMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`),
  ADD CONSTRAINT `FK_CPTC` FOREIGN KEY (`trade_code`) REFERENCES `trade` (`trade_code`);

--
-- Constraints for table `placement_monitoring`
--
ALTER TABLE `placement_monitoring`
  ADD CONSTRAINT `FK_PMNMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`),
  ADD CONSTRAINT `FK_PMTC` FOREIGN KEY (`trade_code`) REFERENCES `trade` (`trade_code`);

--
-- Constraints for table `progress_report_status`
--
ALTER TABLE `progress_report_status`
  ADD CONSTRAINT `FK_PRSNMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`);

--
-- Constraints for table `teaching_aids_monitoring`
--
ALTER TABLE `teaching_aids_monitoring`
  ADD CONSTRAINT `FK_TAMNMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`);

--
-- Constraints for table `trade_allocation`
--
ALTER TABLE `trade_allocation`
  ADD CONSTRAINT `FK_TANMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`),
  ADD CONSTRAINT `FK_TATC` FOREIGN KEY (`trade_code`) REFERENCES `trade` (`trade_code`);

--
-- Constraints for table `trainee`
--
ALTER TABLE `trainee`
  ADD CONSTRAINT `FK_TNMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`),
  ADD CONSTRAINT `FK_TTC` FOREIGN KEY (`trade_code`) REFERENCES `trade` (`trade_code`);

--
-- Constraints for table `virtual_inspection`
--
ALTER TABLE `virtual_inspection`
  ADD CONSTRAINT `FK_VINMS` FOREIGN KEY (`NCVT_MIS_code`) REFERENCES `iti` (`NCVT_MIS_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
