-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2020 at 06:35 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oimt_fees_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

DROP TABLE IF EXISTS `admin_registration`;
CREATE TABLE IF NOT EXISTS `admin_registration` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `username`, `email`, `password`) VALUES
(2, 'ash123', 'ak4559001@gmail.com', '$2y$10$nL8WPJ8sXnJCE.eNg0ZdDeAazH0LPo4VDzo1M7eSqxMeJ66ClV84i'),
(3, 'oimtadmin', 'adminoimt@gmail.com', '$2y$10$NJmAo3EpwvY504XeiSEPjupf9wNze4Mi3Cu7Q937LW4x5sC5W57EO'),
(4, 'ashu123', 'ashu123@gmail.com', '$2y$10$g6dZ4ga.oHy3Do.Oj8EfVOGzUSH5JrPFY2tqrVPW3PFPyFENCnpde');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `branch` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `detail` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`, `address`, `detail`) VALUES
(2, 'BBA', 'RISAHIKESH', 'RISHIKESH'),
(3, 'BCA', 'Rishikesh', 'Rishikesh'),
(4, 'Bcom', 'Rishiesh', ''),
(5, 'MCA', 'Garhwal University', ''),
(7, 'Bsc', 'Garhwal University', ''),
(8, 'Msc', 'Rishikesh', 'Rishikesh'),
(9, 'MBA', 'Rishikesh', 'Rishikesh'),
(10, 'B(ed)', 'uttarakhand\r\n', 'Rishikesh'),
(13, 'LLB', 'Rishikesh2', 'Rishkish2'),
(12, 'BA', 'Rishikesh', 'Rishikesh');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `std_year` varchar(255) NOT NULL,
  `std_batch` int(255) NOT NULL,
  `tfees` int(255) NOT NULL,
  `tdfees` int(255) NOT NULL,
  `sfees` int(255) NOT NULL,
  `ifees` int(255) NOT NULL,
  `c_money` int(255) NOT NULL,
  `wfees` int(255) NOT NULL,
  `afees` int(255) NOT NULL,
  `bfees` int(255) NOT NULL,
  `std_total` int(255) NOT NULL,
  `fee_remark` varchar(255) NOT NULL,
  `abt_std` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `std_name`, `father_name`, `contact`, `doj`, `branch`, `std_year`, `std_batch`, `tfees`, `tdfees`, `sfees`, `ifees`, `c_money`, `wfees`, `afees`, `bfees`, `std_total`, `fee_remark`, `abt_std`, `email`, `username`, `password`) VALUES
(2, 'Jonty', 'Jontyy', '4321123451', '15-05-2020', 'BBA', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(3, 'Rony', 'Rony', '3211233211', '15-05-2020', 'D-Pharma', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(4, 'Jimmy', 'Jimmy', '2212121212', '22-05-2020', 'Bsc', 'Second Year', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(5, 'Nisham', 'Nisham', ' 232323232', '21-05-2020', 'MCA', 'First Year', 2018, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(6, 'Jeson', 'jeson', '2121212121', '07-05-2020', 'MCA', 'First Year', 2021, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(7, 'Rohan', 'Rohan', '1221212121', '14-05-2020', 'Masscom', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(8, 'Rubika', 'Rubika', '2332323232', '14-05-2020', 'BCA', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(9, 'Ruhaan', 'ruhaan', '3223323232', '14-05-2020', 'MBA', 'First YEar', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(10, 'ruhi', 'ruhi', '2121212121', '14-05-2020', 'Mcom', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(11, 'Anty', 'anty', '3223323232', '28-05-2020', 'Bsc', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(12, 'jond', 'jond', '4334434343', '14-05-2020', 'Select Branch', 'First Year', 2017, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(13, 'JonD', 'JonD', '3443434343', '14-05-2020', 'BCA', 'Second Year', 2021, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(14, 'Ashish Kohli', 'Singh', '9520241794', '07-05-2020', 'BCA', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(15, 'jONSON', 'jonson', '2112211212', '15-05-2020', 'BCA', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(16, 'sakhira', 'shak', '2323323223', '17-05-2018', 'BBA', '32', 2028, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(17, 'Ruhika yadav', 'yadv', '4565342312', '14-05-2020', 'MCA', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(18, 'Ruhaan', 'yadv', '2425255242', '09-05-2020', 'BCA', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(19, 'Ruhi', 'rubi', '1234323231', '12-05-2020', 'BCA', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(21, 'liora', 'liora', '1234566789', '2020-08-10', 'BBA', 'First Year', 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(22, 'liora', 'liora', '1234567865', '2020-08-10', 'BBA', 'First Year', 2020, 200, 200, 100, 100, 0, 0, 0, 0, 0, '', '', '', '', ''),
(23, 'liora', 'liora', '1234543234', '2020-08-10', 'BBA', 'first Year', 2020, 200, 100, 20, 39, 367, 325, 256, 0, 0, 'money', '', '', '', ''),
(24, 'liora', 'liorea', '1234543212', '2020-08-10', 'BBA', 'First Year', 2020, 120, 23, 34, 22, 23, 55, 44, 44, 0, 'money', 'Hello student', 'ashu@gmail.com', '123456789012', '123'),
(25, 'liora2', 'liora2', '1234678987', '2020-08-10', 'Bsc it', 'second year', 2020, 129, 42, 32, 43, 43, 2, 2, 2, 121, 'money', 'hellow', 'ashu123@gmail.com', '1234567890', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
