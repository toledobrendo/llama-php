<?php
  interface Movable {
    function moveTo($destination); //forces the class that would implement this to use this. Without it, there would be an error
  }

 ?>
