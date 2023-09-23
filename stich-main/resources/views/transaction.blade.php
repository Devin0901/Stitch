<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Payment</title>

</head>

<style>
    .containers-details {
        margin: 0;
        padding: 0;
        background-color: #FFFFFF;
        display: flex;
        flex-direction: column;
        align-items: center;
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

    .transaction-details {
        width: 100%;
        max-width: 900px;
        margin-bottom: 20px;
        padding: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .container {
        width: 90%;
        max-width: 900px;
        background-color: #FFFFFF;
        border-radius: 4%;
        outline: 1px solid #000000;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
    }

    .green-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 15px;
        border-top-left-radius: 100px;
        border-top-right-radius: 100px;
        background-color: #025464;
    }

    .container h2 {
        margin-bottom: 30px;
        text-align: left;
    }

    .list_items {
        list-style-type: none;
    }

    .list_items li {
        margin-bottom: 10px;
    }

    .label {
        font-weight: bold;
        margin-right: 50px;
    }

    .button-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .button {
        margin: 0 25px;
        width: 200px;
        height: 50px;
        border: 1px solid #000;
        justify-content: center;
        text-align: center;
        margin-right: 10px;
        margin-left: 10px;
        border-radius: 5%;
        cursor: pointer;
        font-weight: bold;
        text-decoration: none;
        color: #000000;
        transition: background-color 0.3s ease;
    }

    .sbbutton {
        padding: 10px 20px;
        background-color: #FF9B53;
        border-radius: 5px;
        cursor: pointer;
        outline: 1px solid #000000;
        margin-top: 20px;
        color: #FFFFFF;
        font-weight: bold;
        text-decoration: none;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        text-align: center;
    }

    .button img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .button:hover {
        outline: 3px solid #0077C0;
    }

    .button.clicked {
        outline: 3px solid #0077C0;
    }

    .terms-container {
        display: flex;
        align-items: center;
        margin-top: 50px;
    }

    .terms-checkbox {
        margin-right: 5px;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
    }

    .modal h2 {
        margin-bottom: 10px;
    }

    .modal p {
        margin-bottom: 20px;
    }

    .modal-close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .modal2 {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal2-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
    }

    .modal2 h2 {
        margin-bottom: 10px;
    }

    .modal2 p {
        margin-bottom: 20px;
    }

    .modal2-close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .button a {
        text-decoration: none;
    }

    @media screen and (max-width: 600px) {
        .container {
            width: 90%;
            padding: 10px;
        }

        .container h2 {
            text-align: center;
        }

        .button-container {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .button {
            width: 150px;
            height: 40px;
        }
    }
</style>

<script>
    function openModal() {
        var modal = document.getElementById("modal");
        var checkbox = document.getElementById("terms-checkbox");

        modal.style.display = "block";
        checkbox.disabled = false;
    }

    function openModalVA() {
        var modal = document.getElementById("modal2");

        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("modal");
        modal.style.display = "none";
    }

    function closeModalVA() {
        var modal = document.getElementById("modal2");
        modal.style.display = "none";
    }

    function handleClick(button) {
        var buttons = document.getElementsByClassName("button");

        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("clicked");
        }

        button.classList.add("clicked");
    }

    function handleContinue() {
        var checkbox = document.getElementById("terms-checkbox");
        var button = document.getElementById("payment-button");

        if (checkbox.checked) {
            window.location.href = "payment";
        } else {
            console.log("Please agree to the Terms and Conditions.");
            return false;
        }
    }
</script>

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
    <div class="containers-details">
        <div class="transaction-details">
            <h2>Transaction Details</h2>
            <hr>
            <ul class="list_items">
                <li><span class="label">Item:</span> {{ $data->product_name }}</li>
                <li><span class="label">Price:</span> {{ $data->productprice }}</li>
            </ul>
            <hr>
        </div>

        <div class="container">
            <div class="green-top"></div>
            <h2>Metode Pembayaran:</h2>
            <form action="{{ route('payment') }}" method="POST">
                <div class="button-container">
                    <div class="button">
                        <a href="#" onclick="openModalVA()">Virtual Account</a>
                        <input type="hidden" name="selected_option" value="virtual-account">
                    </div>
                    <div class="button">
                        <img src="shopee.jpg" alt="Image 1">
                        <input type="hidden" name="selected_option" value="shopee">
                    </div>
                    <div class="button">
                        <img src="gopay.jpeg" alt="Image 2">
                        <input type="hidden" name="selected_option" value="gopay">
                    </div>
                    <div class="button">
                        <img src="ovo.png" alt="Image 3">
                        <input type="hidden" name="selected_option" value="ovo">
                    </div>
                    <div class="button">
                        <img src="dana.png" alt="Image 4">
                        <input type="hidden" name="selected_option" value="dana">
                    </div>
                </div>
                <button type="submit">Submit</button>
            </form>

            <div id="modal" class="modal">
                <div class="modal-content">
                    <span class="modal-close" onclick="closeModal()">&times;</span>
                    <h2>Langkah yang harus dilakukan setelah pembayaran</h2>
                    <p>1. Kurir akan datang untuk pickup pakaian dalam waktu 2x24 jam, akan dinotifikasi melalui nomor
                        whatsapp customer saat kurir datang.</p>
                    <p>2. Setelah itu, progress perjalanan pakaian bisa dilacak melalui website shipping dengan nomor
                        resi
                        yang diberikan.</p>
                    <p>3. Untuk mengetahui progress tailoring, bisa menanyakan kepada tailor langsung melalui chat</p>
                    <p>4. Pakaian yang sudah selesai proses tailoringnya akan dikirim tailor dan setelah sampai di
                        lokasi
                        customer, maka bisa klik “Done” pada order untuk melepaskan dana kepada tailor</p>
                </div>
            </div>

            <div id="modal2" class="modal2">
                <div class="modal2-content">
                    <span class="modal2-close" onclick="closeModalVA()">&times;</span>
                    <h2>Transaction Virtual Account</h2>
                    <p>Mohon transfer ke rekening Stitch</p>
                    <p>Virtual Account: 16821900001 a/n Stitch Tailoring</p>
                </div>
            </div>

            <label>
                <input type="checkbox" id="terms-checkbox" disabled> By clicking the button, you agree to the
                <a href="#" onclick="openModal()">Terms and Conditions</a>
            </label>

            {{-- <a href="#" class="sbbutton" onclick="return handleContinue()">Continue to payment</a> --}}
            <a href="{{ route('transaction_confirm', ['id' => $data->user_id]) }}" class="sbbutton">Continue to
                payment</a>

        </div>
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
