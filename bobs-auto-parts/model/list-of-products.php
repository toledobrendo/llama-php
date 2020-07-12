<<?php
  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARKPLUG_PRICE', 30);

  $tires = new Product();
  $oil = new Product();
  $sparkPlug = new Product();

  $tires->instantiate('tires', TIRE_PRICE, 'tireQty');
  $oil->instantiate('oil', OIL_PRICE, 'oilQty');
  $sparkPlug->instantiate('sparkPlug', SPARKPLUG_PRICE, 'sparkQty');

  $productList = array($tires, $oil, $sparkPlug);
 ?>
