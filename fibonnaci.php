<html>





	<head>

		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	</head>

		<body>
		<!-- 	hello-world.php or hello_world.php -->
	<center><h1>Fibonacci Sequence</h1></center>
		<div class="container">
			<div class="card">
				
				<div class="card-body">

				<?php
				echo 'Hello Worldszz';
				?>

				<form action="fibonnaci.php" method="get">
					<table class="table">
						<thead>
							<tr class="row">
								<th class="col-5">Enter sequence length</th>	
								
							</tr>

						</thead>

						<tbody>
							<tr class="row">
								<td class="col-5">---------></td>
								<td class="col-4">
									<input type="number" name="fiboQty" min="0"  class="form-control">
								</td>
							</tr>


							</tr>


							<tr class="row">
								<td colspan="2" class="col-9">
									<button type="submit" class="btn btn-primary float-right">Submit</button>
								</td>
							</tr>


						</tbody>

					</table>

				</form>

					<br><br><br><br><br>

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
						  
						  ini_set('display_errors', 0);
						 
						$a = $_GET['fiboQty']; 

						echo "Series length: ".$a."<br/><br/>";

						Fibonacci($a); 
					?> 



				 </div>

			</div>
			
		</div>
			

		</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</html>