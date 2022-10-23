<?php
require_once ('database/dbconnect.php');
require_once ('model/adminuser.php');

class AdminUserService extends Adminuser{
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

    public function insertSession(){
        $query="INSERT INTO `adminuser`(
            
             `AdminName`,
              `UseName`, 
              `Password`,
               `Email`,
                `Mobile`, 
                
                ) VALUES (
                   
                    '".$this->inputClear($this->getAdminName())."',
                    '".$this->inputClear($this->getUserName())."',
                    '".$this->inputClear($this->getPassword())."',
                    '".$this->inputClear($this->getEmail())."',
                    '".$this->inputClear($this->getMobile())."')";
        $this->db->insertIntoDb($query);

    }

    public function updateSession(){
        $query="UPDATE `adminuser` SET 
        `AdminName`='".$this->inputClear($this->getAdminName())."',
        `UseName`='".$this->inputClear($this->getUserName())."',
        `Password`='".$this->inputClear($this->getPassword())."',
        `Email`='".$this->inputClear($this->getEmail())."',
        `Mobile`='".$this->inputClear($this->getMobile())."' WHERE `Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deleteSession(){
        $query="UPDATE `adminuser` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}