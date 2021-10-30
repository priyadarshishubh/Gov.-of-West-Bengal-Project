-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 02:57 PM
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
-- Database: `iti_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment_monitoring`
--

CREATE TABLE `assessment_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `trade_code` int(11) NOT NULL,
  `registration_number` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
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
  `total_marks_ES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_monitoring`
--

CREATE TABLE `attendance_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `trainee_registration_number` int(30) NOT NULL,
  `trade_code` int(11) NOT NULL,
  `admission_year` int(4) NOT NULL,
  `month` varchar(10) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `course_progress`
--

CREATE TABLE `course_progress` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `trade_code` int(11) NOT NULL,
  `admission_year` int(4) NOT NULL,
  `progress_status_TT` varchar(3) NOT NULL,
  `progress_status_TP` varchar(3) NOT NULL,
  `progress_status_WCS` varchar(3) NOT NULL,
  `progress_status_ED` varchar(3) NOT NULL,
  `progress_status_ES` varchar(3) NOT NULL,
  `no_of_week_month` int(2) NOT NULL,
  `month` varchar(15) NOT NULL,
  `calendar_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `iti`
--

CREATE TABLE `iti` (
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `ITI_name` varchar(30) NOT NULL,
  `website_URL` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `principal_name` varchar(50) NOT NULL,
  `contact_number` int(13) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `running_status` varchar(8) NOT NULL,
  `ITI_grading` int(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `placement_monitoring`
--

CREATE TABLE `placement_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `trade_code` int(11) NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `average_salary` int(11) NOT NULL,
  `average_placement` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `progress_report_status`
--

CREATE TABLE `progress_report_status` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `month` varchar(15) NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_aids_monitoring`
--

CREATE TABLE `teaching_aids_monitoring` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `month` varchar(10) NOT NULL,
  `calendar_year` int(4) NOT NULL,
  `available_teaching_aids` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `trade_code` int(11) NOT NULL,
  `trade_name` varchar(50) NOT NULL,
  `NSQF_level` int(11) NOT NULL,
  `sector_name` varchar(50) NOT NULL,
  `duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trade_allocation`
--

CREATE TABLE `trade_allocation` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `trade_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `registration_number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trade_code` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `admission_year` int(4) NOT NULL,
  `contact_number` int(13) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `date_of_birth` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `virtual_inspection`
--

CREATE TABLE `virtual_inspection` (
  `unique_id` int(11) NOT NULL,
  `NCVT_MIS_code` varchar(32) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment_monitoring`
--
ALTER TABLE `assessment_monitoring`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `attendance_monitoring`
--
ALTER TABLE `attendance_monitoring`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `course_progress`
--
ALTER TABLE `course_progress`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `iti`
--
ALTER TABLE `iti`
  ADD PRIMARY KEY (`NCVT_MIS_code`);

--
-- Indexes for table `progress_report_status`
--
ALTER TABLE `progress_report_status`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_aids_monitoring`
--
ALTER TABLE `teaching_aids_monitoring`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`trade_code`);

--
-- Indexes for table `trade_allocation`
--
ALTER TABLE `trade_allocation`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`registration_number`);

--
-- Indexes for table `virtual_inspection`
--
ALTER TABLE `virtual_inspection`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment_monitoring`
--
ALTER TABLE `assessment_monitoring`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_monitoring`
--
ALTER TABLE `attendance_monitoring`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_progress`
--
ALTER TABLE `course_progress`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `progress_report_status`
--
ALTER TABLE `progress_report_status`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teaching_aids_monitoring`
--
ALTER TABLE `teaching_aids_monitoring`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trade_allocation`
--
ALTER TABLE `trade_allocation`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `virtual_inspection`
--
ALTER TABLE `virtual_inspection`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
