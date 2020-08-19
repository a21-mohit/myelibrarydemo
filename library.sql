-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2020 at 09:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5286170_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERNAME` varchar(64) NOT NULL,
  `FIRST` varchar(64) NOT NULL,
  `LAST` varchar(64) NOT NULL,
  `EMAIL` varchar(64) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERNAME`, `FIRST`, `LAST`, `EMAIL`, `PASSWORD`) VALUES
('mohit', 'Mohit', 'Arora', 'mohit@example.com', '$2y$10$TGGETJbwhuIYNhohBuFzSeeOYFGg4dFxou6bvjOfORR5FpqhtujJe'),
('demo1', 'Foo', 'Bar', 'demo@example.com', '$2y$10$HgQYM0.AQpbgEYUvNUW3ouqR4DDbS9lU6nFYsrxl/WOcbYXEhw7/y'),
('devilex94', 'Harsh', 'Arora', 'devilex94@gmail.com', '$2y$10$4dljSqYi1VyVcTDG.JImKuGtgffV78vbAIZoczyzSXQEAo4C/B6Qe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
