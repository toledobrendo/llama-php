<?php
  /**
   *
   */
  class Product
  {
    private $productName;
    private $price;
    private $tagName;
    private $quantity;

    public function __constructor(){
     $quantity = 0;
   }

   public function instantiate($productName, $price, $tagName){
      $this->productName = $productName;
      $this->price = $price;
      $this->tagName = $tagName;
    }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }

  }

 ?>
