<?php
include('db.php');

session_start();
$_SESSION['id'];

$uploadOk = 0;

if (!$_FILES["fileToUpload"]["name"] == "") {
  $target_dir = "../img/profile-img/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $file_name = basename($_FILES["fileToUpload"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  //if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {

    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    }
  }
}

$id = $_SESSION['id'];
$user = $_POST['update-username'];
$pwd = $_POST['update-password'];
$email = $_POST['update-email'];
$name = $_POST['update-name'];

if ($uploadOk == 1) {
  $sql = "UPDATE utilizador SET username = '$user', password = '$pwd', email = '$email', name = '$name', image = '$file_name' WHERE id_utilizador = $id";
} else {
  $sql = "UPDATE utilizador SET username = '$user', password = '$pwd', email = '$email', name = '$name' WHERE id_utilizador = $id";
}

if ($conn->query($sql) === TRUE) {
  header('Location: ../dashboard.php?p=profile&response=edited');
} else {
  header('Location: ../dashboard.php?p=profile&response=error');
}

$conn->close();
