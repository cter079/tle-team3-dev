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
    <div class="phone">
        <img class="wrapper" src="https://media1.popsugar-assets.com/files/thumbor/l0S8NDGEb_M7mTeOvh2xXP9H2aI/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2020/09/23/911/n/1922507/33fff363faf1f015_eberhard-grossgasteiger-jCL98LGaeoE-unsplash/i/Pastel-Sky-iPhone-Wallpaper.jpg" />
        <button class="home-button"  onclick="window.location.href='index.php';"></button>

        <button class="appy-button"><img class="gAppy" src="https://i.postimg.cc/Bbvv7jf4/gappie.png"/><a href="{{ url('/gappie') }}">gAppie</a></button>
    </div>
</body>

</html>
@endsection
