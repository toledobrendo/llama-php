<?php
  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 30);

  $tires = new Product();
  $oil = new Product();
  $sparkPlugs = new Product();

  $tires->parampass('Tires',TIRE_PRICE,'tireQty');
  $oil->parampass('Oil', OIL_PRICE,'oilQty');
  $sparkPlugs->parampass('Spark',SPARK_PRICE,'sparkQty');

  $productList = array($tires,$oil,$sparkPlugs);
 ?>
