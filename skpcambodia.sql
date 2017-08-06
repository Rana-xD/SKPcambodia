-- MySQL dump 10.13  Distrib 5.7.11, for Win64 (x86_64)
--
-- Host: localhost    Database: skp
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `external_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activities_category_id_` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (1,'Draft Law on Alcohol','Draft Law on Alcohol Control Description',NULL,'activities/August2017/2Tiku5gwsLwHl3lz7bJh.jpg',1,1,NULL,'2017-08-03 02:48:49','2017-08-03 02:48:49');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activity_categories`
--

DROP TABLE IF EXISTS `activity_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `is_active` tinyint(4) DEFAULT '1',
  `slug` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activity_categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_categories`
--

LOCK TABLES `activity_categories` WRITE;
/*!40000 ALTER TABLE `activity_categories` DISABLE KEYS */;
INSERT INTO `activity_categories` VALUES (1,'Court Hearing',NULL,1,'court-hearing','2017-08-03 02:43:05','2017-08-03 02:43:05',1,NULL);
/*!40000 ALTER TABLE `activity_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Law','law','2017-08-01 02:18:19','2017-08-01 02:18:19');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'author_id','text','Author',1,0,1,1,0,1,'',2),(3,1,'category_id','text','Category',1,0,1,1,1,0,'',3),(4,1,'title','text','Title',1,1,1,1,1,1,'',4),(5,1,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',5),(6,1,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(7,1,'image','image','Post Image',0,1,1,1,1,1,'\n{\n    \"resize\": {\n        \"width\": \"1000\",\n        \"height\": \"null\"\n    },\n    \"quality\": \"70%\",\n    \"upsize\": true,\n    \"thumbnails\": [\n        {\n            \"name\": \"medium\",\n            \"scale\": \"50%\"\n        },\n        {\n            \"name\": \"small\",\n            \"scale\": \"25%\"\n        },\n        {\n            \"name\": \"cropped\",\n            \"crop\": {\n                \"width\": \"300\",\n                \"height\": \"250\"\n            }\n        }\n    ]\n}',7),(8,1,'slug','text','slug',1,0,1,1,1,1,'\n{\n    \"slugify\": {\n        \"origin\": \"title\",\n        \"forceUpdate\": true\n    }\n}',8),(9,1,'meta_description','text_area','meta_description',1,0,1,1,1,1,'',9),(10,1,'meta_keywords','text_area','meta_keywords',1,0,1,1,1,1,'',10),(11,1,'status','select_dropdown','status',1,1,1,1,1,1,'\n{\n    \"default\": \"DRAFT\",\n    \"options\": {\n        \"PUBLISHED\": \"published\",\n        \"DRAFT\": \"draft\",\n        \"PENDING\": \"pending\"\n    }\n}',11),(12,1,'created_at','timestamp','created_at',0,1,1,0,0,0,'',12),(13,1,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',13),(14,2,'id','number','id',1,0,0,0,0,0,'',1),(15,2,'author_id','text','author_id',1,0,0,0,0,0,'',2),(16,2,'title','text','title',1,1,1,1,1,1,'',3),(17,2,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',4),(18,2,'body','rich_text_box','body',1,0,1,1,1,1,'',5),(19,2,'slug','text','slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"}}',6),(20,2,'meta_description','text','meta_description',1,0,1,1,1,1,'',7),(21,2,'meta_keywords','text','meta_keywords',1,0,1,1,1,1,'',8),(22,2,'status','select_dropdown','status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(23,2,'created_at','timestamp','created_at',1,1,1,0,0,0,'',10),(24,2,'updated_at','timestamp','updated_at',1,0,0,0,0,0,'',11),(25,2,'image','image','image',0,1,1,1,1,1,'',12),(26,3,'id','number','id',1,0,0,0,0,0,NULL,1),(28,3,'email','text','Email Address',1,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|email\",\"messages\":{\"required\":\"This :attribute field is a must.\",\"email\":\"This :attribute field must be email.\"}}}',5),(29,3,'password','password','Password',1,0,0,1,1,0,NULL,6),(30,3,'remember_token','hidden','Remember Token',0,0,0,0,0,1,NULL,14),(31,3,'created_at','timestamp','Member Since',0,1,1,0,0,1,NULL,15),(32,3,'updated_at','timestamp','Last Updated',0,0,0,0,0,1,NULL,16),(33,3,'avatar','image','Avatar Picture',0,1,1,1,1,1,'{\"resize\":{\"width\":\"500\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"150\",\"height\":\"150\"}}]}',11),(34,5,'id','number','id',1,0,0,0,0,0,'',1),(35,5,'name','text','name',1,1,1,1,1,1,'',2),(36,5,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(37,5,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(38,4,'id','number','id',1,0,0,0,0,0,'',1),(39,4,'parent_id','select_dropdown','parent_id',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(40,4,'order','text','order',1,1,1,1,1,1,'{\"default\":1}',3),(41,4,'name','text','name',1,1,1,1,1,1,'',4),(42,4,'slug','text','slug',1,1,1,1,1,1,'',5),(43,4,'created_at','timestamp','created_at',0,0,1,0,0,0,'',6),(44,4,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',7),(45,6,'id','number','id',1,0,0,0,0,0,'',1),(46,6,'name','text','Name',1,1,1,1,1,1,'',2),(47,6,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(48,6,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(49,6,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(50,1,'seo_title','text','seo_title',0,1,1,1,1,1,'',14),(51,1,'featured','checkbox','featured',1,1,1,1,1,1,'',15),(52,3,'role_id','select_dropdown','User Role',0,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"display_name\"}}',13),(53,3,'firstname','text','Firstname',1,0,0,1,1,1,NULL,2),(54,3,'lastname','text','Lastname',1,0,0,1,1,1,NULL,3),(56,3,'phonenumber','text','Phonenumber',0,0,0,1,1,1,NULL,8),(57,3,'address','text','Address',0,0,0,1,1,1,NULL,7),(58,3,'career','text','Career',0,0,0,1,1,1,NULL,9),(59,3,'bio','text','Bio',0,0,0,1,1,1,NULL,10),(60,3,'is_active','checkbox','Is Active',1,1,1,1,1,1,'{\"on\":\"Active\",\"off\":\"Deactive\",\"checked\":\"true\"}',12),(61,3,'deleted_at','timestamp','Deleted At',0,0,0,0,0,1,NULL,17),(62,7,'id','number','Id',1,0,0,0,0,0,NULL,1),(63,7,'title','text','Title',1,1,1,1,1,1,NULL,2),(64,7,'description','text_area','Description',0,0,0,1,1,1,NULL,9),(65,7,'link_url','text','Target Link',0,1,1,1,1,1,NULL,4),(66,7,'button_text','text','Button Text',1,0,0,1,1,1,NULL,10),(67,7,'featured_image','image','Featured Image',1,1,1,1,1,1,'{\"resize\":{\"width\":\"1349\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',3),(68,7,'video_url','text','Video Url',0,0,0,1,1,1,NULL,11),(69,7,'type','select_dropdown','Type',1,0,0,1,1,1,'{\"default\":\"IMAGE\",\"options\":{\"1\":\"image\",\"2\":\"video\",\"3\":\"embeded\"}}',12),(70,7,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"1\":\"published\",\"2\":\"pending\",\"3\":\"draft\"}}',5),(71,7,'is_featured','checkbox','Featured?',1,1,1,1,1,1,'{\"on\":\"Yes\",\"off\":\"No\",\"checked\":\"false\"}',6),(72,7,'created_by','select_dropdown','Author',0,1,1,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',7),(73,7,'updated_by','select_dropdown','Updated By',0,0,0,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',8),(74,7,'created_at','timestamp','Created At',0,1,1,0,0,1,NULL,13),(75,7,'updated_at','timestamp','Updated At',0,0,0,0,0,1,NULL,14),(76,3,'name','text','Fullname',1,1,1,1,1,1,NULL,4),(77,8,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(78,8,'company_name','text','Company Name',1,1,1,1,1,1,NULL,2),(79,8,'company_profile','text','Company Profile',0,1,1,1,1,1,NULL,3),(80,8,'company_logo','image','Company Logo',0,1,1,1,1,1,'{\"resize\":{\"width\":\"250\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',4),(81,8,'external_url','text','External Url',0,1,1,1,1,1,NULL,5),(82,8,'created_at','timestamp','Created At',0,1,1,0,0,1,NULL,7),(83,8,'updated_at','timestamp','Updated At',0,0,0,1,0,1,NULL,8),(84,8,'created_by','checkbox','Created By',0,1,1,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',9),(85,8,'updated_by','checkbox','Updated By',0,1,1,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',10),(86,8,'is_featured','checkbox','Home Featured ?',1,1,1,1,1,1,'{\"on\":\"Yes\",\"off\":\"No\",\"checked\":\"true\"}',6),(87,9,'id','number','Id',1,0,0,0,0,0,NULL,1),(88,9,'title','text','Title',0,1,1,1,1,1,NULL,2),(89,9,'content','rich_text_box','Content',0,0,0,1,1,1,NULL,5),(90,9,'slug_title','text','Url Slug',0,0,0,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',3),(91,9,'fearured_image','image','Fearured Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"450\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"250\",\"height\":\"250\"}}]}',4),(92,9,'icon_class','text','Icon Class',0,0,0,1,1,1,NULL,10),(93,9,'excerpt','text_area','Excerpt',0,0,0,1,1,1,NULL,11),(94,9,'meta_description','text_area','Meta Description',0,0,0,1,1,1,NULL,13),(95,9,'meta_keyword','text_area','Meta Keyword',0,0,0,1,1,1,NULL,14),(96,9,'seo_title','text','Seo Title',0,0,0,1,1,1,NULL,12),(97,9,'is_featured','checkbox','Is Featured',1,1,1,1,1,1,'{\"on\":\"Yes\",\"off\":\"No\",\"checked\":\"true\"}',6),(98,9,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":2,\"options\":{\"1\":\"Published\",\"2\":\"Draft\",\"3\":\"Pending\"}}',7),(99,9,'created_by','number','Created By',0,1,1,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',8),(100,9,'updated_by','number','Updated By',0,0,0,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',9),(101,9,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,15),(102,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,16),(103,10,'id','number','Id',1,0,0,0,0,0,NULL,1),(104,10,'firstname','text','Firstname',0,0,0,1,1,1,NULL,2),(105,10,'lastname','text','Lastname',0,0,0,1,1,1,NULL,3),(106,10,'fullname','text','Fullname',0,1,1,1,1,1,NULL,4),(107,10,'position','text','Position',0,0,0,1,1,1,NULL,5),(108,10,'created_at','timestamp','Created At',0,1,1,0,0,1,NULL,14),(109,10,'contact','text','Contact',0,0,0,1,1,1,NULL,6),(110,10,'email','text','Email',0,0,0,1,1,1,NULL,7),(111,10,'social_media','text_area','Social Media',0,0,0,1,1,1,NULL,8),(112,10,'education','text_area','Education',0,0,0,1,1,1,NULL,9),(113,10,'experience','text_area','Experience',0,0,0,1,1,1,NULL,10),(114,10,'profile_pic','image','Profile Pic',0,1,1,1,1,1,NULL,11),(115,10,'bio','text_area','Bio',0,0,0,1,1,1,NULL,12),(116,10,'quote','text_area','Quote',0,0,0,1,1,1,NULL,13),(117,10,'updated_at','timestamp','Updated At',0,0,0,0,0,1,NULL,15),(118,11,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(119,11,'title','text','Title',0,1,1,1,1,1,NULL,2),(120,11,'description','text_area','Description',0,1,1,1,1,1,NULL,3),(121,11,'featured_image','image','Featured Image',0,1,1,1,1,1,NULL,4),(122,11,'created_by','select_dropdown','Created By',0,1,1,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',5),(123,11,'updated_by','select_dropdown','Updated By',0,0,0,0,0,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',6),(124,11,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,7),(125,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,8),(126,11,'external_url','text','External Url',0,0,0,1,1,1,NULL,9),(127,12,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(129,12,'description','text_area','Description',0,0,0,1,1,1,NULL,3),(130,12,'external_url','text','External Url',0,0,0,1,1,1,NULL,4),(131,12,'featured_image','image','Featured Image',0,1,1,1,1,1,NULL,5),(132,12,'category_id','select_dropdown','Category',0,1,1,1,1,1,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',6),(133,12,'created_by','select_dropdown','Created By',0,1,1,0,0,0,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',7),(134,12,'updated_by','select_dropdown','Updated By',0,0,0,0,0,0,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',8),(135,12,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,9),(136,12,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,10),(137,13,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(138,13,'name','text','Name',0,1,1,1,1,1,NULL,2),(139,13,'description','text_area','Description',0,0,0,1,1,1,NULL,4),(140,13,'is_active','checkbox','Status',0,1,1,1,1,1,'{\"on\":\"Active\",\"off\":\"Deactive\",\"default\":\"true\"}',5),(141,13,'slug','text','Slug Name',0,0,0,1,1,1,'{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true}}',3),(142,13,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,8),(143,13,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,9),(144,13,'created_by','select_dropdown','Created By',0,1,1,0,0,0,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',6),(145,13,'updated_by','select_dropdown','Updated By',0,0,0,0,0,0,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',7),(146,12,'title','text','Title',0,1,1,1,1,1,NULL,2),(147,14,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(148,14,'title','text','Title',0,1,1,1,1,1,NULL,2),(149,14,'content','rich_text_box','Content',0,0,0,1,1,1,NULL,5),(150,14,'featured_image','image','Featured Image',0,0,0,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',9),(151,14,'slug_title','text','Slug Url',0,0,0,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',4),(152,14,'start_date','date','Start Date',0,1,1,1,1,1,NULL,6),(153,14,'end_date','date','End Date',0,1,1,1,1,1,NULL,7),(154,14,'organized_by','text','Organized By',0,1,1,1,1,1,NULL,8),(155,14,'created_by','select_dropdown','Created By',0,1,1,0,0,0,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',10),(156,14,'updated_by','select_dropdown','Updated By',0,0,0,0,0,0,'{\"relationship\":{\"key\":\"id\",\"label\":\"name\",\"page_slug\":\"admin/users\"}}',11),(157,14,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,12),(158,14,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,13),(159,14,'type','select_dropdown','Type',0,1,1,1,1,1,'{\"default\":\"TRAINING\",\"options\":{\"TRAINING\":\"Training Program\",\"ANNOUNCEMENT\":\"Announcement\"}}',3);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','','',1,0,'2017-07-25 19:42:11','2017-07-25 19:42:11'),(2,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page','','',1,0,'2017-07-25 19:42:11','2017-07-25 19:42:11'),(3,'users','users','User','Users','voyager-person','App\\User',NULL,NULL,1,1,'2017-07-25 19:42:11','2017-07-26 02:31:54'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category','','',1,0,'2017-07-25 19:42:11','2017-07-25 19:42:11'),(5,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu','','',1,0,'2017-07-25 19:42:11','2017-07-25 19:42:11'),(6,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role','','',1,0,'2017-07-25 19:42:11','2017-07-25 19:42:11'),(7,'sliders','sliders','Slider','Sliders','voyager-polaroid','App\\Slider',NULL,NULL,1,1,'2017-07-25 22:11:38','2017-07-25 22:17:09'),(8,'partners','partners','Partner','Partners',NULL,'App\\Partner',NULL,NULL,1,0,'2017-07-30 00:52:25','2017-07-30 00:52:25'),(9,'services','services','Service','Services',NULL,'App\\Service',NULL,NULL,1,1,'2017-07-31 01:40:06','2017-07-31 01:40:06'),(10,'teams','teams','Team','Teams','voyager-t','App\\Team',NULL,NULL,1,1,'2017-08-03 01:12:17','2017-08-03 01:12:17'),(11,'publications','publications','Publication','Publications',NULL,'App\\Publication',NULL,NULL,1,1,'2017-08-03 02:05:24','2017-08-03 02:05:24'),(12,'activities','activities','Activity','Activities',NULL,'App\\Activity',NULL,NULL,1,0,'2017-08-03 02:18:33','2017-08-03 02:18:33'),(13,'activity_categories','activity-categories','Activity Category','Activity Categories','voyager-paperclip','App\\ActivityCategory',NULL,NULL,1,0,'2017-08-03 02:33:30','2017-08-03 02:33:30'),(14,'training_programs','training-programs','Training Program','Training Programs',NULL,'App\\TrainingProgram',NULL,NULL,1,1,'2017-08-03 03:18:35','2017-08-03 09:22:42');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','/admin','_self','voyager-boat',NULL,NULL,1,'2017-07-25 19:42:13','2017-07-25 19:42:13',NULL,NULL),(2,1,'Media','/admin/media','_self','voyager-images',NULL,NULL,4,'2017-07-25 19:42:13','2017-07-25 22:12:05',NULL,NULL),(3,1,'Blog','','_self','voyager-news','#000000',NULL,5,'2017-07-25 19:42:13','2017-08-03 03:07:01',NULL,''),(4,1,'Users','/admin/users','_self','voyager-person',NULL,NULL,3,'2017-07-25 19:42:14','2017-07-25 19:42:14',NULL,NULL),(5,1,'Categories','/admin/categories','_self','voyager-categories',NULL,3,2,'2017-07-25 19:42:14','2017-08-03 02:56:00',NULL,NULL),(6,1,'Pages','/admin/pages','_self','voyager-file-text',NULL,NULL,7,'2017-07-25 19:42:14','2017-08-03 03:00:11',NULL,NULL),(7,1,'Roles','/admin/roles','_self','voyager-lock',NULL,NULL,2,'2017-07-25 19:42:14','2017-07-25 19:42:14',NULL,NULL),(8,1,'Tools','','_self','voyager-tools',NULL,NULL,14,'2017-07-25 19:42:14','2017-08-03 03:03:24',NULL,NULL),(9,1,'Menu Builder','/admin/menus','_self','voyager-list',NULL,8,1,'2017-07-25 19:42:14','2017-07-31 01:47:45',NULL,NULL),(10,1,'Database','/admin/database','_self','voyager-data',NULL,8,2,'2017-07-25 19:42:14','2017-07-31 01:47:45',NULL,NULL),(11,1,'Settings','/admin/settings','_self','voyager-settings',NULL,NULL,15,'2017-07-25 19:42:14','2017-08-03 03:03:24',NULL,NULL),(12,1,'Sliders','/admin/sliders','_self','voyager-polaroid','#000000',NULL,8,'2017-07-25 22:07:58','2017-08-03 03:00:11',NULL,''),(13,1,'Partners & Clients','/admin/partners','_self','voyager-people','#000000',NULL,9,'2017-07-30 00:56:16','2017-08-03 03:00:11',NULL,''),(14,1,'Services','/admin/services','_self','voyager-gift','#000000',NULL,10,'2017-07-31 01:47:30','2017-08-03 03:06:28',NULL,''),(15,2,'Home','/','_self',NULL,'#c63987',NULL,1,'2017-08-02 02:45:09','2017-08-02 02:47:24',NULL,''),(16,2,'About Us','/about','_self',NULL,'#000000',NULL,2,'2017-08-02 02:46:16','2017-08-02 02:47:24',NULL,''),(17,2,'Mission','/mission','_self',NULL,'#000000',16,1,'2017-08-02 02:47:01','2017-08-02 02:47:24',NULL,''),(18,2,'Team','/team','_self',NULL,'#000000',16,2,'2017-08-02 02:54:03','2017-08-02 02:54:11',NULL,''),(19,1,'Teams','/admin/teams','_self','voyager-people','#000000',NULL,11,'2017-08-03 01:15:23','2017-08-03 03:03:24',NULL,''),(20,1,'Publications','/admin/publications','_self','voyager-file-text','#000000',NULL,12,'2017-08-03 02:07:21','2017-08-03 03:03:24',NULL,''),(21,1,'Activity','','_self','voyager-lifebuoy','#000000',NULL,13,'2017-08-03 02:20:16','2017-08-03 03:03:24',NULL,''),(22,1,'Activity Category','/admin/activity-categories','_self','voyager-paperclip','#000000',21,1,'2017-08-03 02:35:11','2017-08-03 03:05:21',NULL,''),(23,1,'Activity','/admin/activities','_self','voyager-lifebuoy','#000000',21,2,'2017-08-03 02:36:44','2017-08-03 03:05:21',NULL,''),(24,1,'Posts','/admin/posts','_self','voyager-news','#000000',3,1,'2017-08-03 02:55:18','2017-08-03 02:56:07',NULL,''),(25,1,'News','','_self','voyager-rocket','#000000',NULL,6,'2017-08-03 02:59:11','2017-08-03 03:00:11',NULL,''),(26,1,'Training Program & Announcement','/admin/training-programs','_self','voyager-trophy','#000000',25,1,'2017-08-03 03:01:30','2017-08-03 09:15:35',NULL,''),(28,1,'Employment & Recruit','/admin/employments','_self','voyager-company','#000000',25,3,'2017-08-03 03:05:10','2017-08-03 03:05:21',NULL,'');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2017-07-25 19:42:13','2017-07-25 19:42:13'),(2,'visitor','2017-08-02 00:46:19','2017-08-02 00:46:19');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2016_01_01_000000_add_voyager_user_fields',1),(3,'2016_01_01_000000_create_data_types_table',1),(4,'2016_01_01_000000_create_pages_table',1),(5,'2016_01_01_000000_create_posts_table',1),(6,'2016_02_15_204651_create_categories_table',1),(7,'2016_05_19_173453_create_menu_table',1),(8,'2016_10_21_190000_create_roles_table',1),(9,'2016_10_21_190000_create_settings_table',1),(10,'2016_11_30_135954_create_permission_table',1),(11,'2016_11_30_141208_create_permission_role_table',1),(12,'2016_12_26_201236_data_types__add__server_side',1),(13,'2017_01_13_000000_add_route_to_menu_items_table',1),(14,'2017_01_14_005015_create_translations_table',1),(15,'2017_01_15_000000_add_permission_group_id_to_permissions_table',1),(16,'2017_01_15_000000_create_permission_groups_table',1),(17,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(18,'2017_03_06_000000_add_controller_to_data_types_table',1),(19,'2017_04_21_000000_add_order_to_data_rows_table',1),(20,'2017_07_25_153109_create_sliders_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_profile` text COLLATE utf8_unicode_ci,
  `company_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `external_url` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `is_featured` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'Company 1','Company 1 profile goes here','partners/July2017/srF25DG6OPEbzaqqRbvx.png','https://google.com','2017-07-30 01:10:42','2017-07-30 01:10:42',1,NULL,1),(2,'Company 2','Company 2 profile goes here','partners/July2017/8QSTBqcyecq8wYvON5cO.png','https://google.com','2017-07-30 01:13:00','2017-07-30 01:13:00',1,NULL,1);
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_groups`
--

LOCK TABLES `permission_groups` WRITE;
/*!40000 ALTER TABLE `permission_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2017-07-25 19:42:14','2017-07-25 19:42:14',NULL),(2,'browse_database',NULL,'2017-07-25 19:42:14','2017-07-25 19:42:14',NULL),(3,'browse_media',NULL,'2017-07-25 19:42:14','2017-07-25 19:42:14',NULL),(4,'browse_settings',NULL,'2017-07-25 19:42:14','2017-07-25 19:42:14',NULL),(5,'browse_menus','menus','2017-07-25 19:42:14','2017-07-25 19:42:14',NULL),(6,'read_menus','menus','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(7,'edit_menus','menus','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(8,'add_menus','menus','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(9,'delete_menus','menus','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(10,'browse_pages','pages','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(11,'read_pages','pages','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(12,'edit_pages','pages','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(13,'add_pages','pages','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(14,'delete_pages','pages','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(15,'browse_roles','roles','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(16,'read_roles','roles','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(17,'edit_roles','roles','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(18,'add_roles','roles','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(19,'delete_roles','roles','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(20,'browse_users','users','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(21,'read_users','users','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(22,'edit_users','users','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(23,'add_users','users','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(24,'delete_users','users','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(25,'browse_posts','posts','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(26,'read_posts','posts','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(27,'edit_posts','posts','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(28,'add_posts','posts','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(29,'delete_posts','posts','2017-07-25 19:42:15','2017-07-25 19:42:15',NULL),(30,'browse_categories','categories','2017-07-25 19:42:16','2017-07-25 19:42:16',NULL),(31,'read_categories','categories','2017-07-25 19:42:16','2017-07-25 19:42:16',NULL),(32,'edit_categories','categories','2017-07-25 19:42:16','2017-07-25 19:42:16',NULL),(33,'add_categories','categories','2017-07-25 19:42:16','2017-07-25 19:42:16',NULL),(34,'delete_categories','categories','2017-07-25 19:42:16','2017-07-25 19:42:16',NULL),(35,'browse_sliders','sliders','2017-07-25 22:11:38','2017-07-25 22:11:38',NULL),(36,'read_sliders','sliders','2017-07-25 22:11:38','2017-07-25 22:11:38',NULL),(37,'edit_sliders','sliders','2017-07-25 22:11:38','2017-07-25 22:11:38',NULL),(38,'add_sliders','sliders','2017-07-25 22:11:38','2017-07-25 22:11:38',NULL),(39,'delete_sliders','sliders','2017-07-25 22:11:38','2017-07-25 22:11:38',NULL),(40,'browse_partners','partners','2017-07-30 00:52:25','2017-07-30 00:52:25',NULL),(41,'read_partners','partners','2017-07-30 00:52:25','2017-07-30 00:52:25',NULL),(42,'edit_partners','partners','2017-07-30 00:52:25','2017-07-30 00:52:25',NULL),(43,'add_partners','partners','2017-07-30 00:52:25','2017-07-30 00:52:25',NULL),(44,'delete_partners','partners','2017-07-30 00:52:25','2017-07-30 00:52:25',NULL),(45,'browse_services','services','2017-07-31 01:40:07','2017-07-31 01:40:07',NULL),(46,'read_services','services','2017-07-31 01:40:07','2017-07-31 01:40:07',NULL),(47,'edit_services','services','2017-07-31 01:40:07','2017-07-31 01:40:07',NULL),(48,'add_services','services','2017-07-31 01:40:07','2017-07-31 01:40:07',NULL),(49,'delete_services','services','2017-07-31 01:40:07','2017-07-31 01:40:07',NULL),(50,'browse_teams','teams','2017-08-03 01:12:17','2017-08-03 01:12:17',NULL),(51,'read_teams','teams','2017-08-03 01:12:17','2017-08-03 01:12:17',NULL),(52,'edit_teams','teams','2017-08-03 01:12:17','2017-08-03 01:12:17',NULL),(53,'add_teams','teams','2017-08-03 01:12:17','2017-08-03 01:12:17',NULL),(54,'delete_teams','teams','2017-08-03 01:12:17','2017-08-03 01:12:17',NULL),(55,'browse_publications','publications','2017-08-03 02:05:26','2017-08-03 02:05:26',NULL),(56,'read_publications','publications','2017-08-03 02:05:26','2017-08-03 02:05:26',NULL),(57,'edit_publications','publications','2017-08-03 02:05:26','2017-08-03 02:05:26',NULL),(58,'add_publications','publications','2017-08-03 02:05:26','2017-08-03 02:05:26',NULL),(59,'delete_publications','publications','2017-08-03 02:05:26','2017-08-03 02:05:26',NULL),(60,'browse_activities','activities','2017-08-03 02:18:33','2017-08-03 02:18:33',NULL),(61,'read_activities','activities','2017-08-03 02:18:33','2017-08-03 02:18:33',NULL),(62,'edit_activities','activities','2017-08-03 02:18:33','2017-08-03 02:18:33',NULL),(63,'add_activities','activities','2017-08-03 02:18:33','2017-08-03 02:18:33',NULL),(64,'delete_activities','activities','2017-08-03 02:18:33','2017-08-03 02:18:33',NULL),(65,'browse_activity_categories','activity_categories','2017-08-03 02:33:30','2017-08-03 02:33:30',NULL),(66,'read_activity_categories','activity_categories','2017-08-03 02:33:30','2017-08-03 02:33:30',NULL),(67,'edit_activity_categories','activity_categories','2017-08-03 02:33:30','2017-08-03 02:33:30',NULL),(68,'add_activity_categories','activity_categories','2017-08-03 02:33:30','2017-08-03 02:33:30',NULL),(69,'delete_activity_categories','activity_categories','2017-08-03 02:33:30','2017-08-03 02:33:30',NULL),(70,'browse_training_programs','training_programs','2017-08-03 03:18:35','2017-08-03 03:18:35',NULL),(71,'read_training_programs','training_programs','2017-08-03 03:18:35','2017-08-03 03:18:35',NULL),(72,'edit_training_programs','training_programs','2017-08-03 03:18:35','2017-08-03 03:18:35',NULL),(73,'add_training_programs','training_programs','2017-08-03 03:18:35','2017-08-03 03:18:35',NULL),(74,'delete_training_programs','training_programs','2017-08-03 03:18:35','2017-08-03 03:18:35',NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,1,1,'Lawyer  Year Award','','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even</p>','posts/August2017/x1ZuPTr8eCgFt8pf70HC.jpg','lawyer-year-award','','','PUBLISHED',1,'2017-08-01 02:03:29','2017-08-01 02:19:10');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `featured_image` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `external_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
INSERT INTO `publications` VALUES (1,'Adoption in the Kingdom of Cambodia','Adoption in the Kingdom of Cambodia description','publications/August2017/kdVqYuqwZRrEM8Es89y8.jpg',1,NULL,'2017-08-03 02:09:31','2017-08-03 02:10:24',NULL);
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2017-07-25 19:42:14','2017-07-25 19:42:14'),(2,'user','Normal User','2017-07-25 19:42:14','2017-07-25 19:42:14');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `slug_title` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fearured_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT '1',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2',
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_title_unique` (`slug_title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Corruption','<p>There are many variations of passages of Lorem Ipsum available (en)</p>','corruption',NULL,'ico ico-1','There are many variations of passages of Lorem Ipsum available',NULL,NULL,NULL,1,'1',1,NULL,'2017-07-31 21:01:00','2017-07-31 21:02:32'),(2,'Justice','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','justice',NULL,'ico ico-2','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,',NULL,NULL,NULL,1,'1',1,NULL,'2017-07-31 21:04:56','2017-07-31 21:04:56'),(3,'Legislation','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','legislation',NULL,'ico ico-3','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,',NULL,NULL,NULL,1,'1',1,NULL,'2017-07-31 21:05:00','2017-07-31 21:09:37'),(4,'Banking and Finance','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','banking-and-finance',NULL,'ico ico-4','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,',NULL,NULL,NULL,1,'1',1,NULL,'2017-07-31 21:07:22','2017-07-31 21:07:22'),(5,'Criminal Law','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','criminal-law',NULL,'ico ico-5','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,',NULL,NULL,NULL,1,'1',1,NULL,'2017-07-31 21:08:23','2017-07-31 21:08:23'),(6,'Independent Judges','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','independent-judges',NULL,'ico ico-6','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,',NULL,NULL,NULL,1,'1',1,NULL,'2017-07-31 21:09:00','2017-07-31 21:25:32');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'google_analytics_client_id','Google Analytic Key','',NULL,'text',2),(2,'site_header_content','Site Header','',NULL,'text_area',0),(3,'site_footer_content','Site Footer','',NULL,'text_area',1),(4,'site_title','Site Title','',NULL,'text',3),(5,'site_logo','Site Logo','settings/August2017/CY2qr7VORXcmp1zKDzFJ.png',NULL,'image',4),(6,'site_social_fb','Facebook Page Url','',NULL,'text',5),(7,'site_social_ig','Instagram Url','',NULL,'text',6),(8,'site_social_linkedin','LinkedIn Url','',NULL,'text',7),(9,'site_social_twitter','Twitter Url','',NULL,'text',8),(10,'site_social_youtube','Youtube Channel','',NULL,'text',9),(11,'site_email','Site Email','',NULL,'text',11),(12,'company_address','Company Address','House C38, Street Cheerfullness, \r\nKhan Sensok, Phnom Penh Capital\r\n(Canadia City, Ratana Plaza area, \r\nOff Russian Blvd 50 meters)',NULL,'text_area',12),(13,'company_tel','Company Telephone','',NULL,'text',13),(14,'company_fax','Company Fax','',NULL,'text',14),(15,'site_copy_right','Site Copy right text','',NULL,'text',15),(16,'site_social_gplus','Google Plus Account','',NULL,'text',10),(17,'site_domain','Website Address','',NULL,'text',16),(18,'site_goole_map','Google Map','',NULL,'text',17);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_featured` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_created_by_foreign` (`created_by`),
  KEY `sliders_updated_by_foreign` (`updated_by`),
  CONSTRAINT `sliders_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  CONSTRAINT `sliders_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (3,'Meet Our Great Team','','http://google.com','Discover','sliders/July2017/7ZaaH0tTyJQFBVyXLhmh.jpg',NULL,1,1,1,1,NULL,'2017-07-29 08:58:35','2017-07-29 08:59:23');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `contact` json DEFAULT NULL,
  `email` json DEFAULT NULL,
  `social_media` json DEFAULT NULL,
  `education` json DEFAULT NULL,
  `experience` json DEFAULT NULL,
  `profile_pic` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quote` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Keo','Sokea','Keo Sokea','{\"data\": [\"Director / Founder\", \"ATTORNEY-AT-LAW\"]}','2017-08-03 01:23:16','{\"data\": {\"hp\": \"+(855) 012 267 897\", \"tel\": \"+(855) 023 883 885\", \"address\": \"N0: 220 Eo, Street 156, Sangkat Tuklaak II, Khan Toulkok, Phnom Penh\"}}','{\"data\": [\"sokea@skpcambodia.com\", \"keosokea77@yahoo.com\"]}','{\"data\": {\"fb\": \"facebook.com/rovinei\", \"ig\": \"\", \"gplus\": \"\", \"twitter\": \"\", \"youtube\": \"\", \"linkedin\": \"\"}}','{\"data\": [{\"date\": \"1987 - 1992\", \"desc\": \"<p>Bachelor Degree in Education in 1992 (Specialized in Russian)</p><p><b>Main subjects:</b> Russian Language and literature of Russian and of Western countries</p><p><b>Secondary subject:</b> Linguistics, Phonetic, Khmer Literature, Philosophy, Pedagogy and Psychology, etc</p>\", \"university\": \"PHNOM PENH UNIVERSITY\"}]}','{\"data\": [{\"date\": \"1995 - 1999\", \"desc\": \"<ul><li> Assisting international legal expert attached to provincial courts (Kompong Speu amd Takeo Courts) in providing trainings on human rights and laws to judicial police, judges and prosecutors</li></ul>\", \"place\": \"Judicial Assistant at Judicial Mentor Programme, UNHCHR\"}]}','teams/August2017/G6DtcwvwAKaX9BX98Ux1.png','tewew','2 Some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet to repeat predefined chunks as necessary, making this the first true generator on the Internet','2017-08-03 10:20:46');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_programs`
--

DROP TABLE IF EXISTS `training_programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_programs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `featured_image` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug_title` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT '0001-01-01',
  `end_date` date DEFAULT '0001-01-01',
  `organized_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'TRAINING',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_programs`
--

LOCK TABLES `training_programs` WRITE;
/*!40000 ALTER TABLE `training_programs` DISABLE KEYS */;
INSERT INTO `training_programs` VALUES (1,'Training on Tobacco Control','<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 20px; color: #555555; font-family: Raleway, sans-serif;\">The SKP CLG conducted a half day sensitization training on tobacco control in the Kingdom of Cambodia and relevant legal framework including progress in relation to the development of legislative framework. The training also covered briefing on the Country Report of the 2011 National Adult Tobacco Survey of Cambodia (NATSC, 2011). There are 10 participants including attorneys and legal assistants working for legal NGOs, UN agency and one law student.</p>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 20px 0px; color: #555555; font-family: Raleway, sans-serif;\">Status and legal framework concerning tobacco control:</p>\n<ul class=\"circlelist\" style=\"box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 0px; list-style: circle none; color: #555555; font-family: Raleway, sans-serif;\">\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Framework Convention on Tobacco Control (FCTC): Cambodia ratified on 15/11/2005</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Constitutional Provision: The health of the people shall be guaranteed. The State shall give full consideration to disease prevention and medical treatment. Poor citizens shall receive free medical consultation in public hospitals, infirmaries and maternities (Article 72)</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Draft Law on Tobacco Control : at the Council of Ministers</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Sub-decree # 35 of 24/02/2010 on Measures for the Banning of Tobacco Product Advertising</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Draft sub-decree on Smoke-Free Environment was initiated in 1st quarter 2012</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Other regulations re; Smoke Free were issued by 11 competent Ministries and Institutions : Ministry of Information</li>\n</ul>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 20px 0px; color: #555555; font-family: Raleway, sans-serif;\">(2010), Ministry of Agriculture (2010), Ministry of Interior (2009), MoEF (2007), MoEnvironment (2007), MoIndustry(2006), MoWA(2001), MoCult(2000), MoEYS(2000), CoM (1994) and Cambodian Red Cross</p>','','training-on-tobacco-control','2017-03-18','2017-05-15','Keo Sokea',1,NULL,'2017-08-03 03:34:08','2017-08-03 03:39:40','TRAINING');
/*!40000 ALTER TABLE `training_programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',3,'kh','User','2017-07-25 21:27:29','2017-07-25 21:27:29'),(2,'data_types','display_name_singular',3,'ch','User','2017-07-25 21:27:29','2017-07-25 21:27:29'),(3,'data_types','display_name_plural',3,'kh','Users','2017-07-25 21:27:29','2017-07-25 21:27:29'),(4,'data_types','display_name_plural',3,'ch','Users','2017-07-25 21:27:29','2017-07-25 21:27:29'),(5,'menu_items','title',12,'kh','','2017-07-25 22:07:59','2017-07-25 22:07:59'),(6,'menu_items','title',12,'ch','','2017-07-25 22:07:59','2017-07-25 22:07:59'),(7,'data_types','display_name_singular',7,'kh','Slider','2017-07-25 22:17:09','2017-07-25 22:17:09'),(8,'data_types','display_name_singular',7,'ch','Slider','2017-07-25 22:17:09','2017-07-25 22:17:09'),(9,'data_types','display_name_plural',7,'kh','Sliders','2017-07-25 22:17:09','2017-07-25 22:17:09'),(10,'data_types','display_name_plural',7,'ch','Sliders','2017-07-25 22:17:09','2017-07-25 22:17:09'),(31,'sliders','title',3,'kh','Meet Our Great Team (KH)','2017-07-29 08:58:35','2017-07-29 08:58:35'),(32,'sliders','title',3,'ch','Meet Our Great Team (CH)','2017-07-29 08:58:35','2017-07-29 08:58:35'),(33,'sliders','description',3,'kh','','2017-07-29 08:58:36','2017-07-29 08:58:36'),(34,'sliders','description',3,'ch','','2017-07-29 08:58:36','2017-07-29 08:58:36'),(35,'sliders','button_text',3,'kh','Discover (KH)','2017-07-29 08:58:36','2017-07-29 08:58:36'),(36,'sliders','button_text',3,'ch','Discover (CH)','2017-07-29 08:58:36','2017-07-29 08:58:36'),(37,'menu_items','title',13,'kh','','2017-07-30 00:56:16','2017-07-30 00:56:16'),(38,'menu_items','title',13,'ch','','2017-07-30 00:56:16','2017-07-30 00:56:16'),(39,'data_types','display_name_singular',8,'kh','Partner','2017-07-30 01:03:38','2017-07-30 01:03:38'),(40,'data_types','display_name_singular',8,'ch','Partner','2017-07-30 01:03:38','2017-07-30 01:03:38'),(41,'data_types','display_name_plural',8,'kh','Partners','2017-07-30 01:03:38','2017-07-30 01:03:38'),(42,'data_types','display_name_plural',8,'ch','Partners','2017-07-30 01:03:38','2017-07-30 01:03:38'),(43,'partners','company_name',1,'kh','Company 1 (KH)','2017-07-30 01:10:42','2017-07-30 01:10:42'),(44,'partners','company_name',1,'ch','Company 1 (CH)','2017-07-30 01:10:42','2017-07-30 01:10:42'),(45,'partners','company_profile',1,'kh','Company 1 profile goes here (KH)','2017-07-30 01:10:42','2017-07-30 01:10:42'),(46,'partners','company_profile',1,'ch','Company 1 profile goes here (CH)','2017-07-30 01:10:42','2017-07-30 01:10:42'),(47,'partners','company_name',2,'kh','Company 2 (KH)','2017-07-30 01:13:00','2017-07-30 01:13:00'),(48,'partners','company_name',2,'ch','Company 2 (CH)','2017-07-30 01:13:00','2017-07-30 01:13:00'),(49,'partners','company_profile',2,'kh','Company 2 profile goes here (KH)','2017-07-30 01:13:00','2017-07-30 01:13:00'),(50,'partners','company_profile',2,'ch','Company 2 profile goes here (CH)','2017-07-30 01:13:00','2017-07-30 01:13:00'),(51,'menu_items','title',14,'kh','','2017-07-31 01:47:30','2017-07-31 01:47:30'),(52,'menu_items','title',14,'ch','','2017-07-31 01:47:30','2017-07-31 01:47:30'),(53,'data_types','display_name_singular',9,'kh','Service','2017-07-31 01:53:43','2017-07-31 01:53:43'),(54,'data_types','display_name_singular',9,'ch','Service','2017-07-31 01:53:43','2017-07-31 01:53:43'),(55,'data_types','display_name_plural',9,'kh','Services','2017-07-31 01:53:43','2017-07-31 01:53:43'),(56,'data_types','display_name_plural',9,'ch','Services','2017-07-31 01:53:43','2017-07-31 01:53:43'),(57,'services','title',1,'kh','Corruption (KH)','2017-07-31 21:01:31','2017-07-31 21:01:31'),(58,'services','title',1,'ch','Corruption (CH)','2017-07-31 21:01:32','2017-07-31 21:01:32'),(59,'services','content',1,'kh','<p>There are many variations of passages of Lorem Ipsum available (kh)</p>','2017-07-31 21:01:32','2017-07-31 21:02:32'),(60,'services','content',1,'ch','<p>There are many variations of passages of Lorem Ipsum available (ch)</p>','2017-07-31 21:01:32','2017-07-31 21:02:32'),(61,'services','title',2,'kh','Justice','2017-07-31 21:04:56','2017-07-31 21:04:56'),(62,'services','title',2,'ch','Justice','2017-07-31 21:04:56','2017-07-31 21:04:56'),(63,'services','content',2,'kh','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','2017-07-31 21:04:56','2017-07-31 21:04:56'),(64,'services','content',2,'ch','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','2017-07-31 21:04:56','2017-07-31 21:04:56'),(65,'services','title',3,'kh','Legislation','2017-07-31 21:05:56','2017-07-31 21:05:56'),(66,'services','title',3,'ch','Legislation','2017-07-31 21:05:56','2017-07-31 21:05:56'),(67,'services','content',3,'kh','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','2017-07-31 21:05:56','2017-07-31 21:05:56'),(68,'services','content',3,'ch','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','2017-07-31 21:05:56','2017-07-31 21:05:56'),(69,'services','title',4,'kh','Banking and Finance','2017-07-31 21:07:22','2017-07-31 21:07:22'),(70,'services','title',4,'ch','Banking and Finance','2017-07-31 21:07:22','2017-07-31 21:07:22'),(71,'services','content',4,'kh','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','2017-07-31 21:07:23','2017-07-31 21:07:23'),(72,'services','content',4,'ch','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>','2017-07-31 21:07:23','2017-07-31 21:07:23'),(73,'services','title',5,'kh','','2017-07-31 21:08:23','2017-07-31 21:08:23'),(74,'services','title',5,'ch','','2017-07-31 21:08:23','2017-07-31 21:08:23'),(75,'services','content',5,'kh','','2017-07-31 21:08:23','2017-07-31 21:08:23'),(76,'services','content',5,'ch','','2017-07-31 21:08:23','2017-07-31 21:08:23'),(77,'services','title',6,'kh','','2017-07-31 21:09:07','2017-07-31 21:09:07'),(78,'services','title',6,'ch','','2017-07-31 21:09:07','2017-07-31 21:09:07'),(79,'services','content',6,'kh','','2017-07-31 21:09:07','2017-07-31 21:09:07'),(80,'services','content',6,'ch','','2017-07-31 21:09:07','2017-07-31 21:09:07'),(81,'services','excerpt',6,'kh','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, (kh)','2017-07-31 21:25:32','2017-07-31 21:25:32'),(82,'services','excerpt',6,'ch','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, (ch)','2017-07-31 21:25:32','2017-07-31 21:25:32'),(83,'posts','title',2,'kh','Lawyer  Year Award (kh)','2017-08-01 02:03:29','2017-08-01 02:03:29'),(84,'posts','title',2,'ch','Lawyer  Year Award (ch)','2017-08-01 02:03:29','2017-08-01 02:03:29'),(85,'posts','seo_title',2,'kh','','2017-08-01 02:03:29','2017-08-01 02:03:29'),(86,'posts','seo_title',2,'ch','','2017-08-01 02:03:29','2017-08-01 02:03:29'),(87,'posts','excerpt',2,'kh','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even','2017-08-01 02:03:29','2017-08-01 02:03:29'),(88,'posts','excerpt',2,'ch','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even','2017-08-01 02:03:29','2017-08-01 02:03:29'),(89,'posts','body',2,'kh','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even</p>','2017-08-01 02:03:29','2017-08-01 02:20:36'),(90,'posts','body',2,'ch','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even</p>','2017-08-01 02:03:29','2017-08-01 02:20:36'),(91,'posts','slug',2,'kh','lawyer-year-award','2017-08-01 02:03:29','2017-08-01 02:20:36'),(92,'posts','slug',2,'ch','lawyer-year-award','2017-08-01 02:03:30','2017-08-01 02:03:30'),(93,'posts','meta_description',2,'kh','','2017-08-01 02:03:30','2017-08-01 02:03:30'),(94,'posts','meta_description',2,'ch','','2017-08-01 02:03:30','2017-08-01 02:03:30'),(95,'posts','meta_keywords',2,'kh','','2017-08-01 02:03:30','2017-08-01 02:03:30'),(96,'posts','meta_keywords',2,'ch','','2017-08-01 02:03:30','2017-08-01 02:03:30'),(97,'categories','name',1,'kh','Law (kh)','2017-08-01 02:18:19','2017-08-01 02:18:57'),(98,'categories','name',1,'ch','Law (ch)','2017-08-01 02:18:19','2017-08-01 02:18:57'),(99,'menu_items','title',15,'kh','ទំព័រដេីម','2017-08-02 02:45:09','2017-08-02 02:45:09'),(100,'menu_items','title',15,'ch','主页','2017-08-02 02:45:09','2017-08-02 02:45:09'),(101,'menu_items','title',16,'kh','អំពីយេីង','2017-08-02 02:46:16','2017-08-02 02:46:16'),(102,'menu_items','title',16,'ch','关于我们','2017-08-02 02:46:16','2017-08-02 02:46:16'),(103,'menu_items','title',17,'kh','បេសកម្ម','2017-08-02 02:47:01','2017-08-02 02:47:01'),(104,'menu_items','title',17,'ch','任务','2017-08-02 02:47:01','2017-08-02 02:47:01'),(105,'menu_items','title',18,'kh','ក្រុមការងារ','2017-08-02 02:54:03','2017-08-02 02:54:03'),(106,'menu_items','title',18,'ch','球队','2017-08-02 02:54:03','2017-08-02 02:54:03'),(107,'menu_items','title',19,'kh','','2017-08-03 01:15:23','2017-08-03 01:15:23'),(108,'menu_items','title',19,'ch','','2017-08-03 01:15:23','2017-08-03 01:15:23'),(109,'menu_items','title',20,'kh','','2017-08-03 02:07:21','2017-08-03 02:07:21'),(110,'menu_items','title',20,'ch','','2017-08-03 02:07:21','2017-08-03 02:07:21'),(111,'data_types','display_name_singular',11,'kh','Publication','2017-08-03 02:07:57','2017-08-03 02:07:57'),(112,'data_types','display_name_singular',11,'ch','Publication','2017-08-03 02:07:57','2017-08-03 02:07:57'),(113,'data_types','display_name_plural',11,'kh','Publications','2017-08-03 02:07:57','2017-08-03 02:07:57'),(114,'data_types','display_name_plural',11,'ch','Publications','2017-08-03 02:07:57','2017-08-03 02:07:57'),(115,'publications','title',1,'kh','Adoption in the Kingdom of Cambodia (kh)','2017-08-03 02:09:31','2017-08-03 02:10:24'),(116,'publications','title',1,'ch','Adoption in the Kingdom of Cambodia (ch)','2017-08-03 02:09:31','2017-08-03 02:10:24'),(117,'publications','description',1,'kh','Adoption in the Kingdom of Cambodia description (kh)','2017-08-03 02:09:32','2017-08-03 02:10:24'),(118,'publications','description',1,'ch','Adoption in the Kingdom of Cambodia description (ch)','2017-08-03 02:09:32','2017-08-03 02:10:24'),(119,'menu_items','title',21,'kh','','2017-08-03 02:20:16','2017-08-03 02:20:16'),(120,'menu_items','title',21,'ch','','2017-08-03 02:20:16','2017-08-03 02:20:16'),(121,'menu_items','title',22,'kh','','2017-08-03 02:35:11','2017-08-03 02:35:11'),(122,'menu_items','title',22,'ch','','2017-08-03 02:35:11','2017-08-03 02:35:11'),(123,'menu_items','title',23,'kh','','2017-08-03 02:36:44','2017-08-03 02:36:44'),(124,'menu_items','title',23,'ch','','2017-08-03 02:36:44','2017-08-03 02:36:44'),(125,'data_types','display_name_singular',13,'kh','Activity Category','2017-08-03 02:39:06','2017-08-03 02:39:06'),(126,'data_types','display_name_singular',13,'ch','Activity Category','2017-08-03 02:39:06','2017-08-03 02:39:06'),(127,'data_types','display_name_plural',13,'kh','Activity Categories','2017-08-03 02:39:06','2017-08-03 02:39:06'),(128,'data_types','display_name_plural',13,'ch','Activity Categories','2017-08-03 02:39:06','2017-08-03 02:39:06'),(129,'activity_categories','name',1,'kh','Court Hearing (kh)','2017-08-03 02:43:05','2017-08-03 02:43:05'),(130,'activity_categories','name',1,'ch','Court Hearing (ch)','2017-08-03 02:43:06','2017-08-03 02:43:06'),(131,'data_types','display_name_singular',12,'kh','Activity','2017-08-03 02:43:56','2017-08-03 02:43:56'),(132,'data_types','display_name_singular',12,'ch','Activity','2017-08-03 02:43:56','2017-08-03 02:43:56'),(133,'data_types','display_name_plural',12,'kh','Activities','2017-08-03 02:43:56','2017-08-03 02:43:56'),(134,'data_types','display_name_plural',12,'ch','Activities','2017-08-03 02:43:56','2017-08-03 02:43:56'),(135,'activities','title',1,'kh','Draft Law on Alcohol Control (kh)','2017-08-03 02:48:49','2017-08-03 02:48:49'),(136,'activities','title',1,'ch','Draft Law on Alcohol Control Description (ch)','2017-08-03 02:48:49','2017-08-03 02:48:49'),(137,'activities','description',1,'kh','Draft Law on Alcohol Control Description (kh)','2017-08-03 02:48:49','2017-08-03 02:48:49'),(138,'activities','description',1,'ch','Draft Law on Alcohol Control Description (ch)','2017-08-03 02:48:49','2017-08-03 02:48:49'),(139,'menu_items','title',24,'kh','','2017-08-03 02:55:18','2017-08-03 02:55:18'),(140,'menu_items','title',24,'ch','','2017-08-03 02:55:18','2017-08-03 02:55:18'),(141,'menu_items','title',3,'kh','Posts','2017-08-03 02:55:39','2017-08-03 02:55:39'),(142,'menu_items','title',3,'ch','Posts','2017-08-03 02:55:39','2017-08-03 02:55:39'),(143,'menu_items','title',25,'kh','','2017-08-03 02:59:11','2017-08-03 02:59:11'),(144,'menu_items','title',25,'ch','','2017-08-03 02:59:11','2017-08-03 02:59:11'),(145,'menu_items','title',26,'kh','','2017-08-03 03:01:30','2017-08-03 03:01:30'),(146,'menu_items','title',26,'ch','','2017-08-03 03:01:30','2017-08-03 03:01:30'),(149,'menu_items','title',28,'kh','','2017-08-03 03:05:10','2017-08-03 03:05:10'),(150,'menu_items','title',28,'ch','','2017-08-03 03:05:10','2017-08-03 03:05:10'),(151,'data_types','display_name_singular',14,'kh','Training Program','2017-08-03 03:22:32','2017-08-03 03:22:32'),(152,'data_types','display_name_singular',14,'ch','Training Program','2017-08-03 03:22:32','2017-08-03 03:22:32'),(153,'data_types','display_name_plural',14,'kh','Training Programs','2017-08-03 03:22:33','2017-08-03 03:22:33'),(154,'data_types','display_name_plural',14,'ch','Training Programs','2017-08-03 03:22:33','2017-08-03 03:22:33'),(155,'training_programs','title',1,'kh','Training on Tobacco Control (kh)','2017-08-03 03:34:08','2017-08-03 03:34:08'),(156,'training_programs','title',1,'ch','Training on Tobacco Control (ch)','2017-08-03 03:34:08','2017-08-03 03:34:08'),(157,'training_programs','content',1,'kh','<p>Khmer Content</p>\n<p> </p>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 20px; color: #555555; font-family: Raleway, sans-serif;\">The SKP CLG conducted a half day sensitization training on tobacco control in the Kingdom of Cambodia and relevant legal framework including progress in relation to the development of legislative framework. The training also covered briefing on the Country Report of the 2011 National Adult Tobacco Survey of Cambodia (NATSC, 2011). There are 10 participants including attorneys and legal assistants working for legal NGOs, UN agency and one law student.</p>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 20px 0px; color: #555555; font-family: Raleway, sans-serif;\">Status and legal framework concerning tobacco control:</p>\n<ul class=\"circlelist\" style=\"box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 0px; list-style: circle none; color: #555555; font-family: Raleway, sans-serif;\">\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Framework Convention on Tobacco Control (FCTC): Cambodia ratified on 15/11/2005</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Constitutional Provision: The health of the people shall be guaranteed. The State shall give full consideration to disease prevention and medical treatment. Poor citizens shall receive free medical consultation in public hospitals, infirmaries and maternities (Article 72)</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Draft Law on Tobacco Control : at the Council of Ministers</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Sub-decree # 35 of 24/02/2010 on Measures for the Banning of Tobacco Product Advertising</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Draft sub-decree on Smoke-Free Environment was initiated in 1st quarter 2012</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Other regulations re; Smoke Free were issued by 11 competent Ministries and Institutions : Ministry of Information</li>\n</ul>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 20px 0px; color: #555555; font-family: Raleway, sans-serif;\">(2010), Ministry of Agriculture (2010), Ministry of Interior (2009), MoEF (2007), MoEnvironment (2007), MoIndustry(2006), MoWA(2001), MoCult(2000), MoEYS(2000), CoM (1994) and Cambodian Red Cross</p>','2017-08-03 03:34:08','2017-08-03 03:39:40'),(158,'training_programs','content',1,'ch','<p>Chinese Content</p>\n<p> </p>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 20px; color: #555555; font-family: Raleway, sans-serif;\">The SKP CLG conducted a half day sensitization training on tobacco control in the Kingdom of Cambodia and relevant legal framework including progress in relation to the development of legislative framework. The training also covered briefing on the Country Report of the 2011 National Adult Tobacco Survey of Cambodia (NATSC, 2011). There are 10 participants including attorneys and legal assistants working for legal NGOs, UN agency and one law student.</p>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 20px 0px; color: #555555; font-family: Raleway, sans-serif;\">Status and legal framework concerning tobacco control:</p>\n<ul class=\"circlelist\" style=\"box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 0px; list-style: circle none; color: #555555; font-family: Raleway, sans-serif;\">\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Framework Convention on Tobacco Control (FCTC): Cambodia ratified on 15/11/2005</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Constitutional Provision: The health of the people shall be guaranteed. The State shall give full consideration to disease prevention and medical treatment. Poor citizens shall receive free medical consultation in public hospitals, infirmaries and maternities (Article 72)</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Draft Law on Tobacco Control : at the Council of Ministers</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Sub-decree # 35 of 24/02/2010 on Measures for the Banning of Tobacco Product Advertising</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Draft sub-decree on Smoke-Free Environment was initiated in 1st quarter 2012</li>\n<li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Other regulations re; Smoke Free were issued by 11 competent Ministries and Institutions : Ministry of Information</li>\n</ul>\n<p style=\"box-sizing: border-box; padding: 0px; margin: 20px 0px; color: #555555; font-family: Raleway, sans-serif;\">(2010), Ministry of Agriculture (2010), Ministry of Interior (2009), MoEF (2007), MoEnvironment (2007), MoIndustry(2006), MoWA(2001), MoCult(2000), MoEYS(2000), CoM (1994) and Cambodian Red Cross</p>','2017-08-03 03:34:08','2017-08-03 03:39:40'),(159,'training_programs','organized_by',1,'kh','Keo Sokea','2017-08-03 03:34:08','2017-08-03 03:34:08'),(160,'training_programs','organized_by',1,'ch','Keo Sokea','2017-08-03 03:34:08','2017-08-03 03:34:08');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'ro','vinei','rovinei','ro.vinei@yahoo.com','users/default.png',NULL,NULL,NULL,NULL,1,'$2y$10$MN8A3ido0R1cYk7IyVG8aO2kyxGok96zfvigc1VTOXZ3HuLqH.GRW','hj031LH1YbaGrGLMzHOdXaFOHEzF6Ts8KKvGe1pyzewEOMbJkpkVXKY9tsdx',NULL,'2017-07-25 19:48:17','2017-07-25 19:48:33'),(2,1,'Pann','Rana','pannrana','rana@gmail.com','users/default.png',NULL,NULL,NULL,'eee',1,'$2y$10$jhYIAKcWaQsjT/pf4ktRxeA9Fq6Qj1OkVrSKauGTigTjUIvPi78ee',NULL,NULL,'2017-07-27 03:36:23','2017-07-27 03:43:50');
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

-- Dump completed on 2017-08-06  9:20:58
