<!DOCTYPE html>
<html>
<head>
<script src="/scripts/linktracker.js"></script>
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
     $path .= "/scripts/analytics.php";
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
    document.getElementById('4semester').style.fontWeight = 'bold';
    var arkivLink = document.getElementById('arkiv');
      arkivLink.setAttribute('href', '/arkiv/4.Semester/')
  </script>

  <!-- Hover effect on the "P.O.O.P." category -->
  <script>
    function hover(element) {
      element.setAttribute('src', '/img/poopHover_logo.svg');
    }
    function unhover(element) {
      element.setAttribute('src', '/img/poop_logo.svg');
    }
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <div class="wrap content">

    <article>
      <a class="kategori" href="https://wiki.math.ntnu.no/tma4320/2016v/start"><img src="/img/nummat2_logo.svg" alt="Kalkulator"><h2>NumMat</h2></a>
      <ul>
        <li class="info"><a href="http://www.ntnu.no/studier/emner/TMA4320#tab=omEmnet">Læringsmål</a></li>
        <li class="fp"><a href="https://wiki.math.ntnu.no/tma4320/2016v/start#forelesninger_plan_med_forbehold_om_endringer">Framdriftsplan</a></li>
        <li class="ov"><a href="https://wiki.math.ntnu.no/tma4320/2016v/start#ovinger">Øvingsoppgaver</a></li>
        <li class="ov"><a href="https://wiki.math.ntnu.no/tma4320/2016v/start#prosjekter">Prosjekter</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="http://web.phys.ntnu.no/~stovneng/TFY4215_2016/tfy4215.htm"><img src="/img/kvante_logo.svg" alt="Kalkulator"><h2>Kvantefysikk</h2></a>
      <ul>
        <li class="ov"><a href="http://web.phys.ntnu.no/~stovneng/TFY4215_2016/tfy4215.htm#ovinger">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/4.Semester/TFY4215%20-%20Innf%C3%B8ring%20i%20kvantefysikk/"><b>LF</b> til øvingsoppgavene</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning"><img src="/img/poop_logo.svg" alt="Kalkulator" onmouseover="hover(this);" onmouseout="unhover(this);"><h2>P.O.O.P.</h2></a>
      <ul>
        <li class="info"><a href="http://www.idi.ntnu.no/emner/tdt4102/">Om emnet</a></li>
        <li class="ov"><a href="/arkiv/4.Semester/TDT4102%20-%20Prosedyre-%20og%20objektorientert%20programmering/%C3%98vinger%20%28V%C3%A5r%202016%29/">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/4.Semester/TDT4102%20-%20Prosedyre-%20og%20objektorientert%20programmering/"><b>LF</b> til øvingsoppgavene</a></li>
      </ul>
    </article>

    <article>
      <a class="kategori" href="https://wiki.math.ntnu.no/tma4245/2016v/parallell3"><img src="/img/statistikk_logo.svg" alt="Kalkulator"><h2>Statistikk</h2></a>
      <ul>
        <li class="video"><a href="https://wiki.math.ntnu.no/tma4245/2016v/videoforelesningv2016">Videoforelesninger</a></li>
        <li class="fp"><a href="https://wiki.math.ntnu.no/tma4245/2016v/fremdriftsplan">Framdriftsplan</a></li>
        <li class="pensum"><a href="https://wiki.math.ntnu.no/tma4245/2016v/pensum">Pensum</a></li>
        <li class="ov"><a href="https://ntnu.mapleta.com/ntnu/login/login.do">Maple T.A.</a></li>
        <li class="lf"><a href="/arkiv/4.Semester/TMA4245%20-%20Statistikk/Maple%20T.A.%20%28V%C3%A5r%202016%29/"><b>LF</b> til Maple T.A.</a></li>
        <li class="ov"><a href="https://wiki.math.ntnu.no/tma4245/2016v/ovinger">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/4.Semester/TMA4245%20-%20Statistikk/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4245/tema/eksamenssett">Eksamenssett (med <b>LF</b>)</a></li>
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
