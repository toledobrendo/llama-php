<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	</head>

	<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h3>Caesar's Shift- Assignment 2</h1>
					<form method="POST">
						  <h3>Input Something:</h3>
								<input type="text" class="form-control" name="inputMessage" required>
						  <h3>Key</h3>
						  		<input type="number" class="form-control" min="0" name="key" required>
						  <button type="submit" class="btn btn-primary">Submit</button>
					</form>

					<?php 
						if(isset($_POST['inputMessage']) && isset($_POST['key'])) {
							$inputMessage = $_POST['inputMessage'];
							$key = $_POST['key'];

							$inputMessage = strtoupper($inputMessage);
							$message = str_split($inputMessage); 
							$arraySize = count($message);

							for($x = 0; $x < $arraySize; $x++) {
								for($stepCount = 0; $stepCount < $key; $stepCount++) {
									if($message[$x] != "Z") {
										$message[$x]++;
									} else {
										$message[$x] = "A";
									}
								}
							}
							foreach($message as $encryptedMessage) {
								echo $encryptedMessage;
							}

							$message = array();
						}
					 ?>	
				</div>
			</div>
		</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</html>