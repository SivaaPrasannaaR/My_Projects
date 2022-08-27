-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2017 at 01:43 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'rsp');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `BTITLE` varchar(150) NOT NULL,
  `KEYWORDS` varchar(150) NOT NULL,
  `FILE` varchar(150) NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `BTITLE`, `KEYWORDS`, `FILE`) VALUES
(1, 'Test', 'test, empty', 'upload/lib.pdf'),
(2, 'window', 'window', 'upload/th.jpg'),
(3, 'qe', 'qwer', 'upload/fb.png'),
(4, 'das', 'ads', 'upload/2-2-twitter-png-file-thumb.png'),
(5, 'n', 'f', 'upload/2-2-twitter-png-file-thumb.png'),
(6, 'Gray Hat Hacking', 'hacks, python, tutorial', 'upload/Gray Hat Python.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `BID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `COMM` varchar(150) NOT NULL,
  `LOGS` datetime NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CID`, `BID`, `SID`, `COMM`, `LOGS`) VALUES
(1, 1, 2, 'Nice book', '2017-12-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `RID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `MES` text NOT NULL,
  `LOGS` datetime NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RID`, `ID`, `MES`, `LOGS`) VALUES
(1, 1, 'I Need Magazine', '2017-12-16 00:00:00'),
(3, 1, 'hi i need books', '2017-12-17 12:50:43'),
(4, 1, 'hi i need books', '2017-12-17 12:51:59'),
(5, 1, 'i need magazine\r\n', '2017-12-17 16:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `PASS` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `DEP` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `PASS`, `MAIL`, `DEP`) VALUES
(1, 'SIva', '1234', 'sivaprasanna98@gmail.com', 'CSE'),
(6, 'gopi', '123', 'gopi@gmial.com', 'CIVIL'),
(7, 'karthick', '12345', 'karthick@gmail.com', 'MECH');
