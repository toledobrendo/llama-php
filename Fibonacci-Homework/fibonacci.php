<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
    <title>Fibonacci Generator</title>
  </head>
  <body>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Fibonacci Generator</h2>
          Enter Sequence Length:
          <form action="fibonacci.php" method="post">
            <div>
              <input type="number" name="sequence" class="col-11" min="1" placeholder="Enter Sequence Length" required="required">
              <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>

            
            <?php 
            function Fibonacci($n){ 
              
                $num1 = 0; 
                $num2 = 1; 
              
                $counter = 0; 
                while ($counter < $n){ 
                    echo ' '.$num1; 
                    $num3 = $num2 + $num1; 
                    $num1 = $num2; 
                    $num2 = $num3; 
                    $counter = $counter + 1; 
                } 
            } 
               
                  if(isset($_POST['submit'])){
                    echo"".Fibonacci($_POST['sequence']);
                  }
            ?> 


        </form>
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
