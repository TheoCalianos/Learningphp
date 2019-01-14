<?php
  class Car {
    var $wheels = 4;
    var $engine = 1;
    var $doors = 2;
    var $seats = 4;
    function __construct(){
      $this->wheels = 10;
    }

  }
  $bmw = new Car();
  $truck = new Car();

  echo $bmw->wheels;
  echo $truck->wheels = 10 . "<br>";
  echo $truck->createDoors();
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

</body>
</html>
