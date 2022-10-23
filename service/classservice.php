<?php
require_once ('../database/dbconnect.php');
require_once ('../model/classes.php');

class ClassesService extends Classes{
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

    public function insertClasses(){
        $query="INSERT INTO `Class`(
            `Description`,
              `Grade_Id`) VALUES (
                '".$this->inputClear($this->getDescription())."',
                '".$this->inputClear($this->getGradeId())."')";
        $this->db->insertIntoDb($query);

    }

    public function updateClasses(){
        $query="UPDATE `class` SET 
        `Description`='".$this->inputClear($this->getDescription())."',
        `Grade_Id`='".$this->inputClear($this->getGradeId())."' WHERE `Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteClasses(){
        $query="UPDATE `class` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}