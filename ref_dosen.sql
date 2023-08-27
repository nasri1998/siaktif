/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.13-MariaDB : Database - dbsiaktif
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `ref_dosen` */

DROP TABLE IF EXISTS `ref_dosen`;

CREATE TABLE `ref_dosen` (
  `kode` varchar(15) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `gelar_depan` varchar(15) DEFAULT NULL,
  `gelar_belakang` varchar(15) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nidn` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `kode_prodi` varchar(15) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  PRIMARY KEY (`kode`),
  KEY `FK_ref_dosen_2` (`id_level`),
  KEY `FK_ref_dose` (`kode_prodi`),
  CONSTRAINT `FK_ref_dose` FOREIGN KEY (`kode_prodi`) REFERENCES `ref_prodi` (`kode`) ON UPDATE CASCADE,
  CONSTRAINT `FK_ref_dosen_2` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
