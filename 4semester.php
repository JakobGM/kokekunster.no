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
      arkivLink.setAttribute('href', '/arkiv/4.Semester/')
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <p class="underkonstruksjon"> Denne siden er enda ikke ferdigutviklet. Hvis det er noen som trenger en side for dette semesteret, så er det bare å ta kontakt <a href="mailto:kokekunster@gmail.com?Subject=Ønske%20om%20ekstra%20semester" target="_top">her</a>.</p>

  <div class="wrap content">

    <article>
      <a class="kategori" href="https://wiki.math.ntnu.no/tma4215/2014h/start"><img src="/img/nummat_logo.svg" alt="Kalkulator"><h2>NumMat?</h2></a>
      <ul>
        <li class="info"><a href="/ressurser/NumMatInfo.pdf">Om emnet (Støvneng)</a></li>
        <li class="pensum"><a href="https://wiki.math.ntnu.no/tma4215/2014h/curriculum">Mulig pensum?</a></li>
        <li class="ov"><a href="https://wiki.math.ntnu.no/tma4215/2014h/project">Eksempel på prosjektoppgave?</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4215/2014h/assignments#old_exams">Lignende eksamenssett (med <b>LF</b>)?</a></li>
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
