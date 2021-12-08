<?php 
include 'includes/errors.php';
include 'includes/db_connx.php';

$staff_id = htmlspecialchars(strip_tags(trim($_POST['staffID'])));
$user = htmlspecialchars(strip_tags(trim($_POST['user'])));
$email = htmlspecialchars(strip_tags(trim($_POST['email'])));
$pwd = htmlspecialchars(strip_tags(trim($_POST['pwd'])));
$hashed_pwd = md5($pwd);

$checkUser = "SELECT staff_id, username, email, pwd FROM employee_details WHERE staff_id = '$staff_id' OR username = '$user' OR email = '$email'";

$result = $conn->query($checkUser);

if($result->num_rows > 0){

    header('Location:input-employee.php');
    die();

     }

$sql = "INSERT INTO employee_details (staff_id, username, email, pwd)
VALUES ('$staff_id', '$user', '$email', '$hashed_pwd')";

if ($conn->query($sql) === TRUE) {
    header('Location:view-all.php');
    die();
} else {
  header('Location:includes/errors.php');
  die();
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
