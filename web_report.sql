CREATE DATABASE  IF NOT EXISTS `my_report` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `my_report`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: my_report
-- ------------------------------------------------------
-- Server version	5.5.8

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
-- Table structure for table `web_report`
--

DROP TABLE IF EXISTS `web_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `agency_id` varchar(45) DEFAULT NULL,
  `report_content` text,
  `report_content_path` varchar(45) DEFAULT NULL,
  `report_status` varchar(10) DEFAULT NULL,
  `report_coordinates` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_report`
--

LOCK TABLES `web_report` WRITE;
/*!40000 ALTER TABLE `web_report` DISABLE KEYS */;
INSERT INTO `web_report` VALUES (1,1,'2','test',NULL,'dispatch','0,0'),(2,1,'2','test',NULL,'recent','0,0'),(3,1,'1','test','images/frozen.jpg','recent','0,0'),(4,1,'1','test','images/frozen.jpg','recent','0,0'),(5,1,'2','test',NULL,'recent','0,0'),(6,1,'1','test',NULL,'recent','0,0'),(7,1,'1','test',NULL,'recent','0,0'),(8,1,'1','test',NULL,'recent','0,0'),(9,1,'1','test',NULL,'recent','0,0'),(10,1,'1','test',NULL,'recent','0,0'),(11,1,'1','test',NULL,'recent','0,0');
/*!40000 ALTER TABLE `web_report` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-04 16:54:00
