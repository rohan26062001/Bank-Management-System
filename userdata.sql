-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 01:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `From Account Of` varchar(50) NOT NULL,
  `To Account Of` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`From Account Of`, `To Account Of`, `Amount`) VALUES
('Swapnomoy Das', 'Rohan Das', 69);

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`Name`, `Email`, `Balance`) VALUES
('Rohan Das', 'rohan@gmail.com', 10069),
('Rupak Majumder', 'rupak@gmail.com', 8900),
('Ayush Gupta', 'ayush@gmail.com', 5600),
('Tirtharaaj Chakraborty', 'tirtha@gmail.com', 20000),
('Pritika Pal', 'pritika@gmail.com', 8000),
('Swapnomoy Das', 'swapnomoy@gmail.com', 6900),
('Soham Maitra', 'soham@gamil.com', 30000),
('Aishik Sarkar', 'aishik@gmail.com', 9800),
('Himeli Pandit', 'himeli@gmail.com', 8600),
('Dipak Bhowmick', 'dipak@gmail.com', 2500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
