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
    else if ($pag == 'home') { 
        include('content/pages/dashboard/home.php');
        echo "<script>document.title = 'Home';</script>";
    }
    else if ($pag == 'my-places') { 
        include('content/pages/dashboard/my-places.php');
        echo "<script>document.title = 'My Places';</script>";
    }
    else if ($pag == 'my-airports') { 
        include('content/pages/dashboard/my-airports.php');
        echo "<script>document.title = 'My Airports';</script>";
    }
    else if ($pag == 'weather-map') { 
        include('content/pages/dashboard/weather-map.php');
        echo "<script>document.title = 'Weather Map';</script>";
    }
    else if ($pag == 'notams') { 
        include('content/pages/dashboard/notams.php');
        echo "<script>document.title = 'Notams';</script>";
    }
    else if ($pag == 'profile') { 
        include('content/pages/dashboard/profile.php');
        echo "<script>document.title = 'Profile';</script>";
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
