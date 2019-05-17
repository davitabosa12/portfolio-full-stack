<?php
class Product 
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;
    function __construct($id, $name, $description, $price, $image){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
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
    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function getPrice(){
        return $this->price;
    }
    function setPrice($price){
        $this->price = $price;
    }
    function getImage(){
        return $this->image;
    }
    function setImage($image){
        $this->image = $image;
    }
}
