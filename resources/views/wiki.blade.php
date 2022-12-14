@extends('layouts.app')

@section('content')
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wikitext</title>
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
					<p class="roleNote">Dit artikel gaat over hoe je onze game speelt</p>

					<p>In </p>
					<p>Hierin zijn meerdere keuzes mogelijk. Zo kan jij op een manier antwoorden als hoe jij denkt dat het gepast is of wat ethisch verantwoord is als jij je in zou leven in je personage.</p>
					<p>Het doel van onze game is simpel: Wij willen professionals die in contact komen met jeugdcriminelen meer inlevingsvermogen geven door deze game voor hen te ontwikkelen.</p>
					<p>Te has amet modo perfecto, te eum mucius conclusionemque, mel te erat deterruisset. Duo ceteros phaedrum id, ornatus postulant in sea. His at autem inani volutpat. Tollit possit in pri, platonem persecuti ad vix, vel nisl albucius gloriatur no.</p>
				
					<h2>Paulo eirmod intellegam</h2>
					<h3>Percipit maiestatis sea eu</h3>
					<p>Ex quod meis per, ea paulo eirmod intellegam usu, eam te propriae fabellas. Nobis graecis has at, an eum audire impetus. Ius epicuri verterem ex, qui cu solet feugiat consetetur. Placerat apeirian et sea, nec wisi viderer definiebas ex, at eum oratio honestatis.</p>
					<p>Eum illum nulla graeci at, mea quis munere indoctum at. In sea partiendo hendrerit. Quaestio partiendo an eam, rebum vitae accumsan ius id. Duo at causae option.</p>
					<p>At persius imperdiet vis, ea elit atqui aperiri mei, percipit maiestatis sea eu. Has et partem hendrerit, vim cibo veniam aliquid an. No pri populo abhorreant, everti mandamus ne mea. Debitis forensibus suscipiantur ius cu. Ei per possim verterem, et iudico voluptatum eos.</p>
					<h3>Nam option recusabo</h3>
					<p>Te mel meis adhuc. Choro percipit mei eu, fabulas fuisset tibique ad sea, cu eos sint falli iracundia. Usu ex minimum corrumpit, postea dolores salutandi ne est, cu nam option recusabo reprehendunt. Prima vocibus argumentum ex usu. Nam te legere salutatus dissentiunt, his ei principes prodesset, est possit blandit ex.</p>
					<p>Pro no rebum timeam necessitatibus, et mnesarchum quaerendum has. Duo molestie interesset at. Vel ad legere populo. Sed ne saepe doming perpetua. Omnis iuvaret volumus an duo, qui duis audiam fabellas in.</p>
					<p>Te has amet modo perfecto, te eum mucius conclusionemque, mel te erat deterruisset. Duo ceteros phaedrum id, ornatus postulant in sea. His at autem inani volutpat. Tollit possit in pri, platonem persecuti ad vix, vel nisl albucius gloriatur no.</p>
					<h2>Sed rebum regione suscipit</h2>
					<p>Ea duo atqui incorrupte, sed rebum regione suscipit ex, mea ex dicant percipit referrentur. Dicat luptatum constituam vix ut. His vide platonem omittantur id, vel quis vocent an. Ad pro inani zril omnesque. Mollis forensibus sea an, vim habeo adipisci contentiones ad, tale autem graecis ne sit.</p>
				
				</div>
				<div class="pagefooter">
					This page was last edited on 03.01.2023 <!-- Please leave this link unchanged -->
					<div class="footerlinks">
					</div>
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
