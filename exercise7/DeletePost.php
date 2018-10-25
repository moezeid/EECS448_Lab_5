<?php

$whichPosts = $_POST['whichOne'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "m113z398", "peachfuzz", "m113z398");

/* check connection */
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);



    }

    if(isset($whichPosts)){

      foreach ($whichPosts as $number){

        $deleteQuery = "DELETE FROM Posts WHERE post_id = " . $number;
        $mysqli->query($deleteQuery);
        echo" Post # " . $number . " was successfully deleted <br>";
      }
    }
$result->free();
$mysqli->close();






 ?>
