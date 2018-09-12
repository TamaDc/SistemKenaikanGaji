-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Mei 2017 pada 13.53
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_sisteminformasi`
--
CREATE DATABASE IF NOT EXISTS `db_sisteminformasi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sisteminformasi`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_admin`
--

CREATE TABLE IF NOT EXISTS `db_admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `db_admin`
--

INSERT INTO `db_admin` (`id`, `username`, `password`, `nama`, `level`) VALUES
(2, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'agus', 'member'),
(4, 'admin', '0192023a7bbd73250516f069df18b500', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_gaji`
--

CREATE TABLE IF NOT EXISTS `db_gaji` (
  `id_gaji` int(50) NOT NULL AUTO_INCREMENT,
  `NIP` varchar(50) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `tmt_pangkat` date DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tmt_kgb` date DEFAULT NULL,
  `grade` int(50) DEFAULT NULL,
  `gaji` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `db_gaji`
--

INSERT INTO `db_gaji` (`id_gaji`, `NIP`, `tmt_cpns`, `golongan`, `tmt_pangkat`, `jabatan`, `tmt_kgb`, `grade`, `gaji`) VALUES
(1, '198008152003122003', '2013-12-01', 'III/C', '2012-06-01', 'Kepala Urusan Perencanaan dan Keuangan\r\n', '2013-12-01', 8, 2940000),
(4, '198008152003122003', '2014-12-01', 'III/C', '2012-06-01', 'Kepala Urusan Perencanaan dan Keuangan', '2013-12-01', 8, 2940000),
(5, '196005101981032001', '1981-01-03', 'IIIA', '2009-01-04', 'BENDAHARA PENERIMAAN', '2017-05-23', 8, 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_golongan`
--

CREATE TABLE IF NOT EXISTS `db_golongan` (
  `id_golongan` int(50) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(100) DEFAULT NULL,
  `urain` text,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_jabatan`
--

CREATE TABLE IF NOT EXISTS `db_jabatan` (
  `id_jabatan` int(50) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `db_jabatan`
--

INSERT INTO `db_jabatan` (`id_jabatan`, `jabatan`, `level`) VALUES
(1, 'Kepala Urusan Perencanaan dan Keuangan', 'Kepala Keuangan'),
(2, 'Bendahara Penerimaan', 'Bendahara'),
(3, 'Pengadministrasian Keuangan', 'administrasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pegawai`
--

CREATE TABLE IF NOT EXISTS `db_pegawai` (
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `golongan` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `id_unit_kerja` int(50) DEFAULT NULL,
  `id_jabatan` int(20) NOT NULL,
  `unit_kerja` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_pegawai`
--

INSERT INTO `db_pegawai` (`NIP`, `nama`, `status`, `golongan`, `pendidikan`, `jabatan`, `id_unit_kerja`, `id_jabatan`, `unit_kerja`) VALUES
('196005101981032001', 'Siti Rukmini', 'PNS', 'IIIA', 'S1', 'Bendahara Penerimaan', 1, 2, 'Ur. Perencanaan &Keu'),
('198008152003122003', 'Hartyas Kusumastuty, SE. MAP. M.PP.', 'PNS\r\n', 'III/C', 'S2\r\n', 'Kepala Urusan Perencanaan dan Keuangan', 1, 1, 'Ur. Perencanaan &Keu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_unit_kerja`
--

CREATE TABLE IF NOT EXISTS `db_unit_kerja` (
  `id_unit_kerja` int(50) NOT NULL AUTO_INCREMENT,
  `nama_unit_kerja` varchar(150) DEFAULT NULL,
  `eselon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_unit_kerja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `db_unit_kerja`
--

INSERT INTO `db_unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`, `eselon`) VALUES
(1, 'Ur. Perencanaan &Keu', 'I.a'),
(2, 'Ur. Umum &Kepegawaian', 'II.a'),
(3, 'SubSeksi. Pengukuran &Pemetaan', 'II.a'),
(4, 'SubSeksi Tematik &Potensi Tanah', 'IV.a'),
(5, 'SubSeksi Penetapan Hak Tanah', 'V.a'),
(6, 'SubSeksi Pendaftaran Hak', 'VI.a'),
(7, 'SubSeksi Peralihan, Pembebanan Hak & PPAT', 'VII.a'),
(8, 'SubSeksi Penatagunaan Tanah & Kawasan Tertentu', 'VIII.a'),
(9, 'SubSeksi Pemberdayaan Masyarakat', 'IX.a'),
(10, 'SubSeksi Pengendalian Pertanahan', 'X.a'),
(11, 'Kepala Kantor', 'XI.a'),
(12, 'Sub Bag. Tata Usaha', 'XII.a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_user`
--

CREATE TABLE IF NOT EXISTS `db_user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`) VALUES
(1, '198008152003122003', '216e6101fa453e965a0241d3d7edf795'),
(2, '196005101981032001', 'db04eb4b07e0aaf8d1d477ae342bdff9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
