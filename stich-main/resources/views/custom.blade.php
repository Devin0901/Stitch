@extends('app')
@section('content')

    <body>

        <style>
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
                color: black;
            }

            .navbar-custom {
                background-color: #025464;
            }

            .body2 {
                background-color: FFFFFF;
            }

            body {
                background-color: FFFFFF;
            }

            footer {
                background-color: #025464;
                color: white;
            }

            .box2 {
                text-align: center;
            }

            .btn-choose {
                background-color: #FE8E50;
                border-radius: 10px;
                color: white;
                font-size: 40px;
                border: none;
            }

            .btn-choose2 {
                background-color: #0077C0;
                border-radius: 10px;
                color: white;
                font-size: 40px;
                border: none;
            }

            .container2 {
                margin-top: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>

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

                    <form class="mx-2"action="/about" method="GET">
                        <button class="btn" type="submit">About</button>
                    </form>

                    <form class="mx-2"action="/user_profile" method="GET">
                        <button class="btn" type="submit">Account</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="body2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 style="font-size:80px; margin-top: 50px">Customize!</h1>
                        <h1 style="font-size:80px; color: #005CB1">your clothes</h1>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container1">
                                    <div class="border1">
                                        <div class="img-container1">
                                            <img src="{{ asset('image/custom(1).png') }}">
                                            <h1 style="margin-top: 20px">Minimize</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container1">
                                    <div class="border1">
                                        <div class="img-container1">
                                            <img src="{{ asset('image/custom(2).png') }}">
                                            <h1 style="margin-top: 20px">Custom</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('image/CustomPeople.png') }}" class="img-fluid"
                            style="margin-left: 100px; margin-top: 20px; width:60%">
                    </div>
                </div>
            </div>

            <div class="container2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box2">
                            <button onclick="window.location.href = '{{ route('custom_cloth_page') }}'" class="btn-choose"
                                type="button" style="width:30vw">Choose Tailor Now!</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box2">
                            <button onclick="window.location.href = '{{ route('fix') }}'" class="btn-choose2"
                                type="button" style="width:30vw">Swith To Fix</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

    </html>
