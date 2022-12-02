<?php
$servername = "ecs-pd-proj-db.ecs.csus.edu";
$username = "";
$password = "";
$mydb = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$mydb);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo("We are good");

$conn->close();
?>
