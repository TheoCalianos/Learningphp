<?php

$name = "something";
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($name,$value,$expiration);
$_COOKIE;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <?php
    if(isset($_COOKIE['something'])) {
      $someOne = $_COOKIE['something'];
      echo $someOne;


    } else{
      $someOne = "";
    }


    $_COOKIE;



  ?>

</body>
</html>
