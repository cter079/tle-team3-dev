@extends('layouts.app')

@section('content')
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tutorial</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href="http://html5-templates.com/" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="app.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
<div class="form3">
<div class="wrapAll clearfix">
	
			
    </div>
    <div class="mainsection">
        <div class="headerLinks">
        </div>
        <div class="tabs clearfix">
            <div class="tabsLeft">
                <ul>
                </ul>
            </div>
         
        </div>
			
				<div class="article">
					<h1>BurnerPhone</h1>
					<p class="siteSub">Van TLE Team 3</p>
					<p class="roleNote">Dit artikel gaat over hoe onze game werkt</p>

					<div class="articleRight">
						<div class="articleRightInner">
							<img src="img/burnerphone.png" alt="pencil" />
						</div>
						Dit is ons <a href="">logo</a>
					</div>
					<p>Burnerphone is een serious game waar jij de uitdaging krijgt om op de juiste manier te antwoorden op berichten van jeugdcriminelen.</p>
					<p>Hierin zijn meerdere keuzes mogelijk. Zo kan jij op een manier antwoorden als hoe jij denkt dat het gepast is of wat ethisch verantwoord is als jij je in zou leven in je personage.</p>
					<p>Het doel van onze game is simpel: Wij willen professionals die in contact komen met jeugdcriminelen meer inlevingsvermogen geven door deze game voor hen te ontwikkelen.</p>
					<p>In deze game krijg je notificaties zoals je net hebt gekregen. Deze beschrijven exact wat de gevolgen zijn van de door jou gekozen chatbericht in Gappie. Naast deze chatapp is er ook een bankieren app: 'Bankoe'. Deze app houdt jouw saldo bij en schrijft automatisch geld af nadat jij in de chatapp bijvoorbeeld aangeeft dat je naar een feestje gaat. Hiervan krijg je ook een notificatie.</p>
                    <p>Voor je begint met chatten is het belangrijk om de achtergrondinformatie van de personage waarmee je wilt chatten te lezen. Zo ken je hem/haar beter en dat kan positieve invloed hebben op de manier waarop jij antwoordt. Staat jouw saldo op nul? Dan is het game over. Er zijn verder nog meerdere manieren om 'game over' te gaan, maar dat houden wij liever geheim. Wil je opnieuw spelen? Klik vanaf het homescherm op de settings en daar staat een knop. Veel speelplezier!</p>
					
					
				<div class="pagefooter">
					This page was last edited on 03.01.2023

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
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="script.js"></script>


    </body>
</html>

@endsection
