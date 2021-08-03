<?php
if (isset($_GET['p'])) {
    $pag = $_GET['p'];

    if ($pag == 'login') { 
        include('content/pages/login.php');
        echo "<script>document.title = 'Login';</script>";
    }
    else if ($pag == 'register') { 
        include('content/pages/register.php');
        echo "<script>document.title = 'Register';</script>";
    }
    else if ($pag == 'index') { 
        include('content/pages/dashboard/dashboard-index.php');
        echo "<script>document.title = 'Dashboard';</script>";
    }
    else if ($pag == 'about') { 
        include('content/pages/about.php');
        echo "<script>document.title = 'About the Project';</script>";
    }
    else if ($pag == 'editUser') { 
        include('content/pages/editUser.php');
        echo "<script>document.title = 'Edit User';</script>";
    }
    else if ($pag == 'home') { 
        include('content/pages/home.php');
        echo "<script>document.title = 'Home';</script>";
    }
    else { 
        include('content/pages/404.php');
        echo "<script>document.title = 'PAGE NOT FOUND - 404';</script>";
    }
} else {
    include('content/pages/home.php'); 
   echo "<script>document.title = 'Home';</script>";
}
