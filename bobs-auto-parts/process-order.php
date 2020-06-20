
<?php
  require_once('service/order-service.php');
  require_once('model/product-list.php');

  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 150);
?>

<?php
  require_once('view-comp/header.php');
 ?>

          <h1 class="card-title">Order Result</h1>
          <?php
            echo '<p>Order Processed at ';
            echo date('H:i, jS F Y');
            echo '</p>';

            $list = new ProductList();

            $find = $_POST['find'];

            switch($find){
              case 'regular':
                echo "Regular Customer<br/>";
                break;
              case 'tv':
                echo "TV Advertisement<br/>";
                break;
              case 'phone':
                echo "From Phone Directory<br/>";
                break;
              case 'mouth':
                echo "From word of mouth<br/>";
              default:
                echo "Unknown Customer<br/>";
            }

            echo '<table>';

                $totalAmount = 0;

                foreach ($list->product as $products) {
                  echo '<tr>';
                    echo '<td>'.$_POST[$products->prodId].'</td>';
                    echo '<td>'.$products->name.'</td>';
                    echo '<td> @ '.round($products->price, 2).'.00 </td>';
                  echo '</tr>';

                  $totalAmount += $products->price * $_POST[$products->prodId];
                }
            echo '</table>';


            //total = VAT + VATable
            // VAT = 0.12 * VATable
            //VATable = total/1.12

            $vatAble = (float)(($totalAmount)/1.12);
            $vatAmount = (float)($vatAble * 0.12);

            $totalAmount = (float)($vatAble + $vatAmount);


            echo "<br/>VATable amount = ".$vatAble.'<br/>';
            echo "VAT amount = ".$vatAmount.'<br/>';
            echo "Total Amount = ".$totalAmount."<br/><br/>";

            echo "Amount exceeded 500?".($totalAmount > 500 ? ' YES' : ' NO').'<br/><br/>';


            saveOrder($list, $totalAmount);
            getOrders();

          ?>

        </div>
        <div class="card-footer">
          <a class="btn btn-success" href="order-form.php"> Go Back </a>

<?php
   require_once('view-comp/footer.php');
?>
