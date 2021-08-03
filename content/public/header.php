<body>
  <header>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand mb-md-0 mb-5 bold-text" href="index.php?p=home">the monkey weather</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-6" style="align-items: flex-end; width: auto;">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?p=home">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href=<?php
                session_start();
                if(isset($_SESSION['id'])) {
                 echo "\"dashboard.php?p=index\">Dashboard</a>";
 
              } else {

                echo "\"index.php?p=login\">Login</a>";
              }
              ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=about#parallax2">Source</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact</a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!--NAVBAR END-->
  </header>
  <main>