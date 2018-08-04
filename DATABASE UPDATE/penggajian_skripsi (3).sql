-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2018 at 02:23 PM
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
  `nip` varchar(6) NOT NULL,
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
('090828', '2018-01-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('090828', '2018-02-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('090828', '2018-03-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2017-04-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('090828', '2018-05-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('090828', '2018-06-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2017-07-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('090828', '2018-08-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('090828', '2018-09-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2017-10-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('090828', '2018-12-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('090828', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-01-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('010422', '2018-02-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('010422', '2018-03-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2017-04-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('010422', '2018-05-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('010422', '2018-06-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2017-07-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('010422', '2018-08-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('010422', '2018-09-08', '08:00:00', '16:00:00', '12:00:00', '16:00:00', '04:00:00', '04:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2017-10-08', '08:00:00', '16:00:00', '08:30:00', '16:20:00', '00:30:00', '07:50:00', '00:20:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '18:00:00', '00:00:00', '10:00:00', '02:00:00', 'ok', '2018-08-31'),
('010422', '2018-12-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31'),
('010422', '2018-11-08', '08:00:00', '16:00:00', '08:00:00', '16:00:00', '00:00:00', '08:00:00', '00:00:00', 'ok', '2018-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `kode_divisi` varchar(6) NOT NULL,
  `nama_divisi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`kode_divisi`, `nama_divisi`) VALUES
('DIV001', 'HRD'),
('DIV002', 'FINANCE'),
('DIV003', 'SUPPORT'),
('DIV004', 'SALES');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `kode_divisi` varchar(6) NOT NULL,
  `gaji` double NOT NULL,
  `lembur` double NOT NULL,
  `potongan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`kode_divisi`, `gaji`, `lembur`, `potongan`) VALUES
('DIV001', 2500000, 25000, 10000),
('DIV004', 5500000, 25000, 20000),
('DIV002', 6000000, 20000, 10000),
('DIV003', 4500000, 20000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nip` varchar(6) NOT NULL,
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
('010108', 'Ade  ', 'A Nuryandi ', 'Jl. Pasar Baru No.49', '08161918913', 'nuryandi@infokom.co.id', '2001-01-14', '21232f297a57a5a743894a0e4a801fc3', 'DIV004', 'Junior '),
('010422', 'Yayan  ', ' Hardiana ', 'Jl. Bunga Harapan Gang seruni, bekasi no.11', '081932945307', 'yayan@infokom.co.id', '2004-01-19', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('010815', 'Eddi  ', ' Baihaqqi ', 'Jl. Bintara Raya no.86', '08999864992', 'eddi@infokom.co.id', '2008-01-17', '21232f297a57a5a743894a0e4a801fc3', 'DIV003', 'Senior'),
('020320', 'Iwan  ', ' Setiawan ', 'Jl. Margonda Raya No. 83', '087781884137', 'iwan@infokom.co.id ', '2003-11-02', '21232f297a57a5a743894a0e4a801fc3', 'DIV004', 'Junior '),
('020702', 'Nancy  ', ' Harahap ', 'Jl. Kapuk Penjaringan no.24', '083819952230', 'Nancy@infokom.co.id', '2007-08-02', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('021426', 'Harson ', 'DD ', 'Jl. Pangkalan Raya no.8 warung jambu', '08579733746', 'harson@infokom.co.id', '2014-02-16', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('029016', 'Emma  ', ' dading ', 'Jl. Kramat Kwitang raya no.12', '081218657273', 'emma@infokom.co.id', '1990-09-02', '21232f297a57a5a743894a0e4a801fc3', 'DIV004', 'Junior '),
('029118', 'Fanny  ', ' Chusnulia ', 'Jl. Palem Raya no.13 Perumnas ', '089601245302', 'fanny@infokom.co.id', '1991-12-02', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('030204', 'Setiawati ', 'DD ', 'Jl. Jelambar baru no. 40', '089666176674', 'setiawati@infokom.co.id', '2002-11-03', '21232f297a57a5a743894a0e4a801fc3', 'DIV004', 'Junior '),
('030714', 'Poon ', 'DD ', 'JL. Chairil Anwar no.23', '081317726873', 'poon@infokom.co.id', '2007-08-03', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('040409', 'Bahrudin ', ' DD', 'Jl. Bekasi Timur no. 73', '087808674495', 'bahrudin@infokom.co.id', '2002-08-04', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior'),
('040421', 'Setiawan ', 'DD ', 'Jl. Jelambar Utama no.10', '083808840586', 'setiawan@infokom.co.id', '2004-04-15', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior'),
('040725', 'Dedi  ', ' Setiadi ', 'Jl. Surya kencana no.4', '083897967714', 'dedi@infokom.co.id ', '2007-04-13', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior'),
('041130', 'Bambang ', 'DD ', 'Jl. Cikokol raya no.14', '081906601606', 'bambang@infokom.co.id', '2011-01-04', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('050403', 'G.J.  ', ' Pranawa ', 'Jl. Belimbing Raya Ciomas bogor ', '081287287204', 'Pranawa@infokom.co.id', '2004-12-05', '21232f297a57a5a743894a0e4a801fc3', 'DIV003', 'Senior'),
('050627', 'Suparno ', 'DD ', 'Jl. Cikiray raya no.114', '085211722791', 'suparno@infokom.co.id ', '2006-05-05', '21232f297a57a5a743894a0e4a801fc3', 'DIV003', 'Senior'),
('050719', 'Nurul  ', ' Istiqomah ', 'Jl. Kali anyar Barat no.14', '081355754092', 'nurul@infokom.co.id', '2007-07-05', '21232f297a57a5a743894a0e4a801fc3', 'DIV003', 'Senior'),
('050805', 'Susan  ', ' Anggraini ', 'Jl. Sungai Musi no.56', '081356278619', 'susan@infokom.co.id', '2008-03-05', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior'),
('050806', 'Rumi  ', ' Rodiyanti ', 'Jl. Kali anyar no. 8', '083806941683', 'rumi@infokom.co.id', '2017-09-08', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('052007', 'As\'ad  ', ' Nazir ', 'Jl. Bintaro sektor 9 no.25', '082140484040', 'asad@infokom.co.id', '2000-06-05', '21232f297a57a5a743894a0e4a801fc3', 'DIV003', 'Senior'),
('060511', 'Vini Lia  ', '  Pratiwi ', 'Jl. Pondok Cabe Blok 4 no.41', '081311625003', 'vinilia@infokom.co.id', '2008-11-06', '21232f297a57a5a743894a0e4a801fc3', 'DIV003', 'Senior'),
('060512', 'Isman ', ' DD', 'Jl. Raya Naronggong no.33', '085778485565', 'isma@infokom.co.id', '2005-06-06', '21232f297a57a5a743894a0e4a801fc3', 'DIV004', 'Junior '),
('070929', 'Margono ', 'DD ', 'Jl. Jelambar baru no.3', '082148816955', 'margono@infokom.co.id', '2009-09-07', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior'),
('080924', 'Sutoro', 'DD ', 'Jl. Dokter Wahidin Paninggilian no.10', '081585222820', 'Sutoro@infokom.co.id', '2009-09-08', '21232f297a57a5a743894a0e4a801fc3', 'DIV004', 'Junior '),
('090828', 'Onah  ', ' Marlinah ', 'Jl. Daan Mogot no. 11', '081280884013', 'onah@infokom.co.id', '2008-06-09', '21232f297a57a5a743894a0e4a801fc3', 'DIV004', 'Junior '),
('091423', 'Maman  ', ' Surapto ', 'Jl. Pesing Koneng no.37f', '0895363635562', 'maman@infokom.co.id', '2014-03-09', '21232f297a57a5a743894a0e4a801fc3', 'DIV003', 'Senior'),
('092017', 'Mansyah ', ' DD', 'Jl. Ujung Bambu, bekasi no.30', '083822434575', 'mansyah@infokom.co.id ', '2000-06-09', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior'),
('100410', 'Yenni  ', ' Susanti ', 'Jl. Tanjung Priok Raya no. 12', '087880188246', 'yenni@infokom.co.id', '2004-09-10', '21232f297a57a5a743894a0e4a801fc3', 'DIV002', 'Junior '),
('100813', 'Khusaini ', 'DD ', 'Jl. Cilendek Raya no. 36', '081310278516', 'khusaini@infokom.co.id', '2008-05-10', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior'),
('159001', 'Haryati  ', ' Suciadi ', 'Jl. Meruya Raya no. 37', '081316864477', 'Suciadi@infokom.id ', '1990-07-15', '21232f297a57a5a743894a0e4a801fc3', 'DIV001', 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penggajian`
--

CREATE TABLE `tb_penggajian` (
  `id_penggajian` varchar(6) NOT NULL,
  `tgl_penggajian` date NOT NULL,
  `nip` varchar(6) NOT NULL,
  `total_lemburan` int(11) NOT NULL,
  `total_potongan` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `status_penggajian` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penggajian`
--

INSERT INTO `tb_penggajian` (`id_penggajian`, `tgl_penggajian`, `nip`, `total_lemburan`, `total_potongan`, `total_gaji`, `status_penggajian`) VALUES
('GK001', '2018-08-31', '090828', 200000, 120000, 5080000, 'konfirmasi'),
('GK002', '2018-08-31', '010422', 160000, 120000, 6040000, 'konfirmasi');

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
-- Constraints for table `tb_penggajian`
--
ALTER TABLE `tb_penggajian`
  ADD CONSTRAINT `tb_penggajian_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_karyawan` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
