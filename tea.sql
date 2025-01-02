-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 12:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `user_id`, `user_name`, `Email`, `Password`) VALUES
(1, 57833, 'Ifsan', 'IfsarnCUETETE@gmail.com', '12345'),
(2, 2147483647, 'Isfar Nayen', 'moriyaty133@gmail.com', '12345'),
(17, 2147483647, 'Nobel', 'Nobel@gmail.com', '1234'),
(18, 35371027, 'Isfar Nayen', 'wew', '12'),
(34, 2147483647, 'Isfar Nayen', 'rafsineyan133@gmail.com', '12345'),
(36, 2147483647, 'Nobel', 'u1908058@gmail.com', '1234'),
(37, 2147483647, 'Tumpa maam ', 'T@gmail.com', '1234'),
(38, 2147483647, 'Julkar Nayen', 'julkar@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `message` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `email`, `number`, `message`, `date`) VALUES
('Isfar Nayen', '0', 12345, '0', '0000-00-00 00:00:00'),
('Isfar Nayen', '0', 12345, '0', '0000-00-00 00:00:00'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '0000-00-00 00:00:00'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '0000-00-00 00:00:00'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '0000-00-00 00:00:00'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '2023-08-16 04:19:19'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'Hi, this is me moriarty.', '2023-08-16 04:22:19'),
('Nobel', 'Nobel@gmail.com', 12345, 'Hi', '2023-08-16 13:09:40'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '2023-08-16 13:29:23'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '2023-08-16 13:40:01'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '2023-08-16 15:42:53'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '2023-08-17 22:02:14'),
('Shakhawat Hossain', 'moriyaty133@gmail.com', 1553600441, 'Hi', '2023-08-18 19:01:55'),
('Tahmina Akhter', 'moriyaty133@gmail.com', 1956626604, 'Ammu', '2023-08-18 19:25:33'),
('Julkar Nayen', 'julkar@gmail.com', 1956626604, 'Hii', '2023-08-18 22:27:43'),
('Isfar Nayen', 'moriyaty133@gmail.com', 12345, 'hi', '2023-08-20 20:56:01'),
('Isfar Nayen', 'moriyaty133@gmail.com', 1234, 'CP', '2023-09-28 00:58:48'),
('Junayed', 'moriyaty133@gmail.com', 14121, '123eqwd', '2024-02-18 19:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `message1`
--

CREATE TABLE `message1` (
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message1`
--

INSERT INTO `message1` (`message`) VALUES
('fadfagagd'),
('1221wqd'),
('fadfagagd');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
('1', 'IT & HD', 1200, 'IT & HD.jpg'),
('2', 'RedLabel', 1300, 'RedLabel.jpg'),
('3', 'Premium Green Coffee Beans Powder - Unroasted', 1200, 'card.jpg'),
('4', 'Premium Green Coffee Beans Powder - Arabic', 1200, 'card0.jpg'),
('5', 'Premium Green Coffee Beans', 1600, 'card2.jpg'),
('6', 'Coffee Beans Powder - 200gm', 700, '6.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FirstName` (`user_id`),
  ADD KEY `LastName` (`user_name`),
  ADD KEY `UserName` (`Email`),
  ADD KEY `Password` (`Password`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `Email` (`Email`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
