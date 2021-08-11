<?php
if (isset($_GET['p'])) {
    $pag = $_GET['p'];

    if ($pag == 'login') {
        include('content/pages/public/login.php');
        echo "<script>document.title = 'the monkey weather | login';</script>";
    } else if ($pag == 'about') {
        include('content/pages/public/about.php');
        echo "<script>document.title = 'the monkey weather | about the project';</script>";
    } else if ($pag == 'home') {
        include('content/pages/public/index.php');
        echo "<script>document.title = 'the monkey weather';</script>";
    } else {
        include('content/pages/404.php');
        echo "<script>document.title = 'the monkey weather | PAGE NOT FOUND - 404';</script>";
    }
} else {
    include('content/pages/public/index.php');
    echo "<script>document.title = 'the monkey weather';</script>";
}
