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
    document.getElementById('1semester').style.fontWeight = 'bold';
    var arkivLink = document.getElementById('arkiv');
      arkivLink.setAttribute('href', '/arkiv/1.Semester/')
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <div class="wrap content">
    <article>
      <a class="kategori" href="https://wiki.math.ntnu.no/tma4100/2015h/start"><img src="/img/matte1_logo.svg" alt="Maclaurin"><h2>Matte 1</h2></a>
      <ul>
        <li class="video"><a href="https://video.adm.ntnu.no/serier/520397cf6166f">Videoforelesninger</a></li>
        <li class="fp"><a href="https://wiki.math.ntnu.no/tma4100/2015h/fremdriftsplan">Framdriftsplan</a></li>
        <li class="formelark"><a href="https://wiki.math.ntnu.no/_media/tma4100/2014h/formelark_eksamen_crop.pdf">Formelark</a></li>
        <li class="ov"><a href="https://place35.placementtester.com/ntnu/login/login.do">Maple T.A.</a></li>
        <li class="ov"><a href="https://ovsys.math.ntnu.no/">Skriftlige innleveringer</a></li>
        <li class="lf"><a href="http://rjavadi.iut.ac.ir/sites/rjavadi.iut.ac.ir/files//files_course/robert_a._adams_christopher_essex_calculus_a_cbookfi.org_.pdf"><b>LF</b> til Adams</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4100/2014h/eksamensoppgaver">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>
    <article>
      <a class="kategori" href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning"><img src="/img/exphil_logo.svg" alt="Sovende student"><h2>Exphil</h2></a>
      <ul>
        <li class="pensum"><a href="http://www.ntnu.no/exphil/exph0004">Pensum</a></li>
        <li class="ov"><a href="/arkiv/1.Semester/EXPH0004%20-%20Exphil/%C3%98vingsoppgaver/">Øvingsoppgaver</a></li>
        <li class="eks"><a href="https://www.ntnu.no/exphil/sensurveiledning2">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="http://web.phys.ntnu.no/~stovneng/TFY4145_2015/tfy4145.htm"><img src="/img/mekfys_logo.svg" alt="Impulsbevarelse"><h2>Mekanisk fysikk</h2></a>
      <ul>
        <li class="video"><a href="https://video.adm.ntnu.no/serier/503b51b184bd0">Videoforelesninger</a></li>
        <li class="fp"><a href="http://web.phys.ntnu.no/~stovneng/TFY4145_2015/framdrift.pdf">Framdriftsplan</a></li>
        <li class="formelark"><a href="http://web.phys.ntnu.no/~stovneng/TFY4145_2015/formler_mekfys.pdf">Formelark</a></li>
        <li class="ov"><a href="http://web.phys.ntnu.no/~stovneng/TFY4145_2015/tfy4145.htm#ovinger">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/1.Semester/TFY4145%20-%20Mekanisk%20Fysikk/LF%20%28H%C3%B8st%202014%29/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="http://home.phys.ntnu.no/instdef/arkiv/eksamen/tfy4145/index.html">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="https://www.ntnu.no/wiki/display/itgk/Forside"><img src="/img/itgk_logo.svg" alt="Binærmaskin"><h2>ITGK</h2></a>
      <ul>
        <li class="pensum"><a href="https://www.ntnu.no/wiki/display/itgk/Pensum">Pensum</a></li>
        <li class="lf"><a href="http://kokekunster.no/arkiv/1.Semester/TDT4105%20-%20ITGK/%C3%98vinger%20%2B%20LF%20%28H%C3%B8st%202015%29/www.ntnu.no/wiki/pages/viewpage.action%3FpageId=83233999.html"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="quiz"><a href="https://overflow.no/ohsnap/subject/TDT4110/">Teori quiz</a></li>
        <li class="eks"><a href="https://www.ntnu.no/wiki/display/tdt4105/Matlab+eksamensoppgaver">Eksamenssett (med <b>LF</b>)</a></li>
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
