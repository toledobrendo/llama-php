<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>CAESAR'S CYPHER</title>
</head>
<body>



<div class="container">
	
	<div class="header">
		<h3>Caesar's Cypher by Owen Clamor</h3>
	</div>

<div class="body">
	
	<form action="" method="post">
		
		<div class="ml-3 col-5">
			<div class="form-group">
				<label for="form-group"> 

					Please Enter the Message:
					
				</label>
				<input type="text" class="form-control" name="input1" placeholder="Type Message Here">
			</div>
			<div class="form-group">
				<label for="form-group2"> 

					Please Enter the Key: 

				</label>
				<input type="number" class="form-control" name="input2" placeholder="Type Key Here: ">
			</div>
			<input class="btn btn-caesar"type="submit" name="submit" value="Print" />
			
		</div>
	</form>
</div>

<div class="card-footer mb-3">
                  <div class="ml-3 mt-3 col-6">
                    <p class="font-weight-bold">Result: </p>
                  </div>
                   <?php
                   $cypherArray = range('A', 'Z');
                   if(isset($_POST['submit'])) {
                       
                       $message = $_POST['input1'];
                       $key = $_POST['input2'];
                    
                      		$capMessage = strtoupper($message);
                      		 $caesarArray = str_split($capMessage);
                      for ($i=0; $i < count($caesarArray) ; $i++) {
                        echo $caesarArray[$i];
                      }
                       $shiftedMessage;
                       $x = 0;
                      echo "<br/>";
                       for ($c=0; $c < count($caesarArray); $c++) {
                        for ($y=0; $y < count($cypherArray); $y++) {
                          if ($caesarArray[$c] == $cypherArray[$y]) {
                            $index[$x] = $y;
                            $x++;
                       }
                       }
                       }
                       for ($a=0; $a < count($index) ; $a++) {
                           echo $cypherArray[(($index[$a]+$key)%26)];
                         }
                         }
                    ?>

                </div>
        </div>
</div>

</body>
</html>