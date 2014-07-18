-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 15 日 10:48
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ipp`
--
CREATE DATABASE IF NOT EXISTS `ipp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ipp`;

-- --------------------------------------------------------

--
-- 表的结构 `fight`
--

CREATE TABLE IF NOT EXISTS `fight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `starter` int(11) NOT NULL,
  `enemy` int(11) DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fight`
--

INSERT INTO `fight` (`id`, `starter`, `enemy`, `start_time`, `end_time`, `rank`) VALUES
(1, 32, 31, '2014-07-16 18:34:00', '2014-07-23 18:34:00', 10);

-- --------------------------------------------------------

--
-- 表的结构 `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `power` int(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `fighting` tinyint(1) NOT NULL,
  `gofight` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `membership`
--

INSERT INTO `membership` (`id`, `power`, `username`, `password`, `email_address`, `fighting`, `gofight`) VALUES
(15, 10, 'aaaa', '74b87337454200d4d33f80c4663dc5e5', 'aaa@aaa.com', 0, 0),
(16, 10, 'aaaa', '74b87337454200d4d33f80c4663dc5e5', 'asdfasfd@163.com', 0, 0),
(17, 10, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, 0),
(18, 10, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, 0),
(19, 10, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, 0),
(20, 10, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, 0),
(21, 10, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, 0),
(22, 10, 'asd', '202cb962ac59075b964b07152d234b70', 'asdas', 0, 0),
(23, 10, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', 'asdasd', 0, 0),
(24, 10, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', 'asdasd', 0, 0),
(25, 10, 'asd2', '202cb962ac59075b964b07152d234b70', 'asdasd', 0, 0),
(26, 10, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', 'asdasd', 0, 0),
(27, 10, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', 'asdasd', 0, 0),
(28, 10, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, 0),
(29, 10, 'asdasd', 'e10adc3949ba59abbe56e057f20f883e', 'asd', 0, 0),
(30, 10, 'asd3', '202cb962ac59075b964b07152d234b70', 'asdasd', 0, 0),
(31, 12, 'pvguo', '202cb962ac59075b964b07152d234b70', 'pvguo@sjtu.edu.cn', 0, 0),
(32, 10, 'at15', '202cb962ac59075b964b07152d234b70', 'at15@outlook.com', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
