<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font owsam -->
    <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/public/assets/css/') }}/style.css">
  </head>
  <body>
    <div class="hero">
    <div class="row form-box">
                    <div class="col-12 text-center">
                      <div class="">
                          <div id="btn"></div>
                          <img src="{{ asset('/public/assets/img') }}/logo.png" alt="" class="w-50" />
                      </div>
                    </div>
                    <div class="col-12 card card-body bg-transparent rounded-0 border-0">
                      <form>
                        <div class="mb-3 ">
                          <label for="exampleInputEmail1" class="form-label ">Pin Number</label>
                          <input type="email" class="form-control input-field " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your pin " required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control input-field" id="exampleInputPassword1" placeholder="enter your password" required>
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                          <label class="form-check-label span" for="exampleCheck1">Remember Password</label>
                        </div>
                        <button type="submit" class="submit-btn">Log in</button>
                      </form>
                    </div>
                  </div>
            </div> 
    </div>
                  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>