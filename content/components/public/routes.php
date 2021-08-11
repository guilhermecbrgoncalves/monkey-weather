<?php
if (isset($_GET['p'])) {
    $pag = $_GET['p'];

    if ($pag == 'login') {
        include('content/pages/public/login.php');
        echo "<script>document.title = 'Login';</script>";
    } else if ($pag == 'about') {
        include('content/pages/public/about.php');
        echo "<script>document.title = 'About the Project';</script>";
    } else if ($pag == 'home') {
        include('content/pages/public/home.php');
        echo "<script>document.title = 'Home';</script>";
    } else {
        include('content/pages/404.php');
        echo "<script>document.title = 'PAGE NOT FOUND - 404';</script>";
    }
} else {
    include('content/pages/public/home.php');
    echo "<script>document.title = 'Home';</script>";
}
