-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2013 at 11:22 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `genesis`
--
CREATE DATABASE IF NOT EXISTS `genesis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `genesis`;

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE IF NOT EXISTS `databarang` (
  `namamainan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`namamainan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`namamainan`, `harga`, `kategori`, `deskripsi`, `gambar`) VALUES
('anyar', 10000, 'sport', 'apik lho', 'mac_os_x_lion_wallpaper.jpg'),
('Ndess', 20000, 'sport', 'sadasdad', 'mac_os_x_lion_wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE IF NOT EXISTS `datauser` (
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nomorhp` varchar(200) NOT NULL,
  `nomorrekening` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kodepos` varchar(200) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `propinsi` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`email`, `username`, `password`, `nomorhp`, `nomorrekening`, `alamat`, `kodepos`, `kabupaten`, `propinsi`) VALUES
('irawanecek2@gmail.com', 'irawan', '1', '2', '2', '2', '2', '2', '2'),
('joko', 'joko', '1', '1', '1', '1', '1', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
