<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Orderform</h3>
          <form  action="process-order.php" method="post">
            <table class = "table">
              <thead>
                <tr class="row">
                  <th class="col-5">Items</th>
                  <th class="col-4">Quantity</th>

                </tr>
              </thead>
              <tbody>
                <tr class="row">
                  <td class="col-5"> Tires</td>
                  <td class="col-4">
                    <input type="number" name="tireQty" maxlength="3" min="0" max="10" class="form-control">
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-5"> Oil</td>
                  <td class="col-4">
                    <input type="number" name="oilQty" maxlength="3" min="0" max="10" class="form-control">
                  </td>
                </tr>

                <tr class="row">
                  <td class="col-5"> Spark Plugs </td>
                  <td class="col-4">
                    <input type="number" name="sparkQty" maxlength="3" min="0" max="10" class="form-control">
                  </td>
                </tr>

                <tr class="row">
                  <td colspan="2" class="col-9">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                  </td>

                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
