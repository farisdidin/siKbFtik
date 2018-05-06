-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 06:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kambinftif`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `Kode_Artikel` char(16) NOT NULL,
  `Pembuat` char(10) NOT NULL,
  `Judul_Artikel` varchar(50) NOT NULL,
  `Isi_Artikel` varchar(2048) NOT NULL,
  `Tanggal_Terbit` datetime NOT NULL,
  `Status_Artikel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `Kode_Donasi` char(16) NOT NULL,
  `Donatur` char(16) NOT NULL,
  `Nomor_Rekening` varchar(50) NOT NULL,
  `Pemilik_Rekening` varchar(50) NOT NULL,
  `Jumlah` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `ID_Donatur` char(16) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Nomor_KTP` char(16) NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Kode_Sesi` char(8) NOT NULL,
  `Waktu_Ajar` date NOT NULL,
  `NRP` char(10) NOT NULL,
  `Materi` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `Kode_Kegiatan` char(16) NOT NULL,
  `Nama_Kegiatan` varchar(50) NOT NULL,
  `Tanggal_Pelaksanaan` date NOT NULL,
  `Laporan_Kegiatan` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `Kode_Materi` char(16) NOT NULL,
  `Mata_Pelajaran` varchar(50) NOT NULL,
  `Judul_Materi` varchar(50) NOT NULL,
  `Link_Materi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `NRP` char(10) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Nama_Pengajar` varchar(100) NOT NULL,
  `TTL` varchar(200) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No_HP` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_diskusi`
--

CREATE TABLE `post_diskusi` (
  `ID_Post` char(16) NOT NULL,
  `Judul_Post` varchar(50) NOT NULL,
  `Pembuat` varchar(50) NOT NULL,
  `Tanggal_Post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_Siswa` char(16) NOT NULL,
  `Nama_Siswa` varchar(50) NOT NULL,
  `Umur` tinyint(3) UNSIGNED NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `Kode_UMKM` char(16) NOT NULL,
  `Nama_UMKM` varchar(50) NOT NULL,
  `Jenis_Usaha` varchar(50) NOT NULL,
  `Nama_Pemilik` varchar(50) NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`Kode_Artikel`),
  ADD KEY `Pembuat` (`Pembuat`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`Kode_Donasi`),
  ADD KEY `Donatur` (`Donatur`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`ID_Donatur`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD KEY `Materi` (`Materi`),
  ADD KEY `NRP` (`NRP`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`Kode_Kegiatan`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`Kode_Materi`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`NRP`);

--
-- Indexes for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  ADD PRIMARY KEY (`ID_Post`),
  ADD KEY `Pembuat` (`Pembuat`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_Siswa`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`Kode_UMKM`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`Pembuat`) REFERENCES `pengajar` (`NRP`);

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`Donatur`) REFERENCES `donatur` (`ID_Donatur`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`Materi`) REFERENCES `materi` (`Kode_Materi`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`NRP`) REFERENCES `pengajar` (`NRP`);

--
-- Constraints for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  ADD CONSTRAINT `post_diskusi_ibfk_1` FOREIGN KEY (`Pembuat`) REFERENCES `pengajar` (`NRP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
