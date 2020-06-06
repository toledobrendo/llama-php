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
            <h3 class="card-title">Order Form</h3>
            <form  action="process-order.php" method="post">
              <table class="table">
                <thead>
                  <tr class="row">
                    <th class="col-5">Item</th>
                    <th colspan="col-4">Quantity</th>
                  </tr>
                  <tr class="row">
                    <td class="col-5">Tires</td>
                    <td class="col-4">
                      <input type="number" name="tireQty" maxlength="3" min="0" max="10" class="form-control"/>
                    </td>
                  </tr>
                  <tr class="row">
                    <td class="col-5">Oil</td>
                    <td class="col-4">
                      <input type="number" name="oilQty" maxlength="3" min="0" max="10" class="form-control"/>
                    </td>
                  </tr>
                  <tr class="row">
                    <td class="col-5">Spark Plugs</td>
                    <td class="col-4">
                      <input type="number" name="sparkQty" maxlength="3" min="0" max="10" class="form-control"/>
                    </td>
                  </tr>
                  <tr class="row">
                    <td colspan="2" class="col-9">
                      <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </td>
                  </tr>
                </thead>
              </table>
            </form>
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
