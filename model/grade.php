<?php
class Grade{

    private $id;
    private $grade;

    public function __constructWithId($id,$grade){

        $this->id = $id;
        $this->grade = $grade;
        
    }

    public function __constructWithOutId($grade){

        $this->grade = $grade;
        
    }


    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getGrade(){

        return $this->grade;
    }
    public function setGrade($grade){
        $this->grade = $grade;

    }
}