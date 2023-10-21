-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2023 at 12:54 PM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vCard`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_about`
--

CREATE TABLE `user_about` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(22) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_no` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `born_on` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `native` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `edited_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_about`
--

INSERT INTO `user_about` (`id`, `name`, `age`, `mail`, `phone_no`, `born_on`, `native`, `description`, `edited_on`) VALUES
(1, 'Aniket Noel', '20', 'demo123@gmail.com', '9876543210', '2003-05-21', 'Bettiah', 'Hii,I\"m Aniket Noel', '2023-10-17 10:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `user_address` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `unboarding_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`email`, `phone_number`, `user_address`, `unboarding_date`) VALUES
('aniket@gmail.com', '1234567890', 'Bettiah', '2023-10-20 11:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `insta_id` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `fb_id` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `user_avatar` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `onboarding_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `fullname`, `email`, `password`, `address`, `phone_number`, `insta_id`, `fb_id`, `user_avatar`, `onboarding_date`) VALUES
(1, 'Aniket Noel', 'Aniket Noel', 'aniket@gmail.com', '1234', 'aidcom it solutions', '7209344696', 'https://www.instagram.com/i_.aniket._92/?next=%2F', 'https://www.facebook.com/profile.php?id=100070188581537', 'http://localhost/vCard/modules/upload_userpic/2.jpg', '2023-10-17 09:45:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_about`
--
ALTER TABLE `user_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_about`
--
ALTER TABLE `user_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
