-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 05:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offices`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `bid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`bid`, `phone`, `address`) VALUES
(4, '123123', 'btest');

-- --------------------------------------------------------

--
-- Table structure for table `btransactions`
--

CREATE TABLE `btransactions` (
  `transaction_serial` bigint(100) NOT NULL,
  `bid` int(10) NOT NULL,
  `bofficename` int(50) NOT NULL,
  `totaltransactions` int(100) NOT NULL,
  `totalamount` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `requested` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `circles`
--

CREATE TABLE `circles` (
  `cid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circles`
--

INSERT INTO `circles` (`cid`, `phone`, `address`) VALUES
(1, '123123', 'test address');

-- --------------------------------------------------------

--
-- Table structure for table `ctransactions`
--

CREATE TABLE `ctransactions` (
  `transaction_serial` bigint(50) NOT NULL,
  `cid` int(10) NOT NULL,
  `cofficename` varchar(50) NOT NULL,
  `totaltransactions` int(100) NOT NULL,
  `totalamount` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `requested` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dgs`
--

CREATE TABLE `dgs` (
  `dgid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dgs`
--

INSERT INTO `dgs` (`dgid`, `phone`, `address`) VALUES
(1, '123123', 'dgtest');

-- --------------------------------------------------------

--
-- Table structure for table `dpmgs`
--

CREATE TABLE `dpmgs` (
  `dpid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dpmgs`
--

INSERT INTO `dpmgs` (`dpid`, `phone`, `address`) VALUES
(1, '123123', 'test address');

-- --------------------------------------------------------

--
-- Table structure for table `dptransactions`
--

CREATE TABLE `dptransactions` (
  `transaction_serial` bigint(50) NOT NULL,
  `dpid` int(10) NOT NULL,
  `dpofficename` varchar(50) NOT NULL,
  `totaltransactions` int(100) NOT NULL,
  `totalamount` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `requested` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `heads`
--

CREATE TABLE `heads` (
  `hid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heads`
--

INSERT INTO `heads` (`hid`, `phone`, `address`) VALUES
(1, '123123', 'test address');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `name` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`name`, `uname`, `utype`, `pass`) VALUES
('Super Admin', 'adm', 'admin', 'a373eec3e32d1801034b71245a0b70cec1878c6a'),
('btest', 'btest', 'branch', 'af283c19cc8548a747082ff1d6a24d546399de12'),
('Uttara Branch', 'buttara', 'branch', '3537327efe20518347ae5f794cb2e56104cc7255'),
('Uttara Circle', 'cadm', 'circle', '76c7d4861055d60fce1d49aec90f5228ccc6961d'),
('ctest', 'ctest', 'circle', '014b4d83fe9ef4e5b47da5675a2ba52e71210a2a'),
('DG', 'dgadm', 'dg', 'e71b5b7a08d412150e75b08edfbc883703bc6d7d'),
('dgtest', 'dgtest', 'dg', '9de434430a468b7196494806cb0b48360d1a3cb8'),
('dptest', 'dptest', 'dpgm', 'd642af106e42caa22d659607e6823257e11a45e8'),
('dptest2', 'dptest2', 'dpmg', '8ff41d95434fadfddb4f52aca53de7150f548560'),
('Head', 'hadm', 'head', '2233e7ff470e4aa89307000c5fd4c4d2ecde215e'),
('htest', 'htest', 'head', 'e70227ee1fe22520832279d4d8e220086e8a663a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `btransactions`
--
ALTER TABLE `btransactions`
  ADD PRIMARY KEY (`transaction_serial`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `circles`
--
ALTER TABLE `circles`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ctransactions`
--
ALTER TABLE `ctransactions`
  ADD PRIMARY KEY (`transaction_serial`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `dgs`
--
ALTER TABLE `dgs`
  ADD PRIMARY KEY (`dgid`);

--
-- Indexes for table `dpmgs`
--
ALTER TABLE `dpmgs`
  ADD PRIMARY KEY (`dpid`);

--
-- Indexes for table `dptransactions`
--
ALTER TABLE `dptransactions`
  ADD PRIMARY KEY (`transaction_serial`),
  ADD KEY `dpid` (`dpid`);

--
-- Indexes for table `heads`
--
ALTER TABLE `heads`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `btransactions`
--
ALTER TABLE `btransactions`
  MODIFY `transaction_serial` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `circles`
--
ALTER TABLE `circles`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ctransactions`
--
ALTER TABLE `ctransactions`
  MODIFY `transaction_serial` bigint(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dgs`
--
ALTER TABLE `dgs`
  MODIFY `dgid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dpmgs`
--
ALTER TABLE `dpmgs`
  MODIFY `dpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dptransactions`
--
ALTER TABLE `dptransactions`
  MODIFY `transaction_serial` bigint(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heads`
--
ALTER TABLE `heads`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `btransactions`
--
ALTER TABLE `btransactions`
  ADD CONSTRAINT `btransactions_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `branches` (`bid`);

--
-- Constraints for table `ctransactions`
--
ALTER TABLE `ctransactions`
  ADD CONSTRAINT `ctransactions_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `circles` (`cid`);

--
-- Constraints for table `dptransactions`
--
ALTER TABLE `dptransactions`
  ADD CONSTRAINT `dptransactions_ibfk_1` FOREIGN KEY (`dpid`) REFERENCES `dpmgs` (`dpid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
