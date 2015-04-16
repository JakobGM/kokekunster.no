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
    document.getElementById('1semester').style.fontWeight = 'bold';
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <div class="wrap content">
    <article>
      <a class="kategori" href="https://wiki.math.ntnu.no/tma4100/2014h/start"><img src="/img/maclaurin.svg" alt="Maclaurin"><h2>Matte 1</h2></a>
      <ul>
        <li class="pensum"><a href="https://wiki.math.ntnu.no/tma4100/2014h/fremdriftsplan">Pensum</a></li>
        <li class="lf"><a href="http://folk.ntnu.no/grevsgar/Matte%201%20og%202/Calculus%20A%20Complete%20Course%206th%20Ed.%20Instructors%20Solution%20Manual.pdf"><b>LF</b> til Adams</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4100/2014h/eksamensoppgaver">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>
    <article>
      <a class="kategori" href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning"><img src="/img/student45.svg" alt="Sovende student"><h2>Exphil</h2></a>
      <ul>
        <li class="pensum"><a href="http://www.ntnu.no/exphil/exph0004">Pensum</a></li>
        <li class="ov"><a href="/arkiv/1.Semester/EXPH0004%20-%20Exphil/%C3%98vingsoppgaver/">Øvingsoppgaver</a></li>
        <li class="eks"><a href="https://www.ntnu.no/exphil/sensurveiledning2">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="http://web.phys.ntnu.no/~stovneng/TFY4145_2014/tfy4145.htm"><img src="/img/physics.svg" alt="Impulsbevarelse"><h2>Mekanisk fysikk</h2></a>
      <ul>
        <li class="pensum"><a href="http://web.phys.ntnu.no/~stovneng/TFY4145_2014/framdrift.pdf">Pensum</a></li>
        <li class="ov"><a href="http://web.phys.ntnu.no/~stovneng/TFY4145_2014/tfy4145.htm#ovinger">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/1.Semester/TFY4145%20-%20Mekanisk%20Fysikk/LF%20%28H%C3%B8st%202014%29/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="http://home.phys.ntnu.no/instdef/arkiv/eksamen/tfy4145/index.html">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="https://itgk.idi.ntnu.no/"><img src="/img/binary10.svg" alt="Binærmaskin"><h2>ITGK</h2></a>
      <ul>
        <li class="pensum"><a href="https://itgk.idi.ntnu.no/faginfo/pensum-itgk-2014.pdf">Pensum</a></li>
        <li class="lf"><a href="/arkiv/1.Semester/TDT4105%20-%20ITGK/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="https://www.ntnu.no/wiki/display/idiemner/Matlab+eksamensoppgaver">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="http://instabart.no/"><img src="/img/three115.svg" alt="Tannhjul"><h2>Ressurser</h2></a>
      <ul>
        <li class="itl"><a href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning">itslearning</a></li>
        <li class="epost"><a href="https://webmail.stud.ntnu.no/">Studentepost</a></li>
        <li class="software"><a href="https://software.ntnu.no/">Programvare</a></li>
        <li class="farm"><a href="https://farm.ntnu.no/RDWeb/Pages/en-US/login.aspx?ReturnUrl=/RDWeb/Pages/en-US/Default.aspx">Programfarm</a></li>
        <li class="ibok"><a href="https://ibok.no/">iBok.no</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="https://www.nabla.no"><img src="/img/nabla.svg" alt="Nabla" class="desaturate"><h2>Fritid</h2></a>
      <ul>
        <li class="fb"><a href="https://www.facebook.com/groups/2248934869/?fref=ts">FYSMATs Facebook-gruppe</a></li>
        <li class="middag"><a href="https://www.sit.no/en/middag/realfag">Realfagskantina</a></li>
        <li class="bartebuss"><a href="http://bartebuss.no/">Bartebuss</a></li>
        <li class="samfundet"><a href="http://whatnow.no/events/kategori/by/trondheim/">Konserter i Trondheim</a></li>
      </ul>
    </article>

  </div>

    </body>
    </html>
