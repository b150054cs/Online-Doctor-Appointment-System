-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 01:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `about_doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE IF NOT EXISTS `appoinment` (
  `Name` varchar(250) NOT NULL,
  `Specialisation` varchar(250) NOT NULL,
  `Age` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`Name`, `Specialisation`, `Age`, `Mobile`, `Email`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('Anjali', 'Dentist', '20', '9888776589', 'a@gmail.com'),
('Shilpa', '	Physicologist', '19', '98788675', 's@gmail.com'),
('Nitu', '	Dentist', '10', '98788675', 'n@gmail.com'),
('Neha', '	Skin Specialist', '17', '98788698', 'neha@gmail.com'),
('Shika', '		Physicologist', '15', '98788879', 'ak@gmail.com'),
('Shova', '	Herat Specialist', '12', '987888799', 'ak@gmail.com'),
('Renuka', '		Physicologist', '10', '987878989', 'renkh@gmail.com'),
('Aditri', '	Herat Specialist', '04', '987878989', 'adit@gmail.com'),
('Aagamya', '	Herat Specialist', '04', '90876545678', 'a@gmail.com'),
('Aagamya', '	Herat Specialist', '04', '90876545678', 'a@gmail.com'),
('WWW', '	Herat Specialist', '12', '098765456789', 'a@gmail.com'),
('Aaa', '	Dentist', '12', '9877654567', 'a@gmail.com'),
('Seema', '	orthopedics', '12', '9877698754', 's@gmail.com'),
('Jyoti ', '	Herat Specialist', '13', '9877658763', 's@gmail.com'),
('Aaa', '	Dentist', '12', '09888765345', 'a@gmai.com');

-- --------------------------------------------------------

--
-- Table structure for table `app_report`
--

CREATE TABLE IF NOT EXISTS `app_report` (
  `App_id` varchar(255) NOT NULL,
  `Doctorname` varchar(250) NOT NULL,
  `Timing` time NOT NULL,
  `Days` varchar(250) NOT NULL,
  `Patientname` varchar(250) NOT NULL,
  `Status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_report`
--

INSERT INTO `app_report` (`App_id`, `Doctorname`, `Timing`, `Days`, `Patientname`, `Status`) VALUES
('001', 'Dr A.H.Khan', '11:00:00', 'Wednesday', 'Anjali', 'Approved'),
('002', 'Dr Sarthak Gaur', '12:00:00', 'Friday', 'Shilpa', 'Pending'),
('003', 'Dr A.H khan', '17:00:00', 'Tuesday', 'Nitu', 'Approved'),
('009', 'Dr A.G Singh', '14:00:00', 'Thursday', 'Neha', 'Approved'),
('102', 'Dr Sarthak Gaur	', '03:00:00', 'Wednesday', 'Sikha', 'Pending'),
('103', 'Dr Bikash Gupta', '01:00:00', 'Tuesday', 'Shova', 'Pending'),
('105', 'Dr Sarthak Gaur', '05:00:00', 'Friday', 'Renuka', 'pending'),
('009', 'Dr Bikash Gupta', '06:00:00', 'Tuesday', 'Aditri', 'Approved'),
('109', 'Dr A.H khan', '07:00:00', 'Tuesday', 'Aaa', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `onlydoctor`
--

CREATE TABLE IF NOT EXISTS `onlydoctor` (
  `ID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Specialisation` varchar(255) NOT NULL,
  `Timing` time NOT NULL,
  `Days` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlydoctor`
--

INSERT INTO `onlydoctor` (`ID`, `Name`, `Designation`, `Specialisation`, `Timing`, `Days`, `mobile`, `email`) VALUES
('002', 'Dr Sarthak Gaur', 'M.B.B.S', 'Physicologist', '10:00:00', 'Wednesday,Friday,Saturday', '7680034127', 'sarthak777@gmail.com'),
('444', 'Dr A.H khan', 'B.D.S', 'Dentist', '10:00:00', 'Tuesday,Wednesday,Thursday', '9876699966', 'khan333@gmail.com'),
('888', 'Dr Bikash  Gupta', 'M.B.B.S', 'Herat Specialist', '09:00:00', 'Monday,Tuesday,Friday', '789944553310', 'bikash999@gmail.com'),
('009', 'Dr Bishal Gupta', 'MBBS', 'orthopedics', '12:00:00', 'Monday,Sunday', '8234567890', 'bi@gmail.com'),
('1118', 'Dr Binod Gupta', 'MBBS', 'Psychiatry', '09:00:00', 'Tuesday,Friday', '7800567432', 'vy@gmail.com'),
('0887', 'Dr Vivek Gupta', 'MBBS', 'Eye Physician', '11:00:00', 'Wednesday,Thursday', '876654789', 'vi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Username` varchar(255) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Username`, `Email`, `Password`) VALUES
('Renuka', 're@gmail.com', '789'),
('as', 'as@gmail.com', 'nu'),
('Wq', 'wq@gmail.com', 'hu'),
('AW', '88', 'aaa'),
('Aer', 'a@gmail.com', 'eee'),
('Jyoti', 'ja@gmail.com', 'jjj'),
('Anjali', 'a@gmail.com', '999'),
('Sristi', 's@gmail.com', 'sss'),
('Shipla', 'sa@gmail.com', '987'),
('Pimpil', 'p@gmail.com', 'pimpil'),
('Dimple', 'd@gmail.com', 'dimple'),
('HH', 'h', 'hh'),
('Anjali', 'a@gmail.com', 'aaaaa'),
('Anjali', 'a@gmail.com', 'aa'),
('Anjali', 'an@gmail.com', '987'),
('suchi', 'suchi', 'suchi'),
('suchita', 'this@gmail.com', 'suchita'),
('akshita', 'akshita', 'akshita'),
('Anjali', 'a@gmail.com', 'aaaaa'),
('Aagamya', 'a@gmail.com', '777'),
('Aaa', 'a@gmail.com', '123'),
('Seema', 's@gmail.com', 'www'),
('Seema', 's@gmailcom', 'aaaa'),
('Jyoti', 'j@gmail.com', 'www'),
('Aaa', 'a@gmail.com', 'aaa'),
('anj', 'gupta.anjali0009@gmail.com', 'asdfgh'),
('anjl', 'gupta', 'ab');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
