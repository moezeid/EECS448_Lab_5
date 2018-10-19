<?php
$u_id = $_POST['dropDown'];

echo "<html>

  <head></head>
  <h1>PHP Generated Table of " . $u_id . "'s Posts<br></h1> ";



$mysqli = new mysqli("mysql.eecs.ku.edu", "m113z398", "peachfuzz", "m113z398");
echo " <style>
table, tr, td {
  border: 1px solid black;
  padding: 15px;
  font-family: serif;

}
</style>";

if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);



    }
    $postQuery = "SELECT * FROM Posts WHERE author_id = '$u_id' ORDER by post_id";

    echo "<table>";
    if ($result = $mysqli->query($postQuery)) {

        /* fetch associative array */
        echo "<tr> <td> post_id </td> <td>author_id </td> <td> content </td> </tr>";
        while ($row = $result->fetch_assoc()) {

            echo "<tr> <td>$row[post_id]</td> <td>$row[author_id]</td> <td>$row[content]</td> </tr>";

        }
        echo "</table>";

        $result->free();

}































 ?>
