
<?php
define('TIRE_PRICE', 100);
define('OIL_PRICE', 50);
define('SPARK_PRICE', 30);

$tire = new Product();
$oil = new Product();
$sparkPlugs = new Product();

$tire->instantiate ('Tire', TIRE_PRICE, 'tireQuantity');
$oil->instantiate('Oil', OIL_PRICE, 'oilQuantity');
$sparkPlugs->instantiate('SparkPlugs', SPARK_PRICE, 'sparkQuantity');

$productList = array($tire, $oil, $sparkPlugs);


?>
