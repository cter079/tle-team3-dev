<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gappie</title>
	<link rel="shortcut icon" type="image/x-icon" href="chatapp.png" />

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
						<div id="MyClockDisplay" class="clock" style="background-color: #219473; color:white; padding-left:77px; text-align:center;" onload="showTime()"></div>
						<div class="right-nav" style="background-color:#219473;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bluetooth" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="m8.543 3.948 1.316 1.316L8.543 6.58V3.948Zm0 8.104 1.316-1.316L8.543 9.42v2.632Zm-1.41-4.043L4.275 5.133l.827-.827L7.377 6.58V1.128l4.137 4.136L8.787 8.01l2.745 2.745-4.136 4.137V9.42l-2.294 2.274-.827-.827L7.133 8.01ZM7.903 16c3.498 0 5.904-1.655 5.904-8.01 0-6.335-2.406-7.99-5.903-7.99C4.407 0 2 1.655 2 8.01 2 14.344 4.407 16 7.904 16Z" />
							</svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="green" class="bi bi-battery-full" viewBox="0 0 16 16">
								<path d="M2 6h10v4H2V6z" />
								<path d="M2 4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2zm10 1a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h10zm4 3a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z" />
							</svg></div>
					</div>
					<div id="loading">
  <img id="loading-image" src="chatapp.png" alt="Loading..." />
  <h1>Gappie</h1>
</div>
<script>
    window.addEventListener('load', function() {
        document.getElementById('loading').classList.toggle('hidden2') ;
    });
</script>
					<div class="user-bar">
						<div class="back">
							<i class="zmdi zmdi-arrow-left"></i>
						</div>
						<div class="name">
							<img src="chatapp.png" style="width: 20px; border-radius:50%" />
							<span>Gappie</span>
						</div>
						<div class="actions" onclick="window.location.href=`{{ route ('chatprofile')}}`">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
								<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
							</svg>
						</div>
						<div class="actions attachment">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
								<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
								<path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
							</svg>
						</div>
						<div class="actions more">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
								<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
							</svg>
						</div>
					</div>
					<div class="navigation">
						<button onclick="plusDivs(-1)" style="font-weight: bold;">Chats</button>
						<button onclick="plusDivs(+1)" style="font-weight: bold;">Notificaties</button>
					</div>
					<div class="mySlides" style="background-color:white; height:465px;">
						<div class="form" id="chats" style="max-height: 465px; padding:0px; padding-top:10px;">

							@foreach($chats as $chat)
							@if($chat->id == 2)
							<script>
								if (localStorage.getItem('2') == null) {} else {

									let newChat = `<button id="kaas" class="chatButton"><div class="friend-drawer friend-drawer--onhover"><img class="profile-image" src="{{$chat->image}}" alt="" style="margin-top:5px;"><div class="text" style="position: relative; padding-left:20%; text-align:left;padding-bottom:3px;"><h4><strong>{{$chat->name}}</strong></h4>	<p class="text-muted">{{$chat->description}}</p></div></div></button>`;
									document.querySelector("#chats").insertAdjacentHTML("beforeend", newChat);
									document.getElementById("kaas").setAttribute("onclick", "window.location.href=`{{ route ('chat', $chat->id)}}`");
									if (localStorage.getItem('{{$chat->name}} 3') == 'false') {
										let noti = document.createElement("div");
										noti.setAttribute("class", "noti");
										noti.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/></svg>'



										document.getElementById("kaas").appendChild(noti);
									}
								}
							</script>
							@else
							@if($chat->id == 3)
							<script>
								if (localStorage.getItem('3') == null) {} else {

									let newChat = `<button id="kaas2" class="chatButton"><div class="friend-drawer friend-drawer--onhover"><img class="profile-image" src="{{$chat->image}}" alt="" style="margin-top:5px;"><div class="text" style="position: relative; padding-left:20%; text-align:left;padding-bottom:3px;"><h4><strong>{{$chat->name}}</strong></h4>	<p class="text-muted">{{$chat->description}}</p></div></div></button>`;
									document.querySelector("#chats").insertAdjacentHTML("beforeend", newChat);
									document.getElementById("kaas2").setAttribute("onclick", "window.location.href=`{{ route ('chat', $chat->id)}}`");
									if (localStorage.getItem('{{$chat->name}} 3') == 'false') {
										let noti = document.createElement("div");
										noti.setAttribute("class", "noti");
										noti.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/></svg>'



										document.getElementById("kaas2").appendChild(noti);
									}
								}
							</script>
							@else
							@if($chat->id == 4)
							<script>
								if (localStorage.getItem('4') == null) {} else {

									let newChat = `<button id="kaas3" class="chatButton"><div class="friend-drawer friend-drawer--onhover"><img class="profile-image" src="{{$chat->image}}" alt="" style="margin-top:5px;"><div class="text" style="position: relative; padding-left:20%; text-align:left;padding-bottom:3px;"><h4><strong>{{$chat->name}}</strong></h4>	<p class="text-muted">{{$chat->description}}</p></div></div></button>`;
									document.querySelector("#chats").insertAdjacentHTML("beforeend", newChat);
									document.getElementById("kaas3").setAttribute("onclick", "window.location.href=`{{ route ('chat', $chat->id)}}`");
									if (localStorage.getItem('{{$chat->name}} 3') == 'false') {
										let noti = document.createElement("div");
										noti.setAttribute("class", "noti");
										noti.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/></svg>'



										document.getElementById("kaas3").appendChild(noti);
									}
								}
							</script>
							@else
							<button class="chatButton" id="{{$chat->name}}" onclick="window.location.href=`{{ route ('chat', $chat->id)}}`">
								<div class=" friend-drawer friend-drawer--onhover">
									<img class="profile-image" onclick="window.location.href=`{{ route ('chatinfo', $chat->id)}}`" src="{{$chat->image}}" alt="" style="margin-top:5px;">
									<div class="text" style="position: relative; padding-left:20%; text-align:left;padding-bottom:3px;">
										<h4><strong>{{$chat->name}}</strong></h4>
										<p class="text-muted">{{$chat->description}}</p>
									</div>
								</div>
								<script>
									if (localStorage.getItem('{{$chat->name}} 3') == 'false') {
										let noti = document.createElement("div");
										noti.setAttribute("class", "noti");
										noti.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/></svg>'
										document.querySelector("#{{$chat->name}}").appendChild(noti);
									}
								</script>
							</button>
                            @endif
							@endif
							@endif
							@endforeach


						</div>
					</div>
					<div class="mySlides" style="background-color:white; height:465px;">
						<div class="form">
							<p id="error">notificaties worden hier ingeladen.</p>
							@foreach($notifications as $notification)
							@if($notification!=null)
							<script>document.querySelector('#error').classList.toggle('hide')</script>
							<button class="chatButton2" onclick="window.location.href=`{{url('/wiki')}}`;">
								<img class="profile-image" src="https://www.freeiconspng.com/uploads/status-warning-icon-png-29.png" alt="">
								<p style="cursor:pointer">{{$notification->message}}</p>
							</button>
							<hr>
@endif
							@endforeach
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
		<script>
			  navigator.serviceWorker.register('/sw.js').then(function(registration) {
  registration.addEventListener('updatefound', function() {
    // A new service worker is available, so trigger a page refresh
    window.location.reload();
  });
});
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