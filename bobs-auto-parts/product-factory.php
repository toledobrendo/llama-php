<?php
require_once('model/product.php')
?>

<?php
$tires = new Product();
$tires->title = 'Tires';
$tires->name = 'tireQty';
$tires->price='100';

$oil = new Product();
$oil->title = 'Oil';
$oil->name = 'oilQty';
$oil->price='50';

$sparkPlug = new Product();
$sparkPlug->title = 'Spark Plug';
$sparkPlug->name = 'sparkQty';
$sparkPlug->price='10';

$products = array($tires, $oil, $sparkPlug);
// foreach($products as $product){
//    echo $product->title;
//    echo $product->name;
// }


?>