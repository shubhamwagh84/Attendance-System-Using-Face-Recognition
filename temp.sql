-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 04:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `AcademicYear`
--

CREATE TABLE `AcademicYear` (
  `year` varchar(12) NOT NULL,
  `d_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Active_Batch`
--

CREATE TABLE `Active_Batch` (
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `division` varchar(3) NOT NULL,
  `batch` varchar(3) NOT NULL,
  `rollno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Active_Division`
--

CREATE TABLE `Active_Division` (
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(3) NOT NULL,
  `division` varchar(3) NOT NULL,
  `rollno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Attendance_Practical`
--

CREATE TABLE `Attendance_Practical` (
  `PracticalSessionConducted` varchar(20) NOT NULL,
  `student_rollno` varchar(12) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Attendance_Theory`
--

CREATE TABLE `Attendance_Theory` (
  `TheorySessionConducted` varchar(30) NOT NULL,
  `student_rollno` varchar(12) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Batch`
--

CREATE TABLE `Batch` (
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `batch` varchar(3) NOT NULL,
  `division` varchar(3) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `dept_id` varchar(8) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Division`
--

CREATE TABLE `Division` (
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `division` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `fac_id` varchar(12) NOT NULL,
  `fac_name` varchar(100) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PracticalAssign`
--

CREATE TABLE `PracticalAssign` (
  `course_id` varchar(20) NOT NULL,
  `fac_id` varchar(12) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `division` varchar(3) NOT NULL,
  `batch` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PracticalSession`
--

CREATE TABLE `PracticalSession` (
  `course_id` varchar(20) NOT NULL,
  `fac_id` varchar(12) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `division` varchar(3) NOT NULL,
  `batch` varchar(3) NOT NULL,
  `day` varchar(12) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `lab_no` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PracticalSessionConducted`
--

CREATE TABLE `PracticalSessionConducted` (
  `course_id` varchar(20) NOT NULL,
  `fac_id` varchar(12) NOT NULL,
  `division` varchar(3) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `batch` varchar(3) NOT NULL,
  `day` varchar(12) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `actual_start_time` varchar(10) NOT NULL,
  `actual_end_time` varchar(10) NOT NULL,
  `conducted_by_fac_id` varchar(12) NOT NULL,
  `conducted_in_lab_no` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester`
--

CREATE TABLE `Semester` (
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `rollno` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `image` varchar(500) NOT NULL,
  `imgEncoding` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TheoryAssign`
--

CREATE TABLE `TheoryAssign` (
  `course_id` varchar(20) NOT NULL,
  `fac_id` varchar(12) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `division` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TheorySession`
--

CREATE TABLE `TheorySession` (
  `course_id` varchar(20) NOT NULL,
  `fac_id` varchar(12) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `division` varchar(3) NOT NULL,
  `day` varchar(12) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `room_no` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TheorySessionConducted`
--

CREATE TABLE `TheorySessionConducted` (
  `course_id` varchar(20) NOT NULL,
  `fac_id` varchar(12) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `year` varchar(12) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `division` varchar(3) NOT NULL,
  `day` varchar(12) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `room_no` varchar(8) NOT NULL,
  `actual_start_time` varchar(10) NOT NULL,
  `actual_end_time` varchar(10) NOT NULL,
  `conducted_by_fac_id` varchar(12) NOT NULL,
  `conducted_in_roomno` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AcademicYear`
--
ALTER TABLE `AcademicYear`
  ADD PRIMARY KEY (`year`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `Active_Batch`
--
ALTER TABLE `Active_Batch`
  ADD KEY `batch` (`batch`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `rollno` (`rollno`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `Active_Division`
--
ALTER TABLE `Active_Division`
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `rollno` (`rollno`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `Attendance_Practical`
--
ALTER TABLE `Attendance_Practical`
  ADD PRIMARY KEY (`date`),
  ADD KEY `student_rollno` (`student_rollno`);

--
-- Indexes for table `Attendance_Theory`
--
ALTER TABLE `Attendance_Theory`
  ADD PRIMARY KEY (`date`),
  ADD KEY `student_rollno` (`student_rollno`);

--
-- Indexes for table `Batch`
--
ALTER TABLE `Batch`
  ADD PRIMARY KEY (`batch`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `Division`
--
ALTER TABLE `Division`
  ADD PRIMARY KEY (`division`),
  ADD KEY `Foreign key3` (`year`),
  ADD KEY `Foreign key2` (`semester`),
  ADD KEY `Foreign key_1` (`dept_id`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`fac_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `PracticalAssign`
--
ALTER TABLE `PracticalAssign`
  ADD KEY `batch` (`batch`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `PracticalSession`
--
ALTER TABLE `PracticalSession`
  ADD PRIMARY KEY (`day`,`start_time`),
  ADD KEY `batch` (`batch`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `PracticalSessionConducted`
--
ALTER TABLE `PracticalSessionConducted`
  ADD PRIMARY KEY (`day`,`start_time`),
  ADD KEY `batch` (`batch`),
  ADD KEY `conducted_by_fac_id` (`conducted_by_fac_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `Semester`
--
ALTER TABLE `Semester`
  ADD PRIMARY KEY (`semester`),
  ADD KEY `Foreign key` (`dept_id`),
  ADD KEY `Foreign key1` (`year`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`rollno`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `TheoryAssign`
--
ALTER TABLE `TheoryAssign`
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `TheorySession`
--
ALTER TABLE `TheorySession`
  ADD PRIMARY KEY (`day`,`start_time`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `TheorySessionConducted`
--
ALTER TABLE `TheorySessionConducted`
  ADD PRIMARY KEY (`day`,`start_time`),
  ADD KEY `conducted_by_fac_id` (`conducted_by_fac_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `division` (`division`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `semester` (`semester`),
  ADD KEY `year` (`year`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AcademicYear`
--
ALTER TABLE `AcademicYear`
  ADD CONSTRAINT `AcademicYear_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `Department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `Active_Batch`
--
ALTER TABLE `Active_Batch`
  ADD CONSTRAINT `Active_Batch_ibfk_1` FOREIGN KEY (`batch`) REFERENCES `Batch` (`batch`),
  ADD CONSTRAINT `Active_Batch_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `Active_Batch_ibfk_3` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `Active_Batch_ibfk_4` FOREIGN KEY (`rollno`) REFERENCES `Student` (`rollno`),
  ADD CONSTRAINT `Active_Batch_ibfk_5` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `Active_Batch_ibfk_6` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `Active_Division`
--
ALTER TABLE `Active_Division`
  ADD CONSTRAINT `Active_Division_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `Active_Division_ibfk_2` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `Active_Division_ibfk_3` FOREIGN KEY (`rollno`) REFERENCES `Student` (`rollno`),
  ADD CONSTRAINT `Active_Division_ibfk_4` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `Active_Division_ibfk_5` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `Attendance_Practical`
--
ALTER TABLE `Attendance_Practical`
  ADD CONSTRAINT `Attendance_Practical_ibfk_1` FOREIGN KEY (`student_rollno`) REFERENCES `Student` (`rollno`);

--
-- Constraints for table `Attendance_Theory`
--
ALTER TABLE `Attendance_Theory`
  ADD CONSTRAINT `Attendance_Theory_ibfk_1` FOREIGN KEY (`student_rollno`) REFERENCES `Student` (`rollno`);

--
-- Constraints for table `Batch`
--
ALTER TABLE `Batch`
  ADD CONSTRAINT `Batch_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `Batch_ibfk_2` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `Batch_ibfk_3` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `Batch_ibfk_4` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `Course_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `Course_ibfk_2` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `Course_ibfk_3` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD CONSTRAINT `Faculty_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`);

--
-- Constraints for table `PracticalAssign`
--
ALTER TABLE `PracticalAssign`
  ADD CONSTRAINT `PracticalAssign_ibfk_1` FOREIGN KEY (`batch`) REFERENCES `Batch` (`batch`),
  ADD CONSTRAINT `PracticalAssign_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_code`),
  ADD CONSTRAINT `PracticalAssign_ibfk_3` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `PracticalAssign_ibfk_4` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `PracticalAssign_ibfk_5` FOREIGN KEY (`fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `PracticalAssign_ibfk_6` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `PracticalAssign_ibfk_7` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `PracticalSession`
--
ALTER TABLE `PracticalSession`
  ADD CONSTRAINT `PracticalSession_ibfk_1` FOREIGN KEY (`batch`) REFERENCES `Batch` (`batch`),
  ADD CONSTRAINT `PracticalSession_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_code`),
  ADD CONSTRAINT `PracticalSession_ibfk_3` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `PracticalSession_ibfk_4` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `PracticalSession_ibfk_5` FOREIGN KEY (`fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `PracticalSession_ibfk_6` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `PracticalSession_ibfk_7` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `PracticalSessionConducted`
--
ALTER TABLE `PracticalSessionConducted`
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_1` FOREIGN KEY (`batch`) REFERENCES `Batch` (`batch`),
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_2` FOREIGN KEY (`conducted_by_fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_code`),
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_4` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_5` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_6` FOREIGN KEY (`fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_7` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `PracticalSessionConducted_ibfk_8` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `Semester`
--
ALTER TABLE `Semester`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `Foreign key1` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `Student_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`);

--
-- Constraints for table `TheoryAssign`
--
ALTER TABLE `TheoryAssign`
  ADD CONSTRAINT `TheoryAssign_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_code`),
  ADD CONSTRAINT `TheoryAssign_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `TheoryAssign_ibfk_3` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `TheoryAssign_ibfk_4` FOREIGN KEY (`fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `TheoryAssign_ibfk_5` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `TheoryAssign_ibfk_6` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `TheorySession`
--
ALTER TABLE `TheorySession`
  ADD CONSTRAINT `TheorySession_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_code`),
  ADD CONSTRAINT `TheorySession_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `TheorySession_ibfk_3` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `TheorySession_ibfk_4` FOREIGN KEY (`fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `TheorySession_ibfk_5` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `TheorySession_ibfk_6` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);

--
-- Constraints for table `TheorySessionConducted`
--
ALTER TABLE `TheorySessionConducted`
  ADD CONSTRAINT `TheorySessionConducted_ibfk_1` FOREIGN KEY (`conducted_by_fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `TheorySessionConducted_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_code`),
  ADD CONSTRAINT `TheorySessionConducted_ibfk_3` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`dept_id`),
  ADD CONSTRAINT `TheorySessionConducted_ibfk_4` FOREIGN KEY (`division`) REFERENCES `Division` (`division`),
  ADD CONSTRAINT `TheorySessionConducted_ibfk_5` FOREIGN KEY (`fac_id`) REFERENCES `Faculty` (`fac_id`),
  ADD CONSTRAINT `TheorySessionConducted_ibfk_6` FOREIGN KEY (`semester`) REFERENCES `Semester` (`semester`),
  ADD CONSTRAINT `TheorySessionConducted_ibfk_7` FOREIGN KEY (`year`) REFERENCES `AcademicYear` (`year`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
