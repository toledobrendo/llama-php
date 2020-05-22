<?php
  require_once('exceptions/file-not-found-exception.php');
  //getting the value of vat that is inside the file
  function getProperty($propertyName){
    try{
      //getting the file
      $properties = fopen(DOCUMENT_ROOT.'/llama-php/ILoveJava/bobs-auto-parts-hw/resources/properties.txt', 'rb');
      if(!$properties){ //file cannot be found
        throw new FileNotFoundException("File not found!");
      }else {
        //getting the value in the file
        while(!feof($properties)){
          //feof Returns TRUE if the file pointer is at EOF or an error occurs.
          //the loop wil check if it stil return false and stop when it returns true
          $property = fgets($properties, 999);//Gets a line from file pointer.
          $propertyArray = explode("=",$property); //Split a string by a string to get only the value after the "="
          if(@trim($propertyArray[0]) == $propertyName){
            return $propertyArray[1];
          }
        }
        return 0;
        fclose($properties); //file close
      }
    } catch(FileNotFoundException $fnfe){
        echo $fnfe->getMessage();
    } catch(Exception $e){
        echo $e->getMessage();
    }

  }
?>
