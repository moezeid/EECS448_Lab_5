<?php
echo "<html>

  <head></head>
  <h1>PHP Generated User Table<br></h1>

  ";



$mysqli = new mysqli("mysql.eecs.ku.edu", "m113z398", "peachfuzz", "m113z398");

/* check connection */
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);



    }

$query = "SELECT user_id FROM User ORDER by user_id";
echo " <style>
table, tr, td {
  border: 1px solid black;
  padding: 15px;
  font-family: serif;

}
</style>";
echo "<table>";
if ($result = $mysqli->query($query)) {



    /* fetch associative array */

    while ($row = $result->fetch_assoc()) {
        echo "<tr> <td> $row[user_id] </td> </tr>";

    }
    echo "</table>";

    echo "</html>";
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
















 ?>
