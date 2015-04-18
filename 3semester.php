<!DOCTYPE html>
<html>
<head>
<script src="platform.js"></script>
<script src="linktracker.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kokekunster</title>

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
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <div class="wrap content">
    <article>
      <a class="kategori" href="https://wiki.math.ntnu.no/tma4100/2014h/start"><img src="/img/magnifying-glass40.svg" alt="Graf"><h2>Matte 4K</h2></a>
      <ul>
        <li class="pensum"><a href="https://wiki.math.ntnu.no/tma4100/2014h/fremdriftsplan">Pensum</a></li>
        <li class="lf"><a href="http://folk.ntnu.no/grevsgar/Matte%201%20og%202/Calculus%20A%20Complete%20Course%206th%20Ed.%20Instructors%20Solution%20Manual.pdf"><b>LF</b> til Adams</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4100/2014h/eksamensoppgaver">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>
    <article>
      <a class="kategori" href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning"><img src="/img/poor.svg" alt="Sovende student"><h2>Fluidmekanikk</h2></a>
      <ul>
        <li class="pensum"><a href="http://www.ntnu.no/exphil/exph0004">Pensum</a></li>
        <li class="ov"><a href="/arkiv/1.Semester/EXPH0004%20-%20Exphil/%C3%98vingsoppgaver/">Øvingsoppgaver</a></li>
        <li class="eks"><a href="https://www.ntnu.no/exphil/sensurveiledning2">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="http://web.phys.ntnu.no/~stovneng/TFY4145_2014/tfy4145.htm"><img src="/img/Newton_iteration.svg" alt="Newtons metode" width="80px" height="80px"><h2>NumMat</h2></a>
      <ul>
        <li class="pensum"><a href="http://web.phys.ntnu.no/~stovneng/TFY4145_2014/framdrift.pdf">Pensum</a></li>
        <li class="ov"><a href="http://web.phys.ntnu.no/~stovneng/TFY4145_2014/tfy4145.htm#ovinger">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/1.Semester/TFY4145%20-%20Mekanisk%20Fysikk/LF%20%28H%C3%B8st%202014%29/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="http://home.phys.ntnu.no/instdef/arkiv/eksamen/tfy4145/index.html">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="https://itgk.idi.ntnu.no/"><img src="/img/businessmen19.svg" alt="Leder"><h2>Teknologiledelse</h2></a>
      <ul>
        <li class="pensum"><a href="https://itgk.idi.ntnu.no/faginfo/pensum-itgk-2014.pdf">Pensum</a></li>
        <li class="lf"><a href="/arkiv/1.Semester/TDT4105%20-%20ITGK/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="https://www.ntnu.no/wiki/display/idiemner/Matlab+eksamensoppgaver">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <!-- Felles ressurser -->
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/ressurser.php";
       include_once($path);
    ?>

  </div>

    </body>
    </html>
