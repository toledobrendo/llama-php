<?php
require_once('view-comp/header.php');
 ?>
  <div class="container">
      <div class="card">
        <div class="card-body">
          <h3>Price List</h3>
  
    <?php
        $products = array('Tires','Oil','Spark Plugs');

        sort($products); 
        rsort($products); 

        echo '<p>Product: </p>'.$products[0];

        echo '<ul>';
        for($ctr=0; $ctr< count($products); $ctr++){
          echo '<li>'  .$products[$ctr].  '</li>';
        }
        echo '</ul>';

        echo '<ul>';
        foreach($products as &$product){ 
          $product = $product.' - 1'; 
          echo '<li>  '.$product.'  </li>';
        }
        echo '</ul>';

        $numbers = range(1,10); 
        foreach($numbers as $number){
          echo $number;
        }

        echo '<br>';
        $numbers2 = range(0.5,10); 
        foreach($numbers2 as $number2){
          echo $number2;
        }

        echo '<br>';
        $numbers3 = range(1,10,2); 
        foreach($numbers3 as $number3){
          echo $number3;
        }

        echo '<br>';
        $letters = range('a','z'); 
        foreach($letters as $letter){
          echo $letter;
        }
        echo '<br>';

        $prices = array('Tires' => 100, 'Oil' => 0.5, 1500); 
        echo 'Tire price: '.$prices['Tires'].'<br>'; 
        echo 'Tire price: '.$prices['Oil'].'<br>'; 
        $prices['Tires'] = 120; 
        echo 'Tire Prices: '.$prices['Tires'].'<br>';
        echo 'Fourth Price: '.$prices[0].'<br>'; 

        
        $prices['Clutch Disk'] = 555;
        echo 'Clutch Disk Prices: '.$prices['Clutch Disk'].'<br>';

        ksort($prices);
        asort($prices);
        arsort($prices);

        echo '<br>Prices only';
        echo '<ul>';
        foreach($prices as $price)
        {
          echo '<li>'.$price.'</li>'; 
        }
        echo '</ul>';

        echo '<br>Key/ItemDesc & Prices';
        foreach($prices as $itemDesc => $price)
        {
          echo '<li>'.$itemDesc.' - '.$price.'</li>'; 
        }
        echo '</ul>'.'<br>';


        $empty = array();

        $items = array(
                  array('Code'=>'OIL', 'Description' => 'Oil', 'Price' => 10),
                  array('Code'=>'TIRE', 'Description' => 'Tires', 'Price' => 15),
                  array('Code'=>'SPARKPLUG', 'Description' => 'Spark Plugs', 'Price' => 20)
                 );

        echo '<p>'.$items[1]['Code'].' = '.$items[1]['Description'].'</p>';

        echo '<table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Price</th>
                  </tr>
                </thead>';
        foreach ($items as $item){
          echo '<tr>';
          foreach($item as $field => $value){
            echo '<td>'.$value.'</td>';
          }
          echo '</tr>';
        }
        echo '</table>';


        function compareItems($fir,$sec){
          if($fir['Price'] == $sec['Price'])
            return 0;
          else if($fir['Price'] > $sec['Price'])
            return 1;
          else
            return -1;
        }

        usort($items,'compareItems');
     ?>

        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
