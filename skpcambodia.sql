-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: SKPCambodia
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `home` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resources` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `law` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `announment` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_us` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Home','About Us','Mission','Team','Services','Resources','Report','Publication','Laws and Regulations of Kingdom of Cambodia','News','Publication and announcement','Training','Employment','Blog','Contact Us');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_translation`
--

DROP TABLE IF EXISTS `menu_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_translation` (
  `menu_id` int(11) NOT NULL,
  `language_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resources` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `law` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `announment` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_us` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_translation`
--

LOCK TABLES `menu_translation` WRITE;
/*!40000 ALTER TABLE `menu_translation` DISABLE KEYS */;
INSERT INTO `menu_translation` VALUES (1,'kh','ទំព័រដេីម','អំពីយេីង','បេសកម្ម','ក្រុមការងារ','សេវាកម្ម','ឯកសារ','របាយការណ៍','ការប្រកាស','ច្បាប់របស់ប្រទេសកម្ពុជា','ដំណឹង','ការផ្សាយនិងសេចក្តីប្រកាស','ការបណ្តុះបណ្តាល','ឱកាសការងារនិងកម្មសិក្សា','ប្លុក','ទំនាក់ទំនងយេីង'),(1,'ch','主页','关于我们','任务','球队','服务','资源','报告','出版物','柬埔寨法律法规','新闻','出版和宣传','训练','就业机会和实习','博客','联系我们');
/*!40000 ALTER TABLE `menu_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2017_06_02_123144_make_menu_table',1),(2,'2017_06_02_123221_make_menu_translation_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-01  4:26:37
