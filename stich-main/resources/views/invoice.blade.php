<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Deal</title>

    </head>

    <style>
        .btn:hover{
        background-color: white;
        border: none;
        color: black;
        }
        .btn{
            background-color: none;
            border: none;
            color: white;
        }
        .navbar-custom{
            /* background-color: #C7EEFF; */
            background-color: #025464;
        }
        .containers{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .image {
            margin-bottom: 0;
        }
    </style>

    <nav class = "navbar navbar-expand-lg navbar-light navbar-custom">
        <div class = "container-fluid">
            <img src = "{{ asset ('image/Logo.png') }}" style = "width : 80px; height : 70px">
            <a class = "navbar-brand" style="color: white">STITCH</a>
            <ul class = "navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            
                <div class = "d-flex">
                    <form class = "mx-2">
                        <button class = "btn" type = "submit">Home</button>
                    </form>
                    
                    <form class = "mx-2">
                        <button class = "btn" type = "submit">About</button>
                    </form>

                    <form class = "mx-2">
                        <button class = "btn" type = "submit">Account</button>
                    </form>
                </div>
        </div>
    </nav>

    <body>
        <div class = "containers">
            <div class="container">
                <div class="image">
                    <img src="invoiceexample.png" alt="Image">
                </div>
            </div>
        </div>
    </body>

    <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('image/Logo.png') }}" style="width: 80px; height: 70px; margin-top: -10px">
        <a style="font-size: 30px; margin-left: 20px">Stitch</a>
        <br><br>
        <h1 style="font-size: 18px">Download the app by clicking the link below:</h1>
        <div class="row" style="flex-direction: row">
          <div class="col-md-5">
            <img src="{{ asset('image/landing_page4.png') }}" style="width: 150px; height: 50px;">
          </div>
          <div class="col-md-5">
            <img src="{{ asset('image/landing_page5.png') }}" style="width: 150px; height: 50px">
          </div>
        </div>
      </div>
      <div class="col-md-3" style="margin-top: 10px">
        <h1 style="font-size: 20px">Pages</h1>
        <br>
        <h2 style="font-size: 15px">Home</h2>
        <h2 style="font-size: 15px">Fix Cloth</h2>
        <h2 style="font-size: 15px">Custom Cloth</h2>
      </div>
      <div class="col-md-3" style="margin-top: 10px">
        <h1 style="font-size: 20px;">Contact</h1>
        <br>
        <img src="{{ asset('image/call.png') }}">
        <a style="font-size: 15px">(021) - 552 - 1923</a>
        <br><br>
        <img src="{{ asset('image/mail.png') }}">
        <a style="font-size: 15px">stitch.reborn@gmail.com</a>
      </div>
      <div class="col-md-2" style="margin-top: 10px">
        <h1 style="font-size: 20px">Social media</h1>
        <div class="row" style="flex-direction: row">
          <div class="col-md-3">
            <img src="{{ asset('image/FB.png') }}">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('image/Twiter.png') }}">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('image/Linked_in.png') }}">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('image/Instagram.png') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</footer>
</html>
