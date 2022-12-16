
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
              <div class="name">
                <span>Gappie</span>
              </div>
              <div class="actions">
			  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>              </div>
<div class="actions attachment">
			  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>   </div>
<div class="actions more">
			  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>              </div>
</div>
<div class="navigation">
			<button onclick="plusDivs(-1)">Chats</button>
			<button onclick="plusDivs(+1)">Notificaties</button>
</div>
<div class="mySlides">
				<div class="form">
				<div class="search-box">
		  <div class="input-wrapper">
			<input placeholder="Zoek hier" type="text">
		  </div>
		</div>
					@foreach($chats as $chat)
					<button class="chatButton" onclick=`${window.location.href="{{ route ('chat', $chat->id)}}"}`>
						<div class=" friend-drawer friend-drawer--onhover">
							<img class="profile-image" src="{{$chat->image}}" alt="">
							<div class="text" >
								<h4><strong>{{$chat->name}}</strong></h4>
								<p class="text-muted">{{$chat->description}}</p>
							</div>
						</div>

					</button>
					<hr>
					
					@endforeach


				</div>
			</div>
			<div class="mySlides">
				<div class="form">
					@foreach($notifications as $notification)
					<button class="chatButton2" onclick="window.location.href=`{{url('/wiki')}}`;">
					<img class="profile-image" src="https://www.freeiconspng.com/uploads/status-warning-icon-png-29.png" alt="">
					<p style="cursor:pointer">{{$notification->message}}</p>
</button>
<hr>

					@endforeach
				</div>
			</div>
			
	</div>
		</div>
		<div class="footer">
      <div class="btn-burger"></div>
      <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div>
      <div class="btn-back"     onclick="window.history.go(-1); return false;"
></div>
    </div>
  </div>
		<script>
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
