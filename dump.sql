-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: onoartsr.beget.tech    Database: onoartsr_frimis
-- ------------------------------------------------------
-- Server version	5.7.21-20-beget-5.7.21-20-1-log

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_on_main_page` tinyint(1) DEFAULT NULL,
  `is_full_on_sidebar` tinyint(1) DEFAULT NULL,
  `price_start` decimal(10,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Перчатки','uploads/autumn1.jpg',1,0,500,'2019-11-05 18:56:34','2019-11-05 18:56:37'),(2,'Шарфы и платки','uploads/autumn3.jpg',1,1,300,'2019-11-05 18:57:49','2019-11-05 18:57:51'),(3,'Солнцезащитные платки','uploads/autumn1.jpg',1,0,200,'2019-11-05 18:58:17','2019-11-05 18:58:20'),(4,'Солнцезащитные платки','uploads/autumn1.jpg',1,0,100,'2019-11-05 18:58:17','2019-11-05 18:58:20');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collection`
--

DROP TABLE IF EXISTS `collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `season` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `call_to_action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collection`
--

LOCK TABLES `collection` WRITE;
/*!40000 ALTER TABLE `collection` DISABLE KEYS */;
INSERT INTO `collection` VALUES (1,2010,'Осень',1,'СОБЕРИ ОСЕННИЙ ОБРАЗ','uploads/autumnGirl.jpg','НОВАЯ КОЛЛЕКЦИЯ','2019-11-05 19:00:59','2019-11-05 19:01:02');
/*!40000 ALTER TABLE `collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `good`
--

DROP TABLE IF EXISTS `good`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `good` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` decimal(10,0) DEFAULT NULL,
  `old_price` decimal(10,0) DEFAULT NULL,
  `contains` text COLLATE utf8_unicode_ci,
  `is_on_top` tinyint(1) DEFAULT NULL,
  `art` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `look_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `is_on_sale` tinyint(1) DEFAULT NULL,
  `best` tinyint(1) DEFAULT NULL,
  `new` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `good_category_id_fk` (`category_id`),
  KEY `good_collection_id_fk` (`collection_id`),
  CONSTRAINT `good_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `good_collection_id_fk` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `good`
--

LOCK TABLES `good` WRITE;
/*!40000 ALTER TABLE `good` DISABLE KEYS */;
INSERT INTO `good` VALUES (1,'Шарф','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, suscipit, similique',999,0,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, suscipit, similique',1,'111111',NULL,1,2,0,NULL,NULL,'2019-11-05 19:01:16','2019-11-05 19:01:18'),(2,'Шапка','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, suscipit, similique',1000,1999,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, suscipit, similique',NULL,NULL,NULL,1,1,0,NULL,NULL,'2019-11-06 17:09:54','2019-11-06 17:09:56');
/*!40000 ALTER TABLE `good` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `good_color`
--

DROP TABLE IF EXISTS `good_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `good_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `good_id` int(11) DEFAULT NULL,
  `color_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `good_color_good_id_fk` (`good_id`),
  CONSTRAINT `good_color_good_id_fk` FOREIGN KEY (`good_id`) REFERENCES `good` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `good_color`
--

LOCK TABLES `good_color` WRITE;
/*!40000 ALTER TABLE `good_color` DISABLE KEYS */;
INSERT INTO `good_color` VALUES (1,1,'ЧОРНИЙ','000000',0,'2019-11-05 19:01:53','2019-11-05 19:01:55'),(2,1,'КРАСНИЙ','FF0000',1,'2019-11-06 16:55:48','2019-11-06 16:55:50'),(3,2,'ЗЕЛЕНИЙ','00FF00',1,'2019-11-08 15:38:04','2019-11-08 15:38:06');
/*!40000 ALTER TABLE `good_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `good_combined`
--

DROP TABLE IF EXISTS `good_combined`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `good_combined` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `good_id` int(11) DEFAULT NULL,
  `combined_good_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `good_combined_good_id_fk` (`combined_good_id`),
  CONSTRAINT `good_combined_good_id_fk` FOREIGN KEY (`combined_good_id`) REFERENCES `good` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `good_combined`
--

LOCK TABLES `good_combined` WRITE;
/*!40000 ALTER TABLE `good_combined` DISABLE KEYS */;
INSERT INTO `good_combined` VALUES (1,1,2,'2019-11-06 17:11:07','2019-11-06 17:11:11');
/*!40000 ALTER TABLE `good_combined` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `good_photo`
--

DROP TABLE IF EXISTS `good_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `good_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `good_id` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `good_photo_good_id_fk` (`good_id`),
  CONSTRAINT `good_photo_good_id_fk` FOREIGN KEY (`good_id`) REFERENCES `good` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `good_photo`
--

LOCK TABLES `good_photo` WRITE;
/*!40000 ALTER TABLE `good_photo` DISABLE KEYS */;
INSERT INTO `good_photo` VALUES (1,1,'https://sammy-icon.ru/upload/iblock/ca5/ca5d107a3cc4141fe0ea954d66691fca.jpg',1,'2019-11-05 19:02:40','2019-11-05 19:02:41'),(2,1,'uploads/bigGoodPhoto.jpg',0,'2019-11-06 16:41:49','2019-11-06 16:41:51'),(3,1,'uploads/bigGoodPhoto.jpg',0,'2019-11-06 16:42:14','2019-11-06 16:42:16'),(4,2,'uploads/bigGoodPhoto.jpg',1,'2019-11-06 17:10:51','2019-11-06 17:10:53');
/*!40000 ALTER TABLE `good_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `good_size`
--

DROP TABLE IF EXISTS `good_size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `good_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `good_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `good_size_good_id_fk` (`good_id`),
  CONSTRAINT `good_size_good_id_fk` FOREIGN KEY (`good_id`) REFERENCES `good` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `good_size`
--

LOCK TABLES `good_size` WRITE;
/*!40000 ALTER TABLE `good_size` DISABLE KEYS */;
INSERT INTO `good_size` VALUES (1,'52',1,'2019-11-05 19:03:08','2019-11-05 19:03:11'),(2,'54',1,'2019-11-06 16:53:10','2019-11-06 16:53:12'),(3,'30',2,'2019-11-08 15:44:54','2019-11-08 15:44:56');
/*!40000 ALTER TABLE `good_size` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instagram`
--

DROP TABLE IF EXISTS `instagram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instagram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) DEFAULT NULL,
  `cid` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instagram`
--

LOCK TABLES `instagram` WRITE;
/*!40000 ALTER TABLE `instagram` DISABLE KEYS */;
INSERT INTO `instagram` VALUES (1,'2263947402.1677ed0.5e9b6050e2d342d8b2f94dac8e08389d','2263947402','2019-11-07 11:14:18','2019-11-07 11:14:20');
/*!40000 ALTER TABLE `instagram` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `look`
--

DROP TABLE IF EXISTS `look`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `look` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `look`
--

LOCK TABLES `look` WRITE;
/*!40000 ALTER TABLE `look` DISABLE KEYS */;
/*!40000 ALTER TABLE `look` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `look_combined`
--

DROP TABLE IF EXISTS `look_combined`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `look_combined` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `good_id` int(11) DEFAULT NULL,
  `look_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `look_combined_good_id_fk` (`good_id`),
  KEY `look_combined_look_id_fk` (`look_id`),
  CONSTRAINT `look_combined_good_id_fk` FOREIGN KEY (`good_id`) REFERENCES `good` (`id`),
  CONSTRAINT `look_combined_look_id_fk` FOREIGN KEY (`look_id`) REFERENCES `look` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `look_combined`
--

LOCK TABLES `look_combined` WRITE;
/*!40000 ALTER TABLE `look_combined` DISABLE KEYS */;
/*!40000 ALTER TABLE `look_combined` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `look_photo`
--

DROP TABLE IF EXISTS `look_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `look_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `look_id` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `look_photo_look_id_fk` (`look_id`),
  CONSTRAINT `look_photo_look_id_fk` FOREIGN KEY (`look_id`) REFERENCES `look` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `look_photo`
--

LOCK TABLES `look_photo` WRITE;
/*!40000 ALTER TABLE `look_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `look_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `market`
--

DROP TABLE IF EXISTS `market`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `market` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) DEFAULT NULL,
  `lat` decimal(10,0) DEFAULT NULL,
  `lng` decimal(10,0) DEFAULT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `market_city_id_fk` (`city_id`),
  CONSTRAINT `market_city_id_fk` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `market`
--

LOCK TABLES `market` WRITE;
/*!40000 ALTER TABLE `market` DISABLE KEYS */;
/*!40000 ALTER TABLE `market` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `apt` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `bonus` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `house` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_good`
--

DROP TABLE IF EXISTS `order_good`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_good` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `good_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_good_order_id_fk` (`order_id`),
  KEY `order_good_good_id_fk` (`good_id`),
  CONSTRAINT `order_good_good_id_fk` FOREIGN KEY (`good_id`) REFERENCES `good` (`id`),
  CONSTRAINT `order_good_order_id_fk` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_good`
--

LOCK TABLES `order_good` WRITE;
/*!40000 ALTER TABLE `order_good` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_good` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8_unicode_ci,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_photo`
--

DROP TABLE IF EXISTS `review_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `review_photo_review_id_fk` (`review_id`),
  CONSTRAINT `review_photo_review_id_fk` FOREIGN KEY (`review_id`) REFERENCES `review` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_photo`
--

LOCK TABLES `review_photo` WRITE;
/*!40000 ALTER TABLE `review_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriber`
--

LOCK TABLES `subscriber` WRITE;
/*!40000 ALTER TABLE `subscriber` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriber` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-10 15:47:17
