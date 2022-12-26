@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burnerphone</title>
  <link rel="stylesheet" href="app.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <audio id="mySound3" src="<?= asset('audio/receivedNoti.mp3') ?>"></audio>

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
        <div class="screen2">
        <div class="notifyWrapper">
            <div class="notify" onclick="window.location.href=`{{route('tutorial')}}`;">
              <div class="header">
                <div class="contents">
                  <div class="left">
                  <img src="https://i.ibb.co/Zzh16rv/burnerphone.png" style="width:10px;">

                     Burnerphone
                  </div>
                  <div class="right">
                    Now
                  </div>
                </div>
                <div class="main-content">
                  <span id="notifyType" class=""></span>
                </div>
              </div>
            </div>
          </div>
          <div class="phone-header" style="display: flex; font-size:14px;">
          <div style="background-color: transparent; color:white; padding-left:5px; text-align:center;" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>T-Mobile</div>
          <div id="MyClockDisplay" class="clock" style="background-color: transparent; color:white; padding-left:60px; text-align:center;" onload="showTime()"></div>
          <div class="" style="padding-left: 100px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bluetooth" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8.543 3.948 1.316 1.316L8.543 6.58V3.948Zm0 8.104 1.316-1.316L8.543 9.42v2.632Zm-1.41-4.043L4.275 5.133l.827-.827L7.377 6.58V1.128l4.137 4.136L8.787 8.01l2.745 2.745-4.136 4.137V9.42l-2.294 2.274-.827-.827L7.133 8.01ZM7.903 16c3.498 0 5.904-1.655 5.904-8.01 0-6.335-2.406-7.99-5.903-7.99C4.407 0 2 1.655 2 8.01 2 14.344 4.407 16 7.904 16Z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="green" class="bi bi-battery-full" viewBox="0 0 16 16">
  <path d="M2 6h10v4H2V6z"/>
  <path d="M2 4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2zm10 1a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h10zm4 3a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z"/>
</svg></div>
          </div>
          <div class="icons">

            <div class="app" style="cursor:pointer" onclick="window.location.href=`{{url('/bankoe')}}`;">Bankoe</div>
            <div class="app" style="cursor:pointer" onclick="window.location.href=`{{route('gappie')}}`;">Gappie</div>
            <div class="app" style="cursor:pointer" onclick="window.location.href=`{{url('/wiki')}}`;">Wikitext</div>
            <div class="app" style="cursor:pointer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); window.open('','_self').close()

">Loguit</div>

          </div>
          <div class="icons2">

            <div class="app" style="cursor:pointer" onclick="window.location.href=`{{url('/settings')}}`;">Settings</div>
            <div class="app" style="cursor:pointer"></div>
            <div class="app" style="cursor:pointer"></div>
            <div class="app" style="cursor:pointer"></div>

          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          <div class="icons4">
 
               <div class="app" style="cursor:pointer" ></div>
               <div class="app" style="cursor:pointer" ></div>
               <div class="app" style="cursor:pointer" ></div>
               <div class="app" style="cursor:pointer"onclick=""></div>
               
            </div>
        </div>

      </div>
      <div class="footer">
        <div class="btn-burger"></div>
        <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home" style="cursor:pointer"></div>
        <div class="btn-back" onclick="window.history.go(-1); return false;"></div>
      </div>
    </div>
</body>
<script>
  function showTime() {
    let date = new Date();
    let h = date.getHours(); // 0 - 23
    let m = date.getMinutes(); // 0 - 59

    if (h == 0) {
      h = 12;
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;

    let time = h + ":" + m;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);
  }
  const firstTime = localStorage.getItem("first_time");
if(!firstTime) {
    localStorage.setItem("first_time","1");

  setTimeout(function() {
            document.getElementById('mySound3').play();

            document.querySelector(".notify").classList.toggle("active");
            document.querySelector("#notifyType").textContent = `Welkom {{ Auth::user()->name }}! Klik hier voor de handleiding!`;

            setTimeout(function() {
              document.querySelector(".notify").classList.remove("active");
              document.querySelector("#notifyType").textContent = '';
            }, 10000);
          }, 2000);
        }
        else{
          setTimeout(function() {
            document.getElementById('mySound3').play();

            document.querySelector(".notify").classList.toggle("active");
            document.querySelector("#notifyType").textContent = `Welkom terug {{ Auth::user()->name }}!`;

            setTimeout(function() {
              document.querySelector(".notify").classList.remove("active");
              document.querySelector("#notifyType").textContent = '';
            }, 3000);
          }, 2000);
        }
  showTime();
</script>

</html>
@endsection