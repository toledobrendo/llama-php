<?php
class Person{
 public $name;
 protected $age;
 private $address;

 public function introduce(){
   echo '<p>Hi I am '.$this->name.'</p>'; //must use this
 }

 public function __construct(){
   echo '<p>Person Constructed!</p>';
 }

 public function setAge($age){
   $this->age = $age;
 }

 public function __get($fieldName){ //MAGIC FUNCTIONS
   return $this->$fieldName;
 }

 public function __set($fieldName, $fieldValue){ //MAGIC FUNCTIONS
   $this->$fieldName = $fieldValue;
 }

 public function getAge(){
   return $this->age;
 }
}
 ?>
