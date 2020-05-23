<?php
  define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
  require_once('exceptions/file-not-found-exception.php');

  //saving data to a txt file
  function saveOrder($tireQty, $oilQty, $sparkQty, $totalAmount){
    //getting date
    $date = date('H:i, jS F Y');
    //the data is converted into a string to be put on the txt file
    $outputString = $date."\t".
                    $tireQty." tires\t".
                    $oilQty." Oil\t".
                    $sparkQty." Spark Plugs\t".
                    '$'.$totalAmount."\n";

    //location of the file where the data to be save
    $file = @fopen(DOCUMENT_ROOT.'/llama-php/ILoveJava/bobs-auto-parts-hw4/resources/order.txt', 'ab');

    if(!$file) //if file not found
      echo "<strong>your order cannot be processed at the moment,
            please try again later.</strong>";
    else {

      echo $outputString;
      flock($file, LOCK_EX); //allows you to perform a simple reader/writer

      fwrite($file, $outputString, strlen($outputString));//writes the contents of string to the file stream pointed to by handle.

      flock($file, LOCK_UN);//allows you to perform a simple reader/writer
    }

  }

  function getOrders(){

    try {
      $file = @fopen(DOCUMENT_ROOT.'/llama-php/ILoveJava/bobs-auto-parts-hw4/resources/order.txt', 'rb');
      if(!$file){
        throw new FileNotFoundException("File not found!");

      }
      else{
        while(!feof($file)){
          $order = fgets($file, 999);
          echo $order.'<br>';
        }
        fclose($file);
      }
    } catch (Exception $e) {
        echo $e->getMessage();
        echo $e;
    }
  }


  //getting the value of vat that is inside the file
 function getProperty($dataName){
   try{
     $file = fopen(DOCUMENT_ROOT.'/llama-php/ILoveJava/bobs-auto-parts-hw4/resources/properties.txt', 'rb'); //getting file thru file directory
     if(!$file){
       throw new FileNotFoundException("File is not found!");//throw exception if not found
     }else {

       while(!feof($file)){//will loop until it reaches the end of the file
         $data = fgets($file); //Gets a line from file pointer.
         $dataArray = explode("=",$data); //split strings into an array
         if(@trim($dataArray[0]) == $dataName){ //since we split the string between "="
           return $dataArray[1];//if we return $dataArray[1] it will be the string after the "="
         }
       }
       return 0; // PROPERTY NOT FOUND;
       fclose($file); // best practice to always close
     }
   } catch(FileNotFoundException $fnfe){
       echo $fnfe->getMessage();
   } catch(Exception $e){
       echo $e->getMessage();
   }

 }
?>
