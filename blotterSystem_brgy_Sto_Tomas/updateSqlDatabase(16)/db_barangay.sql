-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 02:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `compgen` text NOT NULL,
  `paddress` text NOT NULL,
  `headchief` varchar(255) NOT NULL,
  `complaint` text NOT NULL,
  `respgen` text NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL,
  `residentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id`, `yearRecorded`, `dateRecorded`, `complainant`, `cage`, `caddress`, `ccontact`, `personToComplain`, `compgen`, `paddress`, `headchief`, `complaint`, `respgen`, `sStatus`, `locationOfIncidence`, `recordedby`, `time`, `status`, `residentid`) VALUES
(54, '2022', '2022-08-14', 'mejia,chienlo,joseph', 43, 'blk37 lot 62 calauan laguna', 542352523, 'arren', '', 'blk 38 lot 63', 'Ms Cherry', 'sgsdgsd', 'Male', 'Criminal', 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 'admin@gmail.com', '07:56:14', 'Approved', 0),
(55, '2022', '2022-08-23', 'rex', 43, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 51325423, 'John Ivan Salvador', '', 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 'ferbhie', 'gsdgsdg', 'Male', 'Criminal', 'hgsdhsdhs', 'admin@gmail.com', '16:09:16', 'Approved', 0),
(56, '2022', '2022-08-23', 'mejia,chienlo,joseph', 543, 'blk37 lot 62 calauan laguna', 423523, 'John Ivan Salvador', '', 'gg', 'Ms Cherry', 'juygfjgf', 'Male', 'Civil', 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 'admin@gmail.com', '16:42:27', 'Approved', 0),
(58, '2022', '2022-08-29', 'rex', 32, 'blk37 lot 62 calauan laguna', 53252, 'arren', '', 'blk 38 lot 63', 'Ms Cherry', 'fsafsaf', 'Male', 'Civil', 'Brgy Sto Tomas Calauan laguna', 'gg@gmail.com', '03:35:22', 'Approved', 3),
(59, '2022', '2022-08-29', 'ivan', 32, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 4321523, 'gilles', '', 'blk 38 lot 63', 'chienlo', 'sagfsaf', 'Male', 'Civil', 'yi8tr9789t08t', 'gg@gmail.com', '03:38:36', 'Approved', 3),
(60, '2022', '2022-09-26', 'chienlo', 43, 'gsdg', 432, 'gsd', '', 'gds', 'fsa', 'gds', 'Male', 'Civil', 'gsdgsdg', 'blotter@gmail.com', '22:58:36', 'Approved', 0),
(61, '2022', '2022-09-26', 'gfsdg', 43, 'gsd', 423423, 'gds', '', 'gsd', 'rex umagap', 'gsdgsd', 'Male', 'Civil', 'gfsagfsa', 'blotter@gmail.com', '23:01:21', 'Approved', 0),
(62, '2022', '2022-09-26', 'ivan', 43, 'gsdgs', 2147483647, 'gsd', '', 'gsdg', 'rex umagap', 'gsdg', 'Male', 'Civil', 'gsdgsdg', 'blotter@gmail.com', '23:03:11', 'Approved', 0),
(63, '2022', '2022-09-26', 'rex', 43, '432', 2147483647, 'gsdgsd', '', 'gdsgd', 'ediwow', 'hfdhfd', 'Male', 'Civil', 'gsdgsdg', 'blotter@gmail.com', '23:04:13', 'Approved', 0),
(64, '2022', '2022-09-26', 'ferbhie', 43, 'ghsdh', 432, 'ghsdhd', '', 'ghsd', 'ediwow', 'fsdgfsdgd', 'Male', 'Criminal', 'gsdgsdg', 'blotter@gmail.com', '23:43:21', 'Approved', 0),
(65, '2022', '2022-09-26', 'markabanto', 43, '123', 53, 'ghsdhd', '', 'ghsd', '543', 'gsdgsd', 'Male', 'Criminal', '432432', 'blotter@gmail.com', '23:45:56', 'Approved', 0),
(66, '2022', '2022-09-26', 'chienlo', 43, 'gsdg', 4213421, 'gsd', '', 'ghsd', 'ediwow', 'rswgtsdggsd', 'Male', 'Civil', 'gfsagfsa', 'admin@gmail.com', '23:48:55', 'Approved', 0),
(67, '2022', '2022-09-26', 'gg', 342, 'rfsa', 32, 'fsa', '', 'fsa', 'rex umagap', 'fsa', 'Male', 'Civil', 'gfsagfsa', 'blotter@gmail.com', '23:51:38', 'Approved', 0),
(68, '2022', '2022-09-26', 'chienlo', 43, 'ghsdh', 421421, 'ghsdhd', '', 'ghsd', 'ediwow', 'gtfsa', 'Male', 'Civil', 'gsdgsdg', 'blotter@gmail.com', '23:52:33', 'Approved', 0),
(69, '2022', '2022-09-26', 'john ivan salvador', 43, 'gsdg', 43235325, 'gsd', '', 'gsd', 'ediwow', 'gsdg', 'Male', 'Civil', 'gsdgsdg', 'blotter@gmail.com', '23:55:40', 'Approved', 0),
(70, '2022', '2022-09-26', 'filler', 43, 'ghsdh', 2147483647, 'fsda', '', 'gsad', 'ediwow', 'gds', 'Male', 'Civil', 'gfsagfsa', 'blotter@gmail.com', '03:31:25', 'Approved', 0),
(71, '2022', '2022-09-27', 'chienlo', 43, 'hfd', 532532, 'hsdf', '', 'ghsd', 'rex umagap', 'hfsd', 'Male', 'Civil', 'gsdgsdg', 'blotter@gmail.com', '16:31:07', 'Approved', 0),
(72, '2022', '2022-09-27', 'gsd', 43, 'gsd', 431541, 'ghsd', '', 'ghsd', 'gds', 'sdh', 'Male', 'Civil', 'hsd', '1@gmail.com', '16:49:26', 'Approved', 3),
(73, '2022', '2022-09-27', 'chienlo', 43, 'gds', 2147483647, 'gsd', 'Male', 'gsd', 'ediwow', 'gsdg', 'Male', 'Others', 'gsdgsdg', '1@gmail.com', '16:51:09', 'Approved', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblblotterofficer`
--

CREATE TABLE `tblblotterofficer` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblblotterofficer`
--

INSERT INTO `tblblotterofficer` (`id`, `lname`, `fname`, `mname`, `bdate`, `age`, `gender`, `image`, `username`, `password`) VALUES
(1, 'rex', 'gdsg', 'gdsg', '2022-09-10', 0, 'Male', '1664184267005_axie.jpg', 'blotter@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `residentid`, `findings`, `purpose`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(1, 4325, 0, '', 'yayabanagan kolang truepa ko ', 423, 2354235, '2022-08-05', 'admin@gmail.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(1, 'Administrator', '2021-10-21 16:27:24', 'Added Resident named Suares, Jude Reyes'),
(2, 'Administrator', '2021-10-22 12:16:56', 'Update Resident named Suares, Jude Reyes'),
(3, 'Administrator', '2022-06-02 00:58:15', 'Added file Blotter Request by '),
(4, 'Administrator', '2022-06-02 00:58:48', 'Added file Blotter Request by wew'),
(5, 'Administrator', '2022-06-02 01:08:34', 'Added file Blotter Request by Suares, Jude Reyes'),
(6, 'Administrator', '2022-06-02 01:10:27', 'Added file Blotter Request by mark tahimik lang'),
(7, 'Administrator', '2022-06-02 01:13:07', 'Added file Blotter Request by '),
(8, 'Administrator', '2022-06-02 01:13:30', 'Added file Blotter Request by edi wow'),
(9, 'Administrator', '2022-06-02 01:14:15', 'Update File Blotter Request by edi wow'),
(10, 'Administrator', '2022-06-02 01:14:35', 'Added file Blotter Request by chienlo'),
(11, 'Administrator', '2022-06-02 01:25:39', 'Update File Blotter Request by Suares, Jude Reyes'),
(12, 'Administrator', '2022-06-02 02:07:43', 'Added file Blotter Request by rex'),
(13, 'Administrator', '2022-06-02 02:13:52', 'Added file Blotter Request by filler'),
(14, 'Administrator', '2022-06-02 02:16:46', 'Added file Blotter Request by mark'),
(15, 'Administrator', '2022-06-02 02:20:46', 'Update File Blotter Request by mark'),
(16, 'Administrator', '2022-06-02 02:28:23', 'Added file Blotter Request by chienlo'),
(17, 'Administrator', '2022-06-02 02:35:17', 'Added file Blotter Request by edi wow'),
(18, 'Administrator', '2022-06-02 02:37:01', 'Update File Blotter Request by edi wow'),
(19, 'Administrator', '2022-06-02 02:37:07', 'Update File Blotter Request by edi wow'),
(20, 'Administrator', '2022-06-02 02:38:53', 'Added file Blotter Request by arren'),
(21, 'Administrator', '2022-06-02 02:41:24', 'Update File Blotter Request by chienlo'),
(22, 'Administrator', '2022-06-02 02:41:44', 'Added file Blotter Request by alex'),
(23, 'Administrator', '2022-06-02 02:41:52', 'Update File Blotter Request by alex'),
(24, 'Administrator', '2022-06-02 02:41:57', 'Update File Blotter Request by alex'),
(25, 'Administrator', '2022-06-02 02:42:08', 'Update File Blotter Request by alex'),
(26, 'Administrator', '2022-06-02 02:46:08', 'Added file Blotter Request by wew'),
(27, 'Administrator', '2022-06-02 02:46:14', 'Update File Blotter Request by wew'),
(28, 'Administrator', '2022-06-02 02:46:27', 'Update File Blotter Request by wew'),
(29, 'Administrator', '2022-06-02 02:47:45', 'Update File Blotter Request by wew'),
(30, 'Administrator', '2022-06-02 02:47:50', 'Update File Blotter Request by wew'),
(31, 'Administrator', '2022-06-02 02:47:54', 'Update File Blotter Request by wew'),
(32, 'Administrator', '2022-06-02 02:50:33', 'Update File Blotter Request by wew'),
(33, 'Administrator', '2022-06-02 02:50:41', 'Update File Blotter Request by rex'),
(34, 'Administrator', '2022-06-02 02:50:45', 'Update File Blotter Request by rex'),
(35, 'Administrator', '2022-06-02 02:53:26', 'Added file Blotter Request by '),
(36, 'Administrator', '2022-06-02 02:53:32', 'Update File Blotter Request by '),
(37, 'Administrator', '2022-06-02 02:53:36', 'Update File Blotter Request by '),
(38, 'Administrator', '2022-06-02 02:54:39', 'Update File Blotter Request by '),
(39, 'Administrator', '2022-06-02 02:55:54', 'Update File Blotter Request by '),
(40, 'Administrator', '2022-06-02 02:55:59', 'Update File Blotter Request by '),
(41, 'Administrator', '2022-06-02 02:57:45', 'Update File Blotter Request by '),
(42, 'Administrator', '2022-06-02 02:58:26', 'Added file Blotter Request by '),
(43, 'Administrator', '2022-06-02 03:00:41', 'Update File Blotter Request by '),
(44, 'Administrator', '2022-06-02 03:00:51', 'Added file Blotter Request by '),
(45, 'Administrator', '2022-06-02 03:01:45', 'Added file Blotter Request by '),
(46, 'Administrator', '2022-06-02 03:01:56', 'Update File Blotter Request by '),
(47, 'Administrator', '2022-06-02 03:07:47', 'Added file Blotter Request by '),
(48, 'Administrator', '2022-06-02 03:07:53', 'Update File Blotter Request by '),
(49, 'Administrator', '2022-06-02 03:08:00', 'Update File Blotter Request by '),
(50, 'Administrator', '2022-06-02 03:15:18', 'Update File Blotter Request by rex'),
(51, 'Administrator', '2022-06-02 03:15:27', 'Update File Blotter Request by rex'),
(52, 'Administrator', '2022-06-02 03:15:33', 'Update File Blotter Request by '),
(53, 'Administrator', '2022-06-02 03:15:42', 'Update File Blotter Request by '),
(54, 'Administrator', '2022-06-02 03:15:58', 'Update File Blotter Request by chienlo'),
(55, 'Administrator', '2022-06-02 03:16:19', 'Update File Blotter Request by chienlo'),
(56, 'Administrator', '2022-06-02 03:16:26', 'Update File Blotter Request by chienlo'),
(57, 'Administrator', '2022-06-02 03:17:33', 'Update File Blotter Request by rex'),
(58, 'Administrator', '2022-06-02 03:18:57', 'Added file Blotter Request by wew'),
(59, 'Administrator', '2022-06-02 03:20:14', 'Added file Blotter Request by wew'),
(60, 'Administrator', '2022-06-02 03:21:58', 'Added file Blotter Request by edi wow'),
(61, 'Administrator', '2022-06-02 03:23:25', 'Added file Blotter Request by wew'),
(62, 'Administrator', '2022-06-02 03:30:01', 'Added file Blotter Request by edi wow'),
(63, 'Administrator', '2022-06-02 03:30:11', 'Added file Blotter Request by mejia,chienlo,joseph'),
(64, 'Administrator', '2022-06-02 03:31:00', 'Added file Blotter Request by edi wow'),
(65, 'Administrator', '2022-06-02 03:33:19', 'Added file Blotter Request by '),
(66, 'Administrator', '2022-06-02 03:33:25', 'Update File Blotter Request by '),
(67, 'Administrator', '2022-06-02 03:36:33', 'Added file Blotter Request by gg'),
(68, 'Administrator', '2022-06-02 03:37:43', 'Update File Blotter Request by wew'),
(69, 'Administrator', '2022-06-02 03:37:53', 'Update File Blotter Request by ediwow'),
(70, 'Administrator', '2022-06-02 03:38:02', 'Added file Blotter Request by chienlo'),
(71, 'Administrator', '2022-06-02 03:43:13', 'Update File Blotter Request by wew'),
(72, 'Administrator', '2022-06-02 03:43:20', 'Update File Blotter Request by wew'),
(73, 'Jude', '2022-06-02 03:56:09', 'Added file Blotter Request by arren'),
(74, 'Administrator', '2022-06-02 04:02:30', 'Added Staff with name of chienlo'),
(75, 'Administrator', '2022-06-02 04:04:50', 'Update Staff with name of chienlo'),
(76, 'Administrator', '2022-06-02 11:44:44', 'Update File Blotter Request by wew'),
(77, 'Administrator', '2022-06-02 11:45:00', 'Update File Blotter Request by edi wow'),
(78, 'Administrator', '2022-06-02 11:45:05', 'Update File Blotter Request by wew'),
(79, 'Administrator', '2022-06-02 11:45:09', 'Update File Blotter Request by edi wow'),
(80, 'Administrator', '2022-06-02 11:45:14', 'Update File Blotter Request by mejia,chienlo,joseph'),
(81, 'Administrator', '2022-06-02 11:45:19', 'Update File Blotter Request by edi wow'),
(82, 'Administrator', '2022-06-02 11:45:24', 'Update File Blotter Request by '),
(83, 'Administrator', '2022-06-02 11:45:29', 'Update File Blotter Request by ediwow'),
(84, 'Administrator', '2022-06-02 11:45:35', 'Update File Blotter Request by chienlo'),
(85, 'Administrator', '2022-06-02 11:45:40', 'Update File Blotter Request by arren'),
(86, 'Administrator', '2022-06-07 05:12:37', 'Added Permit with business name of '),
(87, 'Administrator', '2022-06-07 05:56:49', 'Update Permit with business name of chienlowew'),
(88, 'Administrator', '2022-06-07 05:56:56', 'Update Permit with business name of chienlowew'),
(89, 'Administrator', '2022-06-07 05:57:02', 'Update Permit with business name of chienlowew'),
(90, 'Administrator', '2022-06-07 07:19:05', 'Added Resident named chienlo, rew joseph'),
(91, 'Administrator', '2022-06-07 07:27:28', 'Added Resident named rex, rew rew'),
(92, 'Administrator', '2022-06-07 07:27:43', 'Update Resident named rex, rew rew'),
(93, 'Administrator', '2022-06-07 08:40:09', 'Added file Blotter Request by ivan'),
(94, 'Administrator', '2022-06-07 08:40:51', 'Added file Blotter Request by ivan'),
(95, 'Administrator', '2022-06-07 08:41:59', 'Added file Blotter Request by ivan'),
(96, 'Administrator', '2022-06-07 08:43:26', 'Update File Blotter Request by '),
(97, 'Administrator', '2022-06-07 08:43:49', 'Update File Blotter Request by '),
(98, 'Administrator', '2022-06-07 08:45:20', 'Update File Blotter Request by '),
(99, 'Administrator', '2022-06-07 08:47:16', 'Update File Blotter Request by chienlo'),
(100, 'Administrator', '2022-06-07 08:47:24', 'Update File Blotter Request by ediwow'),
(101, 'Administrator', '2022-06-07 08:47:31', 'Update File Blotter Request by ivan'),
(102, 'Administrator', '2022-06-07 08:47:37', 'Update File Blotter Request by ivan'),
(103, 'Administrator', '2022-06-07 08:47:43', 'Update File Blotter Request by ivan'),
(104, 'Administrator', '2022-06-07 09:25:57', 'Update File Blotter Request by rex'),
(105, 'Administrator', '2022-06-07 09:26:02', 'Update File Blotter Request by rex'),
(106, 'Administrator', '2022-06-07 09:26:06', 'Update File Blotter Request by ediwow'),
(107, 'Administrator', '2022-06-07 09:41:03', 'Update File Blotter Request by rex umagap'),
(108, 'Administrator', '2022-07-31 05:23:29', 'Added file Blotter Request by wew'),
(109, 'Administrator', '2022-07-31 05:25:50', 'Added file Blotter Request by wew'),
(110, 'Administrator', '2022-07-31 05:27:13', 'Added file Blotter Request by wew'),
(111, 'Administrator', '2022-07-31 05:28:57', 'Added file Blotter Request by gg'),
(112, 'Administrator', '2022-07-31 05:30:44', 'Added file Blotter Request by chienlo'),
(113, 'Administrator', '2022-08-05 07:33:11', 'Added Clearance with clearance number of 4325'),
(114, 'Administrator', '2022-08-05 07:42:45', 'Added Resident named mejia, rew gg'),
(115, 'Administrator', '2022-08-06 04:19:56', 'Update File Blotter Request by edi wow'),
(116, 'Administrator', '2022-08-06 05:13:41', 'Update File Blotter Request by edi wow'),
(117, 'Administrator', '2022-08-06 05:14:05', 'Update File Blotter Request by ferbhie'),
(118, 'Administrator', '2022-08-07 06:18:39', 'Update File Blotter Request by edi wow'),
(119, 'Administrator', '2022-08-07 06:57:07', 'Added file Blotter Request by '),
(120, 'Administrator', '2022-08-07 07:02:04', 'Added file Blotter Request by '),
(121, 'Administrator', '2022-08-07 07:02:26', 'Added file Blotter Request by '),
(122, 'Administrator', '2022-08-07 07:04:27', 'Added file Blotter Request by '),
(123, 'Administrator', '2022-08-07 07:12:32', 'Added file Blotter Request by uogigh'),
(124, 'Administrator', '2022-08-07 07:48:20', 'Added file Blotter Request by '),
(125, 'Administrator', '2022-08-07 07:55:44', 'Added file Blotter Request by '),
(126, 'Administrator', '2022-08-07 08:52:57', 'Added file Blotter Request by '),
(127, 'Administrator', '2022-08-07 08:53:18', 'Added file Blotter Request by '),
(128, 'Administrator', '2022-08-12 04:32:12', 'Added file Blotter Request by '),
(129, 'Administrator', '2022-08-13 06:27:31', 'Added file Blotter Request by '),
(130, 'Administrator', '2022-08-13 06:55:25', 'Added file Blotter Request by '),
(131, 'Administrator', '2022-08-13 06:56:36', 'Added file Blotter Request by '),
(132, 'Administrator', '2022-08-13 07:07:12', 'Added file Blotter Request by '),
(133, 'Administrator', '2022-08-13 07:19:42', 'Added file Blotter Request by '),
(134, 'Administrator', '2022-08-13 07:20:34', 'Added file Blotter Request by rewtwe'),
(135, 'Administrator', '2022-08-13 07:22:07', 'Added file Blotter Request by '),
(136, 'Administrator', '2022-08-13 07:24:07', 'Added file Blotter Request by '),
(137, 'Administrator', '2022-08-13 07:24:25', 'Added file Blotter Request by '),
(138, 'Administrator', '2022-08-13 07:30:43', 'Added file Blotter Request by edi e'),
(139, 'Administrator', '2022-08-13 07:32:29', 'Added file Blotter Request by edi e'),
(140, 'Administrator', '2022-08-13 07:32:53', 'Added file Blotter Request by mejia,chienlo,joseph'),
(141, 'Administrator', '2022-08-13 07:51:19', 'Added file Blotter Request by rex umagap'),
(142, 'Administrator', '2022-08-13 07:51:28', 'Added file Blotter Request by rex umagap'),
(143, 'Administrator', '2022-08-13 09:26:04', 'Added file Blotter Request by '),
(144, 'Administrator', '2022-08-13 09:26:39', 'Added file Blotter Request by '),
(145, 'Administrator', '2022-08-13 10:31:58', 'Added file Blotter Request by mejia,chienlo,joseph'),
(146, 'Administrator', '2022-08-13 10:32:34', 'Added file Blotter Request by mejia,chienlo,joseph'),
(147, 'Administrator', '2022-08-13 10:46:25', 'Added file Blotter Request by mejia,chienlo,joseph'),
(148, 'Administrator', '2022-08-14 07:07:22', 'Added file Blotter Request by edi wow'),
(149, 'Administrator', '2022-08-14 07:16:16', 'Added file Blotter Request by mejia,chienlo,joseph'),
(150, 'Administrator', '2022-08-14 07:23:57', 'Added file Blotter Request by '),
(151, 'Administrator', '2022-08-14 07:31:07', 'Added file Blotter Request by gg'),
(152, 'Administrator', '2022-08-14 07:32:03', 'Added file Blotter Request by edi wow'),
(153, 'Administrator', '2022-08-14 07:34:08', 'Added file Blotter Request by edi wow'),
(154, 'Administrator', '2022-08-14 07:35:38', 'Added file Blotter Request by edi wow'),
(155, 'Administrator', '2022-08-14 07:38:55', 'Added file Blotter Request by mejia,chienlo,joseph'),
(156, 'Administrator', '2022-08-14 07:40:19', 'Added file Blotter Request by mejia,chienlo,joseph'),
(157, 'Administrator', '2022-08-14 07:43:48', 'Added file Blotter Request by mejia,chienlo,joseph'),
(158, 'Administrator', '2022-08-14 07:50:44', 'Added file Blotter Request by gg'),
(159, 'Administrator', '2022-08-14 07:56:14', 'Added file Blotter Request by mejia,chienlo,joseph'),
(160, 'Administrator', '2022-08-14 07:56:43', 'Added file Blotter Request by mejia,chienlo,joseph'),
(161, 'Administrator', '2022-08-14 07:59:31', 'Added file Blotter Request by mejia,chienlo,joseph'),
(162, 'Administrator', '2022-08-14 08:06:36', 'Added file Blotter Request by mejia,chienlo,joseph'),
(163, 'Administrator', '2022-08-15 14:08:04', 'Added file Blotter Request by mejia,chienlo,joseph'),
(164, 'Administrator', '2022-08-15 14:08:52', 'Added file Blotter Request by mejia,chienlo,joseph'),
(165, 'Administrator', '2022-08-16 10:11:28', 'Added file Blotter Request by mejia,chienlo,joseph'),
(166, 'Administrator', '2022-08-16 10:12:19', 'Added file Blotter Request by mejia,chienlo,joseph'),
(167, 'Administrator', '2022-08-16 10:13:23', 'Added file Blotter Request by mejia,chienlo,joseph'),
(168, 'Administrator', '2022-08-16 10:14:22', 'Added file Blotter Request by mejia,chienlo,joseph'),
(169, 'Administrator', '2022-08-16 10:15:20', 'Added file Blotter Request by mejia,chienlo,joseph'),
(170, 'Administrator', '2022-08-21 06:17:33', 'Update summon Blotter Request by mejia,chienlo,joseph'),
(171, 'Administrator', '2022-08-21 06:17:37', 'Update summon Blotter Request by mejia,chienlo,joseph'),
(172, 'Administrator', '2022-08-23 01:30:22', 'Added file Blotter Request by mejia,chienlo,joseph'),
(173, 'Administrator', '2022-08-23 14:23:55', 'Added file Blotter Request by mejia,chienlo,joseph'),
(174, 'Administrator', '2022-08-23 14:52:07', 'Added file Blotter Request by mejia,chienlo,joseph'),
(175, 'Administrator', '2022-08-23 16:09:16', 'Added file Blotter Request by rex'),
(176, 'Administrator', '2022-08-23 16:09:37', 'Added file Blotter Request by rex'),
(177, 'Administrator', '2022-08-23 16:42:27', 'Added file Blotter Request by mejia,chienlo,joseph'),
(178, 'Administrator', '2022-08-23 21:06:36', 'Added file Blotter Request by '),
(179, 'Administrator', '2022-08-23 22:15:43', 'Added file Blotter Request by '),
(180, 'Administrator', '2022-08-23 22:23:52', 'Update summon Blotter Request by rex'),
(181, 'Administrator', '2022-08-29 03:29:51', 'Added file Blotter Request by mejia,chienlo,joseph'),
(182, 'Administrator', '2022-08-29 03:30:22', 'Deleted user account by Admin'),
(183, 'Administrator', '2022-08-29 03:32:12', 'Added Summon File Blotter Request by chienlokyut'),
(184, 'Administrator', '2022-08-29 03:36:03', 'Approved file Blotter Request by user'),
(185, 'Administrator', '2022-08-29 03:45:25', 'Edit and Update Official named Reymar Medes'),
(186, 'Administrator', '2022-08-29 03:45:36', 'Edit and Update Official named Benjie Miranda'),
(187, 'Administrator', '2022-08-29 03:45:45', 'Edit and Update Official named Rhodora Molina'),
(188, 'Administrator', '2022-08-29 03:45:53', 'Edit and Update Official named Ronilo Boyayot'),
(189, 'Administrator', '2022-08-29 03:46:01', 'Edit and Update Official named Dondon Laurico'),
(190, 'Administrator', '2022-08-29 03:46:09', 'Edit and Update Official named Joseph Soligan'),
(191, 'Administrator', '2022-08-29 03:46:19', 'Edit and Update Official named Idol Anono'),
(192, 'Administrator', '2022-08-29 03:46:28', 'Edit and Update Official named Rolly Torres'),
(193, 'Administrator', '2022-08-29 03:48:18', 'Edit and Update Official named Chienlo Mejia'),
(194, 'Administrator', '2022-08-29 03:48:30', 'Edit and Update Official named johnivan ivan'),
(195, 'Administrator', '2022-08-29 03:48:41', 'Edit and Update Official named Ferbhie'),
(196, 'Administrator', '2022-08-29 03:48:51', 'Edit and Update Official named rex'),
(197, 'Administrator', '2022-08-29 03:48:59', 'Edit and Update Official named chienlo'),
(198, 'Administrator', '2022-08-29 03:49:11', 'Edit and Update Official named arren'),
(199, 'Administrator', '2022-08-29 03:49:21', 'Edit and Update Official named filler'),
(200, 'Administrator', '2022-08-29 03:49:32', 'Edit and Update Official named mark'),
(201, 'Administrator', '2022-08-29 03:49:44', 'Edit and Update Official named sendo'),
(202, 'Administrator', '2022-09-19 23:57:32', 'Update Zone number '),
(203, 'Administrator', '2022-09-20 00:45:49', 'Added Zone number 1'),
(204, 'vawcofficer', '2022-09-20 01:08:22', 'Approved file Blotter Request by user'),
(205, 'Administrator', '2022-09-20 10:21:48', 'Update Zone number '),
(206, 'Administrator', '2022-09-20 16:52:51', 'Update Zone number '),
(207, 'Administrator', '2022-09-20 17:14:33', 'Edit and Update The User Account named chienlo, rew rew'),
(208, 'Administrator', '2022-09-20 17:14:43', 'Edit and Update The User Account named chienlo, rew rew'),
(209, 'Administrator', '2022-09-20 17:33:19', 'Edit and Update The User Account named chienlo, rew rew'),
(210, 'Administrator', '2022-09-20 17:39:29', 'Edit and Update The User Account named chienlo, rew rew'),
(211, 'Administrator', '2022-09-20 17:42:22', 'Edit and Update The User Account named chienlo, rew rew'),
(212, 'Administrator', '2022-09-20 17:47:01', 'Added User account named chienlo, fdsf gdsg'),
(213, 'Administrator', '2022-09-20 17:47:15', 'Edit and Update The User Account named 123, rew rew'),
(214, 'Administrator', '2022-09-20 17:47:21', 'Edit and Update The User Account named 123, rew rew'),
(215, 'Administrator', '2022-09-20 17:47:26', 'Edit and Update The User Account named 123, rew rew'),
(216, 'Administrator', '2022-09-20 17:51:31', 'Edit and Update The User Account named 1, chienlo 123'),
(217, 'Administrator', '2022-09-20 17:51:42', 'Edit and Update The User Account named 1, chienlo 123'),
(218, 'Administrator', '2022-09-20 17:52:04', 'Added User account named ivan, bsdbhsd gbsdgsd'),
(219, 'Administrator', '2022-09-20 17:52:35', 'Added User account named ivan, gsd gsdg'),
(220, 'Administrator', '2022-09-20 18:05:02', 'Deleted user account by Admin'),
(221, 'Administrator', '2022-09-20 18:05:25', 'Edit and Update The User Account named joseph, chienlo 123'),
(222, 'Administrator', '2022-09-20 19:57:50', 'Added User account named rex, gdsg gdsg'),
(223, 'Administrator', '2022-09-20 19:58:26', 'Edit and Update The User Account named ferbhie, gdsg gdsg'),
(224, 'Administrator', '2022-09-20 19:58:34', 'Edit and Update The User Account named rex, gdsg gdsg'),
(225, 'Administrator', '2022-09-20 19:59:17', 'Edit and Update The User Account named , gdsg gdsg'),
(226, 'Administrator', '2022-09-20 19:59:25', 'Edit and Update The User Account named rex, gdsg gdsg'),
(227, 'Administrator', '2022-09-20 20:01:09', 'Added User account named rew, rew rew'),
(228, 'Administrator', '2022-09-20 20:01:16', 'Deleted user account by Admin'),
(229, 'Administrator', '2022-09-20 20:01:47', 'Added User account named gfsd, gds gds'),
(230, 'Administrator', '2022-09-20 20:02:43', 'Deleted user account by Admin'),
(231, 'Administrator', '2022-09-20 21:17:35', 'Added User account named chienlo, fdsf gdsg'),
(232, 'Administrator', '2022-09-20 21:17:54', 'Edit and Update The User Account named rex, gdsg gdsg'),
(233, 'Administratorss', '2022-09-23 16:11:11', 'Approved File VAWC Request by user'),
(234, 'Administrators', '2022-09-24 03:37:54', 'Added Summon File Blotter Request by '),
(235, 'Administrators', '2022-09-24 04:01:35', 'Added Summon File Blotter Request by ediwow'),
(236, 'Administrators', '2022-09-24 04:24:43', 'Added Summon File Blotter Request by rex umagap'),
(237, 'Administrators', '2022-09-24 04:27:39', 'Added Summon File Blotter Request by chienlo'),
(238, 'Administrators', '2022-09-24 04:29:34', 'Added Summon File Blotter Request by ivan'),
(239, 'Administrators', '2022-09-24 15:12:56', 'Added Summon File Blotter Request by aren'),
(240, 'Administrators', '2022-09-24 15:23:27', 'Added Summon File Blotter Request by '),
(241, 'Administratorss', '2022-09-25 22:55:45', 'Update File VAWC Request by chienlo'),
(242, 'Administratorss', '2022-09-25 22:55:49', 'Update File VAWC Request by gg'),
(243, 'Administratorss', '2022-09-25 22:57:05', 'Added File VAWC Request by rex umagap'),
(244, 'Administratorss', '2022-09-25 22:57:52', 'Added File VAWC Request by ediwow'),
(245, 'Administrators', '2022-09-25 22:58:36', 'Added file Blotter Request by fsa'),
(246, 'Administrators', '2022-09-25 23:01:21', 'Added file Blotter Request by rex umagap'),
(247, 'Administrators', '2022-09-25 23:03:10', 'Added file Blotter Request by rex umagap'),
(248, 'Administrators', '2022-09-25 23:04:13', 'Added file Blotter Request by ediwow'),
(249, 'Administrators', '2022-09-25 23:43:21', 'Added file Blotter Request by ediwow'),
(250, 'Administrators', '2022-09-25 23:45:56', 'Added file Blotter Request by 543'),
(251, 'Administrator', '2022-09-25 23:48:55', 'Added file Blotter Request by ediwow'),
(252, 'Administrators', '2022-09-25 23:51:38', 'Added file Blotter Request by rex umagap'),
(253, 'Administrators', '2022-09-25 23:52:33', 'Added file Blotter Request by ediwow'),
(254, 'Administrators', '2022-09-25 23:55:40', 'Added file Blotter Request by ediwow'),
(255, 'Administratorss', '2022-09-25 23:58:17', 'Added File VAWC Request by ediwow'),
(256, 'Administratorss', '2022-09-26 00:30:44', 'Approved File VAWC Request by user'),
(257, 'Administrators', '2022-09-26 01:50:36', 'Added Summon File Blotter Request by 56'),
(258, 'Administrator', '2022-09-26 02:08:41', 'Added User account named mejia, chienlo joseph'),
(259, 'Administrator', '2022-09-26 02:23:55', 'Edit and Update The User Account named mejia, chienlo joseph'),
(260, 'Administrator', '2022-09-26 02:24:06', 'Edit and Update The User Account named chienlo, fdsf gdsg'),
(261, 'Administrator', '2022-09-26 02:24:27', 'Edit and Update The User Account named rex, gdsg gdsg'),
(262, 'Administrators', '2022-09-26 02:33:07', 'Added Summon File Blotter Request by ivan'),
(263, 'Administrators', '2022-09-26 03:31:25', 'Added file Blotter Request by ediwow'),
(264, 'Administrators', '2022-09-26 16:27:33', 'Approved file Blotter Request by user'),
(265, 'Administrators', '2022-09-26 16:27:42', 'Approved file Blotter Request by user'),
(266, 'Administrators', '2022-09-26 16:28:06', 'Approved file Blotter Request by user'),
(267, 'Administrators', '2022-09-26 16:31:07', 'Added file Blotter Request by rex umagap'),
(268, 'Administrators', '2022-09-26 16:32:31', 'Approved file Blotter Request by user'),
(269, 'Administrators', '2022-09-26 16:34:42', 'Approved file Blotter Request by user'),
(270, 'Administrators', '2022-09-26 16:36:58', 'Approved file Blotter Request by user'),
(271, 'Administrator', '2022-09-26 16:41:59', 'Approved file Blotter Request by user'),
(272, 'Administrator', '2022-09-26 16:42:20', 'Approved file Blotter Request by user'),
(273, 'Administrator', '2022-09-26 16:42:42', 'Approved file Blotter Request by user'),
(274, 'Administrator', '2022-09-26 16:43:07', 'Approved File VAWC Request by user'),
(275, 'Administrator', '2022-09-26 16:43:20', 'Approved File VAWC Request by user'),
(276, 'Administrator', '2022-09-26 16:44:18', 'Approved File VAWC Request by user'),
(277, 'Administratorss', '2022-09-26 16:45:35', 'Approved File VAWC Request by user'),
(278, 'Administrators', '2022-09-26 16:50:03', 'Approved file Blotter Request by user'),
(279, 'Administrators', '2022-09-26 16:51:32', 'Approved file Blotter Request by user'),
(280, 'Administrators', '2022-09-26 20:20:58', 'Added Summon File Blotter Request by chienlo'),
(281, 'Administrators', '2022-09-28 18:08:36', 'Added Summon File Blotter Request by '),
(282, 'Administrators', '2022-09-29 10:59:57', 'Edit and Update summon Blotter Request by rex'),
(283, 'Administrators', '2022-09-29 12:38:42', 'Edit and Update summon Blotter Request by rex'),
(284, 'Administrators', '2022-09-29 13:23:27', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(285, 'Administrators', '2022-09-29 15:23:36', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(286, 'Administrators', '2022-09-29 20:20:23', 'Edit and Update summon Blotter Request by rex'),
(287, 'Administrators', '2022-09-29 20:20:45', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(288, 'Administrators', '2022-09-29 20:22:20', 'Edit and Update summon Blotter Request by rex'),
(289, 'Administrators', '2022-09-29 20:22:25', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(290, 'Administrators', '2022-09-29 20:22:47', 'Edit and Update summon Blotter Request by rex'),
(291, 'Administrators', '2022-09-29 20:24:39', 'Edit and Update summon Blotter Request by '),
(292, 'Administrators', '2022-09-29 21:53:21', 'Edit and Update summon Blotter Request by rex'),
(293, 'Administrators', '2022-09-29 22:41:49', 'Edit and Update summon Blotter Request by rex'),
(294, 'Administrators', '2022-09-29 22:42:16', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(295, 'Administrators', '2022-09-29 23:01:48', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(296, 'Administrators', '2022-09-29 23:48:40', 'Added Summon File Blotter Request by mark'),
(297, 'Administrators', '2022-09-29 23:51:21', 'Added Summon File Blotter Request by mark'),
(298, 'Administrators', '2022-09-29 23:51:41', 'Added Summon File Blotter Request by james'),
(299, 'Administrators', '2022-09-29 23:52:10', 'Edit and Update summon Blotter Request by rex'),
(300, 'Administrators', '2022-09-29 23:53:29', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(301, 'Administrators', '2022-09-30 00:01:58', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(302, 'Administrators', '2022-09-30 00:03:04', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(303, 'Administrators', '2022-09-30 10:45:27', 'Added Summon File Blotter Request by ivan'),
(304, 'Administrators', '2022-09-30 10:46:19', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(305, 'Administrators', '2022-09-30 10:47:03', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(306, 'Administrators', '2022-09-30 10:47:37', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(307, 'Administrators', '2022-09-30 10:48:09', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(308, 'Administrators', '2022-09-30 10:50:42', 'Added Summon File Blotter Request by chienlo'),
(309, 'Administrators', '2022-09-30 10:50:58', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(310, 'Administrators', '2022-09-30 10:51:58', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(311, 'Administrators', '2022-09-30 13:06:10', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(312, 'Administrators', '2022-09-30 13:06:35', 'Added Summon File Blotter Request by ediwow'),
(313, 'Administrators', '2022-09-30 13:06:59', 'Edit and Update summon Blotter Request by rex'),
(314, 'Administrators', '2022-09-30 13:07:13', 'Edit and Update summon Blotter Request by rex'),
(315, 'Administrators', '2022-09-30 13:08:56', 'Edit and Update summon Blotter Request by rex'),
(316, 'Administrators', '2022-09-30 13:09:06', 'Edit and Update summon Blotter Request by rex'),
(317, 'Administrators', '2022-09-30 13:11:50', 'Added Summon File Blotter Request by rex umagap'),
(318, 'Administrators', '2022-09-30 13:17:37', 'Edit and Update summon Blotter Request by rex'),
(319, 'Administrators', '2022-09-30 13:18:14', 'Added Summon File Blotter Request by chienlo'),
(320, 'Administrators', '2022-09-30 13:18:22', 'Edit and Update summon Blotter Request by rex'),
(321, 'Administrators', '2022-09-30 13:25:35', 'Added Summon File Blotter Request by chienlo'),
(322, 'Administrators', '2022-09-30 13:25:48', 'Edit and Update summon Blotter Request by rex'),
(323, 'Administrators', '2022-09-30 13:45:03', 'Edit and Update summon Blotter Request by rex'),
(324, 'Administrators', '2022-09-30 13:45:21', 'Edit and Update summon Blotter Request by rex'),
(325, 'Administrators', '2022-09-30 13:47:28', 'Edit and Update summon Blotter Request by rex'),
(326, 'Administrators', '2022-09-30 13:47:47', 'Edit and Update summon Blotter Request by rex'),
(327, 'Administrators', '2022-09-30 13:48:03', 'Edit and Update summon Blotter Request by rex'),
(328, 'Administrators', '2022-09-30 13:54:44', 'Added Summon File Blotter Request by fsa'),
(329, 'Administrators', '2022-09-30 13:54:54', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(330, 'Administrators', '2022-09-30 13:55:29', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(331, 'Administrators', '2022-09-30 14:24:59', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(332, 'Administrators', '2022-09-30 14:25:50', 'Added Summon File Blotter Request by ivan'),
(333, 'Administrators', '2022-09-30 14:26:12', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(334, 'Administrators', '2022-09-30 14:29:34', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(335, 'Administrators', '2022-09-30 15:03:17', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(336, 'Administrators', '2022-09-30 15:03:47', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(337, 'Administrators', '2022-09-30 15:22:15', 'Added Summon File Blotter Request by ivan'),
(338, 'Administrators', '2022-09-30 15:22:41', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(339, 'Administrators', '2022-09-30 15:34:45', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(340, 'Administrators', '2022-09-30 15:35:23', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(341, 'Administrators', '2022-09-30 15:35:59', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(342, 'Administrators', '2022-09-30 15:37:15', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(343, 'Administrators', '2022-09-30 15:37:35', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(344, 'Administrators', '2022-09-30 15:44:38', 'Added Summon File Blotter Request by ivan'),
(345, 'Administrators', '2022-09-30 15:45:15', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(346, 'Administrators', '2022-10-02 22:24:06', 'Added Summon File Blotter Request by ivan'),
(347, 'Administrators', '2022-10-02 22:24:22', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(348, 'Administrators', '2022-10-02 23:24:56', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(349, 'Administrators', '2022-10-02 23:27:14', 'Added Summon File Blotter Request by ivan'),
(350, 'Administrators', '2022-10-02 23:27:24', 'Edit and Update summon Blotter Request by gg'),
(351, 'Administrators', '2022-10-02 23:44:05', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(352, 'Administrators', '2022-10-02 23:44:32', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(353, 'Administrators', '2022-10-02 23:47:17', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(354, 'Administrators', '2022-10-02 23:47:56', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(355, 'Administrators', '2022-10-02 23:49:04', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(356, 'Administrators', '2022-10-02 23:50:42', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(357, 'Administrators', '2022-10-02 23:53:31', 'Edit and Update summon Blotter Request by gg'),
(358, 'Administrators', '2022-10-03 00:12:08', 'Edit and Update summon Blotter Request by rex'),
(359, 'Administrators', '2022-10-03 01:03:05', 'Added Summon File Blotter Request by rex umagap'),
(360, 'Administrators', '2022-10-03 01:03:20', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(361, 'Administrators', '2022-10-03 01:03:46', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(362, 'Administrators', '2022-10-03 01:04:07', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(363, 'Administrators', '2022-10-03 01:04:29', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(364, 'Administrators', '2022-10-03 01:04:48', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(365, 'Administrators', '2022-10-03 01:10:04', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(366, 'Administrators', '2022-10-03 01:10:44', 'Edit and Update summon Blotter Request by mejia,chienlo,joseph'),
(367, 'Administrators', '2022-10-03 01:14:06', 'Edit and Update summon Blotter Request by gg'),
(368, 'Administrators', '2022-10-03 01:25:59', 'Edit and Update summon Blotter Request by rex'),
(369, 'Administrators', '2022-10-03 01:26:45', 'Edit and Update summon Blotter Request by rex'),
(370, 'Administrators', '2022-10-03 01:32:39', 'Edit and Update summon Blotter Request by rex'),
(371, 'Administrators', '2022-10-05 03:47:45', 'Deleted Brgy officials by Admin'),
(372, 'Administrator', '2022-10-07 04:24:14', 'Edit and Update The User Account named rex, gdsg gdsg'),
(373, 'Administrator', '2022-10-07 04:24:26', 'Edit and Update The User Account named rex, gdsg gdsg'),
(374, 'Administrator', '2022-10-07 04:27:00', 'Edit and Update The User Account named rex, gdsg gdsg'),
(375, 'Administrator', '2022-10-07 04:28:15', 'Edit and Update The User Account named rex, gdsg gdsg'),
(376, 'Administrator', '2022-10-07 04:32:52', 'Edit and Update The User Account named rex, gdsg gdsg'),
(377, 'Administrator', '2022-10-07 04:40:28', 'Edit and Update The User Account named mejia, chienlo joseph'),
(378, 'Administrators', '2022-10-10 04:30:17', 'Edit and Update File Blotter Request by chienlo');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `sPosition`, `completeName`, `pcontact`, `paddress`, `termStart`, `termEnd`, `status`) VALUES
(4, 'Captain', 'Ferbhie', '091234567890', 'brgy sto tomas calauan laguna', '2018-05-22', '2022-05-22', 'Ongoing Term'),
(5, 'Kagawad(Ordinance)', 'johnivan ivan', '09234567894', 'brgy sto tomas calauan laguna', '2018-05-21', '2022-05-23', 'Ongoing Term'),
(6, 'Kagawad(Public Safety)', 'rex', '09452316722', 'brgy sto tomas calauan laguna', '2018-05-22', '2022-05-22', 'Ongoing Term'),
(7, 'Kagawad(Tourism)', 'chienlo', '09456732456', 'brgy sto tomas calauan laguna', '2018-05-22', '2022-05-22', 'Ongoing Term'),
(8, 'Kagawad(Budget & Finance)', 'arren', '09337869045', 'brgy sto tomas calauan laguna', '2018-05-22', '2022-05-22', 'Ongoing Term'),
(9, 'Kagawad(Agriculture)', 'filler', '09227865784', 'brgy sto tomas calauan laguna', '2018-05-22', '2022-05-22', 'Ongoing Term'),
(10, 'Kagawad(Education)', 'mark', '094567892341', 'brgy sto tomas calauan laguna', '2018-05-22', '2022-05-23', 'Ongoing Term');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `residentid`, `businessName`, `businessAddress`, `typeOfBusiness`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(1, 0, 'chienlowew', 'yhfdhyd', 'Service', 0, 0, '2022-06-07', 'admin@gmail.com', 'Approved'),
(5, 1, 'raulo', '', '', 0, 0, '2022-06-07', 'jude@gmail.com', 'Approved'),
(6, 1, 'clothing', '', '', 0, 0, '2022-06-07', 'jude@gmail.com', 'Disapproved'),
(7, 1, 'ediwow', '', '', 0, 0, '2022-06-07', 'jude@gmail.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, `lname`, `fname`, `mname`, `bdate`, `age`, `gender`, `image`, `username`, `password`) VALUES
(3, '123', 'rew', 'rew', '2022-06-16', 0, 'Male', 'default.png', 'gg@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `lname`, `fname`, `mname`, `bdate`, `age`, `gender`, `image`, `username`, `password`) VALUES
(3, 'mejia', 'chienlo', 'joseph', '2022-09-08', 0, 'Male', '1664184235606_axie.jpg', 'user@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblsummon`
--

CREATE TABLE `tblsummon` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `brgycaseno` int(255) NOT NULL,
  `caddress` text NOT NULL,
  `setdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `personToComplain` text NOT NULL,
  `headchief` varchar(255) NOT NULL,
  `complaint` text NOT NULL,
  `settime` varchar(20) CHARACTER SET latin1 NOT NULL,
  `recordedby` varchar(50) NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `residentid` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `headchiefold` varchar(255) NOT NULL,
  `summonlevel` varchar(255) NOT NULL,
  `resolutioncase1` varchar(255) NOT NULL,
  `resolutioncase2` varchar(225) NOT NULL,
  `resolutioncase3` varchar(225) NOT NULL,
  `settlement` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsummon`
--

INSERT INTO `tblsummon` (`id`, `yearRecorded`, `dateRecorded`, `complainant`, `brgycaseno`, `caddress`, `setdate`, `personToComplain`, `headchief`, `complaint`, `settime`, `recordedby`, `time`, `residentid`, `paddress`, `status`, `headchiefold`, `summonlevel`, `resolutioncase1`, `resolutioncase2`, `resolutioncase3`, `settlement`) VALUES
(55, '2022', '2022-10-02', 'rex', 55, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', '2022-10-14', 'John Ivan Salvador', '', 'gsdgsdg', '', 'blotter@gmail.com', '13:06:35', 0, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 'summonnew', 'ferbhie', 'CertificateToFileAction', '', 'hdhsdfhfsdhfd', 'ngek', ''),
(56, '2022', '2022-10-01', 'rex', 55, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', '', 'John Ivan Salvador', 'vx', 'gsdgsdg', '', 'blotter@gmail.com', '13:11:50', 0, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 'summonnew', 'ferbhie', '2', '', 'vx', '', 'Settled'),
(57, '2022', '2022-10-01', 'rex', 58, 'blk37 lot 62 calauan laguna', '', 'arren', 'james reid', 'fsafsaf', '', 'blotter@gmail.com', '13:18:14', 0, 'blk 38 lot 63', 'summonnew', 'Ms Cherry', '1', 'pogi mopo slurp slurp', '', '', ''),
(58, '2022', '2022-10-01', 'rex', 55, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', '2022-10-06', 'John Ivan Salvador', 'rex', 'gsdgsdg', '', 'blotter@gmail.com', '13:25:35', 0, 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 'summonnew', 'ferbhie', '3', '', 'wew', '', 'Pending'),
(59, '2022', '2022-10-01', 'mejia,chienlo,joseph', 56, 'blk37 lot 62 calauan laguna', '2022-10-13', 'John Ivan Salvador', '', 'juygfjgf', '', 'blotter@gmail.com', '13:54:44', 0, 'gg', 'summonnew', 'Ms Cherry', 'CertificateToFileAction', '123', 'edi wow', 'ngek', ''),
(64, '2022', '2022-10-03', 'gg', 67, 'rfsa', '2022-10-05', 'fsa', 'rex', 'fsa', '', 'blotter@gmail.com', '23:27:14', 0, 'fsa', 'summonnew', 'rex umagap', '2', 'pogi mopo slurp slurp', 'ngek', '', 'Cancel'),
(65, '2022', '2022-10-04', 'mejia,chienlo,joseph', 56, 'blk37 lot 62 calauan laguna', '2022-10-06', 'John Ivan Salvador', 'daniel', 'juygfjgf', '', 'blotter@gmail.com', '01:03:05', 0, 'gg', 'summonnew', 'Ms Cherry', 'CertificateToFileAction', 'ediwow', 'jj', 'ngek', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin@gmail.com', '123', 'administrator'),
(2, 'zone', 'zone', 'zoneleader');

-- --------------------------------------------------------

--
-- Table structure for table `tblvawc`
--

CREATE TABLE `tblvawc` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(255) CHARACTER SET latin1 NOT NULL,
  `complainant` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cage` int(255) NOT NULL,
  `caddress` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ccontact` int(255) NOT NULL,
  `personToComplain` varchar(255) CHARACTER SET latin1 NOT NULL,
  `compgen` varchar(255) CHARACTER SET latin1 NOT NULL,
  `paddress` varchar(255) CHARACTER SET latin1 NOT NULL,
  `headchief` varchar(255) CHARACTER SET latin1 NOT NULL,
  `complaint` varchar(255) CHARACTER SET latin1 NOT NULL,
  `respgen` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sStatus` varchar(255) CHARACTER SET latin1 NOT NULL,
  `locationOfIncidence` varchar(255) CHARACTER SET latin1 NOT NULL,
  `recordedby` varchar(255) CHARACTER SET latin1 NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `residentid` int(255) NOT NULL,
  `dateRecorded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvawc`
--

INSERT INTO `tblvawc` (`id`, `yearRecorded`, `complainant`, `cage`, `caddress`, `ccontact`, `personToComplain`, `compgen`, `paddress`, `headchief`, `complaint`, `respgen`, `sStatus`, `locationOfIncidence`, `recordedby`, `time`, `status`, `residentid`, `dateRecorded`) VALUES
(1, '2022', 'gg', 43, 'blk37 lot 62 calauan laguna', 532, 'arren', 'Male', 'blk 38 lot 63', 'Ms Cherry', 'ewtwe', 'Male', 'child', 'Blk 37 Lot 55 Site 3 Brgy Sto Tomas Calauan laguna', 'admin@gmail.com', '05:28:57', 'Approved', 0, '2022-07-31'),
(2, '2022', 'chienlo', 56, 'dsa', 5324, 'arren', 'Male', 'gg', 'gg', 'wetfrwe', 'Male', 'child', 'gfsdgsdg', 'admin@gmail.com', '05:30:44', 'Approved', 0, '2022-07-31'),
(3, '2022', '12fsafsa', 32, 'gdsgsdgd', 32, '421421', '', '1421', 'ferbhie', 'fsafsa', 'Male', 'child', 'ffssad', 'admin@gmail.com', '20:47:53', 'Approved', 1, '2022-09-20'),
(4, '2022', 'chienlo', 32, 'gdsgsdgd', 321421, 'fsadgfs', '', 'gfsa', 'ffsafs', 'fsafsa', 'Male', 'child', 'fsafsaf', 'gg@gmail.com', '20:48:43', 'Approved', 3, '2022-09-20'),
(5, '2022', 'chienlo', 43, 'ghsdh', 52335, 'ghsdhd', '', 'ghsd', 'rex umagap', 'hdshsd', 'Male', 'women', 'gsdgsdg', 'vawc@gmail.com', '22:57:05', 'Approved', 0, '2022-09-26'),
(6, '2022', 'gg', 43, 'raw', 532523, 'gasg', '', 'gsa', 'ediwow', 'gsagsagsa', 'Male', 'child', 'gsdgsdg', 'vawc@gmail.com', '22:57:52', 'Approved', 0, '2022-09-26'),
(7, '2022', 'chienlo', 42, 'ghsdh', 4234523, 'ghsdhd', '', 'ghsd', 'ediwow', 'gsadgsd', 'Male', 'women', 'gsdgsdg', 'vawc@gmail.com', '23:58:17', 'Approved', 0, '2022-09-26'),
(8, '2022', 'gfd', 43, 'ghfd', 325, 'hfd', '', 'hfd', 'gsdgsd', 'hfds', 'Male', 'child', 'hgfsd', 'gg@gmail.com', '16:43:54', 'Approved', 3, '2022-09-27'),
(9, '2022', 'gsdg', 43, 'gsd', 4321532, 'gsd', '', 'gsd', 'ediwow', 'gds', 'Female', 'child', 'gsd', '1@gmail.com', '16:45:16', 'Approved', 3, '2022-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `tblvawcofficer`
--

CREATE TABLE `tblvawcofficer` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvawcofficer`
--

INSERT INTO `tblvawcofficer` (`id`, `lname`, `fname`, `mname`, `bdate`, `age`, `gender`, `image`, `username`, `password`) VALUES
(1, 'rex', 'gdsg', 'gdsg', '2022-09-10', 0, 'Male', '1664184246788_axie.jpg', 'vawc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblzone`
--

CREATE TABLE `tblzone` (
  `id` int(5) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblzone`
--

INSERT INTO `tblzone` (`id`, `lname`, `fname`, `mname`, `bdate`, `age`, `gender`, `image`, `username`, `password`) VALUES
(1, 'joseph', 'chienlo', '123', '', 0, 'Male', '', 'jj@gmail.com', '123'),
(3, 'ivan', 'gsd', 'gsdg', '2022-09-16', 0, 'Male', 'default.png', 'ivan@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotterofficer`
--
ALTER TABLE `tblblotterofficer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficial`
--
ALTER TABLE `tblofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsummon`
--
ALTER TABLE `tblsummon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvawc`
--
ALTER TABLE `tblvawc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvawcofficer`
--
ALTER TABLE `tblvawcofficer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblzone`
--
ALTER TABLE `tblzone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tblblotterofficer`
--
ALTER TABLE `tblblotterofficer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsummon`
--
ALTER TABLE `tblsummon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblvawc`
--
ALTER TABLE `tblvawc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblvawcofficer`
--
ALTER TABLE `tblvawcofficer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblzone`
--
ALTER TABLE `tblzone`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
