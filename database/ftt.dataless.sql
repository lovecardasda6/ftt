-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 11:26 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftt`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `posted` date NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_address`
--

CREATE TABLE `email_address` (
  `id` int(11) NOT NULL,
  `email_address` varchar(150) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_number`
--

CREATE TABLE `mobile_number` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(60) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_destinations`
--

CREATE TABLE `package_destinations` (
  `id` int(11) NOT NULL,
  `tour_package_id` int(11) NOT NULL,
  `destination` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `telephone_number`
--

CREATE TABLE `telephone_number` (
  `id` int(11) NOT NULL,
  `tel_number` varchar(60) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tour_destinations`
--

CREATE TABLE `tour_destinations` (
  `id` int(11) NOT NULL,
  `destinations` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_destination_image`
--

CREATE TABLE `tour_destination_image` (
  `id` int(11) NOT NULL,
  `tour_destination_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(120) NOT NULL,
  `price` varchar(50) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `image_location` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_address`
--
ALTER TABLE `email_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_number`
--
ALTER TABLE `mobile_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_destinations`
--
ALTER TABLE `package_destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_package_id` (`tour_package_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telephone_number`
--
ALTER TABLE `telephone_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_destinations`
--
ALTER TABLE `tour_destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_destination_image`
--
ALTER TABLE `tour_destination_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_destination_id` (`tour_destination_id`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_address`
--
ALTER TABLE `email_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobile_number`
--
ALTER TABLE `mobile_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_destinations`
--
ALTER TABLE `package_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `telephone_number`
--
ALTER TABLE `telephone_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_destinations`
--
ALTER TABLE `tour_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tour_destination_image`
--
ALTER TABLE `tour_destination_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package_destinations`
--
ALTER TABLE `package_destinations`
  ADD CONSTRAINT `package_destinations_ibfk_1` FOREIGN KEY (`tour_package_id`) REFERENCES `tour_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tour_destination_image`
--
ALTER TABLE `tour_destination_image`
  ADD CONSTRAINT `tour_destination_image_ibfk_1` FOREIGN KEY (`tour_destination_id`) REFERENCES `tour_destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
