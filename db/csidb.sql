-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 06:35 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `activestatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`email`, `password`, `activestatus`) VALUES
('presidentcsisvce@gmail.com', 'adminpresident123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `sno` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `period` varchar(100) NOT NULL,
  `support` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`sno`, `event`, `period`, `support`, `description`) VALUES
(1, 'CSI Inauguration', '10th August\'18 ', 'CSI SVCE', 'On 10th of August 2018, the SVCE - CSI(The Computer Society of India) Student Chapter for 2018-2019 was inaugurated by the chief guest Mr. Toney Caleb, Executive Director at Infoziant Systems, Chennai, who also delivered a guest lecture on \"Penetration testing and Malware Analysis\". He motivated the attendees of the inaugural with his company\'s inspiring breakthrough records. Furthermore, the achievements of last year\'s activities were discussed and the current office bearers of the SVCE-CSI chapter were declared and encouraged to take the quality of the chapter to the next higher level.'),
(2, 'Quiz Up', '26th September\'18', 'CSI SVCE', 'The main objective of this event was to provide the participants a learning platform for their campus preparations. The initial written round consisted of 30 questions split into technical, logical, verbal and analytical skills. After a thrilling tie-up among 4 participants in the first round, a second round was held in which the winner and the runner-up were awarded a cash prize of Rs. 1,500 and Rs. 750. The event was a grand success, with each participant getting a motivating boost.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
