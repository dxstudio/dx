/*
Navicat MySQL Data Transfer

Source Server         : winserver
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : dxstudio

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-11 06:22:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mail
-- ----------------------------
DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `token` varchar(32) NOT NULL,
  `token_exptime` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `regtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for student_info
-- ----------------------------
DROP TABLE IF EXISTS `student_info`;
CREATE TABLE `student_info` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `schoolid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthyear` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `political_landscape` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `academy` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ID_card` varchar(255) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_basic
-- ----------------------------
DROP TABLE IF EXISTS `user_basic`;
CREATE TABLE `user_basic` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) DEFAULT NULL,
  `yb_userid` int(7) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `birthyear` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `schoolid` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `grade` varchar(4) DEFAULT NULL,
  `academy` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  `login_time` varchar(255) DEFAULT NULL,
  `login_count` int(255) NOT NULL,
  `status` int(1) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_resume
-- ----------------------------
DROP TABLE IF EXISTS `user_resume`;
CREATE TABLE `user_resume` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `schoolid` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `deploy` varchar(255) DEFAULT NULL,
  `Office` varchar(255) DEFAULT NULL,
  `Ps` varchar(255) DEFAULT NULL,
  `skills_certificates` varchar(255) DEFAULT NULL,
  `software_use` varchar(255) DEFAULT NULL,
  `intership` varchar(255) DEFAULT NULL,
  `contest` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `academic_field` varchar(255) DEFAULT NULL,
  `project` varchar(255) DEFAULT NULL,
  `reasion` varchar(255) DEFAULT NULL,
  `edit_time` varchar(255) DEFAULT NULL,
  `interview_time` varchar(255) DEFAULT NULL,
  `score1` varchar(255) DEFAULT NULL,
  `score2` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `notes_time` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
