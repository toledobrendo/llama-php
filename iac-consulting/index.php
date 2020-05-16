<?php
  // include ('message.php'); //means pwede mawala yung file
  require_once('script.php'); //ensures isang beses lang ma import yung class or function.
  // //or include 'message.php'
  //
  // require 'message.php';

  require_once('message.php');
  //require_once('model/employee.php'); //unang naimport si employee bago si person so this would cause error.
  require_once('view-comp/header.php');
  require_once('service/index-service.php');
  require_once('model/person.php');
  require_once('model/employee.php');
  require_once('model/delivery-man.php')
 ?>
      	<?php
      	echo $message;
        $isValid = false;

        $baseNumber = 5;
        $baseNum = 5;
        raiseToTwo($baseNumber);
        raiseToTwoWay($baseNum);

        echo '<br/> Raised to Two: '.$baseNumber;
        echo '<br/> Raised to Two: '.$baseNum;

        //instantiated person
        $person = new Person();
        //in java: $person.name = 'Cams';
        //in php:note that there are no dollar sign if you would access property of an object
        //dot notation is already reserved for concantenation in php so what is used instead is the arrow operator
        $person->name = 'Cams';
        echo '<br/> Hello '.$person->name.'!';
        $person->introduce();

        $person->setAge(20);
        $employee->incrementAge();
        echo '<br/>'.$person->name.' is '.$person->getAge().'yr(s) old';


        $person->address = 'Makati City';
        echo '<br/> Juan lives in '.$person->address;

        echo '<br/>Is a Person human? '.(Person::$IS_HUMAN ? 'Yes': 'No');

        $employee = new Employee();
        $employee->name = 'Pedro';
        $employee->age = 30;
        echo '<br/>'.$employee->name.' is '.$person->getAge().'yr(s) old';
        $employee->company = 'iACADEMY';
        echo '<br/> '.$employee->name.' works at '.$employee->company;
        $employee->introduce();

        $grabDriver = new DeliveryMan();
        $grabDriver->moveTo('Quezon City');
      	?>

        <?php if($isValid){ ?>
          <strong>This is valid.</strong>

        <?php }?>

        <?php
      	  require_once('view-comp/footer.php')
      	?>
