<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: index.php?p=login');
} else {

    $user = $_SESSION['user'];
    $name = $_SESSION['name'];
    $image = $_SESSION['image'];
}

?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-5" style="background-color:blanchedalmond;">
            <div class="container-fluid">
                <a class="navbar-brand mb-md-0 mb-5 bold-text" href="index.php?p=home">the monkey weather</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-6" style="align-items: flex-end; width: auto;">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="dashboard.php?p=home">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600">home</span>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="dashboard.php?p=my-places">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600">my places</span>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link me-5" href="dashboard.php?p=my-airports">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600">the flying monkey</span>
                                </a>
                            </li>

                            <!-- Example single danger button -->
                            <li class="nav-item dropdown me-5">
                                <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $name ?>
                                </a>
                                <ul class="dropdown-menu me-5" style="background-color: rgb(255, 180, 68); color: white;" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item navDropdown" href="dashboard.php?p=profile">my profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item navDropdown" data-bs-toggle="modal" data-bs-target="#logoutModal" href="#">logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        <form action="/logout" method="post">
                            <input type="hidden" name="_token"> <button class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </header>