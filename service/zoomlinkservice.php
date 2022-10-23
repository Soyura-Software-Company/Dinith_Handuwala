<?php
require_once ('../database/dbconnect.php');
require_once ('../model/zoomlink.php');

class ZoomLinkService extends ZoomLink{
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

    public function insertZoomLink(){
        $query="INSERT INTO `ZoomLink`(`ZoomLink`) VALUES (
            '".$this->inputClear($this->getZoomLink())."')";
        $this->db->insertIntoDb($query);

    }

    public function updateZoomLink(){
        $query="UPDATE `ZoomLink` SET 
        `ZoomLink`='".$this->inputClear($this->getZoomLink())."'
         WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteZoomLink(){
        $query="UPDATE `zoomlink` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}