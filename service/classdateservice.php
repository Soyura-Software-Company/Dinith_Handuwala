<?php
require_once ('../database/dbconnect.php');
require_once ('../model/classdate.php');

class ClassDateService extends ClassDate{
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

    public function insertClassDate(){
        $query="INSERT INTO `classdate`(
             `Monday`,
              `Tuesday`,
               `Wednessday`,
                `Thursday`,
                 `Friday`,
                  `Saturday`, 
                  `Sunday`,
                  `TimeTable_Id`) VALUES (

                    '".$this->inputClear($this->getMonday())."',
                    '".$this->inputClear($this->getTuesday())."',
                    '".$this->inputClear($this->getWednessday())."',
                    '".$this->inputClear($this->getThursday())."',
                    '".$this->inputClear($this->getFriday())."',
                    '".$this->inputClear($this->getSaturday())."',
                    '".$this->inputClear($this->getSunday())."',
                    '".$this->inputClear($this->getTimeTableId())."')";


                    
        $this->db->insertIntoDb($query);

    }

    public function updateClassDate(){
        $query="UPDATE `classdate` SET 
        `Monday`='".$this->inputClear($this->getMonday())."',
        `Tuesday`='".$this->inputClear($this->getTuesday())."',
        `Wednessday`='".$this->inputClear($this->getWednessday())."',
        `Thursday`='".$this->inputClear($this->getThursday())."',
        `Friday`='".$this->inputClear($this->getFriday())."',
        `Saturday`='".$this->inputClear($this->getSaturday())."',
        `Sunday`='".$this->inputClear($this->getSunday())."', WHERE `Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteClassDate(){
        $query="UPDATE `classdate` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}