-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2023 pada 06.02
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

--
-- Dumping data untuk tabel `ekstrakulikulers`
--

INSERT INTO `ekstrakulikulers` (`id`, `nama_ekstrakulikuler`, `created_at`, `updated_at`) VALUES
(1, 'Pramuka', '2023-06-29 05:05:31', '2023-06-29 05:05:31');

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
(1, 231231, 'Aceh', 'serang', '2023-06-02', 'asdasdasd', 'Griya Serdang Indah Blok C.8 No.9\r\nGriya Serdang Indah Blok C.8 No.9', '081214805759', 'pria', 'admin@gmail.com', 'S1', '2023-06-29 04:49:10', '2023-06-29 04:49:10');

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

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'I - A', '2023-06-29 04:51:33', '2023-06-29 04:51:33'),
(2, 'I - B', '2023-06-29 04:51:51', '2023-06-29 04:51:51');

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

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`id`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Indonesia', '2023-06-29 04:52:40', '2023-06-29 04:52:40'),
(2, 'Matematika', '2023-06-29 04:52:47', '2023-06-29 04:52:47');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_30_021633_create_siswas_table', 1),
(6, '2023_05_30_021941_create_gurus_table', 1),
(7, '2023_05_30_021957_create_kelas_table', 1),
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
(23, '2023_06_11_094412_create_set_nilai_sikaps_table', 1);

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

--
-- Dumping data untuk tabel `muloks`
--

INSERT INTO `muloks` (`id`, `nama_mulok`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Jawa Serang', '2023-06-29 04:53:08', '2023-06-29 04:53:08');

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

--
-- Dumping data untuk tabel `sekolahs`
--

INSERT INTO `sekolahs` (`id`, `nama_sekolah`, `npsn`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'SD ELFATIH', '20606058', 'asdasdasdsa', '2023-06-29 05:06:11', '2023-06-29 05:06:11');

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

--
-- Dumping data untuk tabel `set_nilai_mapels`
--

INSERT INTO `set_nilai_mapels` (`id`, `id_kelas`, `id_siswa`, `semester`, `id_mapel`, `id_submapels`, `nilai_fm1`, `nilai_sm1`, `nilai_fm2`, `nilai_sm2`, `nilai_fm3`, `nilai_sm3`, `nilai_fm4`, `nilai_sm4`, `nilai_fm5`, `nilai_sm5`, `nilai_fm6`, `nilai_sm6`, `nilai_rata`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Semester 2', 2, 1, 43, 76, 56, 87, 42, 45, 76, 98, 54, 23, 41, 87, '60.67', '2023-06-29 05:06:52', '2023-06-29 20:16:00'),
(2, 2, 5, 'Semester 1', 1, 1, 65, 87, 78, 23, 78, 32, 32, 76, 34, 98, 67, 78, '62.33', '2023-06-29 05:07:32', '2023-06-29 20:20:50'),
(3, 1, 1, 'Semester 1', 1, 1, 55, 54, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '43.33', '2023-06-29 05:08:16', '2023-06-29 20:21:04');

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
  `nilai_fm1` int(11) NOT NULL,
  `nilai_sm1` int(11) NOT NULL,
  `nilai_fm2` int(11) NOT NULL,
  `nilai_sm2` int(11) NOT NULL,
  `nilai_fm3` int(11) NOT NULL,
  `nilai_sm3` int(11) NOT NULL,
  `nilai_fm4` int(11) NOT NULL,
  `nilai_sm4` int(11) NOT NULL,
  `nilai_fm5` int(11) NOT NULL,
  `nilai_sm5` int(11) NOT NULL,
  `nilai_fm6` int(11) NOT NULL,
  `nilai_sm6` int(11) NOT NULL,
  `nilai_rata` decimal(8,2) NOT NULL,
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
  `nilai_fm1` int(11) NOT NULL,
  `nilai_sm1` int(11) NOT NULL,
  `nilai_fm2` int(11) NOT NULL,
  `nilai_sm2` int(11) NOT NULL,
  `nilai_fm3` int(11) NOT NULL,
  `nilai_sm3` int(11) NOT NULL,
  `nilai_fm4` int(11) NOT NULL,
  `nilai_sm4` int(11) NOT NULL,
  `nilai_fm5` int(11) NOT NULL,
  `nilai_sm5` int(11) NOT NULL,
  `nilai_fm6` int(11) NOT NULL,
  `nilai_sm6` int(11) NOT NULL,
  `nilai_rata` decimal(8,2) NOT NULL,
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

--
-- Dumping data untuk tabel `sikaps`
--

INSERT INTO `sikaps` (`id`, `nama_sikap`, `created_at`, `updated_at`) VALUES
(1, 'Kejujuran', '2023-06-29 04:53:23', '2023-06-29 04:53:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `NIS` int(11) NOT NULL,
  `NISN` int(11) NOT NULL,
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

INSERT INTO `siswas` (`id`, `NAMA`, `NIS`, `NISN`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `AGAMA`, `ALAMAT`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_ayah`, `no_ibu`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Fadillah', 11111111, 1231231, 'pria', 'Tangerang', '2023-06-07', 'asdasdadas', 'Griya Serdang Indah Blok C.8 No.9\r\nGriya Serdang Indah Blok C.8 No.9', 'Ashari', 'asd', 'Wiraswasta', 'Ibu Rumah Tangga', '081214805759', '081214805759', '122', '67', 'A', '2023-06-29 04:00:14', '2023-06-29 04:00:14'),
(5, 'Irfan Fadillah', 1101191052, 7446122, 'pria', 'Tangerang', '2023-06-17', 'Islam', 'Griya Serdang Indah Blok C.8 No.9\r\nGriya Serdang Indah Blok C.8 No.9', 'Ashari', 'asd', 'Wiraswasta', 'Ibu Rumah Tangga', '081214805759', '-', '122', '67', 'A', '2023-06-29 04:04:05', '2023-06-29 04:04:05');

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

--
-- Dumping data untuk tabel `sub_mapels`
--

INSERT INTO `sub_mapels` (`id`, `id_mapel`, `nama_submapel`, `created_at`, `updated_at`) VALUES
(1, 2, 'Bilangan', '2023-06-29 04:53:35', '2023-06-29 04:53:35');

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

--
-- Dumping data untuk tabel `sub_muloks`
--

INSERT INTO `sub_muloks` (`id`, `id_mulok`, `nama_submulok`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bicara', '2023-06-29 05:02:58', '2023-06-29 05:02:58');

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

--
-- Dumping data untuk tabel `tahun_aktifs`
--

INSERT INTO `tahun_aktifs` (`id`, `tahun_ajaran`, `status`, `created_at`, `updated_at`) VALUES
(1, '2012/2013', 'Aktif', '2023-06-29 05:05:53', '2023-06-29 05:05:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD PRIMARY KEY (`email`);

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
  ADD UNIQUE KEY `siswas_nis_unique` (`NIS`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`NISN`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `muloks`
--
ALTER TABLE `muloks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sub_mapels`
--
ALTER TABLE `sub_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sub_muloks`
--
ALTER TABLE `sub_muloks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tahun_aktifs`
--
ALTER TABLE `tahun_aktifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
