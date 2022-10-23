<?php
require_once ('../database/dbconnect.php');
require_once ('../model/timetable.php');

class TimeTableService extends TimeTable{
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

    public function insertTimeTable(){
        $query="INSERT INTO `TimeTable`(
            `Description`,
             `StartTime`, 
             `EndTime`,
             `ZoomLink_Id`, 
             `Class_Id`) VALUES (
                '".$this->inputClear($this->getDescription())."',
                '".$this->inputClear($this->getStartTime())."',
                '".$this->inputClear($this->getEndTime())."',
                '".$this->inputClear($this->getZoomLinkId())."',
                '".$this->inputClear($this->getClassId())."')";
        $this->db->insertIntoDb($query);

    }

    public function updateTimeTable(){
        $query="UPDATE `TimeTable` SET 
        `Description`='".$this->inputClear($this->getDescription())."',
        `StartTime`='".$this->inputClear($this->getStartTime())."',
        `EndTime`='".$this->inputClear($this->getEndTime())."' WHERE `ZoomLink_Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteTimeTable(){
        $query="UPDATE `timetable` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}