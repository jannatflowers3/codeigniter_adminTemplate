-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 02:05 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`) VALUES
(1, 'Shirt', 'Big Size Shirt'),
(2, 'Pants', 'Big Size Pants'),
(3, 'Shoes', 'Big Size Shoes'),
(4, 'Shirt', 'Big Size Shirt'),
(5, 'Pants', 'Big Size Pants'),
(6, 'Shoes', 'Big Size Shoes'),
(7, 'Shirt', 'Big Size Shirt'),
(8, 'Pants', 'Small Size Pants'),
(9, 'Shoes', 'Big Size Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(6, '2022-12-29-093345', 'App\\Database\\Migrations\\Produtcs', 'default', 'App', 1672306815, 1),
(7, '2022-12-29-121155', 'App\\Database\\Migrations\\Categorys', 'default', 'App', 1672316221, 2),
(8, '2022-12-31-094039', 'App\\Database\\Migrations\\Users', 'default', 'App', 1672479677, 3);

-- --------------------------------------------------------

--
-- Table structure for table `produtcs`
--

CREATE TABLE `produtcs` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_details` varchar(300) DEFAULT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_img` varchar(100) DEFAULT NULL,
  `product_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produtcs`
--

INSERT INTO `produtcs` (`id`, `product_name`, `product_details`, `product_price`, `product_img`, `product_category`) VALUES
(1, 'Black', 'Jacket Details', '2000', NULL, 1),
(2, 'Red Shirt', 'Shirt Details', '2000', NULL, 2),
(3, 'Red Shirt', 'Jacket Details', '2000', NULL, 3),
(4, 'Yellow Shirt', 'Jacket Details', '2000', NULL, 4),
(5, 'Black', 'Jacket Details', '2000', NULL, 1),
(6, 'Red Shirt', 'Shirt Details', '2000', NULL, 2),
(7, 'Red Shirt', 'Jacket Details', '2000', NULL, 3),
(8, 'Yellow Shirt', 'Jacket Details', '2000', NULL, 4),
(9, 'dfdfdf', '                      ddddddfgfg', '455', NULL, 0),
(10, 'jafsfddddddddd', 'djdnatfdfddddddd', '2323', NULL, 0),
(11, 'dddddddddd', 'dddddddddddddddddd', '2323', NULL, 0),
(12, 'dssssss', '                      ssssssds', '23', NULL, 0),
(13, '', NULL, '0', '2.jpg', 0),
(14, '', NULL, '0', '1.jpg', 0),
(15, 'dsssss', '                      sssssssssdfd', '323', NULL, 0),
(16, 'sdfdfdf', '                                                                dfdfdfdfere                                                ', '434', '/assests/uploads/1.jpg', 0),
(17, 'dfdfdf', 'dfdfdfddddddddd', '454', 'assests/uploads/1_1.jpg', 0),
(18, 'tshirt', '                                                                                                                        tshirt make in chna                                                                                                                                                ', '122', '/assests/uploads/2.jpg', 0),
(19, 'black shirt', 'blackshirte', '3343', 'assests/uploads/counter-bg.jpg', 0),
(20, 'ffdfdfdf', '                      rwerereredefedf', '3343', 'assests/uploads/1_2.jpg', 0),
(21, 'gfgfgf', 'rtrtrtrtrtrt', '434', 'assests/uploads/2_2.jpg', 1),
(22, 'rtrt454', '                                          rtrrrrrrrrrrrr                                                ', '5444', '/assests/uploads/3_1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` char(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(2, 'rahime', 'rahime@gmail.com', '2000', '2022-12-31 09:54:13'),
(3, 'sultana', 'sultana@gmail.com', '2000', '2022-12-31 09:54:13'),
(4, 'aklima', 'aklima@gmail.com', '2000', '2022-12-31 09:54:13'),
(8, 'jannatu ferdaush', 'admin@gmail.com', '$2y$10$SDfVg6uXvomBF6T6cIzRR.XGZYONI5NrMvi.pcpwm8ODAg.2VJkZ6', '2022-12-31 10:24:38'),
(9, 'Jannat', 'jannat123@gmail.com', '$2y$10$4M/AyLhGXeSvh1M.lgj/JeQu5tmvL2aMspsYvv0fNDs2ZiFScWSVq', '2022-12-31 10:37:24'),
(10, 'sdssdd', 'jafgfnnat123@gmail.com', '$2y$10$ct.i.6vmbarVgHlVNT/HKO8a9c1b0bnV6u5Yej3Zrx/SmmEmxz.OW', '2022-12-31 10:52:02'),
(11, 'rtrt', 'dfd@gmail.com', '$2y$10$FsrZRMUVz9xHDozvgX9VU.s3my/I4NUCWv6kkuMaieBdN8bTqlxCG', '2022-12-31 10:55:52'),
(12, 'jannatu ferdaush', 'jannat2@gmail.com', '$2y$10$Vk7AtXPcvq5pOo1D9BKRFObLoZg4GGxq9brT/fqoFShaqLqfZpcNe', '2022-12-31 11:06:21'),
(13, 'jannatu ferdaush', 're@gmail.com', '$2y$10$1vYrK8xL/oYF4BrsDqslc.0EXjRXahi9Fotpebu.6R2PBpiToWd5a', '2022-12-31 11:09:02'),
(14, 'jannatu ferdaush', 'dfdd@gmail.com', '$2y$10$IhyPJc2i1ecTcmq/0bX2p.hZgTlQNuD2CjK1vNUHU1sEpGA133Vj.', '2022-12-31 11:13:22'),
(15, 'sultana', 'sultanaa@gmail.com', '$2y$10$9feFRh7EbrJ0FoDGnM92Au3EkZOV89VFhzrrXo2OOd9gQclku1Kvm', '2022-12-31 11:28:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtcs`
--
ALTER TABLE `produtcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produtcs`
--
ALTER TABLE `produtcs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
