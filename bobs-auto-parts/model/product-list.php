<?php
  require_once('model/product.php');

    class ProductList {

      private $product;

      public function __construct(){
        $this->product = array();
        $productListPrice = [];
        $productListPrice['Oil'] = 50;
        $productListPrice['Tires'] = 100;
        $productListPrice['Spark Plugs'] = 150;

        foreach ($productListPrice as $name => $price) {
            $product = new Product();
            $product->setProdId(trim(preg_replace('/\s+/', '', $name)));
            $product->setName($name);
            $product->setPrice($price);

            array_push($this->product, $product);
          }
      }

      public function getCount(){
        return count($product);
      }

      public function __get($fieldname){
        return $this->$fieldname;
      }

    }


 ?>
