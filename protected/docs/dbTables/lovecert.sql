/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : lovecert

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2014-02-13 22:54:33
*/

SET FOREIGN_KEY_CHECKS=0;

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
-- Records of lc_certificate
-- ----------------------------
INSERT INTO `lc_certificate` VALUES ('7', '1', '\0', 'aaa', 'province', 'city', null, 'bb', 'province', 'city', null, 'photo_path', 'cc', '12', '1970-01-01', '', '2014-02-09 16:18:39', null);

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
-- Records of lc_password
-- ----------------------------

-- ----------------------------
-- Table structure for lc_user
-- ----------------------------
DROP TABLE IF EXISTS `lc_user`;
CREATE TABLE `lc_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick_name` varchar(128) NOT NULL,
  `role` tinyint(4) DEFAULT '0',
  `qq_uid` varchar(320) DEFAULT NULL,
  `user_name` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `real_name` varchar(64) DEFAULT NULL,
  `is_male` bit(1) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `register_time` datetime DEFAULT NULL,
  `point` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lc_user
-- ----------------------------
INSERT INTO `lc_user` VALUES ('2', 'ImAdmin', '1', null, 'admin', 'admin', null, null, null, null, null, '0');
INSERT INTO `lc_user` VALUES ('6', 'ImNormalUser', '0', 'qqOpenID_1234', null, null, null, null, null, null, null, '10');
