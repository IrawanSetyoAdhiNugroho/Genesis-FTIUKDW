-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2013 pada 15.32
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `genesis`
--
CREATE DATABASE IF NOT EXISTS `genesis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `genesis`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE IF NOT EXISTS `datauser` (
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nomorhp` varchar(200) NOT NULL,
  `nomorrekening` int(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kodepos` varchar(200) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `propinsi` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`email`, `username`, `password`, `nomorhp`, `nomorrekening`, `alamat`, `kodepos`, `kabupaten`, `propinsi`) VALUES
('irawan', '12', '1', '12', 123, '12', '', '12', '123'),
('irawanecek2@gmail.com', 'irwan', '123', '123', 123, 'purworejo', '54173', 'Purworejo', 'Jawa Tengah');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
