-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 04:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `po_dewisri`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(10) NOT NULL,
  `no_bus` char(30) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `no_bus`, `kapasitas`, `fasilitas`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '324', 124324, 'sad', 'dsvd', '2018-07-15 09:45:43', '2018-07-15 09:45:43'),
(2, '123', 456, 'dd', 'ff', '2018-07-16 13:26:37', '2018-07-16 13:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(10) UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `group`, `menu`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'user,akses,siswa,alternatif,kriteria,crips,penilaian,laporan', 'admin full akses', '2017-11-18 03:20:03', '2017-12-03 05:56:12'),
(2, 'kesiswaan', 'penilaian', '-', '2017-12-03 04:45:45', '2017-12-09 07:28:59'),
(3, 'walikelas', 'penilaian', '-', '2017-12-03 04:45:57', '2017-12-03 05:14:28'),
(11, 'kepala_sekolah', 'laporan', '-', '2017-12-03 05:13:40', '2017-12-03 05:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(10) NOT NULL,
  `nominal` float DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `harga_lama` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `nominal`, `keterangan`, `created_at`, `updated_at`, `harga_lama`) VALUES
(1, 9000, 'lunas', '2018-07-15 08:52:05', '2018-07-15 08:52:05', 8000),
(2, 3000, 'belum', '2018-07-16 13:34:35', '2018-07-16 13:34:35', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` int(10) NOT NULL,
  `jam` varchar(30) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `jam`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '00:00', 'dwd', '2018-07-16 08:27:07', '2018-07-16 08:27:56'),
(2, '12:00', 'dfdfgf', '2018-07-16 13:33:47', '2018-07-16 13:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) NOT NULL,
  `nama` char(30) DEFAULT NULL,
  `kota_asal` int(11) DEFAULT NULL,
  `id_jam` int(11) DEFAULT NULL,
  `kota_tujuan` int(11) DEFAULT NULL,
  `id_harga` int(11) DEFAULT NULL,
  `id_bus` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `kota_asal`, `id_jam`, `kota_tujuan`, `id_harga`, `id_bus`, `created_at`, `updated_at`) VALUES
(1, 'aku', 2, 2, 1, 1, 1, '2018-07-15 14:27:06', '2018-07-18 16:18:53'),
(3, 'budi', 1, 1, 1, 2, 2, '2018-07-18 09:07:01', '2018-07-18 09:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(10) NOT NULL,
  `nama` char(30) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'jakarta', 'sdfds', '2018-07-16 13:34:47', '2018-07-16 13:34:47'),
(2, 'bali', 'fgfh', '2018-07-16 13:35:26', '2018-07-16 13:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `nama` char(30) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `password`, `no_ktp`, `tgl_lahir`, `jk`, `alamat`, `created_at`, `updated_at`) VALUES
(6, 'jaka', 'e10adc3949ba59abbe56e057f20f883e', '123', '2018-07-28', 'P', 'jakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_08_19_102739_create_users_table', 1),
(9, '2017_11_18_091937_create_siswas_table', 2),
(11, '2017_11_18_100432_create_hak_akses_table', 4),
(12, '2017_12_01_132638_create_kriterias_table', 5),
(13, '2017_12_02_034250_create_kriterias_table', 6),
(14, '2017_12_02_034551_create_kriterias_table', 7),
(15, '2017_12_02_042254_create_crips_table', 8),
(16, '2017_12_02_070929_create_alternatifs_table', 9),
(17, '2017_12_02_075551_create_nilai_alternatifs_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `rute` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `rute`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'serang-tng', 'fdfd', '2018-07-16 08:24:58', '2018-07-16 08:28:56'),
(2, 'jakarta-sby', 'sampai', '2018-07-16 08:26:42', '2018-07-16 13:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `tgl_berangkat` datetime DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `jml_penumpang` int(11) DEFAULT NULL,
  `total_harga` float DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `status` char(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_kategori`, `tgl_berangkat`, `id_member`, `jml_penumpang`, `total_harga`, `bukti_transfer`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-09-09 00:00:00', 1, 2, 1000, 'OK', 'y', '2018-07-15 15:10:20', '2018-07-15 15:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `username`, `password`, `group`, `created_at`, `updated_at`) VALUES
(1, '10102', 'Administrator', 'admin', '$2y$10$Gmkat619O8B3XqmkYUZ8he9N9fBCLq6jUczCHK/Pbppf04O2Vucbi', 'admin', '2017-08-19 09:32:29', '2017-08-19 09:32:29'),
(5, '10103', 'Manager', 'manager', '$2y$10$LOBnk4Ntt/aVZ6mTqWgQEOE3pSgKHqp9cEyI3i2W5zmg5vaGSY.Cy', 'manager', '2018-07-15 00:15:57', '2018-07-15 00:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
