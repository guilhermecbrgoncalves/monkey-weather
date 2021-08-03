<!--SERVICE-->
<h1 class="text-muted mb-md-0 mb-5 bold-text text-center mt-4">the monkey weather</h1>
<p class="text-center mt-3">The Monkey Weather will tell you where you are and the Weather for today, tomorrow and
    for
    the next day!</p>
<div class="container text-center mt-4 mb-3">
    <button class="btn" style="background-color: rgb(255, 180, 68); color: white;" type="submit" onclick="geo()">Search Weather</button>
</div>
<div class="container">
    <div class="card bg-dark text-white mb-5">
        <img class="card-img" id="image1" src="IMG/banana.jfif" style="max-height: 350px; object-fit: cover;" alt="Card image">
        <div class="card-img-overlay overlay">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-8 text-justify py-4 px-4" id="overlay1">
                    <p class="card-title" id="tempMaxHoje"></p>
                    <p class="card-title" id="tempMinHoje"></p>
                    <p class="card-title" id="intVentoHoje"></p>
                    <p class="card-title" id="directVentoHoje"></p>
                    <p class="card-title" id="chuvaHoje"></p>
                </div>
                <div class="col text-center">
                    <h1 id="local"></h1>
                </div>
            </div>
        </div>
        <div class="col text-center" style="background-color:rgb(255, 180, 68);">
            <h3 id="today"></h3>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col col-lg-6 col-sm-12">
            <div class="card card bg-dark text-white mb-5">
                <img class="card-img-top" src="IMG/macaco.jfif" id="image2" style="width: 100%; max-height: 250px; object-fit: cover;" alt="Card image cap">
                <div class="card-img-overlay">
                    <div class="col-lg-6 col-md-8 col-sm-8 px-4 py-4" id="overlay2">
                        <p class="card-title" id="tempMaxAmanha"></p>
                        <p class="card-title" id="tempMinAmanha"></p>
                        <p class="card-title" id="intVentoAmanha"></p>
                        <p class="card-title" id="directVentoAmanha"></p>
                        <p class="card-title" id="chuvaAmanha"></p>
                    </div>
                </div>
                <div class="col text-center" style="background-color:rgb(255, 180, 68);">
                    <h3 id="tomorrow"></h3>
                </div>
            </div>
        </div>

        <div class="col col-lg-6 col-sm-12">
            <div class="card card bg-dark text-white mb-5">
                <img class="card-img-top" src="IMG/macaco2.jfif" id="image3" style="width: 100%; max-height: 250px; object-fit: cover;" alt="Card image cap">
                <div class="card-img-overlay">
                    <div class="col-lg-6 col-md-8 col-sm-8 px-4 py-4" id="overlay3">
                        <p class="card-title" id="tempMaxDepois"></p>
                        <p class="card-title" id="tempMinDepois"></p>
                        <p class="card-title" id="intVentoDepois"></p>
                        <p class="card-title" id="directVentoDepois"></p>
                        <p class="card-title" id="chuvaDepois"></p>
                    </div>
                </div>
                <div class="col text-center" style="background-color:rgb(255, 180, 68)">
                    <h3 id="nextDay"></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!--SERVICE END-->