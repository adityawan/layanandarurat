-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2018 pada 08.05
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pld`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `balakar`
--

CREATE TABLE `balakar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `balakar`
--

INSERT INTO `balakar` (`id`, `nama`, `nomor`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Markas Komando Balakar Pramuka', '081350395548', 'Jl. Pramuka No.3, Gn. Kelua, Samarinda Ulu, Kota Samarinda', '2018-10-01 21:38:19', '2018-10-01 21:39:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_16_050249_polisi', 1),
(4, '2018_09_16_125935_admin', 2),
(5, '2018_09_16_130106_rumah_sakit', 2),
(6, '2018_09_16_130131_pemadam_kebakaran', 2),
(7, '2018_09_16_130152_pengguna', 2),
(8, '2018_09_16_130207_saran', 2),
(9, '2018_10_02_035045_puskesmas', 3),
(10, '2018_10_02_035055_balakar', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemadam_kebakaran`
--

CREATE TABLE `pemadam_kebakaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemadam_kebakaran`
--

INSERT INTO `pemadam_kebakaran` (`id`, `nama`, `nomor`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Dharma Wanita Persatuan Kantor Pemadam Kebakaran', '(0541) 742492', 'Jl. Mulawarman No.14, Karang Mumus, Samarinda Kota, Kota Samarinda', '2018-09-19 04:29:40', '2018-09-19 04:29:40'),
(2, 'Pemadam Kebakaran Kota Samarinda (Posko 9)', '(0541) 260035', 'Simpang Tiga, Kec. Loa Janan Ilir, Kota Samarinda', '2018-10-01 21:35:41', '2018-10-01 21:35:41'),
(3, 'Pemadam Kebakaran Kota Samarinda (Posko 5)', '(0541) 262150', 'Jl. Sultan Hasanuddin, Baqa, Samarinda Seberang, Kota Samarinda', '2018-10-01 21:36:24', '2018-10-01 21:36:24'),
(4, 'Pemadam Kebakaran Kota Samrinda (Posko 10)', '(0541) 742492', 'Loa Bakung, Sungai Kunjang, Kota Samarinda', '2018-10-01 21:36:54', '2018-10-01 21:36:54'),
(5, 'Pemadam Kebakaran Kota Samarinda (Posko 3)', '(0541) 742492', 'Air Putih, Samarinda Ulu, Kota Samarinda', '2018-10-01 21:37:34', '2018-10-01 21:37:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'aditya', '1212', 'septaaditya2@gmail.com', NULL, NULL),
(2, 'ada', '1212', 'ada@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `polisi`
--

CREATE TABLE `polisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `polisi`
--

INSERT INTO `polisi` (`id`, `nama`, `alamat`, `nomor`, `created_at`, `updated_at`) VALUES
(1, 'Polresta Samarinda', 'Jl. Slamet Riyadi No.1, Karang Asam Ulu, Sungai Kunjang, Kota Samarinda', '(0541) 742434', '2018-09-16 05:42:13', '2018-09-16 05:42:13'),
(2, 'Polsekta Samarinda Utara', 'Jl. D.I. Panjaitan, Mugirejo, Kec. Sungai Pinang, Kota Samarinda', '(0541) 743543', '2018-10-01 21:08:56', '2018-10-01 21:09:40'),
(3, 'Polsekta Samarinda Ilir', 'Jl. Bhayangkara No.3, Bugis, Samarinda Kota, Kota Samarinda', '(0541) 7080079', '2018-10-01 21:10:23', '2018-10-01 21:10:23'),
(4, 'Polsekta Samarinda Ulu', 'Jl. Juanda 110, Sidodadi, Samarinda Ulu, Kota Samarinda', '(0541) 743542', '2018-10-01 21:10:57', '2018-10-01 21:10:57'),
(5, 'Polsekta Samarinda Seberang', 'Jl. Sultan Hasanuddin, Baqa, Samarinda Seberang, Kota Samarinda', '(0541) 260528', '2018-10-01 21:12:06', '2018-10-01 21:12:06'),
(6, '33', '22', '2', '2018-10-03 05:47:20', '2018-10-03 05:47:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`id`, `nama`, `nomor`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Puskesmas Harapan Baru', '(0541) 260039', 'Jl. Kurnia Makmur No.45, Harapan Baru, Kec. Loa Janan Ilir, Kota Samarinda', '2018-10-01 21:29:49', '2018-10-01 21:29:49'),
(2, 'Pukesmas Trauma Center', '085246175041', 'Jl. Cipto Mangunkusumo, Simpang Tiga, Kec. Loa Janan Ilir, Kota Samarinda', '2018-10-01 21:30:21', '2018-10-01 21:30:21'),
(3, 'Puskesmas Loa Bakung', '(0541) 272851', 'Jl. Jakarta No.18, Loa Bakung, Sungai Kunjang, Kota Samarinda', '2018-10-01 21:30:46', '2018-10-01 21:30:46'),
(4, 'Puskesmas Karang Asam', '(0541) 6294242', 'Jl. Slamet Riyadi No.67, Karang Asam Ilir, Sungai Kunjang, Kota Samarinda', '2018-10-01 21:31:34', '2018-10-01 21:31:34'),
(5, 'UPTD. Puskesmas Pasundan', '(0541) 738937', 'Jl. Pasundan, Jawa, Samarinda Ulu, Kota Samarinda', '2018-10-01 21:32:02', '2018-10-01 21:32:02'),
(6, 'Puskesmas Kampung Baqa', '(0541) 263890', 'Jl. la Madu Keleng No.106, Baqa, Samarinda Seberang, Kota Samarinda', '2018-10-01 21:32:24', '2018-10-01 21:32:24'),
(7, 'UPTD Puskesmas Mangkupalas', '(0541) 261489', 'Jl. Mas Penghulu No.67, RT.08, Mesjid, Samarinda Seberang, Kota Samarinda', '2018-10-01 21:32:52', '2018-10-01 21:32:52'),
(8, 'Puskesmas Wonorejo', '(0541) 7062327', 'Jl. Cendana, Tlk. Lerong Ulu, Sungai Kunjang, Kota Samarinda', '2018-10-01 21:33:27', '2018-10-01 21:33:27'),
(9, 'Puskesmas Samarinda Kota', '081262118250', 'Jl. Bhayangkara No.3, Bugis, Samarinda Kota, Kota Samarinda', '2018-10-01 21:33:52', '2018-10-01 21:33:52'),
(10, 'Puskesmas Sidomulyo', '(0541) 736044', 'Jl. Jelawat Gang VI, Sidodamai, Samarinda Ilir, Kota Samarinda', '2018-10-01 21:34:31', '2018-10-01 21:34:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama`, `nomor`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'RSUD H. A. Wahab Sjahranie', '(0541) 738118', 'Jl. Palang Merah No.1, Sidodadi, Samarinda Ulu, Kota Samarinda', '2018-09-19 04:21:18', '2018-09-19 04:21:18'),
(2, 'RS Samarinda Medika Citra', '(0541) 727300', 'Jl. Kadrie Oening No.86 RT. 35, Air Putih, Samarinda Ulu, Kota Samarinda', '2018-09-19 04:24:29', '2018-09-19 04:30:55'),
(3, 'RSUD Inche Abdoel Moeis', '(0541) 7030423', 'Jl. H. A. M. Rifaddin No.1, Harapan Baru, Kec. Loa Janan Ilir, Kota Samarinda', '2018-10-01 21:22:49', '2018-10-01 21:22:49'),
(4, 'RS Bersalin Ria Kencana', '(0541) 746809', 'Jl. Letnan Jend. Suprapto No.1, Gn. Kelua, Samarinda Ulu, Kota Samarinda', '2018-10-01 21:23:50', '2018-10-01 21:23:50'),
(5, 'RS Ibu & Anak H. Thaha Bakrie', '(0541) 742191', 'Jl. Pangeran Hidayatullah No. 11, Pelabuhan, Samarinda Kota, Kota Samarinda', '2018-10-01 21:24:52', '2018-10-01 21:24:52'),
(6, 'RS Ibu & Anak Aisyiah Samarinda', '(0541) 741961', 'Jl. P. Hidayatullah No.64, Pelabuhan, Samarinda Kota, Kota Samarinda', '2018-10-01 21:25:43', '2018-10-01 21:25:43'),
(7, 'RS Siaga Ramania', '(0541) 739772', 'Jl. Ramania No.3, Sidodadi, Samarinda Ulu, Kota Samarinda', '2018-10-01 21:26:38', '2018-10-01 21:26:38'),
(8, 'RS Dirgahayu', '(0541) 742161', 'Jl. Gunung Merbabu No.62, Jawa, Samarinda Ulu, Kota Samarinda', '2018-10-01 21:27:23', '2018-10-01 21:27:23'),
(9, 'RS Haji Darjad', '(0541) 732609', 'Jl. Dahlia No.4, Bugis, Samarinda Kota, Kota Samarinda', '2018-10-01 21:28:12', '2018-10-01 21:28:12'),
(10, 'RS Bhakti Nugraha', '(0541) 741363', 'Jl. Basuki Rahmat No.50, Bugis, Samarinda Kota, Kota Samarinda', '2018-10-01 21:28:54', '2018-10-01 21:28:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(10) UNSIGNED NOT NULL,
  `isi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `isi`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'Bagus', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a@gmail.com', NULL, '$2y$10$NUtjcXL8ZBrjIZCMnxRugu22rNaunlQxUFjfXuKwFg/vmvJI3dfTK', 'yxJwHgT02Dm21FJCYfrI5xD4DTCceomfQ13DYtIKsxvTMY38AG7g6pYPz63C', '2018-09-16 04:53:10', '2018-09-16 04:53:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `balakar`
--
ALTER TABLE `balakar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemadam_kebakaran`
--
ALTER TABLE `pemadam_kebakaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `polisi`
--
ALTER TABLE `polisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saran_pengguna_id_foreign` (`pengguna_id`);

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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `balakar`
--
ALTER TABLE `balakar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemadam_kebakaran`
--
ALTER TABLE `pemadam_kebakaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `polisi`
--
ALTER TABLE `polisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD CONSTRAINT `saran_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
