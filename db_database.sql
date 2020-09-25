-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2020 pada 05.08
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_detail_lowongan`
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
-- Struktur dari tabel `geny_dokumen`
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
-- Struktur dari tabel `geny_failed_jobs`
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
-- Struktur dari tabel `geny_jenjang_pendidikan`
--

CREATE TABLE `geny_jenjang_pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_kategori_lowongan`
--

CREATE TABLE `geny_kategori_lowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `geny_kategori_lowongan`
--

INSERT INTO `geny_kategori_lowongan` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi (TI)', '2020-08-27 21:59:30', '2020-08-27 21:59:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_lamaran`
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
-- Struktur dari tabel `geny_lowongan`
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
-- Dumping data untuk tabel `geny_lowongan`
--

INSERT INTO `geny_lowongan` (`id`, `id_perusahaan`, `judul`, `id_kategori_lowongan`, `waktu_posting`, `salary`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ullam et.', 1, '2020-08-28 04:59:31', '17900845.00', 'Eos ullam laborum quo.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(2, 2, 'Harum veritatis.', 1, '2020-08-28 04:59:31', '31198379.00', 'Error et nam qui incidunt.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(3, 2, 'Sunt distinctio sint.', 1, '2020-08-28 04:59:31', '30898925.00', 'Reprehenderit eveniet vel aliquid.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(4, 2, 'Quos minima eius.', 1, '2020-08-28 04:59:31', '34323389.00', 'Sit pariatur fugiat voluptatem magnam qui ea.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(5, 3, 'Ex reiciendis ad.', 1, '2020-08-28 04:59:31', '53943016.00', 'Blanditiis excepturi ut voluptatem.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(6, 3, 'Sint veniam et.', 1, '2020-08-28 04:59:31', '69697679.00', 'Atque impedit eligendi ut.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(7, 3, 'Perferendis non.', 1, '2020-08-28 04:59:31', '75048227.00', 'Ut beatae aut magnam.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(8, 3, 'Voluptatibus aliquam enim.', 1, '2020-08-28 04:59:31', '12568098.00', 'Suscipit qui voluptatem tenetur sed.', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(9, 4, 'Quibusdam nisi.', 1, '2020-08-28 04:59:32', '19193705.00', 'Natus itaque voluptatum deserunt quam impedit repellendus.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(10, 4, 'Nisi eligendi.', 1, '2020-08-28 04:59:32', '16550901.00', 'Vitae soluta alias commodi fugiat.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(11, 4, 'Est fugiat facere.', 1, '2020-08-28 04:59:32', '93107723.00', 'Iure exercitationem deserunt eos blanditiis.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(12, 4, 'Ut veritatis.', 1, '2020-08-28 04:59:32', '81170035.00', 'Cum modi molestias quaerat ea veritatis.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(13, 5, 'Ut qui.', 1, '2020-08-28 04:59:32', '27497514.00', 'Et quaerat maxime autem provident in.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(14, 5, 'Autem dicta.', 1, '2020-08-28 04:59:32', '47122929.00', 'Maiores eos eaque consequatur cumque.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(15, 5, 'Hic sint.', 1, '2020-08-28 04:59:32', '22466596.00', 'Sed et nihil sint eos.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(16, 5, 'Est velit quia.', 1, '2020-08-28 04:59:32', '64089942.00', 'Quis laboriosam deserunt sit enim nostrum rerum.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(17, 6, 'Dolorem assumenda.', 1, '2020-08-28 04:59:32', '95673147.00', 'Aut vel quis repudiandae.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(18, 6, 'Animi cum impedit.', 1, '2020-08-28 04:59:32', '16104231.00', 'Accusamus deserunt veniam voluptas sed ea et.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(19, 6, 'Rerum earum eum.', 1, '2020-08-28 04:59:32', '99337094.00', 'Et magni labore qui repellat sint minima.', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(20, 6, 'Unde vero vel.', 1, '2020-08-28 04:59:32', '41528403.00', 'Consequatur blanditiis quisquam qui recusandae ullam commodi.', '2020-08-27 21:59:33', '2020-08-27 21:59:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_migrations`
--

CREATE TABLE `geny_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `geny_migrations`
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
-- Struktur dari tabel `geny_password_resets`
--

CREATE TABLE `geny_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_pelamar`
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
-- Dumping data untuk tabel `geny_pelamar`
--

INSERT INTO `geny_pelamar` (`id`, `id_user`, `nama_lengkap`, `gelar_depan`, `gelar_belakang`, `tgl_lahir`, `jen_kel`, `no_hp`, `no_ktp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 2, 'pelamar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-27 21:59:29', '2020-08-27 21:59:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_perusahaan`
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
-- Dumping data untuk tabel `geny_perusahaan`
--

INSERT INTO `geny_perusahaan` (`id`, `id_user`, `nama`, `email`, `penanggung_jawab`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL, 'perusahaan', NULL, NULL, '2020-08-27 21:59:30', '2020-08-27 21:59:30'),
(2, 4, 'Howell-Reichel', 'marcellus.hammes@example.com', 'Dr. Bridget Torp IV', '1-857-394-6854 x501', '78285 Jettie Keys\nBoscoburgh, MN 47718-0691', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(3, 5, 'O\'Reilly-Bruen', 'yrunte@example.org', 'Valentin Wiza', '+1.303.577.2094', '88527 Fritsch Glen\nDorthychester, NE 59253-3856', '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(4, 6, 'Zieme PLC', 'cali07@example.com', 'Nikolas Waelchi III', '+1-628-478-9285', '9399 Lorenzo Fork\nPort Lucyton, FL 64694', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(5, 7, 'Prohaska LLC', 'paucek.ramona@example.org', 'Dr. Nels Keebler', '1-842-413-6199', '301 Asha Row Apt. 199\nAshlynnburgh, TN 90107', '2020-08-27 21:59:32', '2020-08-27 21:59:32'),
(6, 8, 'Bayer-Johns', 'torphy.blaise@example.net', 'Rose West V', '+1-724-998-7242', '93233 Wyman Centers\nWest Lonzoberg, MA 94388-6984', '2020-08-27 21:59:32', '2020-08-27 21:59:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_rkeahlian`
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
-- Struktur dari tabel `geny_rkompetensi`
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
-- Struktur dari tabel `geny_rpekerjaan`
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
-- Struktur dari tabel `geny_rpendidikan`
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
-- Struktur dari tabel `geny_users`
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
-- Dumping data untuk tabel `geny_users`
--

INSERT INTO `geny_users` (`id`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'root', 'admin@mail.id', '2020-08-27 21:59:28', '$2y$10$u1eVz4BlkmahBQMdfxTKzeMZ5WXzHUy9t06Jko92EyiY31AbxTmPe', 'admin', 'K1bHqitLTD', 1, '2020-08-27 21:59:29', '2020-08-27 21:59:29'),
(2, 'pelamar', 'pelamar@mail.id', '2020-08-27 21:59:29', '$2y$10$B2jkxWDYWeb.SB2MGR.q0e1Sy5CSH5Now2zighTIUwAgmWgevvx6i', 'pelamar', 'eotISeybeK', 1, '2020-08-27 21:59:29', '2020-08-27 21:59:29'),
(3, 'perusahaan', 'perusahaan@mail.id', '2020-08-27 21:59:29', '$2y$10$6wgOwa.r7fXwXu4GQZVnmerM0aa0tnf.rNgGm0aYWaD/CqrOYhWSO', 'perusahaan', '6YK4R87ad0', 1, '2020-08-27 21:59:29', '2020-08-27 21:59:29'),
(4, 'Dr. Reid Schmitt', 'xkunde@example.org', '2020-08-27 21:59:30', '$2y$10$za4m7Ynt.zT2fsY1/i/CFevlgF/KJiqKd62q8XNly2A0FsrJYfms6', 'perusahaan', 'xMpB6f1oht', 1, '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(5, 'Erica Smith', 'gdooley@example.com', '2020-08-27 21:59:30', '$2y$10$S7C.9K5AiDEXX3671qf8RuCH8.B1cVv81MIBznbBe5piUEvmUunGK', 'perusahaan', 'rIB5114iRI', 1, '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(6, 'Modesta Gerlach', 'lowe.norene@example.org', '2020-08-27 21:59:30', '$2y$10$EA3r1dVBmpk.QH/SK7cieOJeqX0sgV4lTFUiQc7TOxZj4OGqv0Lk2', 'perusahaan', 'X9GfnJneAT', 1, '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(7, 'Prof. Forrest Miller', 'xhyatt@example.net', '2020-08-27 21:59:30', '$2y$10$ue97uwRKA1uk.zLtrAIdu.EcmIrjsesCiSIvY3B4lC/w3p6vq7oYq', 'perusahaan', 'xEorz2oSKN', 1, '2020-08-27 21:59:31', '2020-08-27 21:59:31'),
(8, 'Giovanna Anderson', 'trogahn@example.org', '2020-08-27 21:59:30', '$2y$10$OTOYXxK5lIPDX86j6iLbtORs0nPccNO0U/0PeS4VFE1zHu2toMLZi', 'perusahaan', 'Z3sYVobI7a', 1, '2020-08-27 21:59:31', '2020-08-27 21:59:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `geny_user_perusahaan`
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
-- Indeks untuk tabel `geny_detail_lowongan`
--
ALTER TABLE `geny_detail_lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_detail_lowongan_id_lowongan_foreign` (`id_lowongan`);

--
-- Indeks untuk tabel `geny_dokumen`
--
ALTER TABLE `geny_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_dokumen_id_pelamar_foreign` (`id_pelamar`);

--
-- Indeks untuk tabel `geny_failed_jobs`
--
ALTER TABLE `geny_failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `geny_jenjang_pendidikan`
--
ALTER TABLE `geny_jenjang_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `geny_kategori_lowongan`
--
ALTER TABLE `geny_kategori_lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `geny_lamaran`
--
ALTER TABLE `geny_lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_lamaran_id_lowongan_foreign` (`id_lowongan`),
  ADD KEY `geny_lamaran_id_pelamar_foreign` (`id_pelamar`);

--
-- Indeks untuk tabel `geny_lowongan`
--
ALTER TABLE `geny_lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_lowongan_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `geny_lowongan_id_kategori_lowongan_foreign` (`id_kategori_lowongan`);

--
-- Indeks untuk tabel `geny_migrations`
--
ALTER TABLE `geny_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `geny_password_resets`
--
ALTER TABLE `geny_password_resets`
  ADD KEY `geny_password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `geny_pelamar`
--
ALTER TABLE `geny_pelamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_pelamar_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `geny_perusahaan`
--
ALTER TABLE `geny_perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_perusahaan_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `geny_rkeahlian`
--
ALTER TABLE `geny_rkeahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rkeahlian_id_pelamar_foreign` (`id_pelamar`);

--
-- Indeks untuk tabel `geny_rkompetensi`
--
ALTER TABLE `geny_rkompetensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rkompetensi_id_pelamar_foreign` (`id_pelamar`);

--
-- Indeks untuk tabel `geny_rpekerjaan`
--
ALTER TABLE `geny_rpekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rpekerjaan_id_pelamar_foreign` (`id_pelamar`);

--
-- Indeks untuk tabel `geny_rpendidikan`
--
ALTER TABLE `geny_rpendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_rpendidikan_id_pelamar_foreign` (`id_pelamar`),
  ADD KEY `geny_rpendidikan_id_jenjang_foreign` (`id_jenjang`);

--
-- Indeks untuk tabel `geny_users`
--
ALTER TABLE `geny_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `geny_users_username_unique` (`username`),
  ADD UNIQUE KEY `geny_users_email_unique` (`email`);

--
-- Indeks untuk tabel `geny_user_perusahaan`
--
ALTER TABLE `geny_user_perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `geny_user_perusahaan_id_perusahaan_foreign` (`id_perusahaan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `geny_detail_lowongan`
--
ALTER TABLE `geny_detail_lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_dokumen`
--
ALTER TABLE `geny_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_failed_jobs`
--
ALTER TABLE `geny_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_jenjang_pendidikan`
--
ALTER TABLE `geny_jenjang_pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_kategori_lowongan`
--
ALTER TABLE `geny_kategori_lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `geny_lamaran`
--
ALTER TABLE `geny_lamaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_lowongan`
--
ALTER TABLE `geny_lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `geny_migrations`
--
ALTER TABLE `geny_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `geny_pelamar`
--
ALTER TABLE `geny_pelamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `geny_perusahaan`
--
ALTER TABLE `geny_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `geny_rkeahlian`
--
ALTER TABLE `geny_rkeahlian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_rkompetensi`
--
ALTER TABLE `geny_rkompetensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_rpekerjaan`
--
ALTER TABLE `geny_rpekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_rpendidikan`
--
ALTER TABLE `geny_rpendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `geny_users`
--
ALTER TABLE `geny_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `geny_user_perusahaan`
--
ALTER TABLE `geny_user_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `geny_detail_lowongan`
--
ALTER TABLE `geny_detail_lowongan`
  ADD CONSTRAINT `geny_detail_lowongan_id_lowongan_foreign` FOREIGN KEY (`id_lowongan`) REFERENCES `geny_lowongan` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_dokumen`
--
ALTER TABLE `geny_dokumen`
  ADD CONSTRAINT `geny_dokumen_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_lamaran`
--
ALTER TABLE `geny_lamaran`
  ADD CONSTRAINT `geny_lamaran_id_lowongan_foreign` FOREIGN KEY (`id_lowongan`) REFERENCES `geny_lowongan` (`id`),
  ADD CONSTRAINT `geny_lamaran_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_lowongan`
--
ALTER TABLE `geny_lowongan`
  ADD CONSTRAINT `geny_lowongan_id_kategori_lowongan_foreign` FOREIGN KEY (`id_kategori_lowongan`) REFERENCES `geny_kategori_lowongan` (`id`),
  ADD CONSTRAINT `geny_lowongan_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `geny_perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_pelamar`
--
ALTER TABLE `geny_pelamar`
  ADD CONSTRAINT `geny_pelamar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `geny_users` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_perusahaan`
--
ALTER TABLE `geny_perusahaan`
  ADD CONSTRAINT `geny_perusahaan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `geny_users` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_rkeahlian`
--
ALTER TABLE `geny_rkeahlian`
  ADD CONSTRAINT `geny_rkeahlian_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_rkompetensi`
--
ALTER TABLE `geny_rkompetensi`
  ADD CONSTRAINT `geny_rkompetensi_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_rpekerjaan`
--
ALTER TABLE `geny_rpekerjaan`
  ADD CONSTRAINT `geny_rpekerjaan_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_rpendidikan`
--
ALTER TABLE `geny_rpendidikan`
  ADD CONSTRAINT `geny_rpendidikan_id_jenjang_foreign` FOREIGN KEY (`id_jenjang`) REFERENCES `geny_jenjang_pendidikan` (`id`),
  ADD CONSTRAINT `geny_rpendidikan_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `geny_pelamar` (`id`);

--
-- Ketidakleluasaan untuk tabel `geny_user_perusahaan`
--
ALTER TABLE `geny_user_perusahaan`
  ADD CONSTRAINT `geny_user_perusahaan_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `geny_perusahaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
