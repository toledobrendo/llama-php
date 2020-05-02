<?php
  require_once('view-comp/header.php');
 ?>
        	<h1>Freight Cost</h1>
          <table class="table">
            <thead>
              <tr class="row">
                <th class="col-3">Distance</th>
                <th class="col-3">Cost</th>
              </tr>
            </thead>
            <!-- Inside the tbody is where you would loop -->
              <tbody>
                <?php
                  // WHILE loop
                  $distance = 50;
                  while ($distance <= 250){
                    //print a row (single quote with a single quote needs BACKSLASH. if not, single quote then double quote.)
                    // 1td = 1 dynamic;
                    echo '<tr class = "row">
                          <td class = "col-3">'.$distance.'</td>
                          <td class = "col-3"> '.($distance / 10).' </td>
                        </tr>';
                      // in every iteration of loop, put the distance
                      $distance += 50;
                  }

                  //FOR loop
                  for ($distance = 300; $distance <=500; $distance += 50){
                    echo '<tr class = "row">
                          <td class = "col-3">'.$distance.'</td>
                          <td class = "col-3"> '.($distance / 10).' </td>
                        </tr>';
                  }

                  //DO-while loop
                  $distance = 550;
                  do {
                    echo '<tr class = "row">
                          <td class = "col-3">'.$distance.'</td>
                          <td class = "col-3"> '.($distance / 10).' </td>
                        </tr>';
                      $distance += 50;
                  } while ($distance <= 750);


                 ?>
              </tbody>

          </table>
          <?php
            require_once('view-comp/footer.php');

           ?>
