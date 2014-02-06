-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014-02-04 15:22:36
-- 服务器版本: 5.6.14
-- PHP 版本: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lovecert`
--
CREATE DATABASE IF NOT EXISTS `lovecert` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `lovecert`;

-- --------------------------------------------------------

--
-- 表的结构 `lc_admin`
--

CREATE TABLE IF NOT EXISTS `lc_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `lc_certificate`
--

CREATE TABLE IF NOT EXISTS `lc_certificate` (
  `cid` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `uid_1` int(10) unsigned zerofill NOT NULL COMMENT 'User ID of the certificate creator',
  `uid_2` int(10) unsigned zerofill NOT NULL COMMENT 'User ID of the Beloved',
  `photo_path` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_name` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `love_oath` text COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `publish_time` datetime NOT NULL,
  `visits` int(11) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `uid_1` (`uid_1`,`uid_2`),
  KEY `uid_2` (`uid_2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 表的关联 `lc_certificate`:
--   `uid_1`
--       `lc_user` -> `uid`
--   `uid_2`
--       `lc_user` -> `uid`
--

-- --------------------------------------------------------

--
-- 表的结构 `lc_user`
--

CREATE TABLE IF NOT EXISTS `lc_user` (
  `uid` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'User''s ID',
  `family_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Family name',
  `given_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Given name',
  `nick_name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nick name',
  `is_male` tinyint(1) DEFAULT NULL COMMENT 'Is Male',
  `email` varchar(320) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Email',
  `birthday` date NOT NULL COMMENT 'Birthday',
  `register_time` datetime NOT NULL COMMENT 'register time',
  `nationality` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nationality',
  `country` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Country',
  `province` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Province',
  `city` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'City',
  `town` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Town',
  `organization` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Organization',
  `identity_type` tinyint(3) unsigned zerofill NOT NULL COMMENT 'Identity type',
  `identity_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Identity ID',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `lc_certificate`
--
ALTER TABLE `lc_certificate`
  ADD CONSTRAINT `creator` FOREIGN KEY (`uid_1`) REFERENCES `lc_user` (`uid`),
  ADD CONSTRAINT `lover` FOREIGN KEY (`uid_2`) REFERENCES `lc_user` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
