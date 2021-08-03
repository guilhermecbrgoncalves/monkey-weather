<div class="container">
    <h1>Your Weather</h1>

    <?php
    $userId = $_SESSION['id'] ?>

    <form action="db/localStore.php" method="POST">
        <input type="text" class="form-control" name="id" required id="id" value="<?= $userId ?>" hidden>
        <div class="form-group" style="width: 18rem">
            <label for="exampleFormControlSelect2">Area Select</label>
            <select multiple class="form-control" id="selectLocal" name="form-local">
            </select>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>

    <script>
        var arr = [];
        arr.push('<?php
                    include('db/db.php');
                    $query = "SELECT *FROM locals WHERE id_utilizador";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                    while ($row = $result->fetch_assoc()) {


                        echo $row['name'];
                    };
                    ?>;');

        console.log(arr);
    </script>

    <script src="js/yourWeather.js"></script>

    <?php //include('db/selectAllUtilizador.php') 
    ?>

</div>
</div>