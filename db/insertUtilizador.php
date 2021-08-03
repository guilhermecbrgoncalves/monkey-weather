<?php
include('db.php');

$user = $_POST['register-username'];
$pwd = $_POST['register-password'];
$email = $_POST['register-email'];
$name = $_POST['register-name'];

$sql = "INSERT INTO utilizador (username, password, email, name)
VALUES ('$user', '$pwd', '$email', '$name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('refresh: 2; url= ../index.php?p=login');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
