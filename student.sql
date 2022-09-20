-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 08:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `Rollno` int(10) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `sub1` int(3) NOT NULL,
  `sub2` int(3) NOT NULL,
  `sub3` int(3) NOT NULL,
  `sub4` int(3) NOT NULL,
  `sub5` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`Rollno`, `Sname`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES
(1, 'Giriprasad S Patil', 88, 88, 77, 66, 55),
(2, 'Giriprasad', 88, 77, 66, 55, 44),
(3, 'Suresh', 66, 77, 34, 43, 23),
(4, 'Vijay', 22, 33, 44, 55, 66),
(5, 'Ramesh', 55, 55, 55, 55, 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`Rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
