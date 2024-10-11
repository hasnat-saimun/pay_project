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
        <nav class="fixed-top back-color p-2 px-4">
            <div class="row align-items-center text-white">
                <div class="col-1 text-end">
                    <i class="fa-solid bg-rounded fa-user fa-lg"></i>
                </div>
                <div class="col-6">
                    <h5 class="text-uppercase mb-0">Vit Professional</h5>
                    <p class="mb-0">01755048017</p>
                </div>
                <div class="col-5 text-end">
                    <i class="fa-sharp fa-thin fa-bell fa-lg mx-2"></i>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <i class="fa-sharp fa-solid fa-list-ul fa-xl"></i>              
                    </button>
                </div>
            </div>
        </nav>
                    
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <div class="col-12 text-center p-5 border-bottom ">
                    <img src="{{ asset('/public/assets/img') }}/logo.png" alt="logo" style="width: 6rem;" />
                </div>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">    
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-light fa-building-columns fa-lg mx-1 icon-color"></i>
                            <span> ব্যাংক তথ্য দিন</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-light fa-money-from-bracket fa-lg mx-1 icon-color"></i>
                            <span> টাকা উত্তোলন করুন</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-light fa-boxes-stacked fa-lg mx-1 icon-color"></i>
                            <span> বর্তমান প্যাকেজ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-light fa-clipboard-list fa-lg mx-1 icon-color"></i>
                            <span>  রিপোর্ট</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-light fa-user-unlock fa-lg mx-1 icon-color "></i>
                         প্রাইভেসি পলিসি
                        </a>
                        <ul class="dropdown-menu border-0">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-light fa-phone-volume icon-color"></i>
                                    হটলাইন
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">
                            <i class="fa-light fa-memo icon-color"></i> নিয়ম ও শর্তাবলী</a></li>
                            
                            <li><a class="dropdown-item" href="#"><i class="fa-light fa-memo-pad icon-color"></i> প্রাইভেসি পলিসি</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-light fa-gear icon-color fa-lg mx-1"></i>
                        সেটিং
                        </a>
                        <ul class="dropdown-menu border-0">
                        <li><a class="dropdown-item" href="#"><i class="fa-light fa-arrows-repeat icon-color"></i> ভাষা পরিবর্তন </a></li>
                        <li><a class="dropdown-item" href="#"> <i class="fa-light fa-lock-keyhole icon-color"></i> পিন পরিবর্তন </a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-light fa-user-slash icon-color"></i> অ্যাকাউন্ট স্থগিত করুন</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- nid card -->
        <div class="container fixed-margin1">
            <div class="card">
                <div class="card-header " style="background-color: #df9686;">
                    <div class="row align-items-center">
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
            <div class="row mt-2 text-center align-items-center">
                <div class="col-6">
                    <div class="circle-body">
                        <div class="balance-body">
                            <p class="mb-0">৳ 0</p>
                            <p class="mb-0">ব্যালেন্স</p>
                        </div>
                    </div>
                    <p class="balance-color ">ব্যালেন্স সংযুক্ত <i class="fa-solid fa-chevron-right "></i></p>
                </div>
                <div class="col-6">
                    <div class="row my-3">
                        <div class="col-4">
                            <i class="fa-light fa-mobile fa-xl icon-color"></i>
                            Recharge
                        </div>
                        <div class="col-8 icon-color">
                            <div class="border-bottom mt-2 icon-color">
                                <div class="row">
                                    <div class="col-9">
                                        <span>0</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="text-end"> <i class="fa-regular fa-chevron-right icon-color"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end icons -->
                    <div class="row my-3">
                        <div class="col-4">
                            <i class="fa-light fa-mobile fa-xl icon-color "></i>
                            Recharge
                        </div>
                        <div class="col-8 icon-color">
                            <div class="border-bottom mt-2">
                                <div class="row">
                                    <div class="col-9">
                                        <span>0</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="text-end"> <i class="fa-regular fa-chevron-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end icons -->
                    <div class="row my-3">
                        <div class="col-4">
                            <i class="fa-light fa-mobile fa-xl icon-color"></i>
                            Recharge
                        </div>
                        <div class="col-8 icon-color">
                            <div class="border-bottom mt-2">
                                <div class="row">
                                    <div class="col-9">
                                        <span>0</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="text-end"> <i class="fa-regular fa-chevron-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end icons -->
                </div>
            </div>
            <!-- slider -->
            <div class="row mt-4 text-center mx-auto mt-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{ asset('public/assets/slider/') }}/onlineButton.png" class="d-block w-100" alt="payOnline">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('public/assets/slider/') }}/payplusApps.jpg" class="d-block w-100" alt="payplusApps">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('public/assets/slider/') }}/payplusShop.jpeg" class="d-block w-100" alt="payplusShop">
                        </div>
                    </div>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
            <!-- card-part -->
             <div class="row text-center mt-3">
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-solid fa-mobile-screen-button fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> মোবাইল রিচার্জ</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-solid fa-mobile-screen-button fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> মোবাইল রিচার্জ</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-solid fa-mobile-screen-button fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> মোবাইল রিচার্জ</p> 
                        </div>
                    </a>
                </div>
             </div>
            <!-- card-part -->
             <div class="row text-center mt-3">
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-solid fa-mobile-screen-button fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> মোবাইল রিচার্জ</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-solid fa-mobile-screen-button fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> মোবাইল রিচার্জ</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-solid fa-mobile-screen-button fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> মোবাইল রিচার্জ</p> 
                        </div>
                    </a>
                </div>
             </div>
        </div>
        <!-- fotter -->
         <div class="card border-0 fixed-bottom">
            <div class="card-footer ">
                <div class="row">
                    <div class="col-4 text-center icon-color">
                    <i class="fa-solid fa-user-gear " ></i>
                    <p class="card-text mt-1" >প্রোফাইল </p>
                    </div>
                    <div class="col-4 text-center ">
                    <i class="fa-duotone fa-solid fa-house-user fa-xl" style="--fa-primary-color: #131fbb; --fa-secondary-color: #f09999;"></i>
                    <p class="card-text mt-1 icon-color" >হোম</p>
                    </div>
                    <div class="col-4 text-center icon-color">
                    <i class="fa-solid fa-arrow-right-from-bracket fa-flip-horizontal"></i>
                    <p class="card-text mt-1" >লগ আউট</p>
                    </div>
                </div>
            </div>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
