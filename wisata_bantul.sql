-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 04:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata_bantul`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `alternatif_id` int(10) NOT NULL,
  `kriteria_id` int(10) NOT NULL,
  `wisata_id` int(10) DEFAULT NULL,
  `alternatif_nilai` int(2) DEFAULT NULL,
  `alternatif_created` datetime DEFAULT current_timestamp(),
  `alternatif_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`alternatif_id`, `kriteria_id`, `wisata_id`, `alternatif_nilai`, `alternatif_created`, `alternatif_updated`) VALUES
(1, 1, 1, 9, '2023-03-12 17:30:24', '2023-03-13 03:58:21'),
(2, 1, 2, 9, '2023-03-12 17:30:36', '2023-03-12 17:58:57'),
(3, 1, 3, 9, '2023-03-12 17:30:51', '2023-03-12 17:58:57'),
(4, 1, 4, 1, '2023-03-12 17:31:00', '2023-03-12 17:58:57'),
(5, 1, 5, 9, '2023-03-12 17:31:14', '2023-03-12 17:58:57'),
(6, 1, 6, 9, '2023-03-13 03:32:49', '2023-03-13 03:58:44'),
(7, 2, 1, 5, '2023-03-12 17:32:34', '2023-03-13 03:59:10'),
(8, 2, 2, 5, '2023-03-12 17:32:44', '2023-03-13 03:59:33'),
(9, 2, 3, 3, '2023-03-12 17:32:54', '2023-03-13 03:59:53'),
(10, 2, 4, 1, '2023-03-12 17:33:12', '2023-03-13 04:00:25'),
(11, 2, 5, 5, '2023-03-12 17:33:37', '2023-03-13 04:00:34'),
(12, 2, 6, 5, '2023-03-13 03:40:47', '2023-03-13 04:01:38'),
(13, 3, 1, 7, '2023-03-12 17:34:54', '2023-03-13 04:01:55'),
(14, 3, 2, 7, '2023-03-12 17:35:04', '2023-03-13 04:02:20'),
(15, 3, 3, 7, '2023-03-12 17:35:20', '2023-03-13 04:02:32'),
(16, 3, 4, 1, '2023-03-12 17:35:29', '2023-03-13 04:02:46'),
(17, 3, 5, 7, '2023-03-12 17:35:38', '2023-03-13 04:02:59'),
(18, 3, 6, 7, '2023-03-13 03:40:47', '2023-03-13 04:03:15'),
(19, 4, 1, 3, '2023-03-12 17:36:56', '2023-03-13 04:04:15'),
(20, 4, 2, 3, '2023-03-12 17:37:10', '2023-03-13 04:04:25'),
(21, 4, 3, 1, '2023-03-12 17:37:20', '2023-03-13 04:04:38'),
(22, 4, 4, 1, '2023-03-12 17:37:30', '2023-03-13 04:04:50'),
(23, 4, 5, 1, '2023-03-12 17:37:39', '2023-03-13 04:05:04'),
(24, 4, 6, 3, '2023-03-13 03:40:47', '2023-03-13 04:05:51'),
(25, 5, 1, 3, '2023-03-12 17:38:57', '2023-03-13 04:06:34'),
(26, 5, 2, 3, '0000-00-00 00:00:00', '2023-03-13 04:06:44'),
(27, 5, 3, 1, '2023-03-12 17:39:18', '2023-03-13 04:06:55'),
(28, 5, 4, 1, '2023-03-12 17:39:27', '2023-03-13 04:07:05'),
(29, 5, 5, 1, '2023-03-12 17:39:41', '2023-03-13 04:07:16'),
(30, 5, 6, 3, '2023-03-13 03:40:47', '2023-03-13 04:07:38'),
(31, 6, 1, 3, '2023-03-12 17:40:50', '2023-03-13 04:07:53'),
(32, 6, 2, 3, '2023-03-12 17:41:02', '2023-03-13 04:08:04'),
(33, 6, 3, 3, '2023-03-12 17:41:14', '2023-03-13 04:08:16'),
(34, 6, 4, 1, '2023-03-12 17:41:23', '2023-03-13 04:08:25'),
(35, 6, 5, 3, '2023-03-12 17:41:32', '2023-03-13 04:08:36'),
(36, 6, 6, 3, '2023-03-13 03:40:47', '2023-03-13 04:08:50'),
(37, 7, 1, 2, '2023-03-12 17:42:45', '2023-03-13 04:09:22'),
(38, 7, 2, 2, '2023-03-12 17:42:53', '2023-03-13 04:09:45'),
(39, 7, 3, 2, '2023-03-12 17:43:04', '2023-03-13 04:09:56'),
(40, 7, 4, 1, '2023-03-12 17:43:14', '2023-03-13 04:10:07'),
(41, 7, 5, 2, '2023-03-12 17:43:28', '2023-03-13 04:10:34'),
(42, 7, 6, 2, '2023-03-13 03:40:47', '2023-03-13 04:10:45'),
(43, 8, 1, 3, '2023-03-12 17:44:55', '2023-03-13 04:10:52'),
(44, 8, 2, 3, '2023-03-12 17:45:07', '2023-03-13 04:10:57'),
(45, 8, 3, 2, '2023-03-12 17:45:17', '2023-03-13 04:11:02'),
(46, 8, 4, 1, '2023-03-12 17:45:26', '2023-03-13 04:11:08'),
(47, 8, 5, 3, '2023-03-12 17:45:40', '2023-03-13 04:11:13'),
(48, 8, 6, 3, '2023-03-13 03:40:47', '2023-03-13 04:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketetapan`
--

CREATE TABLE `tbl_ketetapan` (
  `ketetapan_id` int(10) NOT NULL,
  `ketetapan_nama` varchar(50) NOT NULL,
  `ketetapan_n` int(10) NOT NULL,
  `ketetapan_nilai` double NOT NULL,
  `ketetapan_created` datetime NOT NULL DEFAULT current_timestamp(),
  `ketetapan_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ketetapan`
--

INSERT INTO `tbl_ketetapan` (`ketetapan_id`, `ketetapan_nama`, `ketetapan_n`, `ketetapan_nilai`, `ketetapan_created`, `ketetapan_updated`) VALUES
(1, 'Nilai Random Index', 1, 0, '2019-01-25 21:44:24', '2019-01-25 21:44:29'),
(2, 'Nilai Random Index', 2, 0, '2019-01-25 21:44:40', '2019-01-25 21:44:40'),
(3, 'Nilai Random Index', 3, 0.58, '2019-01-25 21:45:00', '2019-01-25 21:45:00'),
(4, 'Nilai Random Index', 4, 0.9, '2019-01-25 21:45:12', '2019-01-25 21:45:12'),
(5, 'Nilai Random Index', 5, 1.12, '2019-01-25 21:45:23', '2019-01-25 21:45:39'),
(6, 'Nilai Random Index', 6, 1.24, '2019-01-25 21:46:14', '2019-01-25 21:46:14'),
(7, 'Nilai Random Index', 7, 1.32, '2019-01-25 21:46:27', '2019-01-25 21:46:27'),
(8, 'Nilai Random Index', 8, 1.41, '2019-01-25 21:46:38', '2019-01-25 21:46:38'),
(9, 'Nilai Random Index', 9, 1.45, '2019-01-25 21:46:54', '2019-01-25 21:46:54'),
(10, 'Nilai Random Index', 10, 1.49, '2019-01-25 21:47:05', '2019-01-25 21:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `kriteria_id` int(10) NOT NULL,
  `kriteria_nama` varchar(100) DEFAULT NULL,
  `kriteria_nilai` int(2) DEFAULT NULL,
  `kriteria_created` datetime DEFAULT current_timestamp(),
  `kriteria_creator` varchar(30) DEFAULT NULL,
  `kriteria_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kriteria_updater` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_nilai`, `kriteria_created`, `kriteria_creator`, `kriteria_updated`, `kriteria_updater`) VALUES
(1, 'Bahan Baku Kuliner', 9, '2019-01-25 15:09:52', 'admin', '2023-03-10 10:38:43', 'admin'),
(2, 'Destinasi dan Atraksi', 5, '2019-01-25 15:10:31', 'admin', '2023-03-10 10:38:56', 'admin'),
(3, 'Sumber Daya Manusia', 7, '2019-01-25 15:10:39', 'admin', '2023-03-10 10:39:00', 'admin'),
(4, 'Fasilitas', 3, '2023-03-10 10:38:15', 'admin', '2023-03-10 10:38:15', 'admin'),
(5, 'Akomodasi', 3, '2023-03-10 10:38:15', 'admin', '2023-03-10 10:38:15', 'admin'),
(6, 'Keamanan dan Kenyamanan', 3, '2023-03-10 10:38:15', 'admin', '2023-03-10 10:38:15', 'admin'),
(7, 'Pemasaran dan Sasaran', 3, '2023-03-10 10:38:15', 'admin', '2023-03-10 10:38:15', 'admin'),
(8, 'Aksebilitasi', 3, '2023-03-10 10:38:15', 'admin', '2023-03-10 10:38:15', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_fullname` varchar(200) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_level` enum('admin','nonadmin') DEFAULT 'nonadmin',
  `user_aktif` int(10) DEFAULT 0,
  `user_created` datetime DEFAULT current_timestamp(),
  `user_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_fullname`, `user_password`, `user_email`, `user_level`, `user_aktif`, `user_created`, `user_updated`) VALUES
(1, 'admin', 'Admin Dongs', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'admin', 1, '2019-01-25 11:30:40', '2019-01-25 13:39:18'),
(2, 'ardi', 'ardiana', 'ardi1234', 'ardiana@gmail.com', 'admin', 1, '2023-03-10 10:24:23', '2023-03-10 10:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `wisata_id` int(10) NOT NULL,
  `wisata_nama` varchar(100) DEFAULT NULL,
  `kode_wisata` varchar(4) NOT NULL,
  `wisata_alamat` text DEFAULT NULL,
  `wisata_created` datetime DEFAULT current_timestamp(),
  `wisata_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`wisata_id`, `wisata_nama`, `kode_wisata`, `wisata_alamat`, `wisata_created`, `wisata_updated`) VALUES
(1, 'Gua Selarong', 'A1', 'Bantul', '2019-01-25 15:40:21', '2023-03-12 00:12:34'),
(2, 'Taman Jati Larangan', 'A2', 'Bantul', '2019-01-25 15:40:21', '2023-03-12 00:13:03'),
(3, 'Air Terjun Banyunibo', 'A3', 'Bantul', '2019-01-25 15:40:21', '2023-03-12 00:13:27'),
(4, 'Pesona Alam Nggirli Cawan', 'A4', 'Bantul', '2019-01-26 09:46:29', '2023-03-12 00:13:49'),
(5, 'Polaman River Tubing', 'A5', 'Bantul', '2019-01-26 09:46:29', '2023-03-12 00:14:15'),
(6, 'Taman Kedung Asri', 'A6', 'Bantul', '2023-03-12 00:14:40', '2023-03-12 00:14:40'),
(7, 'Selopamioro Adventure Park', 'A7', 'Bantul', '2023-03-12 00:15:46', '2023-03-12 00:15:46'),
(8, 'Via Ferrata Selopamioro', 'A8', 'Bantul', '2023-03-12 00:17:19', '2023-03-12 00:17:19'),
(9, 'Pemandian Air Panas', 'A9', 'Bantul', '2023-03-12 00:17:50', '2023-03-12 00:17:50'),
(10, 'Pantai Parangtritis', 'A10', 'Bantul', '2023-03-12 00:18:17', '2023-03-12 00:18:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`alternatif_id`),
  ADD KEY `FK_kriteria_id` (`kriteria_id`),
  ADD KEY `FK_siswa_id` (`wisata_id`),
  ADD KEY `wisata_id` (`wisata_id`);

--
-- Indexes for table `tbl_ketetapan`
--
ALTER TABLE `tbl_ketetapan`
  ADD PRIMARY KEY (`ketetapan_id`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_nim` (`user_name`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`wisata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ketetapan`
--
ALTER TABLE `tbl_ketetapan`
  MODIFY `ketetapan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `kriteria_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `wisata_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD CONSTRAINT `tbl_alternatif_ibfk_1` FOREIGN KEY (`kriteria_id`) REFERENCES `tbl_kriteria` (`kriteria_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_alternatif_ibfk_2` FOREIGN KEY (`wisata_id`) REFERENCES `tbl_wisata` (`wisata_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
