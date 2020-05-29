<?php require_once('../view-comp/header.php');?>
<?php require_once('../DB_Connection.php'); ?>

<!-- PHP Code for adding author -->
<?php

  $authorName = mysqli_escape_string($db,$_POST['authorName']);

  try{
    if(!$authorName){
        throw new Exception('You have not entered an author name. Please go back and try again.');
    }

  // Validate if there

  // Prepared statement to avoid SQL injection
  $sql = "INSERT INTO author (name) VALUES (?)";

  $ptsmt = mysqli_prepare($db,$sql);

  // Bind the prepared statement
  $ptsmt->bind_param("s", $authorName);

  // Execute the prepared statement
  $ptsmt->execute();


}catch(Exception $e){
   echo $e->getMessage();
}

  

?>


<div class="card-header">
  Added Author
</div>

<div class="card-body">
    <?php $authorName = $_POST['authorName']; ?>
    <?php echo "User Input: ".$authorName." "; ?>
    <br><br>
    <a href="../add-author.php">
      <button type="button" class="btn btn-secondary">Go Back</button>
    </a>
</div>






<?php require_once('../view-comp/footer.php');?>
