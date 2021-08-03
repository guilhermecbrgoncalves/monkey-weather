<?php
session_start();
if(!isset($_SESSION['id'])) {
    header('Location: index.php?p=login');
} else {
    
    $user = $_SESSION['user'];
}

?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:blanchedalmond;">
            <div class="container-fluid">
                <a class="navbar-brand mb-md-0 mb-5 bold-text" href="index.php?p=home">the monkey weather</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-6" style="align-items: flex-end; width: auto;">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                        Guilherme Gonçalves
                                    </span>

                                    <img class="img-profile rounded-circle" style="object-fit: cover" src="#">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="https://pedrolimamusic.com/admin/users/1/profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout

                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>





        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="/logout" method="post">
                            <input type="hidden" name="_token" value="xmNOGEkpr5xZAIsbSnaxyXkJyZPsrpDorHcWfXu9"> <button class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </ul>

        </nav>

    </header>