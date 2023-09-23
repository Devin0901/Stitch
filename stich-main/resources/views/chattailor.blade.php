<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <style>
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

        body,
        html {
            height: 100%;
            margin: 0;
        }

        .chat {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card {
            height: 550px;
            border-radius: 15px;
            background-color: white;
        }

        .contacts_body {
            padding: 0.75rem 0;
            overflow-y: auto;
            white-space: nowrap;
        }

        .msg_card_body {
            overflow-y: auto;
        }

        .card-header {
            border-radius: 15px 15px 0 0;
            border-bottom: 0;
            background-color: #E57C23;
        }

        .card-footer {
            border-radius: 0 0 15px 15px;
            /* position: absolute; */
            bottom: 0;
            width: 100%;
        }

        }

        .container {
            align-content: center;
        }

        .attach_btn {
            border-radius: 15px 0 0 15px;
            background-color: rgba(0, 0, 0, 0.3);
            border: 0;
            color: white;
            cursor: pointer;
        }

        .send_btn {
            border-radius: 0 15px 15px 0;
            background-color: rgba(0, 0, 0, 0.3);
            border: 0;
            color: blue;
            cursor: pointer;
        }

        .user_info {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

        .user_info span {
            font-size: 20px;
            color: white;
        }

        .user_info p {
            font-size: 10px;
            color: rgba(255, 255, 255, 0.6);
        }

        .msg_cotainer {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            padding: 10px;
            position: relative;
            border: 1px solid #000000;
            border-radius: 10px;
            background-color: white
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            padding: 10px;
            position: relative;
            border: 1px solid #000000;
            border-radius: 10px;
            background-color: white
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
            color: black;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
            color: black;
        }

        .msg_head {
            position: relative;
        }

        /* #action_menu_btn{
  position: absolute;
  right: 10px;
  top: 10px;
  color: white;
  cursor: pointer;
  font-size: 20px;
  }
  .action_menu{
  z-index: 1;
  position: absolute;
  padding: 15px 0;
  background-color: rgba(0,0,0,0.5);
  color: white;
  border-radius: 15px;
  top: 30px;
  right: 15px;
  display: none;
  }
  .action_menu ul{
  list-style: none;
  padding: 0;
  margin: 0;
  }
  .action_menu ul li{
  width: 100%;
  padding: 10px 15px;
  margin-bottom: 5px;
  }
  .action_menu ul li i{
  padding-right: 10px;
  }
  .action_menu ul li:hover{
  cursor: pointer;
  background-color: rgba(0,0,0,0.2);
  } */
        @media(max-width: 576px) {
            .contacts_card {
                margin-bottom: 15px !important;
            }
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: grey;
            border-radius: 10px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#action_menu_btn').click(function() {
                $('.action_menu').toggle();
            });
        })
    </script>

</head>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
        <img src="{{ asset('image/Logo.png') }}" style="width : 80px; height : 70px">
        <a class="navbar-brand" style="color: white">STITCH</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>

        <div class="d-flex">
            <form class="mx-2">
                <button class="btn" type="submit">Home</button>
            </form>

            <form class="mx-2">
                <button class="btn" type="submit">About</button>
            </form>

            <form class="mx-2">
                <button class="btn" type="submit">Account</button>
            </form>
        </div>
    </div>
</nav>

<body>

    <br>
    <br>
    <div class="container-fluid h-50">
        <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat">
                <div class="card mb-sm-3 mb-md-0 contacts_card" style="align-items:center">
                    <img src="{{ asset('image/People-male.png') }}" style="width: 100px; height: 170px">
                    <h1 style="font-size: 20px">Devin Suhandi</h1>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('image/ViewProfile.png') }}" alt="Image" width="25px">
                        </div>
                        <div class="col-md-10">
                            <h1 style="font-size: 20px">View Profile</h1>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px; margin-left: 15px">
                        <div class="col-md-2">
                            <img src="{{ asset('image/call.png') }}" alt="Image" width="25px">
                        </div>
                        <div class="col-md-10">
                            <h1 style="font-size: 20px">(021) - 2211- 908</h1>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary" onclick=""
                        style="background-color: #FF9B53; width: 100px">Deal</button>
                    <br>
                    <button type="button" class="btn btn-primary" onclick=""
                        style="background-color: #3C486B; width: 80px">Cancel</button>

                </div>
            </div>

            <div class="col-md-8 col-xl-6 chat">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="user_info">
                                <span>Devin Suhandi</span>
                                <p>Fix Cloth</p>
                            </div>

                        </div>


                    </div>
                    <div class="card-body msg_card_body">

                        @foreach ($chats as $chat)
                            @if ($chat->role == 'tailor')
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="msg_cotainer"
                                        style="border: 1px solid #000000; border-radius: 10px; background-color: white">
                                        {{ $chat->detail }}
                                        <span class="msg_time">
                                            {{ \Illuminate\Support\Carbon::parse($chat->created_at)->format('H:i:s') }}</span>
                                    </div>
                                </div>
                            @endif
                            @if ($chat->role == 'user')
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        {{ $chat->detail }}
                                        <span
                                            class="msg_time_send">{{ \Illuminate\Support\Carbon::parse($chat->created_at)->format('H:i:s') }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <form action="{{ route('chat_action') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_tailor" value={{ $tailor_id }}>
                            <div class="card-footer">
                                <div class="input-group bg-white">
                                    <div class="input-group-append">
                                        <span class="input-group-text attach_btn bg-black"><i
                                                class="fas fa-paperclip text-white"></i></span>
                                    </div>
                                    <textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text send_btn bg-black">
                                            <i class="fas fa-location-arrow text-white"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
