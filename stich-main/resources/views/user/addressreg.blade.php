@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="container"
                style="background-color: #025464; display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100%">
                <img src="{{ asset('image/login1.png') }}" class="img-fluid" style="height: 50vh; max-width: 100%;">
                <br>
                <br>
                <br>
                <img src="{{ asset('image/login2.png') }}" class="img-fluid" style="height: 50vh; max-width: 100%;">
            </div>
        </div>
        <div class="col-md-6">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('address.action') }}" method="POST">
                @csrf
                <div style="display: flex; justify-content: center;">
                    <h1 style="font-size: 64px; font-weight: bold">STITCH</h1>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div style="display: flex; justify-content: center;">
                    <h1 style="font-size: 32px;">HELLO, WELCOME</h1>
                </div>
                <br>
                <br>
                <div class="mb-3">
                    <label style="color:#A09898">City <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="city" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Country <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="country" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Home <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="home" />
                </div>

                <div class="mb-3">
                    <label style="color:#A09898">postal_code <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="postal_code" />
                </div>
                <h1 style="font-size:14px; text-align:right;">Forgot Password?</h1>
                <br>
                <br>
                <br>
                <div class="mb-3" style="text-align:center">
                    <button class="btn btn-primary"
                        style="background-color: #FF9B53; color:white; width: 50%; font-size: 25px">Login</button>
                </div>
                <br>
                <br>
                <br>
                <div style="text-align: center;">
                    <h1 style="font-size: 14px; color: #A09898;">
                        Don't have an account? <span style="color: #0077C0;">Sign Up</span>
                    </h1>
                </div>
            </form>
        </div>
    </div>
@endsection
