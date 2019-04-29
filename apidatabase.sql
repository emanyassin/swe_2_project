-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 07:37 PM
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
('nayera', 'mobile', 'vvvv'),
('ahmed', 'engklsh', 's<10'),
('eman', 'engklsh', 's<12');

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
-- Table structure for table `recomneders`
--

CREATE TABLE `recomneders` (
  `rec_name` varchar(300) NOT NULL,
  `rec_email` varchar(300) NOT NULL,
  `rec_phone_number` varchar(300) NOT NULL,
  `rec_interested` varchar(300) NOT NULL,
  `rec_skills` varchar(300) NOT NULL,
  `interested_score` int(200) NOT NULL,
  `rec_gender` varchar(300) NOT NULL,
  `rec_address` varchar(300) NOT NULL,
  `rec_age` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recomneders`
--

INSERT INTO `recomneders` (`rec_name`, `rec_email`, `rec_phone_number`, `rec_interested`, `rec_skills`, `interested_score`, `rec_gender`, `rec_address`, `rec_age`) VALUES
('nayera', 'nayeramohamed21@yahoo.com', '12346789', 'java', 'c++', 5, 'female', 'shoubra', 21),
('nourhan', 'nourhan53@yahoo.com', '25789634', 'java', 'c#', 9, 'female', 'khlafawy', 21),
('eman', 'eman76@yahoo.com', '459632178', 'php', 'javascript', 8, 'female', 'maady', 20),
('nour', 'nour23@gmail.com', '8896541112', 'html', 'css', 6, 'male', 'aswan', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `phone_number` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `interested` varchar(300) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_croatian_ci NOT NULL,
  `skills` varchar(400) COLLATE utf8_croatian_ci NOT NULL,
  `passed_quizzes` text COLLATE utf8_croatian_ci,
  `vacancy` text COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`phone_number`, `user_name`, `interested`, `email`, `skills`, `passed_quizzes`, `vacancy`) VALUES
('12345678', 'nayera', 'java', 'nayeramohamed33@yahoo.com', 'tester', 'java', 'web devaloper'),
('58964', 'eman', 'c#', 'emanahmed3@yahoo.com', 'php', 'css', 'softwere engineer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
