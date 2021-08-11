<?php
include('db.php');

$sql = "SELECT * FROM utilizador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

  <div class="container p-5">
    <div class="row text-center">
      <div class="col"></div>
      <div class="col">
        <h2>Id</h2>
      </div>
      <div class="col">
        <h2>Username</h2>
      </div>
      <div class="col">
        <h2>E-mail</h2>
      </div>
    </div>

    <?php
    // output data of each row
    while ($row = $result->fetch_assoc()) {
    ?>
      <form action="index.php?p=editUser&id=<?= $row['id'] ?>" method="POST">
        <div class="row text-center">
          <div class="col"><button type="submit" class="btn" style="background-color: rgb(255, 180, 68); color: white;">
              Select
            </button></div>
          <div class="col p-2"><?= $row['id'] ?></div>
          <div class="col p-2"><?= $row['username'] ?></div>
          <div class="col p-2"><?= $row['email'] ?></div>
        </div>
      </form>
  <?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>

  </div>