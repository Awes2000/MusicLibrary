<?php
$servername = "mariadb";
$username = "db_user";
$password = "mijn_p@ss#";
$dbname = "voorbeeld_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM artist";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  var_dump($row);

}
