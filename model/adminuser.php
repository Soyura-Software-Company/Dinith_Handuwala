<?php

class Adminuser{
    private $id;
    private $adminName;
    private $userName;
    private $password;
    private $email;
    private $mobile;
    
    public function __constructWithId($id,$adminName,$userName,$password,$email,$mobile){

        $this->id = $id;
        $this->adminName = $adminName;
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
        $this->mobile = $mobile;
    }

    public function __constructWithoutId($adminName,$userName,$password,$email,$mobile){

        $this->adminName = $adminName;
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
        $this->mobile = $mobile;
    }

    public function getId(){

        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }

    public function getAdminName(){

        return $this->adminName;
    }
    public function setAdminName($adminName){
        $this->adminName = $adminName;

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

    public function getEmail(){

        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;

    }

    public function getMobile(){

        return $this->mobile;
    }
    public function setMobile($mobile){
        $this->mobile = $mobile;

    }

}