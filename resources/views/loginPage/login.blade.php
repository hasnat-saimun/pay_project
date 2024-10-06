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
                <div class="form-box">
                    <div class="button-box">
                        <div id="btn"></div>
                        <img src="{{ asset('/public/assets/img') }}/logo.png" alt="" class="w-50" />
                    </div>
                    <div>
                        <form action="" class="input-group">
                        <input type="text" class="input-field" placeholder="User id" required>
                        <input type="text" class="input-field" placeholder="Enter the password" required>
                        <input type="checkbox" class="chech-box"><span>Remember Passowrd</span>
                        <button type="submit" class="submit-btn">Log in</button>
                        <button type="submit" class="submit-btn">Log in</button>
                        </form>
                    </div>
                </div>
            </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>