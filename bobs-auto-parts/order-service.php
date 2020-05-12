<?php 
	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'])

	function saveOrder($tireQty, $oilQty, $sparkQty, $totalAmount) {
		echo '<br/>' .DOCUMENT_ROOT;

	$file = fopen(DOCUMENT_ROOT. '/llama-php/bobs-auto-parts/resource/order.txt', 'ab'); 
	}
 ?>