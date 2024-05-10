/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : iit_uow

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 10/05/2024 18:49:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers`  (
  `answer_id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NULL DEFAULT NULL,
  `answer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `created_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`answer_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES (1, 4, 'Since none of the solutions seem to be working for you so far, try this one', '2024-05-10 02:32:14', 'MalithUD99');
INSERT INTO `answers` VALUES (2, 4, 'Make sure php5-mysql is installed.', '2024-05-10 02:32:34', 'MalithUD99');
INSERT INTO `answers` VALUES (3, 4, 'This behavior occurs when you have basic php syntax error in your code. In case when you have syntax errors the php parser does not parse the code completely and didnot display', '2024-05-10 02:33:08', 'MalithUD99');
INSERT INTO `answers` VALUES (4, 3, 'Try using the global namespace for your exception like this', '2024-05-10 02:38:07', 'MalithUD99');
INSERT INTO `answers` VALUES (5, 3, 'Refer Stripe\'s API document', '2024-05-10 02:38:28', 'MalithUD99');
INSERT INTO `answers` VALUES (6, 3, 'As mentioned in the comment I\'m doubtful that this is CodeIgniter\'s issue. It\'s more likely that you simply have display_errors set to off in your php.ini.', '2024-05-10 02:39:25', 'MalithUD99');
INSERT INTO `answers` VALUES (7, 1, 'Answer 01', '2024-05-10 03:01:22', 'MalithUD99');
INSERT INTO `answers` VALUES (8, 5, 'The applet makes the Java code secure and portable', '2024-05-10 18:11:19', 'TestUser01');
INSERT INTO `answers` VALUES (9, 5, 'Instance block, method, static block, and constructo', '2024-05-10 18:11:29', 'TestUser01');

-- ----------------------------
-- Table structure for question_tags
-- ----------------------------
DROP TABLE IF EXISTS `question_tags`;
CREATE TABLE `question_tags`  (
  `question_tag_id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NULL DEFAULT NULL,
  `add_tages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`question_tag_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of question_tags
-- ----------------------------
INSERT INTO `question_tags` VALUES (1, 1, 'php');
INSERT INTO `question_tags` VALUES (2, 2, 'codeIgniter');
INSERT INTO `question_tags` VALUES (3, 3, 'html');
INSERT INTO `question_tags` VALUES (4, 4, 'css');
INSERT INTO `question_tags` VALUES (5, 4, 'html');
INSERT INTO `question_tags` VALUES (6, 4, 'mysql');
INSERT INTO `question_tags` VALUES (7, 3, 'xampp');
INSERT INTO `question_tags` VALUES (8, 2, 'error');
INSERT INTO `question_tags` VALUES (9, 1, 'model');
INSERT INTO `question_tags` VALUES (10, 1, 'controller');
INSERT INTO `question_tags` VALUES (11, 4, 'tag');
INSERT INTO `question_tags` VALUES (12, 5, 'Dynamic');
INSERT INTO `question_tags` VALUES (13, 5, 'Neutral');
INSERT INTO `question_tags` VALUES (14, 5, 'pointers');
INSERT INTO `question_tags` VALUES (15, 5, 'oop');

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions`  (
  `question_id` int NOT NULL AUTO_INCREMENT,
  `question` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `created_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `answer_count` int NULL DEFAULT NULL,
  `view_count` int NULL DEFAULT NULL,
  PRIMARY KEY (`question_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES (1, 'A PHP Error was encountered', '2024-05-10 02:20:01', 'MalithUD99', 1, 3);
INSERT INTO `questions` VALUES (2, 'Codeigniter displays a blank page instead of error messages', '2024-05-10 02:23:26', 'MalithUD99', 0, 3);
INSERT INTO `questions` VALUES (3, 'Handling pure PHP errors in CodeIgniter ?', '2024-05-10 02:36:26', 'MalithUD99', 3, 12);
INSERT INTO `questions` VALUES (4, 'CodeIgniter doesn\'t display errors', '2024-05-10 02:25:51', 'MalithUD99', 3, 10);
INSERT INTO `questions` VALUES (5, 'Which of the following is not a Java features?', '2024-05-10 18:10:22', 'TestUser01', 2, 7);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `useremail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `is_active` int NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Malith Uduwarage', 'MalithUD99', 'malith@gmail.com', '$2y$10$q7N7IGOUa.Rm9BlykhY17epdjjVgfoMTEu78UplvP0hRzz0A69fjC', '2024-05-10 02:17:04', 1);
INSERT INTO `users` VALUES (2, 'TestUser01', 'TestUser01', 'TestUser01@gmail.com', '$2y$10$QRDQIRZksynuPPFOkuQ.K.DMbuhhjprq8yS4hi6YVVxYwNkXZufDC', '2024-05-10 18:09:04', 1);

SET FOREIGN_KEY_CHECKS = 1;
