-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `date_of_birth` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `gender`, `is_active`, `date_of_birth`, `role`, `created_at`, `updated_at`) VALUES
(12, 'Hello Tech', 'munempuc@gmail.com', 'dc', 'male', NULL, '2021-02-09', 'admin', '2021-02-08 02:42:35', '2021-05-23 19:33:58'),
(13, 'James Bond', 'techlibrary19@gmail.com', 'a', 'female', NULL, '2026-01-01', 'a', '2021-02-08 02:50:04', '2021-02-08 02:50:04'),
(14, 'Thor', 'munempuc@gmail.com', 'dc', 'female', NULL, '2021-02-20', 's', '2021-02-08 02:55:29', '2021-02-08 02:58:36'),
(15, 'Munem Sahriar', 'munemsah@gmail.com', 'sssvs', 'male', 0, '2021-02-18', 'aaaa', '2021-02-08 03:12:31', '2021-02-08 03:12:31'),
(18, 'Munem Sahriar', 'munemsah@gmail.com', 'a123456Z', 'male', NULL, '2021-04-22', 'admin', '2021-04-19 20:45:37', '2021-04-19 20:58:59'),
(23, 'Munem Sahriar', 'munemsah@gmail.com', 'a123456Z', 'male', NULL, '2021-04-24', 'User', '2021-04-19 21:12:29', '2021-04-19 21:12:29'),
(24, 'Munem Sahriar', 'munemsah@gmail.com', '123456', 'male', NULL, '2021-05-26', 'User', '2021-05-23 17:08:16', '2021-05-23 17:08:16'),
(25, 'Hello Tech', 'munempuc@gmail.com', '1234567', 'male', NULL, '2021-06-09', 'Admin', '2021-05-23 17:08:44', '2021-05-23 17:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, NULL, 'CT Scan', '2500 BDT', '2021-05-23 22:28:00', '2021-05-23 22:28:00'),
(2, NULL, 'X-Ray', '1800 BDT', '2021-05-23 22:28:23', '2021-05-23 22:28:23'),
(3, NULL, 'Blood Test', '300 BDT', '2021-05-23 22:28:41', '2021-05-23 22:28:41'),
(4, NULL, 'Covid Test', '700 BDT', '2021-05-23 22:28:48', '2021-05-23 22:28:48'),
(5, NULL, 'MRI', '3300 BDT', '2021-05-23 22:28:58', '2021-05-23 22:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `active`, `age`, `created_at`, `updated_at`) VALUES
(1, 'Munem Sahriar', 'munem@gmail.com', '123456', 'admin', '', 22, '2021-04-21 20:36:40', '2021-04-21 20:36:40'),
(2, 'maruf', 'maruf@gmail.com', '123456', 'User', '', 55, '2021-04-21 20:37:47', '2021-05-23 13:42:09'),
(3, 'imran', 'imran@gmail.com', '123456', 'Employee', '', 26, '2021-05-04 20:57:43', '2021-05-23 14:23:04'),
(6, 'Rasel', 'rasel@gmail.com', '123456', 'Employee', NULL, 20, '2021-05-23 11:09:45', '2021-05-23 14:27:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
