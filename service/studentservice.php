<?php
require_once ('database/dbconnect.php');
require_once ('model/student.php');

class StudentService extends Student{
    private $db;
    public function __construct(){
    
        $this->db = new dbconnect();
    }

    public function inputClear($data){
        $data1 = trim($data);
        $data2  = stripslashes($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    public function insertStudent(){
        $query="INSERT INTO `Student`(
            `Fname`, 
            `Lname`, 
            `Gender`, 
            `Address`, 
            `Mobile`, 
            `WhatsappNumber`, 
            `Mail`, 
            `SchoolName`, 
            `RegDate`, 
            `District_Id`, 
            `Grade_Id`, 
            `StudentUser_Id`) VALUES (
                '".$this->inputClear($this->getFname())."',
                '".$this->inputClear($this->getLname())."',
                '".$this->inputClear($this->getGender())."',
                '".$this->inputClear($this->getAddress())."',
                '".$this->inputClear($this->getMobile())."',
                '".$this->inputClear($this->getWhatsappnumber())."',
                '".$this->inputClear($this->getMail())."',
                '".$this->inputClear($this->getSchoolName())."',
                '".$this->inputClear($this->getRegDate())."',
                '".$this->inputClear($this->getDistrictId())."',
                '".$this->inputClear($this->getGradeId())."',
                '".$this->inputClear($this->getStudentUserId())."')";
        $this->db->insertIntoDb($query);

    }

    public function updateStudent(){
        $query="UPDATE `student` SET 
        `Fname`='".$this->inputClear($this->getFname())."',
        `Lname`='".$this->inputClear($this->getLname())."',
        `Gender`='".$this->inputClear($this->getGender())."',
        `Address`='".$this->inputClear($this->getAddress())."',
        `Mobile`='".$this->inputClear($this->getMobile())."',
        `WhatsappNumber`='".$this->inputClear($this->getWhatsappnumber())."',
        `Mail`='".$this->inputClear($this->getMail())."',
        `SchoolName`='".$this->inputClear($this->getSchoolName())."',
        `District_Id`='".$this->inputClear($this->getDistrictId())."',
        `Grade_Id`='".$this->inputClear($this->getGradeId())."',
        `StudentUser_Id`='".$this->inputClear($this->getStudentUserId())."' WHERE `Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteStudent(){
        $query="UPDATE `student` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}