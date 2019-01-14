<?php
  class Car {
    public $wheels = 4;
    protected $engine = 1;
    private $doors = 2;
    var $seats = 4;
    function whoeProperty(){
      $this->engine;
    }

  }
  $bmw = new Car();

  echo $bmw->wheels;
  $semi = new Semi();
  class Semi extends Car{

  }

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
