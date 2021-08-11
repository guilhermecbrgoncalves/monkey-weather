<?php
include('db.php');

$user = $_POST['login-username'];
$pwd = $_POST['login-password'];

$sql = "SELECT * FROM utilizador WHERE username = '$user' AND password = '$pwd'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  
  /* UTILIZADOR EXISTENTE */

  session_start();
  $_SESSION['id'] = $row['id_utilizador'];
  $_SESSION['user'] = $row['username'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['image'] = $row['image'];

  header('Location: ../dashboard.php');

} else {
  header('Location: ../index.php?p=login&e=errorLogin');
}
$conn->close();
?>