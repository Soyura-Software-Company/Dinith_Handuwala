<?php
class PaymentStatus{

    private $id;
    private $paymentstatus;
    private $studentId;
    private $classId;
    private $timeTableId;
    private $paymentId;

    public function __constructWithId($paymentstatus,$paymentId){

        $this->paymentstatus = $paymentstatus;

        $this->paymentId = $paymentId;
        
    }

    public function __constructWithOutId($paymentstatus,$studentId,$classId,$timeTableId,$paymentId){

        $this->paymentstatus = $paymentstatus;
        $this->studentId = $studentId;
        $this->classId = $classId;
        $this->timeTableId = $timeTableId;
        $this->paymentId = $paymentId;
        
    }


    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getPaymentstatus(){

        return $this->paymentstatus;
    }
    public function setPaymentstatus($paymentstatus){
        $this->paymentstatus = $paymentstatus;

 
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

    public function getTimeTableId(){

        return $this->timeTableId;
    }
    public function setTimeTableId($timeTableId){
        $this->timeTableId = $timeTableId;

    }

    public function getPaymentId(){

        return $this->paymentId;
    }
    public function setPaymentId($paymentId){
        $this->paymentId = $paymentId;

    }
}