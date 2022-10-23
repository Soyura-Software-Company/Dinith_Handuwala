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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Fname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Mobile` varchar(45) NOT NULL,
  `WhatsappNumber` varchar(45) DEFAULT NULL,
  `Mail` varchar(45) DEFAULT NULL,
  `SchoolName` varchar(45) NOT NULL,
  `RegDate` date NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `District_Id` int NOT NULL,
  `Grade_Id` int NOT NULL,
  `StudentUser_Id` int NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Student_District_idx` (`District_Id`),
  KEY `fk_Student_Grade1_idx` (`Grade_Id`),
  KEY `fk_Student_StudentUser1_idx` (`StudentUser_Id`),
  CONSTRAINT `fk_Student_District` FOREIGN KEY (`District_Id`) REFERENCES `district` (`Id`),
  CONSTRAINT `fk_Student_Grade1` FOREIGN KEY (`Grade_Id`) REFERENCES `grade` (`Id`),
  CONSTRAINT `fk_Student_StudentUser1` FOREIGN KEY (`StudentUser_Id`) REFERENCES `studentuser` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'samindu','denuwan','male','no 91 A','07612345678','07612345678','asd@gmail.com','school','2022-10-01',1,1,5,1);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
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
