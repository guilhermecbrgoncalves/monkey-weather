<?php
include('db.php');

$id = $_POST['form-id'];

// sql to delete a record
$sql = "DELETE FROM utilizador WHERE id_utilizador=$id";

if ($conn->query($sql) === TRUE) {
  header('refresh: 2; url= ../index.php?p=home&e=userDeleted');
} else {
  header('refresh: 2; url= ../dashboard.php?p=profile&e=errorDeleting');
}
$conn->close();
?>