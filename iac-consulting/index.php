<?php
  require_once('message.php'); //this is a mandatory importation of a file. it will show an fatal error if not found. also, it cannot be suppressed unlike include()
?>
  <?php
    require_once('view-comp/header.php');
    require_once('model/person.php');

    function raiseToTwo(&$base){ //PASS BY REFERENCE
      $base *= $base;
    }

    $base = 5;
    raiseToTwo($base);
    echo $base;


    $person = new Person();
    $person->name = 'Kean'; // use arrow operator instead of '.' because of concatination in like echo

    echo '<br>'.$person->name;
    $person->introduce();

    $person2 = new Person();
    $person2->setAge(50);
    echo $person2->getAge();

    require_once('view-comp/footer.php');
   ?>



</html>
