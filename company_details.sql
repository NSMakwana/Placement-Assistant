-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 06:26 PM
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
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
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
  `vacant_designation` varchar(20) NOT NULL,
  `location` varchar(40) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `b_com` varchar(10) NOT NULL,
  `bsc` varchar(10) NOT NULL,
  `bba` varchar(10) NOT NULL,
  `bca` varchar(10) NOT NULL,
  `b_e` varchar(10) NOT NULL,
  `btech` varchar(10) NOT NULL,
  `UG_others` varchar(10) NOT NULL,
  `pgdca` varchar(10) NOT NULL,
  `mca` varchar(10) NOT NULL,
  `mtech` varchar(10) NOT NULL,
  `msc_cs` varchar(10) NOT NULL,
  `PG_others` varchar(10) NOT NULL,
  `aptitude_test` varchar(10) NOT NULL,
  `tech_round` varchar(10) NOT NULL,
  `round_1` varchar(10) NOT NULL,
  `round_2` varchar(10) NOT NULL,
  `pair_required` varchar(10) NOT NULL,
  `PI_round1` varchar(10) NOT NULL,
  `PI_round2` varchar(10) NOT NULL,
  `HR_round` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
