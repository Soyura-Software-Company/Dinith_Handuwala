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
-- Table structure for table `paymentstatus`
--

DROP TABLE IF EXISTS `paymentstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paymentstatus` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `PaymentStatus` tinyint(1) NOT NULL DEFAULT '0',
  `Class_Id` int NOT NULL,
  `Student_Id` int NOT NULL,
  `TimeTable_Id` int NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_PaymentStatus_Class1_idx` (`Class_Id`),
  KEY `fk_PaymentStatus_Student1_idx` (`Student_Id`),
  KEY `fk_TimeTable_ID_idx` (`TimeTable_Id`),
  CONSTRAINT `fk_PaymentStatus_Class1` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`),
  CONSTRAINT `fk_PaymentStatus_Student1` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Id`),
  CONSTRAINT `Fk_tID` FOREIGN KEY (`TimeTable_Id`) REFERENCES `timetable` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymentstatus`
--

LOCK TABLES `paymentstatus` WRITE;
/*!40000 ALTER TABLE `paymentstatus` DISABLE KEYS */;
INSERT INTO `paymentstatus` VALUES (1,1,1,1,1);
/*!40000 ALTER TABLE `paymentstatus` ENABLE KEYS */;
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
