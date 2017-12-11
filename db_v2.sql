/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : icebear-class

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2017-12-11 10:24:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `cname` char(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dep_id` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '软件工程一班', '1');
INSERT INTO `class` VALUES ('2', '计算机技术一班', '1');
INSERT INTO `class` VALUES ('3', '物联网技术一班', '1');
INSERT INTO `class` VALUES ('4', '古文学', '2');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `content_id` int(8) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(8) NOT NULL,
  `title` char(100) COLLATE utf8_bin NOT NULL,
  `content` varchar(500) COLLATE utf8_bin NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deadline` date NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('1', '1', '请同学们于2017.12.10日完成开题报告', '学院通知，希望同学们能够在2017.12.10日前提交中期考核及开题报告，如果不能在时间内完成，那么，请联系老师。', '2017-12-10 22:43:24', '2017-12-10');
INSERT INTO `content` VALUES ('2', '1', '2018年下学期放假日期确定', '接学校通知，本学期放假日期为2019年1月20日。希望同学们及时做好出行准备，注意安全。回家过个好年。', '2017-12-10 22:45:48', '2017-12-20');

-- ----------------------------
-- Table structure for dep
-- ----------------------------
DROP TABLE IF EXISTS `dep`;
CREATE TABLE `dep` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `dname` char(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dep
-- ----------------------------
INSERT INTO `dep` VALUES ('1', '信息学院');
INSERT INTO `dep` VALUES ('2', '文学院');
INSERT INTO `dep` VALUES ('3', '药学院');

-- ----------------------------
-- Table structure for link_content
-- ----------------------------
DROP TABLE IF EXISTS `link_content`;
CREATE TABLE `link_content` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `student_id` int(8) NOT NULL,
  `content_id` int(8) NOT NULL,
  `status` char(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of link_content
-- ----------------------------
INSERT INTO `link_content` VALUES ('1', '201601', '1', '0');
INSERT INTO `link_content` VALUES ('2', '201601', '2', '0');
INSERT INTO `link_content` VALUES ('3', '201602', '1', '0');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `stu_name` char(10) COLLATE utf8_bin NOT NULL,
  `stu_no` char(10) COLLATE utf8_bin NOT NULL,
  `class_id` int(8) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `reg_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', '淡泽伟', '201601', '1', '123456@qq.com', '123456', '2017-12-10 15:38:21');
INSERT INTO `student` VALUES ('2', '段晗', '201602', '1', '123451@qq.com', '123451', '2017-12-10 22:51:19');
INSERT INTO `student` VALUES ('3', '肖镜成', '201603', '1', '123450@qq.com', '123450', '2017-12-10 22:55:41');
INSERT INTO `student` VALUES ('4', '陈晓敏', '201604', '2', '123452@qq.com', '123452', '2017-12-10 22:56:44');
INSERT INTO `student` VALUES ('5', '李鑫源', '201605', '2', '123457@qq.com', '123457', '2017-12-10 22:58:53');

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `teacher_id` int(8) NOT NULL AUTO_INCREMENT,
  `teac_name` char(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', '李老师', '123456');
INSERT INTO `teacher` VALUES ('2', '肖老师', '123456');
