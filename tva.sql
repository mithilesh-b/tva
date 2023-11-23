-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2023 at 12:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tva`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `slno` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`, `slno`, `date`) VALUES
('dinesh roy', 'dinesh@gmail.com', 'hello', 1, '2023-08-05 13:24:19'),
('Sanskar Debnath', 'sanskardebnath2019@gmail.com', 'hola\r\n', 2, '2023-08-05 13:24:19'),
('Sanskar Debnath', 'sanskardebnath2019@gmail.com', 'hola', 3, '2023-08-05 13:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `usrid` int NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `school` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `course` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `topic` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `uname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`usrid`, `name`, `gender`, `phone`, `address`, `email`, `school`, `course`, `topic`, `uname`, `password`) VALUES
(1, 'Sanskar Debnath', 'Male', '06909072118', 'South Majlishpur, Jirania, Tripura West', 'sanskardebnath2019@gmail.com', 'TCEA', 'b_eng', 'Degree Engineering', 'dcsk', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `usrid` (`usrid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `slno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `usrid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
