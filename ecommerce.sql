-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2022 at 11:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`) VALUES
(1, 'Luka 1', 'Men\'s Basketball Shoes', 'luka2.webp', '579'),
(11, 'Nike Go FlyEase', 'Easy On/Off Shoes', 'flyEase.webp', '679'),
(12, 'Air Jordan XXXVI Low\r\n', 'Men\'s Basketball Shoes\r\n', 'AirJordan.webp', '899'),
(13, 'Air Jordan 1 Low FlyEase\r\n', 'Easy On/Off Shoes', 'airJordan1.webp', '779'),
(14, 'Nike ACG Moc 3.5', 'Men\'s Moc', 'acg.webp', '489'),
(15, 'Air Jordan XXXV Low', 'Basketball Shoe', 'airJordan2.webp', '619'),
(16, 'Nike Crater Remixa', 'Men\'s Shoes', 'crater.webp', '269'),
(17, 'Jordan Delta 3 Mid', 'Men\'s Shoes', 'delta.webp', '779'),
(18, 'Nike Air Zoom Alphafly', 'Men\'s Road Racing Shoes', 'alphafly.webp', '1549'),
(19, 'Nike Air Max 2090', 'Men\'s Shoe', 'airMax2090.webp', '929'),
(20, 'Nike Air Max Dawn', 'Men\'s Shoes\r\n', 'airMaxDawn.webp', '629'),
(21, 'Nike Blazer', 'Men\'s Shoes', 'blazer.webp', '449'),
(22, 'Nike Air Max Invigor', 'Men\'s Shoe', 'nikeAirMax.webp', '549'),
(23, 'Nike Air Max Premier', 'Men\'s Shoes', 'premier.webp', '529'),
(24, 'Nike Space Hippie', 'Men\'s Shoes', 'spaceHeppie.webp', '419'),
(25, 'Nike Air Max Plus', 'Men\'s Shoes', 'vabormax.webp', '929'),
(26, 'Nike Wearallday', 'Men\'s Shoe', 'wearAllDay.webp', '369'),
(43, 'Zion 2', 'Men shoes', 'zion.webp', '900');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
