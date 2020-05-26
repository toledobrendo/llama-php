<?php

//Notice: Undefined variable: qty in C:\xampp\htdocs\llama-php\bobs-auto-parts\model\products.php on line 7

$tire = new Product();
$oil = new Product();
$sparkPlug = new Product();

$tire->setclass('Tires', 100, $qty);
$oil->setclass('Oil', 50, $qty);
$sparkPlug->setclass('SparkPlugs', 30, $qty);


$productInputs = array($tire, $oil, $sparkPlug);


 ?>
