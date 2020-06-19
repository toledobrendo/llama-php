<?php
  function isActive ($page){

    return strpos($_SERVER['REQUEST_URI'], $page);

  }
 ?>


<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
    <body>
      <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div href="index.php" class="navbar-brand">Book Catalog</div>
        <div class="collaps navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item <?php if(isActive('index.php'))echo 'active'; ?>">
              <a href="index.php" class="nav-link">Book Search</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="card my-3">
