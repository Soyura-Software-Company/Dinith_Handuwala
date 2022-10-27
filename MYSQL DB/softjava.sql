-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2022 at 06:55 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softjava`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `Id` int NOT NULL,
  `AdminName` varchar(45) NOT NULL,
  `UseName` varchar(45) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile` varchar(45) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`Id`, `AdminName`, `UseName`, `Password`, `Email`, `Mobile`, `Status`) VALUES
(4, 'jamith', 'jamith', '202cb962ac59075b964b07152d234b70', 'vimukthi@gmail.com', '0754888916', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Id` int NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `Grade_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Id`, `Description`, `Status`, `Grade_Id`) VALUES
(17, 'Theory', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `classdate`
--

CREATE TABLE `classdate` (
  `Id` int NOT NULL,
  `Monday` tinyint(1) NOT NULL DEFAULT '0',
  `Tuesday` tinyint(1) NOT NULL DEFAULT '0',
  `Wednessday` tinyint(1) NOT NULL DEFAULT '0',
  `Thursday` tinyint(1) NOT NULL DEFAULT '0',
  `Friday` tinyint(1) NOT NULL DEFAULT '0',
  `Saturday` tinyint(1) NOT NULL DEFAULT '0',
  `Sunday` tinyint(1) NOT NULL DEFAULT '0',
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `TimeTable_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `classdate`
--

INSERT INTO `classdate` (`Id`, `Monday`, `Tuesday`, `Wednessday`, `Thursday`, `Friday`, `Saturday`, `Sunday`, `Status`, `TimeTable_Id`) VALUES
(17, 1, 1, 0, 0, 0, 0, 0, 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `classfees`
--

CREATE TABLE `classfees` (
  `Id` int NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `Class_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `Id` int NOT NULL,
  `District` varchar(45) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`Id`, `District`, `Status`) VALUES
(4, 'Gampaha', 1),
(5, 'Colombo', 1),
(6, 'Nuwara Eliya', 1),
(7, 'Negombo', 1),
(8, 'Kaluthara', 1),
(9, 'Kandy', 1),
(10, 'Matale', 1),
(11, 'Galle', 1),
(12, 'Matara', 1),
(13, 'Hambantota', 1),
(14, 'Jaffna', 1),
(15, 'Kilinochchi', 1),
(16, 'Mannar', 1),
(17, 'Vavuniya', 1),
(18, 'Mullaitivu', 1),
(19, 'Batticola', 1),
(20, 'Ampara', 1),
(21, 'Trincomalee', 1),
(22, 'Kurunegala', 1),
(23, 'Puttalam', 1),
(24, 'Anuradhapura', 1),
(25, 'Polonnaruwa', 1),
(26, 'Badulla', 1),
(27, 'Moneragala', 1),
(28, 'Rathnapura', 1),
(29, 'Kegalle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emailverification`
--

CREATE TABLE `emailverification` (
  `Id` int NOT NULL,
  `StudentId` varchar(20) NOT NULL,
  `VerificationCode` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `Id` int NOT NULL,
  `Grade` varchar(45) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`Id`, `Grade`, `Status`) VALUES
(6, 'Grade 6', 1),
(7, 'Grade 7', 1),
(8, 'Grade 8', 1),
(9, 'Grade 9', 1),
(10, 'Grade 10', 1),
(11, 'Grade 11', 1),
(12, 'A/L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int NOT NULL,
  `SlipImage` varchar(90) NOT NULL,
  `Discription` varchar(250) NOT NULL,
  `PaymentAmount` double(15,2) NOT NULL,
  `PaymentDate` varchar(10) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `Student_Id` int NOT NULL,
  `Class_Id` int NOT NULL,
  `Id2` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `SlipImage`, `Discription`, `PaymentAmount`, `PaymentDate`, `Status`, `Student_Id`, `Class_Id`, `Id2`) VALUES
(79, 'sample', 'sample', 0.00, '2000/01/01', 1, 17, 17, 1),
(81, '1666895929,images_EMP2022_IMG_3410.jpg', 'for paper class vimukthi lakshan 200010200450', 2000.00, '2022-10', 1, 17, 17, 80);

-- --------------------------------------------------------

--
-- Table structure for table `paymentstatus`
--

CREATE TABLE `paymentstatus` (
  `Id` int NOT NULL,
  `PaymentStatus` tinyint(1) NOT NULL DEFAULT '0',
  `Class_Id` int NOT NULL,
  `Student_Id` int NOT NULL,
  `TimeTableId` int NOT NULL,
  `PaymentId` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `paymentstatus`
--

INSERT INTO `paymentstatus` (`Id`, `PaymentStatus`, `Class_Id`, `Student_Id`, `TimeTableId`, `PaymentId`) VALUES
(50, 1, 17, 17, 23, '80');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int NOT NULL,
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
  `StudentUser_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Fname`, `Lname`, `Gender`, `Address`, `Mobile`, `WhatsappNumber`, `Mail`, `SchoolName`, `RegDate`, `Status`, `District_Id`, `Grade_Id`, `StudentUser_Id`) VALUES
(17, 'vimukthi', 'lakshan', 'Male', '503/D Narangodapaluwa Batuwatta', '0754888916', '0754888916', 'vimukthilakshan82@gmail.com', 'kbc', '2000-04-11', 1, 8, 6, 23);

-- --------------------------------------------------------

--
-- Table structure for table `studentimage`
--

CREATE TABLE `studentimage` (
  `id` int NOT NULL,
  `image` varchar(45) NOT NULL,
  `studentId` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `studentuser`
--

CREATE TABLE `studentuser` (
  `Id` int NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `studentuser`
--

INSERT INTO `studentuser` (`Id`, `UserName`, `Password`, `Status`) VALUES
(23, 'vimukthi', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Id` int NOT NULL,
  `Description` varchar(250) NOT NULL,
  `StartTime` varchar(15) NOT NULL,
  `EndTime` varchar(15) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `ZoomLink_Id` int NOT NULL,
  `Class_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Id`, `Description`, `StartTime`, `EndTime`, `Status`, `ZoomLink_Id`, `Class_Id`) VALUES
(23, 'A/L 2022 Students', '5.30', '7.30', 1, 18, 17);

-- --------------------------------------------------------

--
-- Table structure for table `zoomlink`
--

CREATE TABLE `zoomlink` (
  `Id` int NOT NULL,
  `ZoomLink` varchar(450) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `zoomlink`
--

INSERT INTO `zoomlink` (`Id`, `ZoomLink`, `Status`) VALUES
(18, 'https://google.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Class_Grade1_idx` (`Grade_Id`);

--
-- Indexes for table `classdate`
--
ALTER TABLE `classdate`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_ClassDate_TimeTable1_idx` (`TimeTable_Id`);

--
-- Indexes for table `classfees`
--
ALTER TABLE `classfees`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_ClassFees_Class1_idx` (`Class_Id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `emailverification`
--
ALTER TABLE `emailverification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Payment_Student1_idx` (`Student_Id`),
  ADD KEY `fk_Payment_Class1_idx` (`Class_Id`);

--
-- Indexes for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_PaymentStatus_Class1_idx` (`Class_Id`),
  ADD KEY `fk_PaymentStatus_Student1_idx` (`Student_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Student_District_idx` (`District_Id`),
  ADD KEY `fk_Student_Grade1_idx` (`Grade_Id`),
  ADD KEY `fk_Student_StudentUser1_idx` (`StudentUser_Id`);

--
-- Indexes for table `studentimage`
--
ALTER TABLE `studentimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentuser`
--
ALTER TABLE `studentuser`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_TimeTable_ZoomLink1_idx` (`ZoomLink_Id`),
  ADD KEY `fk_TimeTable_Class1_idx` (`Class_Id`);

--
-- Indexes for table `zoomlink`
--
ALTER TABLE `zoomlink`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `classdate`
--
ALTER TABLE `classdate`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `classfees`
--
ALTER TABLE `classfees`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `emailverification`
--
ALTER TABLE `emailverification`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `studentimage`
--
ALTER TABLE `studentimage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentuser`
--
ALTER TABLE `studentuser`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `zoomlink`
--
ALTER TABLE `zoomlink`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_Class_Grade1` FOREIGN KEY (`Grade_Id`) REFERENCES `grade` (`Id`);

--
-- Constraints for table `classdate`
--
ALTER TABLE `classdate`
  ADD CONSTRAINT `fk_ClassDate_TimeTable1` FOREIGN KEY (`TimeTable_Id`) REFERENCES `timetable` (`Id`);

--
-- Constraints for table `classfees`
--
ALTER TABLE `classfees`
  ADD CONSTRAINT `fk_ClassFees_Class1` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_Payment_Class1` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`),
  ADD CONSTRAINT `fk_Payment_Student1` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Id`);

--
-- Constraints for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  ADD CONSTRAINT `fk_PaymentStatus_Class1` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`),
  ADD CONSTRAINT `fk_PaymentStatus_Student1` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_Student_District` FOREIGN KEY (`District_Id`) REFERENCES `district` (`Id`),
  ADD CONSTRAINT `fk_Student_Grade1` FOREIGN KEY (`Grade_Id`) REFERENCES `grade` (`Id`),
  ADD CONSTRAINT `fk_Student_StudentUser1` FOREIGN KEY (`StudentUser_Id`) REFERENCES `studentuser` (`Id`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `fk_TimeTable_Class1` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`),
  ADD CONSTRAINT `fk_TimeTable_ZoomLink1` FOREIGN KEY (`ZoomLink_Id`) REFERENCES `zoomlink` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
