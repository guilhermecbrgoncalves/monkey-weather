<!--PAGE NOT FOUND-->
<div class="container-fluid" style="background-image: url('img/macaco7.jfif'); height: 100vh; background-size: cover;">
    <div class="row pt-5">
        <div class="col-6">
        </div>
        <div class="col-6 mt-5 main">
            <h1>404 - Page not Found</h1>
            <h4> <a href=<?php
                            if (isset($_SESSION['id'])) {
                                echo "\"dashboard.php\">Go back to the Dashboard";
                            } else {
                                echo "\"index.php?p=login\">Go to go to the Homepage";
                            };
                            ?> </a>
            </h4>
        </div>
    </div>
</div>
<!--PAGE NOT FOUND END-->