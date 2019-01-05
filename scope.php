<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
    $x = "outside </br>"; // global
    function convert() {
      global $x;
      $x = "inside </br>"; // local
    }
    echo $x;
    convert();
    echo $x;

  ?>

</body>
</html>
