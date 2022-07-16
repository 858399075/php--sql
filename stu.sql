-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2022 年 07 月 09 日 16:39
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `stu`
--
CREATE DATABASE IF NOT EXISTS `stu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stu`;

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(15) NOT NULL COMMENT 'id',
  `passwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `sno` int(15) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `passwd`, `sno`, `name`, `sex`, `age`, `phone`) VALUES
(1, '1', 1, '丽丽', '女', 21, '18487123702'),
(1001, '1', 1001, '王欢丽', '女', 21, '18487123702'),
(1002, '1', 1002, '王星星', '男', 20, '18487123702'),
(5, '', 1003, '欢欢', '女', 21, '18487123702'),
(1006, '1', 1006, '欢欢', '女', 21, '18487123702'),
(7, '7', 1007, '丽丽', '女', 21, '18487123702'),
(6, '6', 1008, '欢欢1', '女', 21, '18487123702'),
(4, '4', 1009, '欢欢', '女', 21, '18487123702'),
(10, '1', 1010, '欢欢', '女', 21, '18487123702'),
(10003, '1', 10003, '欢欢', '女', 21, '18487123702'),
(10004, '4', 10004, '欢欢', '女', 21, '18487123702'),
(2019610035, '1', 2019610035, '莉莉', '女', 21, '18487123702'),
(2020610035, '1', 2020610035, '欢欢', '女', 21, '18487123702');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
