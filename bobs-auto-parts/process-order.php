<?php
  define ('VAT_PERCENT', 0.12);
 ?>
 <?php
   require_once('view-comp/header.php');
   require_once('model/product.php');
   require_once('model/product-list.php');
   require_once('service/order-service.php');
  ?>

        <h3 class = "card-title"> Order Title </h3>

      	<?php
      	echo '<p> Order Processed at ';
        echo date ('H:i, jS F Y');
        echo '</p>';

          //PHP comments
          /**Multiline Comments
          **/

          // A VARIABLE
          // $tireQuantity = 0; OR
          // all variable of PHP is preceded by dollarsign.
          //$_POST is an array & it access through the name of the form.
          //The ternary operator is used so that if the form is empty, it would display zero. Otherwise, it would display the value entered.
          // $tireQuantity = $_POST['tireQuantity'] ? $_POST['tireQuantity'] : 0;
          // $oilQuantity = $_POST['oilQuantity'] ? $_POST['oilQuantity'] : 0;
          // $sparkQuantity = $_POST['sparkQuantity'] ?  $_POST['sparkQuantity']: 0;

          @($tire->__set('qty', $_POST['tireQuantity'] ? $_POST['tireQuantity'] : 0));
          @($oil->__set('qty', $_POST['oilQuantity'] ? $_POST['oilQuantity'] : 0));
          @($sparkPlugs->__set('qty', $_POST['sparkQuantity'] ? $_POST['sparkQuantity'] :0));
          // echo '<p>Your order is as follows</p>';
          // // means concatenation; instead of plus, kay php kailangan dot.
          // // single quote, kapag may nilagay na variable, hindi ipprocess.
          //
          // echo  $tireQuantity.' tires. <br/>';
          // // if double quote, pinoprocess muna laman ng double quote bago iecho
          // echo "$oilQuantity bottles of oil. <br/>";
          // echo "$sparkQuantity spark plugs.<br/><br/>";

          //switch statements
          //1st step: extract from the array si find.
          $find = $_POST['find'];
          //2nd make a switch statement. Inside the switch statement are the values.
          switch ($find) {
            case 'regular':
              echo 'Regular Customer';
              break;
            case 'tv':
              echo 'From TV Advertising';
              break;
            case 'phone':
              echo 'From Phone Directory';
              break;
            case 'mouth':
              echo 'From Word of Mouth';
              break;
            default:
              echo 'Unknown Customer';
              break;
          }

          $tireQty = $tire->__get('qty');
          $oilQty = $oil->__get('qty');
          $sparkQty = $sparkPlugs->__get('qty');

          echo '<p>Your order is as follows: </p>';
          echo  $tireQty.' tires <br/>';
          echo $oilQty.' bottles of oil <br/>';
          echo $sparkQty.' spark plugs.<br/><br/>';

        $totalQty = @($tire->__get('qty') + $oil->__get('qty') + $sparkPlugs->__get('qty'));
        echo 'Total Quantity '.$totalQty.'<br/><br/>';

          echo '<br/>';
          echo '<p>Prices<br/>';
          // to access constant variables, call it using the same variable name WITHOUT the dollar sign.
          echo 'Tires: '.TIRE_PRICE. '<br/>';
          echo 'Oil: '.OIL_PRICE. '<br/>';
          echo 'Spark Plug: '.SPARK_PRICE. '<br/><br/>';

          // ADDITION; it is expecting a numeric value. There would be a warning if the form submitted is empty.
          //nevertheless, with a warning, it would still display a zero.
          //SURPRESS WARNINGS (@ symbol) hides the warnings
           // $totalQty = @($tireQuantity + $oilQuantity + $sparkQuantity);

           //if statements
          //  if ($totalQty == 0){
          //    echo 'You didn\'t order anything. <br/> <br/>';
          //  } else {
          //    echo '<p>Your order is as follows: </p>';
          //    if ($tireQuantity > 0) //one liner if statement
          //       echo  $tireQuantity.' tires. <br/>';
          //   if ($oilQuantity > 0)
          //       echo "$oilQuantity bottles of oil. <br/>";
          //   if($sparkQuantity > 0)
          //       echo "$sparkQuantity spark plugs.<br/><br/>";
          // }



          // $tireAmount = @($tireQuantity * TIRE_PRICE);
          // $oilAmount = @($oilQuantity * OIL_PRICE);
          // $sparkAmount = @($sparkQuantity * SPARK_PRICE);

          $tireAmount = @($tire->__get('qty') * TIRE_PRICE);
          $oilAmount = @($oil->__get('qty') * OIL_PRICE);
          $sparkAmount = @($sparkPlugs->__get('qty')* SPARK_PRICE);

          // $totalAmount = (float) $tireAmount;

          $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

          echo 'Tire Amount: '.$tireAmount.' <br/>';
          echo 'Oil Amount: '.$oilAmount.' <br/>';
          ECHO 'Spark Plugs Amount: '.$sparkAmount.' <br/><br/>';

          // $otherTotalAmount = &$totalAmount;
          // // kung saan nagpopoint ang reference, same sakaniya.
          // $otherTotalAmount += $oilAmount;
          // $totalAmount += $sparkAmount;
          // echo 'Other Total Amount: '.$otherTotalAmount. '<br/>';

          // $vatableAmount = (float) $totalAmount / (1 + 0.12);
          $vatableAmount = (float) $totalAmount / (1 + VAT_PERCENT);
          echo 'VATable Amount: '.$vatableAmount.'.<br/>';

          $vatAmount = $vatableAmount * VAT_PERCENT;
          echo 'VAT Amount (12%): '.$vatAmount.'<br/>';

          // $totalAmount = (float) ($tireAmount + $oilAmount + $sparkAmount);
          // $totalAmount += $sparkAmount;
          echo 'Total Amount: '.$totalAmount.'<br/>';



          // Use of ternary operator
          echo 'Amount exceeded 500 but less than 1000?'.($totalAmount > 500 && $totalAmount < 1000 ? ' Yes ' : ' No ').'<br/>';
          //is string checks if the variable/parameter is a string or not.
          echo 'Is $totalAmount string? ' .(is_string($totalAmount) ? 'Yes' : 'No').'<br/>';

          //deleted the variable so on line 104, it would tell no
          // unset($totalAmount);

          //totalAmountTwo would be set
          $totalAmountTwo = ""; //if totalAmountTwo = 1, then it would NOT be empty.

          //Checks if the variable in the file is initialized / declared - keword issetx
          echo 'Is $totalAmount set? ' .(isset($totalAmount) ? 'Yes' : 'No').'<br/>';
          echo 'Is $totalAmountTwo set? ' .(isset($totalAmountTwo) ? 'Yes' : 'No').'<br/>';

          //tests if a variable has value - keyword EMPTY
          echo 'Is $totalAmountTwo empty? ' .(empty($totalAmountTwo) ? 'Yes' : 'No').'<br/>';

          saveOrder($tire->__get('qty'), $oil->__get('qty'), $sparkPlugs->__get('qty'), $totalAmount);
      	?>


      </div>
      <!-- CARD FOOTER; add a go back button so there would be no dead end page. -->
      <div class="card-footer">
        <a class="btn btn-info" href="order-form.php">Go Back</a>
      </div>
    </div>
  </div>
  <?php
    require_once('view-comp/footer.php');

   ?>
