-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 12:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credentials`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('a@gmail.com', 'a'),
('k@gmail.com', 'a'),
('ab@gmail.com', 'a'),
('babu@gmail.com', 'a'),
('thor@gmail.com', 'a'),
('loki@gmail.com', 'a'),
('lokimama@gmail.com', 'a'),
('dheraj@gmail.com', 'a'),
('monjir@gmail.com', 'a'),
('baba@gmail.com', 'a'),
('pp@gmail.com', 'a'),
('pp@gmail.com', 'a'),
('pp@gmail.com', 'a'),
('pp@gmail.com', 'a'),
('iron@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sl` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `content` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sl`, `sender`, `receiver`, `content`) VALUES
(1, 'a@gmail.com', 'da@ss.com', 'kkkkkkkk'),
(2, 'a@gmail.com', 'da@ss.com', 'kkkkkkkk'),
(3, 'k@gmail.com', 'a@gmail.com', 'aaaaaaaaaaaaaaaa'),
(4, 'ab@gmail.com', 'a@gmail.com', 'ki khbr'),
(5, 'a@gmail.com', 'ab@gmail.com', 'hiiiiiiiii'),
(6, 'a@gmail.com', 'a@gmail.com', 'a'),
(7, 'a@gmail.com', 'a@gmail.com', 'a'),
(8, 'ab@gmail.com', 'da@ss.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(9, 'ab@gmail.com', 'da@ss.com', 'koi jao baba'),
(10, 'a@gmail.com', 'k@gmail.com', 'koi jao baba'),
(11, 'dheraj@gmail.com', 'thor@gmail.com', 'bhai ami dheraj'),
(12, 'thor@gmail.com', 'lokimama@gmail.com', 'kire mama ami thor'),
(13, 'thor@gmail.com', 'lokimama@gmail.com', 'a'),
(14, 'thor@gmail.com', 'lokimama@gmail.com', 'a'),
(15, 'loki@gmail.com', 'dheraj@gmail.com', 'hey ami loki , asgard theke bolchi'),
(16, 'babu@gmail.com', 'dheraj@gmail.com', 'ami jail theke bolchi'),
(17, 'babu@gmail.com', 'pp@gmail.com', 'mail from babu'),
(18, 'iron@gmail.com', 'babu@gmail.com', 'hello i am iron kire kamras kn');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `propic` varchar(50) NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `dob`, `gender`, `phone`, `email`, `password`, `propic`) VALUES
('where', 'is', '2016-05-24', 'male', 12312321, 'a@gmail.com', 'a', ''),
('a', 'b', '2019-04-29', 'male', 22222, 'ab@gmail.com', 'a', ''),
('papa', 'baba', '2019-03-28', 'female', 456456, 'baba@gmail.com', 'a', 'default'),
('babu', 'khabu', '2019-03-29', 'male', 2345678, 'babu@gmail.com', 'a', 'b'),
('robin', 'utthapa', '2017-04-27', 'male', 1727241030, 'da@ss.com', 'a', ''),
('dheraj', 'rahman', '2015-01-29', 'male', 2147483647, 'dheraj@gmail.com', 'a', 'default'),
('Iron ', 'Man', '2019-11-30', 'male', 4354364, 'iron@gmail.com', 'a', '2019_04_01_12_05_47am'),
('khalid', 'lovely', '2016-11-26', 'male', 23454354, 'k@gmail.com', 'a', ''),
('loki', 'bhai', '2019-04-29', 'male', 12121212, 'loki@gmail.com', 'a', 'default'),
('loki', 'mama', '2019-03-05', 'female', 2147483647, 'lokimama@gmail.com', 'a', 'default'),
('Monjirul', 'Kabir', '2016-01-29', 'female', 2147483647, 'monjir@gmail.com', 'a', 'default'),
('paul', 'pogba', '2019-03-31', 'female', 2345435, 'pp@gmail.com', 'a', '2019_03_31_11_05_25pm'),
('thor', 'bhai', '2019-03-29', 'female', 22345678, 'thor@gmail.com', 'a', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `userportfolio`
--

CREATE TABLE `userportfolio` (
  `email` varchar(30) NOT NULL,
  `projectname` varchar(30) NOT NULL,
  `projecturl` varchar(300) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userportfolio`
--

INSERT INTO `userportfolio` (`email`, `projectname`, `projecturl`) VALUES
('babu@gmail.com', 'library management system', 'no'),
('babu@gmail.com', 'movie ticket management system', 'no'),
('dheraj@gmail.com', 'ums', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
