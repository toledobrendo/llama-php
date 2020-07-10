<?php

  class Product {

    private $name;
    private $detail;
    private $price;
    private $quantity;

    //The amazing constructor
    public function __construct(){
      $price = 0;
    }

    function instantiate($name,$price,$detail){
      $this->name = $name;
      $this->price = $price;
      $this->detail = $detail;
    }


    public function __get($fieldName){
        return $this->$fieldName;
    }

    public function __set($fieldName,$fieldValue){
      $this->$fieldName = $fieldValue;
    }

  }




?>