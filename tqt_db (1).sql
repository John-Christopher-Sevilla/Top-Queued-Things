-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 07:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tqt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` text NOT NULL COMMENT 'C = cart\r\nO = ordered\r\nD = delivered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `item_id`, `cat_id`, `user_id`, `qty`, `status`) VALUES
(1, 1, 1, 1, 2, 'C'),
(2, 2, 1, 1, 1, 'C'),
(3, 3, 2, 1, 5, 'C'),
(4, 2, 1, 2, 2, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL,
  `status` text NOT NULL COMMENT 'C = active\r\nD = inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `status`) VALUES
(1, 'Food', 'edible/perishable', 'C'),
(2, 'Miscellaneous', 'Fragile', 'C'),
(3, 'Furniture', 'wood/fragile', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_desc` text NOT NULL,
  `item_img` text NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `item_price` double NOT NULL,
  `status` text NOT NULL COMMENT 'C = active\r\nD = inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `seller_id`, `cat_id`, `item_name`, `item_desc`, `item_img`, `item_code`, `item_price`, `status`) VALUES
(1, 7, 1, 'Peanut Pili Brittle', 'A new way of satisfying your sweet tooth', '8469-brittle.jpg', 'olL3Y', 180, 'C'),
(2, 8, 1, 'Chili Cupcakes', 'Chili enhanced cupcake', '4417-chili_cupcake.jpg', 'HSV3J', 250, 'C'),
(3, 7, 2, 'Vases and Lamps', 'Red clay crafted into trendy lamps ', '4410-clay.jpg', 'G8Mw6', 200, 'C'),
(4, 8, 3, 'Furniture Sets', 'Hand made furnitures', '8351-furniture.jpg', 'RhLqX', 1800, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `mail_id` int(11) NOT NULL,
  `sent_to` varchar(100) NOT NULL,
  `sent_from` int(11) NOT NULL,
  `body` text NOT NULL,
  `attach` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`mail_id`, `sent_to`, `sent_from`, `body`, `attach`) VALUES
(12, 'personTwo@email.com', 1, 'hello', '4282-2021-05-03_12.28.23.png'),
(13, 'personTwo@email.com', 1, 'hello', '7080-before5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` text NOT NULL COMMENT 'O = ordered\r\nD = Delivered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `cat_id`, `user_id`, `qty`, `total`, `status`) VALUES
(2, 1, 1, 1, 2, 360, 'O'),
(3, 2, 1, 2, 2, 500, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL COMMENT 'A = admin\r\nB = buyer\r\nS = Seller',
  `uname` varchar(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cont_info` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `position`, `uname`, `fname`, `lname`, `age`, `address`, `cont_info`) VALUES
(1, 'personOne@email.com', 'password1', 'B', 'panday', 'Juan', 'Dela Cruz', 22, 'Canada', 998547456),
(2, 'personTwo@email.com', 'password2', 'B', 'ganda', 'Coco', 'Nat', 30, 'USA', 9874546547),
(5, 'payat@email.com', 'payat', 'B', 'payat', 'Inday', 'Batute', 25, 'Purok 4', 9867451145),
(7, 'seller1@email.com', 'seller1', 'S', 'seller', 'Chreone', 'Grei', 26, 'Las Vegas', 9874578744),
(8, 'seller2@email.com', 'seller2', 'S', 'seller2', 'Frank', 'Er', 45, 'Ligao', 9874457477),
(9, 'admin@admin.com', 'admin', 'B', '', '', '', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `item_id` (`item_id`,`cat_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `seller_id` (`seller_id`,`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`mail_id`),
  ADD KEY `sent_from` (`sent_from`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `item_id` (`item_id`,`cat_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cat_id` (`cat_id`);

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mails`
--
ALTER TABLE `mails`
  ADD CONSTRAINT `mails_ibfk_1` FOREIGN KEY (`sent_from`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
