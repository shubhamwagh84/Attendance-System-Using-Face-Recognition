-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 04:38 PM
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
-- Database: `FR_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `AcademicYear`
--

CREATE TABLE `AcademicYear` (
  `dept_id_2` varchar(8) NOT NULL,
  `year_2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AcademicYear`
--

INSERT INTO `AcademicYear` (`dept_id_2`, `year_2`) VALUES
('BIO', '2019-2020'),
('CMPN', '2019-2020'),
('CMPN', '2021-2022'),
('IT', '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `Active_Batch`
--

CREATE TABLE `Active_Batch` (
  `dept_id_8` varchar(8) NOT NULL,
  `year_8` varchar(15) NOT NULL,
  `semester_8` varchar(5) NOT NULL,
  `division_8` varchar(2) NOT NULL,
  `batch_8` varchar(2) NOT NULL,
  `rollno_8` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Active_Batch`
--

INSERT INTO `Active_Batch` (`dept_id_8`, `year_8`, `semester_8`, `division_8`, `batch_8`, `rollno_8`) VALUES
('CMPN', '2019-2020', '2', 'A', '1', '18102C2059');

-- --------------------------------------------------------

--
-- Table structure for table `Active_Division`
--

CREATE TABLE `Active_Division` (
  `dept_id_7` varchar(8) NOT NULL,
  `year_7` varchar(15) NOT NULL,
  `semester_7` varchar(5) NOT NULL,
  `division_7` varchar(2) NOT NULL,
  `rollno_7` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Active_Division`
--

INSERT INTO `Active_Division` (`dept_id_7`, `year_7`, `semester_7`, `division_7`, `rollno_7`) VALUES
('BIO', '2019-2020', '1', 'C', '18102C2059'),
('CMPN', '2019-2020', '2', 'A', '18102C2059');

-- --------------------------------------------------------

--
-- Table structure for table `Batch`
--

CREATE TABLE `Batch` (
  `dept_id_5` varchar(8) NOT NULL,
  `year_5` varchar(15) NOT NULL,
  `semester_5` varchar(5) NOT NULL,
  `division_5` varchar(2) NOT NULL,
  `batch_5` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Batch`
--

INSERT INTO `Batch` (`dept_id_5`, `year_5`, `semester_5`, `division_5`, `batch_5`) VALUES
('CMPN', '2019-2020', '2', 'A', '1'),
('CMPN', '2019-2020', '2', 'A', '2'),
('CMPN', '2019-2020', '2', 'A', '3'),
('CMPN', '2019-2020', '2', 'A', '4'),
('CMPN', '2019-2020', '2', 'A', '5');

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `dept_id_10` varchar(8) NOT NULL,
  `year_10` varchar(15) NOT NULL,
  `semester_10` varchar(5) NOT NULL,
  `course_code_10` varchar(20) NOT NULL,
  `name_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `dept_id_1` varchar(8) NOT NULL,
  `dept_name_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`dept_id_1`, `dept_name_1`) VALUES
('abc', 'acvbg'),
('BIO', 'Bio Medical '),
('CMPN', 'Computer Engineering'),
('EXTC', 'electronic'),
('IT', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `Division`
--

CREATE TABLE `Division` (
  `dept_id_4` varchar(8) NOT NULL,
  `year_4` varchar(15) NOT NULL,
  `semester_4` varchar(5) NOT NULL,
  `division_4` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Division`
--

INSERT INTO `Division` (`dept_id_4`, `year_4`, `semester_4`, `division_4`) VALUES
('BIO', '2019-2020', '1', 'B'),
('BIO', '2019-2020', '1', 'C'),
('BIO', '2019-2020', '2', 'A'),
('CMPN', '2019-2020', '2', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `fac_id_9` varchar(12) NOT NULL,
  `fac_name_9` varchar(100) NOT NULL,
  `dept_id_9` varchar(8) NOT NULL,
  `image_9` varchar(500) NOT NULL,
  `imgencoding_9` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`fac_id_9`, `fac_name_9`, `dept_id_9`, `image_9`, `imgencoding_9`) VALUES
('85478565', 'RK Shrma', 'CMPN', '/opt/lampp/htdocs/Projects/Attendance/RegisterImg/Screenshot from 2020-11-02 11-54-45.png', 'Img Encoding');

-- --------------------------------------------------------

--
-- Table structure for table `Semester`
--

CREATE TABLE `Semester` (
  `dept_id_3` varchar(8) NOT NULL,
  `year_3` varchar(15) NOT NULL,
  `semester_3` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Semester`
--

INSERT INTO `Semester` (`dept_id_3`, `year_3`, `semester_3`) VALUES
('BIO', '2019-2020', '1'),
('BIO', '2019-2020', '2'),
('BIO', '2019-2020', '3'),
('CMPN', '2019-2020', '1'),
('CMPN', '2019-2020', '2'),
('CMPN', '2021-2022', '5'),
('IT', '2019-2020', '1'),
('IT', '2019-2020', '2'),
('IT', '2019-2020', '3');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `rollno_6` varchar(12) NOT NULL,
  `name_6` varchar(50) NOT NULL,
  `dept_id_6` varchar(8) NOT NULL,
  `image_6` varchar(500) NOT NULL,
  `imgEncoding_6` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`rollno_6`, `name_6`, `dept_id_6`, `image_6`, `imgEncoding_6`) VALUES
('18102C2059', 'Shubham Wagh', 'CMPN', '/opt/lampp/htdocs/Projects/Attendance/RegisterImg/Screenshot from 2020-11-02 11-52-31.png', 'image encoding');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AcademicYear`
--
ALTER TABLE `AcademicYear`
  ADD PRIMARY KEY (`dept_id_2`,`year_2`);

--
-- Indexes for table `Active_Batch`
--
ALTER TABLE `Active_Batch`
  ADD PRIMARY KEY (`dept_id_8`,`year_8`,`semester_8`,`division_8`,`batch_8`,`rollno_8`),
  ADD KEY `FK_ACTIVE_Batch_S2` (`rollno_8`);

--
-- Indexes for table `Active_Division`
--
ALTER TABLE `Active_Division`
  ADD PRIMARY KEY (`dept_id_7`,`year_7`,`semester_7`,`division_7`,`rollno_7`),
  ADD KEY `FK_ADIVISION_S23` (`rollno_7`);

--
-- Indexes for table `Batch`
--
ALTER TABLE `Batch`
  ADD PRIMARY KEY (`dept_id_5`,`year_5`,`semester_5`,`division_5`,`batch_5`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`dept_id_10`,`year_10`,`semester_10`,`course_code_10`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`dept_id_1`);

--
-- Indexes for table `Division`
--
ALTER TABLE `Division`
  ADD PRIMARY KEY (`dept_id_4`,`year_4`,`semester_4`,`division_4`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`fac_id_9`,`dept_id_9`),
  ADD KEY `FK_FACULTY_S1` (`dept_id_9`);

--
-- Indexes for table `Semester`
--
ALTER TABLE `Semester`
  ADD PRIMARY KEY (`dept_id_3`,`year_3`,`semester_3`) USING BTREE;

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`rollno_6`,`dept_id_6`),
  ADD KEY `STUD_FK_S1` (`dept_id_6`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AcademicYear`
--
ALTER TABLE `AcademicYear`
  ADD CONSTRAINT `AY_FK` FOREIGN KEY (`dept_id_2`) REFERENCES `Department` (`dept_id_1`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Active_Batch`
--
ALTER TABLE `Active_Batch`
  ADD CONSTRAINT `FK_ACTIVE_Batch_S1` FOREIGN KEY (`dept_id_8`,`year_8`,`semester_8`,`division_8`,`batch_8`) REFERENCES `Batch` (`dept_id_5`, `year_5`, `semester_5`, `division_5`, `batch_5`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ACTIVE_Batch_S2` FOREIGN KEY (`rollno_8`) REFERENCES `Student` (`rollno_6`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Active_Division`
--
ALTER TABLE `Active_Division`
  ADD CONSTRAINT `FK_ADIVISION_S1` FOREIGN KEY (`dept_id_7`,`year_7`,`semester_7`,`division_7`) REFERENCES `Division` (`dept_id_4`, `year_4`, `semester_4`, `division_4`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ADIVISION_S23` FOREIGN KEY (`rollno_7`) REFERENCES `Student` (`rollno_6`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Batch`
--
ALTER TABLE `Batch`
  ADD CONSTRAINT `FK_Batch_S1` FOREIGN KEY (`dept_id_5`,`year_5`,`semester_5`,`division_5`) REFERENCES `Division` (`dept_id_4`, `year_4`, `semester_4`, `division_4`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `FK_Cource_S1` FOREIGN KEY (`dept_id_10`,`year_10`,`semester_10`) REFERENCES `Semester` (`dept_id_3`, `year_3`, `semester_3`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Division`
--
ALTER TABLE `Division`
  ADD CONSTRAINT `FK_DIVI_S1` FOREIGN KEY (`dept_id_4`,`year_4`,`semester_4`) REFERENCES `Semester` (`dept_id_3`, `year_3`, `semester_3`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD CONSTRAINT `FK_FACULTY_S1` FOREIGN KEY (`dept_id_9`) REFERENCES `Department` (`dept_id_1`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Semester`
--
ALTER TABLE `Semester`
  ADD CONSTRAINT `FK_SEM_3` FOREIGN KEY (`dept_id_3`,`year_3`) REFERENCES `AcademicYear` (`dept_id_2`, `year_2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `STUD_FK_S1` FOREIGN KEY (`dept_id_6`) REFERENCES `Division` (`dept_id_4`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
