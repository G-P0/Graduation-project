-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 07:45 PM
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
-- Database: `awebarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_settings`
--

CREATE TABLE `main_settings` (
  `site_name` varchar(200) NOT NULL,
  `site_url` varchar(200) NOT NULL,
  `site_desc` text NOT NULL,
  `site_email` varchar(100) NOT NULL,
  `site_tags` text NOT NULL,
  `site_homepanel` text NOT NULL,
  `fb` varchar(200) NOT NULL,
  `tw` varchar(250) NOT NULL,
  `rss` varchar(200) NOT NULL,
  `yt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_content` longtext NOT NULL,
  `page_status` int(2) NOT NULL,
  `page_visits` int(11) NOT NULL,
  `page_type` int(11) NOT NULL,
  `page_image` varchar(250) NOT NULL,
  `page_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'ali', 'ali', 'ali@blabla.com', '1234'),
(2, 'omar', 'omar', 'omar@blabla.com', '567'),
(3, 'admin', 'admin', 'ad@admin.com', 'abc'),
(4, 'za', 'zaza', 'zxc@blabla.com', 'zxc'),
(5, 'zazz', 'zazza', 'zzxxc@blabla.com', 'zxcxc'),
(6, 'zahraa', 'zahraaa', 'zz@zza.com', '1234'),
(9, 'mo2nes', 'mo2nes', 'm@m.com', '987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
