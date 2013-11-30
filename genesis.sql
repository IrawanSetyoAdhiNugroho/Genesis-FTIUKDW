-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2013 pada 09.52
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
-- Struktur dari tabel `databarang`
--

CREATE TABLE IF NOT EXISTS `databarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namamainan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`id`, `namamainan`, `harga`, `kategori`, `deskripsi`, `gambar`) VALUES
(4, 'anyar', 10000, 'sport', 'apik lho', 'mac_os_x_lion_wallpaper.jpg'),
(5, 'Ndess', 20000, 'sport', 'sadasdad', 'mac_os_x_lion_wallpaper.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
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
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`email`, `username`, `password`, `nomorhp`, `nomorrekening`, `alamat`, `kodepos`, `kabupaten`, `propinsi`) VALUES
('irawanecek2@gmail.com', 'irawan', '1', '2', '2', '2', '2', '2', '2'),
('joko', 'joko', '1', '1', '1', '1', '1', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
