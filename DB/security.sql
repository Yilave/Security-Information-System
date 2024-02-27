-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 05:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security`
--

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `local_govt` varchar(50) NOT NULL,
  `resi_address` varchar(100) NOT NULL,
  `crime` varchar(50) NOT NULL,
  `description` varchar(225) NOT NULL,
  `create_datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`id`, `fullname`, `gender`, `birth`, `contact`, `nationality`, `state`, `local_govt`, `resi_address`, `crime`, `description`, `create_datetime`) VALUES
(7, 'Ocheme Godwin', 'Male', '2021-09-29', '08100266783', 'Nigeria', 'Benue', 'Makurdi', 'Taraba', 'Rape', 'Found Forcefully sleeping with a teenager', 'Oct 19, 2021 05:36 am'),
(8, 'Bokyaa Jerome', 'Male', '2021-10-06', '08100266783', 'Nigeria', 'Benue', 'Makurdi', 'Taraba', 'Rape', 'Found Forcefully sleeping with a teenager', 'Oct 19, 2021 08:47 am');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `resi_address` varchar(225) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth` varchar(50) NOT NULL,
  `age` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `create_datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `fullname`, `resi_address`, `gender`, `birth`, `age`, `status`, `height`, `contact`, `email`, `create_datetime`) VALUES
(1, 'Ocheme Godwin', 'Taraba', 'Male', '2021-09-27', '1', 'Single', '5ft', '08100266783', 'og@gmail.com', 'Oct 19, 20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `resi_address` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `confirm_password` varchar(12) NOT NULL,
  `profile_image` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `create_datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `gender`, `email`, `contact`, `resi_address`, `password`, `confirm_password`, `profile_image`, `role`, `create_datetime`) VALUES
(1, 'Yilave Isaac', 'Male', 'admin@gmail.com', '08100266783', 'K/ALA', '4321', '4321', '', 'Admin', '2021-10-18'),
(2, 'Mr Aliyu Ahmed', 'Male', 'ahmed@gmail.com', '08100266783', 'Taraba', '1', '1', '1634575771_STG_6222.jpg', 'User', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`email`);

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
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
