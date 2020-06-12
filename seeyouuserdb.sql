-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2020 at 08:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seeyouuserdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `followerconnectionsdata`
--

CREATE TABLE `followerconnectionsdata` (
  `connectionId` varchar(255) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `friend_id` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `postcommentdata`
--

CREATE TABLE `postcommentdata` (
  `comment_id` varchar(20) NOT NULL,
  `from_id` varchar(20) NOT NULL,
  `comment` varchar(128) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `postlikecount`
--

CREATE TABLE `postlikecount` (
  `reactionid` varchar(20) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userlogindata`
--

CREATE TABLE `userlogindata` (
  `uid` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userpostdata`
--

CREATE TABLE `userpostdata` (
  `uid` varchar(20) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `post_content` varchar(255) DEFAULT NULL,
  `caption` varchar(255) NOT NULL,
  `likes` int(255) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userprofiledata`
--

CREATE TABLE `userprofiledata` (
  `uid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `bio` text,
  `mobile` varchar(11) DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `profile_pic` varchar(128) NOT NULL DEFAULT 'default.png',
  `friends` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `followerconnectionsdata`
--
ALTER TABLE `followerconnectionsdata`
  ADD PRIMARY KEY (`connectionId`);

--
-- Indexes for table `postcommentdata`
--
ALTER TABLE `postcommentdata`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `postlikecount`
--
ALTER TABLE `postlikecount`
  ADD PRIMARY KEY (`reactionid`);

--
-- Indexes for table `userlogindata`
--
ALTER TABLE `userlogindata`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `userpostdata`
--
ALTER TABLE `userpostdata`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `userprofiledata`
--
ALTER TABLE `userprofiledata`
  ADD PRIMARY KEY (`uid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userprofiledata`
--
ALTER TABLE `userprofiledata`
  ADD CONSTRAINT `userprofiledata_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userlogindata` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
