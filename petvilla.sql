-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2025 at 06:46 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_type` enum('pet','food') DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `product_type`, `quantity`) VALUES
(15, 5, 1, 'pet', 1),
(16, 5, 4, 'pet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(50) NOT NULL,
  `food-image` varchar(50) NOT NULL,
  `food-name` varchar(50) NOT NULL,
  `food-category` text NOT NULL,
  `food-size` varchar(10) NOT NULL,
  `food-mfd` varchar(10) NOT NULL,
  `food-exd` varchar(10) NOT NULL,
  `food-instruction` varchar(50) NOT NULL,
  `food-availability` text NOT NULL,
  `food-price` int(5) NOT NULL,
  `food-description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food-image`, `food-name`, `food-category`, `food-size`, `food-mfd`, `food-exd`, `food-instruction`, `food-availability`, `food-price`, `food-description`) VALUES
(1, '../Products/pedigree.webp', 'pedigreeee', 'Dog', '10kg', '12/4/23', '12/4/29', 'per day 100gram', 'Available', 9999, 'rat divash suta pehla');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `payment_status` enum('pending','paid') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `total_amount`, `payment_status`) VALUES
(25, 5, '2025-07-25 19:13:16', 54999.00, 'pending'),
(26, 5, '2025-07-26 09:14:44', 24999.00, 'pending'),
(27, 5, '2025-07-26 10:17:47', 109995.00, 'pending'),
(28, 5, '2025-07-27 10:55:02', 19998.00, 'pending'),
(29, 5, '2025-07-27 11:00:43', 30000.00, 'pending'),
(30, 5, '2025-07-27 11:04:56', 8999.00, 'pending'),
(31, 5, '2025-07-27 11:05:31', 24999.00, 'pending'),
(32, 5, '2025-07-28 08:48:16', 24999.00, 'pending'),
(33, 5, '2025-07-28 20:12:10', 83996.00, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_type` enum('pet','food') DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `product_type`, `quantity`, `price`) VALUES
(1, 25, 2, 'pet', 1, 30000.00),
(2, 25, 1, 'pet', 1, 24999.00),
(3, 26, 1, 'pet', 1, 24999.00),
(4, 27, 1, 'pet', 4, 24999.00),
(5, 27, 1, 'food', 1, 9999.00),
(6, 28, 1, 'food', 2, 9999.00),
(7, 29, 2, 'pet', 1, 30000.00),
(8, 30, 3, 'pet', 1, 8999.00),
(9, 31, 1, 'pet', 1, 24999.00),
(10, 32, 1, 'pet', 1, 24999.00),
(11, 33, 3, 'pet', 1, 8999.00),
(12, 33, 1, 'pet', 1, 24999.00),
(13, 33, 1, 'food', 2, 9999.00),
(14, 33, 2, 'pet', 1, 30000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pets_id` int(50) NOT NULL,
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

INSERT INTO `pets` (`pets_id`, `pet-image`, `pet-name`, `pet-breed`, `pet-age`, `pet-gender`, `pet-category`, `pet-description`, `pet-price`, `pet-availability`) VALUES
(1, '../Pets/dog1.jpg', 'Pitbull', 'American Pit Bull Terrier', '2 y', 'Male', 'Dog', 'The American Pit Bull Terrier is a dog breed recognized by the United Kennel Club and the American Dog Breeders Association, but not the American Kennel Club. It is a medium-sized, short-haired dog, o', 24999, 'Available'),
(2, '../Pets/cate1.webp', 'Cuttie', 'British Shorthair', '3 M', 'Female', 'Cat', 'The British Shorthair is the pedigree version of the traditional British domestic cat, with a distinctively stocky body, thick coat, and broad face. The most familiar colour variant is the \"British Bl', 30000, 'Available'),
(3, '../Pets/parraot1.jpg', 'mithhu', 'cockatiel', '2 m', 'Male', 'Bird', 'The cockatiel, also known as the weero/weiro or quarrion, is a medium-sizedparrot that is a member of its own branch of the cockatoo family endemic to Australia. They are prized as exotic household pe', 8999, 'Available'),
(4, '../Pets/dog1.jpg', 'BullDog', 'PitBull', '3 M', 'Female', 'Dog', 'The American Pit Bull Terrier is a dog breed recognized by the United Kennel Club and the American Dog Breeders Association, but not the American Kennel Club. It is a medium-sized, short-haired dog, o', 23999, 'Sold');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `Mno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `Mno`, `password`, `username`) VALUES
(5, '', '', 'pankajmm35@gmail.com', '8980441087', '$2y$10$OfJzduHEI8IvLZT3Ikt7refwOnX6UT2MBu61VQiwPmeUR/0ZA9BYm', 'pankaj@'),
(8, 'dipu', 'pankaj mangniya', 'haha@gmail.com', '8980441087', '$2y$10$o4PwaPSXrAQz5KdGpN..re/m7kdBhW1eUtu6PvCJozQCSWhc6vf56', 'dipu@'),
(9, 'ayush', 'r', 'haha@gmail.com', '333', '$2y$10$TppNrPVUgFNeno8TzI11aesh4wcwfUkNimRbqPw.ZQdsskXvo654K', 'ayush@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pets_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pets_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
