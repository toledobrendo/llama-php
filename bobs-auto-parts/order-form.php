    <?php
      require_once 'view/header.php';
      require_once 'model/process.php';
      require_once 'model/products.php';

     ?>
    <!-- hello-world.php or hello_world.php -->


    <div class="container">
      <div class="card mt-3">
        <div class="card-body">
          <h3 class="card-title">Order Form</h3>
          <form action="process-order.php" method="post">
   <table class="table">
   	 <thead>
           <tr class="row">
               <th class="col-5">Item</th>
            <th class="col-4">Quantity</th>
          </tr>
        </thead>
      <tbody>

                <?php
                  foreach($productInputs as $productInput){
                    echo '<tr class="row">
                            <td class="col-6">
                              '.$productInput->name.'
                            </td>
                              <td class="col-4">
                              <input type="number" name="'.$productInput->name.'" maxlength="3" min="0" max="10" class="form-control"/>
                            </td>
                          </tr>';
                  }
                  ?>

         <tr class="row">
                  <td class="col-6">How did you find Bob's</td>
           <td class="col-4">
                <select name="find" class="custom-select">
                   <option value="regular">I'm a regular customer</option>
                    <option value="tv">Television advertising</option>
                    <option value="phone">Phone Directory</option>
                    <option value="mouth">Word of mouth</option>
                </select>
              </td>
            </tr>
          <tr class="row">
              <td colspan="2" class="col-10">
                  <button type="submit" class="btn btn-danger float-right ">Submit</button>
                  <a href="freight-cost.php" class="btn btn-warning float-right mr-3">Freight</a>
               </td>
              </tr>
     </tbody>
     </table>
     </form>
     </div>
     </div>
    </div>


    <?php
    
     ?>
