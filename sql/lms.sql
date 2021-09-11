-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 07:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`id`, `fname`, `lname`, `user`, `password`, `phone`, `datetime`) VALUES
(1, 'shitol', 'Ahmed', 'admin', '1234', 8801318600735, '2020-12-29 16:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(255) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `book_author_name` varchar(255) NOT NULL,
  `book_publication_name` varchar(255) NOT NULL,
  `book_purchase_date` varchar(255) NOT NULL,
  `book_price` varchar(255) NOT NULL,
  `book_qty` int(255) NOT NULL,
  `available_qty` int(255) NOT NULL,
  `libraian_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_id`, `book_name`, `book_image`, `book_author_name`, `book_publication_name`, `book_purchase_date`, `book_price`, `book_qty`, `available_qty`, `libraian_username`) VALUES
(1, '1', 'Numerical Methods', 'upload/rokimg_20151105_105175.gif', 'E. Balaguruswamy', 'Tata McGraw-Hill', '2018-01-01', '1098', 10, 9, 'kabir'),
(2, '2', 'Schaum Outline Computer Graphics (Paperback)', 'upload/d27f7d05b114_122196.jpg', 'E. Balaguruswamy', 'Tata McGraw-Hill', '2018-01-01', '1200', 5, 4, 'kabir'),
(3, '3', 'Fluid Mechanics and its Applications', 'upload/0ef28c373_197197.jpg', 'E. Balaguruswamy', 'Tata McGraw-Hill', '2018-01-01', '1200', 5, 4, 'kabir'),
(4, '4', 'A Textbook Of Thermal Engineering: [SI Units]', 'upload/rokimg_20150126_92904.gif', 'E. Balaguruswamy', 'Tata McGraw-Hill', '2018-01-01', '1200', 5, 5, 'kabir'),
(5, '5', 'Express Learning - Computer Fundamentals And Programming', 'upload/rokimg_20151004_102979.gif', 'E. Balaguruswamy', 'Tata McGraw-Hill', '2018-01-01', '1200', 5, 5, 'kabir'),
(6, '6', 'Corrosion Engineering', 'upload/f72aa20bf_105297.jpg', 'E. Balaguruswamy', 'Tata McGraw-Hill', '2018-01-01', '1000', 8, 6, 'kabir'),
(7, '7', 'Instrumentation and Control Systems', 'upload/1b23badb8c74_124091.jpg', 'E. Balaguruswamy', 'Tata McGraw-Hill', '2018-01-01', '600', 6, 5, 'kabir');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(255) NOT NULL,
  `sid` bigint(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `book_id` int(255) NOT NULL,
  `book_issue_date` varchar(255) NOT NULL,
  `book_return_date` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `sid`, `sname`, `book_id`, `book_issue_date`, `book_return_date`, `datetime`) VALUES
(1, 2017000000039, 'Shahriar Ahmed Shawon', 1, '25-12-2020', '', '2020-12-25 10:38:49'),
(2, 2017000000039, 'Shahriar Ahmed Shawon', 6, '29-12-2020', '', '2020-12-29 16:15:01'),
(3, 2017000000050, 'Foyzunnasa Anny', 2, '07-01-2021', '', '2021-01-07 18:47:27'),
(4, 2017000000050, 'Foyzunnasa Anny', 3, '07-01-2021', '', '2021-01-07 18:47:37'),
(5, 2017000000050, 'Foyzunnasa Anny', 6, '07-01-2021', '', '2021-01-07 18:47:45'),
(6, 2017000000050, 'Foyzunnasa Anny', 7, '07-01-2021', '', '2021-01-07 18:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `role` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `fname`, `lname`, `email`, `user`, `password`, `phone`, `role`, `status`, `datetime`) VALUES
(1, 'Shawon', 'ahmed', 'sa@gmail.com', 'shawon', '1234', 1928788736, 1, 1, '2021-01-07 18:45:35'),
(2, 'shakil', 'ahmed', 'sk@gmail.com', 'shakil', '1234', 1928788737, 1, 1, '2021-01-07 18:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sid` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `sid`, `email`, `password`, `phone`, `image`, `status`, `datetime`) VALUES
(1, 'Shahriar Ahmed', 'Shawon', 2017000000039, 'sashawon60@gmail.com', '1234', 1928788735, 'upload/IMG20200305125557.jpg', 1, '2020-12-24 12:42:47'),
(2, 'Shifat Ahmed', 'Shakil', 2020000000000, '2020000000000@gmail.com', '1234', 1934577384, 'upload/IMG20200310125431.jpg', 1, '2020-12-24 12:45:00'),
(3, 'Adidur Rahman', 'Shitol', 2021000000000, '2021000000000@gmail.com', '1234', 1934677384, 'upload/IMG20200303195128.jpg', 1, '2020-12-24 12:45:59'),
(4, 'Md Taskin', 'Ahmed', 2030000000000, '2030000000000@gmail.com', '1234', 1934642384, 'upload/IMG20200303202911.jpg', 1, '2020-12-24 12:47:26'),
(5, 'Foyzunnasa', 'Anny', 2017000000050, '2017000000050@gmail.com', '1234', 2147483647, 'upload/IMG20200317224551.jpg', 1, '2020-12-24 12:48:11'),
(6, 'md', 'Yousuf', 2017000000067, '2017000000067@gmail.com', '1234', 1922334735, 'upload/IMG20200317224551.jpg', 1, '2020-12-24 13:38:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authority`
--
ALTER TABLE `authority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
