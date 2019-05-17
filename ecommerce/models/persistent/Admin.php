<?php
class Admin extends User
{
    private $salary;

    function __construct($id, $name, $login, $password, $salary){
        parent::__construct($id, $name, $login, $password);
        $this->salary = $salary;
    }
    function __construct($name, $login, $password, $salary){
        parent::__construct($name, $login, $password);
        $this->salary = $salary;
    }

    function getSalary(){
        return $this->salary;
    }
    function setSalary($salary){
        $this->salary = $salary;
    }
}
