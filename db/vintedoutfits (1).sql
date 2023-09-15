-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 08:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vintedoutfits`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `itemprice` double(10,2) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `basket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productimages` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productdescription` text NOT NULL,
  `productprice` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productimages`, `productname`, `productdescription`, `productprice`) VALUES
(1, 'ankara3.jpg', 'Childrens Atire', 'Gives your children best style when with peer groups and makes them more outstanding', 50.99),
(2, 'men.jpg', 'T-Shirt & Short', 'This gives u a better look when you are outdoor and this makes u look more smart when around friends', 10.89),
(3, 'akara3.jpg', 'Family Atire', 'Good native atire for your family,makes it easy to identify a family on vacation', 15.00),
(4, 'snickers2.jpg', 'Snicker', 'gives good leg comfort when walking.\r\nthis also makes u look smart and more flexible when walking', 12.08),
(5, 'snickers1.jpg', 'Black Snicker', 'This makes u walk and dont feel the pain or cramps on your feet.', 8.88),
(6, 'download.jpg', 'Co-Operate Shoe', 'shoes for your co-operate wear like suits,family atires and lots more.this makes you feel like a man which you are.', 10.00),
(7, 'images 2.jpg', 'Simple Snicker', 'This goes with any cloth or dress u are thinking of putting on for an outing', 5.45),
(8, 'images 4.jpg', 'Flip Flop', 'This is a simple walking slippers for outting', 7.99),
(9, 'watch1.jpg', 'Comfort Watch ', 'Light,Flexible wrist watch for both men and women', 20.00),
(10, 'rolex.jpg', 'Rolex Watch', 'This is a classic wrist watch which gives style to someones wrist', 25.05);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
