<?php include "db.php";
      include "functions.php";
      ini_set('display_errors', 1);
      error_reporting(E_ALL);
?>
<?php
  if(isset($_POST['submit'])){
    deleterows();
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
</head>
<body>
   <div class="container">
       <div class="col-sm-6">

       <form action="login_delete.php" method="post">
             <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" name="username" class="from-control">
             </div>

             <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" class="from-control">
             </div>

            <div class="form-group">

              <select name="id" id="">

                  <?php

                    showAllData();
                  ?>
             </select>

           </div>

         <input class="btn btn-primary" type="submit" name="submit" value="DELETE">

           </form>

       </div>


    </div>
</body>
</html>
