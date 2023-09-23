@extends('app')
@section('content')
    <style>
        body {
            background-color: white;
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

        /*
                                                                        .container {
                                                                            width: 95%;
                                                                            height: 20%;
                                                                            background-color: white;
                                                                            border-radius: 20px;
                                                                            outline: 1px solid #A09898;
                                                                            display: flex;
                                                                            flex-direction: column;
                                                                            margin-bottom: 30px;
                                                                        } */

        .editbtn:hover {
            background-color: white;
            border-style: solid;
            border-color: black;
            color: white;
        }

        .registerbtn {
            background-color: #2B3145;
            color: white;
            width: 65%;
            border-radius: 5px;
        }
    </style>
    <div class="body">
        <div class="containerx">
            <div class="row no-gutters">
                <div class="col-md-9" style="font-size: 2vw; margin: 20px 0px 20px 100px">My Profile</div>
                <div class="col-md" style="position: relative; margin-top: 30px">
                    {{-- "{{ route('tailor') }}" --}}
                    @if (Auth::user()->isTailor == false)
                        <button onclick="window.location.href = '{{ route('tailor') }}'" class="registerbtn">Register as
                            Tailor</button>
                    @endif

                    <!-- <button onclick="window.location.href = '{{ route('fix_cloth_page') }}'" class="btn-choose"
                                                                                                    type="button" style="width:30vw">Choose Tailor Now!</button> -->
                </div>
            </div>
        </div>

        <div class="container"
            style="width: 95%; height: 20%; background-color: white;border-radius: 20px 20px 0px 0px; outline: 1px solid #A09898; display: flex; flex-direction:column; background-color: #025464">
            <div class="row no-gutters">
                <div class="col-md" style="position: relative">
                    <img src="{{ asset('image/profilepic.png') }} "
                        style="border-radius: 50%; background-color : white; width : 10vw; height : 10vw; margin: 10px; position: relative">
                </div>

                <div class="col-md-6" style="position: relative; margin-left: 50px">
                    <div style="font-size: 2vw; margin-top: 20px; color: white">Description</div>
                    <div style="font-size: 1vw; color: white">adsaisdhasgdayudvauda</div>
                </div>

                <div class="col-md" style="position: relative">
                    <button onclick="window.location.href = '{{ route('user_profile_edit') }}'"
                        style="margin: 70px 0px 50px 170px; width: 6vw; border-style: none; border-radius: 5px; background-color: #D9D9D9; font-size: 1vw"
                        class="editbtn">Edit<img src="{{ asset('image/editlogo.png') }}" style="margin-left: 5px"></button>
                </div>
            </div>
        </div>

        <div class="container"
            style="width: 95%; background-color: white; border-radius: 0px 0px 20px 20px; outline: 1px solid #A09898; display: flex; flex-direction:column;">
            <div class="row no-gutters">
                <div class="col-md" style="position: relative; margin-bottom: 20px">
                    <div style="font-size: 4vh">Personal Information</div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md" style="position: relative; margin-top: 35px">
                    <div style="font-size: 3vh">First Name</div>
                    <div style="margin-bottom: 20px; color: #858282; font-size: 3vh">{{ $user->username }}</div>
                    <div style="font-size: 3vh">Email Address</div>
                    <div style="margin-bottom: 20px; color: #858282; font-size: 3vh">{{ $user->email }}</div>
                </div>

                <div class="col-md" style="position: relative; margin-left: 50px;  margin-top: 35px">
                    <div style="font-size: 3vh">Last Name</div>
                    <div style="color: #858282; font-size: 3vh">{{ $user->username }}</div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md" style="position: relative; margin-top: 20px">
                    <div style="font-size: 4vh">Address</div>
                </div>

            </div>

            <div class="row no-gutters" style="margin-top: 35px">
                <div class="col-md" style="position: relative">
                    <div style="font-size: 3vh">Country</div>

                    <div style="margin-bottom: 20px; color: #858282; font-size: 3vh">{{ $user->address->country }}</div>
                    <div style="font-size: 3vh">Postal Code</div>
                    <div style="margin-bottom: 20px; color: #858282; font-size: 3vh">{{ $user->address->postal_code }}
                    </div>
                </div>

                <div class="col-md" style="position: relative; margin-left: 50px">
                    <div style="font-size: 3vh">City</div>
                    <div style="color: #858282; margin-bottom: 10px; font-size: 3vh">{{ $user->address->city }}</div>
                    <div style="font-size: 3vh">Home</div>
                    <div style="color: #858282; margin-bottom: 10px; font-size: 3vh">{{ $user->address->home }}</div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
@endsection
