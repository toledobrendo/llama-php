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
<title>HW2</title>
</head>
<body class="container" >
  <h2>Caesar Shift</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
      <tr>
        <td>
          Enter key number:
        </td>
        <td>
          <input type="number" name="num">
        </td>
      </tr>
      <tr>
        <td>
          Enter a message:
        </td>
        <td>
          <input type="text" name="mes">
        </td>
      </tr>
    </table>
    <input type="submit" name="submit" value="Enrypt">
    <!-- <input type="reset" name="submit" value="<?php $mes ="";$num =""; ?>"> -->
  </form>

<?php
//Variables
$mes = @($_POST['mes']);
$num = @($_POST['num']);
if(empty($mes)){
    echo "<br />input is required on the text field";
} else{
  if($num < 1){
    echo "</br/> number must be above 0";
  } else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($num)) {
        echo "There is an empty field";
      }

      // Note: If input is "Hello World", only "Hello" is encrypted
      $output = "";
    	$inputArr = str_split($mes);
      foreach ($inputArr as $char){
        if (!ctype_alpha($char)){
          $output = $char;
        } else {
          $offset = ord(ctype_upper($char) ? 'A' : 'a');
          $output .= chr(fmod(((ord($char) + $num) - $offset), 26) + $offset);
        }
      }
      echo "<br /><br /><h3>Encrypted Message: ".$output." </h3>";
    }
  }
}
?>
</body>
</html>
