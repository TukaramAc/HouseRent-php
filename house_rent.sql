-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 10:59 AM
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
-- Database: `house_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_property`
--

CREATE TABLE `add_property` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pro` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `vdc` varchar(255) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `tole` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `estimated_price` decimal(10,0) NOT NULL,
  `total_room` int(11) NOT NULL,
  `bed_room` int(11) NOT NULL,
  `living_room` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `booked` varchar(11) NOT NULL,
  `description` varchar(11) NOT NULL,
  `own_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_property`
--

INSERT INTO `add_property` (`id`, `photo`, `country`, `pro`, `zone`, `district`, `city`, `vdc`, `ward_no`, `tole`, `contact`, `estimated_price`, `total_room`, `bed_room`, `living_room`, `kitchen`, `bathroom`, `booked`, `description`, `own_id`) VALUES
(21, 'carousel-1.jpg', 'India', 'Maharashatra', 'Solapur', 'Solapur', 'Solapur', 'Municipality', 3, '', 9857585859, 20000, 5, 2, 1, 1, 2, 'No', 'Good Place', 23),
(26, 'property-5.jpg', 'India', 'Maharashatra', 'Solapur', 'Solapur', 'Solapur', 'Municipality', 10, 'solapur', 7420805427, 40000, 5, 2, 2, 1, 2, 'No', 'Good surrou', 23),
(27, 'property-6.jpg', 'India', 'Gujarat', 'Surat', 'Surat', 'Mandvi', 'VDC', 12, '', 9857352849, 24400, 6, 3, 2, 1, 2, 'No', 'Famouse Pla', 23),
(29, 'property-2.jpg', 'India', 'Maharashatra', 'Kolhapur', 'Kolhapur', 'Kolhapur', 'Municipality', 8, '', 8746373654, 15000, 4, 2, 1, 1, 1, 'No', 'Healthy env', 24),
(30, 'property-1.jpg', 'India', 'Jammu ', 'Jammu', 'Shrinagar', 'Shrinagar north', 'VDC', 4, '233', 8264828456, 35000, 6, 2, 2, 2, 2, 'No', 'Beautiful c', 24);

-- --------------------------------------------------------

--
-- Table structure for table `booked_property`
--

CREATE TABLE `booked_property` (
  `id` int(11) NOT NULL,
  `bookedby` varchar(255) NOT NULL,
  `bookedaddress` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `ward_no` varchar(255) NOT NULL,
  `tole` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Product 1', 'nikeshtiwari3230@gmail.com', 'fghf', 'fghfgh');

-- --------------------------------------------------------

--
-- Table structure for table `property_photo`
--

CREATE TABLE `property_photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_photo`
--

INSERT INTO `property_photo` (`id`, `photo`, `pid`) VALUES
(1, '', 12),
(2, 'Chrysanthemum.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `img`, `name`, `email`, `password`, `contact`, `address`, `type_id`, `photo`, `user_type`) VALUES
(14, 'Koala.jpg', 'Priti Galpelli', 'priti@gmail.com', 'Pri@20', 9789098376, 'Sola', 'Citizenship', '', 'tenant'),
(15, 'icon-neighborhood.png', 'Ram Varma', 'ram@gmail.com', 'Ram#22', 9876543212, 'Pune', 'Driving Licence', '', 'tenant'),
(17, 'icon-house.png', 'Raman Bhalla', 'raman@gmail.com', 'Raman#20', 9876858263, 'Delhi', 'Driving Licence', '', 'tenant'),
(18, 'icon-building.png', 'Pallavi', 'pallavi@gmail.com', 'Pallu#30', 9857374949, 'solapur', 'Citizenship', '', 'tenant'),
(19, '', 'Admin', 'admin@gmail.com', 'Admin@123', 0, '', '', '', 'admin'),
(23, 'team-1.jpg', 'Priti Galpelli', 'priti@gmil.com', 'Pri@20', 9857585859, 'solapur', 'Citizenship', 'team-1.jpg', 'owner'),
(24, 'testimonial-3.jpg', 'Raman Vagella', 'ramanvagella@gmail.com', 'raman@321', 9857585859, 'solapur', 'Citizenship', 'testimonial-3.jpg', 'owner'),
(25, 'user-bg-01.jpg', 'Pavan Gandi', 'pavan@gmail.com', 'Pavan#11', 7864743356, 'Pune', 'Citizenship', '', 'tenant'),
(26, 'user-md-1.jpg', 'Sweta Tiwari', 'tiwari@gmail.com', 'Tiwari##', 9876587654, 'Chennai', 'Driving Licence', 'user-md-1.jpg', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `prodid` int(11) NOT NULL,
  `tetant_id` int(11) NOT NULL,
  `message` varchar(255) CHARACTER SET utf16le COLLATE utf16le_general_ci NOT NULL,
  `rates` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_property`
--
ALTER TABLE `add_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `own_id` (`own_id`);

--
-- Indexes for table `booked_property`
--
ALTER TABLE `booked_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_property`
--
ALTER TABLE `add_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `booked_property`
--
ALTER TABLE `booked_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_photo`
--
ALTER TABLE `property_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
