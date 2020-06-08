<?php
require_once('employee.php');
require_once('interfaces/movable.php');

class DeliveryMan extends Employee implements Movable{
  public function moveTo($dest){ //without this, there would be an error because the functions in movable.php MUST be IMPLEMENTED
    echo '<p> Moving To: '.$dest;
  }
}
?>
