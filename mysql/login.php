<?php


if(isset($_POST['submit'])){
  $connection= mysqli_connect('localhost','root','root','loginapp');


  if($connection){
    echo "we are connected";

  } else {
    die("database connection failed");
  }


  $username = $_POST['username'];
  $password = $_POST['password'];

  // if($username && $password){
  //   echo $username;
  //   echo $password;
  // }else{
  //   echo "missing username or password";
  // }
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<body>
  <div class="container">
    <div class="col-xs-6">
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control">
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      </form>

    </div>
  </div>
</body>
</html>
