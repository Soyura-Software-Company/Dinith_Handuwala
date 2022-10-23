<?php
require_once ('database/dbconnect.php');
require_once ('model/grade.php');

class GradeService extends Grade{
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

    public function insertGrade(){
        $query="INSERT INTO `grade`(`Grade`) VALUES
        ( '".$this->inputClear($this->getMonday())."')";
        $this->db->insertIntoDb($query);

    }

    public function updateGrade(){
        $query="UPDATE `grade` SET `Grade`='".$this->inputClear($this->getMonday())."' WHERE `Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteGrade(){
        $query="UPDATE `grade` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}