-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2019 at 08:32 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_aureus`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(1) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `wallet_address` varchar(35) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `deposit` int(15) NOT NULL DEFAULT '0',
  `earnings` int(20) NOT NULL DEFAULT '0',
  `totals` int(20) NOT NULL DEFAULT '0',
  `secret_Quest` varchar(200) NOT NULL,
  `secret_answer` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `fullname`, `username`, `wallet_address`, `email_add`, `password`, `deposit`, `earnings`, `totals`, `secret_Quest`, `secret_answer`) VALUES
(1, '', '', '', '', '', 0, 0, 0, '', ''),
(2, 'kronic lyon', 'kroniclyon', 'Amen Estate, Abeokuta North,', 'kroniclyon@gmail.com', '', 0, 0, 0, 'what is my name', 'keonic'),
(3, 'james ognuhahha', 'bvnverify123', '32452hdyt65e6yeyd5e45553337wy7w', 'bvnverify@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0, 0, 0, 'what is a kind man?', 'jayhee'),
(4, 'johnbull pricetcon', 'pricetion232', '3456eyey738y7828yf87yrdte32tw3', 'kwaliokud@yahoo.co.uk', 'b173209fadd44e1e08e2c4b3648ab960', 0, 0, 0, 'what do you mean?', 'nothing'),
(5, 'kronic lyon', 'ibrahimwww', 'Amen Estate, Abeokuta North,', 'kroniclyon@gmail.com', 'd811f55528b82012a21c550edecfbb0e', 0, 0, 0, '08075776897', '1223333333');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
