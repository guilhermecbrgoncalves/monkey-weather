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
  //die('aaa');

  header('Location: ../dashboard.php?p=index');

} else {
  echo "Login inválido: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>