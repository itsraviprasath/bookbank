-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 12:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `c_username` varchar(30) NOT NULL,
  `book_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `doornumber` text NOT NULL,
  `streetname` text NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `pincode` int(8) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(20) NOT NULL,
  `c_username` text NOT NULL,
  `bookname` text NOT NULL,
  `authorname` varchar(30) NOT NULL,
  `publisher` mediumtext NOT NULL,
  `booklanguage` varchar(20) NOT NULL,
  `bookedition` text NOT NULL,
  `numberofpages` int(10) DEFAULT NULL,
  `aboutthebook` text NOT NULL,
  `bookcondition` varchar(100) NOT NULL,
  `bookusedfor` text NOT NULL,
  `booksavailable` int(10) NOT NULL,
  `book_image` text NOT NULL,
  `book_video` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `uploaded_on` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `c_username`, `bookname`, `authorname`, `publisher`, `booklanguage`, `bookedition`, `numberofpages`, `aboutthebook`, `bookcondition`, `bookusedfor`, `booksavailable`, `book_image`, `book_video`, `created_at`, `uploaded_on`, `updated_at`) VALUES
(1, 'raviprasath', 'Programming with Java', 'E Balagurusamy', 'McGraw-Hill', 'English', 'Sixth edition (25 March 2019)', 600, 'The sixth edition of this most trusted book on JAVA for beginners is here with some essential updates. Retaining its quintessential style of concept explanation with exhaustive programs, solved examples, and illustrations, this test takes the journey of understanding JAVA to slightly higher level. The book introduces readers to some of the Core JAVA topics like JDBC, Java Servlets, Java Beans, Lambada Expression and much more. Practical real-life projects will give a better understanding of JAVA usage and make students industry-ready.Salient Features:?New chapters on JDBC, Java Servlets and Graphic Programming using AWT and SWING?New Appendix on?Iterators, Java Beans, Lambada Expression, Generic Programming?Two new full- fledged projects: 1. LIVE CRICKET SCORE APP?Major project and 2. SIMPLE WEB CRAWLER -Minor project?Refreshed Pedagogy', 'Good', 'Less then 1 year', 1, 'uploads/Java.jpg', '', '2023-02-17 08:03:45', '2023-02-17 08:03:45', '2023-02-17 12:44:38'),
(2, 'raviprasath', 'Python: The Complete Reference', 'Martin C. Brown', 'McGraw Hill Education', 'English', 'Forth edition (20 March 2018)', 720, 'Explore all aspects of programming with Python in this comprehensive resource. Expert programmer Martin Brown guides you from the fundamentals of using modules through the use of advanced objectorientation classes. Salient Features:1 Learn how to develop complex applications, create multimedia software, and develop interactive Web sites. 2 While written with the experienced programmer in mind, it is an invaluable source-book for the beginning programmer as well. 3 The book also covers how to utilize Python?s extensive libraries, including tools for reading and parsing SGML, HTML, and XML files.', 'Moderate', '1 Year', 1, 'uploads/Python.jpg', '', '2023-02-17 08:06:26', '2023-02-17 08:06:26', '2023-02-17 08:06:26'),
(3, 'raviprasath', 'Let Us C++', 'Yashavant Kanetkar', 'BPB Publications', 'English', '16 September 2020', 362, 'Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 'Bad', '3 Years', 1, 'uploads/C++.jpg', '', '2023-02-17 08:09:26', '2023-02-17 08:09:26', '2023-02-17 08:09:26'),
(4, 'raviprasath', 'C Programming Language', 'Brian Kernighan, Dennis Ritchi', 'PHI', 'English', '2nd edition (1 April 1988)', 288, 'Learn how to program in C from the developers of C, Brian Kernighan and Dennis Ritchie. Intended for those with at least some experience with one other language (even if you are a novice), this book contains a tutorial introduction to get new users started as soon as possible and separate chapters on each major feature.', 'Good', 'Less then 1 year', 1, 'uploads/C.jpg', '', '2023-02-17 08:13:12', '2023-02-17 08:13:12', '2023-02-17 08:13:12'),
(5, 'raviprasath', 'Full Stack Javascript', 'Mardan', 'Apress', 'English', 'January 2019', 900, 'Full Stack Javascript: Learn Backbone.Js Node.Js And Mongodb by Mardan, Apress', 'Moderate', '1 Year', 1, 'uploads/Javascript.jpg', '', '2023-02-17 08:16:12', '2023-02-17 08:16:12', '2023-02-17 08:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `gettings`
--

CREATE TABLE `gettings` (
  `id` int(11) NOT NULL,
  `c_username` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobilenumber` bigint(13) NOT NULL,
  `aadharnumber` bigint(16) NOT NULL,
  `address` text NOT NULL,
  `role` varchar(15) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobilenumber`, `aadharnumber`, `address`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'RAVIPRASATH', 'R', 'raviprasath.in@gmail.com', 9994895712, 331520029572, 'Ambedkar Street, Sriramapuram, Dindigul, Tamil Nadu, India. 624622', 'Student', 'raviprasath', '202cb962ac59075b964b07152d234b70', '2023-02-17 02:29:11', '2023-02-17 02:29:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gettings`
--
ALTER TABLE `gettings`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `gettings`
--
ALTER TABLE `gettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
