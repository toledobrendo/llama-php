<?php



  /**
   * Product Class
   */
  class Product {

    private $name; //The name of the variable
    private $description;//Some description
    private $price;
    private $quantity;

    //The amazing constructor
    public function __construct(){
      $quantity = 0;
    }

    function instantiate($name,$price,$description){
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
    }


    public function __get($fieldName){
        return $this->$fieldName;
    }

    public function __set($fieldName,$fieldValue){
      $this->$fieldName = $fieldValue;
    }

  }




?>
