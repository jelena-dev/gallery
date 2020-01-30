-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 04:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(1, 5, 'Jelena', 'Neki komentar'),
(2, 5, 'Marija', 'Neki komentar'),
(5, 8, 'Jelena', 'Losa slika'),
(6, 8, 'Stefan', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternative_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternative_text`, `type`, `size`) VALUES
(5, 'Car number2', '', '', 'images-2.jpg', '', 'image/jpeg', 18578),
(6, 'Car number3', '', '', 'images-3.jpg', '', 'image/jpeg', 18096),
(7, 'Car number4', '', '', 'images-4.jpg', '', 'image/jpeg', 23270),
(8, 'slika30', '', '', 'images-30.jpg', '', 'image/jpeg', 20257),
(9, 'slika31', '', '', 'images-31.jpg', '', 'image/jpeg', 20928),
(10, 'slika32', '', '', 'images-32.jpg', '', 'image/jpeg', 22772),
(11, 'velika2', '', '', '_large_image_2.jpg', '', 'image/jpeg', 309568),
(12, 'prva', '', '', 'images-1.jpg', '', 'image/jpeg', 28947),
(13, 'druga', '', '', 'images-8.jpg', '', 'image/jpeg', 20810),
(14, 'tamo neka', '', '', 'images-38.jpg', '', 'image/jpeg', 21857),
(15, 'jos neka', '', '', 'images-37.jpg', '', 'image/jpeg', 20381);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `first_name` varchar(155) NOT NULL,
  `last_name` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_image`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'slika4.jpg', 'jelena', '', 'Jelena', 'Djordjevic'),
(4, 'slika2.jpg', 'cveta', '', 'Cveta', 'Vignjevic'),
(5, '', 'marija', 'marija', 'Marija', 'Otasevic'),
(7, '', 'sladja', 'sladja', 'Sladjana', 'Peric'),
(10, 'slika3.jpg', 's', 's', 's', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
