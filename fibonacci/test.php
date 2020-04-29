<html>
<head><title>Noob</title></head>
<body>
<form action="" method="post">
<input type="number" name="username" value="" />
<input type="submit" name="submit" value="Submit" />
</form>

<?php
 if (isset($_POST['submit'])) { //to check if the form was submitted
 $username= $_POST['username'];
 echo $username;
}
?>

</body>
<html>
<form action="" method="post">

<div class="input-group col-6">
  <input type="text" class="form-control" name="input "placeholder="">
  <div class="input-group-append">
    <input class="btn btn-success" type="submit" name="submit" value="Submit" />
  </div>
</div>
</form>
