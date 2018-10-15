-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 08:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dls_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_mcq`
--

CREATE TABLE `tbl_quiz_mcq` (
  `quizID` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_quiz_mcq`
--

INSERT INTO `tbl_quiz_mcq` (`quizID`, `question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'My First Question', 'Answer 1', 'Answer 2', 'Answer 3', 'Answer 4'),
(2, 'My Second Question', 'sec Answer 1', 'sec Answer 2', 'sec Answer 3', 'Sec Answer 4'),
(3, 'Third Question', 'third Ans 1', 'third Ans 2', 'third Ans', 'third Ans 4'),
(4, 'Q4', 'Ans1', 'Ans2', 'Ans3', 'Ans 4'),
(5, 'My Q5', 'Q5 Answer 1', 'Q5 Answer 2', 'Q5 Answer 3', 'Q5 answer 4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(3, 'Geeth', '$2y$10$wFoj8LaYhfj9wbOOrR.ageeIw8nvILKK5YWFUoBvG8IYuaohpTXHK', 'Geeth', 'Fonseka', 'geethmohan@yahoo.com'),
(4, 'Gayan', '$2y$10$ihlCz6owrFi5dZNz.5SDt..7cIYhCu8qbA8JVXMbev4.Y1zPPg7zO', 'Gayan', 'Pathirana', 'geethmohan@yahoo.com'),
(5, 'new1', '$2y$10$qZ.eEdPb3NajzUctLYSC2OdvgceJN.nLawAx/7m/xTOpbTBBBMipO', 'New1', 'lnams', 'geethmohan@yahoo.com'),
(6, 'Pradeep', '$2y$10$EbVvF8/ayhsnouKYCmoFSeUpMWEii1A6dF7NgjtDHmPkBdKclMOK2', 'Pradeep', 'Kumara', 'geethmohan@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid_UNIQUE` (`uid`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
