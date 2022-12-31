-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 01:54 PM
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
