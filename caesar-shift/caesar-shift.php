


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
            <div class="row">
              <h3 class="card-title">Caesar Shift</h3>
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              <div class="row">
                <label>Message</label>
                <input type="text" name="message" id="message"class="form-control">
              </div>
              
              <div class="row">
                <label>Key</label>
                <input type="number" name="key" id="key"class="form-control">
              </div>
              
              <div class="row">
                <br><button type="submit" name="submit" class="btn btn-primary float-left">Submit</button>
              </div>     
            </form>
          </div>
          <div class="card-footer">
            <label> Result: </label>
            
            <?php

            // Note: Empty key input outputs a warning
            // Solution awfully similar to Dino
            $alphaArray = range('A', 'Z');
            
            $numArray = array("0"=>"A","1"=>"B","2"=>"C","3"=>"D","4"=>"E","5"=>"F","6"=>"G","7"=>"H","8"=>"I",
            "9"=>"J","10"=>"K","11"=>"L","12"=>"M","13"=>"N","14"=>"O","15"=>"P","16"=>"Q","17"=>"R","18"=>"S","19"=>"T",
            "20"=>"U","21"=>"V","22"=>"W","23"=>"X","24"=>"Y","25"=>"Z");

            if(isset($_POST['submit'])) {


            $message = $_POST['message'];
            $key = $_POST['key'];

            $upperMessage = strtoupper($message);

            $messageArray = str_split($upperMessage);


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
    

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>