<?php
$u_id = $_POST['user_id'];
$content = $_POST['post_content'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "m113z398", "peachfuzz", "m113z398");





if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);



    }

      $u_idQuery = "SELECT user_id FROM User WHERE user_id = $u_id";
      $contentQuery = "INSERT INTO Posts (author_id, content) VALUES ('$u_id', '$content')";

    if($mysqli->query($u_idQuery) == TRUE){


          if($mysqli->query($contentQuery) == TRUE){


            echo " Your post: " . $content . " <br> was sucessfully created";

          }//end if
          else{
                echo "Error: Your post " . $content . ", was not uploaded";

          }//end else

    }//end if


    else{

          echo "Error: the username, " . $u_id . ", does not exist";

    }//end else


$mysqli->close();

?>
