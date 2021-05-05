-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 03:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyvote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `student_lrn` varchar(200) NOT NULL,
  `Fullname` varchar(200) NOT NULL,
  `Nickname` varchar(200) DEFAULT NULL,
  `Grade_level` varchar(10) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Date_of_Birth` varchar(10) DEFAULT NULL,
  `Contact_Number` int(11) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Partylist` int(5) DEFAULT NULL,
  `Position` varchar(200) NOT NULL,
  `Picture` varchar(200) NOT NULL,
  `vote` int(11) DEFAULT NULL,
  `no_vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `schoolName` varchar(50) NOT NULL,
  `schoolLogo` varchar(50) NOT NULL,
  `pages` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `status`, `schoolName`, `schoolLogo`, `pages`) VALUES
(0, 1, 'Binanuaanan National High school', 'Binanuaanan_National_High_School', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `political_party`
--

CREATE TABLE `political_party` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `name_out` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `vote_for` int(11) NOT NULL,
  `haveOne` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position`, `vote_for`, `haveOne`) VALUES
(1, 'President', 1, 0),
(2, 'Vice President', 1, 0),
(3, 'Secretary', 1, 0),
(4, 'Treasurer', 1, 0),
(5, 'Auditor', 1, 0),
(6, 'Public Information Officer', 1, 0),
(7, 'Peace Officer', 1, 0),
(8, 'Escort', 1, 0),
(9, 'Muse', 1, 0),
(10, 'Grade 8 Chairman', 8, 0),
(11, 'Grade 9 Chairman', 9, 0),
(12, 'Grade 10 Chairman', 10, 0),
(13, 'Grade 11 Chairman', 11, 0),
(14, 'Grade 12 Chairman', 12, 0),
(15, 'Grade 8 Representative', 0, 0),
(16, 'Grade 9 Representative', 0, 0),
(17, 'Grade 10 Representative', 0, 0),
(18, 'Grade 11 Representative', 0, 0),
(19, 'Grade 12 Representative', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `set_date`
--

CREATE TABLE `set_date` (
  `id` int(11) NOT NULL,
  `date_from` varchar(50) NOT NULL,
  `date_to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_date`
--

INSERT INTO `set_date` (`id`, `date_from`, `date_to`) VALUES
(1, 'QU0wU2NERG1LdDdoMk9LNkxrSUtIdz09', 'SU9WMTJPclErZFNaVUhhY0NvVFVHdz09');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` int(6) NOT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `text`) VALUES
(1, 'BE BRIGHT, VOTE FOR THE RIGHT'),
(2, 'LOGIN TO CONTINUE'),
(3, 'SUPREME STUDENT GOVERNMENT'),
(4, 'YOUR VOTE IS YOUR VOICE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `student_lrn` varchar(200) NOT NULL,
  `section` varchar(50) DEFAULT NULL,
  `grade_level` int(5) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `login_TIME` datetime DEFAULT NULL,
  `logout_TIME` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `student_lrn`, `section`, `grade_level`, `password`, `user_type`, `status`, `login_TIME`, `logout_TIME`) VALUES
(11010110, 'Teresita Nacario', 'dzRab3h0SGVUczZFSlBHS2pUYnVjQT09', NULL, NULL, 'enUvL0ZzLzhKNjV0dCs5NUZlKy9wQT09', 1, 2, '2020-02-27 09:30:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voted_data`
--

CREATE TABLE `voted_data` (
  `President` varchar(3) NOT NULL,
  `Vice_President` varchar(3) NOT NULL,
  `Secretary` varchar(3) NOT NULL,
  `Treasurer` varchar(3) NOT NULL,
  `Auditor` int(11) NOT NULL,
  `Public_Information_Officer` int(11) NOT NULL,
  `Peace_Officer` int(11) NOT NULL,
  `Grade_8_Chairman` int(11) NOT NULL,
  `Grade_9_Chairman` int(11) NOT NULL,
  `Grade_10_Chairman` int(11) NOT NULL,
  `Grade_11_Chairman` int(11) NOT NULL,
  `Grade_12_Chairman` int(11) NOT NULL,
  `Grade_8_Representative1` int(11) NOT NULL,
  `Grade_8_Representative2` int(11) NOT NULL,
  `Grade_9_Representative1` int(11) NOT NULL,
  `Grade_9_Representative2` int(11) NOT NULL,
  `Grade_10_Representative1` int(11) NOT NULL,
  `Grade_10_Representative2` int(11) NOT NULL,
  `Grade_11_Representative1` int(11) NOT NULL,
  `Grade_11_Representative2` int(11) NOT NULL,
  `Grade_12_Representative1` int(11) NOT NULL,
  `Grade_12_Representative2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidates_ibfk_1` (`Partylist`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `political_party`
--
ALTER TABLE `political_party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_date`
--
ALTER TABLE `set_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `political_party`
--
ALTER TABLE `political_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `set_date`
--
ALTER TABLE `set_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11010111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
