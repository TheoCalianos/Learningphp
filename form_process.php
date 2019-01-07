<?php

if(isset($_POST['submit'])){
  $name = ["Theo" , "Jake" ,"John" ,"Jim", "Joe"];
  $maximun = 10;
  $minimun = 4;
  $username = $_POST['username'];
  $password = $_POST['passowrd'];

  if(strlen($username) < $minimun ) {
      echo "username has to be longer then 5";
  }
  if(strlen($username) > $maximun ) {
      echo "username can not be longer then 10";
  }
  if(!in_array($username,$name)){
    echo "Sorry your lame";
  } else {
    echo "Hi " . $username;
  }
}

 ?>
