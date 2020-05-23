<?php require_once('view-comp/header.php'); ?>
 <div class="card-header">
 	Add Author Result
 </div>
 <div class="card-body">
 	<?php
 		$authorName = $_POST['authorName'];

 		try{
 			if(!$authorName) {
 				throw new Exception('Author details not complete. Please try again.');	
 			}
 		} catch (Exception $e){
 			echo $e->getMessage();
 		}
 	?>
 </div>
 <div class="card-footer">
 	<a class="btn btn-secondary" href="author-add.php">Back</a>
 </div>
 <?php require_once('view-comp/footer.php'); ?>