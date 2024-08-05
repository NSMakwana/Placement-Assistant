-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Aug 05, 2024 at 08:19 AM
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
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`cid`, `c_name`, `block_num`, `building_name`, `area`, `landmark`, `pincode`, `city`, `state`, `min_package`, `max_package`, `manager_name`, `designation`, `email_id`, `mobile_num`, `aptitude_test`, `tech_round`, `round_1`, `round_2`, `pair_required`, `PI_round1`, `PI_round2`, `HR_round`, `any_other`) VALUES
(84, 'Greycell Labs', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', '2.5LPA', '3.6 LPA', 'Not given', '', 'Not given', 0, '', '', '', '', '', '', '', '', ''),
(85, 'Motadata', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', '3 LPA', '7 LPA', 'Not given', '', 'Not given', 0, '', '', '', '', '', '', '', '', ''),
(86, 'Shaip', 'Not given', 'Atal-Kalam Research Park for Industrial ', 'Not given', ' Opp. GUSEC', 'Gujarat', 'Ahmedabad', '380009', 'Not given', 'Not given', 'Not given', '', 'Not given', 0, '', '', '', '', '', '', '', '', ''),
(87, 'Valens Datalabs', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', '', 'Not given', 0, '', '', '', '', '', '', '', '', ''),
(88, 'Socialpilot', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', '', 'Not given', 0, '', '', '', '', '', '', '', '', ''),
(89, 'Aspire', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', '2.4 lacks/Annum', 'Not given', 'Not given', 'Online Aptitude ', 'Not given', 0, 'tecnical test', '', '', '', '', '', 'HR Discussion', '', ''),
(90, 'La Net Team Software Solutions', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', 'Not given', '3.6 LPA', '5.04 LPA', 'Not given', 'aptitude test', 'Not given', 0, 'tech round', '', '', '', 'PI round1', 'PI round2', 'HR round', '', ''),
(91, 'Evosys', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'Aptitude test', '', '', '', '', 'Round 1', 'Round 2', '', ''),
(92, 'Incubyte', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `experience_details` varchar(30) NOT NULL,
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
(113, 90, '', '', 0, 0, 0, '', '', '', '', '', '', '', 'be', '', 'mca', 'mtech', 'msc_cs', '', '', '', '', ''),
(114, 84, 'Fullstack developers', '2.5LPA', 0, 7000, 0, '10-Dec', '3.6 LPA', '', '', '', '', 'bca', 'be', 'pgdca', 'mca', 'mtech', 'msc_cs', '', '', '', '', ''),
(115, 84, 'DevOps Engineers/ cloud engineers', '2.5LPA', 0, 7000, 0, '4-May', '3.6 LPA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, 84, 'Fullstack flutter developers', '2.5LPA', 0, 7000, 0, '6-Jul', '3.6 LPA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, 85, 'Software Trainee', '', 0, 10, 0, '5', '7 LPA', '', '', '', '', '', 'be', '', 'mca', 'mtech', '', '', '', '', '', ''),
(118, 85, 'Product Analyst', '3 LPA', 0, 10, 0, '2', '4 LPA', '', '', '', '', '', 'be', '', 'mca', 'mtech', 'msc_cs', '', '', '', '', ''),
(119, 85, 'Technical Content writer', '', 0, 10, 0, '2', '3 LPA', '', '', '', '', '', 'be', '', 'mca', 'mtech', 'msc_cs', '', '', '', '', ''),
(120, 86, 'Full Stack Engineer', '', 0, 10000, 0, '5', '', '', '', 'ahmedabad', '', '', '', '', 'btech', '', 'mca', 'mtech', '', '', '', ''),
(121, 86, 'Machine Learning Engineer', '4 lakh', 0, 0, 0, '5', '6 lakh', '', '', '', '', '', '', '', 'btech', '', '', 'mtech', '', '', '', ''),
(122, 86, 'Research Engineer (Python Developer)', '4 lakh', 0, 10000, 0, '10', '6 lakh', '', '', '', '', '', '', '', 'btech', '', '', 'mtech', '', '', '', ''),
(123, 87, '', '', 0, 5000, 0, '', '', '', '2 years', 'ahmedabad', '', '', '', '', '', '', '', '', '', '', '', ''),
(124, 88, 'Node.js Intern', '6lpa', 0, 12000, 0, '3', '7lpa', '', '', '', '', '', 'bsc', '', 'btech', '', 'mca', 'mtech', '', '', 'mscit', ''),
(125, 88, 'React.js Intern', '6lpa', 0, 12000, 0, '3', '7lpa', '', '', '', '', '', 'bsc', '', 'btech', '', 'mca', 'mtech', '', '', 'mscit', ''),
(126, 88, 'Digital Marketer - partnership Intern', '4.2 lpa', 0, 8000, 0, '3', '4.5lpa', '', '', '', '', 'bba', '', '', 'btech', '', '', '', '', '', '', ''),
(127, 88, 'Content Writer Intern', '', 0, 8000, 0, '3', '', '', '', '', '', 'bba', '', '', 'btech', '', '', '', '', '', '', ''),
(128, 91, 'Oracle Functional Consulting', '', 0, 0, 0, '', '', '', '', '', 'bsc', '', 'be', '', 'mca', 'mtech', 'msc', '', '', '', '10th, 12th or Diploma: 60 % marks throughout', ''),
(129, 91, 'Technical Consulting', '', 0, 0, 0, '', '', '', '', '', 'bsc', '', 'be', '', 'mca_it/mca_cs', 'mtech', 'msc', '', '', '', 'Bachelors / Masters Degree: Minimum 55% or equival', ''),
(130, 89, '', '', 0, 0, 0, '15', '', '', '', '', '', '', 'be', '', 'mca', 'mtech', '', '', '', '', '', ''),
(131, 89, '', '', 0, 5000, 0, '15', '', '', '', '', '', '', 'be', '', 'mca', 'mtech', '', '', '', '', '', ''),
(133, 92, 'Software Craftperson', 'no experience', 0, 0, 0, '', '', '25k/month', 'Remote', '', '', '', '', '', '', 'MCA', '', '', '', '', 'MSC-AIML', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_id`, `user_name`, `email_id`, `password`, `timestamp`) VALUES
(4, 'admin', 'nencysmakwana@gmail.', '$2y$10$JrnNZVSxL9qWzOd2HVQO8uT.N/YJ0ZOENIf0i8Qj3Z4/USjwlhAeG', '2024-06-27 08:51:41.746708');

-- --------------------------------------------------------

--
-- Table structure for table `stud_edu`
--

CREATE TABLE `stud_edu` (
  `sid` int(10) NOT NULL,
  `enum` int(10) NOT NULL,
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
  `uni_bachelor` varchar(100) NOT NULL,
  `year_bachelor` int(11) NOT NULL,
  `marks_master` int(11) NOT NULL,
  `tm_master` int(11) NOT NULL,
  `perct_master` float NOT NULL,
  `deg_master` varchar(11) NOT NULL,
  `uni_master` varchar(100) NOT NULL,
  `year_master` int(11) NOT NULL,
  `l_entry` varchar(11) NOT NULL,
  `drops` varchar(11) NOT NULL,
  `remarks` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_edu`
--

INSERT INTO `stud_edu` (`sid`, `enum`, `marks_ssc`, `tm_ssc`, `perct_ssc`, `year_ssc`, `board_ssc`, `marks_hsc`, `tm_hsc`, `perct_hsc`, `stream_hsc`, `board_hsc`, `year_hsc`, `marks_bachelor`, `tm_bachelor`, `perct_bachelor`, `deg_bachelor`, `uni_bachelor`, `year_bachelor`, `marks_master`, `tm_master`, `perct_master`, `deg_master`, `uni_master`, `year_master`, `l_entry`, `drops`, `remarks`) VALUES
(0, 0, 411, 500, 82.2, 2014, 'Jammu and Kashmir State Board of School Education', 398, 500, 79.6, 'Science(Non', 'Jammu and K', 2016, 2094, 3000, 69.8, 'BCA', 'Jammu University', 2019, 483, 700, 69, 'MCA', 'Gujarat University/', 2022, 'No', '1', ''),
(0, 0, 440, 600, 73.33, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 490, 750, 65.33, 'Commerce', 'Gujarat Sec', 2017, 3636, 5200, 69.92, 'BCA', 'St. Xaviers College Navrangpura (Autonomous)', 2020, 505, 700, 72.14, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 333, 600, 55, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 466, 700, 66, 'Commerce', 'Gujarat Sec', 2017, 2660, 4200, 63.33, 'BCA', 'Veer Naramad South Gujarat University, Surat', 2020, 364, 700, 52, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 349, 600, 58.17, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 462, 700, 66, 'Commerce', 'Gujarat Sec', 2017, 1509, 2280, 66.18, 'BCA', 'Maharaja Krishnakumarsinhji Bhavnagar University', 2020, 457, 700, 65.28, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 408, 500, 81.7, 2014, 'Central Board of Secondary Education ,Delhi(CBSE)', 366, 500, 73.2, 'Science(Mat', 'Central Boa', 2016, 1818, 2400, 75.75, 'BBA(CA)', 'St. Miras College for Girls Pune,Savitribai Phule Pune University', 2019, 570, 700, 81.42, 'MCA', 'Gujarat University/', 2022, 'No', '1', 'Microsoft Cyber Security Course'),
(0, 0, 400, 600, 66.5, 2015, 'Central Board of Secondary Education ,Delhi(CBSE)', 409, 700, 58, 'Science(Bio', 'Gujarat Sec', 2017, 3746, 4300, 89, 'BSc IT', 'GLS University', 2020, 509, 700, 72.71, 'MCA', 'Gujarat University /', 2020, 'No', '0', ''),
(0, 0, 318, 600, 53, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 419, 700, 60, 'Commerce', 'Gujarat Sec', 2017, 2470, 4200, 58.8, 'BCA', 'Veer Narmad South Gujarat University ', 2020, 358, 700, 51.14, 'MCA', 'Gujarat University /', 2022, 'No', '0', ''),
(0, 0, 416, 600, 69.33, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 586, 750, 78.13, 'Commerce', 'Gujarat Sec', 2017, 3479, 4200, 82.83, 'BCA', 'Gujarat University', 2020, 568, 700, 81.14, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 418, 600, 69.67, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 485, 750, 64.67, 'Commerce', 'Gujarat Sec', 2017, 2643, 4200, 62.93, 'BCA', 'Gujarat University', 2020, 543, 700, 77.57, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 430, 500, 86, 2014, ' Central Board of Secondary Education , Delhi (CBSE)', 375, 500, 74.9, 'Science(Bio', 'Central Boa', 2016, 3746, 4500, 83.2, 'BCA', 'Jai Narayan Vyas University , Jodhpur (Rajasthan)', 2020, 555, 700, 79.28, 'MCA', 'Gujarat University /', 2022, 'No', '1', ' Udemy certified Full Stack Web Developer and Python Programming Master'),
(0, 0, 298, 600, 49.67, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 433, 750, 57.73, 'Commerce', 'Gujarat Sec', 2017, 2665, 4200, 63.45, 'BCA', 'Veer Naramad South Gujarat University, Surat ', 2020, 466, 700, 66.57, 'MCA', 'Gujarat University /', 2022, 'No', '0', ''),
(0, 0, 505, 600, 84.16, 2013, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 419, 650, 64.46, 'Science', 'Gujarat Sec', 2015, 3136, 3900, 80.41, 'BSC IT', 'Shree M & N virani science college', 2020, 444, 700, 63.42, 'MCA', 'Gujarat University /', 2022, 'No', '1', ''),
(0, 0, 421, 600, 70.16, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 550, 750, 73.33, 'Commerce ', 'Gujarat Sec', 2017, 3451, 4200, 82.16, 'BCA', 'Gujarat University ', 2020, 592, 700, 84.57, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 391, 600, 65.17, 2014, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 459, 700, 65.57, 'Commerce ', 'Gujarat Sec', 2017, 2608, 4200, 62.1, 'BCom', 'Gujarat University ', 2020, 386, 700, 55.14, 'MCA', 'Gujarat University/', 2022, 'No', '1', ''),
(0, 0, 493, 600, 82.17, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 597, 750, 79.6, 'Commerce', 'Gujarat Sec', 2017, 1370, 2500, 54.8, 'BSc(CA & IT', 'Gujarat University ', 2020, 549, 700, 78.42, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 407, 600, 67.83, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 536, 750, 71.46, 'Commerce', 'Gujarat Sec', 2017, 3102, 4200, 73.85, 'BCA', 'Gujarat University', 2020, 487, 700, 69.57, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 390, 600, 65, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 517, 750, 68.93, 'Comerce', 'Gujarat Sec', 2017, 3460, 4300, 80.46, 'BSc IT', 'GLS UNIVERSITY', 2020, 490, 700, 70, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 389, 600, 64.83, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 557, 750, 74.26, 'Commerce', 'Gujarat Sec', 2017, 2909, 4200, 69.26, 'BCA', 'Gujarat University', 2021, 565, 700, 80.71, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 452, 600, 75.33, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 379, 650, 58.3, 'Science', 'Gujarat Sec', 2017, 2959, 4500, 65.75, 'BSc IT', 'Veer Narmad South Gujarat University', 2020, 589, 700, 84.14, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 381, 600, 63.5, 2014, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 453, 750, 60.4, 'Commerce', 'Gujarat Sec', 2016, 1898, 3600, 52.72, 'BBA(CA)', 'Savitribai Phule Pune University', 2019, 444, 700, 63.42, 'MCA', 'Gujarat University/', 2022, 'No', '1', ''),
(0, 0, 325, 600, 54.17, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 388, 700, 55.43, 'Commerce', 'Gujarat Sec', 2017, 2856, 4200, 68, 'BCA', 'Gujarat University', 2020, 455, 700, 65, 'MCA', 'Gujarat University/', 2022, 'No', '0', 'ITI : computer operator and programming Assistant'),
(0, 0, 408, 600, 68, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 591, 750, 78.8, 'Commerce', 'Gujarat Sec', 2017, 3631, 4000, 90.77, 'BCA', 'GLS University', 2020, 478, 700, 68.28, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 425, 600, 70.83, 2015, 'Gujarat Secondary & Higher Secondary Education Board, Gandhinagar, Gujarat', 460, 750, 61.33, 'Commerce', 'Gujarat Sec', 2017, 1058, 1360, 72.8, 'BCA', 'Ganpat University', 2020, 512, 700, 73.14, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 380, 600, 63.33, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 318, 650, 48.92, 'Science(Bio', 'Gujarat Sec', 2017, 2881, 4200, 68.59, 'BCA', 'Veer Narmad South Gujarat University', 2020, 509, 700, 72.71, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 488, 600, 81.33, 2014, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 404, 650, 62.15, 'Science(Mat', 'Gujarat Sec', 2016, 1962, 3000, 65.4, 'BCA', 'The Maharaja Sayajirao University of Baroda', 2019, 504, 700, 72, 'MCA', 'Gujarat University/', 2022, 'No', '', ''),
(0, 0, 322, 600, 53.67, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 530, 750, 70.67, 'Commerce', 'Gujarat Sec', 2017, 3859, 5200, 74.21, 'BCA', 'St. xaviers college Navrangpura (Autonomous)/Gujarat University', 2020, 506, 700, 72.28, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 361, 500, 72.2, 2015, 'Central Board of Secondary Education, Delhi (CBSE)', 355, 650, 54.62, 'Science(Mat', 'Gujarat Sec', 2017, 1264, 1440, 82.8, 'BCA', 'Kadi Sarva Vishwavidyalaya', 2020, 458, 700, 65.42, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 366, 600, 61, 2013, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 421, 750, 56.13, 'Commerce', 'Gujarat Sec', 2015, 2407, 4200, 57.3, 'BCom', 'Gujarat University', 2018, 405, 700, 57.85, 'MCA', 'Gujarat University/', 2022, 'No', '2', ''),
(0, 0, 345, 600, 57.5, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 335, 650, 51.53, 'Science(Bio', 'Gujarat Sec', 2017, 2609, 4200, 62.11, 'BCA', 'Veer Narmad South Gujarat University', 2020, 441, 700, 63, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 380, 600, 63.33, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 542, 750, 72.27, 'Commerce', 'Gujarat Sec', 2017, 3190, 4000, 79.75, 'BCA', 'GLS University', 2020, 474, 700, 67.71, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 439, 600, 73.17, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 339, 650, 52.15, 'Science(Mat', 'Gujarat Sec', 2017, 1954, 3000, 65.2, 'BCA', 'The Maharaja Sayajirao University of Baroda', 2020, 526, 700, 75.14, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 473, 600, 78.83, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 618, 750, 82.4, 'commerce', 'Gujarat Sec', 2017, 2722, 4200, 64.8, 'BCA', 'Gujarat University', 2020, 464, 700, 66.28, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 380, 600, 63.33, 2015, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 522, 750, 69.6, 'commerce', 'Gujarat Sec', 2017, 2818, 4200, 67.09, 'BCA', 'Gujarat University', 2020, 471, 700, 67.28, 'MCA', 'Gujarat University/', 2022, 'No', '0', ''),
(0, 0, 362, 600, 60.3, 2012, 'Board od Secoundary Education Andra Pradesh', 697, 1000, 69.7, 'Science(M.P', 'Board of in', 2014, 2269, 4200, 63.17, 'BCA', 'Veer Narmad South Gujarat University', 2020, 405, 700, 57.85, 'MCA', 'Gujarat University/', 2022, 'No', '', ''),
(0, 0, 446, 600, 74.33, 2014, 'Gujarat Secondary & Higher Secondary Education Board,Gandhinagar,Gujarat', 449, 600, 74.83, 'Science(Mat', 'Gujarat Sec', 2016, 3230, 3780, 85.44, 'BSC (Mathem', 'Veer Narmad South Gujarat University', 2019, 535, 700, 76.42, 'MCA', 'Gujarat University/', 2022, 'No', '1', ''),
(0, 80, 400, 500, 87, 2020, 'guj', 200, 500, 70, 'a', '2022', 0, 10, 10, 100, 'bsc', 'guj', 2025, 10, 10, 100, 'msc', 'guj', 2027, '', '0', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `stud_personal`
--

CREATE TABLE `stud_personal` (
  `sid` int(10) NOT NULL,
  `enum` int(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ph_num` int(20) NOT NULL,
  `block_num` varchar(10) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `landmark` varchar(200) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_personal`
--

INSERT INTO `stud_personal` (`sid`, `enum`, `course`, `name`, `email`, `ph_num`, `block_num`, `building_name`, `area`, `landmark`, `pincode`, `city`, `state`, `dob`, `gender`, `nationality`, `batch`, `timestamp`) VALUES
(1, 0, 'MCA', 'Mansi Bhat', 'mansibhat91@gmail.com', 2147483647, '', '', '', '', 0, '', '', '05/09/1997', '', '', '', '2024-06-22 17:21:12'),
(2, 0, 'MCA', 'Bhavnagari Azba Ashfaq', 'bhavnagriazba@gmail.com', 2147483647, '', '', '', '', 0, '', '', '05/11/1999', '', '', '', '2024-06-22 17:21:12'),
(3, 0, 'MCA', 'Chaudhari Nehakumari Balubhai', 'nehachaudhari.bca17@gmail.com', 2147483647, '', '', '', '', 0, '', '', '10/01/2000', '', '', '', '2024-06-22 17:21:12'),
(4, 0, 'MCA', 'Chavada Rajadip Nathabhai', 'rajdipchavda2141@gmail.com', 2147483647, '', '', '', '', 0, '', '', '10/07/2000', '', '', '', '2024-06-22 17:21:12'),
(5, 0, 'MCA', 'Avniba Dilubha Chudasama', 'avnibak074@gmail.com', 2147483647, '', '', '', '', 0, '', '', '16-02-1999', '', '', '', '2024-06-22 17:21:12'),
(6, 0, 'MCA', 'Aman Nareshkumar Devchandani', 'aman.devchandani@gmail.com', 2147483647, '', '', '', '', 0, '', '', '25-10-1999', '', '', '', '2024-06-22 17:21:12'),
(7, 0, 'MCA', 'Gamit Hemakshikumari Atulbhai', 'hemakshigamit31@gmail.com', 2147483647, '', '', '', '', 0, '', '', '31-08-2000', '', '', '', '2024-06-22 17:21:12'),
(8, 0, 'MCA', 'Gidwani Anjali Sureshkumar', 'gidwania99@gmail.com', 2147483647, '', '', '', '', 0, '', '', '01/09/1999', '', '', '', '2024-06-22 17:21:12'),
(9, 0, 'MCA', 'Gurram Navinbhai Krishnamurti', 'gnavink06@gmail.com', 2147483647, '', '', '', '', 0, '', '', '15-09-1999', '', '', '', '2024-06-22 17:21:12'),
(10, 0, 'MCA', 'Anjali Kulshrestha', 'kulshresthaanjali625@gmail.com', 2147483647, '', '', '', '', 0, '', '', '18-07-1998', '', '', '', '2024-06-22 17:21:12'),
(11, 0, 'MCA', 'Lad Brijen Girishbhai', 'brijulad7@gmail.com ', 2147483647, '', '', '', '', 0, '', '', '05/05/2000', '', '', '', '2024-06-22 17:21:12'),
(12, 0, 'MCA', 'Lalcheta Raj Ashokbhai', 'rajlalcheta32@gmail.com', 2147483647, '', '', '', '', 0, '', '', '24-12-1997', '', '', '', '2024-06-22 17:21:12'),
(13, 0, 'MCA', 'Luhar Prince Kumar Ghisulal', 'princemalvi097@gmail.com', 2147483647, '', '', '', '', 0, '', '', '09/07/2000', '', '', '', '2024-06-22 17:21:12'),
(14, 0, 'MCA', 'Macwan Abhishek Kiritbhai', 'abhishekmacwan342@gmail.com', 2147483647, '', '', '', '', 0, '', '', '24-07-1999', '', '', '', '2024-06-22 17:21:12'),
(15, 0, 'MCA', 'Mehta Poojan Jigarbhai', 'poojanmehta2000@gmail.com', 2147483647, '', '', '', '', 0, '', '', '10/06/2000', '', '', '', '2024-06-22 17:21:12'),
(16, 0, 'MCA', 'Makwana Abhiraj Pravinbhai', 'abhirajmakwana1220@gmail.com', 2147483647, '', '', '', '', 0, '', '', '12/02/2000', '', '', '', '2024-06-22 17:21:12'),
(17, 0, 'MCA', 'Mishra Harsh Rajnikant', 'harshmishra459@gmail.com', 2147483647, '', '', '', '', 0, '', '', '05/06/2000', '', '', '', '2024-06-22 17:21:12'),
(18, 0, 'MCA', 'Modi Rahul Subhashbhai ', 'modirahul5152@gmail.com ', 2147483647, '', '', '', '', 0, '', '', '02/04/1999', '', '', '', '2024-06-22 17:21:12'),
(19, 0, 'MCA', 'Nair Nandakrishnan Unnikrishnan', 'nandu.99.nair@gmail.com', 2147483647, '', '', '', '', 0, '', '', '21-07-1999', '', '', '', '2024-06-22 17:21:12'),
(20, 0, 'MCA', 'Pandey Ashwinkumar Hridayshankar', 'pandeyashwin31@gmail.com', 2147483647, '', '', '', '', 0, '', '', '17-02-1999', '', '', '', '2024-06-22 17:21:12'),
(21, 0, 'MCA', 'Parmar Kaushik Himmatbhai ', 'parmarkaushik2312@gmail.com', 2147483647, '', '', '', '', 0, '', '', '23-12-1999', '', '', '', '2024-06-22 17:21:12'),
(22, 0, 'MCA', 'Parmar Ronak Maheshbhai', 'ronakparmar533@gmail.com', 2147483647, '', '', '', '', 0, '', '', '16-05-2000', '', '', '', '2024-06-22 17:21:12'),
(23, 0, 'MCA', 'Patel Keyur Rajeshbhai', 'patelkeyur15699@gmail.com', 2147483647, '', '', '', '', 0, '', '', '15-06-1999', '', '', '', '2024-06-22 17:21:12'),
(24, 0, 'MCA', 'Pawar Mehul Parsotbhai', 'mpavar007@gmail.com', 2147483647, '', '', '', '', 0, '', '', '27-02-1998', '', '', '', '2024-06-22 17:21:12'),
(25, 0, 'MCA', 'Ankit Vipulbhai Prajapati', 'prajapatiankitv73@gmail.com', 2147483647, '', '', '', '', 0, '', '', '04/08/1999', '', '', '', '2024-06-22 17:21:12'),
(26, 0, 'MCA', 'Adib Puthawala', 'puthawalaadib@gmail.com', 2147483647, '', '', '', '', 0, '', '', '25-10-1999', '', '', '', '2024-06-22 17:21:12'),
(27, 0, 'MCA', 'Rai Prajwal Rajesh', 'raiprajwalpr1@gmail.com', 2147483647, '', '', '', '', 0, '', '', '06/11/1999', '', '', '', '2024-06-22 17:21:12'),
(28, 0, 'MCA', 'Rathod Ami Kantilal', 'amikrathod7@gmail.com', 2147483647, '', '', '', '', 0, '', '', '07/01/1998', '', '', '', '2024-06-22 17:21:12'),
(29, 0, 'MCA', 'Ravat Jitendra Kamleshbhai', 'ravatjit777@gmail.com', 2147483647, '', '', '', '', 0, '', '', '03/06/1999', '', '', '', '2024-06-22 17:21:12'),
(30, 0, 'MCA', 'Shah Dhairya Mukeshbhai', 'dhairyashah168@gmail.com', 2147483647, '', '', '', '', 0, '', '', '16-07-2000', '', '', '', '2024-06-22 17:21:12'),
(31, 0, 'MCA', 'Kunjal Manesh Simzia', 'kmsimzia007@gmail.com', 2147483647, '', '', '', '', 0, '', '', '11/07/1999', '', '', '', '2024-06-22 17:21:12'),
(32, 0, 'MCA', 'Solanki Jayshree Pravinbhai', 'jayshreesolanki199@gmail.com', 2147483647, '', '', '', '', 0, '', '', '02/09/1999', '', '', '', '2024-06-22 17:21:12'),
(33, 0, 'MCA', 'Soni Varshil Rakeshkumar', 'sonivarshil11@gmail.com', 2147483647, '', '', '', '', 0, '', '', '29-09-1999', '', '', '', '2024-06-22 17:21:12'),
(34, 0, 'MCA', 'Yennam mukesh Srinivas', 'mukeshkumardesigner10@gmail.com', 2147483647, '', '', '', '', 0, '', '', '10/06/1997', '', '', '', '2024-06-22 17:21:12'),
(35, 0, 'MCA', 'Tandel Bindiyaben Vasantbhai', 'bindiyatandel3009@gmail.com', 2147483647, '', '', '', '', 0, '', '', '7/21/1999', '', '', '', '2024-06-22 17:21:12'),
(41, 80, 'MCA', 'nency', 'nencysmakwana@gmail.com', 2147483647, '3', 'vraj', 'shela', 'shanti', 380058, 'Ahemdabad', 'gujarat', '2024-08-07', '', '', '2023-2024', '2024-08-04 17:51:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `stud_personal`
--
ALTER TABLE `stud_personal`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stud_personal`
--
ALTER TABLE `stud_personal`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
