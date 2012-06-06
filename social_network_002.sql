-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2012 at 09:30 AM
-- Server version: 5.5.22
-- PHP Version: 5.3.10-1ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `status_id` mediumint(8) DEFAULT NULL,
  `friend_id` mediumint(8) DEFAULT NULL,
  `thumbs_up` smallint(5) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `status_id` (`status_id`),
  KEY `friend_id` (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=232 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `message`, `created`, `status_id`, `friend_id`, `thumbs_up`) VALUES
(3, '7777777777', '2012-04-08 06:48:32', 8, NULL, NULL),
(4, 'hell', '2012-04-08 07:02:59', 8, NULL, NULL),
(5, 'hell', '2012-04-08 07:03:00', 8, NULL, NULL),
(6, 'dddd', '2012-04-09 02:48:44', 10, NULL, NULL),
(7, 'dddd', '2012-04-09 02:48:45', 10, NULL, NULL),
(8, 'd', '2012-04-09 02:49:06', 13, NULL, NULL),
(9, 'd', '2012-04-09 02:49:07', 13, NULL, NULL),
(10, '2', '2012-04-09 02:54:29', 16, NULL, NULL),
(11, '', '2012-04-09 02:56:25', 16, NULL, NULL),
(12, '33333333333333333333333', '2012-04-09 02:56:36', 16, NULL, NULL),
(13, '4444444444444444444444', '2012-04-09 02:56:56', 16, NULL, NULL),
(14, '4444444444444444444444', '2012-04-09 02:56:57', 16, NULL, NULL),
(15, 'djdhd', '2012-04-09 02:57:08', 16, NULL, NULL),
(16, 'djdhd', '2012-04-09 02:57:12', 16, NULL, NULL),
(17, '2222222222222222', '2012-04-09 02:58:34', 16, NULL, NULL),
(18, '2222222222222222', '2012-04-09 02:58:37', 16, NULL, NULL),
(19, '9', '2012-04-09 03:02:11', 16, NULL, NULL),
(20, '9', '2012-04-09 03:02:13', 16, NULL, NULL),
(21, '', '2012-04-09 03:55:26', 16, NULL, NULL),
(22, 'sssssssssssssssss', '2012-04-09 03:55:35', 16, NULL, NULL),
(23, 'sssssssssssssssss', '2012-04-09 03:55:43', 16, NULL, NULL),
(24, '', '2012-04-09 03:59:47', 16, NULL, NULL),
(25, 'dddddddddddddddddd', '2012-04-16 04:51:01', 19, NULL, NULL),
(26, 'dddddddddddddddddd', '2012-04-16 04:51:02', 19, NULL, NULL),
(27, 'dddddddddddddddddd', '2012-04-16 04:51:02', 19, NULL, NULL),
(28, '', '2012-04-16 13:25:45', 21, NULL, NULL),
(29, '	hỉ chấp nhận bình luận bằng tiếng Việt có dấu, những bình luận sai qui định sẽ bị xóa. Bình luậnNhấn Shift + Enter để xuống dòng. Bình luận phải dài hơn 50 ký tự. 0 ký tự\r\nCreated	', '2012-04-16 13:25:50', 21, NULL, NULL),
(30, 'aaaaa', '2012-04-16 13:26:59', 21, NULL, NULL),
(31, 'aaaaa', '2012-04-16 13:27:01', 21, NULL, NULL),
(32, 'aaaaassd', '2012-04-16 13:40:50', 21, NULL, NULL),
(33, '', '2012-04-16 13:41:03', 21, NULL, NULL),
(34, 'ggggggggggg', '2012-04-18 06:11:54', 27, NULL, NULL),
(35, 'ggggggggggg', '2012-04-18 06:11:55', 27, NULL, NULL),
(36, 'ffffffffff', '2012-04-18 06:21:22', 8, NULL, NULL),
(37, '', '2012-04-18 06:21:45', 8, NULL, NULL),
(38, '555555555555', '2012-04-18 06:21:53', 8, NULL, NULL),
(39, 'sssssssssssssss', '2012-04-18 06:23:20', 8, NULL, NULL),
(40, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2012-04-18 06:23:30', 8, NULL, NULL),
(41, 'ccc', '2012-05-29 15:50:47', 226, NULL, 0),
(42, 'ddd', '2012-05-29 15:51:58', 225, NULL, 0),
(43, 'ccc', '2012-05-29 15:52:17', 226, NULL, 0),
(44, 'ccc', '2012-05-29 15:52:19', 226, NULL, 0),
(45, 'ccc', '2012-05-29 15:52:19', 226, NULL, 0),
(46, 'ccc', '2012-05-29 15:52:19', 226, NULL, 0),
(47, 'ddd', '2012-05-29 15:54:01', 225, NULL, 0),
(48, 'ddd', '2012-05-29 15:54:04', 225, NULL, 0),
(49, 'AAAAAaaa', '2012-05-29 15:57:28', 226, NULL, 0),
(50, 'ddd', '2012-05-29 15:57:31', 225, NULL, 0),
(51, 'lol ', '2012-05-29 15:57:38', 224, NULL, 0),
(52, 'lol ', '2012-05-29 15:57:41', 224, NULL, 0),
(53, 'lol ', '2012-05-29 15:58:13', 224, NULL, 0),
(54, 'ffffffffffffffff', '2012-05-29 15:58:24', 223, NULL, 0),
(55, 'ffffffffffffffff', '2012-05-29 15:59:14', 223, NULL, 0),
(56, 'AAAAAaaa', '2012-05-29 16:01:04', 226, NULL, 0),
(57, 'AAAAAaaa', '2012-05-29 16:02:35', 226, NULL, 0),
(58, 'AAAAAAAa', '2012-05-29 16:02:47', 225, NULL, 0),
(59, 'AAAAAAAa', '2012-05-29 16:05:00', 225, NULL, 0),
(60, 'lol ', '2012-05-29 16:05:11', 224, NULL, 0),
(61, 'Chanh', '2012-05-29 16:05:30', 224, NULL, 0),
(62, '444444444444', '2012-05-29 16:07:02', 226, NULL, 0),
(63, '444444444444', '2012-05-29 16:07:56', 226, NULL, 0),
(64, '66666', '2012-05-29 16:08:06', 226, NULL, 0),
(65, 'Chanhs', '2012-05-29 16:09:11', 226, NULL, 0),
(66, 'Chanhs', '2012-05-29 16:10:18', 226, NULL, 0),
(67, 'Chanhs', '2012-05-29 16:10:20', 226, NULL, 0),
(68, 'Chanhs', '2012-05-29 16:10:21', 226, NULL, 0),
(69, 'Chanhs', '2012-05-29 16:10:22', 226, NULL, 0),
(70, 'Chanhs', '2012-05-29 16:10:24', 226, NULL, 0),
(71, 'Chanhs', '2012-05-29 16:10:25', 226, NULL, 0),
(72, 'Chanhs', '2012-05-29 16:10:28', 226, NULL, 0),
(73, 'Chanhs', '2012-05-29 16:10:29', 226, NULL, 0),
(74, 'Chanhs', '2012-05-29 16:10:31', 226, NULL, 0),
(75, 'Chanhs444', '2012-05-29 16:14:15', 226, NULL, 0),
(76, 'AAAAAAAa', '2012-05-29 16:15:22', 225, NULL, 0),
(77, 'ddddd', '2012-05-29 16:16:18', 226, NULL, 0),
(78, 'ddddd', '2012-05-29 16:16:21', 226, NULL, 0),
(79, 'ddddd', '2012-05-29 16:16:22', 226, NULL, 0),
(80, 'ddddd', '2012-05-29 16:16:22', 226, NULL, 0),
(81, 'ddddd', '2012-05-29 16:16:23', 226, NULL, 0),
(82, 'Chanh', '2012-05-29 16:20:01', 226, NULL, 0),
(83, 'Chanh', '2012-05-29 16:20:08', 226, NULL, 0),
(84, 'Chanh', '2012-05-29 16:20:15', 226, NULL, 0),
(85, 'AAAAAAAa', '2012-05-29 16:20:25', 225, NULL, 0),
(86, 'Chanh Le', '2012-05-29 16:20:59', 226, NULL, 0),
(87, 'Chanh Le', '2012-05-29 16:21:32', 226, NULL, 0),
(88, 'Chanh Le Trung', '2012-05-29 16:23:07', 226, NULL, 0),
(89, 'Chanh Le Trung', '2012-05-29 16:23:08', 226, NULL, 0),
(90, 'AAAAAAAa5555', '2012-05-29 16:23:12', 225, NULL, 0),
(91, 'AAAAAAAa5555', '2012-05-29 16:23:18', 225, NULL, 0),
(92, 'AAAAAAAa5555', '2012-05-29 16:23:23', 225, NULL, 0),
(93, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:24:06', 226, NULL, 0),
(94, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:24:10', 226, NULL, 0),
(95, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:25:34', 226, NULL, 0),
(96, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:25:36', 226, NULL, 0),
(97, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:25:37', 226, NULL, 0),
(98, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:25:42', 226, NULL, 0),
(99, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:25:43', 226, NULL, 0),
(100, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:25:44', 226, NULL, 0),
(101, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:25:46', 226, NULL, 0),
(102, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:28:21', 226, NULL, 0),
(103, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:28:26', 226, NULL, 0),
(104, 'zzzzzzzzzzzzzzzzz', '2012-05-29 16:28:28', 226, NULL, 0),
(105, 'XXXXX', '2012-05-29 16:29:11', 226, NULL, 0),
(106, 'XXXXX', '2012-05-29 16:29:32', 226, NULL, 0),
(107, 'XXXXX', '2012-05-29 16:31:42', 226, NULL, 0),
(108, 'XXXXX', '2012-05-29 16:31:44', 226, NULL, 0),
(109, 'XXXXX7777', '2012-05-29 16:33:31', 226, NULL, 0),
(110, 'XXXXX7777', '2012-05-29 16:34:25', 226, NULL, 0),
(111, 'XXXXX7777', '2012-05-29 16:34:45', 226, NULL, 0),
(112, 'XXXXX7777', '2012-05-29 16:34:46', 226, NULL, 0),
(113, 'XXXXX7777', '2012-05-29 16:34:46', 226, NULL, 0),
(114, 'XXXXX7777', '2012-05-29 16:34:47', 226, NULL, 0),
(115, 'XXXXX7777', '2012-05-29 16:37:30', 226, NULL, 0),
(116, 'XXXXX7777', '2012-05-29 16:37:47', 226, NULL, 0),
(117, 'ddd', '2012-05-29 16:39:13', 227, NULL, 0),
(118, 'dddd', '2012-05-29 16:46:13', 228, NULL, 0),
(119, 'dddd', '2012-05-29 16:57:36', 228, NULL, 0),
(120, '44444', '2012-05-29 16:57:41', 228, NULL, 0),
(121, '55555', '2012-05-29 16:58:25', 228, NULL, 0),
(122, '777777', '2012-05-29 16:58:57', 228, NULL, 0),
(123, '99', '2012-05-29 16:59:16', 228, NULL, 0),
(124, '99', '2012-05-29 17:00:21', 228, NULL, 0),
(125, '99', '2012-05-29 17:00:27', 228, NULL, 0),
(126, '99', '2012-05-29 17:00:28', 228, NULL, 0),
(127, '99', '2012-05-29 17:00:28', 228, NULL, 0),
(128, 'ddd', '2012-05-29 17:00:31', 227, NULL, 0),
(129, 'XXXXX7777\n', '2012-05-29 17:00:36', 226, NULL, 0),
(130, '99', '2012-05-29 17:02:01', 228, NULL, 0),
(131, 'ddd', '2012-05-29 17:02:05', 227, NULL, 0),
(132, 'ddd', '2012-05-29 17:02:07', 227, NULL, 0),
(133, '99', '2012-05-29 17:02:10', 228, NULL, 0),
(134, '99', '2012-05-29 17:02:10', 228, NULL, 0),
(135, '99', '2012-05-29 17:02:11', 228, NULL, 0),
(136, '99', '2012-05-29 17:02:11', 228, NULL, 0),
(137, '99', '2012-05-29 17:02:13', 228, NULL, 0),
(138, 'kk\n', '2012-05-29 17:02:46', 230, NULL, 0),
(139, 'kk\n', '2012-05-29 17:02:53', 230, NULL, 0),
(140, 'kk\n', '2012-05-29 17:02:54', 230, NULL, 0),
(141, 'kk\n', '2012-05-29 17:02:55', 230, NULL, 0),
(142, 'kk\n', '2012-05-29 17:02:56', 230, NULL, 0),
(143, 'kk\n', '2012-05-29 17:03:17', 230, NULL, 0),
(144, 'kk\n', '2012-05-29 17:03:20', 230, NULL, 0),
(145, 'kk\n', '2012-05-29 17:03:26', 230, NULL, 0),
(146, 'kk\n', '2012-05-29 17:03:28', 230, NULL, 0),
(147, 'dddd', '2012-05-29 17:15:50', 230, NULL, 0),
(148, 'dddd', '2012-05-29 17:17:44', 229, NULL, 0),
(149, 'dddd', '2012-05-29 17:18:39', 230, NULL, 0),
(150, '55555', '2012-05-29 17:18:46', 230, NULL, 0),
(151, '55555', '2012-05-29 17:20:00', 230, NULL, 0),
(152, 'dddd', '2012-05-29 17:20:12', 229, NULL, 0),
(153, '99', '2012-05-29 17:20:15', 228, NULL, 0),
(154, '99', '2012-05-29 17:21:46', 228, NULL, 0),
(155, '99', '2012-05-29 17:21:48', 228, NULL, 0),
(156, '99', '2012-05-29 17:21:52', 228, NULL, 0),
(157, '99', '2012-05-29 17:23:07', 228, NULL, 0),
(158, '99', '2012-05-29 17:23:32', 228, NULL, 0),
(159, '99', '2012-05-29 17:25:44', 228, NULL, 0),
(160, 'dddd', '2012-05-29 17:25:51', 229, NULL, 0),
(161, '55555', '2012-05-29 17:26:40', 230, NULL, 0),
(162, '99', '2012-05-29 17:28:58', 228, NULL, 0),
(163, 'dddd', '2012-05-29 17:29:07', 229, NULL, 0),
(164, 'ddd', '2012-05-29 17:29:11', 227, NULL, 0),
(165, 'ddd', '2012-05-29 17:29:12', 227, NULL, 0),
(166, 'ddd', '2012-05-29 17:29:13', 227, NULL, 0),
(167, 'ddd', '2012-05-29 17:29:14', 227, NULL, 0),
(168, 'ddd', '2012-05-29 17:29:14', 227, NULL, 0),
(169, 'ddd', '2012-05-29 17:29:54', 227, NULL, 0),
(170, '55555', '2012-05-29 17:32:17', 230, NULL, 0),
(171, '55555', '2012-05-29 17:33:04', 230, NULL, 0),
(172, '55555', '2012-05-29 17:33:10', 230, NULL, 0),
(173, '55555', '2012-05-29 17:33:12', 230, NULL, 0),
(174, '7777', '2012-05-29 17:33:57', 230, NULL, 0),
(175, '7777', '2012-05-29 17:34:01', 230, NULL, 0),
(176, '7777', '2012-05-29 17:34:08', 230, NULL, 0),
(177, '7777', '2012-05-29 17:34:12', 230, NULL, 0),
(178, '7777', '2012-05-29 17:34:26', 230, NULL, 0),
(179, '7777', '2012-05-29 17:34:29', 230, NULL, 0),
(180, '7777', '2012-05-29 17:34:30', 230, NULL, 0),
(181, '7777', '2012-05-29 17:36:37', 230, NULL, 0),
(182, '7777', '2012-05-29 17:36:39', 230, NULL, 0),
(183, '7777', '2012-05-29 17:36:40', 230, NULL, 0),
(184, '7777', '2012-05-29 17:36:41', 230, NULL, 0),
(185, '7777', '2012-05-29 17:36:42', 230, NULL, 0),
(186, '7777', '2012-05-29 17:36:42', 230, NULL, 0),
(187, 'chanhle', '2012-05-29 17:47:25', 230, NULL, 0),
(188, '7777', '2012-05-29 17:48:48', 228, NULL, 0),
(189, 'Hello baby', '2012-05-29 17:48:54', 228, NULL, 0),
(190, 'Chaof ngay moi', '2012-05-29 17:49:03', 227, NULL, 0),
(191, 'Hello baby4', '2012-05-29 17:50:18', 228, NULL, 0),
(192, 'Chaof ngay moi333', '2012-05-29 17:50:24', 227, NULL, 0),
(193, 'Chaof ngay moi333t7777', '2012-05-29 17:54:39', 227, NULL, 0),
(194, 'ddddd', '2012-05-29 17:54:51', 231, NULL, 0),
(195, 'ddddddd', '2012-05-29 17:54:55', 231, NULL, 0),
(196, 'ddddddd', '2012-05-29 17:54:56', 231, NULL, 0),
(197, 'dddd', '2012-05-29 17:55:31', 232, NULL, 0),
(198, 'dddd', '2012-05-29 17:55:32', 232, NULL, 0),
(199, 'dddd', '2012-05-29 17:55:33', 232, NULL, 0),
(200, 'dddd', '2012-05-29 17:55:35', 232, NULL, 0),
(201, 'comment', '2012-05-30 02:53:54', 233, NULL, 0),
(202, 'comment', '2012-05-30 02:53:56', 233, NULL, 0),
(203, 'comment', '2012-05-30 02:53:58', 233, NULL, 0),
(204, 'comment11111111111111111111111111111111111111111111111111111111111111111111111111111', '2012-05-30 02:57:22', 233, NULL, 0),
(205, 'comment1111111111111243242342344444444444444234234234234234234234234234', '2012-05-30 02:57:42', 233, NULL, 0),
(206, 'ssss', '2012-05-30 15:37:41', 234, NULL, 0),
(207, 'ssss', '2012-05-30 15:37:43', 234, NULL, 0),
(208, 'ssss', '2012-05-30 15:37:44', 234, NULL, 0),
(209, 'ddd', '2012-05-30 15:37:53', 234, NULL, 0),
(210, 'fgffffff', '2012-05-31 08:18:33', 233, NULL, 0),
(211, 'fgffffff http://localhost/nevergiveup/index.php/status/', '2012-05-31 08:18:41', 233, NULL, 0),
(212, 'fgffffff ffffffffffffffffffffffffffffffffffffffffffffhttp://localhost/nevergiveup/index.php/status/', '2012-05-31 08:18:47', 233, NULL, 0),
(213, 'fgffffff ffffffffffffffffffffffffffffffffffffffffffffhttp://localhost/nevergiveup/index.php/status/', '2012-05-31 08:19:45', 233, NULL, 0),
(214, 'fgffffff ffffffffffffffffffffffffffffffffffffffffffffhttp://localhost/nevergiveup/index.php/status/', '2012-05-31 08:21:16', 233, NULL, 0),
(215, ' the middle of the browser window instead of being affixed to the left side. You can achieve that effect easily by adding a wrapper div around the rest of the markup, just inside the body tags, and creating a CSS style to center that div.\n', '2012-05-31 08:22:12', 233, NULL, 0),
(216, ' the middle of the browser window instead of being affixed to the left side. You can achieve that effect easily by adding a wrapper div around the rest of the markup, just inside the body tags, and creating a CSS style to center that div.\n\n\n', '2012-05-31 08:22:26', 233, NULL, 0),
(217, ' the middle of the browser window instead of being affixed to the left side. You can achieve that effect easily by adding a wrapper div around the rest of the markup, just inside the body tags, and creating a CSS style to center that div.\n\n\n', '2012-05-31 08:22:32', 233, NULL, 0),
(218, 'Just in the last few days the old debate about fixed vs. fluid width in website layouts', '2012-05-31 08:23:15', 233, NULL, 0),
(219, 'dddddddddddd', '2012-05-31 09:21:29', 235, NULL, 0),
(220, 'dddddddddddd', '2012-05-31 09:21:31', 235, NULL, 0),
(221, 'dddddddddddd', '2012-05-31 09:21:32', 235, NULL, 0),
(222, 'ddddd', '2012-05-31 09:31:41', 44, NULL, 0),
(223, 'ddddd', '2012-05-31 09:31:43', 44, NULL, 0),
(224, 'ddddd', '2012-05-31 09:31:45', 44, NULL, 0),
(225, 'dddd', '2012-05-31 14:17:11', 5, NULL, 0),
(226, 'dd', '2012-06-01 01:22:09', 236, NULL, 0),
(227, 'ffff', '2012-06-01 01:23:41', 237, NULL, 0),
(228, 'ffff', '2012-06-01 01:23:43', 237, NULL, 0),
(229, 'ffff', '2012-06-01 01:23:44', 237, NULL, 0),
(230, 'ffff', '2012-06-01 01:31:55', 239, NULL, 0),
(231, 'fffff', '2012-06-01 01:31:58', 239, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `friend_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `subscriber` tinyint(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `user_id` mediumint(8) DEFAULT NULL,
  `friend_list_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`friend_id`),
  KEY `user_id` (`user_id`),
  KEY `friend_list_id` (`friend_list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`friend_id`, `subscriber`, `created`, `user_id`, `friend_list_id`) VALUES
(1, NULL, '0000-00-00 00:00:00', 1, NULL),
(2, NULL, '2012-04-16 14:04:19', 12, 2),
(3, NULL, '2012-04-16 14:04:30', 2, 2),
(4, NULL, '2012-04-16 14:04:32', 2, 2),
(5, NULL, '2012-04-16 14:04:41', 3, 2),
(6, NULL, '2012-04-16 14:04:11', 9, 2),
(7, NULL, '2012-04-16 14:04:33', 6, 2),
(8, NULL, '2012-04-16 14:04:19', 10, 2),
(9, NULL, '2012-04-18 06:04:26', 3, 2),
(10, NULL, '2012-04-29 17:04:44', 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `friend_list`
--

CREATE TABLE IF NOT EXISTS `friend_list` (
  `friend_list_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `friend_id` mediumint(8) DEFAULT NULL,
  `user_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`friend_list_id`),
  KEY `user_id` (`user_id`),
  KEY `friend_id` (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `friend_list`
--

INSERT INTO `friend_list` (`friend_list_id`, `name`, `friend_id`, `user_id`) VALUES
(2, NULL, NULL, NULL),
(3, NULL, NULL, NULL),
(4, NULL, NULL, 9),
(5, NULL, NULL, 10),
(6, NULL, NULL, 11),
(7, NULL, NULL, NULL),
(8, NULL, NULL, 12),
(9, NULL, NULL, 13),
(10, NULL, NULL, 14),
(11, NULL, NULL, 15),
(12, NULL, NULL, 16),
(13, NULL, NULL, 17),
(14, NULL, NULL, 18),
(15, NULL, NULL, 19),
(16, NULL, NULL, NULL),
(17, NULL, NULL, NULL),
(18, NULL, NULL, 22),
(19, NULL, NULL, 23),
(20, NULL, NULL, 24),
(21, NULL, NULL, 25),
(22, NULL, NULL, 26),
(23, NULL, NULL, 27),
(24, NULL, NULL, 28),
(25, NULL, NULL, 29),
(26, NULL, NULL, 30),
(27, NULL, NULL, 31),
(28, NULL, NULL, 32),
(29, NULL, NULL, 33),
(30, NULL, NULL, 34),
(31, NULL, NULL, 35),
(32, NULL, NULL, 36),
(33, NULL, NULL, 37),
(34, NULL, NULL, 38),
(35, NULL, NULL, 39),
(36, NULL, NULL, 40),
(37, NULL, NULL, 41),
(38, NULL, NULL, 42),
(39, NULL, NULL, 43),
(40, NULL, NULL, 44);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `msg` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `user_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`notification_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `profile_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(9) DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `relationship` varchar(45) DEFAULT NULL,
  `looking_for` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `user_id`, `rating`, `dob`, `sex`, `nickname`, `about`, `relationship`, `looking_for`, `phone`, `interest`, `education`, `hobbies`, `created`) VALUES
(1, 1, '', '0000-00-00', '', 'Le', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(2, 1, '', '0000-00-00', '', 'Le', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(3, 1, 'ddd', '0000-00-00', '', 'dd', 'ddd', 'dd', '', '', '', '', '', '0000-00-00 00:00:00'),
(4, 18, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-04-29 17:04:10'),
(5, NULL, NULL, '0000-00-00', 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:22'),
(6, NULL, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:02'),
(7, 22, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:10'),
(8, 23, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:55'),
(9, 24, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:17'),
(10, 25, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:37'),
(11, 26, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:19'),
(12, 27, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:38'),
(13, 28, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 14:05:27'),
(14, 29, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:12'),
(15, 30, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:28'),
(16, 31, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:02'),
(17, 32, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:09'),
(18, 33, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:05'),
(19, 34, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:03'),
(20, 35, NULL, '0000-00-00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:16'),
(21, 36, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:54'),
(22, 37, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:31'),
(23, 38, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:36'),
(24, 39, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:43'),
(25, 40, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:53'),
(26, 41, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:22'),
(27, 42, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:07'),
(28, 43, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:28'),
(29, 44, NULL, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2012-05-30 15:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thumbs_up` smallint(5) DEFAULT '0',
  `thumbs_down` smallint(5) DEFAULT '0',
  `reply` varchar(45) DEFAULT NULL,
  `user_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`status_id`),
  KEY `fk_status_reply_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `message`, `created`, `thumbs_up`, `thumbs_down`, `reply`, `user_id`) VALUES
(5, 'Hell', '2012-04-05 17:22:34', 2, 1, '', 4),
(6, 'sssssssssssssss', '2012-04-08 01:54:19', NULL, NULL, '', 1),
(7, 'ddddddddddddd', '2012-04-08 04:57:01', NULL, NULL, '', 1),
(8, 'ddddddddddddd', '2012-04-08 04:57:09', -32, 0, '', 1),
(9, 'DDDDDDDDDD', '2012-04-09 02:48:38', -5, NULL, '', 1),
(10, 'DDDDDDDDDD', '2012-04-09 02:48:41', -19, -31, '', 1),
(11, 'dd', '2012-04-09 02:49:01', -2, 2, '', 1),
(12, 'dd', '2012-04-09 02:49:02', -1, -1, '', 1),
(13, 'dd', '2012-04-09 02:49:03', -69, -56, '', 1),
(14, 'djdjdj', '2012-04-09 02:54:21', NULL, NULL, '', 1),
(15, 'djdjdj', '2012-04-09 02:54:22', 1, -1, '', 1),
(16, 'djdjdj', '2012-04-09 02:54:24', 1, 1, '', 1),
(17, 'Hello', '2012-04-16 04:50:48', 1, 3, '', 1),
(18, 'Hello', '2012-04-16 04:50:50', 0, 1, '', 1),
(19, 'Hello', '2012-04-16 04:50:56', 0, 1, '', 1),
(20, 'Hello', '2012-04-16 04:50:56', -5, 2, '', 1),
(21, 'hỉ chấp nhận bình luận bằng tiếng Việt có dấu, những bình luận sai qui định sẽ bị xóa.\r\n\r\n \r\nBình luậnNhấn Shift + Enter để xuống dòng. Bình luận phải dài hơn 50 ký tự.\r\n0 ký tự\r\n', '2012-04-16 13:25:39', NULL, NULL, '', 1),
(22, 'Hhhhhhhhhhh', '2012-04-18 06:11:40', NULL, NULL, '', 1),
(23, 'Hhhhhhhhhhh', '2012-04-18 06:11:41', -4, 0, '', 1),
(24, 'Hhhhhhhhhhh', '2012-04-18 06:11:41', NULL, NULL, '', 1),
(25, 'Hhhhhhhhhhh', '2012-04-18 06:11:43', 0, 1, '', 1),
(26, 'Hhhhhhhhhhh', '2012-04-18 06:11:48', 2, 0, '', 1),
(27, 'Hhhhhhhhhhh', '2012-04-18 06:11:49', 46, 17, '', 1),
(28, 'fffffffffffffffff', '2012-04-29 14:43:17', -21, 0, '', 4),
(29, 'fffffffffffffffff', '2012-04-29 14:43:19', 2, 0, 'f', 4),
(30, 'fffffffffffffffff', '2012-04-29 14:43:20', 0, 0, 'fff', 4),
(31, 'fffffffffffffffff', '2012-04-29 14:43:21', 3, 1, 'fff', 4),
(32, 'fffffffffffffffff', '2012-04-29 14:43:21', 0, 0, 'fff', 4),
(33, 'dddddd', '2012-04-29 14:44:42', 0, 0, '', 4),
(34, 'dddddd', '2012-04-29 14:44:43', 0, 0, '', 4),
(35, 'dddddd', '2012-04-29 14:44:44', 0, 0, '', 4),
(36, 'dddddd', '2012-04-29 14:44:45', 0, 0, '', 4),
(37, 'dddddd', '2012-04-29 14:44:46', 6, 2, '', 4),
(38, 'ddddddddđ', '2012-04-29 15:19:48', 0, 0, '', 4),
(39, 'ddddddddđ', '2012-04-29 15:19:49', 15, 0, '', 4),
(40, 'ddddddddđ', '2012-04-29 15:19:50', 0, 0, '', 4),
(41, 'ffffffffffffffffffff', '2012-05-01 03:21:57', 0, 0, '', 1),
(42, 'ffffffffffffffffffff', '2012-05-01 03:21:59', 0, 0, '', 1),
(43, 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2012-05-01 03:22:04', 0, 0, '', 1),
(44, 'adddddddddddddddddddfaadddddddddddddddddddfaadddddddddddddddddddfaadddddddddddddddddddfaadddddddddddddddddddfaadddddddddddddddddddfaadddddddddddddddddddf', '2012-05-01 03:22:53', 0, 0, '', 1),
(45, 'fffffffffffff', '2012-05-01 04:12:07', 0, 0, '', 1),
(46, 'fffffffffffff', '2012-05-01 04:12:08', 0, 0, '', 1),
(47, 'fffffffffffffffffffffffff', '2012-05-01 10:05:47', 0, 0, NULL, 1),
(48, 'fffffffffffffffffffffffff', '2012-05-01 10:05:11', 0, 0, NULL, 1),
(49, 'fffffffffffffffffffffffff', '2012-05-01 10:05:14', 0, 0, NULL, 1),
(50, 'fffffffffffffffffffffffff', '2012-05-01 10:05:27', 0, 0, NULL, 1),
(51, 'ffffffffffffffffffff', '2012-05-01 10:05:16', 0, 0, NULL, 1),
(52, 'fffffffffffffff', '2012-05-01 10:05:20', 0, 0, NULL, 1),
(53, 'vãi ', '2012-05-01 10:05:26', 0, 0, NULL, 1),
(54, 'Hell', '2012-05-01 10:05:39', 0, 0, NULL, 1),
(55, 'Hell', '2012-05-01 10:05:47', 0, 0, NULL, 1),
(56, 'ddddddddddddddd', '2012-05-01 14:05:05', 0, 0, NULL, 1),
(57, 'ddddddddddddddddddddd', '2012-05-02 10:05:30', 0, 0, NULL, 1),
(58, 'dddddddddddddddd', '2012-05-02 10:05:34', 0, 0, NULL, 1),
(59, 'dddddddddd', '2012-05-02 10:05:36', 0, 0, NULL, 1),
(60, 'dddddddddd', '2012-05-02 10:05:37', 0, 0, NULL, 1),
(61, 'dddd', '2012-05-02 10:05:57', 0, 0, NULL, 1),
(62, 'Hell', '2012-05-02 14:05:07', 0, 0, NULL, 1),
(63, 'Hello', '2012-05-02 14:05:28', 0, 0, NULL, 1),
(64, 'vvvvvvvv', '2012-05-02 15:05:15', 0, 0, NULL, 1),
(65, 'ccccccccc', '2012-05-02 15:05:20', 0, 0, NULL, 1),
(66, 'ssssssss', '2012-05-02 15:05:40', 0, 0, NULL, 1),
(67, 'sssssss', '2012-05-02 15:05:45', 0, 0, NULL, 1),
(68, 'sssssss', '2012-05-02 15:05:46', 0, 0, NULL, 1),
(69, 'ssssssss', '2012-05-02 15:05:48', 0, 0, NULL, 1),
(70, 'DDDDDDDDDDD', '2012-05-02 15:05:42', 0, 0, NULL, 1),
(71, 'ffffffffffff', '2012-05-02 15:05:55', 0, 0, NULL, 1),
(72, 'ddddddddddddddd', '2012-05-04 07:05:47', 0, 0, NULL, 1),
(73, 'ddddddddddddddddddddddddddddddddd', '2012-05-04 07:05:54', 0, 0, NULL, 1),
(74, 'dfdfd', '2012-05-07 02:05:01', 0, 0, NULL, 1),
(75, 'ggggggggggggg', '2012-05-07 02:05:52', 0, 0, NULL, 1),
(76, 'ggggggggggggggggg', '2012-05-07 02:05:55', 0, 0, NULL, 1),
(77, 'ffffffffffffffff', '2012-05-07 02:05:02', 0, 0, NULL, 1),
(78, 'AAAAAAAAAAAA', '2012-05-07 02:05:06', 0, 0, NULL, 1),
(79, 'CCCCCCCCCCCCC', '2012-05-07 02:05:49', 0, 0, NULL, 1),
(80, 'ffffffffffffff', '2012-05-07 02:05:31', 0, 0, NULL, 1),
(81, 'ddddddddddddddddddddddddddddddd', '2012-05-07 03:05:35', 0, 0, NULL, 1),
(82, 'fffffffffff', '2012-05-07 04:05:05', 0, 0, NULL, 1),
(83, 'ddddddddddddddd', '2012-05-07 12:05:39', 0, 0, NULL, 1),
(84, 'dddddddddddddddd', '2012-05-07 12:05:43', 0, 0, NULL, 1),
(85, 'AAAAAAAAAAAAAAAAAAAAAA', '2012-05-07 12:05:48', 0, 0, NULL, 1),
(86, 'hA HAHA', '2012-05-07 12:05:01', 0, 0, NULL, 1),
(87, 'HAHA', '2012-05-07 12:05:15', 0, 0, NULL, 1),
(88, 'DDDDDDDDDD', '2012-05-07 12:05:36', 0, 0, NULL, 1),
(89, 'FFFFFFFFFFFFFFFFF', '2012-05-07 12:05:48', 0, 0, NULL, 1),
(90, 'DDDDDD', '2012-05-07 12:05:46', 0, 0, NULL, 1),
(91, 'TEST', '2012-05-07 13:05:07', 0, 0, NULL, 1),
(92, 'TEST', '2012-05-07 13:05:11', 0, 0, NULL, 1),
(93, 'TEST', '2012-05-07 13:05:12', 0, 0, NULL, 1),
(94, 'TESTTTTTTTTT', '2012-05-07 13:05:41', 0, 0, NULL, 1),
(95, 'SS', '2012-05-07 13:05:53', 0, 0, NULL, 1),
(96, 'AAA', '2012-05-07 13:05:57', 0, 0, NULL, 1),
(97, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '2012-05-07 13:05:00', 0, 0, NULL, 1),
(98, 'SSSSSSSSSSS', '2012-05-07 13:05:21', 0, 0, NULL, 1),
(99, 'ssssssssssss', '2012-05-07 13:05:57', 0, 0, NULL, 1),
(100, 'ddddddddddd', '2012-05-07 13:05:53', 0, 0, NULL, 1),
(101, 'd', '2012-05-07 13:05:56', 0, 0, NULL, 1),
(102, 'dddd', '2012-05-07 13:05:59', 0, 0, NULL, 1),
(103, 'I see the sunrise ', '2012-05-07 13:05:09', 0, 0, NULL, 1),
(104, 'eeeeeeeeeee', '2012-05-07 13:05:35', 0, 0, NULL, 1),
(105, 'k', '2012-05-07 13:05:47', 0, 0, NULL, 1),
(106, 'jjjjjjjjjj', '2012-05-07 13:05:50', 0, 0, NULL, 1),
(107, 'fff', '2012-05-07 13:05:58', 0, 0, NULL, 1),
(108, 'd', '2012-05-07 13:05:21', 0, 0, NULL, 1),
(109, 'd', '2012-05-07 13:05:25', 0, 0, NULL, 1),
(110, 'ff', '2012-05-07 13:05:54', 0, 0, NULL, 1),
(111, 'I heew', '2012-05-07 13:05:02', 0, 0, NULL, 1),
(112, 'dddddddddddddddddd\ndddddddddddddd\ndddddddddddddddddddddd\ndddddddddddd', '2012-05-07 13:05:39', 0, 0, NULL, 1),
(113, 'ddddddddddddddddddddddd', '2012-05-07 13:05:25', 0, 0, NULL, 1),
(114, 'sssssssssssss', '2012-05-07 13:05:29', 0, 0, NULL, 1),
(115, 'dddddddddddd', '2012-05-07 13:05:22', 0, 0, NULL, 1),
(116, 'fffffffffffffffffffffffffffff', '2012-05-07 13:05:26', 0, 0, NULL, 1),
(117, 'ffffffffffffffff', '2012-05-07 13:05:29', 0, 0, NULL, 1),
(118, 'ffffffffffffffffffffffff', '2012-05-07 13:05:32', 0, 0, NULL, 1),
(119, 'f', '2012-05-07 13:05:36', 0, 0, NULL, 1),
(120, 'd', '2012-05-07 13:05:24', 0, 0, NULL, 1),
(121, 'd', '2012-05-07 13:05:30', 0, 0, NULL, 1),
(122, 'd', '2012-05-07 13:05:34', 0, 0, NULL, 1),
(123, 'd', '2012-05-07 13:05:36', 0, 0, NULL, 1),
(124, 'd', '2012-05-07 13:05:39', 0, 0, NULL, 1),
(125, 'd', '2012-05-07 13:05:41', 0, 0, NULL, 1),
(126, 'd', '2012-05-07 13:05:43', 0, 0, NULL, 1),
(127, 'd', '2012-05-07 13:05:44', 0, 0, NULL, 1),
(128, 'fffffffff', '2012-05-07 13:05:56', 0, 0, NULL, 1),
(129, 'fffffffffffffff', '2012-05-07 13:05:02', 0, 0, NULL, 1),
(130, 'ddddddddddd', '2012-05-07 13:05:19', 0, 0, NULL, 1),
(131, 'ffffffffffffffffffff', '2012-05-07 14:05:16', 0, 0, NULL, 1),
(132, 'ffffffffffffff', '2012-05-07 14:05:38', 0, 0, NULL, 1),
(133, 'ffffffffffff', '2012-05-07 14:05:24', 0, 0, NULL, 1),
(134, 'eeeeeeeeeeee', '2012-05-07 14:05:29', 0, 0, NULL, 1),
(135, 'ddddddddddd', '2012-05-07 14:05:45', 0, 0, NULL, 1),
(136, 'ffffffffffff', '2012-05-07 14:05:18', 0, 0, NULL, 1),
(137, 'fffffffffffffffffffff', '2012-05-07 15:05:55', 0, 0, NULL, 1),
(138, 'ddddddddđ', '2012-05-07 15:05:11', 0, 0, NULL, 1),
(139, 'fffffffffffffffffffffffffffff', '2012-05-07 15:05:04', 0, 0, NULL, 1),
(140, 'dddddddddddddd', '2012-05-07 15:05:14', 0, 0, NULL, 1),
(141, 'ffffffffffffffffffff', '2012-05-07 16:05:33', 0, 0, NULL, 1),
(142, 'fffffffffffffffff', '2012-05-07 16:05:01', 0, 0, NULL, 1),
(143, 'dddddd', '2012-05-07 16:05:20', 0, 0, NULL, 1),
(144, 'fffffffffffffffff', '2012-05-07 16:05:26', 0, 0, NULL, 1),
(145, 'fffffffffffffffffffffffffffffffffffff', '2012-05-07 16:05:04', 0, 0, NULL, 1),
(146, 'ddddddddddddddddddđ', '2012-05-07 16:05:11', 0, 0, NULL, 1),
(147, 'ffffffffffffffffffffffff', '2012-05-07 18:05:29', 0, 0, NULL, 1),
(148, 'fffffffffffffffffff', '2012-05-07 18:05:38', 0, 0, NULL, 1),
(149, 'dddddddddddddddddd', '2012-05-07 18:05:30', 0, 0, NULL, 1),
(150, 'dddddddddddddd', '2012-05-07 18:05:27', 0, 0, NULL, 1),
(151, 'ffffffffffffffffff', '2012-05-07 18:05:36', 0, 0, NULL, 1),
(152, 'w444444444444444', '2012-05-07 18:05:49', 0, 0, NULL, 1),
(153, 'gggggggggg', '2012-05-07 18:05:22', 0, 0, NULL, 1),
(154, 'fffffffffff', '2012-05-07 18:05:37', 0, 0, NULL, 1),
(155, 'dddddddd', '2012-05-07 18:05:12', 0, 0, NULL, 1),
(156, 'ddddddd', '2012-05-07 18:05:47', 0, 0, NULL, 1),
(157, 'ddddddddd', '2012-05-07 18:05:25', 0, 0, NULL, 1),
(158, 'eeeeeeeeeeeeeeeee', '2012-05-07 18:05:29', 0, 0, NULL, 1),
(159, 'eeeeeeeeeeeeeeeeeeee', '2012-05-07 18:05:22', 0, 0, NULL, 1),
(160, 'ffffffffffffff', '2012-05-07 18:05:30', 0, 0, NULL, 1),
(161, 'ddddddddd', '2012-05-07 19:05:22', 0, 0, NULL, 1),
(162, 'dddddd', '2012-05-07 19:05:15', 0, 0, NULL, 1),
(163, 'ffffffffffffffffff', '2012-05-07 19:05:05', 0, 0, NULL, 1),
(164, 'ffffffffffffffff', '2012-05-07 19:05:08', 0, 0, NULL, 1),
(165, 'ffffffffffffff', '2012-05-07 19:05:11', 0, 0, NULL, 1),
(166, 'dddddddddddddddd', '2012-05-08 17:05:17', 0, 0, NULL, 1),
(167, 'sssssssssssss', '2012-05-08 17:05:20', 0, 0, NULL, 1),
(168, 'sssssssssss', '2012-05-08 17:05:23', 0, 0, NULL, 1),
(169, 'ffffffffff', '2012-05-10 08:05:27', 0, 0, NULL, 1),
(170, 'ffffffffff', '2012-05-10 08:05:19', 0, 0, NULL, 4),
(171, 'ddd', '2012-05-17 16:05:35', 0, 0, NULL, 4),
(172, 'ddd', '2012-05-17 16:05:26', 0, 0, NULL, 4),
(173, 'ddd', '2012-05-17 16:05:02', 0, 0, NULL, 4),
(174, 'ddd', '2012-05-17 16:05:37', 0, 0, NULL, 4),
(175, 'ddddddddddddddd', '2012-05-17 16:05:50', 0, 0, NULL, 4),
(176, 'ddddddddddddddd', '2012-05-17 17:05:39', 0, 0, NULL, 4),
(177, 'ddddddddddddddd', '2012-05-17 17:05:53', 0, 0, NULL, 4),
(178, 'ddddddddddddddd', '2012-05-17 17:05:32', 0, 0, NULL, 4),
(179, 'dddddddddd', '2012-05-17 17:05:09', 0, 0, NULL, 1),
(180, 'dddddddddd', '2012-05-17 17:05:16', 0, 0, NULL, 1),
(181, 'aaaaa', '2012-05-29 02:05:59', 0, 0, NULL, 1),
(182, 'BBBBBBBBBBBBb', '2012-05-29 02:05:05', 0, 0, NULL, 1),
(183, 'AAAAAAAAAAAAAAAAA', '2012-05-29 03:05:10', 0, 0, NULL, 1),
(184, 'qqqqqqqqqqq', '2012-05-29 03:05:33', 0, 0, NULL, 1),
(185, 'ffffffffffff', '2012-05-29 03:05:09', 0, 0, NULL, 1),
(186, 'ffffffffffffffff', '2012-05-29 03:05:43', 0, 0, NULL, 1),
(187, 'ddddddddddd', '2012-05-29 03:05:13', 0, 0, NULL, 1),
(188, 'AAAAAAAAAAA', '2012-05-29 03:05:49', 0, 0, NULL, 1),
(189, 'ddddddddddddddddddddd', '2012-05-29 03:05:51', 0, 0, NULL, 1),
(190, '444444444444', '2012-05-29 03:05:27', 0, 0, NULL, 1),
(191, '88888888888888', '2012-05-29 03:05:48', 0, 0, NULL, 1),
(192, '999999999999', '2012-05-29 03:05:44', 0, 0, NULL, 1),
(193, '10000', '2012-05-29 03:05:07', 0, 0, NULL, 1),
(194, 'ddddddddddddddddddddd', '2012-05-29 03:05:27', 0, 0, NULL, 1),
(195, 'ssssssssssssss', '2012-05-29 03:05:18', 0, 0, NULL, 1),
(196, 'aaaaaaaaaaaaa', '2012-05-29 03:05:56', 0, 0, NULL, 1),
(197, 'aaaaaaaaaaa', '2012-05-29 04:05:06', 0, 0, NULL, 1),
(198, 'aaaaaaaaaaaaaaaaaaaaaaa', '2012-05-29 04:05:44', 0, 0, NULL, 1),
(199, 'sssssssssssssssssssssss', '2012-05-29 04:05:27', 0, 0, NULL, 1),
(200, 'ddddddddddddddddd', '2012-05-29 06:05:01', 0, 0, NULL, 1),
(201, '1111111111111', '2012-05-29 06:05:30', 0, 0, NULL, 1),
(202, '111111111111', '2012-05-29 07:05:08', 0, 0, NULL, 1),
(203, '222222222222', '2012-05-29 07:05:19', 0, 0, NULL, 1),
(204, '33333333333333333', '2012-05-29 07:05:42', 0, 0, NULL, 1),
(205, '4444444444444444444', '2012-05-29 07:05:20', 0, 0, NULL, 1),
(206, 'dddddddddddddd', '2012-05-29 07:05:23', 0, 0, NULL, 1),
(207, 'ssssssssssssss', '2012-05-29 07:05:10', 0, 0, NULL, 1),
(208, '11111111111', '2012-05-29 07:05:10', 0, 0, NULL, 1),
(209, 'aaaaaaaaaaaaa', '2012-05-29 07:05:58', 0, 0, NULL, 1),
(210, 'sssssssssssssssssss', '2012-05-29 07:05:00', 0, 0, NULL, 1),
(211, 'ssssssssssss', '2012-05-29 07:05:07', 0, 0, NULL, 1),
(212, 'zzzzzzzzzzzzzzzzzzzzzz', '2012-05-29 07:05:22', 0, 0, NULL, 1),
(213, 'ssssssssssssssssss', '2012-05-29 07:05:02', 0, 0, NULL, 1),
(214, 'dddddddddddddddd', '2012-05-29 07:05:53', 0, 0, NULL, 1),
(215, 'sssssssssssss', '2012-05-29 07:05:35', 0, 0, NULL, 1),
(216, 'ddddddddddddddd', '2012-05-29 07:05:14', 0, 0, NULL, 1),
(217, 'dsssssssssss', '2012-05-29 07:05:33', 0, 0, NULL, 1),
(218, 'xxxxxxxxxxxxx', '2012-05-29 07:05:11', 0, 0, NULL, 1),
(219, 'ssssssssss', '2012-05-29 07:05:43', 0, 0, NULL, 1),
(220, 'sssssssssssss', '2012-05-29 07:05:07', 0, 0, NULL, 1),
(221, 'cai khuc nao bi gi ko appl duoc ma e noid o. Chi a coi coi da khi anh lcik share thi no in ra 1 dongf status comment ', '2012-05-29 07:05:50', 0, 0, NULL, 1),
(222, 'tets ku coi', '2012-05-29 07:05:15', 0, 0, NULL, 1),
(223, 'sssssssssssssssssss', '2012-05-29 07:05:45', 0, 0, NULL, 1),
(224, 'again', '2012-05-29 07:05:21', 0, 0, NULL, 1),
(225, 'ddddddddddddd', '2012-05-29 07:05:27', 0, 0, NULL, 1),
(226, 'aaaaaaaaaaaaaaa', '2012-05-29 08:05:50', 0, 0, NULL, 1),
(227, 'dddddddddddddd', '2012-05-29 16:05:10', 0, 0, NULL, 1),
(228, 'dddddddd', '2012-05-29 16:05:09', 0, 0, NULL, 1),
(229, '888888888888', '2012-05-29 17:05:30', 0, 0, NULL, 1),
(230, 'ddd', '2012-05-29 17:05:33', 0, 0, NULL, 1),
(231, 'ddddddddddddddd', '2012-05-29 17:05:48', 0, 0, NULL, 1),
(232, '44444444444444', '2012-05-29 17:05:27', 0, 0, NULL, 1),
(233, 'giaosudau', '2012-05-30 02:05:48', 0, 0, NULL, 1),
(234, 'aaaaaaaaaaa', '2012-05-30 15:05:38', 0, 0, NULL, 44),
(235, 'ddddddddd', '2012-05-31 09:05:24', 0, 0, NULL, 1),
(236, 'ddddddđ', '2012-06-01 01:06:05', 0, 0, NULL, 1),
(237, 'fffff', '2012-06-01 01:06:38', 0, 0, NULL, 4),
(238, 'Chsnh', '2012-06-01 01:06:34', 0, 0, NULL, 1),
(239, 'dddd', '2012-06-01 01:06:36', 0, 0, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `thumb_up_down`
--

CREATE TABLE IF NOT EXISTS `thumb_up_down` (
  `thumb_up_down_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `flag` tinyint(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `status_id` mediumint(8) DEFAULT NULL,
  `friend_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`thumb_up_down_id`),
  KEY `status_id` (`status_id`),
  KEY `friend_is` (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1176 ;

--
-- Dumping data for table `thumb_up_down`
--

INSERT INTO `thumb_up_down` (`thumb_up_down_id`, `flag`, `created`, `status_id`, `friend_id`) VALUES
(57, NULL, '2012-04-29 14:04:20', 8, 1),
(216, NULL, '2012-04-29 14:04:55', 16, 1),
(226, NULL, '2012-04-29 14:04:03', 16, 4),
(381, NULL, '2012-04-29 14:04:38', 17, 1),
(426, NULL, '2012-04-29 14:04:10', 17, 4),
(719, NULL, '2012-04-29 14:04:36', 31, 4),
(807, NULL, '2012-04-29 14:04:28', 37, 4),
(1058, NULL, '2012-04-29 15:04:33', 20, 1),
(1069, NULL, '2012-04-29 15:04:55', 23, 1),
(1151, NULL, '2012-04-29 15:04:11', 29, 1),
(1175, NULL, '2012-04-29 15:04:09', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `password` varchar(45) NOT NULL,
  `name_first` varchar(45) NOT NULL,
  `name_last` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `name_first`, `name_last`, `email`, `picture`, `active`, `created`) VALUES
(1, '402c73d1190204b86ba0ca652de82a02', 'Le', 'Chanh', 'giaosudau@gmail.com', '/home/sepdau/', 1, '2012-01-11 18:03:06'),
(2, '14e1b600b1fd579f47433b88e8d85291', 'Chanh', 'Le', 'giaosuda@gmail.com', '', 1, '0000-00-00 00:00:00'),
(3, '39abe4bca904bca5a11121955a2996bf', 's', 's', 's@fail.com', '', 1, '2012-04-04 14:30:03'),
(4, 'bd9cb14b18d807119653418ca85c6796', 'Min', 'Le', 'mrletrungchanh@gmail.com', '13366396884.jpg', 1, '2012-05-10 08:48:08'),
(5, 'd7afde3e7059cd0a0fe09eec4b0008cd', 'a', 'b', 'g@gmail.com', '', 1, '2012-04-08 13:47:02'),
(6, 'd7afde3e7059cd0a0fe09eec4b0008cd', 'aa', 'â', 'aa@gmail.com', '', 1, '2012-04-08 13:50:18'),
(7, 'dc0ae7e1387be9b795f5d6299e383759', 'b', 'b', 'b@ggg.com', '', 1, '2012-04-08 13:52:32'),
(8, 'ed108f6919ebadc8e809f8b86ef40b05', 'c', 'c', 'c@nnn.com', '', 1, '2012-04-08 13:54:28'),
(9, '74f4fc96f00d1d23590984d944d9976e', 'd??d', 'dd?', 'd@gail.com', '', 1, '2012-04-08 13:56:27'),
(10, '1f32aa4c9a1d2ea010adcf2348166a04', 'Thang', 'Phan', 'phan.anhthang@gmail.com', '', 1, '2012-04-09 16:03:16'),
(11, '14e1b600b1fd579f47433b88e8d85291', 'Thang', 'Phan', 'phan_anhthang@yahoo.com', '', 1, '2012-04-09 16:08:08'),
(12, '28c8edde3d61a0411511d3b1866f0636', 'Le', 'Binh', 'giao@gmail.com', '', 1, '2012-04-16 14:49:10'),
(13, 'd9b1d7db4cd6e70935368a1efb10e377', 'Le', 'Chanh', 'f@ggkg.com', '', 1, '2012-04-24 03:37:08'),
(14, '9e6b110c96caf02fd1db1c3969ff4efa', 'eeeeeeee', 'eeeeeeeee', 'ffffff@gmai.com', '', 1, '2012-04-24 03:38:17'),
(15, 'd8f80a2897c035cfc1ff6a441127012a', 'le', 'chanh', 'hell@gmail.com', '', 1, '2012-04-29 15:53:34'),
(16, '402c73d1190204b86ba0ca652de82a02', 'le', 'chanh', 'hfhfh@gmail.com', '', 1, '2012-04-29 15:58:49'),
(17, '402c73d1190204b86ba0ca652de82a02', 'ami', 'chan', 'amcihan@gmail.com', '', 1, '2012-04-29 16:02:51'),
(18, '402c73d1190204b86ba0ca652de82a02', 'le', 'chanh', 'dd@gmail.com', '', 1, '2012-04-29 17:00:09'),
(19, '402c73d1190204b86ba0ca652de82a02', 'Le ', 'Chanh', 'trungchanh@gmail.com', '', 1, '2012-05-30 14:17:01'),
(20, '402c73d1190204b86ba0ca652de82a02', 'Le ', 'Chanh', 't3rungchanh@gmail.com', '', 1, '2012-05-30 14:27:22'),
(21, 'cdebd31c4a29eb3c07f564204b8c1eb1', 'Chanh', 'Le', 'giaos@gmail.com', '', 1, '2012-05-30 14:29:02'),
(22, '41d231b1ea339ee230d45e004298a842', 'wwwwwwwwww', 'wwwwwwwww', 'wwww@gmail.com', '', 1, '2012-05-30 14:33:10'),
(23, '41d231b1ea339ee230d45e004298a842', 'wwwwwwwwww', 'wwwwwwwww', 'www333w@gmail.com', '', 1, '2012-05-30 14:48:55'),
(24, '863e29c058637919d1e0b200c8c1a45f', '3333', '33333', 'www33@gmail.com', '', 1, '2012-05-30 14:49:17'),
(25, '863e29c058637919d1e0b200c8c1a45f', '3333', '33333', 'www3443@gmail.com', '', 1, '2012-05-30 14:52:37'),
(26, '863e29c058637919d1e0b200c8c1a45f', '3333', '33333', 'www344443@gmail.com', '', 1, '2012-05-30 14:53:19'),
(27, '2135522e31f88cee2dfa793e64ae87fa', '4444', '44444', '44444@gmail.com', '', 1, '2012-05-30 14:56:38'),
(28, '8dace76c04f243169d204b35d4c3d319', '3333333333333', '3333333333333', '3333333333333@gmaol.com', '', 1, '2012-05-30 14:58:27'),
(29, '287b98bcaab33dd01f615788d3d8f37f', 'http://localhost/nevergiveup/index.php', 'http://localhost/nevergiveup/index.php', 'http://localhost/nevergiveup/index.php', '', 1, '2012-05-30 15:04:12'),
(30, '287b98bcaab33dd01f615788d3d8f37f', 'http://localhost/nevergiveup/index.php', 'http://localhost/nevergiveup/index.php', 'http://localh@ost/nevergiveup/index.php', '', 1, '2012-05-30 15:05:28'),
(31, '287b98bcaab33dd01f615788d3d8f37f', 'http://localhost/nevergiveup/index.php', 'http://localhost/nevergiveup/index.php', 'http://localh@os.t/nevergiveup/index.php', '', 1, '2012-05-30 15:06:02'),
(32, '713ffd76dba3587b0827e5b42838b514', 'http://localhost/nevergiveup/index.php', 'http://localhost/nevergiveup/index.php', 'http://me.zing.vn/wlc', '', 1, '2012-05-30 15:08:10'),
(33, '713ffd76dba3587b0827e5b42838b514', 'http://localhost/nevergiveup/index.php', 'http://localhost/nevergiveup/index.php', 'http://me.zing.vn/wlc@ddd.com', '', 1, '2012-05-30 15:09:05'),
(34, '713ffd76dba3587b0827e5b42838b514', 'http://localhost/nevergiveup/index.php', 'http://localhost/nevergiveup/index.php', 'http://me.zing.v..n/wlc@ddd.com', '', 1, '2012-05-30 15:10:04'),
(35, '57899e5110e653f36d66909c37e6d6b3', 'www.nhaccuatui', 'www.nhaccuatui', 'www.nhaccuatui@gmail.com', '', 1, '2012-05-30 15:11:16'),
(36, 'b5cec9363efa5a56f15ea1165619a2d4', '3600 * 24 * 30', '3600 * 24 * 30', '3600 * 24 * 30@gmail.com', '', 1, '2012-05-30 15:12:54'),
(37, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'localh@gmail.com', '', 1, '2012-05-30 15:20:31'),
(38, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'localh@gma222il.com', '', 1, '2012-05-30 15:21:36'),
(39, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'localh222@gma222il.com', '', 1, '2012-05-30 15:21:43'),
(40, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'localh22@@2@gma222il.com', '', 1, '2012-05-30 15:26:53'),
(41, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'localh3322@@2@gma222il.com', '', 1, '2012-05-30 15:27:22'),
(42, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'localh322322@@2@gma222il.com', '', 1, '2012-05-30 15:33:07'),
(43, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'localh32222322@@2@gma222il.com', '', 1, '2012-05-30 15:33:28'),
(44, '0834f84cd8f3d74f6bac75d3cef656c9', 'localh', 'localh', 'sslocalh32222322@@2@gma222il.com', '', 1, '2012-05-30 15:35:55');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `friend_id` FOREIGN KEY (`friend_id`) REFERENCES `friend` (`friend_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `status_id` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `fk_friend_friend_list` FOREIGN KEY (`friend_list_id`) REFERENCES `friend_list` (`friend_list_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_friend_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `friend_list`
--
ALTER TABLE `friend_list`
  ADD CONSTRAINT `fk_friend_list_friend` FOREIGN KEY (`friend_id`) REFERENCES `friend` (`friend_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_friend_list_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_activity_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `fk_status_reply_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thumb_up_down`
--
ALTER TABLE `thumb_up_down`
  ADD CONSTRAINT `fk_thumb_up_down_friend` FOREIGN KEY (`friend_id`) REFERENCES `friend` (`friend_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_thumb_up_down_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
