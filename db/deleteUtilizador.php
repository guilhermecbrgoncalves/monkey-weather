<?php
include('db.php');

$id = $_POST['form-id'];

// sql to delete a record
$sql = "DELETE FROM utilizador WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('refresh: 2; url= ../index.php?p=dashboard');
} else {
  echo "Error deleting record: " . $conn->error;
  header('refresh: 2; url= ../index.php?p=dashboard');
}

$conn->close();
?>