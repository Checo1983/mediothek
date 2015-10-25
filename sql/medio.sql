-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2015 at 02:49 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medio`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nname` varchar(40) DEFAULT NULL,
  `vname` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `nname`, `vname`, `email`) VALUES
(1, 'Wruck', 'Marbod', 'wruck@nirgendwo.de'),
(2, 'Heinrich', 'Detlev', 'heinrich@nirgendwo.de'),
(3, 'Zappa', 'Frank', 'franky@nirgendwo.de'),
(4, 'Remini', 'Robert V.', ''),
(5, 'D''agata', 'John', ''),
(6, 'Dombrowski', 'Daniel', ''),
(7, 'Roubini', 'Nouriel', ''),
(8, 'Vladimir', 'Nabokov', ''),
(9, 'Bolaño', 'Roberto', ''),
(10, 'Currie Jr.', 'Ron', ''),
(11, 'García Marquez', 'Gabriel', ''),
(12, 'Cleave', 'Chris', ''),
(13, 'Amis', 'Martin', ''),
(14, 'McCarthy', 'Cormac', ''),
(15, 'Bojowald', 'Martin', ''),
(16, 'Beckwith', 'Elizabeth', ''),
(17, 'Halton', 'Eugene', ''),
(18, 'Huston', 'Charlie', ''),
(19, 'Becker', 'Gary', ''),
(20, 'Traig', 'Jennifer', '');

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE IF NOT EXISTS `medium` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategorie` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`id`, `kategorie`) VALUES
(1, 'Buch'),
(2, 'Dokument'),
(3, 'Audio'),
(4, 'Video'),
(5, 'Zeitschriften');

-- --------------------------------------------------------

--
-- Table structure for table `titel`
--

CREATE TABLE IF NOT EXISTS `titel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_medium` int(10) unsigned NOT NULL,
  `id_author` int(10) unsigned NOT NULL,
  `titel` varchar(80) DEFAULT NULL,
  `erscheinungsjahr` date DEFAULT NULL,
  `quelle` varchar(255) DEFAULT NULL,
  `bild` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Titel_FKIndex1` (`id_author`),
  KEY `Titel_FKIndex2` (`id_medium`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `titel`
--

INSERT INTO `titel` (`id`, `id_medium`, `id_author`, `titel`, `erscheinungsjahr`, `quelle`, `bild`) VALUES
(1, 2, 2, 'Crashkurs HTML', '2014-09-19', '', ''),
(2, 2, 1, 'Einführung Javascript', '2014-09-19', '', ''),
(3, 4, 3, 'My very best friend the milkman said', '2010-09-19', 'http://www.youtube.com/watch?v=KvENvzUJh6Y', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`) VALUES
(1, 'a', '0cc175b9c0f1b6a831c399e269772661'),
(2, 'b', '92eb5ffee6ae2fec3ad71c777531578f'),
(3, 'c', '4a8a08f09d37b73795649038408b5f33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
