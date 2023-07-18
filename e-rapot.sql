-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 19.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-rapot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikulers`
--

CREATE TABLE `ekstrakulikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ekstrakulikuler` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIP` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `NIP`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `no_telpon`, `jenis_kelamin`, `email`, `pendidikan_terakhir`, `created_at`, `updated_at`) VALUES
(1, 231231, 'Irfan Fadillah', 'Tangerang', '2023-07-25', 'Islam', 'Griya Serdang Indah Blok C.8 No.9\r\nGriya Serdang Indah Blok C.8 No.9', '081214805759', 'pria', 'admin@gmail.com', 'SMA', '2023-07-02 11:09:23', '2023-07-02 11:09:23'),
(2, 2345678, 'sri', 'Tangerang', '2023-07-19', 'Islam', 'Griya Serdang Indah Blok C.8 No.9\r\nGriya Serdang Indah Blok C.8 No.9', '081214805759', 'wanita', 'siapapun@gmail.com', 'S1', '2023-07-03 10:00:51', '2023-07-03 10:00:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_05_30_021633_create_siswas_table', 1),
(5, '2023_05_30_021941_create_gurus_table', 1),
(6, '2023_05_30_021957_create_kelas_table', 1),
(7, '2023_05_30_021960_create_users_table', 1),
(8, '2023_05_30_022012_create_mapels_table', 1),
(9, '2023_05_30_022104_create_tahun_aktifs_table', 1),
(10, '2023_05_30_022341_create_set_kelas_table', 1),
(11, '2023_05_30_022357_create_set_mapels_table', 1),
(12, '2023_05_30_022716_create_set_wali_kelas_table', 1),
(13, '2023_06_10_162457_create_muloks_table', 1),
(14, '2023_06_11_093117_create_sikaps_table', 1),
(15, '2023_06_11_093853_create_sub_mapels_table', 1),
(16, '2023_06_11_093945_create_sub_muloks_table', 1),
(17, '2023_06_11_094017_create_ekstrakulikulers_table', 1),
(18, '2023_06_11_094036_create_sekolahs_table', 1),
(19, '2023_06_11_094212_create_set_muloks_table', 1),
(20, '2023_06_11_094308_create_set_ekstrakulikulers_table', 1),
(21, '2023_06_11_094335_create_set_nilai_mapels_table', 1),
(22, '2023_06_11_094352_create_set_nilai_muloks_table', 1),
(23, '2023_06_11_094412_create_set_nilai_sikaps_table', 1),
(24, '2023_07_01_041249_add_fields_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `muloks`
--

CREATE TABLE `muloks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mulok` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `npsn` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_ekstrakulikulers`
--

CREATE TABLE `set_ekstrakulikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_ekstrakulikuler` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_kelas`
--

CREATE TABLE `set_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_ta` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_mapels`
--

CREATE TABLE `set_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mapel` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_ta` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_muloks`
--

CREATE TABLE `set_muloks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mulok` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_ta` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_nilai_mapels`
--

CREATE TABLE `set_nilai_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) NOT NULL,
  `id_mapel` bigint(20) UNSIGNED NOT NULL,
  `id_submapels` bigint(20) UNSIGNED NOT NULL,
  `nilai_fm1` int(11) DEFAULT NULL,
  `nilai_sm1` int(11) DEFAULT NULL,
  `nilai_fm2` int(11) DEFAULT NULL,
  `nilai_sm2` int(11) DEFAULT NULL,
  `nilai_fm3` int(11) DEFAULT NULL,
  `nilai_sm3` int(11) DEFAULT NULL,
  `nilai_fm4` int(11) DEFAULT NULL,
  `nilai_sm4` int(11) DEFAULT NULL,
  `nilai_fm5` int(11) DEFAULT NULL,
  `nilai_sm5` int(11) DEFAULT NULL,
  `nilai_fm6` int(11) DEFAULT NULL,
  `nilai_sm6` int(11) DEFAULT NULL,
  `nilai_rata` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_nilai_muloks`
--

CREATE TABLE `set_nilai_muloks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) NOT NULL,
  `id_mulok` bigint(20) UNSIGNED NOT NULL,
  `id_submulok` bigint(20) UNSIGNED NOT NULL,
  `nilai_fm1` int(11) DEFAULT NULL,
  `nilai_sm1` int(11) DEFAULT NULL,
  `nilai_fm2` int(11) DEFAULT NULL,
  `nilai_sm2` int(11) DEFAULT NULL,
  `nilai_fm3` int(11) DEFAULT NULL,
  `nilai_sm3` int(11) DEFAULT NULL,
  `nilai_fm4` int(11) DEFAULT NULL,
  `nilai_sm4` int(11) DEFAULT NULL,
  `nilai_fm5` int(11) DEFAULT NULL,
  `nilai_sm5` int(11) DEFAULT NULL,
  `nilai_fm6` int(11) DEFAULT NULL,
  `nilai_sm6` int(11) DEFAULT NULL,
  `nilai_rata` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_nilai_sikaps`
--

CREATE TABLE `set_nilai_sikaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) NOT NULL,
  `id_sikap` bigint(20) UNSIGNED NOT NULL,
  `nilai_fm1` int(11) DEFAULT NULL,
  `nilai_sm1` int(11) DEFAULT NULL,
  `nilai_fm2` int(11) DEFAULT NULL,
  `nilai_sm2` int(11) DEFAULT NULL,
  `nilai_fm3` int(11) DEFAULT NULL,
  `nilai_sm3` int(11) DEFAULT NULL,
  `nilai_fm4` int(11) DEFAULT NULL,
  `nilai_sm4` int(11) DEFAULT NULL,
  `nilai_fm5` int(11) DEFAULT NULL,
  `nilai_sm5` int(11) DEFAULT NULL,
  `nilai_fm6` int(11) DEFAULT NULL,
  `nilai_sm6` int(11) DEFAULT NULL,
  `nilai_rata` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_wali_kelas`
--

CREATE TABLE `set_wali_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_setkelas` bigint(20) UNSIGNED NOT NULL,
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `id_ta` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sikaps`
--

CREATE TABLE `sikaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sikap` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `nis` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `AGAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `no_ayah` varchar(255) DEFAULT NULL,
  `no_ibu` varchar(255) DEFAULT NULL,
  `tinggi_badan` varchar(255) NOT NULL,
  `berat_badan` varchar(255) NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `NAMA`, `nis`, `nisn`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `AGAMA`, `ALAMAT`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_ayah`, `no_ibu`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Fadillah', 11111111, 12345, 'pria', 'Serang', '2023-07-12', 'Islam', 'Griya Serdang Indah Blok C.8 No.9\r\nGriya Serdang Indah Blok C.8 No.9', 'Ashari', 'asd', 'Wiraswasta', 'Ibu Rumah Tangga', '081214805759', '081214805759', '122', '44', 'A', '2023-07-02 10:13:31', '2023-07-02 10:13:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_mapels`
--

CREATE TABLE `sub_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mapel` bigint(20) UNSIGNED NOT NULL,
  `nama_submapel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_muloks`
--

CREATE TABLE `sub_muloks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mulok` bigint(20) UNSIGNED NOT NULL,
  `nama_submulok` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_aktifs`
--

CREATE TABLE `tahun_aktifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED DEFAULT NULL,
  `id_guru` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_siswa`, `id_guru`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '$2y$10$GuIykvZ52coiP4oS4swZu.8ww9HOHObpHKYXPXGdWz.kb6ieesMbq', 'siswa', NULL, '2023-07-02 10:17:57', '2023-07-02 10:17:57'),
(2, NULL, 1, '$2y$10$LqZ2TzH97v6smcpo2IfTvOkXJz5g.wGmkBIvqh6x0XSwX38AAyynu', 'admin', NULL, '2023-07-02 11:21:37', '2023-07-02 11:21:37'),
(3, NULL, 1, '$2y$10$of9mIuKpy.J3waZseL7lDeHhZxPqw5Aoo/uX5xE058gNGI9QwoFUC', 'admin', NULL, '2023-07-03 09:51:26', '2023-07-03 09:51:26'),
(4, 1, NULL, '$2y$10$wua3KmwmnTNwhbAiWXPRyepCvHodKJihy1Ct6rKPd4yKEhEZNM46.', 'siswa', NULL, '2023-07-03 09:52:00', '2023-07-03 09:52:00'),
(5, NULL, 2, '$2y$10$LGgqNnq3ReKhbAkvJzOZ1.8egLjQgiBGSd9/rhSDOR4Wy2JyE01NO', 'admin', NULL, '2023-07-03 10:01:12', '2023-07-03 10:01:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_nip_unique` (`NIP`),
  ADD UNIQUE KEY `gurus_email_unique` (`email`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `muloks`
--
ALTER TABLE `muloks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sekolahs`
--
ALTER TABLE `sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `set_ekstrakulikulers`
--
ALTER TABLE `set_ekstrakulikulers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_ekstrakulikulers_id_ekstrakulikuler_foreign` (`id_ekstrakulikuler`),
  ADD KEY `set_ekstrakulikulers_id_siswa_foreign` (`id_siswa`);

--
-- Indeks untuk tabel `set_kelas`
--
ALTER TABLE `set_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_kelas_id_siswa_foreign` (`id_siswa`),
  ADD KEY `set_kelas_id_kelas_foreign` (`id_kelas`),
  ADD KEY `set_kelas_id_ta_foreign` (`id_ta`);

--
-- Indeks untuk tabel `set_mapels`
--
ALTER TABLE `set_mapels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_mapels_id_mapel_foreign` (`id_mapel`),
  ADD KEY `set_mapels_id_kelas_foreign` (`id_kelas`),
  ADD KEY `set_mapels_id_ta_foreign` (`id_ta`);

--
-- Indeks untuk tabel `set_muloks`
--
ALTER TABLE `set_muloks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_muloks_id_mulok_foreign` (`id_mulok`),
  ADD KEY `set_muloks_id_kelas_foreign` (`id_kelas`),
  ADD KEY `set_muloks_id_ta_foreign` (`id_ta`);

--
-- Indeks untuk tabel `set_nilai_mapels`
--
ALTER TABLE `set_nilai_mapels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_nilai_mapels_id_kelas_foreign` (`id_kelas`),
  ADD KEY `set_nilai_mapels_id_siswa_foreign` (`id_siswa`),
  ADD KEY `set_nilai_mapels_id_mapel_foreign` (`id_mapel`),
  ADD KEY `set_nilai_mapels_id_submapels_foreign` (`id_submapels`);

--
-- Indeks untuk tabel `set_nilai_muloks`
--
ALTER TABLE `set_nilai_muloks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_nilai_muloks_id_kelas_foreign` (`id_kelas`),
  ADD KEY `set_nilai_muloks_id_siswa_foreign` (`id_siswa`),
  ADD KEY `set_nilai_muloks_id_mulok_foreign` (`id_mulok`),
  ADD KEY `set_nilai_muloks_id_submulok_foreign` (`id_submulok`);

--
-- Indeks untuk tabel `set_nilai_sikaps`
--
ALTER TABLE `set_nilai_sikaps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_nilai_sikaps_id_kelas_foreign` (`id_kelas`),
  ADD KEY `set_nilai_sikaps_id_siswa_foreign` (`id_siswa`),
  ADD KEY `set_nilai_sikaps_id_sikap_foreign` (`id_sikap`);

--
-- Indeks untuk tabel `set_wali_kelas`
--
ALTER TABLE `set_wali_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_wali_kelas_id_setkelas_foreign` (`id_setkelas`),
  ADD KEY `set_wali_kelas_id_guru_foreign` (`id_guru`),
  ADD KEY `set_wali_kelas_id_ta_foreign` (`id_ta`);

--
-- Indeks untuk tabel `sikaps`
--
ALTER TABLE `sikaps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nis_unique` (`nis`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`);

--
-- Indeks untuk tabel `sub_mapels`
--
ALTER TABLE `sub_mapels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_mapels_id_mapel_foreign` (`id_mapel`);

--
-- Indeks untuk tabel `sub_muloks`
--
ALTER TABLE `sub_muloks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_muloks_id_mulok_foreign` (`id_mulok`);

--
-- Indeks untuk tabel `tahun_aktifs`
--
ALTER TABLE `tahun_aktifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id_guru_foreign` (`id_guru`),
  ADD KEY `users_id_siswa_foreign` (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `muloks`
--
ALTER TABLE `muloks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_ekstrakulikulers`
--
ALTER TABLE `set_ekstrakulikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_kelas`
--
ALTER TABLE `set_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_mapels`
--
ALTER TABLE `set_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_muloks`
--
ALTER TABLE `set_muloks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_nilai_mapels`
--
ALTER TABLE `set_nilai_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_nilai_muloks`
--
ALTER TABLE `set_nilai_muloks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_nilai_sikaps`
--
ALTER TABLE `set_nilai_sikaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_wali_kelas`
--
ALTER TABLE `set_wali_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sikaps`
--
ALTER TABLE `sikaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sub_mapels`
--
ALTER TABLE `sub_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sub_muloks`
--
ALTER TABLE `sub_muloks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tahun_aktifs`
--
ALTER TABLE `tahun_aktifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `set_ekstrakulikulers`
--
ALTER TABLE `set_ekstrakulikulers`
  ADD CONSTRAINT `set_ekstrakulikulers_id_ekstrakulikuler_foreign` FOREIGN KEY (`id_ekstrakulikuler`) REFERENCES `ekstrakulikulers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_ekstrakulikulers_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_kelas`
--
ALTER TABLE `set_kelas`
  ADD CONSTRAINT `set_kelas_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_kelas_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_kelas_id_ta_foreign` FOREIGN KEY (`id_ta`) REFERENCES `tahun_aktifs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_mapels`
--
ALTER TABLE `set_mapels`
  ADD CONSTRAINT `set_mapels_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_mapels_id_mapel_foreign` FOREIGN KEY (`id_mapel`) REFERENCES `mapels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_mapels_id_ta_foreign` FOREIGN KEY (`id_ta`) REFERENCES `tahun_aktifs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_muloks`
--
ALTER TABLE `set_muloks`
  ADD CONSTRAINT `set_muloks_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_muloks_id_mulok_foreign` FOREIGN KEY (`id_mulok`) REFERENCES `muloks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_muloks_id_ta_foreign` FOREIGN KEY (`id_ta`) REFERENCES `tahun_aktifs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_nilai_mapels`
--
ALTER TABLE `set_nilai_mapels`
  ADD CONSTRAINT `set_nilai_mapels_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_mapels_id_mapel_foreign` FOREIGN KEY (`id_mapel`) REFERENCES `mapels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_mapels_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_mapels_id_submapels_foreign` FOREIGN KEY (`id_submapels`) REFERENCES `sub_mapels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_nilai_muloks`
--
ALTER TABLE `set_nilai_muloks`
  ADD CONSTRAINT `set_nilai_muloks_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_muloks_id_mulok_foreign` FOREIGN KEY (`id_mulok`) REFERENCES `muloks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_muloks_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_muloks_id_submulok_foreign` FOREIGN KEY (`id_submulok`) REFERENCES `sub_muloks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_nilai_sikaps`
--
ALTER TABLE `set_nilai_sikaps`
  ADD CONSTRAINT `set_nilai_sikaps_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_sikaps_id_sikap_foreign` FOREIGN KEY (`id_sikap`) REFERENCES `sikaps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_nilai_sikaps_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_wali_kelas`
--
ALTER TABLE `set_wali_kelas`
  ADD CONSTRAINT `set_wali_kelas_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `gurus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_wali_kelas_id_setkelas_foreign` FOREIGN KEY (`id_setkelas`) REFERENCES `set_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `set_wali_kelas_id_ta_foreign` FOREIGN KEY (`id_ta`) REFERENCES `tahun_aktifs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_mapels`
--
ALTER TABLE `sub_mapels`
  ADD CONSTRAINT `sub_mapels_id_mapel_foreign` FOREIGN KEY (`id_mapel`) REFERENCES `mapels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_muloks`
--
ALTER TABLE `sub_muloks`
  ADD CONSTRAINT `sub_muloks_id_mulok_foreign` FOREIGN KEY (`id_mulok`) REFERENCES `muloks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `gurus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
