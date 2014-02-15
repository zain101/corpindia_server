-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2014 at 02:44 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ben`
--

CREATE TABLE IF NOT EXISTS `ben` (
  `ben_id` varchar(20) NOT NULL,
  `ben_Fname` varchar(20) NOT NULL,
  `Fname_c` varchar(20) DEFAULT NULL,
  `Family_name` varchar(20) NOT NULL,
  `name_c` varchar(20) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `Dob` date NOT NULL,
  `Address` varchar(70) DEFAULT NULL,
  `loc` varchar(50) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `State` varchar(40) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `Photo` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`ben_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ben`
--

INSERT INTO `ben` (`ben_id`, `ben_Fname`, `Fname_c`, `Family_name`, `name_c`, `sex`, `Dob`, `Address`, `loc`, `city`, `State`, `zipcode`, `Photo`) VALUES
('129', 'asda', 'YOGEN', 'ASD', 'ASD', 'male', '2014-02-05', 'ASD', 'asd', 'ASD', 'ASD', 0, 'crescendo_logo.jpg'),
('146', 'John', 'null', 'Kapoor', 'null', 'male', '2014-02-04', 'sion', 'ckank', 'Mumbai', 'Maharashtra', 400031, ''),
('19', 'Karan', 'null', 'Khot', 'null', 'male', '0000-00-00', 'wadala', 'ckank', 'Mumbai', 'Maharashtra', 400012, ''),
('302', 'Zainul', 'null', 'Sayed', 'null', 'male', '2014-02-04', 'Dadar', 'ckank', 'Mumbai', 'Maharashtra', 400014, ''),
('432', 'Farhan', 'null', 'Khan', 'null', 'male', '2014-02-13', 'Matunga', 'ABC', 'Mumbai', 'Maharashtra', 400004, 'back.JPG'),
('508', 'Praveen', 'null', 'Patil', 'null', 'male', '2014-02-13', 'Goregaon', 'jkn', 'Mumbai', 'Maharashtra', 400004, ''),
('630', 'Pravin', 'null', 'Patel', 'null', 'male', '2014-02-04', 'Worli', 'ckank', 'Mumbai', 'Maharashtra', 400036, ''),
('671', 'Ramesh', 'null', 'Khurana', 'null', 'male', '2014-02-13', 'Mahim', 'jkn', 'Mumbai', 'Maharashtra', 400004, ''),
('778', 'praveen', 'null', 'yogen', 'null', 'male', '2014-02-05', 'sad', 'mahim', 'Mumbai', 'Maharashtra', 400004, 'back.JPG'),
('795', 'Rohit', 'null', 'Despande', 'null', 'male', '0000-00-00', 'Marine Lines', 'ckank', 'Mumbai', 'Maharashtra', 400015, ''),
('971', 'adj', 'adj', 'ahaj', 'ahaj', 'male', '0000-00-00', 'jbjk', 'jkn', 'jn', 'kknk', 400004, 'back.JPG'),
('974', 'abc', 'name', 'ASD', 'fname', 'male', '2014-02-04', '', '', '', '', 0, 'crescendo_back.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
