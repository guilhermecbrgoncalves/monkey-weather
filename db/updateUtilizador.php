<?php
include('db.php');

session_start();
  $_SESSION['id'];

  $target_dir = "../img/profile-img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$file_name = basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;


  }

  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
  

$id = $_SESSION['id'];

$user = $_POST['update-username'];
$pwd = $_POST['update-password'];
$email = $_POST['update-email'];
$name = $_POST['update-name'];

$sql = "UPDATE utilizador SET username = '$user', password = '$pwd', email = '$email', name = '$name', image = '$file_name' WHERE id_utilizador = $id";

if ($conn->query($sql) === TRUE) {
  echo "User edited";
  header('refresh: 2; url= ../index.php?p=profile&response=edited');
} else {
  echo "Erro: " . $conn->error;
  header('refresh: 2; url= ../index.php?p=profile&response=error');
}

$conn->close();
?>