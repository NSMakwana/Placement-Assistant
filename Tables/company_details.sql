-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Jun 17, 2024 at 04:19 PM
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
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `block_num` varchar(20) NOT NULL,
  `building_name` varchar(40) NOT NULL,
  `area` varchar(30) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `min_package` varchar(40) NOT NULL,
  `max_package` varchar(40) NOT NULL,
  `manager_name` varchar(40) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `mobile_num` int(10) NOT NULL,
  `aptitude_test` varchar(40) NOT NULL,
  `tech_round` varchar(40) NOT NULL,
  `round_1` varchar(40) NOT NULL,
  `round_2` varchar(40) NOT NULL,
  `pair_required` varchar(40) NOT NULL,
  `PI_round1` varchar(40) NOT NULL,
  `PI_round2` varchar(40) NOT NULL,
  `HR_round` varchar(40) NOT NULL,
  `any_other` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
