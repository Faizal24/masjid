-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 09:53 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `picture`, `title`, `slug`, `content`, `date`) VALUES
(54, 'examination-1431866-1599x2132.jpg', 'Post 4', 'Post-4', 'Post 4', '2017-03-14 15:42:07'),
(55, 'glasses-1-1413015-1918x1284.jpg', 'Post 5 Edited', 'Post-5-Edited', 'This is post 5', '2017-03-15 08:38:40'),
(56, 'examination-1431866-1599x21321.jpg', 'dsddsd', 'dsddsd', 'asd', '2017-03-15 08:38:34'),
(57, 'examination-1431866-1599x21322.jpg', 'dsadds', 'dsadds', 'asd', '2017-03-15 08:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `picture`, `title`, `slug`, `date`, `time`, `place`, `content`) VALUES
(1, '', 'Jadual 2 Edited', 'Jadual-2-Edited', '2017-03-14', '10.40', 'KL', 'Lorem ipsum'),
(3, 'home-work-close-up-3-1236915-1919x1278.jpg', 'Jadual Test', 'Jadual-Test', '0000-00-00', 'Sekarang', 'Rumah', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `picture`, `created`, `modified`, `status`) VALUES
(1, 'Test', 'Test', 'chess-10-1475507.jpg', '2017-03-14 15:15:55', '2017-03-14 15:15:55', 1),
(2, 'Test', 'Testing', 'chess-1223117-1920x1440.jpg', '2017-03-14 15:22:04', '2017-03-14 15:22:04', 1),
(3, 'Test', 'Testing', 'chess-1223117-1920x14401.jpg', '2017-03-14 15:24:11', '2017-03-14 15:24:11', 1),
(4, 'asd', 'dsa', 'color-pencil-1143325-1920x1280.jpg', '2017-03-14 15:24:17', '2017-03-14 15:24:17', 1),
(5, 'asd', 'dsa', 'color-pencil-1143325-1920x12801.jpg', '2017-03-14 15:24:26', '2017-03-14 15:24:26', 1),
(6, 'asd', 'dsa', 'color-pencil-1143325-1920x12802.jpg', '2017-03-14 15:24:28', '2017-03-14 15:24:28', 1),
(7, 'Test', 'Testing', 'chess-1223117-1920x14402.jpg', '2017-03-14 15:24:32', '2017-03-14 15:24:32', 1),
(8, '', '', '', '2017-03-14 15:25:32', '2017-03-14 15:25:32', 1),
(9, '', '', '', '2017-03-14 15:25:57', '2017-03-14 15:25:57', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
