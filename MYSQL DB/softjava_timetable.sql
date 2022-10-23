CREATE DATABASE  IF NOT EXISTS `softjava` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `softjava`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: softjava
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timetable` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Description` varchar(250) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `ClassDate_Id` int NOT NULL,
  `ZoomLink_Id` int NOT NULL,
  `Class_Id` int NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_TimeTable_ClassDate1_idx` (`ClassDate_Id`),
  KEY `fk_TimeTable_ZoomLink1_idx` (`ZoomLink_Id`),
  KEY `fk_TimeTable_Class1_idx` (`Class_Id`),
  CONSTRAINT `fk_TimeTable_Class1` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`),
  CONSTRAINT `fk_TimeTable_ClassDate1` FOREIGN KEY (`ClassDate_Id`) REFERENCES `classdate` (`Id`),
  CONSTRAINT `fk_TimeTable_ZoomLink1` FOREIGN KEY (`ZoomLink_Id`) REFERENCES `zoomlink` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timetable`
--

LOCK TABLES `timetable` WRITE;
/*!40000 ALTER TABLE `timetable` DISABLE KEYS */;
INSERT INTO `timetable` VALUES (1,'Grade 8','07:00:00','12:00:00',1,1,1,1),(2,'Grade 9','08:00:00','11:00:00',1,2,2,2);
/*!40000 ALTER TABLE `timetable` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-16 20:56:52
