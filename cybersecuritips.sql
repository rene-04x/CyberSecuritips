-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 05:33 AM
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
-- Database: `cybersecuritips`
--
CREATE DATABASE IF NOT EXISTS `cybersecuritips` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cybersecuritips`;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `question_id` (`question_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cloud_tips`
--

DROP TABLE IF EXISTS `cloud_tips`;
CREATE TABLE IF NOT EXISTS `cloud_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` enum('individual','organization') NOT NULL DEFAULT 'individual',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloud_tips`
--

INSERT INTO `cloud_tips` (`id`, `tip_text`, `created_at`, `category`) VALUES
(1, 'wews yes', '2025-05-19 15:12:00', 'individual'),
(2, 'yunn', '2025-05-19 15:12:15', 'organization');

-- --------------------------------------------------------

--
-- Table structure for table `encrypt_tips`
--

DROP TABLE IF EXISTS `encrypt_tips`;
CREATE TABLE IF NOT EXISTS `encrypt_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `malware_tips`
--

DROP TABLE IF EXISTS `malware_tips`;
CREATE TABLE IF NOT EXISTS `malware_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phishing_tips`
--

DROP TABLE IF EXISTS `phishing_tips`;
CREATE TABLE IF NOT EXISTS `phishing_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pirating_tips`
--

DROP TABLE IF EXISTS `pirating_tips`;
CREATE TABLE IF NOT EXISTS `pirating_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `question`, `created_at`) VALUES
(1, 15, 'dgffhgh', '2025-05-20 01:06:07'),
(2, 15, 'grgryt', '2025-05-20 02:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `safety_tips`
--

DROP TABLE IF EXISTS `safety_tips`;
CREATE TABLE IF NOT EXISTS `safety_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` enum('individual','organization') NOT NULL DEFAULT 'individual',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `safety_tips`
--

INSERT INTO `safety_tips` (`id`, `tip_text`, `created_at`, `category`) VALUES
(7, 'vampire will feyt to me hhahaha', '2025-05-19 11:29:11', 'individual'),
(9, 'what haffen vella why you crying again', '2025-05-19 13:57:08', 'organization');

-- --------------------------------------------------------

--
-- Table structure for table `tapping_tips`
--

DROP TABLE IF EXISTS `tapping_tips`;
CREATE TABLE IF NOT EXISTS `tapping_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theft_tips`
--

DROP TABLE IF EXISTS `theft_tips`;
CREATE TABLE IF NOT EXISTS `theft_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `ip_address`, `created_at`) VALUES
(15, 'irene', 'irene@gmail.com', '$2y$10$fkVxgvHesToGq3xcQNx7B.Tms3UuwgLjQpdN4OQ7CiHgEyGQvHqIG', '::1', 1747646151),
(16, '123', '123@gmail.com', '$2y$10$jIRnE1PhR4dgZdGRfDqM.eXxD2TXeONPOnXpZi0RqBMnlA6wJMpC6', '::1', 1747655124);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
