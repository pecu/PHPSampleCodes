-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-08-02 08:08:44
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `drink_shop`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pri` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `pri`, `email`) VALUES
(1, 'ruby', '12345', '2', ''),
(2, 'bob', '1234', '2', 'ww@gmail.com'),
(3, 'ccc', 'ccc', '0', 'rubebe720@gmail.com'),
(4, 'ccc', 'ccc', '0', 'rubebe720@gmail.com'),
(5, 'ddd', 'dddd', '2', 'rubebe720@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `orderlist`
--

CREATE TABLE `orderlist` (
  `orderlist_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `orderlist`
--

INSERT INTO `orderlist` (`orderlist_id`, `order_id`, `product_id`, `order_sum`) VALUES
(2, 1, 2, 4),
(3, 1, 3, 1),
(4, 1, 4, 3),
(5, 1, 5, 3),
(7, 3, 1, 2),
(8, 3, 2, 2),
(9, 4, 1, 1),
(10, 4, 12, 1),
(11, 5, 1, 2),
(12, 5, 3, 1),
(13, 5, 5, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `orderno`
--

CREATE TABLE `orderno` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `order_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `orderno`
--

INSERT INTO `orderno` (`id`, `user_id`, `order_date`, `status`) VALUES
(1, 'ruby', '2016-08-01 19:55:48', 0),
(2, 'ruby', '2016-08-01 20:18:57', 0),
(3, 'ruby', '2016-08-01 20:19:09', 0),
(4, 'ruby', '2016-08-01 20:19:24', 0),
(5, 'ggg', '2016-08-02 07:47:12', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_sum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_sum`) VALUES
(1, '珍珠奶茶', 35, 50),
(2, '紅茶拿鐵', 50, 15),
(3, '翡翠檸檬', 55, 20),
(4, '薑汁奶茶', 50, 20),
(5, '東方美人', 60, 20),
(6, '蜂蜜綠茶', 50, 20),
(7, '翡翠拿鐵', 55, 20),
(8, '豆漿紅茶', 50, 20),
(9, '百香綠茶', 60, 20),
(10, '蔗香紅茶', 25, 20),
(11, '新鮮水果茶', 65, 20),
(12, '冬瓜鐵觀音', 39, 10);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_birth` date NOT NULL,
  `user_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_name`, `user_birth`, `user_phone`, `user_email`) VALUES
(2, 't2', '333', '1230-10-13', '0910354554', '3333@gmail.com'),
(3, 't3', 'rt134', '0000-00-00', '0910101123', 'eww@gmail.com'),
(4, 't4', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(5, 't5', 'gg104', '1982-10-17', '09wwe', 'eww@gmail.com'),
(7, 't7', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(14, 't14', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(15, 't15', '¾|¤ñ', '1982-10-17', '0910101123', 'eww@gmail.com'),
(34, 't34', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(35, 't35', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(36, 't36', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(37, 't37', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(38, 't38', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com'),
(39, 't39', '¤s¹ëª©', '1982-10-17', '0910101123', 'eww@gmail.com'),
(40, 't40', 'gg104', '1982-10-17', '0910101123', 'eww@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `user2`
--

CREATE TABLE `user2` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_uid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_pri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `user2`
--

INSERT INTO `user2` (`id`, `user_name`, `user_uid`, `user_pass`, `user_phone`, `user_adress`, `user_email`, `user_pri`) VALUES
(1, '333', 'ruby', '12345', '0910354554', '0', '3333@gmail.com', 2),
(11, 'gg104', '', '', '0910101123', '0', 'eww@gmail.com', 0),
(12, 'gg104', '', '', '0910101123', '0', 'eww@gmail.com', 0),
(13, '¤s¹ëª©', '', '', '0910101123', '0', 'eww@gmail.com', 0),
(14, 'gg104', '', '', '0910101123', '0', 'eww@gmail.com', 0),
(15, '34', '34', '3', '13', '4', '3', 2),
(16, 'jojolin', 'jojo', '1234', '0920789456', '0', 'zderfe@gmail.com', 0),
(17, '224', 'rubywww', '123', '55', '345', '', 0),
(18, '222', '1231231', '123123', '+6', '1345', '555', 0),
(25, 'qq3', 'qq', 'qq', 'q335', 'qewtwt', 'rubebe720@gmail.com', 0),
(26, 'qq456', 'aaa', 'aaa', 'q335', 'qewtwt', 'rubebe720@gmail.com', 0),
(28, '223', 'eer', 'powerwer', '', '111', 'rubebe720@gmail.com', 0),
(29, '223', 'aadd', '', '', '111', 'rubebe720@gmail.com', 0),
(30, '223', 'aadd', '', '', '111', 'rubebe720@gmail.com', 0),
(31, 'eer', 'ggg', '123456', '+886226831', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 2),
(32, 'qer', 'qaz', '1234', '+886226831', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 0),
(33, 'awrr', 'tyy', '1245', '+886226831', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 0),
(34, 'awrr', 'aerr', 'ertwer', '+886226831', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 0),
(35, 'awrr', 'aerr', '', '+886226831', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 0),
(36, 'aqe', 'nnnnn', 'powerwer', '+886937939', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 0),
(37, 'aqe445', 'zzzz', '', '+886937939', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 0),
(38, 'aqet134', 'zzzz2222', '1234', '+886937939', '¤j¦w¸ô588¸¹5¼Ó', 'rubebe720@gmail.com', 0),
(39, 'vvvv', 'qwet', '1234', '44445', '2344', 'rubebe720@gmail.com', 0),
(40, 'XXX', 'qqq', '12345', 'ss', 'ss', 'vulm17@gmail.com', 2),
(41, 'gogogo', 'gogogo', 'gogogo', 'rrr', 'rrr', 'vulm17@gmail.com', 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`orderlist_id`);

--
-- 資料表索引 `orderno`
--
ALTER TABLE `orderno`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `orderlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用資料表 AUTO_INCREMENT `orderno`
--
ALTER TABLE `orderno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用資料表 AUTO_INCREMENT `user2`
--
ALTER TABLE `user2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
