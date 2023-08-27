/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.13-MariaDB : Database - dbsiaktif
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbsiaktif` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbsiaktif`;

/*Table structure for table `ref_mahasiswa` */

DROP TABLE IF EXISTS `ref_mahasiswa`;

CREATE TABLE `ref_mahasiswa` (
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
  KEY `FK_ref_mahasiswa6` (`id_level`),
  CONSTRAINT `FK_ref_mahasiswa6` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON UPDATE CASCADE,
  CONSTRAINT `FK_ref_mahasiswa_2` FOREIGN KEY (`id_gol_darah`) REFERENCES `ref_gol_darah` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_ref_mahasiswa_3` FOREIGN KEY (`id_agama`) REFERENCES `ref_agama` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_ref_mahasiswa_4` FOREIGN KEY (`id_status_sekolah`) REFERENCES `ref_status_sekolah` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_ref_mahasiswa_5` FOREIGN KEY (`id_jalur_masuk`) REFERENCES `ref_jalur_masuk` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_ref_mahasiswa_prodi` FOREIGN KEY (`kode_prodi`) REFERENCES `ref_prodi` (`kode`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
