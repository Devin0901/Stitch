@extends('app')
@section('content')
    @auth

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
            <br>
            <br>


            <div class="container"
                style="width: 95%; background-color: white; border-radius: 0px 0px 20px 20px; outline: 1px solid #A09898; display: flex; flex-direction: column;">
                <div class="row no-gutters">
                    <div class="col-md" style="position: relative; margin-top: 35px">
                        <div class="mb-3">
                            <label style="color:#A09898">Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="username" value="{{ Auth::user()->username }}" />
                        </div>
                        <div class="mb-3">
                            <label style="color:#A09898">Email<span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" />
                        </div>
                        <div class="mb-3">
                            <label style="color:#A09898">First Name<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="first_name"
                                value="{{ Auth::user()->firstname }}" />
                        </div>
                        <div class="mb-3">
                            <label style="color:#A09898">Last Name<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="last_name" value="{{ Auth::user()->lastname }}" />
                        </div>
                        <div class="mb-3">
                            <label style="color:#A09898">Home<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="home"
                                value="{{ Auth::user()->address->home }}" />
                        </div>
                        <div class="mb-3">
                            <label style="color:#A09898">Postal Code<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="postal_code"
                                value="{{ Auth::user()->address->postal_code }}" />
                        </div>
                        <div class="mb-3">
                            <label style="color:#A09898">City<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="city"
                                value="{{ Auth::user()->address->city }}" />
                        </div>
                        <div class="mb-3">
                            <label style="color:#A09898">Country<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="country"
                                value="{{ Auth::user()->address->country }}" />
                        </div>
                    </div>
                    <div class="col-md" style="position: relative; margin-left: 50px">

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            @if (Auth::user()->gender == 'male')
                                <img src="{{ asset('image/People-male.png') }}"
                                    style="border-radius: 50%; background-color: white; width: 11vw; height: 15vw; margin: 10px; position: relative;" />
                            @endif
                            @if (Auth::user()->gender == 'female')
                                <img src="{{ asset('image/People-female.png') }}"
                                    style="border-radius: 50%; background-color: white; width: 11vw; height: 15vw; margin: 10px; position: relative;" />
                            @endif
                            <button class="btn btn-primary" type="submit"
                                style="margin-top: 20px; background-color: #FF9B53; border-color: none">Save Changes</button>
                        </div>

                    </div>


                </div>
            </div>



        </div>

        <br>
        <br>
    @endauth
@endsection
