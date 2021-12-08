<?php 
include 'includes/errors.php';
include 'includes/db_connx.php';

$pwd = $_POST['pwd'];

echo $pwd;

$user_pwd = $pwd;

echo "Unhashed pwd state: " . $pwd;

echo "<br><br>";
$hashedPwd  = password_hash($pwd, PASSWORD_DEFAULT);

echo "Hashed pwd state: " . $hashedPwd;
echo "<br><br>";
if (password_verify($pwd, $hashedPwd)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


?>