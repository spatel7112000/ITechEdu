-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 07:35 AM
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
-- Database: `itechedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminID` varchar(100) DEFAULT NULL,
  `EmailID` varchar(255) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Admin` varchar(255) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminID`, `EmailID`, `Password`, `Admin`, `RegDate`, `updationDate`) VALUES
(4, 'sAcHiNpAtEl', 'sp@123.com', '$2y$10$95boiFz6YENUeMpC1MSlHOndspkt/phHISi6TCvW0dcxgfri51llW', NULL, '2022-04-02 15:50:09', NULL),
(8, 'sAcHiNpAtEl', 'spAtEl@gmail.com', '$2y$10$wptD45A.HqPBPInmFRM2d.rxRLSbnegQCKx.OZ6gXQ7sxb3mNrWCO', 'admin.jpg', '2022-04-02 15:50:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `No` int(11) NOT NULL,
  `BName` varchar(255) DEFAULT NULL,
  `AName` varchar(255) DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `Thumb` varchar(255) DEFAULT NULL,
  `Content` longtext NOT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`No`, `BName`, `AName`, `Author`, `Thumb`, `Content`, `Date`) VALUES
(1, 'Write as a Professional Author1', 'Isabella ava', 'admin.jpg', 'ab8.jpg', '<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</div>\r\n\r\n<p><samp><img alt=\"\" src=\"/ckfinder/userfiles/files/ab5.jpg\" style=\"height:426px; width:640px\" /></samp>Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</p>\r\n', '2022-03-28 17:05:41'),
(2, 'Features Of a Successful App', 'sAcHiN pAtEl', '404.png', 'ab3.jpg', '', '2022-04-01 07:01:04'),
(3, 'a Successful Software Engineer', 'sAcHiN pAtEl', '404.png', 'ab5.jpg', '<p>Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-01 07:31:20'),
(4, 'Software Developer vs Software Engineer', 'sAcHiN pAtEl', '1.png', 'ab7.jpg', '<p>Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</p>\r\n\r\n<p><samp><img alt=\"\" src=\"/ckfinder/userfiles/files/ab5.jpg\" /></samp>Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</p>\r\n\r\n<p>&quot;&gt;</p>\r\n', '2022-04-01 07:33:10'),
(5, 'Features Of a Successful App', 'sAcHiN pAtEl', '404.png', 'ab4.jpg', '<p>Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/ab4.jpg\" style=\"border-style:solid; border-width:5px; float:left; height:426px; width:640px\" />Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/ab4.jpg\" style=\"border-style:solid; border-width:5px; float:right; height:426px; width:640px\" />Features Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful AppFeatures Of a Successful App</p>\r\n', '2022-04-02 04:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `No` int(11) NOT NULL,
  `Course` varchar(255) DEFAULT NULL,
  `Topic` varchar(255) DEFAULT NULL,
  `Lesson` varchar(255) DEFAULT NULL,
  `Thumb` varchar(255) DEFAULT NULL,
  `DLink` varchar(255) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`No`, `Course`, `Topic`, `Lesson`, `Thumb`, `DLink`, `Date`) VALUES
(22, 'BLOCKCHAIN TECHNOLOGY', 'BITCOIN', 'HOW TO MINE A BITCOIN?', 'ab3.jpg', 'Industrial Project report abhijeet 1 (1).docx', '2022-03-30 17:29:24'),
(24, 'PHP TUTORIAL', 'MYSQL', 'HOW TO CONNECT A DATABASE?', 'ab1.jpg', '__ Online Job Application System __.pdf', '2022-03-30 17:29:24'),
(25, 'HTML/ CSS', 'FORM WITH DESIGN', 'FORMAT TO DESIGN', 'ab8.jpg', 'banner2.jpg', '2022-03-30 17:29:24'),
(26, 'PYTHON TUTORIAL', ' TUPLE', 'HOW TO WORK', 'ab1.jpg', 'OJASApplicationForm (1).pdf', '2022-03-30 17:29:24'),
(27, 'Pharmacy App', '7 Core Features ', 'User Profile', '123.png', '123.pdf', '2022-04-01 07:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `ID` int(11) NOT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `EmailID` varchar(100) DEFAULT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`ID`, `FName`, `EmailID`, `Mobile`, `Subject`, `Message`, `PostingDate`, `Status`) VALUES
(8, 'sachin', 'spAtEl@gmail.com', '', 'About New Course', 'About New CourseAbout New Course', '2022-04-02 17:03:22', NULL),
(9, 'sachin patel', 'spAtEl@123.com', '8989454523', 'Additional information About Course', 'Start working with Us that can provide everything you need to generate awareness, drive traffic, connect.\r\nWe guarantee that you’ll be able to have any issue resolved within 24 hours.', '2022-04-02 17:08:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `Content` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `Content`) VALUES
(3, 'Insert BlogInsert Blog', '<h3>Insert&nbsp;BlogInsert&nbsp;BlogInsert&nbsp;BlogInsert&nbsp;BlogInsert&nbsp;BlogInsert&nbsp;BlogInsert&nbsp;BlogInsert&nbsp;Blog</h3>\r\n'),
(7, '', '<p><strong>Welcome to Tourism Management System!!!</strong></p>\r\n\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">Since then, our courteous and <s>committed</s> team members have always ensured a pleasant and enjoyable tour for the clients. This arduous effort has enabled Shreya Tour &amp; Travels to be recognized as a dependable Travel Solutions provider with three offices Delhi.&nbsp;We have got packages to suit the discerning traveler&#39;s budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on from holidays packages and customize them according to your plan.<img alt=\"\" src=\"/ckfinder/userfiles/files/admin.jpg\" style=\"border-style:solid; border-width:5px; float:right; height:240px; margin:25px; width:240px\" /></div>\r\n'),
(10, '', '<p>Welcome to Tourism Management System!!!</p>\r\n\r\n<p>Since then, our courteous and committed team members have always ensured a pleasant and enjoyable tour for the clients. This arduous effort has enabled Shreya Tour &amp; Travels to be recognized as a dependable Travel Solutions provider with three offices Delhi.&nbsp;We have got packages to suit the discerning traveler&#39;s budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on from holidays packages and customize them according to your plan.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UID` int(11) NOT NULL,
  `UserID` varchar(255) DEFAULT NULL,
  `EmailID` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UID`, `UserID`, `EmailID`, `Password`, `RegDate`, `UpdationDate`) VALUES
(1, 'sAcHiN711', '123@abc.com', '$2y$10$qGEfPGTv.k6wFD./FTrEae9t3SHu8idgNmNXMNvNKsbFd5DTnMXBu', '2022-03-29 16:30:13', NULL),
(3, 'sAcHiNpAtEl', 'sp@123.com', '$2y$10$p728..al/cW7A5Mlwh4Ga.ytS1vCF4zMV83cEUo469k450a1DlKHm', '2022-04-02 14:01:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblblog`
--
ALTER TABLE `tblblog`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
