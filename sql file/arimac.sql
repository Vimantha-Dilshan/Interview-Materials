-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 12:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arimac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `index` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `oop` varchar(255) NOT NULL,
  `oopmarks` varchar(255) NOT NULL,
  `wad` varchar(255) NOT NULL,
  `wadmarks` varchar(255) NOT NULL,
  `idcp` varchar(255) NOT NULL,
  `idcpmarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`index`, `name`, `address`, `birthday`, `oop`, `oopmarks`, `wad`, `wadmarks`, `idcp`, `idcpmarks`) VALUES
('IT200', 'Vimantha Dilshan', 'Kuliyapitiya', '2022-03-25', 'Participated', '78', 'On-Going', '-', 'Participated', '87'),
('IT201', 'Jason Roy', 'London', '2022-03-05', 'Participated', '90', 'On-Going', '-', 'On-Going', '-'),
('IT202', 'Steve Smith', 'Melbourne', '2022-03-17', 'Participated', '78', 'Participated', '67', 'Participated', '90'),
('IT203', 'Neranjan Dissanayake', 'Wellawa', '2022-03-25', 'On-Going', '-', 'Participated', '78', 'Participated', '89'),
('IT206', 'Ravi Sampath', 'Colombo', '2022-04-01', 'Participated', '56', 'Participated', '56', 'On-Going', '-'),
('IT208', 'Uditha Preamasiri', 'Kurunegala', '2022-03-17', 'On-Going', '-', 'On-Going', '-', 'Participated', '89'),
('IT301', 'Lakshani Manesha', 'Kuliyapitiya', '2022-03-02', 'Participated', '80', 'On-Going', '-', 'On-Going', '-'),
('IT302', 'Shantha Lalini', 'Kurunegala', '2022-02-02', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-'),
('IT303', 'Chamodi Uthpala', 'Kuliyapitiya', '2022-03-08', 'On-Going', '-', 'Participated', '75', 'On-Going', '-'),
('IT304', 'Lakna Ravindi', 'Kurunegala', '2022-03-02', 'Participated', '80', 'On-Going', '-', 'On-Going', '-'),
('IT305', 'Pawani Shamindi', 'Kuliyapitiya', '2022-03-03', 'Participated', '78', 'On-Going', '-', 'On-Going', '-'),
('IT306', 'Udari Isurika', 'Narammala', '2022-03-04', 'Participated', '56', 'On-Going', '-', 'On-Going', '-'),
('It307', 'Malsha Nayani', 'Kandy', '2022-03-01', 'Participated', '78', 'On-Going', '-', 'On-Going', '-'),
('IT308', 'Piyumi Nayanthara', 'kurunegala', '2022-03-06', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-'),
('IT309', 'Anjali Pawani', 'Kuliyapitiya', '2022-03-04', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-'),
('IT310', 'Asini Asangi', 'Narammala', '2022-03-05', 'On-Going', '-', 'Participated', '89', 'Participated', '76'),
('IT311', 'Pawani Methmi', 'Kandy', '2022-03-12', 'On-Going', '-', 'Participated', '67', 'On-Going', '-'),
('IT312', 'Niluki Manda', 'kurunegala', '2022-03-06', 'On-Going', '-', 'Participated', '78', 'On-Going', '-'),
('It313', 'kaveena Kawya', 'Kandy', '2022-03-02', 'Participated', '98', 'Participated', '54', 'Participated', '75'),
('IT315', 'Siluni Mashi', 'Kuliyapitiya', '2022-03-10', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-'),
('IT316', 'Chamudi Hansi', 'kurunegala', '2022-03-07', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-'),
('It317', 'Pawani Hasini', 'Kandy', '2022-03-12', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-'),
('IT318', 'Hassni Pamodi', 'kurunegala', '2022-03-02', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-'),
('IT319', 'Sasni mekala', 'Kuliyapitiya', '2022-03-07', 'Participated', '56', 'Participated', '76', 'Participated', '34'),
('IT320', 'Nisini Kulani', 'Narammala', '2022-03-07', 'On-Going', '-', 'On-Going', '-', 'On-Going', '-');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `password`) VALUES
('teacher', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
