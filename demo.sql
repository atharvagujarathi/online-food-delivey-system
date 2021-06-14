-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 05:30 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_1`
--

CREATE TABLE IF NOT EXISTS `admin_1` (
  `id` int(20) NOT NULL,
  `item_name` text NOT NULL,
  `quantity` int(20) NOT NULL,
  `unit_prize` int(50) NOT NULL,
  `item_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Name_1` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(25) NOT NULL,
  `ur_response` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name_1`, `Email`, `Phone`, `ur_response`) VALUES
('Atharva Kishor gujarathi', 'atharvagujarathi92@gmail.com', 2147483647, 'xrxgrt'),
('Atharva Kishor gujarathi', 'atharvagujarathi92@gmail.com', 2147483647, 'igug'),
('name ', 'name@gmail.com', 2147483647, 'xrxgrt');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL,
  `customer` text NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_phnno` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `customer`, `cus_email`, `cus_phnno`) VALUES
(1, 'manjusha', 'manjusha@gmail.com', 878523),
(2, 'manjusha', 'manjusha@gmail.com', 878523),
(3, 'Atharva Kishor gujarathi', 'atharvagujarathi92@gmail.com', 2147483647),
(4, 'Atharva Kishor gujarathi', 'atharvagujarathi92@gmail.com', 2147483647),
(5, 'Atharva Kishor gujarathi', 'atharvagujarathi92@gmail.com', 2147483647),
(6, 'Atharva Kishor gujarathi', 'atharvagujarathi92@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` int(11) NOT NULL,
  `e_name` text NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_number` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_email`, `e_number`) VALUES
(2, 'atha', 'atharva@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL,
  `first_name` text NOT NULL,
  `action` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `action`, `time`) VALUES
(1, '0', '0', '2021-01-23 21:15:08'),
(2, '', '0', '2021-01-28 10:30:42'),
(3, 'bc@gmail.com', '0', '2021-01-28 10:36:04'),
(4, 'cv@gmail.com', '0', '2021-01-28 10:38:30'),
(5, 's@gmail.com', 'Inserted', '2021-01-28 10:41:19'),
(6, 'xyz@gmail.com', 'Inserted', '2021-01-28 16:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `login_page`
--

CREATE TABLE IF NOT EXISTS `login_page` (
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
-- Dumping data for table `login_page`
--

INSERT INTO `login_page` (`first_name`, `last_name`, `email`, `phone`, `password_1`, `con_password`, `address_1`, `address_2`, `city`, `zip`) VALUES
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

--
-- Triggers `login_page`
--
DELIMITER $$
CREATE TRIGGER `insertlog` AFTER INSERT ON `login_page`
 FOR EACH ROW INSERT INTO login VALUES(null, new.first_name, 'inserted', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'usd',
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE IF NOT EXISTS `payment_method` (
  `cardname` text NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `expmonth` varchar(20) NOT NULL,
  `expyear` varchar(20) NOT NULL,
  `rupee` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`cardname`, `cardnumber`, `expmonth`, `expyear`, `rupee`) VALUES
('atharva', 2147483647, '0000-00-00', '0000-00-00', 0),
('atharva', 2147483647, '0000-00-00', '0000-00-00', 0),
('atharva', 2147483647, '0000-00-00', '0000-00-00', 0),
('atharva', 2147483647, '0000-00-00', '0000-00-00', 0),
('atharva', 2147483647, 'sept', '2018', 0),
('asa', 2147483647, 'sept', '2018', 0),
('asa', 2147483647, 'sept', '2018', 0),
('asa', 2147483647, 'sept', '2018', 0),
('wwe', 2147483647, 'sept', '2018', 350),
('gnd', 2147483647, 'sept', '2018', 450),
('atharva', 2147483647, 'sptname', '2018', 222);

--
-- Triggers `payment_method`
--
DELIMITER $$
CREATE TRIGGER `paymenttrigger` AFTER INSERT ON `payment_method`
 FOR EACH ROW INSERT INTO payment_trigger VALUES(NEW.cardname, NEW.cardnumber,NEW.rupee , 'inserted', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_trigger`
--

CREATE TABLE IF NOT EXISTS `payment_trigger` (
  `cardname` text NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `rupee` int(20) NOT NULL,
  `action` text NOT NULL COMMENT 'first_name',
  `cdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_trigger`
--

INSERT INTO `payment_trigger` (`cardname`, `cardnumber`, `rupee`, `action`, `cdate`) VALUES
('atharva', 2147483647, 222, '0', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'chicken barbique', '01', 210.00, 'product-images/bc1.jpeg '),
(2, 'chicken  cheese burst pizza', '02', 240.00, 'product-images/bc2.jpeg'),
(3, 'Chicken kabab pizza', '03', 250.00, 'product-images/bc3.jpeg'),
(4, 'Golden delight', '04', 90.00, 'product-images/bc4.jpeg'),
(5, 'mexican green wave', '05', 155.00, 'product-images/bc5.jpeg'),
(6, 'paneer tandoori', '06', 190.00, 'product-images/bc6.jpeg'),
(7, 'veggie delight', '07', 160.00, 'product-images/bc7.jpeg'),
(8, 'margerita', '08', 165.00, 'product-images/bc8.jpg'),
(10, 'sweet corn', '10', 160.00, 'product-images/bc9.jpg '),
(11, 'double cheese', '11', 190.00, 'product-images/image3.jpg'),
(12, 'mashroom', '12', 160.00, 'product-images/image4.jpg'),
(13, 'onion-tomato', '13', 60.00, 'product-images/image5.jpg'),
(14, 'jalapeno', '14', 25.00, 'product-images/jalapeno.png'),
(15, 'coca-cola', '15', 30.00, 'product-images/coke.jpg'),
(16, 'pepsi', '16', 30.00, 'product-images/pep.jpg'),
(17, 'sauce-sachet', '17', 1.00, 'product-images/sauce1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE IF NOT EXISTS `purchase_details` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `orders` int(11) NOT NULL,
  `rs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password_1` varchar(10) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password_1`, `address_1`, `address_2`, `city`, `zip`) VALUES
(15, 'bc', 'mc', 'bc@gmail.com', '7709472156', 'Atharva1', 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
(16, 'cv', 'cv', 'cv@gmail.com', '7709472156', 'Atharva1', 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
(17, 'q', 'w', 's@gmail.com', '7709472156', 'Atharva1', 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104),
(18, 'xyz', 'xyz', 'xyz@gmail.com', '7709472156', 'Atharva1', 'Nashik, Maharashtra, India', 'dsfbnbfn', 'Nashik', 423104);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `insertlogin` AFTER INSERT ON `users`
 FOR EACH ROW INSERT INTO login VALUES(null, NEW.email, 'Inserted', NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_1`
--
ALTER TABLE `admin_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
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
-- AUTO_INCREMENT for table `admin_1`
--
ALTER TABLE `admin_1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
