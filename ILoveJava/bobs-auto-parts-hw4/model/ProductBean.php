<?php
  class Product //product class
  {
    //variables
    private $productName;
    private $price;
    private $tagName;
    private $quantity = 0;

  //instantiate function
   public function instantiate($productName, $price, $tagName){
      $this->productName = $productName;
      $this->price = $price;
      $this->tagName = $tagName;
    }

    //getter and setter
    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }

  }

 ?>
