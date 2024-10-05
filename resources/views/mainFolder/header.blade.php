<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Project Demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <!-- font owsam -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <style>
            .p-icon{
                padding: 4.5rem 2rem !important;
            }
            .fa-5xl{
                font-size: 5em;
                line-height: .03125em;
                vertical-align: -.1875em;
            }
            @media only screen and (min-width: 767px) {
                .fixed-margin{
                    margin-top:5rem !important;
                }
            }
            a{
                text-decoration:none;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow mb-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-2 mx-auto">
                        <a class="navbar-brand" href="#"><img src="{{ asset('/public/assets/') }}/logo.png" alt="" class="w-75"></a>
                    </div>
                    <div class="col-12 col-md-10 mx-auto">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto text-uppercase fw-bold">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Our Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Marchent Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contract Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Report Issue</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container text-center mt-5 fixed-margin">
            <div class="row pt-5">
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-brands fa-servicestack fa-5xl bg-info bg-primary text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                Service
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-light fa-hospital fa-5xl bg-success bg-primary text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                Hospital
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-light fa-car-side fa-5xl bg-info bg-warning text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                taxi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-sharp fa-solid fa-droplet-degree fa-5xl bg-info bg-primary text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                water
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-brands fa-servicestack fa-5xl bg-info bg-primary text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                Service
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-light fa-hospital fa-5xl bg-success bg-primary text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                Hospital
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-light fa-car-side fa-5xl bg-info bg-warning text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                taxi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <div class="card text-bg-light">
                        <div class="row p-4">
                            <div class="col-md-12">
                                <i class="fa-sharp fa-solid fa-droplet-degree fa-5xl bg-info bg-primary text-white p-icon rounded-circle" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-12 text-uppercase fw-semibold">
                                water
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 text-center mx-auto mt-4">
                <div class="col-12 my-2">
                    <h2 class="fw-bold">What our client say</h2>
                </div>
                <div class="col-12 col-md-6 mx-auto">
                    <p>A basic example of a responsive testimonial carousel with a single review per slide. Each review contains the customers profile picture, a stylized review quotation and a star rating.</p>
                </div>
                <!-- Carousel wrapper -->
<div id="carouselMultiItemExample" data-bs-carousel-init class="carousel slide carousel-dark" data-bs-ride="carousel">
  <div class="carousel-inner py-4">
  <!-- Inner -->
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client1.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Anna Ayat</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client2.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Abul Hasnat Saimun</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client3.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client4.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client5.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Alex Rey</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client6.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client7.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Anna Deynah</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client8.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ asset('/public/assets/client/') }}/client9.webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button data-bs-button-init class="carousel-control-prev position-relative" type="button"
      data-bs-target="#carouselMultiItemExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button data-bs-button-init class="carousel-control-next position-relative" type="button"
      data-bs-target="#carouselMultiItemExample" data-bs-slide="next">
      <span class="carousel-control-next-icon text-body" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Carousel wrapper -->
</div>
</div>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="mt-5">

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #6351ce"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Seba Automation(PVT.) Ltd.</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Get Started</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-white">Our Services</a>
            </p>
            <p>
              <a href="#!" class="text-white">Contact Sales Team</a>
            </p>
            <p>
              <a href="#!" class="text-white">Live Chat</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Marchent Login</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © {{ date('Y') }} Copyright
      <a class="text-white" href="https://mdbootstrap.com/"
         >Seba Automation(PVT.) Ltd | All rights reserved</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>
<!-- End of .container -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
