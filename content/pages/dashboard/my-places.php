    <?php
    $userId = $_SESSION['id'] ?>
    <!--SELECT PLACES-->
    <div class="pt-5 mt-5">
        <div class="sidenav text-center">
            <div class="container selectPlaces text-center">
                <form action="db/localStore.php" method="POST">
                    <input type="text" class="form-control" name="id" required id="id" value="<?= $userId ?>" hidden>
                    <div class="form-group text-center" style="width: 100%;">
                        <label for="form-local" style="color: white;">Area Select</label>
                        <select multiple class="form-control" id="selectLocal" name="form-local" style="height: 200px;">
                        </select>
                    </div>
                    <button class="btn mt-3 text-center" type="submit" style="background-color: rgb(255, 180, 68); color: white;">Submit</button>
                </form>
            </div>
            <div class="container pt-5 text-center" style="margin-left: 2rem;">
                <?php
                if (isset($_GET['response']) && $_GET['response'] == 'added') {
                    echo '<div class="alert alert-success" role="alert"> New Place added! </div>';
                } else if (isset($_GET['response']) && $_GET['response'] == 'duplicate') {
                    echo '<div class="alert alert-danger" role="alert"> Error, Place already exists on your list. </div>';
                } else if (isset($_GET['response']) && $_GET['response'] == 'deleted') {
                    echo '<div class="alert alert-danger" role="alert"> Place deleted successfully! </div>';
                } else if (isset($_GET['response']) && $_GET['response'] == 'errorDelete') {
                    echo '<div class="alert alert-danger" role="alert"> Error in deleting Place, please try again later.</div>';
                }
                ?>
            </div>
        </div>
        <!--SELECT PLACES END-->
        <!--PLACES-->
        <div class="content">
            <?php
            include('db/db.php');
            $tomorrowDate1 = date("l", strtotime("+1 day"));
            $tomorrowDate2 = date("l", strtotime("+2 day"));
            $tomorrowDate3 = date("l", strtotime("+3 day"));
            $tomorrowDate4 = date("l", strtotime("+4 day"));

            $query = "SELECT *FROM locals WHERE id_utilizador";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            while ($row = $result->fetch_assoc()) {   ?>
                <div class="container mb-3">
                    <div class="container-fluid overlayPlaces" id="bgLocal_<?php echo $row['name']; ?>" style="min-height: 250px; background-size: cover;">
                        <div class="row overlayPlacesTp ps-3 my-auto">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4 my-auto">
                                <h1 class="text-light" id="local_<?php echo $row['name']; ?>"></h1>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4 col-4 my-auto ">
                                <img id="tempImgHoje_<?php echo $row['name']; ?>" src="" alt="" style="width: 200px;">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-4 my-auto text-center">
                                <form action="db/deleteLocal.php" method="POST">
                                    <input type="text" class="form-control" name="delete-local" required value="<?php echo $row['name']; ?>" hidden>
                                    <button class="btn btn-danger btnRemovePlace" type="submit">X</button>
                                </form>
                            </div>
                        </div>
                        <div class="row overlayPlacesBt">
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="container pb-3 pt-3">
                                    <h3><span id="tempMaxHoje_<?php echo $row['name']; ?>"></span> <span class="text-muted ms-3" id="tempMinHoje_<?php echo $row['name']; ?>"></span></h3>
                                    <hr>
                                    <h4 class="text-light" id="weatherType_<?php echo $row['name']; ?>"></h4>
                                    <hr>
                                    <p id="intVentoHoje_<?php echo $row['name']; ?>"></p>
                                    <hr>
                                    <p id="directVentoHoje_<?php echo $row['name']; ?>"></p>
                                    <hr>
                                    <p id="chuvaHoje_<?php echo $row['name']; ?>"></p>
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
                                            <img id="tempImgAmanha1_<?php echo $row['name']; ?>" src="" alt="">
                                            <br>
                                            <img id="tempImgAmanha2_<?php echo $row['name']; ?>" src="" alt="">
                                            <br>
                                            <img id="tempImgAmanha3_<?php echo $row['name']; ?>" src="" alt="">
                                            <br>
                                            <img id="tempImgAmanha4_<?php echo $row['name']; ?>" src="" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <p class="pt-4" id="tempMaxAmanha1_<?php echo $row['name']; ?>"></p>
                                            <p class="pt-4" id="tempMaxAmanha2_<?php echo $row['name']; ?>"></p>
                                            <p class="pt-4" id="tempMaxAmanha3_<?php echo $row['name']; ?>"></p>
                                            <p class="pt-4" id="tempMaxAmanha4_<?php echo $row['name']; ?>"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            <?php } ?>
        </div>
    </div>
    <!--PLACES END-->
    <script src="js/yourWeather.js"></script>
    <script>
        var arr = [];
        let numRows = 0;
        let localUser;
        <?php
        include('db/db.php');
        $query = "SELECT *FROM locals WHERE id_utilizador";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        while ($row = $result->fetch_assoc()) {
        ?> arr.push('<?php
                        echo $row['name'];

                        ?>');

            numRows++
        <?php };
        ?>;
        weatherCards(arr, numRows);
    </script>