-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2015 at 07:33 AM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_usercomments`
--

CREATE TABLE IF NOT EXISTS `feedback_usercomments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `user_comment` longtext,
  `comment_type` int(11) NOT NULL,
  `created_on` date DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback_usercomments`
--

INSERT INTO `feedback_usercomments` (`comment_id`, `user_email`, `user_comment`, `comment_type`, `created_on`) VALUES
(1, 'user@gmail.com', 'sreeaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbdddddddddddddddddddddddddddddddddddddddddddddddjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 1, '2015-11-19'),
(2, 'user1@gmail.com', 'hhhhdddddddddddddddddddddddddddddddddddddddddddddddddddddddtttttttttttttttttttttttttttttttttttttuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiikkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkklllllllllllllllllllllllllllllllllllllllllllllllllllllllmmmmmmmmmmmmmmmmmmmmmmmmmmmmmhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuhhhhhhhhhhhhhhhhhhhzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 1, '2015-11-19'),
(3, 'user2@gmail.com', 'NA', 2, '2015-11-19'),
(4, 'user3@gmail.com', 'Horrible guy!!', 2, '2015-11-20'),
(5, 'user4@gmail.com', 'good', 1, '2015-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_userlist`
--

CREATE TABLE IF NOT EXISTS `feedback_userlist` (
  `fbk_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fbk_user_email` varchar(50) DEFAULT NULL,
  `fbk_user_name` varchar(50) DEFAULT NULL,
  `is_admin` int(11) NOT NULL,
  `access_pwd` varchar(250) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_on` date DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`fbk_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `feedback_userlist`
--

INSERT INTO `feedback_userlist` (`fbk_user_id`, `fbk_user_email`, `fbk_user_name`, `is_admin`, `access_pwd`, `is_active`, `created_on`, `updated_on`) VALUES
(1, 'sreenath886@gmail', 'Sreenath', 1, '21232f297a57a5a743894a0e4a801fc3', 1, '2015-11-19', '2015-11-19 20:25:31'),
(2, 'user@gmail.com', 'user', 1, '21232f297a57a5a743894a0e4a801fc3', 1, '2015-11-19', NULL),
(3, 'user1@gmail.com', 'user1', 0, '', 1, '2015-11-19', NULL),
(4, 'user2@gmail.com', 'user2', 0, '', 1, '2015-11-19', NULL),
(5, 'user3@gmail.com', 'user3', 0, '', 1, '2015-11-19', NULL),
(6, 'user4@gmail.com', 'user4', 0, '', 1, '2015-11-19', NULL),
(7, 'user5@gmail.com', 'user5', 0, '', 1, '2015-11-19', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
