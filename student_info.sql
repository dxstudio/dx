/*
Navicat MySQL Data Transfer

Source Server         : 112.74.41.209
Source Server Version : 50621
Source Host           : 112.74.41.209:3306
Source Database       : dxstudio

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-09-16 12:13:01
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=MyISAM AUTO_INCREMENT=3159 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student_info
-- ----------------------------
INSERT INTO `student_info` VALUES ('1', '202706010101', '翟欣', '女', '', '', '群众', '汉族', '电气171', '2017', '电气类', '电气与信息工程学院', '', '', '');
