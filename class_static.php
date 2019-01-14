<?php
  class Car {
    static $wheels = 4;
    protected $engine = 1;
    private $doors = 2;
    var $seats = 4;
    function wholeProperty(){
      Car::$wheels = 10;
    }

  }
  $bmw = new Car();
  Car::wholeProperty();
  echo Car::$wheels;


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
