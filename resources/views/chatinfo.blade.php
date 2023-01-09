<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatinfo</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/BCTg8mZ/chatapp.png" />

  <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
  <div class="wrapper">
    <div class="device">
      <div class="screen"></div>
      <div class="btn-volume btn-volume-up"></div>
      <div class="btn-volume btn-volume-down"></div>
      <div class="btn-power" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); window.open('','_self').close()">
        <div class="btn-power-act"></div>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>

      <div class="header">
        <div class="detector"></div>
        <div class="camera"></div>
      </div>

      <div class="display">
        <div class="screen3">

          <div class="phone-header" style="display: flex; font-size:14px;">
            <div style="background-color: #219473; color:white; padding-left:5px; text-align:center;" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
              </svg>T-Mobile</div>
            <div id="MyClockDisplay" class="clock" style="background-color: #219473; color:white; padding-left:65px; text-align:center;" onload="showTime()"></div>
            <div class="right-nav" style="background-color:#219473;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bluetooth" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8.543 3.948 1.316 1.316L8.543 6.58V3.948Zm0 8.104 1.316-1.316L8.543 9.42v2.632Zm-1.41-4.043L4.275 5.133l.827-.827L7.377 6.58V1.128l4.137 4.136L8.787 8.01l2.745 2.745-4.136 4.137V9.42l-2.294 2.274-.827-.827L7.133 8.01ZM7.903 16c3.498 0 5.904-1.655 5.904-8.01 0-6.335-2.406-7.99-5.903-7.99C4.407 0 2 1.655 2 8.01 2 14.344 4.407 16 7.904 16Z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="green" class="bi bi-battery-full" viewBox="0 0 16 16">
                <path d="M2 6h10v4H2V6z" />
                <path d="M2 4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2zm10 1a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h10zm4 3a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z" />
              </svg></div>
          </div>
          @foreach($chats as $chatDetails)
          <div class="chat-profile" style="height:97%; background-color:#219473;">
            <div class="" style="position:relative; top:5%; left:2%;">
              <i class="zmdi zmdi-arrow-left" onclick="window.history.go(-1); return false;"><svg style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg></i>
            </div>
            <div class="chat-profile-img" style="width: 100px;height: 100px; position:relative; left:50%;top:13%; 	transform: translate(-50%, -50%);
">
              <img style="border-radius: 50%; height:100px; margin: 0 auto;" src="{{$chatDetails->image}}" alt="">
            </div>
            <div class="chat-profile-name" style="width:100%; text-align:center; margin-top:15px;">
              <h2 style="color:white;">{{$chatDetails->name}}</h2>
            </div>
            <div class="chat-profile-name" style="width:100%; text-align:center;">
              <h3 style="color:dimgray;">+31 6 <script>document.write(Math.floor(Math.random()*10000000))</script></h2>
            </div>
            <div class="icon-row" style="position:relative; left:74%;top:3%; 	transform: translate(-50%, -50%); display:flex;">
              <div class="icon" style="padding-right:15px; padding-left:15px;">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                  </svg></div>
              </div>
              <div class="icon" style="padding-right:15px; padding-left:15px;">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                  </svg></div>
              </div>
              <div class="icon" style="padding-right:15px; padding-left:15px;cursor:pointer;" onclick="window.location.href=`{{route('chat', $chatDetails->id)}}`;">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                    <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                  </svg></div>
              </div>

            </div>
            <div class="icon-row-label" style="position:relative; left:75%;top:3%; 	transform: translate(-50%, -50%); display:flex;">
              <div class="icon" style="padding-right:8px; padding-left:8px; color:white; font-size:small;">
                Audio
              </div>
              <div class="icon" style="padding-right:8px; padding-left:11px; color:white;font-size:small;">
                Video
              </div>
              <div class="icon" style="padding-right:8px; padding-left:6px; color:white;font-size:small;cursor:pointer;" onclick="window.location.href=`{{route('chat', $chatDetails->id)}}`;">
                Message
              </div>
            </div>
            <div style="background-color:white; height:10px; margin-top:20px;"></div>
            <div class="chat-profile-name" style="margin-top:10px; padding-left:10px; padding-right:10px;">
              <h3 style="color:white;">Description:</h3>

              <h5 style="color:white;">{{$chatDetails->story}}</h5>
            </div>
          </div>


          @endforeach

        </div>
      </div>
      <div class="footer">
        <div class="btn-burger"></div>
        <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div>
        <div class="btn-back" onclick="window.history.go(-1); return false;"></div>
      </div>
    </div>
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

      showTime();
    </script>

</body>

</html>