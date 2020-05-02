<?php
  require_once('view-comp/header.php');
?>
    <title>PHP Template</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1>Price List</h1>
    <?php
      echo '<p>Products</p>';

      $products = array ('Tires', 'Oil', 'Spark Plugs');

      sort($products);
      rsort($products);


      echo '<p>Product 0: '.$products[0];

      echo '<ul>';
        for ($ctr=0; $ctr < count($products); $ctr++) {
          echo '<li>'.$products[$ctr].'</li>';
        }
      echo '</ul>';

      echo "<ul>";
        $ctr = 0;
        foreach ($products as &$product) {
          $product = $product.' 1 ';
          echo '<li>'.$ctr.' - '.$product.'</li>';
          $ctr++;
        }
      echo "</ul>";

      echo '<ul>';
        for ($ctr=0; $ctr < count($products); $ctr++) {
          echo '<li>'.$products[$ctr].'</li>';
        }
      echo '</ul>';

      $numbers = range(0, 10, 2);
      echo '<br>range(1, 10): ';
      foreach ($numbers as $number) {
        echo $number.' ';
      }
      echo "<br>";


      //range of letters
      $letters = range('a', 'z');
      echo '<br>letters: ';
      foreach ($letters as $letter) {
        echo $letter.' ';
      }
      echo "<br>";

      $prices = array('Tires' => 100, 'Oil' => 20, 'Spark Plugs' => 5, 1000);


      //change the value of a particular item on the array
      $prices['Tires'] = 120;

      echo "Tire price: ".$prices['Tires'];

      //Doon sa walang key, dun nagstart yung indexing (index 0)
      //Although it is not a good practice to mix numeric index and by key
      echo "<br>Fourth price: ".$prices[0];

      $prices['Clutch Disk'] = 250;

      echo '<br>Clutch Disk: '.$prices['Clutch Disk'];
      echo "<br><br>";

      //sort by keys
      ksort($prices);
      krsort($prices);

      //sort by value
      asort($prices);
      arsort($prices);

      echo '<ul>';
      foreach ($prices as $itemDesc => $price) {
        echo '<li>'.$itemDesc.' - '.$price.'</li>';
      }
      echo '</ul';

      $empty = array();

      $items = array(
                        array('Code' => 'OIL', 'Description' => 'Oil', 'Price' => 10),
                        array('Code' => 'TIR', 'Description' => 'Tires', 'Price' => 100),
                        array('Code' => 'SPK', 'Description' => 'Spark Plugs', 'Price' => 5)
                      );

            echo '<p>'.$items[1]['Description'];

            function compareItems($fir, $sec) {
              if ($fir['Price'] == $sec['Price']) {
                return 0;
              } else if ($fir['Price'] > $sec['Price']) {
                return -1;
              } else {
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
      <?php
        require_once('view-comp/footer-go-back.php');
        require_once('view-comp/footer.php');
      ?>
