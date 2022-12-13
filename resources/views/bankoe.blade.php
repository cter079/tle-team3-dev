<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>BANKOE Bankieren</title>

    <link rel="stylesheet" type="text/css" href="main.css" />

    <link rel="shortcut icon" type="image/x-icon" href="img/bankoe-favicon.png" />

</head>

<body>

    <div class="wrapper">

        <div class="device">

            <div class="screen"></div>

            <div class="btn-volume btn-volume-up"></div>

            <div class="btn-volume btn-volume-down"></div>

            <div class="btn-power">

                <div class="btn-power-act"></div>

            </div>

            <div class="header">

                <div class="detector"></div>

                <div class="camera"></div>

            </div>

            <div class="display">

                <nav>

                    <h1>BANKOE</h1>

                </nav>

                <div class="btn-row">

                    <button class="bank-btn"><a href="deposit"><img src="img/arrow-down.png" alt="deposit button"></a>Storten</button>

                    <button class="bank-btn"><a href="withdraw"><img src="img/arrow-up.png" alt="withdraw button"></a>Opnemen</button>

                    <button class="bank-btn"><a href="request"><img src="img/request-icon.png" alt="request button"></a>Verzoek</button>

                </div>

                <div class="welcome">

                    <h1>Welkom Nasim!</h1>

                </div>

                <div class="current-account">
                    <h1>Saaf:</h1>
                    <h2>€{{$saldo->saldo}}</h2>
                </div>

                <div class="savings-account">

                    <h1>Opgespaard:</h1>

                    <h2>€ 2145,67</h2>

                </div>

                <div class="bankoe-img">

                    <img src="img/bankoe.png" alt="bankoe logo">

                </div>

                <div class="footer1">


                </div>

            </div>

            <div class="footer">

                <div class="btn-burger"></div>

                <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div>

                <div class="btn-back"></div>

            </div>

        </div>

    </div>

    </div>

</body>
</html>
