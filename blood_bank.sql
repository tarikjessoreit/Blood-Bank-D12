-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 10:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_donate_date`
--

CREATE TABLE `b_donate_date` (
  `ID` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `donation_date` datetime NOT NULL,
  `donation_note` text NOT NULL,
  `donation_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `u_added_date` datetime NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_blood_group` varchar(3) NOT NULL,
  `u_village` varchar(100) NOT NULL,
  `u_thana` varchar(100) NOT NULL,
  `u_zilla` varchar(100) NOT NULL,
  `u_division` varchar(20) NOT NULL,
  `u_phone_no` varchar(18) NOT NULL,
  `u_email` text NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_profile_url` text NOT NULL,
  `u_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `u_added_date`, `u_name`, `u_username`, `u_blood_group`, `u_village`, `u_thana`, `u_zilla`, `u_division`, `u_phone_no`, `u_email`, `u_password`, `u_profile_url`, `u_status`) VALUES
(1, '2022-07-30 13:27:31', 'rohim', 'rohin', 'O+', 'Jashore', 'Jessore', '', '', '', '', '', '', 'active'),
(2, '2022-07-30 14:07:21', 'tarik', 'tarik', 'O+', 'Tularampur', '', 'Narail', 'Khulna', '01884414000', 'tarik@jessoreit.net', '12345', '', 'active'),
(3, '2022-08-01 13:07:27', 'nahid Bro', 'nahid', 'B+', 'Jessore', '', 'Jessore', 'Khulna', '0188888888', 'nahid@xyz.com', '12345', '', 'active'),
(4, '2022-08-01 13:20:36', 'Mr Jamil', 'jamil', 'O+', 'borishal', '', 'borishal', 'Barisal Division', '01998800019', 'jamil@gmail.com', '123456789', '', 'active'),
(5, '2022-08-01 13:21:54', 'root', 'root', 'B+', 'Tularampur', '', 'Narail', 'Dhaka Division', '0177880000', 'jamil@abcd.com', '121231', '', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_donate_date`
--
ALTER TABLE `b_donate_date`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `u_username` (`u_username`),
  ADD UNIQUE KEY `u_phone_no` (`u_phone_no`,`u_email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_donate_date`
--
ALTER TABLE `b_donate_date`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
