-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-12-15 19:10:18
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `comic123`
--

-- --------------------------------------------------------

--
-- 表的结构 `chapter`
--

CREATE TABLE `chapter` (
  `id` int(50) NOT NULL COMMENT 'id',
  `chapter_name` varchar(255) DEFAULT NULL COMMENT '章节名称',
  `chapter_page` int(50) DEFAULT NULL COMMENT '章节页数',
  `update_date` varchar(255) DEFAULT NULL COMMENT '更新日期',
  `like_num` int(50) DEFAULT NULL COMMENT '点赞数',
  `free` int(2) DEFAULT NULL COMMENT '是否免费',
  `thumbnail` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `comicid` int(50) NOT NULL COMMENT '漫画id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `chapter`
--

INSERT INTO `chapter` (`id`, `chapter_name`, `chapter_page`, `update_date`, `like_num`, `free`, `thumbnail`, `comicid`) VALUES
(1, '第一话', 1, '12.14', 10, 1, '/assets/img/3.jpg', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
