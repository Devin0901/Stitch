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

            body {
                background-color: FFFFFF;
            }

            footer {
                background-color: #025464;
                color: white;
            }
            }
        </style>
        {{-- @auth
            @if (Auth::user()->isTailor == 0)
                <p>bukan tailor <b>{{ Auth::user()->username }}</b></p>
            @endif
            <p>Welcome <b>{{ Auth::user()->username }}</b></p>
            <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth --}}

        <br>
        <br>

        {{-- @guest --}}
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('image/landing1.png') }}" class="d-block img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('image/landing2.png') }}"class="d-block img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/landing3.png') }}"class="d-block img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <br>
        <br>

        <div class="body3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('image/landing_page2.png') }}" class=img-fluid"
                            style="width: 100%; max-width: 500px; height: 500px; margin-left: 30px; position: relative; top: -20px; z-index: 3">
                    </div>

                    <div class="col-md-6">
                        <h1 class="fixcloth" style="font-size: 6rem; color: black; margin-top: 50px;">FIX CLOTH</h1>
                        <br>
                        <h2 style="font-size: 1.5rem; margin-bottom: 20px;">Fix cloth atau memperbaiki baju adalah proses
                            untuk memperbaiki atau mengembalikan kondisi baju yang rusak seperti sobekan, lubang, atau
                            jahitan yang lepas.</h2>
                        <br>
                        @auth

                            <button class="btn btn-outline-success" onclick="window.location.href = '{{ route('fix') }}'"
                                type="button"
                                style="background-color: #025464; color: white; width: 100%; max-width: 300px; height: 80px; border-radius: 20px; font-size: 1.5rem;">Check
                                now</button>
                        @endauth
                        @guest
                            <button class="btn btn-outline-success" onclick="window.location.href = '{{ route('login') }}'"
                                type="button"
                                style="background-color: #025464; color: white; width: 100%; max-width: 300px; height: 80px; border-radius: 20px; font-size: 1.5rem;">Check
                                now</button>
                        @endguest
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>

        <div class="body4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="customcloth" style="font-size: 4rem; color: black; margin-top: 50px;">CUSTOM CLOTH</h1>
                        <br>
                        <h2 style="font-size: 1.5rem; margin-bottom: 20px;">Custom cloth atau membuat pakaian adalah suatu
                            proses untuk menciptakan pakaian yang unik sesuai dengan keinginan dan spesifikasi pelanggan.
                        </h2>
                        <br>
                        @auth

                            <button class="btn btn-outline-success" onclick="window.location.href = '{{ route('custom') }}'"
                                type="button"
                                style="background-color: #025464; color: white; width: 100%; max-width: 300px; height: 80px; border-radius: 20px; font-size: 1.5rem;">Check
                                now</button>
                        @endauth
                        @guest
                            <button class="btn btn-outline-success" onclick="window.location.href = '{{ route('login') }}'"
                                type="button"
                                style="background-color: #025464; color: white; width: 100%; max-width: 300px; height: 80px; border-radius: 20px; font-size: 1.5rem;">Check
                                now</button>
                        @endguest
                    </div>

                    <div class="col-md-6">
                        <img src="{{ asset('image/landing_page3.jpg') }}" class=img-fluid"
                            style="width: 100%; max-width: 500px; height: auto; margin-left: 30px;">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

    </body>

    {{-- @endguest --}}
@endsection
