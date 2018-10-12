<?php
$u_id = $_POST['user_id'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "m113z398", "peachfuzz", "m113z398");


if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);



    }

  $query = "INSERT INTO User VALUES ('$u_id')";

  if($mysqli->query($query) === TRUE){
      echo "New record created successfully";

  }
  else{
        echo "Error: the username, " . $u_id . ", is already in use";

  }
$mysqli->close();

?>
