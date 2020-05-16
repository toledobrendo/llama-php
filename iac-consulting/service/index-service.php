<?php

        //Pass by value
        function raiseToTwo($base){
          $base *= $base;
        }

        //Pass by reference
        function raiseToTwoWay(&$base){
          $base *= $base;
        }


 ?>
