-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-09-13 11:07:23
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 数据库： `manga`
--
CREATE DATABASE IF NOT EXISTS `manga` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `manga`;

-- --------------------------------------------------------

--
-- 表的结构 `manga_chapter`
--

DROP TABLE IF EXISTS `manga_chapter`;
CREATE TABLE `manga_chapter` (
  `id` varchar(50) NOT NULL,
  `mangaid` varchar(265) NOT NULL,
  `last_chapter_id` int(50) DEFAULT NULL,
  `title` varchar(265) NOT NULL,
  `page` varchar(265) DEFAULT NULL,
  `url` varchar(265) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 插入之前先把表清空（truncate） `manga_chapter`
--

TRUNCATE TABLE `manga_chapter`;
-- --------------------------------------------------------

--
-- 表的结构 `manga_main`
--

DROP TABLE IF EXISTS `manga_main`;
CREATE TABLE `manga_main` (
  `id` int(50) NOT NULL,
  `title` varchar(265) DEFAULT NULL,
  `page` int(50) DEFAULT NULL,
  `author` varchar(265) DEFAULT NULL,
  `introduce` varchar(265) DEFAULT NULL,
  `cover` varchar(265) DEFAULT NULL,
  `tag` varchar(265) DEFAULT NULL,
  `fristdate` varchar(265) DEFAULT NULL,
  `lastdate` varchar(265) DEFAULT NULL,
  `isend` int(5) DEFAULT NULL,
  `updatetime` varchar(265) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='漫画主要数据库';

--
-- 插入之前先把表清空（truncate） `manga_main`
--

TRUNCATE TABLE `manga_main`;
--
-- 转存表中的数据 `manga_main`
--

INSERT DELAYED IGNORE INTO `manga_main` (`id`, `title`, `page`, `author`, `introduce`, `cover`, `tag`, `fristdate`, `lastdate`, `isend`, `updatetime`) VALUES
(1, '总之就是非常可爱', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '魔女之旅', 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(265) NOT NULL,
  `password` varchar(265) NOT NULL,
  `email` varchar(265) NOT NULL,
  `plane` varchar(265) NOT NULL,
  `sex` varchar(265) NOT NULL,
  `date` varchar(265) NOT NULL,
  `occupation` varchar(265) NOT NULL,
  `follow_id` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 插入之前先把表清空（truncate） `user`
--

TRUNCATE TABLE `user`;
--
-- 转存表中的数据 `user`
--

INSERT DELAYED IGNORE INTO `user` (`id`, `username`, `password`, `email`, `plane`, `sex`, `date`, `occupation`, `follow_id`) VALUES
(1, 'misaka10843', 'Aa111111', 'misaka10843@outlook.jp', 'Tokyo,Japan', '女', '2000.7.20', '游戏程序开发', '1');

--
-- 转储表的索引
--

--
-- 表的索引 `manga_main`
--
ALTER TABLE `manga_main`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `manga_main`
--
ALTER TABLE `manga_main`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
