<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
  function addNumbers($number1 , $number2){
    $sum = $number1 + $number2;
    return $sum;

  }
  $answer = addNumbers(43,64);
  echo "the answer is " . "$answer </br>";
  $answer = addNumbers(100,$answer);
  echo "Plus 100 is " . "$answer </br>";
 ?>
</body>
</html>
