-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2021 at 08:42 PM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nokenstore_web_komunitas_kopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `jam_awal` varchar(10) DEFAULT NULL,
  `jam_akhir` varchar(10) DEFAULT NULL,
  `tempat` varchar(256) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `instruktur` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `nama`, `deskripsi`, `tgl_awal`, `tgl_akhir`, `jam_awal`, `jam_akhir`, `tempat`, `jumlah`, `harga`, `instruktur`, `file`) VALUES
(2, 'Barista Dasar', '<p>Pada kelas ini siswa dapat mempelajari hal-hal sebagai berikut :</p>\r\n\r\n<p>1. Mengenal dan mempelajari peralatan menyeduh dari yang manual hingga mesin.</p>\r\n\r\n<p>2. Mempelajari tentang pembuatan kopi dari proses panen hingga penyajian dalam secangkir kopi.</p>\r\n\r\n<p>3. Mempelajari bagaimana penyajian kopi yang baik dan benar menurut standar SCA (Specialty Coffee Association).</p>\r\n\r\n<p>4. Peserta dapat menerima sertifikat apabila telah di nyatakan lulus oleh kami.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Biaya pendahtaran dapat di transfer melalui No. Rekening kami :</p>\r\n\r\n<p>16000121240789 (BCA)</p>\r\n\r\n<p>16000201345678 (Mandiri)</p>\r\n\r\n<p>20013456878998 (BRI)</p>\r\n\r\n<p>Mohon di perhatikan, untuk pendaftaran peserta harus login terlebih dahulu setelah itu peserta harus meyertakan bukti pembayaran pada link yang telah disediakan. Kami akan memeriksa bukti pembayaran anda dan menyesuaikan data diri anda. </p>\r\n\r\n<p>Terimakasih..</p>\r\n\r\n<p>#Komunitas Kopi Manokwari</p>\r\n', '2021-05-27', '2021-05-31', '08:00', '11:00', 'Koteka Coffe\r\nJl. Gunung Salju, Amban', 15, 2000000, 'Ragil Pilihantra', '8ec8a2099ccafc951635c4f7d53a6cc1.png'),
(3, 'Latte Art', '<p>Pada kelas ini siswa dapat mempelajari hal-hal sebagai berikut :</p>\r\n\r\n<p>1. Mengenal dan mempelajari peralatan pada pembuatan Latte Arrt.</p>\r\n\r\n<p>2. Memahami pembuatan Latte Art dari pembuatan Espresso hingga menggambar pada secangkir kopi.</p>\r\n\r\n<p>3. Mempelajari pembuatan gambar dari Tulip, Roseta, dan Swan.</p>\r\n\r\n<p>4. Peserta dapat menerima sertifikat apabila telah di nyatakan lulus oleh kami.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Biaya pendahtaran dapat di transfer melalui No. Rekening kami :</p>\r\n\r\n<p>16000121240789 (BCA)</p>\r\n\r\n<p>16000201345678 (Mandiri)</p>\r\n\r\n<p>20013456878998 (BRI)</p>\r\n\r\n<p>Mohon di perhatikan, untuk pendaftaran peserta harus login terlebih dahulu setelah itu peserta harus meyertakan bukti pembayaran pada link yang telah disediakan. Kami akan memeriksa bukti pembayaran anda dan menyesuaikan data diri anda. </p>\r\n\r\n<p>Terimakasih..</p>\r\n\r\n<p>#Komunitas Kopi Manokwari</p>\r\n', '2021-05-25', '2021-05-25', '08:00', '10:00', 'Vet Coffe\r\nJl. Drs. Esau Sesa, Mata jalan Mako Brimob', 1, 4000000, 'Rizal Abidin', 'd0de8bcd54c184b66e4bef690f6d9025.png'),
(4, 'Basic Espresso', '<p>Pada kelas ini siswa dapat mempelajari hal-hal sebagai berikut :</p>\r\n\r\n<p>1. Siswa dapat mempelajari tentang dasar Espresso Base.</p>\r\n\r\n<p>2. Mengenal dan mempelajari alat pembuatan Espresso Base.</p>\r\n\r\n<p>3. Dapat memahami pembuatan dasar dari berbagai menu kopi lainnya.</p>\r\n\r\n<p>4. Peserta dapat menerima sertifikat dari kami apabila telah di nyatakan lulus pada kelas yang di ikuti.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Biaya pendahtaran dapat di transfer melalui No. Rekening kami :</p>\r\n\r\n<p>16000121240789 (BCA)</p>\r\n\r\n<p>16000201345678 (Mandiri)</p>\r\n\r\n<p>20013456878998 (BRI)</p>\r\n\r\n<p>Mohon di perhatikan, untuk pendaftaran peserta harus login terlebih dahulu setelah itu peserta harus meyertakan bukti pembayaran pada link yang telah disediakan. Kami akan memeriksa bukti pembayaran anda dan menyesuaikan data diri anda. </p>\r\n\r\n<p>Terimakasih..</p>\r\n\r\n<p>#Komunitas Kopi Manokwari</p>\r\n', '2021-05-25', '2021-05-25', '08:00', '10:00', 'Koteka Coffe\r\nJl. Gunung Salju, Amban', 20, 2000000, 'Ari Jumanto', '73767b9dda4ee62ac74556268d38a5bc.png'),
(5, 'Basic Manual Brew', '<p>Pada kelas ini siswa dapat mempelajari hal-hal sebagai berikut :</p>\r\n\r\n<p>1. Dapat mempelajari tentang menyeduh kopi.</p>\r\n\r\n<p>2. Siswa akan di ajari tentang beberapa peralatan menyeduh secara manual.</p>\r\n\r\n<p>3. Kami akan memberikan pemahaman tentang metode-metode seduh manual.</p>\r\n\r\n<p>4. Peserta dapat menerima sertifikat apabila telah di nyatakan lulus oleh kami.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Biaya pendahtaran dapat di transfer melalui No. Rekening kami :</p>\r\n\r\n<p>16000121240789 (BCA)</p>\r\n\r\n<p>16000201345678 (Mandiri)</p>\r\n\r\n<p>20013456878998 (BRI)</p>\r\n\r\n<p>Mohon di perhatikan, untuk pendaftaran peserta harus login terlebih dahulu setelah itu peserta harus meyertakan bukti pembayaran pada link yang telah disediakan. Kami akan memeriksa bukti pembayaran anda dan menyesuaikan data diri anda. </p>\r\n\r\n<p>Terimakasih..</p>\r\n\r\n<p>#Komunitas Kopi Manokwari</p>\r\n', '2021-05-25', '2021-05-25', '19:30', '21:30', 'Vet Coffe\r\nJl. Drs. Esau Sesa, Mata jalan Mako Brimob', 8, 800000, 'Rizal Abidin', '3876f3edf28362a52cd4f5cc10276e65.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `nama_lengkap` varchar(64) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pengguna_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `nama_lengkap`, `no_hp`, `email`, `alamat`, `pengguna_id`) VALUES
(13, 'Ragil Pilihantra', '085344996030', 'ragil.0597@gmail.com', 'Sanggeng', 8),
(16, 'Agil Pilihantra', '085344551030', 'ragil.0597@gmail.com', 'Sanggeng', 11),
(19, 'Haris manda', '081344167123', 'ragil.0597@gmail.com', 'Wosi jln. baru', 14),
(20, 'Haris manda', '085244991090', 'harismanda.012@gmail.com', 'Wosi jln. baru', 15),
(21, 'Eka Saputra', '082248577297', 'ekza97@gmail.com', 'Jalur 5 SP 1', 16),
(22, 'Rizal Abidin', '085311456785', 'rizalabidin278@gmail.com', 'Wosi Jl. Drs. Esau Sesa, Mata jalan mako brimob', 17);

-- --------------------------------------------------------

--
-- Table structure for table `mengikuti`
--

CREATE TABLE `mengikuti` (
  `idmengikuti` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `status_bayar` enum('Belum Bayar','Sudah Bayar') DEFAULT NULL,
  `bukti_bayar` varchar(128) DEFAULT NULL,
  `status` enum('Pending','Verified') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mengikuti`
--

INSERT INTO `mengikuti` (`idmengikuti`, `member_id`, `kelas_id`, `status_bayar`, `bukti_bayar`, `status`) VALUES
(14, 20, 2, 'Sudah Bayar', 'a52334fac4b2c8ae4ad629f7df724378.jpg', 'Verified'),
(15, 20, 3, 'Sudah Bayar', '6e9695c5692fca8f432d22e531bcaf86.jpg', 'Verified'),
(16, 21, 4, 'Sudah Bayar', '6883a304f79cf3846102354c4308fb80.jpg', 'Verified'),
(17, 22, 4, 'Sudah Bayar', '8579cd85e439b7462997ba3a0ecb0cde.jpg', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` enum('Admin','Member') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '$2y$10$Z7lymIBzDC3rqfphxCQ1gOhPvvk8Am06OdwTlu8TACVQbfZcTvSby', 'Admin'),
(8, 'Ragil Pilihantra', 'ragil.0597@gmail.com', '$2y$10$KYDgJd7BZUMTojnW.T4GuudcKMt/4HdxTx.duQ8dTcCdYSZ1vS3mC', 'Member'),
(11, 'Agil Pilihantra', 'ragil.0597@gmail.com', '$2y$10$2GeQk/PO0rvWpuYSAVWM3uzWMBP2vZWoryYZpXREtalPpPFgdiq9y', 'Member'),
(14, 'Ragil', 'ragil.0597@gmail.com', '$2y$10$eQ0mQeupmRgibBMQ4ltIfO80vsV4XKzgNDonwcapTohfkuKIU4hq.', 'Admin'),
(15, 'Haris manda', 'harismanda.012@gmail.com', '$2y$10$3gW7pRjWrSb79qiJrI8ZPeyRw.dcex5tAjrbDgwoTGozlzjOx2hwG', 'Member'),
(16, 'Eka Saputra', 'ekza97@gmail.com', '$2y$10$szgY/fvAkbkfm9uQ4PAc0Oukiq4OYGeNJDKGwPbsEL4ydq2/yM9PG', 'Member'),
(17, 'Rizal Abidin', 'rizalabidin278@gmail.com', '$2y$10$v28sywLep1OwZA.nADbY3.26aNurAjmQ7bQuu9m5jQnS94Mi3OvwW', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `idprofil` int(11) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `slogan` varchar(64) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `nama_ketua` varchar(64) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `facebook` varchar(64) DEFAULT NULL,
  `instagram` varchar(64) DEFAULT NULL,
  `youtube` varchar(64) DEFAULT NULL,
  `logo` varchar(128) DEFAULT NULL,
  `pengguna_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`idprofil`, `nama`, `slogan`, `deskripsi`, `nama_ketua`, `alamat`, `email`, `no_telp`, `facebook`, `instagram`, `youtube`, `logo`, `pengguna_id`) VALUES
(1, 'Komunitas Kopi Manokwari', 'Kopi adalah kenikmatan hidup', '<h1>Visi</h1>\r\n\r\n<p><strong>Memajukan sumber daya penyeduh orang asli papua, memajukan petani kopi papua dan mengembangkan usaha-usah hasil kopi guna mensejahtrakan papua dan papua barat</strong></p>\r\n\r\n<p> </p>\r\n\r\n<h1>Misi</h1>\r\n\r\n<p><strong>Mendidik, mengembangkan kapasitas sumber daya manusia..</strong></p>\r\n\r\n<p><strong>Merangkai jalur distribusi kopi, melakukan pameran guna meningkatkan pengetahuan dan kesejahteraan, melakukan kerja sama peningkatkan ekonomi usaha kecil</strong></p>\r\n', 'Ragil Pilihantra', 'Jl. S. Condronegoro S. H., Papua Barat', 'komunitaskopi01@gmail.com', '085344603030', 'https://www.facebook.com/groups/500087180339639/?ref=share', 'https://www.instagram.com/komunitas_kopi_manokwari/', 'https://www.youtube.com/', '71043649a8889815a3e12c8ba57e9325.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`),
  ADD KEY `fk_member_pengguna1_idx` (`pengguna_id`);

--
-- Indexes for table `mengikuti`
--
ALTER TABLE `mengikuti`
  ADD PRIMARY KEY (`idmengikuti`),
  ADD KEY `fk_member_has_kelas_kelas1_idx` (`kelas_id`),
  ADD KEY `fk_member_has_kelas_member_idx` (`member_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idprofil`),
  ADD KEY `fk_profil_pengguna1_idx` (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mengikuti`
--
ALTER TABLE `mengikuti`
  MODIFY `idmengikuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `idprofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_pengguna1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`idpengguna`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mengikuti`
--
ALTER TABLE `mengikuti`
  ADD CONSTRAINT `fk_member_has_kelas_kelas1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`idkelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_has_kelas_member` FOREIGN KEY (`member_id`) REFERENCES `member` (`idmember`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk_profil_pengguna1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`idpengguna`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
