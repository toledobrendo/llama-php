<?php
   class Product{
      
      private $title;
      private $name;
      private $price;
 
   public function __construct(){

   }
   public function __get($fieldName){
      return $this->$fieldName;
   }
   public function __set($fieldName, $fieldValue){
      $this->$fieldName=$fieldValue;
   }
}
?>