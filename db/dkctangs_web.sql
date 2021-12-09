-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 12:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkctangs_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_berita`
--

CREATE TABLE `db_berita` (
  `id_berita` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktu_publish` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar_berita` varchar(255) NOT NULL,
  `konten_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_peserta_gelas`
--

CREATE TABLE `db_peserta_gelas` (
  `id_peserta_gelas` int(255) NOT NULL,
  `jenis_peserta` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `pangkalan` text NOT NULL,
  `ranting` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `sertifikat_vaksin` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `surat_kesehatan` varchar(255) NOT NULL,
  `surat_mandat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_peserta_gelas`
--

INSERT INTO `db_peserta_gelas` (`id_peserta_gelas`, `jenis_peserta`, `nama_lengkap`, `no_hp`, `jenis_kelamin`, `pangkalan`, `ranting`, `tempat_lahir`, `tanggal_lahir`, `email`, `penyakit`, `sertifikat_vaksin`, `surat_kesehatan`, `surat_mandat`) VALUES
(100, '', '', '', 0, '', '', '', '0000-00-00', '', '', 'default.jpg', '', ''),
(101, 'Peserta', 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2100-12-31', 'anandarafli385@gmail.com', 'TIDAK ADA', 'IMG-20200831-WA01021.jpg', 'IMG-20200831-WA01021.jpg', 'IMG-20200831-WA01021.jpg'),
(102, 'Peserta', 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2096-11-30', 'anandarafli385@gmail.com', 'TIDAK ADA', 'IMG-20200831-WA01022.jpg', 'IMG-20200831-WA01022.jpg', 'IMG-20200831-WA01022.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_peserta_pwc`
--

CREATE TABLE `db_peserta_pwc` (
  `id_peserta_pwc` int(255) NOT NULL,
  `jenis_peserta` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `pangkalan` text NOT NULL,
  `ranting` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `sertifikat_vaksin` varchar(255) NOT NULL,
  `surat_kesehatan` varchar(255) NOT NULL,
  `surat_mandat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_peserta_pwc`
--

INSERT INTO `db_peserta_pwc` (`id_peserta_pwc`, `jenis_peserta`, `nama_lengkap`, `no_hp`, `jenis_kelamin`, `pangkalan`, `ranting`, `tempat_lahir`, `tanggal_lahir`, `email`, `penyakit`, `sertifikat_vaksin`, `surat_kesehatan`, `surat_mandat`) VALUES
(100, '', '', '', 0, '', '', '', '0000-00-00', '', '', '', '', ''),
(101, '', 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2099-02-22', 'anandarafli385@gmail.com', 'TIDAK ADA', 'Certificate.jpg', 'Certificate.jpg', 'Certificate.jpg'),
(102, '', 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2021-12-15', 'anandarafli385@gmail.com', 'TIDAK ADA', 'IMG-20200831-WA0104.jpg', 'IMG-20200831-WA0104.jpg', 'IMG-20200831-WA0104.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_peserta_tatil`
--

CREATE TABLE `db_peserta_tatil` (
  `id_peserta_tatil` int(255) NOT NULL,
  `jenis_peserta` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `pangkalan` text NOT NULL,
  `ranting` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `sertifikat_vaksin` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `surat_kesehatan` varchar(255) NOT NULL,
  `surat_mandat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_peserta_tatil`
--

INSERT INTO `db_peserta_tatil` (`id_peserta_tatil`, `jenis_peserta`, `nama_lengkap`, `no_hp`, `jenis_kelamin`, `pangkalan`, `ranting`, `tempat_lahir`, `tanggal_lahir`, `email`, `penyakit`, `sertifikat_vaksin`, `surat_kesehatan`, `surat_mandat`) VALUES
(100, '', '', '', 0, '', '', '', '0000-00-00', '', '', 'default.jpg', '', ''),
(101, 'Peserta', 'Ananda Rafli', '081904035517', 2, 'SMKN 6 Tangsel', 'Serpong', 'Bekasi', '1800-12-31', 'testdummy@mail.test.com', 'TIDAK ADA', '0001-14002150566_20211207_133430_0000.png', '0001-14002150566_20211207_133430_0000.png', '0001-14002150566_20211207_133430_0000.png'),
(102, 'Peserta', 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2098-11-30', 'anandarafli385@gmail.com', 'TIDAK ADA', 'IMG-20200903-WA0062.jpg', 'IMG-20200903-WA0062.jpg', 'IMG-20200903-WA0062.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_td_pramuka`
--

CREATE TABLE `db_td_pramuka` (
  `id_pramuka` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `pangkalan` text NOT NULL,
  `ambalan` text NOT NULL,
  `nomor_gudep` text NOT NULL,
  `tingkatan_1` varchar(255) NOT NULL,
  `tingkatan_2` varchar(255) NOT NULL,
  `ranting` varchar(255) NOT NULL,
  `no_wa` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 1),
(2, 'user', 'user123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_berita`
--
ALTER TABLE `db_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `db_peserta_gelas`
--
ALTER TABLE `db_peserta_gelas`
  ADD PRIMARY KEY (`id_peserta_gelas`);

--
-- Indexes for table `db_peserta_pwc`
--
ALTER TABLE `db_peserta_pwc`
  ADD PRIMARY KEY (`id_peserta_pwc`);

--
-- Indexes for table `db_peserta_tatil`
--
ALTER TABLE `db_peserta_tatil`
  ADD PRIMARY KEY (`id_peserta_tatil`);

--
-- Indexes for table `db_td_pramuka`
--
ALTER TABLE `db_td_pramuka`
  ADD PRIMARY KEY (`id_pramuka`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_berita`
--
ALTER TABLE `db_berita`
  MODIFY `id_berita` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_peserta_gelas`
--
ALTER TABLE `db_peserta_gelas`
  MODIFY `id_peserta_gelas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `db_peserta_pwc`
--
ALTER TABLE `db_peserta_pwc`
  MODIFY `id_peserta_pwc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `db_peserta_tatil`
--
ALTER TABLE `db_peserta_tatil`
  MODIFY `id_peserta_tatil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `db_td_pramuka`
--
ALTER TABLE `db_td_pramuka`
  MODIFY `id_pramuka` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
