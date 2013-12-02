-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2013 at 07:09 AM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namamainan` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`id`, `namamainan`, `harga`, `kategori`, `deskripsi`, `gambar`) VALUES
(1, 'Sapi', '123123', 'sport', '123231', 'ampunnn.jpg'),
(2, 'sapi', '2', 'sport', '2', 'aaaa 272.jpg'),
(3, 'as', '123', 'sport', '12313', 'ampunnn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `datapembelian`
--

CREATE TABLE IF NOT EXISTS `datapembelian` (
  `idtransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `emailuser` varchar(200) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(200) NOT NULL,
  `hargasatuan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`idtransaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
('irawan@gmail.com', 'irawan', '123', '123', '123', '123', '123', '123', '123'),
('irawanecek2@gmail.com', 'irawan', '1', '2', '2', '2', '2', '2', '2'),
('joko', 'joko', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tampungan`
--

CREATE TABLE IF NOT EXISTS `tampungan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namamainan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `testimoni` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
