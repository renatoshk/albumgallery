-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2019 at 04:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_gallery`
--

CREATE TABLE `album_gallery` (
  `album_id` int(11) NOT NULL,
  `album_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_gallery`
--

INSERT INTO `album_gallery` (`album_id`, `album_title`) VALUES
(1, 'SUMMER'),
(2, 'WINTER '),
(3, 'HOLIDAYS'),
(4, 'FAMILY');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_content` varchar(255) NOT NULL,
  `image_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `user_id`, `album_id`, `image_title`, `image_content`, `image_name`) VALUES
(60, 31, 2, 'Informatika', 'adsadsa', 'images/renato.jpg'),
(61, 31, 2, 'Informatika', 'tech', 'images/images4.jpg'),
(62, 31, 2, 'Informatika', 'tech', 'images/images5.jpg'),
(63, 31, 4, 'Informatika', 'tech', 'images/images2.jpg'),
(64, 30, 2, 'Informatika', 'adas', 'images/images1.jpg'),
(65, 30, 2, 'Informatika', 'tech', 'images/images6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `user_checked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `firstname`, `lastname`, `user_checked`) VALUES
(1, 'Renato', 'Shkulaku', 'no'),
(2, 'Eden', 'Hazard', 'yes'),
(3, 'John', 'Snow', 'yes'),
(5, 'eden', 'shkulaku', 'no'),
(7, 'Daenerys', 'Targaryen', 'no'),
(8, 'Aria', 'Stark', 'no'),
(9, 'Leo', 'Messi', 'no'),
(10, 'Cristiano', 'Ronaldo', 'yes'),
(11, 'Frank', 'Lampard', 'no'),
(12, 'John', 'Terry', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `validation_code` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `user_role`, `validation_code`, `active`) VALUES
(29, 'renatosh', '3303daf806aebcd0cfd114f7d267f109', 'Renato', 'shkulaku', 'shkulakurenato@yahoo.com', 'admin', '4f5b34e3ceba81ef302be1bc29495d11', 0),
(30, 'rono', '2b4dfc1b36bc6224b7ae4059c1d0da27', 'Ronaldo', 'hena', 'henaronaldo@gmail.com', 'admin', '0', 1),
(31, 'reni', 'e10adc3949ba59abbe56e057f20f883e', 'Renato', 'shkulaku', 'shkulakurenato@gmail.com', 'admin', '0', 1),
(32, 'shkulaku', '3303daf806aebcd0cfd114f7d267f109', 'Renato', 'shkulaku', 'renato.shkulaku@fshnstudent.info', 'admin', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_gallery`
--
ALTER TABLE `album_gallery`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_gallery`
--
ALTER TABLE `album_gallery`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
