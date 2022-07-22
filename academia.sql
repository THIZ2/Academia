-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 07:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'Vandana Mehta', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Shikha Sharma', 'shikhas98@gmail.com', 'admin i am not able to log in.'),
(2, 'Aditi Gupta', 'aditi34@gmail.com', 'admin my Internal marks have not yet been updated.'),
(3, 'Riya Sharma', 'riya565@gmail.com', 'Admin my image is not visible.Do i have to register again?');

-- --------------------------------------------------------

--
-- Table structure for table `ds`
--

CREATE TABLE `ds` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `assign1` int(10) DEFAULT NULL,
  `assign2` int(10) DEFAULT NULL,
  `assign3` int(10) DEFAULT NULL,
  `internals` int(10) DEFAULT NULL,
  `average` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ds`
--

INSERT INTO `ds` (`id`, `name`, `month`, `assign1`, `assign2`, `assign3`, `internals`, `average`) VALUES
(1, 'Aditi Gupta', 'january', 33, 42, 27, NULL, 34),
(2, 'Aditi Gupta', 'feburary', 15, 45, 36, 43, 32),
(3, 'Shikha Sharma', 'january', 32, 28, 19, NULL, 26),
(4, 'Aditi Gupta', 'march', 35, 15, 26, NULL, 25),
(5, 'Shikha Sharma', 'feburary', 49, 25, 30, 48, 35),
(6, 'Aditi Gupta', 'august', 24, 37, 22, NULL, 31),
(7, 'Aditi Gupta', 'september', 16, 27, 10, NULL, 18),
(8, 'Shikha Sharma', 'march', 22, 13, 29, NULL, 21),
(9, 'Aditi Gupta', 'october', 46, 42, 17, NULL, 35),
(10, 'Aditi Gupta', 'november', 33, 42, 26, 49, 34),
(11, 'Aditi Gupta', 'december', 25, 30, 41, NULL, 32),
(12, 'Shikha Sharma', 'august', 11, 27, 33, NULL, 24),
(13, 'Shikha Sharma', 'september', 39, 16, 30, NULL, 28),
(14, 'Shikha Sharma', 'october', 27, 43, 24, NULL, 31),
(15, 'Shikha Sharma', 'november', 29, 26, 10, 50, 22),
(16, 'Shikha Sharma', 'december', 15, 24, 39, NULL, 26);

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `assign1` int(10) DEFAULT NULL,
  `assign2` int(10) DEFAULT NULL,
  `assign3` int(10) DEFAULT NULL,
  `internals` int(10) DEFAULT NULL,
  `average` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`id`, `name`, `month`, `assign1`, `assign2`, `assign3`, `internals`, `average`) VALUES
(1, 'Aditi Gupta', 'january', 30, 49, 25, NULL, 35),
(2, 'Aditi Gupta', 'feburary', 15, 45, 36, 45, 32),
(3, 'Aditi Gupta', 'march', 32, 28, 19, NULL, 26),
(4, 'Aditi Gupta', 'august', 35, 15, 26, NULL, 25),
(5, 'Aditi Gupta', 'september', 49, 25, 30, 0, 35),
(6, 'Aditi Gupta', 'october', 24, 37, 22, NULL, 31),
(7, 'Aditi Gupta', 'november', 43, 20, 16, 52, 26),
(8, 'Aditi Gupta', 'december', 35, 47, 24, NULL, 35),
(9, 'Shikha Sharma', 'august', 32, 22, 26, NULL, 27),
(10, 'Shikha Sharma', 'september', 32, 31, 28, NULL, 30),
(11, 'Shikha Sharma', 'october', 36, 33, 48, NULL, 39),
(12, 'Shikha Sharma', 'november', 23, 37, 21, 34, 27),
(13, 'Shikha Sharma', 'december', 28, 35, 29, NULL, 30),
(14, 'Shikha Sharma', 'january', 41, 45, 15, NULL, 34),
(15, 'Shikha Sharma', 'feburary', 23, 37, 30, 46, 30),
(16, 'Shikha Sharma', 'march', 20, 28, 25, NULL, 24);

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `assign1` int(10) DEFAULT NULL,
  `assign2` int(10) DEFAULT NULL,
  `assign3` int(10) DEFAULT NULL,
  `internals` int(10) DEFAULT NULL,
  `average` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `name`, `month`, `assign1`, `assign2`, `assign3`, `internals`, `average`) VALUES
(1, 'Aditi Gupta', 'january', 30, 49, 25, NULL, 35),
(2, 'Aditi Gupta', 'october', 15, 45, 36, NULL, 32),
(3, 'Shikha Sharma', 'november', 32, 28, 19, 48, 26),
(4, 'Aditi Gupta', 'november', 35, 15, 26, 39, 25),
(5, 'Shikha Sharma', 'august', 49, 25, 30, 0, 35),
(6, 'Aditi Gupta', 'december', 24, 37, 22, NULL, 31),
(7, 'Shikha Sharma', 'september', 43, 20, 16, NULL, 26),
(8, 'Shikha Sharma', 'october', 35, 47, 24, NULL, 35),
(9, 'Shikha Sharma', 'december', 32, 22, 26, NULL, 27),
(10, 'Aditi Gupta', 'march', 32, 31, 28, NULL, 30),
(11, 'Aditi Gupta', 'september', 36, 33, 48, NULL, 39),
(12, 'Shikha Sharma', 'march', 23, 37, 21, NULL, 27),
(13, 'Aditi Gupta', 'august', 28, 35, 29, NULL, 31),
(14, 'Shikha Sharma', 'feburary', 41, 45, 15, 43, 34),
(15, 'Shikha Sharma', 'january', 23, 37, 30, NULL, 30),
(16, 'Aditi Gupta', 'feburary', 20, 28, 25, 55, 24);

-- --------------------------------------------------------

--
-- Table structure for table `sregistration`
--

CREATE TABLE `sregistration` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sregistration`
--

INSERT INTO `sregistration` (`id`, `name`, `email`, `year`, `password`, `image`, `status`) VALUES
(1, 'Aditi Gupta', 'aditi34@gmail.com', 'BCA III', '1af24794a766a7726a8bf66f5d35aeb6', 'stu2.png', 1),
(2, 'Shikha Sharma', 'Shikhas98@Gmail.Com', 'BCA III', '31186bed426985d3677ad8066283029a', 'stu3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tregistration`
--

CREATE TABLE `tregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tregistration`
--

INSERT INTO `tregistration` (`id`, `name`, `email`, `subject`, `password`, `image`, `status`) VALUES
(1, 'Riya Sharma', 'riya565@gmail.com', 'DS', 'b79bdf5c1ea6ecad62c85e68f2acfdbd', 'teach1.png', 1),
(2, 'Aparna Singh', 'aparnas@gmail.com', 'PHP', 'bd3f5ae0339d8a51650f7f6029998361', 'teach2.png', 1),
(3, 'Divya Dutta', 'divya78@gmail.com', 'JAVA', '7a4f484658ff3f8237bcd9733b733777', 'teach3.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ds`
--
ALTER TABLE `ds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sregistration`
--
ALTER TABLE `sregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tregistration`
--
ALTER TABLE `tregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ds`
--
ALTER TABLE `ds`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `java`
--
ALTER TABLE `java`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sregistration`
--
ALTER TABLE `sregistration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tregistration`
--
ALTER TABLE `tregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
