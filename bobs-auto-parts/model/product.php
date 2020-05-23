<?php

 class Product{
    private $name; 
    private $description;
    private $price;
    private $quantity;

    public function __constructor(){
      $quantity = 0;
    }

    public function instantiate($description, $price, $name){
      $this->description = $description;
      $this->price = $price;
      $this->name = $name;
    }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }

}
 ?>
