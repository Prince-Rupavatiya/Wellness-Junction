-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 02:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wellness_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `community_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `community_questions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`community_id`, `user_id`, `c_name`, `community_questions`) VALUES
(4, 3, 'prince', 'what is the ADHD'),
(5, 3, 'riya', 'How to overcome stage fear?');

-- --------------------------------------------------------

--
-- Table structure for table `community_reply`
--

CREATE TABLE `community_reply` (
  `community_reply_id` int(1) NOT NULL,
  `c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `r_name` varchar(40) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `community_reply`
--

INSERT INTO `community_reply` (`community_reply_id`, `c_id`, `user_id`, `r_name`, `reply`) VALUES
(4, 4, 3, 'aatreyee', 'jbvdvvdv'),
(5, 4, 3, 'pavan', 'mgcgcgc');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resources_id` int(11) NOT NULL,
  `resources_path` varchar(120) NOT NULL,
  `resources_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `flag` enum('counsellor','patient','guest') NOT NULL DEFAULT 'guest',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `flag`, `created_at`) VALUES
(1, 'prince', 'princerupavatiya2606@gmail.com', '$2y$10$st1YiKjn5LkvOTrmzMSkZuNIUZ0f.GfKxzTtUertsVkGY2AT62VzS', 'counsellor', '2024-06-29 06:02:08'),
(3, 'prince rupavatiya', 'princerupavatiya@gmail.com', '$2y$10$0eNnGYXHoyezC4jz0Jqxw.QhmNkA0H4OHODnOE12tFB0/4dvALF72', 'counsellor', '2024-06-29 06:13:37'),
(4, 'Aatreyee', 'aatreyeerollwala@gmail.com', '$2y$10$qEpgzefOOOg/ncp2jiKE.OXTpuLoiccZfDsdfoD.QOHIbQttPWZjC', 'patient', '2024-06-29 08:30:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`community_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `community_reply`
--
ALTER TABLE `community_reply`
  ADD PRIMARY KEY (`community_reply_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resources_id`);

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
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `community_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `community_reply`
--
ALTER TABLE `community_reply`
  MODIFY `community_reply_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resources_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community`
--
ALTER TABLE `community`
  ADD CONSTRAINT `community_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `community_reply`
--
ALTER TABLE `community_reply`
  ADD CONSTRAINT `community_reply_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `community` (`community_id`),
  ADD CONSTRAINT `community_reply_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
