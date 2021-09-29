-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2015 at 03:15 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE IF NOT EXISTS `data_guru` (
  `id_guru` int(3) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(20) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat_guru` text NOT NULL,
  `telpon_guru` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nama_guru`, `nip`, `kelamin`, `alamat_guru`, `telpon_guru`, `username`, `password`) VALUES
(1, 'Ni Ayu Widiantari', '111112', 'perempuan', 'Gianyar', '0217703999', 'budi', '00dfc53ee86af02e742515cdcf075ed3'),
(2, 'Ni Made Wira Sundari', '111113', 'perempuan', 'Gianyar', '0217703111', 'rosni', 'f24317cf121953638985646330c6296d'),
(3, 'Erick Yasasi', '111114', 'laki-laki', 'Nusa Dua', '0217703222', 'iwan', '01ccce480c60fcdb67b54f4509ffdb56'),
(4, 'Imam Raharja', '111115', 'laki-laki', 'Badung', '0217703555', 'imam', 'eaccb8ea6090a40a98aa28c071810371'),
(5, 'Ketut Sudi', '111116', 'laki-laki', 'Denpasar', '0217703444', 'desi', '069e2dd171f61ecffb845190a7adf425');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
