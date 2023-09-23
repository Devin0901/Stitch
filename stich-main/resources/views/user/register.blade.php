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
</style>

<body>
    <div class="row">
        <div class="col-md-4">
            <div class="container"
                style="background-color: #025464; display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100%;">
                <img src="{{ asset('image/login1.png') }}" style="width: 50%">
                <br>
                <br>
                <br>
                <img src="{{ asset('image/login2.png') }}" style="width: 50%">
            </div>
        </div>

        <div class="col-md-7">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('register.action') }}" method="POST">
                @csrf

                <div style="display: flex; justify-content: center;">
                    <h1 style="font-size: 64px; font-weight: bold">STITCH</h1>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label style="color:#A09898">First name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="first_name" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Last name<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="last_name" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Username<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="username" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Email<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="email" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Password Confirmation<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password_confirm" />
                </div>
                <div class="mb-3">
                    <label style="color:#A09898">Phone number<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="phone_number" />
                </div>

                <div class="mb-3">
                    <label class="mt-checkbox">
                        <input type="radio" id="male" name="radio" value="male"> Male
                    </label>
                    <label class="mt-checkbox">
                        <input type="radio" id="female" name="radio" value="female"> Female
                    </label>
                </div>

                <br>
                <br>

                <div class="mb-3" style="text-align:center">
                    <button class="btn btn-primary"
                        style="background-color: #FF9B53; color:white; width: 100%; font-size: 25px">Add
                        Address</button>
                </div>

                <div style="text-align: center;">
                    <h1 style="font-size: 14px; color: #A09898;">
                        Already Have Account? <a href="{{ route('login') }}"style="color: #0077C0;">Sign In</a>
                        <h1 style="font-size: 14px; color: #A09898;">
                        </h1>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
