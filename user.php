<?php

class User{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $password;


    function __construct($id,$name,$lastname,$email,$password){
            $this->id = $id;
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
}

?>