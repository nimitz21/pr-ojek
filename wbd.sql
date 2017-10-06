-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 10:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `pickup` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `hidden_by_user` tinyint(1) NOT NULL DEFAULT '0',
  `hidden_by_driver` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `driver_id`, `pickup`, `destination`, `rating`, `comment`, `date`, `hidden_by_user`, `hidden_by_driver`) VALUES
(2, 46, 1, '2Bro', 'abc', 5, 'hehe', '2017-10-03', 1, 0),
(3, 48, 46, 'a', 'z', 4, 'huehuehue', '2017-10-03', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `isdriver` tinyint(1) NOT NULL DEFAULT '0',
  `picture` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phonenumber`, `isdriver`, `picture`) VALUES
(1, 'vincnet', 'axel', 'vincent@fdsa.com', '1234', '08533456489', 1, 'default.jpg'),
(5, 'abcd', 'abcd', 'abcd@ga.com', '1234', '1234', 1, 'default.jpg'),
(43, 'Reinaldo Ignatius Wijaya', 'nimitz21', 'rei_iw@yahoo.com', '040550578', '087892310766', 0, 'default.jpg'),
(46, 'a', 'a', 'a', 'a', 'a', 1, 'default.jpg'),
(48, 'b', 'b', 'b', 'b', 'b', 0, 'default.jpg'),
(49, 'c', 'c', 'c', 'c', 'c', 0, 'default.jpg'),
(50, 'd', 'd', 'd', 'd', 'd', 0, 'default.jpg'),
(51, 'e', 'e', 'e', 'e', 'e', 0, 'default.jpg'),
(53, 'f', 'f', 'f', 'f', 'f', 1, 'default.jpg'),
(54, 'g', 'g', 'g', 'g', 'g', 1, 'default.jpg'),
(56, 'h', 'h', 'h', 'h', 'h', 0, 'default.jpg'),
(57, 'i', 'i', 'i', 'i', 'i', 0, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_location`
--

CREATE TABLE `user_location` (
  `user_id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_location`
--

INSERT INTO `user_location` (`user_id`, `location`) VALUES
(1, '2Bro'),
(46, 'a'),
(46, 'b'),
(46, 'c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_location`
--
ALTER TABLE `user_location`
  ADD PRIMARY KEY (`user_id`,`location`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
