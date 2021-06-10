-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2021 at 09:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_asrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` enum('Admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '$2y$10$XP1158h1cai3WGaXrOZGe.ezVM1ztkA6RNjJU4PWbj5k6MvfUZe3K', 'Admin'),
(3, 'Eka Saputra', 'user', '$2y$10$3rfYcUyf1QKBdKsKRy1v7OISh/S5dVuM99zwTf3fVChGC8EgyiF26', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `idpenghuni` int(11) NOT NULL,
  `nama_lengkap` varchar(64) DEFAULT NULL,
  `tmp_lahir` varchar(64) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Kristen Protestan','Kristen Katholik','Hindu','Budha','Konghucu') DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `status` enum('Aktif','Nonaktif','Lulus') DEFAULT NULL,
  `jabatan` enum('Anggota','Bendahara','Sekretaris','Wakil Ketua','Ketua') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`idpenghuni`, `nama_lengkap`, `tmp_lahir`, `tgl_lahir`, `agama`, `jk`, `alamat`, `status`, `jabatan`) VALUES
(2, 'Eka Saputra 2', 'asdas', '2021-04-20', 'Kristen Protestan', 'L', 'asdasd', 'Aktif', 'Anggota'),
(3, 'asdas', 'asdas', '2021-04-20', 'Kristen Katholik', 'P', 'asdasd', 'Lulus', 'Ketua');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `idpengumuman` int(11) NOT NULL,
  `judul` varchar(128) DEFAULT NULL,
  `isi` mediumtext DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`idpengumuman`, `judul`, `isi`, `created_at`, `created_by`) VALUES
(1, 'Pembersihan Asrama', '<p>Peralatan yang di bawa :</p>\r\n\r\n<ol>\r\n <li>Ember</li>\r\n <li>Sabit</li>\r\n <li>Kain Lap</li>\r\n</ol>\r\n', NULL, NULL),
(2, 'Ibadah Minggu', '<p>Pemberitahuan ibadah minggu bagi yang beragama kristen</p>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `idprofil` int(11) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `struktur` varchar(128) DEFAULT NULL,
  `nama_ketua` varchar(64) DEFAULT NULL,
  `sejarah` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`idprofil`, `nama`, `alamat`, `struktur`, `nama_ketua`, `sejarah`) VALUES
(1, 'Web Asrama Baru', 'Jl. Gunung Salju Baru', '87060fb37fc8ac9e5d728be1df69f492.jpeg', 'Ketua Asrama Baru', '<p>Sejarahnya yah begini yah oke,, oke,, oke,,</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`idpenghuni`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`idpengumuman`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idprofil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `idpenghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `idpengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `idprofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
