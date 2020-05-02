<?php
require_once('product-factory.php');
include("view-comp/header.php");
?>

<h3 class="card-title">Order Form</h3>
<form action="process-order.php" method="post">
   <table class="table">
      <thead>
         <tr class="row">
            <th class="col-5">Item</th>
            <th class="col-3">Price</th>
            <th class="col-4">Quantity</th>
         </tr>
      </thead>
      <tbody>
         <?php
         // $products = array(
         //    array('title' => 'Tires',     'name' => 'tireQty', 'price' => '100'),
         //    array('title' => 'Oil',       'name' => 'oilQty',  'price' => '50'),
         //    array('title' => 'Spark Plug', 'name' => 'sparkQty', 'price' => '10')
         // );

         // foreach ($products as $product) {
         //    echo '<tr class= "row">
         //                            <td class="col-5">' . $product['title'] . '</td>
         //                            <td class="col-3">' . $product['price'] . '</td>
         //                            <td class="col-4">
         //                               <input type="number" name="' . $product['name'] . '" maxlength="3" min="0" max="10" class="form-control"/>
         //                            </td>
         //                         </tr>';
         // }
         foreach ($products as $product) {
            echo '<tr class= "row">
                                    <td class="col-5">' . $product->title . '</td>
                                    <td class="col-3">' . $product->price . '</td>
                                    <td class="col-4">
                                       <input type="number" name="' . $product->name . '" maxlength="3" min="0" max="10" class="form-control"/>
                                    </td>
                                 </tr>';
         }
         ?>
         <tr class="row">
            <td class="col-6">How did you find Bob's</td>
            <td class="col-5">
               <select name="find" class="custom-select">
                  <option value="regular">I'm a regular customer</option>
                  <option value="tv">TV advertising</option>
                  <option value="phone">Phone Directory</option>
                  <option value="mouth">Word of mouth</option>
               </select>
            </td>
         </tr>
         <tr class="row">
            <td colspan="2" class="col-12">
               <a href="freight-cost.php" class="btn btn-secondary float-right">Freight Cost</a>
               <button type="submit" class="btn btn-primary float-right">Submit</button>
            </td>
         </tr>
      </tbody>
   </table>
</form>
<?php
include("view-comp/footer.php")
?>