-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 03:07 AM
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
-- Database: `corpenstudiosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE `appointment_details` (
  `id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL,
  `time` time(6) NOT NULL,
  `package_type` varchar(255) NOT NULL,
  `batch` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_dates`
--

CREATE TABLE `book_dates` (
  `id` int(11) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `days` int(255) NOT NULL,
  `holidays` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_dates`
--

INSERT INTO `book_dates` (`id`, `date`, `days`, `holidays`, `status`) VALUES
(1, '2024-03-31 17:05:09.771756', 1, '', ''),
(2, '2024-03-31 17:05:09.771756', 2, '', ''),
(3, '2024-03-31 17:05:09.771756', 3, '', ''),
(4, '2024-03-31 17:05:09.771756', 4, '', ''),
(5, '2024-03-31 17:05:09.771756', 5, '', ''),
(6, '2024-03-31 17:05:09.771756', 6, '', ''),
(7, '2024-03-31 17:05:09.771756', 7, '', ''),
(8, '2024-03-31 17:05:09.771756', 8, '', ''),
(9, '2024-03-31 17:05:09.771756', 9, '', ''),
(10, '2024-03-31 17:05:09.771756', 10, '', ''),
(11, '2024-03-31 17:05:09.771756', 11, '', ''),
(12, '2024-03-31 17:05:09.771756', 12, '', ''),
(13, '2024-03-31 17:05:09.771756', 13, '', ''),
(14, '2024-03-31 17:05:09.771756', 14, '', ''),
(15, '2024-03-31 17:05:09.771756', 15, '', ''),
(16, '2024-03-31 17:05:09.771756', 16, '', ''),
(17, '2024-03-31 17:05:09.771756', 17, '', ''),
(18, '2024-03-31 17:05:09.771756', 18, '', ''),
(19, '2024-03-31 17:05:09.771756', 19, '', ''),
(20, '2024-03-31 17:05:09.771756', 20, '', ''),
(21, '2024-03-31 17:05:09.771756', 21, '', ''),
(22, '2024-03-31 17:05:09.771756', 22, '', ''),
(23, '2024-03-31 17:05:09.771756', 23, '', ''),
(24, '2024-03-31 17:05:09.771756', 24, '', ''),
(25, '2024-03-31 17:05:09.771756', 25, '', ''),
(26, '2024-03-31 17:05:09.771756', 26, '', ''),
(27, '2024-03-31 17:05:09.771756', 27, '', ''),
(28, '2024-03-31 17:05:09.771756', 28, '', ''),
(29, '2024-03-31 17:05:09.771756', 29, '', ''),
(30, '2024-03-31 17:05:09.771756', 30, '', ''),
(31, '2024-03-31 17:05:09.771756', 31, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feeedback`
--

CREATE TABLE `feeedback` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_dates`
--
ALTER TABLE `book_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeedback`
--
ALTER TABLE `feeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_details`
--
ALTER TABLE `appointment_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_dates`
--
ALTER TABLE `book_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `feeedback`
--
ALTER TABLE `feeedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
