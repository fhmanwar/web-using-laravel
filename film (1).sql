-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2018 pada 06.11
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `poster` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `films`
--

INSERT INTO `films` (`id`, `nama`, `deskripsi`, `tanggal`, `poster`, `sinopsis`, `created_at`, `updated_at`) VALUES
(1, 'Ant-Man', 'Ant-Man adalah sebuah film superhero Amerika Serikat yang akan dirilis pada 17 Juli 2015. Film ini dibintangi oleh Paul Rudd, Evangeline Lilly, Corey Stoll, Bobby Cannavale, Michael Peña, Judy Greer, Tip \"T.I\" Harris, David Dastmalchian, Wood Harris, Jordi Mollà, dan Michael Douglas.  Ant-Man diadakan premier dunia di Los Angeles pada 29 Juni, 2015, dan dirilis di Amerika Utara pada 17 Juli 2015, dalam 3D dan IMAX 3D. Sekuel film ini, yang berjudul Ant-Man and the Wasp, dijadwalkan akan dirilis pada tanggal 6 Juli 2018.', '2018-07-07', 'https://upload.wikimedia.org/wikipedia/id/7/75/Ant-Man_poster.jpg', 'Pada tahun 1989, ilmuwan Hank Pym mengundurkan diri dari S.H.I.E.L.D. setelah menemukan bahwa mereka berusaha untuk meniru teknologi menyusut Ant-Man nya. Percaya teknologi ini berbahaya, Pym bersumpah untuk menyembunyikannya selama ia hidup. Pada hari ini, putri terasing Pym, Hope van Dyne, dan mantan anak didik, Darren Cross, telah memaksa dia keluar dari perusahaan sendiri. Cross hampir menyempurnakan setelan baju penyusut miliknya sendiri, Yellowjacket, yang mengangetkan Pym.  Setelah dibebaskan dari penjara, pencuri ulung Scott Lang bergerak dengan teman satu sel lamanya, Luis. Mantan istri Lang, Maggie. yang bertunangan dengan polisi Paxton-setuju untuk membiarkan Lang melihat putrinya Cassie jika ia memberikan dukungan kepada anaknya. Tidak dapat menahan pekerjaan karena catatan kriminalnya, Lang setuju untuk bergabung dengan Luis kru dan melakukan perampokan uang. Lang menerobos masuk ke dalam rumah dan menerobosnya dengan aman, tetapi ia hanya menemukan setelan kostum motor tua, yang kemudia ia bawa', '2018-07-03 22:40:15', '2018-07-03 22:40:15'),
(2, 'The Incredibles 2', 'Ant-Man adalah sebuah film superhero Amerika Serikat yang akan dirilis pada 17 Juli 2015. Film ini dibintangi oleh Paul Rudd, Evangeline Lilly, Corey Stoll, Bobby Cannavale, Michael Peña, Judy Greer, Tip \"T.I\" Harris, David Dastmalchian, Wood Harris, Jordi Mollà, dan Michael Douglas.  Ant-Man diadakan premier dunia di Los Angeles pada 29 Juni, 2015, dan dirilis di Amerika Utara pada 17 Juli 2015, dalam 3D dan IMAX 3D. Sekuel film ini, yang berjudul Ant-Man and the Wasp, dijadwalkan akan dirilis pada tanggal 6 Juli 2018.', '2018-07-12', 'https://upload.wikimedia.org/wikipedia/id/7/75/Ant-Man_poster.jpg', 'Pada tahun 1989, ilmuwan Hank Pym mengundurkan diri dari S.H.I.E.L.D. setelah menemukan bahwa mereka berusaha untuk meniru teknologi menyusut Ant-Man nya. Percaya teknologi ini berbahaya, Pym bersumpah untuk menyembunyikannya selama ia hidup. Pada hari ini, putri terasing Pym, Hope van Dyne, dan mantan anak didik, Darren Cross, telah memaksa dia keluar dari perusahaan sendiri. Cross hampir menyempurnakan setelan baju penyusut miliknya sendiri, Yellowjacket, yang mengangetkan Pym.  Setelah dibebaskan dari penjara, pencuri ulung Scott Lang bergerak dengan teman satu sel lamanya, Luis. Mantan istri Lang, Maggie. yang bertunangan dengan polisi Paxton-setuju untuk membiarkan Lang melihat putrinya Cassie jika ia memberikan dukungan kepada anaknya. Tidak dapat menahan pekerjaan karena catatan kriminalnya, Lang setuju untuk bergabung dengan Luis kru dan melakukan perampokan uang. Lang menerobos masuk ke dalam rumah dan menerobosnya dengan aman, tetapi ia hanya menemukan setelan kostum motor tua, yang kemudia ia bawa', '2018-07-04 01:39:13', '2018-07-04 01:39:13');

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
(3, '2018_02_07_073456_creats_films_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'azammadani1@gmail.com', '$2y$10$iALiLz5pzYwlCjH/FRoITOyT5Q5LMnKUxyaYdge6F/CT7cZh/TrwK', 'admin', '5xQdyVU58iyeIZvJCvOlai8JLUCdO8Oy99aZiq36HpIpVkQ0BIfZpjMGths7', '2018-07-03 22:30:54', '2018-07-03 22:30:54'),
(2, 'Ismael Hettinger', 'lionel.swaniawski@yahoo.com', '$2y$10$FrlAHjTSvpHX18idTfG6IOCuz6upmRW6oH1KxdSyJY.PFKLXG36w2', 'users', NULL, '2018-07-03 22:30:55', '2018-07-03 22:30:55'),
(3, 'Ruben Wilkinson', 'bahringer.branson@schneider.org', '$2y$10$75tUgMtiAUOusUAs9xShnOuq06PGspJPHZwF.wnkamuZA0TxTX2TO', 'users', NULL, '2018-07-03 22:30:55', '2018-07-03 22:30:55'),
(4, 'Dameon Schmitt', 'rahsaan.trantow@bailey.com', '$2y$10$oDg2z08vFoFEmlOjUPTBquxX3IHmSuC6OGPwtVj1VJYtWu9RBjIAW', 'users', NULL, '2018-07-03 22:30:55', '2018-07-03 22:30:55'),
(5, 'Dolly Daniel', 'reta42@yahoo.com', '$2y$10$eRAbKb43OYe40X3VwW7WeeuqHm2TeemQfDprdekP4C7IKU2H1tOA.', 'users', NULL, '2018-07-03 22:30:55', '2018-07-03 22:30:55'),
(6, 'George Hamill', 'willis.renner@hartmann.com', '$2y$10$cResrkBxzN4QpRYEnlucZOcH11aEepLmJKh5FmhR1kJbt6geU.Kk2', 'users', NULL, '2018-07-03 22:30:55', '2018-07-03 22:30:55'),
(7, 'Prof. Justen Cartwright', 'geovany47@balistreri.com', '$2y$10$LEKuRLC7OdsmAqbgoeXXEeAVbWxfWHySdqx407jOEfsvT00xsb64S', 'users', NULL, '2018-07-03 22:30:56', '2018-07-03 22:30:56'),
(8, 'Hanna Schiller', 'rosalyn.johnson@sipes.com', '$2y$10$0MIN4wWZfvd4emcBU2veJuQWdTS3CiW2UAJtKORf6QA5kSUpyyf0.', 'users', NULL, '2018-07-03 22:30:56', '2018-07-03 22:30:56'),
(9, 'Tyrese Heidenreich II', 'shemar.lakin@nader.net', '$2y$10$5wcgjviz3zJUCnR1mKDAiuJxx9/mohzA5nTk5mYh.DWE.Kn25YRVu', 'users', NULL, '2018-07-03 22:30:56', '2018-07-03 22:30:56'),
(10, 'Otho Murray', 'trinity.hills@prohaska.com', '$2y$10$D2WhN0O0tLlmFXSnfjHHxO2hkfd/Frgy9vVnj8j/byaIvjTqvIEm.', 'users', NULL, '2018-07-03 22:30:56', '2018-07-03 22:30:56'),
(11, 'Gaetano Treutel Jr.', 'rodrick87@hotmail.com', '$2y$10$l/HSx5/Y/DhosBP6Flfiu.m1O8iwScbwvpjitSTdgIqF.4dcfV.o.', 'users', NULL, '2018-07-03 22:30:57', '2018-07-03 22:30:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `films`
--
ALTER TABLE `films`
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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
