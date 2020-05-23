<?php require_once('view-comp/header.php'); 

//define the upload path and maximum file size constraints
require_once('helper/app-vars.php');
?>
<div class="card-header">
   Add Book
</div>
<div class="card-body">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
   <input type="hidden" name="MAX_FILE_SIZE" value="<?php GW_MAXFILESIZE ?>" />
   <!-- form-row so that col-md-6 works -->
   <div class="form-row">
   <div class="form-group col-md-4">
         <label for="bookName">Book Name:</label>
         <input type="text" class="form-control" id="bookName" name="bookName" /><br />
      </div>
      <div class="form-group col-md-8">
         <label for="authorName"> Author Name:</label>
         <input type="text" class="form-control" id="authorName" name="authorName" value="" /><br />
      </div>
      <div class="form-group col-md-4">
         <label for="screenshot">Book Image: </label>
         <div class="input-group">
            <div class="custom-file">
               <input type="file" class="custom-file-input" id="screenshot" name="screenshot">
               <label class="custom-file-label" for="screenshot">Choose file</label>
            </div>
         </div>
      </div>
      <div class="form-group col-md-12">
         <button type="submit" name="submit" class="btn btn-primary float-right mt-3">Submit High Score!</button>
      </div>
   </div>
</form>

</div>