-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 18, 2017 at 11:26 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `week14db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(5) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'sirinthorn', 'sirinthorn', 'สิรินธร', 'จียาศักดิ์');
INSERT INTO `user` VALUES (2, 'sirada', 'sirada', 'sirada', 'sirada');
INSERT INTO `user` VALUES (12, 'ning', 'ning', 'ning', 'ning');
INSERT INTO `user` VALUES (14, 'nungning', 'ning', 'nungning', 'nungning');
INSERT INTO `user` VALUES (11, 'thirapon', 'gim', 'ถิรพล', 'วงศ์สอาดสกุล');
INSERT INTO `user` VALUES (16, 'nungning1', '111', 'nungning1', 'nungning1');
INSERT INTO `user` VALUES (17, 'nungning2', '2222', 'nungning2', 'nungning2');
INSERT INTO `user` VALUES (18, 'nungning3', '333', 'nungning3', 'nungning3');
INSERT INTO `user` VALUES (19, 'nungning4', '444', 'nungning4', 'nungning4');
INSERT INTO `user` VALUES (20, 'nungning5', '555', 'nungning5', 'nungning5');
INSERT INTO `user` VALUES (21, 'cheyasak', 'cheyasak', 'cheyasak', 'cheyasak');
