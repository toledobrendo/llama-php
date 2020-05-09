<?php



class Product
{
  private $name;
  private $qty;
  private $price;
  function __construct()
  {

    $qty = 0;
  }

  public function setclass($name,$price, $qty)
  {
    $this->name = $name;
    $this->qty = $qty;
    $this->price = $price;
  }

    public function __get($var){
      return $this->$var;
    }

    public function __set($var, $value){
      $this->$var = $value;
    }


  }




 ?>
