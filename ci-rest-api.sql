-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2018 at 06:49 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-rest-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `app` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `userid`, `datetime`, `app`, `title`) VALUES
(1, 1, '2018-02-20 11:30:00', 'Chrome Web Browser', 'WhatsApp'),
(2, 2, '2018-02-20 13:41:00', 'Postman', 'http://localhost/ci-rest-api/task');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pc` varchar(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `password`, `email`, `pc`, `token`) VALUES
(1, 'akbar', 'akbar', 'akbarsaputra45@hotmail.com', 'PC-01', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJ1c2VybmFtZSI6ImFrYmFyIiwicGMiOiJQQy0wMSIsInN0YXR1cyI6IkxvZ2luIiwiZGF0ZSI6IjIwLTAyLTE4IDA4OjU3OjMxIn0.FFHPc7swMZmi0rc-IAf4C5JkmRyDkZTYpOQxABBiDAA'),
(2, 'anung', 'anung', 'anung@gmail.com', 'PC-02', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjIiLCJ1c2VybmFtZSI6ImFudW5nIiwicGMiOiJQQy0wMiIsInN0YXR1cyI6IkxvZ2luIiwiZGF0ZSI6IjE5LTAyLTE4IDE2OjEyOjAwIn0.2G9GlNv24sUSjkyIhe4dJyu5p9wUZVFv5ykGL-H-On4'),
(3, 'yudha', 'yudha', 'yudha@gmail.com', 'PC-03', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjMiLCJ1c2VybmFtZSI6Inl1ZGhhIiwicGMiOiJQQy0wMyIsInN0YXR1cyI6IkxvZ2luIiwiZGF0ZSI6IjE5LTAyLTE4IDE5OjUyOjAxIn0.NEVXl2A7YLN3Nbr_mArdHRs1wYcc4aGa_eb4CWZwzMg'),
(4, 'saputra', 'saputra', 'saputra45@hotmail.com', 'PC-04', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjQiLCJ1c2VybmFtZSI6InNhcHV0cmEiLCJlbWFpbCI6InNhcHV0cmE0NUBob3RtYWlsLmNvbSIsInBjIjoiUEMtMDQiLCJkYXRlIjoiMjAxOC0wMi0xNCAwNzo1Nzo1NyJ9.ts1NRRSxbTC0pH-ZOQEfXFqqIDDdh_eHT07FX9sNJOg');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `status` set('Done','Progress','Waiting','') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `userid`, `task`, `status`) VALUES
(1, 1, 'Belajar PHP', 'Progress'),
(2, 1, 'Belajar Codeigniter', 'Waiting'),
(3, 1, 'Belajar JSON', 'Waiting'),
(4, 1, 'Belajar JSON', 'Waiting'),
(5, 1, 'Belajar AJAX', 'Waiting'),
(6, 2, 'Belajar Bootstrap', 'Progress'),
(7, 2, 'Belajar Gulp', 'Waiting'),
(8, 2, 'Belajar Sass', 'Waiting'),
(10, 3, 'Belajar Photoshop', 'Progress'),
(11, 3, 'Belajar Illustrator', 'Waiting'),
(12, 4, 'Belajar Adobe Premiere', 'Progress'),
(13, 4, 'Belajar Adobe After Effect', 'Waiting'),
(14, 4, 'Belajar Color Grading', 'Waiting');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `client` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
