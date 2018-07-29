-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2018 at 02:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `email_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`email_admin`, `username`, `password`, `level`) VALUES
('admin@infokom.com', 'Setyo Adi Nugroho', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN'),
('direktur@infokom.com', 'Wahyu Alfarisi', 'e83af884a75b86a6ae42dc0a8d218f06', 'DIREKTUR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_absensi`
--

CREATE TABLE `tb_daftar_absensi` (
  `nip` varchar(25) NOT NULL,
  `tgl_absen` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `scan_masuk` time NOT NULL,
  `scan_keluar` time NOT NULL,
  `terlambat` time NOT NULL,
  `jam_kerja` time NOT NULL,
  `lembur` time NOT NULL,
  `status` varchar(25) NOT NULL,
  `tgl_penggajian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftar_absensi`
--

INSERT INTO `tb_daftar_absensi` (`nip`, `tgl_absen`, `jam_masuk`, `jam_keluar`, `scan_masuk`, `scan_keluar`, `terlambat`, `jam_kerja`, `lembur`, `status`, `tgl_penggajian`) VALUES
('720112', '2018-01-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-07-31'),
('720112', '2018-02-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-07-31'),
('720112', '2018-03-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2017-04-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-07-31'),
('720112', '2018-05-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-07-31'),
('720112', '2018-06-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2017-07-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-07-31'),
('720112', '2018-08-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-07-31'),
('720112', '2018-09-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2017-10-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-07-31'),
('720112', '2018-12-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31'),
('720112', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `kode_divisi` varchar(25) NOT NULL,
  `nama_divisi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`kode_divisi`, `nama_divisi`) VALUES
('DIV001 ', 'HRD'),
('DIV002 ', 'FINANCE'),
('DIV003 ', 'SUPPORT'),
('DIV004 ', 'SALES');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `kode_divisi` varchar(25) NOT NULL,
  `gaji` double NOT NULL,
  `lembur` double NOT NULL,
  `potongan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`kode_divisi`, `gaji`, `lembur`, `potongan`) VALUES
('DIV001 ', 6500000, 25000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nip` varchar(50) NOT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tgl_gabung` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_divisi` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nip`, `nama_depan`, `nama_belakang`, `alamat`, `no_telepon`, `email`, `tgl_gabung`, `password`, `kode_divisi`, `jabatan`) VALUES
('720112', 'Wahyu ', 'alfarisi', 'jakarta', '081317726873', 'wahyualfarisi30@gmail.com', '2018-07-17', '21232f297a57a5a743894a0e4a801fc3', 'DIV001 ', 'head');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penggajian`
--

CREATE TABLE `tb_penggajian` (
  `id_penggajian` varchar(25) NOT NULL,
  `tgl_penggajian` date NOT NULL,
  `nip` varchar(50) NOT NULL,
  `total_lemburan` int(11) NOT NULL,
  `total_potongan` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `status_penggajian` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penggajian`
--

INSERT INTO `tb_penggajian` (`id_penggajian`, `tgl_penggajian`, `nip`, `total_lemburan`, `total_potongan`, `total_gaji`, `status_penggajian`) VALUES
('GK001', '2018-07-31', '720112', 200000, 120000, 6580000, 'proses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`email_admin`);

--
-- Indexes for table `tb_daftar_absensi`
--
ALTER TABLE `tb_daftar_absensi`
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD KEY `kode_divisi` (`kode_divisi`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kode_divisi` (`kode_divisi`);

--
-- Indexes for table `tb_penggajian`
--
ALTER TABLE `tb_penggajian`
  ADD PRIMARY KEY (`id_penggajian`),
  ADD KEY `id_absensi` (`nip`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_daftar_absensi`
--
ALTER TABLE `tb_daftar_absensi`
  ADD CONSTRAINT `tb_daftar_absensi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_karyawan` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD CONSTRAINT `tb_gaji_ibfk_1` FOREIGN KEY (`kode_divisi`) REFERENCES `tb_divisi` (`kode_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD CONSTRAINT `tb_karyawan_ibfk_1` FOREIGN KEY (`kode_divisi`) REFERENCES `tb_divisi` (`kode_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penggajian`
--
ALTER TABLE `tb_penggajian`
  ADD CONSTRAINT `tb_penggajian_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_karyawan` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
