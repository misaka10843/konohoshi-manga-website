-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-09-16 10:47:48
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--
-- 数据库： `manga`
--
-- --------------------------------------------------------
--
-- 表的结构 `manga_chapter`
--
CREATE TABLE `manga_chapter` (
  `id` varchar(50) NOT NULL,
  `mangaid` varchar(265) NOT NULL,
  `last_chapter_id` int(50) DEFAULT NULL,
  `title` varchar(265) NOT NULL,
  `page` varchar(265) DEFAULT NULL,
  `url` varchar(265) DEFAULT NULL
) ENGINE = MyISAM DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
--
-- 表的结构 `manga_main`
--
CREATE TABLE `manga_main` (
  `id` int(50) NOT NULL COMMENT '漫画id',
  `title` varchar(265) DEFAULT NULL COMMENT '标题',
  `page` int(50) DEFAULT NULL COMMENT '章节',
  `author` varchar(265) DEFAULT NULL COMMENT '作者',
  `introduce` varchar(265) DEFAULT NULL COMMENT '简介',
  `cover` varchar(265) DEFAULT NULL COMMENT '封面',
  `tag` varchar(265) DEFAULT NULL COMMENT '标签',
  `fristdate` varchar(265) DEFAULT NULL COMMENT '第一次连载日期',
  `lastdate` varchar(265) DEFAULT NULL COMMENT '最近一次更新日期',
  `isend` int(5) DEFAULT NULL COMMENT '是否完结',
  `ispickup` int(50) DEFAULT NULL,
  `updatetime` varchar(265) DEFAULT NULL COMMENT '上传时间'
) ENGINE = MyISAM DEFAULT CHARSET = utf8 COMMENT = '漫画主要数据库';
--
-- 转存表中的数据 `manga_main`
--
INSERT INTO `manga_main` (
    `id`,
    `title`,
    `page`,
    `author`,
    `introduce`,
    `cover`,
    `tag`,
    `fristdate`,
    `lastdate`,
    `isend`,
    `ispickup`,
    `updatetime`
  )
VALUES (
    1,
    '总之就是非常可爱',
    5,
    'null',
    '擅长学习但是有点脱线的主人公由崎星空在某一天对神秘的美少女司一见钟情。 面对星空豁出去的告白，她的回答是—— “如果你愿意和我结婚，那我就跟你交往”?! 与充满谜团但总之就是非常可爱的妻子的新婚生活开始了!!',
    'http://localhost:88/img/test.jpg',
    NULL,
    NULL,
    NULL,
    NULL,
    1,
    NULL
  ),
  (
    2,
    '魔女之旅',
    14,
    'null',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    0,
    NULL
  );
-- --------------------------------------------------------
--
-- 表的结构 `manga_news`
--
CREATE TABLE `manga_news` (
  `id` int(50) NOT NULL COMMENT '公告id',
  `title` varchar(265) NOT NULL COMMENT '标题',
  `date` varchar(265) NOT NULL COMMENT '日期',
  `author` varchar(265) NOT NULL COMMENT '作者',
  `text` varchar(265) NOT NULL COMMENT '正文',
  `tag` varchar(265) NOT NULL COMMENT '类型'
) ENGINE = MyISAM DEFAULT CHARSET = utf8;
--
-- 转存表中的数据 `manga_news`
--
INSERT INTO `manga_news` (`id`, `title`, `date`, `author`, `text`, `tag`)
VALUES (
    1,
    '测试',
    '2021.9.16',
    'misaka10843',
    '测试ing',
    '测试'
  ),
  (
    2,
    '测试qwq',
    '2021.9.15',
    'misaka10843',
    '测试qwq',
    '测试'
  );
-- --------------------------------------------------------
--
-- 表的结构 `user`
--
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
-- 转存表中的数据 `user`
--
INSERT INTO `user` (
    `id`,
    `username`,
    `password`,
    `email`,
    `plane`,
    `sex`,
    `date`,
    `occupation`,
    `follow_id`
  )
VALUES (
    1,
    'misaka10843',
    'Aa111111',
    'misaka10843@outlook.jp',
    'Tokyo,Japan',
    '女',
    '2000.7.20',
    '游戏程序开发',
    '1'
  );
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
-- 表的索引 `manga_news`
--
ALTER TABLE `manga_news`
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
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT COMMENT '漫画id',
  AUTO_INCREMENT = 3;
--
-- 使用表AUTO_INCREMENT `manga_news`
--
ALTER TABLE `manga_news`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT COMMENT '公告id',
  AUTO_INCREMENT = 5;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;
COMMIT;