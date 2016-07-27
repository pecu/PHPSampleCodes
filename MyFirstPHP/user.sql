-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2016 at 08:33 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gettabledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `userid` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `userbith` date NOT NULL,
  `userphone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `useremail` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `userid`, `username`, `userbith`, `userphone`, `useremail`) VALUES
(8, 'table8', 'testName8', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(9, 'table9', 'testName9', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(10, 'table10', 'testName10', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(11, 'table11', 'testName11', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(12, 'table12', 'testName12', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(13, 'table13', 'testName13', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(14, 'table14', 'testName14', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(15, 'table15', 'testName15', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(16, 'table16', 'testName16', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(17, 'table17', 'testName17', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(18, 'table18', 'testName18', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(19, 'table19', 'testName19', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(20, 'table20', 'testName20', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(23, 'table23', 'testName23', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(24, 'table24', 'testName24', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(25, 'table25', 'testName25', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(26, 'table26', 'testName26', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(27, 'table27', 'testName27', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(28, 'table28', 'testName28', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(29, 'table29', 'testName29', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(30, 'table30', 'testName30', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(31, 'table31', 'testName31', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(32, 'table32', 'testName32', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(33, 'table33', 'testName33', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(34, 'table34', 'testName34', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(35, 'table35', 'testName35', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(36, 'table36', 'testName36', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(37, 'table37', 'testName37', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(38, 'table38', 'testName38', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(39, 'table39', 'testName39', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(40, 'table40', 'testName40', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(41, 'table41', 'testName41', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(42, 'table42', 'testName42', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(43, 'table43', 'testName43', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(46, 'table46', 'testName46', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(47, 'table47', 'testName47', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(49, 'table49', 'testName49', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(50, 'table50', 'testName50', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(51, 'table51', 'testName51', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(52, 'table52', 'testName52', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(53, 'table53', 'testName53', '2000-01-01', '0937123456', 'test@test.edu.tw'),
(54, 'table54', 'testName54', '2000-01-01', '0937123456', 'test@test.edu.tw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
