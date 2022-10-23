<?php

class ClassDate{
    private $id;
    private $monday;
    private $tuesday;
    private $wednessday;
    private $thursday;
    private $friday;
    private $saturday;
    private $sunday;
    private $timeTableId;

    public function __constructWithId($id,$monday,$tuesday,$wednessday,$thursday,$friday,$saturday,$sunday){

        $this->id = $id;
        $this->monday = $monday;
        $this->tuesday = $tuesday;
        $this->wednessday = $wednessday;
        $this->thursday = $thursday;
        $this->friday = $friday;
        $this->saturday = $saturday;
        $this->sunday = $sunday;
    }

    public function __constructWithoutId($monday,$tuesday,$wednessday,$thursday,$friday,$saturday,$sunday,$timeTableId){

        $this->monday = $monday;
        $this->tuesday = $tuesday;
        $this->wednessday = $wednessday;
        $this->thursday = $thursday;
        $this->friday = $friday;
        $this->saturday = $saturday;
        $this->sunday = $sunday;
        $this->timeTableId = $timeTableId;
    }

    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getMonday(){

        return $this->monday;
    }
    public function setMonday($monday){
        $this->monday = $monday;

    }

    public function getTuesday(){

        return $this->tuesday;
    }
    public function setTuesday($tuesday){
        $this->tuesday = $tuesday;

    }

    public function getWednessday(){

        return $this->wednessday;
    }
    public function setWednessday($wednessday){
        $this->wednessday = $wednessday;

    }

    public function getThursday(){

        return $this->thursday;
    }
    public function setThursday($thursday){
        $this->thursday = $thursday;

    }

    public function getFriday(){

        return $this->friday;
    }
    public function setFriday($friday){
        $this->friday = $friday;

    }

    public function getSaturday(){

        return $this->saturday;
    }
    public function setSaturday($saturday){
        $this->saturday = $saturday;

    }

    public function getSunday(){

        return $this->sunday;
    }
    public function setSunday($sunday){
        $this->sunday = $sunday;

    }

    public function getTimeTableId(){

        return $this->timeTableId;
    }
    public function setTimeTableId($timeTableId){
        $this->timeTableId = $timeTableId;

    }



    

}