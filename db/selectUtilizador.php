<?php
include('db.php');
$id = $_SESSION['id'];

$sql = "SELECT * FROM utilizador WHERE id_utilizador = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
?>
  <div class="container mt-5 pt-5 mb-5 pb-5">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md--6 col-sm-12 col-12 mt-5">
        <?php
        if (isset($_GET['response']) && $_GET['response'] == 'edited')
          echo '<div class="alert alert-success" role="alert">User data updated!</div>';
        else if (isset($_GET['response']) && $_GET['response'] == 'error')
          echo '<div class="alert alert-danger" role="alert">Error, please try again later.</div>';
        ?>
        <form method="POST" enctype="multipart/form-data">
          <input type="text" class="form-control" name="update-id" required id="update-id" value="<?= $row['id'] ?>" hidden>

          <div class="form-group mb-3">
            <label for="update-username">Username</label>
            <input type="text" class="form-control" name="update-username" required id="update-username" value="<?= $row['username'] ?>">
          </div>
          <div class="form-group mb-3">
            <label for="update-password">Password</label>
            <input type="password" class="form-control" name="update-password" required id="update-password" value="<?= $row['password'] ?>">
          </div>
          <div class="form-group mb-3">
            <label for="update-email">E-mail</label>
            <input type="email" class="form-control" name="update-email" required id="update-email" value="<?= $row['email'] ?>">
          </div>
          <div class="form-group mb-4">
            <label for="update-name">Nome</label>
            <input type="nome" class="form-control" name="update-name" required id="update-nome" value="<?= $row['name'] ?>">
          </div>
          <div class="form-group mb-3">
            <input type="file" name="fileToUpload">
          </div>
          <div class="mt-5">
            <button type="submit" formaction="index.php?p=dashboard" class="btn" style="background-color: rgb(255, 180, 68); color: white;">Go Back</button>
            <button type="submit" formaction="db/updateUtilizador.php" class="btn btn-success ms-1 me-5">Edit</button>
            <button type="button" class="btn btn-danger ms-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete Account</button>
          </div>
        </form>
      </div>

      <div class="col-xl-6 col-lg-6 col-md--6 col-sm-12 col-12 mt-5 text-center">
        <img class="img-profile rounded-circle ms-5" style="width: 350px; height:350px; object-fit:cover;" src="img/profile-img/<?php echo $image ?>">
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deleting Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete your account?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" formaction="db/deleteUtilizador.php" class="btn btn-danger">Delete My Account</button>
        </div>
      </div>
    </div>
  </div>

<?php
} else {
  echo "0 results";
}
$conn->close();
?>