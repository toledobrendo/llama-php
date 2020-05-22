
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	</head>
	<body>

		<!-- -->
		<div class="container">
			<div class="card">

        <div class="card-body">
          <div class="card-title">
            <h1>PHP Assignment 2: Caesar's Cipher</h1>
          </div>
          <div>
            <!-- Asks for input -->

            <form method="GET">

              <input type="text" name="input" id="input" placeholder="Enter something">

              <input type="number" name="key" id="key" placeholder="Enter key">

            <button class="btn btn-primary">Submit</button>

            </form>

            <?php

            //Assigned variables
          	@$input = $_GET['input'];
            @$key = $_GET['key'];

						// $key = $key % 26;

          	$encrypted_text;

						// $encrypted_keys = array(
						// 	"A" => "B", "B" => "C", "C" => "D", "D" => "E","E" => "F","F" => "G",
						// 	"G" => "H", "H" => "I", "I" => "J", "J" => "K","K" => "L",
						// 	"L" => "M","M" => "N", "N" => "O", "O" => "P",
						// 	"P" => "Q","Q" => "R", "R" => "S","S" => "T","T" => "U",
						// 	"U" => "V", "V" => "W", "W" => "X", "X" => "Y",
						// 	"Y" => "Z", "Z" => "A"
						// );

						//ta array
						$alphas = array(
							"A","B","C","D","E","F","G","H","I","J","K","L",
							"M","N","O","Q","R","S","T","U","V","W","X","Y","Z"
						);
						$indexes;
						//convert ta upper
						$capitalizeInput = strtoupper($input);

						//convert to array
						$encrypted_text = str_split($capitalizeInput);

						$ctr = 0;

						echo "Plain text: ".$input." <br>";

						//Iterate to the whole input text
						for($i = 0; $i < count($encrypted_text); $i++){
								//Iterate to thoe whole alphabet array
								for ($x=0; $x < count($alphas); $x++){
									//If encrypted text has same index with alphas
									if ($encrypted_text[$i] == $alphas[$x]) {
										$indexes[$ctr] = $x;
										$ctr++;
								}
							}
					}



					for ($ctr2=0; $ctr2 < @count(@$indexes) ; $ctr2++) {
								echo $alphas[(($indexes[$ctr2]+$key)%26)];
					}


					?>

          </div>
        </div>
      </div>

    </div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>

</html>
