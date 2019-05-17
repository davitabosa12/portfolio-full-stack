<?php
class User{
    private $id;
    private $name;
    private $login;
    private $password;
    function __construct($id, $name, $login, $password){
        $this->id = $id;
        $this->name = $name;
        $this->login = $login;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }

    function getLogin(){
        return $this->login;
    }
    function setLogin($login){
        $this->login = $login;
    }

    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
}