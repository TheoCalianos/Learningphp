<?php
  class Car {
    var $wheels = 4;
    var $engine = 1;
    var $doors = 2;
    var $seats = 4;
    function moveWheels(){
      $this->wheels = 10;
    }
    function createDoors(){
      $this->doors = 6;
    }

  }
  $bmw = new Car();
  class Plane extends Car{

  }
  $jet = new Plane();
  echo $jet->wheels;
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
