<?php
@include 'includes/connect.php';
@include 'view-comp/header.php';

if ($_SERVER["HTTPS"] != "on") {
    header("Location: https://".$_SERVER["localhost"].$_SERVER["/llama-php/llama-php/eccom_finals/register.php"]);
    exit;
  }

?>


<html>
<body>

		<div class="content-card">
	        <div class="card-body">
	        	<div class="divider"></div>
         			 <!--editableTable-->
			    <div class="row">

			      </div>



<div class="col s12 m4 l3"><h2 class="header">Register</h2></div>

<form class="formValidate" id="formValidate" method="POST" action="router/register-user.php">

<div class="container center_div">
  <div class="form-row">
  	<?php
    	echo'<div class="form-group col-md-6">
       		<label for="username">Username: </label>
       		<input class="form-control" id="username" name="username" type="text" data-error=".errorTxt02">
       		<div class="errorTxt02"></div>
    		</div>';
     	echo'<div class="form-group col-md-6">
       	  	<label for="password">Password: </label>
       	  	<input class="form-control id="password" name="password" type="password" data-error=".errorTxt03">
       	  	<div class="errorTxt03"></div>
   			</div>';
   		echo'<div class="form-group col-md-6">
       	  	<label for="name">Name: </label>
       	  	<input class="form-control id="name" name="name" type="text" data-error=".errorTxt04">
       	  	<div class="errorTxt04"></div>
   			</div>';
   		echo'<div class="form-group col-md-6">
       	  	<label for="email">Email: </label>
       	  	<input class="form-control id="email" name="email" type="email">
   			</div>';
   		echo'<div class="form-group col-md-6">
       	  	<label for="contact">Phone Number: </label>
       	  	<input class="form-control id="contact" name="contact" type="number" data-error=".errorTxt05">
       	  	<div class="errorTxt05"></div>
   			</div>';
  ?>
  </div>
  <div class="col text-right">
	  <button class="btn" type="submit" name="action">Add
	    	<i class="fas fa-angle-double-right"></i>
	  	</button>
  </div>
</form>
<div class="col text-left">

	<button class="btn" type="submit"><a href="login.php">BACK</a> </button>
</div>

</div>
</div>
</div>
</div>

</body>
</html>
