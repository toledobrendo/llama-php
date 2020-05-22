<?php
  class Product{
    private $name;
    private $key;

    public function __construct(){
      // echo '<p>product constructed';
    }

    public function __get($fieldName) {
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue) {
      $this->$fieldName = $fieldValue;
    }
  }
 ?>
