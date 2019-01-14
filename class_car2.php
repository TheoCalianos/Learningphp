<?php
  class Car {
    function moveWheels(){
      echo "Wheels move";
    }

  }
  if(class_exists("Car", "moveWheels")) {
    echo "method exists";
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
