-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 02:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `qty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(200) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Jackets & Coats'),
(2, 'Tops'),
(3, 'Jeans'),
(4, 'Dresses'),
(5, 'Casual suits'),
(6, 'Hoodies'),
(7, 'T-Shirts');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `d2` text NOT NULL,
  `gender` text NOT NULL,
  `ofprice` int(100) NOT NULL,
  `type` text NOT NULL,
  `type1` text NOT NULL,
  `cat_id` int(100) NOT NULL,
  `s_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `description`, `price`, `d2`, `gender`, `ofprice`, `type`, `type1`, `cat_id`, `s_id`) VALUES
(1, 'images/w3.jpg', 'Applewatch Strap With Silicone Belt', '1800', '10 % off', 'male', 1620, 'watches', '', 0, 0),
(2, 'images/2.jpg', 'Female Loose T-Shirt Dress', '1000 ', '40 % off', 'female', 500, 'wc', '', 2, 0),
(3, 'images/3.jpg', 'Men\'s Fashion Casual Slippers', '2000', '20 % off', 'male', 1600, 'slippers', '', 0, 0),
(4, 'images/4.jpg', 'Casual Men Version Of The Tide Shoes', '1500', '30 % off', 'male', 1050, 'shoes', '', 0, 0),
(5, 'images/5.jpg', 'Men\'S Pants Thin Section Straight Casual Shorts', '1800', '30 % off', 'male', 1260, 'shorts', '', 0, 0),
(7, 'images/7.jpg', 'Men\'s Breathable Sports Comfortable Mesh Shoes', '2500', '20 % off', 'male', 2000, 'shoes', '', 0, 0),
(9, 'images/9.jpg', 'Casual Hoodies', '200', '10 % off', 'male\r\n', 180, 'hoodie', '', 0, 0),
(10, 'images/b1.jpg', 'HandBag Four pieces with wallet', '3000', '50 % off', 'female', 1500, 'bags', '', 0, 0),
(11, 'images/b2.jpg', 'Cortex Wild Girl Messenger Bag', '4000', '50 % off', 'female', 2000, 'bags', '', 0, 0),
(12, 'images/b3.jpg', 'Men\'s Shoulder Bag', '900', '20 % off', 'male', 720, 'bags', '', 0, 0),
(14, 'images/s1.jpg', 'The Small White Shoes Girl Version Sports', '1000', '50 % off', 'female', 500, 'shoes', '', 0, 0),
(15, 'images/w1.jpg', 'Military Nylon Wrist Watch Band', '4000', '50 % off', 'male', 2000, 'watches', '', 0, 0),
(16, 'images/w2.jpg', 'Alloy Watchband Watch Quartz ', '2000', '40 % off', 'female', 1600, 'watches', '', 0, 0),
(17, 'images/j1.jpg', 'Woolen Cloth Thickening Coat', '2000', '50 % off', 'female', 1000, 'WC', 'jc', 1, 1),
(18, 'images/j2.jpg', 'Long Section Cardigan Loose Sleeves Coat', '5000', '50 % off', 'female', 2500, 'wc', 'jc', 1, 1),
(19, 'images/je1.jpg', 'Elasticity Tight Rivet Feet Hole Jeans Female', '3200', '10 % off', 'female', 2880, '', 'jeans', 3, 1),
(20, 'images/dr.jpg', 'Loose Long Sleeves Cotton Linen', '1000', '20 % off', 'female', 800, 'wc', 'dresses', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `password`, `email`, `id`) VALUES
('raj', 'rajshah', '', 1),
('raj', 'rajshah', 'shahraj135421@gmail.com', 2),
('raj', 'rajshah', 'shahraj135421@gmail.com', 3),
('darsh', 'darshahah', 'rrworldofgamez@gmail.com', 4),
('ankit', 'ankitshah', 'ankit@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `s_id` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`s_id`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
