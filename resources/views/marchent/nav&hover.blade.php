<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
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
                    @yield('chevron')
                </div>
                <div class="col-7">
                    @yield('navText')
                </div>
                <div class="col-4 text-end">
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
                        <i class="fa-light fa-clipboard-list fa-lg mx-1 icon-color"></i>
                            @yield('fotterText')
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    <!-- fotter -->
    <div class="card border-0 fixed-bottom ">
            <div class="card-footer ">
                <div class="row mt-2">
                    
                    <div class="col-4 text-center ">
                    <a class="icon-color"href="{{route('profilePage')}}">
                        <i class="fa-solid fa-user-gear  fa-xl" ></i>
                        <p class="card-text mt-1 " >প্রোফাইল </p>
                    </a>
                    </div>
                    <div class="col-4 text-center">
                    <a class="icon-color"href="{{route('viewHome')}}">
                        <i class="fa-duotone fa-solid fa-xl fa-house-user " style="--fa-primary-color: #131fbb; --fa-secondary-color: #f09999;"></i>
                        <p class="card-text mt-1 icon-color" >হোম</p>
                    </a>
                    </div>
                    <div class="col-4 text-center icon-color">
                    <a class="icon-color"href="{{route('viewHome')}}">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-xl fa-flip-horizontal"></i>
                        <p class="card-text mt-1" >লগ আউট</p>
                    </a>
                    </div>
                </div>
            </div>
         </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>