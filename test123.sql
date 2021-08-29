-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2021-08-29 23:14:56
-- 服务器版本： 5.6.50-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test123`
--
CREATE DATABASE IF NOT EXISTS `test123` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test123`;

-- --------------------------------------------------------

--
-- 表的结构 `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id` int(11) NOT NULL,
  `title` varchar(265) NOT NULL,
  `lastpage` varchar(265) NOT NULL,
  `lastupdate` varchar(265) NOT NULL,
  `author` varchar(265) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 插入之前先把表清空（truncate） `manga`
--

TRUNCATE TABLE `manga`;
--
-- 转存表中的数据 `manga`
--

INSERT INTO `manga` (`id`, `title`, `lastpage`, `lastupdate`, `author`) VALUES
(1, '河島さんは面倒くさい', '1', '2019年05月19日', 'れいぴあ');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL,
  `username` varchar(265) NOT NULL,
  `password` varchar(265) NOT NULL,
  `email` varchar(265) NOT NULL,
  `plane` varchar(265) NOT NULL,
  `sex` varchar(265) NOT NULL,
  `date` varchar(265) NOT NULL,
  `occupation` varchar(265) NOT NULL,
  `follow_id` varchar(265) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 插入之前先把表清空（truncate） `user`
--

TRUNCATE TABLE `user`;
--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `plane`, `sex`, `date`, `occupation`, `follow_id`) VALUES
(1, 'misaka10843', 'Aa111111', 'misaka10843@outlook.jp', 'Tokyo,Japan', '女', '2000.7.20', '游戏程序开发', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
