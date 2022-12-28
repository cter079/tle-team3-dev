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
            <div class="phone-header" style="display: flex; font-size:14px;">
          <div style="background-color: black; color:white; padding-left:5px; text-align:center;" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>T-Mobile</div>
          <div id="MyClockDisplay" class="clock" style="background-color: black; color:white; padding-left:65px; padding-top:2px; text-align:center;" onload="showTime()"></div>
          <div class="" style="padding-left: 100px; padding-right:11px; background-color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bluetooth" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8.543 3.948 1.316 1.316L8.543 6.58V3.948Zm0 8.104 1.316-1.316L8.543 9.42v2.632Zm-1.41-4.043L4.275 5.133l.827-.827L7.377 6.58V1.128l4.137 4.136L8.787 8.01l2.745 2.745-4.136 4.137V9.42l-2.294 2.274-.827-.827L7.133 8.01ZM7.903 16c3.498 0 5.904-1.655 5.904-8.01 0-6.335-2.406-7.99-5.903-7.99C4.407 0 2 1.655 2 8.01 2 14.344 4.407 16 7.904 16Z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-battery-full" viewBox="0 0 16 16">
  <path d="M2 6h10v4H2V6z"/>
  <path d="M2 4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2zm10 1a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h10zm4 3a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z"/>
</svg></div>
          </div>
                <nav>

                    <h1>BANKOE</h1>

                </nav>

                <div class="btn-row">

                    <button class="bank-btn"><a href="deposit"><img src="img/arrow-down.png" alt="deposit button"></a>Storten</button>

                    <button class="bank-btn"><a href="withdraw"><img src="img/arrow-up.png" alt="withdraw button"></a>Opnemen</button>

                    <button class="bank-btn"><a href="request"><img src="img/request-icon.png" alt="request button"></a>Verzoek</button>

                </div>

                <div class="welcome">

                    <h1>Welkom Nassim</h1>

                </div>

                <div class="current-account">
                    <h1>Saaf:</h1>
                    <h2>€{{$saldo->saldo}}</h2>
                </div>

                <div class="savings-account">

                    <h1>Opgespaard:</h1>

                    <h2>€ {{$bank->bank}}</h2>

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
    <script>
			  function showTime(){
    let date = new Date();
    let h = date.getHours(); // 0 - 23
    let m = date.getMinutes(); // 0 - 59
    
    if(h == 0){
        h = 12;
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    
    let time = h + ":" + m;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
		
			
		</script>
</body>
</html>
