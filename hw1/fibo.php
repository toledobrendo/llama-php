
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
<style>
.container {
  align-items: center;
  align-self: center;
  align-content: center;
}
  .error {color: #FF0000;}
</style>
<title>HW1</title>
</head>
<body class="container" >
<h2>Fibonacci Series</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Enter number here: <input type="number" name="num" value="<?php echo $num;?>">

  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
$num = 0;
$ctr = $_POST['num'];
$n1 = 0;
$n2 = 1;
echo "<h3>Fibonacci series: </h3>";
echo "\n";
if(empty($ctr)){
  echo "<br />input is required on the text field";
} else{
  if($ctr < 1){
    echo "</br/> number must be above 0";
  } else {
    if($ctr == 1)
    {
      echo $n1;
    }  else{
      if($ctr == 2)
      {
        echo $n1.' '.$n2.' ';
      } else {
        echo $n1.' '.$n2.' ';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["num"])) {
            echo "There is an empty field";
          }
          while ($num < $ctr-2 )
          {
            $n3 = $n2 + $n1;
            echo $n3.' ';
            $n1 = $n2;
            $n2 = $n3;
            $num = $num + 1;
          }
        }
      }
    }
  }
}
?>

</body>
</html>
