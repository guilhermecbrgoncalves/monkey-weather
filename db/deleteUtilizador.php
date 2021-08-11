<?php
include('db.php');

$id = $_POST['form-id'];

// sql to delete a record
$sql = "DELETE FROM utilizador WHERE id_utilizador=$id";

if ($conn->query($sql) === TRUE) {
  header('Location: ../index.php?p=home&e=userDeleted');
} else {
  header('Location: ../dashboard.php?p=profile&e=errorDeleting');
}
$conn->close();
?>