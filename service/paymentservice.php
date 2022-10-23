<?php
require_once ('../database/dbconnect.php');
require_once ('../model/payment.php');

class PaymentService extends Payment{
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

    public function insertPayment(){
        $query="INSERT INTO `Payment`(
            `SlipImage`, 
            `Discription`, 
            `PaymentAmount`, 
            `PaymentDate`, 
            `Student_Id`, 
            `Class_Id`,
            `Id2`) VALUES (
                '".$this->inputClear($this->getSlipImage())."',
                '".$this->inputClear($this->getDescription())."',
                '".$this->inputClear($this->getPaymentAmount())."',
                '".$this->inputClear($this->getPaymentDate())."',
                '".$this->inputClear($this->getStudentId())."',
                '".$this->inputClear($this->getClassId())."',
                '".$this->inputClear($this->getGetnewId())."'
                )";
        $this->db->insertIntoDb($query);
        $s = 'true';
        return $s; 

    }

    public function updatePayment(){
        $query="UPDATE `payment` SET 
        `SlipImage`='".$this->inputClear($this->getSlipImage())."',
        `Discription`='".$this->inputClear($this->getDescription())."',
        `PaymentAmount`='".$this->inputClear($this->getPaymentAmount())."',
        `PaymentDate`='".$this->inputClear($this->getPaymentDate())."',
        `Student_Id`='".$this->inputClear($this->getStudentId())."',
        `Class_Id`='".$this->inputClear($this->getClassId())."' WHERE `Id`= '".$this->getId()."'";
        $this->db->insertIntoDb($query);

    }

    public function deletePayment(){
        $query="UPDATE `payment` SET `status` = 0 WHERE `Id` = '".$this->inputClear($this->getId())."'";
        $this->db->insertIntoDb($query);


    }

}