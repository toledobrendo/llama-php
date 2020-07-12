<style>
body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-color: #222831;
}

.logo {
  position: relative;
  left: 150px;
  top: 250px;
}

.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #393e46;
  text-align: center;
  border-radius: 24px;
  box-shadow: 9px 9px 2px;
}

.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}

.box input[type = "text"], .box input[type = "password"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: #eeeeee;
  border-radius: 24px;
  transition: 0.25s;
}

.box input[type = "text"]:focus, .box input[type = "password"]:focus {
  width: 280px;
  border-color: #00adb5;
}

.box button[type = "submit"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #00adb5;
  padding: 14px 40px;
  outline: none;
  color: #eeeeee;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

.box button[type = "submit"]:hover {
  background: #00adb5;
}

.answer{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #393e46;
  text-align: center;
  border-radius: 24px;
  color: white;
}

h1 {
  text-align: center;
  background-color: white;
}
</style>

<h1>Fibbonaci Sequence</h1>
<form class="box" method="post">
  <h2>Enter Fibonacci Length:</h2>
    <input type="text" name="fibonacci-input"/>
    <button type="submit">Execute Fibonacci Sequence</button>
</form>


<div class="answer">
  <h2>Output:</h2>
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

$n = $_POST['fibonacci-input'];
echo "Series Length: ".$n;
echo "<br />";
Fibonacci($n);
?>
</div>
