
<?php
  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 30);

  $tire = new Product();
  $oil = new Product();
  $sparkPlugs = new Product();

  $tire->instantiate('Tires',TIRE_PRICE, 'tireQty');
  $oil->instantiate('Oil', OIL_PRICE, 'oilQty');
  $sparkPlugs->instantiate('Spark Plugs', SPARK_PRICE, 'sparkQty');

  $products = array($tire,$oil,$sparkPlugs);
?>
