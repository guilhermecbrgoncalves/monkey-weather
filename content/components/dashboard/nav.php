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
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-5" style="background-color:blanchedalmond;">
            <div class="container-fluid">
                <a class="navbar-brand mb-md-0 mb-5 bold-text" href="index.php">the monkey weather</a>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">dashboard</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="dashboard.php?p=my-places">my places</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $name ?>
                            </a>
                            <ul class="dropdown-menu me-5" style="background-color: rgb(255, 180, 68); color: white;" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item navDropdown" href="dashboard.php?p=profile">my profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="db/logout.php">
                                        <button class="dropdown-item navDropdown" type="submit" data-bs-toggle="modal" data-bs-target="#logoutModal">logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--NAVBAR END-->
    </header>
    <main>