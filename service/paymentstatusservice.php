<?php
require_once ('../database/dbconnect.php');
require_once ('../model/paymentstatus.php');

class PaymentStatusService extends PaymentStatus{
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

    public function insertPaymentStatus(){
        $query="INSERT INTO `PaymentStatus`(
            `PaymentStatus`, 
            `Class_Id`, 
            `Student_Id`,
            `TimeTableId`,
            `PaymentId`) VALUES (
                '".$this->inputClear($this->getPaymentstatus())."',
                '".$this->inputClear($this->getClassId())."',
                '".$this->inputClear($this->getStudentId())."',
                '".$this->inputClear($this->getTimeTableId())."',
                '".$this->inputClear($this->getPaymentId())."'
                
                )";
        $this->db->insertIntoDb($query);

    }

    public function updatePaymentStatus(){
        $query="UPDATE `PaymentStatus` SET 
        `PaymentStatus`='".$this->inputClear($this->getPaymentstatus())."'
        WHERE `PaymentId`= '".$this->inputClear($this->getPaymentId())."' ";
        $this->db->insertIntoDb($query);

    }

    public function deletePaymentStatus(){
        $query="UPDATE `paymentstatus` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}