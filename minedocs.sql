-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 06:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minedocs`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TenthSchool` varchar(200) DEFAULT NULL,
  `TenthBoard` varchar(200) DEFAULT NULL,
  `TenthRoll` varchar(50) DEFAULT NULL,
  `TenthYear` char(4) DEFAULT NULL,
  `TenthMarks` varchar(10) DEFAULT NULL,
  `TwelveSchool` varchar(200) DEFAULT NULL,
  `TwelveBoard` varchar(200) DEFAULT NULL,
  `TwelveRoll` varchar(50) DEFAULT NULL,
  `TwelveYear` char(4) DEFAULT NULL,
  `TwelveMarks` varchar(10) DEFAULT NULL,
  `College` varchar(200) DEFAULT NULL,
  `Branch` varchar(100) DEFAULT NULL,
  `CollegeRoll` varchar(10) DEFAULT NULL,
  `CollegeRegNo` varchar(20) DEFAULT NULL,
  `Batch` char(4) DEFAULT NULL,
  `SGPA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`Id`, `Email`, `TenthSchool`, `TenthBoard`, `TenthRoll`, `TenthYear`, `TenthMarks`, `TwelveSchool`, `TwelveBoard`, `TwelveRoll`, `TwelveYear`, `TwelveMarks`, `College`, `Branch`, `CollegeRoll`, `CollegeRegNo`, `Batch`, `SGPA`) VALUES
(1, 'kun123658@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Achievement_One` text,
  `Achievement_Two` text,
  `Achievement_Three` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`Id`, `Email`, `Achievement_One`, `Achievement_Two`, `Achievement_Three`) VALUES
(1, 'kun123658@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ekalyan_docs`
--

CREATE TABLE `ekalyan_docs` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Bonafide` varchar(200) DEFAULT NULL,
  `Income` varchar(200) DEFAULT NULL,
  `Caste` varchar(200) DEFAULT NULL,
  `Residential` varchar(200) DEFAULT NULL,
  `Passbook` varchar(200) DEFAULT NULL,
  `Others` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekalyan_docs`
--

INSERT INTO `ekalyan_docs` (`Id`, `Email`, `Bonafide`, `Income`, `Caste`, `Residential`, `Passbook`, `Others`) VALUES
(1, 'kun123658@gmail.com', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `higher_secondary_docs`
--

CREATE TABLE `higher_secondary_docs` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Marksheet` varchar(200) DEFAULT NULL,
  `AdmitCard` varchar(200) DEFAULT NULL,
  `Others` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `higher_secondary_docs`
--

INSERT INTO `higher_secondary_docs` (`Id`, `Email`, `Marksheet`, `AdmitCard`, `Others`) VALUES
(1, 'kun123658@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `internship_docs`
--

CREATE TABLE `internship_docs` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Internship_one` varchar(200) DEFAULT NULL,
  `Internship_two` varchar(200) DEFAULT NULL,
  `Olympiad_one` varchar(200) DEFAULT NULL,
  `Olympiad_two` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_docs`
--

INSERT INTO `internship_docs` (`Id`, `Email`, `Internship_one`, `Internship_two`, `Olympiad_one`, `Olympiad_two`) VALUES
(1, 'kun123658@gmail.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile_details`
--

CREATE TABLE `profile_details` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` char(10) DEFAULT NULL,
  `Bio` text,
  `BloodGroup` varchar(10) DEFAULT NULL,
  `Url` varchar(200) DEFAULT NULL,
  `Company` varchar(200) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_details`
--

INSERT INTO `profile_details` (`Id`, `Name`, `DOB`, `Email`, `Mobile`, `Bio`, `BloodGroup`, `Url`, `Company`, `Location`) VALUES
(1, 'Kundan Kumar', '1997-08-25', 'kun123658@gmail.com', '9955074864', '', 'O', '', 'BIT SINDRI', '');

-- --------------------------------------------------------

--
-- Table structure for table `secondary_docs`
--

CREATE TABLE `secondary_docs` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Marksheet` varchar(200) DEFAULT NULL,
  `AdmitCard` varchar(200) DEFAULT NULL,
  `Others` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondary_docs`
--

INSERT INTO `secondary_docs` (`Id`, `Email`, `Marksheet`, `AdmitCard`, `Others`) VALUES
(1, 'kun123658@gmail.com', '5b36629b943e43.37913992.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Skills` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`Id`, `Email`, `Skills`) VALUES
(1, 'kun123658@gmail.com', 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `undergrad_docs`
--

CREATE TABLE `undergrad_docs` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sem_one` varchar(200) DEFAULT NULL,
  `Sem_two` varchar(200) DEFAULT NULL,
  `Sem_three` varchar(200) DEFAULT NULL,
  `Sem_four` varchar(200) DEFAULT NULL,
  `Sem_five` varchar(200) DEFAULT NULL,
  `Sem_six` varchar(200) DEFAULT NULL,
  `Sem_seven` varchar(200) DEFAULT NULL,
  `Sem_eight` varchar(200) DEFAULT NULL,
  `Others` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undergrad_docs`
--

INSERT INTO `undergrad_docs` (`Id`, `Email`, `Sem_one`, `Sem_two`, `Sem_three`, `Sem_four`, `Sem_five`, `Sem_six`, `Sem_seven`, `Sem_eight`, `Others`) VALUES
(1, 'kun123658@gmail.com', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pword` char(40) NOT NULL,
  `ProfilePic` varchar(100) DEFAULT NULL,
  `RegisteredOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`Id`, `Name`, `Email`, `Pword`, `ProfilePic`, `RegisteredOn`) VALUES
(1, 'Kundan Kumar', 'kun123658@gmail.com', '2c3ffc4a06eadfc8e6f2d6a931310001070ffde8', 'c3e518564d09652e2f02459ea0e3c4e0-avtar.png', '2018-06-29 16:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ekalyan_docs`
--
ALTER TABLE `ekalyan_docs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `higher_secondary_docs`
--
ALTER TABLE `higher_secondary_docs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `internship_docs`
--
ALTER TABLE `internship_docs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profile_details`
--
ALTER TABLE `profile_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `secondary_docs`
--
ALTER TABLE `secondary_docs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `undergrad_docs`
--
ALTER TABLE `undergrad_docs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ekalyan_docs`
--
ALTER TABLE `ekalyan_docs`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `higher_secondary_docs`
--
ALTER TABLE `higher_secondary_docs`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `internship_docs`
--
ALTER TABLE `internship_docs`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile_details`
--
ALTER TABLE `profile_details`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `secondary_docs`
--
ALTER TABLE `secondary_docs`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `undergrad_docs`
--
ALTER TABLE `undergrad_docs`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
