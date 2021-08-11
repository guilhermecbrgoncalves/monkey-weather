<?php
include('db.php');

$user = $_POST['register-username'];
$pwd = $_POST['register-password1'];
$email = $_POST['register-email'];
$name = $_POST['register-name'];

$sql = "INSERT INTO utilizador (username, password, email, name)
VALUES ('$user', '$pwd', '$email', '$name')";

if ($conn->query($sql) === TRUE) {
  header('Location: ../index.php?p=login&e=success');
} else {
  header('Location: ../index.php?p=login&e=error');
}


$conn->close();
