-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2019 at 12:05 PM
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
-- Database: `smart_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease_table`
--

DROP TABLE IF EXISTS `disease_table`;
CREATE TABLE IF NOT EXISTS `disease_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_table`
--

INSERT INTO `disease_table` (`id`, `disease_name`) VALUES
(1, 'Cancer'),
(2, 'Eye problem');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_list`
--

DROP TABLE IF EXISTS `doctor_list`;
CREATE TABLE IF NOT EXISTS `doctor_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_list`
--

INSERT INTO `doctor_list` (`id`, `name`, `address`, `mobile`, `disease_name`) VALUES
(1, 'Batra', 'ujjain', 8120729729, 'cancer'),
(2, 'Roy', 'Ujjain ', 8224022245, 'Eye problem'),
(3, 'dr. arvind bhatnagar ', 'bargav complex freeganj ujjain', 9874563400, 'eye problem'),
(4, 'dr safi modiwala', 'sanwer road ujjain', 7874569444, 'eye problem'),
(5, 'dr prarag sharma', 'saket nagar indore', 7773838186, 'eye problem'),
(6, 'dr. heena bhandari', 'Vijay nagar', 6262578324, 'eye problem'),
(7, 'dr.pratik mahajan', 'aplasia square indore', 7773839166, 'cancer'),
(8, 'dr. shanu rathore', 'Vijay nagar indore', 8899775569, 'cancer'),
(9, 'dr. arvind rangole', 'satya sai square indore', 7974884396, 'cancer'),
(10, 'dr. siddharth jain', '563 ring road indore', 8989729729, 'cancer');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_register`
--

DROP TABLE IF EXISTS `patient_register`;
CREATE TABLE IF NOT EXISTS `patient_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_register`
--

INSERT INTO `patient_register` (`id`, `firstname`, `lastname`, `user_email`, `user_password`) VALUES
(1, 'vaibhav', 'gangrade', 'viv@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'shanu', 'rathore', 'shanu132@gmail.com', 'f0282b5ff85e7c9c66200d780bd7e72e'),
(3, 'shanu', 'rathore', 'shanu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'shanu', 'rathore', 'shanu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'harshu', 'shrarma', 'harshu134@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'harsha', 'purohit', 'harsh53@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'shanu', 'rathore', 'shanu@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
