<?php
require_once ('database/dbconnect.php');
require_once ('model/studentuser.php');

class StudentUserService extends StudentUser{
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

    public function insertStudentUser(){
        $query="INSERT INTO `StudentUser`(
            `UserName`, 
            `Password`) VALUES (
                '".$this->inputClear($this->getUserName())."',
                '".$this->inputClear($this->getPassword())."')";
        $this->db->insertIntoDb($query);

    }

    public function updateStudentUser(){
        $query="UPDATE `StudentUser` SET 
        `UserName`='".$this->inputClear($this->getUserName())."',
        `Password`='".$this->inputClear($this->getPassword())."',
         WHERE `Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteStudentUser(){
        $query="UPDATE `StudentUser` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}