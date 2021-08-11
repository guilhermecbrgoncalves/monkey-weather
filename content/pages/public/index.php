<?php
$tomorrowDate1 = date("l", strtotime("+1 day"));
$tomorrowDate2 = date("l", strtotime("+2 day"));
$tomorrowDate3 = date("l", strtotime("+3 day"));
$tomorrowDate4 = date("l", strtotime("+4 day"));
?>

<!--SERVICE-->
<div class="container-fluid mt-0" id="bgLocal" style="background-size: cover; min-height: 100vh">

    <div class="container pt-5 text-center">
        <?php
        if (isset($_GET['e']) && $_GET['e'] == 'sent')
            echo '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
        else if (isset($_GET['e']) && $_GET['e'] == 'error')
            echo '<div class="alert alert-danger" role="alert">Error sending message, please try again later.</div>';
        else if (isset($_GET['e']) && $_GET['e'] == 'userDeleted')
            echo '<div class="alert alert-success" role="alert">User deleted successfully!</div>';
        ?>
    </div>
    <h1 class="mb-md-0 mb-5 bold-text text-center">the monkey weather</h1>
    <p class="text-center text-light mt-4">The Monkey Weather will tell you where you are and the Weather for today, tomorrow and for the next days!</p>

    <div class="container mb-3 mt-5">
        <div class="container-fluid overlayPlaces" style="min-height: 250px;">
            <div class="row ps-3 my-auto">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 my-auto">
                    <h1 class="text-light" id="local"></h1>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-4 my-auto ">
                    <img id="tempImgHoje" src="" alt="" style="width: 150px;">
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="container pb-3 pt-3">
                        <h3><span id="tempMaxHoje"></span> <span class="text-muted ms-3" id="tempMinHoje"></span></h3>
                        <hr>
                        <h4 class="text-light" id="weatherType"></h4>
                        <hr>
                        <p id="intVentoHoje"></p>
                        <hr>
                        <p id="directVentoHoje"></p>
                        <hr>
                        <p id="chuvaHoje"></p>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="container pb-3 pt-3">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-3">
                                <p class="pt-4"><?= $tomorrowDate1; ?> </p>
                                <p class="pt-4"><?= $tomorrowDate2 ?></p>
                                <p class="pt-4"><?= $tomorrowDate3; ?></p>
                                <p class="pt-4"><?= $tomorrowDate4; ?></p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-3">
                                <img id="tempImgAmanha1" src="" alt="">
                                <br>
                                <img id="tempImgAmanha2" src="" alt="">
                                <br>
                                <img id="tempImgAmanha3" src="" alt="">
                                <br>
                                <img id="tempImgAmanha4" src="" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <p class="pt-4" id="tempMaxMinAmanha1"></p>
                                <p class="pt-4" id="tempMaxMinAmanha2"></p>
                                <p class="pt-4" id="tempMaxMinAmanha3"></p>
                                <p class="pt-4" id="tempMaxMinAmanha4"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/main.js"></script>
<script>
    geo()
</script>

<!--SERVICE END-->