-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2022 at 05:25 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalhealthassistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentdetails`
--

DROP TABLE IF EXISTS `appointmentdetails`;
CREATE TABLE IF NOT EXISTS `appointmentdetails` (
  `Appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `Date_` date NOT NULL,
  `Time_` time NOT NULL,
  `Location` varchar(190) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DocName` varchar(70) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Appointment_id`),
  KEY `fk_userid` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentdetails`
--

INSERT INTO `appointmentdetails` (`Appointment_id`, `Date_`, `Time_`, `Location`, `Description`, `DocName`, `User_id`) VALUES
(2, '2022-08-30', '16:29:00', 'loco', 'description', 'Dr Ahmed', 2),
(4, '2022-09-01', '01:08:00', 'qwe', 'sdad', 'Khali', 2),
(5, '2022-08-26', '01:10:00', 'asd', 'sadasd', 'das', 2),
(6, '2022-09-07', '01:11:00', 'cxz', 'rty', 'zxc', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medicinedosages`
--

DROP TABLE IF EXISTS `medicinedosages`;
CREATE TABLE IF NOT EXISTS `medicinedosages` (
  `Medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `TimesinaDay` int(11) NOT NULL,
  `TimesperWeek` int(11) NOT NULL,
  `DosageQuantity` int(11) NOT NULL,
  `MedicineName` varchar(100) NOT NULL,
  PRIMARY KEY (`Medicine_id`),
  KEY `User_id` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicinedosages`
--

INSERT INTO `medicinedosages` (`Medicine_id`, `User_id`, `TimesinaDay`, `TimesperWeek`, `DosageQuantity`, `MedicineName`) VALUES
(4, 2, 3, 7, 1, 'Panadol'),
(5, 2, 2, 7, 2, 'paracetamol'),
(6, 2, 1, 7, 3, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `Password_` varchar(255) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(160) NOT NULL,
  `ContactNumber` varchar(60) NOT NULL,
  `Age` int(11) NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `EmailId` (`EmailId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Password_`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Age`) VALUES
(2, '21232f297a57a5a743894a0e4a801fc3', 'Khadim', 'Hussain', 'K@gmail.com', '03156465', 21);

-- --------------------------------------------------------

--
-- Table structure for table `uservitals`
--

DROP TABLE IF EXISTS `uservitals`;
CREATE TABLE IF NOT EXISTS `uservitals` (
  `vital_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `BP` varchar(40) DEFAULT NULL,
  `Temperature` varchar(40) DEFAULT NULL,
  `Pulserate` varchar(40) DEFAULT NULL,
  `Respiratoryrate` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`vital_id`),
  KEY `User_id` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uservitals`
--

INSERT INTO `uservitals` (`vital_id`, `User_id`, `BP`, `Temperature`, `Pulserate`, `Respiratoryrate`) VALUES
(4, 2, '70-90', '99', '45', '34'),
(5, 2, '70-90', '67', '45', '66');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointmentdetails`
--
ALTER TABLE `appointmentdetails`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);

--
-- Constraints for table `medicinedosages`
--
ALTER TABLE `medicinedosages`
  ADD CONSTRAINT `MedicineDosages_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);

--
-- Constraints for table `uservitals`
--
ALTER TABLE `uservitals`
  ADD CONSTRAINT `userVitals_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
