-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: website_ftkd
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agendas`
--

DROP TABLE IF EXISTS `agendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agendas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Akan Datang','Terjadwal','Menunggu','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Terjadwal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendas`
--

LOCK TABLES `agendas` WRITE;
/*!40000 ALTER TABLE `agendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `agendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anggotas`
--

DROP TABLE IF EXISTS `anggotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anggotas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Anggota Baru','Anggota Biasa','Kader','Pengurus') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Anggota Baru',
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `anggotas_nim_unique` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggotas`
--

LOCK TABLES `anggotas` WRITE;
/*!40000 ALTER TABLE `anggotas` DISABLE KEYS */;
INSERT INTO `anggotas` VALUES (4,'Muhamad Ezra Haikal Purboyo','20230040301','Teknik Informatika','2023','Pengurus','Ketua Rayon','L','085143527543','anggota/hW4kTgwCrSPtoMemFz3tQmvvrW9iWvleqBz5XoRb.png','2026-07-23 21:43:32','2026-07-23 21:43:32'),(5,'Sehan Zaki Nurmilad','20230040042','Teknik Informatika','2023','Pengurus','Sekretaris','L','085771071385','anggota/Xw8S0UVJquoK1AdQB0UWNAS1MLhhfRe2r8Kk6Pjt.jpg','2026-07-23 21:51:06','2026-07-23 21:51:06'),(6,'Muhammad Hafiz Putra Sakti','20230040314','Teknik Informatika','2023','Pengurus','Ketua Bidang Kaderisasi','L','083878865042','anggota/YiqRBmK2YhacXgSCckqKGkzOWyL4Gi4wmyIbHDGB.jpg','2026-07-23 21:52:38','2026-07-23 21:52:38'),(8,'Hafi Fatih Agustian','2023004030','Teknik Sipil','2024','Pengurus','Ketua Biro Kaderisasi','L','085860991050','anggota/Al1Zxh4rcaFmLOZEBeauNi03ATNDJHHixL6v07qT.jpg','2026-07-23 21:54:21','2026-07-23 21:54:21');
/*!40000 ALTER TABLE `anggotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arsips`
--

DROP TABLE IF EXISTS `arsips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arsips` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('konstitusi','administrasi','musyawarah','laporan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arsips`
--

LOCK TABLES `arsips` WRITE;
/*!40000 ALTER TABLE `arsips` DISABLE KEYS */;
/*!40000 ALTER TABLE `arsips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita_terbaru_items`
--

DROP TABLE IF EXISTS `berita_terbaru_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `berita_terbaru_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `tanggal_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita_terbaru_items`
--

LOCK TABLES `berita_terbaru_items` WRITE;
/*!40000 ALTER TABLE `berita_terbaru_items` DISABLE KEYS */;
INSERT INTO `berita_terbaru_items` VALUES (1,'Pelatihan Kader Dasar','kaderisasi','sukses','sejhfksbefkbskef','1 bula yang lalu','https://news.detik.com/berita/d-8591481/polisi-belum-bisa-komunikasi-dengan-atlet-golf-jesslyn-di-ln-hp-tak-aktif','berita-terbaru/IV1VYhrcFpiLD75pPe3MoOHAtee3ZDlyb4pyMtL2.jpg',1,'2026-07-27 14:51:52','2026-07-27 14:53:14');
/*!40000 ALTER TABLE `berita_terbaru_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jejak_pergerakan_items`
--

DROP TABLE IF EXISTS `jejak_pergerakan_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jejak_pergerakan_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jejak_pergerakan_items`
--

LOCK TABLES `jejak_pergerakan_items` WRITE;
/*!40000 ALTER TABLE `jejak_pergerakan_items` DISABLE KEYS */;
INSERT INTO `jejak_pergerakan_items` VALUES (1,'Pelatihan Kader Dasar','PKD PMII Komisariat Universitas Nusa Putra','jejak-pergerakan/CSlKjXcbeOXmw6RWCBLELAXZM8L1Km8c4APw0ay6.jpg',1,'2026-07-27 12:29:43','2026-07-27 12:30:51'),(2,'Pelatihan Kader Dasar','PKD PMII Universitas Nusa Putra','jejak-pergerakan/8YY5cxZRg6dAMNChw9SBEJplqQowmGbrG3pXtmeb.jpg',2,'2026-07-27 12:30:11','2026-07-27 12:30:11');
/*!40000 ALTER TABLE `jejak_pergerakan_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kontens`
--

DROP TABLE IF EXISTS `kontens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kontens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kontens_section_unique` (`section`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kontens`
--

LOCK TABLES `kontens` WRITE;
/*!40000 ALTER TABLE `kontens` DISABLE KEYS */;
INSERT INTO `kontens` VALUES (1,'pembelajaran','Pembelajaran','Modul materi kaderisasi, PKD, dan MAPABA sedang disiapkan oleh pengurus rayon untuk menunjang proses pembelajaran.',NULL,NULL,'2026-07-23 21:35:36','2026-07-23 21:35:36'),(2,'visi','Visi Rayon FTKD','RAYON Fakultas Teknik Komputer dan Desain sebagai ruang kaderisasi yang dinamis, inklusif, dan solutif...',NULL,NULL,'2026-07-23 21:35:36','2026-07-23 21:35:36'),(3,'tujuan','Tujuan PMII','Terbentuknya pribadi muslim Indonesia yang bertaqwa kepada Allah Swt, berbudi luhur, berilmu, cakap dan bertanggungjawab.',NULL,NULL,'2026-07-23 21:35:36','2026-07-23 21:35:36'),(4,'home_carousel_1','pkd','Foto kegiatan PMII untuk slide pertama.','konten/upTeoW569GzGiDB4WAuNpC6YBtReq4KOVhCuBXpN.jpg',NULL,'2026-07-23 21:47:56','2026-07-23 21:49:42'),(5,'home_carousel_2','Carousel Beranda 2','Foto kegiatan PMII untuk slide kedua.','konten/YQgvRVw1tz0Jh6aY5UyWEV09OmpDirB0M6byGwnn.jpg',NULL,'2026-07-23 21:47:56','2026-07-23 21:49:42'),(6,'home_carousel_3','Carousel Beranda 3','Foto kegiatan PMII untuk slide ketiga.','konten/aM5iNYiKs3OFJgaMSYnlW1hh9wiLPwPq1I9txTTJ.jpg',NULL,'2026-07-23 21:47:56','2026-07-23 21:49:42'),(7,'home_pengurus','Pengurus Rayon FTKD','Kenali wajah-wajah pengurus rayon FTKD yang menggerakkan agenda dan aktivitas organisasi.','konten/ss4kZErbG1S4c88ualSdkppf8lURNBD1M3mu33L5.jpg',NULL,'2026-07-23 21:47:56','2026-07-23 21:49:42'),(8,'home_profil','Profil Pergerakan','Profil rayon FTKD sebagai ruang kaderisasi yang dinamis, inklusif, dan solutif.','konten/wI8WZsFejtIhauhl7Lk7ocUocEdlWWJDLvJAQwk6.jpg',NULL,'2026-07-23 21:47:56','2026-07-23 21:49:42'),(9,'home_jejak','Jejak Pergerakan','Dokumentasi aktivitas dan Program Kerja Rayon FTKD PMII Universitas Nusa Putra','konten/8N7EuMrxfuh3Br1IhwoHFbs0n3Aegm8mcoEwplYP.jpg','PKD Komisariat PMII Universitas Nusa Putra','2026-07-23 21:47:56','2026-07-27 12:17:45'),(10,'home_last_update','Last Update','Informasi terbaru dari pengurus rayon FTKD.','konten/Pg4JtJovJRf3khkA50KJra3OXh0VkAC5OedYKEW1.jpg',NULL,'2026-07-23 21:47:56','2026-07-23 21:49:42'),(11,'struktur_pengurus','Struktur Pengurus','Susunan kepengurusan rayon FTKD masa khidmat terbaru.',NULL,NULL,'2026-07-23 21:47:56','2026-07-23 21:47:56'),(12,'struktur_carousel_1','Carousel Struktur 1','Foto struktur pengurus untuk slide pertama.',NULL,NULL,'2026-07-23 21:47:56','2026-07-23 21:47:56'),(13,'struktur_carousel_2','Carousel Struktur 2','Foto struktur pengurus untuk slide kedua.',NULL,NULL,'2026-07-23 21:47:56','2026-07-23 21:47:56'),(14,'struktur_carousel_3','Carousel Struktur 3','Foto struktur pengurus untuk slide ketiga.',NULL,NULL,'2026-07-23 21:47:56','2026-07-23 21:47:56');
/*!40000 ALTER TABLE `kontens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_07_04_175124_add_profile_fields_to_users_table',1),(5,'2026_07_07_000001_create_anggotas_table',1),(6,'2026_07_07_000002_create_agendas_table',1),(7,'2026_07_07_000003_create_arsips_table',1),(8,'2026_07_07_000004_create_kontens_table',1),(9,'2026_07_07_000005_add_role_to_users_table',1),(10,'2026_07_07_000006_add_jabatan_to_anggotas_table',1),(11,'2026_07_09_000001_add_image_and_caption_to_kontens_table',1),(12,'2026_07_27_191903_create_jejak_pergerakan_items_table',2),(13,'2026_07_27_193714_create_berita_terbaru_items_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('5yuJK0YkbVdpwdosw9PKuUqJvi832LHPe1W3DfhD',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.8875','eyJfdG9rZW4iOiJaREFVbHhYWlREbGFHZG9CbWY4a2pyenBPcjBCa3dHWXg5TVNTTWN4IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9iZXJhbmRhIiwicm91dGUiOiJiZXJhbmRhIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1785188969),('DGSMSaJ6JnqEjjgPnqbNK4m7QdMMj24a1jkseXcg',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.8875','eyJfdG9rZW4iOiJCdDd5am1VUjB2WlM2UDBFWm9INFlJaGswYkNFdUthVnBWZGpidUpsIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9iZXJhbmRhIiwicm91dGUiOiJiZXJhbmRhIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1785188902),('FfX8mnOMfc0iennyfrbvKajvsYIGeP1ZwO4uh8yo',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJvdzdtenAxaHJFZ2dUUjZuWkFnMHJYdTR4U0hsODZkMlNNS1VxM0F1IiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1785184601),('hvgXNqxGv0k1C2TD3gW3fwRPeYILsn8PptGsznJm',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJXdkNxc1BqZW1FWTdoTjY3YjNBcWVpMEhCUG90VWZqM255bXB6Z251IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9hZG1pbiIsInJvdXRlIjoiYWRtaW4uZGFzaGJvYXJkIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjJ9',1785189032),('MdCnsbcNOu0hVGVB2DYoaLjOotJsG8KNULauUoSR',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJ4U0FjbGhFWXk1UEQ4VVFnZFF2RmpWWDkwWE1UV1lEV2ZiaXE0VmRZIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2FkbWluIiwicm91dGUiOiJhZG1pbi5kYXNoYm9hcmQifSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjJ9',1785180909),('N6xMV8pgIYQuirubQR1MiUV47rsvlrC4UX6cXPRu',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT; Windows NT 10.0; en-US) WindowsPowerShell/5.1.26100.8875','eyJfdG9rZW4iOiIwM21BN0t1ZkF1RkxZOUswUEFlYjlTTHA5VmZVTUM2UVRvS3J4aVRJIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9iZXJhbmRhIiwicm91dGUiOiJiZXJhbmRhIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1785188881),('qPBzHKkWkWlynbZWYKxHl1AiapbiSOdPm2hPNCbQ',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJaOW5zNXRHRmk2elQ4Z0V5QXFnVEpkRWx6V0x1VmxrT3V3ZFdXd1RiIiwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjIsIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9hZG1pbiIsInJvdXRlIjoiYWRtaW4uZGFzaGJvYXJkIn19',1785179628),('rdRmjcgoPkaWHxs2Ql96MEDUZmOFfEhyTMNhe8mO',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJkSW50NzBUN3Q4RmJDMUxkN2tBYzNaR0ROdTBsRHRoWDhpVFJBdjdQIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2FkbWluIiwicm91dGUiOiJhZG1pbi5kYXNoYm9hcmQifSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjJ9',1785182312),('RsEvny6xRt0FLxlrojCRVMigJVnmnKHJJXSEE4Hq',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJXMHpJWmU5RnZ2bkUyYzRyVmRoNjBCa0lqTVQ0MGx6Nm92Y3hZVEVPIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2JlcmFuZGEiLCJyb3V0ZSI6ImJlcmFuZGEifX0=',1785190080),('SycKRCg4yOmIllCNl5Hz1SuQGbcoQLkHxXfGsnVi',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJkNW5QOG5ldWI2UEs5aUt5RGN4SkRvR05scU1BaXNXVkt4c1NuYmZzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9hZG1pbiIsInJvdXRlIjoiYWRtaW4uZGFzaGJvYXJkIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjJ9',1785179627),('W4io8tvlJWOELfBOgBynk6VIbenTzDqHve2BQGOS',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJwb2tEWmlNUnU1VEdFdEhncmVzcDBSZk5nZGVEZEJHUVdsNUZoWkdZIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2FkbWluIiwicm91dGUiOiJhZG1pbi5kYXNoYm9hcmQifSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjJ9',1785180457);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'anggota',
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkatan` int DEFAULT NULL,
  `motivasi` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Anggota FTKD',NULL,NULL,NULL,'anggota@ftkd.com','anggota',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$12$88859Z1IQbjaL/X26ldxTeCYOf06DKWBaZJDZUl81/MGJZ69sKoZK',NULL,'2026-07-23 21:40:02','2026-07-23 21:40:02'),(2,'Admin FTKD',NULL,NULL,NULL,'admin@ftkd.com','admin',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$12$IgqSqzk79QHiPss4vw7qNeCcZiMSkOkjd9ukS4kf1nT9e8rRYur1i',NULL,'2026-07-23 21:40:03','2026-07-23 21:41:17'),(3,'Muhamad Ezra Haikal purboyo','Kota Sukabumi','2005-01-06','L','ezrahaikal9@gmail.com','anggota','085143527543','ciseureuh','Teknik Informatika',2023,'hahay',NULL,'$2y$12$7dVJPFbq83bv2F2MzbeGIuQOA1lnSkD91apBjJVoP22ii2bFrAQvG',NULL,'2026-07-27 15:06:19','2026-07-27 15:06:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-28  5:22:50
