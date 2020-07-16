<?php
  class Product
  {

    public $productName;
    public $price;
    public $qty = 0;



    public function __construct(){

        }

   public function parampass($productName, $price, $qty){
      $this->productName = $productName;
      $this->price = $price;
      $this->qty = $qty;
    }


    public function __get($name){
      return $this->$name;
    }

    public function __set($name, $value){
      $this->$name = $value;
    }

  }

 ?>