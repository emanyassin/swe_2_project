-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 01:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apidatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `commpanies`
--

CREATE TABLE `commpanies` (
  `name` varchar(1000) COLLATE utf8_croatian_ci NOT NULL,
  `categry` varchar(1000) COLLATE utf8_croatian_ci NOT NULL,
  `formula` varchar(5000) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `commpanies`
--

INSERT INTO `commpanies` (`name`, `categry`, `formula`) VALUES
('ahmed', 'work', 'java > 8'),
('nayera', 'mobile', 'vvvv');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `name` varchar(1000) COLLATE utf8_croatian_ci NOT NULL,
  `grade` varchar(1000) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `interested_score` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `age` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `phone_number` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `interested` varchar(300) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_croatian_ci NOT NULL,
  `gender` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `skills` varchar(400) COLLATE utf8_croatian_ci NOT NULL,
  `address` varchar(400) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`interested_score`, `age`, `phone_number`, `user_name`, `interested`, `email`, `gender`, `skills`, `address`) VALUES
('10', '10', '10', 'ahmed', 'java', 'ah', 'a', 'a', 'a'),
('10', '10', '10', 'mohamed', 'java', 'ah', 'ah', 'ah', 'ah'),
('10', '10', '10', 'nayera', 'english', 'a', 'a', 'a', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
