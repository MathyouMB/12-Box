-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 05:31 PM
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
-- Database: `photowall`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` mediumint(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `location`, `title`, `text`) VALUES
(1, 'https://i.imgur.com/Lu2eXrG.jpg', 'Dave', 'He is the best.'),
(2, 'https://i.imgur.com/vKIDDJo.png', 'Square', 'He has 4 sides.'),
(5, 'https://i.imgur.com/vKIDDJo.png', 'White5', 'Text5'),
(6, 'https://i.imgur.com/vKIDDJo.png', 'White6', 'Text6'),
(7, 'https://i.imgur.com/vKIDDJo.png', 'White7', 'Text7'),
(8, 'https://i.imgur.com/vKIDDJo.png', 'White8', 'Text8'),
(9, 'https://i.imgur.com/vKIDDJo.png', 'White9', 'Text9'),
(10, 'https://i.imgur.com/vKIDDJo.png', 'White10', 'Text10'),
(11, 'https://i.imgur.com/vKIDDJo.png', 'White11', 'Text11'),
(12, 'https://i.imgur.com/vKIDDJo.png', 'White12', 'Text12'),
(13, 'https://i.imgur.com/vKIDDJo.png', 'White13', 'Text13'),
(14, 'https://i.imgur.com/vKIDDJo.png', 'White14', 'Text14'),
(15, 'https://i.imgur.com/vKIDDJo.png', 'White15', 'Text15'),
(16, 'https://i.imgur.com/vKIDDJo.png', 'White16', 'Text16'),
(17, 'https://i.imgur.com/vKIDDJo.png', 'White17', 'Text17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
