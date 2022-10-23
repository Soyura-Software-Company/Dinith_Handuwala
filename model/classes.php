<?php
class Classes{

    private $id;
    private $description;
    private $gradeid;

    public function __constructWithId($id,$description,$gradeid){

        $this->id = $id;
        $this->description = $description;
        $this->gradeid = $gradeid;
    }

    public function __constructWithOutId($description,$gradeid){

        $this->description = $description;
        $this->gradeid = $gradeid;
    }


    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getDescription(){

        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;

    }

    public function getGradeId(){

        return $this->gradeid;
    }
    public function setGradeId($gradeid){
        $this->gradeid = $gradeid;

    }
}