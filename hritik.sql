-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 04:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hritik`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `act_name` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `place` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `act_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `act_name`, `duration`, `time`, `place`, `about`, `date`, `image`, `act_type`) VALUES
(10, 'sport', '1 hr', '15:27:00', 'ravindra nath tagor hall', '', '2023-03-30', 'seminar1.jpg', 1),
(11, 'sport1', '1 hr', '15:47:00', 'ravindra nath tagor hall', 'Curricular Activities: Basically speaking activities encompassing the prescribed courses of study                     are called curricular or academic activities. In simple words it can be said that activities that                     are undertaken inside the classroom,                     in the laboratory, workshop or in library are called “curricular activities.”', '2023-03-10', 'seminar1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `act_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `prn` int(11) NOT NULL,
  `stu_name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `att` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `act_id`, `roll_no`, `prn`, `stu_name`, `class`, `att`) VALUES
(1, 10, 1, 1234567890, 'jayesh', 'bsc it ty', 'present'),
(2, 10, 2, 1234567890, 'aman', 'bams', 'present'),
(3, 10, 3, 987654321, 'harsh', '12th', 'present'),
(4, 10, 4, 987654321, 'abhishek', 'al & ds', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `host_name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `host_name`, `description`, `date`, `time`, `event_type`, `image`) VALUES
(1, 'Full Stack Web Devlopment', 'B. S. Kulkarni', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eligendi aspernatur natus amet hic, nisi doloremque excepturi sed libero sunt omnis vel suscipit, tenetur aperiam error veritatis laudantium? Neque, reiciendis?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eligendi aspernatur natus amet hic, nisi doloremque excepturi sed libero sunt omnis vel suscipit, tenetur aperiam error veritatis laudantium? Neque, reiciendis?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eligendi aspernatur natus amet hic, nisi doloremque excepturi sed libero sunt omnis vel suscipit, tenetur aperiam error veritatis laudantium? Neque, reiciendis?', '2023-02-28', '12:30:00', 'seminar', 'seminar1.jpg'),
(2, 'Big Data Workshop', 'Dr. Arun K. Trangirala', 'Big data primarily refers to data sets that are too large or complex to be dealt with by traditional data-processing application software. Data with many entries (rows) offer greater statistical power, while data with higher complexity (more attributes or columns) may lead to a higher false discovery rate.[2] Though used sometimes loosely partly because of a lack of formal definition, the interpretation that seems to best describe big data is the one associated with large body of information that we could not comprehend when used only in smaller amounts.', '2023-03-03', '11:00:00', 'seminar', 'seminar2.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `reg_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `year` varchar(100) NOT NULL,
  `topic_name` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`reg_id`, `id`, `user_id`, `roll_no`, `prn`, `branch`, `name`, `year`, `topic_name`, `email`, `contact`) VALUES
(19, 10, 1, 1, '1234567890', 'it', 'user', 'sy', 'xyz', 'jay@gmail.com', '1234567890');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'user', 'student@gmail.com', '202cb962ac59075b964b07152d234b70', 'student'),
(2, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
