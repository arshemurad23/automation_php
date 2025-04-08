-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 01:06 AM
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
-- Database: `automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_sign`
--

CREATE TABLE `admin_sign` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `primary_name` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `pasword` varchar(50) NOT NULL,
  `cpasword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_sign`
--

INSERT INTO `admin_sign` (`id`, `name`, `email`, `uname`, `primary_name`, `img`, `pasword`, `cpasword`) VALUES
(2, 'Admin', 'admin@automation.net', 'admin', 'automationadmin', 'automation.jpg', 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_quantity` double NOT NULL,
  `product_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_name`, `product_quantity`, `product_img`) VALUES
(20, 'watch', 350, 'zero-terra-fit-smart-watch-pakistan-priceoye-hnbz2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `primary_name` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `pasword` varchar(50) NOT NULL,
  `cpasword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `uname`, `primary_name`, `img`, `pasword`, `cpasword`) VALUES
(4, 'Testing Result Department', 'testingresult@automation.net', 'result-department', 'automationresult', '_kro2841.tmb-479v.png', 'result123', 'result123'),
(5, 'Production Deparment', 'production@automation.net', 'production-deparment', 'production automation', 'shutterstock_1335833930.jpg', 'production123', 'production123');

-- --------------------------------------------------------

--
-- Table structure for table `testing_res`
--

CREATE TABLE `testing_res` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_quantity` double NOT NULL,
  `product_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testing_res`
--

INSERT INTO `testing_res` (`product_id`, `product_name`, `product_quantity`, `product_img`) VALUES
(17, 'LED', 50, 'oktra-50-inch-smart-fhd-led-tv-k570s-50-pakistan-priceoye-tjn52.jpg'),
(18, 'Computers', 3500, 'buying-your-first-desktop-computer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test_aproval`
--

CREATE TABLE `test_aproval` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_quantity` double NOT NULL,
  `product_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_aproval`
--

INSERT INTO `test_aproval` (`product_id`, `product_name`, `product_quantity`, `product_img`) VALUES
(19, 'Laptop', 5200, 'hp-probook-650-g3-side-17888-1846562-220823011541705.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `under_test`
--

CREATE TABLE `under_test` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_quantity` double NOT NULL,
  `product_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_sign`
--
ALTER TABLE `admin_sign`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `primary_name` (`primary_name`),
  ADD UNIQUE KEY `pasword` (`pasword`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `primary_name` (`primary_name`),
  ADD UNIQUE KEY `pasword` (`pasword`);

--
-- Indexes for table `testing_res`
--
ALTER TABLE `testing_res`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `test_aproval`
--
ALTER TABLE `test_aproval`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `under_test`
--
ALTER TABLE `under_test`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_sign`
--
ALTER TABLE `admin_sign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
