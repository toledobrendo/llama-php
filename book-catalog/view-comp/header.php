<?php
  function isActive($page)
  {
      return strpos($_SERVER['REQUEST_URI'], $page);
  }

  require_once 'process/connection.php';
?>
<html>
  <head>
    <link rel="icon" href="image/catalog-logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Book Catalog</title>
  </head>
  <body>
    <!-- hello-world.php or hello_world.php -->
    <div
    class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div href="index.php" class="navbar-brand">Book Catalog</div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">

          <li class="nav-item <?php if (isActive('index.php')) { echo 'active';} ?>">
            <a class="nav-link" href="index.php">Book Search</a>
          </li>
          <li class="nav-item <?php if (isActive('author-add.php')) { echo 'active';} ?>">
            <a class="nav-link" href="author-add.php">Add Author</a>
          </li>
          <li class="nav-item <?php if (isActive('book-add.php')) { echo 'active';} ?>">
            <a class="nav-link" href="book-add.php">Add Book</a>
          </li>

        </ul>
        <ul class="nav navbar-nav" style="color:red;">
           <li class="nav-item mr-2 ml-5">@DEBUG |</li>
           <li class="nav-item mr-2">server:  <span style="color:Aquamarine;"><?php echo $server.":".$_SERVER['SERVER_ADDR'];?></span> | </li>
           <li class="nav-item mr-2">user:  <span style="color:Aquamarine;"><?php echo $dbuser;?></span> | </li>
           <li class="nav-item mr-2">pass:  <span style="color:Aquamarine;"><?php echo $dbpass;?></span> | </li>
           <li class="nav-item mr-2">dbname:  <span style="color:Aquamarine;"><?php echo $dbname;?></span> </li>


         </ul>
      </div>
    </div>
  <div class="container">
  <div class="card my-3">
