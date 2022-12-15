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
                    <div id="MyClockDisplay" class="clock" style="background-color: black; color:white; padding-left:5px;" onload="showTime()"></div>
<h1 class="title">Settings</h1>
                    <div class="icons3">

                    <form method="POST" action="{{ route('reset')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" onclick="if(confirm('Bij het klikken van deze knop zullen alle opgeslagen berichten verwijderd worden en begin je dus opnieuw. Wilt u doorgaan?')){localStorage.clear()
            }else{
            };
" value="Reset Progress">
        </div>
    </form>                      </div>
    <div class="icons3">

                    <form method="POST" action="{{ route('deleteaccount')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" onclick=" return confirm('Bij het klikken van deze knop zullen alle opgeslagen accountgegevens worden verwijderd. Wilt u doorgaan?');" value="Delete Account">
        </div>
    </form>                      </div>
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

    showTime();
</script>

</html>
@endsection