<?php
if (isset($_GET['p'])) {
    $pag = $_GET['p'];

    if ($pag == 'home') { 
        include('content/pages/dashboard/home.php');
        echo "<script>document.title = 'Home';</script>";
    }
    else if ($pag == 'my-places') { 
        include('content/pages/dashboard/my-places.php');
        echo "<script>document.title = 'My Places';</script>";
    }
    else if ($pag == 'profile') { 
        include('content/pages/dashboard/profile.php');
        echo "<script>document.title = 'Profile';</script>";
    }
    else { 
        include('content/pages/404.php');
        echo "<script>document.title = 'PAGE NOT FOUND - 404';</script>";
    }
} else {
    include('content/pages/dashboard/home.php'); 
   echo "<script>document.title = 'Home';</script>";
}
?>
