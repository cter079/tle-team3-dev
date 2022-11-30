@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gappie</title>
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
		
			<div class="title">
				gAppy</div>
			<button onclick="plusDivs(-1)">Notificaties</button>
			<button onclick="plusDivs(+1)">Chats</button>
			<div class="mySlides">
				<div class="form">
					@foreach($notifications as $notification)
					<p onclick="window.location.href=`{{url('/wiki')}}`;" style="cursor:pointer">{{$notification->message}}</p>
					@endforeach
				</div>
			</div>
			<div class="mySlides">
				<div class="form">
					<div class="search-box">
						<div class="input-wrapper">
							<i class="material-icons">search</i>
							<input placeholder="Search here" type="text">
						</div>
					</div>
					@foreach($chats as $chat)
					<button class="chatButton" onclick=`${window.location.href="{{ route ('chat', $chat->id)}}"}`>
						<div class=" friend-drawer friend-drawer--onhover">
							<img class="profile-image" src="{{$chat->image}}" alt="">
							<div class="text">
								<h6>{{$chat->name}}</h6>
								<p class="text-muted">{{$chat->description}}</p>
							</div>
							<span class="time text-muted small">13:21</span>
						</div>

					</button>
					<hr>
					
					@endforeach


				</div>
			</div>

		</div>
		<div class="footer">
      <div class="btn-burger"></div>
      <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div>
      <div class="btn-back"></div>
    </div>
  </div>
		<script>
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
				showDivs(slideIndex += n);
			}

			function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				if (n > x.length) {
					slideIndex = 1
				}
				if (n < 1) {
					slideIndex = x.length
				};
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				x[slideIndex - 1].style.display = "block";
			}
		</script>

</body>

</html>
@endsection