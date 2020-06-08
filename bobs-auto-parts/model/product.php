<?php
  class Product{
    private $name;
    private $price;
    private $qty;


    public function __construct(){
      $qty = 0;
    }

    public function instantiate($name, $price,  $qty){
      $this->name = $name;
      $this->price = $price;
      $this->qty = $qty;
    }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }
  }
 ?>
