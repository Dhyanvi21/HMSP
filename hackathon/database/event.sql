-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `events` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `sem` varchar(1) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`user_name`, `user_pass`, `category`, `events`, `name`, `usn`, `branch`, `sem`, `mobile`) VALUES
('vinaybk@gmail', '123', 'admin', '', 'VINAY B K', '4GM17IS060', 'IS', '8', '8095531197'),
('k@gmail.com', '123', 'USER', 'BUSSINESS ORIENTED', 'kruthik p jain', '4GM18IS054', 'CS', '2', '8095531197'),
('v@gmail.com', '111', 'USER', 'SOCIAL IMPACT', 'VINAY', '4GM17IS044', 'IS', '4', '9916152536');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `event_type` varchar(10) NOT NULL,
  `events` varchar(20) NOT NULL,
  `code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`event_type`, `events`, `code`) VALUES
('HACKATHON', 'BUSSINESS ORIENTED', 'BO'),
('HACKATHON', 'SOCIAL IMPACT', 'SI');

-- --------------------------------------------------------

--
-- Table structure for table `grevience`
--

CREATE TABLE `grevience` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `msg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grevience`
--

INSERT INTO `grevience` (`name`, `email`, `sub`, `msg`) VALUES
('GURURAJ', 'guru@gmail.com', 'regarding HACK', 'abcdefghijklmnopqrst');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `part_id` varchar(6) NOT NULL,
  `events` varchar(20) NOT NULL,
  `event_type` varchar(10) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `branch` varchar(6) NOT NULL,
  `sem` int(1) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `tid` varchar(30) NOT NULL,
  `place` varchar(10) NOT NULL DEFAULT 'NONE',
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`part_id`, `events`, `event_type`, `tname`, `name`, `usn`, `branch`, `sem`, `mobile`, `email`, `msg`, `tid`, `place`, `score`) VALUES
('BO-1', 'BUSSINESS ORIENTED', 'HACKATHON', 'Jupiter', 'kruthik p jain', 'Gm Institute of Technology,Davangere', 'IS', 6, '8095531197', 'kruthik@gmail.com', 'AAA\r\nAAA\r\nAAA', 'TRA0012637U00', 'SECOND', 250),
('BO-2', 'BUSSINESS ORIENTED', 'HACKATHON', 'aaa', 'VINAY', 'gmit', 'IS', 6, '8095531197', 'v@gmai', 'aaaaa', 'tn886565', 'FIRST', 500),
('SI-1', 'SOCIAL IMPACT', 'HACKATHON', 'aaa', 'ffff', 'gm in', 'IS', 6, '8095531197', 'vvvvvvvvv', 'vvv', 'tn886565', 'SECOND', 200),
('SI-2', 'SOCIAL IMPACT', 'HACKATHON', 'K1', 'KIRAN', 'GMIT', 'CS', 6, '9916152536', 'KI@GMAIL', 'aaaaa\r\ndddd\r\nfggg', 'tn886565', 'FIRST', 300);

-- --------------------------------------------------------

--
-- Table structure for table `prob`
--

CREATE TABLE `prob` (
  `id` int(11) DEFAULT 0,
  `ps` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prob`
--

INSERT INTO `prob` (`id`, `ps`) VALUES
(0, '***BUSSINESS ORIENTED***'),
(0, '1)ABCD'),
(0, '2)EFGH'),
(0, 'aaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `part_id` varchar(6) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `events` varchar(20) NOT NULL,
  `event_type` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(6) NOT NULL,
  `place` varchar(6) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`part_id`, `team_name`, `events`, `event_type`, `name`, `usn`, `branch`, `place`, `score`) VALUES
('BO-1', 'Jupiter', 'BUSSINESS ORIENTED', 'HACKATHON', 'kruthik p jain', 'Gm Institu', 'IS', 'SECOND', 250),
('BO-2', 'aaa', 'BUSSINESS ORIENTED', 'HACKATHON', 'VINAY', 'gmit', 'IS', 'FIRST', 500),
('SI-1', 'aaa', 'SOCIAL IMPACT', 'HACKATHON', 'ffff', 'gm in', 'IS', 'SECOND', 200),
('SI-2', 'K1', 'SOCIAL IMPACT', 'HACKATHON', 'KIRAN', 'GMIT', 'CS', 'FIRST', 300);

-- --------------------------------------------------------

--
-- Table structure for table `team_score`
--

CREATE TABLE `team_score` (
  `team_id` varchar(20) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `score` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_score`
--

INSERT INTO `team_score` (`team_id`, `team_name`, `score`) VALUES
('Jupiter', 'BO-1', '250'),
('aaa', 'BO-2', '500'),
('aaa', 'SI-1', '200'),
('K1', 'SI-2', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`events`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`part_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
