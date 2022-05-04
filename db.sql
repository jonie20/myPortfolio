-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 09:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `articles` (
  `articleid` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `quote` varchar(500) NOT NULL,
  `modifyid` varchar(20) NOT NULL,
  `status` enum('inactive','active') NOT NULL  DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `adverts` (
  `advertid` int(11) NOT NULL,
  `product` varchar(60) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_member`
--

CREATE TABLE `admin_details` (
  `title` int(11) NOT NULL,
  `skills` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `admin` (`userid`, `username`, `password`, `uname`, `access`) VALUES
(1, 'serbermz', '21232f297a57a5a743894a0e4a801fc3', 'Lyndon Bermoy', 1),
(2, 'aga', 'fea30f2213e57de1a3c985f0cad303b7', 'Aga Bermoy', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleid`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`advertid`);


--
-- Indexes for table `user`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `articles`
  MODIFY `articleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `adverts`
  MODIFY `advertid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
