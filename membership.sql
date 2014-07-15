-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 15 日 04:57
-- 服务器版本: 5.5.37
-- PHP 版本: 5.5.14-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ipp`
--

-- --------------------------------------------------------

--
-- 表的结构 `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `power` int(255) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `email_address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fighting` tinyint(1) NOT NULL,
  `gofight` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `membership`
--

INSERT INTO `membership` (`id`, `power`, `username`, `password`, `email_address`, `fighting`, `gofight`) VALUES
(15, 10, 'aaaa', '74b87337454200d4d33f80c4663dc5e5', 'aaa@aaa.com', 0, 0),
(16, 10, 'aaaa', '74b87337454200d4d33f80c4663dc5e5', 'asdfasfd@163.com', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
