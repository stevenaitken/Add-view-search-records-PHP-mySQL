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
}

$sql = "INSERT INTO employee_details (staff_id, username, email, pwd)
VALUES ('1234', 'Doe', 'john@example.com', '12345')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>