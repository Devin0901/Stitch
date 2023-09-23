@extends('app')
@section('content')

    <body>

        <style>
            .Consule {
                width: 10.5vw;
                height: 35px;
                margin-top: 15vw;
                margin-left: 1.3vw;
                display: flex;
                position: absolute;
                background-color: #3C486B;
                color: white;
                border-radius: 8px;
                align-items: center;
                justify-content: center;
                font-size: 1.5vw;
            }

            .Consule:hover {
                background-color: #676572;
                color: white;
            }

            .ktkPutih {
                width: 37vw;
                height: 21vw;
                background: #FFFFFF;
                position: absolute;
                display: flex;
                margin-top: 17px;
                border: solid 2px;
                border-radius: 10px;
            }

            .ktkBiru {
                width: 37vw;
                height: 21vw;
                background: #025464;
                margin-left: 75px;
                margin-top: 20px;
                margin-bottom: 20px;
                display: flex;
                border: solid 0px 1px 1px 0px;
                border-radius: 10px;
            }

            .Foto {
                width: 15vw;
                height: 15vw;
                margin-top: 2vw;
                margin-left: 16vw;
                display: flex;
            }

            @media screen and (max-width: 500px) {
                .Consule {
                    height: 22px;
                }

                .Foto {
                    margin-left: 13vw;
                }
            }

            .no-gutters {
                margin-right: 0;
                margin-left: 0;

                >.col,
                >[class*="col-"] {
                    padding-right: 0;
                    padding-left: 0;
                }
            }

            .body2 {
                background-color: #0077C0;
            }

            .Name {
                font-size: 2.5vw;
                margin-top: 1.7vw;
                margin-left: 20px;
                color: black;
                position: absolute;
                cursive;
            }

            .Rating {
                font-size: 1.7vw;
                margin-top: 5.5vw;
                margin-left: 40px;
                color: black;
                position: absolute;
                cursive;
            }

            .Place {
                font-size: 1.7vw;
                margin-top: 8.3vw;
                margin-left: 20px;
                color: black;
                position: absolute;
                cursive;
            }

            .Price {
                font-size: 1.7vw;
                margin-top: 9.8vw;
                margin-left: 20px;
                color: #777777;
                position: absolute;
                cursive;
            }

            .Star {
                width: 1.3vw;
                height: 1.3vw;
                margin-top: 5.8vw;
                margin-left: 20px;
                display: flex;
            }

            body {}

            footer {
                background-color: #025464;
            }
        </style>


        <div class="row no-gutters justify-content-md-center">
            @foreach ($tailors as $tailor)
                <div class="col-md-6">
                    <div class="ktkBiru">
                        <div class="ktkPutih col-sm">
                            <h1 class="Name">
                                {{ $tailor->user->username }}
                            </h1>
                            <img src="{{ asset('Image/Bintang.png') }}" class="Star">
                            <h1 class="Rating">
                                {{ $tailor->rating }}
                            </h1>
                            <h1 class="Place">
                                {{ $tailor->user->address->country }}
                            </h1>
                            @if ($tailor->user->gender == 'Male')
                                <img src="{{ asset('Image/FotoOrang.png') }}" class="Foto"
                                    style="width: 130px; height: 170px; left: 100px; top: 231px; margin-top:27px; margin-left:225px; display:flex;">
                            @endif
                            @if ($tailor->user->gender == 'Female')
                                <img src="{{ asset('Image/FotoOrang.png') }}" class="Foto"
                                    style="width: 130px; height: 170px; left: 100px; top: 231px; margin-top:27px; margin-left:225px; display:flex;">
                            @endif
                            <h1 class="Price">Price start from:
                                <br>
                                {{ $tailor->starting_price }}
                            </h1>
                            <button
                                onclick="window.location.href = '{{ route('view_tailor', ['id' => $tailor->user->user_id]) }}'"
                                class="Consule" ; type="submit" ; font-size=15px;>Console now </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>

    </body>
@endsection
