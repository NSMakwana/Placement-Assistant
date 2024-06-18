-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 07:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `experience_details` varchar(10) NOT NULL,
  `min_package` int(50) NOT NULL,
  `max_package` int(50) NOT NULL,
  `no_of_pos` int(3) NOT NULL,
  `bond` varchar(50) NOT NULL,
  `type` varchar(200) NOT NULL,
  `stipend` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `bcom` varchar(50) NOT NULL,
  `bba` varchar(50) NOT NULL,
  `bsc` varchar(50) NOT NULL,
  `bca` varchar(50) NOT NULL,
  `be` varchar(50) NOT NULL,
  `btech` varchar(50) NOT NULL,
  `pgdca` varchar(50) NOT NULL,
  `mca` varchar(50) NOT NULL,
  `mtech` varchar(50) NOT NULL,
  `msc_cs` varchar(50) NOT NULL,
  `msc_aiml` varchar(50) NOT NULL,
  `anyother` varchar(50) NOT NULL,
  `remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `cid`, `name`, `experience_details`, `min_package`, `max_package`, `no_of_pos`, `bond`, `type`, `stipend`, `location`, `bcom`, `bba`, `bsc`, `bca`, `be`, `btech`, `pgdca`, `mca`, `mtech`, `msc_cs`, `msc_aiml`, `anyother`, `remarks`) VALUES
(32, 58, '  Business     Development       Associate', 'no experie', 240000, 420000, 35, 'Not     Applicable', ' Full Time  ', '    Not Applicable', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 58, 'Customer succcess associate', 'no experie', 240000, 360000, 30, 'Not  Applicable', '  Full Time', '  Not   Applicable', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 58, 'Software development associate', 'no experie', 300000, 500000, 30, ' 18  Months', 'Internship + Full Time', ' 10K-15K (Based on Interview Performance)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 58, 'Social media associate', 'no experie', 0, 0, 2, 'Not  Applicable', 'Full time', '   Not Applicable', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 59, 'Oracle Functional Consulting', '1 year', 0, 0, 0, '', '', '', '', '', 'B.Sc', '', '', 'B.Tech', '', 'MCA', 'M-TECH', 'MSC-CS', 'Any other', '', '', ''),
(37, 59, 'Technical Consulting', '1 year', 0, 0, 0, '', '', '', '', '', 'B.Sc', '', '', 'B.Tech', '', 'MCA', 'M-TECH', 'MSC-CS', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company_details` (`cid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
