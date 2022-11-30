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
    <div class="icons">
 
               <div class="app" style="cursor:pointer">Bankoe</div>
               <div class="app" style="cursor:pointer" onclick="window.location.href=`{{route('gappie')}}`;">Gappie</div>
               <div class="app" style="cursor:pointer" onclick="window.location.href=`{{url('/wiki')}}`;">Wikitext</div>
               <div class="app" style="cursor:pointer"></div>
               
            </div>
         
      </div>
    </div>
    <div class="footer">
      <div class="btn-burger"></div>
      <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home" style="cursor:pointer"></div>
      <div class="btn-back"></div>
    </div>
  </div>
</body>

</html>
@endsection
