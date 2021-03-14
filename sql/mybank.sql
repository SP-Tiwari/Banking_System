-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 10:47 AM
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
-- Database: `mybank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'sp tiwari', 'sp123@gmail.com', 111029),
(2, 'shiv', 'shiv202@gmail.com', 8684),
(3, 'sweety', 'sweety345@gmail.com', 8999),
(4, 'anoop', 'anu456@gmail.com', 9846),
(5, 'aayu', 'ayush567@gmail.com', 45530),
(6, 'ballu', 'balendra@gmail.com', 13241),
(18, 'mithlesh', 'mith@gmail.com', 95324),
(19, 'ritesh', 'ritesh@gmail.com', 45621),
(20, 'ram', 'ramq@gmail.com', 45715),
(21, 'suman', 'suman@gmail.com', 46890),
(22, 'rajni', 'rajni161@gmail.com', 45110),
(23, 'rajni', 'rajni161@gmail.com', 45000),
(24, 'jppandey', 'jp212@gmail.com', 0),
(25, 'rohit kacher', 'kacher@gmail.com', 98675);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
