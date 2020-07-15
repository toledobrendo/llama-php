<?php
  require_once('exception/file-not-found-exception.php');

  function getProperty($propertyName){
    try{
      $properties = fopen(DOCUMENT_ROOT.'/llama-php/Bobs-Auto-Parts-HW4/resource/properties.txt', 'rb');
      if(!$properties){
        throw new FileNotFoundException("File not found!");
      }else {
        while(!feof($properties)){
          $property = fgets($properties, 999);
          $propertyArray = explode("=",$property);
          if(@trim($propertyArray[0]) == $propertyName){
            return $propertyArray[1];
          }
        }
        return 0;
        fclose($properties);
      }
    } catch(FileNotFoundException $fnfe){
        echo $fnfe->getMessage();
    } catch(Exception $e){
        echo $e->getMessage();
    }

  }




?>
