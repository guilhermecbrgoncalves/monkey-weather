<div class="container">
    <h1>Your Weather</h1>

    <?php
    $userId = $_SESSION['id'] ?>
</div>
<div class="sidenav">

    <div class="container">
        <form action="db/localStore.php" method="POST">
            <input type="text" class="form-control" name="id" required id="id" value="<?= $userId ?>" hidden>
            <input type="text" class="form-control" name="id" required id="id" value="<?= $userId ?>">
            <button class="btn btn-primary mt-3" type="submit">Submit</button>
        </form>
    </div>

</div>

<div class="content">

    <?php
    include('db/db.php');
    $query = "SELECT *FROM locals WHERE id_utilizador";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    while ($row = $result->fetch_assoc()) {   ?>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-dark" id="local_<?php echo $row['name']; ?>"></h1>
                </div>
                <div class="col-md-6">
                    <form action="db/deleteLocal.php" method="POST">
                        <input type="text" class="form-control" name="delete-local" required value="<?php echo $row['name']; ?>" hidden>
                        <button class="btn btn-danger mt-5" type="submit" style="margin-left: 90%;">X</button>
                    </form>
                </div>
            </div>
            <hr>

            <div class="row">

                <div class="col-12 col-lg-6 col-sm-12">
                    <div class="card card bg-dark text-white mb-5">
                        <img class="card-img-top" src="IMG/macaco.jfif" id="image1_<?php echo $row['name']; ?>" style="width: 100%; max-height: 250px; object-fit: cover;" alt="Card image cap">
                        <div class="card-img-overlay">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                <p class="card-title" id="tempMaxHoje_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="tempMinHoje_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="intVentoHoje_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="directVentoHoje_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="chuvaHoje_<?php echo $row['name']; ?>"></p>
                            </div>
                        </div>
                        <div class="col text-center" style="background-color:rgb(255, 180, 68);">
                            <h3>today</h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-sm-12">
                    <div class="card card bg-dark text-white mb-5">
                        <img class="card-img-top" src="IMG/macaco.jfif" id="image2_<?php echo $row['name']; ?>" style="width: 100%; max-height: 250px; object-fit: cover;" alt="Card image cap">
                        <div class="card-img-overlay">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                <p class="card-title" id="tempMaxAmanha_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="tempMinAmanha_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="intVentoAmanha_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="directVentoAmanha_<?php echo $row['name']; ?>"></p>
                                <p class="card-title" id="chuvaAmanha_<?php echo $row['name']; ?>"></p>
                            </div>
                        </div>
                        <div class="col text-center" style="background-color:rgb(255, 180, 68);">
                            <h3>tomorrow</h3>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

    <?php
    }

    ?>

</div>

<iframe width="100%" height="650" src="https://embed.windy.com/embed2.html?lat=42.033&lon=-7.295&detailLat=25.493&detailLon=-90.945&width=100%25&height=650&zoom=4&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>

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
    <?php }; ?>

    console.log(arr);
    console.log(numRows);

    for (let i = 0; i < numRows; i++) {

        var xmlhttp = new XMLHttpRequest();
        var url = "https://api.ipma.pt/open-data/forecast/meteorology/cities/daily/" + arr[i] + ".json";

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var myArr = JSON.parse(this.responseText);

                const tMaxHoje = (myArr["data"][0])["tMax"];
                const tMinimaHoje = (myArr["data"][0])["tMin"];
                const probChuvaHoje = (myArr["data"][0])["precipitaProb"];
                const direcVentoHoje = (myArr["data"][0])["predWindDir"];
                const ventoHoje = (myArr["data"][0])["classWindSpeed"];

                document.getElementById("tempMaxHoje_" + arr[i]).textContent = "Temperatura Máxima: " + tMaxHoje + " ºC";
                document.getElementById("tempMinHoje_" + arr[i]).textContent = "Temperatura Minima: " + tMinimaHoje + " ºC";
                document.getElementById("intVentoHoje_" + arr[i]).textContent = "Intensidade do Vento: " + ventoHoje + "kts";
                document.getElementById("directVentoHoje_" + arr[i]).textContent = "Direcção do Vento: " + direcVentoHoje;
                document.getElementById("chuvaHoje_" + arr[i]).textContent = "Probabilidade de Precipitação: " + probChuvaHoje + "%";

                const tMaxAmanha = (myArr["data"][1])["tMax"];
                const tMinimaAmanha = (myArr["data"][1])["tMin"];
                const probChuvaAmanha = (myArr["data"][1])["precipitaProb"];
                const direcVentoAmanha = (myArr["data"][1])["predWindDir"];
                const ventoAmanha = (myArr["data"][1])["classWindSpeed"];

                document.getElementById("tempMaxAmanha_" + arr[i]).textContent = "Temperatura Máxima: " + tMaxAmanha + " ºC";
                document.getElementById("tempMinAmanha_" + arr[i]).textContent = "Temperatura Minima: " + tMinimaAmanha + " ºC";
                document.getElementById("intVentoAmanha_" + arr[i]).textContent = "Intensidade do Vento: " + ventoAmanha + "kts";
                document.getElementById("directVentoAmanha_" + arr[i]).textContent = "Direcção do Vento: " + direcVentoAmanha;
                document.getElementById("chuvaAmanha_" + +arr[i]).textContent = "Probabilidade de Precipitação: " + probChuvaAmanha + "%";

            }

        }

        xmlhttp.open("GET", url, true);

        xmlhttp.send();

        var obj = ' { "data": [{"idRegiao": 1, "idAreaAviso": "AVR", "idConcelho": 5, "globalIdLocal": 1010500, "latitude": "40.6413", "idDistrito": 1, "local": "Aveiro", "longitude": "-8.6535"},     {"idRegiao": 1, "idAreaAviso": "BJA", "idConcelho": 5, "globalIdLocal": 1020500, "latitude": "38.0200", "idDistrito": 2, "local": "Beja", "longitude": "-7.8700"},     {"idRegiao": 1, "idAreaAviso": "BRG", "idConcelho": 3, "globalIdLocal": 1030300, "latitude": "41.5475", "idDistrito": 3, "local": "Braga", "longitude": "-8.4227"},      {"idRegiao": 1, "idAreaAviso": "BGC", "idConcelho": 2, "globalIdLocal": 1040200, "latitude": "41.8076", "idDistrito": 4, "local": "Bragan\u00e7a", "longitude": "-6.7606"},    {"idRegiao": 1, "idAreaAviso": "CBO", "idConcelho": 2, "globalIdLocal": 1050200, "latitude": "39.8217", "idDistrito": 5, "local": "Castelo Branco", "longitude": "-7.4957"},      {"idRegiao": 1, "idAreaAviso": "CBR", "idConcelho": 3, "globalIdLocal": 1060300, "latitude": "40.2081", "idDistrito": 6, "local": "Coimbra", "longitude": "-8.4194"},     {"idRegiao": 1, "idAreaAviso": "EVR", "idConcelho": 5, "globalIdLocal": 1070500, "latitude": "38.5701", "idDistrito": 7, "local": "\u00c9vora", "longitude": "-7.9104"},  {    "idRegiao": 1, "idAreaAviso": "FAR", "idConcelho": 5, "globalIdLocal": 1080500, "latitude": "37.0146", "idDistrito": 8, "local": "Faro", "longitude": "-7.9331"}, {    "idRegiao": 1, "idAreaAviso": "GDA", "idConcelho": 7, "globalIdLocal": 1090700, "latitude": "40.5379", "idDistrito": 9, "local": "Guarda", "longitude": "-7.2647"},     {"idRegiao": 1, "idAreaAviso": "LRA", "idConcelho": 9, "globalIdLocal": 1100900, "latitude": "39.7473", "idDistrito": 10, "local": "Leiria", "longitude": "-8.8069"},      {"idRegiao": 1, "idAreaAviso": "LSB", "idConcelho": 6, "globalIdLocal": 1110600, "latitude": "38.7660", "idDistrito": 11, "local": "Lisboa", "longitude": "-9.1286"},     {"idRegiao": 1, "idAreaAviso": "PTG", "idConcelho": 14, "globalIdLocal": 1121400, "latitude": "39.2900", "idDistrito": 12, "local": "Portalegre", "longitude": "-7.4200"},      {"idRegiao": 1, "idAreaAviso": "PTO", "idConcelho": 12, "globalIdLocal": 1131200, "latitude": "41.1580", "idDistrito": 13, "local": "Porto", "longitude": "-8.6294"},      {"idRegiao": 1, "idAreaAviso": "STM", "idConcelho": 16, "globalIdLocal": 1141600, "latitude": "39.2000", "idDistrito": 14, "local": "Santar\u00e9m", "longitude": "-8.7400"},     {"idRegiao": 1, "idAreaAviso": "STB", "idConcelho": 12, "globalIdLocal": 1151200, "latitude": "38.5246", "idDistrito": 15, "local": "Set\u00fabal", "longitude": "-8.8856"},             {"idRegiao": 1, "idAreaAviso": "VCT", "idConcelho": 9, "globalIdLocal": 1160900, "latitude": "41.6952", "idDistrito": 16, "local": "Viana do Castelo", "longitude": "-8.8365"},             {"idRegiao": 1, "idAreaAviso": "VRL", "idConcelho": 14, "globalIdLocal": 1171400, "latitude": "41.3053", "idDistrito": 17, "local": "Vila Real", "longitude": "-7.7440"},             {"idRegiao": 1, "idAreaAviso": "VIS", "idConcelho": 23, "globalIdLocal": 1182300, "latitude": "40.6585", "idDistrito": 18, "local": "Viseu", "longitude": "-7.9120"},              {"idRegiao": 2, "idAreaAviso": "MCS", "idConcelho": 3, "globalIdLocal": 2310300, "latitude": "32.6485", "idDistrito": 31, "local": "Funchal", "longitude": "-16.9084"},             {"idRegiao": 2, "idAreaAviso": "MPS", "idConcelho": 1, "globalIdLocal": 2320100, "latitude": "33.0700", "idDistrito": 32, "local": "Porto Santo", "longitude": "-16.3400"},             {"idRegiao": 3, "idAreaAviso": "AOR", "idConcelho": 1, "globalIdLocal": 3410100, "latitude": "36.9563", "idDistrito": 41, "local": "Vila do Porto", "longitude": "-25.1409"},             {"idRegiao": 3, "idAreaAviso": "AOR", "idConcelho": 3, "globalIdLocal": 3420300, "latitude": "37.7415", "idDistrito": 42, "local": "Ponta Delgada", "longitude": "-25.6677"},             {"idRegiao": 3, "idAreaAviso": "ACE", "idConcelho": 1, "globalIdLocal": 3430100, "latitude": "38.6700", "idDistrito": 43, "local": "Angra do Hero\u00edsmo", "longitude": "-27.2200"},            {"idRegiao": 3, "idAreaAviso": "ACE", "idConcelho": 1, "globalIdLocal": 3440100, "latitude": "39.0800", "idDistrito": 44, "local": "Santa Cruz da Graciosa", "longitude": "-28.0000"},             {"idRegiao": 3, "idAreaAviso": "ACE", "idConcelho": 2, "globalIdLocal": 3450200, "latitude": "38.6842", "idDistrito": 45, "local": "Velas", "longitude": "-28.2133"},             {"idRegiao": 3, "idAreaAviso": "ACE", "idConcelho": 2, "globalIdLocal": 3460200, "latitude": "38.5325", "idDistrito": 46, "local": "Madalena", "longitude": "-28.5237"},             {"idRegiao": 3, "idAreaAviso": "ACE", "idConcelho": 1, "globalIdLocal": 3470100, "latitude": "38.5363", "idDistrito": 47, "local": "Horta", "longitude": "-28.6315"},             {"idRegiao": 3, "idAreaAviso": "AOC", "idConcelho": 2, "globalIdLocal": 3480200, "latitude": "39.4500", "idDistrito": 48, "local": "Santa Cruz das Flores", "longitude": "-31.1300"},             {"idRegiao": 3, "idAreaAviso": "AOC", "idConcelho": 1, "globalIdLocal": 3490100, "latitude": "39.6700", "idDistrito": 49, "local": "Vila do Corvo", "longitude": "-31.1200"  } ] }';

        var data = JSON.parse(obj)
        for (var j = 0; j < data["data"].length; j++) {
            console.log('id localidade: ' + arr[i]);

            if (data["data"][j]["globalIdLocal"] == arr[i]) {
                console.log(data["data"][j]["local"])

                document.getElementById("local_" + arr[i]).textContent = data["data"][j]["local"];

                var image = document.getElementById('image1_' + arr[i]);
                image.src = "img/locais/" + data["data"][j]["local"] + "1.jpg";

                var image2 = document.getElementById('image2_' + arr[i]);
                image2.src = "img/locais/" + data["data"][j]["local"] + "2.jpg";
            }
        }
    }
</script>

<script src="js/myAirports.js"></script>

<?php //include('db/selectAllUtilizador.php') 
?>