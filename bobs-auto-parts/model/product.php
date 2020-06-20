<?php
  class Product {

    private $name;
    private $price;
    private $qty;
    private $prodId;

    public function __construct(){
      $this->name = "";
      $this->price = 0;
      $this->qty = 0;
      $this->prodId = "";
    }

    public function __get($fieldName) {
      return $this->$fieldName;
    }

    public function setProdId($prodId){
      $this->prodId = $prodId;
    }


    public function setQty($qty){
      $this->qty = $qty;
    }


    public function setName($name) {
      $this->name = $name;
    }


    public function setPrice($price) {
      $this->price = $price;
    }
  }

 ?>
