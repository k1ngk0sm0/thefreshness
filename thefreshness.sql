-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 10:04 PM
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
  `message` text NOT NULL,
  `message_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `fname`, `lname`, `phone`, `email`, `subject`, `message`, `message_date`) VALUES
(1, 'charlie', 'harris', '', 'test@example.com', 'test', 'test', '2020-11-17 10:43:45'),
(2, 'charlie', 'harris', '', 'test@example.com', 'test', 'test', '2020-11-17 10:43:45'),
(3, 'charlie', 'harris', '', 'test@example.com', 'test', 'test', '2020-11-17 10:43:45'),
(4, 'charlie', 'harris', '', 'test@example.com', 'test', 'test', '2020-11-17 10:43:45'),
(5, 'charlie', 'harris', '', 'test@example.com', 'test', 'message', '2020-11-17 10:43:45'),
(6, 'vince', 'staples', '', 'norf@norf.biz', 'ayy', 'yep', '2020-11-17 10:43:45'),
(7, 'charlie', '', '', 'test@example.com', 'test', 'sanitized', '2020-11-17 10:43:45'),
(8, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(9, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(10, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(11, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(12, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(13, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(14, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(15, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(16, 'charlie', 'harris', '', 'test@example.com', 'lname', 'sanitized', '2020-11-17 10:43:45'),
(17, 'charlie', 'harris', '', 'test@example.com', 'final test', 'ay', '2020-11-17 10:43:45'),
(18, 'charlie', 'harris', '', 'test@example.com', 'test', 'test', '2020-11-17 10:43:45'),
(19, 'bob', 'boberino', '3368675309', 'thebobster@gmail.com', 'hello', 'hey', '2020-11-17 10:43:45'),
(20, 'bob', 'boberino', '3368675309', 'thebobster@gmail.com', 'dasdf', 'asdf', '2020-11-17 10:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` char(76) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(12) NOT NULL,
  `registrationDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `address`, `city`, `state`, `zip`, `registrationDate`) VALUES
(1, 'asdfdsaf', 'asdfsdfa@bob.com', '$2y$10$BjY7rVK7Jq5xemtc4HBf0u1IPJf23Xa3VRP9U/25g4h4aTVUUudZK', 'dsafsdfda', 'asdfsdf', 'KS', 'sadf', '2020-11-19 09:50:10'),
(2, 'charlie', 'cfharris@gtcc.edu', '$2y$10$MH8VmgE5sG69B1tOthdOU.5uKnTZP/woUlgWgpK2vEG/t.5vQn6ta', '1261 Dovershire Pl', 'High Point', 'NC', '27262', '2020-11-19 10:31:35'),
(3, 'new user', 'new@user.com', '$2y$10$ECNJpU4E9OfgreJWl8WU5.6ZNJks7M1DK3L6u4vGvt/.QNDnV7hui', '1261 Dovershire Pl', 'High Point', 'NC', '27262', '2020-11-19 11:15:34'),
(4, 'newuser', 'cfharris@gtcc.edu', '$2y$10$iFrsQrfBeLB1lLzFjEVSzuplIRx1v/VJLNuLnkpEXsP.bzLBJy6IC', '1261 Dovershire Pl', 'High Point', 'NC', '27262', '2020-11-20 15:51:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
