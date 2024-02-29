-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 12:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agric`
--

-- --------------------------------------------------------

--
-- Table structure for table `agri_tips`
--

CREATE TABLE `agri_tips` (
  `id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `date_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agri_tips`
--

INSERT INTO `agri_tips` (`id`, `description`, `region`, `type`, `date_t`) VALUES
(2, 'insecticide Thiamethoxam 30% SC, 21% SC, good control effect on rice planthopper Usage method 1. To control rice planthopper, 25% thiamethoxazine ', 'Harihar', 'Agricultural Insecticides', '2020-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `crop_id` int(11) NOT NULL,
  `joined_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `surname`, `phone`, `region`,`crop_id`, `joined_date`) VALUES
(3, 'Ramesh', 'Tiwari', '9872340918', 'Harihar', 1, '2023-01-2');

-- --------------------------------------------------------

--
-- Table structure for table `forecasting`
--

CREATE TABLE `forecasting` (
  `id` int(11) NOT NULL,
  `tempa` varchar(20) NOT NULL,
  `region` varchar(90) NOT NULL,
  `daily` varchar(90) NOT NULL,
  `date_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forecasting`
--

INSERT INTO `forecasting` (`id`, `tempa`, `region`, `daily`, `date_t`) VALUES
(1, '24', 'Harihar', 'partly Clouds', '12 Jan 2020');

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `crop_id` int(11) NOT NULL,
  `crop_name` varchar(20) NOT NULL,
  `description` varchar(90) NOT NULL,
  `soil_required` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`crop_id`, `crop_name`, `description`, `soil_required`) VALUES
(1, 'Cotton', 'Cotton is used in Garments', 'Black Soil');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `password`, `type`) VALUES
(1, 'Bhoomi', 'Shree', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agri_tips`
--
ALTER TABLE `agri_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop_id` (`crop_id`);
--
-- Indexes for table `forecasting`
--
ALTER TABLE `forecasting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forecasting`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`crop_id`); 

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agri_tips`
--
ALTER TABLE `agri_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forecasting`
--
ALTER TABLE `forecasting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--
 
--
-- Constraints for table `farmers`
--
ALTER TABLE `farmers`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`crop_id`) REFERENCES `crop` (`crop_id`) ON DELETE CASCADE; 
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
