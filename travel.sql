-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 05:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` varchar(100) NOT NULL,
  `arrivals` varchar(255) NOT NULL,
  `leaving` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(12, 'kasuni nayanika', 'kasuni@gmail.com', '01145698753', 'Rathnapura', 'Kandy', '5', '2022-09-14', '2022-09-18'),
(13, 'kasuni nayanika', 'kasuni@gmail.com', '0714563214', 'Kuruwita', 'Kandy', '4', '2022-09-07', '2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 36, 'W.A.K.N.Peiris', 'kasuninayanika@gmail.com', '254', 'why why'),
(11, 39, 'Chamathi Nisansala', 'chamathi@gmail.com', '0711115566', 'Hoe Much?'),
(12, 39, 'kasuni nayanika', 'kasuni@gmail.com', '0714569875', 'please send package prices?'),
(13, 39, 'kasuni nayanika', 'kasuni@gmail.com', '071456987456', 'please send package details?'),
(14, 43, 'kasuni nayanika', 'kasuni@gmail.com', '0712365478', 'please provide package details?'),
(15, 43, 'kasuni nayanika', 'kasuni@gmail.com', '0714563214', 'please send package details');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(38, 'Yureni Vidunika Ranathunga', 'ureni.vidunika@gmail.com', 'a71be659915c64e9ac446cabdce65931', 'user'),
(39, 'Chamathi Nisansala Sandaruwani', 'chamathi@gmail.com', '881f451152d1798c7b42fb8f19de7d13', 'user'),
(41, 'Admin_01', 'admin_001@gmail.com', 'ff4d410401942fcd96baab15aaf3b5bc', 'admin'),
(42, 'Amasha Ranmini Weerakoon', 'amasha@gmail.com', '4a1c554b13807ac6ece8e57c0a3aa137', 'user'),
(43, 'IIT/19/022 - W.A.K.N.Peiris', 'waknpeiris@gmail.com', '6fa5b97389b0db5b56fdbc5f0a9ee2ea', 'user'),
(44, 'Piumi Kanishka Peiris', 'piumi@gmail.com', '4a8f9de76a1a59822f1d4b1bb3bf47f7', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
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
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
