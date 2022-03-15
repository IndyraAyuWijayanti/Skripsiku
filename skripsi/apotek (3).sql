-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 01:23 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE `prediksi` (
  `id_prediksi` int(11) NOT NULL,
  `id_namaitem` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenisitem` int(11) NOT NULL,
  `tgl_prediksi` date NOT NULL,
  `bulan_prediksi` int(1) NOT NULL,
  `hasil_wma` int(11) NOT NULL,
  `mfe` int(11) NOT NULL,
  `mae` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `mape` int(11) NOT NULL,
  `rop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenisitem`
--

CREATE TABLE `tbl_jenisitem` (
  `id_jenisitem` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jenis_item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenisitem`
--

INSERT INTO `tbl_jenisitem` (`id_jenisitem`, `id_kategori`, `jenis_item`) VALUES
(1, 2, 'Obat Bebas'),
(2, 1, 'Obat Keras');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_namaitem` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `id_namaitem`, `nama_kategori`) VALUES
(1, 2, 'Demam'),
(2, 1, 'Analgesik Antipiretik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_namaobat`
--

CREATE TABLE `tbl_namaobat` (
  `id_namaitem` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenisitem` int(11) NOT NULL,
  `namaitem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_namaobat`
--

INSERT INTO `tbl_namaobat` (`id_namaitem`, `id_kategori`, `id_jenisitem`, `namaitem`) VALUES
(1, 2, 1, 'Panadol Extra'),
(2, 1, 2, 'Mixagrib');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id` int(11) NOT NULL,
  `id_namaitem` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenisitem` int(11) NOT NULL,
  `kode_item` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `bulan_tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id`, `id_namaitem`, `id_kategori`, `id_jenisitem`, `kode_item`, `jumlah`, `satuan`, `bulan_tahun`) VALUES
(436, 1, 2, 1, '8992695110602', 210, 'Tablet', '2019-07-19'),
(437, 1, 2, 1, '8992695110602', 230, 'Tablet', '2019-08-19'),
(438, 1, 2, 1, '8992695110602', 130, 'Tablet', '2019-09-19'),
(439, 1, 2, 1, '8992695110602', 130, 'Tablet', '2019-10-19'),
(440, 1, 2, 1, '8992695110602', 140, 'Tablet', '2019-11-19'),
(441, 1, 2, 1, '8992695110602', 190, 'Tablet', '2019-12-19'),
(442, 1, 2, 1, '8992695110602', 310, 'Tablet', '2020-01-20'),
(443, 1, 2, 1, '8992695110602', 160, 'Tablet', '2020-02-20'),
(444, 1, 2, 1, '8992695110602', 280, 'Tablet', '2020-03-20'),
(445, 1, 2, 1, '8992695110602', 170, 'Tablet', '2020-04-20'),
(446, 1, 2, 1, '8992695110602', 280, 'Tablet', '2020-05-20'),
(447, 1, 2, 1, '8992695110602', 200, 'Tablet', '2020-06-20'),
(448, 1, 2, 1, '8992695110602', 280, 'Tablet', '2020-07-20'),
(449, 1, 2, 1, '8992695110602', 470, 'Tablet', '2020-08-20'),
(450, 1, 2, 1, '8992695110602', 250, 'Tablet', '2020-09-20'),
(451, 1, 2, 1, '8992695110602', 190, 'Tablet', '2020-10-20'),
(452, 1, 2, 1, '8992695110602', 170, 'Tablet', '2020-11-20'),
(453, 1, 2, 1, '8992695110602', 380, 'Tablet', '2020-12-20'),
(454, 1, 2, 1, '8992695110602', 210, 'Tablet', '2021-01-01'),
(455, 1, 2, 1, '8992695110602', 200, 'Tablet', '2021-02-01'),
(456, 1, 2, 1, '8992695110602', 360, 'Tablet', '2021-03-01'),
(457, 1, 2, 1, '8992695110602', 430, 'Tablet', '2021-04-01'),
(458, 1, 2, 1, '8992695110602', 420, 'Tablet', '2021-05-01'),
(459, 1, 2, 1, '8992695110602', 480, 'Tablet', '2021-06-01'),
(460, 1, 2, 1, '8992695110602', 840, 'Tablet', '2021-07-01'),
(461, 1, 2, 1, '8992695110602', 570, 'Tablet', '2021-08-01'),
(462, 2, 1, 1, 'SANMOL TAB', 148, 'Tablet', '2019-03-01'),
(463, 2, 1, 1, 'SANMOL TAB', 138, 'Tablet', '2019-04-19'),
(464, 2, 1, 1, 'SANMOL TAB', 146, 'Tablet', '2019-05-19'),
(465, 2, 1, 1, 'SANMOL TAB', 302, 'Tablet', '2019-06-19'),
(466, 2, 1, 1, 'SANMOL TAB', 208, 'Tablet', '2019-07-19'),
(467, 2, 1, 1, 'SANMOL TAB', 236, 'Tablet', '2019-08-19'),
(468, 2, 1, 1, 'SANMOL TAB', 212, 'Tablet', '2019-09-19'),
(469, 2, 1, 1, 'SANMOL TAB', 236, 'Tablet', '2019-10-19'),
(470, 2, 1, 1, 'SANMOL TAB', 136, 'Tablet', '2019-11-19'),
(471, 2, 1, 1, 'SANMOL TAB', 284, 'Tablet', '2019-12-19'),
(472, 2, 1, 1, 'SANMOL TAB', 252, 'Tablet', '2020-01-20'),
(473, 2, 1, 1, 'SANMOL TAB', 200, 'Tablet', '2020-02-20'),
(474, 2, 1, 1, 'SANMOL TAB', 260, 'Tablet', '2020-03-20'),
(475, 2, 1, 1, 'SANMOL TAB', 224, 'Tablet', '2020-04-20'),
(476, 2, 1, 1, 'SANMOL TAB', 184, 'Tablet', '2020-05-20'),
(477, 2, 1, 1, 'SANMOL TAB', 156, 'Tablet', '2020-06-20'),
(478, 2, 1, 1, 'SANMOL TAB', 336, 'Tablet', '2020-07-20'),
(479, 2, 1, 1, 'SANMOL TAB', 248, 'Tablet', '2020-08-20'),
(480, 2, 1, 1, 'SANMOL TAB', 208, 'Tablet', '2020-09-20'),
(481, 2, 1, 1, 'SANMOL TAB', 228, 'Tablet', '2020-10-20'),
(482, 2, 1, 1, 'SANMOL TAB', 368, 'Tablet', '2020-11-20'),
(483, 2, 1, 1, 'SANMOL TAB', 444, 'Tablet', '2020-12-20'),
(484, 2, 1, 1, 'SANMOL TAB', 692, 'Tablet', '2021-01-01'),
(485, 2, 1, 1, 'SANMOL TAB', 316, 'Tablet', '2021-02-01'),
(486, 2, 1, 1, 'SANMOL TAB', 428, 'Tablet', '2021-03-01'),
(487, 2, 1, 1, 'SANMOL TAB', 328, 'Tablet', '2021-04-01'),
(488, 2, 1, 1, 'SANMOL TAB', 436, 'Tablet', '2021-05-01'),
(489, 2, 1, 1, 'SANMOL TAB', 924, 'Tablet', '2021-06-01'),
(490, 2, 1, 1, 'SANMOL TAB', 1900, 'Tablet', '2021-07-01'),
(491, 2, 1, 1, 'SANMOL TAB', 888, 'Tablet', '2021-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`, `is_active`) VALUES
(14, 'indyuser', 'indyra.wijayanti@gmail.com', 'indyuser', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', '2022-01-12 01:14:40', 'Y'),
(16, 'admin1', 'admin@gmail.com', 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2022-01-17 13:25:18', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id_prediksi`);

--
-- Indexes for table `tbl_jenisitem`
--
ALTER TABLE `tbl_jenisitem`
  ADD PRIMARY KEY (`id_jenisitem`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_namaobat`
--
ALTER TABLE `tbl_namaobat`
  ADD PRIMARY KEY (`id_namaitem`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_namaitem` (`id_namaitem`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id_prediksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenisitem`
--
ALTER TABLE `tbl_jenisitem`
  MODIFY `id_jenisitem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_namaobat`
--
ALTER TABLE `tbl_namaobat`
  MODIFY `id_namaitem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
