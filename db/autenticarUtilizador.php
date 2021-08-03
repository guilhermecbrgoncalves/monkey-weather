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
  //die($_SESSION['image']);

  header('Location: ../dashboard.php?p=home');

} else {
  echo "Login inválido: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>