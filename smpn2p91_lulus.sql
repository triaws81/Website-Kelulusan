-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mei 2020 pada 06.50
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smpn2p91_lulus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aws'),
(10, 'paijo', '44529fdc8afb86d58c6c02cd00c02e43', 'paijo cool');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_student`
--

CREATE TABLE IF NOT EXISTS `tb_student` (
  `no` varchar(200) NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nis` varchar(200) NOT NULL,
  `nisn` varchar(200) NOT NULL,
  `tgllhr` varchar(200) NOT NULL,
  `ttl` varchar(200) NOT NULL,
  `kls` varchar(200) NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `ortu` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `uspai` varchar(200) NOT NULL,
  `usppkn` varchar(200) NOT NULL,
  `usbina` varchar(200) NOT NULL,
  `usmtk` varchar(200) NOT NULL,
  `usipa` varchar(200) NOT NULL,
  `usips` varchar(200) NOT NULL,
  `usbingg` varchar(200) NOT NULL,
  `ussenbud` varchar(200) NOT NULL,
  `uspjok` varchar(200) NOT NULL,
  `usprakarya` varchar(200) NOT NULL,
  `usbjawa` varchar(200) NOT NULL,
  `usrata` varchar(200) NOT NULL,
  `smt1ipaa` varchar(200) NOT NULL,
  `smt1ipab` varchar(200) NOT NULL,
  `smt1ipajml` varchar(200) NOT NULL,
  `smt2ipaa` varchar(200) NOT NULL,
  `smt2ipab` varchar(200) NOT NULL,
  `smt2ipajml` varchar(200) NOT NULL,
  `smt3ipaa` varchar(200) NOT NULL,
  `smt3ipab` varchar(200) NOT NULL,
  `smt3ipajml` varchar(200) NOT NULL,
  `smt4ipaa` varchar(200) NOT NULL,
  `smt4ipab` varchar(200) NOT NULL,
  `smt4ipajml` varchar(200) NOT NULL,
  `smt5ipaa` varchar(200) NOT NULL,
  `smt5ipab` varchar(200) NOT NULL,
  `smt5ipajml` varchar(200) NOT NULL,
  `iparata` varchar(200) NOT NULL,
  `smt1mtka` varchar(200) NOT NULL,
  `smt1mtkb` varchar(200) NOT NULL,
  `smt1mtkjml` varchar(200) NOT NULL,
  `smt2mtka` varchar(200) NOT NULL,
  `smt2mtkb` varchar(200) NOT NULL,
  `smt2mtkjml` varchar(200) NOT NULL,
  `smt3mtka` varchar(200) NOT NULL,
  `smt3mtkb` varchar(200) NOT NULL,
  `smt3mtkjml` varchar(200) NOT NULL,
  `smt4mtka` varchar(200) NOT NULL,
  `smt4mtkb` varchar(200) NOT NULL,
  `smt4mtkjml` varchar(200) NOT NULL,
  `smt5mtka` varchar(200) NOT NULL,
  `smt5mtkb` varchar(200) NOT NULL,
  `smt5mtkjml` varchar(200) NOT NULL,
  `mtkrata` varchar(200) NOT NULL,
  `smt1binga` varchar(200) NOT NULL,
  `smt1bingb` varchar(200) NOT NULL,
  `smt1bingjml` varchar(200) NOT NULL,
  `smt2binga` varchar(200) NOT NULL,
  `smt2bingb` varchar(200) NOT NULL,
  `smt2bingjml` varchar(200) NOT NULL,
  `smt3binga` varchar(200) NOT NULL,
  `smt3bingb` varchar(200) NOT NULL,
  `smt3bingjml` varchar(200) NOT NULL,
  `smt4binga` varchar(200) NOT NULL,
  `smt4bingb` varchar(200) NOT NULL,
  `smt4bingjml` varchar(200) NOT NULL,
  `smt5binga` varchar(200) NOT NULL,
  `smt5bingb` varchar(200) NOT NULL,
  `smt5bingjml` varchar(200) NOT NULL,
  `bingrata` varchar(200) NOT NULL,
  `smt1binaa` varchar(200) NOT NULL,
  `smt1binab` varchar(200) NOT NULL,
  `smt1binajml` varchar(200) NOT NULL,
  `smt2binaa` varchar(200) NOT NULL,
  `smt2binab` varchar(200) NOT NULL,
  `smt2binajml` varchar(200) NOT NULL,
  `smt3binaa` varchar(200) NOT NULL,
  `smt3binab` varchar(200) NOT NULL,
  `smt3binajml` varchar(200) NOT NULL,
  `smt4binaa` varchar(200) NOT NULL,
  `smt4binab` varchar(200) NOT NULL,
  `smt4binajml` varchar(200) NOT NULL,
  `smt5binaa` varchar(200) NOT NULL,
  `smt5binab` varchar(200) NOT NULL,
  `smt5binajml` varchar(200) NOT NULL,
  `binarata` varchar(200) NOT NULL,
  `jmlsmt1a` varchar(200) NOT NULL,
  `jmlsmt1b` varchar(200) NOT NULL,
  `jmlsmt1` varchar(200) NOT NULL,
  `jmlsmt2a` varchar(200) NOT NULL,
  `jmlsmt2b` varchar(200) NOT NULL,
  `jmlsmt2` varchar(200) NOT NULL,
  `jmlsmt3a` varchar(200) NOT NULL,
  `jmlsmt3b` varchar(200) NOT NULL,
  `jmlsmt3` varchar(200) NOT NULL,
  `jmlsmt4a` varchar(200) NOT NULL,
  `jmlsmt4b` varchar(200) NOT NULL,
  `jmlsmt4` varchar(200) NOT NULL,
  `jmlsmt5a` varchar(200) NOT NULL,
  `jmlsmt5b` varchar(200) NOT NULL,
  `jmlsmt5` varchar(200) NOT NULL,
  `rataall` varchar(200) NOT NULL,
  `perpus` varchar(200) NOT NULL,
  `komite` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `kartu` varchar(200) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_student`
--

INSERT INTO `tb_student` (`no`, `noujian`, `name`, `nis`, `nisn`, `tgllhr`, `ttl`, `kls`, `addresse`, `ortu`, `sekolah`, `uspai`, `usppkn`, `usbina`, `usmtk`, `usipa`, `usips`, `usbingg`, `ussenbud`, `uspjok`, `usprakarya`, `usbjawa`, `usrata`, `smt1ipaa`, `smt1ipab`, `smt1ipajml`, `smt2ipaa`, `smt2ipab`, `smt2ipajml`, `smt3ipaa`, `smt3ipab`, `smt3ipajml`, `smt4ipaa`, `smt4ipab`, `smt4ipajml`, `smt5ipaa`, `smt5ipab`, `smt5ipajml`, `iparata`, `smt1mtka`, `smt1mtkb`, `smt1mtkjml`, `smt2mtka`, `smt2mtkb`, `smt2mtkjml`, `smt3mtka`, `smt3mtkb`, `smt3mtkjml`, `smt4mtka`, `smt4mtkb`, `smt4mtkjml`, `smt5mtka`, `smt5mtkb`, `smt5mtkjml`, `mtkrata`, `smt1binga`, `smt1bingb`, `smt1bingjml`, `smt2binga`, `smt2bingb`, `smt2bingjml`, `smt3binga`, `smt3bingb`, `smt3bingjml`, `smt4binga`, `smt4bingb`, `smt4bingjml`, `smt5binga`, `smt5bingb`, `smt5bingjml`, `bingrata`, `smt1binaa`, `smt1binab`, `smt1binajml`, `smt2binaa`, `smt2binab`, `smt2binajml`, `smt3binaa`, `smt3binab`, `smt3binajml`, `smt4binaa`, `smt4binab`, `smt4binajml`, `smt5binaa`, `smt5binab`, `smt5binajml`, `binarata`, `jmlsmt1a`, `jmlsmt1b`, `jmlsmt1`, `jmlsmt2a`, `jmlsmt2b`, `jmlsmt2`, `jmlsmt3a`, `jmlsmt3b`, `jmlsmt3`, `jmlsmt4a`, `jmlsmt4b`, `jmlsmt4`, `jmlsmt5a`, `jmlsmt5b`, `jmlsmt5`, `rataall`, `perpus`, `komite`, `ket`, `kartu`) VALUES
('1', '12345', 'SUJATMIKO', '12345', '12345', '010109', 'Pekalongan,10/10/2009', '9A', 'Jl. Pekalongan', 'Budi', 'Negeri 2 Pekalongan', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', 'SELESAI', ' LUNAS ', 'lulus', '04-002-001-8'),
('2', '12727', 'BUDIONO', '12727', '12727', '4222002', 'Pekalongan,04/12/2002', '9A', 'Jl. Pekalongan', 'Adi', 'Negeri 2 Pekalongan', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', 'SELESAI', ' LUNAS ', 'lulus', '04-002-001-8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
