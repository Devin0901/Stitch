@extends('app')
@section('content')
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

    <body>
        {{-- @guest --}}

        {{-- @endguest --}}
        {{-- <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container-fluid"> --}}
        @guest

            <button class="btn btn-outline-success" onclick="window.location.href = '{{ route('login') }}'" type="button"
                style="background-color: #025464; color: white; width: 100%; max-width: 300px; height: 80px; border-radius: 20px; font-size: 1.5rem;">LOGIN
                now</button>
        @endguest
        @auth

            <div class="body2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 style="font-size:80px; margin-top: 50px">Fix!</h1>
                            <h1 style="font-size: 80px; color: #005CB1">your clothes</h1>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="container1">
                                        <div class="border1">
                                            <div class="img-container1">
                                                <img src="{{ asset('image/fix(1).png') }}">
                                                <h1 style="margin-top: 20px">Torn</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="container1">
                                        <div class="border1">
                                            <div class="img-container1">
                                                <img src="{{ asset('image/fix(2).png') }}">
                                                <h1 style="margin-top: 20px">Hole</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="container1">
                                        <div class="border1">
                                            <div class="img-container1">
                                                <img src="{{ asset('image/fix(3).png') }}">
                                                <h1 style="margin-top: 20px">Loose Stitch</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('image/FixPeople.png') }}" class="img-fluid"
                                style="margin-left: 150px; margin-top: 20px; width: 60%">
                        </div>
                    </div>
                </div>

                <div class="container2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box2">

                                <button onclick="window.location.href = '{{ route('fix_cloth_page') }}'" class="btn-choose"
                                    type="button" style="width:30vw">Choose Tailor Now!</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box2">
                                <button onclick="window.location.href = '{{ route('custom') }}'" class="btn-choose2"
                                    type="button" style="width:30vw">Swith To Custom</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </body>
    @endauth
@endsection
