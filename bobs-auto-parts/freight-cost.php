<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
  crossorigin="anonymous">
</head>
<body>

  <div class = "container">
    <div class="card">
      <div class="card-body">
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

      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>