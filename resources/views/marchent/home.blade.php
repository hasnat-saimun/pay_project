<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <!-- font owsam -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <!-- css page link -->
        <link rel="stylesheet" href="{{ asset('/public/assets/css/') }}/style.css" />
    </head>
    <body>
        <!-- nabver -->
        <nav class="navbar bg-body-tertiary fixed-top back-color ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 text-end mt-3">
                        <i class="fa-solid bg-rounded fa-user fa-lg " style="color: #ffffff;"></i>
                    </div>
                    <div class="col-10 text-white">
                        <div class="row">
                            <div class="co-12" >
                                <h5>Vit professional</h5>
                            </div>
                            <div class="co-12">
                                <p>01755048017</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mt-2 ">
                    <i class="fa-sharp fa-thin fa-bell fa-lg" style="color: #ffffff;"></i>
                    </div>
                    <div class="col-8">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        
                    </button>
                    </div>
                    
                </div>
                
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- nid card -->
        <div class="container fixed-margin1">
            <div class="card">
                <div class="card-header " style="background-color: #df9686;">
                    <div class="row">
                        <div class="col-9">
                            <p class="card-text">আপনার NID'র তথ্য দিয়ে রেজিস্ট্রেশন নিশ্চিত করুন</p>
                        </div>
                        <div class="col-3 text-end  ">
                            <button type="button" class="btn btn-color btn-sm text-white">তথ্য দিন</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- body -->
            <div class="row mt-2 text-center">
                <div class="col-6">
                    fjsfklf
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            ffsf
                        </div>
                        <div class="col-12">
                            sfsf
                        </div>
                        <div class="col-12">
                            sf
                        </div>
                        <div class="col-12">
                            sdd
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider -->
            <div class="row mt-4 text-center mx-auto mt-4">
                <!-- Carousel wrapper -->
                <div id="carouselMultiItemExample" data-bs-carousel-init class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner py-4">
                        <!-- Inner -->
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client1.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-4 ">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client2.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-4 ">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client3.webp" alt="avatar" style="width: 150px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client4.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-4 ">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client5.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-4 ">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client6.webp" alt="avatar" style="width: 150px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client7.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-4 ">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client8.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-4 ">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client9.webp" alt="avatar" style="width: 150px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Inner -->
                    <!-- Controls -->
                    <div class="d-flex justify-content-center mb-4">
                        <button data-bs-button-init class="carousel-control-prev position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button data-bs-button-init class="carousel-control-next position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon text-body" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- Carousel wrapper -->
            </div>
            <!-- card-part -->
             <div class="row text-center mt-3">
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-12 mt-3">
                                <i class="fa-solid fa-mobile-screen-button fa-2xl"></i>
                                </div>
                                <div class="col-12 text-uppercase fw-semibold mt-4 mb-4">
                                    মোবাইল রিচার্জ
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
             </div>
             <div class="row text-center mt-3">
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-12 mt-3">
                                <i class="fa-solid fa-mobile-screen-button fa-2xl"></i>
                                </div>
                                <div class="col-12 text-uppercase fw-semibold mt-4 mb-4">
                                    মোবাইল রিচার্জ
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
             </div>
             
             <div class="row text-center mt-3">
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-12 mt-3">
                                <i class="fa-solid fa-mobile-screen-button fa-2xl"></i>
                                </div>
                                <div class="col-12 text-uppercase fw-semibold mt-4 mb-4">
                                    মোবাইল রিচার্জ
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
             </div>
        </div>
        <!-- fotter -->
         <div class="card mt-4">
            <div class="card-footer ">
                <div class="row">
                    <div class="col-6 text-center">
                    <i class="fa-duotone fa-solid fa-house-user fa-xl" style="--fa-primary-color: #b9006c; --fa-secondary-color: #f09999;"></i>
                    <p class="card-text mt-1" style="color: #b9006c">হোম</p>
                    </div>
                    <div class="col-6 text-center">
                    <i class="fa-solid fa-user-gear" style="color: #b9006c"></i>
                    <p class="card-text mt-1" style="color: #b9006c">প্রোফাইল </p>
                    </div>
                </div>
            </div>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
