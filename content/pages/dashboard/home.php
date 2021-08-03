  <div class="container-fluid mt-5">

      <!-- Page Heading -->
      <div class="container mt-5">
          <div class="row pt-5 pb-5">
              <div class="col-sm pr-5">

                  <h2 style="font-size: 60px">Welcome
                      <a href="dashboard.php?p=profile">
                          <?= $name ?></a>
                  </h2>
              </div>
              <div class="col-sm pl-5">
                  <img class="img-profile rounded-circle" style="width: 250px; height:250px; object-fit:cover" src="img/profile-img/<?php echo $image?>">
              </div>
          </div>
      </div>
      <div class="container whatToDo">
          <h2 class="pt-5 pb-5 text-grey">What do you want to do?</h2>
          <div class="row">
              <div class="col-sm pt-2">
                  <h3>my places</h3>
                  <a href="">
                      <h5>view places</h5>
                  </a>
              </div>

              <div class="col-sm pt-2">
                  <h3>the flying monkey</h3>
                  <a href="https://pedrolimamusic.com/admin/users">
                      <h5>Manage Users</h5>
                  </a>
                  <a href="/register">
                      <h5>Register New User</h5>
                  </a>
              </div>

          </div>

      </div>

  </div>