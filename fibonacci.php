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
      	<h1> Fibonacci Sequence </h1>
        <form action = "fibonacci.php" method = "get">
          <div> Sequence Length </div>
            <div class="input-group">
              <input type = "number" name = "sequenceQty" maxlength = "3" min = "0" max = "30" class="form-control"/>
              <button type = "submit" class="btn btn-primary float-right">Submit</button>
            </div>
              <?php
                function Fibonacci($length){
                  if($length == 0)
                    return 0;
                  else if ($length == 1)
                    return 1;
                  else
                    return (Fibonacci($length - 1) + Fibonacci($length - 2));
                }
                  $length = @($_GET['sequenceQty']);
                  echo 'Series Length: '.$length. '<br/>';
                  for ($counter=0; $counter < $length; $counter++) {
                      echo '<strong>' .Fibonacci($counter). '&nbsp&nbsp </strong>';
                  }
              ?>
        </form>
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
