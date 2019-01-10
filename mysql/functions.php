<?php
    function showAllData(){
      global $connection;
      include "db.php";
      $query="select * from users";
      $result=mysqli_query($connection,$query);
          if(!$result){
          die("query failed". mysqli_error());
      }
      while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
      }
    }

    function updateTable() {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        print_r($username);
        print_r($password);

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
          die("QUERY FAILED");
        }
    }
    function deleterows() {
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
          die("QUERY FAILED" . mysqli_error($connection));
        }
    }
    
?>
