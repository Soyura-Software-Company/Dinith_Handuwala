<?php

class Student{
    private $id;
    private $fname;
    private $lname;
    private $gender;
    private $address;
    private $mobile;
    private $whatsappnumber;
    private $mail;
    private $schoolName;
    private $regDate;
    private $districtId;
    private $gradeId;
    private $StudentUserId;

    public function __constructWithId($id,$fname,$lname,$gender,$address,$mobile,$whatsappnumber,$mail,$schoolName,$regDate,$districtId,$gradeId,$studentUserId){

        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->address = $address;
        $this->mobile = $mobile;
        $this->whatsappnumber = $whatsappnumber;
        $this->mail = $mail;
        $this->schoolName = $schoolName;
        $this->regDate = $regDate;
        $this->districtId = $districtId;
        $this->gradeId = $gradeId;
        $this->studentUserId = $studentUserId;
    }

    public function __constructWithoutId($fname,$lname,$gender,$address,$mobile,$whatsappnumber,$mail,$schoolName,$regDate,$districtId,$gradeId,$studentUserId){

        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->address = $address;
        $this->mobile = $mobile;
        $this->whatsappnumber = $whatsappnumber;
        $this->mail = $mail;
        $this->schoolName = $schoolName;
        $this->regDate = $regDate;
        $this->districtId = $districtId;
        $this->gradeId = $gradeId;
        $this->studentUserId = $studentUserId;
    }

    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getFname(){

        return $this->fname;
    }
    public function setFname($fname){
        $this->fname = $fname;

    }

    public function getLname(){

        return $this->lname;
    }
    public function setLname($lname){
        $this->lname = $lname;

    }

    public function getGender(){

        return $this->gender;
    }
    public function setGender($gender){
        $this->gender = $gender;

    }

    public function getAddress(){

        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;

    }

    public function getMobile(){

        return $this->mobile;
    }
    public function setMobile($mobile){
        $this->mobile = $mobile;

    }

    public function getWhatsappnumber(){

        return $this->whatsappnumber;
    }
    public function setWhatsappnumber($whatsappnumber){
        $this->whatsappnumber = $whatsappnumber;

    }

    public function getMail(){

        return $this->mail;
    }
    public function setMail($mail){
        $this->mail = $mail;

    }

    public function getSchoolName(){

        return $this->schoolName;
    }
    public function setSchoolName($schoolName){
        $this->schoolName = $schoolName;

    }

    public function getRegDate(){

        return $this->regDate;
    }
    public function setRegDate($regDate){
        $this->regDate = $regDate;

    }

    public function getGradeId(){

        return $this->gradeId;
    }
    public function setGradeId($gradeId){
        $this->gradeId = $gradeId;

    }

    public function getDistrictId(){

        return $this->districtId;
    }
    public function setDistrictId($districtId){
        $this->districtId = $districtId;

    }

    public function getStudentUserId(){

        return $this->studentUserId;
    }
    public function setStudentUserId($studentUserId){
        $this->studentUserId = $studentUserId;

    }


    }

