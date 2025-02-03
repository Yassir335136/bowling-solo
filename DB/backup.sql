-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: BowlingCenter-Brooklyn
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
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
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
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
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
  `attempts` tinyint unsigned NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_01_29_080911_create_rows_table',1),(5,'2025_01_29_081027_reservations',1),(6,'2025_01_29_081604_scores',1);
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
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rowId` bigint unsigned NOT NULL,
  `userId` bigint unsigned NOT NULL,
  `startDateTime` datetime(6) NOT NULL DEFAULT '2025-01-29 13:39:53.000000',
  `endDateTime` datetime(6) NOT NULL DEFAULT '2025-01-29 13:39:53.000000',
  `reservationStatus` enum('pending','accepted','denied','due') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `adultCount` tinyint unsigned NOT NULL,
  `childrenCount` tinyint unsigned DEFAULT NULL,
  `bundleOption` enum('basis','luxe','Kinderpartij','Vrijgezellenfeest') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'basis',
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservations_rowid_foreign` (`rowId`),
  KEY `reservations_userid_foreign` (`userId`),
  CONSTRAINT `reservations_rowid_foreign` FOREIGN KEY (`rowId`) REFERENCES `rows` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reservations_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,1,10,'2025-01-29 13:39:54.000000','2025-11-20 09:58:45.000000','pending',6,0,'basis',NULL,1,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(2,1,11,'2025-01-29 13:39:54.000000','2025-10-20 13:13:48.000000','pending',4,0,'basis',NULL,1,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(3,1,12,'2025-01-29 13:39:54.000000','2025-02-07 20:55:57.000000','pending',8,0,'basis',NULL,1,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(4,1,13,'2025-01-29 13:39:54.000000','2025-08-06 14:24:14.000000','pending',3,3,'basis',NULL,1,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(5,1,14,'2025-01-29 13:39:54.000000','2025-10-24 02:06:25.000000','pending',8,3,'basis',NULL,1,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(6,5,1,'2025-01-29 16:27:00.000000','2025-01-30 16:27:00.000000','pending',4,0,'basis',NULL,1,'2025-01-29 14:27:40','2025-01-29 14:27:40'),(7,5,1,'2025-01-29 16:27:00.000000','2025-01-30 16:27:00.000000','pending',4,0,'basis',NULL,1,'2025-01-29 14:28:05','2025-01-29 14:28:05'),(8,8,1,'2025-01-31 16:30:00.000000','2025-01-31 19:30:00.000000','pending',6,0,'basis',NULL,1,'2025-01-29 14:29:00','2025-01-29 14:29:00');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rows`
--

DROP TABLE IF EXISTS `rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rows` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HasFences` tinyint(1) NOT NULL DEFAULT '0',
  `IsVip` tinyint(1) NOT NULL DEFAULT '0',
  `IsActive` tinyint(1) NOT NULL DEFAULT '0',
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rows`
--

LOCK TABLES `rows` WRITE;
/*!40000 ALTER TABLE `rows` DISABLE KEYS */;
INSERT INTO `rows` VALUES (1,'Jared Wisozk',0,0,1,'Aut ipsam asperiores qui vel voluptatem est. Quia deserunt sequi et hic at. Optio commodi sint rerum voluptatibus. Quaerat sint laboriosam ad et perferendis.','2025-01-29 12:39:54','2025-01-29 12:39:54'),(2,'Prof. Doug Berge',0,0,0,'Est accusamus quia odit asperiores iste nobis. Deserunt rerum modi dolores. Labore delectus corrupti sunt quod adipisci.','2025-01-29 12:39:54','2025-01-29 12:39:54'),(3,'Alek Eichmann',0,0,1,'Sit doloribus autem molestiae iste dolores et aut. Aliquid rem voluptas laborum explicabo in quasi voluptatem. Voluptate reiciendis quam consequuntur et. Aut quam omnis vitae vitae qui voluptatem.','2025-01-29 12:39:54','2025-01-29 12:39:54'),(4,'Jay Orn',1,0,0,'Et velit nam dolor et veniam occaecati. Quam quia consequatur sint consequuntur quo commodi. Ut dignissimos exercitationem quibusdam vitae.','2025-01-29 12:39:54','2025-01-29 12:39:54'),(5,'Maureen Littel',0,1,0,'Maxime tenetur quae est ut. Qui accusantium eligendi doloribus molestiae corporis illum. Labore consequatur voluptas voluptatem laborum.','2025-01-29 12:39:54','2025-01-29 12:39:54'),(6,'Meredith Daugherty',0,0,1,'Ipsam dolor ab amet voluptatem occaecati. Laborum perferendis aspernatur aliquid nam. Accusantium ut iusto tenetur. Sit blanditiis est vel sint delectus.','2025-01-29 12:39:54','2025-01-29 12:39:54'),(7,'Herman Streich',1,0,1,'Quaerat ipsa quasi ipsum velit dolor repellat. Illo dicta qui recusandae odit. Eaque facere voluptatum animi est dolorum.','2025-01-29 12:39:54','2025-01-29 12:39:54'),(8,'Kylee Casper',1,0,0,'Modi nisi suscipit aut perspiciatis sed. Ea repellendus corrupti ut in omnis similique.','2025-01-29 12:39:54','2025-01-29 12:39:54');
/*!40000 ALTER TABLE `rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `scores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `reservations_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scores`
--

LOCK TABLES `scores` WRITE;
/*!40000 ALTER TABLE `scores` DISABLE KEYS */;
INSERT INTO `scores` VALUES (1,1,'Agnes',310,1,'','2025-01-29 12:39:54','2025-01-29 12:39:54'),(2,2,'Frans',320,1,'','2025-01-29 12:39:54','2025-01-29 12:39:54'),(3,3,'Jeroen',330,1,'','2025-01-29 12:39:54','2025-01-29 12:39:54'),(4,4,'Kees',340,1,'','2025-01-29 12:39:54','2025-01-29 12:39:54'),(5,5,'Marieke',350,1,'','2025-01-29 12:39:54','2025-01-29 12:39:54'),(6,6,'Sjaak',360,1,'','2025-01-29 12:39:54','2025-01-29 12:39:54'),(7,7,'Willem',370,1,'','2025-01-29 12:39:54','2025-01-29 12:39:54');
/*!40000 ALTER TABLE `scores` ENABLE KEYS */;
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
INSERT INTO `sessions` VALUES ('kP7KR7IKnpgLGnP3BLyyzUQbONmTplbI2i06x04a',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMU4yeUw4UjlkZXRiM0VaV3B2UVpPZ1o1amZyS05vRHJreFNVdjhqUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXNlcnZhdGlvbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1738164691);
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
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('Owner','Admin','User') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Martin','Legros','test@example.com','2025-01-29 12:39:53','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','91bzNNTm5T','Admin',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(2,'Trycia','Kunze','beau.hammes@example.net','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','YZXdQJb07m','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(3,'Orin','Skiles','shawn98@example.com','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','rmogLnTGUP','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(4,'Bella','Weber','phodkiewicz@example.net','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','j2cgHs1B9O','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(5,'Maxwell','Daniel','izaiah00@example.org','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','dE3LDBRYZf','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(6,'Andrew','Carroll','hackett.meda@example.net','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','BfT8wmDWk2','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(7,'Bridgette','Bradtke','qschoen@example.net','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','OJFcZb3bUP','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(8,'Orion','Mraz','bosco.royce@example.org','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','16ocT2HhSr','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(9,'Issac','Carter','bert47@example.com','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','F5i9zS8Ejj','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(10,'Chasity','Cronin','maverick.wolf@example.net','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','fx8v7gCHcw','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(11,'Gayle','Strosin','vbogisich@example.org','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','CRFy3gtNZY','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(12,'Maureen','Reinger','pkling@example.com','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','4Cb4zgwSWo','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(13,'Jermey','Rowe','ewatsica@example.com','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','jaCTBdEt2W','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(14,'Martine','Veum','fthiel@example.com','2025-01-29 12:39:54','$2y$12$KoDc51FlaRfZn4D8vwziQe0r2jcqYHHY9W75/Ddw9gJvdQm55bYxy','HcIN7qtjDM','User',1,NULL,'2025-01-29 12:39:54','2025-01-29 12:39:54'),(15,'tim','hofman','timmie@gmail.com',NULL,'$2y$12$tNlcxhaiCMS10zG9/ZST2eHdJ3fnFJNzV8MIWQEVyu27o4M.9Vd8i',NULL,'User',1,NULL,'2025-01-29 13:13:00','2025-01-29 13:13:00');
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

-- Dump completed on 2025-01-29 16:36:18
