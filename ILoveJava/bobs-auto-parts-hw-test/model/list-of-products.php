<?php
    //pre define values
    define('TIRE_PRICE', 100);
    define('OIL_PRICE', 50);
    define('SPARK_PRICE', 30);

    //creating class
    $tire = new Product();
    $oil = new Product();
    $sparkPlugs = new Product();

    //instantiate product
    $tire->instantiate(TIRE_PRICE,'Tires','tireQty');
    $oil->instantiate(OIL_PRICE, 'Oil','oilQty');
    $sparkPlugs->instantiate(SPARK_PRICE, 'Spark Plug','sparkQty');

    //putting the products into an array
    $productInputs = array($tire,$oil,$sparkPlugs);
 ?>
