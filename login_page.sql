-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 07:22 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password_1` int(10) NOT NULL,
  `con_password` int(10) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone`, `password_1`, `con_password`, `address_1`, `address_2`, `city`, `zip`) VALUES
('atharva', 'gujarathi', 'atharva@gmail.com', '2147483647', 0, 0, 'nashik', 'nashik', 'manmad', 423104),
('asv', 'adv', 'asd@gmail.com', '2147483647', 0, 0, 'rgv', '3qrgv', 'nashik', 423104),
('adfv', 'aerb', 'aerb@gmail.com', '2147483647', 7777, 7777, 'wrv', 'WRBV', 'NASHIK', 423104),
('vhu', 'yvuy', 'kjb@gmail.com', '2147483647', 7777, 7777, 'aeb', 'aeb', 'manmad', 423104),
('hgc', 'ytuf', 'akshayb@gmail.com', '2147483647', 7777, 7777, 'tfytf', 'vcyc', 'nashik', 423104),
('aeb', 'aeb', 'aeb@gmail.com', '7709472156', 7777, 7777, 'aeeg', 'qrg', 'nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7777, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
('atharva', 'gujarathi', 'atharva@gmail.com', '7709472156', 7777, 7, 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
