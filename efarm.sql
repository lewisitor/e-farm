-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 08:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `efarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE IF NOT EXISTS `available` (
  `Produce_name` varchar(20) NOT NULL,
  `Quality` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Market_price` float NOT NULL,
  UNIQUE KEY `Produce_name` (`Produce_name`,`Quality`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`Produce_name`, `Quality`, `Quantity`, `Market_price`) VALUES
('', '', 0, 0),
('Carrot', 'Good', 23, 12.1),
('Chilly', 'Good', 23, 2.2),
('Lady Finger', 'Best', 57, 80),
('Onion', 'Best', 4, 110),
('Onion', 'Good', 100, 55),
('Potato', 'Best', 12, 73.7),
('Potato', 'Good', 22, 12.1),
('Rice', 'Best', 50, 66),
('Tomato', 'Best', 40, 132),
('Wheat', 'Best', 33, 24.2);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mob` int(11) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `uname` varchar(20) NOT NULL DEFAULT '',
  `pass` varchar(10) DEFAULT NULL,
  `retype` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`uid`,`uname`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`uid`, `fname`, `lname`, `gender`, `mob`, `role`, `address`, `uname`, `pass`, `retype`) VALUES
(25, 'Ebaneck', 'Atuh', 'option1', 675257808, 'farmer', 'Molyko', 'claude', 'password', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ordid` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) DEFAULT NULL,
  `produce_name` varchar(20) DEFAULT NULL,
  `quality` varchar(8) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`ordid`),
  KEY `vid` (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordid`, `vid`, `produce_name`, `quality`, `quantity`, `total_price`, `date`, `status`) VALUES
(16, 4, 'Carrot', 'Good', 4, 48, '2016-05-19', 'cancell'),
(17, 4, 'Rice', 'Best', 22, 1452, '2016-05-21', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `pay_id` int(4) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `date_of_transfer` date NOT NULL,
  `ammount` int(20) NOT NULL,
  `card_no` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `uid` int(10) NOT NULL,
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(20) DEFAULT NULL,
  `quality` varchar(20) DEFAULT NULL,
  `quantity` int(10) NOT NULL,
  `market_price` int(11) DEFAULT NULL,
  `expected_price` int(11) DEFAULT NULL,
  `status` varchar(9) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`uid`, `sid`, `prod_name`, `quality`, `quantity`, `market_price`, `expected_price`, `status`) VALUES
(24, 2, 'Carrot', 'Best', 22, 12, 11, 'accepted'),
(24, 3, 'Potato', 'Best', 12, 74, 67, 'accepted'),
(24, 7, 'Chilly', 'Good', 23, 2, 2, 'accepted'),
(24, 8, 'Onion', 'Normal', 22, 12, 11, 'rejected'),
(24, 10, 'Wheat', 'Best', 33, 12, 11, 'pending'),
(25, 11, 'Carrot', 'Normal', 2, 220, 200, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mob` int(11) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `uname` varchar(20) NOT NULL DEFAULT '',
  `pass` varchar(20) DEFAULT NULL,
  `retype` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`vid`,`uname`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vid`, `fname`, `lname`, `gender`, `mob`, `role`, `address`, `uname`, `pass`, `retype`) VALUES
(4, 'roi', 'le', 'option2', 123456789, 'vendor', 'Bamenda', 'roi', 'admin123', 'admin123'),
(5, 'Ebaneck1', 'Atuh', 'option1', 345678733, 'vendor', 'Checkpoint', 'vendor', 'password', 'password');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `vendor` (`vid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
