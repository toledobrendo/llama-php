<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo '<table><tr><td>Hello! Please enter a number: </td>'; 
		
	 ?>
     <form method="post">
     <td><input type="number" name="fib" value="0"></td>
     <td><input type="submit" name="submission"></td></tr>
     </form>
     </table>

    <!-- Note: Observe proper indention -->
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

$n = @$_POST['fib']; 
Fibonacci($n); 

?> 

	 

</body>
</html>