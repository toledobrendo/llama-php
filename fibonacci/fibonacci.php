
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fibonacci.css -->
    <link rel="stylesheet" type="text/css" href="css\fibonacci.css">
    <!-- decided to add logo hehehe -->
    <link rel="icon" href="img\fibonacci.png">

    <title>Fibonacci</title>
  </head>
  <body>

    <div class="container maindiv">

      <div class="card shadow ">
        <div class="card-header">
          <div class="card-title ml-3">
            <h2 class="d-inline">Fibonacci </h2>
            <a class="d-inline float-right font-weight-bold" href="../index.php">Back</a>
          </div>
          <h6 class="card-subtitle mb-2 ml-3 text-muted font-italic fontsub">@Dino Paulo Gomez ~ 4/18/2020</h6>

         </div>
        <div class="card-body">
          <h5 class="card-title ml-3">Please enter the length of the sequence.</h5>


          <form action="" method="post">

          <div class="input-group ml-3">
            <input class="col-3"type="number" name="input" value="" />
            <input class="btn btn-fibonacci"type="submit" name="submit" value="Print" />
          </div>
          </form>







                </div>
                <div class="card-footer ml-3 mb-3">
                    <p class="font-weight-bold mt-2">Sequence: </p>
                    <?php




                   if(isset($_POST['submit'])) {
                     if(isset($_POST['input'])){
                       $input = $_POST['input'];
                       $var1 = 0;
                       $var2 = 1;
                       $i;
                       for ($i = 1; $i <= $input; $i++)
                       {
                           echo $var2.' ';
                           $next = $var1 + $var2;
                           $var1 = $var2;
                           $var2 = $next;
                       }

                     }

                          }
                    ?>

                </div>
        </div>






      </div>
    </div>

      </div>
    </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
