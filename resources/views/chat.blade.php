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
    @foreach($chats as $chat)

    <div class="wrapper">
        <div class="title"> <img class="profile-image" src="{{$chat->image}}" alt="" style="float:left;">

            {{$chat->name}} @endforeach
        </div>
        <div class="form">
            <div class="bot-inbox inbox">
                <img class="profile-image" src="{{$chat->image}}" alt="">

                @foreach($chatContaints as $chat)
                <div class="msg-header">
                    <p>{{$chat-> messages}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data1">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button onclick="sendMessage()"id="send-btn">Send</button>
            </div>
        </div>
    </div>
</body>
<script>
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const triggerButton = document.getElementById("#send-btn");

    function sendMessage() {
        let value = document.querySelector("#data").value;
        let msg =  value;


        fetch("{{Route('sendMessage')}}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": token
            },
            body: JSON.stringify({
                msg: msg,
            })
        }).then(async function(data) {
            let body = await data.json()
            let sentmsg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + msg + '</p></div></div>';
            document.querySelector(".form").insertAdjacentHTML("beforeend", sentmsg);

            let replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + body[0].response + '</p></div></div>';
            document.querySelector(".form").insertAdjacentHTML("beforeend", replay);
            // document.querySelector(".form").scrollTop(document.querySelector(".form")[0].scrollHeight);

        })
    }
</script>

</html>
@endsection