<?php
  require_once('view-comp/header.php');
 ?>
      	<h1>Price List</h1>
        <?php
          echo '</p>Products</p>';
          //creating an array of strings
          $products = array('Tires', 'Oil', 'Sparl Plugs');

          //ascending order
          sort($products);

          //descending order
          rsort($products);


          // $products[5] = 'Clutch';

          echo '</p>Product 0: '.$products[0];
          echo '<ul>';
          //count function to know the size or length of the array,
          //its parameter is the array variable
          for ($ctr=0; $ctr < count($products); $ctr++) {
            echo '<li>' .$products[$ctr].'</li>';
          }
          echo '</ul>';

          echo '<ul>';
          $ctr = 0;
          foreach ($products as $product){
            // echo '<li>'.$product.'</li>';
            $product = $product.' = 1';
            echo '<li>'.$ctr. ' - '.$product.'</li>';
            $ctr++;
          }
          echo '</ul>';

          //RANGE
          $numbers = range(1, 10);
          echo '<br/> range (1,10): ';
          foreach ($numbers as $number) {
            echo $number. ' ';
          }
          echo '<br/>';

          $letters = range('a', 'z');
          echo '<br/> letters: ';
          foreach ($letters as $letter) {
            echo $letter. ' ';
          }

          ////
          //no key is considered as index 0 BUT NOT A GOOD PRACTICE
          $prices = array('Tires' => 100, 'Oil' => 20, 'Spark Plugs' => 5, 1000);
          //it can be modified
          $prices['Tires'] = 120;
          echo '<br/><br/>Tire Price: '.$prices['Tires'];

          echo '<br/>Fourth Price: '.$prices[0];

          $prices['Clutch Disk'] = 250;
          echo '<br/>Clutch Disk = '.$prices['Clutch Disk'];

          //sorted by key
          ksort($prices);
          krsort($prices);

          //sorted by value
          asort($prices);

          echo '<ul>';
          foreach ($prices as $itemDesc => $price) {
            echo '<li>'.$itemDesc.' - '.$price.'</li>';
          }
          echo '</ul>';

          $items = array(
                      array('Code' => 'OIL', 'Description' => 'Oil', 'Price' => 10),
                      array('Code' => 'TIR', 'Description' => 'Tires', 'Price' => 100),
                      array('Code' => 'SPK', 'Description' => 'Spark Plugs', 'Price' => 5),
                      );
            echo '<p>'.$items[1]['Description'];

            function compareItems ($fir, $sec){
              if ($fir['Price'] == $sec['Price']){
                return 0;
              } else if ($fir['Price'] > $sec['Price']){
                return 1;
              } else {
                return -1;
              }
            }

            usort($items, 'compareItems');
            //activity
            echo '<table class = "table table-condensed">
                    <thead>
                      <tr>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Price</th>
                      </tr>
                    </thead>';

              foreach ($items as $item){
                echo '<tr>';
              foreach ($item as $value){
                  echo '<td>'.$value.'</td>';
              }
              echo '</tr>';
            }
            echo '</table>';

         ?>
         <?php
           require_once('view-comp/footer.php');
          ?>
