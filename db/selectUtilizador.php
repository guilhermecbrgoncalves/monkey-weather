<?php
include('db.php');

$id = $_GET['id'];

$sql = "SELECT * FROM utilizador WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
?>

  <div class="container">
    <form method="POST">
      <input type="text" class="form-control" name="form-id" required id="form-id" value="<?= $row['id'] ?>" hidden>

      <div class="form-group mb-3">
        <label for="form-username">Username</label>
        <input type="text" class="form-control" name="form-username" required id="form-username" value="<?= $row['username'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="form-password">Password</label>
        <input type="password" class="form-control" name="form-password" required id="form-password" value="<?= $row['password'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="form-email">E-mail</label>
        <input type="email" class="form-control" name="form-email" required id="form-email" value="<?= $row['email'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="form-name">Nome</label>
        <input type="nome" class="form-control" name="form-name" required id="form-nome" value="<?= $row['name'] ?>">
      </div>
      <div>
        <button type="submit" formaction="index.php?p=dashboard" class="btn" style="background-color: rgb(255, 180, 68); color: white;">Go Back</button>

        <button type="submit" formaction="db/updateUtilizador.php" class="btn" style="background-color: rgb(255, 180, 68); color: white;">Edit</button>
      </div>
      <div class="d-flex justify-content-end">
        <button type="submit" formaction="db/deleteUtilizador.php" class="btn btn-danger ">Delete User</button>
      </div>

    </form>

  </div>


<?php
} else {
  echo "0 results";
}
$conn->close();
?>