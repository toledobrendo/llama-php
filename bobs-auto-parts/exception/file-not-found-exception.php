<?php
  class FileNotFoundException extends Exception{
      function __toString(){
        return '<p><strong>'.this->getMessaged().'</strong></p>';
      }
  }
 ?>
