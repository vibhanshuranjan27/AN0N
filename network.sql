-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 08:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `network`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `clgemail` varchar(22) DEFAULT NULL,
  `usn` varchar(10) NOT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `re_pass` varchar(10) DEFAULT NULL,
  `description` varchar(50) NOT NULL DEFAULT 'Add your description here!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `fname`, `lname`, `username`, `clgemail`, `usn`, `pass`, `re_pass`, `description`) VALUES
(1, 'newtest', 'test', 'newtest', '14ds@dsce.edu', '1ds19is076', 'test', 'test', 'change?'),
(2, 'shrihari', 'kulk', 'shriharimk', 'ids@dsce.edu', '1ds19is095', 'test', 'test', 'new change'),
(3, 'test', 'test', 'test123', 'test123@dsce.edu', '1DS19IS000', 'test', 'test', 'change?'),
(4, 'yashu', 'kulkarni', 'yash', '1ds@dsce.edu', '1DS19IS001', 'test', 'test', 'change?'),
(6, 'adu', 'kulkarni', 'adi', '1ds@dsce.edu', '1DS19IS002', 'test', 'test', 'change?'),
(9, 'shrikar', 'kulkarni', 'shrikar', '1ds19is097@dsce.edu.in', '1ds19is097', 'test', 'test', 'adding desc as shrikar'),
(10, 'new', 'test', 'new', 'new@gmail.com', '1DS19IS100', 'test', 'test', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `tim_e` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(25) NOT NULL,
  `likes` int(100) NOT NULL DEFAULT 0,
  `comments` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `desc`, `tim_e`, `username`, `likes`, `comments`) VALUES
(3, 'posting as shrihari', '2022-01-23 16:13:44', 'shriharimk', 0, NULL),
(5, 'dagfjdfbgjabdgkjbsfjg', '2022-01-23 16:18:59', 'shriharimk', 0, NULL),
(7, 'posting as testtrial', '2022-01-24 16:25:38', 'testtrtial', 0, NULL),
(8, 'posting as shrikar', '2022-02-04 05:27:23', 'shrikar', 0, NULL),
(9, 'test', '2022-02-04 06:08:03', 'shriharimk', 0, NULL),
(10, 'posting as new test', '2022-02-04 06:45:49', 'new', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`,`username`,`usn`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
