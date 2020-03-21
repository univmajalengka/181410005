-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 02:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbdl_fahmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jabatan`
--

CREATE TABLE `tabel_jabatan` (
  `kdjab` varchar(3) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `gajipokok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_jabatan`
--

INSERT INTO `tabel_jabatan` (`kdjab`, `jabatan`, `gajipokok`) VALUES
('01', 'Karyawan', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `NIK` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `JK` varchar(50) NOT NULL,
  `tgllahir` varchar(50) NOT NULL,
  `kdjab` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`NIK`, `Nama`, `Alamat`, `Agama`, `JK`, `tgllahir`, `kdjab`, `notelp`, `jabatan`) VALUES
(1210101000, 'Salahudin Nurul Fahmi', 'Kertajati', 'Islam', 'Laki-laki', '1 Januari 1999', '01', '082113546712', 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pemakai`
--

CREATE TABLE `tabel_pemakai` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `kd_pemakai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pemakai`
--

INSERT INTO `tabel_pemakai` (`user_name`, `password`, `kd_pemakai`) VALUES
('user', 'user', '01');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penggajian`
--

CREATE TABLE `tabel_penggajian` (
  `NoGajih` varchar(100) NOT NULL,
  `Nik` varchar(50) NOT NULL,
  `Kd_petugas` varchar(50) NOT NULL,
  `Tanggal` varchar(100) NOT NULL,
  `GajiKotor` varchar(100) NOT NULL,
  `GajiBersih` varchar(100) NOT NULL,
  `PotHutang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_penggajian`
--

INSERT INTO `tabel_penggajian` (`NoGajih`, `Nik`, `Kd_petugas`, `Tanggal`, `GajiKotor`, `GajiBersih`, `PotHutang`) VALUES
('1', '1210101000', '01', '19 Maret 2020', '1500000', '1000000', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_petugas`
--

CREATE TABLE `tabel_petugas` (
  `Kd_Petugas` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `JK` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `NoTlp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_petugas`
--

INSERT INTO `tabel_petugas` (`Kd_Petugas`, `Nama`, `Alamat`, `JK`, `Tanggal_Lahir`, `NoTlp`) VALUES
('1', 'Salahudin Nurul Fahmi', 'Kertajati', 'Laki-laki', '1999-01-01', '082113546712');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tabel_pemakai`
--
ALTER TABLE `tabel_pemakai`
  ADD PRIMARY KEY (`kd_pemakai`);

--
-- Indexes for table `tabel_penggajian`
--
ALTER TABLE `tabel_penggajian`
  ADD PRIMARY KEY (`Nik`);

--
-- Indexes for table `tabel_petugas`
--
ALTER TABLE `tabel_petugas`
  ADD PRIMARY KEY (`Kd_Petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
