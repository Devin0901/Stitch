<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TailorDeal</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .btn:hover {
            background-color: white;
            border: none;
            color: black;
        }

        .btn {
            background-color: none;
            border: none;
            color: white;
        }

        .navbar-custom {
            /* background-color: #C7EEFF; */
            background-color: #025464;
        }


        .container {
            width: 90%;
            max-width: 1000px;
            height: 800px;
            background-color: #FFFFFF;
            border-radius: 4%;
            outline: 1px solid #000000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            position: relative;
            margin: 0 auto;
            margin-top: 100px;
            margin-bottom: 20px;
            padding-left: 30px;
        }

        .green-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            border-top-left-radius: 5vh;
            border-top-right-radius: 5vh;
            background-color: #025464;
        }

        .price-label,
        .items-label {
            margin-right: 10px;
            text-align: left;
            font-size: 20px;
            margin-bottom: 10px;
            text-align: left;
        }

        .price-input {
            width: 100%;
            max-width: 95%;
            height: 40px;
            margin-bottom: 20px;
            padding: 5px;
            border-radius: 5px;
            background-color: whitesmoke;
            border: 1px solid #A09898;
        }

        .items-textarea {
            width: 100%;
            max-width: 95%;
            height: 400px;
            margin-bottom: 20px;
            padding: 5px;
            border-radius: 5px;
            background-color: whitesmoke;
            border: 1px solid #A09898;
        }

        .button {
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            color: #FFFFFF;
            font-weight: bold;
            text-decoration: none;
            width: 150px;
            text-align: center;
            background-color: #FF9B53;
            border: 1px solid #A09898;
            margin: 0 auto;
        }

        @media screen and (max-width: 600px) {
            .container {
                width: calc(100% - 20px);
                margin: 10px;
                padding: 10px;
            }

            .container h2 {
                text-align: center;
            }

            .price-input,
            .items-textarea {
                max-width: 300px;
            }

            .button {
                flex-basis: 80px;
            }
        }
    </style>
</head>



<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
        <img src="{{ asset('image/Logo.png') }}" style="width : 80px; height : 70px">
        <a class="navbar-brand" style="color: white">STITCH</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>

        <div class="d-flex">
            <form class="mx-2">
                <button class="btn" type="submit">Home</button>
            </form>

            <form class="mx-2">
                <button class="btn" type="submit">About</button>
            </form>

            <form class="mx-2">
                <button class="btn" type="submit">Account</button>
            </form>
        </div>
    </div>
</nav>
<form method="POST" action="{{ route('deal.action') }}">
    @csrf

    <body>
        <h1 style="top: 10px; left: 10px; margin-left: 30px;">Deal Price</h1>
        <div class="container">
            <div class="green-top"></div>
            <label class="price-label" for="price">Price</label>
            <input class="price-input" type="text" id="price" name="price" required>
            <label class="items-label" for="items">Items</label>
            <textarea class="items-textarea" id="items" name="items" required></textarea>
        </div>
    </body>
    <button type="submit">Make a Deal</button>
</form>



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
