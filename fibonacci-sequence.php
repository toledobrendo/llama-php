<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
   <!-- hello-world.php or hello_world.php -->
   <div class="container">
      <div class="card">
         <div class="card-body">
            <h3 class="card-title">Fibonacci Sequence</h3>
            <form action="fibonacci-sequence.php" method="post">
               <table class="table">
                  <tbody>
                     <tr class="row">
                        <td class="col-5">Sequence Length</td>
                     </tr>
                     <tr class="row">
                        <td class="col-11">
                           <input type="number" name="sequenceLength" maxlength="3" min="0" class="form-control" />
                        </td>
                        <td colspan="2" class="col-1">
                           <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </td>
                     </tr>

                     <?php
//                   Note: Good design choice on the index.php
                     if (isset($_POST['sequenceLength'])) {
                        $sequenceLength = $_POST['sequenceLength'];
                        $num1 = 0;
                        $num2 = 1;
                        echo
                           '<tr class="row">
                           <td class="col-12">Series length: ' . $sequenceLength . '</td>
                           </tr>';

                        echo '<tr class="row">';

                        for ($sequenceCounter = 0; $sequenceCounter < $sequenceLength; $sequenceCounter++) {

                           echo  '<td>' . $num2 . '</td>';
                           $num2 = $num2 + $num1;
                           $num1 = $num2 - $num1;
                        }

                        echo '</tr>';
                     } else {
                        echo 'a';
                        echo '<td class="col-12">Series length: </td>';
                     }

                     ?>
                     <tr class="">
                        <td>
                           <a class="btn btn-secondary float-right" href="index.php">Go Back</a>
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