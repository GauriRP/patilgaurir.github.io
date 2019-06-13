-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 07:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`UserName`, `Password`) VALUES
('Kitcoek', 'tpc@kit');

-- --------------------------------------------------------

--
-- Table structure for table `educational`
--

CREATE TABLE `educational` (
  `ID` bigint(20) NOT NULL,
  `x_marks` float NOT NULL,
  `x_yop` int(11) NOT NULL,
  `x_school` text NOT NULL,
  `x_board` text NOT NULL,
  `dip_marks` float NOT NULL,
  `dip_yop` int(11) NOT NULL,
  `dip_clg` text NOT NULL,
  `dip_uni` text NOT NULL,
  `xii_marks` float NOT NULL,
  `xii_yop` int(11) NOT NULL,
  `xii_clg` text NOT NULL,
  `xii_board` text NOT NULL,
  `sem1_marks` float NOT NULL,
  `sem2_marks` float NOT NULL,
  `sem3_marks` float NOT NULL,
  `sem4_marks` float NOT NULL,
  `sem5_marks` float NOT NULL,
  `sem6_marks` float NOT NULL,
  `sem7_marks` float NOT NULL,
  `lkt` int(11) NOT NULL,
  `dkt` int(11) NOT NULL,
  `Aggregate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `ID` bigint(20) NOT NULL,
  `Prn` bigint(20) NOT NULL,
  `RNo` int(11) NOT NULL,
  `Aadhar` bigint(20) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mom` varchar(50) NOT NULL,
  `PhNo` bigint(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `ID` bigint(20) NOT NULL,
  `RegNo` bigint(20) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `year` int(11) NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`ID`, `RegNo`, `first_name`, `middle_name`, `last_name`, `email`, `year`, `department`) VALUES
(1, 2016012, 'Rutuja', 'Rajaram', 'Patil', 'patilrutuja369@gmail.com', 2017, 'CSE'),
(2, 2016013, 'Sheetal', 'Sudhakar', 'Nair', 'sheetalnair60@gmail.com', 2017, 'CSE'),
(3, 2016014, 'Aishwarya', 'Rajendra', 'Latake', 'arlatke1998@gmail.com', 2017, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `ID` bigint(20) NOT NULL,
  `RegNo` bigint(20) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `UserName` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`ID`, `RegNo`, `first_name`, `middle_name`, `last_name`, `email`, `UserName`, `Password`) VALUES
(1, 2016012, 'Rutuja', 'Rajaram', 'Patil', 'patilrutuja369@gmail.com', '2016012', 'oPyB2lcE'),
(2, 2016013, 'Sheetal', 'Sudhakar', 'Nair', 'sheetalnair60@gmail.com', '2016013', 'gAq2RhJQ'),
(3, 2016014, 'Aishwarya', 'Rajendra', 'Latake', 'arlatke1998@gmail.com', '2016014', 'Tq4u5viz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `educational`
--
ALTER TABLE `educational`
  ADD KEY `IDe` (`ID`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD KEY `IDper` (`ID`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `RegNo` (`RegNo`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD KEY `IDp` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educational`
--
ALTER TABLE `educational`
  ADD CONSTRAINT `IDe` FOREIGN KEY (`ID`) REFERENCES `studentinfo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `IDper` FOREIGN KEY (`ID`) REFERENCES `studentinfo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD CONSTRAINT `IDp` FOREIGN KEY (`ID`) REFERENCES `studentinfo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
