
<?php

  require_once 'process-order.php';


 ?>


<?php
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

function saveOrder($tireQty,$oilQty,$sparkQty,$totalAmount){

  $date = date('H:i,jS F Y');

  $outputString = $date."\t".$tireQty." Tires\t".$oilQty." Oil\t".$sparkQty."Spark Plugs\t"."$".$totalAmount."\n";
  $file = @fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'ab');

  if (!$file) {
    echo "<p><strong>Your order could not be process right now</strong></p>";
  }
     flock($file, LOCK_EX);
     fwrite($file, $outputString, strlen($outputString));
     fclose($file);
     @flock($file, LOCK_UN);
   }


    function getOrder()    {
      $file = @fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'rd');

      if (!$file) {
        echo "<p><strong>No Orders Pending</strong></p>";
      } else {
        while(!feof($file)){
          $order = fgets($file, 999);
          echo $order.'<br/>';
        }
        }

      fclose($file);
    }

    function getVAT()    {
      // missing file
      $file = @fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/properties.txt', 'rd');

      if (!$file) {
        echo "<p><strong>NO VAT VALUE</strong></p>";
      } else {
        while(!feof($file)){

          $order = fgets($file, 999);

          $value=explode("VAT_PERCENT=",$order);


          return $value[1];
        }
        }

      @fclose($file);
    }

 ?>
