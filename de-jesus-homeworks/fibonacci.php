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
            <h4>FIBONACCI</h4>

          </div>
          <br><br><br>
          <div>

            <form method="GET">
            <input type="number" name="input" id="input" placeholder="Enter a number">
            <button class="btn btn-primary">Submit</button>
            </form>

            <?php
            $input = $_GET['input'];

            //Xn= Xn-1 + Xn-2
            // $fibonacciLength = 1;
            $num1 = 1;
            $num2 = 1;

            $counter= 0;

            while ($counter < $input) {
              echo " ".$num1;
              $num3 = $num2 + $num1;
              $num1 = $num2;
              $num2 = $num3;
              $counter = $counter + 1;
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
</html
