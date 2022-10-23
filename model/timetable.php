<?php
class TimeTable{

    private $id;
    private $description;
    private $startTime;
    private $endTime;
    private $classdateId;
    private $zoomLinkId;
    private $classId;
    

    public function __constructWithId($id,$description,$startTime,$endTime){

        $this->id = $id;
        $this->description = $description;
        $this->startTime = $startTime;
        $this->endTime = $endTime;

      
        
    }

    public function __constructWithOutId($description,$startTime,$endTime,$zoomLinkId,$classId){

        $this->description = $description;
        $this->startTime = $startTime;
        $this->endTime = $endTime;

        $this->zoomLinkId = $zoomLinkId;
        $this->classId = $classId;
        
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

    public function getStartTime(){

        return $this->startTime;
    }
    public function setStartTime($startTime){
        $this->startTime = $startTime;

    }

    public function getEndTime(){

        return $this->endTime;
    }
    public function setEndTime($endTime){
        $this->endTime = $endTime;

    }

    public function getclassdateId(){

        return $this->classdateId;
    }
    public function setClassdateId($classdateId){
        $this->classdateId = $classdateId;

    }

    public function getZoomLinkId(){

        return $this->zoomLinkId;
    }
    public function setZoomLinkId($zoomLinkId){
        $this->zoomLinkId = $zoomLinkId;

    }

    public function getClassId(){

        return $this->classId;
    }
    public function setClassId($classId){
        $this->classId = $classId;

    }

}
