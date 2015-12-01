-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2015 at 01:38 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FSOFT_security`
--

-- --------------------------------------------------------

--
-- Table structure for table `compute`
--

CREATE TABLE IF NOT EXISTS `compute` (
  `cid` int(8) NOT NULL,
  `resource` varchar(250) NOT NULL,
  `ac` text,
  `au` text,
  `ca` text,
  `ia` text,
  `sa` text,
  `sc` text,
  `si` text,
  `at` text,
  `cm` text,
  `cp` text,
  `ir` text,
  `ma` text,
  `mp` text,
  `pe` text,
  `pl` text,
  `pm` text,
  `ps` text,
  `ra` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE IF NOT EXISTS `network` (
  `nid` int(8) NOT NULL,
  `resource` varchar(250) NOT NULL,
  `ac` text,
  `au` text,
  `ca` text,
  `ia` text,
  `sa` text,
  `sc` text,
  `si` text,
  `at` text,
  `cm` text,
  `cp` text,
  `ir` text,
  `ma` text,
  `mp` text,
  `pe` text,
  `pl` text,
  `pm` text,
  `ps` text,
  `ra` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`name`) VALUES
('ISI'),
('TACC (Stampede)'),
('TACC (Wrangler)');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE IF NOT EXISTS `storage` (
  `sid` int(8) NOT NULL,
  `resource` varchar(250) NOT NULL,
  `ac` text,
  `au` text,
  `ca` text,
  `ia` text,
  `sa` text,
  `sc` text,
  `si` text,
  `at` text,
  `cm` text,
  `cp` text,
  `ir` text,
  `ma` text,
  `mp` text,
  `pe` text,
  `pl` text,
  `pm` text,
  `ps` text,
  `ra` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compute`
--
ALTER TABLE `compute`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `resource` (`resource`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `resource` (`resource`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`name`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `resource` (`resource`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compute`
--
ALTER TABLE `compute`
  ADD CONSTRAINT `compute_ibfk_1` FOREIGN KEY (`resource`) REFERENCES `resources` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `network`
--
ALTER TABLE `network`
  ADD CONSTRAINT `network_ibfk_1` FOREIGN KEY (`resource`) REFERENCES `resources` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `storage_ibfk_1` FOREIGN KEY (`resource`) REFERENCES `resources` (`name`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
