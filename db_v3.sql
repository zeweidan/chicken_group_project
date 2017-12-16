/*
SQLyog Ultimate v11.27 (32 bit)
MySQL - 5.5.20-log : Database - icebear_class
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`icebear_class` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `icebear_class`;

/*Table structure for table `stu_class` */

DROP TABLE IF EXISTS `stu_class`;

CREATE TABLE `stu_class` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `cname` char(100) COLLATE utf8_bin NOT NULL,
  `org_id` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `stu_class` */

insert  into `stu_class`(`id`,`cname`,`org_id`) values (1,'软件工程一班',1),(2,'计算机技术一班',1),(3,'物联网技术一班',1),(4,'古文学',2);

/*Table structure for table `stu_content` */

DROP TABLE IF EXISTS `stu_content`;

CREATE TABLE `stu_content` (
  `content_id` int(8) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(8) NOT NULL,
  `title` char(100) COLLATE utf8_bin NOT NULL,
  `content` varchar(500) COLLATE utf8_bin NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deadline` date NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `stu_content` */

insert  into `stu_content`(`content_id`,`teacher_id`,`title`,`content`,`post_time`,`deadline`) values (1,1,'请同学们于2017.12.10日完成开题报告','学院通知，希望同学们能够在2017.12.10日前提交中期考核及开题报告，如果不能在时间内完成，那么，请联系老师。','2017-12-10 22:43:24','2017-12-10'),(2,1,'2018年下学期放假日期确定','接学校通知，本学期放假日期为2019年1月20日。希望同学们及时做好出行准备，注意安全。回家过个好年。','2017-12-10 22:45:48','2017-12-20');

/*Table structure for table `stu_link_content` */

DROP TABLE IF EXISTS `stu_link_content`;

CREATE TABLE `stu_link_content` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `student_id` int(8) NOT NULL,
  `content_id` int(8) NOT NULL,
  `status` char(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `stu_link_content` */

insert  into `stu_link_content`(`id`,`student_id`,`content_id`,`status`) values (1,201601,1,'0'),(2,201601,2,'0'),(3,201602,1,'0');

/*Table structure for table `stu_org` */

DROP TABLE IF EXISTS `stu_org`;

CREATE TABLE `stu_org` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `orgname` char(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `stu_org` */

insert  into `stu_org`(`id`,`orgname`) values (1,'校学生会'),(2,'校团支部'),(3,'轮滑协会');

/*Table structure for table `stu_student` */

DROP TABLE IF EXISTS `stu_student`;

CREATE TABLE `stu_student` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `stu_name` char(10) COLLATE utf8_bin NOT NULL,
  `student_id` int(8) NOT NULL,
  `org_id` int(8) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `reg_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `stu_student` */

insert  into `stu_student`(`id`,`stu_name`,`student_id`,`org_id`,`email`,`password`,`reg_time`) values (1,'淡泽伟',201601,1,'123456@qq.com','123456','2017-12-10 15:38:21'),(2,'段晗',201602,1,'123451@qq.com','123451','2017-12-10 22:51:19'),(3,'肖镜成',201603,1,'123450@qq.com','123450','2017-12-10 22:55:41'),(4,'陈晓敏',201604,2,'123452@qq.com','123452','2017-12-10 22:56:44'),(5,'李鑫源',201605,2,'123457@qq.com','123457','2017-12-10 22:58:53');

/*Table structure for table `stu_teacher` */

DROP TABLE IF EXISTS `stu_teacher`;

CREATE TABLE `stu_teacher` (
  `teacher_id` int(8) NOT NULL AUTO_INCREMENT,
  `teac_name` char(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `stu_teacher` */

insert  into `stu_teacher`(`teacher_id`,`teac_name`,`password`) values (1,'李老师','123456'),(2,'肖老师','123456');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
