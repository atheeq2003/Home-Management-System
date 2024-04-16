-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 05:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `home_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill_management`
--

CREATE TABLE `bill_management` (
  `home_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `amount` float NOT NULL,
  `duration_month` int(11) NOT NULL,
  `paynment_status` varchar(20) NOT NULL,
  `paynment_mode` varchar(20) NOT NULL,
  `notification_required` varchar(10) NOT NULL,
  `soft_copy` longtext NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `reference_no` varchar(20) NOT NULL,
  `unit_burn` float NOT NULL,
  `source_recharge_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dg_locker`
--

CREATE TABLE `dg_locker` (
  `home_id` varchar(20) NOT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `document_name` varchar(60) NOT NULL,
  `document` longtext NOT NULL,
  `date` date NOT NULL,
  `document_type` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `home_id` varchar(50) NOT NULL,
  `year` varchar(15) NOT NULL,
  `income_b` varchar(70) NOT NULL,
  `income_a` varchar(70) NOT NULL,
  `home_expenses_b` varchar(110) NOT NULL,
  `home_expenses_a` varchar(110) NOT NULL,
  `child_education_b` varchar(80) NOT NULL,
  `child_education_a` varchar(80) NOT NULL,
  `saving_b` varchar(70) NOT NULL,
  `saving_a` varchar(70) NOT NULL,
  `daily_living_b` varchar(100) NOT NULL,
  `daily_living_a` varchar(100) NOT NULL,
  `entertainment_b` varchar(80) NOT NULL,
  `entertainment_a` varchar(80) NOT NULL,
  `transportation_b` varchar(50) NOT NULL,
  `transportation_a` varchar(50) NOT NULL,
  `misce_expenses_b` varchar(70) NOT NULL,
  `misce_expenses_a` varchar(70) NOT NULL,
  `healthcare_b` varchar(30) NOT NULL,
  `healthcare_a` varchar(30) NOT NULL,
  `budget_b` varchar(30) NOT NULL,
  `budget_a` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `social_sites`
--

CREATE TABLE `social_sites` (
  `home_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `slack` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task_remainder`
--

CREATE TABLE `task_remainder` (
  `task_id` bigint(20) NOT NULL,
  `home_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `to_name` varchar(30) NOT NULL,
  `to_email` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `task` longtext NOT NULL,
  `file` longtext NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `home_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `image` longtext NOT NULL DEFAULT 'image/user.jpg',
  `email` varchar(40) NOT NULL,
  `mobileno` bigint(15) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `profession` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_information1`
--

CREATE TABLE `user_information1` (
  `home_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `work` varchar(50) NOT NULL,
  `language` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`home_id`,`user_id`);

--
-- Indexes for table `social_sites`
--
ALTER TABLE `social_sites`
  ADD PRIMARY KEY (`home_id`,`user_id`);

--
-- Indexes for table `task_remainder`
--
ALTER TABLE `task_remainder`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`home_id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task_remainder`
--
ALTER TABLE `task_remainder`
  MODIFY `task_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
