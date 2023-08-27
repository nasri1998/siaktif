-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 05:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siaktif`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kode` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode`, `username`, `password`, `level`) VALUES
('adm-1', 'nasri', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_adm`
--

CREATE TABLE `m_adm` (
  `kode` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_dosen`
--

CREATE TABLE `m_dosen` (
  `nip` varchar(255) NOT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `gelar` varchar(30) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_dosen`
--

INSERT INTO `m_dosen` (`nip`, `nidn`, `nama`, `gelar`, `password`, `level`, `username`) VALUES
('00000', NULL, 'Ronal Hadi', 'S.T, M.Kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'ronal'),
('11111', NULL, 'Defni', 'S.Kom, M.Kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'defni'),
('197403022008121001', NULL, 'CIPTO PRABOWO', 'ST.,MT', '062f4f6c2ef54e5d14b0103166f30dbc', 3, 'cipto'),
('19760113 200604 1 002', NULL, 'YUHEFIZAR', 'S.Kom, M.Kom', '7de30761d20d302db993f9beb8d341b0', 3, 'ephi'),
('22222', NULL, 'Alde Alanda', 'M.Kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'alde'),
('33333', NULL, 'Deni Saputra', 'M.Kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'deni'),
('44444', NULL, 'Dwiny Meidelfi', 'S.kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'dwini'),
('55555', NULL, 'Meri Azmi', 'S.Kom, M.Kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'meri'),
('77777', NULL, 'Aldo Erianda', 'S.Kom, M.Kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'aldo'),
('88888', NULL, 'Rita Sugiarto', 'M.Kom', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'rita');

-- --------------------------------------------------------

--
-- Table structure for table `m_mahasiswa`
--

CREATE TABLE `m_mahasiswa` (
  `nobp` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nip_pembimbing1` varchar(255) DEFAULT NULL,
  `nip_pembimbing2` varchar(255) DEFAULT NULL,
  `nip_penguji1` varchar(255) DEFAULT NULL,
  `nip_penguji2` varchar(255) DEFAULT NULL,
  `nip_penguji3` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mahasiswa`
--

INSERT INTO `m_mahasiswa` (`nobp`, `nama`, `prodi`, `angkatan`, `password`, `nip_pembimbing1`, `nip_pembimbing2`, `nip_penguji1`, `nip_penguji2`, `nip_penguji3`, `judul`) VALUES
('1701091044', 'novel', 'MI', 2017, '827ccb0eea8a706c4c34a16891f84e7b', '22222', '33333', '44444', '00000', '11111', 'Pengadaan Barang'),
('1701091045', 'ira', 'MI', 2017, '827ccb0eea8a706c4c34a16891f84e7b', '33333', '44444', '00000', '11111', '22222', 'Aplikasi membuat padi otomatis berbasis mikrokontroller'),
('1701091046', 'ramli', 'MI', 2017, '827ccb0eea8a706c4c34a16891f84e7b', '11111', '00000', '22222', '33333', '44444', ''),
('1701091047', 'nasri', 'MI', 2017, '827ccb0eea8a706c4c34a16891f84e7b', '00000', '11111', '22222', '33333', '44444', 'Sistem Informasi Pengolalaan Proses Sidang Tugas Akhir'),
('1701091048', 'adit', 'MI', 2017, '827ccb0eea8a706c4c34a16891f84e7b', '00000', '44444', '11111', '22222', '33333', ''),
('1701092001', 'Mori Calliope', 'TK', 2017, '827ccb0eea8a706c4c34a16891f84e7b', '00000', '11111', '22222', '33333', '44444', 'Aplikasi membuat padi otomatis berbasis mikrokontroller');

-- --------------------------------------------------------

--
-- Table structure for table `m_prodi`
--

CREATE TABLE `m_prodi` (
  `id` int(11) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_prodi`
--

INSERT INTO `m_prodi` (`id`, `prodi`, `nama`) VALUES
(1, 'MI', 'Manajemen Informatika'),
(2, 'TK', 'Teknik Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `m_sidang`
--

CREATE TABLE `m_sidang` (
  `nobp` varchar(15) NOT NULL,
  `permohonan_sidang` varchar(255) NOT NULL,
  `file_bimbingan1` varchar(255) NOT NULL,
  `file_bimbingan2` varchar(255) NOT NULL,
  `uji_kompetensi` varchar(255) NOT NULL,
  `file_toeic` varchar(255) NOT NULL,
  `file_rapor` varchar(255) NOT NULL,
  `map_plastik` varchar(255) NOT NULL,
  `bebas_kompensasi` varchar(255) NOT NULL,
  `amplop_putih` varchar(255) NOT NULL,
  `nip_penguji1` varchar(255) NOT NULL,
  `nip_penguji2` varchar(255) NOT NULL,
  `nip_penguji3` varchar(255) NOT NULL,
  `tanggal_sidang` date NOT NULL,
  `jam sidang` varchar(255) NOT NULL,
  `ruang_sidang` varchar(255) NOT NULL,
  `artikel_ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pembimbing1`
--

CREATE TABLE `nilai_pembimbing1` (
  `nobp` varchar(15) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `sikap_penampilan` float NOT NULL,
  `motivasi` float NOT NULL,
  `bahasa_tatatulis` float NOT NULL,
  `perancangan_sistem` float NOT NULL,
  `asistensi` float NOT NULL,
  `bobot_masalah` float NOT NULL,
  `analisa_masalah` float NOT NULL,
  `kesimpulan_saran` float NOT NULL,
  `program_sistem` float NOT NULL,
  `nilai_pembimbing` float NOT NULL,
  `revisi` varchar(255) NOT NULL,
  `total_sikap_penampilan` float NOT NULL,
  `total_motivasi` float NOT NULL,
  `total_bahasa_tatatulis` float NOT NULL,
  `total_perancangan_sistem` float NOT NULL,
  `total_asistensi` float NOT NULL,
  `total_bobot_masalah` float NOT NULL,
  `total_analisa_masalah` float NOT NULL,
  `total_kesimpulan_saran` float NOT NULL,
  `total_program_sistem` float NOT NULL,
  `total_nilai_pembimbing` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_pembimbing1`
--

INSERT INTO `nilai_pembimbing1` (`nobp`, `nip`, `sikap_penampilan`, `motivasi`, `bahasa_tatatulis`, `perancangan_sistem`, `asistensi`, `bobot_masalah`, `analisa_masalah`, `kesimpulan_saran`, `program_sistem`, `nilai_pembimbing`, `revisi`, `total_sikap_penampilan`, `total_motivasi`, `total_bahasa_tatatulis`, `total_perancangan_sistem`, `total_asistensi`, `total_bobot_masalah`, `total_analisa_masalah`, `total_kesimpulan_saran`, `total_program_sistem`, `total_nilai_pembimbing`) VALUES
('1701091047', '00000', 87, 87, 87, 87, 87, 87, 87, 87, 87, 8700, 'Perbagus tampilan', 870, 870, 1305, 870, 870, 435, 40, 40, 2610, 87),
('1701091045', '33333', 80, 80, 80, 80, 80, 80, 80, 80, 80, 8000, 'Ulang semester depan', 800, 800, 1200, 800, 800, 400, 400, 400, 2400, 80),
('1701092001', '00000', 90, 87, 85, 88, 90, 88, 85, 85, 90, 8815, '-', 900, 870, 1275, 880, 900, 440, 425, 425, 2700, 88.15),
('1701091044', '22222', 87, 89, 87, 99, 78, 78, 88, 67, 89, 8670, 'Tambahkan Fitur Masukkan Virus', 870, 890, 1305, 990, 780, 390, 440, 335, 2670, 86.7);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pembimbing2`
--

CREATE TABLE `nilai_pembimbing2` (
  `nobp` varchar(15) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `sikap_penampilan` float NOT NULL,
  `motivasi` float NOT NULL,
  `bahasa_tatatulis` float NOT NULL,
  `perancangan_sistem` float NOT NULL,
  `asistensi` float NOT NULL,
  `bobot_masalah` float NOT NULL,
  `analisa_masalah` float NOT NULL,
  `kesimpulan_saran` float NOT NULL,
  `program_sistem` float NOT NULL,
  `nilai_pembimbing` float NOT NULL,
  `total_sikap_penampilan` float NOT NULL,
  `total_motivasi` float NOT NULL,
  `total_bahasa_tatatulis` float NOT NULL,
  `total_perancangan_sistem` float NOT NULL,
  `total_penguasaan_materi` float NOT NULL,
  `total_asistensi` float NOT NULL,
  `total_bobot_masalah` float NOT NULL,
  `total_analisa_masalah` float NOT NULL,
  `total_kesimpulan_saran` float NOT NULL,
  `total_program_sistem` float NOT NULL,
  `total_nilai_pembimbing` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_pembimbing2`
--

INSERT INTO `nilai_pembimbing2` (`nobp`, `nip`, `sikap_penampilan`, `motivasi`, `bahasa_tatatulis`, `perancangan_sistem`, `asistensi`, `bobot_masalah`, `analisa_masalah`, `kesimpulan_saran`, `program_sistem`, `nilai_pembimbing`, `total_sikap_penampilan`, `total_motivasi`, `total_bahasa_tatatulis`, `total_perancangan_sistem`, `total_penguasaan_materi`, `total_asistensi`, `total_bobot_masalah`, `total_analisa_masalah`, `total_kesimpulan_saran`, `total_program_sistem`, `total_nilai_pembimbing`) VALUES
('1701092012', '22222', 80, 80, 80, 80, 80, 88, 88, 88, 88, 8360, 800, 800, 1200, 800, 0, 800, 440, 440, 440, 2640, 83.6),
('1701091047', '11111', 78, 87, 89, 98, 66, 77, 56, 88, 78, 8070, 780, 870, 1335, 980, 0, 60, 385, 280, 440, 2340, 80.7),
('1701091045', '44444', 78, 78, 78, 78, 78, 78, 78, 78, 78, 7800, 780, 780, 1170, 780, 0, 780, 390, 390, 390, 2340, 78),
('1701092001', '11111', 90, 90, 90, 90, 90, 90, 90, 90, 90, 9000, 900, 900, 1350, 900, 0, 900, 450, 450, 450, 2700, 90),
('1701091044', '33333', 88, 88, 88, 88, 88, 88, 88, 88, 88, 8800, 880, 880, 1320, 880, 0, 880, 40, 40, 40, 2640, 88);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_penguji1`
--

CREATE TABLE `nilai_penguji1` (
  `nobp` varchar(15) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `originalitas_kemutakhiran_makalah` float NOT NULL,
  `bahasa_tatatulis` float NOT NULL,
  `relevansi_judul_isi_analisa` float NOT NULL,
  `kesimpulan_saran` float NOT NULL,
  `sikap_penampilan` float NOT NULL,
  `komunikasi_sistematika` float NOT NULL,
  `penguasaan_materi` float NOT NULL,
  `nilai_penguji` float NOT NULL,
  `revisi` varchar(255) NOT NULL,
  `total_originalitas_kemutakhiran` float NOT NULL,
  `total_bahasa_tatatulis` float NOT NULL,
  `total_relevansi` float NOT NULL,
  `total_kesimpulan_saran` float NOT NULL,
  `total_sikap_penampilan` float NOT NULL,
  `total_komunikasi_sistematika` float NOT NULL,
  `total_penguasaan_materi` float NOT NULL,
  `total_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_penguji1`
--

INSERT INTO `nilai_penguji1` (`nobp`, `nip`, `originalitas_kemutakhiran_makalah`, `bahasa_tatatulis`, `relevansi_judul_isi_analisa`, `kesimpulan_saran`, `sikap_penampilan`, `komunikasi_sistematika`, `penguasaan_materi`, `nilai_penguji`, `revisi`, `total_originalitas_kemutakhiran`, `total_bahasa_tatatulis`, `total_relevansi`, `total_kesimpulan_saran`, `total_sikap_penampilan`, `total_komunikasi_sistematika`, `total_penguasaan_materi`, `total_nilai`) VALUES
('1701091046', '22222', 88, 88, 88, 88, 95, 90, 90, 8980, 'GANTI JUDUL', 440, 440, 160, 440, 950, 1800, 3150, 89.8),
('1701091048', '22222', 80, 88, 76, 67, 76, 76, 76, 7635, 'lah ancak', 400, 440, 1520, 335, 760, 1520, 2660, 76.35),
('1701091047', '22222', 7, 8.9, 7.5, 6.9, 7.9, 7.8, 8.8, 807, 'Perbagus tampilan', 35, 44.5, 150, 34.5, 79, 156, 308, 8.07),
('1701091045', '00000', 76, 76, 76, 76, 76, 56, 67, 6885, 'lah ancak', 380, 380, 1520, 380, 760, 1120, 2345, 68.85),
('1701092001', '22222', 95, 95, 95, 95, 95, 95, 95, 9500, '-', 475, 475, 1900, 475, 950, 1900, 3325, 95),
('1701091044', '44444', 79, 79, 79, 79, 77, 77, 87, 8120, '-', 395, 395, 1580, 395, 770, 1540, 3045, 81.2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_penguji2`
--

CREATE TABLE `nilai_penguji2` (
  `nobp` varchar(15) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `originalitas_kemutakhiran_makalah` float NOT NULL,
  `bahasa_tatatulis` float NOT NULL,
  `relevansi_judul_isi_analisa` float NOT NULL,
  `kesimpulan_saran` float NOT NULL,
  `sikap_penampilan` float NOT NULL,
  `komunikasi_sistematika` float NOT NULL,
  `penguasaan_materi` float NOT NULL,
  `nilai_penguji` float NOT NULL,
  `revisi` varchar(255) NOT NULL,
  `total_originalitas_kemutakhiran` float NOT NULL,
  `total_bahasa_tatatulis` float NOT NULL,
  `total_relevansi` float NOT NULL,
  `total_kesimpulan_saran` float NOT NULL,
  `total_sikap_penampilan` float NOT NULL,
  `total_komunikasi_sistematika` float NOT NULL,
  `total_penguasaan_materi` float NOT NULL,
  `total_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_penguji2`
--

INSERT INTO `nilai_penguji2` (`nobp`, `nip`, `originalitas_kemutakhiran_makalah`, `bahasa_tatatulis`, `relevansi_judul_isi_analisa`, `kesimpulan_saran`, `sikap_penampilan`, `komunikasi_sistematika`, `penguasaan_materi`, `nilai_penguji`, `revisi`, `total_originalitas_kemutakhiran`, `total_bahasa_tatatulis`, `total_relevansi`, `total_kesimpulan_saran`, `total_sikap_penampilan`, `total_komunikasi_sistematika`, `total_penguasaan_materi`, `total_nilai`) VALUES
('1701091048', '22222', 89, 89, 98, 89, 89, 89, 99, 9430, 'lah ancak', 445, 445, 1960, 445, 890, 1780, 3465, 94.3),
('1701091047', '33333', 88, 87, 78, 88, 89, 98, 66, 8035, 'GANTI JUDUL', 440, 435, 1560, 440, 890, 1960, 2310, 80.35),
('1701091045', '11111', 78, 67, 76, 76, 78, 67, 54, 6635, 'Ulang semester depan', 390, 335, 1520, 380, 780, 1340, 1890, 66.35),
('1701092001', '33333', 70, 75, 80, 80, 82, 80, 80, 7607.5, '-Tambahkan fitur pada aplikasi', 350, 375, 1600, 400, 820, 1600, 2800, 76.075),
('1701091044', '00000', 70, 70, 70, 70, 89, 80, 88, 8020, '-', 350, 350, 1400, 350, 890, 1600, 3080, 80.2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_penguji3`
--

CREATE TABLE `nilai_penguji3` (
  `nobp` varchar(15) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `originalitas_kemutakhiran_makalah` float NOT NULL,
  `bahasa_tatatulis` float NOT NULL,
  `relevansi_judul_isi_analisa` float NOT NULL,
  `kesimpulan_saran` float NOT NULL,
  `sikap_penampilan` float NOT NULL,
  `komunikasi_sistematika` float NOT NULL,
  `penguasaan_materi` float NOT NULL,
  `nilai_penguji` float NOT NULL,
  `revisi` varchar(255) NOT NULL,
  `total_originalitas_kemutakhiran` float NOT NULL,
  `total_bahasa_tatatulis` float NOT NULL,
  `total_relevansi` float NOT NULL,
  `total_kesimpulan_saran` float NOT NULL,
  `total_sikap_penampilan` float NOT NULL,
  `total_komunikasi_sistematika` float NOT NULL,
  `total_penguasaan_materi` float NOT NULL,
  `total_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_penguji3`
--

INSERT INTO `nilai_penguji3` (`nobp`, `nip`, `originalitas_kemutakhiran_makalah`, `bahasa_tatatulis`, `relevansi_judul_isi_analisa`, `kesimpulan_saran`, `sikap_penampilan`, `komunikasi_sistematika`, `penguasaan_materi`, `nilai_penguji`, `revisi`, `total_originalitas_kemutakhiran`, `total_bahasa_tatatulis`, `total_relevansi`, `total_kesimpulan_saran`, `total_sikap_penampilan`, `total_komunikasi_sistematika`, `total_penguasaan_materi`, `total_nilai`) VALUES
('1701091047', '44444', 77, 87, 89, 67, 67, 87, 98, 8775, 'Ulang semester depan', 385, 435, 1780, 335, 670, 1740, 3430, 87.75),
('1701091045', '22222', 87, 78, 78, 87, 78, 78, 78, 7890, 'Perbagus tampilan', 435, 390, 1560, 435, 780, 1560, 2730, 78.9),
('1701092001', '44444', 88, 88, 88, 88, 95, 90, 90, 8980, '-tata tulis laporan', 40, 440, 1760, 440, 90, 1800, 3150, 89.8),
('1701091044', '11111', 80, 80, 80, 80, 80, 80, 80, 8000, '-', 400, 400, 1600, 400, 800, 1600, 2800, 80);

-- --------------------------------------------------------

--
-- Table structure for table `rekap_nilai`
--

CREATE TABLE `rekap_nilai` (
  `nobp` varchar(15) NOT NULL,
  `total_nilai_pembimbing1` float NOT NULL,
  `total_nilai_pembimbing2` float NOT NULL,
  `total_nilai_penguji1` float NOT NULL,
  `total_nilai_penguji2` float NOT NULL,
  `total_nilai_penguji3` float NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekap_nilai`
--

INSERT INTO `rekap_nilai` (`nobp`, `total_nilai_pembimbing1`, `total_nilai_pembimbing2`, `total_nilai_penguji1`, `total_nilai_penguji2`, `total_nilai_penguji3`, `nilai_akhir`) VALUES
('1701091045', 80, 78, 68.85, 66.35, 78.9, 75.18),
('1701091047', 87, 80.7, 8.07, 80.35, 87.75, 71.29),
('1701092001', 88.15, 90, 95, 76.08, 89.8, 88.02),
('1701091044', 86.7, 88, 81.2, 80.2, 80, 83.91);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `m_adm`
--
ALTER TABLE `m_adm`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD PRIMARY KEY (`nobp`);

--
-- Indexes for table `m_prodi`
--
ALTER TABLE `m_prodi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_prodi`
--
ALTER TABLE `m_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
