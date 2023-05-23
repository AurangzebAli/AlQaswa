-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 09:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alqaswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`CustomerId` int(11) NOT NULL,
  `CName` varchar(250) DEFAULT NULL,
  `CAddress` varchar(250) DEFAULT NULL,
  `CPhone` varchar(250) DEFAULT NULL,
  `CNIC` varchar(250) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CName`, `CAddress`, `CPhone`, `CNIC`, `Date`) VALUES
(1, 'hamza', 'sukkur', '0321123333', '123455677', '2018-06-30'),
(2, 'Muneeb', 'karachi', '03342853795', '12344444', '2018-06-30'),
(3, 'Muneeb', 'Karachi', '03343853795', '-', '2018-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Username` text NOT NULL,
  `Password` char(32) NOT NULL,
  `loggedin` tinyint(1) NOT NULL,
`UserId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `loggedin`, `UserId`) VALUES
('muneeb', '5e4304d5bee705bf508e7836b27c5a14', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `Date` date NOT NULL,
  `NoBottlesDelieverd` int(11) NOT NULL,
  `ReturnBttlesReceived` int(11) NOT NULL,
  `DelieveryDate` date NOT NULL,
  `TotalAmount` bigint(20) NOT NULL,
  `ReceivedAmount` bigint(20) NOT NULL,
  `AmountBalance` bigint(20) NOT NULL,
  `Remarks` varchar(250) NOT NULL,
`VNo` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `AdvanceAmount` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`Date`, `NoBottlesDelieverd`, `ReturnBttlesReceived`, `DelieveryDate`, `TotalAmount`, `ReceivedAmount`, `AmountBalance`, `Remarks`, `VNo`, `CustomerId`, `AdvanceAmount`) VALUES
('2018-06-30', 5, 2, '2018-06-30', 150, 100, 750, 'pending', 1, 1, ''),
('2018-08-22', 5, 5, '2018-08-22', 60, 0, 300, '', 2, 3, ''),
('2018-08-22', 5, 2, '2018-08-23', 60, 0, 300, '', 3, 3, ''),
('2018-08-22', 0, 0, '2018-08-01', 0, 2500, 0, '', 4, 3, ''),
('2018-08-23', 0, 0, '2018-08-22', 0, 0, 0, 'bottles amount', 5, 3, '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
 ADD PRIMARY KEY (`VNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
MODIFY `VNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
