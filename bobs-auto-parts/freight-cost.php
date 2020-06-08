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
            <h1>Freight Cost</h1>
            <table class="table">
              <thead>
                <tr class="row">
                  <th class="col-3">Distance</th>
                  <th class="col-3">Cost</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $distance = 50;
                  while($distance <= 250){
                    echo
                    '<tr class = "row">
                      <td class="col-3">'.$distance.' Meters<td/>
                      <td class="col-3">'.($distance / 10).'<td/>
                    <tr/>';
                    $distance +=50;
                  }

                  for ($distance=300; $distance <= 500 ; $distance +=50) {
                    echo
                    '<tr class = "row">
                      <td class="col-3">'.$distance.' Meters<td/>
                      <td class="col-3">'.($distance / 10).'<td/>
                    <tr/>';
                  }
                  $distance = 550;
                  do {
                    echo
                    '<tr class = "row">
                      <td class="col-3">'.$distance.' Meters<td/>
                      <td class="col-3">'.($distance / 10).'<td/>
                    <tr/>';
                    $distance += 50;
                  } while ($distance <= 750);
                 ?>
              </tbody>
            </table>
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
