-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 12:47 AM
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
-- Table structure for table `tbl_lessons`
--

CREATE TABLE `tbl_lessons` (
  `lessonID` char(11) NOT NULL,
  `lesson_desc` varchar(255) DEFAULT NULL,
  `moduleID` char(11) DEFAULT NULL,
  `vid_url` varchar(2083) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lessons`
--

INSERT INTO `tbl_lessons` (`lessonID`, `lesson_desc`, `moduleID`, `vid_url`) VALUES
('LES0001', 'Lesson 1', 'MOD001', ''),
('LES00011', 'Lesson 11', 'MOD004', ''),
('LES00012', 'Lesson  12', 'MOD005', ''),
('LES00013', 'Lesson 13', 'MOD005', ''),
('LES00014', 'Lesson 14', 'MOD005', ''),
('LES00015', 'Lesson 15', 'MOD005', ''),
('LES0002', 'Lesson 2', 'MOD001', ''),
('LES0003', 'Lesson 3', 'MOD001', ''),
('LES0004', 'Lesson 4', 'MOD003', ''),
('LES0005', 'Lesson 5', 'MOD003', ''),
('LES0006', 'Lesson 6', 'MOD003', ''),
('LES0007', 'Lesson 7', 'MOD003', ''),
('LES0008', 'Lesson  8', 'MOD004', ''),
('LES0009', 'Lesson 9', 'MOD004', ''),
('LES0010', 'Lesson 10', 'MOD004', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_levels`
--

CREATE TABLE `tbl_levels` (
  `levelID` char(11) NOT NULL,
  `level_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_levels`
--

INSERT INTO `tbl_levels` (`levelID`, `level_desc`) VALUES
('L001', 'Diploma'),
('L002', 'Certificate'),
('L003', 'Degree');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modules`
--

CREATE TABLE `tbl_modules` (
  `moduleID` char(11) NOT NULL,
  `module_desc` varchar(255) NOT NULL,
  `subID` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_modules`
--

INSERT INTO `tbl_modules` (`moduleID`, `module_desc`, `subID`) VALUES
('MOD001', 'Module sample 1', 'SUB001'),
('MOD002', 'Module sample 2', 'SUB002'),
('MOD003', 'Module sample 3', 'SUB002'),
('MOD004', 'Module sample 4', 'SUB003'),
('MOD005', 'Module sample 5', 'SUB001'),
('MOD006', 'module 6', 'SUB001');

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
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `subID` char(11) NOT NULL,
  `sub_desc` varchar(255) NOT NULL,
  `levelID` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`subID`, `sub_desc`, `levelID`) VALUES
('SUB001', 'sample sub 1', 'L003'),
('SUB002', 'sample sub 2', 'L001'),
('SUB003', 'sample sub 3', 'L003'),
('SUB004', 'sample sub 4', 'L001'),
('SUB005', 'sample sub 5', 'L003'),
('SUB006', 'sample sub 6', 'L002'),
('SUB007', 'sample sub 7', 'L002'),
('SUB008', 'sample sub 8', 'L002'),
('SUB009', 'sample sub 9', 'L001'),
('SUB010', 'sample sub 10', 'L001');

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
(6, 'Pradeep', '$2y$10$EbVvF8/ayhsnouKYCmoFSeUpMWEii1A6dF7NgjtDHmPkBdKclMOK2', 'Pradeep', 'Kumara', 'geethmohan@yahoo.com'),
(7, 'Buwa', '$2y$10$vyEbzcZ5nVuSlZvpwbhzc.eudAq.lc./P7eZ1kD5ubfp5PrqUaMzm', 'Buwa', 'Perera', 'test@ymail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lessons`
--
ALTER TABLE `tbl_lessons`
  ADD PRIMARY KEY (`lessonID`);

--
-- Indexes for table `tbl_levels`
--
ALTER TABLE `tbl_levels`
  ADD PRIMARY KEY (`levelID`);

--
-- Indexes for table `tbl_modules`
--
ALTER TABLE `tbl_modules`
  ADD PRIMARY KEY (`moduleID`);

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
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
