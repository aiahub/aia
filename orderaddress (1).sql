-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 04:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderaddress`
--

CREATE TABLE `orderaddress` (
  `fullname` varchar(32) NOT NULL,
  `mobileno` int(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `flatname` varchar(35) NOT NULL,
  `landmark` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderaddress`
--

INSERT INTO `orderaddress` (`fullname`, `mobileno`, `pincode`, `city`, `state`, `flatname`, `landmark`) VALUES
('hn', 0, 0, '', '', '', ''),
('hn', 0, 0, '', '', '', ''),
('Muhammed Anazil T A', 2147483647, 670645, 'mananthavady', 'kerela', 'thottunghal', 'near milma'),
('Muhammed Anazil T A', 2147483647, 670645, 'mananthavady', 'kereela', 'thottunghal', 'randenal'),
('Muhammed Anazil T A', 2147483647, 670645, 'mananthavady', 'kereela', 'thottunghal', 'randenal'),
('Muhammed Anazil T A', 2147483647, 670645, 'mananthavady', 'kereela', 'thottunghal', 'randenal'),
('nhn', 1234567891, 445, 'mananthavady', 'kerela', 'thottunghal', 'randenal'),
('', 0, 0, '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
