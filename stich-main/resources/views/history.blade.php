<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TailorDeal - History</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .btn:hover {
            background-color: white;
            border: none;
            color: black;
        }

        .btn {
            background-color: none;
            border: none;
            color: white;
        }

        .navbar-custom {
            /* background-color: #C7EEFF; */
            background-color: #025464;
        }

        .container {
            width: fit-content;
            max-width: 1000px;
            height: fit-content;
            background-color: #FFFFFF;
            border-radius: 4%;
            outline: 1px solid #000000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            position: relative;
            margin: 0 auto;
            margin-top: 100px;
            margin-bottom: 20px;
        }

        .green-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            border-top-left-radius: 5vh;
            border-top-right-radius: 5vh;
            background-color: #025464;
        }

        .container h1 {
            margin-bottom: 20px;
            text-align: left;
        }

        .container h4 {
            margin-bottom: 10px;
            text-align: left;
        }

        .table-container {
            width: 900px;
            max-width: 900px;
            height: 500px;
            overflow-y: auto;
            margin-top: 20px;
        }

        .table-header {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background-color: #F5F5F5;
            padding: 10px;
            border-bottom: 1px solid #DDDDDD;
        }

        .table-header div {
            flex: 1;
            text-align: left;
            font-weight: bold;
        }

        .table-row {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #DDDDDD;
        }

        .table-row div {
            flex: 1;
            text-align: left;
        }

        .table-row .complete-button {
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #FF9B53;
            color: #FFFFFF;
        }

        @media screen and (max-width: 600px) {
            .container {
                width: calc(100% - 20px);
                margin: 10px;
                padding: 10px;
            }

            .table-container {
                width: 100%;
                max-width: 100%;
                height: auto;
            }

            .table-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .table-row div {
                margin-bottom: 5px;
            }

            .table-row .complete-button {
                margin-top: 10px;
            }
        }
    </style>
</head>
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

<body>
    <h1 style=" top: 10px; left: 10px; margin-left: 30px;">Order History</h1>
    <h4 style=" left: 12px; margin-left: 30px;margin-top:20px">Manage your recent orders
    </h4>
    <div class="container">
        <div class="green-top"></div>
        <div class="table-container">
            <div class="table-header">
                <div>ID</div>
                <div>Status</div>
                <div>Product</div>
                <div>Tailor</div>
                <div>Date</div>
                <div></div>
            </div>
            <?php
            $i = 0;
            ?>
            @foreach ($data as $dt)
                <?php
                $i++;
                ?>
                <div class="table-row">

                    <div>HTR-{{ $i }}</div>
                    <div>Ongoing</div>
                    <div>{{ $dt->product->product_name }}</div>
                    <div>{{ $dt->tailors->user->username }}</div>
                    <div>{{ $dt->created_at }}</div>
                    <div class="complete-button" onclick="completeOrder(this)">Complete</div>
                </div>
                <hr>
            @endforeach

        </div>
    </div>

    <script>
        function completeOrder(button) {
            var tableRow = button.parentNode;

            var statusCell = tableRow.querySelector('.table-row div:nth-child(2)');
            statusCell.textContent = 'Completed';

            button.style.visibility = 'hidden';

            var invisibleElement = document.createElement('div');
            invisibleElement.style.visibility = 'hidden';
            tableRow.replaceChild(invisibleElement, button);
        }
    </script>
</body>

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

</html>
