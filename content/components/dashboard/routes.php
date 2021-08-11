<?php
if (isset($_GET['p'])) {
    $pag = $_GET['p'];

    if ($pag == 'dashboard') { 
        include('content/pages/dashboard/index.php');
        echo "<script>document.title = 'the monkey weather | dashboard';</script>";
    }
    else if ($pag == 'my-places') { 
        include('content/pages/dashboard/my-places.php');
        echo "<script>document.title = 'the monkey weather | my places';</script>";
    }
    else if ($pag == 'profile') { 
        include('content/pages/dashboard/profile.php');
        echo "<script>document.title = 'the monkey weather | profile';</script>";
    }
    else { 
        include('content/pages/404.php');
        echo "<script>document.title = 'the monkey weather | PAGE NOT FOUND - 404';</script>";
    }
} else {
    include('content/pages/dashboard/index.php'); 
   echo "<script>document.title = 'the monkey weather | dashboard';</script>";
}
?>
