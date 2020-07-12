<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
</head>
<body>
	 <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div href="browse.php" class="navbar-brand">Dwight's MTG Fantasy</div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">

        <div>
           	<a class="nav-link" href="browse-products.php">Browse Products</a>

            <a class="nav-link" href="search-products.php">Search Products</a>

            <?php
            if($_SESSION['customer_sid']==session_id()){
           		echo 'Hello '.$_SESSION['name'].'!';
      		  }
      		  else{
      		  	echo '<a class="nav-link" href="login.php">Login</a>';

           		echo '<a class="nav-link" href="register.php">Register</a> ';
      		  }


             ?>


            <a class="nav-link" href="router/logout.php">Logout</a>
        </div>

        </ul>
      </div>
    </div>
