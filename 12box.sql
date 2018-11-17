-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 04:23 AM
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
-- Database: `12box`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_p1` varchar(255) NOT NULL,
  `user_p2` varchar(255) NOT NULL,
  `user_p3` varchar(255) NOT NULL,
  `user_p4` varchar(255) NOT NULL,
  `user_p5` varchar(255) NOT NULL,
  `user_p6` varchar(255) NOT NULL,
  `user_p7` varchar(255) NOT NULL,
  `user_p8` varchar(255) NOT NULL,
  `user_p9` varchar(255) NOT NULL,
  `user_p10` varchar(255) NOT NULL,
  `user_p11` varchar(255) NOT NULL,
  `user_p12` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_p1`, `user_p2`, `user_p3`, `user_p4`, `user_p5`, `user_p6`, `user_p7`, `user_p8`, `user_p9`, `user_p10`, `user_p11`, `user_p12`) VALUES
(1, 'Matt', 'meme@gmail.com', '1234567890', 'https://i.imgur.com/Lu2eXrG.jpg', 'https://i.imgur.com/Lu2eXrG.jpg', 'https://i.imgur.com/Lu2eXrG.jpg', '', '', '', '', '', '', '', '', ''),
(2, 'Matt69', 'meme69@gmail.com', '0-0-0-3Mb', 'https://i.imgur.com/Lu2eXrG.jpg', 'https://i.imgur.com/fgPf7o5.png', 'https://i.imgur.com/CsfwQcd.png', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
