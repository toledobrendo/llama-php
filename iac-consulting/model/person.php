<?php
  class Person {
    public $name;
    protected $age;
    private $address;

    public function getAge() {
      return $this->age;
    }

     public function setAge($age) {
      $this->age = $age;
    }


    public function __contruct() {
      echo '<p>Person Contructed';
    }

    public function __get($fieldName) {
      return $this->$fieldname;
    }

    public function __set($fieldName, $fieldValue) {
      $this->$fieldName = $fieldValue;
    }

    public function introduce() {
      echo '<p>This is '.$this->name;
    }

  }

?>