<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
  <body>

  <div class="container">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Fibonacci</h2>
        Sequence Length:
        <form action="index.php" method="post">
          <div>
            <input type="number" name="fibonacciSequence" class="col-11" required="required">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </body>
    </html>


        <?php
        $fibonacciSequence = @$_POST['fibonacciSequence'];
        function Fibonacci($fibonacciSequence){
          if ($fibonacciSequence == 0){
          return 0;
        } else if ($fibonacciSequence == 1){
          return 1;
        } else{
        return (Fibonacci($fibonacciSequence-1) +
                Fibonacci($fibonacciSequence-2));
        }
      }

      if(isset($_POST['submit'])){
        for ($counter = 0; $counter < $fibonacciSequence; $counter++){
          echo Fibonacci($counter),' ';
      }
    }
      ?>


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
