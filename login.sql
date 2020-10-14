-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2020 at 09:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(250) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(5, 'Surat'),
(6, 'Anand');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `city` int(11) NOT NULL,
  `hobbies` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `mobile_no`, `email_id`, `user_password`, `city`, `hobbies`, `address`, `dob`, `gender`) VALUES
(1, 'Deep', 9664770164, 'deep@gmail.com', '1234', 5, 'dance', 'ssrreq c', '3/8/2000', 'male'),
(3, 'keval', 7564123456, 'keval@gmail.com', '1234', 6, 'dance', 'ssrreq c', '3/8/2000', 'male'),
(11, 'ff', 9664770164, 'deepsutariya5@gmail.com', 'qwer', 5, 'dance', 'E2-202 Swapna ', '12/10/1', 'female'),
(12, 'dd', 9664770164, 'deepsutariya5@gmail.com', '444', 5, 'sing', '5 Anita ', '12/10/1', 'male'),
(13, 'fgh', 9664770164, 'deepsutariya5@gmail.com', 'ert', 5, 'dance', 'E2-202 Swapna ', '12/10/1', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
