</main>
<!--FOOTER-->
<footer>
  <div class="container-fluid pb-0 mb-0 mt-5 justify-content-center text-light" style="background-color: rgb(255, 180, 68)">
    <div class="row justify-content-center">
      <div class="col-11">
        <div class="row py-5">
          <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
            <a href="index.php?p=home">
              <h3 class="mb-md-0 mb-5 bold-text">the monkey weather</h3>
            </a>
            <div class="container mt-5">
              <i class="fab fa-facebook" id="facebook"></i> <i class="fab fa-instagram" id="instagram"></i><i class="fab fa-twitter" id="twitter"></i>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
            <h6 class="mb-3 mb-lg-4 bold-text mt-sm-0 mt-5"><b>menu</b></h6>
            <ul class="list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="about.html#parallax2">Source</a></li>
              <li data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-4 col-12">
            <h6 class="mb-3 mb-lg-4 bold-text mt-sm-0 mt-5"><b>creator</b></h6>
            <p class="mb-1">Guilherme R Gonçalves</p>
            <p><a href="mailto:talks@ggoncalves.com">talks@ggoncalves.com</a></p>
          </div>
        </div>
        <div class="row ">
          <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-1 order-sm-1 order-3 align-self-end">
            <small class="rights"><span>&#174;</span> THE MONKEY WEATHER - ALL RIGHTS RESERVED.</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: rgb(255, 180, 68);">
          <h5 class="modal-title" id="staticBackdropLabel" style="color: white">Contact Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="py-4 px-5">
            <div class="mb-3">
              <label for="form-name" class="form-label">Name</label>
              <input type="text" class="form-control" id="form-name" placeholder="Who is you?" required>
            </div>
            <div class="mb-3">
              <label for="form-email" class="form-label">Email address</label>
              <input type="email" class="form-control" required id="form-email" placeholder="Insert an e-mail">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="form-subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="form-subject" placeholder="What's up?">
            </div>
            <div class="mb-3">
              <label for="text-area">Message</label>
              <textarea class="form-control" id="text-area" rows="3" placeholder="Your Message" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Clear</button>
          <button type="submit" class="btn" style="background-color: rgb(255, 180, 68); color: white;">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--FOOTER END-->
</footer>

<!--MAIN JS-->
<script src="js/main.js"></script>
<!--BOOTSTRAP LOCAL FILE-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>