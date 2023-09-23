<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My Profile</title>
</head>
    <title>TailorInbox</title>

    <style>
            .btn:hover{
        background-color: white;
        border: none;
        color: black;
    }
    .btn{
        background-color: none;
        border: none;
        color: white;
    }
    .navbar-custom{
        /* background-color: #C7EEFF; */
        background-color: #025464;
    }

        body {
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
        }

        .inbox-title {
            margin: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .inbox-parent {
            overflow-y: auto;
            max-height: calc(100vh - 140px); /* Adjust the value as needed */
        }

        .inbox-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }

        .inbox-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: calc(100% - 40px);
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 10px;
            background-color: #F2F2F2;
            color: #888888;
            cursor: pointer;
            text-decoration: none;
        }

        .inbox-item:hover {
            background-color: #E6E6E6;
        }

        .inbox-item-number {
            font-weight: bold;
            margin-right: 10px;
        }

        .inbox-item-text {
            flex-grow: 1;
            margin-right: 10px;
        }

        .inbox-item-time {
            font-size: 12px;
        }

        @media screen and (max-width: 600px) {
            .inbox-container {
                margin: 10px;
            }

            .inbox-item {
                width: calc(100% - 20px);
                padding: 8px;
                border-radius: 8px;
            }

            .inbox-item-number {
                font-size: 14px;
                margin-right: 8px;
            }

            .inbox-item-text {
                font-size: 14px;
                margin-right: 8px;
            }

            .inbox-item-time {
                font-size: 10px;
            }
        }
    </style>
</head>

<nav class = "navbar navbar-expand-lg navbar-light navbar-custom">
    <div class = "container-fluid">
        <img src = "{{ asset ('image/Logo.png') }}" style = "width : 80px; height : 70px">
        <a class = "navbar-brand" style="color: white">STITCH</a>
        <ul class = "navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        
            <div class = "d-flex">
                <form class = "mx-2">
                    <button class = "btn" type = "submit">Home</button>
                </form>
                
                <form class = "mx-2">
                    <button class = "btn" type = "submit">About</button>
                </form>

                <form class = "mx-2">
                    <button class = "btn" type = "submit">Account</button>
                </form>
            </div>
    </div>
</nav>


<body>
    <div class="inbox-title">Inbox</div>

    <div class="inbox-parent">
        <div class="inbox-container" id="inbox-container"></div>
    </div>

    <script>
        const inboxData = [
            {number: 1, text: 'Devin Suhandi wants to make a consultation', time: '10:00'},
            {number: 2, text: 'Devin Suhandi wants to make a consultation', time: '11:30'},
            {number: 3, text: 'Devin Suhandi wants to make a consultation', time: '13:45'}
        ];

        function generateInboxItems() {
            const inboxContainer = document.getElementById('inbox-container');

            for (const item of inboxData) {
                const inboxItem = document.createElement('a');
                inboxItem.setAttribute('href', `chat.html?chat=${item.number}`);
                inboxItem.classList.add('inbox-item');

                const numberElement = document.createElement('div');
                numberElement.classList.add('inbox-item-number');
                numberElement.textContent = `${item.number}.`;

                const textElement = document.createElement('div');
                textElement.classList.add('inbox-item-text');
                textElement.textContent = item.text;

                const timeElement = document.createElement('div');
                timeElement.classList.add('inbox-item-time');
                timeElement.textContent = item.time;

                inboxItem.appendChild(numberElement);
                inboxItem.appendChild(textElement);
                inboxItem.appendChild(timeElement);

                inboxContainer.appendChild(inboxItem);
            }
        }

        generateInboxItems();
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
        <h2 style="font-size: 15px">Home</h2>
        <h2 style="font-size: 15px">Fix Cloth</h2>
        <h2 style="font-size: 15px">Custom Cloth</h2>
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
