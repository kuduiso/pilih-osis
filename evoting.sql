-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.33 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_evoting
CREATE DATABASE IF NOT EXISTS `db_evoting` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_evoting`;

-- membuang struktur untuk table db_evoting.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_evoting.failed_jobs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- membuang struktur untuk table db_evoting.kandidat
CREATE TABLE IF NOT EXISTS `kandidat` (
  `id_kandidat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_kandidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis_kandidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kandidat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas_kandidat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_kandidat` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_kandidat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kandidat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman_kandidat` text COLLATE utf8mb4_unicode_ci,
  `visi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kandidat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_evoting.kandidat: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `kandidat` DISABLE KEYS */;
INSERT INTO `kandidat` (`id_kandidat`, `no_kandidat`, `nis_kandidat`, `nama_kandidat`, `tempat_lahir`, `tanggal_lahir`, `kelas_kandidat`, `jk_kandidat`, `telp_kandidat`, `alamat_kandidat`, `pengalaman_kandidat`, `visi`, `misi`, `foto`, `created_at`, `updated_at`) VALUES
	(1, '123', '1231', 'Raga Kandidat1', 'Konoha', '2021-09-24', 'XII TKJ 2', 'l', '08123123123', 'JL. Sumatra', NULL, 'Asd', 'asd', 'foto_kandidat_614d1fc7ad51220210924074559.png', '2021-09-24 07:45:59', '2021-09-24 07:46:11'),
	(2, '11', '1236', 'Kandidat 2', 'Amegakure', '2021-09-24', 'XII AK 1', 'p', '0123123123', 'asd', 'asd', 'asd', 'asd', 'foto_kandidat_614d207542cc120210924074853.jpg', '2021-09-24 07:48:53', '2021-09-24 07:48:53');
/*!40000 ALTER TABLE `kandidat` ENABLE KEYS */;

-- membuang struktur untuk table db_evoting.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_evoting.migrations: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_08_19_000000_create_failed_jobs_table', 1),
	(2, '2021_09_17_072105_create_users_table', 1),
	(8, '2021_09_17_080056_create_users_table', 2),
	(15, '2021_09_20_055833_create_kandidat_table', 3),
	(20, '2021_09_22_045149_create_pemilih_table', 4),
	(23, '2021_09_22_081641_create_voting_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table db_evoting.pemilih
CREATE TABLE IF NOT EXISTS `pemilih` (
  `id_pemilih` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nis_pemilih` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_pemilih` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_pemilih` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemilih`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_evoting.pemilih: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `pemilih` DISABLE KEYS */;
INSERT INTO `pemilih` (`id_pemilih`, `nis_pemilih`, `nama_pemilih`, `kelas_pemilih`, `jk_pemilih`, `no_token`, `status`, `created_at`, `updated_at`) VALUES
	(1, '1232', 'pemilih1', 'XII TKJ 2', 'l', 'FJ8W4I', 0, '2021-09-24 07:46:46', '2021-09-24 07:46:46'),
	(2, '1233', 'Pemilih2', 'XII AK 1', 'p', 'DF85N5', 0, '2021-09-24 07:47:14', '2021-09-24 07:47:14'),
	(3, '1234', 'Pemilih 3', 'XI AK 2', 'p', 'AF1XWL', 0, '2021-09-24 07:47:41', '2021-09-24 07:47:41'),
	(4, '1235', 'Pemilih 4', 'XII MM 1', 'l', 'JYEVDG', 0, '2021-09-24 07:48:00', '2021-09-24 07:48:00');
/*!40000 ALTER TABLE `pemilih` ENABLE KEYS */;

-- membuang struktur untuk table db_evoting.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_evoting.users: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `nama_user`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'master admin', 'admin2021@admin.com', '$2y$10$vokdTRTD22srSXNOmCibjOO1zAEzvrykJ/BDGq3.cJ7VkF8SM2ONC', 'master', 'ccazt9xGytRIIsQzk4gZaTD6HrGDyskbWYWO4Ovvt75oAndHU5V3ZgMCcmkI', '2021-09-18 18:59:51', '2021-09-20 04:56:07'),
	(2, 'coba100', 'coba100@admin.com', '$2y$10$Yl5.DbuYWM7lezH1oByEzu/bYNJQxpnhNMDyC52TFdGoWwO08b8gK', 'admin', NULL, '2021-09-24 07:45:00', '2021-09-24 07:45:12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- membuang struktur untuk table db_evoting.voting
CREATE TABLE IF NOT EXISTS `voting` (
  `id_voting` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kandidat` int(10) unsigned NOT NULL,
  `id_pemilih` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_voting`),
  KEY `voting_id_kandidat_foreign` (`id_kandidat`),
  KEY `voting_id_pemilih_foreign` (`id_pemilih`),
  CONSTRAINT `voting_id_kandidat_foreign` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`) ON DELETE CASCADE,
  CONSTRAINT `voting_id_pemilih_foreign` FOREIGN KEY (`id_pemilih`) REFERENCES `pemilih` (`id_pemilih`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_evoting.voting: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `voting` DISABLE KEYS */;
/*!40000 ALTER TABLE `voting` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
