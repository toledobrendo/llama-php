<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
    <body>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h1>Price List</h1>
            <?php
              echo '<p>Products</p>';

              $products = array ('Tires', 'Oil', 'Spark Plugs');

              echo '</p>Product 0: ' .$products[0];

              sort($products);
              rsort($products);

              echo '<ul>';
              for ($ctr = 0; $ctr < count($products); $ctr++) {
                echo '<li>'.$products[$ctr].'</li>';
              }
              echo '</ul>';

              echo '<ul>';
              $ctr = 0;
              foreach ($products as &$product) {
                $product = $product.' - 1';
                echo '<li>'.$ctr.' - '.$product.'</li>';
                $ctr++;
              }
              echo '</ul>';

              echo '<ul>';
              for ($ctr = 0; $ctr < count($products); $ctr++) {
                echo '<li>'.$products[$ctr].'</li>';
              }
              echo '</ul>';


              $numbers = range(0, 10, 2);
              echo '<br/>range(1, 10): ';
              foreach ($numbers as $number) {
                echo $number. ', ';
              }
                echo '<br/>';

                $letters = range('a', 'z');
                echo '<br/> letters: ';
                foreach ($letters as $letter) {
                  echo $letter. ', ';
                }
                echo '<br/><br/>';


                $prices = array('Tires' => 100, 'Oil' => 20, 'Spark Plugs' => 5, 1000);
                $prices['Tires'] = 120;
                echo 'Tire Price '. $prices['Tires'];
                echo '<br/>Fourth Price: '. $prices[0];

                $prices['Clutch Disk'] = 250;

                echo '<br/> Clutch Disk: '. $prices['Clutch Disk'];

                ksort($prices);
                krsort($prices);
                asort($prices);
                arsort($prices);


                echo '<ul>';
                foreach ($prices as $itemDesc => $price) {
                  echo '<li>'. $itemDesc.' - '.$price. '</li>';
                }
                echo '<ul/>';

                $empty = array();

                $items = array(
                              array('Code' => 'OIL', 'Description' => 'Oil', 'Price' => 10),
                              array('Code' => 'TIR', 'Description' => 'Tires', 'Price' => 100),
                              array('Code' => 'SPK', 'Description' => 'Spark Plugs', 'Price' => 5)
                              );
              echo '<p>'.$items[1]['Description'];

              function compareItems($fir, $sec){
                if ($fir['Price'] == $sec['Price']){
                  return 0;
                }else if ($fir['Price'] > $sec['Price']){
                  return -1;
                }else {
                  return 1;
                }
              }

              usort($items, 'compareItems');

              echo '<table class="table table-condensed">
                     <thead>
                     <tr>
                       <th>Code</th>
                       <th>Description</th>
                       <th>Price</th>
                     </tr>
                     </thead>';
             foreach ($items as $item) {
               echo '<tr>';
               foreach ($item as $value) {
                 echo '<td>'.$value.'</td>';
               }
               echo '</tr>';
             }
             echo '</table>';
             ?>
          </div>
        </div>
      </div>


       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
       integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
       integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
