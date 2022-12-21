-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2022 at 11:18 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `item_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `item_brand` varchar(30) COLLATE utf8_bin NOT NULL,
  `item_id` int(10) NOT NULL,
  `item_type` varchar(30) COLLATE utf8_bin NOT NULL,
  `quantity` int(30) NOT NULL,
  `production_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `price` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item_name`, `item_brand`, `item_id`, `item_type`, `quantity`, `production_date`, `expiry_date`, `price`) VALUES
('Beans', 'Food', 2000, 'Food', 34, '2022-12-01', '2022-11-20', '$3000000'),
('Iphone 14 plus', 'Apple', 1005, 'Electronics', 6789, '2022-11-10', '2023-01-27', '$1000'),
('Sprite', 'Coca Cola', 1355491306, 'Drink', 450, '2022-12-16', '2023-02-18', '$0.9'),
('Harrison', 'Akunne', 1003, 'Cat', 45, '2022-11-17', '2022-11-11', '$500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
