-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2020 at 07:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiaktif`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_mahasiswa`
--

DROP TABLE IF EXISTS `ref_mahasiswa`;
CREATE TABLE IF NOT EXISTS `ref_mahasiswa` (
  `no_bp` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `panggilan` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_gol_darah` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_agama` int(11) NOT NULL,
  `telepon` varchar(25) DEFAULT '-',
  `hp` varchar(25) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `alamat_padang` varchar(100) NOT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `daerah_asal` varchar(100) DEFAULT NULL,
  `sekolah_asal` varchar(100) DEFAULT NULL,
  `id_status_sekolah` int(11) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `program_studi` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `alamat_ortu` varchar(100) DEFAULT NULL,
  `id_jalur_masuk` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `kode_prodi` varchar(15) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `aktif` enum('Y','T') DEFAULT 'T',
  PRIMARY KEY (`no_bp`),
  KEY `FK_ref_mahasiswa_1` (`kode_prodi`),
  KEY `FK_ref_mahasiswa_2` (`id_gol_darah`),
  KEY `FK_ref_mahasiswa_3` (`id_agama`),
  KEY `FK_ref_mahasiswa_4` (`id_status_sekolah`),
  KEY `FK_ref_mahasiswa_5` (`id_jalur_masuk`),
  KEY `FK_ref_mahasiswa_jur` (`jurusan`),
  KEY `FK_ref_mahasiswa_prodi` (`program_studi`),
  KEY `FK_ref_mahasiswa6` (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ref_mahasiswa`
--
ALTER TABLE `ref_mahasiswa`
  ADD CONSTRAINT `FK_ref_mahasiswa6` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ref_mahasiswa_2` FOREIGN KEY (`id_gol_darah`) REFERENCES `ref_gol_darah` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ref_mahasiswa_3` FOREIGN KEY (`id_agama`) REFERENCES `ref_agama` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ref_mahasiswa_4` FOREIGN KEY (`id_status_sekolah`) REFERENCES `ref_status_sekolah` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ref_mahasiswa_5` FOREIGN KEY (`id_jalur_masuk`) REFERENCES `ref_jalur_masuk` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ref_mahasiswa_prodi` FOREIGN KEY (`kode_prodi`) REFERENCES `ref_prodi` (`kode`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
