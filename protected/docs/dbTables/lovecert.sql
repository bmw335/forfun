/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : lovecert

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2014-02-09 23:27:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lc_admin
-- ----------------------------
DROP TABLE IF EXISTS `lc_admin`;
CREATE TABLE `lc_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(320) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for lc_certificate
-- ----------------------------
DROP TABLE IF EXISTS `lc_certificate`;
CREATE TABLE `lc_certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `is_verified` bit(1) NOT NULL DEFAULT b'0',
  `lover_1_name` varchar(64) NOT NULL,
  `lover_1_province` varchar(64) NOT NULL,
  `lover_1_city` varchar(64) NOT NULL,
  `lover_1_id_number` varchar(255) DEFAULT NULL,
  `lover_2_name` varchar(20) NOT NULL,
  `lover_2_province` varchar(255) NOT NULL,
  `lover_2_city` varchar(255) NOT NULL,
  `lover_2_id_number` varchar(32) DEFAULT NULL,
  `photo_path` varchar(255) NOT NULL,
  `love_oath` varchar(200) NOT NULL,
  `count_down_month` smallint(6) NOT NULL,
  `public_date` date DEFAULT '1970-01-01',
  `is_draft` bit(4) NOT NULL DEFAULT b'1',
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `submit_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for lc_password
-- ----------------------------
DROP TABLE IF EXISTS `lc_password`;
CREATE TABLE `lc_password` (
  `user_id` int(11) NOT NULL,
  `login_name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `question1` varchar(256) NOT NULL,
  `answer1` varchar(256) NOT NULL,
  `question2` varchar(256) NOT NULL,
  `answer2` varchar(256) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for lc_user
-- ----------------------------
DROP TABLE IF EXISTS `lc_user`;
CREATE TABLE `lc_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qq_uid` varchar(320) NOT NULL,
  `real_name` varchar(64) DEFAULT NULL,
  `nick_name` varchar(128) NOT NULL,
  `is_male` bit(1) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `register_time` datetime DEFAULT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
