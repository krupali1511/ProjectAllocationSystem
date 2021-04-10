-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 01:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `password`) VALUES
('krupa', 'krupa123');

-- --------------------------------------------------------

--
-- Table structure for table `definition`
--

CREATE TABLE `definition` (
  `def_id` int(11) NOT NULL,
  `def_title` varchar(30) NOT NULL,
  `def_desc` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `project_min` int(30) NOT NULL,
  `project_max` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `definition`
--

INSERT INTO `definition` (`def_id`, `def_title`, `def_desc`, `date`, `project_min`, `project_max`) VALUES
(2, 'Flutter App', 'Develop an flutter app for DDU', '2021-04-30', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `domain` varchar(200) NOT NULL,
  `research` varchar(200) NOT NULL,
  `others` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `name`, `email`, `phone`, `password`, `qualification`, `domain`, `research`, `others`) VALUES
('f112', 'Jaswant Kumar a', 'jas@gmail.coma', '123', '12312', 'M.Techa', 'java', 'php', 'asp'),
('f908', 'jas', 'jas@gmail.com', '1234567', '123', '', 'NUL', 'NUL', 'NUL'),
('f987', 'jas', 'jas@gmail.comhahah', '1234567', '147', 'sbkjh', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `lid` int(30) NOT NULL,
  `s_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`lid`, `s_id`) VALUES
(1, '12345'),
(1, '123'),
(1, '141'),
(2, '0'),
(2, '0'),
(2, '0'),
(3, 'CE077'),
(3, 'CE077'),
(3, 'S123'),
(4, 'CE077'),
(4, 'S124'),
(4, 'S123');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(5) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `s_id`, `f_id`, `msg`) VALUES
(1, 's111', 'f112', 'hello'),
(4, 's113', 'f112', ''),
(5, 's113', 'f112', ''),
(6, 's113', 'f112', ''),
(7, 's113', 'f112', 'student'),
(10, 's113', 'f112', 'heuyyk'),
(11, 's115', 'f112', 'hey'),
(12, 's113', 'f112', 'hahah'),
(14, 's113', 'f112', ''),
(15, 's113', 'f112', 'asdfgghh'),
(16, 's113', 'f112', 'I am writing in this letter in response to you that as a web designer I need to show my technical skills. And I have got the job according to my choice by surfing for freejobalert.com.\r\nI have done my project  in ASP.NET,JAVA,VB  Technologies and als');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `domain` varchar(20) DEFAULT NULL,
  `s_id` varchar(10) DEFAULT NULL,
  `f_id` varchar(10) DEFAULT NULL,
  `ppf` varchar(200) NOT NULL,
  `psf` varchar(200) NOT NULL,
  `remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `name`, `domain`, `s_id`, `f_id`, `ppf`, `psf`, `remark`) VALUES
('1234', '', '', 'we34', 'f112', '', '', 'Excellent report!'),
('dd', NULL, NULL, 's115', 'f112', 'gantt chart f.pdf', '', 'hello'),
('gdg', '', '', 's112', 'f987', '', '', ''),
('p114', NULL, NULL, 's113', 'f112', 'CSFF-SDM.doc', 'CSFF-SDM.doc', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `project_temp`
--

CREATE TABLE `project_temp` (
  `project_id` int(11) NOT NULL,
  `project_link` varchar(100) NOT NULL,
  `project_lastDate` varchar(10) NOT NULL,
  `project_min` int(10) NOT NULL,
  `project_max` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(10) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `s_id`, `f_id`) VALUES
(1, 's112', 'f987'),
(4, 's113', 'f908'),
(789, 'we34', 'f112'),
(790, 's113', 'f987'),
(791, 's113', 'f112'),
(792, 's113', 'f112'),
(793, 's113', 'f987'),
(794, 's113', 'f112'),
(795, '12345', 'f987');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `year` varchar(10) NOT NULL,
  `stream` varchar(15) NOT NULL,
  `cpi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `email`, `phone`, `password`, `year`, `stream`, `cpi`) VALUES
('', '', '', 'admin', 'admin', '', 'Selcet', 0),
('1213', 'ksk', 'sdlj@gmail.com', 'admin', 'admin', '2001', 'CSE', 0),
('123', 'Akshit', 'akonzata@gmail.com', '56598956', 'ak', '2019', 'no', 9),
('12345', 'Pritesh', 'p4@yahoo.com', '2324345', 'bunny', '2016', 'CSE', 0),
('141', 'saaya', 'sweetsaaya@gmail.com', 'admin', 'admin', '1990', 'COM', 0),
('CE077', 'Krupali Mehta', 'knmehta0@gmail.com', '1234567891', '123456789', '2021', 'B.Tech', 9),
('s111', 'Jaswant Kumar', 'jas@gmail.com', '1234567890', '12345', '15-16', 'COM', 0),
('s112', 'Jaswant Kumar', 'jaswant@gmail.com', '123456789', '123', '15-16', 'CSE', 0),
('s113', 'Jaswant Kumar', 'jaswant@gamial.com', '5468522', '', '123', 'EE', 0),
('s114', 'jaswant', 'jas@gmail.com', '12345678', '123a', '15-16', 'CSE', 0),
('s115', 'jas', 'jaswant@gamial.com', '1234567890', '122', '15-16', 'CSE', 0),
('S123', 'xyz', 'xyz@gmail.com', '1234567897', '123', '2021', 'B.Tech', 7),
('S124', 'abc', 'abc@gmail.com', '1234567898', '123', '2021', 'B.Tech', 7),
('we34', 'jknbkjn', 'jhbjb@hgih', 'jhgjhbh', 'hbkbmj', 'jhbkh', 'CSE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `st_mail`
--

CREATE TABLE `st_mail` (
  `s_mail_id` int(11) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  `mag` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_mail`
--

INSERT INTO `st_mail` (`s_mail_id`, `s_id`, `f_id`, `mag`) VALUES
(1, 's113', 'f112', 'huj'),
(2, 's113', 'f112', '142'),
(3, 's113', 'f112', 'hello dear'),
(4, 's113', 'f112', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `tid` int(11) NOT NULL,
  `leader_id` varchar(30) NOT NULL,
  `lid` int(30) NOT NULL,
  `def_if` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`tid`, `leader_id`, `lid`, `def_if`) VALUES
(1, '12345', 1, 1),
(4, 'CE077', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `definition`
--
ALTER TABLE `definition`
  ADD PRIMARY KEY (`def_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`),
  ADD KEY `s_id` (`s_id`,`f_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `project_temp`
--
ALTER TABLE `project_temp`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `st_mail`
--
ALTER TABLE `st_mail`
  ADD PRIMARY KEY (`s_mail_id`),
  ADD KEY `s_id` (`s_id`,`f_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `definition`
--
ALTER TABLE `definition`
  MODIFY `def_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project_temp`
--
ALTER TABLE `project_temp`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=796;

--
-- AUTO_INCREMENT for table `st_mail`
--
ALTER TABLE `st_mail`
  MODIFY `s_mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `makey1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `makey2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fkey1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `fkey2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

--
-- Constraints for table `st_mail`
--
ALTER TABLE `st_mail`
  ADD CONSTRAINT `m1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `m2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
