<?php
class StudentUser{

    private $id;
    private $userName;
    private $password;

    public function __constructWithId($id,$userName,$password){

        $this->id = $id;
        $this->userName = $userName;
        $this->password = $password;
        
    }

    public function __constructWithOutId($userName,$password){

        $this->userName = $userName;
        $this->password = $password;
        
    }


    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getUserName(){

        return $this->userName;
    }
    public function setUserName($userName){
        $this->userName = $userName;

    }

    public function getPassword(){

        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;

    }
}