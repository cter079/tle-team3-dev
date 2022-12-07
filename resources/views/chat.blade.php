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
            <select id="data" name="Select" required>
              <option value="jaa">jaa</option>
              <option value="neeman">neeman</option>

            </select>
            <input id="data2" type="hidden" value="{{$chat->chat_id}}">
            <input id="data3" type="hidden" value="{{$chat->name}}">


            <button onclick="sendMessage()" id="send-btn">Send</button>
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
        document.querySelector(".status").textContent = "typing...";
        localStorage.setItem("option1", body["queries"][0]["response"])
        localStorage.setItem("option2", body["queries"][1]["response"])

        
        setTimeout(function() {
          
          let replay = '<div class="bot-inbox inbox"><img class="profile-image" src="{{$chatDetails->image}}"><div class="msg-header"><p>' + body["replay"] + '</p></div></div>';
          document.querySelector(".form").insertAdjacentHTML("beforeend", replay);
          // document.querySelector(".form").scrollTop(document.querySelector(".form")[0].scrollHeight);
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
</script>

</html>
@endsection