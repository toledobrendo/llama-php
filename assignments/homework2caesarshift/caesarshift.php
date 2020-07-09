<html>





	<head>

		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	</head>
<br>
		<body>
		<!-- 	hello-world.php or hello_world.php -->
	<center><h3>Caesar Shift - Homework 2</h3></center>
		<div class="container">
			<div class="card">

				<div class="card-body">



				<form action="caesarshift.php" method="get">
					<table class="table">
						<thead>
							<tr class="row">
								<th class="col-12">Enter Message</th>
							</tr>
						</thead>

						<tbody>
							<tr class="row">
								<td class="col-1">-------></td>
								<td class="col-11">
									<input type="text" name="message" min="0"  class="form-control">
								</td>
							</tr>

							<thead>
								<tr class="row">
									<th class="col-12">Enter Key</th>
								</tr>
							</thead>

							<tr class="row">
								<td class="col-1">-------></td>
								<td class="col-11">
									<input type="number" name="key" min="0"  class="form-control">
								</td>
							</tr>


							<tr class="row">
								<td colspan="2" class="col-12">
									<button type="submit" class="btn btn-primary float-right">Submit</button>
								</td>
							</tr>


						</tbody>

					</table>

				</form>

					<br><br>

					<?php


						function encrypt($message, $key) {
					    $ans = "";
					    $key = $key % 26;
					    if($key < 0) {
					        $key += 26;
					    }
						    $ctr = 0;
						    while($ctr < strlen($message)) {
						        $c = strtoupper($message{$ctr});
						        if(($c >= "A") && ($c <= 'Z')) {
						            if((ord($c) + $key) > ord("Z")) {
						                $ans .= chr(ord($c) + $key - 26);
						        } else {
						            $ans .= chr(ord($c) + $key);
						        }
						      } else {
						          $ans .= " ";
						      }
						      $ctr++;
						    }
						    return $ans;
						}

					ini_set('display_errors', 0);

					$message = $_GET['message'];
					$key = $_GET['key'];


					$a = encrypt($message, $key);

					echo "Result: ". $a ."<br/><br/>";


					?>



				 </div>

			</div>

		</div>


		</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</html>