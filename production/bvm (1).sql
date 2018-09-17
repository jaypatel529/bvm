-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 10:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_mst`
--

CREATE TABLE `admin_mst` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_mst`
--

INSERT INTO `admin_mst` (`admin_id`, `uname`, `pass`) VALUES
(1, 'Jay', '1010');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_mst`
--

CREATE TABLE `attendance_mst` (
  `atn_id` int(5) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `dept_id` varchar(5) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  `sem` int(2) NOT NULL,
  `pres_count` int(3) NOT NULL,
  `abs_count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept_mst`
--

CREATE TABLE `dept_mst` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_mst`
--

INSERT INTO `dept_mst` (`dept_id`, `dept_name`) VALUES
(1, 'Information Technology'),
(2, 'Civil'),
(3, 'Mechanical'),
(4, 'Electrical'),
(5, 'Electronics'),
(6, 'Production');

-- --------------------------------------------------------

--
-- Table structure for table `exam_mst`
--

CREATE TABLE `exam_mst` (
  `exam_id` int(11) NOT NULL,
  `exam_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_mst`
--

INSERT INTO `exam_mst` (`exam_id`, `exam_type`) VALUES
(1, 'MID SEM-1'),
(2, 'MID SEM-2'),
(3, 'INTERNALS'),
(4, 'END-SEMESTER'),
(5, 'REMEDIAL');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_mst`
--

CREATE TABLE `faculty_mst` (
  `f_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fadd` varchar(200) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gen` varchar(6) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `fcontact` varchar(10) DEFAULT NULL,
  `dept_id` int(11) NOT NULL,
  `fac_id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_mst`
--

INSERT INTO `faculty_mst` (`f_id`, `fname`, `fadd`, `dob`, `gen`, `email`, `fcontact`, `dept_id`, `fac_id`, `password`) VALUES
(1, 'Jay Patel', 'surat', '11/16/1996', 'Male', 'jaypatel264742@gmail.com', '8460767518', 1, 'IT001', '1010'),
(2, 'Dr.Keyur Brahmbhatt', 'Anand', '08/09/1980', 'Male', 'keyur.brahmbhatt@bvmengineering.ac.in', '9898278788', 1, 'IT002', '12345'),
(3, 'Mr. Vikram Agrawal', 'Anand', '09/10/1980', 'Male', 'vikram.agrawal@bvmengineering.ac.in', '8765784589', 1, 'IT003', '12345'),
(4, 'Vatsal Shah', 'Surat', '12/08/1980', 'Male', 'vatsal.shah@bvmengineering.ac.in', '9878787878', 1, 'IT004', '12345'),
(5, 'Dr.Zankhana Shah ', 'Rajkot', '09/08/1985', 'Female', 'zankhana.shah@bvmengineering.ac.in', '8756456767', 1, 'IT005', '12345'),
(6, 'Dr.Laxmansinh Bhemsinh Zala', 'Anand', '09/08/1880', 'Male', 'lbzala@bvmengineering.ac.in', '7898765645', 2, 'CI002', '12345'),
(7, 'Darshit', 'Junagadh', '02/08/1997', 'Male', 'rupapara.darshit@gmail.com', '8980258949', 2, 'CI001', '12345'),
(8, 'Dr. S. D. Dhiman\r\n', 'Anand', '09/06/1980', 'Male', 'sddhiman@bvmengineering.ac.in', '6755453467', 2, 'CI003', '12345'),
(9, 'Deepika', 'Gandhidham', '01/08/1999', 'Female', 'deepika@gmail.com', '9898765456', 3, 'ME001', '12345'),
(10, 'P M George', 'Jamnagar', '09/08/1980', 'Male', 'pmgeorge@bvmengineering.ac.in', '6767987899', 3, 'ME002', '12345'),
(11, 'Vinay J. Patel', 'Jamnagar', '07/06.1880', 'Male', 'vjpatel@bvmengineering.ac.in', '6767678798', 3, 'ME003', '12345'),
(12, 'Yash', 'Rajkot', '07/02/1997', 'Male', 'yashkhuman@gmail.com', '9879679859', 4, 'EE001', '12345'),
(13, 'Dr. Bhupendra R. Parekh', 'Surendranagar', '08/07/1885', 'Male', 'brparekh@bvmengineering.ac.in', '9876876989', 4, 'EE002', '12345'),
(14, 'Abdulsalam A. Shaikh', 'Anand', '08/09/1980', 'Male', 'aashaikh@bvmengineering.ac.in', '7878698768', 4, 'EE003', '12345'),
(15, 'Jay', 'Surat', '09/08/1997', 'Male', 'jay@gmail.com', '8980258949', 5, 'EC001', '12345'),
(16, ' Manish Kumar N. Sinha', 'Patan', '09/11/1980', 'Male', 'mnsinha@bvmengineering.ac.in', '7878698768', 5, 'EC002', '12345'),
(17, ' Jagdish K. Chauhan', 'Junagadh', '09/02/1985', 'Male', ' jkchauhan1@yahoo.co.in', '7878456756', 5, 'EC003', '12345'),
(18, 'Pathik', 'Ahmedabad', '08/03/1997', 'Male', 'pathik@gmail.com', '9879679859', 6, 'PE001', '12345'),
(19, 'Dr. Amit M Trivedi', 'Anand', '02/03/1979', 'Male', 'amtrivedi@bvmengineering.ac.in', '9898278788', 6, 'PE002', '12345'),
(20, 'Hardik S Berawala', 'Ananf', '02/03/1997', 'Male', 'hsberawala@bvmengineering.ac.in', '9834564343', 6, 'PE003', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `notice_mst`
--

CREATE TABLE `notice_mst` (
  `notice_id` varchar(5) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `sem` int(2) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result_mst`
--

CREATE TABLE `result_mst` (
  `r_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sem` int(2) NOT NULL,
  `marks` int(3) NOT NULL,
  `exam_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_mst`
--

CREATE TABLE `student_mst` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `s_no` varchar(10) NOT NULL,
  `perent_no` varchar(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sem` int(2) NOT NULL,
  `year` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(25) NOT NULL,
  `stud_id` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `bg` varchar(3) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_mst`
--

INSERT INTO `student_mst` (`s_id`, `s_name`, `s_add`, `s_no`, `perent_no`, `dept_id`, `sem`, `year`, `gender`, `email`, `stud_id`, `pass`, `bg`, `dob`) VALUES
(1, 'Jay', 'Surat', '8460767518', '8460309409', 1, 7, 4, 'Male', 'jaypatel264742@gmail.com', '16IT611', '123456', 'O+', '11/16/1996'),
(2, 'Darshit', 'Junaghar', '9067433639', '8460309409', 1, 7, 4, 'Male', 'darshit.rupapara.1@gmail.', '15IT003', '123456', 'B+', '08/22/1997'),
(3, 'yash', 'rajkot', '1234569874', '1245369870', 1, 1, 1, 'Male', 'adasdf@edf.com', '17IT001', '123456', 'A+', '08/23/2018'),
(4, 'deepika', 'kutch', '1234567890', '9876543210', 1, 1, 1, 'Female', 'abc@gmail.com', '001', '123456', 'B+', '08/01/2018'),
(5, 'harsh', 'delhi', '1234567890', '9876543210', 1, 1, 1, 'Male', 'abc@gmail.com', '002', '123456', 'A-', '08/02/2018'),
(6, 'yesha', 'jamnagar', '1234567890', '9876543210', 1, 1, 1, 'Female', 'abc@gmail.com', '003', '123456', 'A+', '08/03/2018'),
(7, 'aesha', 'kutchh', '1234567890', '9876543210', 1, 1, 1, 'Female', 'abc@gmail.com', '004', '123456', 'AB-', '08/04/2018'),
(8, 'krish', 'baroda', '1234567890', '9876543210', 1, 2, 1, 'Male', 'abc@gmail.com', '001', '123456', 'AB+', '08/02/2018'),
(9, 'kriti', 'banglore', '1234567890', '9876543210', 1, 2, 1, 'Female', 'abc@gmail.com', '002', '123456', 'O-', '08/15/2018'),
(10, 'rekha', 'lucknow', '1234567890', '9876543210', 1, 2, 1, 'Female', 'abc@gmail.com', '003', '123456', 'B-', '08/21/2018'),
(11, 'reena', 'rajasthan', '1234567890', '9876543210', 1, 2, 1, 'Female', 'abc@gmail.com', '004', '123456', 'B+', '08/30/2018'),
(12, 'rakhesh', 'vadodara', '1234567890', '9876543210', 1, 2, 1, 'Male', 'abc@gmail.com', '005', '123456', 'B+', '08/02/2018'),
(13, 'dheeraj', 'adipur', '1234567890', '9876543210', 1, 3, 2, 'Male', 'abc@gmail.com', '001', '123456', 'AB-', '08/03/2018'),
(14, 'rajesh', 'ahemdabad', '1234567890', '9876543210', 1, 3, 2, 'Male', 'abc@gmail.com', '002', '123456', 'O+', '08/25/2018'),
(15, 'brijesh', 'rajkot', '1234567890', '9876543210', 1, 3, 2, 'Male', 'abc@gmail.com', '003', '123456', 'O-', '08/27/2018'),
(16, 'beena', 'anand', '1234567890', '9876543210', 1, 3, 2, 'Female', 'abc@gmail.com', '004', '123455', 'O+', '08/22/2018'),
(17, 'yug', 'surat', '1234567890', '9876543210', 1, 3, 2, 'Select', 'abc@gmail.com', '005', '123456', 'B+', '08/25/2018'),
(18, 'sheetal', 'gandhidham', '1234567890', '9876543210', 1, 4, 2, 'Female', 'abc@gmail.com', '001', '123456', 'A-', '08/02/2018'),
(19, 'shreyas', 'surat', '1234567890', '9876543210', 1, 4, 2, 'Male', 'abc@gmail.com', '002', '123456', 'O-', '08/25/2018'),
(20, 'shreyaa', 'ahemdabad', '1234567890', '9876543210', 1, 4, 2, 'Female', 'abc@gmail.com', '003', '123456', 'AB-', '08/31/2018'),
(21, 'reeta', 'patan', '1234567890', '9876543210', 1, 4, 2, 'Select', 'abc@gmail.com', '004', '123456', 'A+', '08/24/2018'),
(22, 'rohit', 'bihar', '1234567890', '9876543210', 1, 4, 2, 'Male', 'abc@gmail.com', '005', '123456', 'A-', '08/15/2018'),
(23, 'niyati', 'anand', '1234567890', '9876543210', 1, 5, 3, 'Female', 'abc@gmail.com', '001', '123456', 'O-', '08/04/2018'),
(24, 'jiyana', 'junagadh', '1234567890', '9876543210', 1, 5, 3, 'Female', 'abc@gmail.com', '002', '123456', 'B-', '08/02/2018'),
(25, 'het', 'baroda', '1234567890', '9876543210', 1, 5, 3, 'Male', 'abc@gmail.com', '003', '123456', 'B+', '08/03/2018'),
(26, 'nikhil', 'bombay', '1234567890', '9876543210', 1, 5, 3, 'Male', 'abc@gmail.com', '004', '123456', 'AB+', '08/01/2018'),
(27, 'yetan', 'jamnagar', '1234567890', '9876543210', 1, 5, 3, 'Male', 'abc@gmail.com', '005', '123456', 'B+', '08/10/2018'),
(28, 'yuvaraj', 'somnath', '1234567890', '9876543210', 1, 6, 3, 'Male', 'abc@gmail.com', '001', '123456', 'B-', '08/03/2018'),
(29, 'jeet', 'punjab', '1234567890', '9876543210', 1, 6, 3, 'Male', 'abc@gmail.com', '002', '123456', 'A-', '08/25/2018'),
(30, 'dharya', 'navsari', '1234567890', '9876543210', 1, 6, 3, 'Male', 'abc@gmail.com', '003', '123456', 'A+', '08/02/2018'),
(31, 'neha', 'bhuj', '1234567890', '9876543210', 1, 6, 3, 'Female', 'abc@gmail.com', '004', '123456', 'B+', '08/12/2018'),
(32, 'bharat', 'valsad', '1234567890', '9876543210', 1, 6, 3, 'Male', 'abc@gmail.com', '004', '123456', 'B-', '08/27/2018'),
(33, 'nita', 'bhalej', '1234567890', '9876543210', 1, 7, 4, 'Female', 'abc@gmail.com', '001', '123456', 'O+', '08/19/2018'),
(34, 'netra', 'daman', '1234567890', '9876543210', 1, 7, 4, 'Male', 'abc@gmail.com', '002', '123456', 'O+', '08/26/2018'),
(35, 'nayan', 'hydrebad', '1234567890', '9876543210', 1, 7, 4, 'Male', 'abc@gmail.com', '003', '123456', 'O-', '08/22/2018'),
(36, 'riddhi', 'vidhyanagar', '1234567890', '9876543210', 1, 7, 4, 'Female', 'abc@gmail.com', '004', '123456', 'AB+', '07/01/2018'),
(37, 'karan', 'baroda', '1234567890', '9876543210', 1, 8, 4, 'Male', 'abc@gmail.com', '001', '123456', 'A+', '08/25/2018'),
(38, 'parth', 'vasad', '1234567890', '9876543210', 1, 8, 4, 'Male', 'abc@gmail.com', '002', '123456', 'A-', '08/02/2018'),
(39, 'asmita', 'daman', '1234567890', '9876543210', 1, 8, 4, 'Female', 'abc@gmail.com', '003', '123456', 'B+', '08/03/2018'),
(40, 'ashesh', 'rajkot', '1234567890', '9876543210', 1, 8, 4, 'Male', 'abc@gmail.com', '004', '123456', 'B-', '08/03/2018'),
(41, 'megharth', 'rajkot', '1234567890', '9876543210', 1, 8, 4, 'Male', 'abc@gmail.com', '005', '123456', 'O+', '08/01/2018'),
(42, 'milan', 'junagadh', '1234567890', '9876543210', 2, 1, 1, 'Male', 'abc@gmail.com', '001', '123456', 'A+', '08/02/2018'),
(43, 'radhe', 'ahemdabad', '1234567890', '9876543210', 2, 1, 1, 'Male', 'abc@gmail.com', '002', '123456', 'A-', '08/02/2018'),
(44, 'deepika', 'diu', '1234567890', '9876543210', 2, 2, 1, 'Female', 'abc@gmail.com', '001', '123456', 'B+', '08/03/2018'),
(45, 'yesha', 'delhi', '1234567890', '9876543210', 2, 3, 2, 'Female', 'abc@gmail.com', '001', '12346', 'O-', '08/25/2018'),
(46, 'love', 'junaghad', '1234567890', '9876543210', 2, 3, 2, 'Select', 'abc@gmail.com', '002', '123456', 'AB-', '08/04/2018'),
(47, 'meet', 'gujarat', '1234567890', '9876543210', 2, 5, 3, 'Male', 'abc@gmail.com', '004', '123456', 'O+', '08/01/2018'),
(48, 'feni', 'valsad', '1234567890', '9876543210', 2, 6, 3, 'Female', 'abc@gmail.com', '002', '123456', 'A+', '08/31/2018'),
(49, 'kriti', 'abu', '1234567890', '9876543210', 2, 7, 4, 'Female', 'abc@gmail.com', '001', '12346', 'AB+', '08/21/2018'),
(50, 'aesha', 'diu', '1234567890', '9876543210', 2, 8, 4, 'Female', 'abc@gmail.com', '005', '123456', 'O-', '09/05/2018'),
(51, 'ahat', 'kanpur', '1234567890', '9876543210', 3, 1, 1, 'Female', 'abc@gmail.com', '001', '123456', 'O-', '08/02/2018'),
(52, 'jiya', 'surat', '1234567890', '9876543210', 3, 2, 1, 'Female', 'abc@gmail.com', '002', '123456', 'B+', '07/08/2018'),
(53, 'ritu', 'bhuj', '1234567890', '9876543210', 3, 2, 1, 'Female', 'abc@gmail.com', '002', '123456', 'Sel', '08/09/2018'),
(54, 'sumit', 'surat', '1234567890', '9876543210', 3, 3, 2, 'Male', 'abc@gmail.com', '003', '123456', 'O-', '08/03/2018'),
(55, 'desai', 'surat', '1234567890', '9876543210', 3, 4, 2, 'Male', 'abc@gmail.com', '005', '123456', 'O+', '08/01/2018'),
(56, 'yesha', 'navsari', '1234567890', '9876543210', 3, 3, 2, 'Female', 'abc@gmail.com', '001', '123456', 'AB-', '08/01/2018'),
(57, 'divya', 'nadiad', '1234567890', '9876543210', 3, 5, 3, 'Female', 'abc@gmail.com', '004', '123456', 'A-', '08/02/2018'),
(58, 'brijest', 'anand', '1234567890', '9876543210', 3, 6, 3, 'Male', 'abc@gmail.com', '004', '123456', 'B-', '08/01/2018'),
(59, 'yesha', 'dqded', '1234567890', '9876543210', 3, 7, 4, 'Female', 'abc@gmail.com', '004', '123456', 'B-', '08/02/2018'),
(60, 'vijay', 'anjar', '1234567890', '9876543210', 3, 7, 4, 'Male', 'abc@gmail.com', '001', '123466', 'O-', '08/01/2018'),
(61, 'vishit', 'asddf', '1234567890', '9876543210', 3, 8, 4, 'Male', 'abc@gmail.com', '003', '123456', 'O+', '08/02/2018'),
(62, 'harsh', 'dqd', '1234567890', '9876543210', 3, 8, 4, 'Male', 'abc@gmail.com', '004', '123456', 'AB+', '08/04/2018'),
(63, 'nita', 'DAFF', '1234567890', '9876543210', 3, 5, 3, 'Female', 'abc@gmail.com', '003', '23456', 'B+', '08/25/2018'),
(64, 'aartic', 'swesc', '1234567890', '9876543210', 4, 1, 1, 'Male', 'abc@gmail.com', '001', '123456', 'B+', '08/07/2018'),
(65, 'nayana', 'qwer', '1234567890', '9876543210', 4, 1, 1, 'Female', 'abc@gmail.com', '002', '123456', 'B+', '08/02/2018'),
(66, 'shreyas', 'assasaerf', '1234567890', '9876543210', 4, 2, 1, 'Male', 'abc@gmail.com', '004', '123456', 'O-', '08/04/2018'),
(67, 'vijay', 'aJIIO', '1234567890', '9876543210', 4, 3, 2, 'Male', 'abc@gmail.com', '002', '12346', 'B+', '08/03/2018'),
(68, 'brijesh', 'rajkot', '1234567890', '9876543210', 4, 4, 2, 'Male', 'abc@gmail.com', '003', '123456', 'O-', '07/10/2018'),
(69, 'harsh', 'gyugub', '1234567890', '9876543210', 4, 5, 3, 'Male', 'abc@gmail.com', '002', '123456', 'A-', '08/01/2018'),
(70, 'deepika', 'iohion', '1234567890', '9876543210', 4, 5, 3, 'Female', 'abc@gmail.com', '002', '12346', 'A+', '08/02/2018'),
(71, 'radhe', 'libhkl', '1234567890', '9876543210', 4, 6, 3, 'Male', 'abc@gmail.com', '003', '123456', 'B-', '08/01/2018'),
(72, 'sumit', 'nhkubd', '1234567890', '9876543210', 4, 7, 4, 'Male', 'abc@gmail.com', '004', '123456', 'B+', '08/10/2018'),
(73, 'tina', 'bjhvtyv', '1234567890', '9876543210', 4, 8, 4, 'Female', 'abc@gmail.com', '004', '123456', 'B-', '08/03/2018'),
(74, 'vivek', 'juyft', '1234567890', '9876543210', 4, 7, 4, 'Male', 'abc@gmail.com', '001', '123456', 'A+', '08/03/2018'),
(75, 'reeya', 'dadecfe', '1234567890', '9876543210', 5, 1, 1, 'Female', 'abc@gmail.com', '001', '123456', 'A+', '08/03/2018'),
(76, 'manasvi', 'dahod', '1234567890', '9876543210', 5, 1, 1, 'Female', 'abc@gmail.com', '002', '123456', 'A-', '08/03/2018'),
(77, 'hardik', 'surat', '1234567890', '9876543210', 5, 2, 1, 'Male', 'abc@gmail.com', '001', '123456', 'B+', '05/14/2018'),
(78, 'preet ', 'vapi', '1234567890', '9876543210', 5, 2, 1, 'Male', 'abc@gmail.com', '002', '123456', 'B-', '07/09/2018'),
(79, 'jay', 'baroda', '1234567890', '9876543210', 5, 3, 2, 'Male', 'abc@gmail.com', '001', '123456', 'O+', '07/01/2018'),
(80, 'ravi', 'vasad', '1234567890', '9876543210', 5, 3, 2, 'Male', 'abc@gmail.com', '002', '123456', 'O-', '08/25/2018'),
(81, 'virali', 'rajkot', '1234567890', '9876543210', 5, 4, 2, 'Female', 'abc@gmail.com', '004', '123456', 'AB+', '08/03/2018'),
(82, 'vinit', 'surat', '1234567890', '9876543210', 5, 4, 2, 'Male', 'abc@gmail.com', '005', '123456', 'AB-', '02/06/2018'),
(83, 'naitik', 'viramgam', '1234567890', '9876543210', 5, 5, 3, 'Male', 'abc@gmail.com', '003', '123456', 'A+', '05/10/2018'),
(84, 'naman', 'ahemdabad', '1234567890', '9876543210', 5, 5, 3, 'Male', 'abc@gmail.com', '004', '123456', 'A-', '08/02/2018'),
(85, 'yesha', 'bombay', '1234567890', '9876543210', 5, 7, 4, 'Female', 'abc@gmail.com', '001', '12346', 'B+', '08/01/2018'),
(86, 'lina', 'vapi', '1234567890', '9876543210', 5, 7, 4, 'Female', 'abc@gmail.com', '002', '123456', 'O+', '08/01/2018'),
(87, 'rita', 'morbi', '1234567890', '9876543210', 5, 7, 4, 'Female', 'abc@gmail.com', '002', '123456', 'O-', '08/15/2018'),
(88, 'virat', 'junagadh', '1234567890', '9876543210', 5, 8, 4, 'Male', 'abc@gmail.com', '004', '123456', 'AB+', '08/06/2018'),
(89, 'ravi', 'nadiad', '1234567890', '9876543210', 5, 8, 4, 'Male', 'abc@gmail.com', '003', '123456', 'AB+', '08/03/2018'),
(90, 'deepika', 'luckhnow', '1234567890', '9876543210', 6, 1, 1, 'Female', 'abc@gmail.com', '001', '123456', 'A+', '08/25/2018'),
(91, 'natasha', 'delhi', '1234567890', '9876543210', 6, 2, 1, 'Female', 'abc@gmail.com', '004', '123456', 'A-', '08/02/2018'),
(92, 'aeshah', 'surat', '1234567890', '9876543210', 6, 2, 1, 'Male', 'abc@gmail.com', '001', '123456', 'B+', '08/04/2018'),
(93, 'vinit', 'kanpur', '1234567890', '9876543210', 6, 3, 2, 'Male', 'abc@gmail.com', '002', '123456', 'B-', '08/15/2018'),
(94, 'love', 'rajkot', '1234567890', '9876543210', 6, 3, 2, 'Male', 'abc@gmail.com', '005', '123456', 'O-', '08/03/2018'),
(95, 'yug', 'dahod', '1234567890', '9876543210', 6, 4, 2, 'Male', 'abc@gmail.com', '001', '123456', 'O-', '08/03/2018'),
(96, 'jeet', 'jaipur', '1234567890', '9876543210', 6, 5, 3, 'Male', 'abc@gmail.com', '004', '123456', 'AB-', '08/31/2018'),
(97, 'urvesh', 'kutch', '1234567890', '9876543210', 6, 5, 3, 'Male', 'abc@gmail.com', '003', '123456', 'A+', '08/25/2018'),
(98, 'zaran', 'baroda', '1234567890', '9876543210', 6, 6, 3, 'Male', 'abc@gmail.com', '002', '123456', 'A-', '08/03/2018'),
(99, 'piyush', 'jamnagar', '1234567890', '9876543210', 6, 7, 4, 'Male', 'abc@gmail.com', '004', '123456', 'A-', '08/25/2018'),
(100, 'pridhi', 'bhavnagar', '1234567890', '9876543210', 6, 8, 4, 'Female', 'abc@gmail.com', '002', '123456', 'AB-', '08/28/2018'),
(101, 'nayana', 'morbi', '1234567890', '9876543210', 6, 8, 4, 'Female', 'abc@gmail.com', '005', '123456', 'B+', '08/03/2018'),
(102, 'vikram', 'anand', '1234567890', '9876543210', 7, 1, 1, 'Male', 'abc@gmail.com', '002', '123456', 'A+', '08/02/2018'),
(103, 'lata', 'bhuj', '1234567890', '9876543210', 7, 1, 1, 'Female', 'abc@gmail.com', '001', '123456', 'A-', '08/02/2018'),
(104, 'yesha', 'nadiad', '1234567890', '9876543210', 7, 2, 1, 'Female', 'abc@gmail.com', '001', '123456', 'B+', '08/02/2018'),
(105, 'gehna', 'himmatnagar', '1234567890', '9876543210', 7, 2, 1, 'Female', 'abc@gmail.com', '004', '123456', 'B-', '08/01/2018'),
(106, 'ridhima', 'rajkot', '1234567890', '9876543210', 7, 3, 2, 'Female', 'abc@gmail.com', '001', '123456', 'O+', '08/25/2018'),
(107, 'ram', 'bhavnagar', '1234567890', '9876543210', 7, 3, 2, 'Male', 'abc@gmail.com', '005', '123456', 'O-', '08/02/2018'),
(108, 'het', 'jamnagar', '1234567890', '9876543210', 7, 4, 2, 'Male', 'abc@gmail.com', '004', '123456', 'AB+', '08/25/2018'),
(109, 'vidhi', 'surat', '1234567890', '9876543210', 7, 5, 3, 'Female', 'abc@gmail.com', '003', '123456', 'A+', '08/04/2018'),
(110, 'naitik', 'bhavnagar', '1234567890', '9876543210', 7, 6, 3, 'Male', 'abc@gmail.com', '001', '123456', 'A-', '08/04/2018'),
(111, 'raj', 'anand', '1234567890', '9876543210', 7, 7, 4, 'Male', 'abc@gmail.com', '001', '123456', 'B-', '08/03/2018'),
(112, 'piyush', 'navrangpura', '1234567890', '9876543210', 7, 7, 4, 'Male', 'abc@gmail.com', '003', '123456', 'B-', '08/03/2018'),
(113, 'lina', 'junagadh', '1234567890', '9876543210', 7, 8, 4, 'Female', 'abc@gmail.com', '003', '123456', 'O-', '08/03/2018'),
(114, 'kriti', 'bhuj', '1234567890', '9876543210', 7, 8, 4, 'Female', 'abc@gmail.com', '001', '123456', 'AB-', '08/25/2018'),
(115, 'nupur', 'delhi', '1234567890', '9876543210', 7, 8, 4, 'Female', 'abc@gmail.com', '005', '123456', 'O+', '08/25/2018');

-- --------------------------------------------------------

--
-- Table structure for table `subject_mst`
--

CREATE TABLE `subject_mst` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(25) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sem` int(2) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_admin`
--

CREATE TABLE `sub_admin` (
  `sadmin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_admin`
--

INSERT INTO `sub_admin` (`sadmin_id`, `name`, `email`, `password`, `dept_id`) VALUES
(1, 'Jay', 'jaypatel264742@gmail.com', '5292', 1),
(2, 'Darshit', 'darshit.rupapara.1@gamail.com', '2020', 2),
(4, 'yash', 'yash@gmail.com', '3030', 3),
(5, 'deepika', 'deea@gmail.copmm', '12345', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_mst`
--
ALTER TABLE `admin_mst`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance_mst`
--
ALTER TABLE `attendance_mst`
  ADD PRIMARY KEY (`atn_id`);

--
-- Indexes for table `dept_mst`
--
ALTER TABLE `dept_mst`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `exam_mst`
--
ALTER TABLE `exam_mst`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `faculty_mst`
--
ALTER TABLE `faculty_mst`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `notice_mst`
--
ALTER TABLE `notice_mst`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `result_mst`
--
ALTER TABLE `result_mst`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `student_mst`
--
ALTER TABLE `student_mst`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `subject_mst`
--
ALTER TABLE `subject_mst`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `sub_admin`
--
ALTER TABLE `sub_admin`
  ADD PRIMARY KEY (`sadmin_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_mst`
--
ALTER TABLE `admin_mst`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dept_mst`
--
ALTER TABLE `dept_mst`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exam_mst`
--
ALTER TABLE `exam_mst`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty_mst`
--
ALTER TABLE `faculty_mst`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `result_mst`
--
ALTER TABLE `result_mst`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_mst`
--
ALTER TABLE `student_mst`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `subject_mst`
--
ALTER TABLE `subject_mst`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_admin`
--
ALTER TABLE `sub_admin`
  MODIFY `sadmin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
