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

     // Warning: flock(): supplied resource is not a valid stream resource in C:\xampp\htdocs\llama-php\bobs-auto-parts\model\order-service.php on line 17
     flock($file, LOCK_UN);
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
      $file = @fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/properties.txt', 'rd');

      if (!$file) {
        //IF FILE IS EMPTY
        echo "<p><strong>NO VAT VALUE</strong></p>";
      } else {
        //WHILE THE FILE HAS A LINE TO READ IF NO IT CLOSES
        while(!feof($file)){
          //starts reading the line
          $order = fgets($file, 999);
          //remove text "VAT_PERCENT= from the String and stores 0.12 to $value array var"
          $value=explode("VAT_PERCENT=",$order);

          //return the 1 Index of $Value containing 0.12
          return $value[1];
        }
        }

      fclose($file);
    }

 ?>
