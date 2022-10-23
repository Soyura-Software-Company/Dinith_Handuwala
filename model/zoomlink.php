<?php
class ZoomLink{

    private $id;
    private $zoomLink;

    public function __constructWithId($id,$zoomLink){

        $this->id = $id;
        $this->zoomLink = $zoomLink;
        
    }

    public function __constructWithOutId($zoomLink){

        $this->zoomLink = $zoomLink;
        
    }


    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getZoomLink(){

        return $this->zoomLink;
    }
    public function setZoomLink($zoomLink){
        $this->zoomLink = $zoomLink;

    }
}