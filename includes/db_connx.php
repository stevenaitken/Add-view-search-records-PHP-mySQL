<?php
$servername = "127.0.0.1";
$username = "testUser";
$password = "1234";
$dbname = "employees";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  header("Location:error/1045.php");
}



?>

