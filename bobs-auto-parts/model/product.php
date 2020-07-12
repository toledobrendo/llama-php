<<?php

  class Product
  {
    private $name;
    private $price;
    private $quantity;

    public function constructor(){
      $this->name = "";
      $this->price = "0";
      $this->quantity = "0";
    }

    function instantiate($name,$price,$quantity){
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;
    }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldVal){
      $this->$fieldName = $fieldVal;
    }
  }
 ?>
