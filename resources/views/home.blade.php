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

        <button class="appy-button"><img class="gAppy" src="https://i.postimg.cc/Bbvv7jf4/gappie.png"/><a href="{{ url('/gappie') }}">gAppie</a></button>
    </div>
    <div class="footer">
      <div class="btn-burger"></div>
      <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home"></div>
      <div class="btn-back"></div>
    </div>
  </div>
</body>

</html>
@endsection
