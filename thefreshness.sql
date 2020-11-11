-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 05:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thefreshness`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `fname`, `lname`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'charlie', 'harris', '', 'test@example.com', 'test', 'test'),
(2, 'charlie', 'harris', '', 'test@example.com', 'test', 'test'),
(3, 'charlie', 'harris', '', 'test@example.com', 'test', 'test'),
(4, 'charlie', 'harris', '', 'test@example.com', 'test', 'test'),
(5, 'charlie', 'harris', '', 'test@example.com', 'test', 'message'),
(6, 'vince', 'staples', '', 'norf@norf.biz', 'ayy', 'yep'),
(7, 'charlie', '', '', 'test@example.com', 'test', 'sanitized'),
(8, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(9, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(10, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(11, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(12, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(13, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(14, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(15, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(16, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized'),
(17, 'charlie', 'harris', '', 'test@example.com', 'final test', 'ay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
