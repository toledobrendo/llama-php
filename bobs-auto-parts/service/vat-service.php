<?php
  require_once('exception/file-not-found-exception.php');
  define('PROPERTIES_TXT', $_SERVER['DOCUMENT_ROOT']);

  function readVatFile() {

    $filePath = PROPERTIES_TXT.'/llama-php/bobs-auto-parts/resource/properties.txt';

    $file = @ fopen($filePath, 'rb');

    if(!$file){
      throw new FileNotFoundException('Sorry for the inconvinience. We are currently under maintainance.');
    }else{
      $fileLine = fgets($file, 999);
      if(strpos($fileLine,  "=") !== false) {
          $extract = explode('=', $fileLine, 2);
          $value = trim($extract[1]);
      }
    }
    fclose($file);
    return $value;
  }
?>
