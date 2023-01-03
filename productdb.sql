-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2022 at 03:40 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CstID` int(11) NOT NULL AUTO_INCREMENT,
  `CstFirstName` varchar(50) NOT NULL,
  `CstLastName` varchar(50) NOT NULL,
  `CstEmail` varchar(100) NOT NULL,
  `CstLocalAddress` varchar(100) NOT NULL,
  `CstRegDate` date NOT NULL,
  `CstUsername` varchar(50) NOT NULL,
  `CstPassword` varchar(50) NOT NULL,
  PRIMARY KEY (`CstID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CstID`, `CstFirstName`, `CstLastName`, `CstEmail`, `CstLocalAddress`, `CstRegDate`, `CstUsername`, `CstPassword`) VALUES
(1, 'THiran', 'Naleendra', 'wgthiran@gmail.com', 'Polwaththagewaththa,Medakotawila', '2022-03-17', 'admin', 'admin'),
(2, 'kavindu', 'samarawichkara', 'a@gmail.com', 'Polwaththagewaththa,Medakotawila', '2022-03-17', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

DROP TABLE IF EXISTS `producttb`;
CREATE TABLE IF NOT EXISTS `producttb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'ram', 2000, 0x2e2f75706c6f61642f70312e706e67),
(2, 'Intel core i9', 15600, 0x2e2f75706c6f61642f70322e706e67),
(3, 'Intel core i7', 14300, 0x2e2f75706c6f61642f70332e706e67),
(4, 'Amd Ryzen 5', 76000, 0x2e2f75706c6f61642f70342e706e67),
(5, 'Intel core i5', 84000, 0x2e2f75706c6f61642f70352e706e67),
(6, 'Hyperx 16GB', 32000, 0x2e2f75706c6f61642f72312e706e67),
(7, 'Hyperx 8GB', 22000, 0x2e2f75706c6f61642f72312e706e67),
(8, 'RTX 2060 12GB', 183000, 0x2e2f75706c6f61642f76312e706e67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
