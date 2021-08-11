<?php
include('db.php');

$local = $_POST['delete-local'];

// sql to delete a record
$sql = "DELETE FROM locals WHERE name=$local";

if ($conn->query($sql) === TRUE) {
  header('Location: ../dashboard.php?p=my-places&response=deleted');
} else {
  header('Location: ../dashboard.php?p=my-places&response=errorDelete');
}

$conn->close();
?>