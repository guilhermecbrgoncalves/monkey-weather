<?php
$servername = "localhost";
$username = "cesae";
$password = "2pqOkYDdJ0cyqIpE";
$dbname = "the_monkey_weather";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>