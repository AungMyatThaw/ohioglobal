-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2026 at 10:33 AM
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
-- Database: `ohioglobal`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `original_name` varchar(255) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `upload_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `filename`, `original_name`, `file_size`, `year`, `month`, `upload_date`) VALUES
(18, '688ae12ce0087-Gallery21.jpg', 'Gallery21.jpg', 240839, 2025, 7, '2025-07-31 09:51:16'),
(19, '688ae159158af-Gallery23.jpg', 'Gallery23.jpg', 218868, 2025, 7, '2025-07-31 09:52:01'),
(23, '688aea8c771c6-Gallery34.jpg', 'Gallery34.jpg', 242625, 2025, 7, '2025-07-31 10:31:16'),
(24, '688aeae0b9ca8-Gallery1.jpg', 'Gallery1.jpg', 197258, 2024, 5, '2025-07-31 10:32:40'),
(25, '688c26a979f6e-Gallery2.jpg', 'Gallery2.jpg', 233749, 2024, 5, '2025-08-01 09:00:01'),
(26, '688c26d267fe6-Gallery3.jpg', 'Gallery3.jpg', 216962, 2024, 5, '2025-08-01 09:00:42'),
(27, '688c26dde0e9c-Gallery5.jpg', 'Gallery5.jpg', 197683, 2024, 5, '2025-08-01 09:00:53'),
(30, '688c2862b153c-Gallery6.jpg', 'Gallery6.jpg', 201577, 2024, 6, '2025-08-01 09:07:22'),
(31, '688c287666e55-Gallery7.jpg', 'Gallery7.jpg', 212919, 2024, 6, '2025-08-01 09:07:42'),
(32, '688c2887f3236-Gallery8.jpg', 'Gallery8.jpg', 252803, 2024, 6, '2025-08-01 09:07:59'),
(33, '688c288eddf88-Gallery9.jpg', 'Gallery9.jpg', 245036, 2024, 6, '2025-08-01 09:08:06'),
(34, '688c28c475e0e-Gallery10.jpg', 'Gallery10.jpg', 219961, 2024, 6, '2025-08-01 09:09:00'),
(35, '688c28cbc257b-Gallery11.jpg', 'Gallery11.jpg', 250344, 2024, 6, '2025-08-01 09:09:07'),
(36, '688c28fc68f8c-Gallery12.jpg', 'Gallery12.jpg', 230804, 2024, 7, '2025-08-01 09:09:56'),
(37, '688c290591f1c-Gallery14.jpg', 'Gallery14.jpg', 188974, 2024, 7, '2025-08-01 09:10:05'),
(38, '688c290d945ac-Gallery15.jpg', 'Gallery15.jpg', 249578, 2024, 7, '2025-08-01 09:10:13'),
(39, '688c292aa99a6-Gallery16.jpg', 'Gallery16.jpg', 223631, 2024, 8, '2025-08-01 09:10:42'),
(40, '688c2934052a8-Gallery17.jpg', 'Gallery17.jpg', 228250, 2024, 8, '2025-08-01 09:10:52'),
(41, '688c29545dc32-Gallery19.jpg', 'Gallery19.jpg', 256242, 2024, 9, '2025-08-01 09:11:24'),
(42, '688c295d01c5c-Gallery20.jpg', 'Gallery20.jpg', 239260, 2024, 9, '2025-08-01 09:11:33'),
(43, '688c29712a367-Gallery29.jpg', 'Gallery29.jpg', 248559, 2024, 9, '2025-08-01 09:11:53'),
(44, '688c29784d294-Gallery30.jpg', 'Gallery30.jpg', 237438, 2024, 9, '2025-08-01 09:12:00'),
(45, '688c297e44fdd-Gallery31.jpg', 'Gallery31.jpg', 232349, 2024, 9, '2025-08-01 09:12:06'),
(46, '688c299364a2e-Gallery32.jpg', 'Gallery32.jpg', 243729, 2024, 11, '2025-08-01 09:12:27'),
(47, '688c299b9be68-Gallery33.jpg', 'Gallery33.jpg', 246125, 2024, 11, '2025-08-01 09:12:35'),
(134, '689d5724e97c2-Galery24.jpg', 'Galery24.jpg', 221021, 2025, 7, '2025-08-14 09:55:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
