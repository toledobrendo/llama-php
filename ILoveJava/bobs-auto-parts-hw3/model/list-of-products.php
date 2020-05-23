<?php
    //pre define values
    define('TIRE_PRICE', 100);
    define('OIL_PRICE', 50);
    define('SPARK_PRICE', 30);
    define('VAT_PERCENT', 1.12);

    //creating class and instantiate product
    $tire = new Product();
    $tire->instantiate(TIRE_PRICE,'Tires','tireQty');

    $oil = new Product();
    $oil->instantiate(OIL_PRICE, 'Oil','oilQty');

    $sparkPlugs = new Product();
    $sparkPlugs->instantiate(SPARK_PRICE, 'Spark Plug','sparkQty');

    //putting the products into an array
    $productInputs = array($tire,$oil,$sparkPlugs);
 ?>
