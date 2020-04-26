-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 03:24 PM
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
  `address` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`bid`, `phone`, `address`, `userid`) VALUES
(7, '123123', 'test address', 18944);

-- --------------------------------------------------------

--
-- Table structure for table `btransactions`
--

CREATE TABLE `btransactions` (
  `transaction_serial` bigint(100) NOT NULL,
  `bid` int(10) NOT NULL,
  `bofficename` varchar(255) NOT NULL,
  `totaltransactions` int(100) NOT NULL,
  `totalamount` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `requested` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btransactions`
--

INSERT INTO `btransactions` (`transaction_serial`, `bid`, `bofficename`, `totaltransactions`, `totalamount`, `date`, `requested`) VALUES
(2, 7, 'Mirpur', 2400, 1000000, '2020-04-25 09:41:05.244125', 0);

-- --------------------------------------------------------

--
-- Table structure for table `circles`
--

CREATE TABLE `circles` (
  `cid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circles`
--

INSERT INTO `circles` (`cid`, `phone`, `address`, `userid`) VALUES
(2, '123123', 'test address', 973275);

-- --------------------------------------------------------

--
-- Table structure for table `ctransactions`
--

CREATE TABLE `ctransactions` (
  `transaction_serial` bigint(50) NOT NULL,
  `cid` int(10) NOT NULL,
  `cofficename` varchar(255) NOT NULL,
  `totaltransactions` int(100) NOT NULL,
  `totalamount` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `requested` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctransactions`
--

INSERT INTO `ctransactions` (`transaction_serial`, `cid`, `cofficename`, `totaltransactions`, `totalamount`, `date`, `requested`) VALUES
(1, 2, 'Uttara', 500, 3000000, '2020-04-24 11:04:54.295561', 0),
(2, 2, 'Uttara', 300, 1500000, '2020-04-25 10:21:44.141682', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dgs`
--

CREATE TABLE `dgs` (
  `dgid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dgs`
--

INSERT INTO `dgs` (`dgid`, `phone`, `address`, `userid`) VALUES
(3, '123123', 'test address', 877026);

-- --------------------------------------------------------

--
-- Table structure for table `dpmgs`
--

CREATE TABLE `dpmgs` (
  `dpid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dpmgs`
--

INSERT INTO `dpmgs` (`dpid`, `phone`, `address`, `userid`) VALUES
(2, '123123', 'test address', 946916);

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

--
-- Dumping data for table `dptransactions`
--

INSERT INTO `dptransactions` (`transaction_serial`, `dpid`, `dpofficename`, `totaltransactions`, `totalamount`, `date`, `requested`) VALUES
(1, 2, 'Uttara', 60, 4000000, '2020-04-24 11:08:42.868371', 0),
(2, 2, 'Uttara', 220, 1200000, '2020-04-25 11:17:09.449820', 0);

-- --------------------------------------------------------

--
-- Table structure for table `heads`
--

CREATE TABLE `heads` (
  `hid` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heads`
--

INSERT INTO `heads` (`hid`, `phone`, `address`, `userid`) VALUES
(3, '123123', 'test address', 512595);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `userid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`userid`, `uname`, `name`, `utype`, `pass`) VALUES
(1, 'adm', 'Super Admin', 'admin', 'a373eec3e32d1801034b71245a0b70cec1878c6a'),
(18944, 'btest', 'Test Branch', 'branch', 'af283c19cc8548a747082ff1d6a24d546399de12'),
(512595, 'htest', 'Test Head', 'head', 'e70227ee1fe22520832279d4d8e220086e8a663a'),
(877026, 'dgtest', 'Test DG', 'dg', '9de434430a468b7196494806cb0b48360d1a3cb8'),
(946916, 'dptest', 'Test DPMG', 'dpmg', 'd642af106e42caa22d659607e6823257e11a45e8'),
(973275, 'ctest', 'Test Circle', 'circle', '014b4d83fe9ef4e5b47da5675a2ba52e71210a2a');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgid` int(10) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `sender_utype` varchar(10) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `receiver_utype` varchar(10) NOT NULL,
  `msgbody` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `sender`, `sender_utype`, `receiver`, `receiver_utype`, `msgbody`, `date`) VALUES
(72060706, 'dptest', 'dpmg', 'btest', 'branch', 'Test message to branch office user btest from dpmg office user dptest.    ', '2020-04-26'),
(191010050, 'htest', 'head', 'btest', 'branch', 'Test message to branch office user btest from head office user htest.', '2020-04-26'),
(397323911, 'ctest', 'circle', 'htest', 'head', 'From circle admin ctest to Head admin htest test message.', '2020-04-26'),
(499190141, 'dgtest', 'dg', 'htest', 'head', 'Test message from dg admin dgtest to Head admin htest.\r\nAll the best!\r\nGood Luck!\r\nBye!', '2020-04-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `userid` (`userid`);

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
  ADD PRIMARY KEY (`cid`),
  ADD KEY `userid` (`userid`);

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
  ADD PRIMARY KEY (`dgid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `dpmgs`
--
ALTER TABLE `dpmgs`
  ADD PRIMARY KEY (`dpid`),
  ADD KEY `userid` (`userid`);

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
  ADD PRIMARY KEY (`hid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `btransactions`
--
ALTER TABLE `btransactions`
  MODIFY `transaction_serial` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `circles`
--
ALTER TABLE `circles`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ctransactions`
--
ALTER TABLE `ctransactions`
  MODIFY `transaction_serial` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dgs`
--
ALTER TABLE `dgs`
  MODIFY `dgid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dpmgs`
--
ALTER TABLE `dpmgs`
  MODIFY `dpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dptransactions`
--
ALTER TABLE `dptransactions`
  MODIFY `transaction_serial` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `heads`
--
ALTER TABLE `heads`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=695392883;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `logs` (`userid`);

--
-- Constraints for table `btransactions`
--
ALTER TABLE `btransactions`
  ADD CONSTRAINT `btransactions_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `branches` (`bid`);

--
-- Constraints for table `circles`
--
ALTER TABLE `circles`
  ADD CONSTRAINT `circles_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `logs` (`userid`);

--
-- Constraints for table `ctransactions`
--
ALTER TABLE `ctransactions`
  ADD CONSTRAINT `ctransactions_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `circles` (`cid`);

--
-- Constraints for table `dgs`
--
ALTER TABLE `dgs`
  ADD CONSTRAINT `dgs_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `logs` (`userid`);

--
-- Constraints for table `dpmgs`
--
ALTER TABLE `dpmgs`
  ADD CONSTRAINT `dpmgs_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `logs` (`userid`);

--
-- Constraints for table `dptransactions`
--
ALTER TABLE `dptransactions`
  ADD CONSTRAINT `dptransactions_ibfk_1` FOREIGN KEY (`dpid`) REFERENCES `dpmgs` (`dpid`);

--
-- Constraints for table `heads`
--
ALTER TABLE `heads`
  ADD CONSTRAINT `heads_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `logs` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
