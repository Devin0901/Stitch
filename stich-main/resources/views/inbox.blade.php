<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>INBOX</title>
</head>

<body>
    <style>
        .btn-outline-success:hover {
            background-color: #C7EEFF;
            border: none;
            color: black;
        }

        .btn {
            border: none;
            color: white;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
            width: 100%;

            >.col,
            >[class*="col-"] {
                padding-right: 0;
                padding-left: 0;
            }
        }

        .navbar-custom {
            /* background-color: #C7EEFF; */
            background-color: #025464;
        }

        body {
            background-color: white;
        }

        footer {
            background-color: white;
        }

        .container {
            width: 100vw;
            background-color: white;
            border-radius: 10%;
            border-color: #A09898;
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            margin-top: 20px;
            padding-top: 0.8vw;
        }

        .container:hover {
            background-color: #e3e3e3;
        }

        /* Style time text */
        .time-right {
            float: right;
            font-size: 1vw;
            color: #858282;
            margin-top: 0.1vw;
        }

        .greytext {
            font-size: 1.5vw;
            color: #858282;
            margin-top: 0.1vw;
        }

        .blank {
            border: none;
            background-color: white;
        }

        .blank:hover {
            background-color: #C7EEFF;
            border: none;
            color: black;
        }

        .left {
            float: left;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <img src="{{ asset('image/Logo.png') }}" style="width : 80px; height : 70px">
            <a class="navbar-brand">STITCH</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>

            <div class="d-flex">
                <form class="mx-2">
                    <button class="btn btn-outline-success" type="submit">Home</button>
                </form>

                <form class="mx-2">
                    <button class="btn btn-outline-success" type="submit">About</button>
                </form>

                <form class="mx-2">
                    <button class="btn btn-outline-success" type="submit">Account</button>
                </form>
            </div>
        </div>
    </nav>
    <h1 style="margin: 10px 0px 0px 80px"> Inbox </h1>
    <?php
    $i = 1;
    ?>

    @foreach ($datas as $data)
        <div class="body">

            <button class="container" onclick="window.location.href = '{{ route('chat', ['id' => $i]) }}'">
                <div class="row no-gutters">
                    <div class="col-md-1" style="position: relative">
                        <p class="greytext left">1.</p>
                    </div>
                    <div class="col-md-6" style="position: relative">
                        <p class="greytext left">{{ $data->user->username }} wants to make a consultation</p>
                    </div>
                    <div class="col-md" style="position: relative">
                        <p class="time-right greytext" style="font-size: 1vw">13:27</p>
                    </div>
                </div>
            </button>
            <?php
            $i++;
            ?>
    @endforeach
</body>

</html>
