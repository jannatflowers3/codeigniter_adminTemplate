-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 01:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtcs`
--

CREATE TABLE `produtcs` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_details` varchar(300) DEFAULT NULL,
  `product_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produtcs`
--

INSERT INTO `produtcs` (`id`, `product_name`, `product_details`, `product_price`) VALUES
(5, 'Black', 'Jacket Details', '2000'),
(6, 'Red Shirt', 'Shirt Details', '2000'),
(7, 'Red Shirt', 'Jacket Details', '2000'),
(8, 'Yellow Shirt', 'Jacket Details', '2000'),
(9, 'Black', 'Jacket Details', '2000'),
(10, 'Red Shirt', 'Shirt Details', '2000'),
(11, 'Red Shirt', '                    Jacket Details                        ', '2000'),
(12, 'Yellow Shirt', 'Jacket Details', '2000'),
(16, 'Yellow Shirt', 'Jacket Details', '2000'),
(17, 'dfdfere', 'reeeeeeeeeee', '434343'),
(18, 'nokia', '<b><u style=\"background-color: rgb(189, 148, 0);\">nokia phone</u></b>', '45454'),
(20, 'pen metador', '                                        pen big size                        ', '22'),
(21, 'walton', '                                                              walton pro max', '5432'),
(22, 'iphone', 'dimond phone', '123000'),
(23, 'iphone', 'dimond phone', '123000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtcs`
--
ALTER TABLE `produtcs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtcs`
--
ALTER TABLE `produtcs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
