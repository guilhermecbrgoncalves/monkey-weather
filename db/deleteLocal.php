<?php
include('db.php');

$local = $_POST['delete-local'];

// sql to delete a record
$sql = "DELETE FROM locals WHERE name=$local";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('refresh: 2; url= ../dashboard.php?p=my-places');
} else {
  echo "Error deleting record: " . $conn->error;
  header('refresh: 2; url= ../dashboard.php?p=my-places');
}

$conn->close();
?>