<?php
require_once('person.php');

class Employee extends Person{
  private $company;

  public function __get($fieldName){
    return $this->$fieldName;
  }

  public function __set($fieldName, $fieldValue){
    $this->$fieldName = $fieldValue;
  }

  //OVERRIDING METHODS
  public function introduce(){
    parent::introduce();
    echo ' from ' .$this.company;
  }

  // public function incrementAge(){
  //   $this->age +=2;
  // }
}


 ?>
