<?php
require_once('person.php'); //to make iwas of losing person.php if you put employee.php first in the index.php

class Employee extends Person{
  private $company;

  public function __get($fieldName){
    return $this->$fieldName;
  }

  public function __set($fieldName, $fieldValue){
    $this->$fieldName = $fieldValue;
  }

  //OVERRIDING METHODS of the parent
  public function introduce(){
    parent::introduce();
    echo ' from '.$this->company;
  }

//results to an error because it cannot be overriden anymore since it is a final function in person.php
//   public function incrementAge(){
//     $this->age +=2;
//   }
}


 ?>
