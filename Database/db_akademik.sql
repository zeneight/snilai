-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2015 at 06:27 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simna`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nama_guru`, `nip`, `kelamin`, `alamat_guru`, `telpon_guru`, `username`, `password`) VALUES
(1, 'Budi Setiawan', '111112', 'laki-laki', 'Bogor @', '0217703999', 'budi', '00dfc53ee86af02e742515cdcf075ed3'),
(2, 'Rosni Anjar', '111113', 'perempuan', 'Jakarta', '0217703111', 'rosni', 'f24317cf121953638985646330c6296d'),
(3, 'Iwan Pranoto', '111114', 'laki-laki', 'Cijantung', '0217703222', 'iwan', '01ccce480c60fcdb67b54f4509ffdb56'),
(4, 'Imam Raharja', '111115', 'laki-laki', 'Bekasi', '0217703555', 'imam', 'eaccb8ea6090a40a98aa28c071810371'),
(5, 'Desi Sukma', '111116', 'perempuan', 'Bogor', '0217703444', 'desi', '069e2dd171f61ecffb845190a7adf425'),
(7, 'Wayan Murdika', '124512121', 'laki-laki', 'Denpasar', '0361875894', 'murdika', 'aef43bbd44a184b84309a07ffb36955d');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(20) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat_siswa` text NOT NULL,
  `telpon_siswa` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nis`, `kelamin`, `alamat_siswa`, `telpon_siswa`, `username`, `password`) VALUES
(2, 'Ibnu Siena', '50406041', 'laki-laki', 'Bogor', '0217703966', 'ibnu', '195ace8d50de761419faf08845304398'),
(3, 'Elka Fajar', '50406042', 'perempuan', 'Bojong', '0217703977', 'elka', '0eb0d6bc3f0b26b3cdaf7639cc0287ef'),
(4, 'Adi Kurnia H', '50406043', 'perempuan', 'Jakarta', '0217703988', 'adi', 'c46335eb267e2e1cde5b017acb4cd799'),
(6, 'Blodod Eman', '50406045', 'laki-laki', 'Tangerang', '0217703944', 'blodod', '6ed2d9fc10d15ca4c123f3b90b5d170a'),
(7, 'Athi Septiani', '50406046', 'perempuan', 'Jakarta', '0217703933', 'athi', '1b47e01486bbd74137716457e828a709'),
(8, 'Naila Larasati', '50406047', 'perempuan', 'Depok', '0217703922', 'naila', 'eec1b906b0c314e617235f13f0e6468d'),
(9, 'Rizkon Halali', '50406048', 'laki-laki', 'Mampang', '0217703955', 'rizkon', '544ccf86d9579f519ec9efb8de16a0dd'),
(10, 'Chintya Dewi', '125424545', 'perempuan', 'Denpasar', '03651547848', 'chintya', 'cbc64d3ebd5d04a08df78bc390b3530a');

-- --------------------------------------------------------

--
-- Table structure for table `setup_kelas`
--

CREATE TABLE IF NOT EXISTS `setup_kelas` (
  `id_kelas` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `setup_kelas`
--

INSERT INTO `setup_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, '3IA0945'),
(2, '3IA08b'),
(3, '3IA05'),
(5, 'XI ');

-- --------------------------------------------------------

--
-- Table structure for table `setup_pelajaran`
--

CREATE TABLE IF NOT EXISTS `setup_pelajaran` (
  `id_pelajaran` int(3) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pelajaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `setup_pelajaran`
--

INSERT INTO `setup_pelajaran` (`id_pelajaran`, `nama_pelajaran`) VALUES
(1, 'Biologi'),
(2, 'Matematika'),
(3, 'Fisika'),
(4, 'B.Indonesia'),
(5, 'Kimia'),
(6, 'Sejarah'),
(7, 'Sosiologi'),
(8, 'Bahasa Bali');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,
  `id_guru` int(3) NOT NULL,
  `id_pelajaran` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_guru`, `id_pelajaran`, `id_kelas`, `status`) VALUES
(3, 1, 4, 1, 'a'),
(4, 1, 1, 1, 'a'),
(5, 1, 3, 1, 'a'),
(6, 1, 5, 1, 'ta'),
(7, 5, 2, 1, 'a'),
(8, 5, 6, 1, 'ta'),
(9, 5, 7, 1, 'ta'),
(10, 5, 2, 2, 'ta'),
(11, 5, 6, 2, 'ta'),
(12, 5, 7, 2, 'a'),
(13, 4, 4, 2, 'a'),
(14, 4, 1, 2, 'ta'),
(15, 4, 3, 2, 'ta'),
(16, 4, 5, 2, 'ta'),
(17, 1, 0, 0, 'ta'),
(19, 2, 7, 3, 'ta'),
(20, 2, 5, 2, 'ta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(5) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(5) NOT NULL,
  `id_pelajaran` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_guru` int(3) NOT NULL,
  `nilai` int(3) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_siswa`, `id_pelajaran`, `id_kelas`, `id_guru`, `nilai`) VALUES
(55, 2, 2, 2, 5, 60),
(54, 3, 2, 2, 5, 50),
(53, 6, 7, 1, 5, 76),
(52, 7, 7, 1, 5, 40),
(51, 4, 7, 1, 5, 50),
(50, 6, 6, 1, 5, 90),
(49, 7, 6, 1, 5, 60),
(48, 4, 6, 1, 5, 75),
(47, 6, 2, 1, 5, 55),
(46, 7, 2, 1, 5, 30),
(45, 4, 2, 1, 5, 60),
(44, 6, 5, 1, 1, 70),
(43, 7, 5, 1, 1, 80),
(42, 4, 5, 1, 1, 90),
(41, 6, 3, 1, 1, 55),
(40, 7, 3, 1, 1, 70),
(39, 4, 3, 1, 1, 75),
(38, 6, 1, 1, 1, 75),
(37, 7, 1, 1, 1, 60),
(36, 4, 1, 1, 1, 80),
(35, 6, 4, 1, 1, 80),
(34, 7, 4, 1, 1, 60),
(33, 4, 4, 1, 1, 70),
(56, 8, 2, 2, 5, 70),
(57, 9, 2, 2, 5, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE IF NOT EXISTS `tbl_ruangan` (
  `id_ruangan` int(5) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ruangan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `id_siswa`, `id_kelas`, `status`) VALUES
(3, 6, 1, 'a'),
(4, 3, 2, 'ta'),
(5, 2, 2, 'ta'),
(6, 8, 2, 'a'),
(7, 9, 2, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Risky Fadilla', 'pegawai', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'user01', 'user01', 'b75705d7e35e7014521a46b532236ec3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
