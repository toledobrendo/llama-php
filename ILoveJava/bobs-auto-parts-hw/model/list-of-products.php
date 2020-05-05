<?php
    define('TIRE_PRICE', 100);
    define('OIL_PRICE', 50);
    define('SPARK_PRICE', 30);

    $tire = new Product();
    $oil = new Product();
    $sparkPlugs = new Product();

    $tire->instantiate(TIRE_PRICE,'Tires','tireQty');
    $oil->instantiate(OIL_PRICE, 'Oil','oilQty');
    $sparkPlugs->instantiate(SPARK_PRICE, 'Spark Plug','sparkQty');

    $productInputs = array($tire,$oil,$sparkPlugs);
 ?>
