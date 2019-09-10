-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 28. Juni 2019 jam 02:08
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `firstname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `gambar` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `judul`, `tanggal`, `isi`, `gambar`) VALUES
(1, 'Kunjungan Ke DIskominfotik Provinsi Lampung', '15 maret 2018', 'Lampung, 14 - 15 Maret 2018 ? BEM Fakultas Ilmu Komputer Universitas Bandar Lampung mengadakan kunjungan ke Kantor Dinas Komunikasi Informatika dan Statistik Provinsi Lampung. Sebanyak 20 perwakilan turut serta dalam kegiatan kunjungan ini yang merupakan perwakilan dari Anggota Muda BEM FIK dan perwakilan dari Anggota BEM FIK UBL periode 2017/2018. Rombongan tiba di lantai 1 Diskominfotik Provinsi Lampung pada pukul 13.55 WIB, yang kemudian dilanjutkan dengan pemaparan profil singkat mengenai seluk beluk Diskominfotik Provinsi Lampung.\r\n\r\nRombongan kunjungan BEM FIK disambut oleh Bapak Budi Sofyan selaku Kasubbag Umum dan Bapak Ganjar Jationo selaku Kabid Diseminasi dan Informasi. Dalam Kunjungan ini dilakukakan diskusi dan tukar wawasan mengenai isu isu yang berkembang di masyarakat mulai dari HOAX dan Registrasi SIM CARD. Rombongan kunjungan BEM FIK juga berkesempatan mengelilingi area sekitar Kantor Diskominfotik Provinsi Lampung.', 'kunjungan.jpg'),
(2, 'Kunjungan Membantu Sesama', '12 Januari 2018', 'Test aksdfl askjdlflkajs dfjalksdjf lasjdfkljasldf jasdlf laskjdlfkjalsdj flasjdlfkj adjsfklajs dfkajskldjflkajskldjf asjdlfkjaskd fjasdlkfjklajsdlfk asjdflk asdjfl asdlfkjalsd fjalsdj flkjsadfj asdkjf', 'pf7.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
