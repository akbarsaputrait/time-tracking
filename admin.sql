-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07 Feb 2018 pada 04.16
-- Versi Server: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_activities` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `app` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id_user`, `id_activities`, `date`, `time`, `app`, `title`) VALUES
(1, 1, '2018-01-31', '10:30:00', 'Chrome Web Browser', 'localhost / MySQL / phpMyAdmin'),
(2, 2, '2018-02-01', '08:40:00', 'Visual Studio Code', 'user.php - codeigniter'),
(3, 1, '2018-02-01', '11:05:00', 'Chrome Web Browser', 'WhatsApp'),
(4, 2, '2018-02-01', '11:14:00', 'Slack', 'Inagata Intern');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id_task` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `task` varchar(255) NOT NULL,
  `progress` varchar(10) NOT NULL,
  PRIMARY KEY (`id_task`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `task`
--

INSERT INTO `task` (`id_task`, `id_user`, `date`, `time`, `task`, `progress`) VALUES
(1, 1, '2018-01-31', '10:30:00', 'Setup Dashboard', 'Done'),
(2, 2, '2018-02-01', '08:44:00', 'Desain Landing Page dengan Photoshop', 'Progress'),
(3, 1, '2018-02-01', '09:35:00', 'Install Codeigniter', 'Progress');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pc` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `do` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `pc`, `email`, `do`, `status`) VALUES
(1, 'Yudha', 'PC-01', 'akbarsaputra45@hotmail.com', 'Install Codeigniter', 'Online'),
(2, 'Saputra', 'PC-02', 'akbarsaputra45@gmail.com', 'Desain Landing Page dengan Photoshop	', 'Online'),
(3, 'Akbar', 'PC-03', 'akbarsaputra@gmail.com', 'Belajar Struktur Codeigniter', 'Offline'),
(4, 'Okky', 'PC-04', 'saputra45@gmail.com', 'Belajar Gulp, Sass, dan Nodejs', 'Offline'),
(5, 'Gema', 'PC-05', 'akbar45@gmail.com', 'Belajar Responsive dengan Bootstrap 4', 'Online');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
