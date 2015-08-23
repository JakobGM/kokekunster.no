<!DOCTYPE html>
<html>
<head>
<script src="platform.js"></script>
<script src="linktracker.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kokekunster - Lenkeportalen for FYSMATere</title>

<!-- Specifies which css file to use -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/style.css">

  <!-- Favicon import -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/favicon.php";
     include_once($path);
  ?>

  <!-- Analytics, inkluderer </head> og <body> -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/analytics.php";
     include_once($path);
  ?>

  <!-- The logo and the site name -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/header.php";
     include_once($path);
  ?>

  <!-- Site navigation -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/navbar.php";
     include_once($path);
  ?>
  <script>
    document.getElementById('3semester').style.fontWeight = 'bold';
    var arkivLink = document.getElementById('arkiv');
      arkivLink.setAttribute('href', '/arkiv/3.Semester/')
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <div class="wrap content">
    <article>
      <a class="kategori" href="https://wiki.math.ntnu.no/tma4120/2015h/start"><img src="/img/magnifying-glass40.svg" alt="Graf"><h2>Matte 4K</h2></a>
      <ul>
        <li class="video"><a href="https://video.adm.ntnu.no/serier/4fe2d4d3dbe03">Videoforelesninger</a></li>
        <li class="pensum"><a href="https://wiki.math.ntnu.no/tma4120/2015h/tempoplan">Pensum</a></li>
        <li class="lf"><a href="/arkiv/3.Semester/TMA4120%20-%20Matte%204K/LF%20%28Høst%202014%29/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4120/2015h/eksamensoppgaver">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>
    <article>
      <a class="kategori" href="http://www.ivt.ntnu.no/ept/fag/tep4105/index.html"><img src="/img/poor.svg" alt="Kran"><h2>Fluidmekanikk</h2></a>
      <ul>
        <li class="video"><a href="http://www.ntnu.no/studier/emner/TFY4165#tab=multimedia">Videoforelesninger</a></li>
        <li class="pensum"><a href="http://www.ivt.ntnu.no/ept/fag/tep4105/Generell_beskrivelse_2015.pdf">Pensum</a></li>
        <li class="ov"><a href="http://www.ivt.ntnu.no/ept/fag/tep4105/oevinger/index.html">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/3.Semester/TEP4105%20-%20Fluidmekanikk/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="http://www.ivt.ntnu.no/ept/fag/tep4105/eksamener/index.html">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="http://web.phys.ntnu.no/~asudbo/TFY4165_2015/tfy4165.htm"><img src="/img/hot-drink22.svg" alt="Termos"><h2>Termisk fysikk</h2></a>
      <ul>
        <li class="video"><a href="https://video.adm.ntnu.no/serier/52b19b083c9fb">Videoforelesninger</a></li>
        <li class="stoffkartotek"><a href="http://home.phys.ntnu.no/brukdef/undervisning/tfy4165_lab/index.html">Lab</a></li>
        <li class="pensum"><a href="http://web.phys.ntnu.no/~asudbo/TFY4165_2015/framdrift.pdf">Pensum</a></li>
        <li class="ov"><a href="http://web.phys.ntnu.no/~asudbo/TFY4165_2015/tfy4165.htm#ovinger">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/3.Semester/TFY4165%20-%20Termisk%20Fysikk/LF%20%28V%C3%A5r%202015%29/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="http://home.phys.ntnu.no/instdef/arkiv/eksamen/fy1005/index.html">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning"><img src="/img/businessmen19.svg" alt="Leder"><h2>Teknologiledelse</h2></a>
      <ul>
        <li class="info"><a href="http://www.ntnu.no/studier/emner/TI%C3%984258/2014#tab=omEmnet">Om emnet</a></li>
        <li class="eks"><a href="https://dvikan.no/gamle-ntnu-eksamener/TI%C3%984258-Teknologiledelse/">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <!-- Felles ressurser -->
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/ressurser.php";
       include_once($path);
    ?>

  </div>

  <!-- Disclaimer -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/disclaimer.php";
     include_once($path);
  ?>

    </body>
    </html>
