
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fibonacci.css -->
    <link rel="stylesheet" type="text/css" href="css\caesar.css">
    <!-- decided to add logo hehehe -->
    <link rel="icon" href="img\caesar.png">

    <title>Caesar Cipher</title>
    <script>
    function myFunction() {
      document.getElementsByClassName('className')
      confirm("Do you want to confirm");

    }
    </script>
  </head>
  <body onload="myFunction()">

    <div class="container maindiv">

      <div class="card shadow ">
        <div class="card-header">
          <div class="card-title ml-3">
            <h2 class="d-inline">Caesar Cipher </h2>
            <a class="d-inline float-right font-weight-bold" href="../index.php">Back</a>
          </div>
          <h6 class="card-subtitle mb-2 ml-3 text-muted font-italic fontsub">@Dino Paulo Gomez ~ 4/29/2020</h6>

         </div>
        <div class="card-body">

          <form action="" method="post">

              <div class="ml-3 col-5">
                <div class="form-group">
                <label for="formGroupExampleInput">Please enter the Message.</label>
                <footer class="blockquote-footer">use space when typing multiple word messages</footer>
                <input type="text" class="form-control" name="input"  placeholder="Message">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Please enter the Key.</label>
                  <input type="number" class="form-control" name = "key" placeholder="Key">
                </div>
                <input class="btn btn-fibonacci"type="submit" name="submit" value="Print" />
                <button onclick="myFunction()">button</button>



              </div>


          </form>







                </div>
                <div class="card-footer mb-3">
                  <div class="ml-3 mt-3 col-6">
                    <p class="font-weight-bold">Result: </p>
                    <?php

                    $alphaArray = range('A', 'Z');
                    $numArray=array("0"=>"A","1"=>"B","2"=>"C","3"=>"D","4"=>"E","5"=>"F","6"=>"G","7"=>"H","8"=>"I",
                    "9"=>"J","10"=>"K","11"=>"L","12"=>"M","13"=>"N","14"=>"O","15"=>"P","16"=>"Q","17"=>"R","18"=>"S","19"=>"T",
                    "20"=>"U","21"=>"V","22"=>"W","23"=>"X","24"=>"Y","25"=>"Z");

                    //after submit button onclick
                    if(isset($_POST['submit'])) {


                        $message = $_POST['input'];
                        $key = $_POST['key'];
                        //conversion to uppercase
                        $upperMessage = strtoupper($message);

                        $messageArray = str_split($upperMessage);


//                             echo $alphaArray[(($indexes[$b]+$key)%26)];

                          for ($i=0; $i < count($messageArray) ; $i++) {
                            if ($messageArray[$i]==" ") {
                              echo " ";
                              echo $alphaArray[((array_search($messageArray[$i+1],$numArray))+$key)%26];
                              $i++;
                            } else {
                              echo $alphaArray[((array_search($messageArray[$i],$numArray))+$key)%26];
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
    </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
