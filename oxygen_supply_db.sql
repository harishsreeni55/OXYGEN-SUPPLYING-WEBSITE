-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 01:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxygen_supply`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `USERNAME` varchar(45) NOT NULL,
  `FIRSTNAME` varchar(50) NOT NULL,
  `HISTORY` varchar(100) NOT NULL,
  `DATE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`USERNAME`, `FIRSTNAME`, `HISTORY`, `DATE`) VALUES
('_harish1402._', 'HARISH KARTHIKEYAN ', 'VERIFIED THE USER AND INSTALLED THE COMPONENTS', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added 1th cylinder', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added 2th pulse-oxymeter', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added Nasal cannulaeth cylinder', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added 2th cylinder', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added 3th pulse-oxymeter', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added Nasal cannulaeth cylinder', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'VERIFIED THE USER AND INSTALLED THE COMPONENTS', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'VERIFIED THE USER AND INSTALLED THE COMPONENTS', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 1th cylinder', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 1th pulse-oxymeter', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added Nasal cannulae MASK-KIT', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 2th cylinder', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 1th pulse-oxymeter', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added Nasal cannulae MASK-KIT', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'VERIFIED THE USER AND INSTALLED THE COMPONENTS', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 1th cylinder', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 1th pulse-oxymeter', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added Nasal cannulae MASK-KIT', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 2th cylinder', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added 1th pulse-oxymeter', '05-25-21'),
('marimuthu', 'MARIMUTHU', 'Added Nasal cannulae MASK-KIT', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added 3th cylinder', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added 3th pulse-oxymeter', '05-25-21'),
('_harish1402._', 'HARISH KARTHIKEYAN ', 'Added Nasal cannulae MASK-KIT', '05-25-21');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `FIRSTNAME` varchar(45) NOT NULL,
  `LASTNAME` varchar(45) NOT NULL,
  `AADHARNUMBER` varchar(12) NOT NULL,
  `DATEOFBIRTH` date NOT NULL,
  `FATHERNAME` varchar(45) NOT NULL,
  `MOTHERNAME` varchar(45) NOT NULL,
  `DISTRICT` varchar(45) NOT NULL,
  `TOWN` varchar(45) NOT NULL,
  `AREA` varchar(45) NOT NULL,
  `STREET` varchar(45) NOT NULL,
  `DOORNUMBER` varchar(20) NOT NULL,
  `ZIPCODE` varchar(45) NOT NULL,
  `LANDMARK` varchar(100) NOT NULL,
  `POPULATIONCATEGORY` varchar(45) NOT NULL,
  `PHONENUMBER` varchar(20) NOT NULL,
  `EMAILID` varchar(100) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`FIRSTNAME`, `LASTNAME`, `AADHARNUMBER`, `DATEOFBIRTH`, `FATHERNAME`, `MOTHERNAME`, `DISTRICT`, `TOWN`, `AREA`, `STREET`, `DOORNUMBER`, `ZIPCODE`, `LANDMARK`, `POPULATIONCATEGORY`, `PHONENUMBER`, `EMAILID`, `USERNAME`, `PASSWORD`) VALUES
('HARISH KARTHIKEYAN ', 'MARIMUTHU', '986599575222', '2003-02-14', 'MARIMUTHU', 'KAVITHA', 'Dharmapuri', 'SOMANUR', 'KRISHNAPURAM', 'BRINDHAVANGARDERNS', '12/176-B SRI SARVAHA', '641668', 'EAST KOVIL', 'RURAL', '9940791217', 'harishkarthikeyan@student.tce.edu', '_harish1402._', '1234'),
('xxxx', 'xxxxx', 'xxxx', '2021-05-11', 'xxxx', 'xxxxx', 'xxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxx', '54', '64512', '', '', '', '', 'ADMIN', '123'),
('MARIMUTHU', 'BALASUBRAMANIUM', '98561521562', '1975-05-21', 'BALASUBRAMANIUM', 'RAJESHWARI', 'Ariyalur', 'SOMANUR', 'KRISHNAPURAM', 'SENTHIL NAGAR', '91G', '641668', '', 'RURAL', '9842222915', 'marimuthu@gmail.com', 'marimuthu', '1234'),
('JEYAPRASATH', 'XXX', '965465', '2003-12-25', 'DSDFSA', 'DGADFG', 'Madurai', 'DSAFA', 'GDFSG', 'FDS', 'DCV', '477896', 'SDFA', 'RURAL', '9940791214', 'jeyaprasanth@gmail.com', 'baithangulli', '123');

-- --------------------------------------------------------

--
-- Table structure for table `srf`
--

CREATE TABLE `srf` (
  `USERNAME` varchar(60) NOT NULL,
  `diabeticIssues` varchar(6) NOT NULL,
  `bloodPressure` varchar(6) NOT NULL,
  `respiratoryIssues` varchar(6) NOT NULL,
  `AADHARNUMBER` varchar(12) NOT NULL,
  `SRFNUMBER` varchar(20) NOT NULL,
  `STATUS` varchar(45) NOT NULL DEFAULT 'PENDING',
  `ADDRESS` varchar(100) NOT NULL,
  `LANDMARK` varchar(100) NOT NULL DEFAULT 'NOT GIVEN',
  `PHONENUMBER` varchar(10) NOT NULL,
  `numberOfCylinders` int(50) NOT NULL DEFAULT 0,
  `MASK` int(100) NOT NULL DEFAULT 0,
  `PULSE` int(50) NOT NULL DEFAULT 0,
  `PREVIOUSDATE` varchar(45) NOT NULL,
  `FIRSTNAME` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srf`
--

INSERT INTO `srf` (`USERNAME`, `diabeticIssues`, `bloodPressure`, `respiratoryIssues`, `AADHARNUMBER`, `SRFNUMBER`, `STATUS`, `ADDRESS`, `LANDMARK`, `PHONENUMBER`, `numberOfCylinders`, `MASK`, `PULSE`, `PREVIOUSDATE`, `FIRSTNAME`) VALUES
('_harish1402._', 'Yes', 'Yes', 'Yes', '2147483647', '45212', 'VERIFIED', '12/176-B SRI SARVAHA,BRINDHAVANGARDERNS,KRISHNAPURAM', 'EAST KOVIL', '9940791217', 3, 0, 3, '05-25-21', 'HARISH KARTHIKEYAN ');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`) VALUES
('xfb'),
('Yes'),
('');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `srf`
--
ALTER TABLE `srf`
  ADD PRIMARY KEY (`AADHARNUMBER`),
  ADD UNIQUE KEY `SRFNUMBER` (`SRFNUMBER`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
