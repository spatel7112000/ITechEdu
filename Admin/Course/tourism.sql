-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 09:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) UNSIGNED NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdateDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FullName`, `UserName`, `EmailID`, `Password`, `RegDate`, `UpdateDate`) VALUES
(46, 'sAcHiN pAtEl', 'admin', 'abc@abc.com', 'f925916e2754e5e03f75dd58a5733251', '2022-03-11 17:20:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advancepackages`
--

CREATE TABLE `advancepackages` (
  `ID` int(11) NOT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Dot` varchar(100) DEFAULT NULL,
  `Detail` varchar(100) DEFAULT NULL,
  `Duration` varchar(100) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advancepackages`
--

INSERT INTO `advancepackages` (`ID`, `Image`, `Price`, `Location`, `Dot`, `Detail`, `Duration`, `CreationDate`) VALUES
(10, 'top1.jpg', 40000, 'Paris, France', 'fvsgv', 'xvzv', '10', '2022-03-09 10:31:43'),
(11, 'top2.jpg', 25000, 'Madrid, Spain', 'xzvzxv', 'xvzv', '10', '2022-03-09 10:31:43'),
(12, 'top3.jpg', 40000, 'Statue Of Liberty, USA', 'xzvzx', 'Statue Of Liberty', '10', '2022-03-09 10:31:43'),
(13, 'top4.jpg', 20000, 'China', 'vzzx', 'xzvv', '10', '2022-03-09 10:31:43'),
(14, 'top5.jpg', 30000, 'Italy', 'vxzv', 'zxvv', '10', '2022-03-09 10:31:43'),
(15, 'top6.jpg', 35000, 'Antalya, Turkey', 'vxzvzx', 'xzvz', '10', '2022-03-09 10:31:43'),
(16, 'top7.jpg', 45000, 'Puebla, Mexico', 'vzzv', 'zvxvz', '10', '2022-03-09 10:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BID` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `UserID` varchar(200) DEFAULT NULL,
  `FDate` varchar(50) DEFAULT NULL,
  `TDate` varchar(50) DEFAULT NULL,
  `MobileNo` varchar(50) DEFAULT NULL,
  `EmailID` varchar(50) DEFAULT NULL,
  `Message` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(20) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BID`, `PID`, `UserID`, `FDate`, `TDate`, `MobileNo`, `EmailID`, `Message`, `RegDate`, `Status`, `CancelledBy`, `UpdationDate`) VALUES
(1, 1, 'abir@gmail.com', '2020-07-11', '2020-07-18', '845454644', 'abir@gmail.com', 'When I get conformation', '0000-00-00 00:00:00', 0, '[value]', '2022-03-11 18:51:11'),
(2, 2, 'abir@gmail.com', '2022-03-14', '2022-03-08', '7894532165', 'abir@gmail.com', 'When I get conformation', '0000-00-00 00:00:00', 0, '[value]', '2022-03-11 18:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(150) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `number`, `Subject`, `Message`, `Date`) VALUES
(1, '0', '0', 0, '0', '0', '2022-03-02 15:34:48'),
(2, '0', '0', 0, '0', '0', '2022-03-02 15:34:48'),
(3, 'sachin', 'sachin@sachin.sachin', 0, 'sachin', 'sachin', '2022-03-02 15:34:48'),
(4, 'sachin1', 'spatel71120000@gmail.com', 4325464, 'enquiry about the package', '50', '2022-03-02 15:34:48'),
(5, '', '', 0, '', '', '2022-03-02 15:34:48'),
(6, 'sachin', 'spatel71120000@gmail.com', 4325464, 'xdffhefbxcv', 'wqR', '2022-03-02 15:34:48'),
(7, 'sachin', 'spatel71120000@gmail.com', 4325464, 'enquiry about the package', 'ds', '2022-03-02 15:34:48'),
(8, 'sachin1', 'spatel71120000@gmail.com', 0, 'sfaf', 'fsdssd', '2022-03-02 15:34:48'),
(9, 'sachin1', 'spatel71120000@gmail.com', 0, 'sfaf', 'fsdssd', '2022-03-02 15:34:59'),
(10, 'sachin1', 'spatel71120000@gmail.com', 45757521475877, 'sfaf', 'fsdssd', '2022-03-02 15:35:37'),
(11, 'sachin1', 'name@name.name', 4325464, 'xdffhefbxcv', 'kljkh', '2022-03-03 07:23:17'),
(12, 'sachin1', 'name@name.name', 4325464, 'xdffhefbxcv', 'kljkh', '2022-03-03 07:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `TicketID` int(11) NOT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `EmailID` varchar(20) DEFAULT NULL,
  `MobileNo` bigint(10) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Message` varchar(100) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Action` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`TicketID`, `FullName`, `EmailID`, `MobileNo`, `Subject`, `Message`, `PostingDate`, `Action`) VALUES
(3, 'sachin', 'abc@abc.com', 0, 'sachin', 'sgd', '2022-03-02 15:54:22', NULL),
(4, 'sachin', 'abc@abc.com', 0, 'sachin', 'sgd', '2022-03-02 15:55:08', NULL),
(5, 'sachin', 'abc@abc.com', 0, 'xcz', 'xczc', '2022-03-02 16:41:46', NULL),
(10, 'Patel Sachin Sudhirbhai', 'spgabc@abc.com', 2147483647, 'bhfhtrj', 'Patel Sachin Sudhirbhai', '2022-03-09 12:21:47', NULL),
(11, 'Patel Sachin Sudhirbhai', 'spgabc@abc.com', 2147483647, 'bhfhtrj', 'Patel Sachin Sudhirbhai', '2022-03-09 12:23:52', NULL),
(12, 'Patel Sachin Sudhirbhai', 'spgabc@abc.com', 8158151921215, 'bhfhtrj', 'Patel Sachin Sudhirbhai', '2022-03-09 12:24:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `fullName`, `subject`, `email`, `number`, `description`) VALUES
(1, 'abc', 'abc', 'abc', 2364848543, 'abc'),
(28, 'patel sachin sudhirbhai', 'xdffhefbxcv', 'spatel71120000@gmail.com', 453464754754748, '845845'),
(29, 'patel sachin sudhirbhai', 'xdffhefbxcv', 'spatel71120000@gmail.com', 453464754754748, '845845'),
(30, '', '', '', 0, 'zz'),
(31, '', '', '', 0, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `tourpackage`
--

CREATE TABLE `tourpackage` (
  `PID` int(11) NOT NULL,
  `PName` varchar(200) DEFAULT NULL,
  `PType` varchar(150) DEFAULT NULL,
  `PLocation` varchar(100) DEFAULT NULL,
  `PPrice` varchar(100) DEFAULT NULL,
  `PFeatures` varchar(500) DEFAULT NULL,
  `Thumbnail` varchar(100) DEFAULT NULL,
  `PImage` varchar(100) DEFAULT NULL,
  `FDate` varchar(100) DEFAULT NULL,
  `TDate` varchar(100) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourpackage`
--

INSERT INTO `tourpackage` (`PID`, `PName`, `PType`, `PLocation`, `PPrice`, `PFeatures`, `Thumbnail`, `PImage`, `FDate`, `TDate`, `CreationDate`, `UpdationDate`) VALUES
(101, 'MALDIVES', 'Couple', 'Maldives', '1,77,903', 'Breakfast , Dinner', 'pexels-asad-photo-maldives-3601437.jpg', 'pexels-asad-photo-maldives-3601426.jpg', '2022-04-10', '2022-04-16', '2022-03-10 17:44:18', '2022-03-12 05:54:37'),
(103, 'USA', 'Family', 'Las Vegas • Los Angeles • San Francisco', '1,29,720', 'Breakfast , Dinner', 'usa.jpg', 'las-vegas.jpg', '2022-11-07', '2022-11-14', '2022-03-11 08:18:52', '2022-03-12 05:55:14'),
(104, 'Europe', 'Group', 'London • Paris • Amsterdam • Mannheim • Engelberg', '1,79,523', 'Breakfast , Dinner', 'europe.jpg', 'clocktower.jpg', '2022-11-22', '2022-11-28', '2022-03-11 08:20:14', '2022-03-12 05:55:29'),
(105, 'china', 'Couple', 'Yunnan • Tibet • Xiamen • Beijing • Shanghai', '1,79,523', 'Breakfast , Dinner', 'pexels-ruiyang-zhang-3204950.jpg', 'pexels-lian-rodriguez-2870116.jpg', '2022-03-18', '2022-03-25', '2022-03-11 08:21:41', '2022-03-12 05:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `EmailID` varchar(50) NOT NULL,
  `MobileNo` varchar(10) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Cpassword` varchar(50) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FullName`, `EmailID`, `MobileNo`, `Password`, `Cpassword`, `RegDate`, `UpdationDate`) VALUES
(6, 'sachin', 'admin@q.n', '4325464', '0', '0', '2022-02-02 11:52:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `advancepackages`
--
ALTER TABLE `advancepackages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tourpackage`
--
ALTER TABLE `tourpackage`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`,`EmailID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `advancepackages`
--
ALTER TABLE `advancepackages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tourpackage`
--
ALTER TABLE `tourpackage`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
