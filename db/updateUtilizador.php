<?php
include('db.php');

$id = $_POST['form-id'];
$user = $_POST['form-username'];
$pwd = $_POST['form-password'];
$email = $_POST['form-email'];
$name = $_POST['form-name'];

$sql = "UPDATE utilizador SET username = '$user', password = '$pwd', email = '$email', name = '$name' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "User edited";
  header('refresh: 2; url=index.php?p=dashboard');
} else {
  echo "Erro: " . $conn->error;
  header('refresh: 2; url= index.php?p=editUser&id=$id');
}

$conn->close();
?>