  <div class="container-fluid mt-5">
      <!--WELCOME-->
      <div class="container mt-5">
          <div class="row pt-5 pb-5">
              <div class="col-sm pr-5 welcome">
                  <h1>Welcome
                      <a href="dashboard.php?p=profile">
                          <?= $name ?></a>
                  </h1>
              </div>
              <div class="col-sm pl-5 text-center">
                  <img class="img-profile rounded-circle" style="width: 250px; height:250px; object-fit:cover" src="img/profile-img/<?php echo $image ?>">
              </div>
          </div>
      </div>
      <!--WELCOME END-->

      <!--OPTIONS-->
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
                  <h3>my profile</h3>
                  <a href="dashboard.php?p=profile">
                      <h5>edit profile</h5>
                  </a>
              </div>

              <div class="col-sm pt-2">
                  <h3>the flying monkey</h3>
                  <a href="dashboard.php?p=weather-map">
                      <h5>check weather map</h5>
                  </a>
                  <a href="/register">
                      <h5>my airports</h5>
                  </a>
                  <a href="/register">
                      <h5>TAF & METAR</h5>
                  </a>
                  <a href="dashboard.php?p=notams">
                      <h5>NOTAMS</h5>
                  </a>
                  <a href="/register">
                      <h5>significant weather charts</h5>
                  </a>
              </div>
          </div>
      </div>
  </div>

  <!--OPTIONS END-->