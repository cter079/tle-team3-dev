@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
  @foreach($chats as $chatDetails)
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
      <div class="screen3">
      <div id="MyClockDisplay" class="clock" style="background-color: black; color:white; padding-left:5px;" onload="showTime()"></div>

        <div class="user-bar">
          <div class="back">
            <i class="zmdi zmdi-arrow-left" onclick="window.history.go(-1); return false;"><svg 	style="cursor: pointer;"
 xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></i>
          </div>
          <div class="avatar">
            <img src="{{$chatDetails->image}}" alt="Avatar" height="40px">
          </div>
          <div class="name">
            <span>{{$chatDetails->name}}</span>
            <span class="status">online</span>
          </div>
          <div class="actions more">
            <i class="fa fa-phone" color="white" style="scale: -1 1;"></i>
          </div>
          <div class="actions attachment">
            <i class="zmdi zmdi-attachment-alt"></i>
          </div>
          <div class="actions">
            <i class="zmdi zmdi-phone"></i>
          </div>
        </div>
        <div class="form">
          


          @foreach($chatContaints as $chat)
          @if($chat->direction == "received")

          <div class="bot-inbox inbox">
            <div class="arrow-left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#219473" class="bi bi-triangle-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
</svg></div>
            <div class="msg-header">

              <p><span style="color:#915c00; font-weight: bold;">{{$chatDetails->name}}</span> 
                <br>
                {{$chat-> messages}}</p>
            </div>
          </div>

          @else
          <div class="user-inbox inbox">
      
            <div class="msg-header">
              <p>{{$chat-> messages}}</p>
            </div>
          </div>

          @endif
          @endforeach
          @endforeach
        </div>
        <div class="typing-field">
          <div class="input-data">
            <select id="data" class="selectOption" name="Select" required>
              <option value="jaa">jaa</option>
              <option value="neeman">neeman</option>

            </select>
            <input id="data2" type="hidden" value="{{$chat->chat_id}}">
            <input id="data3" type="hidden" value="{{$chat->name}}">


            <button onclick="sendMessage()" class="sendButton" id="send-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-send" viewBox="0 0 16 16">
  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
</svg></button>
            
          </div>
        </div>
</div>

      </div>

      <div class="footer">
        <div class="btn-burger"></div>
        <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div>
        <div class="btn-back" onclick="window.history.go(-1); return false;"></div>
      </div>
    </div>


</body>
<script>
  window.addEventListener("load", () => {
    let option1 = localStorage.getItem('{{$chatDetails->name}}')
    let option2 = localStorage.getItem('{{$chatDetails->name}} 2')
    if (option1 == null && option2 == null) {} else {
      let select = document.querySelector("#data");
      let options = select.getElementsByTagName('option');
      options[0].innerHTML = option1;
      options[0].value = option1;
      options[1].innerHTML = option2;
      options[1].value = option2;
    }
  });


  const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  const triggerButton = document.getElementById("#send-btn");

  function sendMessage() {
    let value = document.querySelector("#data").value;
    let msg = value;
    if (msg !== "") {
      let id = document.querySelector("#data2").value;
      let name = document.querySelector("#data3").value;


      fetch("{{Route('sendMessage')}}", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": token
        },
        body: JSON.stringify({
          msg: msg,
          id: id,
          name: name,
        })
      }).then(async function(data) {
        let body = await data.json()
        let sentmsg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + msg + '</p></div></div>';
        document.querySelector(".form").insertAdjacentHTML("beforeend", sentmsg);
        let delay = Math.random() * 10000;
        let delay2 = 3000
        localStorage.setItem("{{$chatDetails->name}}", body["queries"][0]["response"])
        localStorage.setItem("{{$chatDetails->name}} 2", body["queries"][1]["response"])
        document.querySelector(".status").textContent = "typing...";

        
        setTimeout(function() {
          let replay = '<div class="bot-inbox inbox"><img class="profile-image" src="{{$chatDetails->image}}"><div class="msg-header"><p>' + body["replay"] + '</p></div></div>';
          document.querySelector(".form").insertAdjacentHTML("beforeend", replay);
          document.querySelector(".status").textContent = "online";


          let select = document.querySelector("#data");
          let options = select.getElementsByTagName('option');

          for (let i = 0; i < select.length; i++) {
            options[i].innerHTML = body["queries"][i]["response"];
            options[i].value = body["queries"][i]["response"];
          }
     
        }, delay)


      })
    }
  }
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

</html>
@endsection