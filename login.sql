-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2013 at 06:17 PM
-- Server version: 5.5.28
-- PHP Version: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `lk`
--

CREATE TABLE IF NOT EXISTS `lk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) DEFAULT NULL,
  `doneby` varchar(20) DEFAULT NULL,
  `condn` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `mm`
--

CREATE TABLE IF NOT EXISTS `mm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(30) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `no`
--

CREATE TABLE IF NOT EXISTS `no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) DEFAULT NULL,
  `doneby` varchar(20) DEFAULT NULL,
  `condn` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pp`
--

CREATE TABLE IF NOT EXISTS `pp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) DEFAULT NULL,
  `doneby` varchar(20) DEFAULT NULL,
  `condn` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE IF NOT EXISTS `sk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) DEFAULT NULL,
  `doneby` varchar(20) DEFAULT NULL,
  `condn` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss`
--

CREATE TABLE IF NOT EXISTS `ss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) DEFAULT NULL,
  `doneby` varchar(20) DEFAULT NULL,
  `condn` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `tt`
--

CREATE TABLE IF NOT EXISTS `tt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) DEFAULT NULL,
  `doneby` varchar(20) DEFAULT NULL,
  `condn` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `password_unenc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
