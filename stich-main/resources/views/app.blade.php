<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- <title>@yield('title', $title)</title> --}}
</head>

<style>
    body {
        overflow-x: hidden;
    }

    .btn-outline-success:hover {
        background-color: #C7EEFF;
        color: black;
        border-color: black;
    }

    .btn-outline-success {
        background-color: #F8F1F1;
    }

    .btn {
        border-color: black;
        color: white;
    }

    .navbar-custom {
        background-color: #025464;
    }

    .navbar-custom .btn {
        color: white;
        border: none;
    }

    .col-md-3 a {
        color: white;
        text-decoration: none;
    }

    footer {
        background-color: #025464;
        color: white;
        bottom: 0;
    }
</style>

<body>
    @yield('style')
    <div class>
        {{-- <!-- <h1>@yield('title', $title)</h1> --> --}}
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container-fluid">
                <img src="{{ asset('image/Logo.png') }}" style="width : 80px; height : 70px">
                <a class="navbar-brand" style="color: white">STITCH</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>

                <div class="d-flex">
                    <form class="mx-2" action="/" method="GET">
                        <button class="btn" type="submit">Home</button>
                    </form>

                    <button onclick="window.location.href = '{{ route('history') }}'" class="btn"
                        type="submit">History</button>

                    <form class="mx-2"action="/user_profile" method="GET">
                        <button class="btn" type="submit">Account</button>
                    </form>
                </div>
            </div>
        </nav>
        @yield('content')
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
                        <a href="{{ url('/') }}">
                            <h2 href='home' style="font-size: 15px">Home</h2>
                        </a>
                        <a href="{{ url('/fix') }}">
                            <h2 href='home' style="font-size: 15px">Fix</h2>
                        </a>
                        <a href="{{ url('/custom') }}">
                            <h2 href='home' style="font-size: 15px">Custom</h2>
                        </a>
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
        {{-- @yield('footer') --}}

    </div>
</body>

</html>
