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
            <i class="zmdi zmdi-arrow-left"></i>
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
            <img class="profile-image" src="{{$chatDetails->image}}">
            <div class="msg-header">
              <p>{{$chat-> messages}}</p>
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


            <button onclick="sendMessage()" class="sendButton" id="send-btn"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#219473" class="bi bi-send-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
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
    let option1 = localStorage.getItem("option1")
    let option2 = localStorage.getItem("option2")
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
        localStorage.setItem("option1", body["queries"][0]["response"])
        localStorage.setItem("option2", body["queries"][1]["response"])

        
        setTimeout(function() {
          document.querySelector(".status").textContent = "typing...";
          setTimeout(function() {
          let replay = '<div class="bot-inbox inbox"><img class="profile-image" src="{{$chatDetails->image}}"><div class="msg-header"><p>' + body["replay"] + '</p></div></div>';
          document.querySelector(".form").insertAdjacentHTML("beforeend", replay);
         document.querySelector(".form").scrollTop(document.querySelector(".form")[0].scrollHeight);
          document.querySelector(".status").textContent = "online";


          let select = document.querySelector("#data");
          let options = select.getElementsByTagName('option');

          for (let i = 0; i < select.length; i++) {
            options[i].innerHTML = body["queries"][i]["response"];
            options[i].value = body["queries"][i]["response"];
          }
        }, delay)
        }, delay2)


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