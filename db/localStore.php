<?php
include('db.php');

$user = $_POST['id'];
$local = $_POST['form-local'];

$sql = "INSERT INTO locals (id_utilizador, name)
VALUES ('$user', '$local')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('refresh: 2; url= ../dashboard.php?p=index');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();