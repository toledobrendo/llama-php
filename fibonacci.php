<!DOCTYPE html>
<html>
<head>
	<title>FIBONACCI ITALIANO</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<div class="card-body">
		<h5>Enter your desired sequence length</h5>
<form action="" method="post">
          <div class="input-group ml-3">
            <input class="col-3"type="number" name="input" value="" />
            <input class="btn btn-fibonacci"type="submit" name="submit" value="Print" />
          </div>
          </form>

		<div class="card-footer">
			<p>Fibonacci Sequence: </p>
			<?php
//                Note: Observe proper indention

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
			<div class="button div">
<!--                Note: this button isn't functioning well-->
				<a class="btn btn-info" href="index.php>">Go Back</a>
			</div>
		</div>

	</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>