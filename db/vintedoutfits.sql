-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 02:03 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productimages` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productdescription` varchar(100) NOT NULL,
  `productprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productimages`, `productname`, `productdescription`, `productprice`) VALUES
(1, 'ankara1.jpg', 'Tunic', 'A tunic is a loose fitted long top, usually finishing around mid-thigh.', 10.53),
(2, 'ankara2.jpg', 'Bermuda shorts', 'Bermuda shorts are longer shorts, almost reaching the knee. ', 9.55),
(3, 'ankara3.jpg', 'Waistcoat aka vest', 'A sleeveless top, often with buttons at the front. Formal waistcoats make up part of a three piece s', 39),
(4, 'ankara4.jpg', 'Ankara', 'Good quality material for your marriages,burials etc', 100.9),
(5, 'ankara5.jpg', 'Family Ankara', 'For Church Services,Family Meetings etc', 129.99),
(6, 'ankara6.jpg', 'Children Atire ', 'Good and nice quality ankara atires for your cute kids', 37),
(7, 'images.jpg', 'Snicker', 'It makes u walk without feeling tired and it prevents foot-shocks', 20.64),
(8, 'download.jpg', 'Shoe', 'wants the best look at your leg when you go out of you doorstep?\r\nno need to worry because this got ', 40.99),
(9, 'images 4.jpg', 'Flip-Flop\r\n\r\n\r\n\r\n', 'Sometimes you feel tired of wearing your snickers, no worrie because this got you covered.\r\n\r\n\r\n', 9.99),
(10, 'watch1.jpg', 'Rolex Watch', 'Men\'s wrist watch, Bracelet Strap, Water Resistance, Highly fashionable, Super cute, Business, Casua', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
