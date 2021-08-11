<body>
  <header>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand bold-text" href="index.php?p=home">the monkey weather</a>
        <div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=<?php
                                        session_start();
                                        if (isset($_SESSION['id'])) {
                                          echo "\"dashboard.php\">dashboard";
                                        } else {
                                          echo "\"index.php?p=login\">login";
                                        };
                                        ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=about#parallax2">source</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--NAVBAR END-->
  </header>
  <main>