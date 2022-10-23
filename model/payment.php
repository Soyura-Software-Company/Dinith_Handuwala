<?php
class Payment{

    private $id;
    private $slipImage;
    private $description;
    private $paymentAmount;
    private $paymentDate;
    private $studentId;
    private $classId;
    private $GetnewId;
    

    public function __constructWithId($id,$slipImage,$description,$paymentAmount,$paymentDate,$studentId,$classId){

        $this->id = $id;
        $this->slipImage = $slipImage;
        $this->description = $description;
        $this->paymentAmount = $paymentAmount;
        $this->paymentDate = $paymentDate;
        $this->studentId = $studentId;
        $this->classId = $classId;
        
    }

    public function __constructWithOutId($slipImage,$description,$paymentAmount,$paymentDate,$studentId,$classId,$GetnewId){

        $this->slipImage = $slipImage;
        $this->description = $description;
        $this->paymentAmount = $paymentAmount;
        $this->paymentDate = $paymentDate;
        $this->studentId = $studentId;
        $this->classId = $classId;
        $this->GetnewId = $GetnewId;
        
    }


    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getSlipImage(){

        return $this->slipImage;
    }
    public function setSlipImage($slipImage){
        $this->slipImage = $slipImage;

    }

    public function getDescription(){

        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;

    }

    public function getPaymentAmount(){

        return $this->paymentAmount;
    }
    public function setPaymentAmount($paymentAmount){
        $this->paymentAmount = $paymentAmount;

    }

    public function getPaymentDate(){

        return $this->paymentDate;
    }
    public function setPaymentDate($paymentDate){
        $this->paymentDate = $paymentDate;

    }

    public function getStudentId(){

        return $this->studentId;
    }
    public function setStudentId($studentId){
        $this->studentId = $studentId;

    }


    public function getClassId(){

        return $this->classId;
    }
    public function setClassId($classId){
        $this->classId = $classId;

    }


public function getGetnewId(){

    return $this->GetnewId;
}
public function setGetnewId($GetnewId){
    $this->GetnewId = $GetnewId;

}}