-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2016 at 07:53 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `pri`) VALUES
(1, 'admin', '12345', 1);

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
(12, 'table12', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(13, 'table13', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(14, 'table14', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(15, 'table15', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(16, 'table16', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(17, 'table17', 'testName8', '2000-01-01', '222222', 'test@test.edu.tw'),
(18, 'table18', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(19, 'table19', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(20, 'table20', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(23, 'table23', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(24, 'table24', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(25, 'table25', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(26, 'table26', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(27, 'table27', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(28, 'table28', 'testName8', '2000-01-01', '3333', 'test@test.edu.tw'),
(29, 'table29', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(30, 'table30', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(31, 'table31', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(32, 'table32', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(33, 'table33', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(34, 'table34', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(35, 'table35', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(36, 'table36', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(37, 'table37', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(38, 'table38', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(39, 'table39', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(40, 'table40', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(41, 'table41', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(42, 'table42', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(43, 'table43', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(46, 'table46', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(47, 'table47', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(49, 'table49', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(50, 'table50', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(51, 'table51', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(52, 'table52', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(53, 'table53', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(54, 'table54', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(55, 'table55', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(56, 'table56', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(57, 'table57', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(58, 'table58', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(59, 'table59', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(60, 'table60', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(61, 'table61', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(62, 'table62', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(63, 'table63', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(64, 'table64', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw'),
(8, 'table8', 'testName8', '2000-01-01', '1111111111', 'test@test.edu.tw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
