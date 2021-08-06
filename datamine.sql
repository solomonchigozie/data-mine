-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:16 PM
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
-- Database: `datamine`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(200) NOT NULL,
  `matric_no` varchar(200) NOT NULL,
  `institution` text NOT NULL,
  `department` text NOT NULL,
  `level` int(200) NOT NULL,
  `course_mode` text NOT NULL,
  `semester` varchar(200) NOT NULL,
  `gp` float NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `matric_no`, `institution`, `department`, `level`, `course_mode`, `semester`, `gp`, `date_added`) VALUES
(2, 'DE.2016/4973', 'rivers state university', 'physics', 200, 'part time', 'second semester', 3.8, '2021-04-08 08:48:21'),
(4, 'DE.2016/4973', 'rivers state university', 'Mathematics', 200, 'full time', 'first semester', 4.1, '2021-04-10 08:20:01'),
(5, 'DE.2016/4985', 'rivers state university', 'Computer Science', 200, 'full time', 'first semester', 3.2, '2021-04-10 08:20:31'),
(6, 'DE.2016/8520', 'rivers state university', 'Computer Science', 200, 'full time', 'first semester', 3, '2021-04-10 08:20:55'),
(7, 'de.2016/4934', 'rivers state university', 'Mathematics', 200, 'full time', 'first semester', 4.3, '2021-04-10 08:40:51'),
(8, 'DE.2016/4852', 'rivers state university', 'Mathematics', 300, 'full time', 'first semester', 4.1, '2021-04-10 08:41:12'),
(9, 'de.2016/4973', 'rivers state university', 'Physics', 100, 'full time', 'first semester', 1.4, '2021-04-12 01:46:26'),
(10, 'de.2016/4973', 'rivers state university', 'Physics', 200, 'full time', 'first semester', 2.6, '2021-04-12 01:46:41'),
(11, 'DE.2016/4973', 'rivers state university', 'Physics', 300, 'full time', 'first semester', 3.8, '2021-04-12 01:47:03'),
(12, 'DE.2016/4973', 'rivers state university', 'Physics', 300, 'full time', 'first semester', 4.6, '2021-04-12 01:47:20'),
(13, 'DE.2016/4946', 'rivers state university', 'Computer Science', 200, 'full time', 'first semester', 3.6, '2021-04-12 13:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `matric_no` varchar(200) NOT NULL,
  `names` varchar(200) NOT NULL,
  `institution` text NOT NULL,
  `department` text NOT NULL,
  `course` text NOT NULL,
  `entry_year` varchar(200) NOT NULL,
  `sex` text NOT NULL,
  `level` int(200) NOT NULL,
  `course_mode` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `matric_no`, `names`, `institution`, `department`, `course`, `entry_year`, `sex`, `level`, `course_mode`, `date_added`) VALUES
(1, 'de.2016/4973', 'solomon chigozie', 'rivers state university', 'physics', '', '20910', 'male', 300, '4 years', '2021-03-27 18:02:44'),
(2, 'DE.2016/4973', 'sochilfes', 'rivers state university', 'BIOLOGY', '', '2016', 'male', 0, 'Please select', '2021-03-27 18:13:18'),
(3, 'DE.2016/4973', 'solomon chigozie', 'rivers state university', 'BIOLOGY', '', '2014', 'male', 200, '5 years', '2021-03-27 18:16:22'),
(4, 'DE.2016/4973', 'solomonchigozie', 'rivers state university', 'BIOLOGY', '', '2090', 'male', 200, '5 years', '2021-03-27 18:20:18'),
(5, 'HI.2016/4973', 'solomon chigozie', 'rsu', 'BIOLOGY', '', '2020', 'male', 200, 'full time', '2021-03-28 06:07:47'),
(6, 'DE.2016/4946', 'favor king', 'rivers state university', 'computer science', '', '2019', 'female', 300, 'full time', '2021-04-12 13:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(12, 'solomon chigozie', 'solomon1chigozie@gmail.com', 'bbdd0e294fd183663ccadb3d3f94dca1'),
(13, 'solomon chigozie', 'sochilfes@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
