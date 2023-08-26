-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 07:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parksite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `seid` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`seid`, `email`, `pass`, `designation`) VALUES
(1, 'admin@gmail.com', 'adminadmin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `vo` int(11) DEFAULT NULL,
  `go` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES
('William Jefferson Mondol', 'shovon2k2k@gmail.com', '01730138692', 'help me, im under the water'),
('Fardin Ahsan Shafi', 'fardin467@gmail.com', '0191199222', 'attention pickpockeeeeet'),
('Shanjidul Hasan Shajid', 'karode4067@khaxan.com', '0191199222', 'my thoughts are as empty as my ass');

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `user` varchar(20) NOT NULL,
  `cut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`user`, `cut`) VALUES
('company', 15),
('supervisor', 30),
('Garage Owner', 50);

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `garageid` int(11) NOT NULL,
  `garsize` varchar(100) NOT NULL,
  `garcap` varchar(100) NOT NULL,
  `garadr` varchar(100) NOT NULL,
  `availability` varchar(100) DEFAULT NULL,
  `caraccept` int(11) DEFAULT NULL,
  `bikeaccept` int(11) DEFAULT NULL,
  `pickupaccept` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `go`
--

CREATE TABLE `go` (
  `goid` int(11) NOT NULL,
  `supnid` varchar(30) NOT NULL,
  `garageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `city` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `base` int(11) NOT NULL,
  `hourly` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`city`, `area`, `base`, `hourly`) VALUES
('dhaka', 'taltola', 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `regdate` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nid` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `vtype` varchar(200) DEFAULT NULL,
  `vmodel` varchar(200) DEFAULT NULL,
  `vreg` varchar(200) DEFAULT NULL,
  `vlisc` varchar(200) DEFAULT NULL,
  `garsize` varchar(200) DEFAULT NULL,
  `garcap` varchar(200) DEFAULT NULL,
  `garadr` varchar(200) DEFAULT NULL,
  `supnid` varchar(200) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `seid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `sid` int(11) NOT NULL,
  `workhrs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleid` int(11) NOT NULL,
  `vehicleType` varchar(100) NOT NULL,
  `vehicleModel` varchar(32) NOT NULL,
  `vehicleReg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vo`
--

CREATE TABLE `vo` (
  `void` int(11) NOT NULL,
  `licenseNo` varchar(30) NOT NULL,
  `vehicleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`seid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`),
  ADD KEY `fk_vo_void` (`vo`),
  ADD KEY `fk_go_goid` (`go`),
  ADD KEY `fk_s_sid` (`s`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`garageid`);

--
-- Indexes for table `go`
--
ALTER TABLE `go`
  ADD PRIMARY KEY (`goid`),
  ADD KEY `fk_garageid_garageid` (`garageid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `fk_seid_seid` (`seid`);

--
-- Indexes for table `super`
--
ALTER TABLE `super`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleid`);

--
-- Indexes for table `vo`
--
ALTER TABLE `vo`
  ADD PRIMARY KEY (`void`),
  ADD KEY `fk_vehicleid_vehicleid` (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `seid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `garageid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `go`
--
ALTER TABLE `go`
  MODIFY `goid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super`
--
ALTER TABLE `super`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vo`
--
ALTER TABLE `vo`
  MODIFY `void` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_go_goid` FOREIGN KEY (`go`) REFERENCES `go` (`goid`),
  ADD CONSTRAINT `fk_s_sid` FOREIGN KEY (`s`) REFERENCES `super` (`sid`),
  ADD CONSTRAINT `fk_vo_void` FOREIGN KEY (`vo`) REFERENCES `vo` (`void`);

--
-- Constraints for table `go`
--
ALTER TABLE `go`
  ADD CONSTRAINT `fk_garageid_garageid` FOREIGN KEY (`garageid`) REFERENCES `garage` (`garageid`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `fk_seid_seid` FOREIGN KEY (`seid`) REFERENCES `admin` (`seid`);

--
-- Constraints for table `vo`
--
ALTER TABLE `vo`
  ADD CONSTRAINT `fk_vehicleid_vehicleid` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`vehicleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
