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
  text-transform: uppercase;
}

h1 {
  text-align: center;
  background-color: white;
}
</style>
<h1>Caesar Shift</h1>
<form class="box" method="post">
  <h2>Message:</h2>
  <input type="text" name="input1"/>
  <h2>Key:</h2>
  <input type="text" name="input2" />
  <button type="submit">Convert</button>
</form>

<div class="answer">
<?php

function Cipher($text, $key)
{
	$output = "";

	$splitArray = str_split($text);
	foreach ($splitArray as $splitChar)
		$output .= Convert($splitChar, $key);

	return $output;
}

function Convert($splitChar, $key)
{
	if (!ctype_alpha($splitChar))
		return $splitChar;

	$x = ord(ctype_upper($splitChar) ? 'A' : 'a');

	return chr(fmod(((ord($splitChar) + $key) - $x), 26) + $x);
}

$textinput = $_POST['input1'];
$numberinput = $_POST['input2'];

$cipherText = Cipher($textinput, $numberinput);

echo $cipherText;
?>
</div>
