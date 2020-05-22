<?php
  // Assigned Price Values
  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 30);

  // Declare objects for every product with the product Class
  $tires = new Product();
  $oil = new Product();
  $sparkPlugs = new Product();


  // Instanttiate
  $tires->instantiate('Tires',TIRE_PRICE,'tireQty');
  $oil->instantiate('Oil', OIL_PRICE,'oilQty');
  $sparkPlugs->instantiate('Spark',SPARK_PRICE,'sparkQty');

  //Bobs product objects
  $productList = array($tires,$oil,$sparkPlugs);

 ?>
