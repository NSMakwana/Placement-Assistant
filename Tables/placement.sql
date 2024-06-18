-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Apr 23, 2024 at 10:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_edu`
--

CREATE TABLE `stud_edu` (
  `enum` int(20) NOT NULL,
  `marks_ssc` int(20) NOT NULL,
  `tm_ssc` int(20) NOT NULL,
  `perct_ssc` float NOT NULL,
  `year_ssc` int(20) NOT NULL,
  `board_ssc` varchar(200) NOT NULL,
  `marks_hsc` int(11) NOT NULL,
  `tm_hsc` int(11) NOT NULL,
  `perct_hsc` float NOT NULL,
  `stream_hsc` varchar(11) NOT NULL,
  `board_hsc` varchar(11) NOT NULL,
  `year_hsc` int(11) NOT NULL,
  `marks_bachelor` int(11) NOT NULL,
  `tm_bachelor` int(11) NOT NULL,
  `perct_bachelor` float NOT NULL,
  `deg_bachelor` varchar(11) NOT NULL,
  `uni_bachelor` varchar(11) NOT NULL,
  `year_bachelor` int(11) NOT NULL,
  `marks_master` int(11) NOT NULL,
  `tm_master` int(11) NOT NULL,
  `perct_master` float NOT NULL,
  `deg_master` varchar(11) NOT NULL,
  `uni_master` varchar(11) NOT NULL,
  `year_master` int(11) NOT NULL,
  `l_entry` varchar(11) NOT NULL,
  `drops` varchar(11) NOT NULL,
  `remarks` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stud_personal`
--

CREATE TABLE `stud_personal` (
  `enum` int(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ph_num` int(20) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_personal`
--
ALTER TABLE `stud_personal`
  ADD PRIMARY KEY (`enum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
