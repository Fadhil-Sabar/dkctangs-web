-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 01:26 PM
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
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `pangkalan` text NOT NULL,
  `ranting` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `sertifikat_vaksin` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_peserta_gelas`
--

INSERT INTO `db_peserta_gelas` (`id_peserta_gelas`, `nama_lengkap`, `no_hp`, `jenis_kelamin`, `pangkalan`, `ranting`, `tempat_lahir`, `tanggal_lahir`, `email`, `penyakit`, `sertifikat_vaksin`) VALUES
(2, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'e85ed20989ef61d98a79e2f82438906c.jpg'),
(3, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '1c66f32a74a7c94733448962f49da54c.jpg'),
(4, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '3451b893e7b70f9acdfc6acf586a2c89.jpg'),
(5, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '77a2ee927c36321fdeee7be638e07663.jpg'),
(6, 'Ananda Rafli', '2147483647', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '1ca60d4c2e5d72ff1b158ed40387e1e8.jpg'),
(7, 'Ananda Rafli', '2147483647', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '7e77d9d88671b65e0a642862d4902e08.jpg'),
(8, 'Ananda Rafli', '2147483647', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '97f2db371750fffff26568a7d3e14280.jpg'),
(9, 'Ananda Rafli', '2147483647', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'eb520656b83e153278f33620418a4846.jpg'),
(10, 'Ananda Rafli', '2147483647', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'e1ce8d1beb9d6117dd3e0f743dc216a2.jpg'),
(11, 'Ananda Rafli', '2147483647', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'd7a907bbb187188d27b4b39b4f84ebe2.jpg'),
(12, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '7b587a56ad6d840a625dc592d930bd88.jpg'),
(13, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'a0478a91c33f3cfadb62482338e576b9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_peserta_pwc`
--

CREATE TABLE `db_peserta_pwc` (
  `id_peserta_pwc` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `pangkalan` text NOT NULL,
  `ranting` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `sertifikat_vaksin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_peserta_pwc`
--

INSERT INTO `db_peserta_pwc` (`id_peserta_pwc`, `nama_lengkap`, `no_hp`, `jenis_kelamin`, `pangkalan`, `ranting`, `tempat_lahir`, `tanggal_lahir`, `email`, `penyakit`, `sertifikat_vaksin`) VALUES
(14, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'd45c53eafbb204335eec854074ed7c33.png'),
(15, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '5f9d03fabb4348642ceb71799536ebe2.png'),
(16, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'e8bd29e2980239b0a5dd00239b7f65f9.png'),
(17, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '89aa501fe86ca2d282ed3285e94b4732.png'),
(18, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '9ae801142ec8bdfd2f9ac348323aaa09.jpg'),
(19, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'b3560a7af3ada01f455ad02cd15fc9a4.jpg'),
(20, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'd3535a6e070fa36d1909a776ff12f74c.jpg'),
(21, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'c852ccf42086f3ddadbd0761d9f88b87.jpg'),
(22, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '671b93820e4c8e7b9932547977e3fcb7.jpg'),
(23, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'ccb96e81230832f18485402c04430c8f.PNG'),
(24, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'bf3236a81d60ed25b4d9dcba3d7f85e9.PNG'),
(25, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'ae99423bb3b3a9a0ca401f7df39167dc.PNG'),
(26, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'afe053c0f1cdd32b5a3935269470ff19.PNG'),
(27, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'f9aa2c6f23696cdef3aa5476e529eea7.PNG'),
(28, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '52881049a6aaf0c42a00f2aa4578f4a5.PNG'),
(29, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'd7c786330252de5b0888746cef2f91d7.PNG'),
(30, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '8da792ff8fc81603d05e55adf7c9997b.PNG'),
(31, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'b5ccf09d3629812afb9b31807803903a.PNG'),
(32, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '6f922cd8368dbf336c7c6c17ed2db78d.PNG'),
(33, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '8bd897c892a19a237af82c6776aa5562.PNG'),
(34, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'c9a87f0d574090ecafbc8db3bafbaaf4.PNG'),
(35, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'd92a82092b6c44fa01820e8c5aa1bc2f.PNG'),
(36, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'a4618ba8527250912fb9c606ad9609cf.PNG'),
(37, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '4a3bbd02abd29b5263bfa48742922054.PNG'),
(38, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'c35c4923fb90dd7d4c3193a7d1c536e9.jpg'),
(39, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'f16b3eb172eb3ed2761acd340f835ee7.jpg'),
(40, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'ea2c8b1a244dc1c583fd75a6a92b2320.jpg'),
(41, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '4f2cfb7a8586afc765458a3b74e688c4.jpg'),
(42, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '85ac3b4e7752e7e661912dbfa03ef643.jpg'),
(43, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '5b37a988e096315c95e8c35f3a1566e0.jpg'),
(44, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'db91d6614bde4f2628905a9bd1f88946.jpg'),
(45, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'ca0a465ed2819fd903153daac17b2300.jpg'),
(46, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '6f0154ca590d996350434b92e41ac966.jpg'),
(47, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '6f18a01588c34e57420d9470346e5d28.jpg'),
(48, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '5fff65fbe1333640162298811cfe65aa.jpg'),
(49, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'aa51cae036af6a2187ea76f716ef1e0e.jpg'),
(50, 'Ananda Rafli', '081904035517', 1, 'NEMTAS', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'df79c873aaa2ba18094436de434dff93.jpg'),
(51, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'e0900357ddc288ea4f960818479af91f.jpg'),
(52, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '98dfe757ea299f6231728c8679fd78ad.jpg'),
(53, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '0e53c0d4fcf8f167f2760bce0eeb39cb.jpg'),
(54, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '72a760c6f982bcf4ce3363e1d0020c07.jpg'),
(55, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'b38563262ef48bf4ea314ea75ed56233.jpg'),
(56, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '703dc48193d75d024c98c7ec7ce7efb4.jpg'),
(57, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '27b0b85e7580a08a54e7552eb3d7a485.jpg'),
(58, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '6bf5adc86d4bee5cd9436efb0ec30a9d.jpg'),
(59, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '3119a25ec248ff9e51f97b46d21fb68d.jpg'),
(60, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'a786267c4d5b4947d887a342058b42ba.jpg'),
(61, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'a786267c4d5b4947d887a342058b42ba.jpg'),
(62, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '90ac9830021d756809f10259daa9ed99.jpg'),
(63, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '90ac9830021d756809f10259daa9ed99.jpg'),
(64, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '92f64f3c20453bb386709f207d369f2c.jpg'),
(65, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '92f64f3c20453bb386709f207d369f2c.jpg'),
(66, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '389608490f07dcf86418cdf522a5ef2d.jpg'),
(67, 'Ananda Rafli', '081904035517', 1, 'SMKN 6 Tangsel', 'Serpong Utara', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', 'f65969412b3ace62ca3112d975de2ea2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_peserta_tatil`
--

CREATE TABLE `db_peserta_tatil` (
  `id_peserta_tatil` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `pangkalan` text NOT NULL,
  `ranting` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `sertifikat_vaksin` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_peserta_tatil`
--

INSERT INTO `db_peserta_tatil` (`id_peserta_tatil`, `nama_lengkap`, `no_hp`, `jenis_kelamin`, `pangkalan`, `ranting`, `tempat_lahir`, `tanggal_lahir`, `email`, `penyakit`, `sertifikat_vaksin`) VALUES
(2, 'Ananda Rafli', '2147483647', 1, 'SMKN 6 Tangsel', 'Serpong', 'Bekasi', '2004-07-20', 'anandarafli385@gmail.com', 'ngudud', '145c908524b20d5565c459ff45428691.jpg');

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
  MODIFY `id_peserta_gelas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `db_peserta_pwc`
--
ALTER TABLE `db_peserta_pwc`
  MODIFY `id_peserta_pwc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `db_peserta_tatil`
--
ALTER TABLE `db_peserta_tatil`
  MODIFY `id_peserta_tatil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
