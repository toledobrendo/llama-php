<?php
  class Product{
    private $name;
    private $price;
    private $qty;


    public function __construct(){
      $qty = 0;
    }

    public function instantiate($name, $price){
      $this->name = $name;
      $this->price = $price;
    }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }
  }
 ?>
