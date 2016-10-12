/*
Navicat MySQL Data Transfer

Source Server         : lixu
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : credit

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2016-08-24 18:42:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for credit
-- ----------------------------
DROP TABLE IF EXISTS `credit`;
CREATE TABLE `credit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quota` varchar(255) DEFAULT NULL,
  `accrual` varchar(255) DEFAULT NULL COMMENT '利息',
  `Institution` varchar(255) DEFAULT NULL COMMENT '发卡组织',
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of credit
-- ----------------------------
INSERT INTO `credit` VALUES ('1', '交通银行沃尔玛信用卡普卡', '信用额的50%', '最长56天', '银联', '334.jpg');
INSERT INTO `credit` VALUES ('2', '光大“福”信用卡普卡', '一般为信用额度的50%', '20天到50天', '银联+VISA', '10002.jpg');
INSERT INTO `credit` VALUES ('3', '平安银行保险金卡信用卡', '50%', '最低20,最高50天', '银联', '10165.jpg');
INSERT INTO `credit` VALUES ('4', '银联标准人民币信用卡普卡', '50%', '最短20天，最长50天', '银联', '1_11177.jpg');
INSERT INTO `credit` VALUES ('5', '交通银行华润万家信用卡金卡', '信用额度的50%', '最长56天', '银联', '12846.png');
INSERT INTO `credit` VALUES ('6', '交通银行信用卡标准普卡', '信用额度的50%', '最长56天', '银联', '12667.png');
INSERT INTO `credit` VALUES ('7', '交通银行环球信用卡金卡', '信用额度的50%', '25天到56天', '银联+VISA', '12689.jpg');
INSERT INTO `credit` VALUES ('8', '兴业银行PASS信用卡金卡', '信用额度的50%', '最短20天，最长50天', '银联', '12768.jpg');
INSERT INTO `credit` VALUES ('9', 'HelloKitty粉丝单币信用卡', '信用额度的50%', '最短20天，最长50天', '银联', '12773.jpg');
INSERT INTO `credit` VALUES ('10', '招商新版和卡', '信用额度的50%', '20天到50天', '银联', '12813.jpg');
