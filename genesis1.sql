-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2013 pada 14.21
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

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
-- Struktur dari tabel `tb_gambar`
--

CREATE TABLE IF NOT EXISTS `tb_gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_gambar` varchar(30) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `category` enum('sport','f1','suv','mpv','truck','sedan','motorcycle','helicopter','jet','ship','boat','leo','tiger') NOT NULL,
  `harga` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `judul_gambar`, `nama_file`, `category`, `harga`) VALUES
(36, 'qqq', 'gambar/IMG-20130319-00462.jpg', 'helicopter', 50000),
(35, 'q', 'gambar/431676_2800810179268_1228974135_32158634_15', 'truck', 50000),
(34, 'qq', 'gambar/_KR_(_) diina(_) _KR_.jpg', 'sport', 50000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
