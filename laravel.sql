-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 12:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `geny_detail_lowongan`
--

CREATE TABLE `geny_detail_lowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_lowongan` bigint(20) UNSIGNED NOT NULL,
  `kualifikasi_lowongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_dokumen`
--

CREATE TABLE `geny_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelamar` bigint(20) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_failed_jobs`
--

CREATE TABLE `geny_failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_jenjang_pendidikan`
--

CREATE TABLE `geny_jenjang_pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_kategori_lowongan`
--

CREATE TABLE `geny_kategori_lowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geny_kategori_lowongan`
--

INSERT INTO `geny_kategori_lowongan` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geny_lamaran`
--

CREATE TABLE `geny_lamaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_lowongan` bigint(20) UNSIGNED NOT NULL,
  `id_pelamar` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `verifikator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_verifikasi` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_lowongan`
--

CREATE TABLE `geny_lowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori_lowongan` bigint(20) UNSIGNED NOT NULL,
  `waktu_posting` datetime NOT NULL,
  `salary` decimal(13,2) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geny_lowongan`
--

INSERT INTO `geny_lowongan` (`id`, `id_perusahaan`, `judul`, `id_kategori_lowongan`, `waktu_posting`, `salary`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 1, 'Android Programmer', 1, '2020-08-24 13:01:27', '3500000.00', 'Menjadi android programmer menggunakan java', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geny_migrations`
--

CREATE TABLE `geny_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geny_migrations`
--

INSERT INTO `geny_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_03_090623_create_perusahaan_table', 1),
(5, '2020_08_03_091006_create_user_perusahaan_table', 1),
(6, '2020_08_03_091121_create_kategori_lowongan_table', 1),
(7, '2020_08_03_091216_create_lowongan_table', 1),
(8, '2020_08_03_092415_create_detail_lowongan_table', 1),
(9, '2020_08_03_092641_create_pelamar_table', 1),
(10, '2020_08_03_093014_create_dokumen_table', 1),
(11, '2020_08_03_093109_create_jenjang_pendidikan_table', 1),
(12, '2020_08_03_093111_create_rpendidikan_table', 1),
(13, '2020_08_03_093320_create_rpekerjaan_table', 1),
(14, '2020_08_03_093442_create_rkeahlian_table', 1),
(15, '2020_08_03_093716_create_rkompetensi_table', 1),
(16, '2020_08_03_095649_create_lamaran_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `geny_password_resets`
--

CREATE TABLE `geny_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_pelamar`
--

CREATE TABLE `geny_pelamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_depan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jen_kel` enum('l','p') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geny_pelamar`
--

INSERT INTO `geny_pelamar` (`id`, `id_user`, `nama_lengkap`, `gelar_depan`, `gelar_belakang`, `tgl_lahir`, `jen_kel`, `no_hp`, `no_ktp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 2, 'FajarFtr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-24 00:22:33', '2020-08-24 00:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `geny_perusahaan`
--

CREATE TABLE `geny_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geny_perusahaan`
--

INSERT INTO `geny_perusahaan` (`id`, `id_user`, `nama`, `email`, `penanggung_jawab`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'abCompany', NULL, NULL, '2020-08-23 23:05:22', '2020-08-23 23:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `geny_rkeahlian`
--

CREATE TABLE `geny_rkeahlian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelamar` bigint(20) UNSIGNED NOT NULL,
  `nama_keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persentase` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_rkompetensi`
--

CREATE TABLE `geny_rkompetensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelamar` bigint(20) UNSIGNED NOT NULL,
  `nama_kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_rpekerjaan`
--

CREATE TABLE `geny_rpekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelamar` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jabatan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_rpendidikan`
--

CREATE TABLE `geny_rpendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelamar` bigint(20) UNSIGNED NOT NULL,
  `tahun` year(4) NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenjang` bigint(20) UNSIGNED NOT NULL,
  `nilai_akhir` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geny_users`
--

CREATE TABLE `geny_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geny_users`
--

INSERT INTO `geny_users` (`id`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'abCompany', 'fajarfaturrahman06@gmail.com', '2020-08-23 23:11:15', '$2y$10$BfgfvtNrhB7UzJpfe3vFuOjF.hKVF3DfOGlFD8fnw8m4DcdEWEyv6', 'perusahaan', NULL, 1, '2020-08-23 23:05:21', '2020-08-23 23:11:15'),
(2, 'FajarFtr', 'fajarfaturrahman-1498a5@inbox.mailtrap.io', '2020-08-24 00:23:54', '$2y$10$NAVyewF7tlKMoS8tfvGEFOLg2BFSi/0NFIbhKrK7ydlptj.J6I9PG', 'pelamar', NULL, 1, '2020-08-24 00:22:32', '2020-08-24 00:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `geny_user_perusahaan`
--

CREATE TABLE `geny_user_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geny_detail_lowongan`
--
ALTER TABLE `geny_detail_lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_detail_lowongan_id_lowongan_foreign` (`id_lowongan`);

--
-- Indexes for table `geny_dokumen`
--
ALTER TABLE `geny_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_dokumen_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `geny_failed_jobs`
--
ALTER TABLE `geny_failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geny_jenjang_pendidikan`
--
ALTER TABLE `geny_jenjang_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geny_kategori_lowongan`
--
ALTER TABLE `geny_kategori_lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geny_lamaran`
--
ALTER TABLE `geny_lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_lamaran_id_lowongan_foreign` (`id_lowongan`),
  ADD KEY `geny_lamaran_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `geny_lowongan`
--
ALTER TABLE `geny_lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_lowongan_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `geny_lowongan_id_kategori_lowongan_foreign` (`id_kategori_lowongan`);

--
-- Indexes for table `geny_migrations`
--
ALTER TABLE `geny_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geny_password_resets`
--
ALTER TABLE `geny_password_resets`
  ADD KEY `geny_password_resets_email_index` (`email`);

--
-- Indexes for table `geny_pelamar`
--
ALTER TABLE `geny_pelamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_pelamar_id_user_foreign` (`id_user`);

--
-- Indexes for table `geny_perusahaan`
--
ALTER TABLE `geny_perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_perusahaan_id_user_foreign` (`id_user`);

--
-- Indexes for table `geny_rkeahlian`
--
ALTER TABLE `geny_rkeahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rkeahlian_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `geny_rkompetensi`
--
ALTER TABLE `geny_rkompetensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rkompetensi_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `geny_rpekerjaan`
--
ALTER TABLE `geny_rpekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rpekerjaan_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `geny_rpendidikan`
--
ALTER TABLE `geny_rpendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rpendidikan_id_pelamar_foreign` (`id_pelamar`),
  ADD KEY `geny_rpendidikan_id_jenjang_foreign` (`id_jenjang`);

--
-- Indexes for table `geny_users`
--
ALTER TABLE `geny_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `geny_users_username_unique` (`username`),
  ADD UNIQUE KEY `geny_users_email_unique` (`email`);

--
-- Indexes for table `geny_user_perusahaan`
--
ALTER TABLE `geny_user_perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_user_perusahaan_id_perusahaan_foreign` (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geny_detail_lowongan`
--
ALTER TABLE `geny_detail_lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_dokumen`
--
ALTER TABLE `geny_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_failed_jobs`
--
ALTER TABLE `geny_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_jenjang_pendidikan`
--
ALTER TABLE `geny_jenjang_pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_kategori_lowongan`
--
ALTER TABLE `geny_kategori_lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geny_lamaran`
--
ALTER TABLE `geny_lamaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_lowongan`
--
ALTER TABLE `geny_lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `geny_migrations`
--
ALTER TABLE `geny_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `geny_pelamar`
--
ALTER TABLE `geny_pelamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geny_perusahaan`
--
ALTER TABLE `geny_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geny_rkeahlian`
--
ALTER TABLE `geny_rkeahlian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_rkompetensi`
--
ALTER TABLE `geny_rkompetensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_rpekerjaan`
--
ALTER TABLE `geny_rpekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_rpendidikan`
--
ALTER TABLE `geny_rpendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geny_users`
--
ALTER TABLE `geny_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geny_user_perusahaan`
--
ALTER TABLE `geny_user_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `geny_detail_lowongan`
--
ALTER TABLE `geny_detail_lowongan`
  ADD CONSTRAINT `geny_detail_lowongan_id_lowongan_foreign` FOREIGN KEY (`id_lowongan`) REFERENCES `geny_lowongan` (`id`);

--
-- Constraints for table `geny_dokumen`
--
ALTER TABLE `geny_dokumen`
  ADD CONSTRAINT `geny_dokumen_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Constraints for table `geny_lamaran`
--
ALTER TABLE `geny_lamaran`
  ADD CONSTRAINT `geny_lamaran_id_lowongan_foreign` FOREIGN KEY (`id_lowongan`) REFERENCES `geny_lowongan` (`id`),
  ADD CONSTRAINT `geny_lamaran_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Constraints for table `geny_lowongan`
--
ALTER TABLE `geny_lowongan`
  ADD CONSTRAINT `geny_lowongan_id_kategori_lowongan_foreign` FOREIGN KEY (`id_kategori_lowongan`) REFERENCES `geny_kategori_lowongan` (`id`),
  ADD CONSTRAINT `geny_lowongan_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `geny_perusahaan` (`id`);

--
-- Constraints for table `geny_pelamar`
--
ALTER TABLE `geny_pelamar`
  ADD CONSTRAINT `geny_pelamar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `geny_users` (`id`);

--
-- Constraints for table `geny_perusahaan`
--
ALTER TABLE `geny_perusahaan`
  ADD CONSTRAINT `geny_perusahaan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `geny_users` (`id`);

--
-- Constraints for table `geny_rkeahlian`
--
ALTER TABLE `geny_rkeahlian`
  ADD CONSTRAINT `geny_rkeahlian_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Constraints for table `geny_rkompetensi`
--
ALTER TABLE `geny_rkompetensi`
  ADD CONSTRAINT `geny_rkompetensi_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Constraints for table `geny_rpekerjaan`
--
ALTER TABLE `geny_rpekerjaan`
  ADD CONSTRAINT `geny_rpekerjaan_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Constraints for table `geny_rpendidikan`
--
ALTER TABLE `geny_rpendidikan`
  ADD CONSTRAINT `geny_rpendidikan_id_jenjang_foreign` FOREIGN KEY (`id_jenjang`) REFERENCES `geny_jenjang_pendidikan` (`id`),
  ADD CONSTRAINT `geny_rpendidikan_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Constraints for table `geny_user_perusahaan`
--
ALTER TABLE `geny_user_perusahaan`
  ADD CONSTRAINT `geny_user_perusahaan_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `geny_perusahaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
