
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Registreren</title>

    <link rel="stylesheet" type="text/css" href="authenticate.css" />


</head>

@extends('layouts.app')

@section('content')
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
      <div id="MyClockDisplay" class="clock" style="background-color: black; color:white; padding-left:5px;" onload="showTime()"></div>
      
<div class="container">
	<div class="screen4">
        
		<div class="screen__content">
        <form method="POST" class="login" action="{{ route('register') }}">
                @csrf
                <img class="icon" src="img/burnerphone.png"/>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
                    <input id="name" type="text" class="login__input" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
                    <input type="text" id="email" name="email" class="login__input" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				</div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" class="login__input" placeholder="Password" name="password" required autocomplete="new-password">

				</div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" required>
                    <label class="form-check-label" onclick="window.location.href=`privacy`;" for="remember">
                        {{ __('Accept privacy policy') }}
                    </label>
                </div>

                    <button type="submit" class="button login__submit">
                        {{ __('Register') }}
                    </button>		
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<div class="footer">
        <div class="btn-burger"></div>
        <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div>
        <div class="btn-back" onclick="window.history.go(-1); return false;"></div>
      </div>
    </div>
<script>function showTime(){
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

showTime();</script>
@endsection
