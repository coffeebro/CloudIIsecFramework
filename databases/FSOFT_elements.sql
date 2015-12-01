-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2015 at 01:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FSOFT_elements`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `aid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`aid`, `name`) VALUES
(1, 'Soy KB');

-- --------------------------------------------------------

--
-- Table structure for table `qspec`
--

CREATE TABLE IF NOT EXISTS `qspec` (
  `name` varchar(250) NOT NULL,
  `workflow` varchar(250) NOT NULL,
  `stage` int(2) NOT NULL,
  `throughput` varchar(20) DEFAULT NULL,
  `loss` float DEFAULT NULL,
  `errors` float DEFAULT NULL,
  `latency` varchar(20) DEFAULT NULL,
  `jitter` float DEFAULT NULL,
  `out_of_order` float DEFAULT NULL,
  `cores` int(2) DEFAULT NULL,
  `cpu_speed` varchar(20) DEFAULT NULL,
  `ram` varchar(20) DEFAULT NULL,
  `gpu_make` varchar(20) DEFAULT NULL,
  `gpu_model` varchar(20) DEFAULT NULL,
  `gpu_ram` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `read_speed` varchar(10) DEFAULT NULL,
  `write_speed` varchar(10) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qspec`
--

INSERT INTO `qspec` (`name`, `workflow`, `stage`, `throughput`, `loss`, `errors`, `latency`, `jitter`, `out_of_order`, `cores`, `cpu_speed`, `ram`, `gpu_make`, `gpu_model`, `gpu_ram`, `type`, `read_speed`, `write_speed`, `size`) VALUES
('Soy KB Standard Workflow Q-Spec (Compute Needs)', 'Test Soy KB Standard Workflow', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Compute Needs)', 'Test Soy KB Standard Workflow', 2, NULL, NULL, NULL, NULL, NULL, NULL, 12, '3.20 GHz', '128 GB', 'NVIDIA', 'QUADRO K6000', '6 GB', NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Compute Needs)', 'Test Soy KB Standard Workflow', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Default)', 'Test Soy KB Standard Workflow', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Default)', 'Test Soy KB Standard Workflow', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Default)', 'Test Soy KB Standard Workflow', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Network Needs)', 'Test Soy KB Standard Workflow', 1, '1 Gbps', NULL, 0, '50ms', 3.5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Network Needs)', 'Test Soy KB Standard Workflow', 2, '1 Gbps', 0, 0, '200 ms', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Network Needs)', 'Test Soy KB Standard Workflow', 3, '100 Mbps', 0, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow Q-Spec (Storage Needs)', 'Test Soy KB Standard Workflow', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SSD', '10 GB/s', '7.50 GB/s', NULL),
('Soy KB Standard Workflow Q-Spec (Storage Needs)', 'Test Soy KB Standard Workflow', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 TB'),
('Soy KB Standard Workflow Q-Spec (Storage Needs)', 'Test Soy KB Standard Workflow', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SSD', '10 GB/s', '7.5 GB/s', '10 TB');

-- --------------------------------------------------------

--
-- Table structure for table `sspec`
--

CREATE TABLE IF NOT EXISTS `sspec` (
  `name` varchar(250) NOT NULL,
  `workflow` varchar(250) NOT NULL,
  `stage` int(2) NOT NULL,
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
-- Dumping data for table `sspec`
--

INSERT INTO `sspec` (`name`, `workflow`, `stage`, `ac`, `au`, `ca`, `ia`, `sa`, `sc`, `si`, `at`, `cm`, `cp`, `ir`, `ma`, `mp`, `pe`, `pl`, `pm`, `ps`, `ra`) VALUES
('Soy KB Standard Workflow S-Spec (Assurance-level Security)', 'Test Soy KB Standard Workflow', 1, 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
('Soy KB Standard Workflow S-Spec (Assurance-level Security)', 'Test Soy KB Standard Workflow', 2, 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
('Soy KB Standard Workflow S-Spec (Assurance-level Security)', 'Test Soy KB Standard Workflow', 3, 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
('Soy KB Standard Workflow S-Spec (Default)', 'Test Soy KB Standard Workflow', 1, 'M', NULL, NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow S-Spec (Default)', 'Test Soy KB Standard Workflow', 2, 'M', NULL, NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow S-Spec (Default)', 'Test Soy KB Standard Workflow', 3, 'M', NULL, NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow S-Spec (High-level Security)', 'Test Soy KB Standard Workflow', 1, 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H'),
('Soy KB Standard Workflow S-Spec (High-level Security)', 'Test Soy KB Standard Workflow', 2, 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H'),
('Soy KB Standard Workflow S-Spec (High-level Security)', 'Test Soy KB Standard Workflow', 3, 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H'),
('Soy KB Standard Workflow S-Spec (Low-level Security)', 'Test Soy KB Standard Workflow', 1, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L'),
('Soy KB Standard Workflow S-Spec (Low-level Security)', 'Test Soy KB Standard Workflow', 2, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L'),
('Soy KB Standard Workflow S-Spec (Low-level Security)', 'Test Soy KB Standard Workflow', 3, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L'),
('Soy KB Standard Workflow S-Spec (Medium-level Security)', 'Test Soy KB Standard Workflow', 1, 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M'),
('Soy KB Standard Workflow S-Spec (Medium-level Security)', 'Test Soy KB Standard Workflow', 2, 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M'),
('Soy KB Standard Workflow S-Spec (Medium-level Security)', 'Test Soy KB Standard Workflow', 3, 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M'),
('Soy KB Standard Workflow S-Spec (No Security)', 'Test Soy KB Standard Workflow', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow S-Spec (No Security)', 'Test Soy KB Standard Workflow', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Soy KB Standard Workflow S-Spec (No Security)', 'Test Soy KB Standard Workflow', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workflows`
--

CREATE TABLE IF NOT EXISTS `workflows` (
  `wid` int(8) NOT NULL,
  `name` varchar(250) NOT NULL,
  `application` varchar(250) NOT NULL,
  `stages` int(2) NOT NULL DEFAULT '3',
  `origin` varchar(100) NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workflows`
--

INSERT INTO `workflows` (`wid`, `name`, `application`, `stages`, `origin`, `public`) VALUES
(1, 'Test Soy KB Standard Workflow', 'Soy KB', 3, 'test@test.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`);

--
-- Indexes for table `qspec`
--
ALTER TABLE `qspec`
  ADD PRIMARY KEY (`name`,`workflow`,`stage`),
  ADD KEY `workflow` (`workflow`);

--
-- Indexes for table `sspec`
--
ALTER TABLE `sspec`
  ADD PRIMARY KEY (`name`,`workflow`,`stage`),
  ADD KEY `wid` (`workflow`),
  ADD KEY `workflow` (`workflow`);

--
-- Indexes for table `workflows`
--
ALTER TABLE `workflows`
  ADD PRIMARY KEY (`wid`),
  ADD KEY `application` (`application`),
  ADD KEY `stages` (`stages`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `workflows`
--
ALTER TABLE `workflows`
  MODIFY `wid` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `workflows`
--
ALTER TABLE `workflows`
  ADD CONSTRAINT `workflows_ibfk_1` FOREIGN KEY (`application`) REFERENCES `applications` (`name`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
