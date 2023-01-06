<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Burnerphone') }}</title>

    <!-- Fonts -->
    <link rel="shortcut icon" type="image/x-icon" href="img/burnerphoneicon.png" />
    <meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
    if ('serviceWorker' in navigator && 'PushManager' in window) {
    Notification.requestPermission().then(function(permission) {
        // If the user grants permission, subscribe the user to push notifications
        if (permission === 'granted') {
            subscribeUserToPush();
        }
    });
}
</script>

    <!-- Scripts -->
</head>
<body>
    <nav class="navbar navbar-inverse bg-white navbar-toggleable-md" >
   <div class="container">
      <a class="navbar-brand" style="color:black;"href="#"><img src="https://i.ibb.co/Zzh16rv/burnerphone.png" style="width:30px;">{{ config('app.name', 'Burnerphone') }}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleCenteredNav" aria-controls="navbarsExampleCenteredNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse navbar-collapse justify-content-md-end" id="navbarsExampleCenteredNav">
         <ul class="navbar-nav">
         @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:black;"href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:black;"href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                       
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" style="color:black" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
               <div class="dropdown-menu" aria-labelledby="dropdown03">

                                    <a class="dropdown-item" style="color:black" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
       
               </div>
            </li>
            @endguest
         </ul>
      </div>
   </div>
</nav>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="app.css">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
