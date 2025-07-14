-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2025 at 07:22 AM
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
-- Database: `petvilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `SrNo` int(50) NOT NULL,
  `pet-image` varchar(50) NOT NULL,
  `pet-name` text NOT NULL,
  `pet-breed` text NOT NULL,
  `pet-age` varchar(3) NOT NULL,
  `pet-gender` text NOT NULL,
  `pet-category` text NOT NULL,
  `pet-description` varchar(200) NOT NULL,
  `pet-price` int(4) NOT NULL,
  `pet-availability` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`SrNo`, `pet-image`, `pet-name`, `pet-breed`, `pet-age`, `pet-gender`, `pet-category`, `pet-description`, `pet-price`, `pet-availability`) VALUES
(1, '../Pets/dog.jpg', 'golden retreiver', 'retriver', '2 y', 'Male', 'Dog', 'this is very freindy dog', 4999, 'Available'),
(2, '../Pets/bird1.jpg', 'callio bird', 'imaa', '2mo', 'Male', 'Bird', 'hjhsdjhjf', 888, 'Available'),
(3, '../Pets/cat1.jpg', 'meow', 'gulu', '89m', 'Male', 'Cat', 'sdgshdusgdufd', 999, 'Sold'),
(4, '../Pets/fish1.jpg', 'cat fidh', 'fidhh', '3ye', 'Male', 'Bird', 'ehfwiryfeuf', 8585, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SrNo` int(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `Mno` int(10) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SrNo`, `fname`, `lname`, `email`, `Mno`, `password`, `username`) VALUES
(1, 'pankaj', 'mm', 'hi@11', 8908, '$2y$10$YOPKSiq//tYxY15dAg2dNebRH9SKh.mWYclwK3A79c9EtbMRQkj2.', 'pankaj@'),
(2, 'jaydip', 'mm', 'bwhb@fgs', 898989, '$2y$10$bLHdGygZvd3RsO63YqfsL.xGi8DaJ3Msbmw3BMj0Xn4rAvAO8hqJO', 'jaydip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `SrNo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SrNo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
