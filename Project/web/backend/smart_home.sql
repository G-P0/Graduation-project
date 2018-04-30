-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 10:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `action_id` int(11) NOT NULL,
  `action_name` varchar(250) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`action_id`, `action_name`, `value`) VALUES
(1, 'main_gate', 0),
(2, 'pool_cover', 0),
(3, 'room1_lights', 0),
(4, 'room2_lights', 0),
(5, 'room3_lights', 0),
(6, 'living_lights', 0),
(7, 'kitchen_lights', 0),
(8, 'device1', 0),
(9, 'device2', 0),
(10, 'device3', 0),
(11, 'alarm_system', 0),
(12, 'current_l1', 0),
(13, 'current_l2', 0),
(14, 'gas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `action_data`
--

CREATE TABLE `action_data` (
  `home_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `privillage` int(11) NOT NULL,
  `action_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action_data`
--

INSERT INTO `action_data` (`home_id`, `action_id`, `privillage`, `action_state`) VALUES
(1, 1, 0, 0),
(1, 2, 0, 0),
(1, 3, 0, 0),
(1, 4, 0, 0),
(1, 5, 0, 0),
(1, 6, 0, 0),
(1, 7, 0, 0),
(1, 8, 0, 0),
(1, 9, 0, 0),
(1, 10, 0, 0),
(1, 11, 1, 0),
(1, 12, 1, 0),
(1, 13, 1, 0),
(1, 14, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `public_key` varchar(250) NOT NULL,
  `super_key` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `phone_no` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `register_date` date DEFAULT NULL,
  `user_state` int(11) DEFAULT NULL,
  `privillage` int(11) DEFAULT NULL,
  `hash` varchar(250) DEFAULT NULL,
  `home_id` int(11) DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `birthdate`, `phone_no`, `gender`, `register_date`, `user_state`, `privillage`, `hash`, `home_id`) VALUES
(1, 'zahra', 'zza', 'a@a.com', '1234567as', '2018-04-12', 234567, 'female', NULL, NULL, NULL, NULL, -1),
(2, 'zahraa saied', 'zsb', 'asx@z.com', '567890as', '2018-04-11', 4567890, 'female', NULL, NULL, NULL, NULL, -1),
(3, 'zahrraaa', 'zzaa', 'admin@a.com', 'as1234567', '2018-04-01', 2345670, 'female', NULL, NULL, NULL, NULL, -1),
(11, 'moanes saied', 'mo2nes', 'm@m.com', 'abcd123456', '2018-04-03', 6789065, 'male', NULL, NULL, NULL, NULL, -1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `action_data`
--
ALTER TABLE `action_data`
  ADD PRIMARY KEY (`home_id`,`action_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
